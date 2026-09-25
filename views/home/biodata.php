<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>DHEERAJA™ ROYAL MATRIMONY | वर / वधू बायोडाटा फॉर्म</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Cinzel:wght@600;700;800;900&family=Great+Vibes&family=Playfair+Display:ital,wght@1,600;1,700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Rozha+One&family=Noto+Sans+Devanagari:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            maroon: { 700: '#6B1D2F', 800: '#521321', 900: '#420A16', 950: '#2A050D' },
            gold: { 300: '#F3D883', 400: '#E6C254', 500: '#D4AF37', 600: '#B89326' },
            emerald: { 500: '#10B981', 600: '#059669', 700: '#047857', 800: '#065F46', 900: '#064E3B', 950: '#033626' },
          },
          fontFamily: {
            cinzel: ['Cinzel', 'serif'],
            script: ['"Great Vibes"', '"Alex Brush"', 'cursive'],
            serifText: ['"Playfair Display"', 'serif'],
            sans: ['"Plus Jakarta Sans"', '"Noto Sans Devanagari"', 'sans-serif'],
          }
        }
      }
    }
  </script>

  <!-- Complete In-Page Self-Contained Styles -->
  <style>
    * {
      -webkit-tap-highlight-color: transparent;
      box-sizing: border-box;
    }
    body {
      background-color: #E8F2EA;
      background-image: radial-gradient(rgba(5, 150, 105, 0.12) 1.5px, transparent 1.5px), radial-gradient(rgba(212, 175, 55, 0.12) 1.5px, transparent 1.5px);
      background-size: 28px 28px;
      background-position: 0 0, 14px 14px;
      font-family: 'Plus Jakarta Sans', 'Noto Sans Devanagari', sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
    }
    /* Main Biodata Form Shell (Responsive Desktop & Mobile) */
    #biodataShell {
      width: 100%;
      max-width: 1180px;
      min-height: 100vh;
      margin: 0 auto;
      background: #FAFCF9;
      position: relative;
      box-shadow: 0 25px 70px rgba(6, 78, 59, 0.22), 0 6px 24px rgba(0,0,0,0.1);
      display: flex;
      flex-direction: column;
      transition: max-width 0.3s ease;
    }
    @media (min-width: 640px) {
      #biodataShell {
        min-height: auto;
        margin: 20px auto 70px auto;
        border-radius: 28px;
        border: 3px solid #D4AF37;
        overflow: hidden;
      }
    }
    /* Form Cards matching reference image */
    .form-card {
      background: #FFFFFF;
      border: 1.5px solid #CFE6D4;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 4px 16px rgba(6, 78, 59, 0.05);
      transition: all 0.25s ease;
    }
    .form-card:hover {
      border-color: #9FD0AC;
      box-shadow: 0 6px 20px rgba(6, 78, 59, 0.09);
    }
    /* Card Header Bar (Solid Royal Emerald with Gold Accent) */
    .card-header-bar {
      background: linear-gradient(135deg, #064E3B 0%, #033626 100%);
      color: #FFFFFF;
      padding: 10px 16px;
      border-bottom: 2px solid #E6C254;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    /* Custom Inputs with Left Icons */
    .input-wrapper {
      position: relative;
      width: 100%;
    }
    .input-wrapper .input-icon {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: #047857;
      font-size: 13px;
      pointer-events: none;
      z-index: 10;
    }
    .input-wrapper textarea ~ .input-icon {
      top: 20px;
      transform: none;
    }
    .royal-input {
      width: 100%;
      background: #F9FCFA;
      border: 1.5px solid #CFE6D4;
      border-radius: 12px;
      padding: 9px 12px 9px 36px;
      font-size: 12px;
      color: #1F2937;
      font-weight: 600;
      transition: all 0.2s ease;
      outline: none;
    }
    .royal-input-noicon {
      padding-left: 12px !important;
    }
    .royal-input:focus {
      background: #FFFFFF;
      border-color: #059669;
      box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.15);
    }
    /* Custom Select Arrow */
    select.royal-input {
      appearance: none;
      -webkit-appearance: none;
      background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23047857' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right 12px center;
      background-size: 14px;
      padding-right: 32px;
      cursor: pointer;
    }
    /* Gender & Option Pill Toggles */
    .pill-radio:checked + label {
      background: linear-gradient(135deg, #065F46 0%, #033626 100%);
      color: #FFFFFF !important;
      border-color: #E6C254 !important;
      box-shadow: 0 4px 12px rgba(6, 78, 59, 0.25);
      transform: translateY(-1px);
    }
    .pill-radio:checked + label .pill-icon {
      color: #F5D061 !important;
    }
    .pill-radio:checked + label span {
      color: #FFFFFF !important;
    }
    .pill-radio:checked + label span:last-child {
      color: #E6C254 !important;
    }
    /* Step Navigation Bar */
    .step-node {
      display: flex;
      flex-direction: column;
      align-items: center;
      cursor: pointer;
      position: relative;
      z-index: 10;
      transition: all 0.2s ease;
      text-decoration: none;
    }
    .step-badge {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 13px;
      font-weight: 800;
      background: #FFFFFF;
      border: 2px solid #A7F3D0;
      color: #065F46;
      box-shadow: 0 2px 6px rgba(0,0,0,0.06);
      transition: all 0.2s ease;
    }
    .step-node:hover .step-badge {
      border-color: #059669;
      transform: scale(1.06);
    }
    .step-node.active .step-badge {
      background: linear-gradient(135deg, #065F46 0%, #033626 100%);
      border-color: #E6C254;
      color: #F5D061;
      box-shadow: 0 4px 12px rgba(6, 78, 59, 0.35);
    }
    .step-label {
      font-size: 11px;
      font-weight: 700;
      color: #4B5563;
      margin-top: 5px;
      white-space: nowrap;
    }
    .step-node.active .step-label {
      color: #064E3B;
      font-weight: 800;
    }
    /* Photo Upload Dropzone */
    .photo-upload-dropzone {
      border: 2px dashed #9FD0AC;
      border-radius: 18px;
      background: #F4FAF5;
      cursor: pointer;
      transition: all 0.2s ease;
    }
    .photo-upload-dropzone:hover {
      border-color: #059669;
      background: #ECFDF5;
    }
    /* Thumbnail Slots */
    .thumb-slot {
      aspect-ratio: 1/1;
      border: 2px dashed #BEE3CA;
      border-radius: 14px;
      background: #F9FCFA;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      position: relative;
      overflow: hidden;
      transition: all 0.2s ease;
    }
    .thumb-slot:hover {
      border-color: #059669;
      background: #F0FDF4;
    }
    /* Submit Glow Button */
    .submit-glow-btn {
      background: linear-gradient(135deg, #065F46 0%, #047857 50%, #064E3B 100%);
      box-shadow: 0 6px 20px rgba(6, 78, 59, 0.4), 0 0 15px rgba(212, 175, 55, 0.4);
      transition: all 0.25s ease;
    }
    .submit-glow-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(6, 78, 59, 0.5), 0 0 20px rgba(212, 175, 55, 0.6);
    }
    /* Caste & Gotra Suggestion Pills */
    .caste-chip {
      display: inline-flex;
      align-items: center;
      padding: 5px 11px;
      border-radius: 9999px;
      font-size: 11px;
      font-weight: 700;
      background: #FFFFFF;
      color: #064E3B;
      border: 1.5px solid #A7F3D0;
      transition: all 0.15s ease;
      cursor: pointer;
      user-select: none;
      box-shadow: 0 1px 3px rgba(0,0,0,0.04);
    }
    .caste-chip:hover {
      background: #E8F5EB;
      border-color: #059669;
      transform: translateY(-1px);
    }
    .caste-chip.active {
      background: linear-gradient(135deg, #064E3B 0%, #033626 100%);
      color: #FFFFFF;
      border-color: #E6C254;
      box-shadow: 0 2px 8px rgba(6, 78, 59, 0.25);
    }
    .gotra-pill {
      display: inline-flex;
      align-items: center;
      padding: 3px 8px;
      border-radius: 8px;
      font-size: 10.5px;
      font-weight: 600;
      background: #F0FDF4;
      color: #047857;
      border: 1px solid #A7F3D0;
      cursor: pointer;
      transition: all 0.15s;
    }
    .gotra-pill:hover, .gotra-pill.selected {
      background: #065F46;
      color: #FFFFFF;
      border-color: #E6C254;
    }
    /* Fixed Bottom Nav Bar */
    .bottom-app-nav {
      position: sticky;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 40;
      background: #064E3B;
      border-top: 2px solid #E6C254;
      box-shadow: 0 -4px 16px rgba(0,0,0,0.15);
    }
    .bottom-nav-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 8px 4px;
      color: #D1FAE5;
      font-size: 10px;
      font-weight: 600;
      transition: all 0.2s ease;
      text-decoration: none;
    }
    .bottom-nav-item:hover {
      color: #F5D061;
    }
    .bottom-nav-item.active {
      color: #F5D061;
      font-weight: 800;
    }
    .bottom-nav-item.active i {
      transform: scale(1.15);
      color: #F5D061;
    }
  </style>
</head>
<body class="text-stone-800 antialiased selection:bg-emerald-700 selection:text-white pb-6">

  <!-- Desktop Quick Emulation Bar -->
  <aside class="hidden sm:flex items-center justify-between w-full max-w-6xl px-6 py-2.5 my-2 bg-white/95 backdrop-blur-md rounded-2xl border border-emerald-300 text-stone-700 text-xs shadow-sm">
    <div class="flex items-center space-x-2">
      <a href="/cover" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-bold text-stone-700 flex items-center space-x-1.5 transition" title="कवर पेज">
        <i class="fa-solid fa-home text-[11px] text-amber-600"></i>
        <span>1. कवर पेज</span>
      </a>
      <a href="/welcome" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-bold text-stone-700 flex items-center space-x-1.5 transition" title="वेलकम स्क्रीन">
        <i class="fa-solid fa-arrow-left text-[11px] text-emerald-700"></i>
        <span>2. वेलकम स्क्रीन</span>
      </a>
      <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
      <span class="font-cinzel font-bold text-stone-900 tracking-wider">DHEERAJA ROYAL MATRIMONY™</span>
      <span class="text-stone-400">| 3. सुव्यवस्थित वर / वधू बायोडाटा फॉर्म</span>
    </div>
    <div class="flex items-center space-x-2.5">
      <button onclick="setViewport('440px')" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-mono text-[11px] border border-stone-200 font-medium">मोबाइल (440px)</button>
      <button onclick="setViewport('768px')" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-mono text-[11px] border border-stone-200 font-medium">टैबलेट (768px)</button>
      <button onclick="setViewport('1180px')" class="px-3 py-1 rounded-lg bg-emerald-50 text-emerald-800 font-mono text-[11px] border border-emerald-300 font-bold">पूर्ण डेस्कटॉप (1180px)</button>
      <a href="/matches" class="ml-2 px-3.5 py-1.5 rounded-xl bg-gradient-to-r from-emerald-800 to-emerald-950 text-amber-300 hover:text-white font-bold transition flex items-center space-x-1.5 border border-amber-400/50 shadow-xs">
        <i class="fa-solid fa-table-cells text-xs"></i>
        <span>4. रिश्ते तालिका</span>
      </a>
    </div>
  </aside>

  <!-- ==================== MAIN BIODATA FORM SHELL ==================== -->
  <main id="biodataShell">
    
    <!-- Top Royal Header (Matching reference image header) -->
    <header class="w-full bg-gradient-to-r from-[#033626] via-[#064E3B] to-[#043626] text-white px-4 sm:px-8 py-5 border-b-2 border-[#D4AF37] relative">
      
      <!-- Top Row Quick Links -->
      <div class="flex items-center justify-between pb-3 border-b border-emerald-800/80 mb-3 text-xs">
        <!-- Back to Page 2 -->
        <a href="/welcome" onclick="window.location.href='/welcome'; return false;" class="px-3 py-1 rounded-full bg-white/10 hover:bg-white/20 border border-emerald-400 text-emerald-100 font-bold flex items-center space-x-1.5 transition">
          <i class="fa-solid fa-arrow-left text-xs text-amber-300"></i>
          <span>वापस पेज 2</span>
        </a>

        <!-- Center Status / Launch VIP Banner -->
        <div class="hidden sm:flex items-center space-x-2 text-[11px] text-amber-300 font-semibold bg-emerald-950/60 border border-amber-400/40 px-3 py-1 rounded-full">
          <i class="fa-solid fa-crown text-amber-400"></i>
          <span>लॉन्च ऑफर: फॉर्म भरते ही 3 माह का VIP Pro प्लान बिल्कुल मुफ्त!</span>
        </div>

        <!-- Jump to Page 4 (Matches) & PDF Sample -->
        <div class="flex items-center space-x-2">
          <a href="/biodata/royal/1" target="_blank" class="px-2.5 py-1 rounded-full bg-amber-400 text-amber-950 hover:bg-amber-300 font-bold text-[11px] flex items-center space-x-1 shadow-xs transition">
            <i class="fa-solid fa-file-pdf"></i>
            <span>रॉयल PDF नमूना</span>
          </a>
          <a href="/matches" onclick="window.location.href='/matches'; return false;" class="px-3 py-1 rounded-full bg-gradient-to-r from-amber-400 to-amber-500 text-emerald-950 font-extrabold flex items-center space-x-1.5 shadow-md hover:from-amber-300 hover:to-amber-400 transition transform active:scale-95">
            <span>पेज 4 (तालिका)</span>
            <i class="fa-solid fa-arrow-right text-xs"></i>
          </a>
        </div>
      </div>

      <!-- Main Header Content Grid (Left Brand + Right Biodata Form Calligraphy) -->
      <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
        
        <!-- Left: Crown & Heart Logo + DHEERAJA Title -->
        <div class="flex items-center space-x-3.5 text-center sm:text-left">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-200 via-amber-300 to-amber-500 p-0.5 shadow-lg flex-shrink-0 flex items-center justify-center">
            <div class="w-full h-full bg-[#064E3B] rounded-[14px] flex items-center justify-center overflow-hidden">
              <img src="/assets/images/dheeraja_dm_logo.jpg" alt="Dheeraja Logo" class="w-full h-full object-cover">
            </div>
          </div>
          <div>
            <div class="flex items-center justify-center sm:justify-start space-x-1.5">
              <i class="fa-solid fa-crown text-[#F5D061] text-xs"></i>
              <h1 class="font-cinzel font-extrabold text-xl sm:text-2xl text-white tracking-wider leading-none">
                DHEERAJA
              </h1>
            </div>
            <p class="font-cinzel text-xs font-bold text-amber-300 tracking-widest mt-0.5">
              ROYAL MATRIMONY
            </p>
            <p class="text-[10.5px] text-emerald-200 font-medium tracking-wide mt-0.5">
              Trusted • Traditional • Together Forever
            </p>
          </div>
        </div>

        <!-- Right: Elegant Cursive "Biodata Form" & Tagline -->
        <div class="text-center sm:text-right">
          <div class="font-script text-3xl sm:text-4xl text-[#F5D061] drop-shadow-md leading-tight">
            Biodata Form
          </div>
          <p class="text-xs text-emerald-100 font-medium tracking-wide italic">
            Your Journey to a Better Tomorrow
          </p>
        </div>

      </div>

      <!-- Completion Milestone Bar directly in header -->
      <div class="mt-4 pt-3 border-t border-emerald-800/60">
        <div class="flex items-center justify-between text-xs font-bold mb-1">
          <span class="flex items-center space-x-1.5 text-emerald-100">
            <i class="fa-solid fa-sparkles text-amber-400"></i>
            <span>बायोडाटा पूर्णता (Completion):</span>
            <span id="progressPercent" class="text-amber-300 font-extrabold text-sm ml-1">35%</span>
          </span>
          <span class="text-[10px] text-amber-950 font-bold bg-amber-300 px-2.5 py-0.5 rounded-full shadow-2xs">
            👑 VIP Pro Eligible
          </span>
        </div>
        <div class="w-full h-2.5 bg-emerald-950/80 rounded-full overflow-hidden p-0.5 border border-emerald-700/60">
          <div id="progressBar" class="h-full bg-gradient-to-r from-emerald-400 via-amber-300 to-[#D4AF37] rounded-full transition-all duration-300" style="width: 35%;"></div>
        </div>
        <div id="congratsText" class="mt-1.5 text-[10.5px] text-amber-200 font-semibold text-center sm:text-left">
          📋 बुनियादी जानकारी दर्ज करें... 100% पूरा करने पर 3 माह VIP Pro मुफ्त!
        </div>
      </div>

    </header>

    <!-- ================= HORIZONTAL STEP PROGRESS TRACKER (Matching reference image) ================= -->
    <nav class="w-full bg-[#F3F9F4] border-b border-[#CFE6D4] px-3 sm:px-6 py-3 overflow-x-auto shadow-2xs" aria-label="Form Progress Steps">
      <div class="flex items-center justify-between min-w-[700px] max-w-4xl mx-auto relative">
        
        <!-- Connecting Line -->
        <div class="absolute top-[19px] left-6 right-6 h-0.5 bg-emerald-200 -z-0"></div>

        <!-- 1. Basic -->
        <a href="#sec_basic" class="step-node active" id="stepNode1">
          <div class="step-badge">
            <i class="fa-solid fa-user text-xs"></i>
          </div>
          <span class="step-label">1 Basic</span>
        </a>

        <!-- 2. Family -->
        <a href="#sec_family" class="step-node" id="stepNode2">
          <div class="step-badge">
            <i class="fa-solid fa-users text-xs"></i>
          </div>
          <span class="step-label">Family</span>
        </a>

        <!-- 3. Education -->
        <a href="#sec_education" class="step-node" id="stepNode3">
          <div class="step-badge">
            <i class="fa-solid fa-graduation-cap text-xs"></i>
          </div>
          <span class="step-label">Education</span>
        </a>

        <!-- 4. Lifestyle -->
        <a href="#sec_lifestyle" class="step-node" id="stepNode4">
          <div class="step-badge">
            <i class="fa-solid fa-heart-pulse text-xs"></i>
          </div>
          <span class="step-label">Lifestyle</span>
        </a>

        <!-- 5. Preferences -->
        <a href="#sec_preferences" class="step-node" id="stepNode5">
          <div class="step-badge">
            <i class="fa-solid fa-sliders text-xs"></i>
          </div>
          <span class="step-label">Preferences</span>
        </a>

        <!-- 6. Photos -->
        <a href="#sec_photos" class="step-node" id="stepNode6">
          <div class="step-badge">
            <i class="fa-solid fa-camera text-xs"></i>
          </div>
          <span class="step-label">Photos</span>
        </a>

        <!-- 7. Documents -->
        <a href="#sec_documents" class="step-node" id="stepNode7">
          <div class="step-badge">
            <i class="fa-solid fa-file-lines text-xs"></i>
          </div>
          <span class="step-label">Documents</span>
        </a>

        <!-- 8. Review -->
        <a href="#sec_review" class="step-node" id="stepNode8">
          <div class="step-badge">
            <i class="fa-solid fa-clipboard-check text-xs"></i>
          </div>
          <span class="step-label">Review</span>
        </a>

      </div>
    </nav>

    <!-- ================= MAIN FORM WITH 2-COLUMN MASTER GRID ================= -->
    <form action="/biodata/save" method="POST" enctype="multipart/form-data" id="biodataForm" class="p-3.5 sm:p-6">
      
      <!-- Master 2-Column Responsive Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 sm:gap-6 items-start">
        
        <!-- ################# LEFT COLUMN ################# -->
        <div class="space-y-5 sm:space-y-6">
          
          <!-- ================= CARD 1: Personal Details (व्यक्तिगत जानकारी) ================= -->
          <div class="form-card" id="sec_basic">
            <!-- Header Bar -->
            <div class="card-header-bar">
              <div class="flex items-center space-x-2">
                <i class="fa-solid fa-user-circle text-amber-300 text-sm"></i>
                <h2 class="font-bold text-xs sm:text-sm tracking-wide">Personal Details (व्यक्तिगत जानकारी)</h2>
              </div>
              <span class="text-[11px] text-red-300 font-bold tracking-wide">* Required Field</span>
            </div>

            <!-- Body -->
            <div class="p-4 sm:p-5 space-y-3.5">
              
              <!-- 1. Full Name -->
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">
                  Full Name (पूरा नाम) *
                </label>
                <div class="input-wrapper">
                  <i class="fa-solid fa-user input-icon"></i>
                  <input 
                    type="text" 
                    name="full_name" 
                    id="fullNameInput" 
                    placeholder="Enter your full name (जैसे: राहुल शर्मा)" 
                    class="royal-input" 
                    required 
                    oninput="handleFullNameSplit(this.value); updateFormProgress();"
                  >
                  <!-- Hidden First & Last Name fields for backward compatibility -->
                  <input type="hidden" name="first_name" id="firstNameInput" value="वर">
                  <input type="hidden" name="last_name" id="lastNameInput" value="शर्मा">
                </div>
              </div>

              <!-- 2. Date of Birth & Time of Birth (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1 flex items-center justify-between">
                    <span>Date of Birth *</span>
                    <span id="autoAgeBadge" class="text-[10px] font-extrabold text-emerald-800 bg-emerald-50 px-1.5 py-0.2 rounded border border-emerald-200"></span>
                  </label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-calendar-days input-icon"></i>
                    <input 
                      type="date" 
                      name="dob" 
                      id="dobInput" 
                      class="royal-input font-bold" 
                      required 
                      onchange="calculateAutoAge(); updateFormProgress();"
                    >
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Time of Birth *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-clock input-icon"></i>
                    <input 
                      type="time" 
                      name="birth_time" 
                      id="birthTimeInput" 
                      class="royal-input font-bold" 
                      onchange="updateFormProgress();"
                    >
                  </div>
                </div>
              </div>

              <!-- 3. Place of Birth -->
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Place of Birth (जन्म स्थान) *</label>
                <div class="input-wrapper">
                  <i class="fa-solid fa-location-dot input-icon"></i>
                  <input 
                    type="text" 
                    name="birth_city" 
                    id="birthCityInput" 
                    placeholder="Enter place of birth (जैसे: जयपुर, राजस्थान)" 
                    class="royal-input"
                    oninput="updateFormProgress();"
                  >
                </div>
              </div>

              <!-- 4. Height & Weight (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1 flex items-center justify-between">
                    <span>Height (कद) *</span>
                    <span id="heightDisplayBadge" class="text-[9px] text-emerald-700 font-bold">5'8"</span>
                  </label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-ruler-vertical input-icon"></i>
                    <select name="height_cm" id="heightSelect" class="royal-input" onchange="updateHeightBadge(); updateFormProgress();">
                      <option value="152">5'0" (152 cm)</option>
                      <option value="155">5'1" (155 cm)</option>
                      <option value="157">5'2" (157 cm)</option>
                      <option value="160">5'3" (160 cm)</option>
                      <option value="162">5'4" (162 cm)</option>
                      <option value="165">5'5" (165 cm)</option>
                      <option value="168">5'6" (168 cm)</option>
                      <option value="170">5'7" (170 cm)</option>
                      <option value="173" selected>5'8" (173 cm)</option>
                      <option value="175">5'9" (175 cm)</option>
                      <option value="178">5'10" (178 cm)</option>
                      <option value="180">5'11" (180 cm)</option>
                      <option value="183">6'0" (183 cm)</option>
                      <option value="185">6'1" (185 cm)</option>
                      <option value="188">6'2" (188 cm)</option>
                    </select>
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Weight (वजन) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-weight-scale input-icon"></i>
                    <select name="weight_kg" id="weightSelect" class="royal-input" onchange="updateFormProgress();">
                      <option value="50">50 kg</option>
                      <option value="55">55 kg</option>
                      <option value="60">60 kg</option>
                      <option value="65" selected>65 kg</option>
                      <option value="70">70 kg</option>
                      <option value="75">75 kg</option>
                      <option value="80">80 kg</option>
                      <option value="85">85 kg</option>
                      <option value="90">90 kg</option>
                      <option value="95">95 kg+</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- 5. Complexion & Blood Group (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Complexion (वर्ण) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-sun input-icon"></i>
                    <select name="complexion" class="royal-input" onchange="updateFormProgress();">
                      <option value="fair" selected>गोरा (Fair)</option>
                      <option value="very_fair">अत्यंत गोरा (Very Fair)</option>
                      <option value="wheatish">गेहुंआ (Wheatish)</option>
                      <option value="dark">सांवला (Dusky)</option>
                    </select>
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Blood Group (रक्त समूह) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-droplet input-icon"></i>
                    <select name="blood_group" class="royal-input" onchange="updateFormProgress();">
                      <option value="B+" selected>B +ve</option>
                      <option value="O+">O +ve</option>
                      <option value="A+">A +ve</option>
                      <option value="AB+">AB +ve</option>
                      <option value="B-">B -ve</option>
                      <option value="O-">O -ve</option>
                      <option value="A-">A -ve</option>
                      <option value="AB-">AB -ve</option>
                      <option value="unknown">मालूम नहीं (Unknown)</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- 6. Marital Status & Mobile No. (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Marital Status *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-ring input-icon"></i>
                    <select name="marital_status" class="royal-input" onchange="updateFormProgress();">
                      <option value="never_married" selected>अविवाहित (Never Married)</option>
                      <option value="divorced">तलाकशुदा (Divorced)</option>
                      <option value="widowed">विधुर / विधवा (Widowed)</option>
                    </select>
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Mobile No. *</label>
                  <div class="flex items-center">
                    <span class="inline-flex items-center px-2.5 py-2 rounded-l-xl border border-r-0 border-[#CFE6D4] bg-emerald-50 text-emerald-900 font-bold text-xs">
                      +91
                    </span>
                    <input 
                      type="tel" 
                      name="mobile_number" 
                      placeholder="10 digit number" 
                      maxlength="10" 
                      pattern="[0-9]{10}"
                      class="royal-input rounded-l-none royal-input-noicon font-bold"
                      oninput="updateFormProgress();"
                    >
                  </div>
                </div>
              </div>

              <!-- 7. Email ID -->
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Email ID (ईमेल आईडी) *</label>
                <div class="input-wrapper">
                  <i class="fa-solid fa-envelope input-icon"></i>
                  <input 
                    type="email" 
                    name="email" 
                    placeholder="Enter your email address" 
                    class="royal-input"
                    oninput="updateFormProgress();"
                  >
                </div>
              </div>

              <!-- 8. Profile Created For (Option Buttons matching reference image) -->
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1.5 flex items-center justify-between">
                  <span>Profile Created For (किसके लिए रिश्ता देख रहे हैं?) *</span>
                  <span class="text-[10px] text-emerald-800 font-bold bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-200">
                    विकल्प चुनें
                  </span>
                </label>
                <div class="grid grid-cols-4 gap-1.5 text-center text-xs">
                  <div>
                    <input type="radio" name="profile_for" value="myself" id="pfor_myself" class="hidden pill-radio" checked onchange="updateFormProgress()">
                    <label for="pfor_myself" class="block py-2 px-1 rounded-xl border border-emerald-200 bg-white text-[#064E3B] font-bold cursor-pointer transition shadow-2xs hover:border-emerald-400">
                      <i class="fa-solid fa-user pill-icon text-xs block mb-0.5 text-emerald-700"></i>
                      <span class="block text-[11px]">Self</span>
                      <span class="text-[9px] text-stone-400">(स्वयं)</span>
                    </label>
                  </div>
                  <div>
                    <input type="radio" name="profile_for" value="son_daughter" id="pfor_son_daughter" class="hidden pill-radio" onchange="updateFormProgress()">
                    <label for="pfor_son_daughter" class="block py-2 px-1 rounded-xl border border-emerald-200 bg-white text-[#064E3B] font-bold cursor-pointer transition shadow-2xs hover:border-emerald-400">
                      <i class="fa-solid fa-child pill-icon text-xs block mb-0.5 text-emerald-700"></i>
                      <span class="block text-[11px]">Son/Daughter</span>
                      <span class="text-[9px] text-stone-400">(बेटा/बेटी)</span>
                    </label>
                  </div>
                  <div>
                    <input type="radio" name="profile_for" value="brother_sister" id="pfor_brother_sister" class="hidden pill-radio" onchange="updateFormProgress()">
                    <label for="pfor_brother_sister" class="block py-2 px-1 rounded-xl border border-emerald-200 bg-white text-[#064E3B] font-bold cursor-pointer transition shadow-2xs hover:border-emerald-400">
                      <i class="fa-solid fa-user-group pill-icon text-xs block mb-0.5 text-emerald-700"></i>
                      <span class="block text-[11px]">Brother/Sister</span>
                      <span class="text-[9px] text-stone-400">(भाई/बहन)</span>
                    </label>
                  </div>
                  <div>
                    <input type="radio" name="profile_for" value="relative" id="pfor_relative" class="hidden pill-radio" onchange="updateFormProgress()">
                    <label for="pfor_relative" class="block py-2 px-1 rounded-xl border border-emerald-200 bg-white text-[#064E3B] font-bold cursor-pointer transition shadow-2xs hover:border-emerald-400">
                      <i class="fa-solid fa-handshake-angle pill-icon text-xs block mb-0.5 text-emerald-700"></i>
                      <span class="block text-[11px]">Relative</span>
                      <span class="text-[9px] text-stone-400">(रिश्तेदार)</span>
                    </label>
                  </div>
                </div>
              </div>

              <!-- Gender Selection (वर या वधू) -->
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1.5">Candidate Gender (लिंग) *</label>
                <div class="grid grid-cols-2 gap-2 text-center">
                  <div>
                    <input type="radio" name="gender" value="male" id="gender_male" class="hidden pill-radio" checked onchange="updateGenderChoice('male')">
                    <label for="gender_male" class="block py-2.5 px-3 rounded-xl border-2 border-emerald-200 bg-emerald-50/60 text-[#064E3B] font-bold text-xs cursor-pointer transition">
                      <i class="fa-solid fa-mars pill-icon text-sm mr-1"></i>
                      <span>वर (Groom / Male)</span>
                    </label>
                  </div>
                  <div>
                    <input type="radio" name="gender" value="female" id="gender_female" class="hidden pill-radio" onchange="updateGenderChoice('female')">
                    <label for="gender_female" class="block py-2.5 px-3 rounded-xl border-2 border-emerald-200 bg-emerald-50/60 text-[#064E3B] font-bold text-xs cursor-pointer transition">
                      <i class="fa-solid fa-venus pill-icon text-sm mr-1"></i>
                      <span>वधू (Bride / Female)</span>
                    </label>
                  </div>
                </div>
              </div>

              <!-- 9. About Myself / Short Introduction -->
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">About Myself / Short Introduction</label>
                <div class="input-wrapper">
                  <i class="fa-solid fa-pen-nib input-icon"></i>
                  <textarea 
                    name="about_me" 
                    id="aboutMeInput" 
                    rows="3" 
                    placeholder="Write a short introduction about yourself, your personality, expectations and values..." 
                    class="royal-input leading-relaxed"
                    oninput="updateFormProgress();"
                  ></textarea>
                </div>
              </div>

            </div>
          </div>

          <!-- ================= CARD 2: Gotra & Family Values (गोत्र और पारिवारिक मूल्य) ================= -->
          <div class="form-card" id="sec_family_values">
            <div class="card-header-bar">
              <div class="flex items-center space-x-2">
                <i class="fa-solid fa-heart text-amber-300 text-sm"></i>
                <h2 class="font-bold text-xs sm:text-sm tracking-wide">Gotra & Family Values (गोत्र और पारिवारिक मूल्य)</h2>
              </div>
              <span class="text-[10px] text-amber-200 font-semibold">वैदिक परंपरा</span>
            </div>

            <div class="p-4 sm:p-5 space-y-3.5">
              
              <!-- Gotra Input with Suggestions -->
              <div>
                <div class="flex items-center justify-between mb-1">
                  <label class="block text-xs font-bold text-stone-700">Gotra (स्वयं का गोत्र) *</label>
                  <span class="text-[10px] text-stone-400 font-medium">मालूम न हो तो खाली रखें</span>
                </div>
                <div class="input-wrapper">
                  <i class="fa-solid fa-dharmachakra input-icon"></i>
                  <input 
                    type="text" 
                    name="gotra" 
                    id="gotraInput" 
                    placeholder="Select or enter your gotra (जैसे: भारद्वाज, कश्यप, वत्स...)" 
                    class="royal-input font-bold"
                    oninput="updateFormProgress();"
                  >
                </div>
                <!-- Dynamic Gotra Suggestion Pills Container -->
                <div id="gotraSuggestionsContainer" class="hidden mt-2 p-2 bg-emerald-50/70 rounded-xl border border-emerald-200">
                  <div class="text-[10px] text-emerald-900 font-bold mb-1 flex items-center justify-between">
                    <span id="gotraSugHeading">प्रमुख गोत्र विकल्प:</span>
                    <span class="text-[9px] text-stone-500">1-टैप चयन करें</span>
                  </div>
                  <div id="gotraSuggestions" class="flex flex-wrap gap-1.5"></div>
                </div>
              </div>

              <!-- Naanihal Gotra -->
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Naanihal Gotra (नानिहाल गोत्र) *</label>
                <div class="input-wrapper">
                  <i class="fa-solid fa-users input-icon"></i>
                  <input 
                    type="text" 
                    name="naanihal_gotra" 
                    id="naanihalGotraInput" 
                    placeholder="Select naanihal gotra (मातृ पक्ष का गोत्र)" 
                    class="royal-input"
                    oninput="updateFormProgress();"
                  >
                </div>
              </div>

              <!-- Kuldevi -->
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Kuldevi (कुलदेवी / कुलदेवता) *</label>
                <div class="input-wrapper">
                  <i class="fa-solid fa-om input-icon"></i>
                  <input 
                    type="text" 
                    name="kuldevi" 
                    id="kuldeviInput" 
                    placeholder="Enter kuldevi name (जैसे: जीण माता, शाकंभरी, करणी माता...)" 
                    class="royal-input"
                    oninput="updateFormProgress();"
                  >
                </div>
              </div>

              <!-- Native Place -->
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Native Place (मूल निवास स्थान) *</label>
                <div class="input-wrapper">
                  <i class="fa-solid fa-landmark input-icon"></i>
                  <input 
                    type="text" 
                    name="native_city" 
                    id="nativePlaceInput" 
                    placeholder="Enter native place (जैसे: सीकर, झुंझुनूं, जोधपुर, नागौर...)" 
                    class="royal-input"
                    oninput="updateFormProgress();"
                  >
                </div>
              </div>

              <!-- Family Values -->
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Family Values (पारिवारिक मूल्य) *</label>
                <div class="input-wrapper">
                  <i class="fa-solid fa-hands-holding-child input-icon"></i>
                  <select name="family_values" class="royal-input" onchange="updateFormProgress();">
                    <option value="traditional" selected>पारंपरिक (Traditional Values)</option>
                    <option value="moderate">मध्यम / आधुनिक (Moderate)</option>
                    <option value="liberal">उदारवादी (Liberal / Open Minded)</option>
                  </select>
                </div>
              </div>

            </div>
          </div>

          <!-- ================= CARD 3: Lifestyle & Preferences (जीवनशैली और पसंद) ================= -->
          <div class="form-card" id="sec_lifestyle">
            <div class="card-header-bar">
              <div class="flex items-center space-x-2">
                <i class="fa-solid fa-martini-glass text-amber-300 text-sm"></i>
                <h2 class="font-bold text-xs sm:text-sm tracking-wide">Lifestyle & Preferences (जीवनशैली और पसंद)</h2>
              </div>
              <span class="text-[10px] text-amber-200 font-semibold">अनुकूलता</span>
            </div>

            <div class="p-4 sm:p-5 space-y-3.5">
              
              <!-- Food Habit & Traveling (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Food Habit (खान-पान) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-utensils input-icon"></i>
                    <select name="eating_habits" class="royal-input" onchange="updateFormProgress();">
                      <option value="vegetarian" selected>शुद्ध शाकाहारी (Vegetarian)</option>
                      <option value="jain">जैन शाकाहारी (Jain Veg)</option>
                      <option value="eggetarian">अंडा (Eggetarian)</option>
                      <option value="non_vegetarian">मांसाहारी (Non-Veg)</option>
                    </select>
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Traveling (यात्रा पसंद) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-plane input-icon"></i>
                    <select name="traveling_habit" class="royal-input" onchange="updateFormProgress();">
                      <option value="frequent" selected>बहुत पसंद (Frequent)</option>
                      <option value="occasional">कभी-कभी (Occasional)</option>
                      <option value="rarely">कम पसंद (Rarely)</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Smoking & Music (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Smoking (धूम्रपान) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-smoking-ban input-icon"></i>
                    <select name="smoking_habits" class="royal-input" onchange="updateFormProgress();">
                      <option value="no" selected>बिल्कुल नहीं (Never / No)</option>
                      <option value="occasionally">कभी-कभी (Occasionally)</option>
                      <option value="yes">हाँ (Yes)</option>
                    </select>
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Music (संगीत रुचि) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-music input-icon"></i>
                    <select name="music_habit" class="royal-input" onchange="updateFormProgress();">
                      <option value="classical" selected>शास्त्रीय व भजन (Classical)</option>
                      <option value="bollywood">बॉलीवुड व सूफी (Bollywood)</option>
                      <option value="all">सभी प्रकार (All Genres)</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Alcohol & Sports (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Alcohol (मद्यपान) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-martini-glass-slash input-icon"></i>
                    <select name="drinking_habits" class="royal-input" onchange="updateFormProgress();">
                      <option value="no" selected>बिल्कुल नहीं (Never)</option>
                      <option value="occasionally">कभी-कभी (Socially)</option>
                      <option value="yes">हाँ (Yes)</option>
                    </select>
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Sports & Fitness *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-futbol input-icon"></i>
                    <select name="sports_habit" class="royal-input" onchange="updateFormProgress();">
                      <option value="gym" selected>जिम व योग (Gym / Yoga)</option>
                      <option value="cricket">क्रिकेट / बैडमिंटन (Cricket)</option>
                      <option value="walking">मॉर्निंग वॉक (Walking)</option>
                      <option value="other">अन्य खेल (Other)</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Hobbies & Interests & Cooking (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Hobbies & Interests *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-icons input-icon"></i>
                    <input 
                      type="text" 
                      name="hobbies_interests" 
                      placeholder="Enter hobbies (जैसे: पढ़ना, संगीत...)" 
                      class="royal-input"
                      oninput="updateFormProgress();"
                    >
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Cooking (रसोई कौशल) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-kitchen-set input-icon"></i>
                    <select name="cooking_habit" class="royal-input" onchange="updateFormProgress();">
                      <option value="expert" selected>बहुत अच्छी (Expert / Hobby)</option>
                      <option value="basic">सामान्य (Basic)</option>
                      <option value="learning">सीख रहे हैं (Learning)</option>
                      <option value="no">नहीं (No)</option>
                    </select>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- ================= CARD 4: Additional Information (अतिरिक्त जानकारी) ================= -->
          <div class="form-card" id="sec_additional">
            <div class="card-header-bar">
              <div class="flex items-center space-x-2">
                <i class="fa-solid fa-circle-info text-amber-300 text-sm"></i>
                <h2 class="font-bold text-xs sm:text-sm tracking-wide">Additional Information (अतिरिक्त जानकारी)</h2>
              </div>
              <span class="text-[10px] text-amber-200 font-semibold">धर्म व समाज</span>
            </div>

            <div class="p-4 sm:p-5 space-y-3.5">
              
              <!-- Languages Known -->
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1.5">Languages Known (ज्ञात भाषाएं) *</label>
                <div class="flex flex-wrap gap-2">
                  <label class="flex items-center space-x-1.5 bg-emerald-50/70 border border-emerald-200 px-2.5 py-1 rounded-lg text-xs font-semibold text-emerald-900 cursor-pointer">
                    <input type="checkbox" name="languages[]" value="Hindi" checked class="rounded text-emerald-700 focus:ring-emerald-500">
                    <span>हिंदी (Hindi)</span>
                  </label>
                  <label class="flex items-center space-x-1.5 bg-emerald-50/70 border border-emerald-200 px-2.5 py-1 rounded-lg text-xs font-semibold text-emerald-900 cursor-pointer">
                    <input type="checkbox" name="languages[]" value="English" checked class="rounded text-emerald-700 focus:ring-emerald-500">
                    <span>English</span>
                  </label>
                  <label class="flex items-center space-x-1.5 bg-stone-50 border border-stone-200 px-2.5 py-1 rounded-lg text-xs font-semibold text-stone-700 cursor-pointer">
                    <input type="checkbox" name="languages[]" value="Rajasthani" class="rounded text-emerald-700 focus:ring-emerald-500">
                    <span>राजस्थानी / मारवाड़ी</span>
                  </label>
                  <label class="flex items-center space-x-1.5 bg-stone-50 border border-stone-200 px-2.5 py-1 rounded-lg text-xs font-semibold text-stone-700 cursor-pointer">
                    <input type="checkbox" name="languages[]" value="Gujarati" class="rounded text-emerald-700 focus:ring-emerald-500">
                    <span>गुजराती (Gujarati)</span>
                  </label>
                  <label class="flex items-center space-x-1.5 bg-stone-50 border border-stone-200 px-2.5 py-1 rounded-lg text-xs font-semibold text-stone-700 cursor-pointer">
                    <input type="checkbox" name="languages[]" value="Marathi" class="rounded text-emerald-700 focus:ring-emerald-500">
                    <span>मराठी (Marathi)</span>
                  </label>
                  <label class="flex items-center space-x-1.5 bg-stone-50 border border-stone-200 px-2.5 py-1 rounded-lg text-xs font-semibold text-stone-700 cursor-pointer">
                    <input type="checkbox" name="languages[]" value="Other" class="rounded text-emerald-700 focus:ring-emerald-500">
                    <span>अन्य (Other)</span>
                  </label>
                </div>
              </div>

              <!-- Religion & Sub Caste (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Religion (धर्म) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-om input-icon"></i>
                    <select name="religion" id="religionSelect" class="royal-input font-bold" onchange="filterCastesByReligion(this.value); updateFormProgress();">
                      <option value="Hindu" selected>हिंदू (Hindu)</option>
                      <option value="Jain">जैन (Jain)</option>
                      <option value="Sikh">सिख (Sikh)</option>
                      <option value="Other">अन्य (Other)</option>
                    </select>
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Sub Caste (उप-जाति / शाखा)</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-users-line input-icon"></i>
                    <input 
                      type="text" 
                      name="sub_caste" 
                      id="subCasteInput" 
                      placeholder="उप-जाति (जैसे: गौड़ / बीसा)" 
                      class="royal-input"
                      oninput="updateFormProgress();"
                    >
                  </div>
                </div>
              </div>

              <!-- Caste / Samaj with Strict Community Eligibility Gate -->
              <div>
                <div class="flex items-center justify-between mb-1">
                  <label class="block text-xs font-bold text-stone-800 flex items-center space-x-1">
                    <i class="fa-solid fa-shield-halved text-emerald-700"></i>
                    <span>Caste / Samaj (जाति समाज) *</span>
                  </label>
                  <span class="text-[9.5px] font-extrabold text-amber-900 bg-amber-100 border border-amber-300 px-2 py-0.5 rounded-full">
                    🔒 अधिकृत समाज गेट
                  </span>
                </div>

                <!-- Verified Samaj Dropdown Selector -->
                <div class="input-wrapper mb-2">
                  <i class="fa-solid fa-users input-icon"></i>
                  <select id="casteDropdownSelect" class="royal-input font-bold text-stone-800 bg-white border-2 border-emerald-300" onchange="handleCasteSelectDropdown(this.value)">
                    <option value="">-- अपनी जाति / समाज चुनें --</option>
                    <optgroup label="प्रमुख समाज (Popular Castes)">
                      <option value="ब्राह्मण (Brahmin)">ब्राह्मण समाज (Brahmin)</option>
                      <option value="राजपूत (Rajput)">राजपूत समाज (Rajput Kshatriya)</option>
                      <option value="माहेश्वरी (Maheshwari)">माहेश्वरी समाज (Maheshwari)</option>
                      <option value="अग्रवाल (Agarwal)">अग्रवाल समाज (Agarwal)</option>
                      <option value="जैन (Jain)">जैन समाज (Jain - दिगंबर/श्वेतांबर)</option>
                      <option value="खंडेलवाल (Khandelwal)">खंडेलवाल समाज (Khandelwal)</option>
                      <option value="पाटीदार / पटेल (Patidar)">पाटीदार / पटेल समाज (Patidar)</option>
                      <option value="कायस्थ (Kayastha)">कायस्थ समाज (Kayastha)</option>
                      <option value="जाट (Jat)">जाट समाज (Jat Samaj)</option>
                      <option value="यादव (Yadav)">यादव समाज (Yadav Samaj)</option>
                      <option value="गुर्जर (Gurjar)">गुर्जर समाज (Gurjar Samaj)</option>
                      <option value="सिख (Sikh)">सिख समाज (Sikh Samaj)</option>
                      <option value="सैनी / माली (Saini)">सैनी / माली समाज (Saini / Mali)</option>
                      <option value="सोनी / स्वर्णकार (Soni)">सोनी / स्वर्णकार समाज (Swarnakar)</option>
                      <option value="जांगिड़ / विश्वकर्मा (Jangid)">जांगिड़ / विश्वकर्मा समाज (Jangid)</option>
                      <option value="चौधरी / बिश्नोई (Bishnoi)">बिश्नोई समाज (Bishnoi Samaj)</option>
                      <option value="सिंधी (Sindhi)">सिंधी समाज (Sindhi Samaj)</option>
                      <option value="अन्य समाज (Other)">अन्य समाज (नीचे दर्ज करें)</option>
                    </optgroup>
                  </select>
                </div>

                <!-- Caste Input with Verified Check & Autocomplete suggestions -->
                <div class="relative">
                  <div class="input-wrapper">
                    <i class="fa-solid fa-pen-to-square input-icon"></i>
                    <input 
                      type="text" 
                      name="caste" 
                      id="casteInput" 
                      placeholder="अपनी जाति / समाज ऊपर से चुनें या लिखें..." 
                      class="royal-input pr-28 font-bold text-stone-800"
                      oninput="handleCasteInput(this.value)"
                      required
                    >
                  </div>
                  <!-- Verified Community Badge -->
                  <div id="casteSelectedBadge" class="hidden absolute inset-y-1.5 right-1.5 flex items-center pr-1.5 pointer-events-none">
                    <span class="text-[10px] font-extrabold text-emerald-800 bg-emerald-100 border border-emerald-300 px-2 py-0.5 rounded-md flex items-center space-x-1 shadow-2xs">
                      <i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i>
                      <span id="casteBadgeText">सत्यापित समाज</span>
                    </span>
                  </div>
                </div>

                <!-- 1-Tap Quick Caste Chips -->
                <div class="mt-2">
                  <div class="text-[10px] text-stone-500 font-bold mb-1">त्वरित चयन समाज:</div>
                  <div id="casteChipsContainer" class="flex flex-wrap gap-1.5"></div>
                </div>

                <!-- Mandatory Samaj Declaration Checkbox -->
                <div class="mt-2.5 p-2.5 rounded-xl bg-amber-50/80 border border-amber-300 flex items-start space-x-2">
                  <input type="checkbox" id="samajDeclaration" name="samaj_declaration" checked required class="mt-0.5 w-4 h-4 rounded text-emerald-700 focus:ring-emerald-500 border-amber-300 cursor-pointer">
                  <label for="samajDeclaration" class="text-[10.5px] text-stone-700 font-semibold cursor-pointer select-none leading-snug">
                    <strong class="text-amber-950 font-bold">समाज सदस्यता पुष्टि:</strong> मैं पुष्टि करता/करती हूँ कि मैं चुने हुए समाज का प्रामाणिक सदस्य हूँ और केवल संबंधित समाज के सदस्य ही इस ऐप में प्रवेश कर सकते हैं।
                  </label>
                </div>
              </div>

              <!-- Rashi & Manglik Dosh (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Rashi (राशि) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-moon input-icon"></i>
                    <select name="rashi" class="royal-input" onchange="updateFormProgress();">
                      <option value="मेष">मेष (Aries)</option>
                      <option value="वृषभ">वृषभ (Taurus)</option>
                      <option value="मिथुन">मिथुन (Gemini)</option>
                      <option value="कर्क">कर्क (Cancer)</option>
                      <option value="सिंह">सिंह (Leo)</option>
                      <option value="कन्या">कन्या (Virgo)</option>
                      <option value="तुला" selected>तुला (Libra)</option>
                      <option value="वृश्चिक">वृश्चिक (Scorpio)</option>
                      <option value="धनु">धनु (Sagittarius)</option>
                      <option value="मकर">मकर (Capricorn)</option>
                      <option value="कुंभ">कुंभ (Aquarius)</option>
                      <option value="मीन">मीन (Pisces)</option>
                      <option value="unknown">मालूम नहीं</option>
                    </select>
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Manglik Dosh *</label>
                  <div class="grid grid-cols-2 gap-1 text-center text-[10.5px]">
                    <div>
                      <input type="radio" name="manglik" value="no" id="manglik_no" class="hidden pill-radio" checked onchange="updateFormProgress()">
                      <label for="manglik_no" class="block py-2 rounded-lg border border-emerald-200 bg-white text-emerald-900 font-bold cursor-pointer transition">
                        <span>नहीं (No)</span>
                      </label>
                    </div>
                    <div>
                      <input type="radio" name="manglik" value="yes" id="manglik_yes" class="hidden pill-radio" onchange="updateFormProgress()">
                      <label for="manglik_yes" class="block py-2 rounded-lg border border-emerald-200 bg-white text-emerald-900 font-bold cursor-pointer transition">
                        <span>हाँ (Yes)</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- ================= CARD 5: Bottom Left Royal Banner (Matching reference image) ================= -->
          <div class="form-card overflow-hidden border-2 border-[#D4AF37] relative group shadow-md">
            <div class="relative h-44 sm:h-52 w-full overflow-hidden">
              <img 
                src="/assets/images/royal_emerald_couple_v2.jpg" 
                alt="Royal Couple" 
                class="w-full h-full object-cover object-top transition duration-700 group-hover:scale-105"
                onerror="this.src='/assets/images/royal_matrimony_hero.jpg'"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-[#033626] via-[#064E3B]/70 to-transparent flex flex-col justify-end p-4 text-center">
                <div class="inline-flex items-center justify-center space-x-1.5 text-amber-300 text-xs font-bold mb-1">
                  <i class="fa-solid fa-crown text-xs"></i>
                  <span>Dheeraja Royal Matrimony</span>
                  <i class="fa-solid fa-crown text-xs"></i>
                </div>
                <h3 class="text-white font-cinzel font-extrabold text-base sm:text-lg tracking-wide drop-shadow-md">
                  Find Your Perfect Partner With Dheeraja Royal Matrimony
                </h3>
                <div class="mt-2 flex items-center justify-center space-x-3 text-[11px] text-amber-200 font-bold">
                  <span>Tradition</span>
                  <span>•</span>
                  <span>Trust</span>
                  <span>•</span>
                  <span>Lifetime Happiness</span>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- ################# RIGHT COLUMN ################# -->
        <div class="space-y-5 sm:space-y-6">
          
          <!-- ================= CARD 6: Family Details (पारिवारिक जानकारी) ================= -->
          <div class="form-card" id="sec_family">
            <div class="card-header-bar">
              <div class="flex items-center space-x-2">
                <i class="fa-solid fa-users text-amber-300 text-sm"></i>
                <h2 class="font-bold text-xs sm:text-sm tracking-wide">Family Details (पारिवारिक जानकारी)</h2>
              </div>
              <span class="text-[11px] text-red-300 font-bold">* Required Field</span>
            </div>

            <div class="p-4 sm:p-5 space-y-3.5">
              
              <!-- Father's Name & Occupation (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Father's Name *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-user-tie input-icon"></i>
                    <input 
                      type="text" 
                      name="father_name" 
                      placeholder="Enter father's name" 
                      class="royal-input"
                      required
                      oninput="updateFormProgress();"
                    >
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Father's Occupation *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-briefcase input-icon"></i>
                    <select name="father_occupation" id="fatherOccSelect" class="royal-input font-bold" onchange="updateFormProgress();">
                      <option value="">Select occupation</option>
                      <option value="व्यापार / उद्योगपति (Business)" selected>🏢 व्यापार (Business)</option>
                      <option value="सरकारी सेवा / राजपत्रित अधिकारी (Govt Service)">🏛️ सरकारी सेवा (Govt)</option>
                      <option value="कॉर्पोरेट / प्राइवेट सर्विस (Corporate / MNC)">💼 कॉर्पोरेट (Corporate)</option>
                      <option value="डॉक्टर / चिकित्सा सेवा (Doctor / Healthcare)">🩺 डॉक्टर (Doctor)</option>
                      <option value="सीए / सीएस / वित्तीय सलाहकार (CA / Finance)">📊 सीए / फाइनेंस (CA)</option>
                      <option value="अधिवक्ता / विधिक सेवा (Advocate / Legal)">⚖️ अधिवक्ता (Advocate)</option>
                      <option value="इंजीनियर / आईटी कंसल्टेंट (Engineer / IT)">💻 इंजीनियर (Engineer)</option>
                      <option value="कृषि / फार्मिंग (Agriculture)">🌾 कृषि (Agriculture)</option>
                      <option value="प्रोफेसर / शिक्षक (Professor / Teacher)">🎓 शिक्षक (Teacher)</option>
                      <option value="डिफेंस / सेना / पुलिस (Defence / Police)">🛡️ डिफेंस (Defence)</option>
                      <option value="बैंकिंग / वित्तीय संस्थान (Banking / Finance)">🏦 बैंकिंग (Banking)</option>
                      <option value="सेवानिवृत्त (Retired)">📜 सेवानिवृत्त (Retired)</option>
                      <option value="अन्य (Other)">✏️ अन्य (Other)</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Mother's Name & Occupation (with B.Ed / Teacher / Homemaker) (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Mother's Name *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-person-dress input-icon"></i>
                    <input 
                      type="text" 
                      name="mother_name" 
                      placeholder="Enter mother's name" 
                      class="royal-input"
                      required
                      oninput="updateFormProgress();"
                    >
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Mother's Occupation *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-graduation-cap input-icon"></i>
                    <select name="mother_occupation" id="motherOccSelect" class="royal-input font-bold" onchange="updateFormProgress();">
                      <option value="">Select occupation</option>
                      <option value="गृहणी (Homemaker / Housewife)" selected>🏡 गृहणी (Homemaker)</option>
                      <option value="शिक्षिका / प्रोफेसर / B.Ed (Teacher / Lecturer)">👩‍🏫 शिक्षिका / B.Ed (Teacher)</option>
                      <option value="सरकारी सेवा (Government Service)">🏛️ सरकारी सेवा (Govt)</option>
                      <option value="डॉक्टर / स्वास्थ्य सेवा (Doctor / Healthcare)">🩺 डॉक्टर (Doctor)</option>
                      <option value="बैंक / वित्तीय सेवा (Banking / Finance)">🏦 बैंकिंग (Banking)</option>
                      <option value="व्यापार / उद्यमी (Business / Entrepreneur)">🏢 व्यापार (Business)</option>
                      <option value="प्राइवेट कंपनी / कॉर्पोरेट (Corporate / Private)">💼 कॉर्पोरेट (Corporate)</option>
                      <option value="समाजसेविका / ट्रस्टी (Social Worker)">🤝 समाजसेविका (Social)</option>
                      <option value="सेवानिवृत्त (Retired)">📜 सेवानिवृत्त (Retired)</option>
                      <option value="अन्य (Other)">✏️ अन्य (Other)</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Number of Brothers & Sisters (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Number of Brothers *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-user-group input-icon"></i>
                    <select name="brothers_count" class="royal-input" onchange="updateFormProgress();">
                      <option value="0">कोई भाई नहीं (None)</option>
                      <option value="1" selected>1 भाई (1 Brother)</option>
                      <option value="2">2 भाई (2 Brothers)</option>
                      <option value="3">3 भाई (3 Brothers)</option>
                      <option value="4">4+ भाई (4+ Brothers)</option>
                    </select>
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Number of Sisters *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-user-group input-icon"></i>
                    <select name="sisters_count" class="royal-input" onchange="updateFormProgress();">
                      <option value="0">कोई बहन नहीं (None)</option>
                      <option value="1" selected>1 बहन (1 Sister)</option>
                      <option value="2">2 बहन (2 Sisters)</option>
                      <option value="3">3 बहन (3 Sisters)</option>
                      <option value="4">4+ बहन (4+ Sisters)</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Family Type & Family Background (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Family Type *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-house-chimney input-icon"></i>
                    <select name="family_type" class="royal-input" onchange="updateFormProgress();">
                      <option value="nuclear" selected>एकल परिवार (Nuclear)</option>
                      <option value="joint">संयुक्त परिवार (Joint Family)</option>
                    </select>
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Family Background *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-crown input-icon"></i>
                    <select name="family_status" class="royal-input font-bold" onchange="updateFormProgress();">
                      <option value="upper_middle_class" selected>उच्च मध्यम वर्ग (Upper Middle)</option>
                      <option value="middle_class">मध्यम वर्ग (Middle Class)</option>
                      <option value="rich">संपन्न / प्रतिष्ठित (Affluent / Rich)</option>
                      <option value="affluent">राजसी घराना (Royal Family)</option>
                    </select>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- ================= CARD 7: Contact & Location (संपर्क और पता) ================= -->
          <div class="form-card" id="sec_preferences">
            <div class="card-header-bar">
              <div class="flex items-center space-x-2">
                <i class="fa-solid fa-map-location-dot text-amber-300 text-sm"></i>
                <h2 class="font-bold text-xs sm:text-sm tracking-wide">Contact & Location (संपर्क और पता)</h2>
              </div>
              <span class="text-[11px] text-red-300 font-bold">* Required Field</span>
            </div>

            <div class="p-4 sm:p-5 space-y-3.5">
              
              <!-- Mobile Number & Email ID (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Mobile Number *</label>
                  <div class="flex items-center">
                    <span class="inline-flex items-center px-2 py-2 rounded-l-xl border border-r-0 border-[#CFE6D4] bg-emerald-50 text-emerald-900 font-bold text-xs">
                      +91
                    </span>
                    <input 
                      type="tel" 
                      name="contact_mobile" 
                      placeholder="Enter 10 digit number" 
                      maxlength="10" 
                      class="royal-input rounded-l-none royal-input-noicon font-bold"
                      oninput="updateFormProgress();"
                    >
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Email ID *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-envelope input-icon"></i>
                    <input 
                      type="email" 
                      name="contact_email" 
                      placeholder="Enter your email address" 
                      class="royal-input"
                      oninput="updateFormProgress();"
                    >
                  </div>
                </div>
              </div>

              <!-- Current Address -->
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Current Address (वर्तमान पता) *</label>
                <div class="input-wrapper">
                  <i class="fa-solid fa-location-dot input-icon"></i>
                  <input 
                    type="text" 
                    name="current_address" 
                    id="addressInput" 
                    placeholder="House No., Area, City, State, Pin Code" 
                    class="royal-input"
                    oninput="updateFormProgress();"
                  >
                </div>
              </div>

              <!-- City & State (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">City (वर्तमान शहर) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-city input-icon"></i>
                    <input 
                      type="text" 
                      name="city" 
                      id="currentCityInput" 
                      value="जयपुर" 
                      placeholder="Select city" 
                      class="royal-input font-bold" 
                      required 
                      oninput="handleCityInput(this.value); updateFormProgress();"
                    >
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">State (राज्य) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-map-location-dot input-icon"></i>
                    <input 
                      type="text" 
                      name="state" 
                      id="currentStateInput" 
                      value="राजस्थान" 
                      placeholder="Select state" 
                      class="royal-input font-bold" 
                      required 
                      oninput="updateFormProgress();"
                    >
                  </div>
                </div>
              </div>

              <!-- Quick City Selection Chips -->
              <div class="flex flex-wrap gap-1 items-center pt-0.5">
                <span class="text-[9.5px] text-stone-400 font-bold mr-1">त्वरित शहर:</span>
                <button type="button" onclick="selectQuickCity('जयपुर', 'राजस्थान')" class="px-2 py-0.5 rounded-md text-[10px] font-medium bg-stone-50 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition">जयपुर</button>
                <button type="button" onclick="selectQuickCity('जोधपुर', 'राजस्थान')" class="px-2 py-0.5 rounded-md text-[10px] font-medium bg-stone-50 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition">जोधपुर</button>
                <button type="button" onclick="selectQuickCity('दिल्ली (NCR)', 'दिल्ली')" class="px-2 py-0.5 rounded-md text-[10px] font-medium bg-stone-50 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition">दिल्ली NCR</button>
                <button type="button" onclick="selectQuickCity('मुंबई', 'महाराष्ट्र')" class="px-2 py-0.5 rounded-md text-[10px] font-medium bg-stone-50 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition">मुंबई</button>
                <button type="button" onclick="selectQuickCity('अहमदाबाद', 'गुजरात')" class="px-2 py-0.5 rounded-md text-[10px] font-medium bg-stone-50 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition">अहमदाबाद</button>
                <button type="button" onclick="selectQuickCity('इंदौर', 'मध्य प्रदेश')" class="px-2 py-0.5 rounded-md text-[10px] font-medium bg-stone-50 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition">इंदौर</button>
                <button type="button" onclick="selectQuickCity('बैंगलोर', 'कर्नाटक')" class="px-2 py-0.5 rounded-md text-[10px] font-medium bg-stone-50 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition">बैंगलोर</button>
              </div>

              <!-- Country -->
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Country (देश) *</label>
                <div class="input-wrapper">
                  <i class="fa-solid fa-globe input-icon"></i>
                  <select name="country" class="royal-input font-bold" onchange="updateFormProgress();">
                    <option value="India" selected>भारत (India)</option>
                    <option value="UAE">संयुक्त अरब अमीरात (UAE / Dubai)</option>
                    <option value="USA">संयुक्त राज्य अमेरिका (USA)</option>
                    <option value="Canada">कनाडा (Canada)</option>
                    <option value="UK">यूनाइटेड किंगडम (UK / London)</option>
                    <option value="Australia">ऑस्ट्रेलिया (Australia)</option>
                    <option value="Other">अन्य देश (Other)</option>
                  </select>
                </div>
              </div>

            </div>
          </div>

          <!-- ================= CARD 8: Education & Career (शिक्षा और करियर) ================= -->
          <div class="form-card" id="sec_education">
            <div class="card-header-bar">
              <div class="flex items-center space-x-2">
                <i class="fa-solid fa-graduation-cap text-amber-300 text-sm"></i>
                <h2 class="font-bold text-xs sm:text-sm tracking-wide">Education & Career (शिक्षा और करियर)</h2>
              </div>
              <span class="text-[11px] text-red-300 font-bold">* Required Field</span>
            </div>

            <div class="p-4 sm:p-5 space-y-3.5">
              
              <!-- Highest Qualification & Stream (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Highest Qualification *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-graduation-cap input-icon"></i>
                    <select name="highest_education" class="royal-input font-bold" onchange="updateFormProgress();">
                      <option value="B.Tech / B.E." selected>B.Tech / B.E. (Engineering)</option>
                      <option value="MBA / PGDM">MBA / PGDM (Management)</option>
                      <option value="MBBS / MD / MS">MBBS / MD (Medical)</option>
                      <option value="CA / CS / ICWA">CA / CS (Chartered Accountant)</option>
                      <option value="M.Tech / M.E.">M.Tech / M.E.</option>
                      <option value="MCA / M.Sc IT">MCA / M.Sc IT / CS</option>
                      <option value="B.Ed / M.Ed">B.Ed / M.Ed (Education / Teaching)</option>
                      <option value="B.Com / M.Com">B.Com / M.Com</option>
                      <option value="B.A. / M.A.">B.A. / M.A.</option>
                      <option value="LLB / LLM">LLB / LLM (Law / Advocate)</option>
                      <option value="Ph.D / Doctorate">Ph.D / Doctorate</option>
                      <option value="Other Degree">अन्य योग्यता (Other)</option>
                    </select>
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Education Stream / Subject *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-book-open input-icon"></i>
                    <input 
                      type="text" 
                      name="education_stream" 
                      placeholder="Select / Enter stream (e.g. CS / Finance)" 
                      class="royal-input"
                      oninput="updateFormProgress();"
                    >
                  </div>
                </div>
              </div>

              <!-- Education University & Year of Passing (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Education University *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-building-columns input-icon"></i>
                    <input 
                      type="text" 
                      name="college_university" 
                      placeholder="Enter university / college name" 
                      class="royal-input"
                      oninput="updateFormProgress();"
                    >
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Year of Passing *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-calendar-check input-icon"></i>
                    <select name="passing_year" class="royal-input" onchange="updateFormProgress();">
                      <option value="2026">2026 (अध्ययनरत)</option>
                      <option value="2025">2025</option>
                      <option value="2024">2024</option>
                      <option value="2023">2023</option>
                      <option value="2022">2022</option>
                      <option value="2021" selected>2021</option>
                      <option value="2020">2020</option>
                      <option value="2019">2019</option>
                      <option value="2018">2018</option>
                      <option value="2017">2017</option>
                      <option value="2016">2016</option>
                      <option value="2015">2015 या पूर्व</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Occupation & Annual Income (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Occupation (पेशा / कार्य) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-briefcase input-icon"></i>
                    <select name="employed_in" class="royal-input font-bold" onchange="updateFormProgress();">
                      <option value="private_sector" selected>सॉफ्टवेयर / IT (Software / IT)</option>
                      <option value="government_psu">सरकारी सेवा (Govt / PSU)</option>
                      <option value="business_self_employed">व्यवसाय / बिज़नेस (Business)</option>
                      <option value="doctor">डॉक्टर / चिकित्सा सेवा (Doctor)</option>
                      <option value="ca_finance">सीए / बैंकिंग (CA / Banking)</option>
                      <option value="teacher">प्रोफेसर / शिक्षक (Teacher)</option>
                      <option value="defense">डिफेंस / पुलिस सेवा (Defence)</option>
                      <option value="not_working">कार्यरत नहीं (Not Working)</option>
                    </select>
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Annual Income (वार्षिक आय) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-coins input-icon"></i>
                    <select name="annual_income_inr" class="royal-input font-bold" onchange="updateFormProgress();">
                      <option value="400000">₹3 - ₹5 लाख वार्षिक</option>
                      <option value="800000" selected>₹5 - ₹10 लाख वार्षिक</option>
                      <option value="1200000">₹10 - ₹15 लाख वार्षिक</option>
                      <option value="2000000">₹15 - ₹25 लाख वार्षिक</option>
                      <option value="3500000">₹25 - ₹50 लाख वार्षिक</option>
                      <option value="7500000">₹50 लाख - ₹1 करोड़</option>
                      <option value="15000000">₹1 करोड़ से अधिक (₹1 Cr+)</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Company / Organization & Designation (2-Col Grid) -->
              <div class="grid grid-cols-2 gap-2.5">
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Company / Organization *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-building input-icon"></i>
                    <input 
                      type="text" 
                      name="organization_name" 
                      placeholder="Enter company name" 
                      class="royal-input"
                      oninput="updateFormProgress();"
                    >
                  </div>
                </div>
                <div>
                  <label class="block text-xs font-bold text-stone-700 mb-1">Designation (पद) *</label>
                  <div class="input-wrapper">
                    <i class="fa-solid fa-id-badge input-icon"></i>
                    <input 
                      type="text" 
                      name="designation" 
                      placeholder="Enter designation (जैसे: Senior Software Engineer)" 
                      class="royal-input"
                      oninput="updateFormProgress();"
                    >
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- ================= CARD 9: Photos & Documents (फोटो और दस्तावेज) ================= -->
          <div class="form-card" id="sec_photos">
            <div class="card-header-bar">
              <div class="flex items-center space-x-2">
                <i class="fa-solid fa-camera text-amber-300 text-sm"></i>
                <h2 class="font-bold text-xs sm:text-sm tracking-wide">Photos & Documents (फोटो और दस्तावेज)</h2>
              </div>
              <span class="text-[10px] text-amber-200 font-semibold">10x अधिक रिश्ते</span>
            </div>

            <div class="p-4 sm:p-5 space-y-3.5">
              
              <!-- Large Upload Photos Dropzone -->
              <label for="photoInput1" class="photo-upload-dropzone block p-4 text-center cursor-pointer">
                <input type="file" name="photos[]" id="photoInput1" accept="image/*" class="hidden" onchange="previewImage(this, 'previewBox1')">
                <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center mx-auto mb-2 text-xl shadow-xs">
                  <i class="fa-solid fa-cloud-arrow-up"></i>
                </div>
                <div class="text-xs font-bold text-emerald-950">
                  Upload Photos (JPG / PNG, Max 10)
                </div>
                <div class="text-[10.5px] text-stone-500 mt-0.5">
                  क्लिक करके मुख्य प्रोफ़ाइल फोटो अपलोड करें (स्पष्ट व सम्मुख फोटो)
                </div>
              </label>

              <!-- 4 Photo Slots Grid (Matching reference image thumbnail slots) -->
              <div>
                <div class="flex items-center justify-between text-xs font-bold text-stone-700 mb-1.5">
                  <span>Add at least 4 photos (max 10)</span>
                  <span class="text-[10px] text-emerald-700 font-extrabold bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-200">
                    4 फोटो स्लॉट
                  </span>
                </div>
                <div class="grid grid-cols-4 gap-2">
                  <!-- Photo 1 Slot -->
                  <label for="photoInput1" id="previewBox1" class="thumb-slot">
                    <i class="fa-solid fa-plus text-emerald-600 text-base mb-0.5"></i>
                    <span class="text-[9.5px] font-bold text-stone-600">मुख्य फोटो</span>
                  </label>
                  <!-- Photo 2 Slot -->
                  <label for="photoInput2" id="previewBox2" class="thumb-slot">
                    <input type="file" name="photos[]" id="photoInput2" accept="image/*" class="hidden" onchange="previewImage(this, 'previewBox2')">
                    <i class="fa-solid fa-plus text-emerald-600 text-base mb-0.5"></i>
                    <span class="text-[9.5px] font-bold text-stone-600">फोटो 2</span>
                  </label>
                  <!-- Photo 3 Slot -->
                  <label for="photoInput3" id="previewBox3" class="thumb-slot">
                    <input type="file" name="photos[]" id="photoInput3" accept="image/*" class="hidden" onchange="previewImage(this, 'previewBox3')">
                    <i class="fa-solid fa-plus text-emerald-600 text-base mb-0.5"></i>
                    <span class="text-[9.5px] font-bold text-stone-600">फोटो 3</span>
                  </label>
                  <!-- Photo 4 Slot -->
                  <label for="photoInput4" id="previewBox4" class="thumb-slot">
                    <input type="file" name="photos[]" id="photoInput4" accept="image/*" class="hidden" onchange="previewImage(this, 'previewBox4')">
                    <i class="fa-solid fa-plus text-emerald-600 text-base mb-0.5"></i>
                    <span class="text-[9.5px] font-bold text-stone-600">फोटो 4</span>
                  </label>
                </div>
              </div>

              <!-- Documents (Optional) (Matching reference image checkboxes) -->
              <div id="sec_documents">
                <label class="block text-xs font-bold text-stone-700 mb-1.5 flex items-center justify-between">
                  <span>Documents (Optional) (सत्यापन दस्तावेज)</span>
                  <span class="text-[9px] text-stone-400">ऐच्छिक (Optional)</span>
                </label>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                  <label class="flex items-center space-x-1.5 p-2 rounded-xl bg-stone-50 border border-stone-200 text-xs font-semibold text-stone-700 cursor-pointer hover:bg-emerald-50 hover:border-emerald-300 transition">
                    <input type="checkbox" name="documents[]" value="aadhar" class="rounded text-emerald-700 focus:ring-emerald-500">
                    <span class="text-[11px]">Aadhaar Card</span>
                  </label>
                  <label class="flex items-center space-x-1.5 p-2 rounded-xl bg-stone-50 border border-stone-200 text-xs font-semibold text-stone-700 cursor-pointer hover:bg-emerald-50 hover:border-emerald-300 transition">
                    <input type="checkbox" name="documents[]" value="education" class="rounded text-emerald-700 focus:ring-emerald-500">
                    <span class="text-[11px]">Degree Cert.</span>
                  </label>
                  <label class="flex items-center space-x-1.5 p-2 rounded-xl bg-stone-50 border border-stone-200 text-xs font-semibold text-stone-700 cursor-pointer hover:bg-emerald-50 hover:border-emerald-300 transition">
                    <input type="checkbox" name="documents[]" value="income" class="rounded text-emerald-700 focus:ring-emerald-500">
                    <span class="text-[11px]">Income Proof</span>
                  </label>
                  <label class="flex items-center space-x-1.5 p-2 rounded-xl bg-stone-50 border border-stone-200 text-xs font-semibold text-stone-700 cursor-pointer hover:bg-emerald-50 hover:border-emerald-300 transition">
                    <input type="checkbox" name="documents[]" value="kundli" class="rounded text-emerald-700 focus:ring-emerald-500">
                    <span class="text-[11px]">Kundli / Other</span>
                  </label>
                </div>
              </div>

            </div>
          </div>

          <!-- ================= CARD 10: Interests & Hobbies (Optional) (रुचियाँ और शौक) ================= -->
          <div class="form-card">
            <div class="card-header-bar">
              <div class="flex items-center space-x-2">
                <i class="fa-solid fa-heart text-amber-300 text-sm"></i>
                <h2 class="font-bold text-xs sm:text-sm tracking-wide">Interests & Hobbies (Optional) (रुचियाँ और शौक)</h2>
              </div>
              <span class="text-[10px] text-amber-200 font-semibold">ऐच्छिक</span>
            </div>

            <div class="p-4 sm:p-5">
              <div class="input-wrapper">
                <i class="fa-solid fa-icons input-icon"></i>
                <textarea 
                  name="interests_text" 
                  rows="3" 
                  placeholder="Write your interests and hobbies (e.g. Reading historical books, Indian classical music, Traveling, Photography, Fitness, Cooking delicious food)..." 
                  class="royal-input leading-relaxed"
                  oninput="updateFormProgress();"
                ></textarea>
              </div>
            </div>
          </div>

          <!-- ================= CARD 11: Final Review & Submit (अंतिम समीक्षा और सबमिट) ================= -->
          <div class="form-card" id="sec_review">
            <div class="card-header-bar">
              <div class="flex items-center space-x-2">
                <i class="fa-solid fa-clipboard-check text-amber-300 text-sm"></i>
                <h2 class="font-bold text-xs sm:text-sm tracking-wide">Final Review & Submit (अंतिम समीक्षा और सबमिट)</h2>
              </div>
              <span class="text-[10px] text-amber-200 font-semibold">सुरक्षित सबमिशन</span>
            </div>

            <div class="p-4 sm:p-5 space-y-3.5">
              
              <!-- Verification bullet checklist -->
              <div class="p-3 rounded-xl bg-emerald-50/70 border border-emerald-200 space-y-1.5 text-xs text-stone-700">
                <div class="flex items-start space-x-2">
                  <i class="fa-solid fa-circle-check text-emerald-600 mt-0.5 text-xs flex-shrink-0"></i>
                  <span>Please verify all your details before submitting (सभी विवरण अवश्य जांचें).</span>
                </div>
                <div class="flex items-start space-x-2">
                  <i class="fa-solid fa-circle-check text-emerald-600 mt-0.5 text-xs flex-shrink-0"></i>
                  <span>Your biodata will be visible to verified members only (केवल सत्यापित सदस्यों को दिखेगा).</span>
                </div>
                <div class="flex items-start space-x-2">
                  <i class="fa-solid fa-circle-check text-emerald-600 mt-0.5 text-xs flex-shrink-0"></i>
                  <span>You can edit your biodata anytime from your profile (कभी भी अपडेट कर सकते हैं).</span>
                </div>
              </div>

              <!-- Big Submit Biodata Button (Matching reference image) -->
              <button 
                type="submit" 
                class="submit-glow-btn w-full py-4 px-6 rounded-2xl text-white font-sans font-extrabold text-base sm:text-lg border-2 border-[#E6C254] flex items-center justify-center space-x-2.5 cursor-pointer shadow-xl transition transform active:scale-98">
                <i class="fa-solid fa-paper-plane text-[#F5D061] text-lg"></i>
                <span class="tracking-wide">Submit Biodata (बायोडाटा सबमिट करें)</span>
              </button>

              <!-- Direct Jump Link to Page 4 -->
              <div class="pt-1">
                <a href="/matches" onclick="window.location.href='/matches'; return false;" class="w-full py-2.5 px-4 rounded-xl bg-amber-50 hover:bg-amber-100 border border-amber-300 text-amber-950 font-bold text-xs flex items-center justify-center space-x-2 transition shadow-2xs cursor-pointer">
                  <i class="fa-solid fa-table-cells text-amber-700"></i>
                  <span>सीधे रिश्ते तालिका (पेज 4) पर जाएं</span>
                  <i class="fa-solid fa-arrow-right text-amber-700 text-xs"></i>
                </a>
              </div>

            </div>
          </div>

        </div>

      </div>

    </form>

    <!-- Bottom Royal Ribbon -->
    <footer class="py-3 bg-gradient-to-r from-[#033626] via-[#064E3B] to-[#033626] text-amber-300 text-center flex items-center justify-center mt-auto border-t border-emerald-900">
      <div class="h-px w-20 bg-gradient-to-r from-transparent to-[#E6C254]"></div>
      <i class="fa-solid fa-crown text-[#E6C254] text-xs mx-3"></i>
      <span class="text-xs font-cinzel font-bold text-amber-200">DHEERAJA ROYAL MATRIMONY™ • 100% VERIFIED & TRUSTED</span>
      <i class="fa-solid fa-crown text-[#E6C254] text-xs mx-3"></i>
      <div class="h-px w-20 bg-gradient-to-l from-transparent to-[#E6C254]"></div>
    </footer>

    <!-- ================= FIXED BOTTOM APP NAVIGATION BAR (Matching reference image) ================= -->
    <div class="bottom-app-nav w-full">
      <div class="grid grid-cols-6 max-w-4xl mx-auto text-center">
        <!-- 1. Home -->
        <a href="/welcome" class="bottom-nav-item">
          <i class="fa-solid fa-house text-sm mb-0.5"></i>
          <span>Home</span>
        </a>
        <!-- 2. My Biodata (Active) -->
        <a href="/biodata" class="bottom-nav-item active bg-emerald-900/60 border-t-2 border-amber-400">
          <i class="fa-solid fa-id-card text-sm mb-0.5"></i>
          <span>My Biodata</span>
        </a>
        <!-- 3. Matches -->
        <a href="/matches" class="bottom-nav-item">
          <i class="fa-solid fa-heart text-sm mb-0.5"></i>
          <span>Matches</span>
        </a>
        <!-- 4. Chats -->
        <a href="/matches" class="bottom-nav-item">
          <i class="fa-solid fa-comment-dots text-sm mb-0.5"></i>
          <span>Chats</span>
        </a>
        <!-- 5. Interests -->
        <a href="/matches" class="bottom-nav-item">
          <i class="fa-solid fa-heart-circle-check text-sm mb-0.5"></i>
          <span>Interests</span>
        </a>
        <!-- 6. Profile -->
        <a href="/biodata/royal/1" class="bottom-nav-item">
          <i class="fa-solid fa-user text-sm mb-0.5"></i>
          <span>Profile</span>
        </a>
      </div>
    </div>

  </main>

  <!-- Celebratory Toast Notification Container -->
  <div id="celebrationToast" class="fixed top-5 right-5 z-50 transform translate-x-full transition-transform duration-300 ease-out max-w-xs pointer-events-none">
    <div class="bg-gradient-to-r from-[#064E3B] to-[#033626] text-white p-3.5 rounded-2xl border-2 border-[#D4AF37] shadow-2xl flex items-center space-x-3 pointer-events-auto">
      <div id="toastIconBox" class="w-10 h-10 rounded-full bg-amber-400/20 text-[#F5D061] flex items-center justify-center text-lg flex-shrink-0 border border-amber-300">
        <i class="fa-solid fa-crown" id="toastIcon"></i>
      </div>
      <div>
        <h4 id="toastTitle" class="font-bold text-xs text-amber-300">हार्दिक बधाई!</h4>
        <p id="toastMsg" class="text-[11px] text-emerald-100 font-medium leading-snug">बायोडाटा सफलतापूर्वक अपडेट हो रहा है।</p>
      </div>
      <div id="toastBadge" class="text-xs font-extrabold text-[#F5D061] bg-white/10 px-2 py-1 rounded-lg border border-amber-400/30 flex-shrink-0">
        +25%
      </div>
    </div>
  </div>

  <!-- Confetti Canvas -->
  <canvas id="confettiCanvas" class="fixed inset-0 pointer-events-none z-50 hidden"></canvas>

  <!-- Complete In-Page JavaScript Logic -->
  <script>
    // Responsive Viewport Switcher for Testing
    function setViewport(width) {
      const shell = document.getElementById('biodataShell');
      if (!shell) return;
      shell.style.maxWidth = width;
    }

    // Split Full Name into First Name & Last Name
    function handleFullNameSplit(val) {
      const trimmed = val.trim();
      const fnInput = document.getElementById('firstNameInput');
      const lnInput = document.getElementById('lastNameInput');
      if (!fnInput || !lnInput) return;

      if (!trimmed) {
        fnInput.value = 'वर';
        lnInput.value = 'शर्मा';
        return;
      }
      const parts = trimmed.split(/\s+/);
      fnInput.value = parts[0];
      lnInput.value = parts.length > 1 ? parts.slice(1).join(' ') : 'शर्मा';
    }

    // Auto Age Calculation
    function calculateAutoAge() {
      const dobInput = document.getElementById('dobInput');
      const badge = document.getElementById('autoAgeBadge');
      if (!dobInput || !dobInput.value) return;

      const birthDate = new Date(dobInput.value);
      const today = new Date();
      let age = today.getFullYear() - birthDate.getFullYear();
      const m = today.getMonth() - birthDate.getMonth();
      if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
      }

      if (badge && age > 0) {
        badge.innerHTML = `🎂 ${age} वर्ष`;
      }
    }

    // Auto Height Display Update
    function updateHeightBadge() {
      const select = document.getElementById('heightSelect');
      const badge = document.getElementById('heightDisplayBadge');
      if (!select || !badge) return;
      const text = select.options[select.selectedIndex].text.split(' ')[0];
      badge.textContent = text;
    }

    // Gender Choice Visuals
    function updateGenderChoice(gender) {
      const isMale = gender === 'male';
      const label = document.querySelector('label[for="fullNameInput"]');
      const input = document.getElementById('fullNameInput');
      if (input) {
        input.placeholder = isMale ? "Enter your full name (जैसे: राहुल शर्मा)" : "Enter your full name (जैसे: अंजलि शर्मा)";
      }
      updateFormProgress();
    }

    // Smart City to State Auto Detection
    const CITY_STATE_MAP = {
      'जयपुर': 'राजस्थान', 'जोधपुर': 'राजस्थान', 'उदयपुर': 'राजस्थान', 'कोटा': 'राजस्थान',
      'बीकानेर': 'राजस्थान', 'अजमेर': 'राजस्थान', 'अलवर': 'राजस्थान', 'भीलवाड़ा': 'राजस्थान',
      'सीकर': 'राजस्थान', 'पाली': 'राजस्थान', 'गंगानगर': 'राजस्थान', 'भरतपुर': 'राजस्थान',
      'बाड़मेर': 'राजस्थान', 'झुंझुनू': 'राजस्थान', 'दौसा': 'राजस्थान', 'चित्तौड़गढ़': 'राजस्थान',
      'दिल्ली': 'दिल्ली', 'दिल्ली (NCR)': 'दिल्ली', 'नई दिल्ली': 'दिल्ली',
      'नोएडा': 'उत्तर प्रदेश (NCR)', 'गाजियाबाद': 'उत्तर प्रदेश (NCR)',
      'गुड़गांव': 'हरियाणा (NCR)', 'गुरुग्राम': 'हरियाणा (NCR)', 'फरीदाबाद': 'हरियाणा (NCR)',
      'मुंबई': 'महाराष्ट्र', 'पुणे': 'महाराष्ट्र', 'नागपुर': 'महाराष्ट्र', 'नासिक': 'महाराष्ट्र',
      'ठाणे': 'महाराष्ट्र', 'नवी मुंबई': 'महाराष्ट्र',
      'अहमदाबाद': 'गुजरात', 'सूरत': 'गुजरात', 'वड़ोदरा': 'गुजरात', 'राजकोट': 'गुजरात',
      'इंदौर': 'मध्य प्रदेश', 'भोपाल': 'मध्य प्रदेश', 'ग्वालियर': 'मध्य प्रदेश', 'जबलपुर': 'मध्य प्रदेश',
      'बैंगलोर': 'कर्नाटक', 'बेंगलुरु': 'कर्नाटक', 'हैदराबाद': 'तेलंगाना',
      'लखनऊ': 'उत्तर प्रदेश', 'कानपुर': 'उत्तर प्रदेश', 'आगरा': 'उत्तर प्रदेश', 'वाराणसी': 'उत्तर प्रदेश',
      'कोलकाता': 'पश्चिम बंगाल', 'चंडीगढ़': 'पंजाब / हरियाणा'
    };

    function selectQuickCity(cityName, stateName) {
      const cityIn = document.getElementById('currentCityInput');
      const stateIn = document.getElementById('currentStateInput');
      if (cityIn) cityIn.value = cityName;
      if (stateIn) stateIn.value = stateName;
      updateFormProgress();
    }

    function handleCityInput(val) {
      const trimmed = val.trim();
      const stateIn = document.getElementById('currentStateInput');
      if (CITY_STATE_MAP[trimmed] && stateIn) {
        stateIn.value = CITY_STATE_MAP[trimmed];
      }
      updateFormProgress();
    }

    // Comprehensive Caste & Gotra Database
    const CASTE_DATABASE = {
      'Hindu': [
        {
          name: 'ब्राह्मण (Brahmin)', cleanName: 'ब्राह्मण', icon: '🕉️',
          gotras: ['भारद्वाज', 'कश्यप', 'वत्स', 'शांडिल्य', 'गौतम', 'पाराशर', 'गर्ग', 'कौशिक', 'वशिष्ठ', 'अंगिरस', 'हरितस']
        },
        {
          name: 'राजपूत (Rajput)', cleanName: 'राजपूत', icon: '⚔️',
          gotras: ['राठौड़', 'चौहान', 'सिसोदिया', 'शेखावत', 'कछवाहा', 'भाटी', 'पंवार', 'सोलंकी', 'तोमर', 'झाला']
        },
        {
          name: 'माहेश्वरी (Maheshwari)', cleanName: 'माहेश्वरी', icon: '💎',
          gotras: ['सोमानी', 'बिहानी', 'डागा', 'राठी', 'बिड़ला', 'बाहेती', 'मालू', 'तोश Rival', 'काकानी', 'लाखोटिया']
        },
        {
          name: 'अग्रवाल (Agarwal)', cleanName: 'अग्रवाल', icon: '🪙',
          gotras: ['गर्ग', 'गोयल', 'बंसल', 'मित्तल', 'सिंघल', 'जिंदल', 'कुच्छल', 'कंसल', 'नांगल', 'ऐरण', 'धारण']
        },
        {
          name: 'खंडेलवाल (Khandelwal)', cleanName: 'खंडेलवाल', icon: '🌿',
          gotras: ['रावत', 'नाटाणी', 'धूत', 'कायथवाल', 'कुलवाल', 'माथेरिया', 'बड़ाया', 'तांबी', 'वैद्य']
        },
        {
          name: 'जाट (Jat)', cleanName: 'जाट', icon: '🌾',
          gotras: ['पूनिया', 'चौधरी', 'गोदारा', 'धायल', 'बेनीवाल', 'डोटासरा', 'जाखड़', 'सहारण', 'ढाका', 'कस्वां']
        },
        {
          name: 'यादव / अहीर (Yadav)', cleanName: 'यादव', icon: '🦚',
          gotras: ['यादव', 'अहिर', 'कौशिक', 'वत्स', 'अत्रि', 'भारद्वाज', 'शांडिल्य']
        },
        {
          name: 'गुर्जर (Gurjar)', cleanName: 'गुर्जर', icon: '🛡️',
          gotras: ['बैंसला', 'खटाना', 'अवाना', 'पोसवाल', 'तंवर', 'चावड़ी', 'धाभाई']
        },
        {
          name: 'पाटीदार / पटेल (Patidar)', cleanName: 'पाटीदार', icon: '🚜',
          gotras: ['पटेल', 'अमीन', 'देसाई', 'पटेलिया', 'चौधरी', 'कश्यप']
        },
        {
          name: 'सैनी / माली (Saini)', cleanName: 'सैनी', icon: '🌸',
          gotras: ['सैनी', 'मौर्य', 'कुशवाह', 'शाक्य', 'भागीरथी']
        },
        {
          name: 'सोनी / स्वर्णकार (Soni)', cleanName: 'सोनी', icon: '✨',
          gotras: ['सोनी', 'स्वर्णकार', 'जांगिड़', 'कश्यप', 'गौतम']
        }
      ],
      'Jain': [
        {
          name: 'श्वेतांबर जैन (Shwetambar)', cleanName: 'श्वेतांबर जैन', icon: '🪷',
          gotras: ['ओसवाल', 'लोढ़ा', 'मेहता', 'कोठारी', 'भंसाली', 'शाह', 'गांधी']
        },
        {
          name: 'दिगंबर जैन (Digambar)', cleanName: 'दिगंबर जैन', icon: '🪷',
          gotras: ['खंडेलवाल जैन', 'कासलीवाल', 'पंड्या', 'गंगवाल', 'सेठी', 'बड़जात्या']
        }
      ],
      'Sikh': [
        {
          name: 'जाट सिख (Jat Sikh)', cleanName: 'जाट सिख', icon: 'ੴ',
          gotras: ['संधू', 'गिल', 'सिद्धू', 'ढिल्लों', 'ग्रेवाल', 'चीमा', 'मान', 'औलख']
        },
        {
          name: 'अरोड़ा / खत्री सिख (Khatri)', cleanName: 'अरोड़ा / खत्री', icon: 'ੴ',
          gotras: ['साहनी', 'आनंद', 'चोपड़ा', 'मल्होत्रा', 'बेदी', 'सोढ़ी', 'कपूर', 'खन्ना']
        }
      ],
      'Other': [
        {
          name: 'कायस्थ (Kayastha)', cleanName: 'कायस्थ', icon: '📜',
          gotras: ['माथुर', 'सक्सेना', 'श्रीवास्तव', 'भटनागर', 'निगम', 'कुलश्रेष्ठ']
        },
        {
          name: 'सिंधी (Sindhi)', cleanName: 'सिंधी', icon: '🌟',
          gotras: ['अडवाणी', 'आहूजा', 'माखीजा', 'चावला', 'भाटिया', 'वासवानी']
        }
      ]
    };

    let currentSelectedCaste = '';
    let lastCelebratedMilestone = 0;

    // Filter and Render Caste Chips
    function filterCastesByReligion(religion) {
      const container = document.getElementById('casteChipsContainer');
      if (!container) return;
      const list = CASTE_DATABASE[religion] || CASTE_DATABASE['Hindu'];
      container.innerHTML = '';

      list.forEach(item => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'caste-chip' + (currentSelectedCaste === item.cleanName ? ' active' : '');
        btn.innerHTML = `<span>${item.icon}</span> <span>${item.cleanName}</span>`;
        btn.onclick = () => selectCaste(item.cleanName, item.name);
        container.appendChild(btn);
      });
      updateFormProgress();
    }

    // Caste Dropdown Handler
    function handleCasteSelectDropdown(val) {
      if (!val) return;
      if (val.includes('अन्य')) {
        const casteInput = document.getElementById('casteInput');
        if (casteInput) {
          casteInput.value = '';
          casteInput.placeholder = 'कृपया अपना समाज यहाँ दर्ज करें...';
          casteInput.focus();
        }
        return;
      }
      const cleanName = val.split('(')[0].trim();
      selectCaste(cleanName, val);
    }

    // Select Caste Action
    function selectCaste(cleanName, fullName) {
      currentSelectedCaste = cleanName;
      const casteInput = document.getElementById('casteInput');
      const badge = document.getElementById('casteSelectedBadge');
      const badgeText = document.getElementById('casteBadgeText');
      const dropdown = document.getElementById('casteDropdownSelect');

      if (casteInput) casteInput.value = cleanName;
      if (badge) {
        badge.classList.remove('hidden');
        if (badgeText) badgeText.textContent = cleanName + ' (सत्यापित)';
      }

      if (dropdown && cleanName) {
        for (let i = 0; i < dropdown.options.length; i++) {
          if (dropdown.options[i].value.includes(cleanName) || dropdown.options[i].text.includes(cleanName)) {
            dropdown.selectedIndex = i;
            break;
          }
        }
      }

      const chips = document.querySelectorAll('.caste-chip');
      chips.forEach(chip => {
        if (chip.textContent.includes(cleanName)) {
          chip.classList.add('active');
        } else {
          chip.classList.remove('active');
        }
      });

      // Find matching gotras
      let foundObj = null;
      for (const rel in CASTE_DATABASE) {
        const item = CASTE_DATABASE[rel].find(c => c.cleanName === cleanName || c.name === fullName);
        if (item) { foundObj = item; break; }
      }

      const gotraContainer = document.getElementById('gotraSuggestionsContainer');
      const gotraListEl = document.getElementById('gotraSuggestions');
      const gotraHeading = document.getElementById('gotraSugHeading');

      if (foundObj && foundObj.gotras && foundObj.gotras.length > 0) {
        if (gotraContainer) gotraContainer.classList.remove('hidden');
        if (gotraHeading) gotraHeading.textContent = `${cleanName} समाज के प्रमुख गोत्र:`;
        if (gotraListEl) {
          gotraListEl.innerHTML = '';
          foundObj.gotras.forEach(gotra => {
            const pill = document.createElement('button');
            pill.type = 'button';
            pill.className = 'gotra-pill';
            pill.textContent = gotra;
            pill.onclick = () => selectGotra(gotra);
            gotraListEl.appendChild(pill);
          });
          const unknownPill = document.createElement('button');
          unknownPill.type = 'button';
          unknownPill.className = 'gotra-pill !bg-stone-100 !text-stone-600 !border-stone-300';
          unknownPill.textContent = 'मालूम नहीं';
          unknownPill.onclick = () => selectGotra('');
          gotraListEl.appendChild(unknownPill);
        }
      }

      updateFormProgress();
    }

    function selectGotra(gotraName) {
      const gotraInput = document.getElementById('gotraInput');
      if (gotraInput) {
        gotraInput.value = gotraName;
      }
      const pills = document.querySelectorAll('.gotra-pill');
      pills.forEach(p => {
        if (gotraName && p.textContent.trim() === gotraName.trim()) {
          p.classList.add('selected');
        } else {
          p.classList.remove('selected');
        }
      });
      updateFormProgress();
    }

    function handleCasteInput(val) {
      const trimmed = val.trim();
      currentSelectedCaste = trimmed;
      const badge = document.getElementById('casteSelectedBadge');

      if (!trimmed) {
        if (badge) badge.classList.add('hidden');
        return;
      }

      let match = null;
      for (const rel in CASTE_DATABASE) {
        const item = CASTE_DATABASE[rel].find(c => c.cleanName === trimmed || trimmed.includes(c.cleanName));
        if (item) { match = item; break; }
      }

      if (match) {
        if (badge) {
          badge.classList.remove('hidden');
          const badgeText = document.getElementById('casteBadgeText');
          if (badgeText) badgeText.textContent = match.cleanName + ' (सत्यापित)';
        }
        selectCaste(match.cleanName, match.name);
      } else {
        if (badge) badge.classList.add('hidden');
        const chips = document.querySelectorAll('.caste-chip');
        chips.forEach(c => c.classList.remove('active'));
      }
      updateFormProgress();
    }

    // Photo Preview Logic
    function previewImage(input, previewBoxId) {
      if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const box = document.getElementById(previewBoxId);
          if (box) {
            box.innerHTML = `
              <div class="relative w-full h-full">
                <img src="${e.target.result}" class="w-full h-full object-cover rounded-xl">
                <div class="absolute inset-0 bg-black/40 opacity-0 hover:opacity-100 flex items-center justify-center transition rounded-xl">
                  <span class="text-white text-[9px] font-bold bg-black/70 px-2 py-0.5 rounded-full">बदलें</span>
                </div>
                <div class="absolute top-1 right-1 bg-emerald-600 text-white rounded-full w-4 h-4 flex items-center justify-center text-[9px] shadow-xs">
                  <i class="fa-solid fa-check"></i>
                </div>
              </div>
            `;
          }
          showCelebrationToast("✨ फोटो जोड़ी गई!", "सुंदर फोटो से 10x अधिक उपयुक्त रिश्ते मिलते हैं।", "+15%", "fa-camera");
          updateFormProgress();
        };
        reader.readAsDataURL(input.files[0]);
      }
    }

    // Form Completion Progress Calculator
    function updateFormProgress() {
      let score = 0;

      // 1. Basic details (25 points)
      const name = document.getElementById('fullNameInput')?.value?.trim();
      const dob = document.getElementById('dobInput')?.value?.trim();
      if (name) score += 15;
      if (dob) score += 10;

      // 2. Caste & Religion (20 points)
      const caste = document.getElementById('casteInput')?.value?.trim();
      if (caste) score += 20;

      // 3. Family Details (20 points)
      const fName = document.querySelector('input[name="father_name"]')?.value?.trim();
      const fOcc = document.getElementById('fatherOccSelect')?.value;
      const mName = document.querySelector('input[name="mother_name"]')?.value?.trim();
      if (fName || fOcc) score += 10;
      if (mName) score += 10;

      // 4. Education & Career (15 points)
      const edu = document.querySelector('select[name="highest_education"]')?.value;
      const emp = document.querySelector('select[name="employed_in"]')?.value;
      if (edu) score += 8;
      if (emp) score += 7;

      // 5. Contact & Location (10 points)
      const city = document.getElementById('currentCityInput')?.value?.trim();
      if (city) score += 10;

      // 6. Photo (10 points)
      const p1 = document.getElementById('photoInput1');
      if (p1 && p1.files && p1.files.length > 0) score += 10;

      let percent = Math.min(100, Math.max(30, score));
      
      const percentEl = document.getElementById('progressPercent');
      const barEl = document.getElementById('progressBar');
      const congratsText = document.getElementById('congratsText');

      if (percentEl) percentEl.textContent = percent + '%';
      if (barEl) barEl.style.width = percent + '%';

      if (congratsText) {
        if (percent >= 100) {
          congratsText.innerHTML = `👑 <strong>हार्दिक बधाई!</strong> आपका रॉयल बायोडाटा 100% परिपूर्ण है — 3 माह VIP Pro सक्रिय! 🎊`;
          if (lastCelebratedMilestone < 100) {
            lastCelebratedMilestone = 100;
            showCelebrationToast("👑 हार्दिक बधाई!", "आपका रॉयल बायोडाटा 100% पूर्ण हो चुका है! 3 माह VIP Pro सक्रिय।", "100%", "fa-crown");
            fireCelebrationConfetti();
          }
        } else if (percent >= 75) {
          congratsText.innerHTML = `🌟 <strong>बधाई हो!</strong> 75% बायोडाटा पूर्ण — अनुकूल रिश्ते मैच 5x गति से बढ़ेंगे!`;
        } else if (percent >= 50) {
          congratsText.innerHTML = `🎉 <strong>बहुत खूब!</strong> 50% बायोडाटा तैयार — प्रोफाइल अब अत्यधिक आकर्षक दिख रही है!`;
        } else {
          congratsText.innerHTML = `📋 बुनियादी जानकारी दर्ज करें... 100% पूरा करने पर 3 माह VIP Pro मुफ्त!`;
        }
      }
    }

    // Celebration Toast
    function showCelebrationToast(title, msg, badge, iconClass) {
      const toast = document.getElementById('celebrationToast');
      const titleEl = document.getElementById('toastTitle');
      const msgEl = document.getElementById('toastMsg');
      const badgeEl = document.getElementById('toastBadge');
      const iconEl = document.getElementById('toastIcon');

      if (!toast || !titleEl || !msgEl) return;

      titleEl.textContent = title;
      msgEl.textContent = msg;
      if (badgeEl) badgeEl.textContent = badge;
      if (iconEl && iconClass) iconEl.className = 'fa-solid ' + iconClass;

      toast.classList.remove('translate-x-full');
      setTimeout(() => {
        toast.classList.add('translate-x-full');
      }, 4000);
    }

    // Confetti Canvas Animation
    function fireCelebrationConfetti() {
      const canvas = document.getElementById('confettiCanvas');
      if (!canvas) return;
      canvas.classList.remove('hidden');
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
      const ctx = canvas.getContext('2d');
      const particles = [];
      const colors = ['#E6C254', '#059669', '#10B981', '#F5D061', '#34D399', '#D4AF37'];

      for (let i = 0; i < 90; i++) {
        particles.push({
          x: Math.random() * canvas.width,
          y: Math.random() * canvas.height - canvas.height,
          r: Math.random() * 6 + 3,
          d: Math.random() * 80 + 10,
          color: colors[Math.floor(Math.random() * colors.length)],
          tilt: Math.floor(Math.random() * 10) - 10,
          tiltAngleIncremental: (Math.random() * 0.07) + .05,
          tiltAngle: 0
        });
      }

      let animationFrame;
      let counter = 0;
      function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(p => {
          ctx.beginPath();
          ctx.lineWidth = p.r;
          ctx.strokeStyle = p.color;
          ctx.moveTo(p.x + p.tilt + (p.r / 2), p.y);
          ctx.lineTo(p.x + p.tilt, p.y + p.tilt + (p.r / 2));
          ctx.stroke();

          p.tiltAngle += p.tiltAngleIncremental;
          p.y += (Math.cos(p.d) + 3 + p.r / 2) / 1.5;
          p.tilt = Math.sin(p.tiltAngle - (counter / 3)) * 15;
        });

        counter++;
        if (counter < 160) {
          animationFrame = requestAnimationFrame(draw);
        } else {
          cancelAnimationFrame(animationFrame);
          canvas.classList.add('hidden');
        }
      }
      draw();
    }

    // Smooth Scroll for Step Navigation
    document.querySelectorAll('.step-node').forEach(node => {
      node.addEventListener('click', function(e) {
        const targetId = this.getAttribute('href');
        if (targetId && targetId.startsWith('#')) {
          e.preventDefault();
          const targetEl = document.querySelector(targetId);
          if (targetEl) {
            targetEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
          }
          document.querySelectorAll('.step-node').forEach(n => n.classList.remove('active'));
          this.classList.add('active');
        }
      });
    });

    // Initialize on DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
      filterCastesByReligion('Hindu');
      calculateAutoAge();
      updateHeightBadge();
      updateFormProgress();
    });
  </script>

</body>
</html>
