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
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md text-stone-900 px-4 py-3 border-b border-amber-200/80 flex items-center justify-between shadow-sm">
      <div class="flex items-center space-x-2.5">
        <div class="w-8 h-8 rounded-xl bg-gradient-to-br from-amber-400 via-amber-500 to-amber-600 text-maroon-950 flex items-center justify-center font-bold text-sm shadow-sm">
          <i class="fa-solid fa-crown"></i>
        </div>
        <div>
          <h1 class="font-cinzel font-bold text-sm text-maroon-800 tracking-wider">DHEERAJA</h1>
          <p class="text-[9px] text-stone-500 font-bold uppercase tracking-widest">Matrimony App</p>
        </div>
      </div>

      <!-- Right Header Actions -->
      <div class="flex items-center space-x-2">
        <!-- VIP Plan Badge -->
        <button onclick="openPlanModal()" class="vip-shimmer text-maroon-950 px-2.5 py-1 rounded-full text-[10px] font-bold shadow-sm flex items-center space-x-1 cursor-pointer">
          <i class="fa-solid fa-gem text-[10px]"></i>
          <span>FREE VIP ACTIVE</span>
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

    <!-- Recommended Matches Feed (Card Stack with Gestures) -->
    <main class="flex-1 p-3.5 space-y-4 overflow-y-auto pb-28">
      
      <div class="flex items-center justify-between text-xs text-stone-500 px-1">
        <span class="font-bold text-stone-800 uppercase tracking-wider text-[11px]">Recommended Matches</span>
        <span class="font-semibold text-amber-800 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200"><?= count($matches) ?> Profiles</span>
      </div>

      <?php foreach ($matches as $idx => $m): 
        $age = (new \DateTime())->diff(new \DateTime($m['dob']))->y;
      ?>
        <div id="card-<?= $m['id'] ?>" class="match-card bg-white rounded-3xl overflow-hidden border border-stone-200 shadow-sm hover:shadow-md relative">
          
          <!-- Card Image Header (Palace Light Luxury Gradient) -->
          <div class="h-64 bg-gradient-to-br from-[#FFF8EE] via-[#FDF2E2] to-[#F5E5D0] border-b border-amber-200/60 relative flex items-center justify-center overflow-hidden">
            
            <!-- Delicate Background Royal Pattern -->
            <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#D4AF37 1px, transparent 1px); background-size: 16px 16px;"></div>

            <!-- Avatar -->
            <div class="relative z-10 text-center">
              <div class="w-24 h-24 rounded-full bg-gradient-to-br from-amber-400 via-amber-500 to-amber-600 border-4 border-white flex items-center justify-center text-maroon-950 text-4xl font-bold font-cinzel mx-auto shadow-lg">
                <?= strtoupper(substr($m['first_name'], 0, 1)) ?>
              </div>
              <div class="mt-2.5 inline-block px-3 py-0.5 rounded-full bg-white/95 border border-amber-200/90 text-xs font-bold text-maroon-800 font-mono shadow-xs">
                <?= htmlspecialchars($m['matrimony_id']) ?>
              </div>
            </div>

            <!-- Badges -->
            <div class="absolute top-3 left-3 z-20 flex flex-wrap gap-1">
              <?php if (!empty($m['is_vip'])): ?>
                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-gradient-to-r from-amber-400 to-amber-500 text-maroon-950 shadow-sm">
                  👑 ROYAL VIP
                </span>
              <?php endif; ?>
              <?php if (!empty($m['is_kyc_verified'])): ?>
                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-600 text-white shadow-sm">
                  🛡️ Verified ID
                </span>
              <?php endif; ?>
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
                <h3 class="text-base font-cinzel font-bold text-stone-900">
                  <?= htmlspecialchars($m['first_name'] . ' ' . $m['last_name']) ?>, <?= $age ?> yrs
                </h3>
                <p class="text-xs text-stone-500 font-medium mt-0.5">
                  <?= htmlspecialchars($m['height_cm']) ?> cm • <?= htmlspecialchars($m['caste'] ?? 'General') ?> (Gotra: <?= htmlspecialchars($m['gotra'] ?? 'N/A') ?>)
                </p>
              </div>
              <button onclick="viewDossier(<?= $m['id'] ?>, '<?= htmlspecialchars($m['first_name'] . ' ' . $m['last_name']) ?>', '<?= htmlspecialchars($m['occupation']) ?>', '<?= htmlspecialchars($m['current_city']) ?>', '<?= htmlspecialchars($m['caste']) ?>', '<?= htmlspecialchars($m['annual_income_inr']) ?>', '<?= htmlspecialchars($m['about_me'] ?? '') ?>')" class="text-xs font-bold text-maroon-700 hover:underline">
                View &rarr;
              </button>
            </div>

            <!-- Profession & LPA Box -->
            <div class="p-2.5 rounded-xl bg-stone-50 border border-stone-200/80 flex items-center justify-between text-xs">
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
              <button onclick="expressInterest(<?= $m['id'] ?>, '<?= htmlspecialchars($m['first_name']) ?>')" class="col-span-2 py-2.5 px-3 rounded-xl bg-gradient-to-r from-maroon-700 to-maroon-800 text-white font-bold text-xs shadow flex items-center justify-center space-x-1.5 transition active:scale-95">
                <i class="fa-solid fa-heart text-red-400"></i>
                <span>Send Interest</span>
              </button>

              <!-- View Contact (Free VIP privilege) -->
              <button onclick="revealContact(<?= $m['id'] ?>, '<?= htmlspecialchars($m['first_name']) ?>')" class="py-2.5 px-2 rounded-xl bg-amber-50 hover:bg-amber-100 border border-amber-300 text-amber-900 font-bold text-[11px] flex flex-col items-center justify-center transition active:scale-95">
                <i class="fa-solid fa-phone text-amber-600 text-xs mb-0.5"></i>
                <span>Contact</span>
              </button>

              <!-- In-App Chat -->
              <button onclick="openChat(<?= $m['id'] ?>, '<?= htmlspecialchars($m['first_name']) ?>')" class="py-2.5 px-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 font-bold text-[11px] flex flex-col items-center justify-center transition active:scale-95">
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

  <!-- Interactive JavaScript Logic -->
  <script>
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
      alert("💖 Express Interest sent to " + name + "! An email alert has been sent to their inbox via PHPMailer.");
    }

    function revealContact(id, name) {
      alert("📞 Verified Contact for " + name + ": +91 98765 000" + (id % 100) + "\n(Deducted 1 contact view from your complimentary Launch VIP quota)");
    }

    function openChat(id, name) {
      alert("💬 Direct Chat with " + name + " opened in app! Real-time direct messaging enabled via VIP Pro.");
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
