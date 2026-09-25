<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>DHEERAJA™ ROYAL MATRIMONY | वर / वधू बायोडाटा फॉर्म</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Rozha+One&family=Noto+Sans+Devanagari:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
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
            sans: ['Plus Jakarta Sans', 'Noto Sans Devanagari', 'sans-serif'],
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
      background-color: #EBF3EA;
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
    /* Mobile Shell Container */
    #biodataShell {
      width: 100%;
      max-width: 440px;
      min-height: 100vh;
      margin: 0 auto;
      background: #FFFFFF;
      position: relative;
      box-shadow: 0 20px 60px rgba(6, 78, 59, 0.2), 0 4px 20px rgba(0,0,0,0.08);
      display: flex;
      flex-direction: column;
      transition: max-width 0.3s ease;
    }
    @media (min-width: 640px) {
      #biodataShell {
        min-height: auto;
        margin: 20px auto 40px auto;
        border-radius: 36px;
        border: 4px solid #D4AF37;
        overflow: hidden;
      }
    }
    /* Section Cards */
    .form-section-card {
      background: #FFFFFF;
      border: 1.5px solid #D1E7D5;
      border-radius: 20px;
      padding: 16px;
      box-shadow: 0 4px 12px rgba(6, 78, 59, 0.04);
      transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }
    .form-section-card:hover {
      border-color: #A3D4AE;
      box-shadow: 0 6px 16px rgba(6, 78, 59, 0.08);
    }
    /* Custom Inputs */
    .royal-input {
      width: 100%;
      background: #F9FCFA;
      border: 1.5px solid #CFE6D4;
      border-radius: 12px;
      padding: 9px 12px;
      font-size: 13px;
      color: #1F2937;
      font-weight: 500;
      transition: all 0.2s ease;
      outline: none;
    }
    .royal-input:focus {
      background: #FFFFFF;
      border-color: #059669;
      box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.15);
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
    /* Photo Upload Box */
    .photo-upload-box {
      border: 2px dashed #BDE5C5;
      border-radius: 16px;
      background: #F8FCF9;
      cursor: pointer;
      position: relative;
      overflow: hidden;
      transition: all 0.2s ease;
    }
    .photo-upload-box:hover {
      border-color: #059669;
      background: #F0FDF4;
    }
    /* Luxury Enter Button Glow */
    .enter-btn-glow {
      box-shadow: 0 6px 20px rgba(6, 78, 59, 0.4), 0 0 15px rgba(212, 175, 55, 0.5);
      animation: pulseGlow 2.5s infinite alternate;
    }
    @keyframes pulseGlow {
      0% { box-shadow: 0 6px 15px rgba(6, 78, 59, 0.35), 0 0 10px rgba(212, 175, 55, 0.4); }
      100% { box-shadow: 0 8px 25px rgba(6, 78, 59, 0.55), 0 0 25px rgba(212, 175, 55, 0.7); }
    }
    /* Caste & Community Chips */
    .caste-chip {
      background: #FFFFFF;
      border: 1.5px solid #CFE6D4;
      color: #374151;
      border-radius: 12px;
      padding: 6px 11px;
      font-size: 11px;
      font-weight: 700;
      transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 5px;
      box-shadow: 0 1px 3px rgba(6, 78, 59, 0.05);
      user-select: none;
    }
    .caste-chip:hover {
      background: #F0FDF4;
      border-color: #059669;
      color: #064E3B;
      transform: translateY(-1px);
      box-shadow: 0 3px 8px rgba(6, 78, 59, 0.12);
    }
    .caste-chip.active {
      background: linear-gradient(135deg, #065F46 0%, #033626 100%) !important;
      color: #FFFFFF !important;
      border-color: #D4AF37 !important;
      box-shadow: 0 4px 14px rgba(6, 78, 59, 0.35), 0 0 0 1.5px #E6C254 !important;
      transform: scale(1.02);
    }
    .caste-chip.active .chip-icon {
      color: #F5D061;
    }
    /* Gotra Suggestion Pills */
    .gotra-pill {
      background: #FFFFFF;
      border: 1px solid #A7F3D0;
      color: #065F46;
      border-radius: 9999px;
      padding: 3px 9px;
      font-size: 10px;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.15s ease;
      box-shadow: 0 1px 2px rgba(0,0,0,0.04);
      user-select: none;
    }
    .gotra-pill:hover {
      background: #065F46;
      color: #FFFFFF;
      border-color: #065F46;
      transform: scale(1.06);
    }
    .gotra-pill.selected {
      background: #065F46;
      color: #F5D061;
      border-color: #D4AF37;
    }
    /* Floating Milestone Celebration Toast */
    .toast-show {
      transform: translate(-50%, 0) !important;
      opacity: 1 !important;
      pointer-events: auto !important;
    }
    @keyframes bounceIn {
      0% { transform: scale(0.8); opacity: 0; }
      60% { transform: scale(1.05); opacity: 1; }
      100% { transform: scale(1); opacity: 1; }
    }
    .animate-bounce-in {
      animation: bounceIn 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
    }
  </style>
<body class="selection:bg-emerald-200 selection:text-emerald-900 relative">

  <!-- Celebration Confetti Canvas (100% Milestone) -->
  <canvas id="confettiCanvas" class="fixed inset-0 pointer-events-none z-[999] hidden"></canvas>

  <!-- Floating Dynamic Milestone Celebration Toast (बधाई संदेश) -->
  <div id="celebrationToast" class="fixed top-5 left-1/2 -translate-x-1/2 z-[1000] max-w-sm w-[92%] bg-gradient-to-r from-[#065F46] via-[#047857] to-[#033626] text-white p-3 rounded-2xl border-2 border-[#E6C254] shadow-2xl flex items-center space-x-3 transition-all duration-500 transform -translate-y-24 opacity-0 pointer-events-none">
    <div class="w-10 h-10 rounded-full bg-amber-400/20 border border-amber-300 flex items-center justify-center shrink-0 text-amber-300 text-lg shadow-inner">
      <i class="fa-solid fa-trophy" id="toastIcon"></i>
    </div>
    <div class="flex-1">
      <div class="flex items-center space-x-1">
        <h4 class="text-xs font-extrabold text-[#F5D061] tracking-wide" id="toastTitle">बधाई संदेश! 🎉</h4>
        <span class="text-[9px] bg-amber-400/20 text-amber-200 px-1.5 rounded font-mono font-bold" id="toastBadge">50%</span>
      </div>
      <p class="text-[11px] text-emerald-50 font-medium leading-tight mt-0.5" id="toastMessage">शानदार! आपका बायोडाटा प्रगति पर है।</p>
    </div>
  </div>

  <!-- Desktop Emulation Toolbar -->
  <aside class="hidden sm:flex items-center justify-between w-full max-w-4xl px-6 py-2.5 my-2 bg-white/90 backdrop-blur-md rounded-2xl border border-emerald-300 text-stone-700 text-xs shadow-sm">
    <div class="flex items-center space-x-2">
      <a href="/cover" class="px-2 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-bold text-stone-700 flex items-center space-x-1 transition mr-1" title="पहला पेज">
        <i class="fa-solid fa-home text-[10px]"></i>
        <span>1. कवर पेज</span>
      </a>
      <a href="/welcome" class="px-2 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-bold text-stone-700 flex items-center space-x-1 transition mr-2" title="दूसरा पेज">
        <i class="fa-solid fa-arrow-left text-[10px]"></i>
        <span>2. वेलकम स्क्रीन</span>
      </a>
      <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
      <span class="font-cinzel font-bold text-stone-900 tracking-wider">DHEERAJA ROYAL MATRIMONY™</span>
      <span class="text-stone-400">| 3. बायोडाटा रजिस्ट्रेशन फॉर्म</span>
    </div>
    <div class="flex items-center space-x-3">
      <button onclick="setViewport('390px')" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-mono text-[11px] border border-stone-200">iPhone</button>
      <button onclick="setViewport('440px')" class="px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-800 font-mono text-[11px] border border-emerald-300 font-bold">Standard</button>
      <a href="/matches" class="ml-2 px-3 py-1 rounded-xl bg-gradient-to-r from-emerald-800 to-emerald-950 text-amber-300 hover:text-white font-bold transition flex items-center space-x-1 border border-amber-400/40 shadow-xs">
        <i class="fa-solid fa-table-cells text-[10px]"></i>
        <span>4. तालिका / रिश्ते</span>
      </a>
    </div>
  </aside>

  <!-- ==================== MAIN BIODATA FORM SHELL ==================== -->
  <main id="biodataShell">
    
    <!-- Top Royal Header -->
    <header class="w-full bg-gradient-to-b from-[#F5FAF4] via-[#FAFCFA] to-white border-b border-emerald-100 px-4 pt-12 pb-4 text-center relative">
      
      <!-- Back to Page 2 (Welcome) Button (बाण बटन) -->
      <a href="/welcome" onclick="window.location.href='/welcome'; return false;" class="absolute top-3 left-3 z-50 px-3 py-1.5 rounded-full bg-white/95 border-2 border-emerald-300 text-[#065F46] hover:bg-emerald-50 hover:border-emerald-500 flex items-center space-x-1.5 text-xs font-bold shadow-md transition transform active:scale-95 cursor-pointer" title="वापस पेज 2 पर जाएं">
        <i class="fa-solid fa-arrow-left text-sm"></i>
        <span>पेज 2</span>
      </a>

      <!-- Direct Link to Page 1 (Cover Page) Button -->
      <a href="/cover" onclick="window.location.href='/cover'; return false;" class="absolute top-3 left-[92px] z-50 px-2.5 py-1.5 rounded-full bg-white/95 border border-emerald-300 text-stone-600 hover:bg-emerald-50 flex items-center space-x-1 text-xs font-semibold shadow-xs transition active:scale-95 cursor-pointer" title="पहले कवर पेज पर जाएं">
        <i class="fa-solid fa-home text-xs text-amber-600"></i>
        <span>कवर</span>
      </a>

      <!-- Forward Arrow (बाण बटन) to Page 4 (तालिका / रिश्ते) -->
      <a href="/matches" onclick="window.location.href='/matches'; return false;" class="absolute top-3 right-3 z-50 px-3.5 py-1.5 rounded-full bg-gradient-to-r from-emerald-800 to-emerald-950 text-amber-300 hover:text-white border-2 border-amber-400 flex items-center space-x-1.5 text-xs font-bold shadow-lg transition transform active:scale-95 cursor-pointer animate-pulse" title="सीधे चौथे पेज (तालिका / रिश्ते) पर जाएं">
        <span>पेज 4 (तालिका)</span>
        <i class="fa-solid fa-arrow-right text-xs text-amber-300"></i>
      </a>

      <!-- Small Crown Logo -->
      <div class="w-12 h-12 mx-auto mb-1.5 drop-shadow-xs">
        <img src="/assets/images/dheeraja_dm_logo.jpg" alt="Dheeraja Logo" class="w-full h-full object-contain">
      </div>

      <!-- DHEERAJA Title -->
      <h1 class="font-cinzel font-extrabold text-lg text-[#064E3B] tracking-wider">
        DHEERAJA™ <span class="font-sans font-bold text-sm text-[#059669]">ROYAL MATRIMONY</span>
      </h1>

      <!-- Page Title Plaque -->
      <div class="inline-flex items-center space-x-2 px-4 py-1 mt-1 rounded-full bg-gradient-to-r from-[#065F46] to-[#033626] text-white text-xs font-bold shadow-xs border border-[#E6C254]">
        <i class="fa-solid fa-crown text-[#F5D061] text-[10px]"></i>
        <span>वर / वधू बायोडाटा रजिस्ट्रेशन (Profile Form)</span>
        <i class="fa-solid fa-crown text-[#F5D061] text-[10px]"></i>
      </div>

      <!-- Free Launch VIP Offer Banner -->
      <div class="mt-2 text-[10px] text-[#065F46] font-semibold bg-emerald-50/90 border border-emerald-200 rounded-lg py-1 px-2.5 inline-block">
        ✨ <strong>लॉन्च ऑफर:</strong> फॉर्म पूरा भरते ही <strong>3 माह का VIP Pro प्लान</strong> बिल्कुल मुफ्त! ✨
      </div>

      <!-- Quick Navigation Buttons: Page 4 (Matches) & Royal Biodata -->
      <div class="mt-2.5 flex flex-wrap items-center justify-center gap-2">
        <a href="/matches" onclick="window.location.href='/matches'; return false;" class="px-4 py-1.5 rounded-full bg-gradient-to-r from-emerald-800 via-emerald-900 to-[#033626] text-amber-300 hover:text-white border-2 border-amber-400 font-extrabold text-xs flex items-center space-x-2 shadow-md transition transform hover:scale-[1.02] active:scale-95" title="सीधे रिश्ते तालिका (पेज 4) पर जाएं">
          <i class="fa-solid fa-table-cells text-xs"></i>
          <span>सीधे रिश्ते तालिका (पेज 4) पर जाएं</span>
          <i class="fa-solid fa-arrow-right text-xs text-amber-300"></i>
        </a>
        <a href="/biodata/royal/1" target="_blank" class="px-3 py-1.5 rounded-full bg-gradient-to-r from-amber-200 via-amber-100 to-amber-200 border border-amber-400 text-amber-950 text-[11px] font-extrabold flex items-center space-x-1.5 shadow-2xs hover:bg-amber-300 transition active:scale-95" title="सुनहरे बॉर्डर वाला रॉयल बायोडाटा नमूना देखें व 1-क्लिक डाउनलोड करें">
          <i class="fa-solid fa-crown text-amber-600"></i>
          <span>👑 रॉयल बायोडाटा (1-क्लिक PDF)</span>
        </a>
      </div>

        <!-- Live Profile Completion Progress Bar with Congratulatory Milestones -->
      <div class="mt-3 px-3.5 py-2.5 bg-white/95 rounded-2xl border border-emerald-200 shadow-2xs">
        <div class="flex items-center justify-between text-[11px] font-bold text-[#064E3B] mb-1">
          <span class="flex items-center space-x-1.5">
            <i class="fa-solid fa-sparkles text-amber-500 text-xs"></i>
            <span>बायोडाटा पूर्णता:</span>
            <span id="progressPercent" class="text-emerald-700 font-extrabold text-xs">35%</span>
          </span>
          <span class="text-amber-800 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200 text-[9px] font-bold">
            👑 VIP Pro योग्य
          </span>
        </div>
        <div class="w-full h-2.5 bg-emerald-100/80 rounded-full overflow-hidden p-0.5 border border-emerald-200">
          <div id="progressBar" class="h-full bg-gradient-to-r from-emerald-600 via-amber-400 to-[#D4AF37] rounded-full transition-all duration-300" style="width: 35%;"></div>
        </div>
        
        <!-- Auto Milestone Congratulatory Message (बधाई संदेश) -->
        <div id="congratsMilestone" class="mt-2 text-[10px] font-bold text-[#065F46] bg-gradient-to-r from-emerald-50 via-amber-50 to-emerald-50 border border-amber-300/80 rounded-lg py-1 px-2.5 flex items-center justify-center space-x-1 shadow-2xs">
          <i class="fa-solid fa-gift text-amber-600 text-xs"></i>
          <span id="congratsText">📋 बुनियादी जानकारी दर्ज करें... 100% पूरा करने पर 3 माह VIP Pro मुफ्त!</span>
        </div>
      </div>

    </header>

    <!-- Main Biodata Registration Form -->
    <form action="/biodata/save" method="POST" enctype="multipart/form-data" id="biodataForm" class="p-3.5 space-y-4">
      
      <!-- ================= SECTION 1: बुनियादी पहचान (Basic Info) ================= -->
      <div class="form-section-card space-y-3">
        <div class="flex items-center justify-between pb-2 border-b border-emerald-100">
          <div class="flex items-center space-x-2">
            <div class="w-7 h-7 rounded-full bg-gradient-to-br from-[#065F46] to-[#033626] text-white flex items-center justify-center text-xs font-bold shadow-xs">1</div>
            <h2 class="text-sm font-bold text-[#064E3B]">व्यक्तिगत एवं वैवाहिक पहचान</h2>
          </div>
          <span class="text-[10px] text-emerald-800 font-bold bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-200">
            ★ अनिवार्य विवरण
          </span>
        </div>

        <!-- किसके लिए रिश्ता देख रहे हैं (Profile For) - 3D Tactile Option Buttons -->
        <div>
          <div class="flex items-center justify-between mb-1.5">
            <label class="block text-xs font-extrabold text-stone-800 flex items-center space-x-1.5">
              <i class="fa-solid fa-user-tag text-emerald-700 text-xs"></i>
              <span>किसके लिए रिश्ता देख रहे हैं? (Profile For) *</span>
            </label>
            <span class="text-[10px] text-emerald-800 font-extrabold bg-emerald-50 border border-emerald-300 px-2 py-0.5 rounded-full shadow-2xs">
              विकल्प चुनें
            </span>
          </div>

          <div class="grid grid-cols-3 gap-2 text-center text-xs">
            <!-- 1. Self -->
            <div>
              <input type="radio" name="profile_for" value="myself" id="pfor_myself" class="hidden pill-radio" checked onchange="updateFormProgress()">
              <label for="pfor_myself" class="option-pill-btn block py-2.5 px-1.5 rounded-2xl border-2 border-emerald-200 bg-white text-[#064E3B] font-extrabold cursor-pointer transition shadow-xs hover:border-emerald-400">
                <i class="fa-solid fa-user pill-icon text-sm block mb-1 text-emerald-700"></i>
                <span class="block text-[11px] leading-tight">स्वयं के लिए</span>
                <span class="text-[9px] text-stone-500 font-semibold">(Self)</span>
              </label>
            </div>

            <!-- 2. Son -->
            <div>
              <input type="radio" name="profile_for" value="son" id="pfor_son" class="hidden pill-radio" onchange="updateFormProgress()">
              <label for="pfor_son" class="option-pill-btn block py-2.5 px-1.5 rounded-2xl border-2 border-emerald-200 bg-white text-[#064E3B] font-extrabold cursor-pointer transition shadow-xs hover:border-emerald-400">
                <i class="fa-solid fa-child pill-icon text-sm block mb-1 text-emerald-700"></i>
                <span class="block text-[11px] leading-tight">बेटे के लिए</span>
                <span class="text-[9px] text-stone-500 font-semibold">(Son)</span>
              </label>
            </div>

            <!-- 3. Daughter -->
            <div>
              <input type="radio" name="profile_for" value="daughter" id="pfor_daughter" class="hidden pill-radio" onchange="updateFormProgress()">
              <label for="pfor_daughter" class="option-pill-btn block py-2.5 px-1.5 rounded-2xl border-2 border-emerald-200 bg-white text-[#064E3B] font-extrabold cursor-pointer transition shadow-xs hover:border-emerald-400">
                <i class="fa-solid fa-child-dress pill-icon text-sm block mb-1 text-emerald-700"></i>
                <span class="block text-[11px] leading-tight">बेटी के लिए</span>
                <span class="text-[9px] text-stone-500 font-semibold">(Daughter)</span>
              </label>
            </div>

            <!-- 4. Brother -->
            <div>
              <input type="radio" name="profile_for" value="brother" id="pfor_brother" class="hidden pill-radio" onchange="updateFormProgress()">
              <label for="pfor_brother" class="option-pill-btn block py-2.5 px-1.5 rounded-2xl border-2 border-emerald-200 bg-white text-[#064E3B] font-extrabold cursor-pointer transition shadow-xs hover:border-emerald-400">
                <i class="fa-solid fa-user-group pill-icon text-sm block mb-1 text-emerald-700"></i>
                <span class="block text-[11px] leading-tight">भाई के लिए</span>
                <span class="text-[9px] text-stone-500 font-semibold">(Brother)</span>
              </label>
            </div>

            <!-- 5. Sister -->
            <div>
              <input type="radio" name="profile_for" value="sister" id="pfor_sister" class="hidden pill-radio" onchange="updateFormProgress()">
              <label for="pfor_sister" class="option-pill-btn block py-2.5 px-1.5 rounded-2xl border-2 border-emerald-200 bg-white text-[#064E3B] font-extrabold cursor-pointer transition shadow-xs hover:border-emerald-400">
                <i class="fa-solid fa-person-dress pill-icon text-sm block mb-1 text-emerald-700"></i>
                <span class="block text-[11px] leading-tight">बहन के लिए</span>
                <span class="text-[9px] text-stone-500 font-semibold">(Sister)</span>
              </label>
            </div>

            <!-- 6. Relative / Friend -->
            <div>
              <input type="radio" name="profile_for" value="relative" id="pfor_relative" class="hidden pill-radio" onchange="updateFormProgress()">
              <label for="pfor_relative" class="option-pill-btn block py-2.5 px-1.5 rounded-2xl border-2 border-emerald-200 bg-white text-[#064E3B] font-extrabold cursor-pointer transition shadow-xs hover:border-emerald-400">
                <i class="fa-solid fa-handshake-angle pill-icon text-sm block mb-1 text-emerald-700"></i>
                <span class="block text-[11px] leading-tight">रिश्तेदार/मित्र</span>
                <span class="text-[9px] text-stone-500 font-semibold">(Relative)</span>
              </label>
            </div>

          </div>
        </div>

        <!-- लिंग चयन: वर / वधू (Gender) -->
        <div>
          <label class="block text-xs font-bold text-stone-700 mb-1.5">उम्मीदवार लिंग (वर या वधू) *</label>
          <div class="grid grid-cols-2 gap-2 text-center">
            
            <div>
              <input type="radio" name="gender" value="male" id="gender_male" class="hidden pill-radio" checked onchange="updateGenderChoice('male')">
              <label for="gender_male" class="block py-2.5 px-3 rounded-2xl border-2 border-emerald-200 bg-emerald-50/60 text-[#064E3B] font-bold text-xs sm:text-sm cursor-pointer transition">
                <i class="fa-solid fa-mars pill-icon text-base mr-1"></i>
                <span>🤵 वर (Groom)</span>
              </label>
            </div>

            <div>
              <input type="radio" name="gender" value="female" id="gender_female" class="hidden pill-radio" onchange="updateGenderChoice('female')">
              <label for="gender_female" class="block py-2.5 px-3 rounded-2xl border-2 border-emerald-200 bg-emerald-50/60 text-[#064E3B] font-bold text-xs sm:text-sm cursor-pointer transition">
                <i class="fa-solid fa-venus pill-icon text-base mr-1"></i>
                <span>👰 वधू (Bride)</span>
              </label>
            </div>

          </div>
        </div>

        <!-- पूरा नाम (Name) -->
        <div class="grid grid-cols-2 gap-2">
          <div>
            <label class="block text-[11px] font-bold text-stone-700 mb-1">पहला नाम (First Name)</label>
            <input type="text" name="first_name" id="firstNameInput" placeholder="जैसे: राहुल / पूजा" class="royal-input" oninput="updateFormProgress()">
          </div>
          <div>
            <label class="block text-[11px] font-bold text-stone-700 mb-1">उपनाम / सरनेम (Last Name)</label>
            <input type="text" name="last_name" id="lastNameInput" placeholder="जैसे: शर्मा / सिंह" class="royal-input" oninput="updateFormProgress()">
          </div>
        </div>

        <!-- जन्म तिथि एवं कद (DOB & Height) with Auto Age & Height Calculations -->
        <div class="grid grid-cols-2 gap-2">
          <div>
            <div class="flex items-center justify-between mb-1">
              <label class="block text-[11px] font-bold text-stone-700">जन्म तिथि (DOB) *</label>
              <!-- Live Auto Calculated Age Badge -->
              <span id="autoAgeBadge" class="text-[10px] font-extrabold text-[#065F46] bg-emerald-100/90 px-1.5 py-0.5 rounded shadow-2xs">
                🎂 28 वर्ष
              </span>
            </div>
            <input type="date" name="dob" id="dobInput" value="1998-05-15" class="royal-input" onchange="calculateAutoAge()">
          </div>
          <div>
            <div class="flex items-center justify-between mb-1">
              <label class="block text-[11px] font-bold text-stone-700">कद / लंबाई (Height) *</label>
              <span id="heightDisplayBadge" class="text-[10px] font-bold text-amber-700 bg-amber-50 px-1.5 py-0.5 rounded border border-amber-200">
                📏 5'8"
              </span>
            </div>
            <select name="height_cm" id="heightSelect" class="royal-input" onchange="updateHeightBadge()">
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

        <!-- वैवाहिक स्थिति (Marital Status) -->
        <div>
          <label class="block text-[11px] font-bold text-stone-700 mb-1">वैवाहिक स्थिति (Marital Status) *</label>
          <select name="marital_status" class="royal-input" onchange="updateFormProgress()">
            <option value="never_married">अविवाहित (Never Married)</option>
            <option value="divorced">तलाकशुदा (Divorced)</option>
            <option value="widowed">विधवा / विधुर (Widowed)</option>
            <option value="separated">अलग रह रहे (Separated)</option>
          </select>
        </div>

      </div>

      <!-- ================= SECTION 2: धर्म, समाज एवं गोत्र विवरण (Community & Astrology) ================= -->
      <div class="form-section-card space-y-3.5 relative overflow-hidden bg-gradient-to-b from-white via-amber-50/15 to-white border-2 border-amber-300 shadow-sm">
        
        <!-- Section Header with Royal Badge -->
        <div class="flex items-center justify-between pb-2.5 border-b border-amber-200">
          <div class="flex items-center space-x-2">
            <div class="w-7 h-7 rounded-full bg-gradient-to-br from-amber-500 to-[#92400E] text-white flex items-center justify-center text-xs font-extrabold shadow-sm">
              <i class="fa-solid fa-shield-halved text-xs"></i>
            </div>
            <div>
              <h2 class="text-sm font-extrabold text-[#064E3B] leading-tight">समाज, जाति एवं गोत्र विवरण</h2>
              <p class="text-[10px] text-amber-900 font-semibold">अधिकृत समाज सदस्यता एवं पात्रता सत्यापन</p>
            </div>
          </div>
          <span class="text-[9px] text-amber-950 font-extrabold bg-amber-100/90 border border-amber-300 px-2 py-0.5 rounded-full flex items-center space-x-1 shadow-2xs">
            <i class="fa-solid fa-lock text-[9px] text-amber-700"></i>
            <span>समाज पात्रता नियम</span>
          </span>
        </div>

        <!-- STRICT COMMUNITY ACCESS GATE BANNER (जिस जाति का ऐप हो उसी का सदस्य प्रवेश कर सकता है) -->
        <div class="p-2.5 rounded-xl bg-gradient-to-r from-amber-50 via-emerald-50 to-amber-50 border-2 border-amber-300 text-stone-800 shadow-2xs">
          <div class="flex items-start space-x-2">
            <div class="w-6 h-6 rounded-full bg-amber-400 text-amber-950 flex items-center justify-center shrink-0 mt-0.5 shadow-2xs">
              <i class="fa-solid fa-scale-balanced text-xs"></i>
            </div>
            <div class="flex-1">
              <h4 class="text-[11px] font-extrabold text-amber-950 flex items-center space-x-1">
                <span>🔒 केवल अधिकृत समाज के सदस्यों हेतु (Strict Samaj Eligibility)</span>
              </h4>
              <p class="text-[10px] text-stone-600 font-medium leading-tight mt-0.5">
                यह वैवाहिक मंच आपके चुने हुए समाज के प्रामाणिक एवं सत्यापित परिवारों के लिए ही आरक्षित है। केवल उसी समाज का व्यक्ति इसमें प्रवेश कर सकता है व रिश्ते देख सकता है।
              </p>
            </div>
          </div>
        </div>

        <!-- धर्म चयन (Religion Tabs) -->
        <div>
          <label class="block text-xs font-bold text-stone-700 mb-1.5 flex items-center justify-between">
            <span>धर्म (Religion) *</span>
            <span class="text-[10px] text-emerald-700 font-semibold">अपने धर्म के अनुसार समाज देखें</span>
          </label>
          <div class="grid grid-cols-4 gap-1.5 text-center text-xs">
            <div>
              <input type="radio" name="religion" value="Hindu" id="rel_hindu" class="hidden pill-radio" checked onchange="filterCastesByReligion('Hindu')">
              <label for="rel_hindu" class="block py-2 px-1 rounded-xl border border-emerald-200 bg-white text-[#064E3B] font-bold cursor-pointer transition shadow-2xs hover:bg-emerald-50">
                <span class="text-sm block mb-0.5">🕉️</span>
                <span class="text-[11px]">हिन्दू</span>
              </label>
            </div>
            <div>
              <input type="radio" name="religion" value="Jain" id="rel_jain" class="hidden pill-radio" onchange="filterCastesByReligion('Jain')">
              <label for="rel_jain" class="block py-2 px-1 rounded-xl border border-emerald-200 bg-white text-[#064E3B] font-bold cursor-pointer transition shadow-2xs hover:bg-emerald-50">
                <span class="text-sm block mb-0.5">🪷</span>
                <span class="text-[11px]">जैन</span>
              </label>
            </div>
            <div>
              <input type="radio" name="religion" value="Sikh" id="rel_sikh" class="hidden pill-radio" onchange="filterCastesByReligion('Sikh')">
              <label for="rel_sikh" class="block py-2 px-1 rounded-xl border border-emerald-200 bg-white text-[#064E3B] font-bold cursor-pointer transition shadow-2xs hover:bg-emerald-50">
                <span class="text-sm block mb-0.5">ੴ</span>
                <span class="text-[11px]">सिख</span>
              </label>
            </div>
            <div>
              <input type="radio" name="religion" value="Other" id="rel_other" class="hidden pill-radio" onchange="filterCastesByReligion('Other')">
              <label for="rel_other" class="block py-2 px-1 rounded-xl border border-emerald-200 bg-white text-[#064E3B] font-bold cursor-pointer transition shadow-2xs hover:bg-emerald-50">
                <span class="text-sm block mb-0.5">✨</span>
                <span class="text-[11px]">अन्य</span>
              </label>
            </div>
          </div>
        </div>

        <!-- जाति / समाज (Caste & Community) - Interactive Smart Selector -->
        <div>
          <div class="flex items-center justify-between mb-1.5">
            <label class="block text-xs font-bold text-stone-800 flex items-center space-x-1">
              <i class="fa-solid fa-users text-emerald-700 text-xs"></i>
              <span>समाज / जाति चुनें (Select Samaj / Caste) *</span>
            </label>
            <span class="text-[10px] text-amber-900 font-bold bg-amber-50 border border-amber-300 px-2 py-0.5 rounded-full flex items-center space-x-1">
              <i class="fa-solid fa-bolt text-amber-600 text-[10px]"></i>
              <span>1-टैप में चुनें या लिखें</span>
            </span>
          </div>

          <!-- Popular Caste Quick Chips Container -->
          <div class="flex flex-wrap gap-1.5 mb-2.5 max-h-[160px] overflow-y-auto pr-0.5" id="casteChipsContainer">
            <!-- Dynamically populated by JS according to selected religion -->
          </div>

          <!-- Samaj Dropdown Selection + Manual Input -->
          <div class="space-y-1.5">
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-emerald-700 text-xs">
                <i class="fa-solid fa-landmark text-sm"></i>
              </div>
              <select id="casteDropdownSelect" class="royal-input pl-9 font-bold text-xs text-stone-800 bg-white border-2 border-emerald-300" onchange="handleCasteSelectDropdown(this.value)">
                <option value="">-- अपनी जाति / समाज सूची में से चुनें --</option>
                <optgroup label="प्रमुख समाज (Major Communities)">
                  <option value="ब्राह्मण (Brahmin)">ब्राह्मण समाज (Brahmin Samaj)</option>
                  <option value="राजपूत (Rajput)">राजपूत समाज (Rajput Samaj)</option>
                  <option value="माहेश्वरी (Maheshwari)">माहेश्वरी समाज (Maheshwari Samaj)</option>
                  <option value="अग्रवाल (Agarwal)">अग्रवाल समाज (Agarwal Samaj)</option>
                  <option value="जैन (Jain)">जैन समाज (Jain Samaj)</option>
                  <option value="पाटीदार / पटेल (Patidar)">पाटीदार / पटेल समाज (Patidar / Patel)</option>
                  <option value="खंडेलवाल (Khandelwal)">खंडेलवाल समाज (Khandelwal Samaj)</option>
                  <option value="कायस्थ (Kayastha)">कायस्थ समाज (Kayastha Samaj)</option>
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
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-emerald-700 text-xs">
                <i class="fa-solid fa-users text-sm"></i>
              </div>
              <input 
                type="text" 
                name="caste" 
                id="casteInput" 
                placeholder="अपनी जाति / समाज ऊपर से चुनें या लिखें..." 
                class="royal-input pl-9 pr-32 font-bold text-xs text-stone-800"
                oninput="handleCasteInput(this.value)"
                required
              >
              <!-- Verified Community Badge -->
              <div id="casteSelectedBadge" class="hidden absolute inset-y-1.5 right-1.5 flex items-center pr-1.5 pointer-events-none">
                <span class="text-[10px] font-extrabold text-emerald-800 bg-emerald-100 border border-emerald-300 px-2 py-0.5 rounded-md flex items-center space-x-1 shadow-2xs animate-fade-in">
                  <i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i>
                  <span id="casteBadgeText">सत्यापित समाज</span>
                </span>
              </div>
            </div>
          </div>

          <!-- MANDATORY COMMUNITY ELIGIBILITY DECLARATION CHECKBOX -->
          <div class="mt-2.5 p-2 rounded-xl bg-amber-50/70 border border-amber-300 flex items-start space-x-2">
            <input type="checkbox" id="samajDeclaration" name="samaj_declaration" checked required class="mt-0.5 w-4 h-4 rounded text-emerald-700 focus:ring-emerald-500 border-amber-300 cursor-pointer">
            <label for="samajDeclaration" class="text-[10.5px] text-stone-700 font-semibold cursor-pointer select-none leading-snug">
              <strong class="text-amber-950 font-bold">समाज सदस्यता पुष्टि:</strong> मैं पुष्टि करता/करती हूँ कि मैं चुने हुए समाज का प्रामाणिक सदस्य हूँ और केवल संबंधित समाज के सदस्य ही इस ऐप में प्रवेश कर सकते हैं।
            </label>
          </div>
        </div>

        <!-- उप-जाति / शाखा (Sub-Caste / Branch - Optional) -->
        <div>
          <div class="flex items-center justify-between mb-1">
            <label class="block text-[11px] font-bold text-stone-700">उप-जाति / शाखा (Sub-Caste / Branch)</label>
            <span class="text-[9px] text-stone-400 font-medium">ऐच्छिक (Optional)</span>
          </div>
          <div class="relative">
            <input 
              type="text" 
              name="sub_caste" 
              id="subCasteInput" 
              placeholder="जैसे: गौड़ / श्वेतांबर / सूर्यवंशी / बीसा" 
              class="royal-input text-xs"
              oninput="updateFormProgress()"
            >
          </div>
          <!-- Auto suggested sub-castes -->
          <div id="subCasteSuggestionsContainer" class="hidden mt-1.5 flex flex-wrap gap-1"></div>
        </div>

        <!-- गोत्र (Gotra) - पूर्णतः ऐच्छिक (Optional) -->
        <div class="pt-1">
          <div class="flex items-center justify-between mb-1">
            <div class="flex items-center space-x-1.5">
              <label class="block text-xs font-bold text-stone-700">गोत्र (Gotra)</label>
              <span class="text-[9px] text-amber-800 font-bold bg-amber-50 px-2 py-0.5 rounded-full border border-amber-300">
                ऐच्छिक (Optional)
              </span>
            </div>
            <span class="text-[9px] text-stone-500 font-medium">
              मालूम न हो तो खाली छोड़ सकते हैं
            </span>
          </div>
          <input 
            type="text" 
            name="gotra" 
            id="gotraInput" 
            placeholder="जैसे: राठौड़ / काबरा / कश्यप (मालूम न हो तो खाली छोड़ें)" 
            class="royal-input font-semibold text-xs text-stone-800"
            oninput="updateFormProgress()"
          >
        </div>

        <!-- Dynamic Gotra Suggestions Pills Panel -->
        <div id="gotraSuggestionsContainer" class="p-2.5 rounded-xl bg-gradient-to-r from-emerald-50/80 via-amber-50/50 to-emerald-50/80 border border-emerald-200">
          <div class="flex items-center justify-between mb-1.5">
            <span class="text-[10px] text-[#064E3B] font-extrabold flex items-center space-x-1">
              <i class="fa-solid fa-sparkles text-amber-500 text-[11px]"></i>
              <span id="gotraSugHeading">लोकप्रिय गोत्र (मालूम हो तो 1-टैप में चुनें):</span>
            </span>
            <span class="text-[9px] text-stone-500 font-medium">टैप करते ही गोत्र भर जाएगा</span>
          </div>
          <div id="gotraSuggestions" class="flex flex-wrap gap-1.5">
            <!-- Interactive Gotra chips rendered dynamically by JS -->
          </div>
        </div>

        <!-- मांगलिक विवरण (Manglik Status) - Rich Card Selector -->
        <div>
          <div class="flex items-center justify-between mb-1.5">
            <label class="block text-[11px] font-bold text-stone-700">कुंडली मांगलिक स्थिति (Manglik Status) *</label>
            <span class="text-[9px] text-stone-500">कुंडली मिलान हेतु</span>
          </div>
          <div class="grid grid-cols-4 gap-1.5 text-center text-xs">
            <div>
              <input type="radio" name="manglik" value="no" id="manglik_no" class="hidden pill-radio" checked onchange="updateFormProgress()">
              <label for="manglik_no" class="block py-2 px-1 rounded-xl border border-emerald-200 bg-white text-[#064E3B] font-bold text-[11px] cursor-pointer transition shadow-2xs hover:bg-emerald-50">
                <i class="fa-solid fa-shield text-emerald-600 text-[11px] block mb-0.5"></i>
                <span>अमांगलिक</span>
              </label>
            </div>
            <div>
              <input type="radio" name="manglik" value="yes" id="manglik_yes" class="hidden pill-radio" onchange="updateFormProgress()">
              <label for="manglik_yes" class="block py-2 px-1 rounded-xl border border-red-200 bg-white text-red-900 font-bold text-[11px] cursor-pointer transition shadow-2xs hover:bg-red-50">
                <i class="fa-solid fa-fire text-red-600 text-[11px] block mb-0.5"></i>
                <span>मांगलिक</span>
              </label>
            </div>
            <div>
              <input type="radio" name="manglik" value="anshik" id="manglik_anshik" class="hidden pill-radio" onchange="updateFormProgress()">
              <label for="manglik_anshik" class="block py-2 px-1 rounded-xl border border-amber-200 bg-white text-amber-900 font-bold text-[11px] cursor-pointer transition shadow-2xs hover:bg-amber-50">
                <i class="fa-solid fa-sun text-amber-600 text-[11px] block mb-0.5"></i>
                <span>आंशिक</span>
              </label>
            </div>
            <div>
              <input type="radio" name="manglik" value="dont_know" id="manglik_dont_know" class="hidden pill-radio" onchange="updateFormProgress()">
              <label for="manglik_dont_know" class="block py-2 px-1 rounded-xl border border-stone-200 bg-white text-stone-700 font-bold text-[11px] cursor-pointer transition shadow-2xs hover:bg-stone-50">
                <i class="fa-solid fa-circle-question text-stone-500 text-[11px] block mb-0.5"></i>
                <span>ज्ञात नहीं</span>
              </label>
            </div>
          </div>
        </div>

      </div>

      <!-- ================= SECTION 3: शिक्षा एवं कार्यक्षेत्र (Education & Career) ================= -->
      <div class="form-section-card space-y-3">
        <div class="flex items-center space-x-2 pb-2 border-b border-emerald-100">
          <div class="w-7 h-7 rounded-full bg-emerald-800 text-white flex items-center justify-center text-xs font-bold">3</div>
          <h2 class="text-sm font-bold text-[#064E3B]">शिक्षा, कार्यक्षेत्र एवं वार्षिक आय</h2>
        </div>

        <div class="grid grid-cols-2 gap-2">
          <!-- उच्चतम शिक्षा (Highest Education) -->
          <div>
            <label class="block text-[11px] font-bold text-stone-700 mb-1">उच्चतम शिक्षा (Qualification) *</label>
            <select name="highest_education" class="royal-input" onchange="updateFormProgress()">
              <option value="B.Tech / B.E.">B.Tech / B.E. / Engineering</option>
              <option value="M.Tech / M.E.">M.Tech / M.E.</option>
              <option value="MBA / PGDM">MBA / PGDM</option>
              <option value="MBBS / MD / MS">MBBS / MD / MS (Doctor)</option>
              <option value="CA / CS / ICWA">CA / CS / ICWA</option>
              <option value="MCA / BCA">MCA / BCA</option>
              <option value="B.Com / M.Com">B.Com / M.Com</option>
              <option value="B.A / M.A">B.A / M.A</option>
              <option value="B.Sc / M.Sc">B.Sc / M.Sc</option>
              <option value="PhD / Doctorate">PhD / Doctorate</option>
              <option value="Graduate (Other)">ग्रेजुएट (Graduate)</option>
              <option value="Post Graduate (Other)">पोस्ट ग्रेजुएट (Post Graduate)</option>
            </select>
          </div>

          <!-- कार्यक्षेत्र (Employed In) -->
          <div>
            <label class="block text-[11px] font-bold text-stone-700 mb-1">कार्यक्षेत्र (Employed In) *</label>
            <select name="employed_in" class="royal-input" onchange="updateFormProgress()">
              <option value="private_sector">प्राइवेट सेक्टर (Private)</option>
              <option value="government_psu">सरकारी नौकरी (Govt/PSU)</option>
              <option value="business_self_employed">व्यवसाय / बिज़नेस (Business)</option>
              <option value="defense">डिफेंस / सेना (Defense)</option>
              <option value="not_working">कार्यरत नहीं (Not Working)</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-2 gap-2">
          <!-- वार्षिक आय (Annual Income) -->
          <div>
            <label class="block text-[11px] font-bold text-stone-700 mb-1">वार्षिक आय (Annual Income) *</label>
            <select name="annual_income_inr" class="royal-input" onchange="updateFormProgress()">
              <option value="300000">₹3 - ₹5 लाख</option>
              <option value="600000" selected>₹6 - ₹10 लाख</option>
              <option value="1200000">₹10 - ₹15 लाख</option>
              <option value="2000000">₹15 - ₹25 लाख</option>
              <option value="3500000">₹25 - ₹50 लाख</option>
              <option value="6000000">₹50 लाख से अधिक</option>
            </select>
          </div>

          <!-- कार्य शहर (Work City) -->
          <div>
            <div class="flex items-center justify-between mb-1">
              <label class="block text-[11px] font-bold text-stone-700">जॉब का शहर (Work City) *</label>
              <button type="button" onclick="syncWorkCityWithCurrent()" class="text-[9px] text-[#065F46] hover:text-[#033626] font-bold bg-emerald-50 hover:bg-emerald-100 px-1.5 py-0.5 rounded border border-emerald-200 transition cursor-pointer" title="वर्तमान शहर को कार्य शहर में कॉपी करें">
                ⚡ वर्तमान शहर जैसा
              </button>
            </div>
            <input type="text" name="work_city" id="workCityInput" placeholder="जैसे: जयपुर / दिल्ली" class="royal-input" oninput="updateFormProgress()">
          </div>
        </div>

      </div>

      <!-- ================= SECTION 4: निवास एवं पारिवारिक विवरण (Location & Family) ================= -->
      <div class="form-section-card space-y-3">
        <div class="flex items-center space-x-2 pb-2 border-b border-emerald-100">
          <div class="w-7 h-7 rounded-full bg-emerald-800 text-white flex items-center justify-center text-xs font-bold">4</div>
          <h2 class="text-sm font-bold text-[#064E3B]">निवास एवं पारिवारिक पृष्ठभूमि</h2>
        </div>

        <div class="grid grid-cols-2 gap-2">
          <!-- वर्तमान शहर (City) with Datalist -->
          <div>
            <label class="block text-[11px] font-bold text-stone-700 mb-1">वर्तमान शहर (Current City) *</label>
            <input 
              list="cityDatalist" 
              id="currentCityInput" 
              name="city" 
              placeholder="जैसे: जयपुर / दिल्ली" 
              class="royal-input font-medium" 
              oninput="handleCityChange(this.value)"
            >
            <datalist id="cityDatalist">
              <option value="जयपुर">
              <option value="जोधपुर">
              <option value="उदयपुर">
              <option value="कोटा">
              <option value="बीकानेर">
              <option value="अजमेर">
              <option value="अलवर">
              <option value="भीलवाड़ा">
              <option value="सीकर">
              <option value="पाली">
              <option value="दिल्ली (NCR)">
              <option value="नोएडा">
              <option value="गुड़गांव / गुरुग्राम">
              <option value="गाजियाबाद">
              <option value="फरीदाबाद">
              <option value="मुंबई">
              <option value="पुणे">
              <option value="नागपुर">
              <option value="नासिक">
              <option value="अहमदाबाद">
              <option value="सूरत">
              <option value="वड़ोदरा">
              <option value="राजकोट">
              <option value="इंदौर">
              <option value="भोपाल">
              <option value="ग्वालियर">
              <option value="जबलपुर">
              <option value="उज्जैन">
              <option value="बैंगलोर / Bengaluru">
              <option value="हैदराबाद">
              <option value="लखनऊ">
              <option value="कानपुर">
              <option value="आगरा">
              <option value="वाराणसी">
              <option value="प्रयागराज">
              <option value="कोलकाता">
              <option value="चंडीगढ़">
              <option value="पटना">
              <option value="रायपुर">
              <option value="देहरादून">
            </datalist>
          </div>

          <!-- वर्तमान राज्य (State) with Auto Detect Badge -->
          <div>
            <div class="flex items-center justify-between mb-1">
              <label class="block text-[11px] font-bold text-stone-700">राज्य (State) *</label>
              <span id="autoStateBadge" class="hidden text-[9px] font-bold text-emerald-800 bg-emerald-100 px-1.5 py-0.5 rounded border border-emerald-200">
                ⚡ स्वतः चुना
              </span>
            </div>
            <input type="text" id="currentStateInput" name="state" placeholder="जैसे: राजस्थान" class="royal-input font-medium" oninput="updateFormProgress()">
          </div>
        </div>

        <!-- Quick Select Top Cities Chips -->
        <div class="flex flex-wrap gap-1 items-center pt-0.5">
          <span class="text-[9px] text-stone-400 font-bold mr-1">त्वरित शहर:</span>
          <button type="button" onclick="selectQuickCity('जयपुर', 'राजस्थान')" class="px-2 py-0.5 rounded-md text-[10px] font-medium bg-stone-50 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition">जयपुर</button>
          <button type="button" onclick="selectQuickCity('जोधपुर', 'राजस्थान')" class="px-2 py-0.5 rounded-md text-[10px] font-medium bg-stone-50 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition">जोधपुर</button>
          <button type="button" onclick="selectQuickCity('दिल्ली (NCR)', 'दिल्ली')" class="px-2 py-0.5 rounded-md text-[10px] font-medium bg-stone-50 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition">दिल्ली NCR</button>
          <button type="button" onclick="selectQuickCity('मुंबई', 'महाराष्ट्र')" class="px-2 py-0.5 rounded-md text-[10px] font-medium bg-stone-50 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition">मुंबई</button>
          <button type="button" onclick="selectQuickCity('अहमदाबाद', 'गुजरात')" class="px-2 py-0.5 rounded-md text-[10px] font-medium bg-stone-50 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition">अहमदाबाद</button>
          <button type="button" onclick="selectQuickCity('इंदौर', 'मध्य प्रदेश')" class="px-2 py-0.5 rounded-md text-[10px] font-medium bg-stone-50 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition">इंदौर</button>
          <button type="button" onclick="selectQuickCity('बैंगलोर', 'कर्नाटक')" class="px-2 py-0.5 rounded-md text-[10px] font-medium bg-stone-50 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition">बैंगलोर</button>
        </div>

        <!-- 2. पिता का विवरण (Father Name & Occupation Option List) -->
        <div class="p-3 rounded-2xl bg-emerald-50/50 border border-emerald-200/80 space-y-2.5">
          <div class="flex items-center space-x-1.5 text-[#064E3B] font-extrabold text-xs">
            <i class="fa-solid fa-user-tie text-emerald-700 text-sm"></i>
            <span>पिता का विवरण (Father's Details)</span>
          </div>
          
          <div class="grid grid-cols-2 gap-2">
            <!-- पिता का नाम -->
            <div>
              <label class="block text-[11px] font-bold text-stone-700 mb-1">पिता का शुभ नाम (Father's Name)</label>
              <input type="text" name="father_name" placeholder="जैसे: श्री रमाकांत शर्मा" class="royal-input text-xs font-semibold">
            </div>

            <!-- पिता का कार्य / व्यवसाय (Option Dropdown List) -->
            <div>
              <label class="block text-[11px] font-bold text-stone-700 mb-1">
                <span>पिता का कार्य / व्यवसाय *</span>
              </label>
              <select name="father_occupation" id="fatherOccSelect" class="royal-input text-xs font-bold bg-white text-stone-800" onchange="updateFormProgress()">
                <option value="">-- पिता का कार्य चुनें --</option>
                <option value="व्यापार / उद्योगपति (Business)">🏢 व्यापार / उद्योगपति (Business)</option>
                <option value="सरकारी सेवा / राजपत्रित अधिकारी (Govt Service)">🏛️ सरकारी सेवा / राजपत्रित अधिकारी (Govt Service)</option>
                <option value="कॉर्पोरेट / प्राइवेट सर्विस (Corporate / MNC)">💼 कॉर्पोरेट / प्राइवेट सर्विस (Corporate / MNC)</option>
                <option value="डॉक्टर / चिकित्सा सेवा (Doctor / Healthcare)">🩺 डॉक्टर / चिकित्सा सेवा (Doctor)</option>
                <option value="सीए / सीएस / वित्तीय सलाहकार (CA / Finance)">📊 सीए / सीएस / वित्तीय सलाहकार (CA)</option>
                <option value="अधिवक्ता / विधिक सेवा (Advocate / Legal)">⚖️ अधिवक्ता / विधिक सेवा (Advocate)</option>
                <option value="इंजीनियर / आईटी कंसल्टेंट (Engineer / IT)">💻 इंजीनियर / आईटी कंसल्टेंट (Engineer)</option>
                <option value="कृषि / जमींदार / फार्मिंग (Agriculture)">🌾 कृषि / जमींदार / फार्मिंग (Agriculture)</option>
                <option value="प्रोफेसर / शिक्षक / शिक्षाविद् (Professor / Teacher)">🎓 प्रोफेसर / शिक्षक / शिक्षाविद् (Teacher)</option>
                <option value="डिफेंस / सेना / पुलिस सेवा (Defence / Police)">🛡️ डिफेंस / सेना / पुलिस (Defence / Police)</option>
                <option value="बैंकिंग / वित्तीय संस्थान (Banking / Finance)">🏦 बैंकिंग / बीमा सेवा (Banking)</option>
                <option value="सेवानिवृत्त (Retired)">📜 सेवानिवृत्त (Retired)</option>
                <option value="अन्य (Other)">✏️ अन्य कार्य (Other)</option>
              </select>
            </div>
          </div>
        </div>

        <!-- 3. माता का विवरण (Mother Name & Occupation Option List with B.Ed / Teacher / Homemaker) -->
        <div class="p-3 rounded-2xl bg-amber-50/50 border border-amber-200/80 space-y-2.5">
          <div class="flex items-center space-x-1.5 text-amber-950 font-extrabold text-xs">
            <i class="fa-solid fa-person-dress text-amber-700 text-sm"></i>
            <span>माता का विवरण (Mother's Details)</span>
          </div>

          <div class="grid grid-cols-2 gap-2">
            <!-- माता का नाम -->
            <div>
              <label class="block text-[11px] font-bold text-stone-700 mb-1">माता का शुभ नाम (Mother's Name)</label>
              <input type="text" name="mother_name" placeholder="जैसे: श्रीमती विमला शर्मा" class="royal-input text-xs font-semibold">
            </div>

            <!-- माता का कार्य / पेशा (Option Dropdown List with B.Ed / Teacher / Homemaker) -->
            <div>
              <label class="block text-[11px] font-bold text-stone-700 mb-1">
                <span>माता का कार्य / पेशा *</span>
              </label>
              <select name="mother_occupation" id="motherOccSelect" class="royal-input text-xs font-bold bg-white text-stone-800" onchange="updateFormProgress()">
                <option value="">-- माता का कार्य चुनें --</option>
                <option value="गृहणी (Homemaker / Housewife)">🏡 गृहणी (Homemaker / Housewife)</option>
                <option value="शिक्षिका / प्रोफेसर / B.Ed (Teacher / Lecturer)">👩‍🏫 शिक्षिका / प्रोफेसर / B.Ed (Teacher / B.Ed)</option>
                <option value="सरकारी सेवा (Government Service)">🏛️ सरकारी सेवा (Government Service)</option>
                <option value="डॉक्टर / स्वास्थ्य सेवा (Doctor / Healthcare)">🩺 डॉक्टर / चिकित्सा / स्वास्थ्य सेवा (Doctor)</option>
                <option value="बैंक / वित्तीय सेवा (Banking / Finance)">🏦 बैंक / वित्तीय सेवा (Banking)</option>
                <option value="व्यापार / उद्यमी (Business / Entrepreneur)">🏢 व्यापार / उद्यमी (Business)</option>
                <option value="प्राइवेट कंपनी / कॉर्पोरेट (Corporate / Private)">💼 प्राइवेट सेक्टर / कॉर्पोरेट (Corporate)</option>
                <option value="समाजसेविका / ट्रस्टी (Social Worker)">🤝 समाजसेविका / ट्रस्टी (Social Worker)</option>
                <option value="सेवानिवृत्त (Retired)">📜 सेवानिवृत्त (Retired)</option>
                <option value="अन्य (Other)">✏️ अन्य कार्य (Other)</option>
              </select>
            </div>
          </div>
        </div>

        <!-- 4. परिवार प्रकार, स्टेटस एवं मूल निवास -->
        <div class="grid grid-cols-3 gap-2">
          <!-- परिवार का प्रकार (Family Type) -->
          <div>
            <label class="block text-[11px] font-bold text-stone-700 mb-1">परिवार प्रकार</label>
            <select name="family_type" class="royal-input text-xs font-medium">
              <option value="nuclear">एकल परिवार (Nuclear)</option>
              <option value="joint">संयुक्त परिवार (Joint Family)</option>
            </select>
          </div>

          <!-- परिवार स्टेटस -->
          <div>
            <label class="block text-[11px] font-bold text-stone-700 mb-1">पारिवारिक स्टेटस</label>
            <select name="family_status" class="royal-input text-xs font-medium">
              <option value="upper_middle_class" selected>उच्च मध्यमवर्गीय (Upper Middle)</option>
              <option value="middle_class">मध्यमवर्गीय (Middle Class)</option>
              <option value="rich">सम्पन्न (Affluent)</option>
              <option value="royal">प्रतिष्ठित राजसी (Elite / Royal)</option>
            </select>
          </div>

          <!-- मूल निवास (Native Place) -->
          <div>
            <label class="block text-[11px] font-bold text-stone-700 mb-1">मूल निवास (Native Origin)</label>
            <input type="text" name="native_city" placeholder="जैसे: शेखावाटी / मारवाड़" class="royal-input text-xs font-medium">
          </div>
        </div>

        <!-- भाई और बहन संख्या विवरण -->
        <div class="grid grid-cols-2 gap-2 pt-1 border-t border-emerald-100">
          <div>
            <label class="block text-[10.5px] font-bold text-stone-600 mb-0.5">भाई (Brothers)</label>
            <select name="brothers_count" class="royal-input text-xs">
              <option value="0">कोई भाई नहीं (No Brother)</option>
              <option value="1">1 भाई</option>
              <option value="2">2 भाई</option>
              <option value="3">3 या अधिक भाई</option>
            </select>
          </div>
          <div>
            <label class="block text-[10.5px] font-bold text-stone-600 mb-0.5">बहनें (Sisters)</label>
            <select name="sisters_count" class="royal-input text-xs">
              <option value="0">कोई बहन नहीं (No Sister)</option>
              <option value="1">1 बहन</option>
              <option value="2">2 बहनें</option>
              <option value="3">3 या अधिक बहनें</option>
            </select>
          </div>
        </div>

      </div>

      <!-- ================= SECTION 5: 4 फोटो अपलोड (Upload 4 Photos) ================= -->
      <div class="form-section-card space-y-3">
        <div class="flex items-center justify-between pb-2 border-b border-emerald-100">
          <div class="flex items-center space-x-2">
            <div class="w-7 h-7 rounded-full bg-emerald-800 text-white flex items-center justify-center text-xs font-bold">5</div>
            <h2 class="text-sm font-bold text-[#064E3B]">4 सुंदर फोटो अपलोड करें</h2>
          </div>
          <span class="text-[10px] text-amber-700 font-bold bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
            ★ स्पष्ट फोटो से 10x अधिक रिश्ते मिलते हैं
          </span>
        </div>

        <div class="grid grid-cols-2 gap-2.5">
          
          <!-- Photo 1: Main Close-up -->
          <div class="photo-upload-box p-3 text-center flex flex-col items-center justify-center min-h-[110px]" onclick="document.getElementById('photoInput1').click()">
            <input type="file" id="photoInput1" name="photo_1" accept="image/*" class="hidden" onchange="previewUpload(event, 'preview1', 'label1')">
            <div id="preview1" class="w-full h-full flex flex-col items-center justify-center">
              <i class="fa-solid fa-camera text-emerald-700 text-xl mb-1"></i>
              <span id="label1" class="text-[10px] font-bold text-[#064E3B] leading-tight">
                1. मुख्य चेहरा फोटो<br><span class="text-amber-600 font-semibold">(Profile DP)</span>
              </span>
            </div>
          </div>

          <!-- Photo 2: Full Length -->
          <div class="photo-upload-box p-3 text-center flex flex-col items-center justify-center min-h-[110px]" onclick="document.getElementById('photoInput2').click()">
            <input type="file" id="photoInput2" name="photo_2" accept="image/*" class="hidden" onchange="previewUpload(event, 'preview2', 'label2')">
            <div id="preview2" class="w-full h-full flex flex-col items-center justify-center">
              <i class="fa-solid fa-image text-emerald-700 text-xl mb-1"></i>
              <span id="label2" class="text-[10px] font-bold text-[#064E3B] leading-tight">
                2. फुल लेंथ फोटो<br><span class="text-stone-500 font-normal">(Standing Photo)</span>
              </span>
            </div>
          </div>

          <!-- Photo 3: Traditional Attire -->
          <div class="photo-upload-box p-3 text-center flex flex-col items-center justify-center min-h-[110px]" onclick="document.getElementById('photoInput3').click()">
            <input type="file" id="photoInput3" name="photo_3" accept="image/*" class="hidden" onchange="previewUpload(event, 'preview3', 'label3')">
            <div id="preview3" class="w-full h-full flex flex-col items-center justify-center">
              <i class="fa-solid fa-wand-magic-sparkles text-emerald-700 text-xl mb-1"></i>
              <span id="label3" class="text-[10px] font-bold text-[#064E3B] leading-tight">
                3. पारंपरिक परिधान<br><span class="text-stone-500 font-normal">(Traditional Dress)</span>
              </span>
            </div>
          </div>

          <!-- Photo 4: Casual / Family -->
          <div class="photo-upload-box p-3 text-center flex flex-col items-center justify-center min-h-[110px]" onclick="document.getElementById('photoInput4').click()">
            <input type="file" id="photoInput4" name="photo_4" accept="image/*" class="hidden" onchange="previewUpload(event, 'preview4', 'label4')">
            <div id="preview4" class="w-full h-full flex flex-col items-center justify-center">
              <i class="fa-solid fa-heart text-emerald-700 text-xl mb-1"></i>
              <span id="label4" class="text-[10px] font-bold text-[#064E3B] leading-tight">
                4. कैज़ुअल / परिवार<br><span class="text-stone-500 font-normal">(Casual / Family)</span>
              </span>
            </div>
          </div>

        </div>
      </div>

      <!-- ================= SECTION 6: अपने बारे में (About & Expectations) ================= -->
      <div class="form-section-card space-y-3">
        <div class="flex items-center justify-between pb-2 border-b border-emerald-100">
          <div class="flex items-center space-x-2">
            <div class="w-7 h-7 rounded-full bg-emerald-800 text-white flex items-center justify-center text-xs font-bold">6</div>
            <h2 class="text-sm font-bold text-[#064E3B]">जीवनसाथी से अपेक्षाएं एवं बायो</h2>
          </div>
          <button 
            type="button" 
            onclick="generateSmartBio()" 
            class="px-2.5 py-1 rounded-xl bg-gradient-to-r from-amber-400 via-amber-500 to-[#D4AF37] hover:from-amber-500 hover:to-amber-600 text-stone-900 font-extrabold text-[11px] shadow-xs flex items-center space-x-1.5 border border-amber-300 transition transform active:scale-95 cursor-pointer"
            title="आपके द्वारा भरी गई जानकारी से सुंदर परिचय स्वतः तैयार करें"
          >
            <i class="fa-solid fa-wand-magic-sparkles text-stone-900 text-xs"></i>
            <span>✨ ऑटो बायोडाटा लिखें (AI Bio)</span>
          </button>
        </div>

        <div>
          <label class="block text-[11px] font-bold text-stone-700 mb-1 flex items-center justify-between">
            <span>अपने बारे में और जीवनसाथी की अपेक्षाएं (Bio) *</span>
            <span class="text-[9px] text-emerald-800 font-bold bg-emerald-50 px-1.5 py-0.2 rounded border border-emerald-200">
              संस्कारी व प्रभावशाली
            </span>
          </label>
          <textarea 
            name="about_me" 
            id="aboutMeInput"
            rows="3" 
            placeholder="जैसे: सुसंस्कृत, शिक्षित और पारंपरिक मूल्यों में विश्वास रखने वाले परिवार से। एक समझदार और खुशमिजाज जीवनसाथी की तलाश है... (या ऊपर '✨ ऑटो बायोडाटा लिखें' बटन दबाएं)" 
            class="royal-input text-xs leading-relaxed"
            oninput="updateFormProgress()"
          ></textarea>
        </div>
      </div>

      <!-- ================= SUBMIT BUTTON ================= -->
      <div class="pt-2 pb-4">
        <button 
          type="submit" 
          class="enter-btn-glow w-full py-4 px-6 rounded-full bg-gradient-to-r from-[#065F46] via-[#047857] to-[#064E3B] hover:from-[#047857] hover:to-[#034833] text-white font-sans font-bold text-base sm:text-lg border-2 border-[#E6C254] flex items-center justify-center space-x-2.5 transition transform hover:scale-[1.02] active:scale-95 cursor-pointer shadow-xl">
          <i class="fa-solid fa-crown text-[#F5D061] text-lg"></i>
          <span class="tracking-wide font-extrabold text-white">बायोडाटा सुरक्षित करें और रिश्ते देखें</span>
          <i class="fa-solid fa-arrow-right text-[#F5D061] text-base"></i>
        </button>

        <p class="text-center text-[10px] text-stone-500 mt-2 font-medium">
          🔒 आपकी संपूर्ण व्यक्तिगत जानकारी 100% सुरक्षित और गोपनीय रखी जाती है।
        </p>

        <!-- Direct Jump to Page 4 (Matches) Button -->
        <div class="mt-2.5">
          <a href="/matches" onclick="window.location.href='/matches'; return false;" class="w-full py-3.5 px-4 rounded-2xl bg-amber-50 hover:bg-amber-100 border-2 border-amber-400 text-amber-950 font-extrabold text-xs sm:text-sm flex items-center justify-center space-x-2 transition shadow-sm active:scale-98 cursor-pointer">
            <i class="fa-solid fa-table-cells text-amber-600 text-sm"></i>
            <span>बिना फॉर्म भरे सीधे रिश्ते तालिका (पेज 4) देखें</span>
            <i class="fa-solid fa-arrow-right text-amber-700"></i>
          </a>
        </div>

        <!-- Back Navigation Links -->
        <div class="mt-3 flex items-center justify-center space-x-2 text-xs">
          <a href="/welcome" onclick="window.location.href='/welcome'; return false;" class="px-3.5 py-1.5 rounded-full bg-stone-100 hover:bg-stone-200 border border-stone-300 text-stone-700 font-bold transition flex items-center space-x-1.5 shadow-2xs">
            <i class="fa-solid fa-arrow-left text-[10px]"></i>
            <span>वापस पेज 2</span>
          </a>
          <a href="/cover" onclick="window.location.href='/cover'; return false;" class="px-3.5 py-1.5 rounded-full bg-emerald-50 hover:bg-emerald-100 border border-emerald-300 text-emerald-800 font-bold transition flex items-center space-x-1.5 shadow-2xs">
            <i class="fa-solid fa-home text-[10px] text-amber-600"></i>
            <span>कवर पेज (WhatsApp/FB/Insta)</span>
          </a>
        </div>
      </div>

    </form>

    <!-- Bottom Royal Ribbon -->
    <footer class="py-2.5 bg-gradient-to-r from-[#033626] via-[#064E3B] to-[#033626] text-amber-300 text-center flex items-center justify-center mt-auto">
      <div class="h-px w-16 bg-gradient-to-r from-transparent to-[#E6C254]"></div>
      <i class="fa-solid fa-heart text-[#E6C254] text-xs mx-2"></i>
      <div class="h-px w-16 bg-gradient-to-l from-transparent to-[#E6C254]"></div>
    </footer>

  </main>

  <!-- Comprehensive Professional Interactive Script -->
  <script>
    // Responsive view toggler
    function setViewport(width) {
      document.getElementById('biodataShell').style.maxWidth = width;
    }

    // Comprehensive Caste, Sub-Caste & Gotra Dictionary
    const CASTE_DATABASE = {
      'Hindu': [
        {
          name: 'राजपूत (Rajput)',
          cleanName: 'राजपूत',
          icon: '👑',
          subCastes: ['सूर्यवंशी', 'चंद्रवंशी', 'अग्निवंशी', 'शेखावत', 'राठौड़', 'चौहान', 'सिसोदिया'],
          gotras: ['राठौड़', 'शेखावत', 'चौहान', 'सिसौदिया', 'कछवाहा', 'गहलोत', 'तंवर', 'भाटी', 'परमार', 'जादौन', 'बड़गूजर']
        },
        {
          name: 'माहेश्वरी (Maheshwari)',
          cleanName: 'माहेश्वरी',
          icon: '💎',
          subCastes: ['माहेश्वरी वैश्य', 'डीडू माहेश्वरी', 'मारवाड़ी माहेश्वरी'],
          gotras: ['काबरा', 'राठी', 'बिड़ला', 'बजाज', 'बाहेती', 'तापड़िया', 'मूंदड़ा', 'मालपानी', 'तोषनीवाल', 'सोमानी', 'जाजू', 'लड्ढा', 'करवा', 'डागा']
        },
        {
          name: 'अग्रवाल (Agarwal)',
          cleanName: 'अग्रवाल',
          icon: '🪙',
          subCastes: ['बीसा अग्रवाल', 'दशा अग्रवाल', 'मारवाड़ी अग्रवाल'],
          gotras: ['गर्ग', 'गोयल', 'बंसल', 'मित्तल', 'सिंहल', 'जिंदल', 'तायल', 'बिंदल', 'कंसल', 'धारण', 'मधुकुल', 'मंगल', 'ऐरण']
        },
        {
          name: 'ब्राह्मण (Brahmin)',
          cleanName: 'ब्राह्मण',
          icon: '🪔',
          subCastes: ['गौड़ ब्राह्मण', 'दाधीच', 'पारीक', 'सारस्वत', 'सनाढ्य', 'कान्यकुब्ज', 'खंडेलवाल विप्र', 'पुष्करणा', 'झा / मैथिल'],
          gotras: ['भारद्वाज', 'कश्यप', 'वशिष्ट', 'दाधीच', 'पारीक', 'सारस्वत', 'गौड़', 'शांडिल्य', 'वत्स', 'भार्गव', 'गौतम', 'पराशर']
        },
        {
          name: 'खंडेलवाल (Khandelwal)',
          cleanName: 'खंडेलवाल',
          icon: '🏛️',
          subCastes: ['खंडेलवाल वैश्य'],
          gotras: ['गुप्ता', 'रावत', 'दुसाद', 'तांबी', 'डांगायच', 'नाटाणी', 'कायथवाल', 'सौंखिया', 'मेठी', 'बड़ाया', 'बूढ़िया']
        },
        {
          name: 'जाट (Jat)',
          cleanName: 'जाट',
          icon: '🌾',
          subCastes: ['हिन्दू जाट', 'सिख जाट', 'देशवाली'],
          gotras: ['पूनिया', 'बेनीवाल', 'चौधरी', 'जाखड़', 'गोदारा', 'ढाका', 'सहारण', 'सिहाग', 'कस्वां', 'डोटासरा', 'डूडी', 'नेहरा']
        },
        {
          name: 'यादव / अहीर (Yadav)',
          cleanName: 'यादव / अहीर',
          icon: '🌿',
          subCastes: ['यदुवंशी', 'ग्वालवंशी', 'अहीर'],
          gotras: ['राव', 'यादव', 'खोड़ा', 'महलावत', 'निमरोटिया', 'कलोइया', 'किरोड़ीवाल', 'घोसिया']
        },
        {
          name: 'गुर्जर (Gurjar)',
          cleanName: 'गुर्जर',
          icon: '🛡️',
          subCastes: ['वीर गुर्जर', 'कषाना', 'बैंसला', 'तंवर'],
          gotras: ['बैंसला', 'खटाना', 'भड़ाना', 'कसाना', 'पोसवाल', 'चेची', 'छावड़ी', 'तंवर', 'डोई', 'लोहमोड़']
        },
        {
          name: 'सैनी / माली (Saini)',
          cleanName: 'सैनी / माली',
          icon: '🌸',
          subCastes: ['सैनी क्षत्रिय', 'माली समाज', 'कुशवाहा'],
          gotras: ['सैनी', 'गहलोत', 'सांखला', 'टाक', 'सोलंकी', 'भाटी', 'पंवार', 'राठौड़']
        },
        {
          name: 'कुमावत (Kumawat)',
          cleanName: 'कुमावत',
          icon: '🔨',
          subCastes: ['कुमावत क्षत्रिय'],
          gotras: ['मारोठिया', 'जालंधरिया', 'सिरोहिया', 'बालोदिया', 'किरोड़ीवाल', 'अमेटा', 'बड़गुर्जर']
        },
        {
          name: 'प्रजापत / कुम्हार (Prajapat)',
          cleanName: 'प्रजापत',
          icon: '🏺',
          subCastes: ['मारू', 'जोधपुरिया', 'खटेड़ा'],
          gotras: ['घोडेला', 'सिरोहीवाल', 'कुम्हार', 'प्रजापत', 'जालंधरा']
        },
        {
          name: 'जंगिड़ / सुथार (Jangid)',
          cleanName: 'जंगिड़ / सुथार',
          icon: '📐',
          subCastes: ['ब्राह्मण सुथार', 'विश्वकर्मा जंगिड़'],
          gotras: ['भामू', 'सुथार', 'शर्मा', 'जंगिड़', 'वशिष्ठ']
        }
      ],
      'Jain': [
        {
          name: 'ओसवाल जैन (Oswal Jain)',
          cleanName: 'ओसवाल जैन',
          icon: '🪷',
          subCastes: ['श्वेतांबर मूतिपूजक', 'स्थानकवासी', 'तेरापंथी', 'दिगंबर'],
          gotras: ['लोढ़ा', 'बोथरा', 'संचेती', 'बाफना', 'मेहता', 'चोपड़ा', 'सुराणा', 'भण्डारी', 'गांधी']
        },
        {
          name: 'पोरवाल जैन (Porwal Jain)',
          cleanName: 'पोरवाल जैन',
          icon: '🪷',
          subCastes: ['श्वेतांबर', 'दिगंबर'],
          gotras: ['शाह', 'गांधी', 'दानगड़', 'कांटेड़', 'जावरे', 'कोठारी']
        },
        {
          name: 'खंडेलवाल जैन (Khandelwal Jain)',
          cleanName: 'खंडेलवाल जैन',
          icon: '🪷',
          subCastes: ['दिगंबर जैन', 'तेरापंथी', 'बीसपंथी'],
          gotras: ['कासलीवाल', 'सोगानी', 'सेठी', 'पाटोदी', 'बिलाला', 'बड़जात्या', 'गंगवाल', 'काला', 'लुहाड़िया']
        },
        {
          name: 'अग्रवाल जैन (Agarwal Jain)',
          cleanName: 'अग्रवाल जैन',
          icon: '🪷',
          subCastes: ['दिगंबर', 'श्वेतांबर'],
          gotras: ['गर्ग', 'गोयल', 'मित्तल', 'जिंदल', 'बंसल']
        }
      ],
      'Sikh': [
        {
          name: 'जाट सिख (Jat Sikh)',
          cleanName: 'जाट सिख',
          icon: 'ੴ',
          subCastes: ['जाट सिख'],
          gotras: ['संधू', 'गिल', 'सिद्धू', 'ढिल्लों', 'ग्रेवाल', 'चीमा', 'मान', 'औलख']
        },
        {
          name: 'अरोड़ा / खत्री सिख (Khatri / Arora)',
          cleanName: 'अरोड़ा / खत्री सिख',
          icon: 'ੴ',
          subCastes: ['अरोड़ा', 'खत्री'],
          gotras: ['साहनी', 'आनंद', 'चोपड़ा', 'मल्होत्रा', 'बेदी', 'सोढ़ी', 'कपूर', 'खन्ना']
        },
        {
          name: 'रामगढ़िया / भाटिया सिख',
          cleanName: 'रामगढ़िया / भाटिया',
          icon: 'ੴ',
          subCastes: ['रामगढ़िया', 'भाटिया'],
          gotras: ['भाटिया', 'बिरदी', 'कलसी', 'विर्दी', 'मठारू', 'सीहरा']
        }
      ],
      'Other': [
        {
          name: 'सिंधी (Sindhi)',
          cleanName: 'सिंधी',
          icon: '🌟',
          subCastes: ['अमिल्ल', 'भाईबंद', 'सहती'],
          gotras: ['अडवाणी', 'आहूजा', 'माखीजा', 'चावला', 'भाटिया', 'नांगिया', 'वासवानी']
        },
        {
          name: 'कायस्थ (Kayastha)',
          cleanName: 'कायस्थ',
          icon: '📜',
          subCastes: ['माथुर', 'सक्सेना', 'श्रीवास्तव', 'भटनागर', 'निगम', 'कुलश्रेष्ठ'],
          gotras: ['कश्यप', 'शिव', 'भारद्वाज']
        },
        {
          name: 'अन्य समाज (Other Community)',
          cleanName: 'अन्य समाज',
          icon: '🤝',
          subCastes: [],
          gotras: ['कश्यप', 'भारद्वाज', 'वत्स']
        }
      ]
    };

    // City to State Smart Auto-Mapper Dictionary (50+ Cities)
    const CITY_STATE_MAP = {
      'जयपुर': 'राजस्थान', 'जोधपुर': 'राजस्थान', 'उदयपुर': 'राजस्थान', 'कोटा': 'राजस्थान',
      'बीकानेर': 'राजस्थान', 'अजमेर': 'राजस्थान', 'अलवर': 'राजस्थान', 'भीलवाड़ा': 'राजस्थान',
      'सीकर': 'राजस्थान', 'पाली': 'राजस्थान', 'गंगानगर': 'राजस्थान', 'भरतपुर': 'राजस्थान',
      'बाड़मेर': 'राजस्थान', 'झुंझुनू': 'राजस्थान', 'दौसा': 'राजस्थान', 'चित्तौड़गढ़': 'राजस्थान',
      'दिल्ली': 'दिल्ली', 'दिल्ली (NCR)': 'दिल्ली', 'नई दिल्ली': 'दिल्ली',
      'नोएडा': 'उत्तर प्रदेश (NCR)', 'गाजियाबाद': 'उत्तर प्रदेश (NCR)',
      'गुड़गांव': 'हरियाणा (NCR)', 'गुरुग्राम': 'हरियाणा (NCR)', 'फरीदाबाद': 'हरियाणा (NCR)',
      'मुंबई': 'महाराष्ट्र', 'पुणे': 'महाराष्ट्र', 'नागपुर': 'महाराष्ट्र', 'नासिक': 'महाराष्ट्र',
      'ठाणे': 'महाराष्ट्र', 'नवी मुंबई': 'महाराष्ट्र', 'औरंगाबाद': 'महाराष्ट्र',
      'अहमदाबाद': 'गुजरात', 'सूरत': 'गुजरात', 'वड़ोदरा': 'गुजरात', 'राजकोट': 'गुजरात', 'भावनगर': 'गुजरात',
      'इंदौर': 'मध्य प्रदेश', 'भोपाल': 'मध्य प्रदेश', 'ग्वालियर': 'मध्य प्रदेश', 'जबलपुर': 'मध्य प्रदेश', 'उज्जैन': 'मध्य प्रदेश',
      'बैंगलोर': 'कर्नाटक', 'बैंगलोर / Bengaluru': 'कर्नाटक', 'बेंगलुरु': 'कर्नाटक', 'मैसूर': 'कर्नाटक',
      'हैदराबाद': 'तेलंगाना', 'सिकंदराबाद': 'तेलंगाना',
      'लखनऊ': 'उत्तर प्रदेश', 'कानपुर': 'उत्तर प्रदेश', 'आगरा': 'उत्तर प्रदेश', 'वाराणसी': 'उत्तर प्रदेश', 'प्रयागराज': 'उत्तर प्रदेश', 'मेरठ': 'उत्तर प्रदेश',
      'कोलकाता': 'पश्चिम बंगाल', 'हावड़ा': 'पश्चिम बंगाल',
      'चंडीगढ़': 'पंजाब / हरियाणा', 'लुधियाना': 'पंजाब', 'अमृतसर': 'पंजाब', 'जालंधर': 'पंजाब',
      'पटना': 'बिहार', 'गया': 'बिहार',
      'रायपुर': 'छत्तीसगढ़', 'बिलासपुर': 'छत्तीसगढ़',
      'देहरादून': 'उत्तराखंड', 'हरिद्वार': 'उत्तराखंड'
    };

    let currentSelectedCaste = '';
    let lastCelebratedMilestone = 0;

    // Filter and Render Caste Chips by Religion
    function filterCastesByReligion(religion) {
      const container = document.getElementById('casteChipsContainer');
      if (!container) return;
      
      const list = CASTE_DATABASE[religion] || CASTE_DATABASE['Hindu'];
      container.innerHTML = '';

      list.forEach(item => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'caste-chip' + (currentSelectedCaste === item.cleanName ? ' active' : '');
        btn.innerHTML = `<span class="chip-icon">${item.icon}</span> <span>${item.cleanName}</span>`;
        btn.onclick = () => selectCaste(item.cleanName, item.name);
        container.appendChild(btn);
      });

      // Update progress
      updateFormProgress();
    }

    // Handle Caste Dropdown Selection
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

    // Select Caste Action (1-Tap Experience)
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

      // Sync Dropdown
      if (dropdown && cleanName) {
        for (let i = 0; i < dropdown.options.length; i++) {
          if (dropdown.options[i].value.includes(cleanName) || dropdown.options[i].text.includes(cleanName)) {
            dropdown.selectedIndex = i;
            break;
          }
        }
      }

      // Update active state on all chips
      const chips = document.querySelectorAll('.caste-chip');
      chips.forEach(chip => {
        if (chip.textContent.includes(cleanName)) {
          chip.classList.add('active');
        } else {
          chip.classList.remove('active');
        }
      });

      // Find matching caste object across religions
      let foundObj = null;
      for (const rel in CASTE_DATABASE) {
        const item = CASTE_DATABASE[rel].find(c => c.cleanName === cleanName || c.name === fullName);
        if (item) { foundObj = item; break; }
      }

      // Render Gotra Suggestions
      const gotraContainer = document.getElementById('gotraSuggestionsContainer');
      const gotraListEl = document.getElementById('gotraSuggestions');
      const gotraHeading = document.getElementById('gotraSugHeading');

      if (foundObj && foundObj.gotras && foundObj.gotras.length > 0) {
        if (gotraContainer) gotraContainer.classList.remove('hidden');
        if (gotraHeading) gotraHeading.textContent = `${cleanName} समाज के प्रमुख गोत्र (मालूम हो तो चुनें):`;
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
          // Optional 'Not Known' Pill
          const unknownPill = document.createElement('button');
          unknownPill.type = 'button';
          unknownPill.className = 'gotra-pill !bg-stone-100 !text-stone-600 !border-stone-300 hover:!bg-stone-200';
          unknownPill.textContent = 'मालूम नहीं (खाली रखें)';
          unknownPill.onclick = () => selectGotra('');
          gotraListEl.appendChild(unknownPill);
        }
      }

      // Render Sub-Caste Suggestions
      const subContainer = document.getElementById('subCasteSuggestionsContainer');
      if (foundObj && foundObj.subCastes && foundObj.subCastes.length > 0) {
        if (subContainer) {
          subContainer.classList.remove('hidden');
          subContainer.innerHTML = `<span class="text-[9px] text-stone-400 font-bold mr-1">उप-शाखाएं:</span>`;
          foundObj.subCastes.forEach(sc => {
            const scBtn = document.createElement('button');
            scBtn.type = 'button';
            scBtn.className = 'px-2 py-0.5 rounded text-[10px] bg-stone-100 hover:bg-emerald-50 text-stone-700 border border-stone-200 transition font-medium';
            scBtn.textContent = sc;
            scBtn.onclick = () => selectSubCaste(sc);
            subContainer.appendChild(scBtn);
          });
        }
      } else if (subContainer) {
        subContainer.classList.add('hidden');
      }

      updateFormProgress();
    }

    // Gotra 1-Tap Fill
    function selectGotra(gotraName) {
      const gotraInput = document.getElementById('gotraInput');
      if (gotraInput) {
        gotraInput.value = gotraName;
        if (gotraName) gotraInput.focus();
      }

      // Highlight clicked gotra pill
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

    // Sub Caste 1-Tap Fill
    function selectSubCaste(scName) {
      const subInput = document.getElementById('subCasteInput');
      if (subInput) {
        subInput.value = scName;
      }
      updateFormProgress();
    }

    // Manual Caste Input Listener
    function handleCasteInput(val) {
      const trimmed = val.trim();
      currentSelectedCaste = trimmed;
      const badge = document.getElementById('casteSelectedBadge');

      if (!trimmed) {
        if (badge) badge.classList.add('hidden');
        return;
      }

      // Check if matches known database
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
        badge.innerHTML = `🎂 ${age} वर्ष (आयु)`;
        badge.classList.add('animate-bounce-in');
        setTimeout(() => badge.classList.remove('animate-bounce-in'), 400);
      }
      updateFormProgress();
    }

    // Auto Height Display Update
    function updateHeightBadge() {
      const select = document.getElementById('heightSelect');
      const badge = document.getElementById('heightDisplayBadge');
      if (!select || !badge) return;

      const text = select.options[select.selectedIndex].text;
      badge.textContent = `📏 ${text}`;
      updateFormProgress();
    }

    // Smart City to State Auto Detection
    function handleCityChange(cityVal) {
      const trimmed = cityVal.trim();
      const stateInput = document.getElementById('currentStateInput');
      const autoBadge = document.getElementById('autoStateBadge');

      if (!trimmed || !stateInput) return;

      // Direct dictionary lookup or partial matching
      let matchedState = CITY_STATE_MAP[trimmed];
      if (!matchedState) {
        for (const c in CITY_STATE_MAP) {
          if (trimmed.includes(c) || c.includes(trimmed)) {
            matchedState = CITY_STATE_MAP[c];
            break;
          }
        }
      }

      if (matchedState) {
        stateInput.value = matchedState;
        if (autoBadge) autoBadge.classList.remove('hidden');
      }

      updateFormProgress();
    }

    // 1-Tap Quick City Select
    function selectQuickCity(city, state) {
      const cityInput = document.getElementById('currentCityInput');
      const stateInput = document.getElementById('currentStateInput');
      const autoBadge = document.getElementById('autoStateBadge');

      if (cityInput) cityInput.value = city;
      if (stateInput) stateInput.value = state;
      if (autoBadge) autoBadge.classList.remove('hidden');

      updateFormProgress();
    }

    // Sync Current City with Work City
    function syncWorkCityWithCurrent() {
      const currentCity = document.getElementById('currentCityInput');
      const workCity = document.getElementById('workCityInput');

      if (currentCity && workCity) {
        if (!currentCity.value) {
          showCelebrationToast("शहर दर्ज करें", "पहले अपना वर्तमान शहर दर्ज करें", "सूचना", "fa-circle-info");
          currentCity.focus();
          return;
        }
        workCity.value = currentCity.value;
        showCelebrationToast("कार्य शहर सेट!", `कार्य शहर भी '${currentCity.value}' सेट कर दिया गया`, "✓ सेट", "fa-circle-check");
        workCity.classList.add('ring-2', 'ring-emerald-500');
        setTimeout(() => workCity.classList.remove('ring-2', 'ring-emerald-500'), 1000);
      }
      updateFormProgress();
    }

    // Gender Switch Helper
    function updateGenderChoice(gender) {
      updateFormProgress();
    }

    // AI Smart Matrimonial Bio Auto Generator
    function generateSmartBio() {
      const firstName = document.getElementById('firstNameInput')?.value?.trim() || '';
      const lastName  = document.getElementById('lastNameInput')?.value?.trim() || '';
      const caste     = document.getElementById('casteInput')?.value?.trim() || 'सुसंस्कृत';
      const education = document.querySelector('select[name="highest_education"]')?.value || 'उच्च शिक्षित';
      const empSelect = document.querySelector('select[name="employed_in"]');
      const employedInText = empSelect ? empSelect.options[empSelect.selectedIndex].text.split('(')[0].trim() : 'कार्यरत';
      const city      = document.getElementById('currentCityInput')?.value?.trim() || 'राजस्थान';
      
      const isBride = document.getElementById('gender_female')?.checked;
      const candidateTitle = isBride ? 'कन्या / वधू' : 'वर';
      const candidatePronoun = isBride ? 'करती हैं' : 'करते हैं';
      const candidateName = firstName ? `${firstName} ${lastName}`.trim() : (isBride ? 'सुसंस्कृत वधू' : 'सुयोग्य वर');

      const generatedBio = `सुसंस्कृत, पारम्परिक एवं उच्च पारिवारिक मूल्यों में विश्वास रखने वाले ${caste} परिवार से ${candidateTitle} ${candidateName}। ${education} शिक्षित एवं वर्तमान में ${employedInText} में ${city} में कार्यरत हैं। जीवन में सादगी, परस्पर आदर, धार्मिक संस्कार और पारिवारिक सौहार्द को सर्वोच्च प्राथमिकता ${candidatePronoun}। एक संस्कारी, शिक्षित, खुशमिजाज और समझदार जीवनसाथी की तलाश है जो परिवार के साथ स्नेहपूर्वक तालमेल बनाकर चले।`;

      const aboutInput = document.getElementById('aboutMeInput');
      if (aboutInput) {
        aboutInput.value = generatedBio;
        aboutInput.focus();
        showCelebrationToast("✨ AI बायो तैयार!", "आपका सम्मानजनक बायोडाटा परिचय स्वतः लिख दिया गया है।", "100% पूर्ण", "fa-wand-magic-sparkles");
      }
      updateFormProgress();
    }

    // Floating Dynamic Celebration Toast ("बधाई संदेश")
    function showCelebrationToast(title, message, badge, iconClass = "fa-trophy") {
      const toast = document.getElementById('celebrationToast');
      const titleEl = document.getElementById('toastTitle');
      const msgEl = document.getElementById('toastMessage');
      const badgeEl = document.getElementById('toastBadge');
      const iconEl = document.getElementById('toastIcon');

      if (!toast) return;

      if (titleEl) titleEl.textContent = title;
      if (msgEl) msgEl.textContent = message;
      if (badgeEl) badgeEl.textContent = badge;
      if (iconEl) iconEl.className = `fa-solid ${iconClass}`;

      toast.classList.add('toast-show');
      setTimeout(() => {
        toast.classList.remove('toast-show');
      }, 4000);
    }

    // Lightweight Confetti Celebration Shower for 100% completion
    function fireCelebrationConfetti() {
      const canvas = document.getElementById('confettiCanvas');
      if (!canvas) return;
      canvas.classList.remove('hidden');
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;

      const ctx = canvas.getContext('2d');
      const particles = [];
      const colors = ['#D4AF37', '#E6C254', '#059669', '#065F46', '#F5D061', '#10B981', '#FF6B6B'];

      for (let i = 0; i < 90; i++) {
        particles.push({
          x: Math.random() * canvas.width,
          y: Math.random() * canvas.height * 0.3,
          r: Math.random() * 6 + 3,
          d: Math.random() * 80,
          color: colors[Math.floor(Math.random() * colors.length)],
          tilt: Math.floor(Math.random() * 10) - 10,
          tiltAngleIncremental: (Math.random() * 0.07) + 0.05,
          tiltAngle: 0
        });
      }

      let animationFrameId;
      let frameCount = 0;

      function render() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        frameCount++;

        particles.forEach((p, index) => {
          p.tiltAngle += p.tiltAngleIncremental;
          p.y += (Math.cos(p.d) + 3 + p.r / 2) / 1.5;
          p.x += Math.sin(p.d) * 1.5;
          p.tilt = Math.sin(p.tiltAngle) * 15;

          ctx.beginPath();
          ctx.lineWidth = p.r / 2;
          ctx.strokeStyle = p.color;
          ctx.moveTo(p.x + p.tilt + (p.r / 4), p.y);
          ctx.lineTo(p.x + p.tilt, p.y + p.tilt + (p.r / 4));
          ctx.stroke();
        });

        if (frameCount < 160) {
          animationFrameId = requestAnimationFrame(render);
        } else {
          cancelAnimationFrame(animationFrameId);
          canvas.classList.add('hidden');
        }
      }
      render();
    }

    // Photo Preview
    function previewUpload(event, previewId, labelId) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const container = document.getElementById(previewId);
          container.innerHTML = `
            <div class="relative w-full h-24 rounded-xl overflow-hidden border-2 border-emerald-500 shadow-xs group">
              <img src="${e.target.result}" class="w-full h-full object-cover">
              <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
                <span class="text-white text-[10px] font-bold bg-black/60 px-2 py-0.5 rounded-full">बदलें</span>
              </div>
            </div>
            <span class="text-[9px] font-bold text-emerald-800 mt-1 flex items-center justify-center space-x-1">
              <i class="fa-solid fa-circle-check text-emerald-600 text-[9px]"></i>
              <span>फोटो तैयार है</span>
            </span>
          `;
          showCelebrationToast("✨ फोटो जोड़ी गई!", "सुंदर फोटो से 10x अधिक उपयुक्त रिश्ते मिलते हैं।", "+15%", "fa-camera");
          updateFormProgress();
        };
        reader.readAsDataURL(file);
      }
    }

    // Dynamic Form Completion Calculation & Milestone Celebrations ("बधाई संदेश")
    function updateFormProgress() {
      let score = 0;
      let maxScore = 100;

      // 1. Basic details (20 points)
      const fn = document.getElementById('firstNameInput')?.value?.trim();
      const ln = document.getElementById('lastNameInput')?.value?.trim();
      const dob = document.getElementById('dobInput')?.value?.trim();
      if (fn) score += 7;
      if (ln) score += 7;
      if (dob) score += 6;

      // 2. Community & Astrology (25 points) - Gotra is optional
      const caste = document.getElementById('casteInput')?.value?.trim();
      const gotra = document.getElementById('gotraInput')?.value?.trim();
      if (caste) score += 25; // Selecting community fulfills the requirement

      // 3. Education & Career (20 points)
      const edu = document.querySelector('select[name="highest_education"]')?.value;
      const emp = document.querySelector('select[name="employed_in"]')?.value;
      const workCity = document.getElementById('workCityInput')?.value?.trim();
      if (edu) score += 5;
      if (emp) score += 5;
      if (workCity) score += 10;

      // 4. Location (15 points)
      const city = document.getElementById('currentCityInput')?.value?.trim();
      const state = document.getElementById('currentStateInput')?.value?.trim();
      if (city) score += 8;
      if (state) score += 7;

      // 5. Photos (10 points)
      const p1 = document.getElementById('photoInput1');
      if (p1 && p1.files && p1.files.length > 0) score += 10;

      // 6. Bio (10 points)
      const bio = document.getElementById('aboutMeInput')?.value?.trim();
      if (bio && bio.length > 20) score += 10;

      let percent = Math.min(100, Math.max(25, score));
      
      const percentEl = document.getElementById('progressPercent');
      const barEl = document.getElementById('progressBar');
      const congratsText = document.getElementById('congratsText');

      if (percentEl) percentEl.textContent = percent + '%';
      if (barEl) barEl.style.width = percent + '%';

      // Dynamic Celebratory Milestone Banners ("बधाई संदेश")
      if (congratsText) {
        if (percent >= 100) {
          congratsText.innerHTML = `👑 <strong>हार्दिक बधाई!</strong> आपका रॉयल बायोडाटा 100% परिपूर्ण है — 3 माह VIP Pro सक्रिय! 🎊`;
          if (lastCelebratedMilestone < 100) {
            lastCelebratedMilestone = 100;
            showCelebrationToast("👑 हार्दिक बधाई!", "आपका रॉयल बायोडाटा 100% पूर्ण हो चुका है! 3 माह VIP Pro सक्रिय हो गया।", "100%", "fa-crown");
            fireCelebrationConfetti();
          }
        } else if (percent >= 75) {
          congratsText.innerHTML = `🌟 <strong>बधाई हो!</strong> 75% बायोडाटा पूर्ण — अनुकूल रिश्ते मैच 5x गति से बढ़ेंगे!`;
          if (lastCelebratedMilestone < 75) {
            lastCelebratedMilestone = 75;
            showCelebrationToast("🌟 बहुत-बहुत बधाई!", "आपका बायोडाटा 75% तैयार हो चुका है! मैचिंग 5x गति से बढ़ेगी।", "75%", "fa-star");
          }
        } else if (percent >= 50) {
          congratsText.innerHTML = `🎉 <strong>बहुत खूब!</strong> 50% बायोडाटा तैयार — प्रोफाइल अब अत्यधिक आकर्षक दिख रही है!`;
          if (lastCelebratedMilestone < 50) {
            lastCelebratedMilestone = 50;
            showCelebrationToast("🎉 बहुत खूब!", "आधा बायोडाटा सफलता से भर लिया गया है!", "50%", "fa-heart");
          }
        } else {
          congratsText.innerHTML = `📋 बुनियादी जानकारी दर्ज करें... 100% पूरा करने पर 3 माह VIP Pro मुफ्त!`;
        }
      }
    }

    // Initialize on DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
      // 1. Initial Render of Hindu Castes
      filterCastesByReligion('Hindu');

      // 2. Initial Age & Height Badges
      calculateAutoAge();
      updateHeightBadge();

      // 3. Listeners for live updates
      const allFields = document.querySelectorAll('#biodataShell input, #biodataShell select, #biodataShell textarea');
      allFields.forEach(f => {
        f.addEventListener('input', updateFormProgress);
        f.addEventListener('change', updateFormProgress);
      });

      // 4. Initial progress calculation
      updateFormProgress();
    });
  </script>

</body>
</html>
