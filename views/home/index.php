<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dheeraja Matrimony | India's Trusted Royal Matrimonial Platform</title>
  
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
            maroon: { 700: '#6B1D2F', 800: '#521321', 900: '#3D0C17', 950: '#26060E' },
            gold: { 300: '#F3D883', 400: '#E6C254', 500: '#D4AF37', 600: '#B89326' },
            ivory: { 50: '#FAF8F5', 100: '#F5EFE6', 200: '#EBE2D5' }
          },
          fontFamily: {
            cinzel: ['Cinzel', 'serif'],
            rozha: ['Rozha One', 'serif'],
            sans: ['Plus Jakarta Sans', 'sans-serif'],
          }
        }
      }
    }
  </script>

  <!-- Complete In-Page Self-Contained Styles -->
  <style>
    :root {
      --app-maroon: #6B1D2F;
      --app-gold: #D4AF37;
      --app-ivory: #FAF8F5;
    }
    * {
      box-sizing: border-box;
    }
    body {
      background-color: #FAF8F5;
      background-image: radial-gradient(rgba(212, 175, 55, 0.12) 1px, transparent 1px);
      background-size: 24px 24px;
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: #2D2426;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }
    .royal-glass {
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(212, 175, 55, 0.3);
    }
    .gold-gradient-text {
      background: linear-gradient(135deg, #B89326 0%, #D4AF37 50%, #997316 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .gold-border-glow {
      box-shadow: 0 0 25px rgba(212, 175, 55, 0.25);
    }
    .floating-badge {
      animation: floatBadge 4s ease-in-out infinite alternate;
    }
    @keyframes floatBadge {
      0% { transform: translateY(0px); }
      100% { transform: translateY(-8px); }
    }
    .mandala-pattern {
      background-image: radial-gradient(circle at center, rgba(212, 175, 55, 0.08) 0, rgba(212, 175, 55, 0.08) 12px, transparent 13px);
      background-size: 32px 32px;
    }
  </style>
</head>
<body class="selection:bg-amber-200 selection:text-maroon-900">

  <!-- Top Urgent Launch Ribbon -->
  <div class="bg-gradient-to-r from-maroon-900 via-maroon-800 to-maroon-900 text-amber-200 py-2 px-4 text-xs font-semibold border-b border-amber-500/40 text-center flex items-center justify-between">
    <div class="hidden md:flex items-center space-x-2 text-[11px] text-amber-300">
      <i class="fa-solid fa-om"></i>
      <span>पवित्र रिश्ते • शुभ विवाह • अखंड सौभाग्य</span>
    </div>
    <div class="mx-auto flex items-center space-x-2 text-xs">
      <span class="px-2 py-0.5 rounded-full bg-amber-400 text-maroon-950 font-bold text-[10px] uppercase">Special Launch Offer</span>
      <span>Complimentary 90 Days <strong>Royal VIP Pro</strong> membership active for all new registrations!</span>
      <a href="/app" class="underline text-amber-300 hover:text-white font-bold ml-1">Claim Now &rarr;</a>
    </div>
    <div class="hidden lg:flex items-center space-x-3 text-[11px] text-amber-200">
      <a href="tel:+919876543210" class="hover:underline flex items-center space-x-1">
        <i class="fa-solid fa-headset text-amber-400"></i>
        <span>Helpline: +91 98765 43210</span>
      </a>
      <span>•</span>
      <a href="/admin/login" class="hover:underline text-amber-300">Admin Portal</a>
    </div>
  </div>

  <!-- Main Royal Navigation Bar -->
  <header class="sticky top-0 z-50 royal-glass border-b border-amber-200/80 shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
      
      <!-- Brand Logo & Royal Title -->
      <a href="/" class="flex items-center space-x-3.5 group">
        <div class="w-13 h-13 rounded-2xl overflow-hidden border-2 border-amber-400 shadow-md group-hover:scale-105 transition duration-300 flex-shrink-0 bg-maroon-900">
          <img src="/assets/images/dheeraja_logo.jpg" alt="Dheeraja Matrimony" class="w-full h-full object-cover">
        </div>
        <div>
          <div class="flex items-center space-x-1.5">
            <span class="font-cinzel font-extrabold text-xl sm:text-2xl text-maroon-900 tracking-wider">DHEERAJA</span>
            <i class="fa-solid fa-crown text-amber-500 text-xs"></i>
          </div>
          <p class="text-[10px] sm:text-[11px] font-bold text-amber-800 uppercase tracking-widest -mt-1 font-sans">Royal Matrimony</p>
        </div>
      </a>

      <!-- Center Desktop Navigation Links -->
      <nav class="hidden md:flex items-center space-x-7 text-xs font-bold text-stone-700">
        <a href="#search" class="hover:text-maroon-700 transition flex items-center space-x-1">
          <i class="fa-solid fa-magnifying-glass text-amber-500"></i>
          <span>Search Matches</span>
        </a>
        <a href="#features" class="hover:text-maroon-700 transition flex items-center space-x-1">
          <i class="fa-solid fa-camera text-sky-500"></i>
          <span>4-Photo Verification</span>
        </a>
        <a href="#whatsapp" class="hover:text-emerald-700 transition flex items-center space-x-1">
          <i class="fa-brands fa-whatsapp text-emerald-600 text-sm"></i>
          <span>WhatsApp Circles</span>
        </a>
        <a href="#vip" class="hover:text-amber-700 transition flex items-center space-x-1">
          <i class="fa-solid fa-gem text-amber-500"></i>
          <span>VIP Pro Plans</span>
        </a>
        <a href="#sahayak" class="hover:text-maroon-700 transition flex items-center space-x-1">
          <i class="fa-solid fa-handshake text-amber-600"></i>
          <span>Vivah Sahayak</span>
        </a>
      </nav>

      <!-- Right Action CTA Buttons -->
      <!-- Right Action CTA Buttons (App Entry + External Channels) -->
      <div class="flex items-center space-x-2 sm:space-x-3">
        
        <!-- 1. External WhatsApp Button (Direct from Outside) -->
        <a href="<?= htmlspecialchars($socialWhatsappUrl ?? 'https://chat.whatsapp.com/invite/dheerajamatrimony') ?>" target="_blank" title="Join WhatsApp Community" class="w-9 h-9 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-600 border border-emerald-300 flex items-center justify-center text-base transition transform hover:scale-105 shadow-xs">
          <i class="fa-brands fa-whatsapp"></i>
        </a>

        <!-- 2. External Instagram Button (Direct from Outside) -->
        <a href="<?= htmlspecialchars($socialInstagramUrl ?? 'https://instagram.com/dheerajamatrimony') ?>" target="_blank" title="Official Instagram" class="w-9 h-9 rounded-xl bg-pink-50 hover:bg-pink-100 text-pink-600 border border-pink-300 flex items-center justify-center text-base transition transform hover:scale-105 shadow-xs">
          <i class="fa-brands fa-instagram"></i>
        </a>

        <!-- 3. External Facebook Button (Direct from Outside) -->
        <a href="<?= htmlspecialchars($socialFacebookUrl ?? 'https://facebook.com/dheerajamatrimony') ?>" target="_blank" title="Official Facebook Page" class="w-9 h-9 rounded-xl bg-blue-50 hover:bg-blue-100 text-blue-600 border border-blue-300 flex items-center justify-center text-base transition transform hover:scale-105 shadow-xs">
          <i class="fa-brands fa-facebook"></i>
        </a>

        <!-- 4. Separate Dedicated Button: Enter Inside App (ऐप में प्रवेश करें) -->
        <a href="/app" class="px-4 py-2.5 rounded-2xl bg-gradient-to-r from-amber-400 via-amber-500 to-amber-600 hover:from-amber-500 hover:to-amber-700 text-maroon-950 font-bold text-xs shadow-md hover:shadow-lg transition transform active:scale-95 flex items-center space-x-2 border border-amber-300">
          <i class="fa-solid fa-crown text-maroon-900 text-sm"></i>
          <span>ऐप में प्रवेश करें</span>
          <i class="fa-solid fa-arrow-right text-[10px]"></i>
        </a>

      </div>

    </div>
  </header>

  <!-- ==================== HERO COVER SECTION ==================== -->
  <section class="relative overflow-hidden pt-6 pb-16 lg:py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
        
        <!-- Left Hero Content Column (7 cols) -->
        <div class="lg:col-span-7 space-y-5">
          
          <!-- Royal Badge Tag -->
          <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-amber-100/80 border border-amber-300 text-maroon-900 text-xs font-bold shadow-xs">
            <i class="fa-solid fa-crown text-amber-600"></i>
            <span>INDIA'S PREMIER ROYAL MATRIMONY PLATFORM</span>
          </div>

          <!-- Main Majestic Headline -->
          <h1 class="text-3xl sm:text-4xl lg:text-5xl font-cinzel font-extrabold text-stone-900 leading-tight">
            Find Your Sacred Match With <span class="gold-gradient-text">Trust, Honor & Tradition</span>
          </h1>

          <!-- Tagline & Description -->
          <p class="text-sm sm:text-base text-stone-600 leading-relaxed font-normal max-w-2xl">
            Welcome to <strong>Dheeraja Matrimony</strong> — where royal culture meets verified matchmaking. Explore 10,000+ authentic biodatas with <strong>4-Photo ID Verification</strong>, high Gunas compatibility, dedicated Vivah Sahayaks, and exclusive Samaj WhatsApp Circles.
          </p>

          <!-- ==================== DEDICATED 4-ACTION HUB (COVER PAGE ACTIONS) ==================== -->
          <div class="p-4 sm:p-5 rounded-3xl bg-gradient-to-br from-[#FFF9F2] via-white to-[#FFF4E5] border-2 border-amber-300/80 shadow-md space-y-3.5">
            
            <div class="flex items-center justify-between text-xs font-bold text-stone-800 border-b border-amber-200/80 pb-2">
              <span class="flex items-center text-maroon-900 font-cinzel">
                <i class="fa-solid fa-gem text-amber-600 mr-1.5"></i> मुख्य एक्शन व कम्युनिटी हब
              </span>
              <span class="text-[10px] text-amber-800 font-semibold bg-amber-100 px-2 py-0.5 rounded-full">
                1-Tap Direct Access
              </span>
            </div>

            <!-- PRIMARY DISTINCT BUTTON: ENTER INSIDE MATRIMONY APP -->
            <a href="/app" class="w-full py-3.5 sm:py-4 px-6 rounded-2xl bg-gradient-to-r from-amber-400 via-amber-500 to-amber-600 hover:from-amber-500 hover:to-amber-700 text-maroon-950 font-cinzel font-extrabold text-sm sm:text-base shadow-lg hover:shadow-xl transition transform hover:scale-[1.01] active:scale-95 flex items-center justify-between border-2 border-amber-300 group">
              <div class="flex items-center space-x-3">
                <div class="w-9 h-9 rounded-xl bg-maroon-900 text-amber-300 flex items-center justify-center text-base shadow-sm group-hover:rotate-12 transition">
                  <i class="fa-solid fa-crown"></i>
                </div>
                <div class="text-left">
                  <div class="text-sm sm:text-base font-bold text-maroon-950">ऐप में प्रवेश करें / ENTER MATRIMONY APP</div>
                  <div class="text-[10px] text-maroon-900 font-sans font-semibold">10,000+ Verified Profiles &bull; Live Chat &bull; 4-Photo Gallery</div>
                </div>
              </div>
              <div class="w-8 h-8 rounded-full bg-white/80 text-maroon-950 flex items-center justify-center text-sm font-bold shadow-xs">
                &rarr;
              </div>
            </a>

            <!-- 3 EXTERNAL ACTION BUTTONS (बाकी तीन बटन बाहर से ही काम करेंगे) -->
            <div>
              <div class="text-[11px] font-bold text-stone-500 mb-2 flex items-center">
                <i class="fa-solid fa-globe text-amber-600 mr-1.5"></i>
                <span>बाहरी कम्युनिटी चैनल्स (बिना ऐप लॉगिन सीधे बाहर से काम करेंगे):</span>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">
                
                <!-- 1. WhatsApp Community Button (Outside Direct) -->
                <a href="<?= htmlspecialchars($socialWhatsappUrl ?? 'https://chat.whatsapp.com/invite/dheerajamatrimony') ?>" target="_blank" class="p-3 rounded-2xl bg-emerald-50 hover:bg-emerald-100 text-emerald-800 border border-emerald-300 shadow-xs hover:shadow-sm transition transform hover:scale-102 active:scale-95 flex items-center space-x-2.5">
                  <div class="w-8 h-8 rounded-xl bg-emerald-500 text-white flex items-center justify-center text-base flex-shrink-0 shadow-sm">
                    <i class="fa-brands fa-whatsapp"></i>
                  </div>
                  <div class="text-left overflow-hidden">
                    <div class="text-[9px] uppercase tracking-wider text-emerald-600 font-bold">Direct Outside</div>
                    <div class="text-xs font-bold truncate">WhatsApp Circles</div>
                  </div>
                </a>

                <!-- 2. Instagram Page Button (Outside Direct) -->
                <a href="<?= htmlspecialchars($socialInstagramUrl ?? 'https://instagram.com/dheerajamatrimony') ?>" target="_blank" class="p-3 rounded-2xl bg-pink-50 hover:bg-pink-100 text-pink-800 border border-pink-300 shadow-xs hover:shadow-sm transition transform hover:scale-102 active:scale-95 flex items-center space-x-2.5">
                  <div class="w-8 h-8 rounded-xl bg-gradient-to-tr from-[#fd1d1d] to-[#833ab4] text-white flex items-center justify-center text-base flex-shrink-0 shadow-sm">
                    <i class="fa-brands fa-instagram"></i>
                  </div>
                  <div class="text-left overflow-hidden">
                    <div class="text-[9px] uppercase tracking-wider text-pink-600 font-bold">Direct Outside</div>
                    <div class="text-xs font-bold truncate">Instagram Page</div>
                  </div>
                </a>

                <!-- 3. Facebook Group Button (Outside Direct) -->
                <a href="<?= htmlspecialchars($socialFacebookUrl ?? 'https://facebook.com/dheerajamatrimony') ?>" target="_blank" class="p-3 rounded-2xl bg-blue-50 hover:bg-blue-100 text-blue-800 border border-blue-300 shadow-xs hover:shadow-sm transition transform hover:scale-102 active:scale-95 flex items-center space-x-2.5">
                  <div class="w-8 h-8 rounded-xl bg-[#1877F2] text-white flex items-center justify-center text-base flex-shrink-0 shadow-sm">
                    <i class="fa-brands fa-facebook"></i>
                  </div>
                  <div class="text-left overflow-hidden">
                    <div class="text-[9px] uppercase tracking-wider text-blue-600 font-bold">Direct Outside</div>
                    <div class="text-xs font-bold truncate">Facebook Page</div>
                  </div>
                </a>

              </div>
            </div>

          </div>

          <!-- ==================== INTERACTIVE QUICK MATCH SEARCH WIDGET ==================== -->
          <div id="search" class="bg-white rounded-3xl p-5 sm:p-6 shadow-xl border-2 border-amber-200/90 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-amber-100/50 rounded-full blur-2xl -mr-10 -mt-10"></div>
            
            <div class="flex items-center justify-between pb-3 border-b border-stone-200 mb-4">
              <span class="font-cinzel font-bold text-sm text-maroon-800 flex items-center">
                <i class="fa-solid fa-wand-magic-sparkles text-amber-500 mr-2"></i> Quick Match Finder
              </span>
              <span class="text-[11px] font-bold text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-full border border-emerald-200">
                100% Free Search
              </span>
            </div>

            <form action="/app" method="GET" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 text-xs">
              
              <!-- Looking For -->
              <div>
                <label class="block font-bold text-stone-700 mb-1">Looking For</label>
                <select name="gender" class="w-full px-3 py-2.5 rounded-xl bg-stone-50 border border-stone-200 focus:outline-none focus:border-amber-400 font-medium">
                  <option value="female">Bride (वधू)</option>
                  <option value="male">Groom (वर)</option>
                </select>
              </div>

              <!-- Age Bracket -->
              <div>
                <label class="block font-bold text-stone-700 mb-1">Age Range</label>
                <select name="age_range" class="w-full px-3 py-2.5 rounded-xl bg-stone-50 border border-stone-200 focus:outline-none focus:border-amber-400 font-medium">
                  <option value="21-25">21 to 25 Years</option>
                  <option value="25-30" selected>25 to 30 Years</option>
                  <option value="30-35">30 to 35 Years</option>
                  <option value="35-45">35+ Years</option>
                </select>
              </div>

              <!-- Community / Caste -->
              <div>
                <label class="block font-bold text-stone-700 mb-1">Community / Caste</label>
                <select name="caste" class="w-full px-3 py-2.5 rounded-xl bg-stone-50 border border-stone-200 focus:outline-none focus:border-amber-400 font-medium">
                  <option value="">All Communities</option>
                  <option value="Brahmin">Brahmin</option>
                  <option value="Rajput">Rajput</option>
                  <option value="Marwari">Marwari</option>
                  <option value="Agarwal">Agarwal</option>
                  <option value="Maheshwari">Maheshwari</option>
                  <option value="Jain">Jain</option>
                  <option value="Khatri">Khatri</option>
                </select>
              </div>

              <!-- Submit Search Button -->
              <div class="flex items-end">
                <button type="submit" class="w-full py-2.5 px-4 rounded-xl bg-gradient-to-r from-maroon-700 to-maroon-800 hover:from-maroon-800 hover:to-maroon-900 text-white font-bold text-xs uppercase tracking-wider shadow-md hover:shadow-lg transition transform active:scale-95 flex items-center justify-center space-x-1.5 h-[42px]">
                  <i class="fa-solid fa-magnifying-glass"></i>
                  <span>Find Matches</span>
                </button>
              </div>

            </form>
          </div>

          <!-- Trust Badges Under Search -->
          <div class="flex flex-wrap items-center gap-4 text-xs font-bold text-stone-600 pt-2">
            <span class="flex items-center space-x-1.5">
              <i class="fa-solid fa-circle-check text-emerald-600"></i>
              <span>Govt ID Verified</span>
            </span>
            <span class="flex items-center space-x-1.5">
              <i class="fa-solid fa-camera text-sky-600"></i>
              <span>4-Photo Verification</span>
            </span>
            <span class="flex items-center space-x-1.5">
              <i class="fa-solid fa-shield-halved text-amber-600"></i>
              <span>100% Privacy Control</span>
            </span>
            <span class="flex items-center space-x-1.5">
              <i class="fa-brands fa-whatsapp text-emerald-600"></i>
              <span>Samaj WhatsApp Circles</span>
            </span>
          </div>

        </div>

        <!-- Right Hero Visual Column (5 cols) - Exact Cover Poster with Interactive Hotspots -->
        <div class="lg:col-span-5 relative">
          
          <!-- Ornate Golden Frame for User's Exact Cover Poster -->
          <div class="relative mx-auto max-w-[420px] rounded-[32px] overflow-hidden border-4 border-amber-300 shadow-2xl bg-white group">
            
            <!-- Exact Cover Poster Image -->
            <img src="/assets/images/cover_template_poster.jpg" alt="Dheeraja Royal Matrimony Cover" class="w-full h-auto block select-none pointer-events-none">
            
            <!-- ==================== 4 LIVE INTERACTIVE HOTSPOTS ON POSTER ==================== -->
            
            <!-- 1. WhatsApp Community Hotspot (Direct Outside) -->
            <a href="<?= htmlspecialchars($socialWhatsappUrl ?? 'https://chat.whatsapp.com/invite/dheerajamatrimony') ?>" target="_blank"
               style="position: absolute; left: 4.8%; top: 56.5%; width: 29.5%; height: 18.5%; border-radius: 20px;"
               class="block transition duration-200 hover:bg-emerald-500/20 active:scale-95 cursor-pointer z-10"
               title="Join WhatsApp Community (Direct Outside)">
               <span class="sr-only">WhatsApp Community</span>
            </a>

            <!-- 2. Instagram Hotspot (Direct Outside) -->
            <a href="<?= htmlspecialchars($socialInstagramUrl ?? 'https://instagram.com/dheerajamatrimony') ?>" target="_blank"
               style="position: absolute; left: 35.2%; top: 56.5%; width: 29.5%; height: 18.5%; border-radius: 20px;"
               class="block transition duration-200 hover:bg-pink-500/20 active:scale-95 cursor-pointer z-10"
               title="Follow Instagram (Direct Outside)">
               <span class="sr-only">Instagram Page</span>
            </a>

            <!-- 3. Facebook Hotspot (Direct Outside) -->
            <a href="<?= htmlspecialchars($socialFacebookUrl ?? 'https://facebook.com/dheerajamatrimony') ?>" target="_blank"
               style="position: absolute; left: 65.7%; top: 56.5%; width: 29.5%; height: 18.5%; border-radius: 20px;"
               class="block transition duration-200 hover:bg-blue-500/20 active:scale-95 cursor-pointer z-10"
               title="Join Facebook Page (Direct Outside)">
               <span class="sr-only">Facebook Page</span>
            </a>

            <!-- 4. ऐप में प्रवेश करें (Enter App Hotspot) -->
            <a href="/app"
               style="position: absolute; left: 14%; top: 76.5%; width: 72%; height: 8%; border-radius: 9999px;"
               class="block transition duration-200 hover:bg-amber-400/25 active:scale-95 cursor-pointer z-10 group/btn"
               title="ऐप में प्रवेश करें / Enter Matrimony App">
               <span class="sr-only">ऐप में प्रवेश करें / Enter Matrimony App</span>
               <!-- Subtle glowing outline on hover -->
               <div class="w-full h-full rounded-full border border-amber-300/30 group-hover/btn:border-amber-400 animate-pulse"></div>
            </a>

          </div>

          <!-- Bottom Micro Caption -->
          <div class="mt-3 text-center text-[11px] text-stone-500 font-semibold flex items-center justify-center space-x-1.5">
            <i class="fa-solid fa-hand-pointer text-amber-600 animate-bounce"></i>
            <span>पोस्टर के बटनों पर सीधे टैप/क्लिक करके एक्शन लें</span>
          </div>

          <!-- Decorative Gold Glow behind Poster -->
          <div class="absolute -inset-4 bg-gradient-to-r from-amber-400/25 to-emerald-400/20 rounded-3xl blur-2xl -z-10"></div>

        </div>

      </div>
    </div>
  </section>

  <!-- ==================== KEY STATS BAR ==================== -->
  <section class="bg-gradient-to-r from-maroon-900 via-maroon-800 to-maroon-900 text-white py-8 border-y-2 border-amber-400/60 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
        
        <div class="space-y-1">
          <div class="font-cinzel font-extrabold text-2xl sm:text-3xl text-amber-300">10,000+</div>
          <div class="text-xs text-stone-300 font-semibold uppercase tracking-wider">Active Verified Profiles</div>
        </div>

        <div class="space-y-1">
          <div class="font-cinzel font-extrabold text-2xl sm:text-3xl text-amber-300">4,800+</div>
          <div class="text-xs text-stone-300 font-semibold uppercase tracking-wider">Blessed Shubh Vivahs</div>
        </div>

        <div class="space-y-1">
          <div class="font-cinzel font-extrabold text-2xl sm:text-3xl text-amber-300">100%</div>
          <div class="text-xs text-stone-300 font-semibold uppercase tracking-wider">4-Photo & Govt ID Verified</div>
        </div>

        <div class="space-y-1">
          <div class="font-cinzel font-extrabold text-2xl sm:text-3xl text-amber-300">50+</div>
          <div class="text-xs text-stone-300 font-semibold uppercase tracking-wider">Samaj WhatsApp Circles</div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==================== 4 CORE PILLARS OF DHEERAJA ==================== -->
  <section id="features" class="py-16 bg-[#FAF7F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
        <span class="text-xs font-bold text-amber-700 uppercase tracking-widest bg-amber-100/70 px-3 py-1 rounded-full border border-amber-300/60">
          The Dheeraja Advantage
        </span>
        <h2 class="text-2xl sm:text-3xl font-cinzel font-bold text-stone-900">
          Crafted for Prestigious Indian Families
        </h2>
        <p class="text-xs sm:text-sm text-stone-600">
          We combine traditional values, authentic community connections, and modern anti-fraud security to deliver an unmatched matchmaking experience.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Pillar 1 -->
        <div class="p-6 rounded-3xl bg-white border border-amber-200/80 shadow-sm hover:shadow-md transition space-y-3.5 relative overflow-hidden group">
          <div class="w-12 h-12 rounded-2xl bg-sky-50 text-sky-600 flex items-center justify-center text-xl font-bold border border-sky-200 group-hover:scale-110 transition">
            <i class="fa-solid fa-camera"></i>
          </div>
          <h3 class="font-cinzel font-bold text-base text-stone-900">4-Photo Verification</h3>
          <p class="text-xs text-stone-600 leading-relaxed">
            Every user profile features 4 distinct high-resolution photographs thoroughly verified before matching, completely eliminating fake and bot accounts.
          </p>
          <span class="inline-block text-[11px] font-bold text-sky-700 bg-sky-50 px-2.5 py-0.5 rounded-full border border-sky-200">
            📸 Photo Verified Tag
          </span>
        </div>

        <!-- Pillar 2 -->
        <div class="p-6 rounded-3xl bg-white border border-amber-200/80 shadow-sm hover:shadow-md transition space-y-3.5 relative overflow-hidden group">
          <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl font-bold border border-emerald-200 group-hover:scale-110 transition">
            <i class="fa-brands fa-whatsapp"></i>
          </div>
          <h3 class="font-cinzel font-bold text-base text-stone-900">Samaj WhatsApp Circles</h3>
          <p class="text-xs text-stone-600 leading-relaxed">
            Get daily biodatas and family background verifications delivered directly to curated, caste and region specific WhatsApp communities.
          </p>
          <span class="inline-block text-[11px] font-bold text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-full border border-emerald-200">
            🟢 Daily Family Circles
          </span>
        </div>

        <!-- Pillar 3 -->
        <div class="p-6 rounded-3xl bg-white border border-amber-200/80 shadow-sm hover:shadow-md transition space-y-3.5 relative overflow-hidden group">
          <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl font-bold border border-amber-200 group-hover:scale-110 transition">
            <i class="fa-solid fa-handshake"></i>
          </div>
          <h3 class="font-cinzel font-bold text-base text-stone-900">Vivah Sahayak Brokers</h3>
          <p class="text-xs text-stone-600 leading-relaxed">
            Personal assistance from certified community matchmakers and bureaus who facilitate respectful introductions, kundali matching, and family meetings.
          </p>
          <span class="inline-block text-[11px] font-bold text-amber-800 bg-amber-50 px-2.5 py-0.5 rounded-full border border-amber-200">
            🤝 Dedicated Support
          </span>
        </div>

        <!-- Pillar 4 -->
        <div class="p-6 rounded-3xl bg-white border border-amber-200/80 shadow-sm hover:shadow-md transition space-y-3.5 relative overflow-hidden group">
          <div class="w-12 h-12 rounded-2xl bg-rose-50 text-maroon-700 flex items-center justify-center text-xl font-bold border border-rose-200 group-hover:scale-110 transition">
            <i class="fa-solid fa-bolt"></i>
          </div>
          <h3 class="font-cinzel font-bold text-base text-stone-900">Live Auto-Sync Chat</h3>
          <p class="text-xs text-stone-600 leading-relaxed">
            Communicate safely with verified matches in our in-app live chat engine, backed by 3-second server auto-sync and complete phone privacy safeguards.
          </p>
          <span class="inline-block text-[11px] font-bold text-maroon-800 bg-rose-50 px-2.5 py-0.5 rounded-full border border-rose-200">
            ⚡ Instant Real-Time
          </span>
        </div>

      </div>

    </div>
  </section>

  <!-- ==================== FEATURED VERIFIED MATCHES SHOWCASE ==================== -->
  <section class="py-16 bg-white border-t border-amber-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="flex flex-col md:flex-row items-center justify-between mb-10">
        <div>
          <span class="text-xs font-bold text-amber-700 uppercase tracking-widest bg-amber-100/70 px-3 py-1 rounded-full border border-amber-300/60">
            Daily Discoveries
          </span>
          <h2 class="text-2xl sm:text-3xl font-cinzel font-bold text-stone-900 mt-2">
            Recommended Verified Profiles
          </h2>
        </div>
        <a href="/app" class="mt-4 md:mt-0 px-4 py-2 rounded-xl bg-amber-50 hover:bg-amber-100 text-maroon-800 font-bold text-xs border border-amber-300 transition flex items-center space-x-1.5">
          <span>View All 10,000+ Matches in App</span>
          <i class="fa-solid fa-arrow-right text-xs"></i>
        </a>
      </div>

      <!-- Profiles Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php foreach (array_slice($featuredMatches ?? [], 0, 4) as $m): 
          $age = (new \DateTime())->diff(new \DateTime($m['dob']))->y;
        ?>
          <div class="bg-[#FAF8F5] rounded-3xl overflow-hidden border border-amber-200 shadow-sm hover:shadow-md transition group">
            
            <!-- Photo Frame -->
            <div class="h-60 bg-gradient-to-br from-amber-100 to-amber-200 relative overflow-hidden flex items-center justify-center">
              <?php if (!empty($m['profile_photo'])): ?>
                <img src="<?= htmlspecialchars($m['profile_photo']) ?>" alt="<?= htmlspecialchars($m['first_name']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
              <?php else: ?>
                <div class="w-20 h-20 rounded-full bg-amber-500 text-white text-3xl font-cinzel font-bold flex items-center justify-center shadow-lg">
                  <?= strtoupper(substr($m['first_name'], 0, 1)) ?>
                </div>
              <?php endif; ?>

              <!-- Badges -->
              <div class="absolute top-3 left-3 flex flex-col gap-1">
                <?php if (!empty($m['is_vip'])): ?>
                  <span class="px-2 py-0.5 rounded-full text-[9px] font-bold bg-amber-400 text-maroon-950 shadow-sm">👑 ROYAL VIP</span>
                <?php endif; ?>
                <span class="px-2 py-0.5 rounded-full text-[9px] font-bold bg-sky-600 text-white shadow-sm flex items-center space-x-1">
                  <i class="fa-solid fa-camera text-[8px]"></i> <span>4 Photos Verified</span>
                </span>
              </div>

              <div class="absolute bottom-3 right-3 px-2 py-0.5 rounded-full bg-black/65 backdrop-blur-sm text-[10px] text-white font-mono">
                <?= htmlspecialchars($m['matrimony_id']) ?>
              </div>
            </div>

            <!-- Profile Info -->
            <div class="p-4 space-y-2.5">
              <div>
                <h4 class="font-cinzel font-bold text-sm text-stone-900 flex items-center justify-between">
                  <span><?= htmlspecialchars($m['first_name'] . ' ' . $m['last_name']) ?>, <?= $age ?> yrs</span>
                  <i class="fa-solid fa-circle-check text-sky-500 text-xs"></i>
                </h4>
                <p class="text-[11px] text-stone-500 font-medium">
                  <?= htmlspecialchars($m['caste'] ?? 'General') ?> • <?= htmlspecialchars($m['current_city'] ?? 'India') ?>
                </p>
              </div>

              <div class="p-2 rounded-xl bg-white border border-amber-200/60 flex items-center justify-between text-[11px]">
                <span class="font-bold text-stone-700"><?= htmlspecialchars($m['occupation'] ?? 'Professional') ?></span>
                <span class="font-bold text-emerald-700">₹<?= format_inr($m['annual_income_inr'] ?? 0) ?></span>
              </div>

              <a href="/app" class="w-full py-2 rounded-xl bg-maroon-700 hover:bg-maroon-800 text-white font-bold text-xs flex items-center justify-center space-x-1 transition shadow-sm">
                <i class="fa-solid fa-heart text-rose-300 text-xs"></i>
                <span>Connect on App</span>
              </a>
            </div>

          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- ==================== WHATSAPP COMMUNITIES SECTION ==================== -->
  <section id="whatsapp" class="py-16 bg-gradient-to-br from-emerald-50 via-teal-50 to-emerald-100 border-t border-emerald-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-10 space-y-2">
        <span class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-emerald-200/80 text-emerald-900 font-bold text-xs">
          <i class="fa-brands fa-whatsapp text-emerald-600"></i>
          <span>Official WhatsApp Matrimony Circles</span>
        </span>
        <h2 class="text-2xl sm:text-3xl font-cinzel font-bold text-stone-900">
          Join Samaj & Community Family Circles
        </h2>
        <p class="text-xs sm:text-sm text-stone-600">
          Direct community engagement. Receive verified biodatas every morning on WhatsApp without brokerage fees.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        <?php foreach (($whatsappCommunities ?? []) as $com): ?>
          <div class="p-5 rounded-3xl bg-white border border-emerald-200 shadow-sm hover:shadow-md transition space-y-3">
            <div class="flex items-start justify-between">
              <div class="flex items-center space-x-2.5">
                <div class="w-10 h-10 rounded-xl bg-emerald-500 text-white flex items-center justify-center text-lg font-bold flex-shrink-0 shadow-sm">
                  <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div>
                  <h4 class="font-bold text-xs text-stone-900"><?= htmlspecialchars($com['title']) ?></h4>
                  <p class="text-[10px] text-stone-500 font-semibold"><?= htmlspecialchars($com['caste_group']) ?> • <?= htmlspecialchars($com['region']) ?></p>
                </div>
              </div>
              <span class="px-2 py-0.5 rounded-full text-[9px] font-bold bg-emerald-100 text-emerald-800">
                <?= (int)$com['member_count'] ?>+ Families
              </span>
            </div>

            <?php if (!empty($com['description'])): ?>
              <p class="text-[11px] text-stone-600"><?= htmlspecialchars($com['description']) ?></p>
            <?php endif; ?>

            <a href="<?= htmlspecialchars($com['whatsapp_url']) ?>" target="_blank" class="w-full py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs flex items-center justify-center space-x-1.5 transition shadow">
              <i class="fa-brands fa-whatsapp text-sm"></i>
              <span>Join WhatsApp Group</span>
            </a>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- ==================== 3-STEP VIVAH JOURNEY ==================== -->
  <section class="py-16 bg-[#FAF8F5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-2xl mx-auto mb-12 space-y-2">
        <h2 class="text-2xl sm:text-3xl font-cinzel font-bold text-stone-900">
          How Dheeraja Matrimony Works
        </h2>
        <p class="text-xs sm:text-sm text-stone-600">3 simple steps to find and finalize your sacred bond.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        
        <div class="p-6 rounded-3xl bg-white border border-amber-200/80 shadow-xs space-y-3">
          <div class="w-14 h-14 rounded-2xl bg-amber-100 text-maroon-800 font-cinzel font-bold text-xl flex items-center justify-center mx-auto border-2 border-amber-300">
            1
          </div>
          <h3 class="font-cinzel font-bold text-base text-stone-900">Create & Verify Biodata</h3>
          <p class="text-xs text-stone-600 leading-relaxed">
            Fill your family, education, gotra, and kundali details. Upload 4 authentic photos for guaranteed fast approval.
          </p>
        </div>

        <div class="p-6 rounded-3xl bg-white border border-amber-200/80 shadow-xs space-y-3">
          <div class="w-14 h-14 rounded-2xl bg-amber-100 text-maroon-800 font-cinzel font-bold text-xl flex items-center justify-center mx-auto border-2 border-amber-300">
            2
          </div>
          <h3 class="font-cinzel font-bold text-base text-stone-900">Connect & Match Gunas</h3>
          <p class="text-xs text-stone-600 leading-relaxed">
            Check astrological compatibility score, send Express Interests, chat in real-time, or request Vivah Sahayak mediation.
          </p>
        </div>

        <div class="p-6 rounded-3xl bg-white border border-amber-200/80 shadow-xs space-y-3">
          <div class="w-14 h-14 rounded-2xl bg-amber-100 text-maroon-800 font-cinzel font-bold text-xl flex items-center justify-center mx-auto border-2 border-amber-300">
            3
          </div>
          <h3 class="font-cinzel font-bold text-base text-stone-900">Family Meet & Shubh Vivah</h3>
          <p class="text-xs text-stone-600 leading-relaxed">
            Connect verified families over tea or phone and celebrate the beginning of lifelong happiness and prosperity.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- ==================== CALL TO ACTION / APP DOWNLOAD BANNER ==================== -->
  <section class="py-16 bg-gradient-to-r from-maroon-900 via-maroon-800 to-maroon-900 text-white relative overflow-hidden">
    <div class="absolute -right-16 -top-16 w-80 h-80 rounded-full bg-amber-500/10 blur-3xl"></div>
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6 relative z-10">
      
      <div class="w-16 h-16 rounded-2xl overflow-hidden border-2 border-amber-400 mx-auto shadow-lg bg-maroon-950">
        <img src="/assets/images/dheeraja_logo.jpg" alt="Dheeraja Logo" class="w-full h-full object-cover">
      </div>

      <h2 class="text-2xl sm:text-4xl font-cinzel font-bold text-amber-200 leading-tight">
        Ready to Discover Your Soulmate?
      </h2>

      <p class="text-xs sm:text-sm text-stone-300 max-w-xl mx-auto leading-relaxed">
        Join thousands of respected families who have found their ideal match through Dheeraja Matrimony. Take advantage of our free Launch VIP Pro promotion today.
      </p>

      <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
        <a href="/app" class="w-full sm:w-auto px-8 py-3.5 rounded-2xl bg-gradient-to-r from-amber-400 via-amber-500 to-amber-600 text-maroon-950 font-bold text-sm shadow-xl hover:scale-105 transition transform active:scale-95 flex items-center justify-center space-x-2 border border-amber-300">
          <i class="fa-solid fa-mobile-screen-button text-base"></i>
          <span>Enter Mobile App Experience</span>
        </a>
        <a href="/admin/login" class="w-full sm:w-auto px-6 py-3.5 rounded-2xl bg-white/10 hover:bg-white/20 text-white font-bold text-xs border border-white/20 transition">
          <span>Admin & Broker Login</span>
        </a>
      </div>

    </div>
  </section>

  <!-- ==================== ROYAL FOOTER ==================== -->
  <footer class="bg-white border-t border-amber-200/80 py-10 text-xs text-stone-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
      
      <div class="flex flex-col md:flex-row items-center justify-between pb-6 border-b border-stone-200 gap-4">
        <div class="flex items-center space-x-3">
          <div class="w-10 h-10 rounded-xl overflow-hidden border border-amber-400">
            <img src="/assets/images/dheeraja_logo.jpg" alt="Dheeraja" class="w-full h-full object-cover">
          </div>
          <div>
            <div class="font-cinzel font-bold text-base text-maroon-900">DHEERAJA MATRIMONY</div>
            <div class="text-[10px] text-amber-700 font-bold">Pavitra Rishtey • Shubh Vivah</div>
          </div>
        </div>

        <div class="flex items-center space-x-6 text-stone-500 font-semibold">
          <a href="/app" class="hover:text-maroon-800">Mobile App</a>
          <a href="#features" class="hover:text-maroon-800">Features</a>
          <a href="#whatsapp" class="hover:text-emerald-700">WhatsApp Groups</a>
          <a href="/admin/brokers" class="hover:text-maroon-800">Vivah Sahayaks</a>
          <a href="/admin/login" class="hover:text-maroon-800">Admin Portal</a>
        </div>
      </div>

      <div class="flex flex-col md:flex-row items-center justify-between text-stone-400 text-[11px] gap-2">
        <p>&copy; <?= date('Y') ?> Dheeraja Matrimony. All Rights Reserved. Trusted Indian Matrimonial Platform.</p>
        <p>100% Privacy Protected &bull; Govt ID &amp; 4-Photo Verification &bull; Anti-Fraud Shield</p>
      </div>

    </div>
  </footer>

  <!-- Fixed Floating Royal Bottom Dock (Cover Page Quick Hub) -->
  <div class="fixed bottom-3 left-3 right-3 sm:left-auto sm:right-6 sm:bottom-6 z-40 bg-white/95 backdrop-blur-xl border-2 border-amber-300 rounded-3xl p-2 sm:p-2.5 shadow-2xl flex items-center justify-between sm:justify-end space-x-2">
    
    <div class="flex items-center space-x-1.5">
      <!-- WhatsApp Outside -->
      <a href="<?= htmlspecialchars($socialWhatsappUrl ?? 'https://chat.whatsapp.com/invite/dheerajamatrimony') ?>" target="_blank" title="Join WhatsApp Community" class="w-10 h-10 rounded-2xl bg-emerald-500 hover:bg-emerald-600 text-white flex items-center justify-center text-lg shadow-md transition transform hover:scale-105 active:scale-95">
        <i class="fa-brands fa-whatsapp"></i>
      </a>

      <!-- Instagram Outside -->
      <a href="<?= htmlspecialchars($socialInstagramUrl ?? 'https://instagram.com/dheerajamatrimony') ?>" target="_blank" title="Follow on Instagram" class="w-10 h-10 rounded-2xl bg-gradient-to-tr from-[#fd1d1d] to-[#833ab4] hover:opacity-90 text-white flex items-center justify-center text-lg shadow-md transition transform hover:scale-105 active:scale-95">
        <i class="fa-brands fa-instagram"></i>
      </a>

      <!-- Facebook Outside -->
      <a href="<?= htmlspecialchars($socialFacebookUrl ?? 'https://facebook.com/dheerajamatrimony') ?>" target="_blank" title="Join Facebook Page" class="w-10 h-10 rounded-2xl bg-[#1877F2] hover:bg-blue-700 text-white flex items-center justify-center text-lg shadow-md transition transform hover:scale-105 active:scale-95">
        <i class="fa-brands fa-facebook"></i>
      </a>
    </div>

    <!-- Divider -->
    <div class="h-6 w-px bg-stone-200 mx-1"></div>

    <!-- Enter App (अलग से ऐप में अंदर जाने के लिए) -->
    <a href="/app" class="px-4 py-2.5 rounded-2xl bg-gradient-to-r from-amber-400 via-amber-500 to-amber-600 hover:from-amber-500 hover:to-amber-700 text-maroon-950 font-bold text-xs shadow-md transition transform active:scale-95 flex items-center space-x-2 border border-amber-300">
      <i class="fa-solid fa-crown text-maroon-900 text-sm"></i>
      <span>ऐप में प्रवेश करें &rarr;</span>
    </a>

  </div>

</body>
</html>
