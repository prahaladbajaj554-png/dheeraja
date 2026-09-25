<?php
namespace App\Controllers\Api;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Database;
use App\Models\User;
use App\Models\SubscriptionPlan;
use App\Models\UserSubscription;

class PlanController extends Controller
{
    public function index(Request $request)
    {
        $plans = SubscriptionPlan::getActivePlans();
        $launchPromoActive = setting('launch_free_vip_enabled', '1') === '1';
        $launchVipDays = (int)setting('launch_free_vip_days', '90');

        return $this->apiSuccess('Available subscription plans.', [
            'plans'              => $plans,
            'launch_free_vip'    => $launchPromoActive,
            'launch_vip_days'    => $launchVipDays
        ]);
    }

    public function current(Request $request)
    {
        $authUser = $request->param('auth_user');
        $sub = User::getActiveSubscription($authUser['id']);

        if (!$sub) {
            return $this->apiSuccess('No active paid subscription.', [
                'has_active_plan' => false,
                'plan_code'       => 'FREE_BASIC',
                'badge'           => 'Free Member',
                'is_vip'          => false
            ]);
        }

        $now = new \DateTime();
        $expiry = new \DateTime($sub['expires_at']);
        $daysRemaining = max(0, $now->diff($expiry)->days);

        return $this->apiSuccess('Active subscription status.', [
            'has_active_plan'   => true,
            'plan_title'        => $sub['title'],
            'plan_code'         => $sub['plan_code'],
            'badge'             => $sub['badge_name'],
            'is_vip'            => true,
            'is_free_grant'     => (bool)$sub['is_free_grant'],
            'days_remaining'    => $daysRemaining,
            'expires_at'        => $sub['expires_at'],
            'contact_views'     => [
                'limit'     => (int)$sub['contact_views_limit'],
                'used'      => (int)$sub['contacts_viewed_count'],
                'remaining' => max(0, (int)$sub['contact_views_limit'] - (int)$sub['contacts_viewed_count'])
            ],
            'direct_messages'   => [
                'limit'     => (int)$sub['direct_messages_limit'],
                'used'      => (int)$sub['messages_sent_count'],
                'remaining' => max(0, (int)$sub['direct_messages_limit'] - (int)$sub['messages_sent_count'])
            ]
        ]);
    }

    public function claimLaunchVip(Request $request)
    {
        $authUser = $request->param('auth_user');
        
        $launchEnabled = setting('launch_free_vip_enabled', '1') === '1';
        if (!$launchEnabled) {
            return $this->apiError('The Early Bird Free VIP launch offer has ended.', 400);
        }

        $existing = User::getActiveSubscription($authUser['id']);
        if ($existing && $existing['is_free_grant']) {
            return $this->apiError('You have already claimed your complimentary Launch VIP plan.', 400);
        }

        $days = (int)setting('launch_free_vip_days', '90');
        $vipPlan = SubscriptionPlan::getVipProPlan();
        $planId = $vipPlan ? $vipPlan['id'] : 3;

        UserSubscription::grantPlan($authUser['id'], $planId, $days, true, null, 'In-App Claim Launch Free VIP');

        return $this->apiSuccess('🎉 Congratulations! 90 Days of Dheeraja Royal VIP Pro has been credited to your account!', [
            'days_granted' => $days,
            'plan_title'   => 'Dheeraja Royal VIP Pro'
        ]);
    }
}
