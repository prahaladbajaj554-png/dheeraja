<?php
namespace App\Controllers\Api;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Database;
use App\Helpers\SecurityHelper;
use App\Helpers\MailerHelper;
use App\Models\User;
use App\Models\UserSubscription;
use App\Models\SubscriptionPlan;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->json();
        if (empty($data)) {
            $data = $request->all();
        }

        $errors = $this->validate($data, [
            'first_name' => 'required|min:2',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:users,email',
            'phone'      => 'required|min:10|unique:users,phone',
            'password'   => 'required|min:6',
            'gender'     => 'required|in:male,female',
            'dob'        => 'required'
        ]);

        if (!empty($errors)) {
            return $this->apiError('Validation failed.', 422, $errors);
        }

        $matrimonyId = SecurityHelper::generateMatrimonyId();
        $passwordHash = SecurityHelper::hashPassword($data['password']);

        // Check if Launch Free VIP is active
        $launchPromoActive = setting('launch_free_vip_enabled', '1') === '1';
        $launchVipDays = (int)setting('launch_free_vip_days', '90');

        // 1. Create User
        Database::query("INSERT INTO `users` (`matrimony_id`, `email`, `phone`, `password_hash`, `role`, `profile_for`, `status`, `is_vip`, `email_verified_at`, `created_at`) 
                        VALUES (:mid, :email, :phone, :pwd, 'user', :pfor, 'active', :vip, NOW(), NOW())", [
            'mid'   => $matrimonyId,
            'email' => $data['email'],
            'phone' => $data['phone'],
            'pwd'   => $passwordHash,
            'pfor'  => $data['profile_for'] ?? 'myself',
            'vip'   => $launchPromoActive ? 1 : 0
        ]);
        $userId = (int)Database::lastInsertId();

        // 2. Create Profile
        Database::query("INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `current_city`, `current_state`, `about_me`) 
                        VALUES (:uid, :fn, :ln, :g, :dob, :city, :state, :about)", [
            'uid'   => $userId,
            'fn'    => $data['first_name'],
            'ln'    => $data['last_name'],
            'g'     => $data['gender'],
            'dob'   => $data['dob'],
            'city'  => $data['city'] ?? 'Jaipur',
            'state' => $data['state'] ?? 'Rajasthan',
            'about' => $data['about_me'] ?? 'Looking for a compatible life partner.'
        ]);

        // 3. Create Astrology & Education shells
        Database::query("INSERT INTO `astrology_details` (`user_id`, `religion`, `caste`, `gotra`) VALUES (:uid, 'Hindu', :caste, :gotra)", [
            'uid'   => $userId,
            'caste' => $data['caste'] ?? 'General',
            'gotra' => $data['gotra'] ?? ''
        ]);

        Database::query("INSERT INTO `education_careers` (`user_id`, `highest_education`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES (:uid, :edu, 'private_sector', :occ, :inc, :wcity)", [
            'uid'   => $userId,
            'edu'   => $data['highest_education'] ?? 'Graduate',
            'occ'   => $data['occupation'] ?? 'Professional',
            'inc'   => (int)($data['annual_income_inr'] ?? 600000),
            'wcity' => $data['city'] ?? 'Jaipur'
        ]);

        // 4. Auto-Grant Launch Free VIP Pro if Launch Promotion Active
        if ($launchPromoActive) {
            $vipPlan = SubscriptionPlan::getVipProPlan();
            $planId = $vipPlan ? $vipPlan['id'] : 3;
            UserSubscription::grantPlan($userId, $planId, $launchVipDays, true, null, 'Early Bird Free Launch Promotion');
            
            // Send VIP celebration email
            MailerHelper::sendFreeVipGranted([
                'email'      => $data['email'],
                'first_name' => $data['first_name']
            ], 'Dheeraja Royal VIP Pro (Launch Special)', $launchVipDays);
        } else {
            // Assign Free Basic
            UserSubscription::grantPlan($userId, 1, 365, true, null, 'Default Free Basic');
        }

        // Welcome email
        MailerHelper::send($data['email'], $data['first_name'], '💍 Welcome to Dheeraja Matrimony', 'welcome', [
            'matrimony_id' => $matrimonyId
        ]);

        // Admin alert of new registration
        MailerHelper::alertAdmin('New Registration: ' . $data['first_name'], "New user registered:\nName: {$data['first_name']} {$data['last_name']}\nMatrimony ID: {$matrimonyId}\nEmail: {$data['email']}\nVIP Granted: " . ($launchPromoActive ? 'Yes (Launch Promo)' : 'No'));

        // Generate JWT Token
        $token = SecurityHelper::generateJwt(['sub' => $userId, 'role' => 'user', 'mid' => $matrimonyId]);

        return $this->apiSuccess('Registration successful! Welcome to Dheeraja Matrimony.', [
            'token'         => $token,
            'user'          => User::findWithProfile($userId),
            'launch_vip'    => $launchPromoActive,
            'vip_days'      => $launchPromoActive ? $launchVipDays : 0
        ], [], 201);
    }

    public function login(Request $request)
    {
        $data = $request->json() ?: $request->all();
        $identifier = trim($data['email'] ?? $data['phone'] ?? '');
        $password = $data['password'] ?? '';

        if (empty($identifier) || empty($password)) {
            return $this->apiError('Please provide email/phone and password.', 422);
        }

        $user = User::findByEmailOrPhone($identifier);

        if (!$user || !SecurityHelper::verifyPassword($password, $user['password_hash'])) {
            return $this->apiError('Invalid credentials. Please check your phone/email and password.', 401);
        }

        if ($user['status'] === 'banned') {
            return $this->apiError('This account has been banned due to policy violations.', 403);
        }

        // Update login stats
        Database::query("UPDATE `users` SET `last_login_at` = NOW(), `last_login_ip` = :ip WHERE `id` = :id", [
            'ip' => $request->ip(),
            'id' => $user['id']
        ]);

        $token = SecurityHelper::generateJwt(['sub' => $user['id'], 'role' => $user['role'], 'mid' => $user['matrimony_id']]);

        return $this->apiSuccess('Logged in successfully.', [
            'token' => $token,
            'user'  => User::findWithProfile($user['id'])
        ]);
    }

    public function me(Request $request)
    {
        $authUser = $request->param('auth_user');
        $profile = User::findWithProfile($authUser['id']);
        $subscription = User::getActiveSubscription($authUser['id']);

        return $this->apiSuccess('Profile fetched.', [
            'profile'      => $profile,
            'subscription' => $subscription
        ]);
    }
}
