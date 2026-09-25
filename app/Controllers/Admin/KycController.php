<?php
namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Core\Session;
use App\Core\Database;
use App\Models\KycDocument;
use App\Models\User;
use App\Helpers\MailerHelper;

class KycController extends Controller
{
    public function index(Request $request)
    {
        $pending = KycDocument::getPending();
        $history = Database::fetchAll("SELECT kd.*, u.matrimony_id, p.first_name, p.last_name, admin_u.email as verified_by_email
                                       FROM `kyc_documents` kd
                                       JOIN `users` u ON u.id = kd.user_id
                                       JOIN `profiles` p ON p.user_id = u.id
                                       LEFT JOIN `users` admin_u ON admin_u.id = kd.verified_by
                                       WHERE kd.status != 'pending'
                                       ORDER BY kd.verified_at DESC
                                       LIMIT 20");

        $this->view('admin/kyc/index', [
            'page_title' => 'KYC & Identity Verification Workbench',
            'pending'    => $pending,
            'history'    => $history
        ]);
    }

    public function review(Request $request)
    {
        $id = (int)$request->param('id');
        $doc = Database::fetchOne("SELECT kd.*, u.matrimony_id, u.email, u.phone, u.created_at as user_joined,
                                          p.first_name, p.last_name, p.gender, p.dob, p.current_city, p.current_state
                                   FROM `kyc_documents` kd
                                   JOIN `users` u ON u.id = kd.user_id
                                   JOIN `profiles` p ON p.user_id = u.id
                                   WHERE kd.id = :id LIMIT 1", ['id' => $id]);

        if (!$doc) {
            $this->flash('error', 'KYC document not found.');
            Response::redirect('/admin/kyc');
        }

        $this->view('admin/kyc/review', [
            'page_title' => "Review ID Verification: {$doc['first_name']} {$doc['last_name']} ({$doc['matrimony_id']})",
            'doc'        => $doc
        ]);
    }

    public function approve(Request $request)
    {
        $id = (int)$request->param('id');
        $doc = KycDocument::find($id);

        if ($doc) {
            $admin = Session::getAdmin();
            KycDocument::approve($id, $admin['id'] ?? 1);

            $user = User::findWithProfile($doc['user_id']);
            if ($user) {
                MailerHelper::sendKycStatus($user, 'approved');
            }

            $this->flash('success', "✅ Document approved! User has been awarded the Verified Badge.");
        }

        Response::redirect('/admin/kyc');
    }

    public function reject(Request $request)
    {
        $id = (int)$request->param('id');
        $doc = KycDocument::find($id);
        $reason = trim($request->post('rejection_reason', 'ID copy is unreadable or details mismatch.'));

        if ($doc) {
            $admin = Session::getAdmin();
            KycDocument::reject($id, $admin['id'] ?? 1, $reason);

            $user = User::findWithProfile($doc['user_id']);
            if ($user) {
                MailerHelper::sendKycStatus($user, 'rejected', $reason);
            }

            $this->flash('warning', "KYC document marked as Rejected. Re-submission request sent to member.");
        }

        Response::redirect('/admin/kyc');
    }
}
