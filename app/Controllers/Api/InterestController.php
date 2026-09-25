<?php
namespace App\Controllers\Api;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Database;
use App\Models\User;
use App\Helpers\MailerHelper;

class InterestController extends Controller
{
    public function send(Request $request)
    {
        $authUser = $request->param('auth_user');
        $receiverId = (int)$request->post('receiver_id');

        if ($authUser['id'] == $receiverId) {
            return $this->apiError('Cannot express interest in your own profile.', 400);
        }

        $receiver = User::findWithProfile($receiverId);
        if (!$receiver) {
            return $this->apiError('Receiver profile not found.', 404);
        }

        // Insert or update interest
        $sql = "INSERT INTO `interests` (`sender_id`, `receiver_id`, `status`) 
                VALUES (:s, :r, 'pending') 
                ON DUPLICATE KEY UPDATE `status` = 'pending', `updated_at` = NOW()";
        Database::query($sql, ['s' => $authUser['id'], 'r' => $receiverId]);

        // Insert notification
        Database::query("INSERT INTO `notifications` (`user_id`, `type`, `title`, `message`, `action_url`) VALUES (:uid, 'interest', 'New Express Interest!', :msg, '/interests/received')", [
            'uid' => $receiverId,
            'msg' => "A member has expressed interest in your profile. Review now!"
        ]);

        // Trigger alert email
        $senderProfile = User::findWithProfile($authUser['id']);
        MailerHelper::send($receiver['email'], $receiver['first_name'], '💖 Someone Expressed Interest in You! - Dheeraja Matrimony', 'welcome', [
            'recipient_name' => $receiver['first_name'],
            'matrimony_id'   => $senderProfile['matrimony_id'] ?? 'DM-MEMBER'
        ]);

        return $this->apiSuccess('Interest expressed successfully!');
    }

    public function accept(Request $request)
    {
        $authUser = $request->param('auth_user');
        $interestId = (int)$request->param('id');

        $interest = Database::fetchOne("SELECT * FROM `interests` WHERE `id` = :id AND `receiver_id` = :uid", [
            'id'  => $interestId,
            'uid' => $authUser['id']
        ]);

        if (!$interest) {
            return $this->apiError('Interest request not found.', 404);
        }

        Database::query("UPDATE `interests` SET `status` = 'accepted', `updated_at` = NOW() WHERE `id` = :id", ['id' => $interestId]);

        // Notify sender
        Database::query("INSERT INTO `notifications` (`user_id`, `type`, `title`, `message`, `action_url`) VALUES (:uid, 'interest_accepted', 'Interest Accepted! 🎉', 'Your expressed interest was accepted. You can now chat directly!', '/chat')", [
            'uid' => $interest['sender_id']
        ]);

        return $this->apiSuccess('Interest accepted! You can now start conversations.');
    }

    public function listReceived(Request $request)
    {
        $authUser = $request->param('auth_user');
        $sql = "SELECT i.*, u.matrimony_id, u.is_vip, p.first_name, p.last_name, p.gender, p.dob, p.current_city, ec.occupation, ad.caste
                FROM `interests` i
                JOIN `users` u ON u.id = i.sender_id
                JOIN `profiles` p ON p.user_id = u.id
                LEFT JOIN `education_careers` ec ON ec.user_id = u.id
                LEFT JOIN `astrology_details` ad ON ad.user_id = u.id
                WHERE i.receiver_id = :uid
                ORDER BY i.id DESC";
        $list = Database::fetchAll($sql, ['uid' => $authUser['id']]);

        return $this->apiSuccess('Received interests fetched.', ['interests' => $list]);
    }
}
