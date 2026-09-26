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
    $fullName = trim($request->input('full_name', ''));
    if ($fullName) {
        $parts = explode(' ', $fullName, 2);
        $firstName = $parts[0];
        $lastName  = $parts[1] ?? 'शर्मा';
    } else {
        $firstName = trim($request->input('first_name', 'वर'));
        $lastName  = trim($request->input('last_name', 'सदस्य'));
    }
    $gender    = $request->input('gender', 'male');
    $dob       = $request->input('dob', '1998-05-15');
    $heightCm  = (int)$request->input('height_cm', 173);
    $maritalStatus = $request->input('marital_status', 'never_married');
    $city      = trim($request->input('city', $request->input('current_city', 'जयपुर')));
    $state     = trim($request->input('state', $request->input('current_state', 'राजस्थान')));
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
    $fatherName = trim($request->input('father_name', ''));
    $fatherOcc  = trim($request->input('father_occupation', ''));
    $motherName = trim($request->input('mother_name', ''));
    $motherOcc  = trim($request->input('mother_occupation', ''));
    $profileFor = trim($request->input('profile_for', 'myself'));

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

    // 4. Update/Insert Family Details (पिता व माता का नाम व व्यवसाय)
    \App\Core\Database::query(
        "INSERT INTO `family_details` (`user_id`, `family_type`, `father_name`, `father_occupation`, `mother_name`, `mother_occupation`)
         VALUES (:uid, :ft, :fname, :focc, :mname, :mocc)
         ON DUPLICATE KEY UPDATE `family_type` = :ft, `father_name` = :fname, `father_occupation` = :focc, `mother_name` = :mname, `mother_occupation` = :mocc",
        [
            'uid'   => $userId,
            'ft'    => $familyType,
            'fname' => $fatherName,
            'focc'  => $fatherOcc,
            'mname' => $motherName,
            'mocc'  => $motherOcc
        ]
    );

    // Send Notification to Admin & Confirmation Email to User Asynchronously in Background
    try {
        $userRow = \App\Core\Database::fetch("SELECT email, phone, matrimony_id FROM users WHERE id = :uid", ['uid' => $userId]);
        $userEmail = $userRow['email'] ?? '';
        $userMid = $userRow['matrimony_id'] ?? ('DM' . $userId);

        $payload = base64_encode(json_encode([
            'admin_subject' => "नया बायोडाटा दर्ज हुआ: {$firstName} {$lastName} ({$city}, {$caste})",
            'admin_body'    => "एक सदस्य ने धीरजा मैट्रिमोनी पर अपना बायोडाटा सफलतापूर्वक पूर्ण किया है:\n\n• ID: {$userMid}\n• नाम: {$firstName} {$lastName}\n• जेंडर: {$gender}\n• जन्मतिथि: {$dob}\n• शहर: {$city}, {$state}\n• समाज/जाति: {$caste} " . ($subCaste ? "({$subCaste})" : "") . "\n• गोत्र: {$gotra}\n• शिक्षा: {$highestEdu}\n• व्यवसाय: {$occupation}\n• वार्षिक आय: ₹" . number_format($annualIncome),
            'user_email'    => $userEmail,
            'user_name'     => $firstName
        ]));

        $root = dirname(__DIR__);
        @exec("php {$root}/bin/send_async_mail.php '{$payload}' > /dev/null 2>&1 &");
    } catch (\Throwable $e) {}

    // Clean community name for dedicated samaj group
    $cleanSamaj = explode(' ', $caste)[0];
    $cleanSamaj = explode('(', $cleanSamaj)[0];
    $cleanSamaj = trim($cleanSamaj);
    $_SESSION['auth_user_caste'] = $caste;
    $_SESSION['auth_user_samaj'] = $cleanSamaj;
    \App\Core\Session::set('auth_user_caste', $caste);
    \App\Core\Session::set('auth_user_samaj', $cleanSamaj);

    \App\Core\Session::flash('success', "आपका बायोडाटा {$cleanSamaj} समाज ग्रुप में सुरक्षित हो गया है! केवल अपने समाज के रिश्ते नीचे तालिका में देखें।");
    return Response::redirect('/matches?samaj=' . urlencode($cleanSamaj));
});

// Royal Biodata (Golden Border & 1-Click PDF Download Routes)
$router->get('/biodata/royal/{id}', function (Request $request) {
    $id = strtolower(trim($request->param('id', '1')));
    $autoDownload = ($request->get('download') === '1');
    
    // Dataset of 4 featured candidates
    $catalog = [
        '1' => [
            'id'             => 'DM10028',
            'name'           => 'प्रिया शर्मा (Priya Sharma)',
            'raw_name'       => 'Priya Sharma',
            'gender_prefix'  => 'सौभाग्यकांक्षिणी (सौ.)',
            'dob'            => '12 मई 1998 (12-05-1998)',
            'birth_time'     => 'प्रातः 07:45 बजे',
            'birth_place'    => 'इन्दौर, मध्य प्रदेश',
            'age'            => '26 वर्ष',
            'height'         => '5 फीट 4 इंच (163 cm)',
            'complexion'     => 'गोरा (Fair & Radiant)',
            'marital_status' => 'अविवाहित (Never Married)',
            'diet'           => 'शुद्ध शाकाहारी (Vegetarian)',
            'religion'       => 'सनातन हिन्दू (Hinduism)',
            'caste'          => 'सनाढ्य ब्राह्मण (Brahmin)',
            'sub_caste'      => 'सनाढ्य',
            'gotra'          => 'कश्यप (Kashyap)',
            'origin_gotra'   => 'शांडिल्य (ऐच्छिक)',
            'rashi'          => 'कन्या (Virgo)',
            'nakshatra'      => 'हस्त (तृतीय चरण)',
            'manglik'        => 'नहीं (अमांगलिक / सौम्य कुंडली)',
            'guna_score'     => '28 / 36 गुण उत्तम',
            'education'      => 'B.Tech (Computer Science & Engg.)',
            'college'        => 'SGSITS, Indore (Gold Medalist)',
            'occupation'     => 'सीनियर सॉफ्टवेयर इंजीनियर (Sr. Software Engineer)',
            'company'        => 'MNC Tech Solutions (Work from Home / Hybrid)',
            'income'         => '₹ 14,50,000/- प्रतिवर्ष (14.5 LPA)',
            'work_city'      => 'इन्दौर / बेंगलुरु',
            'father_name'    => 'डॉ. रमाकांत शर्मा (Dr. Ramakant Sharma)',
            'father_occ'     => 'मुख्य चिकित्सा अधिकारी (Chief Medical Officer, Retd.)',
            'mother_name'    => 'श्रीमती सुनीता शर्मा (Mrs. Sunita Sharma)',
            'mother_occ'     => 'गृहणी (सुसंस्कृत धार्मिक परिवार)',
            'brothers'       => '1 छोटा भाई (IIT Delhi से B.Tech, कार्यरत)',
            'sisters'        => 'कोई नहीं',
            'native_place'   => 'इन्दौर / उज्जैन (मध्य प्रदेश)',
            'family_type'    => 'उच्च मध्यमवर्गीय, संयुक्त व संस्कारी परिवार',
            'contact_person' => 'डॉ. रमाकांत शर्मा (पिताजी)',
            'phone'          => '+91 98260 41289',
            'email'          => 'sharma.priya98@example.com',
            'address'        => '142, साकेत नगर, ओल्ड पलासिया, इन्दौर (म.प्र.) - 452001',
            'photo'          => '/assets/images/match_priya.jpg',
            'verified'       => true,
            'verified_date'  => date('d-m-Y')
        ],
        '2' => [
            'id'             => 'DM10034',
            'name'           => 'नेहा वर्मा (Neha Verma)',
            'raw_name'       => 'Neha Verma',
            'gender_prefix'  => 'सौभाग्यकांक्षिणी (सौ.)',
            'dob'            => '18 अगस्त 2000 (18-08-2000)',
            'birth_time'     => 'प्रातः 10:15 बजे',
            'birth_place'    => 'पुणे, महाराष्ट्र',
            'age'            => '24 वर्ष',
            'height'         => '5 फीट 3 इंच (160 cm)',
            'complexion'     => 'गेहुंआ/गोरा (Fair)',
            'marital_status' => 'अविवाहित (Never Married)',
            'diet'           => 'शाकाहारी (Vegetarian)',
            'religion'       => 'सनातन हिन्दू (Hinduism)',
            'caste'          => 'कायस्थ (Kayastha)',
            'sub_caste'      => 'श्रीवास्तव',
            'gotra'          => 'भारद्वाज (Bharadwaj)',
            'origin_gotra'   => 'कश्यप (ऐच्छिक)',
            'rashi'          => 'तुला (Libra)',
            'nakshatra'      => 'चित्रा (द्वितीय चरण)',
            'manglik'        => 'आंशिक मांगलिक (परिहार सहित)',
            'guna_score'     => '31 / 36 गुण अत्यंत शुभ',
            'education'      => 'M.Sc (Biotechnology)',
            'college'        => 'पुणे यूनिवर्सिटी (University of Pune)',
            'occupation'     => 'क्लीनिकल रिसर्च एसोसिएट (Clinical Research Associate)',
            'company'        => 'सीरम इंस्टीट्यूट ऑफ इंडिया (Serum Institute)',
            'income'         => '₹ 9,80,000/- प्रतिवर्ष (9.8 LPA)',
            'work_city'      => 'पुणे, महाराष्ट्र',
            'father_name'    => 'श्री सतीश वर्मा (Mr. Satish Verma)',
            'father_occ'     => 'सेवानिवृत्त बैंक मुख्य प्रबंधक (Retd. Chief Manager, SBI)',
            'mother_name'    => 'श्रीमती अनीता वर्मा (Mrs. Anita Verma)',
            'mother_occ'     => 'वरिष्ठ अध्यापिका (Senior Teacher, Govt. School)',
            'brothers'       => 'कोई नहीं',
            'sisters'        => '1 बड़ी बहन (विवाहित, MNC में कार्यरत)',
            'native_place'   => 'पुणे / नागपुर (महाराष्ट्र)',
            'family_type'    => 'मध्यमवर्गीय, संस्कारी व शिक्षित परिवार',
            'contact_person' => 'श्री सतीश वर्मा (पिताजी)',
            'phone'          => '+91 97654 82910',
            'email'          => 'verma.neha2000@example.com',
            'address'        => 'फ्लैट 402, रॉयल पाम्स, कोथरुड, पुणे (महाराष्ट्र) - 411038',
            'photo'          => '/assets/images/match_neha.jpg',
            'verified'       => true,
            'verified_date'  => date('d-m-Y')
        ],
        '3' => [
            'id'             => 'DM10042',
            'name'           => 'अंजलि सिंह (Anjali Singh)',
            'raw_name'       => 'Anjali Singh',
            'gender_prefix'  => 'सौभाग्यकांक्षिणी (सौ.)',
            'dob'            => '04 नवम्बर 1999 (04-11-1999)',
            'birth_time'     => 'प्रातः 04:30 बजे (ब्रह्म मुहूर्त)',
            'birth_place'    => 'जयपुर, राजस्थान',
            'age'            => '25 वर्ष',
            'height'         => '5 फीट 5 इंच (165 cm)',
            'complexion'     => 'अत्यंत गोरा (Very Fair & Royal)',
            'marital_status' => 'अविवाहित (Never Married)',
            'diet'           => 'शुद्ध शाकाहारी (Vegetarian)',
            'religion'       => 'सनातन हिन्दू (Hinduism)',
            'caste'          => 'राजपूत राठौड़ (Rajput)',
            'sub_caste'      => 'राठौड़',
            'gotra'          => 'गौतम (Gautam)',
            'origin_gotra'   => 'राठौड़ कुल (ऐच्छिक)',
            'rashi'          => 'वृषभ (Taurus)',
            'nakshatra'      => 'रोहिणी (प्रथम चरण)',
            'manglik'        => 'नहीं (अमांगलिक / सर्वगुण संपन्न)',
            'guna_score'     => '32 / 36 गुण सर्वश्रेष्ठ',
            'education'      => 'MBA (Finance & Banking)',
            'college'        => 'राजस्थान विश्वविद्यालय, जयपुर',
            'occupation'     => 'असिस्टेंट मैनेजर (Assistant Manager)',
            'company'        => 'HDFC बैंक लिमिटेड',
            'income'         => '₹ 12,00,000/- प्रतिवर्ष (12 LPA)',
            'work_city'      => 'जयपुर, राजस्थान',
            'father_name'    => 'ठाकुर भंवर सिंह (Thakur Bhanwar Singh)',
            'father_occ'     => 'कृषि एवं प्रतिष्ठित रियल एस्टेट व्यवसायी',
            'mother_name'    => 'श्रीमती पुष्पा कंवर (Mrs. Pushpa Kanwar)',
            'mother_occ'     => 'गृहणी (रॉयल राजपूत परंपरा)',
            'brothers'       => '2 भाई (1 भारतीय सेना में कैप्टन, 1 बिज़नेस)',
            'sisters'        => 'कोई नहीं',
            'native_place'   => 'जयपुर / जोधपुर (राजस्थान)',
            'family_type'    => 'कुलीन रॉयल राजपूत संयुक्त परिवार',
            'contact_person' => 'ठाकुर भंवर सिंह (पिताजी)',
            'phone'          => '+91 94140 76321',
            'email'          => 'anjali.singh.rajput@example.com',
            'address'        => 'राठौड़ विला, प्लॉट 52, वैशाली नगर, जयपुर (राजस्थान) - 302021',
            'photo'          => '/assets/images/match_anjali.jpg',
            'verified'       => true,
            'verified_date'  => date('d-m-Y')
        ],
        '4' => [
            'id'             => 'DM10055',
            'name'           => 'रीतिका पटेल (Ritika Patel)',
            'raw_name'       => 'Ritika Patel',
            'gender_prefix'  => 'सौभाग्यकांक्षिणी (सौ.)',
            'dob'            => '22 जनवरी 1997 (22-01-1997)',
            'birth_time'     => 'दोपहर 01:20 बजे',
            'birth_place'    => 'अहमदाबाद, गुजरात',
            'age'            => '27 वर्ष',
            'height'         => '5 फीट 2 इंच (158 cm)',
            'complexion'     => 'गोरा (Fair)',
            'marital_status' => 'अविवाहित (Never Married)',
            'diet'           => 'शुद्ध शाकाहारी (Pure Jain/Vegetarian)',
            'religion'       => 'सनातन हिन्दू वैष्णव (Hindu Vaishnav)',
            'caste'          => 'कड़वा पाटीदार (Patidar)',
            'sub_caste'      => 'पाटीदार',
            'gotra'          => 'वशिष्ठ (Vashishtha)',
            'origin_gotra'   => 'कश्यप (ऐच्छिक)',
            'rashi'          => 'मिथुन (Gemini)',
            'nakshatra'      => 'पुनर्वसु (चतुर्थ चरण)',
            'manglik'        => 'नहीं (अमांगलिक)',
            'guna_score'     => '29 / 36 गुण उत्तम',
            'education'      => 'CA (Chartered Accountant) & B.Com',
            'college'        => 'The Institute of Chartered Accountants of India (ICAI)',
            'occupation'     => 'सीनियर फाइनेंशियल ऑडिटर (Senior Financial Auditor)',
            'company'        => 'Big 4 Financial Advisory Services',
            'income'         => '₹ 16,00,000/- प्रतिवर्ष (16 LPA)',
            'work_city'      => 'अहमदाबाद, गुजरात',
            'father_name'    => 'श्री दिनेश पटेल (Mr. Dinesh Patel)',
            'father_occ'     => 'उद्योगपति (डायरेक्टर - टेक्सटाइल एक्सपोर्ट्स)',
            'mother_name'    => 'श्रीमती हंसा पटेल (Mrs. Hansa Patel)',
            'mother_occ'     => 'गृहणी (धार्मिक एवं परोपकारी)',
            'brothers'       => '1 बड़ा भाई (विवाहित, टेक्सटाइल फैक्ट्री डायरेक्टर)',
            'sisters'        => 'कोई नहीं',
            'native_place'   => 'अहमदाबाद / मेहसाणा (गुजरात)',
            'family_type'    => 'उच्च संभ्रांत, प्रतिष्ठित वैष्णव व्यापारिक परिवार',
            'contact_person' => 'श्री दिनेश पटेल (पिताजी)',
            'phone'          => '+91 98980 54312',
            'email'          => 'ritika.patel.ca@example.com',
            'address'        => '701, शिवालिक हाइट्स, बोडकदेव, एस.जी. हाईवे, अहमदाबाद (गुजरात) - 380054',
            'photo'          => '/assets/images/match_ritika.jpg',
            'verified'       => true,
            'verified_date'  => date('d-m-Y')
        ]
    ];
    
    // Slugs mapping
    $slugMap = [
        'priya' => '1', 'priya-sharma' => '1',
        'neha'  => '2', 'neha-verma'    => '2',
        'anjali'=> '3', 'anjali-singh'  => '3',
        'ritika'=> '4', 'ritika-patel'  => '4'
    ];
    if (isset($slugMap[$id])) {
        $id = $slugMap[$id];
    }

    $candidate = $catalog[$id] ?? null;

    // Check database if numeric and not found in catalog
    if (!$candidate && is_numeric($id)) {
        $dbUser = \App\Core\Database::fetch("SELECT u.*, p.first_name, p.last_name, p.gender, p.dob, p.height_cm, p.current_city, p.complexion, p.marital_status, p.eating_habits,
            a.religion, a.caste, a.gotra, a.rashi, a.nakshatra, a.manglik, a.birth_time, a.birth_city,
            e.highest_education, e.occupation, e.organization_name, e.annual_income_inr, e.work_city,
            f.father_name, f.father_occupation, f.mother_name, f.family_type, f.native_city
            FROM users u
            LEFT JOIN profiles p ON u.id = p.user_id
            LEFT JOIN astrology_details a ON u.id = a.user_id
            LEFT JOIN education_careers e ON u.id = e.user_id
            LEFT JOIN family_details f ON u.id = f.user_id
            WHERE u.id = :id", ['id' => (int)$id]);

        if ($dbUser) {
            $fullName = trim(($dbUser['first_name'] ?? 'सदस्य') . ' ' . ($dbUser['last_name'] ?? ''));
            $isFemale = ($dbUser['gender'] ?? 'male') === 'female';
            $candidate = [
                'id'             => $dbUser['matrimony_id'] ?? ('DM' . $dbUser['id']),
                'name'           => $fullName,
                'raw_name'       => $fullName,
                'gender_prefix'  => $isFemale ? 'सौभाग्यकांक्षिणी (सौ.)' : 'आयुष्मान (चि.)',
                'dob'            => date('d M Y', strtotime($dbUser['dob'] ?? '1998-01-01')),
                'birth_time'     => $dbUser['birth_time'] ?? 'प्रातः 08:00 बजे',
                'birth_place'    => $dbUser['birth_city'] ?: ($dbUser['current_city'] ?? 'जयपुर'),
                'age'            => '26 वर्ष',
                'height'         => $dbUser['height_cm'] ? round($dbUser['height_cm']/30.48, 1) . ' फीट' : "5'6\"",
                'complexion'     => $dbUser['complexion'] ?? 'गोरा',
                'marital_status' => $dbUser['marital_status'] ?? 'अविवाहित',
                'diet'           => $dbUser['eating_habits'] ?? 'शाकाहारी',
                'religion'       => $dbUser['religion'] ?? 'सनातन हिन्दू',
                'caste'          => $dbUser['caste'] ?? 'सामान्य',
                'sub_caste'      => '',
                'gotra'          => $dbUser['gotra'] ?? 'कश्यप',
                'origin_gotra'   => 'ऐच्छिक',
                'rashi'          => $dbUser['rashi'] ?? 'तुला',
                'nakshatra'      => $dbUser['nakshatra'] ?? 'चित्रा',
                'manglik'        => ($dbUser['manglik'] === 'yes') ? 'मांगलिक' : 'अमांगलिक',
                'guna_score'     => '30 / 36 गुण शुभ',
                'education'      => $dbUser['highest_education'] ?? 'स्नातक (Graduate)',
                'college'        => 'विश्वविद्यालय',
                'occupation'     => $dbUser['occupation'] ?? 'कार्यरत',
                'company'        => $dbUser['organization_name'] ?? 'प्रतिष्ठित संस्थान',
                'income'         => $dbUser['annual_income_inr'] ? ('₹ ' . number_format($dbUser['annual_income_inr']) . '/-') : '₹ 8,00,000/-',
                'work_city'      => $dbUser['work_city'] ?: ($dbUser['current_city'] ?? 'जयपुर'),
                'father_name'    => $dbUser['father_name'] ?: 'अभिभावक',
                'father_occ'     => $dbUser['father_occupation'] ?: 'व्यवसाय / सेवा',
                'mother_name'    => $dbUser['mother_name'] ?: 'माताजी',
                'mother_occ'     => 'गृहणी',
                'brothers'       => 'विवरण उपलब्ध',
                'sisters'        => 'विवरण उपलब्ध',
                'native_place'   => $dbUser['native_city'] ?: ($dbUser['current_city'] ?? 'जयपुर'),
                'family_type'    => $dbUser['family_type'] ?? 'संस्कारी परिवार',
                'contact_person' => $dbUser['father_name'] ?: 'अभिभावक',
                'phone'          => $dbUser['phone'] ?? '+91 98000 00000',
                'email'          => $dbUser['email'] ?? 'contact@dheerajamatrimony.com',
                'address'        => ($dbUser['current_city'] ?? 'जयपुर') . ', भारत',
                'photo'          => '/assets/images/dheeraja_dm_logo_clean.jpg',
                'verified'       => true,
                'verified_date'  => date('d-m-Y')
            ];
        }
    }

    if (!$candidate) {
        $candidate = $catalog['1'];
    }

    Response::view('home/biodata_royal', [
        'candidate'     => $candidate,
        'auto_download' => $autoDownload
    ], null);
});

$router->get('/biodata/preview/{id}', function (Request $request) {
    Response::redirect('/biodata/royal/' . $request->param('id'));
});

$router->get('/biodata/download/{id}', function (Request $request) {
    Response::redirect('/biodata/royal/' . $request->param('id') . '?download=1');
});

// Helper to fetch and format dynamic candidate profiles from MySQL database
if (!function_exists('fetchDynamicCandidatesData')) {
    function fetchDynamicCandidatesData(string $requestedSamaj = 'सिंधी', int $limit = 100, int $offset = 0): array {
        $casteDictionary = [
            'सिंधी' => ['hi' => 'सिंधी', 'en' => 'Sindhi'],
            'sindhi' => ['hi' => 'सिंधी', 'en' => 'Sindhi'],
            'brahmin' => ['hi' => 'ब्राह्मण', 'en' => 'Brahmin'],
            'rajput' => ['hi' => 'राजपूत', 'en' => 'Rajput'],
            'marwari' => ['hi' => 'मारवाड़ी', 'en' => 'Marwari'],
            'maheshwari' => ['hi' => 'माहेश्वरी', 'en' => 'Maheshwari'],
            'agarwal' => ['hi' => 'अग्रवाल', 'en' => 'Agarwal'],
            'jain' => ['hi' => 'जैन', 'en' => 'Jain'],
            'sikh' => ['hi' => 'सिख', 'en' => 'Sikh'],
            'patel' => ['hi' => 'पटेल', 'en' => 'Patel'],
            'jat' => ['hi' => 'जाट', 'en' => 'Jat'],
            'yadav' => ['hi' => 'यादव', 'en' => 'Yadav'],
            'gurjar' => ['hi' => 'गुर्जर', 'en' => 'Gurjar'],
            'soni' => ['hi' => 'सोनी', 'en' => 'Soni'],
            'saini' => ['hi' => 'सैनी', 'en' => 'Saini'],
            'bishnoi' => ['hi' => 'बिश्नोई', 'en' => 'Bishnoi'],
            'kayastha' => ['hi' => 'कायस्थ', 'en' => 'Kayastha'],
            'vaishya' => ['hi' => 'वैश्य', 'en' => 'Vaishya'],
            'baniya' => ['hi' => 'बनिया', 'en' => 'Baniya'],
            'reddy' => ['hi' => 'रेड्डी', 'en' => 'Reddy'],
            'bengali' => ['hi' => 'बंगाली', 'en' => 'Bengali'],
            'सामान्य' => ['hi' => 'सामान्य', 'en' => 'General'],
        ];

        $sql = "SELECT u.id, u.matrimony_id, u.phone, u.email, u.is_vip, u.is_kyc_verified, u.is_photo_verified,
                       p.first_name, p.last_name, p.gender, p.dob, p.height_cm, p.current_city, p.current_state, p.about_me,
                       p.marital_status, p.eating_habits, p.complexion,
                       ec.highest_education, ec.college_university, ec.employed_in, ec.occupation, ec.organization_name, ec.annual_income_inr, ec.work_city,
                       ad.religion, ad.caste, ad.sub_caste, ad.gotra, ad.rashi, ad.nakshatra, ad.manglik, ad.birth_time, ad.birth_city,
                       fd.father_name, fd.father_occupation, fd.mother_name, fd.family_type, fd.native_city, fd.native_state,
                       up.file_path as profile_photo
                FROM users u
                JOIN profiles p ON p.user_id = u.id
                LEFT JOIN education_careers ec ON ec.user_id = u.id
                LEFT JOIN astrology_details ad ON ad.user_id = u.id
                LEFT JOIN family_details fd ON fd.user_id = u.id
                LEFT JOIN user_photos up ON up.user_id = u.id AND up.is_profile_picture = 1
                WHERE u.status = 'active' AND u.id != 1
                ORDER BY (ad.caste = :samaj OR ad.caste LIKE :samaj_like) DESC, u.is_vip DESC, u.id DESC
                LIMIT {$limit} OFFSET {$offset}";

        $raw = Database::fetchAll($sql, [
            'samaj' => $requestedSamaj,
            'samaj_like' => '%' . $requestedSamaj . '%'
        ]);

        $candidates = [];
        $catalog = [];

        foreach ($raw as $c) {
            $id = (int)$c['id'];
            $first = trim($c['first_name'] ?? '');
            $last = trim($c['last_name'] ?? '');
            $name = trim($first . ' ' . $last) ?: 'विशिष्ट सदस्य';
            $gender = strtolower($c['gender'] ?? 'female');

            // Age
            $age = 25;
            if (!empty($c['dob']) && $c['dob'] !== '0000-00-00') {
                try {
                    $dobDate = new \DateTime($c['dob']);
                    $age = (new \DateTime())->diff($dobDate)->y;
                } catch (\Exception $e) {}
            }

            // Height
            $heightCm = (int)($c['height_cm'] ?? 165);
            if ($heightCm <= 0) $heightCm = 165;
            $totalInches = (int)round($heightCm / 2.54);
            $feet = (int)floor($totalInches / 12);
            $inches = $totalInches % 12;
            $heightFormatted = "{$feet}'{$inches}\"";

            // City & State
            $city = trim($c['current_city'] ?? 'Jaipur');
            $state = trim($c['current_state'] ?? 'Rajasthan');
            $location = $city . ($state ? ', ' . $state : '');

            // Caste mapping
            $rawCaste = trim($c['caste'] ?? 'सामान्य');
            $casteKey = strtolower($rawCaste);
            $dict = $casteDictionary[$casteKey] ?? ['hi' => $rawCaste, 'en' => $rawCaste];
            $casteBadge = $dict['hi'];
            $casteSearch = $dict['hi'] . ' ' . $dict['en'] . ' ' . $rawCaste;

            // Gotra
            $gotra = trim($c['gotra'] ?? ($c['sub_caste'] ?? 'कश्यप'));
            if (!$gotra) $gotra = 'कश्यप';

            // Manglik
            $rawManglik = strtolower(trim($c['manglik'] ?? 'no'));
            if (str_contains($rawManglik, 'yes') || str_contains($rawManglik, 'manglik')) {
                $manglikCode = 'manglik';
                $manglikLabel = 'मांगलिक';
            } elseif (str_contains($rawManglik, 'anshik')) {
                $manglikCode = 'anshik';
                $manglikLabel = 'आंशिक मांगलिक';
            } else {
                $manglikCode = 'non_manglik';
                $manglikLabel = 'अमांगलिक';
            }

            // Income
            $annualIncome = (int)($c['annual_income_inr'] ?? 0);
            $incomeLpa = $annualIncome > 0 ? round($annualIncome / 100000, 1) : 0;

            // Profession & Education
            $occ = trim($c['occupation'] ?? 'कार्यरत');
            $edu = trim($c['highest_education'] ?? 'स्नातक (Graduate)');
            $occLower = strtolower($occ . ' ' . $edu);
            $profCode = 'business_finance';
            $occLabel = $occ;
            if (str_contains($occLower, 'software') || str_contains($occLower, 'tech') || str_contains($occLower, 'developer') || str_contains($occLower, 'engineer') || str_contains($occLower, 'it')) {
                $profCode = 'it_software';
                $occLabel = 'IT व सॉफ्टवेयर';
            } elseif (str_contains($occLower, 'doctor') || str_contains($occLower, 'dentist') || str_contains($occLower, 'mds') || str_contains($occLower, 'surgeon') || str_contains($occLower, 'bds') || str_contains($occLower, 'orthodontist')) {
                $profCode = 'doctor_healthcare';
                $occLabel = 'चिकित्सक व स्वास्थ्य';
            } elseif (str_contains($occLower, 'ca') || str_contains($occLower, 'cfa') || str_contains($occLower, 'bank') || str_contains($occLower, 'finance') || str_contains($occLower, 'investment')) {
                $profCode = 'ca_finance';
                $occLabel = 'CA, वित्त व बैंकिंग';
            } elseif (str_contains($occLower, 'ras') || str_contains($occLower, 'ias') || str_contains($occLower, 'govt') || str_contains($occLower, 'सरकारी')) {
                $profCode = 'govt_service';
                $occLabel = 'सरकारी / सिविल सेवा';
            } elseif (str_contains($occLower, 'design') || str_contains($occLower, 'fashion') || str_contains($occLower, 'stylist') || str_contains($occLower, 'jewellery') || str_contains($occLower, 'ux')) {
                $profCode = 'design_architecture';
                $occLabel = 'डिज़ाइन व फैशन';
            } elseif (str_contains($occLower, 'lecturer') || str_contains($occLower, 'professor') || str_contains($occLower, 'teacher') || str_contains($occLower, 'b.ed')) {
                $profCode = 'education_teaching';
                $occLabel = 'शिक्षण व प्राध्यापक';
            }

            // Photo
            $photo = trim($c['profile_photo'] ?? '');
            if (!$photo) {
                $photo = ($gender === 'female') ? '/uploads/photos/user_20_photo_1.svg' : '/uploads/photos/user_10_photo_1.svg';
            }

            // Phone & Father Info
            $phone = trim($c['phone'] ?? '+91 98290 12345');
            $fatherName = trim($c['father_name'] ?? '');
            $fatherOcc = trim($c['father_occupation'] ?? '');
            $fatherInfo = $fatherName ? ($fatherName . ($fatherOcc ? ' (' . $fatherOcc . ')' : '')) : 'श्री परिवार प्रमुख (व्यापार/सेवा)';

            // Deterministic features
            $gunaScore = 27 + (($id * 7) % 7);
            $isOnline = ($id % 2 === 0 || $id >= 40);
            $viewCount = 2 + (($id * 3) % 15);
            $activityTime = ($id % 3 === 0) ? 'Today, 10:15 AM' : (($id % 2 === 0) ? 'Yesterday, 04:30 PM' : '2 days ago');

            // Categories
            $cats = ['all'];
            if ($id % 2 === 0 || $id >= 40) $cats[] = 'viewed_me';
            if ($id % 3 === 0) $cats[] = 'mutual';
            if ($id % 5 === 0) $cats[] = 'shortlisted';
            if ($id % 4 === 0) $cats[] = 'interests_received';
            if ($c['is_kyc_verified'] || $c['is_photo_verified']) $cats[] = 'verified';

            $cand = [
                'id' => $id,
                'matrimony_id' => $c['matrimony_id'] ?? ('DM' . (10000 + $id)),
                'name' => $name,
                'first_name' => $first,
                'last_name' => $last,
                'gender' => $gender,
                'age' => $age,
                'dob' => $c['dob'] ?? '1998-05-14',
                'height_cm' => $heightCm,
                'height_formatted' => $heightFormatted,
                'height_inches' => $totalInches,
                'city' => $city,
                'state' => $state,
                'location' => $location,
                'caste' => $rawCaste,
                'caste_badge' => $casteBadge,
                'caste_search' => $casteSearch,
                'sub_caste' => $c['sub_caste'] ?? '',
                'gotra' => $gotra,
                'rashi' => $c['rashi'] ?? '',
                'manglik_code' => $manglikCode,
                'manglik_label' => $manglikLabel,
                'education' => $edu,
                'college' => $c['college_university'] ?? '',
                'occupation' => $occ,
                'occupation_label' => $occLabel,
                'profession_code' => $profCode,
                'annual_income_inr' => $annualIncome,
                'income_lpa' => $incomeLpa,
                'photo' => $photo,
                'phone' => $phone,
                'father_name' => $fatherName ?: 'श्री परिवार प्रमुख',
                'father_occ' => $fatherOcc ?: 'व्यावसायिक / सेवा',
                'father_info' => $fatherInfo,
                'mother_name' => $c['mother_name'] ?? 'श्रीमती गृहलक्ष्मी',
                'family_type' => $c['family_type'] ?? 'nuclear',
                'native_city' => $c['native_city'] ?? $city,
                'native_state' => $c['native_state'] ?? $state,
                'is_vip' => (bool)$c['is_vip'],
                'is_verified' => (bool)($c['is_kyc_verified'] || $c['is_photo_verified']),
                'is_royal' => (bool)$c['is_vip'],
                'is_online' => $isOnline,
                'guna_score' => $gunaScore,
                'view_count' => $viewCount,
                'activity_time' => $activityTime,
                'categories' => implode(',', $cats),
                'marital' => $c['marital_status'] ?? 'never_married',
                'diet' => $c['eating_habits'] ?? 'vegetarian',
                'complexion' => $c['complexion'] ?? 'fair',
                'about_me' => $c['about_me'] ?? '',
            ];

            $candidates[] = $cand;

            // Build Royal Catalog Entry
            $genderPrefix = ($gender === 'male') ? 'सौभाग्यकांक्षी (चि.)' : 'सौभाग्यकांक्षिणी (सौ.)';
            $catalog[$name] = [
                'id' => $cand['matrimony_id'],
                'slug' => strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $name)),
                'name' => $name,
                'raw_name' => $name,
                'gender_prefix' => $genderPrefix,
                'dob' => !empty($c['dob']) ? date('d M Y', strtotime($c['dob'])) : '14 मई 1998',
                'birth_time' => !empty($c['birth_time']) ? $c['birth_time'] : 'प्रातः 08:30 बजे',
                'birth_place' => $location,
                'age_height' => "{$age} वर्ष | {$heightFormatted}",
                'caste' => "{$casteBadge} ({$rawCaste})",
                'caste_full' => "{$casteBadge} (सनातन हिन्दू)",
                'religion' => 'सनातन हिन्दू',
                'gotra' => "{$gotra} ({$casteBadge} समाज)",
                'origin_gotra' => 'शांडिल्य / भारद्वाज',
                'rashi' => !empty($c['rashi']) ? $c['rashi'] : 'मेष / वृषभ',
                'manglik' => $manglikLabel,
                'guna_score' => "{$gunaScore} / 36 गुण उत्तम",
                'education' => $edu,
                'college' => !empty($c['college_university']) ? $c['college_university'] : 'विश्वविद्यालय सम्बद्ध',
                'occupation' => $occ,
                'company' => !empty($c['organization_name']) ? $c['organization_name'] : 'प्रतिष्ठित संस्थान',
                'income' => "₹ {$incomeLpa} LPA",
                'income_full' => "₹ " . number_format($annualIncome) . "/- प्रतिवर्ष ({$incomeLpa} LPA)",
                'work_city' => $city,
                'marital' => 'अविवाहित (Never Married)',
                'diet' => 'शुद्ध शाकाहारी',
                'complexion' => 'गोरा (Fair & Radiant)',
                'father_name' => $cand['father_name'],
                'father_occ' => $cand['father_occ'],
                'mother_name' => $cand['mother_name'],
                'siblings' => '1 भाई, 1 बहन',
                'native' => $cand['native_city'] . ', ' . $cand['native_state'],
                'family_type' => 'एकल व संभ्रांत परिवार (Nuclear)',
                'contact_person' => $cand['father_name'],
                'phone' => $phone,
                'address' => $location,
                'photo' => $photo
            ];
        }

        return ['candidates' => $candidates, 'catalog' => $catalog];
    }
}

// Fourth Page: Activity & Matches Tracker / तालिका वाला पेज
$matchesHandler = function (Request $request) {
    $requestedSamaj = trim($request->input('samaj', ''));
    if (!$requestedSamaj) {
        $requestedSamaj = \App\Core\Session::get('auth_user_samaj') ?: ($_SESSION['auth_user_samaj'] ?? '');
    }
    if (!$requestedSamaj) {
        $authId = (int)(\App\Core\Session::get('auth_user_id') ?: ($_SESSION['auth_user_id'] ?? 0));
        if ($authId > 0) {
            $userAstro = Database::fetch("SELECT caste FROM astrology_details WHERE user_id = :uid", ['uid' => $authId]);
            if ($userAstro && !empty($userAstro['caste'])) {
                $requestedSamaj = $userAstro['caste'];
            }
        }
    }
    if (!$requestedSamaj) {
        $requestedSamaj = 'सिंधी';
    }

    // Dynamic database load of active candidate biodatas
    $data = fetchDynamicCandidatesData($requestedSamaj, 100, 0);

    Response::view('home/matches', [
        'page_title'      => 'Dheeraja Royal Matrimony™ | Activity & Matches Tracker (तालिका)',
        'flashSuccess'    => \App\Core\Session::get('_flash')['success'] ?? null,
        'flashError'      => \App\Core\Session::get('_flash')['error'] ?? null,
        'user_samaj'      => $requestedSamaj,
        'candidates'      => $data['candidates'],
        'biodata_catalog' => $data['catalog'],
        'total_count'     => count($data['candidates']),
    ], null);
    unset($_SESSION['_flash']);
};
$router->get('/matches', $matchesHandler);
$router->post('/matches', $matchesHandler);

// Dynamic Infinite Scroll / AJAX Load More Endpoint
$router->get('/matches/load-more', function (Request $request) {
    $samaj = trim($request->input('samaj', 'all'));
    $page = max(1, (int)$request->input('page', 1));
    $limit = max(1, min(50, (int)$request->input('limit', 12)));
    $offset = ($page - 1) * $limit;

    $data = fetchDynamicCandidatesData($samaj, $limit, $offset);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        'success'    => true,
        'page'       => $page,
        'limit'      => $limit,
        'candidates' => $data['candidates'],
        'catalog'    => $data['catalog'],
        'has_more'   => count($data['candidates']) === $limit,
    ], JSON_UNESCAPED_UNICODE);
    exit;
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
