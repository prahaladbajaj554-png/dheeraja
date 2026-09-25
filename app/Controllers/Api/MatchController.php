<?php
namespace App\Controllers\Api;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Database;
use App\Models\User;
use App\Helpers\SecurityHelper;

class MatchController extends Controller
{
    public function feed(Request $request)
    {
        $authUser = $request->param('auth_user');
        $myProfile = Database::fetchOne("SELECT gender, dob FROM `profiles` WHERE `user_id` = :uid", ['uid' => $authUser['id']]);

        $targetGender = ($myProfile['gender'] ?? 'male') === 'male' ? 'female' : 'male';

        $sql = "SELECT u.id, u.matrimony_id, u.is_vip, u.is_kyc_verified,
                       p.first_name, p.last_name, p.gender, p.dob, p.height_cm, p.current_city, p.current_state, p.about_me,
                       ec.highest_education, ec.occupation, ec.annual_income_inr,
                       ad.caste, ad.sub_caste, ad.gotra, ad.rashi, ad.manglik,
                       up.file_path as profile_photo
                FROM `users` u
                JOIN `profiles` p ON p.user_id = u.id
                LEFT JOIN `education_careers` ec ON ec.user_id = u.id
                LEFT JOIN `astrology_details` ad ON ad.user_id = u.id
                LEFT JOIN `user_photos` up ON up.user_id = u.id AND up.is_profile_picture = 1
                WHERE u.id != :my_id 
                  AND u.status = 'active'
                  AND u.role = 'user'
                  AND p.gender = :target_gender
                ORDER BY u.is_vip DESC, u.id DESC
                LIMIT 30";

        $matches = Database::fetchAll($sql, [
            'my_id'         => $authUser['id'],
            'target_gender' => $targetGender
        ]);

        // Calculate ages
        foreach ($matches as &$m) {
            $dob = new \DateTime($m['dob']);
            $now = new \DateTime();
            $m['age'] = $now->diff($dob)->y;
        }

        return $this->apiSuccess('Matches feed fetched.', [
            'matches' => $matches
        ]);
    }

    public function search(Request $request)
    {
        $authUser = $request->param('auth_user');
        $data = $request->json() ?: $request->all();

        $where = ["u.id != :my_id", "u.status = 'active'", "u.role = 'user'"];
        $params = ['my_id' => $authUser['id']];

        if (!empty($data['gender'])) {
            $where[] = "p.gender = :g";
            $params['g'] = $data['gender'];
        }

        if (!empty($data['caste'])) {
            $where[] = "ad.caste = :caste";
            $params['caste'] = $data['caste'];
        }

        if (!empty($data['city'])) {
            $where[] = "p.current_city LIKE :city";
            $params['city'] = "%{$data['city']}%";
        }

        if (!empty($data['manglik'])) {
            $where[] = "ad.manglik = :m";
            $params['m'] = $data['manglik'];
        }

        $whereSql = implode(' AND ', $where);

        $sql = "SELECT u.id, u.matrimony_id, u.is_vip, u.is_kyc_verified,
                       p.first_name, p.last_name, p.gender, p.dob, p.height_cm, p.current_city, p.current_state,
                       ec.occupation, ec.annual_income_inr, ad.caste, ad.gotra, ad.manglik
                FROM `users` u
                JOIN `profiles` p ON p.user_id = u.id
                LEFT JOIN `education_careers` ec ON ec.user_id = u.id
                LEFT JOIN `astrology_details` ad ON ad.user_id = u.id
                WHERE {$whereSql}
                ORDER BY u.is_vip DESC, u.id DESC
                LIMIT 50";

        $results = Database::fetchAll($sql, $params);

        return $this->apiSuccess('Search results.', [
            'results' => $results,
            'count'   => count($results)
        ]);
    }

    public function viewProfile(Request $request)
    {
        $targetMid = $request->param('mid');
        $authUser = $request->param('auth_user');

        $target = User::findByMatrimonyId($targetMid);
        if (!$target) {
            return $this->apiError('Profile not found.', 404);
        }

        $profile = User::findWithProfile($target['id']);

        // Check if viewing user is VIP
        $mySub = User::getActiveSubscription($authUser['id']);
        $canViewFullContact = !empty($mySub) && $mySub['contacts_viewed_count'] < $mySub['contact_views_limit'];

        // Mask contact details if not revealed
        if (!$canViewFullContact) {
            $profile['phone'] = SecurityHelper::maskPhone($profile['phone']);
            $profile['email'] = SecurityHelper::maskEmail($profile['email']);
            $profile['contact_locked'] = true;
        } else {
            $profile['contact_locked'] = false;
        }

        return $this->apiSuccess('Profile dossier fetched.', [
            'profile' => $profile
        ]);
    }

    public function revealContact(Request $request)
    {
        $authUser = $request->param('auth_user');
        $targetId = (int)$request->post('target_user_id');

        $mySub = User::getActiveSubscription($authUser['id']);
        if (!$mySub) {
            return $this->apiError('Active VIP Pro subscription required to view verified contact details.', 403);
        }

        if ($mySub['contacts_viewed_count'] >= $mySub['contact_views_limit']) {
            return $this->apiError('Contact view limit reached on your current VIP plan. Please upgrade or contact support.', 403);
        }

        // Deduct 1 view
        Database::query("UPDATE `user_subscriptions` SET `contacts_viewed_count` = `contacts_viewed_count` + 1 WHERE `id` = :id", [
            'id' => $mySub['id']
        ]);

        $target = User::find($targetId);
        if (!$target) {
            return $this->apiError('Target profile not found.', 404);
        }

        return $this->apiSuccess('Contact revealed successfully.', [
            'phone'              => $target['phone'],
            'email'              => $target['email'],
            'views_remaining'    => ($mySub['contact_views_limit'] - ($mySub['contacts_viewed_count'] + 1))
        ]);
    }
}
