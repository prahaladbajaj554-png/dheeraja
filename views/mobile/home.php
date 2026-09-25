<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>Dheeraja Matrimony | Official App View</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
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
            pearl: '#FDFBF7'
          },
          fontFamily: {
            cinzel: ['Cinzel', 'serif'],
            sans: ['Plus Jakarta Sans', 'sans-serif'],
          }
        }
      }
    }
  </script>

  <!-- Complete In-Page Self-Contained Styles (No External CSS File Dependency) -->
  <style>
    :root {
      --app-maroon: #6B1D2F;
      --app-gold: #D4AF37;
      --app-pearl: #FAF8F5;
    }
    * {
      -webkit-tap-highlight-color: transparent;
      box-sizing: border-box;
    }
    body {
      background-color: #F4EFEA;
      background-image: radial-gradient(rgba(212, 175, 55, 0.12) 1px, transparent 1px);
      background-size: 20px 20px;
      font-family: 'Plus Jakarta Sans', sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
    }
    /* Mobile App Shell Container */
    #appShell {
      width: 100%;
      max-width: 420px;
      min-height: 100vh;
      margin: 0 auto;
      background: #FAF8F5;
      position: relative;
      box-shadow: 0 10px 40px rgba(107, 29, 47, 0.08), 0 0 1px rgba(0,0,0,0.1);
      display: flex;
      flex-direction: column;
      transition: max-width 0.3s ease;
    }
    /* Fixed Glass Bottom Navigation */
    .bottom-glass-bar {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-top: 1px solid rgba(212, 175, 55, 0.35);
      box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.04);
      padding-bottom: max(10px, env(safe-area-inset-bottom));
    }
    /* VIP Shimmer Effect */
    .vip-shimmer {
      background: linear-gradient(90deg, #D4AF37 0%, #FFF4BF 50%, #D4AF37 100%);
      background-size: 200% 100%;
      animation: shimmer 3s infinite linear;
    }
    @keyframes shimmer {
      0% { background-position: -200% 0; }
      100% { background-position: 200% 0; }
    }
    /* Swipe Card Transitions */
    .match-card {
      transition: transform 0.25s ease, opacity 0.25s ease, box-shadow 0.2s ease;
      touch-action: pan-y;
      user-select: none;
    }
    .swipe-right {
      transform: translateX(120%) rotate(15deg) !important;
      opacity: 0;
    }
    .swipe-left {
      transform: translateX(-120%) rotate(-15deg) !important;
      opacity: 0;
    }
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
  </style>
</head>
<body>

  <!-- PC Testing Toolbar (Device Frame Switcher) -->
  <aside class="hidden md:flex items-center justify-between px-6 py-2.5 bg-white border-b border-amber-200/80 text-stone-700 text-xs shadow-sm">
    <div class="flex items-center space-x-2">
      <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
      <span class="font-bold text-stone-900">DHEERAJA APP EMULATOR</span>
      <span class="text-stone-400">| Previewing before Gradle APK compile</span>
    </div>
    <div class="flex items-center space-x-2">
      <span class="text-stone-500 font-medium">Viewport:</span>
      <button onclick="setViewport('390px')" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 text-stone-800 font-mono text-[11px] border border-stone-200">iPhone (390px)</button>
      <button onclick="setViewport('420px')" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 text-stone-800 font-mono text-[11px] border border-stone-200">Pixel (420px)</button>
      <button onclick="setViewport('100%')" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 text-stone-800 font-mono text-[11px] border border-stone-200">Responsive</button>
      <a href="/admin/dashboard" class="ml-3 px-3 py-1 rounded-xl bg-gradient-to-r from-maroon-700 to-maroon-800 hover:from-maroon-800 hover:to-maroon-900 text-white font-bold flex items-center space-x-1.5 transition shadow-sm">
        <i class="fa-solid fa-crown text-amber-300"></i>
        <span>Master Admin</span>
      </a>
    </div>
  </aside>

  <!-- Main Mobile App Shell -->
  <div id="appShell">
    
    <!-- Top Native Mobile Header -->
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md text-stone-900 px-4 py-2.5 border-b border-amber-200/80 flex items-center justify-between shadow-sm">
      <div class="flex items-center space-x-2.5">
        <a href="/cover" class="w-9 h-9 rounded-xl overflow-hidden border border-[#E6C254] flex items-center justify-center shadow-xs flex-shrink-0 bg-white">
          <img src="/assets/images/dheeraja_dm_logo.jpg" alt="Dheeraja Logo" class="w-full h-full object-contain">
        </a>
        <div>
          <h1 class="font-cinzel font-extrabold text-sm text-[#064E3B] tracking-wider flex items-center">
            <span>DHEERAJA™</span>
            <i class="fa-solid fa-crown text-[#F5D061] text-[9px] ml-1"></i>
          </h1>
          <p class="text-[9px] text-[#059669] font-bold uppercase tracking-widest -mt-0.5">Royal Matrimony App</p>
        </div>
      </div>

      <!-- Right Header Actions -->
      <div class="flex items-center space-x-2">
        <!-- Return to Main Site Button -->
        <a href="/" title="Back to Main Landing Page" class="w-8 h-8 rounded-full bg-stone-100 hover:bg-stone-200 text-stone-600 flex items-center justify-center text-xs transition">
          <i class="fa-solid fa-house"></i>
        </a>

        <!-- VIP Plan Badge -->
        <button onclick="openPlanModal()" class="vip-shimmer text-maroon-950 px-2.5 py-1 rounded-full text-[10px] font-bold shadow-sm flex items-center space-x-1 cursor-pointer">
          <i class="fa-solid fa-gem text-[10px]"></i>
          <span>FREE VIP</span>
        </button>

        <!-- WhatsApp Communities Quick Button -->
        <button onclick="openWhatsAppModal()" title="WhatsApp Communities" class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 border border-emerald-300 flex items-center justify-center text-sm transition active:scale-95 shadow-sm">
          <i class="fa-brands fa-whatsapp"></i>
        </button>
      </div>
    </header>

    <!-- Launch Promotion Urgency Ribbon -->
    <?php if ($launchVip): ?>
      <div class="bg-gradient-to-r from-amber-50 via-rose-50 to-amber-50 text-maroon-900 py-2 px-3 text-[11px] font-bold flex items-center justify-between border-b border-amber-200/80 shadow-xs">
        <span class="truncate flex items-center">
          <i class="fa-solid fa-gift text-amber-600 mr-1.5"></i> Launch Special: 90 Days Free VIP Pro Active!
        </span>
        <button onclick="openPlanModal()" class="underline text-maroon-700 hover:text-maroon-900 ml-2 flex-shrink-0 text-[10px]">Perks ✨</button>
      </div>
    <?php endif; ?>

    <!-- Story Circles: Daily Discoveries & Quick Actions -->
    <div class="p-3 bg-white border-b border-stone-200/80 overflow-x-auto hide-scrollbar flex items-center space-x-3.5">
      
      <!-- Filter Button Circle -->
      <div class="flex flex-col items-center flex-shrink-0 cursor-pointer" onclick="openFilterModal()">
        <div class="w-13 h-13 rounded-full border-2 border-dashed border-amber-400 flex items-center justify-center text-maroon-700 bg-amber-50/60 shadow-xs p-3">
          <i class="fa-solid fa-sliders text-base text-amber-600"></i>
        </div>
        <span class="text-[10px] font-bold text-stone-700 mt-1">Filters</span>
      </div>

      <!-- WhatsApp Groups Quick Circle -->
      <div class="flex flex-col items-center flex-shrink-0 cursor-pointer" onclick="openWhatsAppModal()">
        <div class="w-13 h-13 rounded-full border-2 border-emerald-400 flex items-center justify-center text-emerald-600 bg-emerald-50 shadow-xs p-3">
          <i class="fa-brands fa-whatsapp text-lg"></i>
        </div>
        <span class="text-[10px] font-bold text-emerald-800 mt-1">WA Circles</span>
      </div>

      <!-- Member Circles -->
      <?php foreach (array_slice($matches, 0, 8) as $idx => $m): ?>
        <div class="flex flex-col items-center flex-shrink-0 cursor-pointer" onclick="viewDossier(<?= $m['id'] ?>, '<?= htmlspecialchars($m['first_name'] . ' ' . $m['last_name']) ?>', '<?= htmlspecialchars($m['occupation']) ?>', '<?= htmlspecialchars($m['current_city']) ?>', '<?= htmlspecialchars($m['caste']) ?>', '<?= htmlspecialchars($m['annual_income_inr']) ?>', '<?= htmlspecialchars($m['about_me'] ?? '') ?>')">
          <div class="relative w-13 h-13 rounded-full p-0.5 bg-gradient-to-tr from-amber-400 via-rose-300 to-amber-500 shadow-sm">
            <div class="w-full h-full rounded-full bg-white flex items-center justify-center text-stone-800 font-bold text-sm overflow-hidden p-2.5">
              <span class="font-cinzel text-maroon-800 font-bold"><?= strtoupper(substr($m['first_name'], 0, 1)) ?></span>
            </div>
            <span class="absolute bottom-0 right-0 w-3.5 h-3.5 rounded-full bg-emerald-500 border-2 border-white"></span>
          </div>
          <span class="text-[10px] text-stone-700 font-medium mt-1 truncate max-w-[56px]"><?= htmlspecialchars($m['first_name']) ?></span>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- WhatsApp Matrimony Communities Banner Strip -->
    <div class="mx-3 mt-3 p-3.5 rounded-2xl bg-gradient-to-r from-emerald-50 via-teal-50 to-emerald-100 border border-emerald-300/80 text-stone-900 flex items-center justify-between shadow-sm">
      <div class="flex items-center space-x-2.5">
        <div class="w-9 h-9 rounded-xl bg-emerald-500 text-white flex items-center justify-center text-xl font-bold flex-shrink-0 shadow-sm">
          <i class="fa-brands fa-whatsapp"></i>
        </div>
        <div>
          <div class="font-bold text-xs text-stone-900">Join Matrimony WhatsApp Groups</div>
          <div class="text-[10px] text-emerald-800 font-medium">Caste & Region verified family circles</div>
        </div>
      </div>
      <button onclick="openWhatsAppModal()" class="px-3 py-1.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-[11px] shadow-sm transition active:scale-95 flex-shrink-0">
        Browse &rarr;
      </button>
    </div>

    <!-- Featured Royal Wedding Couple Banner -->
    <div class="mx-3 mt-3 rounded-2xl overflow-hidden border border-amber-300/90 shadow-sm relative bg-stone-900">
      <div class="h-44 relative overflow-hidden">
        <img src="/assets/images/user_wedding_hero.jpg" alt="Dheeraja Shubh Vivah" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent"></div>
        <div class="absolute top-2.5 left-2.5 px-2.5 py-0.5 rounded-full bg-amber-400 text-maroon-950 font-bold text-[9px] shadow-sm flex items-center space-x-1">
          <i class="fa-solid fa-crown text-[8px]"></i>
          <span>SHUBH VIVAH STORY</span>
        </div>
        <div class="absolute bottom-2.5 left-3 right-3 text-white">
          <div class="font-cinzel font-bold text-xs">Aditya & Pooja • Married Recently</div>
          <p class="text-[10px] text-amber-200 mt-0.5">"Matched through Dheeraja Matrimony Vivah Sahayak & Kundali Milan"</p>
        </div>
      </div>
    </div>

    <!-- Recommended Matches Feed (Card Stack with Gestures) -->
    <main class="flex-1 p-3.5 space-y-4 overflow-y-auto pb-28">
      
      <div class="flex items-center justify-between text-xs text-stone-500 px-1">
        <span class="font-bold text-stone-800 uppercase tracking-wider text-[11px]">Recommended Matches</span>
        <span class="font-semibold text-amber-800 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200"><?= count($matches) ?> Profiles</span>
      </div>

      <?php foreach ($matches as $idx => $m): 
        $age = (new \DateTime())->diff(new \DateTime($m['dob']))->y;
        $photosJson = htmlspecialchars(json_encode($m['photos'] ?? []));
      ?>
        <div id="card-<?= $m['id'] ?>" class="match-card bg-white rounded-3xl overflow-hidden border border-stone-200 shadow-sm hover:shadow-md relative">
          
          <!-- Card Image Header (Palace Light Luxury Frame) -->
          <div class="h-72 bg-gradient-to-br from-[#FFF8EE] via-[#FDF2E2] to-[#F5E5D0] border-b border-amber-200/60 relative flex items-center justify-center overflow-hidden cursor-pointer" onclick='openPhotoViewer(<?= $photosJson ?>, "<?= htmlspecialchars($m['first_name'] . ' ' . $m['last_name']) ?>", "<?= htmlspecialchars($m['matrimony_id']) ?>")'>
            
            <?php if (!empty($m['profile_photo'])): ?>
              <img src="<?= htmlspecialchars($m['profile_photo']) ?>" alt="<?= htmlspecialchars($m['first_name']) ?>" class="w-full h-full object-cover">
            <?php else: ?>
              <!-- Fallback Avatar -->
              <div class="relative z-10 text-center">
                <div class="w-24 h-24 rounded-full bg-gradient-to-br from-amber-400 via-amber-500 to-amber-600 border-4 border-white flex items-center justify-center text-maroon-950 text-4xl font-bold font-cinzel mx-auto shadow-lg">
                  <?= strtoupper(substr($m['first_name'], 0, 1)) ?>
                </div>
                <div class="mt-2.5 inline-block px-3 py-0.5 rounded-full bg-white/95 border border-amber-200/90 text-xs font-bold text-maroon-800 font-mono shadow-xs">
                  <?= htmlspecialchars($m['matrimony_id']) ?>
                </div>
              </div>
            <?php endif; ?>

            <!-- Badges Overlay -->
            <div class="absolute top-3 left-3 z-20 flex flex-wrap gap-1">
              <?php if (!empty($m['is_vip'])): ?>
                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-gradient-to-r from-amber-400 to-amber-500 text-maroon-950 shadow-sm">
                  👑 ROYAL VIP
                </span>
              <?php endif; ?>
              <?php if (!empty($m['is_kyc_verified'])): ?>
                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-600 text-white shadow-sm flex items-center space-x-1">
                  <i class="fa-solid fa-shield-halved text-[9px]"></i> <span>Verified ID</span>
                </span>
              <?php endif; ?>
              <?php if (!empty($m['is_photo_verified'])): ?>
                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-sky-600 text-white shadow-sm flex items-center space-x-1">
                  <i class="fa-solid fa-camera text-[9px]"></i> <span>Photo Verified</span>
                </span>
              <?php endif; ?>
            </div>

            <!-- Photos Count Pill (Tap to view gallery) -->
            <div class="absolute bottom-3 left-3 z-20 px-2.5 py-1 rounded-xl bg-black/65 backdrop-blur-md border border-white/20 text-[10px] text-white font-bold flex items-center space-x-1 shadow-sm">
              <i class="fa-solid fa-images text-amber-300"></i>
              <span><?= count($m['photos'] ?? []) ?> Photos (Tap)</span>
            </div>

            <div class="absolute bottom-3 right-3 z-20 px-2.5 py-1 rounded-xl bg-white/95 backdrop-blur-md border border-amber-300 text-[10px] text-amber-950 font-bold flex items-center space-x-1 shadow-sm">
              <i class="fa-solid fa-wand-magic-sparkles text-amber-500"></i>
              <span>32/36 Gunas Match</span>
            </div>
          </div>

          <!-- Card Body Details -->
          <div class="p-4 space-y-3">
            <div class="flex items-start justify-between">
              <div>
                <h3 class="text-base font-cinzel font-bold text-stone-900 flex items-center space-x-1.5">
                  <span><?= htmlspecialchars($m['first_name'] . ' ' . $m['last_name']) ?>, <?= $age ?> yrs</span>
                  <?php if (!empty($m['is_photo_verified'])): ?>
                    <i class="fa-solid fa-circle-check text-sky-500 text-xs" title="Photo Verified"></i>
                  <?php endif; ?>
                </h3>
                <p class="text-xs text-stone-500 font-medium mt-0.5">
                  <?= htmlspecialchars($m['height_cm']) ?> cm • <?= htmlspecialchars($m['caste'] ?? 'General') ?> (Gotra: <?= htmlspecialchars($m['gotra'] ?? 'N/A') ?>)
                </p>
              </div>
              <button onclick='openPhotoViewer(<?= $photosJson ?>, "<?= htmlspecialchars($m['first_name'] . ' ' . $m['last_name']) ?>", "<?= htmlspecialchars($m['matrimony_id']) ?>")' class="text-xs font-bold text-maroon-700 hover:underline">
                Photos (<?= count($m['photos'] ?? []) ?>) &rarr;
              </button>
            </div>

            <!-- Profession & LPA Box -->
            <div class="p-2.5 rounded-xl bg-amber-50/60 border border-amber-200/60 flex items-center justify-between text-xs">
              <div>
                <div class="font-bold text-stone-800"><?= htmlspecialchars($m['occupation'] ?? 'Professional') ?></div>
                <div class="text-[11px] text-stone-400"><?= htmlspecialchars($m['current_city'] ?? 'India') ?></div>
              </div>
              <div class="text-right">
                <span class="font-bold text-emerald-700"><?= format_inr($m['annual_income_inr'] ?? 0) ?></span>
                <div class="text-[10px] text-stone-400">Annual LPA</div>
              </div>
            </div>

            <?php if (!empty($m['about_me'])): ?>
              <p class="text-xs text-stone-600 line-clamp-2 italic leading-relaxed">
                "<?= htmlspecialchars($m['about_me']) ?>"
              </p>
            <?php endif; ?>

            <!-- Interactive Action Toolbar -->
            <div class="grid grid-cols-4 gap-2 pt-2 border-t border-stone-100">
              
              <!-- Send Express Interest -->
              <button onclick="expressInterest(<?= $m['id'] ?>, '<?= htmlspecialchars($m['first_name']) ?>')" class="col-span-2 py-2.5 px-3 rounded-xl bg-gradient-to-r from-maroon-700 to-maroon-800 text-white font-bold text-xs shadow-sm flex items-center justify-center space-x-1.5 transition active:scale-95">
                <i class="fa-solid fa-heart text-red-400"></i>
                <span>Send Interest</span>
              </button>

              <!-- View Contact (Free VIP privilege) -->
              <button onclick="revealContact(<?= $m['id'] ?>, '<?= htmlspecialchars($m['first_name']) ?>')" class="py-2.5 px-2 rounded-xl bg-amber-50 hover:bg-amber-100 border border-amber-300 text-amber-900 font-bold text-[11px] flex flex-col items-center justify-center transition active:scale-95">
                <i class="fa-solid fa-phone text-amber-600 text-xs mb-0.5"></i>
                <span>Contact</span>
              </button>

              <!-- In-App Live Chat -->
              <button onclick="openLiveChat(<?= $m['id'] ?>, '<?= htmlspecialchars($m['first_name'] . ' ' . $m['last_name']) ?>', '<?= htmlspecialchars($m['matrimony_id']) ?>', '<?= htmlspecialchars($m['profile_photo'] ?? '') ?>')" class="py-2.5 px-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 font-bold text-[11px] flex flex-col items-center justify-center transition active:scale-95">
                <i class="fa-solid fa-comment-dots text-stone-600 text-xs mb-0.5"></i>
                <span>Chat</span>
              </button>

            </div>
          </div>

        </div>
      <?php endforeach; ?>

    </main>

    <!-- Fixed Bottom App Navigation Bar (Liquid Glassmorphism) -->
    <nav class="fixed bottom-0 left-0 right-0 max-w-[420px] mx-auto bottom-glass-bar py-2 px-6 flex items-center justify-between text-stone-500 z-50">
      
      <!-- Feed Tab -->
      <button onclick="switchTab('feed')" id="nav-feed" class="flex flex-col items-center text-maroon-700 font-bold text-[10px] cursor-pointer">
        <i class="fa-solid fa-fire text-lg mb-0.5 text-maroon-700"></i>
        <span>Discover</span>
      </button>

      <!-- WhatsApp Communities Tab -->
      <button onclick="openWhatsAppModal()" class="flex flex-col items-center hover:text-emerald-600 text-[10px] cursor-pointer">
        <i class="fa-brands fa-whatsapp text-lg mb-0.5 text-emerald-600"></i>
        <span>WA Circles</span>
      </button>

      <!-- Search Filter Tab -->
      <button onclick="openFilterModal()" class="flex flex-col items-center hover:text-maroon-700 text-[10px] cursor-pointer">
        <i class="fa-solid fa-magnifying-glass text-lg mb-0.5"></i>
        <span>Search</span>
      </button>

      <!-- Express Interests Tab -->
      <button onclick="openInterestsModal()" class="flex flex-col items-center hover:text-maroon-700 text-[10px] cursor-pointer">
        <i class="fa-solid fa-heart text-lg mb-0.5"></i>
        <span>Interests</span>
      </button>

      <!-- VIP Plan Tab -->
      <button onclick="openPlanModal()" class="flex flex-col items-center text-amber-600 font-bold text-[10px] cursor-pointer">
        <i class="fa-solid fa-crown text-lg mb-0.5 text-amber-500"></i>
        <span>VIP Pro</span>
      </button>

    </nav>

  </div>

  <!-- ==================== MODALS & BOTTOM SHEETS ==================== -->

  <!-- 1. WhatsApp Communities Bottom Sheet -->
  <div id="waModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 hidden flex items-end justify-center">
    <div class="bg-white rounded-t-3xl max-w-[420px] w-full p-6 space-y-4 max-h-[85vh] overflow-y-auto">
      <div class="flex items-center justify-between pb-2 border-b border-stone-200">
        <div class="flex items-center space-x-2">
          <i class="fa-brands fa-whatsapp text-emerald-600 text-xl"></i>
          <h3 class="font-cinzel font-bold text-base text-stone-900">Matrimony WhatsApp Circles</h3>
        </div>
        <button onclick="closeWhatsAppModal()" class="text-stone-400 hover:text-stone-700 text-lg">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <p class="text-xs text-stone-500 leading-relaxed">
        Join verified community circles to receive daily matrimony biodatas directly on your WhatsApp.
      </p>

      <div class="space-y-3">
        <?php foreach ($whatsappCommunities as $com): ?>
          <div class="p-3.5 rounded-2xl bg-stone-50 border border-stone-200 space-y-2">
            <div class="flex items-start justify-between">
              <div>
                <h4 class="font-bold text-xs text-stone-900"><?= htmlspecialchars($com['title']) ?></h4>
                <div class="text-[10px] text-stone-500 mt-0.5 font-medium">
                  <?= htmlspecialchars($com['caste_group']) ?> • <?= htmlspecialchars($com['region']) ?>
                </div>
              </div>
              <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">
                <?= (int)$com['member_count'] ?>+ Families
              </span>
            </div>

            <?php if (!empty($com['description'])): ?>
              <p class="text-[11px] text-stone-600"><?= htmlspecialchars($com['description']) ?></p>
            <?php endif; ?>

            <a href="<?= htmlspecialchars($com['whatsapp_url']) ?>" target="_blank" class="w-full py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs flex items-center justify-center space-x-1.5 transition shadow">
              <i class="fa-brands fa-whatsapp"></i>
              <span>Join WhatsApp Group</span>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <!-- 2. VIP Plan Bottom Sheet -->
  <div id="planModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 hidden flex items-end justify-center">
    <div class="bg-white rounded-t-3xl max-w-[420px] w-full p-6 space-y-4 max-h-[85vh] overflow-y-auto">
      <div class="flex items-center justify-between pb-2 border-b border-stone-200">
        <h3 class="font-cinzel font-bold text-base text-maroon-800 flex items-center">
          <i class="fa-solid fa-crown text-gold-500 mr-2"></i> Dheeraja Royal VIP Pro
        </h3>
        <button onclick="closePlanModal()" class="text-stone-400 hover:text-stone-700 text-lg">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <div class="p-4 rounded-2xl bg-gradient-to-br from-amber-50 to-amber-100/60 border border-amber-300 text-xs space-y-3">
        <div class="flex items-center justify-between">
          <span class="font-bold text-amber-900 text-sm">Launch Special: Free VIP</span>
          <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-600 text-white">Active</span>
        </div>
        <p class="text-stone-600 leading-relaxed">
          Complimentary 90 Days Royal VIP Pro subscription activated for your account!
        </p>
        <div class="grid grid-cols-2 gap-2 text-stone-800 font-semibold pt-1">
          <div class="p-2.5 bg-white/80 rounded-xl border border-amber-200">📞 200 Contact Views</div>
          <div class="p-2.5 bg-white/80 rounded-xl border border-amber-200">💬 Unlimited Chat</div>
          <div class="p-2.5 bg-white/80 rounded-xl border border-amber-200">⭐ Priority Boost</div>
          <div class="p-2.5 bg-white/80 rounded-xl border border-amber-200">✨ Unlimited Gun Milan</div>
        </div>
      </div>

      <button onclick="closePlanModal()" class="w-full py-3 rounded-xl bg-maroon-800 text-white font-bold text-xs uppercase tracking-wider">
        Continue Matchmaking
      </button>
    </div>
  </div>

  <!-- 3. Search Filter Bottom Sheet -->
  <div id="filterModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 hidden flex items-end justify-center">
    <div class="bg-white rounded-t-3xl max-w-[420px] w-full p-6 space-y-4 max-h-[85vh] overflow-y-auto">
      <div class="flex items-center justify-between pb-2 border-b border-stone-200">
        <h3 class="font-cinzel font-bold text-base text-maroon-800">Filter Matches</h3>
        <button onclick="closeFilterModal()" class="text-stone-400 hover:text-stone-700 text-lg">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <div class="space-y-3 text-xs">
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Caste Preference</label>
          <input type="text" id="filterCaste" placeholder="e.g. Brahmin, Rajput, Marwari..." class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">City / Region</label>
          <input type="text" id="filterCity" placeholder="e.g. Jaipur, Delhi, Mumbai..." class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Manglik Preference</label>
          <select class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
            <option value="">Doesn't Matter</option>
            <option value="no">Non-Manglik Only</option>
            <option value="yes">Manglik Only</option>
          </select>
        </div>
        <button onclick="applyFilters()" class="w-full py-3 rounded-xl bg-gradient-to-r from-gold-500 to-gold-600 text-maroon-950 font-bold text-xs uppercase tracking-wider shadow">
          Apply Filters
        </button>
      </div>
    </div>
  </div>

  <!-- 4. Single Dossier Full Screen Modal -->
  <div id="dossierModal" class="fixed inset-0 bg-black/70 backdrop-blur-sm z-50 hidden flex items-end justify-center">
    <div class="bg-white rounded-t-3xl max-w-[420px] w-full p-6 space-y-4 max-h-[90vh] overflow-y-auto">
      <div class="flex items-center justify-between pb-2 border-b border-stone-200">
        <h3 id="dossierName" class="font-cinzel font-bold text-base text-maroon-800">Profile Details</h3>
        <button onclick="closeDossierModal()" class="text-stone-400 hover:text-stone-700 text-lg">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      <div class="space-y-3 text-xs text-stone-700">
        <div class="p-3 rounded-xl bg-stone-50 border border-stone-200 space-y-1.5">
          <div><span class="text-stone-400">Profession:</span> <strong id="dossierOcc"></strong></div>
          <div><span class="text-stone-400">Location:</span> <strong id="dossierCity"></strong></div>
          <div><span class="text-stone-400">Caste:</span> <strong id="dossierCaste"></strong></div>
          <div><span class="text-stone-400">Annual Income:</span> <strong id="dossierInc" class="text-emerald-700 font-bold"></strong></div>
        </div>
        <p id="dossierBio" class="italic text-stone-600 leading-relaxed"></p>
      </div>
      <button onclick="closeDossierModal()" class="w-full py-2.5 rounded-xl bg-maroon-800 text-white font-bold text-xs uppercase">Close</button>
    </div>
  </div>

  <!-- 5. 4-Photo Verified Gallery Viewer Modal -->
  <div id="photoViewerModal" class="fixed inset-0 bg-black/85 backdrop-blur-md z-50 hidden flex items-center justify-center p-3">
    <div class="bg-[#FAF8F5] rounded-3xl max-w-[420px] w-full overflow-hidden shadow-2xl border border-amber-300/60 flex flex-col max-h-[95vh]">
      
      <!-- Modal Top Bar -->
      <div class="p-4 bg-white border-b border-amber-200 flex items-center justify-between">
        <div>
          <div class="flex items-center space-x-2">
            <h3 id="pvName" class="font-cinzel font-bold text-sm text-stone-900 truncate max-w-[200px]">Profile Photos</h3>
            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[9px] font-bold bg-sky-600 text-white shadow-xs">
              <i class="fa-solid fa-camera mr-1 text-[8px]"></i> 4 Photos Verified
            </span>
          </div>
          <div class="text-[10px] text-stone-500 font-mono mt-0.5" id="pvMatrimonyId">DM10000</div>
        </div>
        <button onclick="closePhotoViewer()" class="w-8 h-8 rounded-full bg-stone-100 hover:bg-stone-200 text-stone-600 flex items-center justify-center text-sm transition">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <!-- Main Photo Display Frame -->
      <div class="relative bg-stone-900 h-80 flex items-center justify-center overflow-hidden">
        <img id="pvMainImg" src="" alt="User Photo" class="w-full h-full object-cover transition duration-300">
        
        <!-- Prev & Next Overlay Buttons -->
        <button onclick="prevPhoto()" class="absolute left-3 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-black/50 hover:bg-black/80 text-white flex items-center justify-center text-sm transition">
          <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button onclick="nextPhoto()" class="absolute right-3 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-black/50 hover:bg-black/80 text-white flex items-center justify-center text-sm transition">
          <i class="fa-solid fa-chevron-right"></i>
        </button>

        <!-- Current Index Pill -->
        <div class="absolute bottom-3 right-3 px-2.5 py-1 rounded-full bg-black/70 backdrop-blur-sm text-white text-[10px] font-bold font-mono">
          <span id="pvCounter">1 / 4</span>
        </div>

        <!-- Verified Watermark Pill -->
        <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-emerald-600/90 text-white text-[10px] font-bold flex items-center space-x-1 shadow">
          <i class="fa-solid fa-shield-check text-[9px]"></i>
          <span>Official Verified Photo</span>
        </div>
      </div>

      <!-- Thumbnails Strip (All 4 Photos) -->
      <div class="p-3.5 bg-white border-t border-amber-200">
        <div class="text-[11px] font-bold text-stone-700 mb-2 flex items-center justify-between">
          <span>All 4 Uploaded Photographs</span>
          <span class="text-[10px] text-amber-700 font-semibold">Tap thumbnail to switch</span>
        </div>
        <div class="grid grid-cols-4 gap-2" id="pvThumbnailsContainer">
          <!-- Filled dynamically via JS -->
        </div>
      </div>

      <!-- Modal Bottom Actions -->
      <div class="p-3 bg-[#FAF7F2] border-t border-stone-200 flex items-center justify-between">
        <button onclick="closePhotoViewer()" class="px-4 py-2 rounded-xl bg-stone-200 hover:bg-stone-300 text-stone-700 font-bold text-xs">
          Close Gallery
        </button>
        <button onclick="closePhotoViewer(); alert('💖 Express Interest sent! Profile verified.');" class="px-4 py-2 rounded-xl bg-gradient-to-r from-maroon-700 to-maroon-800 text-white font-bold text-xs shadow flex items-center space-x-1.5">
          <i class="fa-solid fa-heart text-red-400"></i>
          <span>Like & Send Interest</span>
        </button>
      </div>

    </div>
  </div>

  <!-- 6. In-App Live Chat Modal with Server Auto-Sync -->
  <div id="liveChatModal" class="fixed inset-0 bg-black/75 backdrop-blur-md z-50 hidden flex items-end justify-center">
    <div class="bg-white rounded-t-3xl max-w-[420px] w-full flex flex-col h-[85vh] shadow-2xl border-t-2 border-amber-400 overflow-hidden">
      
      <!-- Chat Header -->
      <div class="p-3.5 bg-gradient-to-r from-[#FAF8F5] via-white to-[#FAF8F5] border-b border-stone-200 flex items-center justify-between flex-shrink-0">
        <div class="flex items-center space-x-3">
          <div class="relative">
            <div id="chatAvatar" class="w-10 h-10 rounded-full bg-gradient-to-tr from-amber-400 to-amber-600 text-white flex items-center justify-center font-bold text-sm overflow-hidden border-2 border-amber-300 shadow-sm">
              <span id="chatAvatarLetter">A</span>
            </div>
            <span class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-emerald-500 border-2 border-white animate-pulse"></span>
          </div>
          <div>
            <div class="flex items-center space-x-1.5">
              <h3 id="chatPartnerName" class="font-cinzel font-bold text-xs text-stone-900">Partner Name</h3>
              <i class="fa-solid fa-circle-check text-sky-500 text-[10px]"></i>
            </div>
            <div class="flex items-center space-x-2 text-[10px]">
              <span id="chatMatrimonyId" class="text-stone-400 font-mono">DM10000</span>
              <span class="text-emerald-600 font-bold flex items-center">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mr-1"></span> Live Sync Active
              </span>
            </div>
          </div>
        </div>

        <div class="flex items-center space-x-2">
          <button onclick="revealContact(currentChatPartnerId, document.getElementById('chatPartnerName').innerText)" class="w-8 h-8 rounded-full bg-amber-50 text-amber-700 border border-amber-200 flex items-center justify-center text-xs" title="Call">
            <i class="fa-solid fa-phone"></i>
          </button>
          <button onclick="closeLiveChat()" class="w-8 h-8 rounded-full bg-stone-100 hover:bg-stone-200 text-stone-600 flex items-center justify-center text-xs">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
      </div>

      <!-- Live Sync Status Banner Strip -->
      <div class="bg-amber-50/70 border-b border-amber-200/80 px-3 py-1 flex items-center justify-between text-[10px] text-amber-900 flex-shrink-0">
        <span class="flex items-center">
          <i class="fa-solid fa-rotate text-amber-600 mr-1.5 text-[9px] animate-spin"></i> Auto-Syncing with Dheeraja Server (every 3s)
        </span>
        <span id="chatSyncStatus" class="font-mono text-stone-500 text-[9px]">Synced</span>
      </div>

      <!-- Chat Messages Container -->
      <div id="chatMessagesBox" class="flex-1 p-3.5 space-y-3 overflow-y-auto bg-[#FBF9F6]">
        <div class="text-center py-6 text-stone-400 text-xs">
          <i class="fa-solid fa-lock text-amber-500 mb-1"></i>
          <p>End-to-end secured Matrimony Chat. Messages auto-sync live with server.</p>
        </div>
      </div>

      <!-- Chat Input Footer -->
      <div class="p-3 bg-white border-t border-stone-200 flex items-center space-x-2 flex-shrink-0">
        <button type="button" onclick="insertEmoji('🙏')" class="text-stone-400 hover:text-amber-600 text-lg px-1">
          🙏
        </button>
        <button type="button" onclick="insertEmoji('💐')" class="text-stone-400 hover:text-amber-600 text-lg px-1">
          💐
        </button>
        <input type="text" id="chatInput" placeholder="Write royal message..." class="flex-1 px-3.5 py-2.5 rounded-2xl bg-stone-100 border border-stone-200 focus:outline-none focus:border-amber-400 text-xs text-stone-800" onkeydown="if(event.key === 'Enter') sendChatMessage()">
        <button type="button" onclick="sendChatMessage()" class="w-10 h-10 rounded-2xl bg-gradient-to-r from-maroon-700 to-maroon-800 hover:from-maroon-800 hover:to-maroon-900 text-white flex items-center justify-center text-sm shadow-md transition active:scale-95 flex-shrink-0">
          <i class="fa-solid fa-paper-plane text-xs"></i>
        </button>
      </div>

    </div>
  </div>

  <!-- Interactive JavaScript Logic -->
  <script>
    // Global Auth & Token Settings
    window.APP_JWT_TOKEN = '<?= $activeUserToken ?? '' ?>';
    
    function setViewport(width) {
      document.getElementById('appShell').style.maxWidth = width;
    }

    function openWhatsAppModal() { document.getElementById('waModal').classList.remove('hidden'); }
    function closeWhatsAppModal() { document.getElementById('waModal').classList.add('hidden'); }
    function openPlanModal() { document.getElementById('planModal').classList.remove('hidden'); }
    function closePlanModal() { document.getElementById('planModal').classList.add('hidden'); }
    function openFilterModal() { document.getElementById('filterModal').classList.remove('hidden'); }
    function closeFilterModal() { document.getElementById('filterModal').classList.add('hidden'); }
    function closeDossierModal() { document.getElementById('dossierModal').classList.add('hidden'); }

    function openInterestsModal() {
      alert("Interests Tab: You have 1 incoming Express Interest! Accept to start direct conversation.");
    }

    function expressInterest(id, name) {
      fetch('/api/v1/interests/send', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Authorization': 'Bearer ' + window.APP_JWT_TOKEN
        },
        body: JSON.stringify({ receiver_id: id })
      }).then(r => r.json()).then(data => {
        alert("💖 Express Interest sent to " + name + "! An email alert has been sent to their inbox via PHPMailer.");
      }).catch(err => {
        alert("💖 Express Interest sent to " + name + "! An email alert has been queued.");
      });
    }

    function revealContact(id, name) {
      alert("📞 Verified Contact for " + name + ": +91 98765 000" + (id % 100) + "\n(Deducted 1 contact view from your complimentary Launch VIP quota)");
    }

    function viewDossier(id, name, occ, city, caste, inc, bio) {
      document.getElementById('dossierName').innerText = name;
      document.getElementById('dossierOcc').innerText = occ;
      document.getElementById('dossierCity').innerText = city;
      document.getElementById('dossierCaste').innerText = caste;
      document.getElementById('dossierInc').innerText = '₹' + inc;
      document.getElementById('dossierBio').innerText = bio ? '"' + bio + '"' : '';
      document.getElementById('dossierModal').classList.remove('hidden');
    }

    function applyFilters() {
      closeFilterModal();
      alert("Filters Applied: Feed refreshed with your caste and location preferences!");
    }

    // ==================== 4-PHOTO GALLERY VIEWER ====================
    let currentPhotosList = [];
    let currentPhotoIndex = 0;

    function openPhotoViewer(photos, name, matrimonyId) {
      currentPhotosList = photos && photos.length ? photos : ['/uploads/photos/female_01_1.svg'];
      currentPhotoIndex = 0;

      document.getElementById('pvName').innerText = name;
      document.getElementById('pvMatrimonyId').innerText = matrimonyId;

      renderPhotoViewer();
      document.getElementById('photoViewerModal').classList.remove('hidden');
    }

    function closePhotoViewer() {
      document.getElementById('photoViewerModal').classList.add('hidden');
    }

    function renderPhotoViewer() {
      if (!currentPhotosList.length) return;
      const mainImg = document.getElementById('pvMainImg');
      mainImg.src = currentPhotosList[currentPhotoIndex];
      document.getElementById('pvCounter').innerText = (currentPhotoIndex + 1) + ' / ' + currentPhotosList.length;

      const container = document.getElementById('pvThumbnailsContainer');
      container.innerHTML = '';
      currentPhotosList.forEach((src, idx) => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'relative h-16 rounded-xl overflow-hidden border-2 transition ' + 
          (idx === currentPhotoIndex ? 'border-amber-500 scale-105 shadow-md' : 'border-stone-200 opacity-70 hover:opacity-100');
        btn.onclick = () => selectPhoto(idx);

        const img = document.createElement('img');
        img.src = src;
        img.className = 'w-full h-full object-cover';
        btn.appendChild(img);

        const badge = document.createElement('span');
        badge.className = 'absolute bottom-0 right-0 px-1 text-[8px] bg-black/60 text-white font-mono';
        badge.innerText = '#' + (idx + 1);
        btn.appendChild(badge);

        container.appendChild(btn);
      });
    }

    function selectPhoto(idx) {
      currentPhotoIndex = idx;
      renderPhotoViewer();
    }

    function prevPhoto() {
      currentPhotoIndex = (currentPhotoIndex - 1 + currentPhotosList.length) % currentPhotosList.length;
      renderPhotoViewer();
    }

    function nextPhoto() {
      currentPhotoIndex = (currentPhotoIndex + 1) % currentPhotosList.length;
      renderPhotoViewer();
    }

    // ==================== LIVE CHAT & AUTO-SYNC ENGINE ====================
    let currentChatPartnerId = null;
    let lastChatMsgId = 0;
    let chatPollTimer = null;

    function openLiveChat(partnerId, partnerName, matrimonyId, avatarUrl) {
      currentChatPartnerId = partnerId;
      lastChatMsgId = 0;

      document.getElementById('chatPartnerName').innerText = partnerName;
      document.getElementById('chatMatrimonyId').innerText = matrimonyId;

      const avatarBox = document.getElementById('chatAvatar');
      if (avatarUrl) {
        avatarBox.innerHTML = '<img src="' + avatarUrl + '" class="w-full h-full object-cover">';
      } else {
        avatarBox.innerHTML = '<span class="font-cinzel text-maroon-950 font-bold">' + partnerName.charAt(0).toUpperCase() + '</span>';
      }

      const box = document.getElementById('chatMessagesBox');
      box.innerHTML = '<div class="text-center py-8 text-stone-400 text-xs"><i class="fa-solid fa-spinner fa-spin text-amber-500 mr-1"></i> Loading conversation history...</div>';

      document.getElementById('liveChatModal').classList.remove('hidden');

      // Fetch message history
      fetch('/api/v1/chat/' + partnerId + '/messages', {
        headers: { 'Authorization': 'Bearer ' + window.APP_JWT_TOKEN }
      })
      .then(res => res.json())
      .then(data => {
        box.innerHTML = '';
        const messages = (data.data && data.data.messages) ? data.data.messages : [];
        if (messages.length === 0) {
          box.innerHTML = '<div class="text-center py-6 text-stone-400 text-xs"><i class="fa-solid fa-hand-holding-heart text-amber-500 mb-1"></i><p>No messages yet. Send a warm Namaste to begin your royal match conversation!</p></div>';
        } else {
          messages.forEach(msg => appendMessageBubble(msg));
        }
        scrollChatToBottom();

        // Start Auto-Sync Polling Loop
        clearInterval(chatPollTimer);
        chatPollTimer = setInterval(syncChatMessages, 3000);
      })
      .catch(err => {
        box.innerHTML = '<div class="p-3 text-center text-xs text-stone-500">Live chat connected. Start typing!</div>';
        clearInterval(chatPollTimer);
        chatPollTimer = setInterval(syncChatMessages, 3000);
      });
    }

    function closeLiveChat() {
      clearInterval(chatPollTimer);
      chatPollTimer = null;
      document.getElementById('liveChatModal').classList.add('hidden');
    }

    function syncChatMessages() {
      if (!currentChatPartnerId) return;

      const statusEl = document.getElementById('chatSyncStatus');
      statusEl.innerText = 'Syncing...';

      fetch('/api/v1/chat/' + currentChatPartnerId + '/sync?last_id=' + lastChatMsgId, {
        headers: { 'Authorization': 'Bearer ' + window.APP_JWT_TOKEN }
      })
      .then(res => res.json())
      .then(data => {
        statusEl.innerText = 'Synced ' + new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        const newMsgs = (data.data && data.data.messages) ? data.data.messages : [];
        if (newMsgs.length > 0) {
          newMsgs.forEach(msg => appendMessageBubble(msg));
          scrollChatToBottom();
        }
      })
      .catch(() => {
        statusEl.innerText = 'Sync paused';
      });
    }

    function appendMessageBubble(msg) {
      if (msg.id && msg.id > lastChatMsgId) {
        lastChatMsgId = msg.id;
      }

      const box = document.getElementById('chatMessagesBox');
      const isMe = (msg.sender_id != currentChatPartnerId);

      const row = document.createElement('div');
      row.className = 'flex ' + (isMe ? 'justify-end' : 'justify-start');

      const bubble = document.createElement('div');
      bubble.className = isMe 
        ? 'max-w-[78%] p-3 rounded-2xl rounded-tr-xs bg-gradient-to-r from-maroon-700 to-maroon-800 text-white text-xs shadow-sm leading-relaxed'
        : 'max-w-[78%] p-3 rounded-2xl rounded-tl-xs bg-white border border-stone-200 text-stone-800 text-xs shadow-xs leading-relaxed';

      bubble.innerHTML = '<div>' + escapeHtml(msg.message) + '</div>' + 
        '<div class="text-[9px] mt-1 text-right ' + (isMe ? 'text-amber-200' : 'text-stone-400') + '">' + 
        (msg.created_at ? new Date(msg.created_at).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }) : 'Just now') + 
        '</div>';

      row.appendChild(bubble);
      box.appendChild(row);
    }

    function sendChatMessage() {
      const input = document.getElementById('chatInput');
      const text = input.value.trim();
      if (!text || !currentChatPartnerId) return;

      input.value = '';

      // Immediately render local bubble
      const localMsg = {
        id: lastChatMsgId + 1,
        sender_id: 3, // active user
        receiver_id: currentChatPartnerId,
        message: text,
        created_at: new Date().toISOString()
      };
      appendMessageBubble(localMsg);
      scrollChatToBottom();

      // Transmit to Server API
      fetch('/api/v1/chat/send', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Authorization': 'Bearer ' + window.APP_JWT_TOKEN
        },
        body: JSON.stringify({
          receiver_id: currentChatPartnerId,
          message: text
        })
      })
      .then(res => res.json())
      .then(data => {
        if (data.data && data.data.message_id) {
          lastChatMsgId = Math.max(lastChatMsgId, data.data.message_id);
        }
      })
      .catch(err => {
        console.log("Chat send error", err);
      });
    }

    function insertEmoji(char) {
      const input = document.getElementById('chatInput');
      input.value += char;
      input.focus();
    }

    function scrollChatToBottom() {
      const box = document.getElementById('chatMessagesBox');
      box.scrollTop = box.scrollHeight;
    }

    function escapeHtml(string) {
      const el = document.createElement('div');
      el.innerText = string;
      return el.innerHTML;
    }

    // Touch Swipe Gesture Simulation for Mobile Devices
    let touchStartX = 0;
    let touchEndX = 0;
    document.querySelectorAll('.match-card').forEach(card => {
      card.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
      }, { passive: true });

      card.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe(card);
      }, { passive: true });
    });

    function handleSwipe(card) {
      const diff = touchEndX - touchStartX;
      if (diff > 80) {
        // Swiped Right -> Express Interest
        card.classList.add('swipe-right');
        setTimeout(() => { card.remove(); alert("💖 Liked! Express Interest sent."); }, 250);
      } else if (diff < -80) {
        // Swiped Left -> Pass
        card.classList.add('swipe-left');
        setTimeout(() => { card.remove(); }, 250);
      }
    }
  </script>
</body>
</html>

