<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>DHEERAJA™ ROYAL MATRIMONY | Cover Page</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Rozha+One&display=swap" rel="stylesheet">
  
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
            emerald: { 500: '#10B981', 600: '#059669', 700: '#047857', 800: '#065F46', 900: '#064E3B' },
          },
          fontFamily: {
            cinzel: ['Cinzel', 'serif'],
            sans: ['Plus Jakarta Sans', 'sans-serif'],
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
      font-family: 'Plus Jakarta Sans', sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
    }
    /* Mobile Cover Shell Container */
    #coverShell {
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
      overflow: hidden;
    }
    @media (min-width: 640px) {
      #coverShell {
        min-height: auto;
        margin: 20px auto 40px auto;
        border-radius: 36px;
        border: 4px solid #D4AF37;
      }
    }
    .enter-btn-glow {
      box-shadow: 0 0 15px rgba(212, 175, 55, 0.5), 0 4px 15px rgba(6, 78, 59, 0.3);
      animation: pulseGlow 2.5s infinite alternate;
    }
    @keyframes pulseGlow {
      0% { box-shadow: 0 0 10px rgba(212, 175, 55, 0.4), 0 4px 12px rgba(6, 78, 59, 0.3); }
      100% { box-shadow: 0 0 25px rgba(212, 175, 55, 0.8), 0 0 35px rgba(5, 150, 105, 0.4); }
    }
    .card-lift {
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .card-lift:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 24px rgba(6, 78, 59, 0.15);
    }
    .card-lift:active {
      transform: scale(0.97);
    }
  </style>
</head>
<body class="selection:bg-emerald-200 selection:text-emerald-900">

  <!-- Desktop Emulation Toolbar -->
  <aside class="hidden sm:flex items-center justify-between w-full max-w-4xl px-6 py-2.5 my-2 bg-white/90 backdrop-blur-md rounded-2xl border border-emerald-300 text-stone-700 text-xs shadow-sm">
    <div class="flex items-center space-x-2">
      <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
      <span class="font-cinzel font-bold text-stone-900 tracking-wider">DHEERAJA ROYAL MATRIMONY™</span>
      <span class="text-stone-400">| आधिकारिक कवर पेज</span>
    </div>
    <div class="flex items-center space-x-3">
      <span class="text-stone-500 font-medium">View Style:</span>
      <button onclick="toggleView('live')" id="btnLive" class="px-2.5 py-1 rounded-lg bg-emerald-700 text-white font-bold text-[11px] shadow-xs">दमदार HD कवर</button>
      <button onclick="toggleView('poster')" id="btnPoster" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 text-stone-700 font-bold text-[11px] border border-stone-200">पोस्टर व्यू</button>
      <span class="text-stone-300">|</span>
      <button onclick="setViewport('390px')" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-mono text-[11px] border border-stone-200">iPhone</button>
      <button onclick="setViewport('440px')" class="px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-800 font-mono text-[11px] border border-emerald-300 font-bold">Standard</button>
      <a href="/welcome" class="ml-1 px-2 py-1 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 font-bold text-[11px] transition flex items-center space-x-1 border border-stone-200">
        <i class="fa-solid fa-door-open text-[10px]"></i>
        <span>2. वेलकम</span>
      </a>
      <a href="/biodata" class="ml-0.5 px-2 py-1 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 font-bold text-[11px] transition flex items-center space-x-1 border border-stone-200">
        <i class="fa-solid fa-file-pen text-[10px]"></i>
        <span>3. बायोडाटा</span>
      </a>
      <a href="/matches" class="ml-0.5 px-2.5 py-1 rounded-xl bg-gradient-to-r from-emerald-900 to-emerald-950 text-amber-300 hover:text-white font-bold transition flex items-center space-x-1 border border-amber-400/30">
        <i class="fa-solid fa-table-cells text-[10px]"></i>
        <span>4. तालिका</span>
      </a>
    </div>
  </aside>

  <!-- ==================== MAIN COVER PAGE SHELL ==================== -->
  <main id="coverShell">

    <!-- VIEW 1: DAMDAAR LIVE HD COMPONENT COVER (Pixel-Perfect Recreation) -->
    <div id="liveView" class="w-full flex flex-col bg-white relative">
      
      <!-- Top Floral Vines & New Royal "D M" Crown Logo Header -->
      <div class="w-full relative overflow-hidden bg-gradient-to-b from-[#F5FAF4] via-[#FAFCFA] to-white">
        <!-- High-Resolution Pristine Master Branding Banner -->
        <div class="relative w-full">
          <img src="/assets/images/dheeraja_top_branding.jpg" alt="DHEERAJA™ ROYAL MATRIMONY - Trusted Traditional Together Forever" class="w-full h-auto block select-none drop-shadow-xs">
          <h1 class="sr-only">DHEERAJA™ ROYAL MATRIMONY - Trusted &bull; Traditional &bull; Together Forever</h1>
        </div>
      </div>

      <!-- Center: Approved Royal Bride & Groom Photo (दूल्हा दुल्हन की फोटो) -->
      <div class="relative px-3 pt-0.5 pb-2">
        <div class="relative w-full aspect-[4/3.8] rounded-3xl overflow-hidden border-2 border-emerald-300 shadow-md bg-stone-900 group">
          <img id="couplePhotoImg" src="/assets/images/royal_emerald_couple.jpg" alt="Dheeraja Bride & Groom" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          <!-- Subtle vignette glow -->
          <div class="absolute inset-0 bg-gradient-to-t from-black/25 via-transparent to-black/10 pointer-events-none"></div>
        </div>
      </div>

      <!-- The 3 Outside Action Cards (व्हाट्सएप कम्युनिटी, इंस्टाग्राम, फेसबुक) -->
      <div class="p-3.5 pt-1">
        <div class="grid grid-cols-3 gap-2">
          
          <!-- Card 1: WhatsApp Community -->
          <div class="p-2.5 rounded-2xl bg-gradient-to-b from-[#F2FAF4] to-[#E8F6EB] border border-[#BDE5C5] shadow-xs flex flex-col items-center justify-between text-center min-h-[148px] relative card-lift">
            <!-- Top Header: — रिश्ते अपडेट — -->
            <div class="w-full flex items-center justify-center space-x-1 mb-1 text-[9px] font-bold text-[#065F46] tracking-tight">
              <span class="text-[#D4AF37]">—</span>
              <span>रिश्ते अपडेट</span>
              <span class="text-[#D4AF37]">—</span>
            </div>

            <!-- WhatsApp Icon -->
            <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-[#25D366] flex items-center justify-center text-3xl drop-shadow-xs my-0.5">
              <i class="fa-brands fa-whatsapp"></i>
            </div>

            <!-- Title -->
            <div class="text-[11px] font-bold text-[#064E3B] leading-tight my-1">
              WhatsApp<br>Community
            </div>

            <!-- Action Button: जुड़ें → -->
            <a href="<?= htmlspecialchars($socialWhatsappUrl ?? 'https://chat.whatsapp.com/invite/dheerajamatrimony') ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="w-full py-1.5 px-2 rounded-full bg-[#064E3B] hover:bg-[#04382A] text-white font-bold text-[11px] border border-[#E6C254] flex items-center justify-center space-x-1 shadow-xs transition transform active:scale-95">
              <span>जुड़ें</span>
              <span class="text-[#F5D061] text-xs font-bold">&rarr;</span>
            </a>

            <!-- Subtle bottom leaf flourish -->
            <div class="mt-1 text-[9px] text-[#059669]/60 flex items-center justify-center space-x-0.5">
              <i class="fa-solid fa-leaf text-[7px] -rotate-45"></i>
              <span class="w-1 h-1 rounded-full bg-[#D4AF37]"></span>
              <i class="fa-solid fa-leaf text-[7px] rotate-45 scale-x-[-1]"></i>
            </div>
          </div>

          <!-- Card 2: Instagram -->
          <div class="p-2.5 rounded-2xl bg-gradient-to-b from-[#FFF3F6] to-[#FDE8EE] border border-[#F8C8D5] shadow-xs flex flex-col items-center justify-between text-center min-h-[148px] relative card-lift">
            <!-- Top Header: — रिश्ते अपडेट — -->
            <div class="w-full flex items-center justify-center space-x-1 mb-1 text-[9px] font-bold text-[#065F46] tracking-tight">
              <span class="text-[#D4AF37]">—</span>
              <span>रिश्ते अपडेट</span>
              <span class="text-[#D4AF37]">—</span>
            </div>

            <!-- Instagram Icon -->
            <div class="w-12 h-12 rounded-2xl bg-pink-50 flex items-center justify-center text-3xl drop-shadow-xs my-0.5">
              <i class="fa-brands fa-instagram text-transparent bg-clip-text bg-gradient-to-tr from-[#f09433] via-[#dc2743] to-[#bc1888]"></i>
            </div>

            <!-- Title -->
            <div class="text-[12px] font-bold text-[#4A0E17] leading-tight my-1">
              Instagram
            </div>

            <!-- Action Button: फॉलो करें → -->
            <a href="<?= htmlspecialchars($socialInstagramUrl ?? 'https://instagram.com/dheerajamatrimony') ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="w-full py-1.5 px-1 rounded-full bg-[#831843] hover:bg-[#701237] text-white font-bold text-[10px] sm:text-[11px] border border-[#E6C254] flex items-center justify-center space-x-1 shadow-xs transition transform active:scale-95 whitespace-nowrap">
              <span>फॉलो करें</span>
              <span class="text-[#F5D061] text-xs font-bold">&rarr;</span>
            </a>

            <!-- Subtle bottom leaf flourish -->
            <div class="mt-1 text-[9px] text-[#059669]/60 flex items-center justify-center space-x-0.5">
              <i class="fa-solid fa-leaf text-[7px] -rotate-45"></i>
              <span class="w-1 h-1 rounded-full bg-[#D4AF37]"></span>
              <i class="fa-solid fa-leaf text-[7px] rotate-45 scale-x-[-1]"></i>
            </div>
          </div>

          <!-- Card 3: Facebook -->
          <div class="p-2.5 rounded-2xl bg-gradient-to-b from-[#F0F6FF] to-[#E3EFFF] border border-[#C5DCFE] shadow-xs flex flex-col items-center justify-between text-center min-h-[148px] relative card-lift">
            <!-- Top Header: — रिश्ते अपडेट — -->
            <div class="w-full flex items-center justify-center space-x-1 mb-1 text-[9px] font-bold text-[#065F46] tracking-tight">
              <span class="text-[#D4AF37]">—</span>
              <span>रिश्ते अपडेट</span>
              <span class="text-[#D4AF37]">—</span>
            </div>

            <!-- Facebook Icon -->
            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#1877F2] flex items-center justify-center text-3xl drop-shadow-xs my-0.5">
              <i class="fa-brands fa-facebook"></i>
            </div>

            <!-- Title -->
            <div class="text-[12px] font-bold text-[#0F3A6E] leading-tight my-1">
              Facebook
            </div>

            <!-- Action Button: जुड़ें → -->
            <a href="<?= htmlspecialchars($socialFacebookUrl ?? 'https://facebook.com/dheerajamatrimony') ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="w-full py-1.5 px-2 rounded-full bg-[#0D47A1] hover:bg-[#0A387E] text-white font-bold text-[11px] border border-[#E6C254] flex items-center justify-center space-x-1 shadow-xs transition transform active:scale-95">
              <span>जुड़ें</span>
              <span class="text-[#F5D061] text-xs font-bold">&rarr;</span>
            </a>

            <!-- Subtle bottom leaf flourish -->
            <div class="mt-1 text-[9px] text-[#059669]/60 flex items-center justify-center space-x-0.5">
              <i class="fa-solid fa-leaf text-[7px] -rotate-45"></i>
              <span class="w-1 h-1 rounded-full bg-[#D4AF37]"></span>
              <i class="fa-solid fa-leaf text-[7px] rotate-45 scale-x-[-1]"></i>
            </div>
          </div>

        </div>
      </div>

      <!-- Main Dedicated Button: 👑 📱 ऐप में प्रवेश करें → -->
      <div class="px-4 pt-1 pb-3">
        <a href="/welcome" class="enter-btn-glow w-full py-3.5 px-5 rounded-full bg-gradient-to-r from-[#065F46] via-[#047857] to-[#064E3B] hover:from-[#047857] hover:to-[#034833] text-white font-sans font-bold text-base border-2 border-[#E6C254] flex items-center justify-center space-x-2.5 transition transform hover:scale-[1.02] active:scale-95 cursor-pointer shadow-lg">
          <i class="fa-solid fa-crown text-[#F5D061] text-lg drop-shadow-xs"></i>
          <i class="fa-solid fa-mobile-screen text-white text-lg"></i>
          <span class="tracking-wide font-bold text-lg text-white">ऐप में प्रवेश करें</span>
          <i class="fa-solid fa-arrow-right text-[#F5D061] text-base drop-shadow-xs"></i>
        </a>
      </div>

      <!-- 4 Trust Badges -->
      <div class="px-3 py-3 bg-[#F6FAF5] border-t border-emerald-200/80">
        <div class="grid grid-cols-4 gap-1 text-center">
          
          <div class="flex flex-col items-center">
            <i class="fa-solid fa-shield-halved text-[#065F46] text-sm mb-1"></i>
            <span class="text-[9px] font-bold text-stone-700 leading-tight">100%<br>Verified Profiles</span>
          </div>

          <div class="flex flex-col items-center">
            <i class="fa-solid fa-users text-[#065F46] text-sm mb-1"></i>
            <span class="text-[9px] font-bold text-stone-700 leading-tight">Trusted<br>Community</span>
          </div>

          <div class="flex flex-col items-center">
            <i class="fa-solid fa-heart text-[#065F46] text-sm mb-1"></i>
            <span class="text-[9px] font-bold text-stone-700 leading-tight">Genuine<br>Matches</span>
          </div>

          <div class="flex flex-col items-center">
            <i class="fa-solid fa-crown text-[#065F46] text-sm mb-1"></i>
            <span class="text-[9px] font-bold text-stone-700 leading-tight">Royal<br>Experience</span>
          </div>

        </div>
      </div>

      <!-- Bottom Emerald Ribbon Drape & Heart -->
      <div class="relative py-2.5 bg-gradient-to-r from-emerald-950 via-emerald-800 to-emerald-950 text-amber-300 text-center flex items-center justify-center">
        <div class="h-px w-16 bg-gradient-to-r from-transparent to-amber-400"></div>
        <i class="fa-solid fa-heart text-[#E6C254] text-xs mx-2"></i>
        <div class="h-px w-16 bg-gradient-to-l from-transparent to-amber-400"></div>
      </div>

    </div>

    <!-- VIEW 2: ORIGINAL POSTER WITH ACTIVE HOTSPOTS (Toggleable) -->
    <div id="posterView" class="hidden w-full relative bg-white select-none">
      <img src="/assets/images/cover_template_poster.jpg" alt="Dheeraja Cover Poster" class="w-full h-auto block select-none pointer-events-none">
      
      <!-- Hotspots -->
      <a href="<?= htmlspecialchars($socialWhatsappUrl ?? 'https://chat.whatsapp.com/invite/dheerajamatrimony') ?>" target="_blank" rel="noopener noreferrer" style="position: absolute; left: 5%; top: 59.5%; width: 29.4%; height: 18.4%; border-radius: 24px;" class="block hover:bg-emerald-500/20 active:scale-95 cursor-pointer z-10" title="WhatsApp Community"></a>
      <a href="<?= htmlspecialchars($socialInstagramUrl ?? 'https://instagram.com/dheerajamatrimony') ?>" target="_blank" rel="noopener noreferrer" style="position: absolute; left: 35.4%; top: 59.5%; width: 29.4%; height: 18.4%; border-radius: 24px;" class="block hover:bg-pink-500/20 active:scale-95 cursor-pointer z-10" title="Instagram Page"></a>
      <a href="<?= htmlspecialchars($socialFacebookUrl ?? 'https://facebook.com/dheerajamatrimony') ?>" target="_blank" rel="noopener noreferrer" style="position: absolute; left: 65.6%; top: 59.5%; width: 29.4%; height: 18.4%; border-radius: 24px;" class="block hover:bg-blue-500/20 active:scale-95 cursor-pointer z-10" title="Facebook Page"></a>
      <a href="/welcome" style="position: absolute; left: 17.5%; top: 80.5%; width: 65%; height: 6.5%; border-radius: 9999px;" class="block hover:bg-amber-400/25 active:scale-95 cursor-pointer z-10" title="ऐप में प्रवेश करें"></a>
    </div>

  </main>

  <script>
    function setViewport(width) {
      document.getElementById('coverShell').style.maxWidth = width;
    }

    function toggleView(type) {
      const live = document.getElementById('liveView');
      const poster = document.getElementById('posterView');
      const btnLive = document.getElementById('btnLive');
      const btnPoster = document.getElementById('btnPoster');

      if (type === 'poster') {
        live.classList.add('hidden');
        poster.classList.remove('hidden');
        btnPoster.className = 'px-2.5 py-1 rounded-lg bg-emerald-700 text-white font-bold text-[11px] shadow-xs';
        btnLive.className = 'px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 text-stone-700 font-bold text-[11px] border border-stone-200';
      } else {
        poster.classList.add('hidden');
        live.classList.remove('hidden');
        btnLive.className = 'px-2.5 py-1 rounded-lg bg-emerald-700 text-white font-bold text-[11px] shadow-xs';
        btnPoster.className = 'px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 text-stone-700 font-bold text-[11px] border border-stone-200';
      }
    }
  </script>

</body>
</html>
