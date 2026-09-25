<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>DHEERAJA™ ROYAL MATRIMONY | आपका स्वागत है</title>
  
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
    #welcomeShell {
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
      #welcomeShell {
        min-height: auto;
        margin: 20px auto 40px auto;
        border-radius: 36px;
        border: 4px solid #D4AF37;
      }
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
    .input-row-hover {
      transition: background-color 0.2s ease, transform 0.2s ease;
    }
    .input-row-hover:hover {
      background-color: rgba(240, 253, 244, 0.7);
    }
  </style>
</head>
<body class="selection:bg-emerald-200 selection:text-emerald-900">

  <!-- Desktop Emulation Toolbar -->
  <aside class="hidden sm:flex items-center justify-between w-full max-w-4xl px-6 py-2.5 my-2 bg-white/90 backdrop-blur-md rounded-2xl border border-emerald-300 text-stone-700 text-xs shadow-sm">
    <div class="flex items-center space-x-2">
      <a href="/cover" class="px-2 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-bold text-stone-700 flex items-center space-x-1 transition mr-2" title="कवर पेज पर वापस जाएं">
        <i class="fa-solid fa-arrow-left text-[10px]"></i>
        <span>कवर पेज</span>
      </a>
      <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
      <span class="font-cinzel font-bold text-stone-900 tracking-wider">DHEERAJA ROYAL MATRIMONY™</span>
      <span class="text-stone-400">| स्वागत स्क्रीन (Welcome Screen)</span>
    </div>
    <div class="flex items-center space-x-3">
      <span class="text-stone-500 font-medium">View Style:</span>
      <button onclick="toggleView('live')" id="btnLive" class="px-2.5 py-1 rounded-lg bg-emerald-700 text-white font-bold text-[11px] shadow-xs">दमदार HD स्क्रीन</button>
      <button onclick="toggleView('poster')" id="btnPoster" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 text-stone-700 font-bold text-[11px] border border-stone-200">पोस्टर व्यू</button>
      <span class="text-stone-300">|</span>
      <button onclick="setViewport('390px')" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-mono text-[11px] border border-stone-200">iPhone</button>
      <button onclick="setViewport('440px')" class="px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-800 font-mono text-[11px] border border-emerald-300 font-bold">Standard</button>
      <a href="/biodata" class="ml-1 px-2.5 py-1 rounded-xl bg-emerald-800 text-amber-200 hover:text-white font-bold transition flex items-center space-x-1">
        <i class="fa-solid fa-file-pen text-[10px]"></i>
        <span>3. बायोडाटा</span>
      </a>
      <a href="/matches" class="ml-1 px-2.5 py-1 rounded-xl bg-gradient-to-r from-emerald-900 to-emerald-950 text-amber-300 hover:text-white font-bold transition flex items-center space-x-1 border border-amber-400/30">
        <i class="fa-solid fa-table-cells text-[10px]"></i>
        <span>4. तालिका</span>
      </a>
    </div>
  </aside>

  <!-- ==================== MAIN WELCOME SHELL ==================== -->
  <main id="welcomeShell">

    <!-- VIEW 1: DAMDAAR LIVE INTERACTIVE COMPONENT -->
    <div id="liveView" class="w-full flex flex-col bg-white relative">
      
      <!-- Top Navigation: Back to Cover Page 1 (बाण बटन) -->
      <a href="/cover" onclick="window.location.href='/cover'; return false;" class="absolute top-3 left-3 z-50 px-3.5 py-1.5 rounded-full bg-white/95 border-2 border-emerald-300 text-[#065F46] hover:bg-emerald-50 hover:border-emerald-500 flex items-center space-x-1.5 text-xs font-bold shadow-md transition transform active:scale-95 cursor-pointer" title="वापस पहले कवर पेज पर जाएं">
        <i class="fa-solid fa-arrow-left text-sm"></i>
        <span>कवर पेज</span>
      </a>

      <!-- Direct forward to Page 3 button on right -->
      <a href="/biodata" onclick="window.location.href='/biodata'; return false;" class="absolute top-3 right-3 z-50 px-3.5 py-1.5 rounded-full bg-white/95 border-2 border-emerald-300 text-[#065F46] hover:bg-emerald-50 hover:border-emerald-500 flex items-center space-x-1.5 text-xs font-bold shadow-md transition transform active:scale-95 cursor-pointer" title="बायोडाटा फॉर्म (पेज 3) पर जाएं">
        <span>पेज 3</span>
        <i class="fa-solid fa-arrow-right text-xs"></i>
      </a>

      <!-- Top Banner: D M Logo on Left, Couple on Right, Quote on Top Right -->
      <div class="w-full relative overflow-hidden bg-gradient-to-b from-[#F5FAF4] via-[#FAFCFA] to-white">
        <div class="relative w-full">
          <img src="/assets/images/welcome_top_banner.jpg" alt="DHEERAJA™ Royal Matrimony - आपका स्वागत है" class="w-full h-auto block select-none drop-shadow-xs">
          <h1 class="sr-only">DHEERAJA™ ROYAL MATRIMONY - आपका हार्दिक स्वागत है</h1>
        </div>
      </div>

      <!-- Welcome Heading & Sacred Blessing Message (Enlarged & Prominently Styled) -->
      <div class="px-5 pt-4 pb-2.5 text-center">
        <!-- Prominent Royal Welcome Title -->
        <h2 class="font-sans text-[#064E3B] leading-tight">
          <span class="block font-cinzel font-extrabold text-xs sm:text-sm tracking-widest text-[#065F46] uppercase mb-1">
            DHEERAJA ROYAL MATRIMONY परिवार में
          </span>
          <span class="block font-sans font-extrabold text-2xl sm:text-3xl text-emerald-950 tracking-wide drop-shadow-xs">
            आपका हार्दिक स्वागत है।
          </span>
        </h2>

        <!-- Royal Gold & Emerald Heart Divider -->
        <div class="flex items-center justify-center space-x-2.5 my-2.5">
          <div class="h-0.5 w-16 bg-gradient-to-r from-transparent via-[#E6C254] to-[#D4AF37]"></div>
          <span class="text-[#D4AF37] text-xs">◆</span>
          <i class="fa-solid fa-heart text-[#D4AF37] text-sm drop-shadow-xs"></i>
          <span class="text-[#D4AF37] text-xs">◆</span>
          <div class="h-0.5 w-16 bg-gradient-to-l from-transparent via-[#E6C254] to-[#D4AF37]"></div>
        </div>

        <!-- Sacred Guidance / Description Subtext -->
        <p class="text-xs sm:text-[13px] text-[#064E3B] font-medium leading-relaxed max-w-sm mx-auto">
          यहाँ आप <strong class="font-bold text-emerald-900">Verified Profiles</strong>, <strong class="font-bold text-emerald-900">Genuine Matches</strong> और <strong class="font-bold text-emerald-900">Trusted Community</strong> के माध्यम से अपने जीवनसाथी की खोज कर सकते हैं।
        </p>
      </div>

      <!-- Form Container Card (Exact Recreation) -->
      <div class="px-4 py-2">
        <div class="rounded-3xl border-2 border-[#BDE5C5] bg-gradient-to-b from-[#F9FCF9] to-white p-3 sm:p-4 shadow-sm relative overflow-hidden">
          
          <!-- Flash Messages (if any) -->
          <?php if (!empty($flashSuccess)): ?>
            <div class="mb-3 p-2.5 rounded-xl bg-emerald-50 border border-emerald-300 text-emerald-900 text-xs font-bold text-center">
              <?= htmlspecialchars($flashSuccess) ?>
            </div>
          <?php endif; ?>
          <?php if (!empty($flashError)): ?>
            <div class="mb-3 p-2.5 rounded-xl bg-red-50 border border-red-300 text-red-800 text-xs font-bold text-center">
              <?= htmlspecialchars($flashError) ?>
            </div>
          <?php endif; ?>

          <form action="/welcome" method="POST" id="entryForm" class="space-y-2">
            
            <!-- Row 1: मोबाइल नंबर -->
            <div class="input-row-hover rounded-2xl p-2.5 flex items-center justify-between border border-emerald-100/80 bg-white shadow-2xs">
              <!-- Left Circular Badge -->
              <div class="w-11 h-11 rounded-full bg-gradient-to-br from-[#065F46] to-[#033626] text-white flex items-center justify-center text-lg shadow-xs shrink-0">
                <i class="fa-solid fa-phone"></i>
              </div>
              
              <!-- Center Field -->
              <div class="flex-1 mx-3 text-left">
                <label for="phoneInput" class="block text-[11px] font-bold text-[#064E3B] leading-tight">
                  मोबाइल नंबर
                </label>
                <input 
                  type="tel" 
                  name="phone" 
                  id="phoneInput" 
                  maxlength="10" 
                  pattern="[0-9]{10}"
                  placeholder="अपना 10 अंकों का मोबाइल नंबर दर्ज करें" 
                  class="w-full bg-transparent text-stone-800 text-xs font-semibold placeholder-stone-400 focus:outline-none mt-0.5" 
                  required
                >
              </div>

              <!-- Right Icon -->
              <div class="text-[#065F46]/80 text-xl px-1">
                <i class="fa-solid fa-mobile-screen"></i>
              </div>
            </div>

            <!-- Row 2: ईमेल आईडी -->
            <div class="input-row-hover rounded-2xl p-2.5 flex items-center justify-between border border-emerald-100/80 bg-white shadow-2xs">
              <!-- Left Circular Badge -->
              <div class="w-11 h-11 rounded-full bg-gradient-to-br from-[#065F46] to-[#033626] text-white flex items-center justify-center text-lg shadow-xs shrink-0">
                <i class="fa-solid fa-envelope"></i>
              </div>
              
              <!-- Center Field -->
              <div class="flex-1 mx-3 text-left">
                <label for="emailInput" class="block text-[11px] font-bold text-[#064E3B] leading-tight">
                  ईमेल आईडी
                </label>
                <input 
                  type="email" 
                  name="email" 
                  id="emailInput" 
                  placeholder="अपना ईमेल आईडी दर्ज करें" 
                  class="w-full bg-transparent text-stone-800 text-xs font-semibold placeholder-stone-400 focus:outline-none mt-0.5" 
                  required
                >
              </div>

              <!-- Right Icon -->
              <div class="text-[#065F46]/80 text-xl px-1 font-bold">
                <i class="fa-solid fa-at"></i>
              </div>
            </div>

            <!-- Row 3: पासवर्ड -->
            <div class="input-row-hover rounded-2xl p-2.5 flex items-center justify-between border border-emerald-100/80 bg-white shadow-2xs">
              <!-- Left Circular Badge -->
              <div class="w-11 h-11 rounded-full bg-gradient-to-br from-[#065F46] to-[#033626] text-white flex items-center justify-center text-lg shadow-xs shrink-0">
                <i class="fa-solid fa-lock"></i>
              </div>
              
              <!-- Center Field -->
              <div class="flex-1 mx-3 text-left">
                <label for="passwordInput" class="block text-[11px] font-bold text-[#064E3B] leading-tight">
                  पासवर्ड
                </label>
                <input 
                  type="password" 
                  name="password" 
                  id="passwordInput" 
                  minlength="6" 
                  placeholder="कम से कम 6 अक्षर का पासवर्ड बनाएं" 
                  class="w-full bg-transparent text-stone-800 text-xs font-semibold placeholder-stone-400 focus:outline-none mt-0.5" 
                  required
                >
              </div>

              <!-- Right Icon (Toggle Show/Hide) -->
              <button type="button" onclick="togglePasswordVisibility()" class="text-[#065F46]/80 hover:text-[#065F46] text-lg px-1 focus:outline-none transition">
                <i id="pwdToggleIcon" class="fa-solid fa-eye-slash"></i>
              </button>
            </div>

            <!-- Submit Button: 👤+ ENTER → with Golden Filigree Flourishes -->
            <div class="pt-3 pb-1 flex items-center justify-center space-x-2">
              
              <!-- Left Gold Flourish -->
              <div class="text-[#D4AF37] text-2xl select-none hidden xs:block">
                ❧
              </div>

              <!-- Main ENTER Button -->
              <button 
                type="submit" 
                class="enter-btn-glow flex-1 max-w-xs py-3.5 px-6 rounded-full bg-gradient-to-b from-[#066B4E] via-[#044D37] to-[#033626] hover:from-[#047857] hover:to-[#034833] text-white font-cinzel font-bold text-lg sm:text-xl border-2 border-[#E6C254] flex items-center justify-center space-x-3 transition transform hover:scale-[1.02] active:scale-95 cursor-pointer shadow-lg">
                <i class="fa-solid fa-user-plus text-white text-lg"></i>
                <span class="tracking-widest font-extrabold text-white">ENTER</span>
                <i class="fa-solid fa-arrow-right text-[#F5D061] text-base"></i>
              </button>

              <!-- Right Gold Flourish -->
              <div class="text-[#D4AF37] text-2xl select-none scale-x-[-1] hidden xs:block">
                ❧
              </div>

            </div>

          </form>

        </div>
      </div>

      <!-- Direct Links to Third Page (Biodata Form) & Quick Access -->
      <div class="px-5 pt-1 pb-3 text-center flex flex-col items-center space-y-1.5">
        <a href="/biodata" class="inline-flex items-center space-x-2 text-xs font-bold text-white bg-gradient-to-r from-[#065F46] to-[#047857] hover:from-[#047857] hover:to-[#034833] px-5 py-2 rounded-full border border-[#E6C254] shadow-sm transition transform hover:scale-[1.02] active:scale-95">
          <i class="fa-solid fa-file-pen text-[#F5D061]"></i>
          <span>खुद का बायोडाटा फॉर्म भरें (3rd Page)</span>
          <i class="fa-solid fa-arrow-right text-[#F5D061] text-[10px]"></i>
        </a>

        <a href="/cover" onclick="window.location.href='/cover'; return false;" class="inline-flex items-center space-x-1.5 text-[11px] font-bold text-[#065F46] hover:text-emerald-900 bg-white/95 border border-emerald-300 hover:border-emerald-500 px-4 py-1.5 rounded-full shadow-xs transition mt-1">
          <i class="fa-solid fa-arrow-left text-[10px]"></i>
          <span>← वापस पहले कवर पेज पर जाएं (WhatsApp, FB, Insta)</span>
        </a>
      </div>

      <!-- Bottom Delicate Floral / Leaves Drape -->
      <div class="relative py-2.5 bg-gradient-to-r from-[#033626] via-[#064E3B] to-[#033626] text-amber-300 text-center flex items-center justify-center mt-auto">
        <div class="h-px w-16 bg-gradient-to-r from-transparent to-[#E6C254]"></div>
        <i class="fa-solid fa-heart text-[#E6C254] text-xs mx-2"></i>
        <div class="h-px w-16 bg-gradient-to-l from-transparent to-[#E6C254]"></div>
      </div>

    </div>

    <!-- VIEW 2: ORIGINAL WELCOME POSTER WITH ACTIVE HOTSPOTS (Toggleable) -->
    <div id="posterView" class="hidden w-full relative bg-white select-none">
      <img src="/assets/images/welcome_poster.jpg" alt="Dheeraja Welcome Poster" class="w-full h-auto block select-none pointer-events-none">
      
      <!-- Interactive Hotspots on Poster -->
      <form action="/welcome" method="POST" style="position: absolute; inset: 0;" class="z-10">
        <!-- Phone Hotspot -->
        <input 
          type="tel" 
          name="phone" 
          maxlength="10" 
          style="position: absolute; left: 24%; top: 59%; width: 62%; height: 6.5%; background: transparent; border: none; font-size: 14px; font-weight: bold; outline: none;" 
          placeholder="अपना 10 अंकों का मोबाइल नंबर"
        >
        <!-- Email Hotspot -->
        <input 
          type="email" 
          name="email" 
          style="position: absolute; left: 24%; top: 68.5%; width: 62%; height: 6.5%; background: transparent; border: none; font-size: 14px; font-weight: bold; outline: none;" 
          placeholder="अपना ईमेल आईडी दर्ज करें"
        >
        <!-- Password Hotspot -->
        <input 
          type="password" 
          name="password" 
          style="position: absolute; left: 24%; top: 78.5%; width: 62%; height: 6.5%; background: transparent; border: none; font-size: 14px; font-weight: bold; outline: none;" 
          placeholder="कम से कम 6 अक्षर का पासवर्ड"
        >
        <!-- Enter Button Hotspot -->
        <button 
          type="submit" 
          style="position: absolute; left: 22%; top: 88%; width: 56%; height: 7%; background: transparent; border: none; cursor: pointer;" 
          title="ENTER"
        ></button>
      </form>
    </div>

  </main>

  <script>
    function setViewport(width) {
      document.getElementById('welcomeShell').style.maxWidth = width;
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

    function togglePasswordVisibility() {
      const pwd = document.getElementById('passwordInput');
      const icon = document.getElementById('pwdToggleIcon');
      if (pwd.type === 'password') {
        pwd.type = 'text';
        icon.className = 'fa-solid fa-eye text-[#D4AF37]';
      } else {
        pwd.type = 'password';
        icon.className = 'fa-solid fa-eye-slash text-[#065F46]/80';
      }
    }
  </script>

</body>
</html>
