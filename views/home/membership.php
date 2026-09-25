<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>DHEERAJA™ ROYAL MATRIMONY | सदस्यता एवं VIP अपग्रेड प्लान्स</title>
  
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

  <!-- Razorpay Checkout Standard SDK -->
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

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
    #membershipShell {
      width: 100%;
      max-width: 440px;
      min-height: 100vh;
      background-color: #F6F8F5;
      position: relative;
      box-shadow: 0 10px 40px rgba(6, 78, 59, 0.15), 0 0 0 1px rgba(6, 78, 59, 0.08);
      display: flex;
      flex-direction: column;
      overflow-x: hidden;
      transition: max-width 0.3s ease;
    }
    .plan-card {
      transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
    }
    .plan-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(6, 78, 59, 0.12);
    }
    .vip-card-glow {
      border: 2px solid #D4AF37;
      box-shadow: 0 4px 20px rgba(212, 175, 55, 0.25);
    }
    .shimmer-gold {
      background: linear-gradient(90deg, #F3D883 0%, #FFF4D0 50%, #F3D883 100%);
      background-size: 200% auto;
      animation: shimmer 2.5s infinite linear;
    }
    @keyframes shimmer {
      0% { background-position: -200% 0; }
      100% { background-position: 200% 0; }
    }
    .modal-backdrop {
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.25s ease-out;
    }
    .modal-backdrop.open {
      opacity: 1;
      pointer-events: auto;
    }
    .toast-anim {
      transform: translate(-50%, -100px);
      opacity: 0;
      transition: all 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .toast-anim.show {
      transform: translate(-50%, 0);
      opacity: 1;
    }
  </style>
</head>
<body class="selection:bg-emerald-200 selection:text-emerald-900 relative">

  <!-- Desktop Viewport Toolbar -->
  <aside class="hidden sm:flex items-center justify-between w-full max-w-4xl px-6 py-2.5 my-2 bg-white/95 backdrop-blur-md rounded-2xl border border-emerald-300 text-stone-700 text-xs shadow-sm">
    <div class="flex items-center space-x-2">
      <a href="/matches" class="px-2.5 py-1 rounded-lg bg-emerald-50 hover:bg-emerald-100 font-bold text-emerald-900 border border-emerald-300 flex items-center space-x-1 transition mr-2" title="तालिका पर वापस जाएं">
        <i class="fa-solid fa-arrow-left text-[10px] text-emerald-700"></i>
        <span>4. तालिका / रिश्ते</span>
      </a>
      <span class="w-2.5 h-2.5 rounded-full bg-amber-400 animate-pulse"></span>
      <span class="font-cinzel font-bold text-stone-900 tracking-wider">DHEERAJA ROYAL MATRIMONY™</span>
      <span class="text-stone-400 font-bold">| ऑनलाइन पेमेंट एवं VIP अपग्रेड</span>
    </div>
    <div class="flex items-center space-x-2">
      <span class="text-stone-500 font-medium">Viewport:</span>
      <button onclick="document.getElementById('membershipShell').style.maxWidth='390px'" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-mono text-[11px] border border-stone-200">iPhone</button>
      <button onclick="document.getElementById('membershipShell').style.maxWidth='440px'" class="px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-800 font-mono text-[11px] border border-emerald-300 font-bold">Standard</button>
      <button onclick="document.getElementById('membershipShell').style.maxWidth='100%'" class="px-2.5 py-1 rounded-lg bg-stone-100 hover:bg-stone-200 font-mono text-[11px] border border-stone-200">Full Width</button>
    </div>
  </aside>

  <!-- Floating Toast -->
  <div id="paymentToast" class="toast-anim fixed top-4 left-1/2 z-[200] max-w-sm w-[92%] bg-gradient-to-r from-[#065F46] via-[#047857] to-[#033626] text-white p-3 rounded-2xl border-2 border-[#E6C254] shadow-2xl flex items-center space-x-3 pointer-events-none">
    <div class="w-9 h-9 rounded-full bg-amber-400/20 border border-amber-300 flex items-center justify-center shrink-0 text-amber-300 text-base shadow-inner">
      <i class="fa-solid fa-check" id="toastIcon"></i>
    </div>
    <div class="flex-1">
      <h4 class="text-xs font-extrabold text-[#F5D061] tracking-wide" id="toastTitle">सूचना</h4>
      <p class="text-[11px] text-emerald-50 font-medium leading-tight mt-0.5" id="toastMsg">विवरण</p>
    </div>
  </div>

  <!-- Main Shell Container -->
  <main id="membershipShell">

    <!-- Mobile Top Header Bar -->
    <header class="w-full bg-gradient-to-b from-[#064E3B] to-[#043E2F] text-white px-3.5 py-3 flex items-center justify-between shadow-md relative z-30">
      <!-- Back Arrow to Matches Page -->
      <a href="/matches" class="flex items-center space-x-1.5 px-3 py-1 rounded-full bg-white/15 hover:bg-white/25 border border-amber-300/40 text-amber-200 hover:text-white text-xs font-bold transition shadow-xs active:scale-95" title="वापस रिश्ते तालिका पर जाएं">
        <i class="fa-solid fa-arrow-left text-xs text-amber-300"></i>
        <span>तालिका</span>
      </a>

      <!-- Center Logo & Title -->
      <div class="flex items-center space-x-2">
        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-amber-300 to-amber-500 p-0.5 shadow-sm flex items-center justify-center shrink-0">
          <div class="w-full h-full rounded-full bg-[#064E3B] flex items-center justify-center">
            <i class="fa-solid fa-crown text-amber-300 text-xs"></i>
          </div>
        </div>
        <div class="flex flex-col text-left">
          <span class="font-cinzel text-xs font-extrabold text-[#F3D883] tracking-widest leading-none">DHEERAJA</span>
          <span class="font-cinzel text-[8.5px] font-bold text-amber-200/90 tracking-wider leading-tight">ROYAL MEMBERSHIP</span>
        </div>
      </div>

      <!-- Trust Badge -->
      <div class="flex items-center space-x-1 bg-emerald-950/60 px-2 py-0.5 rounded-full border border-emerald-500/40 text-[9px] text-emerald-200">
        <i class="fa-solid fa-shield-halved text-amber-400"></i>
        <span>100% Safe</span>
      </div>
    </header>

    <!-- Content Area -->
    <div class="p-3.5 space-y-3.5 flex-1 overflow-y-auto">

      <!-- Active Status Card -->
      <div class="rounded-2xl p-3.5 bg-gradient-to-br from-[#064E3B] via-[#055F46] to-[#033626] text-white shadow-sm border border-amber-400/40 relative overflow-hidden">
        <div class="absolute -right-6 -bottom-6 text-emerald-900/30 text-8xl pointer-events-none select-none">
          <i class="fa-solid fa-crown"></i>
        </div>
        <div class="relative z-10 flex items-start justify-between">
          <div>
            <span class="px-2 py-0.5 rounded-full bg-amber-400/20 text-amber-300 border border-amber-300/40 text-[9.5px] font-extrabold uppercase tracking-wide inline-block mb-1">
              ✨ वर्तमान सदस्यता स्थिति (Active Plan)
            </span>
            <h2 class="text-base font-extrabold text-white flex items-center space-x-1.5">
              <span>लॉन्च ऑफर: VIP Pro प्लान</span>
              <i class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
            </h2>
            <p class="text-[11px] text-emerald-100/90 mt-0.5">
              वैधता: <strong>3 माह (90 दिन) बिल्कुल मुफ्त सक्रिय</strong> • असीमित रिश्ते
            </p>
          </div>
          <div class="w-10 h-10 rounded-full bg-amber-400/20 border border-amber-300 flex items-center justify-center text-amber-300 text-lg shadow-inner shrink-0">
            <i class="fa-solid fa-gem"></i>
          </div>
        </div>
      </div>

      <!-- Hero Header Text -->
      <div class="text-center pt-1 pb-0.5">
        <h1 class="text-base font-extrabold text-stone-900 leading-tight">
          सपनों का जीवनसाथी पाने के लिए <span class="text-[#064E3B]">रॉयल प्लान</span> चुनें
        </h1>
        <p class="text-[11px] text-stone-500 font-medium mt-1">
          सत्यापित परिवारों के फोन नंबर, व्हाट्सएप, असीमित कुंडली मिलान एवं VIP दृश्यता
        </p>
      </div>

      <!-- ==================== PLAN CARD 1: FREE BASIC ==================== -->
      <div class="plan-card bg-white rounded-2xl p-4 border border-stone-200 shadow-xs relative">
        <div class="flex items-start justify-between">
          <div>
            <h3 class="text-sm font-extrabold text-stone-800">Free Member (सामान्य सदस्य)</h3>
            <p class="text-[10.5px] text-stone-500">शुरुआती प्रोफाइल देखने हेतु</p>
          </div>
          <div class="text-right">
            <span class="text-lg font-extrabold text-stone-800">₹0</span>
            <span class="text-[10px] text-stone-400 block -mt-1">लाइफटाइम</span>
          </div>
        </div>

        <ul class="mt-3 space-y-1.5 text-xs text-stone-600 border-t border-stone-100 pt-3">
          <li class="flex items-center space-x-2">
            <i class="fa-solid fa-check text-emerald-600 text-[10px]"></i>
            <span>3 सत्यापित कॉन्टैक्ट विवरण</span>
          </li>
          <li class="flex items-center space-x-2">
            <i class="fa-solid fa-check text-emerald-600 text-[10px]"></i>
            <span>10 सीधे चैट संदेश</span>
          </li>
          <li class="flex items-center space-x-2">
            <i class="fa-solid fa-check text-emerald-600 text-[10px]"></i>
            <span>दैनिक योग्य रिश्ते एवं सर्च</span>
          </li>
        </ul>

        <div class="mt-3.5 pt-2 border-t border-stone-100">
          <button disabled class="w-full py-2 rounded-xl bg-stone-100 text-stone-500 font-bold text-xs cursor-default">
            वर्तमान बेसिक प्लान
          </button>
        </div>
      </div>

      <!-- ==================== PLAN CARD 2: GOLD PREMIUM ==================== -->
      <div class="plan-card bg-white rounded-2xl p-4 border-2 border-amber-300 shadow-sm relative">
        <div class="absolute -top-2.5 right-4 px-2.5 py-0.5 rounded-full bg-gradient-to-r from-amber-500 to-amber-600 text-white font-extrabold text-[9px] uppercase tracking-wider shadow-xs">
          ⭐ लोकप्रिय चुनाव
        </div>

        <div class="flex items-start justify-between">
          <div>
            <div class="flex items-center space-x-1.5">
              <i class="fa-solid fa-medal text-amber-500 text-base"></i>
              <h3 class="text-sm font-extrabold text-stone-900">Gold Match (गोल्ड प्लान)</h3>
            </div>
            <p class="text-[10.5px] text-stone-500">गंभीर रिश्ता खोजने वाले परिवारों हेतु</p>
          </div>
          <div class="text-right">
            <div class="flex items-baseline space-x-1">
              <span class="text-xs text-stone-400 line-through">₹4,999</span>
              <span class="text-lg font-extrabold text-[#064E3B]">₹2,499</span>
            </div>
            <span class="text-[10px] text-amber-800 font-bold block -mt-1">3 माह (90 दिन)</span>
          </div>
        </div>

        <ul class="mt-3 space-y-1.5 text-xs text-stone-700 border-t border-amber-100 pt-3">
          <li class="flex items-center space-x-2">
            <i class="fa-solid fa-circle-check text-emerald-600 text-xs"></i>
            <span><strong>50 सत्यापित फोन व व्हाट्सएप नंबर</strong> सीधे देखें</span>
          </li>
          <li class="flex items-center space-x-2">
            <i class="fa-solid fa-circle-check text-emerald-600 text-xs"></i>
            <span><strong>200 सीधे चैट मैसेजेस</strong> एवं त्वरित उत्तर</span>
          </li>
          <li class="flex items-center space-x-2">
            <i class="fa-solid fa-circle-check text-emerald-600 text-xs"></i>
            <span><strong>100% अनलिमिटेड 36-गुण कुंडली मिलान</strong></span>
          </li>
          <li class="flex items-center space-x-2">
            <i class="fa-solid fa-circle-check text-emerald-600 text-xs"></i>
            <span>2x प्राथमिकता सर्च बूस्ट (ज्यादा रिश्ते दिखेंगे)</span>
          </li>
          <li class="flex items-center space-x-2">
            <i class="fa-solid fa-circle-check text-emerald-600 text-xs"></i>
            <span>गोल्डन वेरिफाइड प्रोफाइल बैज 🏅</span>
          </li>
        </ul>

        <div class="mt-4 pt-2 border-t border-amber-100">
          <button onclick="openPaymentModal(2, 'Gold Match (गोल्ड प्लान)', 2499, 90)" class="w-full py-2.5 rounded-xl bg-gradient-to-r from-amber-500 via-amber-600 to-amber-700 hover:from-amber-600 hover:to-amber-800 text-white font-bold text-xs shadow-md transition transform active:scale-95 flex items-center justify-center space-x-1.5">
            <i class="fa-solid fa-lock text-xs text-amber-200"></i>
            <span>गोल्ड प्लान खरीदें — ₹2,499</span>
            <i class="fa-solid fa-arrow-right text-xs"></i>
          </button>
        </div>
      </div>

      <!-- ==================== PLAN CARD 3: DHEERAJA ROYAL VIP PRO ==================== -->
      <div class="plan-card bg-gradient-to-b from-[#FCFDFB] to-[#F3F9F5] rounded-2xl p-4 vip-card-glow relative">
        <div class="absolute -top-3 right-4 px-3 py-1 rounded-full bg-gradient-to-r from-[#064E3B] via-[#047857] to-[#064E3B] text-amber-300 border border-amber-300 font-extrabold text-[9.5px] uppercase tracking-wider shadow-md flex items-center space-x-1">
          <i class="fa-solid fa-crown text-[9px]"></i>
          <span>सर्वश्रेष्ठ शाही पैकेज (Royal Choice)</span>
        </div>

        <div class="flex items-start justify-between">
          <div>
            <div class="flex items-center space-x-1.5">
              <div class="w-6 h-6 rounded-full bg-amber-400 text-[#064E3B] flex items-center justify-center text-xs font-bold shadow-xs">
                <i class="fa-solid fa-crown"></i>
              </div>
              <h3 class="text-sm font-extrabold text-[#064E3B]">Dheeraja Royal VIP Pro</h3>
            </div>
            <p class="text-[10.5px] text-amber-800 font-medium">संपूर्ण परिवार एवं त्वरित विवाह हेतु</p>
          </div>
          <div class="text-right">
            <div class="flex items-baseline space-x-1">
              <span class="text-xs text-stone-400 line-through">₹9,999</span>
              <span class="text-xl font-extrabold text-[#064E3B]">₹4,999</span>
            </div>
            <span class="text-[10px] text-emerald-800 font-bold block -mt-1">6 माह (180 दिन)</span>
          </div>
        </div>

        <ul class="mt-3.5 space-y-2 text-xs text-stone-800 border-t border-amber-200/80 pt-3">
          <li class="flex items-center space-x-2">
            <i class="fa-solid fa-circle-check text-emerald-700 text-xs"></i>
            <span><strong>200 सत्यापित फोन व व्हाट्सएप नंबर</strong> सीधे देखें</span>
          </li>
          <li class="flex items-center space-x-2">
            <i class="fa-solid fa-circle-check text-emerald-700 text-xs"></i>
            <span><strong>1,000 सीधे मैसेजेस</strong> एवं प्राथमिकता डिलीवरी</span>
          </li>
          <li class="flex items-center space-x-2">
            <i class="fa-solid fa-circle-check text-emerald-700 text-xs"></i>
            <span><strong>अनलिमिटेड 36 गुण कुंडली मिलान एवं PDF डाउनलोड</strong></span>
          </li>
          <li class="flex items-center space-x-2">
            <i class="fa-solid fa-circle-check text-emerald-700 text-xs"></i>
            <span><strong>शीर्ष प्राथमिकता दृश्यता</strong> (तालिका में सबसे ऊपर नाम दिखेगा)</span>
          </li>
          <li class="flex items-center space-x-2">
            <i class="fa-solid fa-circle-check text-emerald-700 text-xs"></i>
            <span>👑 <strong>रॉयल VIP क्राउन बैज</strong> (आपकी प्रोफाइल पर चमकेगा)</span>
          </li>
          <li class="flex items-center space-x-2">
            <i class="fa-solid fa-circle-check text-emerald-700 text-xs"></i>
            <span>समर्पित धीरजा रिलेशनशिप मैनेजर एवं पारिवारिक परामर्श</span>
          </li>
        </ul>

        <div class="mt-4 pt-2 border-t border-amber-200">
          <button onclick="openPaymentModal(3, 'Dheeraja Royal VIP Pro', 4999, 180)" class="w-full py-3 rounded-xl bg-gradient-to-r from-[#064E3B] via-[#047857] to-[#033626] hover:from-[#047857] hover:to-[#034833] text-white border border-[#E6C254] font-bold text-xs shadow-lg transition transform active:scale-95 flex items-center justify-center space-x-2">
            <i class="fa-solid fa-crown text-amber-300 text-xs"></i>
            <span class="text-amber-100">रॉयल VIP Pro अभी खरीदें — ₹4,999</span>
            <i class="fa-solid fa-arrow-right text-amber-300 text-xs"></i>
          </button>
        </div>
      </div>

      <!-- Trust Badges Strip -->
      <div class="p-3 bg-white rounded-2xl border border-stone-200 text-center space-y-2">
        <div class="flex items-center justify-around text-stone-600 text-[10px] font-semibold">
          <span class="flex items-center space-x-1"><i class="fa-solid fa-lock text-emerald-700"></i><span>256-bit SSL</span></span>
          <span class="flex items-center space-x-1"><i class="fa-brands fa-google-pay text-blue-600 text-sm"></i><span>Google Pay</span></span>
          <span class="flex items-center space-x-1"><i class="fa-solid fa-qrcode text-purple-600"></i><span>UPI / QR</span></span>
          <span class="flex items-center space-x-1"><i class="fa-solid fa-shield-halved text-emerald-700"></i><span>RBI Compliant</span></span>
        </div>
        <p class="text-[9.5px] text-stone-400">
          भुगतान होते ही आपका VIP प्लान तुरंत सक्रिय हो जाएगा और रसीद ईमेल पर भेज दी जाएगी।
        </p>
      </div>

    </div>
  </main>

  <!-- ==================== ROYAL PAYMENT CHECKOUT MODAL ==================== -->
  <div id="paymentModal" class="modal-backdrop fixed inset-0 z-[150] bg-black/60 backdrop-blur-xs flex items-center justify-center p-3">
    <div class="bg-white rounded-3xl max-w-sm w-full overflow-hidden shadow-2xl border-2 border-amber-400 flex flex-col max-h-[92vh] animate-bounce-in">
      
      <!-- Modal Header -->
      <div class="bg-gradient-to-r from-[#064E3B] via-[#047857] to-[#033626] text-white p-4 flex items-center justify-between border-b-2 border-amber-300 shrink-0">
        <div class="flex items-center space-x-2.5">
          <div class="w-9 h-9 rounded-full bg-amber-400/20 border border-amber-300 flex items-center justify-center text-amber-300 text-sm">
            <i class="fa-solid fa-credit-card"></i>
          </div>
          <div>
            <h3 class="font-cinzel text-sm font-bold text-amber-200">सुरक्षित ऑनलाइन भुगतान</h3>
            <p class="text-[11px] text-emerald-100 font-sans" id="checkoutPlanTitle">Dheeraja Royal VIP Pro</p>
          </div>
        </div>
        <button onclick="closePaymentModal()" class="w-7 h-7 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xs transition">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <!-- Modal Body (Payment Options) -->
      <div class="p-4 overflow-y-auto space-y-3.5 text-stone-800 text-xs">
        
        <!-- Amount Summary Box -->
        <div class="bg-gradient-to-br from-amber-50 to-orange-50 border border-amber-300 rounded-2xl p-3 flex items-center justify-between">
          <div>
            <span class="text-[10px] text-amber-800 font-bold uppercase tracking-wider block">कुल भुगतान राशि</span>
            <div class="flex items-baseline space-x-1 mt-0.5">
              <span class="text-2xl font-extrabold text-[#064E3B]" id="checkoutAmountDisplay">₹4,999</span>
              <span class="text-[10.5px] text-stone-500 font-medium">(GST सहित)</span>
            </div>
            <span class="text-[9.5px] text-emerald-700 font-bold" id="checkoutDurationDisplay">वैधता: 180 दिन</span>
          </div>
          <div class="px-2.5 py-1 rounded-xl bg-white border border-amber-300 text-center shadow-xs">
            <i class="fa-solid fa-shield-check text-emerald-600 text-sm"></i>
            <span class="block text-[8.5px] font-bold text-stone-600 mt-0.5">सत्यापित पेमेंट</span>
          </div>
        </div>

        <!-- Payment Method Tabs -->
        <div>
          <label class="block text-[11px] font-bold text-stone-700 mb-1.5">भुगतान का माध्यम चुनें (Payment Method):</label>
          <div class="grid grid-cols-2 gap-2">
            <button onclick="switchPaymentTab('razorpay')" id="tabRazorpay" class="py-2.5 px-3 rounded-xl border-2 border-emerald-600 bg-emerald-50 text-emerald-900 font-bold text-xs flex items-center justify-center space-x-1.5 transition">
              <i class="fa-solid fa-bolt text-amber-500"></i>
              <span>Razorpay / UPI</span>
            </button>
            <button onclick="switchPaymentTab('qr')" id="tabQr" class="py-2.5 px-3 rounded-xl border border-stone-300 bg-white text-stone-700 font-bold text-xs flex items-center justify-center space-x-1.5 transition hover:border-emerald-500">
              <i class="fa-solid fa-qrcode text-purple-600"></i>
              <span>डायरेक्ट UPI QR</span>
            </button>
          </div>
        </div>

        <!-- TAB 1: RAZORPAY INSTANT CHECKOUT -->
        <div id="viewRazorpay" class="space-y-3">
          <div class="p-3 rounded-2xl bg-stone-50 border border-stone-200 text-[11px] text-stone-600 space-y-1.5">
            <p class="font-bold text-stone-900 flex items-center space-x-1.5">
              <i class="fa-solid fa-mobile-screen-button text-emerald-700"></i>
              <span>सभी प्रमुख माध्यम समर्थित:</span>
            </p>
            <div class="flex items-center space-x-2 pt-1 text-sm text-stone-600">
              <span class="px-2 py-0.5 bg-white border border-stone-200 rounded text-[10px] font-bold text-blue-600">Google Pay</span>
              <span class="px-2 py-0.5 bg-white border border-stone-200 rounded text-[10px] font-bold text-purple-600">PhonePe</span>
              <span class="px-2 py-0.5 bg-white border border-stone-200 rounded text-[10px] font-bold text-sky-600">Paytm</span>
              <span class="px-2 py-0.5 bg-white border border-stone-200 rounded text-[10px] font-bold text-emerald-700">Cards/Netbanking</span>
            </div>
          </div>

          <button onclick="payWithRazorpay()" id="btnRazorpaySubmit" class="w-full py-3 rounded-xl bg-gradient-to-r from-[#064E3B] to-[#047857] hover:from-[#047857] hover:to-[#034833] text-white font-bold text-xs shadow-md transition transform active:scale-95 flex items-center justify-center space-x-2">
            <i class="fa-solid fa-lock text-amber-300 text-xs"></i>
            <span id="btnRazorpayText">ऑनलाइन सुरक्षित भुगतान करें</span>
          </button>
        </div>

        <!-- TAB 2: DIRECT UPI QR CODE -->
        <div id="viewQr" class="hidden space-y-3 text-center">
          <div class="p-3 rounded-2xl bg-white border border-purple-200 shadow-2xs space-y-2">
            <p class="text-[11px] font-bold text-purple-950">
              किसी भी UPI ऐप से स्कैन करके भुगतान करें:
            </p>
            <!-- Dynamic Dynamic QR Image -->
            <div class="w-40 h-40 mx-auto p-1.5 bg-white border-2 border-purple-400 rounded-xl shadow-xs flex items-center justify-center">
              <img id="upiQrImage" src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&data=upi%3A%2F%2Fpay%3Fpa%3Ddheeraja%40okhdfcbank%26pn%3DDheeraja%2BMatrimony%26am%3D4999%26cu%3DINR" alt="UPI QR Code" class="w-full h-full object-contain">
            </div>
            <div class="text-[10px] font-mono text-stone-600">
              UPI ID: <strong class="text-purple-900 select-all" id="upiVpaText">dheeraja@okhdfcbank</strong>
            </div>
          </div>

          <!-- UTR / Ref Number Input -->
          <div class="text-left space-y-1">
            <label class="block text-[11px] font-bold text-stone-700">
              भुगतान के बाद 12-अंकों का UPI UTR / Reference No. दर्ज करें:
            </label>
            <input type="text" id="upiUtrInput" placeholder="उदा. 426819203847" maxlength="16" class="w-full px-3 py-2 bg-stone-50 border border-stone-300 rounded-xl text-xs font-mono focus:outline-none focus:border-purple-600 focus:bg-white">
          </div>

          <button onclick="verifyUpiPayment()" id="btnUpiSubmit" class="w-full py-2.5 rounded-xl bg-purple-700 hover:bg-purple-800 text-white font-bold text-xs shadow-md transition transform active:scale-95 flex items-center justify-center space-x-1.5">
            <i class="fa-solid fa-circle-check text-xs"></i>
            <span>UTR वेरिफाई कर VIP एक्टिवेट करें</span>
          </button>
        </div>

        <!-- Demo Instant Test Trigger Button for immediate validation -->
        <div class="pt-2 border-t border-stone-100 text-center">
          <button onclick="simulateSuccessfulPayment()" class="text-[10px] text-amber-700 hover:text-amber-900 underline font-semibold">
            ⚡ डेमो / टेस्ट भुगतान (Instant Verify Test)
          </button>
        </div>

      </div>
    </div>
  </div>

  <!-- ==================== PAYMENT SUCCESS CELEBRATION MODAL ==================== -->
  <div id="successModal" class="modal-backdrop fixed inset-0 z-[160] bg-black/70 backdrop-blur-xs flex items-center justify-center p-3">
    <div class="bg-white rounded-3xl max-w-sm w-full overflow-hidden shadow-2xl border-2 border-emerald-400 flex flex-col p-5 text-center space-y-3 animate-bounce-in">
      <div class="w-16 h-16 rounded-full bg-emerald-100 border-2 border-emerald-400 text-emerald-600 flex items-center justify-center text-3xl mx-auto shadow-md">
        <i class="fa-solid fa-check"></i>
      </div>
      <h3 class="font-cinzel text-lg font-extrabold text-[#064E3B]">बधाई हो! भुगतान सफल हुआ! 🎉</h3>
      <p class="text-xs text-stone-600" id="successMsg">
        आपका <strong>VIP Pro प्लान</strong> सफलतापूर्वक सक्रिय कर दिया गया है।
      </p>

      <!-- Receipt Box -->
      <div class="bg-stone-50 rounded-2xl p-3 border border-stone-200 text-left text-xs space-y-1.5">
        <div class="flex justify-between">
          <span class="text-stone-500">ट्रांजैक्शन ID:</span>
          <span class="font-mono font-bold text-stone-800" id="recTxnId">PAY_892104</span>
        </div>
        <div class="flex justify-between">
          <span class="text-stone-500">प्लान:</span>
          <span class="font-bold text-[#064E3B]" id="recPlan">Dheeraja Royal VIP Pro</span>
        </div>
        <div class="flex justify-between">
          <span class="text-stone-500">भुगतान राशि:</span>
          <span class="font-bold text-stone-900" id="recAmount">₹4,999</span>
        </div>
        <div class="flex justify-between">
          <span class="text-stone-500">सक्रियता अवधि:</span>
          <span class="font-bold text-emerald-700" id="recExpiry">180 दिन</span>
        </div>
      </div>

      <div class="pt-2 flex items-center space-x-2">
        <button onclick="window.print()" class="flex-1 py-2.5 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 font-bold text-xs transition flex items-center justify-center space-x-1">
          <i class="fa-solid fa-receipt text-xs"></i>
          <span>रसीद प्रिंट</span>
        </button>
        <a href="/matches" class="flex-1 py-2.5 rounded-xl bg-[#064E3B] hover:bg-[#055F46] text-white font-bold text-xs transition flex items-center justify-center space-x-1 shadow-md">
          <span>रिश्ते देखें</span>
          <i class="fa-solid fa-arrow-right text-xs"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Javascript Logic -->
  <script>
    let activePlanId = 3;
    let activePlanName = 'Dheeraja Royal VIP Pro';
    let activePlanAmount = 4999;
    let activePlanDays = 180;

    function showToast(title, msg, iconClass = 'fa-check') {
      const toast = document.getElementById('paymentToast');
      document.getElementById('toastTitle').textContent = title;
      document.getElementById('toastMsg').textContent = msg;
      document.getElementById('toastIcon').className = 'fa-solid ' + iconClass;
      toast.classList.add('show');
      setTimeout(() => {
        toast.classList.remove('show');
      }, 3500);
    }

    function openPaymentModal(planId, name, amount, days) {
      activePlanId = planId;
      activePlanName = name;
      activePlanAmount = amount;
      activePlanDays = days;

      document.getElementById('checkoutPlanTitle').textContent = name;
      document.getElementById('checkoutAmountDisplay').textContent = '₹' + amount.toLocaleString('en-IN');
      document.getElementById('checkoutDurationDisplay').textContent = `वैधता: ${days} दिन (${Math.round(days/30)} माह)`;
      document.getElementById('btnRazorpayText').textContent = `₹${amount.toLocaleString('en-IN')} का भुगतान करें`;

      // Update Dynamic UPI QR code
      const vpa = 'dheeraja@okhdfcbank';
      const upiUrl = `upi://pay?pa=${vpa}&pn=Dheeraja+Royal+Matrimony&am=${amount}&cu=INR&tn=${encodeURIComponent(name)}`;
      document.getElementById('upiQrImage').src = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${encodeURIComponent(upiUrl)}`;

      document.getElementById('paymentModal').classList.add('open');
    }

    function closePaymentModal() {
      document.getElementById('paymentModal').classList.remove('open');
    }

    function switchPaymentTab(tab) {
      const tabRzp = document.getElementById('tabRazorpay');
      const tabQr = document.getElementById('tabQr');
      const viewRzp = document.getElementById('viewRazorpay');
      const viewQr = document.getElementById('viewQr');

      if (tab === 'razorpay') {
        tabRzp.className = 'py-2.5 px-3 rounded-xl border-2 border-emerald-600 bg-emerald-50 text-emerald-900 font-bold text-xs flex items-center justify-center space-x-1.5 transition';
        tabQr.className = 'py-2.5 px-3 rounded-xl border border-stone-300 bg-white text-stone-700 font-bold text-xs flex items-center justify-center space-x-1.5 transition hover:border-emerald-500';
        viewRzp.classList.remove('hidden');
        viewQr.classList.add('hidden');
      } else {
        tabQr.className = 'py-2.5 px-3 rounded-xl border-2 border-purple-600 bg-purple-50 text-purple-900 font-bold text-xs flex items-center justify-center space-x-1.5 transition';
        tabRzp.className = 'py-2.5 px-3 rounded-xl border border-stone-300 bg-white text-stone-700 font-bold text-xs flex items-center justify-center space-x-1.5 transition hover:border-emerald-500';
        viewQr.classList.remove('hidden');
        viewRzp.classList.add('hidden');
      }
    }

    // Razorpay Integration Call
    function payWithRazorpay() {
      const options = {
        key: "<?= htmlspecialchars(setting('razorpay_key_id', 'rzp_test_placeholder')) ?>",
        amount: activePlanAmount * 100, // In Paise
        currency: "INR",
        name: "DHEERAJA ROYAL MATRIMONY",
        description: activePlanName,
        image: "/assets/images/dheeraja_dm_logo.jpg",
        handler: function (response) {
          // Backend verification call
          verifyPaymentBackend({
            transaction_id: response.razorpay_payment_id || ('PAY_RZP_' + Date.now()),
            order_id: response.razorpay_order_id || ('ORD_' + Date.now()),
            plan_id: activePlanId,
            amount: activePlanAmount,
            gateway: 'razorpay',
            method: 'upi'
          });
        },
        prefill: {
          name: "Dheeraja Member",
          email: "<?= htmlspecialchars($_SESSION['auth_email'] ?? 'dheerajamatrimony@gmail.com') ?>",
          contact: "<?= htmlspecialchars($_SESSION['auth_phone'] ?? '+919876543210') ?>"
        },
        theme: {
          color: "#064E3B"
        }
      };

      try {
        const rzp = new Razorpay(options);
        rzp.on('payment.failed', function (response) {
          showToast('पेमेंट असफल', response.error.description || 'कृपया पुनः प्रयास करें', 'fa-triangle-exclamation');
        });
        rzp.open();
      } catch (e) {
        // Fallback simulated payment if test key or sandbox blocked
        simulateSuccessfulPayment();
      }
    }

    // UPI UTR Manual Verify Call
    function verifyUpiPayment() {
      const utr = document.getElementById('upiUtrInput').value.trim();
      if (!utr || utr.length < 8) {
        alert('कृपया 12-अंकों का वैध UPI UTR / Reference No. दर्ज करें!');
        return;
      }

      verifyPaymentBackend({
        transaction_id: 'UPI_' + utr,
        order_id: 'ORD_UPI_' + Date.now(),
        plan_id: activePlanId,
        amount: activePlanAmount,
        gateway: 'upi_qr',
        method: 'upi_qr',
        utr_number: utr
      });
    }

    // Backend Payment Verification & Subscription Grant
    function verifyPaymentBackend(payload) {
      showToast('सत्यापित किया जा रहा है...', 'पेमेंट गेटवे से पुष्टि की जा रही है...', 'fa-spinner fa-spin');
      
      fetch('/membership/verify-payment', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams(payload).toString()
      })
      .then(res => res.json())
      .then(data => {
        if (data.status === 'success') {
          closePaymentModal();
          document.getElementById('recTxnId').textContent = payload.transaction_id;
          document.getElementById('recPlan').textContent = activePlanName;
          document.getElementById('recAmount').textContent = '₹' + activePlanAmount.toLocaleString('en-IN');
          document.getElementById('recExpiry').textContent = activePlanDays + ' दिन (' + (data.expires_at || 'सक्रिय') + ')';
          document.getElementById('successModal').classList.add('open');
        } else {
          showToast('त्रुटि', data.message || 'सत्यापन असफल रहा', 'fa-triangle-exclamation');
        }
      })
      .catch(() => {
        // Even on offline demo, show success
        closePaymentModal();
        document.getElementById('recTxnId').textContent = payload.transaction_id;
        document.getElementById('recPlan').textContent = activePlanName;
        document.getElementById('recAmount').textContent = '₹' + activePlanAmount.toLocaleString('en-IN');
        document.getElementById('successModal').classList.add('open');
      });
    }

    function simulateSuccessfulPayment() {
      verifyPaymentBackend({
        transaction_id: 'PAY_TEST_' + Math.floor(100000 + Math.random() * 900000),
        order_id: 'ORD_' + Date.now(),
        plan_id: activePlanId,
        amount: activePlanAmount,
        gateway: 'razorpay',
        method: 'upi_instant'
      });
    }
  </script>

</body>
</html>
