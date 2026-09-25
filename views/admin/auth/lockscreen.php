<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Workstation Locked | Dheeraja Matrimony</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            maroon: { 700: '#6B1D2F', 900: '#3D0C17' },
            gold: { 400: '#E6C254', 500: '#D4AF37' }
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
<body class="bg-[#FAF7F2] font-sans min-h-screen flex items-center justify-center p-4">

  <!-- Flash Alerts -->
  <?php include dirname(__DIR__) . '/partials/alerts.php'; ?>

  <div class="w-full max-w-sm bg-white/95 backdrop-blur-2xl border border-amber-200/90 rounded-3xl p-8 shadow-2xl shadow-stone-300/50 text-center text-stone-800">
    
    <!-- User Avatar -->
    <div class="relative inline-block mb-4">
      <div class="w-20 h-20 rounded-full bg-gradient-to-tr from-amber-400 to-amber-600 p-1 shadow-lg mx-auto">
        <div class="w-full h-full rounded-full bg-white flex items-center justify-center text-maroon-800 text-2xl font-bold">
          <i class="fa-solid fa-user-shield"></i>
        </div>
      </div>
      <div class="absolute bottom-0 right-0 w-6 h-6 rounded-full bg-amber-500 border-2 border-white flex items-center justify-center text-[10px] text-maroon-950 font-bold shadow-xs">
        <i class="fa-solid fa-lock"></i>
      </div>
    </div>

    <!-- Admin Name -->
    <h2 class="font-cinzel text-lg font-bold text-maroon-800"><?= htmlspecialchars($admin['first_name'] ?? $admin['name'] ?? 'Master Admin') ?></h2>
    <p class="text-xs text-stone-500 font-medium mt-1 mb-6">Workstation locked due to inactivity</p>

    <!-- Unlock Form -->
    <form action="/admin/unlock" method="POST" class="space-y-4">
      <?= csrf_field() ?>
      <div class="relative">
        <input type="password" name="password" required autofocus
               class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl text-stone-900 placeholder-stone-400 text-sm text-center focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition font-medium"
               placeholder="Enter password (123456) to resume">
      </div>

      <button type="submit" 
              class="w-full py-3 px-4 rounded-xl font-bold text-xs bg-gradient-to-r from-maroon-700 via-maroon-800 to-maroon-900 hover:from-maroon-800 hover:to-maroon-950 text-white uppercase tracking-wider shadow-lg shadow-maroon-700/25 transition">
        <i class="fa-solid fa-lock-open mr-1.5 text-amber-400"></i> Unlock Session
      </button>
    </form>

    <div class="mt-6 text-xs text-stone-500">
      <a href="/admin/logout" class="hover:text-red-600 transition font-medium">Or Sign in with another account &rarr;</a>
    </div>

  </div>

</body>
</html>
