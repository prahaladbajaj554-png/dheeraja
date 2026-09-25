<?php
/**
 * Dheeraja Royal Matrimony — Royal Biodata with Golden Border
 * Print & 1-Click PDF Download View
 */
$c = $candidate ?? [
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
    'father_occ'     => 'मुख्य चिकित्सा अधिकारी (Chief Medical Officer, Govt. Retd.)',
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
];
$autoDownload = !empty($auto_download);
?>
<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($c['raw_name']) ?> — धीरजा रॉयल वैवाहिक बायोडाटा | Dheeraja Matrimony</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700;800;900&family=Cinzel+Decorative:wght@700;900&family=Yatra+One&family=Rozha+One&family=Noto+Serif+Devanagari:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- html2pdf Bundle for 1-Click Download -->
  <script src="/assets/js/html2pdf.bundle.min.js"></script>

  <style>
    :root {
      --gold-1: #BF953F;
      --gold-2: #FCF6BA;
      --gold-3: #B38728;
      --gold-4: #FBF5B7;
      --gold-5: #AA771C;
      --emerald-dark: #064E3B;
      --maroon-dark: #7F1D1D;
    }

    body {
      background-color: #1a2e26;
      background-image: radial-gradient(#0d3829 1px, transparent 1px), radial-gradient(#0d3829 1px, #072319 1px);
      background-size: 40px 40px;
      background-position: 0 0, 20px 20px;
      font-family: 'Noto Serif Devanagari', 'Plus Jakarta Sans', serif;
      color: #2D3748;
      margin: 0;
      padding: 0;
    }

    .font-cinzel { font-family: 'Cinzel', serif; }
    .font-cinzel-dec { font-family: 'Cinzel Decorative', cursive; }
    .font-rozha { font-family: 'Rozha One', 'Noto Serif Devanagari', serif; }
    .font-yatra { font-family: 'Yatra One', 'Noto Serif Devanagari', cursive; }

    /* A4 Sheet Dimensions for Screen & Print */
    .biodata-sheet {
      width: 100%;
      max-width: 820px;
      min-height: 1140px;
      margin: 20px auto 40px auto;
      background: #FFFDF9;
      position: relative;
      box-shadow: 0 20px 50px rgba(0,0,0,0.5), 0 0 20px rgba(212, 175, 55, 0.3);
      border-radius: 8px;
      overflow: hidden;
    }

    /* Royal Golden Ornate Double Border */
    .royal-border-outer {
      padding: 14px;
      background: linear-gradient(135deg, #BF953F 0%, #FCF6BA 25%, #B38728 50%, #FBF5B7 75%, #AA771C 100%);
      box-shadow: 0 0 25px rgba(212, 175, 55, 0.45);
      border-radius: 6px;
    }

    .royal-border-middle {
      padding: 6px;
      background: #064E3B;
      border-radius: 4px;
    }

    .royal-border-inner {
      background: #FFFDF9;
      border: 2px solid #D4AF37;
      padding: 24px 26px;
      position: relative;
      border-radius: 3px;
    }

    /* Ornate Corner Elements */
    .corner-flourish {
      position: absolute;
      width: 44px;
      height: 44px;
      pointer-events: none;
      z-index: 10;
    }
    .corner-tl { top: 6px; left: 6px; }
    .corner-tr { top: 6px; right: 6px; transform: rotate(90deg); }
    .corner-bl { bottom: 6px; left: 6px; transform: rotate(-90deg); }
    .corner-br { bottom: 6px; right: 6px; transform: rotate(180deg); }

    /* Watermark background */
    .royal-watermark {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 380px;
      height: 380px;
      opacity: 0.045;
      background-image: url('/assets/images/dheeraja_dm_logo_icon.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      pointer-events: none;
      z-index: 1;
    }

    /* Section Banners */
    .section-banner {
      background: linear-gradient(90deg, #064E3B 0%, #0F684F 50%, #064E3B 100%);
      color: #F8E7A2;
      padding: 5px 14px;
      border-radius: 6px;
      border-left: 5px solid #D4AF37;
      border-right: 5px solid #D4AF37;
      box-shadow: 0 2px 6px rgba(6, 78, 59, 0.25);
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 8px;
    }

    /* Attribute Table Row */
    .attr-row {
      display: flex;
      padding: 4px 6px;
      border-bottom: 1px dashed #E5D5BA;
      font-size: 12.5px;
      align-items: baseline;
    }
    .attr-row:last-child {
      border-bottom: none;
    }
    .attr-label {
      width: 38%;
      font-weight: 700;
      color: #78350F;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .attr-sep {
      width: 4%;
      text-align: center;
      color: #92400E;
      font-weight: bold;
    }
    .attr-val {
      width: 58%;
      color: #1F2937;
      font-weight: 700;
    }

    /* Candidate Photo Golden Frame */
    .photo-gold-frame {
      position: relative;
      padding: 4px;
      background: linear-gradient(135deg, #BF953F 0%, #FCF6BA 35%, #B38728 70%, #AA771C 100%);
      border-radius: 16px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.18), 0 0 12px rgba(212, 175, 55, 0.4);
      display: inline-block;
    }
    .photo-gold-frame img {
      width: 145px;
      height: 175px;
      object-fit: cover;
      border-radius: 12px;
      display: block;
      border: 2px solid #FFFDF9;
      pointer-events: none;
      user-select: none;
      -webkit-user-drag: none;
    }

    /* Photo Security Watermark Shield */
    .photo-watermark-overlay {
      position: absolute;
      inset: 4px;
      pointer-events: none;
      overflow: hidden;
      z-index: 10;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 12px;
      background: radial-gradient(circle at center, rgba(255,255,255,0.06) 0%, transparent 80%);
    }
    .photo-watermark-text {
      position: absolute;
      transform: rotate(-32deg);
      white-space: nowrap;
      color: rgba(255, 255, 255, 0.45);
      font-size: 8.5px;
      font-weight: 800;
      letter-spacing: 0.8px;
      text-transform: uppercase;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.85);
      user-select: none;
      pointer-events: none;
    }
    .photo-security-pill {
      position: absolute;
      bottom: 8px;
      right: 8px;
      padding: 2px 6px;
      border-radius: 4px;
      background: rgba(6, 78, 59, 0.90);
      backdrop-filter: blur(2px);
      border: 1px solid rgba(212, 175, 55, 0.8);
      color: #FFF2C2;
      font-size: 8px;
      font-weight: 800;
      font-family: monospace;
      display: flex;
      align-items: center;
      gap: 3px;
      z-index: 12;
      pointer-events: none;
      box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    }

    /* Print Specific Styles */
    @media print {
      body {
        background: #FFFFFF !important;
        padding: 0 !important;
      }
      .no-print {
        display: none !important;
      }
      .biodata-sheet {
        margin: 0 !important;
        box-shadow: none !important;
        max-width: 100% !important;
        width: 100% !important;
        border-radius: 0 !important;
      }
      .royal-border-outer {
        box-shadow: none !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
      }
      @page {
        size: A4 portrait;
        margin: 6mm;
      }
    }
  </style>
</head>
<body class="antialiased">

  <!-- ==================== TOP FLOATING ACTIONS (NO-PRINT) ==================== -->
  <header class="no-print sticky top-0 z-50 bg-[#042F24]/95 backdrop-blur-md border-b-2 border-[#D4AF37] px-4 py-2.5 shadow-xl">
    <div class="max-w-4xl mx-auto flex flex-wrap items-center justify-between gap-2.5">
      <!-- Back Link -->
      <a href="/matches" class="flex items-center space-x-1.5 text-xs font-bold text-amber-200 hover:text-white px-3 py-1.5 rounded-full bg-white/10 hover:bg-white/20 transition active:scale-95">
        <i class="fa-solid fa-arrow-left"></i>
        <span>वापस रिश्ते तालिका (पेज 4)</span>
      </a>

      <!-- Title / Branding -->
      <div class="hidden sm:flex items-center space-x-2 text-center">
        <span class="font-cinzel text-sm font-bold text-[#F5D061]">DHEERAJA ROYAL BIODATA</span>
        <span class="text-[11px] text-emerald-200">|</span>
        <span class="text-xs text-emerald-100 font-semibold">सुनहरे बॉर्डर वाला वैवाहिक बायोडाटा</span>
      </div>

      <!-- Action Buttons -->
      <div class="flex items-center space-x-2">
        <!-- 1-Click Instant Download Button -->
        <button id="btn1ClickDownload" onclick="downloadRoyalBiodataPdf()" class="px-4 py-2 rounded-full bg-gradient-to-r from-amber-400 via-amber-500 to-amber-600 hover:from-amber-500 hover:to-amber-700 text-[#064E3B] font-extrabold text-xs flex items-center space-x-2 shadow-lg shadow-amber-500/30 transition transform hover:scale-[1.02] active:scale-95 cursor-pointer">
          <i class="fa-solid fa-cloud-arrow-down text-sm text-[#064E3B]"></i>
          <span>⚡ 1-क्लिक डाउनलोड PDF (टेक क्लिक वन डाउन)</span>
        </button>

        <!-- Print / Save Button -->
        <button onclick="window.print()" class="px-3 py-2 rounded-full bg-emerald-800 hover:bg-emerald-700 text-white font-bold text-xs flex items-center space-x-1.5 border border-emerald-500 transition active:scale-95" title="सीधे प्रिंट करें या ब्राउज़र से PDF सेव करें">
          <i class="fa-solid fa-print"></i>
          <span>प्रिंट</span>
        </button>
      </div>
    </div>
  </header>

  <!-- Download Status Toast (Hidden by default) -->
  <div id="pdfProgressToast" class="no-print fixed top-16 left-1/2 -translate-x-1/2 z-50 hidden bg-[#064E3B] text-white px-5 py-3 rounded-2xl border-2 border-amber-400 shadow-2xl flex items-center space-x-3 animate-pulse">
    <i class="fa-solid fa-spinner fa-spin text-amber-300 text-lg"></i>
    <div>
      <h4 class="text-xs font-bold text-amber-200">✨ 1-क्लिक रॉयल बायोडाटा PDF तैयार हो रहा है...</h4>
      <p class="text-[11px] text-emerald-100">हाई-रेजोल्यूशन सुनहरा बॉर्डर वाला बायोडाटा डाउनलोड हो रहा है।</p>
    </div>
  </div>

  <!-- ==================== MAIN ROYAL BIODATA SHEET ==================== -->
  <main class="biodata-sheet" id="royalBiodataElement">
    <!-- Outer Golden Border -->
    <div class="royal-border-outer">
      <!-- Middle Emerald Framing -->
      <div class="royal-border-middle">
        <!-- Inner Parchment Sheet -->
        <div class="royal-border-inner">

          <!-- 4 Ornate Vector Corner Flourishes -->
          <svg class="corner-flourish corner-tl" viewBox="0 0 50 50">
            <path d="M0,0 L50,0 C35,6 20,20 14,35 L14,50 C8,35 6,15 0,0 Z" fill="#BF953F"/>
            <path d="M4,4 L42,4 C30,9 18,20 12,32 L12,42 C7,30 5,14 4,4 Z" fill="#FCF6BA"/>
            <circle cx="8" cy="8" r="3.5" fill="#78350F"/>
          </svg>
          <svg class="corner-flourish corner-tr" viewBox="0 0 50 50">
            <path d="M0,0 L50,0 C35,6 20,20 14,35 L14,50 C8,35 6,15 0,0 Z" fill="#BF953F"/>
            <path d="M4,4 L42,4 C30,9 18,20 12,32 L12,42 C7,30 5,14 4,4 Z" fill="#FCF6BA"/>
            <circle cx="8" cy="8" r="3.5" fill="#78350F"/>
          </svg>
          <svg class="corner-flourish corner-bl" viewBox="0 0 50 50">
            <path d="M0,0 L50,0 C35,6 20,20 14,35 L14,50 C8,35 6,15 0,0 Z" fill="#BF953F"/>
            <path d="M4,4 L42,4 C30,9 18,20 12,32 L12,42 C7,30 5,14 4,4 Z" fill="#FCF6BA"/>
            <circle cx="8" cy="8" r="3.5" fill="#78350F"/>
          </svg>
          <svg class="corner-flourish corner-br" viewBox="0 0 50 50">
            <path d="M0,0 L50,0 C35,6 20,20 14,35 L14,50 C8,35 6,15 0,0 Z" fill="#BF953F"/>
            <path d="M4,4 L42,4 C30,9 18,20 12,32 L12,42 C7,30 5,14 4,4 Z" fill="#FCF6BA"/>
            <circle cx="8" cy="8" r="3.5" fill="#78350F"/>
          </svg>

          <!-- Watermark Background -->
          <div class="royal-watermark"></div>

          <!-- ==================== HEADER: GANESHA & BRANDING ==================== -->
          <div class="relative z-10 text-center pb-3 border-b-2 border-[#D4AF37]">
            <!-- Auspicious Invocation -->
            <div class="flex items-center justify-center space-x-2 text-[#9A1B1E] font-extrabold text-sm sm:text-base font-rozha tracking-wider">
              <span>卐</span>
              <span class="tracking-widest">॥ श्री गणेशाय नमः ॥</span>
              <span>卐</span>
            </div>

            <!-- Royal Crest & Matrimony Title -->
            <div class="mt-1 flex items-center justify-center space-x-2">
              <div class="w-8 h-8 rounded-full bg-gradient-to-br from-amber-300 via-amber-500 to-amber-700 p-0.5 shadow-md flex items-center justify-center">
                <div class="w-full h-full rounded-full bg-[#064E3B] flex items-center justify-center">
                  <i class="fa-solid fa-crown text-amber-300 text-xs"></i>
                </div>
              </div>
              <div class="text-center">
                <h1 class="font-cinzel-dec text-xl sm:text-2xl font-black text-[#064E3B] tracking-wider leading-none">
                  DHEERAJA ROYAL MATRIMONY
                </h1>
                <p class="font-rozha text-xs text-[#92400E] font-bold tracking-widest mt-0.5">
                  ॥ पवित्र सनातन विवाह संगम • 100% सत्यापित बायोडाटा ॥
                </p>
              </div>
            </div>

            <!-- Matrimony ID & Verification Badge -->
            <div class="mt-1.5 flex items-center justify-center space-x-3 text-[10.5px]">
              <span class="px-2.5 py-0.5 rounded-full bg-amber-100/90 text-amber-900 border border-amber-300 font-bold font-mono">
                ID: <?= htmlspecialchars($c['id']) ?>
              </span>
              <span class="px-2.5 py-0.5 rounded-full bg-emerald-100/90 text-emerald-900 border border-emerald-300 font-bold flex items-center space-x-1">
                <i class="fa-solid fa-shield-check text-emerald-600"></i>
                <span>सत्यापित सदस्य (Verified Profile)</span>
              </span>
              <span class="px-2.5 py-0.5 rounded-full bg-stone-100 text-stone-700 border border-stone-300 font-bold">
                <?= htmlspecialchars($c['guna_score']) ?>
              </span>
            </div>
          </div>

          <!-- ==================== CANDIDATE SPOTLIGHT & PHOTO ==================== -->
          <div class="relative z-10 mt-4 mb-3 flex flex-col sm:flex-row items-center sm:items-start gap-4 pb-3 border-b border-[#E5D5BA]">
            <!-- Candidate Photo with Golden Framing -->
            <div class="shrink-0 text-center">
              <div class="photo-gold-frame relative overflow-hidden select-none">
                <img src="<?= htmlspecialchars($c['photo']) ?>" alt="<?= htmlspecialchars($c['raw_name']) ?>" onerror="this.src='/assets/images/dheeraja_dm_logo_clean.jpg'" class="pointer-events-none select-none" draggable="false" oncontextmenu="return false;">
                <!-- Security Watermark Overlay -->
                <div class="photo-watermark-overlay">
                  <span class="photo-watermark-text" style="top: 25%;">DHEERAJA • <?= htmlspecialchars($c['id']) ?></span>
                  <span class="photo-watermark-text" style="top: 50%;">धीरजा सुरक्षा • केवल रिश्ते हेतु</span>
                  <span class="photo-watermark-text" style="top: 75%;">ROYAL VERIFIED</span>
                </div>
                <!-- Security Pill Badge -->
                <div class="photo-security-pill" title="धीरजा सुरक्षा वाटरमार्क">
                  <i class="fa-solid fa-shield-halved text-amber-300"></i>
                  <span><?= htmlspecialchars($c['id']) ?></span>
                </div>
              </div>
              <div class="mt-1">
                <span class="inline-block px-3 py-0.5 rounded-full bg-gradient-to-r from-amber-400 to-amber-600 text-[#064E3B] font-extrabold text-[9.5px] uppercase tracking-wider shadow-sm">
                  ★ प्रमाणित वर/वधू ★
                </span>
              </div>
            </div>

            <!-- Candidate Title & Headline Details -->
            <div class="flex-1 text-center sm:text-left">
              <div class="inline-block px-2.5 py-0.5 rounded-full bg-amber-50 border border-amber-300 text-[#9A1B1E] text-[11px] font-bold mb-1">
                <?= htmlspecialchars($c['gender_prefix']) ?>
              </div>
              <h2 class="text-xl sm:text-2xl font-black text-[#064E3B] font-rozha tracking-wide leading-tight">
                <?= htmlspecialchars($c['name']) ?>
              </h2>
              
              <!-- Quick Stats Grid in Golden Tag Style -->
              <div class="mt-2 grid grid-cols-2 gap-2 text-xs">
                <div class="bg-amber-50/70 p-2 rounded-lg border border-amber-200">
                  <span class="text-[10px] text-amber-800 font-bold block uppercase">आयु एवं कद</span>
                  <span class="font-extrabold text-stone-900"><?= htmlspecialchars($c['age']) ?> | <?= htmlspecialchars($c['height']) ?></span>
                </div>
                <div class="bg-emerald-50/70 p-2 rounded-lg border border-emerald-200">
                  <span class="text-[10px] text-emerald-800 font-bold block uppercase">जाति / समाज</span>
                  <span class="font-extrabold text-stone-900"><?= htmlspecialchars($c['caste']) ?></span>
                </div>
                <div class="bg-amber-50/70 p-2 rounded-lg border border-amber-200">
                  <span class="text-[10px] text-amber-800 font-bold block uppercase">उच्चतम शिक्षा</span>
                  <span class="font-extrabold text-stone-900 truncate block"><?= htmlspecialchars($c['education']) ?></span>
                </div>
                <div class="bg-emerald-50/70 p-2 rounded-lg border border-emerald-200">
                  <span class="text-[10px] text-emerald-800 font-bold block uppercase">पेशा एवं आय</span>
                  <span class="font-extrabold text-stone-900 truncate block"><?= htmlspecialchars($c['income']) ?></span>
                </div>
              </div>

              <!-- Current Location Tag -->
              <p class="mt-2 text-xs font-semibold text-stone-700 flex items-center justify-center sm:justify-start space-x-1.5">
                <i class="fa-solid fa-location-dot text-rose-600"></i>
                <span>वर्तमान निवास: <strong><?= htmlspecialchars($c['work_city']) ?></strong></span>
              </p>
            </div>
          </div>

          <!-- ==================== SECTION 1: व्यक्तिगत विवरण ==================== -->
          <div class="relative z-10 mb-3.5">
            <div class="section-banner">
              <span class="font-bold text-xs sm:text-sm font-rozha tracking-wider flex items-center space-x-1.5">
                <i class="fa-solid fa-user-check text-amber-300 text-xs"></i>
                <span>१. व्यक्तिगत विवरण (Personal Details)</span>
              </span>
              <span class="text-[10px] font-sans opacity-80 uppercase tracking-widest">Confidential &bull; Verified</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 bg-white/70 p-2 rounded-lg border border-amber-100">
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-cake-candles text-[10px] text-amber-700"></i> जन्म तिथि</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['dob']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-regular fa-clock text-[10px] text-amber-700"></i> जन्म समय</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['birth_time']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-map-pin text-[10px] text-amber-700"></i> जन्म स्थान</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['birth_place']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-ruler-vertical text-[10px] text-amber-700"></i> कद एवं रंग</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['height']) ?>, <?= htmlspecialchars($c['complexion']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-ring text-[10px] text-amber-700"></i> वैवाहिक स्थिति</span>
                <span class="attr-sep">:</span>
                <span class="attr-val text-emerald-800"><?= htmlspecialchars($c['marital_status']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-leaf text-[10px] text-emerald-700"></i> खान-पान</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['diet']) ?></span>
              </div>
            </div>
          </div>

          <!-- ==================== SECTION 2: धार्मिक एवं ज्योतिषीय विवरण ==================== -->
          <div class="relative z-10 mb-3.5">
            <div class="section-banner">
              <span class="font-bold text-xs sm:text-sm font-rozha tracking-wider flex items-center space-x-1.5">
                <i class="fa-solid fa-om text-amber-300 text-xs"></i>
                <span>२. धार्मिक एवं ज्योतिषीय विवरण (Astro & Gotra)</span>
              </span>
              <span class="text-[10px] font-sans opacity-80 uppercase tracking-widest">36 Gunas Compatible</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 bg-white/70 p-2 rounded-lg border border-amber-100">
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-hands-praying text-[10px] text-amber-700"></i> धर्म</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['religion']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-users text-[10px] text-amber-700"></i> समाज / जाति</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['caste']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-tree text-[10px] text-emerald-700"></i> गोत्र (स्वयं/पिता)</span>
                <span class="attr-sep">:</span>
                <span class="attr-val font-extrabold text-[#064E3B]"><?= htmlspecialchars($c['gotra']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-seedling text-[10px] text-amber-700"></i> मूल गोत्र (ऐच्छिक)</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['origin_gotra'] ?? 'लागू नहीं') ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-moon text-[10px] text-amber-700"></i> राशि व नक्षत्र</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['rashi']) ?> (<?= htmlspecialchars($c['nakshatra']) ?>)</span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-dharmachakra text-[10px] text-amber-700"></i> मांगलिक स्थिति</span>
                <span class="attr-sep">:</span>
                <span class="attr-val text-emerald-800"><?= htmlspecialchars($c['manglik']) ?></span>
              </div>
            </div>
          </div>

          <!-- ==================== SECTION 3: शैक्षणिक एवं कार्य विवरण ==================== -->
          <div class="relative z-10 mb-3.5">
            <div class="section-banner">
              <span class="font-bold text-xs sm:text-sm font-rozha tracking-wider flex items-center space-x-1.5">
                <i class="fa-solid fa-graduation-cap text-amber-300 text-xs"></i>
                <span>३. शैक्षणिक एवं व्यावसायिक विवरण (Education & Profession)</span>
              </span>
              <span class="text-[10px] font-sans opacity-80 uppercase tracking-widest">High Career Status</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 bg-white/70 p-2 rounded-lg border border-amber-100">
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-award text-[10px] text-amber-700"></i> उच्चतम शिक्षा</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['education']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-building-columns text-[10px] text-amber-700"></i> कॉलेज/यूनिवर्सिटी</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['college']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-briefcase text-[10px] text-amber-700"></i> पद / पेशा</span>
                <span class="attr-sep">:</span>
                <span class="attr-val font-bold text-stone-900"><?= htmlspecialchars($c['occupation']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-building text-[10px] text-amber-700"></i> कार्यरत संस्था</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['company']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-indian-rupee-sign text-[10px] text-emerald-700"></i> वार्षिक आय (LPA)</span>
                <span class="attr-sep">:</span>
                <span class="attr-val font-black text-[#064E3B]"><?= htmlspecialchars($c['income']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-city text-[10px] text-amber-700"></i> कार्य क्षेत्र</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['work_city']) ?></span>
              </div>
            </div>
          </div>

          <!-- ==================== SECTION 4: पारिवारिक पृष्ठभूमि ==================== -->
          <div class="relative z-10 mb-3.5">
            <div class="section-banner">
              <span class="font-bold text-xs sm:text-sm font-rozha tracking-wider flex items-center space-x-1.5">
                <i class="fa-solid fa-people-roof text-amber-300 text-xs"></i>
                <span>४. पारिवारिक पृष्ठभूमि (Family Background)</span>
              </span>
              <span class="text-[10px] font-sans opacity-80 uppercase tracking-widest">Respected Lineage</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 bg-white/70 p-2 rounded-lg border border-amber-100">
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-user-tie text-[10px] text-amber-700"></i> पूज्य पिताश्री</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['father_name']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-briefcase text-[10px] text-amber-700"></i> पिता का व्यवसाय</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['father_occ']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-person-dress text-[10px] text-amber-700"></i> पूज्या माताजी</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['mother_name']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-heart text-[10px] text-rose-600"></i> माता का विवरण</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['mother_occ']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-person text-[10px] text-amber-700"></i> भाई का विवरण</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['brothers']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-person-dress text-[10px] text-amber-700"></i> बहन का विवरण</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['sisters']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-landmark text-[10px] text-amber-700"></i> मूल निवास/पैतृक</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['native_place']) ?></span>
              </div>
              <div class="attr-row">
                <span class="attr-label"><i class="fa-solid fa-house-chimney text-[10px] text-amber-700"></i> परिवार संस्कार</span>
                <span class="attr-sep">:</span>
                <span class="attr-val"><?= htmlspecialchars($c['family_type']) ?></span>
              </div>
            </div>
          </div>

          <!-- ==================== SECTION 5: संपर्क एवं स्थायी पता ==================== -->
          <div class="relative z-10 mb-4">
            <div class="section-banner">
              <span class="font-bold text-xs sm:text-sm font-rozha tracking-wider flex items-center space-x-1.5">
                <i class="fa-solid fa-address-book text-amber-300 text-xs"></i>
                <span>५. संपर्क सूत्र एवं निवास पता (Contact & Residence)</span>
              </span>
              <span class="text-[10px] font-sans opacity-80 uppercase tracking-widest">Direct Guardian Contact</span>
            </div>

            <div class="bg-amber-50/60 p-3 rounded-lg border border-amber-200">
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                <div>
                  <span class="text-[10px] font-bold text-amber-800 uppercase block">संपर्क व्यक्ति / अभिभावक:</span>
                  <p class="font-extrabold text-stone-900 mt-0.5 text-sm"><?= htmlspecialchars($c['contact_person']) ?></p>
                  <p class="font-mono font-bold text-base text-[#064E3B] mt-0.5">
                    <i class="fa-solid fa-phone text-xs text-emerald-600 mr-1"></i> <?= htmlspecialchars($c['phone']) ?>
                  </p>
                </div>
                <div>
                  <span class="text-[10px] font-bold text-amber-800 uppercase block">ईमेल एवं निवास पता:</span>
                  <p class="font-medium text-stone-700 mt-0.5"><?= htmlspecialchars($c['email']) ?></p>
                  <p class="font-semibold text-stone-800 mt-0.5 leading-snug">
                    <i class="fa-solid fa-location-dot text-rose-600 mr-1 text-xs"></i> <?= htmlspecialchars($c['address']) ?>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- ==================== FOOTER: OFFICIAL ROYAL SEAL ==================== -->
          <div class="relative z-10 pt-3 border-t-2 border-[#D4AF37] flex items-center justify-between text-xs text-stone-600">
            <!-- Left: Dheeraja Royal Seal Badge -->
            <div class="flex items-center space-x-2.5">
              <div class="w-12 h-12 rounded-full border-2 border-[#D4AF37] p-0.5 shadow-md flex items-center justify-center shrink-0 bg-gradient-to-br from-amber-100 to-amber-200">
                <div class="w-full h-full rounded-full border border-amber-600 border-dashed flex flex-col items-center justify-center text-[7px] font-bold text-amber-900 leading-none text-center">
                  <span>★ DHEERAJA ★</span>
                  <span class="text-[9px] font-black text-[#064E3B] my-0.5">100%</span>
                  <span>VERIFIED</span>
                </div>
              </div>
              <div>
                <h4 class="font-cinzel text-xs font-bold text-[#064E3B] leading-tight">धी धीरजा रॉयल मैट्रिमोनी™</h4>
                <p class="text-[10px] text-stone-500 leading-tight">पवित्र भारतीय वैवाहिक परंपराओं का संगम • अधिकृत मुहर</p>
                <p class="text-[9px] text-amber-800 font-semibold font-mono">सत्यापन तिथि: <?= htmlspecialchars($c['verified_date']) ?></p>
              </div>
            </div>

            <!-- Right: Digital QR & Disclaimer -->
            <div class="text-right">
              <div class="inline-block p-1 bg-white border border-amber-300 rounded shadow-xs">
                <!-- Inline QR Code SVG / Pattern -->
                <svg width="42" height="42" viewBox="0 0 33 33" class="text-[#064E3B] fill-current">
                  <path d="M0,0 h11 v11 h-11 z M2,2 v7 h7 v-7 z M4,4 h3 v3 h-3 z"/>
                  <path d="M22,0 h11 v11 h-11 z M24,2 v7 h7 v-7 z M26,4 h3 v3 h-3 z"/>
                  <path d="M0,22 h11 v11 h-11 z M2,24 v7 h7 v-7 z M4,26 h3 v3 h-3 z"/>
                  <rect x="14" y="2" width="5" height="2"/>
                  <rect x="14" y="6" width="2" height="5"/>
                  <rect x="18" y="8" width="2" height="5"/>
                  <rect x="14" y="14" width="5" height="5"/>
                  <rect x="2" y="14" width="5" height="2"/>
                  <rect x="8" y="18" width="4" height="2"/>
                  <rect x="14" y="22" width="2" height="5"/>
                  <rect x="18" y="24" width="4" height="2"/>
                  <rect x="24" y="14" width="4" height="4"/>
                  <rect x="24" y="22" width="2" height="6"/>
                  <rect x="28" y="26" width="4" height="2"/>
                </svg>
              </div>
              <p class="text-[8.5px] text-stone-400 mt-0.5 leading-none">www.dheerajamatrimony.com</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

  <!-- ==================== JAVASCRIPT: 1-CLICK INSTANT DOWNLOAD ==================== -->
  <script>
    /**
     * Download the Royal Golden Border Biodata as a PDF in ONE SINGLE CLICK!
     */
    function downloadRoyalBiodataPdf() {
      const element = document.getElementById('royalBiodataElement');
      const candidateRawName = "<?= addslashes($c['raw_name']) ?>";
      const cleanFileName = `Dheeraja_Royal_Biodata_${candidateRawName.replace(/[^a-zA-Z0-9]/g, '_')}.pdf`;

      // Show Progress Toast
      const toast = document.getElementById('pdfProgressToast');
      if (toast) toast.classList.remove('hidden');

      // Optimization settings for pixel-perfect A4 golden border
      const opt = {
        margin:       [4, 4, 4, 4],
        filename:     cleanFileName,
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { 
          scale: 2, 
          useCORS: true, 
          letterRendering: true,
          scrollY: 0,
          windowWidth: 860
        },
        jsPDF: { 
          unit: 'mm', 
          format: 'a4', 
          orientation: 'portrait' 
        }
      };

      // 1-Click Execution
      html2pdf().set(opt).from(element).save().then(function() {
        if (toast) toast.classList.add('hidden');
        alert("✨ बधाई! आपका सुनहरे बॉर्डर वाला रॉयल बायोडाटा PDF सफलतापूर्वक 1-क्लिक में डाउनलोड हो गया है।");
      }).catch(function(err) {
        if (toast) toast.classList.add('hidden');
        console.error("PDF download error:", err);
        // Fallback to print
        if (confirm("PDF डाउनलोड हेतु क्या आप प्रिंट/सेव विकल्प का उपयोग करना चाहते हैं?")) {
          window.print();
        }
      });
    }

    // Auto-download trigger if requested via URL query (?download=1)
    <?php if ($autoDownload): ?>
    window.addEventListener('DOMContentLoaded', function() {
      setTimeout(downloadRoyalBiodataPdf, 800);
    });
    <?php endif; ?>
  </script>
</body>
</html>
