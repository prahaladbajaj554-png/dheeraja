<?php
namespace App\Controllers\Api;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Database;
use App\Models\User;

class ChatController extends Controller
{
    public function threads(Request $request)
    {
        $authUser = $request->param('auth_user');
        $myId = $authUser['id'];

        $sql = "SELECT m.*, 
                       CASE WHEN m.sender_id = :my_id THEN m.receiver_id ELSE m.sender_id END as other_user_id,
                       u.matrimony_id, p.first_name, p.last_name
                FROM `chat_messages` m
                JOIN `users` u ON u.id = (CASE WHEN m.sender_id = :my_id THEN m.receiver_id ELSE m.sender_id END)
                JOIN `profiles` p ON p.user_id = u.id
                WHERE m.id IN (
                    SELECT MAX(id) FROM `chat_messages` 
                    WHERE sender_id = :my_id OR receiver_id = :my_id 
                    GROUP BY (CASE WHEN sender_id = :my_id THEN receiver_id ELSE sender_id END)
                )
                ORDER BY m.id DESC";

        $threads = Database::fetchAll($sql, ['my_id' => $myId]);
        return $this->apiSuccess('Chat conversations fetched.', ['threads' => $threads]);
    }

    public function messages(Request $request)
    {
        $authUser = $request->param('auth_user');
        $partnerId = (int)$request->param('partner_id');

        // Mark as read
        Database::query("UPDATE `chat_messages` SET `is_read` = 1, `read_at` = NOW() WHERE `sender_id` = :pid AND `receiver_id` = :my_id AND `is_read` = 0", [
            'pid'   => $partnerId,
            'my_id' => $authUser['id']
        ]);

        $sql = "SELECT * FROM `chat_messages` 
                WHERE (`sender_id` = :my_id AND `receiver_id` = :pid) 
                   OR (`sender_id` = :pid AND `receiver_id` = :my_id) 
                ORDER BY id ASC";

        $messages = Database::fetchAll($sql, [
            'my_id' => $authUser['id'],
            'pid'   => $partnerId
        ]);

        return $this->apiSuccess('Message history fetched.', ['messages' => $messages]);
    }

    public function send(Request $request)
    {
        $authUser = $request->param('auth_user');
        $receiverId = (int)$request->post('receiver_id');
        $text = trim($request->post('message', ''));

        if (empty($text)) {
            return $this->apiError('Message text cannot be empty.', 422);
        }

        // Check if user has active VIP or message limits
        $mySub = User::getActiveSubscription($authUser['id']);
        if (!$mySub) {
            return $this->apiError('Active VIP Pro subscription required to chat directly.', 403);
        }

        Database::query("INSERT INTO `chat_messages` (`sender_id`, `receiver_id`, `message`) VALUES (:s, :r, :m)", [
            's' => $authUser['id'],
            'r' => $receiverId,
            'm' => $text
        ]);

        $messageId = Database::lastInsertId();

        Database::query("UPDATE `user_subscriptions` SET `messages_sent_count` = `messages_sent_count` + 1 WHERE `id` = :id", [
            'id' => $mySub['id']
        ]);

        return $this->apiSuccess('Message sent successfully.', [
            'message_id' => $messageId
        ]);
    }
}
