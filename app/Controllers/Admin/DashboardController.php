<?php
namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Database;
use App\Models\AdminLog;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // 1. Gather Key Platform Metrics
        $totalUsers = (int)Database::fetchOne("SELECT COUNT(*) as cnt FROM `users` WHERE `role` = 'user'")['cnt'];
        $totalGrooms = (int)Database::fetchOne("SELECT COUNT(*) as cnt FROM `profiles` WHERE `gender` = 'male'")['cnt'];
        $totalBrides = (int)Database::fetchOne("SELECT COUNT(*) as cnt FROM `profiles` WHERE `gender` = 'female'")['cnt'];
        $pendingKyc = (int)Database::fetchOne("SELECT COUNT(*) as cnt FROM `kyc_documents` WHERE `status` = 'pending'")['cnt'];
        $activeVips = (int)Database::fetchOne("SELECT COUNT(*) as cnt FROM `users` WHERE `is_vip` = 1 AND `role` = 'user'")['cnt'];
        $todaySignups = (int)Database::fetchOne("SELECT COUNT(*) as cnt FROM `users` WHERE DATE(`created_at`) = CURDATE() AND `role` = 'user'")['cnt'];

        // 2. Recent Registered Members
        $recentUsersSql = "SELECT u.id, u.matrimony_id, u.email, u.phone, u.status, u.is_vip, u.is_kyc_verified, u.created_at,
                                  p.first_name, p.last_name, p.gender, p.current_city, p.current_state,
                                  ec.occupation, ec.annual_income_inr, ad.caste
                           FROM `users` u
                           LEFT JOIN `profiles` p ON p.user_id = u.id
                           LEFT JOIN `education_careers` ec ON ec.user_id = u.id
                           LEFT JOIN `astrology_details` ad ON ad.user_id = u.id
                           WHERE u.role = 'user'
                           ORDER BY u.id DESC
                           LIMIT 6";
        $recentUsers = Database::fetchAll($recentUsersSql);

        // 3. Recent Audit Logs
        $recentLogs = AdminLog::getRecent(8);

        // 4. Pending KYC preview
        $pendingKycList = Database::fetchAll("SELECT kd.*, u.matrimony_id, p.first_name, p.last_name 
                                             FROM `kyc_documents` kd
                                             JOIN `users` u ON u.id = kd.user_id
                                             JOIN `profiles` p ON p.user_id = u.id
                                             WHERE kd.status = 'pending'
                                             LIMIT 5");

        $this->view('admin/dashboard/index', [
            'page_title'     => 'Executive Master Dashboard',
            'totalUsers'     => $totalUsers,
            'totalGrooms'    => $totalGrooms,
            'totalBrides'    => $totalBrides,
            'pendingKyc'     => $pendingKyc,
            'activeVips'     => $activeVips,
            'todaySignups'   => $todaySignups,
            'recentUsers'    => $recentUsers,
            'recentLogs'     => $recentLogs,
            'pendingKycList' => $pendingKycList,
            'launchVipPromo' => setting('launch_free_vip_enabled', '1')
        ]);
    }
}
