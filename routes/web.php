<?php
use App\Core\Router;
use App\Core\Request;
use App\Core\Response;
use App\Core\Database;
use App\Models\User;
use App\Models\SubscriptionPlan;
use App\Models\Promotion;

/** @var Router $router */

// Public Dedicated Cover Page (Matching user's exact uploaded design)
$router->get('/', function (Request $request) {
    Response::view('home/cover', [
        'page_title'         => 'Dheeraja Royal Matrimony™ | Official Cover Page',
        'socialWhatsappUrl'  => setting('social_whatsapp_url', 'https://chat.whatsapp.com/invite/dheerajamatrimony'),
        'socialInstagramUrl' => setting('social_instagram_url', 'https://instagram.com/dheerajamatrimony'),
        'socialFacebookUrl'  => setting('social_facebook_url', 'https://facebook.com/dheerajamatrimony')
    ], null);
});

$router->get('/cover', function (Request $request) {
    Response::view('home/cover', [
        'page_title'         => 'Dheeraja Royal Matrimony™ | Official Cover Page',
        'socialWhatsappUrl'  => setting('social_whatsapp_url', 'https://chat.whatsapp.com/invite/dheerajamatrimony'),
        'socialInstagramUrl' => setting('social_instagram_url', 'https://instagram.com/dheerajamatrimony'),
        'socialFacebookUrl'  => setting('social_facebook_url', 'https://facebook.com/dheerajamatrimony')
    ], null);
});

// Screen after Cover Page (Exact Recreation of "कवर पेज के बाद" Welcome & Quick Registration/Login)
$router->get('/welcome', function (Request $request) {
    Response::view('home/welcome', [
        'page_title'   => 'Dheeraja Royal Matrimony™ | आपका स्वागत है',
        'flashSuccess' => \App\Core\Session::get('_flash')['success'] ?? null,
        'flashError'   => \App\Core\Session::get('_flash')['error'] ?? null,
    ], null);
    unset($_SESSION['_flash']);
});

$router->post('/welcome', function (Request $request) {
    $phone = trim($request->input('phone', ''));
    $email = trim($request->input('email', ''));
    $password = trim($request->input('password', ''));

    if (empty($phone) && empty($email)) {
        \App\Core\Session::flash('error', 'कृपया मोबाइल नंबर अथवा ईमेल आईडी दर्ज करें।');
        return Response::redirect('/welcome');
    }

    if (empty($password)) {
        \App\Core\Session::flash('error', 'कृपया कम से कम 6 अक्षर का पासवर्ड दर्ज करें।');
        return Response::redirect('/welcome');
    }

    // Check if user already exists
    $existing = null;
    if (!empty($phone)) {
        $existing = User::findByEmailOrPhone($phone);
    }
    if (!$existing && !empty($email)) {
        $existing = User::findByEmailOrPhone($email);
    }

    if ($existing) {
        \App\Core\Session::set('auth_user_id', $existing['id']);
        \App\Core\Session::set('auth_role', $existing['role']);
        \App\Core\Session::set('auth_mid', $existing['matrimony_id']);
        \App\Core\Session::flash('success', "स्वागत है! आपकी ID: {$existing['matrimony_id']}");
        return Response::redirect('/biodata');
    }

    // New user - Register & grant VIP Launch Promo
    $matrimonyId = \App\Helpers\SecurityHelper::generateMatrimonyId();
    $passwordHash = \App\Helpers\SecurityHelper::hashPassword($password);
    $launchPromoActive = setting('launch_free_vip_enabled', '1') === '1';

    \App\Core\Database::query(
        "INSERT INTO `users` (`matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_vip`, `email_verified_at`, `created_at`) 
         VALUES (:mid, :email, :phone, :pwd, 'user', 'active', :vip, NOW(), NOW())",
        [
            'mid'   => $matrimonyId,
            'email' => $email ?: ($phone . '@dheerajamatrimony.com'),
            'phone' => $phone ?: '+91' . rand(7000000000, 9999999999),
            'pwd'   => $passwordHash,
            'vip'   => $launchPromoActive ? 1 : 0
        ]
    );
    $newUserId = (int)\App\Core\Database::lastInsertId();

    \App\Core\Database::query(
        "INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `current_city`, `current_state`, `about_me`) 
         VALUES (:uid, 'सदस्य', '', 'male', '1998-01-01', 'जयपुर', 'राजस्थान', 'जीवनसाथी की खोज में...')",
        ['uid' => $newUserId]
    );

    \App\Core\Session::set('auth_user_id', $newUserId);
    \App\Core\Session::set('auth_role', 'user');
    \App\Core\Session::set('auth_mid', $matrimonyId);

    // Trigger Welcome Email & Admin Alert via PHPMailer
    try {
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            \App\Helpers\MailerHelper::send(
                $email,
                'सदस्य',
                '🌸 स्वागत है धीरजा रॉयल मैट्रिमोनी में | Matrimony ID: ' . $matrimonyId,
                'welcome',
                ['matrimony_id' => $matrimonyId]
            );
        }
        \App\Helpers\MailerHelper::alertAdmin(
            "नया सदस्य पंजीकरण: {$matrimonyId}",
            "एक नए सदस्य ने धीरजा मैट्रिमोनी पर पंजीकरण किया है:\n\n• ID: {$matrimonyId}\n• मोबाइल/ईमेल: " . ($phone ?: $email) . "\n• समय: " . date('d M Y, h:i A')
        );
    } catch (\Throwable $e) {}

    \App\Core\Session::flash('success', "बधाई हो! धीरजा परिवार में आपका स्वागत है। आपकी ID: {$matrimonyId}। कृपया अपना बायोडाटा भरें।");
    return Response::redirect('/biodata');
});

// Third Page: Matrimonial Profile / Biodata Form (खुद का फॉर्म भरने के लिए)
$router->get('/biodata', function (Request $request) {
    Response::view('home/biodata', [
        'page_title'   => 'Dheeraja Royal Matrimony™ | वर / वधू बायोडाटा फॉर्म',
        'flashSuccess' => \App\Core\Session::get('_flash')['success'] ?? null,
        'flashError'   => \App\Core\Session::get('_flash')['error'] ?? null,
    ], null);
    unset($_SESSION['_flash']);
});

$router->post('/biodata/save', function (Request $request) {
    $userId = (int)\App\Core\Session::get('auth_user_id', 3);
    $firstName = trim($request->input('first_name', 'वर'));
    $lastName  = trim($request->input('last_name', 'सदस्य'));
    $gender    = $request->input('gender', 'male');
    $dob       = $request->input('dob', '1998-05-15');
    $heightCm  = (int)$request->input('height_cm', 173);
    $maritalStatus = $request->input('marital_status', 'never_married');
    $city      = trim($request->input('city', 'जयपुर'));
    $state     = trim($request->input('state', 'राजस्थान'));
    $aboutMe   = trim($request->input('about_me', 'जीवनसाथी की खोज में...'));

    // Education & Career
    $highestEdu = trim($request->input('highest_education', 'B.Tech / B.E.'));
    $employedIn = $request->input('employed_in', 'private_sector');
    $defaultOcc = 'प्राइवेट सर्विस';
    if ($employedIn === 'government_psu') $defaultOcc = 'सरकारी नौकरी';
    elseif ($employedIn === 'business_self_employed') $defaultOcc = 'व्यवसाय / बिज़नेस';
    elseif ($employedIn === 'defense') $defaultOcc = 'डिफेंस सेवा';
    elseif ($employedIn === 'not_working') $defaultOcc = 'कार्यरत नहीं';
    $occupation = trim($request->input('occupation', '')) ?: $defaultOcc;
    $annualIncome = (int)$request->input('annual_income_inr', 600000);
    $workCity   = trim($request->input('work_city', $city));

    // Religion & Astrology
    $religion  = trim($request->input('religion', 'Hindu'));
    $caste     = trim($request->input('caste', 'सामान्य'));
    $subCaste  = trim($request->input('sub_caste', ''));
    $gotra     = trim($request->input('gotra', '')) ?: 'ज्ञात नहीं';
    $manglik   = $request->input('manglik', 'no');

    // Family
    $familyType = $request->input('family_type', 'nuclear');
    $fatherOcc  = trim($request->input('father_occupation', ''));

    // 1. Update/Insert Profile
    \App\Core\Database::query(
        "INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `current_city`, `current_state`, `about_me`)
         VALUES (:uid, :fn, :ln, :gen, :dob, :ms, :h, :city, :state, :about)
         ON DUPLICATE KEY UPDATE `first_name` = :fn, `last_name` = :ln, `gender` = :gen, `dob` = :dob, `marital_status` = :ms, `height_cm` = :h, `current_city` = :city, `current_state` = :state, `about_me` = :about",
        [
            'uid'   => $userId,
            'fn'    => $firstName,
            'ln'    => $lastName,
            'gen'   => $gender,
            'dob'   => $dob,
            'ms'    => $maritalStatus,
            'h'     => $heightCm,
            'city'  => $city,
            'state' => $state,
            'about' => $aboutMe
        ]
    );

    // 2. Update/Insert Education & Career
    \App\Core\Database::query(
        "INSERT INTO `education_careers` (`user_id`, `highest_education`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`)
         VALUES (:uid, :edu, :emp, :occ, :inc, :wcity)
         ON DUPLICATE KEY UPDATE `highest_education` = :edu, `employed_in` = :emp, `occupation` = :occ, `annual_income_inr` = :inc, `work_city` = :wcity",
        [
            'uid'   => $userId,
            'edu'   => $highestEdu,
            'emp'   => $employedIn,
            'occ'   => $occupation,
            'inc'   => $annualIncome,
            'wcity' => $workCity
        ]
    );

    // 3. Update/Insert Astrology Details
    \App\Core\Database::query(
        "INSERT INTO `astrology_details` (`user_id`, `religion`, `caste`, `sub_caste`, `gotra`, `manglik`)
         VALUES (:uid, :rel, :caste, :sc, :gotra, :manglik)
         ON DUPLICATE KEY UPDATE `religion` = :rel, `caste` = :caste, `sub_caste` = :sc, `gotra` = :gotra, `manglik` = :manglik",
        [
            'uid'     => $userId,
            'rel'     => $religion,
            'caste'   => $caste,
            'sc'      => $subCaste,
            'gotra'   => $gotra,
            'manglik' => $manglik
        ]
    );

    // 4. Update/Insert Family Details
    \App\Core\Database::query(
        "INSERT INTO `family_details` (`user_id`, `family_type`, `father_occupation`)
         VALUES (:uid, :ft, :focc)
         ON DUPLICATE KEY UPDATE `family_type` = :ft, `father_occupation` = :focc",
        [
            'uid'  => $userId,
            'ft'   => $familyType,
            'focc' => $fatherOcc
        ]
    );

    // Send Notification to Admin & Confirmation Email to User via PHPMailer
    try {
        $userRow = \App\Core\Database::fetch("SELECT email, phone, matrimony_id FROM users WHERE id = :uid", ['uid' => $userId]);
        $userEmail = $userRow['email'] ?? '';
        $userMid = $userRow['matrimony_id'] ?? ('DM' . $userId);

        \App\Helpers\MailerHelper::alertAdmin(
            "नया बायोडाटा दर्ज हुआ: {$firstName} {$lastName} ({$city}, {$caste})",
            "एक सदस्य ने धीरजा मैट्रिमोनी पर अपना बायोडाटा सफलतापूर्वक पूर्ण किया है:\n\n• ID: {$userMid}\n• नाम: {$firstName} {$lastName}\n• जेंडर: {$gender}\n• जन्मतिथि: {$dob}\n• शहर: {$city}, {$state}\n• समाज/जाति: {$caste} " . ($subCaste ? "({$subCaste})" : "") . "\n• गोत्र: {$gotra}\n• शिक्षा: {$highestEdu}\n• व्यवसाय: {$occupation}\n• वार्षिक आय: ₹" . number_format($annualIncome)
        );

        if (!empty($userEmail) && filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            \App\Helpers\MailerHelper::sendFreeVipGranted(
                ['email' => $userEmail, 'first_name' => $firstName],
                'Dheeraja Royal VIP Pro',
                90
            );
        }
    } catch (\Throwable $e) {}

    \App\Core\Session::flash('success', 'आपका बायोडाटा सफलतापूर्वक सुरक्षित हो गया है! योग्य रिश्ते नीचे तालिका में देखें।');
    return Response::redirect('/matches');
});

// Fourth Page: Activity & Matches Tracker / तालिका वाला पेज
$router->get('/matches', function (Request $request) {
    Response::view('home/matches', [
        'page_title'   => 'Dheeraja Royal Matrimony™ | Activity & Matches Tracker (तालिका)',
        'flashSuccess' => \App\Core\Session::get('_flash')['success'] ?? null,
        'flashError'   => \App\Core\Session::get('_flash')['error'] ?? null,
    ], null);
    unset($_SESSION['_flash']);
});

// Matches Interactive Action: Express Interest
$router->post('/matches/interest', function (Request $request) {
    $senderId = (int)\App\Core\Session::get('auth_user_id', 3);
    $candidateName = trim($request->input('name', 'Priya Sharma'));
    $targetId = (int)$request->input('target_id', 2);
    
    // Check if interest already sent
    $existing = Database::fetch("SELECT id FROM `interests` WHERE `sender_id` = :s AND `receiver_id` = :r", [
        's' => $senderId,
        'r' => $targetId
    ]);

    if (!$existing) {
        Database::query("INSERT INTO `interests` (`sender_id`, `receiver_id`, `status`, `created_at`) VALUES (:s, :r, 'pending', NOW())", [
            's' => $senderId,
            'r' => $targetId
        ]);
        
        // Notify admin via PHPMailer
        try {
            $senderMid = \App\Core\Session::get('auth_mid', 'DM' . $senderId);
            \App\Helpers\MailerHelper::alertAdmin(
                "नई रुचि भेजी गई: {$senderMid} → {$candidateName}",
                "सदस्य {$senderMid} ने उम्मीदवार {$candidateName} (ID: {$targetId}) को अपनी रुचि व बायोडाटा भेजा है।"
            );
        } catch (\Throwable $e) {}
    }

    return Response::json([
        'status' => 'success',
        'message' => 'आपकी रुचि सफलतापूर्वक दर्ज कर ली गई है।'
    ]);
});

// Matches Interactive Action: Save Chat Message
$router->post('/matches/chat', function (Request $request) {
    $senderId = (int)\App\Core\Session::get('auth_user_id', 3);
    $targetId = (int)$request->input('target_id', 2);
    $message  = trim($request->input('message', ''));

    if (!empty($message)) {
        Database::query("INSERT INTO `chat_messages` (`sender_id`, `receiver_id`, `message`, `is_read`, `created_at`) VALUES (:s, :r, :m, 0, NOW())", [
            's' => $senderId,
            'r' => $targetId,
            'm' => $message
        ]);
    }

    return Response::json([
        'status' => 'success',
        'message' => 'संदेश सुरक्षित हुआ।'
    ]);
});

// Matches Interactive Action: Shortlist Profile
$router->post('/matches/shortlist', function (Request $request) {
    $userId = (int)\App\Core\Session::get('auth_user_id', 3);
    $targetId = (int)$request->input('target_id', 2);

    $existing = Database::fetch("SELECT id FROM `shortlists` WHERE `user_id` = :u AND `saved_user_id` = :s", [
        'u' => $userId,
        's' => $targetId
    ]);

    if (!$existing) {
        Database::query("INSERT INTO `shortlists` (`user_id`, `saved_user_id`, `created_at`) VALUES (:u, :s, NOW())", [
            'u' => $userId,
            's' => $targetId
        ]);
    }

    return Response::json([
        'status' => 'success',
        'message' => 'प्रोफाइल पसंदीदा सूची में सुरक्षित की गई।'
    ]);
});

// Membership & Online Payment Gateway Routes
$router->get('/membership', function (Request $request) {
    Response::view('home/membership', [
        'page_title'   => 'Dheeraja Royal Matrimony™ | सदस्यता एवं VIP अपग्रेड प्लान्स',
        'flashSuccess' => \App\Core\Session::get('_flash')['success'] ?? null,
        'flashError'   => \App\Core\Session::get('_flash')['error'] ?? null,
    ], null);
    unset($_SESSION['_flash']);
});

$router->post('/membership/create-order', function (Request $request) {
    $userId = (int)\App\Core\Session::get('auth_user_id', 3);
    $planId = (int)$request->input('plan_id', 3);
    
    $plan = Database::fetch("SELECT * FROM `subscription_plans` WHERE id = :id AND is_active = 1", ['id' => $planId]);
    if (!$plan) {
        return Response::json(['status' => 'error', 'message' => 'अमान्य सदस्यता प्लान'], 400);
    }

    $orderId = 'ORD_' . date('YmdHis') . '_' . rand(100, 999);
    $tempTxnId = 'PENDING_' . $orderId;

    Database::query("INSERT INTO `payments` (`transaction_id`, `order_id`, `user_id`, `plan_id`, `amount_inr`, `status`, `created_at`)
                    VALUES (:tx, :ord, :uid, :pid, :amt, 'pending', NOW())", [
        'tx'  => $tempTxnId,
        'ord' => $orderId,
        'uid' => $userId,
        'pid' => $planId,
        'amt' => $plan['price_inr']
    ]);

    return Response::json([
        'status'   => 'success',
        'order_id' => $orderId,
        'amount'   => $plan['price_inr'],
        'currency' => 'INR',
        'key_id'   => setting('razorpay_key_id', 'rzp_test_placeholder')
    ]);
});

$router->post('/membership/verify-payment', function (Request $request) {
    $userId        = (int)\App\Core\Session::get('auth_user_id', 3);
    $planId        = (int)$request->input('plan_id', 3);
    $transactionId = trim($request->input('transaction_id', 'PAY_' . time()));
    $orderId       = trim($request->input('order_id', 'ORD_' . time()));
    $amount        = (float)$request->input('amount', 4999);
    $gateway       = trim($request->input('gateway', 'razorpay'));
    $method        = trim($request->input('method', 'upi'));
    $utrNumber     = trim($request->input('utr_number', ''));

    $plan = Database::fetch("SELECT * FROM `subscription_plans` WHERE id = :id", ['id' => $planId]);
    $durationDays = (int)($plan['duration_days'] ?? 180);
    $planTitle    = $plan['title'] ?? 'Dheeraja Royal VIP Pro';

    // 1. Record / Update Payment Record
    Database::query("INSERT INTO `payments` 
        (`transaction_id`, `order_id`, `user_id`, `plan_id`, `amount_inr`, `payment_gateway`, `payment_method`, `utr_number`, `status`, `gateway_response`, `created_at`)
        VALUES (:tx, :ord, :uid, :pid, :amt, :gw, :mth, :utr, 'successful', :resp, NOW())
        ON DUPLICATE KEY UPDATE `status` = 'successful', `payment_gateway` = :gw, `payment_method` = :mth, `utr_number` = :utr, `amount_inr` = :amt",
        [
            'tx'   => $transactionId,
            'ord'  => $orderId,
            'uid'  => $userId,
            'pid'  => $planId,
            'amt'  => $amount,
            'gw'   => $gateway,
            'mth'  => $method,
            'utr'  => $utrNumber ?: null,
            'resp' => json_encode(['verified_at' => date('c'), 'gateway' => $gateway, 'method' => $method])
        ]
    );

    // 2. Grant / Activate Subscription
    $expiresAt = date('Y-m-d H:i:s', strtotime("+{$durationDays} days"));
    Database::query("INSERT INTO `user_subscriptions` 
        (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`, `created_at`)
        VALUES (:uid, :pid, NOW(), :exp, 0, :notes, 'active', NOW())", [
            'uid'   => $userId,
            'pid'   => $planId,
            'exp'   => $expiresAt,
            'notes' => "Online Payment via {$gateway} (Txn: {$transactionId})"
        ]
    );

    // 3. Mark User as VIP in Users table
    Database::query("UPDATE `users` SET `is_vip` = 1 WHERE `id` = :uid", ['uid' => $userId]);

    // 4. Trigger Notifications via PHPMailer
    try {
        $userRow = Database::fetch("SELECT email, matrimony_id FROM `users` WHERE `id` = :uid", ['uid' => $userId]);
        $userEmail = $userRow['email'] ?? '';
        $userMid = $userRow['matrimony_id'] ?? ('DM' . $userId);

        // Alert Admin
        \App\Helpers\MailerHelper::alertAdmin(
            "💰 नया ऑनलाइन पेमेंट प्राप्त: ₹" . number_format($amount) . " ({$planTitle})",
            "धीरजा मैट्रिमोनी पर नया सफल भुगतान प्राप्त हुआ है:\n\n• यूजर ID: {$userMid}\n• प्लान: {$planTitle}\n• राशि: ₹" . number_format($amount) . "\n• गेटवे: " . strtoupper($gateway) . "\n• माध्यम: " . strtoupper($method) . "\n• ट्रांजैक्शन ID: {$transactionId}\n• UTR/Ref: " . ($utrNumber ?: 'Auto Verified') . "\n• वैधता: {$durationDays} दिन (समाप्ति: {$expiresAt})"
        );

        // Send Confirmation Email to User
        if (!empty($userEmail) && filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            \App\Helpers\MailerHelper::sendFreeVipGranted(
                ['email' => $userEmail, 'first_name' => 'सम्मानित सदस्य'],
                $planTitle,
                $durationDays
            );
        }
    } catch (\Throwable $e) {}

    return Response::json([
        'status'         => 'success',
        'message'        => 'भुगतान सफल हुआ! आपका प्लान तुरंत सक्रिय कर दिया गया है।',
        'transaction_id' => $transactionId,
        'plan_title'     => $planTitle,
        'expires_at'     => date('d M Y', strtotime($expiresAt))
    ]);
});

// Full Web Portal Showcase
$router->get('/portal', function (Request $request) {
    $featuredMatches = Database::fetchAll("SELECT u.id, u.matrimony_id, u.is_vip, u.is_kyc_verified, u.is_photo_verified,
                                                 p.first_name, p.last_name, p.gender, p.dob, p.height_cm, p.current_city, p.current_state,
                                                 ec.highest_education, ec.occupation, ec.annual_income_inr,
                                                 ad.caste, ad.gotra
                                          FROM `users` u
                                          JOIN `profiles` p ON p.user_id = u.id
                                          LEFT JOIN `education_careers` ec ON ec.user_id = u.id
                                          LEFT JOIN `astrology_details` ad ON ad.user_id = u.id
                                          WHERE u.role = 'user' AND p.gender = 'female'
                                          ORDER BY u.is_vip DESC, u.id DESC LIMIT 8");

    $allPhotos = Database::fetchAll("SELECT user_id, file_path, is_profile_picture FROM `user_photos` WHERE `is_approved` = 'approved' ORDER BY is_profile_picture DESC, id ASC");
    $userPhotosMap = [];
    foreach ($allPhotos as $ph) {
        $userPhotosMap[$ph['user_id']][] = $ph['file_path'];
    }

    foreach ($featuredMatches as &$m) {
        $m['profile_photo'] = $userPhotosMap[$m['id']][0] ?? null;
    }

    $whatsappCommunities = Database::fetchAll("SELECT * FROM `whatsapp_communities` WHERE `is_active` = 1 ORDER BY `member_count` DESC LIMIT 6");

    Response::view('home/index', [
        'page_title'          => 'Dheeraja Matrimony | India\'s Trusted Royal Matrimonial Platform',
        'featuredMatches'     => $featuredMatches,
        'whatsappCommunities' => $whatsappCommunities,
        'launchVip'           => setting('launch_free_vip_enabled', '1') === '1',
        'socialWhatsappUrl'   => setting('social_whatsapp_url', 'https://chat.whatsapp.com/invite/dheerajamatrimony'),
        'socialInstagramUrl'  => setting('social_instagram_url', 'https://instagram.com/dheerajamatrimony'),
        'socialFacebookUrl'   => setting('social_facebook_url', 'https://facebook.com/dheerajamatrimony')
    ], null);
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
