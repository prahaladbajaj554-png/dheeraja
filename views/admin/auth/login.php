<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Master Admin Sign In | Dheeraja Matrimony</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            maroon: { 700: '#6B1D2F', 800: '#521321', 900: '#3D0C17' },
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
</head>
<body class="bg-[#FAF7F2] font-sans min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
  
  <!-- Subtle glowing royal ambient light -->
  <div class="absolute -top-32 -left-32 w-96 h-96 bg-amber-200/40 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-rose-200/30 rounded-full blur-3xl pointer-events-none"></div>

  <!-- Flash Alerts -->
  <?php include dirname(__DIR__) . '/partials/alerts.php'; ?>

  <!-- Glassmorphic Royal Light Login Card -->
  <div class="relative w-full max-w-md bg-white/95 backdrop-blur-2xl border border-amber-200/90 rounded-3xl p-8 sm:p-10 shadow-2xl shadow-stone-300/50 text-stone-800 z-10">
    
    <!-- Brand Icon & Header -->
    <div class="text-center mb-8">
      <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-400 via-amber-500 to-amber-600 text-maroon-950 text-3xl font-bold shadow-lg shadow-amber-500/25 mb-3">
        <i class="fa-solid fa-crown"></i>
      </div>
      <h1 class="font-cinzel text-2xl font-bold text-maroon-800 tracking-wider">DHEERAJA</h1>
      <p class="text-xs text-stone-500 font-semibold uppercase tracking-widest mt-1">Master Admin Control Panel</p>
    </div>

    <!-- Login Form -->
    <form action="/admin/login" method="POST" class="space-y-5">
      <?= csrf_field() ?>

      <!-- Email Field -->
      <div>
        <label class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Admin Email Address</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-stone-400 text-sm">
            <i class="fa-solid fa-envelope"></i>
          </span>
          <input type="email" name="email" value="<?= old('email', 'dheerajamatrimony@gmail.com') ?>" required
                 class="w-full pl-10 pr-4 py-3 bg-stone-50 border border-stone-200 rounded-xl text-stone-900 placeholder-stone-400 text-sm focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition font-medium"
                 placeholder="dheerajamatrimony@gmail.com">
        </div>
      </div>

      <!-- Password Field -->
      <div>
        <label class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Secret Password</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-stone-400 text-sm">
            <i class="fa-solid fa-lock"></i>
          </span>
          <input type="password" name="password" value="123456" required
                 class="w-full pl-10 pr-4 py-3 bg-stone-50 border border-stone-200 rounded-xl text-stone-900 placeholder-stone-400 text-sm focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition font-medium"
                 placeholder="••••••••••••">
        </div>
      </div>

      <!-- Quick Info / Credential Helper -->
      <div class="p-3 rounded-xl bg-amber-50/80 border border-amber-200 text-xs text-amber-900 flex items-center justify-between">
        <span><i class="fa-solid fa-key mr-1.5 text-amber-600"></i> Password: <strong>123456</strong></span>
        <span class="text-stone-500 font-semibold text-[11px]">Master Super Admin</span>
      </div>

      <!-- Submit Button -->
      <button type="submit" 
              class="w-full py-3.5 px-4 rounded-xl font-bold text-sm bg-gradient-to-r from-maroon-700 via-maroon-800 to-maroon-900 hover:from-maroon-800 hover:to-maroon-950 text-white uppercase tracking-wider shadow-lg shadow-maroon-700/25 transition-all transform hover:-translate-y-0.5">
        <i class="fa-solid fa-shield-halved mr-2 text-amber-400"></i> Authenticate & Enter
      </button>
    </form>

    <!-- Footer Links -->
    <div class="mt-8 text-center text-xs text-stone-500">
      <a href="/app" class="hover:text-maroon-800 font-semibold transition flex items-center justify-center space-x-1.5">
        <i class="fa-solid fa-mobile-screen text-amber-600"></i>
        <span>Switch to Mobile App View</span>
      </a>
    </div>

  </div>

</body>
</html>
