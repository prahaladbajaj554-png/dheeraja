<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>DHEERAJA™ ROYAL MATRIMONY | Activity & Matches Tracker (तालिका)</title>
  
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
    /* Action Buttons in Candidate Card */
    .card-btn {
      font-size: 9.5px;
      font-weight: 700;
      padding: 6px 3px;
      border-radius: 9999px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 3px;
      transition: all 0.15s ease;
      cursor: pointer;
      user-select: none;
      white-space: nowrap;
      flex: 1;
    }
    .card-btn:active {
      transform: scale(0.96);
    }
    .btn-interest {
      background: #FFFFFF;
      border: 1px solid #F87171;
      color: #DC2626;
    }
    .btn-interest:hover {
      background: #FEF2F2;
    }
    .btn-interest.sent {
      background: #ECFDF5 !important;
      border-color: #10B981 !important;
      color: #047857 !important;
    }
    .btn-chat {
      background: #064E3B;
      border: 1px solid #064E3B;
      color: #FFFFFF;
    }
    .btn-chat:hover {
      background: #047857;
    }
    .btn-kundali {
      background: #B4782A;
      border: 1px solid #B4782A;
      color: #FFFFFF;
    }
    .btn-kundali:hover {
      background: #9A651E;
    }
    .btn-contact {
      background: #9F6D27;
      border: 1px solid #9F6D27;
      color: #FFFFFF;
    }
    .btn-contact:hover {
      background: #84571A;
    }
    .btn-skip {
      background: #FFFFFF;
      border: 1px solid #FCA5A5;
      color: #EF4444;
    }
    .btn-skip:hover {
      background: #FEF2F2;
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
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-200">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
              <span class="text-[8.5px] font-bold text-emerald-700 leading-none">Online</span>
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

        <!-- Bottom: 5 Action Buttons in Horizontal Row -->
        <div class="mt-2.5 pt-2 border-t border-stone-100 flex items-center space-x-1">
          <button onclick="sendInterest(this, 'Priya Sharma')" class="card-btn btn-interest">
            <i class="fa-solid fa-heart text-[9px]"></i>
            <span>Send Interest</span>
          </button>
          <button onclick="openChatModal('Priya Sharma', '/assets/images/match_priya.jpg', true)" class="card-btn btn-chat">
            <i class="fa-solid fa-comment-dots text-[9px]"></i>
            <span>Chat</span>
          </button>
          <button onclick="openKundaliModal('Priya Sharma', 28, 'Kashyap', 'Brahmin', 'Indore')" class="card-btn btn-kundali">
            <i class="fa-solid fa-compass text-[9px]"></i>
            <span>Kundali Milan</span>
          </button>
          <button onclick="openContactModal('Priya Sharma', '+91 98260 41289', 'श्री रमाकांत शर्मा (पिताजी)', 'Indore, Madhya Pradesh')" class="card-btn btn-contact">
            <i class="fa-solid fa-phone text-[9px]"></i>
            <span>Contact / Accept</span>
          </button>
          <button onclick="skipCard(this, 'Priya Sharma')" class="card-btn btn-skip">
            <i class="fa-solid fa-xmark text-[9px]"></i>
            <span>Skip</span>
          </button>
        </div>
      </article>

      <!-- ==================== CARD 2: NEHA VERMA ==================== -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
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

        <!-- Bottom: 5 Action Buttons in Horizontal Row -->
        <div class="mt-2.5 pt-2 border-t border-stone-100 flex items-center space-x-1">
          <button onclick="sendInterest(this, 'Neha Verma')" class="card-btn btn-interest">
            <i class="fa-solid fa-heart text-[9px]"></i>
            <span>Send Interest</span>
          </button>
          <button onclick="openChatModal('Neha Verma', '/assets/images/match_neha.jpg', false)" class="card-btn btn-chat">
            <i class="fa-solid fa-comment-dots text-[9px]"></i>
            <span>Chat</span>
          </button>
          <button onclick="openKundaliModal('Neha Verma', 22, 'Bharadwaj', 'Kayastha', 'Pune')" class="card-btn btn-kundali">
            <i class="fa-solid fa-compass text-[9px]"></i>
            <span>Kundali Milan</span>
          </button>
          <button onclick="openContactModal('Neha Verma', '+91 97654 82910', 'श्री सतीश वर्मा (पिताजी)', 'Pune, Maharashtra')" class="card-btn btn-contact">
            <i class="fa-solid fa-phone text-[9px]"></i>
            <span>Contact / Accept</span>
          </button>
          <button onclick="skipCard(this, 'Neha Verma')" class="card-btn btn-skip">
            <i class="fa-solid fa-xmark text-[9px]"></i>
            <span>Skip</span>
          </button>
        </div>
      </article>

      <!-- ==================== CARD 3: ANJALI SINGH ==================== -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
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
            <div class="absolute top-1 left-1 bg-white/95 backdrop-blur-xs px-1.5 py-0.5 rounded-full flex items-center space-x-1 shadow-xs border border-emerald-200">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
              <span class="text-[8.5px] font-bold text-emerald-700 leading-none">Online</span>
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

        <!-- Bottom: 5 Action Buttons in Horizontal Row -->
        <div class="mt-2.5 pt-2 border-t border-stone-100 flex items-center space-x-1">
          <button onclick="sendInterest(this, 'Anjali Singh')" class="card-btn btn-interest">
            <i class="fa-solid fa-heart text-[9px]"></i>
            <span>Send Interest</span>
          </button>
          <button onclick="openChatModal('Anjali Singh', '/assets/images/match_anjali.jpg', true)" class="card-btn btn-chat">
            <i class="fa-solid fa-comment-dots text-[9px]"></i>
            <span>Chat</span>
          </button>
          <button onclick="openKundaliModal('Anjali Singh', 18, 'Gautam', 'Rajput', 'Jaipur')" class="card-btn btn-kundali">
            <i class="fa-solid fa-compass text-[9px]"></i>
            <span>Kundali Milan</span>
          </button>
          <button onclick="openContactModal('Anjali Singh', '+91 94140 76321', 'ठाकुर भंवर सिंह (पिताजी)', 'Jaipur, Rajasthan')" class="card-btn btn-contact">
            <i class="fa-solid fa-phone text-[9px]"></i>
            <span>Contact / Accept</span>
          </button>
          <button onclick="skipCard(this, 'Anjali Singh')" class="card-btn btn-skip">
            <i class="fa-solid fa-xmark text-[9px]"></i>
            <span>Skip</span>
          </button>
        </div>
      </article>

      <!-- ==================== CARD 4: RITIKA PATEL ==================== -->
      <article class="candidate-card bg-white rounded-2xl p-3 border border-stone-200 shadow-sm transition hover:shadow-md relative"
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

        <!-- Bottom: 5 Action Buttons in Horizontal Row -->
        <div class="mt-2.5 pt-2 border-t border-stone-100 flex items-center space-x-1">
          <button onclick="sendInterest(this, 'Ritika Patel')" class="card-btn btn-interest">
            <i class="fa-solid fa-heart text-[9px]"></i>
            <span>Send Interest</span>
          </button>
          <button onclick="openChatModal('Ritika Patel', '/assets/images/match_ritika.jpg', false)" class="card-btn btn-chat">
            <i class="fa-solid fa-comment-dots text-[9px]"></i>
            <span>Chat</span>
          </button>
          <button onclick="openKundaliModal('Ritika Patel', 26, 'Vashishtha', 'Patidar', 'Ahmedabad')" class="card-btn btn-kundali">
            <i class="fa-solid fa-compass text-[9px]"></i>
            <span>Kundali Milan</span>
          </button>
          <button onclick="openContactModal('Ritika Patel', '+91 98980 54312', 'श्री दिनेश पटेल (पिताजी)', 'Ahmedabad, Gujarat')" class="card-btn btn-contact">
            <i class="fa-solid fa-phone text-[9px]"></i>
            <span>Contact / Accept</span>
          </button>
          <button onclick="skipCard(this, 'Ritika Patel')" class="card-btn btn-skip">
            <i class="fa-solid fa-xmark text-[9px]"></i>
            <span>Skip</span>
          </button>
        </div>
      </article>

    </section>

    <!-- 6. PAGINATION BAR (Exact Recreation from Reference Image) -->
    <section class="px-3 pb-3">
      <div class="flex items-center justify-between space-x-2">
        <!-- Previous Page Button -->
        <button onclick="changePage(-1)" id="btnPrevPage" class="flex-1 py-2 px-3 rounded-full bg-[#064E3B] hover:bg-[#055F46] text-white text-[11px] font-bold flex items-center justify-center space-x-1.5 shadow-sm transition active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed">
          <i class="fa-solid fa-arrow-left text-[10px]"></i>
          <span>Previous Page</span>
        </button>

        <!-- Current Page Pill -->
        <div class="px-4 py-2 rounded-full bg-[#F5EEDC] border border-[#E6C254] text-[#854D0E] font-bold text-xs shadow-2xs whitespace-nowrap">
          <span id="pageIndicator">Page 1 of 15</span>
        </div>

        <!-- Next Page Button -->
        <button onclick="changePage(1)" id="btnNextPage" class="flex-1 py-2 px-3 rounded-full bg-[#064E3B] hover:bg-[#055F46] text-white text-[11px] font-bold flex items-center justify-center space-x-1.5 shadow-sm transition active:scale-95">
          <span>Next Page</span>
          <i class="fa-solid fa-arrow-right text-[10px]"></i>
        </button>
      </div>
    </section>

    <!-- 7. BOTTOM APP BAR (Dock Menu: Home, Table/Dashboard Active, Chats, Interests, Profile) -->
    <nav class="sticky bottom-0 left-0 right-0 bg-[#064E3B] text-white px-2 py-1.5 flex items-center justify-around z-40 border-t border-emerald-800 shadow-xl select-none">
      <!-- 1. Home -->
      <a href="/cover" class="flex flex-col items-center justify-center py-1 px-2 text-emerald-200/80 hover:text-white transition">
        <i class="fa-solid fa-house text-sm"></i>
        <span class="text-[9px] font-medium mt-0.5">Home</span>
      </a>

      <!-- 2. Table / Dashboard (ACTIVE with Gold Accent) -->
      <a href="/matches" class="flex flex-col items-center justify-center py-1 px-3 text-[#F3D883] font-bold relative">
        <i class="fa-solid fa-table-cells text-base text-[#F3D883]"></i>
        <span class="text-[10px] tracking-tight mt-0.5">Table / Dashboard</span>
        <!-- Active Gold Underline Bar -->
        <span class="absolute bottom-0 w-10 h-0.5 bg-[#E6C254] rounded-full shadow-xs"></span>
      </a>

      <!-- 3. Chats (with Badge '2') -->
      <button onclick="openChatModal('अंजलि सिंह (Anjali)', '/assets/images/match_anjali.jpg', true)" class="relative flex flex-col items-center justify-center py-1 px-2 text-emerald-200/80 hover:text-white transition">
        <div class="relative">
          <i class="fa-solid fa-comments text-sm"></i>
          <span class="absolute -top-1 -right-2 w-3.5 h-3.5 bg-red-600 text-white rounded-full text-[8px] font-extrabold flex items-center justify-center border border-[#064E3B]">2</span>
        </div>
        <span class="text-[9px] font-medium mt-0.5">Chats</span>
      </button>

      <!-- 4. Interests (with Badge '5') -->
      <button onclick="filterByCategory('interests_received')" class="relative flex flex-col items-center justify-center py-1 px-2 text-emerald-200/80 hover:text-white transition">
        <div class="relative">
          <i class="fa-solid fa-heart text-sm"></i>
          <span class="absolute -top-1 -right-2 w-3.5 h-3.5 bg-red-600 text-white rounded-full text-[8px] font-extrabold flex items-center justify-center border border-[#064E3B]">5</span>
        </div>
        <span class="text-[9px] font-medium mt-0.5">Interests</span>
      </button>

      <!-- 5. Profile -->
      <a href="/biodata" class="flex flex-col items-center justify-center py-1 px-2 text-emerald-200/80 hover:text-white transition" title="मेरा बायोडाटा देखें">
        <i class="fa-solid fa-user text-sm"></i>
        <span class="text-[9px] font-medium mt-0.5">Profile</span>
      </a>
    </nav>

    <!-- 8. BOTTOM EXTRA FEATURE RIBBON ("Key Features Added") -->
    <footer class="w-full bg-[#FAF7EE] border-t border-[#E6C254]/60 px-3 py-2 flex items-center justify-between text-stone-800 text-[10px] font-bold select-none z-30">
      <!-- Left: Key Features Added Crown Badge -->
      <div class="flex items-center space-x-1.5 shrink-0 pr-2 border-r border-amber-200">
        <i class="fa-solid fa-crown text-amber-600 text-xs"></i>
        <span class="font-extrabold text-stone-900 tracking-tight">Key Features Added</span>
      </div>

      <!-- Right: Feature Actions -->
      <div class="flex items-center justify-around flex-1 px-1 space-x-1">
        <!-- Kundali Milan -->
        <button onclick="openKundaliModal('Priya Sharma', 28, 'Kashyap', 'Brahmin', 'Indore')" class="flex flex-col items-center text-stone-700 hover:text-emerald-800 transition">
          <i class="fa-solid fa-gear text-xs text-emerald-700"></i>
          <span class="text-[8.5px] mt-0.5 font-semibold">Kundali Milan</span>
        </button>

        <!-- Download PDF -->
        <button onclick="downloadPdfProfile('Priya Sharma')" class="flex flex-col items-center text-stone-700 hover:text-emerald-800 transition">
          <i class="fa-solid fa-file-pdf text-xs text-stone-700"></i>
          <span class="text-[8.5px] mt-0.5 font-semibold">Download PDF</span>
        </button>

        <!-- Report Profile -->
        <button onclick="openReportModal('Priya Sharma')" class="flex flex-col items-center text-stone-700 hover:text-rose-700 transition">
          <i class="fa-solid fa-triangle-exclamation text-xs text-rose-600"></i>
          <span class="text-[8.5px] mt-0.5 font-semibold">Report Profile</span>
        </button>

        <!-- Block Profile -->
        <button onclick="openBlockModal('Priya Sharma')" class="flex flex-col items-center text-stone-700 hover:text-rose-700 transition">
          <i class="fa-solid fa-ban text-xs text-stone-600"></i>
          <span class="text-[8.5px] mt-0.5 font-semibold">Block Profile</span>
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
            <p class="text-base font-extrabold text-[#064E3B] font-mono tracking-wider mt-0.5" id="contactPhoneNumber">+91 98260 41289</p>
            <span class="text-[10px] text-emerald-700 font-bold flex items-center space-x-1 mt-0.5">
              <i class="fa-solid fa-shield-check"></i>
              <span>Dheeraja Verified Member</span>
            </span>
          </div>
          <button onclick="copyPhone()" class="px-2.5 py-1.5 rounded-lg bg-white border border-amber-300 text-amber-800 text-[10px] font-bold hover:bg-amber-100 transition shadow-2xs">
            <i class="fa-solid fa-copy mr-1"></i> कॉपी करें
          </button>
        </div>

        <div class="p-2.5 rounded-xl bg-stone-50 border border-stone-200 text-[11px] text-stone-600 space-y-1">
          <p><i class="fa-regular fa-clock text-emerald-600 mr-1.5"></i><strong>बातचीत का अनुकूल समय:</strong> सुबह 10:00 से सायं 07:00 बजे तक</p>
          <p><i class="fa-solid fa-shield text-emerald-600 mr-1.5"></i><strong>गोपनीयता:</strong> यह संपर्क धीरजा मैट्रिमोनी के नियमों के अंतर्गत सुरक्षित है।</p>
        </div>

        <!-- 2 Big Action Buttons: WhatsApp & Direct Call -->
        <div class="grid grid-cols-2 gap-2 pt-1">
          <a id="btnWhatsappCall" href="https://wa.me/919826041289?text=Namaste!%20I%20viewed%20your%20profile%20on%20Dheeraja%20Matrimony" target="_blank" class="py-2.5 px-3 rounded-xl bg-[#25D366] hover:bg-[#1EBE5D] text-white text-xs font-bold flex items-center justify-center space-x-1.5 shadow-md transition active:scale-95">
            <i class="fa-brands fa-whatsapp text-sm"></i>
            <span>व्हाट्सएप संदेश</span>
          </a>
          <a id="btnPhoneCall" href="tel:+919826041289" class="py-2.5 px-3 rounded-xl bg-[#064E3B] hover:bg-[#055F46] text-white text-xs font-bold flex items-center justify-center space-x-1.5 shadow-md transition active:scale-95">
            <i class="fa-solid fa-phone text-xs"></i>
            <span>सीधे कॉल करें</span>
          </a>
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
    let currentFilter = 'all';
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

      // Filter cards
      const cards = document.querySelectorAll('.candidate-card');
      let visibleCount = 0;
      cards.forEach(card => {
        const cardCats = card.getAttribute('data-categories') || '';
        if (cat === 'all' || cardCats.includes(cat)) {
          card.style.display = 'block';
          visibleCount++;
        } else {
          card.style.display = 'none';
        }
      });

      // Update count banner text
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
      banner.innerHTML = `<i class="fa-solid fa-list-check text-emerald-700 mr-1.5"></i> ${catNames[cat] || cat}: <strong>${visibleCount} प्रोफाइल</strong>`;
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

    // Contact Details Modal Controls
    function openContactModal(name, phone, father, loc) {
      document.getElementById('contactCandidateName').textContent = name;
      document.getElementById('contactGuardianName').textContent = father;
      document.getElementById('contactLocationText').textContent = '📍 ' + loc;
      document.getElementById('contactPhoneNumber').textContent = phone;
      
      const cleanPhone = phone.replace(/[^0-9]/g, '');
      document.getElementById('btnWhatsappCall').href = `https://wa.me/${cleanPhone}?text=Namaste!%20I%20saw%20your%20profile%20of%20${encodeURIComponent(name)}%20on%20Dheeraja%20Matrimony.`;
      document.getElementById('btnPhoneCall').href = `tel:${phone}`;

      document.getElementById('contactModal').classList.add('open');
    }
    function closeContactModal() {
      document.getElementById('contactModal').classList.remove('open');
    }
    function copyPhone() {
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

    // Footer Ribbon actions
    function downloadPdfProfile(name) {
      showToast('बायोडाटा PDF डाउनलोड 📄', `${name} का पूर्ण बायोडाटा PDF तैयार हो रहा है...`, 'fa-file-pdf');
      setTimeout(() => {
        window.print();
      }, 500);
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
  </script>

</body>
</html>
