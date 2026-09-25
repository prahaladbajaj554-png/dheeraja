<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>DHEERAJA™ ROYAL MATRIMONY | Activity & Matches Tracker (तालिका)</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800;900&family=Cinzel+Decorative:wght@700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Rozha+One&family=Yatra+One&family=Noto+Serif+Devanagari:wght@400;600;700;800&family=Noto+Sans+Devanagari:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- html2pdf Bundle for 1-Click PDF Download -->
  <script src="/assets/js/html2pdf.bundle.min.js"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            maroon: { 700: '#6B1D2F', 800: '#521321', 900: '#420A16', 950: '#2A050D' },
            gold: { 300: '#F3D883', 400: '#E6C254', 500: '#D4AF37', 600: '#B89326', 700: '#9A6A24' },
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

  <!-- Self-Contained Styles -->
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
    /* Mobile Frame Shell */
    #matchesShell {
      width: 100%;
      max-width: 440px;
      min-height: 100vh;
      background-color: #F6F8F5;
      position: relative;
      box-shadow: 0 10px 40px rgba(6, 78, 59, 0.15), 0 0 0 1px rgba(6, 78, 59, 0.08);
      display: flex;
      flex-direction: column;
      overflow-x: hidden;
      transition: max-width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    /* Filter Pill Buttons */
    .filter-pill {
      background: #FFFFFF;
      border: 1px solid #D5E0D8;
      color: #1F2937;
      border-radius: 9999px;
      padding: 6px 4px;
      font-size: 10px;
      font-weight: 700;
      line-height: 1.15;
      text-align: center;
      transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
      cursor: pointer;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 38px;
      box-shadow: 0 1px 2px rgba(0,0,0,0.03);
      user-select: none;
    }
    .filter-pill:hover {
      background: #F0FDF4;
      border-color: #064E3B;
      color: #064E3B;
      transform: translateY(-1px);
    }
    .filter-pill.active {
      background: #064E3B !important;
      color: #FFFFFF !important;
      border-color: #064E3B !important;
      box-shadow: 0 3px 8px rgba(6, 78, 59, 0.25);
    }
    .filter-pill.active span.sub-text {
      color: #D1FAE5 !important;
    }
    /* ==============================================================
       ACTION BUTTONS IN CANDIDATE CARD - 3D RAISED TACTILE BUTTONS
       ============================================================== */
    .card-btn {
      font-size: 9.5px;
      font-weight: 800;
      padding: 7px 4px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 3.5px;
      transition: all 0.18s cubic-bezier(0.4, 0, 0.2, 1);
      cursor: pointer;
      user-select: none;
      white-space: nowrap;
      flex: 1;
      position: relative;
      text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
      border: 1px solid transparent;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), inset 0 1px 0 rgba(255, 255, 255, 0.35);
    }
    .card-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.22), inset 0 1px 0 rgba(255, 255, 255, 0.45);
      filter: brightness(1.08);
    }
    .card-btn:active {
      transform: translateY(1px) scale(0.97);
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25), inset 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    /* 1. Send Interest (Rose/Crimson 3D Button) */
    .btn-interest {
      background: linear-gradient(145deg, #FF456B 0%, #E11D48 60%, #BE123C 100%);
      border-color: #9F1239;
      color: #FFFFFF !important;
      box-shadow: 0 3px 7px rgba(225, 29, 72, 0.35), inset 0 1px 0 rgba(255, 255, 255, 0.4);
    }
    .btn-interest:hover {
      background: linear-gradient(145deg, #FF5C7E 0%, #F43F5E 60%, #E11D48 100%);
    }
    .btn-interest.sent {
      background: linear-gradient(145deg, #10B981 0%, #059669 60%, #047857 100%) !important;
      border-color: #065F46 !important;
      color: #FFFFFF !important;
      box-shadow: 0 3px 7px rgba(5, 150, 105, 0.35), inset 0 1px 0 rgba(255, 255, 255, 0.4) !important;
    }

    /* 2. Chat (Royal Emerald 3D Button) */
    .btn-chat {
      background: linear-gradient(145deg, #10B981 0%, #064E3B 65%, #022C1E 100%);
      border-color: #065F46;
      color: #FFFFFF !important;
      box-shadow: 0 3px 7px rgba(6, 78, 59, 0.38), inset 0 1px 0 rgba(255, 255, 255, 0.3);
    }
    .btn-chat:hover {
      background: linear-gradient(145deg, #34D399 0%, #059669 65%, #064E3B 100%);
    }

    /* 3. Kundali Milan (Mystic Violet 3D Button) */
    .btn-kundali {
      background: linear-gradient(145deg, #A855F7 0%, #7C3AED 60%, #581C87 100%);
      border-color: #4C1D95;
      color: #FFFFFF !important;
      box-shadow: 0 3px 7px rgba(124, 58, 237, 0.38), inset 0 1px 0 rgba(255, 255, 255, 0.35);
    }
    .btn-kundali:hover {
      background: linear-gradient(145deg, #C084FC 0%, #9333EA 60%, #6D28D9 100%);
    }

    /* 4. WhatsApp / Contact VIP (3D WhatsApp Emerald Green Button) */
    .btn-contact {
      background: linear-gradient(145deg, #25D366 0%, #16A34A 60%, #065F46 100%);
      border-color: #064E3B;
      color: #FFFFFF !important;
      box-shadow: 0 3px 7px rgba(37, 211, 102, 0.38), inset 0 1px 0 rgba(255, 255, 255, 0.4);
    }
    .btn-contact:hover {
      background: linear-gradient(145deg, #4ADE80 0%, #22C55E 60%, #15803D 100%);
    }

    /* 5. Skip (Steel Slate 3D Button) */
    .btn-skip {
      background: linear-gradient(145deg, #94A3B8 0%, #64748B 60%, #334155 100%);
      border-color: #1E293B;
      color: #FFFFFF !important;
      box-shadow: 0 3px 6px rgba(71, 85, 105, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.3);
    }
    .btn-skip:hover {
      background: linear-gradient(145deg, #CBD5E1 0%, #94A3B8 60%, #475569 100%);
    }

    /* ==============================================================
       BOTTOM DOCK 5 NAVIGATION BUTTONS (Real 3D Pushable Capsules)
       ============================================================== */
    .dock-nav-btn {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 6px 4px;
      min-height: 48px;
      border-radius: 14px;
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.16) 0%, rgba(255, 255, 255, 0.05) 100%);
      border: 1.5px solid rgba(255, 255, 255, 0.22);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.25);
      color: #E2E8F0;
      font-weight: 700;
      transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
      cursor: pointer;
      user-select: none;
      text-decoration: none;
      position: relative;
      flex: 1;
      max-width: 80px;
    }
    .dock-nav-btn:hover {
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.08) 100%);
      border-color: rgba(255, 255, 255, 0.4);
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.35);
      color: #FFFFFF;
    }
    .dock-nav-btn:active {
      transform: translateY(1px) scale(0.96);
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4), inset 0 2px 4px rgba(0, 0, 0, 0.25);
    }
    /* Active Button State (Table / Matches) - Elevated Golden 3D Button */
    .dock-nav-btn.active {
      background: linear-gradient(135deg, #FFF1C5 0%, #E6C254 35%, #C99718 70%, #996D0A 100%) !important;
      border: 1.5px solid #FFFBEB !important;
      color: #064E3B !important;
      box-shadow: 0 5px 16px rgba(212, 175, 55, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.8), inset 0 -2px 0 rgba(153, 109, 10, 0.5) !important;
      transform: translateY(-3px);
      font-weight: 800 !important;
    }
    .dock-nav-btn.active i {
      color: #064E3B !important;
      filter: drop-shadow(0 1px 0 rgba(255, 255, 255, 0.4));
    }
    .dock-nav-btn.active .dock-label {
      color: #064E3B !important;
      font-weight: 900 !important;
    }
    .dock-badge {
      position: absolute;
      top: -5px;
      right: -6px;
      background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%);
      color: #FFFFFF;
      border-radius: 9999px;
      font-size: 8.5px;
      font-weight: 900;
      min-width: 17px;
      height: 17px;
      padding: 0 3px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1.5px solid #064E3B;
      box-shadow: 0 2px 5px rgba(220, 38, 38, 0.5);
    }

    /* Key Features Ribbon Tactile Mini Buttons */
    .ribbon-btn {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 4px 6px;
      border-radius: 8px;
      background: #FFFFFF;
      border: 1px solid #E5E7EB;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.06);
      transition: all 0.15s ease;
      cursor: pointer;
    }
    .ribbon-btn:hover {
      background: #F9FAFB;
      border-color: #D1D5DB;
      transform: translateY(-1px);
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
    }
    /* ==============================================================
       BEAUTIFUL MOVING ONLINE TICKER (चलती हुई लाइव ऑनलाइन लाइन)
       ============================================================== */
    @keyframes liveTickerScroll {
      0% {
        transform: translate3d(0, 0, 0);
      }
      100% {
        transform: translate3d(-50%, 0, 0);
      }
    }
    .ticker-wrapper {
      mask-image: linear-gradient(to right, transparent 0%, black 4%, black 96%, transparent 100%);
      -webkit-mask-image: linear-gradient(to right, transparent 0%, black 4%, black 96%, transparent 100%);
    }
    .ticker-track {
      display: inline-flex;
      white-space: nowrap;
      animation: liveTickerScroll 30s linear infinite;
      will-change: transform;
    }
    .ticker-track:hover {
      animation-play-state: paused;
    }
    @keyframes livePulseGlow {
      0% {
        transform: scale(0.92);
        box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.85);
      }
      70% {
        transform: scale(1.06);
        box-shadow: 0 0 0 6px rgba(16, 185, 129, 0);
      }
      100% {
        transform: scale(0.92);
        box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
      }
    }
    .live-pulse-beacon {
      display: inline-block;
      border-radius: 9999px;
      animation: livePulseGlow 1.8s infinite cubic-bezier(0.45, 0, 0.55, 1);
    }

    /* Modal Backdrop */
    .modal-backdrop {
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.25s ease-out;
    }
    .modal-backdrop.open {
      opacity: 1;
      pointer-events: auto;
    }
    /* Floating Toast */
    .toast-anim {
      transform: translate(-50%, -100px);
      opacity: 0;
      transition: all 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .toast-anim.show {
      transform: translate(-50%, 0);
      opacity: 1;
    }
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 5px;
      height: 5px;
    }
    ::-webkit-scrollbar-track {
      background: #F1F5F2;
    }
    ::-webkit-scrollbar-thumb {
      background: #A7F3D0;
      border-radius: 999px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #059669;
    }

    /* Royal Golden Ornate Border & Biodata Styles */
    .royal-border-outer {
      padding: 10px;
      background: linear-gradient(135deg, #BF953F 0%, #FCF6BA 25%, #B38728 50%, #FBF5B7 75%, #AA771C 100%);
      box-shadow: 0 0 20px rgba(212, 175, 55, 0.45);
      border-radius: 8px;
    }
    .royal-border-middle {
      padding: 5px;
      background: #064E3B;
      border-radius: 6px;
    }
    .royal-border-inner {
      background: #FFFDF9;
      border: 2px solid #D4AF37;
      padding: 18px 20px;
      position: relative;
      border-radius: 4px;
    }
    .corner-flourish {
      position: absolute;
      width: 36px;
      height: 36px;
      pointer-events: none;
      z-index: 10;
    }
    .corner-tl { top: 4px; left: 4px; }
    .corner-tr { top: 4px; right: 4px; transform: rotate(90deg); }
    .corner-bl { bottom: 4px; left: 4px; transform: rotate(-90deg); }
    .corner-br { bottom: 4px; right: 4px; transform: rotate(180deg); }
    .royal-watermark {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 280px;
      height: 280px;
      opacity: 0.04;
      background-image: url('/assets/images/dheeraja_dm_logo_icon.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      pointer-events: none;
      z-index: 1;
    }
    .section-banner {
      background: linear-gradient(90deg, #064E3B 0%, #0F684F 50%, #064E3B 100%);
      color: #F8E7A2;
      padding: 4px 10px;
      border-radius: 6px;
      border-left: 4px solid #D4AF37;
      border-right: 4px solid #D4AF37;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 6px;
    }
    .attr-row {
      display: flex;
      padding: 3.5px 4px;
      border-bottom: 1px dashed #E5D5BA;
      font-size: 11.5px;
      align-items: baseline;
    }
    .attr-row:last-child {
      border-bottom: none;
    }
    .attr-label {
      width: 40%;
      font-weight: 700;
      color: #78350F;
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .attr-sep {
      width: 4%;
      text-align: center;
      color: #92400E;
      font-weight: bold;
    }
    .attr-val {
      width: 56%;
      color: #1F2937;
      font-weight: 700;
    }
    .photo-gold-frame {
      position: relative;
      padding: 3px;
      background: linear-gradient(135deg, #BF953F 0%, #FCF6BA 35%, #B38728 70%, #AA771C 100%);
      border-radius: 14px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15), 0 0 10px rgba(212, 175, 55, 0.4);
      display: inline-block;
    }
    .photo-gold-frame img {
      width: 120px;
      height: 145px;
      object-fit: cover;
      border-radius: 10px;
      display: block;
      border: 1.5px solid #FFFDF9;
    }
  </style>
</head>
<body class="selection:bg-emerald-200 selection:text-emerald-900 relative">

  <!-- ==================== DESKTOP EMULATION TOOLBAR ==================== -->
  <aside class="hidden sm:flex items-center justify-between w-full max-w-4xl px-6 py-2.5 my-2 bg-white/95 backdrop-blur-md rounded-2xl border border-emerald-300 text-stone-700 text-xs shadow-sm">
    <div class="flex items-center space-x-2">
      <a href="/cover" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-bold text-stone-700 flex items-center space-x-1 transition mr-1" title="पहला पेज">
        <i class="fa-solid fa-home text-[10px]"></i>
        <span>1. कवर पेज</span>
      </a>
      <a href="/welcome" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-bold text-stone-700 flex items-center space-x-1 transition mr-1" title="दूसरा पेज">
        <i class="fa-solid fa-door-open text-[10px]"></i>
        <span>2. वेलकम</span>
      </a>
      <a href="/biodata" class="px-2.5 py-1 rounded-lg bg-emerald-50 hover:bg-emerald-100 font-bold text-emerald-900 border border-emerald-300 flex items-center space-x-1 transition mr-2" title="तीसरे पेज पर वापस जाएं">
        <i class="fa-solid fa-arrow-left text-[10px] text-emerald-700"></i>
        <span>3. बायोडाटा फॉर्म</span>
      </a>
      <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
      <span class="font-cinzel font-bold text-emerald-900 tracking-wider">DHEERAJA ROYAL MATRIMONY™</span>
      <span class="text-stone-400 font-bold">| 4. तालिका</span>
      <a href="/membership" class="ml-1 px-2 py-0.5 rounded-lg bg-gradient-to-r from-amber-400 to-amber-500 text-maroon-950 font-extrabold text-[11px] transition flex items-center space-x-1 shadow-xs border border-amber-300">
        <i class="fa-solid fa-crown text-[9px] text-amber-950"></i>
        <span>VIP प्लान्स</span>
      </a>
    </div>
    <div class="flex items-center space-x-3">
      <span class="text-stone-500 font-medium">Viewport:</span>
      <button onclick="setViewport('390px')" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-mono text-[11px] border border-stone-200">iPhone</button>
      <button onclick="setViewport('440px')" class="px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-800 font-mono text-[11px] border border-emerald-300 font-bold">Standard</button>
      <button onclick="setViewport('100%')" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-mono text-[11px] border border-stone-200">Full Width</button>
    </div>
  </aside>

  <!-- ==================== FLOATING NOTIFICATION TOAST ==================== -->
  <div id="actionToast" class="toast-anim fixed top-4 left-1/2 z-[200] max-w-sm w-[92%] bg-gradient-to-r from-[#065F46] via-[#047857] to-[#033626] text-white p-3 rounded-2xl border-2 border-[#E6C254] shadow-2xl flex items-center space-x-3 pointer-events-none">
    <div class="w-9 h-9 rounded-full bg-amber-400/20 border border-amber-300 flex items-center justify-center shrink-0 text-amber-300 text-base shadow-inner">
      <i class="fa-solid fa-check" id="toastIcon"></i>
    </div>
    <div class="flex-1">
      <h4 class="text-xs font-extrabold text-[#F5D061] tracking-wide" id="toastTitle">सफलतापूर्वक पूर्ण!</h4>
      <p class="text-[11px] text-emerald-50 font-medium leading-tight mt-0.5" id="toastMsg">आपकी रुचि सफलतापूर्वक भेज दी गई है।</p>
    </div>
  </div>

  <!-- ==================== MAIN MATCHES & TRACKER SHELL ==================== -->
  <main id="matchesShell">

    <!-- 1. TOP MOBILE STATUS BAR (10:24, 4G, 78%) -->
    <div class="w-full bg-[#053F2E] text-emerald-100/90 px-4 pt-1.5 pb-1 flex items-center justify-between text-[11px] font-semibold select-none border-b border-emerald-800/40">
      <span class="tracking-tight">10:24</span>
      <div class="flex items-center space-x-2 text-[10px]">
        <span><i class="fa-solid fa-signal text-[9px] mr-0.5"></i> 4G</span>
        <span><i class="fa-solid fa-wifi text-[9px] mr-0.5"></i></span>
        <span>78% <i class="fa-solid fa-battery-three-quarters text-[10px] ml-0.5 text-emerald-300"></i></span>
      </div>
    </div>

    <!-- 2. TOP ROYAL APP BAR (Exact Recreation from Reference Image) -->
    <header class="w-full bg-gradient-to-b from-[#064E3B] to-[#043E2F] px-3.5 py-2.5 flex items-center justify-between text-white shadow-md relative z-30">
      <!-- Left: Back Arrow to Page 3 (बाण बटन) + Hamburger Menu -->
      <div class="flex items-center space-x-1.5 shrink-0">
        <a href="/biodata" onclick="window.location.href='/biodata'; return false;" class="px-2.5 py-1 rounded-full bg-white/15 hover:bg-white/25 border border-amber-300/50 text-[#F5D061] hover:text-white text-xs font-bold flex items-center space-x-1.5 shadow-sm active:scale-95 transition" title="वापस तीसरे पेज (बायोडाटा फॉर्म) पर जाएं">
          <i class="fa-solid fa-arrow-left text-xs text-amber-300"></i>
          <span class="text-[11px] font-sans">पेज 3</span>
        </a>
        <button onclick="toggleSideMenu()" class="w-7 h-7 flex items-center justify-center text-white/80 hover:text-white rounded-lg active:bg-white/10 transition" title="Menu">
          <i class="fa-solid fa-bars text-base"></i>
        </button>
      </div>

      <!-- Center: Royal Crown Emblem + Branding Typography -->
      <div class="flex items-center space-x-2 cursor-pointer" onclick="window.location.href='/matches'">
        <!-- Royal Heart Crown SVG Crest -->
        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-amber-300 via-amber-400 to-amber-600 p-0.5 shadow-md flex items-center justify-center shrink-0">
          <div class="w-full h-full rounded-full bg-[#064E3B] flex items-center justify-center">
            <i class="fa-solid fa-crown text-amber-300 text-xs"></i>
          </div>
        </div>
        <div class="flex flex-col text-left">
          <span class="font-cinzel text-sm sm:text-base font-extrabold text-[#F3D883] tracking-widest leading-none">DHEERAJA</span>
          <span class="font-cinzel text-[9.5px] font-bold text-amber-200/90 tracking-wider leading-tight">ROYAL MATRIMONY</span>
          <span class="text-[7.5px] text-emerald-200/70 tracking-tight leading-none mt-0.5 font-medium">Trusted &bull; Traditional &bull; Together Forever</span>
        </div>
      </div>

      <!-- Right: VIP Upgrade + Search & Notification with Badge '3' -->
      <div class="flex items-center space-x-1.5 shrink-0">
        <a href="/membership" class="px-2 py-0.5 rounded-full bg-gradient-to-r from-amber-400 to-amber-500 hover:from-amber-500 hover:to-amber-600 text-[#064E3B] font-extrabold text-[10px] flex items-center space-x-1 shadow-xs transition transform active:scale-95 border border-amber-200" title="VIP सदस्यता प्लान्स">
          <i class="fa-solid fa-crown text-[8.5px] text-amber-900"></i>
          <span class="tracking-tight text-amber-950">VIP</span>
        </a>
        <button onclick="toggleSearchModal()" class="w-7 h-7 flex items-center justify-center text-white/90 hover:text-white rounded-full hover:bg-white/10 transition" title="खोजें (Search)">
          <i class="fa-solid fa-magnifying-glass text-xs"></i>
        </button>
        <button onclick="toggleNotificationsModal()" class="relative w-7 h-7 flex items-center justify-center text-white/90 hover:text-white rounded-full hover:bg-white/10 transition" title="सूचनाएं (Notifications)">
          <i class="fa-solid fa-bell text-xs"></i>
          <span class="absolute top-0.5 right-0.5 w-3.5 h-3.5 bg-red-600 text-white rounded-full text-[8.5px] font-extrabold flex items-center justify-center border border-[#064E3B] shadow-sm animate-pulse">3</span>
        </button>
      </div>
    </header>

    <!-- 2.1 TOP 5 BUTTONS LINE (तालिका पेज के सारे बटन ऊपर वाली लाइन में) -->
    <nav class="sticky top-0 z-40 w-full bg-gradient-to-r from-[#02281e] via-[#064E3B] to-[#085a44] text-white px-2.5 py-2 flex items-center justify-between gap-1.5 border-b-2 border-[#D4AF37]/60 shadow-[0_4px_16px_rgba(0,0,0,0.35)] select-none">
      <!-- 1. Home Button -->
      <a href="/cover" class="dock-nav-btn" title="होम पेज (Home)">
        <i class="fa-solid fa-house text-sm mb-1 text-emerald-200"></i>
        <span class="dock-label text-[10px]">होम</span>
      </a>

      <!-- 2. Table / Matches Button (ACTIVE 3D Royal Gold Button) -->
      <a href="/matches" class="dock-nav-btn active" title="तालिका (Matches / Dashboard)">
        <i class="fa-solid fa-table-cells text-base mb-1"></i>
        <span class="dock-label text-[10px]">तालिका</span>
      </a>

      <!-- 3. Chats Button (with Badge '2') -->
      <button onclick="openChatModal('अंजलि सिंह (Anjali)', '/assets/images/match_anjali.jpg', true)" class="dock-nav-btn" title="संदेश (Chats)">
        <div class="relative flex items-center justify-center">
          <i class="fa-solid fa-comments text-sm mb-1 text-emerald-200"></i>
          <span class="dock-badge">2</span>
        </div>
        <span class="dock-label text-[10px]">चैट</span>
      </button>

      <!-- 4. Interests Button (with Badge '5') -->
      <button onclick="filterByCategory('interests_received')" class="dock-nav-btn" title="रुचियां (Interests)">
        <div class="relative flex items-center justify-center">
          <i class="fa-solid fa-heart text-sm mb-1 text-emerald-200"></i>
          <span class="dock-badge">5</span>
        </div>
        <span class="dock-label text-[10px]">रुचि</span>
      </button>

      <!-- 5. Profile Button -->
      <a href="/biodata" class="dock-nav-btn" title="मेरा बायोडाटा (Profile)">
        <i class="fa-solid fa-user-circle text-sm mb-1 text-emerald-200"></i>
        <span class="dock-label text-[10px]">बायोडाटा</span>
      </a>
    </nav>

    <!-- 2.2 BEAUTIFUL MOVING ONLINE TICKER LINE (ऑनलाइन को चलता हुआ मूविंग करती हुई लाइन) -->
    <div class="w-full bg-gradient-to-r from-[#011a13] via-[#043e2f] to-[#011a13] border-b-2 border-[#D4AF37]/50 px-2 py-1.5 flex items-center overflow-hidden shadow-md select-none relative z-20">
      <!-- Fixed Live Online Beacon Badge -->
      <div class="shrink-0 flex items-center space-x-1.5 px-2.5 py-1 bg-gradient-to-r from-emerald-600 via-emerald-500 to-teal-600 text-white rounded-full text-[10.5px] font-black tracking-wide shadow-sm border border-emerald-300 mr-2 z-10">
        <span class="w-2.5 h-2.5 rounded-full bg-white live-pulse-beacon"></span>
        <span class="font-cinzel tracking-wider text-[#FFF2C2] drop-shadow-xs">🟢 ऑनलाइन</span>
      </div>

      <!-- Moving Track -->
      <div class="ticker-wrapper flex-1 overflow-hidden relative">
        <div class="ticker-track flex items-center space-x-6 text-[11px] text-emerald-100 font-semibold py-0.5">
          
          <!-- Loop Segment A -->
          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">प्रिया शर्मा (इन्दौर)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-users text-amber-300 text-xs"></i>
            <span class="text-white font-extrabold">1,280+ सक्रिय वर-वधू</span>
            <span class="text-emerald-200 text-[10px]">ऑनलाइन सक्रिय</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">अंजलि सिंह (जयपुर)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-crown text-amber-300 text-xs"></i>
            <span class="text-[#F8E7A2] font-extrabold">👑 रॉयल बायोडाटा (सुनहरा बॉर्डर)</span>
            <span class="text-emerald-200 text-[10px]">1-क्लिक PDF डाउनलोड उपलब्ध</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">नेहा वर्मा (पुणे)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-certificate text-amber-300 text-xs"></i>
            <span class="text-amber-200 font-extrabold">100% सत्यापित प्रोफाइल्स</span>
            <span class="text-emerald-200 text-[10px]">वैदिक गोत्र व कुंडली मिलान</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">रितिका पटेल (अहमदाबाद)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-heart text-rose-400 text-xs"></i>
            <span class="text-white font-extrabold">आज 48 नए रिश्ते जुड़े</span>
            <span class="text-emerald-200 text-[10px]">शुभ मुहूर्त मिलान जारी</span>
          </span>

          <!-- Loop Segment B (Identical Duplicate for Smooth Seamless Marquee) -->
          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">प्रिया शर्मा (इन्दौर)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-users text-amber-300 text-xs"></i>
            <span class="text-white font-extrabold">1,280+ सक्रिय वर-वधू</span>
            <span class="text-emerald-200 text-[10px]">ऑनलाइन सक्रिय</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">अंजलि सिंह (जयपुर)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-crown text-amber-300 text-xs"></i>
            <span class="text-[#F8E7A2] font-extrabold">👑 रॉयल बायोडाटा (सुनहरा बॉर्डर)</span>
            <span class="text-emerald-200 text-[10px]">1-क्लिक PDF डाउनलोड उपलब्ध</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">नेहा वर्मा (पुणे)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-certificate text-amber-300 text-xs"></i>
            <span class="text-amber-200 font-extrabold">100% सत्यापित प्रोफाइल्स</span>
            <span class="text-emerald-200 text-[10px]">वैदिक गोत्र व कुंडली मिलान</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0 bg-white/10 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[#F8E7A2] font-extrabold">रितिका पटेल (अहमदाबाद)</span>
            <span class="text-emerald-200 text-[10px]">अभी ऑनलाइन हैं</span>
          </span>

          <span class="inline-flex items-center space-x-1.5 shrink-0">
            <i class="fa-solid fa-heart text-rose-400 text-xs"></i>
            <span class="text-white font-extrabold">आज 48 नए रिश्ते जुड़े</span>
            <span class="text-emerald-200 text-[10px]">शुभ मुहूर्त मिलान जारी</span>
          </span>

        </div>
      </div>
    </div>

    <!-- 3. TRACKER BANNER CARD: "Activity & Matches Tracker" -->
    <section class="px-3 pt-3 pb-1">
      <div onclick="filterByCategory('all')" class="w-full bg-white rounded-xl p-3 border border-emerald-100 shadow-sm flex items-center justify-between cursor-pointer hover:border-emerald-300 transition group">
        <div class="flex items-center space-x-3">
          <!-- Green Bar Chart Icon -->
          <div class="w-10 h-10 rounded-lg bg-emerald-50 border border-emerald-200 flex items-center justify-center text-[#065F46] shrink-0 group-hover:scale-105 transition">
            <i class="fa-solid fa-chart-simple text-lg text-emerald-700"></i>
          </div>
          <div>
            <h2 class="text-sm font-extrabold text-stone-900 leading-tight">Activity & Matches Tracker</h2>
            <p class="text-[11px] text-stone-500 font-medium leading-tight mt-0.5">View profile activity, matches and your interactions</p>
          </div>
        </div>
        <div class="w-7 h-7 rounded-full bg-stone-50 group-hover:bg-emerald-50 flex items-center justify-center text-stone-400 group-hover:text-emerald-700 transition">
          <i class="fa-solid fa-chevron-right text-xs"></i>
        </div>
      </div>
    </section>

    <!-- 3.5. DEDICATED SAMAJ COMMUNITY EXCLUSIVE GROUP GATE -->
    <section class="px-3 pt-1 pb-1">
      <div id="samajCommunityBanner" class="bg-gradient-to-r from-emerald-950 via-emerald-900 to-emerald-950 text-white rounded-2xl p-3 border-2 border-amber-400 shadow-md relative overflow-hidden">
        <!-- Background Decorative Watermark -->
        <div class="absolute -right-3 -bottom-3 text-emerald-800/25 text-7xl font-serif select-none pointer-events-none">
          <i class="fa-solid fa-users-line"></i>
        </div>

        <div class="relative z-10">
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2.5">
              <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-amber-400 to-amber-600 text-emerald-950 flex items-center justify-center text-lg font-black shadow-inner shrink-0">
                <i class="fa-solid fa-shield-halved"></i>
              </div>
              <div>
                <div class="flex items-center space-x-1.5">
                  <span class="text-[9.5px] uppercase tracking-wider font-black text-amber-300 bg-amber-950/70 px-2 py-0.5 rounded-full border border-amber-500/30">
                    🔒 समाज विशिष्ट ग्रुप
                  </span>
                  <span class="text-[9.5px] text-emerald-300 font-bold">100% समाज सुरक्षा</span>
                </div>
                <h3 class="text-sm font-black text-white mt-0.5 flex items-center gap-1.5">
                  <span id="activeSamajTitle"><?= htmlspecialchars($user_samaj ?? 'ब्राह्मण') ?></span> समाज वैवाहिक ग्रुप
                </h3>
              </div>
            </div>

            <!-- Switch Samaj Pill button -->
            <button type="button" onclick="toggleSamajDropdown()" class="text-[10px] font-bold bg-white/10 hover:bg-white/20 text-amber-200 border border-amber-400/40 px-2.5 py-1.5 rounded-xl transition shrink-0 flex items-center space-x-1 shadow-xs cursor-pointer">
              <i class="fa-solid fa-users-rays text-amber-300"></i>
              <span>समाज बदलें</span>
              <i class="fa-solid fa-chevron-down text-[8px] ml-0.5"></i>
            </button>
          </div>

          <!-- Community Rule Explanation -->
          <div class="mt-2 pt-2 border-t border-emerald-800/80 flex items-center justify-between text-[10.5px]">
            <span class="text-emerald-200 flex items-center gap-1">
              <i class="fa-solid fa-lock text-amber-400 text-[10px]"></i>
              <span>केवल <strong><span id="activeSamajSubtitle"><?= htmlspecialchars($user_samaj ?? 'ब्राह्मण') ?></span></strong> समाज के सदस्य व रिश्ते</span>
            </span>
            <span class="font-extrabold text-amber-300 bg-amber-950/60 px-2 py-0.5 rounded-md border border-amber-400/30 text-[10px]" id="samajTotalCountBadge">
              <span id="samajCountNumber">4</span> रिश्ते उपलब्ध
            </span>
          </div>

          <!-- Quick Samaj Switcher Drawer (Toggleable) -->
          <div id="samajSwitcherDrawer" class="hidden mt-2 pt-2 border-t border-emerald-800">
            <div class="text-[10px] font-bold text-amber-300 mb-1.5 flex items-center justify-between">
              <span>अन्य अधिकृत समाज ग्रुप देखें (Demonstration Switcher):</span>
              <span class="text-stone-300 cursor-pointer text-[10px]" onclick="toggleSamajDropdown()">✕ बंद करें</span>
            </div>
            <div class="flex flex-wrap gap-1 max-h-28 overflow-y-auto pr-1" id="samajQuickPills">
              <!-- Rendered dynamically via JS -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. CATEGORY FILTER PILLS (8 Buttons in 2 Rows x 4 Columns) -->
    <section class="px-3 py-2">
      <div class="grid grid-cols-4 gap-1.5">
        <!-- Row 1 -->
        <button onclick="filterByCategory('all', this)" id="pill-all" class="filter-pill active">
          <span>All</span>
          <span class="sub-text text-[9px] font-normal text-emerald-100">(सभी)</span>
        </button>
        <button onclick="filterByCategory('viewed_me', this)" id="pill-viewed_me" class="filter-pill">
          <span>Who Viewed Me</span>
          <span class="sub-text text-[9px] font-normal text-stone-500">(किसने मुझे देखा)</span>
        </button>
        <button onclick="filterByCategory('interests_received', this)" id="pill-interests_received" class="filter-pill">
          <span>Interests</span>
          <span class="sub-text text-[9px] font-normal text-stone-500">Received</span>
        </button>
        <button onclick="filterByCategory('interests_sent', this)" id="pill-interests_sent" class="filter-pill">
          <span>Interests</span>
          <span class="sub-text text-[9px] font-normal text-stone-500">Sent</span>
        </button>

        <!-- Row 2 -->
        <button onclick="filterByCategory('mutual', this)" id="pill-mutual" class="filter-pill">
          <span>Mutual</span>
          <span class="sub-text text-[9px] font-normal text-stone-500">Matches</span>
        </button>
        <button onclick="filterByCategory('chat_history', this)" id="pill-chat_history" class="filter-pill">
          <span>Chat</span>
          <span class="sub-text text-[9px] font-normal text-stone-500">History</span>
        </button>
        <button onclick="filterByCategory('shortlisted', this)" id="pill-shortlisted" class="filter-pill">
          <span>Shortlisted</span>
          <span class="sub-text text-[9px] font-normal text-stone-500">पसंदीदा</span>
        </button>
        <button onclick="filterByCategory('verified', this)" id="pill-verified" class="filter-pill">
          <span>Verified</span>
          <span class="sub-text text-[9px] font-normal text-stone-500">सत्यापित</span>
        </button>
      </div>

      <!-- Dynamic Active Filter Count Banner -->
      <div id="filterStatusBanner" class="mt-2 px-2.5 py-1 bg-emerald-50/80 rounded-lg border border-emerald-200/60 flex items-center justify-between text-[11px] text-emerald-900 font-medium">
        <span id="filterStatusText"><i class="fa-solid fa-list-check text-emerald-700 mr-1.5"></i> सभी योग्य रिश्ते (All Matches): <strong>4 प्रोफाइल</strong></span>
        <span class="text-[10px] text-stone-500 font-mono">100% Verified</span>
      </div>
    </section>

    <!-- 5. CANDIDATE MATCHES LIST (तालिका कार्ड्स) -->
    <section class="px-3 pb-3 space-y-3 flex-1" id="matchesContainer">

      <!-- ==================== CARD 1: PRIYA SHARMA ==================== -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="ब्राह्मण"
               data-categories="all,viewed_me,mutual,verified"
               data-id="1"
               data-name="Priya Sharma"
               data-age="26"
               data-height="5'4&quot;"
               data-edu="B.Tech (Computer Science)"
               data-location="Indore, Madhya Pradesh"
               data-gotra="Kashyap"
               data-guna="28"
               data-phone="+91 98260 41289"
               data-father="श्री रमाकांत शर्मा (पिताजी)">
        
        <!-- Top Main Info Flex Row -->
        <div class="flex items-start space-x-2.5">
          <!-- Left: Portrait Photo with Online Badge -->
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_priya.jpg" alt="Priya Sharma" class="w-full h-full object-cover">
            <!-- Online Pill Badge -->
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-300">
              <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse-beacon"></span>
              <span class="text-[8.5px] font-extrabold text-emerald-800 leading-none">ऑनलाइन</span>
            </div>
          </div>

          <!-- Center: Candidate Details -->
          <div class="flex-1 min-w-0 pr-1">
            <!-- Name + Verified Badge + Guna Milan Badge -->
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Priya Sharma</h3>
              <!-- Verified Blue Tick -->
              <span class="text-blue-600 text-xs" title="सत्यापित प्रोफाइल">
                <i class="fa-solid fa-circle-check"></i>
              </span>
              <!-- Guna Milan Gold Pill -->
              <span onclick="openKundaliModal('Priya Sharma', 28, 'Kashyap', 'Brahmin', 'Indore')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs" title="36 गुण मिलान देखें">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>28/36 गुण मिलान</span>
              </span>
            </div>

            <!-- Age & Height -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium">
              Age: 26 <span class="text-stone-300">|</span> Height: 5'4"
            </p>

            <!-- Education -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">
              Education: B.Tech (Computer Science)
            </p>

            <!-- Location -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Indore, Madhya Pradesh</span>
            </p>

            <!-- Gotra -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Kashyap</span>
            </p>
          </div>

          <!-- Right: Top Icons & Status Indicators -->
          <div class="flex flex-col items-end space-y-1 shrink-0">
            <!-- Top Right Icons Row (Purple Chakra, Share, Three-Dots) -->
            <div class="flex items-center space-x-1 text-stone-500">
              <button onclick="openKundaliModal('Priya Sharma', 28, 'Kashyap', 'Brahmin', 'Indore')" class="w-6 h-6 flex items-center justify-center text-purple-600 hover:bg-purple-50 rounded-full transition" title="कुंडली चक्र">
                <i class="fa-solid fa-circle-notch text-xs"></i>
              </button>
              <button onclick="shareProfile('Priya Sharma', 'Indore')" class="w-6 h-6 flex items-center justify-center text-stone-600 hover:bg-stone-100 rounded-full transition" title="शेयर करें">
                <i class="fa-solid fa-share-nodes text-xs"></i>
              </button>
              <button onclick="openProfileActions('Priya Sharma', 1)" class="w-6 h-6 flex items-center justify-center text-stone-600 hover:bg-stone-100 rounded-full transition" title="और विकल्प">
                <i class="fa-solid fa-ellipsis-vertical text-xs"></i>
              </button>
            </div>

            <!-- Status Indicator 1: Premium Member -->
            <div class="flex items-center space-x-1 text-amber-700 font-bold text-[9.5px]">
              <i class="fa-solid fa-crown text-[9px] text-amber-500"></i>
              <span>Premium Member</span>
            </div>

            <!-- Status Indicator 2: 3 times viewed -->
            <div class="flex flex-col items-end text-right">
              <span class="text-[9.5px] font-semibold text-teal-800 flex items-center space-x-1">
                <i class="fa-solid fa-eye text-[9px] text-teal-600"></i>
                <span>3 times viewed</span>
              </span>
              <span class="text-[8px] text-stone-400 font-medium leading-none">Today, 10:15 AM</span>
            </div>
          </div>
        </div>

        <!-- Royal Golden Biodata 1-Click Ribbon -->
        <div class="mt-2 pt-1.5 border-t border-amber-200/70">
          <button onclick="openRoyalBiodataModal('Priya Sharma')" class="w-full py-1.5 px-2.5 rounded-xl bg-gradient-to-r from-amber-100 via-amber-50 to-amber-200 hover:from-amber-200 hover:to-amber-300 border border-amber-300 text-amber-950 font-bold text-[11px] flex items-center justify-between shadow-2xs transition active:scale-98" title="सुनहरे बॉर्डर वाला बायोडाटा व 1-क्लिक PDF डाउनलोड">
            <span class="flex items-center space-x-1.5">
              <i class="fa-solid fa-crown text-amber-600 text-xs"></i>
              <span>👑 रॉयल बायोडाटा (सुनहरा बॉर्डर)</span>
            </span>
            <span class="bg-[#064E3B] text-amber-200 text-[10px] px-2 py-0.5 rounded-full font-extrabold flex items-center space-x-1 shadow-xs">
              <i class="fa-solid fa-cloud-arrow-down text-[10px]"></i>
              <span>⚡ 1-क्लिक PDF</span>
            </span>
          </button>
        </div>

        <!-- Bottom: 5 Action Buttons in Horizontal Row -->
        <div class="mt-2.5 pt-2 border-t border-stone-100 flex items-center space-x-1.5">
          <button onclick="sendInterest(this, 'Priya Sharma')" class="card-btn btn-interest" title="रुचि भेजें (Send Interest)">
            <i class="fa-solid fa-heart text-[10px]"></i>
            <span>Interest</span>
          </button>
          <button onclick="openChatModal('Priya Sharma', '/assets/images/match_priya.jpg', true)" class="card-btn btn-chat" title="चैट करें (Chat)">
            <i class="fa-solid fa-comment-dots text-[10px]"></i>
            <span>Chat</span>
          </button>
          <button onclick="openKundaliModal('Priya Sharma', 28, 'Kashyap', 'Brahmin', 'Indore')" class="card-btn btn-kundali" title="36 गुण मिलान (Kundali Milan)">
            <i class="fa-solid fa-dharmachakra text-[10px]"></i>
            <span>Kundali</span>
          </button>
          <button onclick="handleCardWhatsappClick('Priya Sharma', '+91 98260 41289', 'श्री रमाकांत शर्मा (पिताजी)', '/assets/images/match_priya.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)">
            <i class="fa-brands fa-whatsapp text-[10px]"></i>
            <span>WhatsApp 🔒</span>
          </button>
          <button onclick="skipCard(this, 'Priya Sharma')" class="card-btn btn-skip" title="छोड़ें (Skip)">
            <i class="fa-solid fa-xmark text-[10px]"></i>
            <span>Skip</span>
          </button>
        </div>
      </article>

      <!-- ==================== CARD 2: NEHA VERMA ==================== -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="कायस्थ"
               data-categories="all,interests_received,verified"
               data-id="2"
               data-name="Neha Verma"
               data-age="24"
               data-height="5'3&quot;"
               data-edu="M.Sc (Biotechnology)"
               data-location="Pune, Maharashtra"
               data-gotra="Bharadwaj"
               data-guna="22"
               data-phone="+91 97654 82910"
               data-father="श्री सतीश वर्मा (पिताजी)">
        
        <!-- Top Main Info Flex Row -->
        <div class="flex items-start space-x-2.5">
          <!-- Left: Portrait Photo with Offline Badge -->
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_neha.jpg" alt="Neha Verma" class="w-full h-full object-cover">
            <!-- Offline Pill Badge -->
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-stone-300">
              <span class="w-1.5 h-1.5 rounded-full bg-stone-400"></span>
              <span class="text-[8.5px] font-bold text-stone-600 leading-none">Offline</span>
            </div>
          </div>

          <!-- Center: Candidate Details -->
          <div class="flex-1 min-w-0 pr-1">
            <!-- Name + Verified Badge + Guna Milan Badge -->
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Neha Verma</h3>
              <!-- Verified Blue Tick -->
              <span class="text-blue-600 text-xs" title="सत्यापित प्रोफाइल">
                <i class="fa-solid fa-circle-check"></i>
              </span>
              <!-- Guna Milan Gold Pill -->
              <span onclick="openKundaliModal('Neha Verma', 22, 'Bharadwaj', 'Kayastha', 'Pune')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs" title="36 गुण मिलान देखें">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>22/36 गुण मिलान</span>
              </span>
            </div>

            <!-- Age & Height -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium">
              Age: 24 <span class="text-stone-300">|</span> Height: 5'3"
            </p>

            <!-- Education -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">
              Education: M.Sc (Biotechnology)
            </p>

            <!-- Location -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Pune, Maharashtra</span>
            </p>

            <!-- Gotra -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Bharadwaj</span>
            </p>
          </div>

          <!-- Right: Top Icons & Status Indicators -->
          <div class="flex flex-col items-end space-y-1 shrink-0">
            <!-- Top Right Icons Row (Share, Three-Dots) -->
            <div class="flex items-center space-x-1 text-stone-500">
              <button onclick="shareProfile('Neha Verma', 'Pune')" class="w-6 h-6 flex items-center justify-center text-stone-600 hover:bg-stone-100 rounded-full transition" title="शेयर करें">
                <i class="fa-solid fa-share-nodes text-xs"></i>
              </button>
              <button onclick="openProfileActions('Neha Verma', 2)" class="w-6 h-6 flex items-center justify-center text-stone-600 hover:bg-stone-100 rounded-full transition" title="और विकल्प">
                <i class="fa-solid fa-ellipsis-vertical text-xs"></i>
              </button>
            </div>

            <!-- Status Indicator 1: Interested Me -->
            <div class="flex items-center space-x-1 text-emerald-800 font-bold text-[9.5px]">
              <i class="fa-solid fa-heart text-[9px] text-emerald-700"></i>
              <span>Interested Me</span>
            </div>

            <!-- Status Indicator 2: Received Request -->
            <div class="flex flex-col items-end text-right">
              <span class="text-[9.5px] font-semibold text-emerald-900 flex items-center space-x-1">
                <i class="fa-solid fa-comment text-[9px] text-emerald-600"></i>
                <span>Received Request</span>
              </span>
              <span class="text-[8px] text-stone-400 font-medium leading-none">2 hours ago</span>
            </div>
          </div>
        </div>

        <!-- Royal Golden Biodata 1-Click Ribbon -->
        <div class="mt-2 pt-1.5 border-t border-amber-200/70">
          <button onclick="openRoyalBiodataModal('Neha Verma')" class="w-full py-1.5 px-2.5 rounded-xl bg-gradient-to-r from-amber-100 via-amber-50 to-amber-200 hover:from-amber-200 hover:to-amber-300 border border-amber-300 text-amber-950 font-bold text-[11px] flex items-center justify-between shadow-2xs transition active:scale-98" title="सुनहरे बॉर्डर वाला बायोडाटा व 1-क्लिक PDF डाउनलोड">
            <span class="flex items-center space-x-1.5">
              <i class="fa-solid fa-crown text-amber-600 text-xs"></i>
              <span>👑 रॉयल बायोडाटा (सुनहरा बॉर्डर)</span>
            </span>
            <span class="bg-[#064E3B] text-amber-200 text-[10px] px-2 py-0.5 rounded-full font-extrabold flex items-center space-x-1 shadow-xs">
              <i class="fa-solid fa-cloud-arrow-down text-[10px]"></i>
              <span>⚡ 1-क्लिक PDF</span>
            </span>
          </button>
        </div>

        <!-- Bottom: 5 Action Buttons in Horizontal Row -->
        <div class="mt-2.5 pt-2 border-t border-stone-100 flex items-center space-x-1.5">
          <button onclick="sendInterest(this, 'Neha Verma')" class="card-btn btn-interest" title="रुचि भेजें (Send Interest)">
            <i class="fa-solid fa-heart text-[10px]"></i>
            <span>Interest</span>
          </button>
          <button onclick="openChatModal('Neha Verma', '/assets/images/match_neha.jpg', false)" class="card-btn btn-chat" title="चैट करें (Chat)">
            <i class="fa-solid fa-comment-dots text-[10px]"></i>
            <span>Chat</span>
          </button>
          <button onclick="openKundaliModal('Neha Verma', 22, 'Bharadwaj', 'Kayastha', 'Pune')" class="card-btn btn-kundali" title="36 गुण मिलान (Kundali Milan)">
            <i class="fa-solid fa-dharmachakra text-[10px]"></i>
            <span>Kundali</span>
          </button>
          <button onclick="handleCardWhatsappClick('Neha Verma', '+91 97654 82910', 'श्री सतीश वर्मा (पिताजी)', '/assets/images/match_neha.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)">
            <i class="fa-brands fa-whatsapp text-[10px]"></i>
            <span>WhatsApp 🔒</span>
          </button>
          <button onclick="skipCard(this, 'Neha Verma')" class="card-btn btn-skip" title="छोड़ें (Skip)">
            <i class="fa-solid fa-xmark text-[10px]"></i>
            <span>Skip</span>
          </button>
        </div>
      </article>

      <!-- ==================== CARD 3: ANJALI SINGH ==================== -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="राजपूत"
               data-categories="all,chat_history,mutual,verified"
               data-id="3"
               data-name="Anjali Singh"
               data-age="28"
               data-height="5'5&quot;"
               data-edu="B.A. (English Literature)"
               data-location="Jaipur, Rajasthan"
               data-gotra="Gautam"
               data-guna="18"
               data-phone="+91 94140 76321"
               data-father="ठाकुर भंवर सिंह (पिताजी)">
        
        <!-- Top Main Info Flex Row -->
        <div class="flex items-start space-x-2.5">
          <!-- Left: Portrait Photo with Online Badge -->
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_anjali.jpg" alt="Anjali Singh" class="w-full h-full object-cover">
            <!-- Online Pill Badge -->
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-300">
              <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse-beacon"></span>
              <span class="text-[8.5px] font-extrabold text-emerald-800 leading-none">ऑनलाइन</span>
            </div>
          </div>

          <!-- Center: Candidate Details -->
          <div class="flex-1 min-w-0 pr-1">
            <!-- Name + Verified Badge + Guna Milan Badge -->
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Anjali Singh</h3>
              <!-- Verified Blue Tick -->
              <span class="text-blue-600 text-xs" title="सत्यापित प्रोफाइल">
                <i class="fa-solid fa-circle-check"></i>
              </span>
              <!-- Guna Milan Gold Pill -->
              <span onclick="openKundaliModal('Anjali Singh', 18, 'Gautam', 'Rajput', 'Jaipur')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs" title="36 गुण मिलान देखें">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>18/36 गुण मिलान</span>
              </span>
            </div>

            <!-- Age & Height -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium">
              Age: 28 <span class="text-stone-300">|</span> Height: 5'5"
            </p>

            <!-- Education -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">
              Education: B.A. (English Literature)
            </p>

            <!-- Location -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Jaipur, Rajasthan</span>
            </p>

            <!-- Gotra -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Gautam</span>
            </p>
          </div>

          <!-- Right: Top Icons & Status Indicators -->
          <div class="flex flex-col items-end space-y-1 shrink-0">
            <!-- Top Right Icons Row (Share, Three-Dots) -->
            <div class="flex items-center space-x-1 text-stone-500">
              <button onclick="shareProfile('Anjali Singh', 'Jaipur')" class="w-6 h-6 flex items-center justify-center text-stone-600 hover:bg-stone-100 rounded-full transition" title="शेयर करें">
                <i class="fa-solid fa-share-nodes text-xs"></i>
              </button>
              <button onclick="openProfileActions('Anjali Singh', 3)" class="w-6 h-6 flex items-center justify-center text-stone-600 hover:bg-stone-100 rounded-full transition" title="और विकल्प">
                <i class="fa-solid fa-ellipsis-vertical text-xs"></i>
              </button>
            </div>

            <!-- Status Indicator 1: 1 new message -->
            <div class="flex flex-col items-end text-right">
              <span class="text-[9.5px] font-semibold text-emerald-900 flex items-center space-x-1">
                <i class="fa-solid fa-comment-dots text-[9px] text-emerald-700"></i>
                <span>1 new message</span>
              </span>
              <span class="text-[8px] text-stone-400 font-medium leading-none">Yesterday, 08:42 PM</span>
            </div>

            <!-- Status Indicator 2: Royal Member -->
            <div class="flex items-center space-x-1 text-amber-700 font-bold text-[9.5px]">
              <i class="fa-solid fa-crown text-[9px] text-amber-500"></i>
              <span>Royal Member</span>
            </div>
          </div>
        </div>

        <!-- Royal Golden Biodata 1-Click Ribbon -->
        <div class="mt-2 pt-1.5 border-t border-amber-200/70">
          <button onclick="openRoyalBiodataModal('Anjali Singh')" class="w-full py-1.5 px-2.5 rounded-xl bg-gradient-to-r from-amber-100 via-amber-50 to-amber-200 hover:from-amber-200 hover:to-amber-300 border border-amber-300 text-amber-950 font-bold text-[11px] flex items-center justify-between shadow-2xs transition active:scale-98" title="सुनहरे बॉर्डर वाला बायोडाटा व 1-क्लिक PDF डाउनलोड">
            <span class="flex items-center space-x-1.5">
              <i class="fa-solid fa-crown text-amber-600 text-xs"></i>
              <span>👑 रॉयल बायोडाटा (सुनहरा बॉर्डर)</span>
            </span>
            <span class="bg-[#064E3B] text-amber-200 text-[10px] px-2 py-0.5 rounded-full font-extrabold flex items-center space-x-1 shadow-xs">
              <i class="fa-solid fa-cloud-arrow-down text-[10px]"></i>
              <span>⚡ 1-क्लिक PDF</span>
            </span>
          </button>
        </div>

        <!-- Bottom: 5 Action Buttons in Horizontal Row -->
        <div class="mt-2.5 pt-2 border-t border-stone-100 flex items-center space-x-1.5">
          <button onclick="sendInterest(this, 'Anjali Singh')" class="card-btn btn-interest" title="रुचि भेजें (Send Interest)">
            <i class="fa-solid fa-heart text-[10px]"></i>
            <span>Interest</span>
          </button>
          <button onclick="openChatModal('Anjali Singh', '/assets/images/match_anjali.jpg', true)" class="card-btn btn-chat" title="चैट करें (Chat)">
            <i class="fa-solid fa-comment-dots text-[10px]"></i>
            <span>Chat</span>
          </button>
          <button onclick="openKundaliModal('Anjali Singh', 18, 'Gautam', 'Rajput', 'Jaipur')" class="card-btn btn-kundali" title="36 गुण मिलान (Kundali Milan)">
            <i class="fa-solid fa-dharmachakra text-[10px]"></i>
            <span>Kundali</span>
          </button>
          <button onclick="handleCardWhatsappClick('Anjali Singh', '+91 94140 76321', 'ठाकुर भंवर सिंह (पिताजी)', '/assets/images/match_anjali.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)">
            <i class="fa-brands fa-whatsapp text-[10px]"></i>
            <span>WhatsApp 🔒</span>
          </button>
          <button onclick="skipCard(this, 'Anjali Singh')" class="card-btn btn-skip" title="छोड़ें (Skip)">
            <i class="fa-solid fa-xmark text-[10px]"></i>
            <span>Skip</span>
          </button>
        </div>
      </article>

      <!-- ==================== CARD 4: RITIKA PATEL ==================== -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="पाटीदार"
               data-categories="all,viewed_me,verified"
               data-id="4"
               data-name="Ritika Patel"
               data-age="25"
               data-height="5'6&quot;"
               data-edu="MBA (Finance)"
               data-location="Ahmedabad, Gujarat"
               data-gotra="Vashishtha"
               data-guna="26"
               data-phone="+91 98980 54312"
               data-father="श्री दिनेश पटेल (पिताजी)">
        
        <!-- Top Main Info Flex Row -->
        <div class="flex items-start space-x-2.5">
          <!-- Left: Portrait Photo with Offline Badge -->
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_ritika.jpg" alt="Ritika Patel" class="w-full h-full object-cover">
            <!-- Offline Pill Badge -->
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-stone-300">
              <span class="w-1.5 h-1.5 rounded-full bg-stone-400"></span>
              <span class="text-[8.5px] font-bold text-stone-600 leading-none">Offline</span>
            </div>
          </div>

          <!-- Center: Candidate Details -->
          <div class="flex-1 min-w-0 pr-1">
            <!-- Name + Verified Badge + Guna Milan Badge -->
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Ritika Patel</h3>
              <!-- Verified Blue Tick -->
              <span class="text-blue-600 text-xs" title="सत्यापित प्रोफाइल">
                <i class="fa-solid fa-circle-check"></i>
              </span>
              <!-- Guna Milan Gold Pill -->
              <span onclick="openKundaliModal('Ritika Patel', 26, 'Vashishtha', 'Patidar', 'Ahmedabad')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs" title="36 गुण मिलान देखें">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>26/36 गुण मिलान</span>
              </span>
            </div>

            <!-- Age & Height -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium">
              Age: 25 <span class="text-stone-300">|</span> Height: 5'6"
            </p>

            <!-- Education -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">
              Education: MBA (Finance)
            </p>

            <!-- Location -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Ahmedabad, Gujarat</span>
            </p>

            <!-- Gotra -->
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Vashishtha</span>
            </p>
          </div>

          <!-- Right: Top Icons & Status Indicators -->
          <div class="flex flex-col items-end space-y-1 shrink-0">
            <!-- Top Right Icons Row (Share, Three-Dots) -->
            <div class="flex items-center space-x-1 text-stone-500">
              <button onclick="shareProfile('Ritika Patel', 'Ahmedabad')" class="w-6 h-6 flex items-center justify-center text-stone-600 hover:bg-stone-100 rounded-full transition" title="शेयर करें">
                <i class="fa-solid fa-share-nodes text-xs"></i>
              </button>
              <button onclick="openProfileActions('Ritika Patel', 4)" class="w-6 h-6 flex items-center justify-center text-stone-600 hover:bg-stone-100 rounded-full transition" title="और विकल्प">
                <i class="fa-solid fa-ellipsis-vertical text-xs"></i>
              </button>
            </div>

            <!-- Status Indicator 1: 5 times viewed -->
            <div class="flex flex-col items-end text-right">
              <span class="text-[9.5px] font-semibold text-teal-800 flex items-center space-x-1">
                <i class="fa-solid fa-eye text-[9px] text-teal-600"></i>
                <span>5 times viewed</span>
              </span>
              <span class="text-[8px] text-stone-400 font-medium leading-none">Yesterday, 06:20 PM</span>
            </div>

            <!-- Status Indicator 2: Verified Profile -->
            <div class="flex items-center space-x-1 text-emerald-800 font-bold text-[9.5px]">
              <i class="fa-solid fa-shield-halved text-[9px] text-emerald-600"></i>
              <span>Verified Profile</span>
            </div>
          </div>
        </div>

        <!-- Royal Golden Biodata 1-Click Ribbon -->
        <div class="mt-2 pt-1.5 border-t border-amber-200/70">
          <button onclick="openRoyalBiodataModal('Ritika Patel')" class="w-full py-1.5 px-2.5 rounded-xl bg-gradient-to-r from-amber-100 via-amber-50 to-amber-200 hover:from-amber-200 hover:to-amber-300 border border-amber-300 text-amber-950 font-bold text-[11px] flex items-center justify-between shadow-2xs transition active:scale-98" title="सुनहरे बॉर्डर वाला बायोडाटा व 1-क्लिक PDF डाउनलोड">
            <span class="flex items-center space-x-1.5">
              <i class="fa-solid fa-crown text-amber-600 text-xs"></i>
              <span>👑 रॉयल बायोडाटा (सुनहरा बॉर्डर)</span>
            </span>
            <span class="bg-[#064E3B] text-amber-200 text-[10px] px-2 py-0.5 rounded-full font-extrabold flex items-center space-x-1 shadow-xs">
              <i class="fa-solid fa-cloud-arrow-down text-[10px]"></i>
              <span>⚡ 1-क्लिक PDF</span>
            </span>
          </button>
        </div>

        <!-- Bottom: 5 Action Buttons in Horizontal Row -->
        <div class="mt-2.5 pt-2 border-t border-stone-100 flex items-center space-x-1.5">
          <button onclick="sendInterest(this, 'Ritika Patel')" class="card-btn btn-interest" title="रुचि भेजें (Send Interest)">
            <i class="fa-solid fa-heart text-[10px]"></i>
            <span>Interest</span>
          </button>
          <button onclick="openChatModal('Ritika Patel', '/assets/images/match_ritika.jpg', false)" class="card-btn btn-chat" title="चैट करें (Chat)">
            <i class="fa-solid fa-comment-dots text-[10px]"></i>
            <span>Chat</span>
          </button>
          <button onclick="openKundaliModal('Ritika Patel', 26, 'Vashishtha', 'Patidar', 'Ahmedabad')" class="card-btn btn-kundali" title="36 गुण मिलान (Kundali Milan)">
            <i class="fa-solid fa-dharmachakra text-[10px]"></i>
            <span>Kundali</span>
          </button>
          <button onclick="handleCardWhatsappClick('Ritika Patel', '+91 98980 54312', 'श्री दिनेश पटेल (पिताजी)', '/assets/images/match_ritika.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)">
            <i class="fa-brands fa-whatsapp text-[10px]"></i>
            <span>WhatsApp 🔒</span>
          </button>
          <button onclick="skipCard(this, 'Ritika Patel')" class="card-btn btn-skip" title="छोड़ें (Skip)">
            <i class="fa-solid fa-xmark text-[10px]"></i>
            <span>Skip</span>
          </button>
        </div>
      </article>

      <!-- ==================== SAMAJ COMMUNITY CANDIDATES ==================== -->

      <!-- CARD: POOJA MAHESHWARI (माहेश्वरी) -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="माहेश्वरी"
               data-categories="all,viewed_me,mutual,verified"
               data-id="5"
               data-name="Pooja Maheshwari"
               data-age="25"
               data-height="5'3&quot;"
               data-edu="CA Final (Chartered Accountant)"
               data-location="Surat, Gujarat"
               data-gotra="Somani"
               data-guna="30"
               data-phone="+91 98251 67890"
               data-father="श्री घनश्याम दास सोमानी (पिताजी)">
        <div class="flex items-start space-x-2.5">
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_priya.jpg" alt="Pooja Maheshwari" class="w-full h-full object-cover">
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-300">
              <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse-beacon"></span>
              <span class="text-[8.5px] font-extrabold text-emerald-800 leading-none">ऑनलाइन</span>
            </div>
          </div>
          <div class="flex-1 min-w-0 pr-1">
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Pooja Maheshwari</h3>
              <span class="text-blue-600 text-xs"><i class="fa-solid fa-circle-check"></i></span>
              <span onclick="openKundaliModal('Pooja Maheshwari', 30, 'Somani', 'Maheshwari', 'Surat')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>30/36 गुण मिलान</span>
              </span>
            </div>
            <p class="text-[11px] text-stone-600 leading-snug font-medium">Age: 25 <span class="text-stone-300">|</span> Height: 5'3"</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">Education: CA Final (Chartered Accountant)</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Surat / Bhilwara</span>
            </p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Somani (माहेश्वरी)</span>
            </p>
          </div>
        </div>
        <div class="mt-2.5 pt-2 border-t border-stone-100 grid grid-cols-5 gap-1.5">
          <button onclick="openRoyalBiodataModal('Pooja Maheshwari')" class="card-btn btn-biodata" title="रॉयल बायोडाटा देखें">
            <i class="fa-solid fa-file-invoice text-[10px]"></i>
            <span>बायोडाटा</span>
          </button>
          <button onclick="sendInterest(this, 'Pooja Maheshwari')" class="card-btn btn-interest" title="रुचि भेजें">
            <i class="fa-solid fa-heart text-[10px]"></i>
            <span>Interest</span>
          </button>
          <button onclick="openKundaliModal('Pooja Maheshwari', 30, 'Somani', 'Maheshwari', 'Surat')" class="card-btn btn-kundali" title="कुंडली मिलान">
            <i class="fa-solid fa-dharmachakra text-[10px]"></i>
            <span>Kundali</span>
          </button>
          <button onclick="handleCardWhatsappClick('Pooja Maheshwari', '+91 98251 67890', 'श्री घनश्याम दास सोमानी (पिताजी)', '/assets/images/match_priya.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)">
            <i class="fa-brands fa-whatsapp text-[10px]"></i>
            <span>WhatsApp 🔒</span>
          </button>
          <button onclick="skipCard(this, 'Pooja Maheshwari')" class="card-btn btn-skip" title="छोड़ें">
            <i class="fa-solid fa-xmark text-[10px]"></i>
            <span>Skip</span>
          </button>
        </div>
      </article>

      <!-- CARD: SNEHA AGARWAL (अग्रवाल) -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="अग्रवाल"
               data-categories="all,viewed_me,interests_received,verified"
               data-id="6"
               data-name="Sneha Agarwal"
               data-age="26"
               data-height="5'4&quot;"
               data-edu="M.Sc Data Science & AI"
               data-location="Jaipur, Rajasthan"
               data-gotra="Bansal"
               data-guna="29"
               data-phone="+91 94140 33445"
               data-father="श्री विष्णु कुमार बंसल (पिताजी)">
        <div class="flex items-start space-x-2.5">
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_neha.jpg" alt="Sneha Agarwal" class="w-full h-full object-cover">
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-300">
              <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse-beacon"></span>
              <span class="text-[8.5px] font-extrabold text-emerald-800 leading-none">ऑनलाइन</span>
            </div>
          </div>
          <div class="flex-1 min-w-0 pr-1">
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Sneha Agarwal</h3>
              <span class="text-blue-600 text-xs"><i class="fa-solid fa-circle-check"></i></span>
              <span onclick="openKundaliModal('Sneha Agarwal', 29, 'Bansal', 'Agarwal', 'Jaipur')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>29/36 गुण मिलान</span>
              </span>
            </div>
            <p class="text-[11px] text-stone-600 leading-snug font-medium">Age: 26 <span class="text-stone-300">|</span> Height: 5'4"</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">Education: M.Sc Data Science & AI</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Jaipur, Rajasthan</span>
            </p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Bansal (अग्रवाल)</span>
            </p>
          </div>
        </div>
        <div class="mt-2.5 pt-2 border-t border-stone-100 grid grid-cols-5 gap-1.5">
          <button onclick="openRoyalBiodataModal('Sneha Agarwal')" class="card-btn btn-biodata"><i class="fa-solid fa-file-invoice text-[10px]"></i><span>बायोडाटा</span></button>
          <button onclick="sendInterest(this, 'Sneha Agarwal')" class="card-btn btn-interest"><i class="fa-solid fa-heart text-[10px]"></i><span>Interest</span></button>
          <button onclick="openKundaliModal('Sneha Agarwal', 29, 'Bansal', 'Agarwal', 'Jaipur')" class="card-btn btn-kundali"><i class="fa-solid fa-dharmachakra text-[10px]"></i><span>Kundali</span></button>
          <button onclick="handleCardWhatsappClick('Sneha Agarwal', '+91 94140 33445', 'श्री विष्णु कुमार बंसल (पिताजी)', '/assets/images/match_neha.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)"><i class="fa-brands fa-whatsapp text-[10px]"></i><span>WhatsApp 🔒</span></button>
          <button onclick="skipCard(this, 'Sneha Agarwal')" class="card-btn btn-skip"><i class="fa-solid fa-xmark text-[10px]"></i><span>Skip</span></button>
        </div>
      </article>

      <!-- CARD: DIVYA JAIN (जैन) -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="जैन"
               data-categories="all,viewed_me,mutual,verified"
               data-id="7"
               data-name="Divya Jain"
               data-age="26"
               data-height="5'4&quot;"
               data-edu="B.Arch (Architecture)"
               data-location="Udaipur, Rajasthan"
               data-gotra="Oswal"
               data-guna="27"
               data-phone="+91 94142 88990"
               data-father="श्री शांतिलाल जैन (पिताजी)">
        <div class="flex items-start space-x-2.5">
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_priya.jpg" alt="Divya Jain" class="w-full h-full object-cover">
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-300">
              <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse-beacon"></span>
              <span class="text-[8.5px] font-extrabold text-emerald-800 leading-none">ऑनलाइन</span>
            </div>
          </div>
          <div class="flex-1 min-w-0 pr-1">
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Divya Jain</h3>
              <span class="text-blue-600 text-xs"><i class="fa-solid fa-circle-check"></i></span>
              <span onclick="openKundaliModal('Divya Jain', 27, 'Oswal', 'Jain', 'Udaipur')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>27/36 गुण मिलान</span>
              </span>
            </div>
            <p class="text-[11px] text-stone-600 leading-snug font-medium">Age: 26 <span class="text-stone-300">|</span> Height: 5'4"</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">Education: B.Arch (Architecture)</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Udaipur, Rajasthan</span>
            </p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Oswal (जैन समाज)</span>
            </p>
          </div>
        </div>
        <div class="mt-2.5 pt-2 border-t border-stone-100 grid grid-cols-5 gap-1.5">
          <button onclick="openRoyalBiodataModal('Divya Jain')" class="card-btn btn-biodata"><i class="fa-solid fa-file-invoice text-[10px]"></i><span>बायोडाटा</span></button>
          <button onclick="sendInterest(this, 'Divya Jain')" class="card-btn btn-interest"><i class="fa-solid fa-heart text-[10px]"></i><span>Interest</span></button>
          <button onclick="openKundaliModal('Divya Jain', 27, 'Oswal', 'Jain', 'Udaipur')" class="card-btn btn-kundali"><i class="fa-solid fa-dharmachakra text-[10px]"></i><span>Kundali</span></button>
          <button onclick="handleCardWhatsappClick('Divya Jain', '+91 94142 88990', 'श्री शांतिलाल जैन (पिताजी)', '/assets/images/match_priya.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)"><i class="fa-brands fa-whatsapp text-[10px]"></i><span>WhatsApp 🔒</span></button>
          <button onclick="skipCard(this, 'Divya Jain')" class="card-btn btn-skip"><i class="fa-solid fa-xmark text-[10px]"></i><span>Skip</span></button>
        </div>
      </article>

      <!-- CARD: POOJA CHAUDHARY (जाट) -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="जाट"
               data-categories="all,viewed_me,verified"
               data-id="8"
               data-name="Pooja Chaudhary"
               data-age="25"
               data-height="5'6&quot;"
               data-edu="M.A. & Govt Lecturer"
               data-location="Sikar, Rajasthan"
               data-gotra="Punia"
               data-guna="31"
               data-phone="+91 94145 11223"
               data-father="श्री रामनिवास पूनिया (पिताजी)">
        <div class="flex items-start space-x-2.5">
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_anjali.jpg" alt="Pooja Chaudhary" class="w-full h-full object-cover">
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-300">
              <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse-beacon"></span>
              <span class="text-[8.5px] font-extrabold text-emerald-800 leading-none">ऑनलाइन</span>
            </div>
          </div>
          <div class="flex-1 min-w-0 pr-1">
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Pooja Chaudhary</h3>
              <span class="text-blue-600 text-xs"><i class="fa-solid fa-circle-check"></i></span>
              <span onclick="openKundaliModal('Pooja Chaudhary', 31, 'Punia', 'Jat', 'Sikar')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>31/36 गुण मिलान</span>
              </span>
            </div>
            <p class="text-[11px] text-stone-600 leading-snug font-medium">Age: 25 <span class="text-stone-300">|</span> Height: 5'6"</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">Education: M.A. & Govt Lecturer</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Sikar / Jaipur</span>
            </p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Punia (जाट समाज)</span>
            </p>
          </div>
        </div>
        <div class="mt-2.5 pt-2 border-t border-stone-100 grid grid-cols-5 gap-1.5">
          <button onclick="openRoyalBiodataModal('Pooja Chaudhary')" class="card-btn btn-biodata"><i class="fa-solid fa-file-invoice text-[10px]"></i><span>बायोडाटा</span></button>
          <button onclick="sendInterest(this, 'Pooja Chaudhary')" class="card-btn btn-interest"><i class="fa-solid fa-heart text-[10px]"></i><span>Interest</span></button>
          <button onclick="openKundaliModal('Pooja Chaudhary', 31, 'Punia', 'Jat', 'Sikar')" class="card-btn btn-kundali"><i class="fa-solid fa-dharmachakra text-[10px]"></i><span>Kundali</span></button>
          <button onclick="handleCardWhatsappClick('Pooja Chaudhary', '+91 94145 11223', 'श्री रामनिवास पूनिया (पिताजी)', '/assets/images/match_priya.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)"><i class="fa-brands fa-whatsapp text-[10px]"></i><span>WhatsApp 🔒</span></button>
          <button onclick="skipCard(this, 'Pooja Chaudhary')" class="card-btn btn-skip"><i class="fa-solid fa-xmark text-[10px]"></i><span>Skip</span></button>
        </div>
      </article>

      <!-- CARD: KAVITA YADAV (यादव) -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="यादव"
               data-categories="all,viewed_me,mutual,verified"
               data-id="9"
               data-name="Kavita Yadav"
               data-age="25"
               data-height="5'4&quot;"
               data-edu="B.Com + Bank PO"
               data-location="Alwar, Rajasthan"
               data-gotra="Kaushik"
               data-guna="26"
               data-phone="+91 94148 44556"
               data-father="श्री ओमप्रकाश यादव (पिताजी)">
        <div class="flex items-start space-x-2.5">
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_priya.jpg" alt="Kavita Yadav" class="w-full h-full object-cover">
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-300">
              <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse-beacon"></span>
              <span class="text-[8.5px] font-extrabold text-emerald-800 leading-none">ऑनलाइन</span>
            </div>
          </div>
          <div class="flex-1 min-w-0 pr-1">
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Kavita Yadav</h3>
              <span class="text-blue-600 text-xs"><i class="fa-solid fa-circle-check"></i></span>
              <span onclick="openKundaliModal('Kavita Yadav', 26, 'Kaushik', 'Yadav', 'Alwar')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>26/36 गुण मिलान</span>
              </span>
            </div>
            <p class="text-[11px] text-stone-600 leading-snug font-medium">Age: 25 <span class="text-stone-300">|</span> Height: 5'4"</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">Education: B.Com + Bank PO</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Alwar / Jaipur</span>
            </p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Kaushik (यादव समाज)</span>
            </p>
          </div>
        </div>
        <div class="mt-2.5 pt-2 border-t border-stone-100 grid grid-cols-5 gap-1.5">
          <button onclick="openRoyalBiodataModal('Kavita Yadav')" class="card-btn btn-biodata"><i class="fa-solid fa-file-invoice text-[10px]"></i><span>बायोडाटा</span></button>
          <button onclick="sendInterest(this, 'Kavita Yadav')" class="card-btn btn-interest"><i class="fa-solid fa-heart text-[10px]"></i><span>Interest</span></button>
          <button onclick="openKundaliModal('Kavita Yadav', 26, 'Kaushik', 'Yadav', 'Alwar')" class="card-btn btn-kundali"><i class="fa-solid fa-dharmachakra text-[10px]"></i><span>Kundali</span></button>
          <button onclick="handleCardWhatsappClick('Kavita Yadav', '+91 94148 44556', 'श्री ओमप्रकाश यादव (पिताजी)', '/assets/images/match_priya.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)"><i class="fa-brands fa-whatsapp text-[10px]"></i><span>WhatsApp 🔒</span></button>
          <button onclick="skipCard(this, 'Kavita Yadav')" class="card-btn btn-skip"><i class="fa-solid fa-xmark text-[10px]"></i><span>Skip</span></button>
        </div>
      </article>

      <!-- CARD: AARTI GURJAR (गुर्जर) -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="गुर्जर"
               data-categories="all,viewed_me,verified"
               data-id="10"
               data-name="Aarti Gurjar"
               data-age="24"
               data-height="5'3&quot;"
               data-edu="M.A. & B.Ed"
               data-location="Ajmer, Rajasthan"
               data-gotra="Bainsla"
               data-guna="28"
               data-phone="+91 94147 66778"
               data-father="श्री कन्हैया लाल बैंसला (पिताजी)">
        <div class="flex items-start space-x-2.5">
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_anjali.jpg" alt="Aarti Gurjar" class="w-full h-full object-cover">
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-300">
              <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse-beacon"></span>
              <span class="text-[8.5px] font-extrabold text-emerald-800 leading-none">ऑनलाइन</span>
            </div>
          </div>
          <div class="flex-1 min-w-0 pr-1">
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Aarti Gurjar</h3>
              <span class="text-blue-600 text-xs"><i class="fa-solid fa-circle-check"></i></span>
              <span onclick="openKundaliModal('Aarti Gurjar', 28, 'Bainsla', 'Gurjar', 'Ajmer')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>28/36 गुण मिलान</span>
              </span>
            </div>
            <p class="text-[11px] text-stone-600 leading-snug font-medium">Age: 24 <span class="text-stone-300">|</span> Height: 5'3"</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">Education: M.A. & B.Ed</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Ajmer / Tonk</span>
            </p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Bainsla (गुर्जर समाज)</span>
            </p>
          </div>
        </div>
        <div class="mt-2.5 pt-2 border-t border-stone-100 grid grid-cols-5 gap-1.5">
          <button onclick="openRoyalBiodataModal('Aarti Gurjar')" class="card-btn btn-biodata"><i class="fa-solid fa-file-invoice text-[10px]"></i><span>बायोडाटा</span></button>
          <button onclick="sendInterest(this, 'Aarti Gurjar')" class="card-btn btn-interest"><i class="fa-solid fa-heart text-[10px]"></i><span>Interest</span></button>
          <button onclick="openKundaliModal('Aarti Gurjar', 28, 'Bainsla', 'Gurjar', 'Ajmer')" class="card-btn btn-kundali"><i class="fa-solid fa-dharmachakra text-[10px]"></i><span>Kundali</span></button>
          <button onclick="handleCardWhatsappClick('Aarti Gurjar', '+91 94147 66778', 'श्री कन्हैया लाल बैंसला (पिताजी)', '/assets/images/match_anjali.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)"><i class="fa-brands fa-whatsapp text-[10px]"></i><span>WhatsApp 🔒</span></button>
          <button onclick="skipCard(this, 'Aarti Gurjar')" class="card-btn btn-skip"><i class="fa-solid fa-xmark text-[10px]"></i><span>Skip</span></button>
        </div>
      </article>

      <!-- CARD: MEENAKSHI SONI (सोनी) -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="सोनी"
               data-categories="all,viewed_me,mutual,verified"
               data-id="11"
               data-name="Meenakshi Soni"
               data-age="25"
               data-height="5'3&quot;"
               data-edu="B.Des (Jewellery Design)"
               data-location="Jodhpur, Rajasthan"
               data-gotra="Soni"
               data-guna="29"
               data-phone="+91 94149 88112"
               data-father="श्री बद्री प्रसाद सोनी (पिताजी)">
        <div class="flex items-start space-x-2.5">
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_priya.jpg" alt="Meenakshi Soni" class="w-full h-full object-cover">
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-300">
              <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse-beacon"></span>
              <span class="text-[8.5px] font-extrabold text-emerald-800 leading-none">ऑनलाइन</span>
            </div>
          </div>
          <div class="flex-1 min-w-0 pr-1">
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Meenakshi Soni</h3>
              <span class="text-blue-600 text-xs"><i class="fa-solid fa-circle-check"></i></span>
              <span onclick="openKundaliModal('Meenakshi Soni', 29, 'Soni', 'Soni', 'Jodhpur')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>29/36 गुण मिलान</span>
              </span>
            </div>
            <p class="text-[11px] text-stone-600 leading-snug font-medium">Age: 25 <span class="text-stone-300">|</span> Height: 5'3"</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">Education: B.Des (Jewellery Design)</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Jodhpur / Jaipur</span>
            </p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Soni (सोनी स्वर्णकार)</span>
            </p>
          </div>
        </div>
        <div class="mt-2.5 pt-2 border-t border-stone-100 grid grid-cols-5 gap-1.5">
          <button onclick="openRoyalBiodataModal('Meenakshi Soni')" class="card-btn btn-biodata"><i class="fa-solid fa-file-invoice text-[10px]"></i><span>बायोडाटा</span></button>
          <button onclick="sendInterest(this, 'Meenakshi Soni')" class="card-btn btn-interest"><i class="fa-solid fa-heart text-[10px]"></i><span>Interest</span></button>
          <button onclick="openKundaliModal('Meenakshi Soni', 29, 'Soni', 'Soni', 'Jodhpur')" class="card-btn btn-kundali"><i class="fa-solid fa-dharmachakra text-[10px]"></i><span>Kundali</span></button>
          <button onclick="handleCardWhatsappClick('Meenakshi Soni', '+91 94149 88112', 'श्री बद्री प्रसाद सोनी (पिताजी)', '/assets/images/match_priya.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)"><i class="fa-brands fa-whatsapp text-[10px]"></i><span>WhatsApp 🔒</span></button>
          <button onclick="skipCard(this, 'Meenakshi Soni')" class="card-btn btn-skip"><i class="fa-solid fa-xmark text-[10px]"></i><span>Skip</span></button>
        </div>
      </article>

      <!-- CARD: SUNITA SAINI (सैनी) -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="सैनी"
               data-categories="all,interests_sent,verified"
               data-id="12"
               data-name="Sunita Saini"
               data-age="24"
               data-height="5'4&quot;"
               data-edu="M.Com + B.Ed"
               data-location="Alwar, Rajasthan"
               data-gotra="Maurya"
               data-guna="27"
               data-phone="+91 94141 99001"
               data-father="श्री प्रभुदयाल मौर्य (पिताजी)">
        <div class="flex items-start space-x-2.5">
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_neha.jpg" alt="Sunita Saini" class="w-full h-full object-cover">
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-300">
              <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse-beacon"></span>
              <span class="text-[8.5px] font-extrabold text-emerald-800 leading-none">ऑनलाइन</span>
            </div>
          </div>
          <div class="flex-1 min-w-0 pr-1">
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Sunita Saini</h3>
              <span class="text-blue-600 text-xs"><i class="fa-solid fa-circle-check"></i></span>
              <span onclick="openKundaliModal('Sunita Saini', 27, 'Maurya', 'Saini', 'Alwar')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>27/36 गुण मिलान</span>
              </span>
            </div>
            <p class="text-[11px] text-stone-600 leading-snug font-medium">Age: 24 <span class="text-stone-300">|</span> Height: 5'4"</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">Education: M.Com + B.Ed</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Alwar, Rajasthan</span>
            </p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Maurya (सैनी / माली)</span>
            </p>
          </div>
        </div>
        <div class="mt-2.5 pt-2 border-t border-stone-100 grid grid-cols-5 gap-1.5">
          <button onclick="openRoyalBiodataModal('Sunita Saini')" class="card-btn btn-biodata"><i class="fa-solid fa-file-invoice text-[10px]"></i><span>बायोडाटा</span></button>
          <button onclick="sendInterest(this, 'Sunita Saini')" class="card-btn btn-interest"><i class="fa-solid fa-heart text-[10px]"></i><span>Interest</span></button>
          <button onclick="openKundaliModal('Sunita Saini', 27, 'Maurya', 'Saini', 'Alwar')" class="card-btn btn-kundali"><i class="fa-solid fa-dharmachakra text-[10px]"></i><span>Kundali</span></button>
          <button onclick="handleCardWhatsappClick('Sunita Saini', '+91 94141 99001', 'श्री प्रभुदयाल मौर्य (पिताजी)', '/assets/images/match_neha.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)"><i class="fa-brands fa-whatsapp text-[10px]"></i><span>WhatsApp 🔒</span></button>
          <button onclick="skipCard(this, 'Sunita Saini')" class="card-btn btn-skip"><i class="fa-solid fa-xmark text-[10px]"></i><span>Skip</span></button>
        </div>
      </article>

      <!-- CARD: REKHA BISHNOI (बिश्नोई) -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="बिश्नोई"
               data-categories="all,viewed_me,mutual,verified"
               data-id="13"
               data-name="Rekha Bishnoi"
               data-age="26"
               data-height="5'5&quot;"
               data-edu="RAS Officer (State Govt)"
               data-location="Jodhpur, Rajasthan"
               data-gotra="Saharan"
               data-guna="32"
               data-phone="+91 94143 55667"
               data-father="श्री रामेश्वर लाल सहारण (पिताजी)">
        <div class="flex items-start space-x-2.5">
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_priya.jpg" alt="Rekha Bishnoi" class="w-full h-full object-cover">
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-300">
              <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse-beacon"></span>
              <span class="text-[8.5px] font-extrabold text-emerald-800 leading-none">ऑनलाइन</span>
            </div>
          </div>
          <div class="flex-1 min-w-0 pr-1">
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Rekha Bishnoi</h3>
              <span class="text-blue-600 text-xs"><i class="fa-solid fa-circle-check"></i></span>
              <span onclick="openKundaliModal('Rekha Bishnoi', 32, 'Saharan', 'Bishnoi', 'Jodhpur')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>32/36 गुण मिलान</span>
              </span>
            </div>
            <p class="text-[11px] text-stone-600 leading-snug font-medium">Age: 26 <span class="text-stone-300">|</span> Height: 5'5"</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">Education: RAS Officer (State Govt)</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Jodhpur / Bikaner</span>
            </p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Saharan (बिश्नोई समाज)</span>
            </p>
          </div>
        </div>
        <div class="mt-2.5 pt-2 border-t border-stone-100 grid grid-cols-5 gap-1.5">
          <button onclick="openRoyalBiodataModal('Rekha Bishnoi')" class="card-btn btn-biodata"><i class="fa-solid fa-file-invoice text-[10px]"></i><span>बायोडाटा</span></button>
          <button onclick="sendInterest(this, 'Rekha Bishnoi')" class="card-btn btn-interest"><i class="fa-solid fa-heart text-[10px]"></i><span>Interest</span></button>
          <button onclick="openKundaliModal('Rekha Bishnoi', 32, 'Saharan', 'Bishnoi', 'Jodhpur')" class="card-btn btn-kundali"><i class="fa-solid fa-dharmachakra text-[10px]"></i><span>Kundali</span></button>
          <button onclick="handleCardWhatsappClick('Rekha Bishnoi', '+91 94143 55667', 'श्री रामेश्वर लाल सहारण (पिताजी)', '/assets/images/match_priya.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)"><i class="fa-brands fa-whatsapp text-[10px]"></i><span>WhatsApp 🔒</span></button>
          <button onclick="skipCard(this, 'Rekha Bishnoi')" class="card-btn btn-skip"><i class="fa-solid fa-xmark text-[10px]"></i><span>Skip</span></button>
        </div>
      </article>

      <!-- CARD: SIMRAN KAUR (सिख) -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="सिख"
               data-categories="all,viewed_me,mutual,verified"
               data-id="14"
               data-name="Simran Kaur"
               data-age="26"
               data-height="5'5&quot;"
               data-edu="B.Tech Software Engineer"
               data-location="Chandigarh, Punjab"
               data-gotra="Sandhu"
               data-guna="29"
               data-phone="+91 98140 22334"
               data-father="स सरदार हरप्रीत सिंह संधू (पिताजी)">
        <div class="flex items-start space-x-2.5">
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_priya.jpg" alt="Simran Kaur" class="w-full h-full object-cover">
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-300">
              <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse-beacon"></span>
              <span class="text-[8.5px] font-extrabold text-emerald-800 leading-none">ऑनलाइन</span>
            </div>
          </div>
          <div class="flex-1 min-w-0 pr-1">
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Simran Kaur</h3>
              <span class="text-blue-600 text-xs"><i class="fa-solid fa-circle-check"></i></span>
              <span onclick="openKundaliModal('Simran Kaur', 29, 'Sandhu', 'Sikh', 'Chandigarh')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>29/36 गुण मिलान</span>
              </span>
            </div>
            <p class="text-[11px] text-stone-600 leading-snug font-medium">Age: 26 <span class="text-stone-300">|</span> Height: 5'5"</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">Education: B.Tech Software Engineer</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Chandigarh / Mohali</span>
            </p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Sandhu (सिख समाज)</span>
            </p>
          </div>
        </div>
        <div class="mt-2.5 pt-2 border-t border-stone-100 grid grid-cols-5 gap-1.5">
          <button onclick="openRoyalBiodataModal('Simran Kaur')" class="card-btn btn-biodata"><i class="fa-solid fa-file-invoice text-[10px]"></i><span>बायोडाटा</span></button>
          <button onclick="sendInterest(this, 'Simran Kaur')" class="card-btn btn-interest"><i class="fa-solid fa-heart text-[10px]"></i><span>Interest</span></button>
          <button onclick="openKundaliModal('Simran Kaur', 29, 'Sandhu', 'Sikh', 'Chandigarh')" class="card-btn btn-kundali"><i class="fa-solid fa-dharmachakra text-[10px]"></i><span>Kundali</span></button>
          <button onclick="handleCardWhatsappClick('Simran Kaur', '+91 98140 22334', 'स सरदार हरप्रीत सिंह संधू (पिताजी)', '/assets/images/match_priya.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)"><i class="fa-brands fa-whatsapp text-[10px]"></i><span>WhatsApp 🔒</span></button>
          <button onclick="skipCard(this, 'Simran Kaur')" class="card-btn btn-skip"><i class="fa-solid fa-xmark text-[10px]"></i><span>Skip</span></button>
        </div>
      </article>

      <!-- CARD: KHUSHI ADVANI (सिंधी) -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
               data-caste="सिंधी"
               data-categories="all,viewed_me,verified"
               data-id="15"
               data-name="Khushi Advani"
               data-age="25"
               data-height="5'4&quot;"
               data-edu="Fashion Merchandiser & BBA"
               data-location="Jaipur, Rajasthan"
               data-gotra="Advani"
               data-guna="28"
               data-phone="+91 98290 66554"
               data-father="श्री किशन लाल अडवाणी (पिताजी)">
        <div class="flex items-start space-x-2.5">
          <div class="relative shrink-0 w-[94px] h-[104px] rounded-xl overflow-hidden bg-stone-100 border border-stone-200">
            <img src="/assets/images/match_priya.jpg" alt="Khushi Advani" class="w-full h-full object-cover">
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-300">
              <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse-beacon"></span>
              <span class="text-[8.5px] font-extrabold text-emerald-800 leading-none">ऑनलाइन</span>
            </div>
          </div>
          <div class="flex-1 min-w-0 pr-1">
            <div class="flex flex-wrap items-center gap-1.5 mb-0.5">
              <h3 class="text-sm font-extrabold text-stone-900 leading-none truncate">Khushi Advani</h3>
              <span class="text-blue-600 text-xs"><i class="fa-solid fa-circle-check"></i></span>
              <span onclick="openKundaliModal('Khushi Advani', 28, 'Advani', 'Sindhi', 'Jaipur')" class="cursor-pointer bg-amber-50 text-amber-900 border border-amber-300 rounded-full px-1.5 py-0.5 text-[9px] font-bold flex items-center space-x-0.5 hover:bg-amber-100 transition shadow-2xs">
                <i class="fa-solid fa-dharmachakra text-[9px] text-amber-600"></i>
                <span>28/36 गुण मिलान</span>
              </span>
            </div>
            <p class="text-[11px] text-stone-600 leading-snug font-medium">Age: 25 <span class="text-stone-300">|</span> Height: 5'4"</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium truncate">Education: Fashion Merchandiser & BBA</p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-location-dot text-rose-500 text-[10px]"></i>
              <span class="truncate">Jaipur, Rajasthan</span>
            </p>
            <p class="text-[11px] text-stone-600 leading-snug font-medium flex items-center space-x-1">
              <i class="fa-solid fa-tree text-emerald-700 text-[10px]"></i>
              <span>Gotra: Advani (सिंधी समाज)</span>
            </p>
          </div>
        </div>
        <div class="mt-2.5 pt-2 border-t border-stone-100 grid grid-cols-5 gap-1.5">
          <button onclick="openRoyalBiodataModal('Khushi Advani')" class="card-btn btn-biodata"><i class="fa-solid fa-file-invoice text-[10px]"></i><span>बायोडाटा</span></button>
          <button onclick="sendInterest(this, 'Khushi Advani')" class="card-btn btn-interest"><i class="fa-solid fa-heart text-[10px]"></i><span>Interest</span></button>
          <button onclick="openKundaliModal('Khushi Advani', 28, 'Advani', 'Sindhi', 'Jaipur')" class="card-btn btn-kundali"><i class="fa-solid fa-dharmachakra text-[10px]"></i><span>Kundali</span></button>
          <button onclick="handleCardWhatsappClick('Khushi Advani', '+91 98290 66554', 'श्री किशन लाल अडवाणी (पिताजी)', '/assets/images/match_priya.jpg')" class="card-btn btn-contact" title="WhatsApp पर बात करें (VIP 🔒)"><i class="fa-brands fa-whatsapp text-[10px]"></i><span>WhatsApp 🔒</span></button>
          <button onclick="skipCard(this, 'Khushi Advani')" class="card-btn btn-skip"><i class="fa-solid fa-xmark text-[10px]"></i><span>Skip</span></button>
        </div>
      </article>

    </section>

    <!-- 6. PAGINATION BAR (Exact Recreation from Reference Image) -->
    <section class="px-3 pb-3">
      <div class="flex items-center justify-between space-x-2">
        <!-- Previous Page Button -->
        <button onclick="changePage(-1)" id="btnPrevPage" class="flex-1 py-2.5 px-3 rounded-xl bg-gradient-to-r from-[#064E3B] to-[#047857] hover:from-[#047857] hover:to-[#059669] text-white text-[11px] font-extrabold flex items-center justify-center space-x-1.5 shadow-md border border-emerald-600/50 transition-all active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed">
          <i class="fa-solid fa-arrow-left text-[10px]"></i>
          <span>Previous Page</span>
        </button>

        <!-- Current Page Pill -->
        <div class="px-3.5 py-2 rounded-xl bg-amber-50 border border-amber-300 text-amber-950 font-extrabold text-xs shadow-2xs whitespace-nowrap">
          <span id="pageIndicator">Page 1 of 15</span>
        </div>

        <!-- Next Page Button -->
        <button onclick="changePage(1)" id="btnNextPage" class="flex-1 py-2.5 px-3 rounded-xl bg-gradient-to-r from-[#064E3B] to-[#047857] hover:from-[#047857] hover:to-[#059669] text-white text-[11px] font-extrabold flex items-center justify-center space-x-1.5 shadow-md border border-emerald-600/50 transition-all active:scale-95">
          <span>Next Page</span>
          <i class="fa-solid fa-arrow-right text-[10px]"></i>
        </button>
      </div>
    </section>

    <!-- 7. BOTTOM APP BAR (Dock Menu: 5 Distinct 3D Buttons: Home, Table, Chats, Interests, Profile) -->
    <nav class="sticky bottom-0 left-0 right-0 bg-gradient-to-t from-[#02281e] via-[#064E3B] to-[#085a44] text-white px-2.5 py-2 flex items-center justify-between gap-1.5 z-40 border-t-2 border-[#D4AF37]/60 shadow-[0_-8px_25px_rgba(0,0,0,0.4)] select-none">
      <!-- 1. Home Button -->
      <a href="/cover" class="dock-nav-btn" title="होम पेज (Home)">
        <i class="fa-solid fa-house text-sm mb-1 text-emerald-200"></i>
        <span class="dock-label text-[10px]">होम</span>
      </a>

      <!-- 2. Table / Dashboard (ACTIVE 3D Royal Gold Button) -->
      <a href="/matches" class="dock-nav-btn active" title="तालिका (Matches / Dashboard)">
        <i class="fa-solid fa-table-cells text-base mb-1"></i>
        <span class="dock-label text-[10px]">तालिका</span>
      </a>

      <!-- 3. Chats Button (with Badge '2') -->
      <button onclick="openChatModal('अंजलि सिंह (Anjali)', '/assets/images/match_anjali.jpg', true)" class="dock-nav-btn" title="संदेश (Chats)">
        <div class="relative flex items-center justify-center">
          <i class="fa-solid fa-comments text-sm mb-1 text-emerald-200"></i>
          <span class="dock-badge">2</span>
        </div>
        <span class="dock-label text-[10px]">चैट</span>
      </button>

      <!-- 4. Interests Button (with Badge '5') -->
      <button onclick="filterByCategory('interests_received')" class="dock-nav-btn" title="रुचियां (Interests)">
        <div class="relative flex items-center justify-center">
          <i class="fa-solid fa-heart text-sm mb-1 text-emerald-200"></i>
          <span class="dock-badge">5</span>
        </div>
        <span class="dock-label text-[10px]">रुचि</span>
      </button>

      <!-- 5. Profile Button -->
      <a href="/biodata" class="dock-nav-btn" title="मेरा बायोडाटा (Profile)">
        <i class="fa-solid fa-user-circle text-sm mb-1 text-emerald-200"></i>
        <span class="dock-label text-[10px]">बायोडाटा</span>
      </a>
    </nav>

    <!-- 8. BOTTOM EXTRA FEATURE RIBBON ("Key Features Added") -->
    <footer class="w-full bg-[#FAF7EE] border-t border-[#E6C254]/60 px-3 py-2 flex items-center justify-between text-stone-800 text-[10px] font-bold select-none z-30">
      <!-- Left: Key Features Added Crown Badge -->
      <div class="flex items-center space-x-1.5 shrink-0 pr-2 border-r border-amber-200">
        <i class="fa-solid fa-crown text-amber-600 text-xs"></i>
        <span class="font-extrabold text-stone-900 tracking-tight">Key Features</span>
      </div>

      <!-- Right: Feature Actions -->
      <div class="flex items-center justify-around flex-1 px-1 space-x-1.5">
        <!-- Kundali Milan -->
        <button onclick="openKundaliModal('Priya Sharma', 28, 'Kashyap', 'Brahmin', 'Indore')" class="ribbon-btn" title="36 गुण मिलान">
          <i class="fa-solid fa-dharmachakra text-xs text-amber-700"></i>
          <span class="text-[8.5px] mt-0.5 font-bold text-stone-800">Kundali</span>
        </button>

        <!-- Download PDF -->
        <button onclick="downloadPdfProfile('Priya Sharma')" class="ribbon-btn" title="डाउनलोड PDF">
          <i class="fa-solid fa-file-pdf text-xs text-rose-700"></i>
          <span class="text-[8.5px] mt-0.5 font-bold text-stone-800">PDF</span>
        </button>

        <!-- Report Profile -->
        <button onclick="openReportModal('Priya Sharma')" class="ribbon-btn" title="रिपोर्ट प्रोफाइल">
          <i class="fa-solid fa-triangle-exclamation text-xs text-amber-600"></i>
          <span class="text-[8.5px] mt-0.5 font-bold text-stone-800">Report</span>
        </button>

        <!-- Block Profile -->
        <button onclick="openBlockModal('Priya Sharma')" class="ribbon-btn" title="ब्लॉक प्रोफाइल">
          <i class="fa-solid fa-ban text-xs text-stone-600"></i>
          <span class="text-[8.5px] mt-0.5 font-bold text-stone-800">Block</span>
        </button>
      </div>
    </footer>

  </main>

  <!-- ==================== MODAL 1: KUNDALI MILAN (36 गुण मिलान) ==================== -->
  <div id="kundaliModal" class="modal-backdrop fixed inset-0 z-[150] bg-black/60 backdrop-blur-xs flex items-center justify-center p-3">
    <div class="bg-white rounded-3xl max-w-sm w-full overflow-hidden shadow-2xl border-2 border-amber-400 flex flex-col max-h-[90vh] animate-bounce-in">
      <!-- Modal Header -->
      <div class="bg-gradient-to-r from-[#064E3B] via-[#047857] to-[#033626] text-white p-4 flex items-center justify-between border-b-2 border-amber-300">
        <div class="flex items-center space-x-2.5">
          <div class="w-9 h-9 rounded-full bg-amber-400/20 border border-amber-300 flex items-center justify-center text-amber-300 text-sm">
            <i class="fa-solid fa-dharmachakra"></i>
          </div>
          <div>
            <h3 class="font-cinzel text-sm font-bold text-amber-200">वैदिक अष्टकूट कुंडली मिलान</h3>
            <p class="text-[11px] text-emerald-100 font-sans" id="kmCandidateName">Priya Sharma & आप</p>
          </div>
        </div>
        <button onclick="closeKundaliModal()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs transition">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <!-- Modal Body -->
      <div class="p-4 overflow-y-auto space-y-3 text-stone-800 text-xs">
        <!-- Score Highlights Banner -->
        <div class="bg-gradient-to-br from-amber-50 to-orange-50 border border-amber-300 rounded-2xl p-3 flex items-center justify-between">
          <div>
            <span class="text-[10px] text-amber-800 font-bold uppercase tracking-wider block">कुल गुण मिलान स्कोर</span>
            <div class="flex items-baseline space-x-1.5 mt-0.5">
              <span class="text-3xl font-extrabold text-[#064E3B]" id="kmScoreNumber">28</span>
              <span class="text-sm font-bold text-stone-500">/ 36 गुण</span>
            </div>
            <span class="inline-block mt-1 px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-extrabold" id="kmScoreVerdict">
              अति उत्तम मिलान (Highly Auspicious)
            </span>
          </div>
          <div class="w-16 h-16 rounded-full border-4 border-amber-400 flex flex-col items-center justify-center bg-white shadow-inner">
            <span class="text-[10px] font-bold text-stone-500">अनुकूलता</span>
            <span class="text-sm font-extrabold text-amber-600" id="kmPercent">78%</span>
          </div>
        </div>

        <!-- Ashtakoot Milan Table -->
        <div>
          <h4 class="font-bold text-stone-900 text-xs mb-1.5 flex items-center justify-between">
            <span>अष्टकूट मिलान विवरण (8 Kootas)</span>
            <span class="text-[10px] font-normal text-stone-500">प्राप्तांक / पूर्णांक</span>
          </h4>
          <div class="bg-stone-50 rounded-xl border border-stone-200 overflow-hidden">
            <table class="w-full text-left text-[11px]">
              <tbody class="divide-y divide-stone-200">
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">1. वर्ण (Varna)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">आध्यात्मिक अनुकूलता</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-emerald-700">1 / 1</td>
                </tr>
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">2. वश्य (Vashya)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">पारस्परिक आकर्षण</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-emerald-700">2 / 2</td>
                </tr>
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">3. तारा (Tara)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">भाग्य व स्वास्थ्य</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-emerald-700">3 / 3</td>
                </tr>
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">4. योनि (Yoni)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">शारीरिक व मानसिक सामंजस्य</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-amber-700">2 / 4</td>
                </tr>
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">5. ग्रहमैत्री (Graha Maitri)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">मित्रता व वैचारिक एकता</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-emerald-700">5 / 5</td>
                </tr>
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">6. गण (Gana)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">स्वभाव व व्यवहार</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-emerald-700">5 / 6</td>
                </tr>
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">7. भकूट (Bhakoot)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">प्रेम, वंश व समृद्धि</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-emerald-700">7 / 7</td>
                </tr>
                <tr class="hover:bg-amber-50/50">
                  <td class="py-1.5 px-2.5 font-bold text-stone-800">8. नाड़ी (Nadi)</td>
                  <td class="py-1.5 px-2 text-stone-600 text-[10px]">आनुवंशिक स्वास्थ्य व संतति</td>
                  <td class="py-1.5 px-2.5 text-right font-extrabold text-emerald-700">8 / 8</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Manglik Match -->
        <div class="p-2.5 rounded-xl bg-emerald-50 border border-emerald-200 flex items-start space-x-2">
          <i class="fa-solid fa-shield-heart text-emerald-700 text-sm mt-0.5"></i>
          <div>
            <span class="font-bold text-emerald-900 block text-[11px]">मांगलिक स्थिति: दोष रहित (Compatible)</span>
            <p class="text-[10px] text-emerald-800 mt-0.5">दोनों कुंडलियों में मांगलिक दोष सामंजस्यपूर्ण है। विवाह हेतु पूर्णतः शास्त्रसम्मत है।</p>
          </div>
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="p-3 bg-stone-50 border-t border-stone-200 flex items-center space-x-2">
        <button onclick="downloadKundaliReport()" class="flex-1 py-2 px-3 rounded-xl bg-[#064E3B] text-white text-xs font-bold hover:bg-[#055F46] transition flex items-center justify-center space-x-1.5 shadow-sm">
          <i class="fa-solid fa-file-arrow-down text-xs text-amber-300"></i>
          <span>कुंडली रिपोर्ट डाउनलोड करें (PDF)</span>
        </button>
        <button onclick="closeKundaliModal()" class="py-2 px-3 rounded-xl bg-stone-200 text-stone-700 text-xs font-bold hover:bg-stone-300 transition">
          बंद करें
        </button>
      </div>
    </div>
  </div>

  <!-- ==================== MODAL 2: CONTACT / ACCEPT DETAILS ==================== -->
  <div id="contactModal" class="modal-backdrop fixed inset-0 z-[150] bg-black/60 backdrop-blur-xs flex items-center justify-center p-3">
    <div class="bg-white rounded-3xl max-w-sm w-full overflow-hidden shadow-2xl border-2 border-emerald-400 flex flex-col animate-bounce-in">
      <!-- Header -->
      <div class="bg-gradient-to-r from-[#064E3B] via-[#047857] to-[#033626] text-white p-4 flex items-center justify-between border-b-2 border-amber-300">
        <div class="flex items-center space-x-2.5">
          <div class="w-9 h-9 rounded-full bg-emerald-400/20 border border-emerald-300 flex items-center justify-center text-emerald-200 text-sm">
            <i class="fa-solid fa-address-book"></i>
          </div>
          <div>
            <h3 class="font-cinzel text-sm font-bold text-amber-200">सत्यापित संपर्क विवरण</h3>
            <p class="text-[11px] text-emerald-100 font-sans" id="contactCandidateName">Priya Sharma</p>
          </div>
        </div>
        <button onclick="closeContactModal()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs transition">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <!-- Body -->
      <div class="p-4 space-y-3 text-stone-800 text-xs">
        <div class="p-3 rounded-2xl bg-emerald-50/70 border border-emerald-200">
          <span class="text-[10px] text-emerald-800 font-bold uppercase tracking-wider block">अभिभावक / संपर्क व्यक्ति</span>
          <p class="text-sm font-extrabold text-stone-900 mt-0.5" id="contactGuardianName">श्री रमाकांत शर्मा (पिताजी)</p>
          <p class="text-[11px] text-stone-600 mt-0.5" id="contactLocationText">📍 Indore, Madhya Pradesh</p>
        </div>

        <div class="p-3 rounded-2xl bg-amber-50/60 border border-amber-200 flex items-center justify-between">
          <div>
            <span class="text-[10px] text-amber-800 font-bold uppercase tracking-wider block">सत्यापित मोबाइल नंबर</span>
            <p class="text-base font-extrabold text-[#064E3B] font-mono tracking-wider mt-0.5" id="contactPhoneNumber">+91 98260 •••••</p>
            <div id="contactVipStatusBadge" class="text-[10.5px] text-amber-800 font-bold flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-lock text-amber-600"></i>
              <span>VIP अनलॉक आवश्यक</span>
            </div>
          </div>
          <button onclick="copyPhone()" class="px-2.5 py-1.5 rounded-lg bg-white border border-amber-300 text-amber-800 text-[10px] font-bold hover:bg-amber-100 transition shadow-2xs cursor-pointer">
            <i class="fa-solid fa-copy mr-1"></i> कॉपी करें
          </button>
        </div>

        <div class="p-2.5 rounded-xl bg-stone-50 border border-stone-200 text-[11px] text-stone-600 space-y-1">
          <p><i class="fa-regular fa-clock text-emerald-600 mr-1.5"></i><strong>बातचीत का अनुकूल समय:</strong> सुबह 10:00 से सायं 07:00 बजे तक</p>
          <p><i class="fa-solid fa-shield text-emerald-600 mr-1.5"></i><strong>गोपनीयता:</strong> यह संपर्क धीरजा मैट्रिमोनी के नियमों के अंतर्गत सुरक्षित है।</p>
        </div>

        <!-- 2 Big Action Buttons: WhatsApp & Direct Call -->
        <div class="grid grid-cols-2 gap-2 pt-1">
          <button id="btnWhatsappCall" type="button" onclick="handleWhatsappClickFromContactModal()" class="py-2.5 px-3 rounded-xl bg-[#25D366] hover:bg-[#1EBE5D] text-white text-xs font-bold flex items-center justify-center space-x-1.5 shadow-md transition active:scale-95 cursor-pointer">
            <i class="fa-brands fa-whatsapp text-sm"></i>
            <span>WhatsApp 🔒</span>
          </button>
          <button id="btnPhoneCall" type="button" onclick="handlePhoneClickFromContactModal()" class="py-2.5 px-3 rounded-xl bg-[#064E3B] hover:bg-[#055F46] text-white text-xs font-bold flex items-center justify-center space-x-1.5 shadow-md transition active:scale-95 cursor-pointer">
            <i class="fa-solid fa-phone text-xs"></i>
            <span>सीधे कॉल 🔒</span>
          </button>
        </div>

        <!-- Free In-App Chat Alternative -->
        <div class="pt-2 border-t border-stone-200">
          <button type="button" onclick="closeContactModal(); openChatModal(currentContactData.name, currentContactData.photo, true);" class="w-full py-2 px-3 rounded-xl bg-emerald-50 hover:bg-emerald-100 border border-emerald-300 text-[#064E3B] font-extrabold text-[11px] flex items-center justify-center space-x-1.5 transition cursor-pointer">
            <i class="fa-solid fa-comment-dots text-emerald-700"></i>
            <span>💬 ऐप के अंदर मुफ्त में चैट करें (Free In-App Chat)</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- ==================== MODAL 2.5: VIP WHATSAPP & CONTACT UNLOCK PAYWALL ==================== -->
  <div id="vipWhatsappPayModal" class="modal-backdrop fixed inset-0 z-[155] bg-black/75 backdrop-blur-xs flex items-center justify-center p-3">
    <div class="bg-white rounded-3xl max-w-sm w-full overflow-hidden shadow-2xl border-2 border-amber-400 flex flex-col animate-bounce-in">
      <!-- Header -->
      <div class="bg-gradient-to-r from-emerald-950 via-emerald-900 to-emerald-950 text-white p-3.5 flex items-center justify-between border-b-2 border-amber-400">
        <div class="flex items-center space-x-2">
          <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-amber-400 to-amber-600 text-emerald-950 flex items-center justify-center font-black text-base shadow-xs">
            <i class="fa-brands fa-whatsapp text-lg"></i>
          </div>
          <div>
            <div class="text-[9.5px] uppercase font-black tracking-wider text-amber-300">धीरजा VIP सेवा • डायरेक्ट संपर्क</div>
            <h3 class="font-cinzel text-xs font-bold text-white">WhatsApp नंबर अनलॉक करें</h3>
          </div>
        </div>
        <button onclick="closeVipWhatsappModal()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs transition cursor-pointer">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <!-- Body -->
      <div class="p-3.5 space-y-3 text-stone-800 text-xs">
        <!-- Target Candidate Brief -->
        <div class="flex items-center space-x-2.5 p-2.5 rounded-2xl bg-emerald-50/80 border border-emerald-200">
          <img id="vipTargetPhoto" src="/assets/images/match_priya.jpg" alt="Target" class="w-12 h-12 rounded-xl object-cover border border-amber-300 shrink-0">
          <div class="min-w-0 flex-1">
            <h4 class="text-sm font-black text-stone-900 leading-tight truncate" id="vipTargetName">Priya Sharma</h4>
            <p class="text-[10.5px] text-stone-600 leading-tight mt-0.5 truncate" id="vipTargetFather">श्री रमाकांत शर्मा (पिताजी)</p>
            <div class="flex items-center space-x-1 mt-1">
              <span class="text-[9.5px] font-mono text-emerald-800 font-extrabold bg-emerald-100 px-1.5 py-0.5 rounded border border-emerald-300">
                🔒 WhatsApp: <span id="vipMaskedPhone">+91 98260 •••••</span>
              </span>
            </div>
          </div>
        </div>

        <!-- Why VIP explanation -->
        <div class="bg-amber-50/80 rounded-2xl p-2.5 border border-amber-300 space-y-1">
          <div class="text-[11px] font-extrabold text-amber-950 flex items-center gap-1.5">
            <i class="fa-solid fa-lock text-amber-600"></i>
            <span>व्हाट्सएप पर बात करना VIP सर्विस क्यों है?</span>
          </div>
          <p class="text-[10px] text-stone-600 leading-relaxed">
            परिवारों और कन्या पक्ष की पूर्ण सुरक्षा हेतु सीधा WhatsApp व कॉलिंग नंबर केवल अधिकृत VIP सदस्यों को ही दिया जाता है।
          </p>
        </div>

        <!-- Plan Options Selection -->
        <div class="space-y-1.5">
          <div class="text-[10px] font-extrabold text-stone-700 uppercase tracking-wider">अनलॉक प्लान चुनें (1-क्लिक Pay):</div>
          
          <!-- Plan Option 1: ₹499 -->
          <label class="flex items-center justify-between p-2.5 rounded-xl border-2 border-emerald-500 bg-emerald-50/50 cursor-pointer transition hover:bg-emerald-50">
            <div class="flex items-center space-x-2">
              <input type="radio" name="vip_plan_choice" value="499" checked class="text-emerald-700 focus:ring-emerald-500">
              <div>
                <span class="text-xs font-black text-emerald-950 block">सिल्वर पास (Silver Pass)</span>
                <span class="text-[10px] text-stone-500">5 परिवारों के सीधे WhatsApp नंबर अनलॉक</span>
              </div>
            </div>
            <div class="text-right">
              <span class="text-xs font-black text-emerald-900 block">₹499</span>
              <span class="text-[9px] text-stone-400 line-through">₹999</span>
            </div>
          </label>

          <!-- Plan Option 2: ₹999 -->
          <label class="flex items-center justify-between p-2.5 rounded-xl border border-stone-200 bg-white cursor-pointer transition hover:border-amber-400 hover:bg-amber-50/30">
            <div class="flex items-center space-x-2">
              <input type="radio" name="vip_plan_choice" value="999" class="text-emerald-700 focus:ring-emerald-500">
              <div>
                <span class="text-xs font-black text-stone-900 block flex items-center gap-1">
                  <span>गोल्ड पास (Gold Pass)</span>
                  <span class="text-[8.5px] bg-amber-400 text-emerald-950 px-1 rounded font-bold">लोकप्रिय</span>
                </span>
                <span class="text-[10px] text-stone-500">15 WhatsApp नंबर + 3 माह VIP मुहर</span>
              </div>
            </div>
            <div class="text-right">
              <span class="text-xs font-black text-amber-700 block">₹999</span>
              <span class="text-[9px] text-stone-400 line-through">₹1999</span>
            </div>
          </label>
        </div>

        <!-- 1-Click Pay & Unlock Button -->
        <button type="button" onclick="executeVipUnlockPayment()" class="w-full py-2.5 px-3 rounded-xl bg-gradient-to-r from-amber-400 via-amber-500 to-amber-600 text-emerald-950 font-black text-xs shadow-md transition active:scale-95 flex items-center justify-center space-x-1.5 cursor-pointer">
          <i class="fa-solid fa-lock-open text-xs"></i>
          <span>Pay करें व WhatsApp तुरंत खोलें (UPI / QR)</span>
        </button>

        <!-- FREE Alternative Callout -->
        <div class="pt-1.5 border-t border-stone-200 text-center">
          <p class="text-[10.5px] text-stone-600 mb-1">
            💡 <strong>बिना पेमेंट किए बात करना चाहते हैं?</strong>
          </p>
          <button type="button" onclick="switchFromPayToFreeChat()" class="w-full py-2 px-3 rounded-xl bg-stone-100 hover:bg-emerald-50 border border-emerald-300 text-emerald-900 font-extrabold text-[11px] flex items-center justify-center space-x-1.5 transition cursor-pointer">
            <i class="fa-solid fa-comment-dots text-emerald-700"></i>
            <span>💬 ऐप के अंदर मुफ्त में चैट करें (Free In-App Chat)</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- ==================== MODAL 3: INSTANT CHAT MODAL ==================== -->
  <div id="chatModal" class="modal-backdrop fixed inset-0 z-[150] bg-black/60 backdrop-blur-xs flex items-center justify-center p-3">
    <div class="bg-white rounded-3xl max-w-sm w-full overflow-hidden shadow-2xl border-2 border-emerald-400 flex flex-col h-[520px] max-h-[90vh] animate-bounce-in">
      <!-- Chat Header -->
      <div class="bg-gradient-to-r from-[#064E3B] to-[#043E2F] text-white p-3 flex items-center justify-between border-b border-emerald-800 shrink-0">
        <div class="flex items-center space-x-2.5">
          <div class="relative w-9 h-9 rounded-full overflow-hidden border border-amber-300">
            <img id="chatHeaderImg" src="/assets/images/match_priya.jpg" alt="Candidate" class="w-full h-full object-cover">
          </div>
          <div>
            <h3 class="text-xs font-extrabold text-white flex items-center space-x-1" id="chatHeaderName">
              <span>Priya Sharma</span>
              <i class="fa-solid fa-circle-check text-blue-400 text-[10px]"></i>
            </h3>
            <span class="text-[9px] text-emerald-200 flex items-center space-x-1" id="chatOnlineIndicator">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
              <span>Online Now</span>
            </span>
          </div>
        </div>
        <div class="flex items-center space-x-2">
          <button onclick="openKundaliFromChat()" class="text-amber-300 hover:text-white text-xs px-2 py-1 rounded bg-white/10" title="कुंडली देखें">
            <i class="fa-solid fa-compass"></i>
          </button>
          <button onclick="closeChatModal()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs transition">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
      </div>

      <!-- Chat Messages Scroll Area -->
      <div class="flex-1 p-3 overflow-y-auto space-y-2.5 bg-[#F7FAF7] text-xs" id="chatMessagesBox">
        <div class="text-center my-1">
          <span class="px-2.5 py-0.5 rounded-full bg-stone-200/70 text-stone-600 text-[9px] font-semibold">Today</span>
        </div>
        <!-- Incoming message -->
        <div class="flex items-start space-x-1.5 max-w-[85%]">
          <div class="p-2.5 rounded-2xl rounded-tl-xs bg-white text-stone-800 shadow-2xs border border-stone-200 leading-relaxed text-[11px]">
            नमस्ते! धीरजा मैट्रिमोनी पर आपकी प्रोफाइल देखी, पारिवारिक विवरण बहुत अच्छा लगा। 🙏
            <span class="text-[8.5px] text-stone-400 block text-right mt-1">10:18 AM</span>
          </div>
        </div>
        <!-- Outgoing message -->
        <div class="flex items-start justify-end space-x-1.5 max-w-[85%] ml-auto">
          <div class="p-2.5 rounded-2xl rounded-tr-xs bg-[#064E3B] text-white shadow-2xs leading-relaxed text-[11px]">
            धन्यवाद जी! क्या हम दोनों परिवारों की बातचीत आगे बढ़ा सकते हैं?
            <span class="text-[8.5px] text-emerald-200 block text-right mt-1">10:20 AM <i class="fa-solid fa-check-double text-[8px] text-emerald-300"></i></span>
          </div>
        </div>
      </div>

      <!-- Quick Matrimonial Icebreakers -->
      <div class="px-2 py-1.5 bg-white border-t border-stone-100 flex items-center space-x-1 overflow-x-auto text-[9.5px] shrink-0">
        <button onclick="sendQuickReply('बायोडाटा पसंद आया! 😊')" class="px-2 py-1 rounded-full bg-emerald-50 text-emerald-800 border border-emerald-200 hover:bg-emerald-100 whitespace-nowrap">
          बायोडाटा पसंद आया! 😊
        </button>
        <button onclick="sendQuickReply('कुंडली मिलान देखें? 🧭')" class="px-2 py-1 rounded-full bg-amber-50 text-amber-800 border border-amber-200 hover:bg-amber-100 whitespace-nowrap">
          कुंडली मिलान देखें? 🧭
        </button>
        <button onclick="sendQuickReply('पारिवारिक कॉल कब करें? 📞')" class="px-2 py-1 rounded-full bg-stone-100 text-stone-700 hover:bg-stone-200 whitespace-nowrap">
          पारिवारिक कॉल कब करें? 📞
        </button>
      </div>

      <!-- Chat Input Area -->
      <div class="p-2.5 bg-white border-t border-stone-200 flex items-center space-x-2 shrink-0">
        <input type="text" id="chatInput" placeholder="अपना संदेश लिखें..." class="flex-1 px-3 py-2 rounded-xl bg-stone-100 border border-stone-200 text-stone-900 text-xs focus:outline-none focus:border-emerald-600 focus:bg-white" onkeydown="if(event.key==='Enter') sendMessage()">
        <button onclick="sendMessage()" class="w-9 h-9 rounded-xl bg-[#064E3B] hover:bg-[#055F46] text-white flex items-center justify-center transition shrink-0 shadow-sm">
          <i class="fa-solid fa-paper-plane text-xs"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- ==================== MODAL 4: NOTIFICATIONS DRAWER ==================== -->
  <div id="notificationsModal" class="modal-backdrop fixed inset-0 z-[150] bg-black/60 backdrop-blur-xs flex items-start justify-center p-3 pt-12">
    <div class="bg-white rounded-3xl max-w-sm w-full overflow-hidden shadow-2xl border-2 border-emerald-400 flex flex-col animate-bounce-in">
      <div class="bg-[#064E3B] text-white p-3.5 flex items-center justify-between">
        <div class="flex items-center space-x-2">
          <i class="fa-solid fa-bell text-amber-300"></i>
          <h3 class="text-xs font-bold">नवीनतम सूचनाएं (3 नई)</h3>
        </div>
        <button onclick="toggleNotificationsModal()" class="w-6 h-6 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      <div class="p-3 divide-y divide-stone-100 text-xs space-y-1">
        <div class="py-2 flex items-start space-x-2.5">
          <span class="w-7 h-7 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center shrink-0 text-xs">
            <i class="fa-solid fa-heart"></i>
          </span>
          <div>
            <p class="font-bold text-stone-900 leading-tight">नेहा वर्मा ने आपकी प्रोफाइल में रुचि दिखाई</p>
            <span class="text-[10px] text-stone-400">2 घंटे पहले</span>
          </div>
        </div>
        <div class="py-2 flex items-start space-x-2.5">
          <span class="w-7 h-7 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shrink-0 text-xs">
            <i class="fa-solid fa-comment-dots"></i>
          </span>
          <div>
            <p class="font-bold text-stone-900 leading-tight">अंजलि सिंह का नया संदेश आया है</p>
            <span class="text-[10px] text-stone-400">कल 08:42 PM</span>
          </div>
        </div>
        <div class="py-2 flex items-start space-x-2.5">
          <span class="w-7 h-7 rounded-full bg-teal-100 text-teal-600 flex items-center justify-center shrink-0 text-xs">
            <i class="fa-solid fa-eye"></i>
          </span>
          <div>
            <p class="font-bold text-stone-900 leading-tight">प्रिया शर्मा ने आपकी प्रोफाइल 3 बार देखी</p>
            <span class="text-[10px] text-stone-400">आज 10:15 AM</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ==================== MODAL 5: ROYAL GOLDEN BIODATA (1-CLICK PDF) ==================== -->
  <div id="royalBiodataModal" class="modal-backdrop fixed inset-0 z-[160] bg-black/80 backdrop-blur-sm flex items-center justify-center p-2 sm:p-4 overflow-y-auto">
    <div class="bg-[#102A21] rounded-3xl max-w-2xl w-full overflow-hidden shadow-2xl border-2 border-[#D4AF37] flex flex-col max-h-[96vh] animate-bounce-in my-auto">
      
      <!-- Top Action Bar -->
      <div class="bg-gradient-to-r from-[#064E3B] via-[#0D5F48] to-[#043628] text-white p-3 sm:p-3.5 flex items-center justify-between border-b-2 border-amber-400">
        <div class="flex items-center space-x-2">
          <div class="w-8 h-8 rounded-full bg-amber-400/20 border border-amber-300 flex items-center justify-center text-amber-300 text-xs">
            <i class="fa-solid fa-crown"></i>
          </div>
          <div>
            <h3 class="font-cinzel text-xs sm:text-sm font-bold text-amber-200">रॉयल बायोडाटा (सुनहरा बॉर्डर)</h3>
            <p class="text-[10.5px] text-emerald-100 font-sans" id="modalBiodataHeaderSub">प्रिया शर्मा • 1-क्लिक PDF डाउनलोड</p>
          </div>
        </div>

        <div class="flex items-center space-x-1.5 sm:space-x-2">
          <!-- 1-Click Instant Download Button -->
          <button id="btnModalDownloadPdf" onclick="downloadModalRoyalBiodata()" class="px-3 sm:px-4 py-1.5 rounded-full bg-gradient-to-r from-amber-400 via-amber-500 to-amber-600 text-[#064E3B] font-black text-[11px] sm:text-xs flex items-center space-x-1.5 shadow-md hover:brightness-105 active:scale-95 transition cursor-pointer">
            <i class="fa-solid fa-cloud-arrow-down text-xs"></i>
            <span>⚡ 1-क्लिक डाउनलोड PDF</span>
          </button>

          <!-- Open in Standalone Tab -->
          <button onclick="openCandidateRoyalPage()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-amber-200 text-xs transition" title="अलग पेज पर खोलें">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
          </button>

          <!-- Close Modal -->
          <button onclick="closeRoyalBiodataModal()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs transition" title="बंद करें">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
      </div>

      <!-- Download Toast inside Modal -->
      <div id="modalPdfProgress" class="hidden bg-amber-500 text-amber-950 px-4 py-2 text-xs font-bold flex items-center justify-between border-b border-amber-600 animate-pulse">
        <span class="flex items-center space-x-2">
          <i class="fa-solid fa-spinner fa-spin"></i>
          <span>✨ सुनहरा बॉर्डर वाला PDF बायोडाटा तैयार हो रहा है...</span>
        </span>
        <span class="text-[10px] font-mono">हाई-रेजोल्यूशन</span>
      </div>

      <!-- Scrollable Biodata Sheet Wrapper -->
      <div class="p-2 sm:p-4 overflow-y-auto flex-1 bg-stone-900/60 flex justify-center">
        <!-- The Printable Sheet with Golden Border -->
        <div id="modalRoyalSheet" class="w-full max-w-[620px] bg-[#FFFDF9] rounded-xl shadow-2xl relative select-none">
          <div class="royal-border-outer">
            <div class="royal-border-middle">
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

                <div class="royal-watermark"></div>

                <!-- Invocation & Title -->
                <div class="relative z-10 text-center pb-2 border-b-2 border-[#D4AF37]">
                  <div class="text-[#9A1B1E] font-extrabold text-xs font-rozha tracking-widest">
                    ॥ 卐 श्री गणेशाय नमः 卐 ॥
                  </div>
                  <h2 class="font-cinzel text-base sm:text-lg font-black text-[#064E3B] tracking-wider mt-0.5 leading-none">
                    DHEERAJA ROYAL MATRIMONY
                  </h2>
                  <p class="text-[10px] text-amber-800 font-bold tracking-wider mt-0.5">
                    पवित्र सनातन विवाह संगम • 100% सत्यापित बायोडाटा
                  </p>
                  <div class="mt-1 flex items-center justify-center space-x-2 text-[9px] font-bold">
                    <span class="px-2 py-0.5 bg-amber-100 text-amber-900 rounded-full border border-amber-300 font-mono" id="rbCandidateId">ID: DM10028</span>
                    <span class="px-2 py-0.5 bg-emerald-100 text-emerald-900 rounded-full border border-emerald-300">✓ सत्यापित सदस्य</span>
                    <span class="px-2 py-0.5 bg-stone-100 text-stone-700 rounded-full border border-stone-300" id="rbCandidateGuna">28/36 गुण मिलान</span>
                  </div>
                </div>

                <!-- Spotlight Candidate & Photo -->
                <div class="relative z-10 mt-3 flex items-start gap-3 pb-2.5 border-b border-[#E5D5BA]">
                  <div class="shrink-0 text-center">
                    <div class="photo-gold-frame">
                      <img id="rbCandidatePhoto" src="/assets/images/match_priya.jpg" alt="Candidate" class="w-[98px] h-[120px] object-cover rounded-lg border border-white">
                    </div>
                  </div>
                  <div class="flex-1 min-w-0">
                    <span class="inline-block px-2 py-0.5 rounded-full bg-amber-50 border border-amber-300 text-[#9A1B1E] text-[9.5px] font-bold" id="rbCandidatePrefix">
                      सौभाग्यकांक्षिणी (सौ.)
                    </span>
                    <h3 class="text-base sm:text-lg font-black text-[#064E3B] leading-tight font-rozha truncate mt-0.5" id="rbCandidateName">
                      प्रिया शर्मा (Priya Sharma)
                    </h3>
                    <div class="mt-1.5 grid grid-cols-2 gap-1.5 text-[10.5px]">
                      <div class="bg-amber-50/70 p-1.5 rounded border border-amber-200">
                        <span class="text-[9px] text-amber-800 font-bold block">आयु व कद</span>
                        <span class="font-extrabold text-stone-900" id="rbCandidateAgeHeight">26 वर्ष | 5'4"</span>
                      </div>
                      <div class="bg-emerald-50/70 p-1.5 rounded border border-emerald-200">
                        <span class="text-[9px] text-emerald-800 font-bold block">जाति / समाज</span>
                        <span class="font-extrabold text-stone-900 truncate block" id="rbCandidateCaste">सनाढ्य ब्राह्मण</span>
                      </div>
                      <div class="bg-amber-50/70 p-1.5 rounded border border-amber-200">
                        <span class="text-[9px] text-amber-800 font-bold block">उच्चतम शिक्षा</span>
                        <span class="font-extrabold text-stone-900 truncate block" id="rbCandidateEdu">B.Tech (CS)</span>
                      </div>
                      <div class="bg-emerald-50/70 p-1.5 rounded border border-emerald-200">
                        <span class="text-[9px] text-emerald-800 font-bold block">वार्षिक पैकेज</span>
                        <span class="font-extrabold text-[#064E3B] truncate block" id="rbCandidateIncome">₹ 14.50 LPA</span>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- 1. व्यक्तिगत विवरण -->
                <div class="relative z-10 mt-2 mb-2.5">
                  <div class="section-banner">
                    <span class="font-bold text-[11px] font-rozha tracking-wider flex items-center space-x-1">
                      <i class="fa-solid fa-user-check text-amber-300 text-[10px]"></i>
                      <span>१. व्यक्तिगत विवरण (Personal Details)</span>
                    </span>
                    <span class="text-[9px] opacity-75">Confidential</span>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-2 bg-white/70 p-1.5 rounded border border-amber-100">
                    <div class="attr-row"><span class="attr-label">जन्म तिथि</span><span class="attr-sep">:</span><span class="attr-val" id="rbDob">12-05-1998</span></div>
                    <div class="attr-row"><span class="attr-label">जन्म समय</span><span class="attr-sep">:</span><span class="attr-val" id="rbBirthTime">07:45 AM</span></div>
                    <div class="attr-row"><span class="attr-label">जन्म स्थान</span><span class="attr-sep">:</span><span class="attr-val" id="rbBirthPlace">Indore (M.P.)</span></div>
                    <div class="attr-row"><span class="attr-label">वैवाहिक स्थिति</span><span class="attr-sep">:</span><span class="attr-val" id="rbMarital">अविवाहित</span></div>
                    <div class="attr-row"><span class="attr-label">खान-पान</span><span class="attr-sep">:</span><span class="attr-val" id="rbDiet">शाकाहारी</span></div>
                    <div class="attr-row"><span class="attr-label">रंग-रूप</span><span class="attr-sep">:</span><span class="attr-val" id="rbComplexion">गोरा</span></div>
                  </div>
                </div>

                <!-- 2. धार्मिक एवं कुल विवरण -->
                <div class="relative z-10 mb-2.5">
                  <div class="section-banner">
                    <span class="font-bold text-[11px] font-rozha tracking-wider flex items-center space-x-1">
                      <i class="fa-solid fa-om text-amber-300 text-[10px]"></i>
                      <span>२. धार्मिक एवं कुल विवरण (Astro & Gotra)</span>
                    </span>
                    <span class="text-[9px] opacity-75">Kundali Compatible</span>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-2 bg-white/70 p-1.5 rounded border border-amber-100">
                    <div class="attr-row"><span class="attr-label">धर्म</span><span class="attr-sep">:</span><span class="attr-val" id="rbReligion">सनातन हिन्दू</span></div>
                    <div class="attr-row"><span class="attr-label">समाज / जाति</span><span class="attr-sep">:</span><span class="attr-val" id="rbCasteFull">ब्राह्मण</span></div>
                    <div class="attr-row"><span class="attr-label">गोत्र (स्वयं/पिता)</span><span class="attr-sep">:</span><span class="attr-val text-[#064E3B] font-black" id="rbGotra">कश्यप</span></div>
                    <div class="attr-row"><span class="attr-label">मूल गोत्र (ऐच्छिक)</span><span class="attr-sep">:</span><span class="attr-val" id="rbOriginGotra">शांडिल्य</span></div>
                    <div class="attr-row"><span class="attr-label">राशि व नक्षत्र</span><span class="attr-sep">:</span><span class="attr-val" id="rbRashi">कन्या (हस्त)</span></div>
                    <div class="attr-row"><span class="attr-label">मांगलिक स्थिति</span><span class="attr-sep">:</span><span class="attr-val text-emerald-800" id="rbManglik">अमांगलिक</span></div>
                  </div>
                </div>

                <!-- 3. शैक्षणिक एवं व्यावसायिक विवरण -->
                <div class="relative z-10 mb-2.5">
                  <div class="section-banner">
                    <span class="font-bold text-[11px] font-rozha tracking-wider flex items-center space-x-1">
                      <i class="fa-solid fa-graduation-cap text-amber-300 text-[10px]"></i>
                      <span>३. शैक्षणिक एवं व्यावसायिक विवरण (Career)</span>
                    </span>
                    <span class="text-[9px] opacity-75">Professional</span>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-2 bg-white/70 p-1.5 rounded border border-amber-100">
                    <div class="attr-row"><span class="attr-label">उच्चतम शिक्षा</span><span class="attr-sep">:</span><span class="attr-val" id="rbEduDetail">B.Tech (CS)</span></div>
                    <div class="attr-row"><span class="attr-label">संस्थान</span><span class="attr-sep">:</span><span class="attr-val" id="rbCollege">SGSITS</span></div>
                    <div class="attr-row"><span class="attr-label">पद / पेशा</span><span class="attr-sep">:</span><span class="attr-val" id="rbOcc">सॉफ्टवेयर इंजीनियर</span></div>
                    <div class="attr-row"><span class="attr-label">कार्यरत कंपनी</span><span class="attr-sep">:</span><span class="attr-val" id="rbCompany">MNC Tech</span></div>
                    <div class="attr-row"><span class="attr-label">वार्षिक आय</span><span class="attr-sep">:</span><span class="attr-val text-[#064E3B] font-black" id="rbIncomeFull">₹ 14.5 LPA</span></div>
                    <div class="attr-row"><span class="attr-label">कार्य स्थल</span><span class="attr-sep">:</span><span class="attr-val" id="rbWorkCity">इन्दौर / बेंगलुरु</span></div>
                  </div>
                </div>

                <!-- 4. पारिवारिक पृष्ठभूमि -->
                <div class="relative z-10 mb-2.5">
                  <div class="section-banner">
                    <span class="font-bold text-[11px] font-rozha tracking-wider flex items-center space-x-1">
                      <i class="fa-solid fa-people-roof text-amber-300 text-[10px]"></i>
                      <span>४. पारिवारिक पृष्ठभूमि (Family Background)</span>
                    </span>
                    <span class="text-[9px] opacity-75">Cultured</span>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-2 bg-white/70 p-1.5 rounded border border-amber-100">
                    <div class="attr-row"><span class="attr-label">पूज्य पिताश्री</span><span class="attr-sep">:</span><span class="attr-val" id="rbFatherName">डॉ. रमाकांत शर्मा</span></div>
                    <div class="attr-row"><span class="attr-label">पिता का व्यवसाय</span><span class="attr-sep">:</span><span class="attr-val" id="rbFatherOcc">Chief Medical Officer</span></div>
                    <div class="attr-row"><span class="attr-label">पूज्या माताजी</span><span class="attr-sep">:</span><span class="attr-val" id="rbMotherName">श्रीमती सुनीता शर्मा</span></div>
                    <div class="attr-row"><span class="attr-label">भाई-बहन</span><span class="attr-sep">:</span><span class="attr-val" id="rbSiblings">1 भाई (IIT Delhi)</span></div>
                    <div class="attr-row"><span class="attr-label">मूल निवास</span><span class="attr-sep">:</span><span class="attr-val" id="rbNative">इन्दौर / उज्जैन</span></div>
                    <div class="attr-row"><span class="attr-label">पारिवारिक मूल्य</span><span class="attr-sep">:</span><span class="attr-val" id="rbFamilyType">संयुक्त व संस्कारी</span></div>
                  </div>
                </div>

                <!-- 5. संपर्क एवं आवास -->
                <div class="relative z-10 mb-2">
                  <div class="section-banner">
                    <span class="font-bold text-[11px] font-rozha tracking-wider flex items-center space-x-1">
                      <i class="fa-solid fa-address-book text-amber-300 text-[10px]"></i>
                      <span>५. संपर्क सूत्र एवं पता (Contact & Residence)</span>
                    </span>
                    <span class="text-[9px] opacity-75">Verified</span>
                  </div>
                  <div class="bg-amber-50/70 p-2 rounded border border-amber-200 text-[11px]">
                    <div class="flex items-center justify-between">
                      <div>
                        <span class="text-[9px] font-bold text-amber-800 uppercase">अभिभावक संपर्क:</span>
                        <p class="font-extrabold text-stone-900" id="rbContactPerson">डॉ. रमाकांत शर्मा</p>
                      </div>
                      <div class="text-right">
                        <span class="text-[9px] font-bold text-amber-800 uppercase">मोबाइल नंबर:</span>
                        <p class="font-mono font-bold text-xs text-[#064E3B]" id="rbPhone">+91 98260 41289</p>
                      </div>
                    </div>
                    <div class="mt-1 pt-1 border-t border-amber-200/60 text-[10.5px]">
                      <span class="font-bold text-stone-700">निवास पता: </span>
                      <span class="text-stone-800" id="rbAddress">142, साकेत नगर, इन्दौर (म.प्र.)</span>
                    </div>
                  </div>
                </div>

                <!-- Footer & Official Stamp -->
                <div class="relative z-10 pt-2 border-t-2 border-[#D4AF37] flex items-center justify-between text-[10px] text-stone-600">
                  <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 rounded-full border border-amber-600 border-dashed flex items-center justify-center text-[6px] font-black text-amber-900 leading-none bg-amber-100 text-center">
                      ★ DHEERAJA ★<br>VERIFIED
                    </div>
                    <div>
                      <span class="font-cinzel font-bold text-[#064E3B] block leading-none">धीरजा रॉयल मैट्रिमोनी™</span>
                      <span class="text-[8.5px] text-stone-500">अखंड सनातन वैवाहिक परंपरा</span>
                    </div>
                  </div>
                  <div class="text-right text-[8.5px] text-stone-500 font-mono">
                    <span>डिजिटल सत्यापित बायोडाटा</span><br>
                    <span>www.dheerajamatrimony.com</span>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Bottom Action Strip inside Modal -->
      <div class="bg-[#0A2018] p-2.5 sm:p-3 border-t border-amber-400/40 flex items-center justify-between">
        <div class="text-emerald-200 text-xs flex items-center space-x-1.5">
          <i class="fa-solid fa-shield-check text-amber-400"></i>
          <span class="hidden sm:inline">100% सत्यापित एवं सुनहरे बॉर्डर वाला आधिकारिक बायोडाटा</span>
          <span class="sm:hidden">100% सत्यापित बायोडाटा</span>
        </div>
        <div class="flex items-center space-x-2">
          <button onclick="closeRoyalBiodataModal()" class="px-3 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-white text-xs font-semibold transition">
            बंद करें
          </button>
          <button onclick="downloadModalRoyalBiodata()" class="px-4 py-1.5 rounded-full bg-gradient-to-r from-amber-400 to-amber-600 text-[#064E3B] font-extrabold text-xs shadow-md transition active:scale-95 flex items-center space-x-1.5 cursor-pointer">
            <i class="fa-solid fa-cloud-arrow-down"></i>
            <span>⚡ 1-क्लिक PDF डाउनलोड</span>
          </button>
        </div>
      </div>

    </div>
  </div>

  <!-- ==================== JAVASCRIPT LOGIC ==================== -->
  <script>
    // Desktop Viewport Switcher
    function setViewport(width) {
      const shell = document.getElementById('matchesShell');
      shell.style.maxWidth = width;
    }

    // Show Toast
    function showToast(title, msg, iconClass = 'fa-check') {
      const toast = document.getElementById('actionToast');
      document.getElementById('toastTitle').textContent = title;
      document.getElementById('toastMsg').textContent = msg;
      document.getElementById('toastIcon').className = 'fa-solid ' + iconClass;
      toast.classList.add('show');
      setTimeout(() => {
        toast.classList.remove('show');
      }, 3000);
    }

    // 8-Filter Pills Logic
    // 8-Filter Pills Logic + Dedicated Samaj Group Filter
    let currentSamajFilter = <?= json_encode($user_samaj ?? 'ब्राह्मण') ?>;
    let currentFilter = 'all';

    const ALL_SAMAJ_LIST = [
      { name: 'ब्राह्मण', label: 'ब्राह्मण (Brahmin)', icon: '🕉️' },
      { name: 'माहेश्वरी', label: 'माहेश्वरी (Maheshwari)', icon: '💎' },
      { name: 'अग्रवाल', label: 'अग्रवाल (Agarwal)', icon: '🪙' },
      { name: 'राजपूत', label: 'राजपूत (Rajput)', icon: '⚔️' },
      { name: 'जैन', label: 'जैन (Jain)', icon: '🪷' },
      { name: 'जाट', label: 'जाट (Jat)', icon: '🌾' },
      { name: 'यादव', label: 'यादव (Yadav)', icon: '🦚' },
      { name: 'गुर्जर', label: 'गुर्जर (Gurjar)', icon: '🛡️' },
      { name: 'सोनी', label: 'सोनी (Soni)', icon: '✨' },
      { name: 'सैनी', label: 'सैनी (Saini)', icon: '🌸' },
      { name: 'पाटीदार', label: 'पाटीदार (Patidar)', icon: '🚜' },
      { name: 'बिश्नोई', label: 'बिश्नोई (Bishnoi)', icon: '🌾' },
      { name: 'सिख', label: 'सिख (Sikh)', icon: 'ੴ' },
      { name: 'सिंधी', label: 'सिंधी (Sindhi)', icon: '🌟' },
      { name: 'कायस्थ', label: 'कायस्थ (Kayastha)', icon: '📜' },
      { name: 'all', label: 'सभी समाज (All)', icon: '🌐' }
    ];

    function renderSamajDrawerPills() {
      const container = document.getElementById('samajQuickPills');
      if (!container) return;
      container.innerHTML = '';

      ALL_SAMAJ_LIST.forEach(s => {
        const btn = document.createElement('button');
        btn.type = 'button';
        const isActive = (currentSamajFilter === s.name || (s.name === 'all' && currentSamajFilter === 'all'));
        btn.className = `text-[9.5px] font-bold px-2 py-1 rounded-lg border transition flex items-center space-x-1 cursor-pointer ${
          isActive 
            ? 'bg-amber-400 text-emerald-950 border-amber-300 shadow-xs' 
            : 'bg-white/10 hover:bg-white/20 text-stone-200 border-white/20'
        }`;
        btn.innerHTML = `<span>${s.icon}</span><span>${s.label}</span>`;
        btn.onclick = () => {
          filterMatchesBySamaj(s.name);
          toggleSamajDropdown();
        };
        container.appendChild(btn);
      });
    }

    function toggleSamajDropdown() {
      const drawer = document.getElementById('samajSwitcherDrawer');
      if (drawer) {
        drawer.classList.toggle('hidden');
      }
    }

    function filterMatchesBySamaj(samajName) {
      currentSamajFilter = samajName;
      const titleEl = document.getElementById('activeSamajTitle');
      const subEl = document.getElementById('activeSamajSubtitle');
      const displayTitle = (samajName === 'all') ? 'समस्त समाज' : samajName;

      if (titleEl) titleEl.textContent = displayTitle;
      if (subEl) subEl.textContent = displayTitle;

      renderSamajDrawerPills();
      applyCombinedFilters();
      showToast('समाज ग्रुप सक्रिय 🔒', `केवल ${displayTitle} समाज के रिश्ते दिख रहे हैं।`, 'fa-shield-halved');
    }

    function filterByCategory(cat, btnElem) {
      currentFilter = cat;
      // Update pills styles
      document.querySelectorAll('.filter-pill').forEach(pill => {
        pill.classList.remove('active');
      });
      if (btnElem) {
        btnElem.classList.add('active');
      } else {
        const target = document.getElementById('pill-' + cat);
        if (target) target.classList.add('active');
      }
      applyCombinedFilters();
    }

    function applyCombinedFilters() {
      const cards = document.querySelectorAll('.candidate-card');
      let visibleCount = 0;

      cards.forEach(card => {
        const cardCaste = (card.getAttribute('data-caste') || '').toLowerCase().trim();
        const cardCats = card.getAttribute('data-categories') || '';

        // Samaj check
        let matchSamaj = true;
        if (currentSamajFilter && currentSamajFilter !== 'all') {
          const target = currentSamajFilter.toLowerCase().trim();
          matchSamaj = cardCaste.includes(target) || target.includes(cardCaste);
        }

        // Category check
        const matchCategory = (currentFilter === 'all' || cardCats.includes(currentFilter));

        if (matchSamaj && matchCategory) {
          card.style.display = 'block';
          visibleCount++;
        } else {
          card.style.display = 'none';
        }
      });

      // Update count indicators
      const countNumberEl = document.getElementById('samajCountNumber');
      if (countNumberEl) countNumberEl.textContent = visibleCount;

      const banner = document.getElementById('filterStatusText');
      const catNames = {
        'all': 'सभी योग्य रिश्ते (All Matches)',
        'viewed_me': 'किसने मुझे देखा (Who Viewed Me)',
        'interests_received': 'रुचि प्राप्त (Interests Received)',
        'interests_sent': 'रुचि भेजी (Interests Sent)',
        'mutual': 'आपसी मिलान (Mutual Matches)',
        'chat_history': 'चैट इतिहास (Chat History)',
        'shortlisted': 'पसंदीदा प्रोफाइल (Shortlisted)',
        'verified': 'सत्यापित रिश्ते (100% Verified)'
      };

      if (banner) {
        const activeName = (currentSamajFilter === 'all') ? 'समस्त समाज' : `${currentSamajFilter} समाज`;
        banner.innerHTML = `<i class="fa-solid fa-shield-halved text-emerald-700 mr-1.5"></i> <strong>${activeName}:</strong> ${visibleCount} प्रोफाइल (${catNames[currentFilter] || currentFilter})`;
      }
    }

    // Send Interest Button Click (Connected to Backend Database & Notifications)
    function sendInterest(btn, name) {
      if (btn.classList.contains('sent')) {
        showToast('पहले से भेजी गई है', `${name} को रुचि पहले ही भेजी जा चुकी है।`, 'fa-info');
        return;
      }
      btn.classList.add('sent');
      btn.innerHTML = `<i class="fa-solid fa-circle-check text-[9px]"></i><span>Interest Sent</span>`;
      showToast('रुचि भेजी गई! ❤️', `${name} को आपकी रुचि एवं बायोडाटा सफलतापूर्वक भेज दिया गया है।`, 'fa-heart');

      // Asynchronous API Persist to Database & Admin Mailer
      fetch('/matches/interest', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'name=' + encodeURIComponent(name)
      }).catch(() => {});
    }

    // Skip Card
    function skipCard(btn, name) {
      const card = btn.closest('.candidate-card');
      if (card) {
        card.style.transition = 'all 0.3s ease';
        card.style.opacity = '0';
        card.style.transform = 'translateX(60px)';
        setTimeout(() => {
          card.remove();
          showToast('प्रोफाइल हटाई गई', `${name} की प्रोफाइल सूची से हटा दी गई।`, 'fa-xmark');
        }, 300);
      }
    }

    // Share Profile
    function shareProfile(name, loc) {
      if (navigator.share) {
        navigator.share({
          title: `Dheeraja Matrimony - ${name}`,
          text: `${name} (${loc}) की रॉयल बायोडाटा प्रोफाइल देखें:`,
          url: window.location.href
        }).catch(() => {});
      } else {
        navigator.clipboard.writeText(window.location.href);
        showToast('लिंक कॉपी किया गया 📋', `${name} की प्रोफाइल लिंक क्लिपबोर्ड पर कॉपी हो गया है।`, 'fa-copy');
      }
    }

    // Profile Actions Menu (Shortlist Connected to Backend)
    function openProfileActions(name, id) {
      const choice = confirm(`${name} के लिए विकल्प:\n\n1. OK दबाएं - पसंदीदा (Shortlist) करें\n2. Cancel दबाएं - बंद करें`);
      if (choice) {
        showToast('पसंदीदा सूची में जोड़ा गया ⭐', `${name} को आपकी शॉर्टलिस्ट में सुरक्षित कर लिया गया है।`, 'fa-star');
        fetch('/matches/shortlist', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: 'target_id=' + encodeURIComponent(id)
        }).catch(() => {});
      }
    }

    // Kundali Milan Modal Controls
    let activeCandidate = {};
    function openKundaliModal(name, score, gotra, caste, loc) {
      activeCandidate = { name, score, gotra, caste, loc };
      document.getElementById('kmCandidateName').textContent = `${name} (${gotra} गोत्र) & आप`;
      document.getElementById('kmScoreNumber').textContent = score;
      const pct = Math.round((score / 36) * 100);
      document.getElementById('kmPercent').textContent = pct + '%';
      
      const verdict = document.getElementById('kmScoreVerdict');
      if (score >= 26) {
        verdict.textContent = 'अति उत्तम मिलान (Highly Auspicious)';
        verdict.className = 'inline-block mt-1 px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-extrabold';
      } else if (score >= 18) {
        verdict.textContent = 'शुभ मिलान (Good Match)';
        verdict.className = 'inline-block mt-1 px-2 py-0.5 rounded-full bg-amber-100 text-amber-800 text-[10px] font-extrabold';
      } else {
        verdict.textContent = 'सामान्य मिलान (Average Match)';
        verdict.className = 'inline-block mt-1 px-2 py-0.5 rounded-full bg-stone-100 text-stone-800 text-[10px] font-extrabold';
      }

      document.getElementById('kundaliModal').classList.add('open');
    }
    function closeKundaliModal() {
      document.getElementById('kundaliModal').classList.remove('open');
    }
    function downloadKundaliReport() {
      showToast('कुंडली रिपोर्ट तैयार! 📄', `${activeCandidate.name || 'कैंडिडेट'} की 36 गुण अष्टकूट रिपोर्ट PDF डाउनलोड हो रही है...`, 'fa-file-pdf');
      setTimeout(() => {
        window.print();
      }, 600);
    }

    // VIP & WhatsApp Contact System (Freemium & VIP Paywall)
    let isVipUser = false; // default freemium status
    let currentContactData = { name: 'Priya Sharma', phone: '+91 98260 41289', father: 'श्री रमाकांत शर्मा (पिताजी)', loc: 'Indore, MP', photo: '/assets/images/match_priya.jpg' };

    function openContactModal(name, phone, father, loc, photo) {
      currentContactData = {
        name: name || 'कैंडिडेट',
        phone: phone || '+91 98260 41289',
        father: father || 'श्री रमाकांत शर्मा (पिताजी)',
        loc: loc || 'Indore, MP',
        photo: photo || '/assets/images/match_priya.jpg'
      };

      document.getElementById('contactCandidateName').textContent = currentContactData.name;
      document.getElementById('contactGuardianName').textContent = currentContactData.father;
      document.getElementById('contactLocationText').textContent = '📍 ' + currentContactData.loc;

      const phoneEl = document.getElementById('contactPhoneNumber');
      const badgeVip = document.getElementById('contactVipStatusBadge');
      
      if (isVipUser) {
        phoneEl.textContent = currentContactData.phone;
        if (badgeVip) badgeVip.innerHTML = '<i class="fa-solid fa-crown text-amber-500 mr-1"></i><span class="text-emerald-700 font-extrabold">VIP सदस्य • अनलॉक</span>';
      } else {
        const masked = currentContactData.phone.length > 7 ? currentContactData.phone.substring(0, 8) + ' •••••' : '+91 98260 •••••';
        phoneEl.textContent = masked;
        if (badgeVip) badgeVip.innerHTML = '<i class="fa-solid fa-lock text-amber-600 mr-1"></i><span class="text-amber-900 font-extrabold cursor-pointer" onclick="openVipWhatsappPayModal()">VIP अनलॉक आवश्यक</span>';
      }

      document.getElementById('contactModal').classList.add('open');
    }

    function closeContactModal() {
      document.getElementById('contactModal').classList.remove('open');
    }

    function handleWhatsappClickFromContactModal() {
      if (isVipUser) {
        const cleanPhone = currentContactData.phone.replace(/[^0-9]/g, '');
        window.open(`https://wa.me/${cleanPhone}?text=Namaste!%20I%20saw%20your%20profile%20of%20${encodeURIComponent(currentContactData.name)}%20on%20Dheeraja%20Matrimony.`, '_blank');
      } else {
        closeContactModal();
        openVipWhatsappPayModal(currentContactData.name, currentContactData.phone, currentContactData.father, currentContactData.photo);
      }
    }

    function handlePhoneClickFromContactModal() {
      if (isVipUser) {
        window.location.href = `tel:${currentContactData.phone}`;
      } else {
        closeContactModal();
        openVipWhatsappPayModal(currentContactData.name, currentContactData.phone, currentContactData.father, currentContactData.photo);
      }
    }

    function handleCardWhatsappClick(name, phone, father, photo) {
      if (isVipUser) {
        const cleanPhone = phone.replace(/[^0-9]/g, '');
        window.open(`https://wa.me/${cleanPhone}?text=Namaste!%20I%20saw%20your%20profile%20of%20${encodeURIComponent(name)}%20on%20Dheeraja%20Matrimony.`, '_blank');
      } else {
        openVipWhatsappPayModal(name, phone, father, photo);
      }
    }

    function openVipWhatsappPayModal(name, phone, father, photo) {
      const cName = name || currentContactData.name || 'कैंडिडेट';
      const cPhone = phone || currentContactData.phone || '+91 98260 41289';
      const cFather = father || currentContactData.father || 'श्री रमाकांत शर्मा (पिताजी)';
      const cPhoto = photo || currentContactData.photo || '/assets/images/match_priya.jpg';

      currentContactData = { name: cName, phone: cPhone, father: cFather, loc: currentContactData.loc || '', photo: cPhoto };

      const nameEl = document.getElementById('vipTargetName');
      if (nameEl) nameEl.textContent = cName;

      const fatherEl = document.getElementById('vipTargetFather');
      if (fatherEl) fatherEl.textContent = cFather;

      const photoEl = document.getElementById('vipTargetPhoto');
      if (photoEl) photoEl.src = cPhoto;

      const maskedPhone = cPhone.length > 7 ? cPhone.substring(0, 8) + ' •••••' : '+91 98260 •••••';
      const maskedPhoneEl = document.getElementById('vipMaskedPhone');
      if (maskedPhoneEl) maskedPhoneEl.textContent = maskedPhone;

      document.getElementById('vipWhatsappPayModal').classList.add('open');
    }

    function closeVipWhatsappModal() {
      document.getElementById('vipWhatsappPayModal').classList.remove('open');
    }

    function switchFromPayToFreeChat() {
      closeVipWhatsappModal();
      openChatModal(currentContactData.name, currentContactData.photo, true);
      showToast('मुफ्त संदेश फोल्डर 💬', `${currentContactData.name} के साथ ऐप में 100% फ्री सुरक्षित चैट शुरू हो गई है।`, 'fa-comment-dots');
    }

    function executeVipUnlockPayment() {
      const selectedPlan = document.querySelector('input[name="vip_plan_choice"]:checked')?.value || '499';
      showToast('सुरक्षित पेमेंट गेटवे 💳', `₹${selectedPlan} का पेमेंट प्रोसेस हो रहा है (UPI / QR)...`, 'fa-shield-halved');
      
      setTimeout(() => {
        isVipUser = true;
        closeVipWhatsappModal();
        showToast('VIP सदस्यता सक्रिय! 🎉', `बधाई हो! अब आप सीधे WhatsApp व फोन कॉल कर सकते हैं।`, 'fa-crown');
        
        // Open WhatsApp directly
        const cleanPhone = currentContactData.phone.replace(/[^0-9]/g, '');
        window.open(`https://wa.me/${cleanPhone}?text=Namaste!%20I%20saw%20your%20profile%20of%20${encodeURIComponent(currentContactData.name)}%20on%20Dheeraja%20Matrimony.`, '_blank');
      }, 1200);
    }

    function copyPhone() {
      if (!isVipUser) {
        showToast('VIP सुविधा 🔒', 'पूरा नंबर कॉपी करने के लिए VIP प्लान अनलॉक करें।', 'fa-lock');
        openVipWhatsappPayModal();
        return;
      }
      const phone = document.getElementById('contactPhoneNumber').textContent;
      navigator.clipboard.writeText(phone);
      showToast('नंबर कॉपी हुआ 📞', `${phone} क्लिपबोर्ड पर सुरक्षित हो गया है।`, 'fa-copy');
    }

    // Chat Modal Controls
    let activeChatName = '';
    function openChatModal(name, photo, isOnline) {
      activeChatName = name;
      document.getElementById('chatHeaderName').innerHTML = `<span>${name}</span> <i class="fa-solid fa-circle-check text-blue-400 text-[10px]"></i>`;
      document.getElementById('chatHeaderImg').src = photo;
      const ind = document.getElementById('chatOnlineIndicator');
      if (isOnline) {
        ind.innerHTML = `<span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span><span>Online Now</span>`;
      } else {
        ind.innerHTML = `<span class="w-1.5 h-1.5 rounded-full bg-stone-400"></span><span>Active 2h ago</span>`;
      }
      document.getElementById('chatModal').classList.add('open');
    }
    function closeChatModal() {
      document.getElementById('chatModal').classList.remove('open');
    }
    function openKundaliFromChat() {
      closeChatModal();
      openKundaliModal(activeChatName, 28, 'Kashyap', 'Brahmin', 'Indore');
    }
    function sendMessage() {
      const input = document.getElementById('chatInput');
      const text = input.value.trim();
      if (!text) return;

      const box = document.getElementById('chatMessagesBox');
      const now = new Date();
      const timeStr = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

      // Append my message
      const msgDiv = document.createElement('div');
      msgDiv.className = 'flex items-start justify-end space-x-1.5 max-w-[85%] ml-auto animate-bounce-in';
      msgDiv.innerHTML = `
        <div class="p-2.5 rounded-2xl rounded-tr-xs bg-[#064E3B] text-white shadow-2xs leading-relaxed text-[11px]">
          ${text}
          <span class="text-[8.5px] text-emerald-200 block text-right mt-1">${timeStr} <i class="fa-solid fa-check text-[8px] text-emerald-300"></i></span>
        </div>
      `;
      box.appendChild(msgDiv);
      input.value = '';
      // Asynchronous API Persist to Database
      fetch('/matches/chat', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'message=' + encodeURIComponent(text) + '&target_id=1'
      }).catch(() => {});

      // Simulated auto-reply after 1.5 seconds
      setTimeout(() => {
        const replyDiv = document.createElement('div');
        replyDiv.className = 'flex items-start space-x-1.5 max-w-[85%] animate-bounce-in';
        replyDiv.innerHTML = `
          <div class="p-2.5 rounded-2xl rounded-tl-xs bg-white text-stone-800 shadow-2xs border border-stone-200 leading-relaxed text-[11px]">
            जी धन्यवाद! मैं परिवार से विचार-विमर्श करके आपको जल्द बताती हूँ। 🙏
            <span class="text-[8.5px] text-stone-400 block text-right mt-1">${timeStr}</span>
          </div>
        `;
        box.appendChild(replyDiv);
        box.scrollTop = box.scrollHeight;
      }, 1500);
    }
    function sendQuickReply(text) {
      document.getElementById('chatInput').value = text;
      sendMessage();
    }

    // Notifications Modal
    function toggleNotificationsModal() {
      const m = document.getElementById('notificationsModal');
      m.classList.toggle('open');
    }

    // Search Dialog
    function toggleSearchModal() {
      const query = prompt('वर/वधू का नाम, शहर, गोत्र अथवा शिक्षा खोजें:\n(उदा. Indore, Sharma, B.Tech, Kashyap)');
      if (query) {
        const q = query.toLowerCase().trim();
        const cards = document.querySelectorAll('.candidate-card');
        let count = 0;
        cards.forEach(card => {
          const text = card.textContent.toLowerCase();
          if (text.includes(q)) {
            card.style.display = 'block';
            count++;
          } else {
            card.style.display = 'none';
          }
        });
        showToast('खोज परिणाम 🔍', `"${query}" के लिए ${count} रिश्ते मिले।`, 'fa-magnifying-glass');
      }
    }

    // Pagination
    let currentPage = 1;
    const totalPages = 15;
    function changePage(delta) {
      currentPage += delta;
      if (currentPage < 1) currentPage = 1;
      if (currentPage > totalPages) currentPage = totalPages;
      document.getElementById('pageIndicator').textContent = `Page ${currentPage} of ${totalPages}`;
      document.getElementById('btnPrevPage').disabled = (currentPage === 1);
      
      // Smooth scroll to top of list
      document.getElementById('matchesContainer').scrollIntoView({ behavior: 'smooth' });
      showToast(`पेज ${currentPage}`, `पेज ${currentPage} के रिश्ते लोड हो रहे हैं...`, 'fa-arrows-rotate');
    }

    // ==================== ROYAL GOLDEN BIODATA & 1-CLICK PDF LOGIC ====================
    const royalCandidatesCatalog = {
      'Priya Sharma': {
        id: 'DM10028',
        slug: 'priya-sharma',
        name: 'प्रिया शर्मा (Priya Sharma)',
        raw_name: 'Priya Sharma',
        gender_prefix: 'सौभाग्यकांक्षिणी (सौ.)',
        dob: '12 मई 1998 (12-05-1998)',
        birth_time: 'प्रातः 07:45 बजे',
        birth_place: 'इन्दौर, मध्य प्रदेश',
        age_height: '26 वर्ष | 5 फीट 4 इंच',
        caste: 'सनाढ्य ब्राह्मण (Brahmin)',
        caste_full: 'सनाढ्य ब्राह्मण (सनातन हिन्दू)',
        religion: 'सनातन हिन्दू',
        gotra: 'कश्यप (Kashyap)',
        origin_gotra: 'शांडिल्य (ऐच्छिक)',
        rashi: 'कन्या (हस्त नक्षत्र)',
        manglik: 'नहीं (अमांगलिक / सौम्य कुंडली)',
        guna_score: '28 / 36 गुण उत्तम',
        education: 'B.Tech (Computer Science)',
        college: 'SGSITS, Indore (Gold Medalist)',
        occupation: 'सीनियर सॉफ्टवेयर इंजीनियर',
        company: 'MNC Tech Solutions (Hybrid)',
        income: '₹ 14.50 LPA',
        income_full: '₹ 14,50,000/- प्रतिवर्ष (14.5 LPA)',
        work_city: 'इन्दौर / बेंगलुरु',
        marital: 'अविवाहित (Never Married)',
        diet: 'शुद्ध शाकाहारी',
        complexion: 'गोरा (Fair & Radiant)',
        father_name: 'डॉ. रमाकांत शर्मा',
        father_occ: 'मुख्य चिकित्सा अधिकारी (CMO Retd.)',
        mother_name: 'श्रीमती सुनीता शर्मा',
        siblings: '1 छोटा भाई (IIT Delhi से B.Tech)',
        native: 'इन्दौर / उज्जैन (मध्य प्रदेश)',
        family_type: 'उच्च मध्यमवर्गीय संयुक्त व संस्कारी',
        contact_person: 'डॉ. रमाकांत शर्मा (पिताजी)',
        phone: '+91 98260 41289',
        address: '142, साकेत नगर, ओल्ड पलासिया, इन्दौर (म.प्र.)',
        photo: '/assets/images/match_priya.jpg'
      },
      'Neha Verma': {
        id: 'DM10034',
        slug: 'neha-verma',
        name: 'नेहा वर्मा (Neha Verma)',
        raw_name: 'Neha Verma',
        gender_prefix: 'सौभाग्यकांक्षिणी (सौ.)',
        dob: '18 अगस्त 2000 (18-08-2000)',
        birth_time: 'प्रातः 10:15 बजे',
        birth_place: 'पुणे, महाराष्ट्र',
        age_height: '24 वर्ष | 5 फीट 3 इंच',
        caste: 'कायस्थ (Kayastha)',
        caste_full: 'कायस्थ (श्रीवास्तव)',
        religion: 'सनातन हिन्दू',
        gotra: 'भारद्वाज (Bharadwaj)',
        origin_gotra: 'कश्यप (ऐच्छिक)',
        rashi: 'तुला (चित्रा नक्षत्र)',
        manglik: 'आंशिक मांगलिक (परिहार सहित)',
        guna_score: '31 / 36 गुण अत्यंत शुभ',
        education: 'M.Sc (Biotechnology)',
        college: 'पुणे यूनिवर्सिटी (Pune University)',
        occupation: 'क्लीनिकल रिसर्च एसोसिएट',
        company: 'सीरम इंस्टीट्यूट ऑफ इंडिया (Serum Institute)',
        income: '₹ 9.80 LPA',
        income_full: '₹ 9,80,000/- प्रतिवर्ष (9.8 LPA)',
        work_city: 'पुणे, महाराष्ट्र',
        marital: 'अविवाहित (Never Married)',
        diet: 'शाकाहारी (Vegetarian)',
        complexion: 'गेहुंआ/गोरा (Fair)',
        father_name: 'श्री सतीश वर्मा',
        father_occ: 'सेवानिवृत्त बैंक मुख्य प्रबंधक (SBI)',
        mother_name: 'श्रीमती अनीता वर्मा',
        siblings: '1 बड़ी बहन (विवाहित, MNC में)',
        native: 'पुणे / नागपुर (महाराष्ट्र)',
        family_type: 'मध्यमवर्गीय संस्कारी व शिक्षित',
        contact_person: 'श्री सतीश वर्मा (पिताजी)',
        phone: '+91 97654 82910',
        address: 'फ्लैट 402, रॉयल पाम्स, कोथरुड, पुणे (महाराष्ट्र)',
        photo: '/assets/images/match_neha.jpg'
      },
      'Anjali Singh': {
        id: 'DM10042',
        slug: 'anjali-singh',
        name: 'अंजलि सिंह (Anjali Singh)',
        raw_name: 'Anjali Singh',
        gender_prefix: 'सौभाग्यकांक्षिणी (सौ.)',
        dob: '04 नवम्बर 1999 (04-11-1999)',
        birth_time: 'प्रातः 04:30 बजे (ब्रह्म मुहूर्त)',
        birth_place: 'जयपुर, राजस्थान',
        age_height: '25 वर्ष | 5 फीट 5 इंच',
        caste: 'राजपूत राठौड़ (Rajput)',
        caste_full: 'सूर्यवंशी कुलीन राजपूत',
        religion: 'सनातन हिन्दू',
        gotra: 'गौतम (Gautam)',
        origin_gotra: 'राठौड़ कुल (ऐच्छिक)',
        rashi: 'वृषभ (रोहिणी नक्षत्र)',
        manglik: 'नहीं (अमांगलिक / सर्वगुण संपन्न)',
        guna_score: '32 / 36 गुण सर्वश्रेष्ठ',
        education: 'MBA (Finance & Banking)',
        college: 'राजस्थान विश्वविद्यालय, जयपुर',
        occupation: 'असिस्टेंट मैनेजर',
        company: 'HDFC बैंक लिमिटेड',
        income: '₹ 12.00 LPA',
        income_full: '₹ 12,00,000/- प्रतिवर्ष (12 LPA)',
        work_city: 'जयपुर, राजस्थान',
        marital: 'अविवाहित (Never Married)',
        diet: 'शुद्ध शाकाहारी',
        complexion: 'अत्यंत गोरा (Very Fair & Royal)',
        father_name: 'ठाकुर भंवर सिंह',
        father_occ: 'कृषि एवं रियल एस्टेट व्यवसायी',
        mother_name: 'श्रीमती पुष्पा कंवर',
        siblings: '2 भाई (1 सेना में कैप्टन, 1 बिज़नेस)',
        native: 'जयपुर / जोधपुर (राजस्थान)',
        family_type: 'कुलीन रॉयल राजपूत संयुक्त परिवार',
        contact_person: 'ठाकुर भंवर सिंह (पिताजी)',
        phone: '+91 94140 76321',
        address: 'राठौड़ विला, प्लॉट 52, वैशाली नगर, जयपुर (राज.)',
        photo: '/assets/images/match_anjali.jpg'
      },
      'Ritika Patel': {
        id: 'DM10055',
        slug: 'ritika-patel',
        name: 'रीतिका पटेल (Ritika Patel)',
        raw_name: 'Ritika Patel',
        gender_prefix: 'सौभाग्यकांक्षिणी (सौ.)',
        dob: '22 जनवरी 1997 (22-01-1997)',
        birth_time: 'दोपहर 01:20 बजे',
        birth_place: 'अहमदाबाद, गुजरात',
        age_height: '27 वर्ष | 5 फीट 2 इंच',
        caste: 'कड़वा पाटीदार (Patidar)',
        caste_full: 'पाटीदार (सनातन वैष्णव)',
        religion: 'सनातन हिन्दू वैष्णव',
        gotra: 'वशिष्ठ (Vashishtha)',
        origin_gotra: 'कश्यप (ऐच्छिक)',
        rashi: 'मिथुन (पुनर्वसु नक्षत्र)',
        manglik: 'नहीं (अमांगलिक)',
        guna_score: '29 / 36 गुण उत्तम',
        education: 'CA (Chartered Accountant) & B.Com',
        college: 'ICAI (Institute of Chartered Accountants)',
        occupation: 'सीनियर फाइनेंशियल ऑडिटर',
        company: 'Big 4 Financial Advisory Services',
        income: '₹ 16.00 LPA',
        income_full: '₹ 16,00,000/- प्रतिवर्ष (16 LPA)',
        work_city: 'अहमदाबाद, गुजरात',
        marital: 'अविवाहित (Never Married)',
        diet: 'शुद्ध शाकाहारी (Pure Jain/Veg)',
        complexion: 'गोरा (Fair)',
        father_name: 'श्री दिनेश पटेल',
        father_occ: 'उद्योगपति (डायरेक्टर - टेक्सटाइल)',
        mother_name: 'श्रीमती हंसा पटेल',
        siblings: '1 बड़ा भाई (डायरेक्टर, टेक्सटाइल)',
        native: 'अहमदाबाद / मेहसाणा (गुजरात)',
        family_type: 'उच्च संभ्रांत वैष्णव व्यापारिक परिवार',
        contact_person: 'श्री दिनेश पटेल (पिताजी)',
        phone: '+91 98980 54312',
        address: '701, शिवालिक हाइट्स, बोडकदेव, अहमदाबाद (गुजरात)',
        photo: '/assets/images/match_ritika.jpg'
      }
    };

    let activeCandidateData = null;

    function openRoyalBiodataModal(name) {
      const data = royalCandidatesCatalog[name] || royalCandidatesCatalog['Priya Sharma'];
      activeCandidateData = data;

      // Populate Modal Fields
      document.getElementById('modalBiodataHeaderSub').textContent = `${data.name} • 1-क्लिक PDF डाउनलोड`;
      document.getElementById('rbCandidateId').textContent = `ID: ${data.id}`;
      document.getElementById('rbCandidateGuna').textContent = data.guna_score;
      document.getElementById('rbCandidatePhoto').src = data.photo;
      document.getElementById('rbCandidatePrefix').textContent = data.gender_prefix;
      document.getElementById('rbCandidateName').textContent = data.name;
      document.getElementById('rbCandidateAgeHeight').textContent = data.age_height;
      document.getElementById('rbCandidateCaste').textContent = data.caste;
      document.getElementById('rbCandidateEdu').textContent = data.education;
      document.getElementById('rbCandidateIncome').textContent = data.income;

      // 1. Personal
      document.getElementById('rbDob').textContent = data.dob;
      document.getElementById('rbBirthTime').textContent = data.birth_time;
      document.getElementById('rbBirthPlace').textContent = data.birth_place;
      document.getElementById('rbMarital').textContent = data.marital;
      document.getElementById('rbDiet').textContent = data.diet;
      document.getElementById('rbComplexion').textContent = data.complexion;

      // 2. Astro & Gotra
      document.getElementById('rbReligion').textContent = data.religion;
      document.getElementById('rbCasteFull').textContent = data.caste_full;
      document.getElementById('rbGotra').textContent = data.gotra;
      document.getElementById('rbOriginGotra').textContent = data.origin_gotra;
      document.getElementById('rbRashi').textContent = data.rashi;
      document.getElementById('rbManglik').textContent = data.manglik;

      // 3. Career
      document.getElementById('rbEduDetail').textContent = data.education;
      document.getElementById('rbCollege').textContent = data.college;
      document.getElementById('rbOcc').textContent = data.occupation;
      document.getElementById('rbCompany').textContent = data.company;
      document.getElementById('rbIncomeFull').textContent = data.income_full;
      document.getElementById('rbWorkCity').textContent = data.work_city;

      // 4. Family
      document.getElementById('rbFatherName').textContent = data.father_name;
      document.getElementById('rbFatherOcc').textContent = data.father_occ;
      document.getElementById('rbMotherName').textContent = data.mother_name;
      document.getElementById('rbSiblings').textContent = data.siblings;
      document.getElementById('rbNative').textContent = data.native;
      document.getElementById('rbFamilyType').textContent = data.family_type;

      // 5. Contact
      document.getElementById('rbContactPerson').textContent = data.contact_person;
      document.getElementById('rbPhone').textContent = data.phone;
      document.getElementById('rbAddress').textContent = data.address;

      // Open Modal
      document.getElementById('royalBiodataModal').classList.add('open');
    }

    function closeRoyalBiodataModal() {
      document.getElementById('royalBiodataModal').classList.remove('open');
    }

    /**
     * 1-Click Instant Download of Royal Golden Biodata PDF!
     */
    function downloadModalRoyalBiodata() {
      if (!activeCandidateData) return;
      const element = document.getElementById('modalRoyalSheet');
      const progress = document.getElementById('modalPdfProgress');
      const cleanFileName = `Dheeraja_Royal_Biodata_${activeCandidateData.raw_name.replace(/[^a-zA-Z0-9]/g, '_')}.pdf`;

      if (progress) progress.classList.remove('hidden');

      const opt = {
        margin:       [3, 3, 3, 3],
        filename:     cleanFileName,
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { 
          scale: 2, 
          useCORS: true, 
          letterRendering: true,
          scrollY: 0
        },
        jsPDF: { 
          unit: 'mm', 
          format: 'a4', 
          orientation: 'portrait' 
        }
      };

      html2pdf().set(opt).from(element).save().then(function() {
        if (progress) progress.classList.add('hidden');
        showToast('सफल डाउनलोड! ⚡', `${activeCandidateData.raw_name} का सुनहरा बॉर्डर वाला रॉयल बायोडाटा 1-क्लिक में डाउनलोड हो गया है।`, 'fa-cloud-arrow-down');
      }).catch(function(err) {
        if (progress) progress.classList.add('hidden');
        console.error("PDF generation failed:", err);
        // Fallback to direct window.open
        window.open('/biodata/royal/' + (activeCandidateData.slug || '1') + '?download=1', '_blank');
      });
    }

    function openCandidateRoyalPage() {
      if (!activeCandidateData) return;
      window.open('/biodata/royal/' + (activeCandidateData.slug || '1'), '_blank');
    }

    // Footer Ribbon actions
    function downloadPdfProfile(name) {
      openRoyalBiodataModal(name);
    }
    function openReportModal(name) {
      const reason = prompt(`${name} की प्रोफाइल रिपोर्ट करने का कारण चुनें:\n1. गलत जानकारी\n2. फोटो सत्यापन समस्या\n3. अन्य`);
      if (reason) {
        showToast('शिकायत दर्ज की गई ⚠️', 'आपकी शिकायत धीरजा ट्रस्ट एवं सेफ्टी टीम को भेज दी गई है।', 'fa-triangle-exclamation');
      }
    }
    function openBlockModal(name) {
      if (confirm(`क्या आप सचमुच ${name} को ब्लॉक करना चाहते हैं? वे आपको संपर्क नहीं कर पाएंगे।`)) {
        showToast('प्रोफाइल ब्लॉक की गई 🚫', `${name} को ब्लॉक सूची में डाल दिया गया है।`, 'fa-ban');
      }
    }

    function toggleSideMenu() {
      alert("धीरजा रॉयल मैट्रिमोनी मेनू:\n\n• 1. कवर पेज (/cover)\n• 2. वेलकम स्क्रीन (/welcome)\n• 3. बायोडाटा फॉर्म (/biodata)\n• 4. तालिका / रिश्ते (/matches)\n• 👑 VIP सदस्यता एवं पेमेंट (/membership)\n• हेल्प & सपोर्ट");
    }

    // Initialize on DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
      renderSamajDrawerPills();
      filterMatchesBySamaj(currentSamajFilter);
    });
  </script>

</body>
</html>
