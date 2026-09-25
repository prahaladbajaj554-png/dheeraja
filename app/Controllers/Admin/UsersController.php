<?php
namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Core\Session;
use App\Core\Database;
use App\Models\User;
use App\Models\UserSubscription;
use App\Models\SubscriptionPlan;
use App\Models\AdminLog;
use App\Helpers\SecurityHelper;
use App\Helpers\MailerHelper;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $search = trim($request->get('search', ''));
        $gender = $request->get('gender', '');
        $status = $request->get('status', '');
        $isVip  = $request->get('is_vip', '');
        $isKyc  = $request->get('is_kyc', '');
        $page   = max(1, (int)$request->get('page', 1));
        $limit  = 15;

        $whereClauses = ["u.role = 'user'"];
        $params = [];

        if (!empty($search)) {
            $whereClauses[] = "(u.matrimony_id LIKE :s OR u.email LIKE :s OR u.phone LIKE :s OR p.first_name LIKE :s OR p.last_name LIKE :s OR ad.caste LIKE :s)";
            $params['s'] = "%{$search}%";
        }

        if (!empty($gender)) {
            $whereClauses[] = "p.gender = :gender";
            $params['gender'] = $gender;
        }

        if (!empty($status)) {
            $whereClauses[] = "u.status = :status";
            $params['status'] = $status;
        }

        if ($isVip !== '') {
            $whereClauses[] = "u.is_vip = :is_vip";
            $params['is_vip'] = (int)$isVip;
        }

        if ($isKyc !== '') {
            $whereClauses[] = "u.is_kyc_verified = :is_kyc";
            $params['is_kyc'] = (int)$isKyc;
        }

        $whereSql = implode(' AND ', $whereClauses);

        // Count total
        $countSql = "SELECT COUNT(DISTINCT u.id) as cnt 
                     FROM `users` u 
                     LEFT JOIN `profiles` p ON p.user_id = u.id 
                     LEFT JOIN `astrology_details` ad ON ad.user_id = u.id 
                     WHERE {$whereSql}";
        $total = (int)Database::fetchOne($countSql, $params)['cnt'];
        $totalPages = (int)ceil($total / $limit);
        $offset = ($page - 1) * $limit;

        // Fetch records
        $sql = "SELECT u.id, u.matrimony_id, u.email, u.phone, u.status, u.is_vip, u.is_kyc_verified, u.created_at,
                       p.first_name, p.last_name, p.gender, p.dob, p.current_city, p.current_state,
                       ec.occupation, ec.annual_income_inr, ad.caste, ad.gotra,
                       sp.title as plan_title, us.expires_at as plan_expires_at
                FROM `users` u
                LEFT JOIN `profiles` p ON p.user_id = u.id
                LEFT JOIN `education_careers` ec ON ec.user_id = u.id
                LEFT JOIN `astrology_details` ad ON ad.user_id = u.id
                LEFT JOIN `user_subscriptions` us ON us.id = (
                    SELECT MAX(id) FROM `user_subscriptions` WHERE user_id = u.id AND status = 'active' AND expires_at > NOW()
                )
                LEFT JOIN `subscription_plans` sp ON sp.id = us.plan_id
                WHERE {$whereSql}
                ORDER BY u.id DESC
                LIMIT {$limit} OFFSET {$offset}";

        $users = Database::fetchAll($sql, $params);

        $this->view('admin/users/index', [
            'page_title'   => 'Manage Members & Profiles',
            'users'        => $users,
            'total'        => $total,
            'page'         => $page,
            'totalPages'   => $totalPages,
            'search'       => $search,
            'gender'       => $gender,
            'status'       => $status,
            'isVip'        => $isVip,
            'isKyc'        => $isKyc
        ]);
    }

    public function add(Request $request)
    {
        $plans = SubscriptionPlan::getActivePlans();
        $this->view('admin/users/add', [
            'page_title' => 'Add New Matrimony Member',
            'plans'      => $plans
        ]);
    }

    public function create(Request $request)
    {
        $email     = trim($request->post('email', ''));
        $phone     = trim($request->post('phone', ''));
        $firstName = trim($request->post('first_name', ''));
        $lastName  = trim($request->post('last_name', ''));
        $gender    = $request->post('gender', 'male');
        $dob       = $request->post('dob', '1995-01-01');
        $password  = $request->post('password', 'Dheeraja@2026');
        $caste     = $request->post('caste', 'General');
        $city      = $request->post('city', 'Jaipur');
        $state     = $request->post('state', 'Rajasthan');
        $grantVip  = $request->post('grant_vip', 1);

        if (empty($email) || empty($phone) || empty($firstName)) {
            $this->flash('error', 'First name, email, and phone number are required.');
            Response::redirect('/admin/users/add');
        }

        // Check duplicates
        $exists = Database::fetchOne("SELECT id FROM `users` WHERE `email` = :e OR `phone` = :p", ['e' => $email, 'p' => $phone]);
        if ($exists) {
            $this->flash('error', 'A member with this email or phone is already registered.');
            Response::redirect('/admin/users/add');
        }

        $matrimonyId = SecurityHelper::generateMatrimonyId();
        $hash = SecurityHelper::hashPassword($password);

        // 1. Insert User
        Database::query("INSERT INTO `users` (`matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_vip`, `email_verified_at`, `phone_verified_at`) VALUES (:mid, :email, :phone, :hash, 'user', 'active', :vip, NOW(), NOW())", [
            'mid'   => $matrimonyId,
            'email' => $email,
            'phone' => $phone,
            'hash'  => $hash,
            'vip'   => $grantVip ? 1 : 0
        ]);
        $userId = (int)Database::lastInsertId();

        // 2. Insert Profile
        Database::query("INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `current_city`, `current_state`, `about_me`) VALUES (:uid, :fn, :ln, :g, :dob, :city, :state, :about)", [
            'uid'   => $userId,
            'fn'    => $firstName,
            'ln'    => $lastName,
            'g'     => $gender,
            'dob'   => $dob,
            'city'  => $city,
            'state' => $state,
            'about' => trim($request->post('about_me', 'Looking for an understanding life partner.'))
        ]);

        // 3. Insert Education & Career
        Database::query("INSERT INTO `education_careers` (`user_id`, `highest_education`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES (:uid, :edu, :emp, :occ, :inc, :wcity)", [
            'uid'   => $userId,
            'edu'   => $request->post('highest_education', 'Graduate'),
            'emp'   => $request->post('employed_in', 'private_sector'),
            'occ'   => $request->post('occupation', 'Professional'),
            'inc'   => (int)($request->post('annual_income_inr', 800000)),
            'wcity' => $city
        ]);

        // 4. Insert Astrology
        Database::query("INSERT INTO `astrology_details` (`user_id`, `religion`, `caste`, `sub_caste`, `gotra`, `rashi`, `manglik`) VALUES (:uid, 'Hindu', :caste, :subcaste, :gotra, :rashi, :manglik)", [
            'uid'      => $userId,
            'caste'    => $caste,
            'subcaste' => $request->post('sub_caste', ''),
            'gotra'    => $request->post('gotra', ''),
            'rashi'    => $request->post('rashi', 'Mesh'),
            'manglik'  => $request->post('manglik', 'no')
        ]);

        // 5. Insert Family Details
        Database::query("INSERT INTO `family_details` (`user_id`, `father_name`, `mother_name`, `family_type`, `family_values`) VALUES (:uid, :fn, :mn, :ft, :fv)", [
            'uid' => $userId,
            'fn'  => $request->post('father_name', ''),
            'mn'  => $request->post('mother_name', ''),
            'ft'  => $request->post('family_type', 'nuclear'),
            'fv'  => $request->post('family_values', 'moderate')
        ]);

        // 6. Grant VIP if checked
        if ($grantVip) {
            $vipPlan = SubscriptionPlan::getVipProPlan();
            $planId = $vipPlan ? $vipPlan['id'] : 3;
            $admin = Session::getAdmin();
            UserSubscription::grantPlan($userId, $planId, 90, true, $admin['id'] ?? 1, 'Manual admin creation with VIP');
        }

        AdminLog::log(Session::getAdmin()['id'] ?? 1, 'CREATE_USER', 'users', $userId, ['matrimony_id' => $matrimonyId, 'email' => $email]);
        $this->flash('success', "Member [{$firstName} {$lastName} - {$matrimonyId}] created successfully!");
        Response::redirect('/admin/users/view/' . $userId);
    }

    public function show(Request $request)
    {
        $id = (int)$request->param('id');
        $user = User::findWithProfile($id);

        if (!$user) {
            $this->flash('error', 'Member not found.');
            Response::redirect('/admin/users');
        }

        // Subscriptions History
        $subscriptions = Database::fetchAll("SELECT us.*, sp.title, sp.badge_name 
                                             FROM `user_subscriptions` us 
                                             JOIN `subscription_plans` sp ON sp.id = us.plan_id 
                                             WHERE us.user_id = :uid 
                                             ORDER BY us.id DESC", ['uid' => $id]);

        // Photos
        $photos = Database::fetchAll("SELECT * FROM `user_photos` WHERE `user_id` = :uid ORDER BY `is_profile_picture` DESC", ['uid' => $id]);

        // KYC Docs
        $kycDocs = Database::fetchAll("SELECT * FROM `kyc_documents` WHERE `user_id` = :uid ORDER BY `id` DESC", ['uid' => $id]);

        // Interests Received & Sent
        $interestsReceived = Database::fetchAll("SELECT i.*, u.matrimony_id, p.first_name, p.last_name 
                                                 FROM `interests` i 
                                                 JOIN `users` u ON u.id = i.sender_id 
                                                 JOIN `profiles` p ON p.user_id = u.id 
                                                 WHERE i.receiver_id = :uid", ['uid' => $id]);

        $this->view('admin/users/view', [
            'page_title'        => "Member Dossier: {$user['first_name']} {$user['last_name']} ({$user['matrimony_id']})",
            'user'              => $user,
            'subscriptions'     => $subscriptions,
            'photos'            => $photos,
            'kycDocs'           => $kycDocs,
            'interestsReceived' => $interestsReceived
        ]);
    }

    public function edit(Request $request)
    {
        $id = (int)$request->param('id');
        $user = User::findWithProfile($id);

        if (!$user) {
            $this->flash('error', 'Member not found.');
            Response::redirect('/admin/users');
        }

        $this->view('admin/users/edit', [
            'page_title' => "Edit Member: {$user['first_name']} {$user['last_name']}",
            'user'       => $user
        ]);
    }

    public function update(Request $request)
    {
        $id = (int)$request->param('id');
        $user = User::find($id);
        if (!$user) {
            $this->flash('error', 'Member not found.');
            Response::redirect('/admin/users');
        }

        $email = trim($request->post('email', $user['email']));
        $phone = trim($request->post('phone', $user['phone']));
        $status = $request->post('status', $user['status']);
        $isKyc = (int)$request->post('is_kyc_verified', $user['is_kyc_verified']);

        Database::query("UPDATE `users` SET `email` = :e, `phone` = :p, `status` = :st, `is_kyc_verified` = :kyc WHERE `id` = :id", [
            'e'   => $email,
            'p'   => $phone,
            'st'  => $status,
            'kyc' => $isKyc,
            'id'  => $id
        ]);

        Database::query("UPDATE `profiles` SET `first_name` = :fn, `last_name` = :ln, `dob` = :dob, `marital_status` = :ms, `height_cm` = :h, `current_city` = :city, `current_state` = :state, `about_me` = :about WHERE `user_id` = :uid", [
            'fn'    => $request->post('first_name', ''),
            'ln'    => $request->post('last_name', ''),
            'dob'   => $request->post('dob', '1995-01-01'),
            'ms'    => $request->post('marital_status', 'never_married'),
            'h'     => (int)$request->post('height_cm', 165),
            'city'  => $request->post('current_city', ''),
            'state' => $request->post('current_state', ''),
            'about' => $request->post('about_me', ''),
            'uid'   => $id
        ]);

        Database::query("UPDATE `education_careers` SET `highest_education` = :edu, `occupation` = :occ, `annual_income_inr` = :inc WHERE `user_id` = :uid", [
            'edu' => $request->post('highest_education', ''),
            'occ' => $request->post('occupation', ''),
            'inc' => (int)$request->post('annual_income_inr', 0),
            'uid' => $id
        ]);

        Database::query("UPDATE `astrology_details` SET `caste` = :caste, `sub_caste` = :sc, `gotra` = :gotra, `manglik` = :m WHERE `user_id` = :uid", [
            'caste' => $request->post('caste', ''),
            'sc'    => $request->post('sub_caste', ''),
            'gotra' => $request->post('gotra', ''),
            'm'     => $request->post('manglik', 'no'),
            'uid'   => $id
        ]);

        AdminLog::log(Session::getAdmin()['id'] ?? 1, 'UPDATE_USER', 'users', $id, ['email' => $email]);
        $this->flash('success', "Member details updated successfully.");
        Response::redirect('/admin/users/view/' . $id);
    }

    public function grantVipForm(Request $request)
    {
        $id = (int)$request->param('id');
        $user = User::findWithProfile($id);

        if (!$user) {
            $this->flash('error', 'Member not found.');
            Response::redirect('/admin/users');
        }

        $plans = SubscriptionPlan::getActivePlans();

        $this->view('admin/users/grant-vip', [
            'page_title' => "Grant VIP Access: {$user['first_name']} {$user['last_name']}",
            'user'       => $user,
            'plans'      => $plans
        ]);
    }

    public function grantVip(Request $request)
    {
        $id = (int)$request->param('id');
        $user = User::findWithProfile($id);
        if (!$user) {
            $this->flash('error', 'Member not found.');
            Response::redirect('/admin/users');
        }

        $planId = (int)$request->post('plan_id', 3);
        $durationDays = (int)$request->post('duration_days', 90);
        $notes = trim($request->post('notes', 'Direct VIP grant by Master Admin'));
        $sendEmail = (bool)$request->post('send_email', false);

        $plan = SubscriptionPlan::find($planId);
        $planTitle = $plan ? $plan['title'] : 'Royal VIP Pro';

        $admin = Session::getAdmin();
        UserSubscription::grantPlan($id, $planId, $durationDays, true, $admin['id'] ?? 1, $notes);

        if ($sendEmail) {
            MailerHelper::sendFreeVipGranted($user, $planTitle, $durationDays);
        }

        $this->flash('success', "👑 VIP Pro plan granted to {$user['first_name']} for {$durationDays} days!");
        Response::redirect('/admin/users/view/' . $id);
    }

    public function revokeVip(Request $request)
    {
        $id = (int)$request->param('id');
        $sub = UserSubscription::findBy('user_id', $id);
        $admin = Session::getAdmin();

        if ($sub) {
            UserSubscription::revokePlan($sub['id'], $admin['id'] ?? 1, 'Revoked by Master Admin');
        }

        Database::query("UPDATE `users` SET `is_vip` = 0 WHERE `id` = :id", ['id' => $id]);
        $this->flash('warning', "VIP privileges have been revoked for this member.");
        Response::redirect('/admin/users/view/' . $id);
    }

    public function toggleStatus(Request $request)
    {
        $id = (int)$request->param('id');
        $status = $request->post('status', 'active');
        $validStatuses = ['active', 'suspended', 'banned'];

        if (in_array($status, $validStatuses)) {
            Database::query("UPDATE `users` SET `status` = :st WHERE `id` = :id", ['st' => $status, 'id' => $id]);
            AdminLog::log(Session::getAdmin()['id'] ?? 1, 'CHANGE_STATUS', 'users', $id, ['new_status' => $status]);
            $this->flash('success', "Member status changed to [{$status}].");
        }

        Response::redirect('/admin/users/view/' . $id);
    }

    public function delete(Request $request)
    {
        $id = (int)$request->param('id');
        $user = User::find($id);

        if ($user) {
            Database::query("DELETE FROM `users` WHERE `id` = :id", ['id' => $id]);
            AdminLog::log(Session::getAdmin()['id'] ?? 1, 'DELETE_USER', 'users', $id, ['matrimony_id' => $user['matrimony_id']]);
            $this->flash('success', "Member [{$user['matrimony_id']}] permanently deleted.");
        }

        Response::redirect('/admin/users');
    }
}
