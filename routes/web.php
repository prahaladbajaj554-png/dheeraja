<?php
use App\Core\Router;
use App\Core\Request;
use App\Core\Response;
use App\Core\Database;
use App\Models\User;
use App\Models\SubscriptionPlan;
use App\Models\Promotion;

/** @var Router $router */

// Public Root Redirect
$router->get('/', function (Request $request) {
    Response::redirect('/app');
});

// Mobile App View (Touch-first Webview / Play Store Wrapper)
$router->get('/app', function (Request $request) {
    // Demo user for mobile app view preview (Aditya Singhania or Pooja Sharma)
    $activeUser = User::findWithProfile(3);
    $activePlan = User::getActiveSubscription(3);
    $promotions = Promotion::getActivePromotions();

    // Matches for feed with photos and photo verification
    $matches = Database::fetchAll("SELECT u.id, u.matrimony_id, u.is_vip, u.is_kyc_verified, u.is_photo_verified,
                                         p.first_name, p.last_name, p.gender, p.dob, p.height_cm, p.current_city, p.current_state, p.about_me,
                                         ec.highest_education, ec.occupation, ec.annual_income_inr,
                                         ad.caste, ad.gotra, ad.manglik
                                  FROM `users` u
                                  JOIN `profiles` p ON p.user_id = u.id
                                  LEFT JOIN `education_careers` ec ON ec.user_id = u.id
                                  LEFT JOIN `astrology_details` ad ON ad.user_id = u.id
                                  WHERE u.id != 3 AND u.role = 'user' AND p.gender = 'female'
                                  ORDER BY u.is_vip DESC, u.id DESC");

    // Fetch all 4 photos for each user
    $allPhotos = Database::fetchAll("SELECT user_id, file_path, is_profile_picture, is_verified FROM `user_photos` WHERE `is_approved` = 'approved' ORDER BY is_profile_picture DESC, id ASC");
    $userPhotosMap = [];
    foreach ($allPhotos as $ph) {
        $userPhotosMap[$ph['user_id']][] = $ph['file_path'];
    }

    foreach ($matches as &$m) {
        $m['photos'] = $userPhotosMap[$m['id']] ?? [];
        $m['profile_photo'] = $m['photos'][0] ?? null;
    }

    // Generate JWT token for active demo user so client-side chat sync can run
    $activeUserToken = \App\Helpers\SecurityHelper::generateJwt([
        'sub'  => 3,
        'role' => 'user',
        'mid'  => 'DM10002'
    ]);

    // WhatsApp Communities
    $whatsappCommunities = Database::fetchAll("SELECT * FROM `whatsapp_communities` WHERE `is_active` = 1 ORDER BY `member_count` DESC");

    Response::view('mobile/home', [
        'page_title'          => 'Dheeraja Matrimony - Official Mobile App',
        'activeUser'          => $activeUser,
        'activePlan'          => $activePlan,
        'activeUserToken'     => $activeUserToken,
        'promotions'          => $promotions,
        'matches'             => $matches,
        'whatsappCommunities' => $whatsappCommunities,
        'launchVip'           => setting('launch_free_vip_enabled', '1') === '1'
    ], null);
});
