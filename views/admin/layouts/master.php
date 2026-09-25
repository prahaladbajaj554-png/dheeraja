<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title ?? 'Master Admin') ?> | Dheeraja Matrimony</title>
  
  <!-- Fonts: Cinzel for Royal Headings, Plus Jakarta Sans for UI -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- FontAwesome 6 Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            maroon: {
              50: '#FDF5F8',
              100: '#F7EAEF',
              500: '#A32D49',
              600: '#85243B',
              700: '#6B1D2F',
              800: '#521321',
              900: '#3D0C17',
            },
            gold: {
              50: '#FFFDF5',
              100: '#FBF4DE',
              300: '#F3D883',
              400: '#E6C254',
              500: '#D4AF37',
              600: '#B89326',
              700: '#9B7B1B',
            },
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

  <!-- Custom Royal Glassmorphism CSS -->
  <style>
    body {
      background-color: #F8F5EE;
      background-image: radial-gradient(rgba(212, 175, 55, 0.08) 1px, transparent 1px);
      background-size: 24px 24px;
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.88);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(212, 175, 55, 0.22);
      box-shadow: 0 10px 30px rgba(107, 29, 47, 0.05);
    }
    .glass-card-maroon {
      background: linear-gradient(135deg, rgba(107, 29, 47, 0.95) 0%, rgba(61, 12, 23, 0.98) 100%);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid rgba(212, 175, 55, 0.4);
      box-shadow: 0 15px 35px rgba(61, 12, 23, 0.35);
    }
    .glass-gold-badge {
      background: linear-gradient(135deg, rgba(212, 175, 55, 0.18) 0%, rgba(245, 189, 66, 0.25) 100%);
      border: 1px solid rgba(212, 175, 55, 0.5);
      color: #6B1D2F;
    }
    .btn-royal-gold {
      background: linear-gradient(135deg, #F5BD42 0%, #D4AF37 50%, #B89326 100%);
      color: #3D0C17;
      font-weight: 700;
      box-shadow: 0 4px 15px rgba(212, 175, 55, 0.35);
      transition: all 0.2s ease;
    }
    .btn-royal-gold:hover {
      transform: translateY(-1px);
      box-shadow: 0 8px 22px rgba(212, 175, 55, 0.5);
    }
    .btn-royal-maroon {
      background: linear-gradient(135deg, #85243B 0%, #6B1D2F 50%, #521321 100%);
      color: #FFFFFF;
      box-shadow: 0 4px 15px rgba(107, 29, 47, 0.3);
      transition: all 0.2s ease;
    }
    .btn-royal-maroon:hover {
      transform: translateY(-1px);
      box-shadow: 0 8px 22px rgba(107, 29, 47, 0.45);
    }
    /* Custom Scrollbar */
    ::-webkit-scrollbar { width: 6px; height: 6px; }
    ::-webkit-scrollbar-track { background: #F1EDE4; }
    ::-webkit-scrollbar-thumb { background: #D4AF37; border-radius: 4px; }
  </style>

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="font-sans text-stone-800 antialiased min-h-screen flex flex-col">

  <!-- Flash Alerts Notification System -->
  <?php include dirname(__DIR__) . '/partials/alerts.php'; ?>

  <div class="flex flex-1 min-h-screen overflow-hidden">
    <!-- Sidebar Navigation -->
    <?php include dirname(__DIR__) . '/layouts/sidebar.php'; ?>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col min-w-0 overflow-y-auto">
      <!-- Top Header Bar -->
      <?php include dirname(__DIR__) . '/layouts/header.php'; ?>

      <!-- Dynamic Page Content -->
      <main class="flex-1 p-6 md:p-8 max-w-7xl w-full mx-auto">
        <?= $content ?>
      </main>

      <!-- Footer -->
      <?php include dirname(__DIR__) . '/layouts/footer.php'; ?>
    </div>
  </div>

  <!-- Inactivity Auto-Lock Detector Script (15 Mins default) -->
  <script>
    (function() {
      let timeoutMinutes = <?= (int)setting('admin_session_timeout_minutes', '15') ?>;
      let idleTime = 0;
      function resetTimer() { idleTime = 0; }
      window.onload = resetTimer;
      document.onmousemove = resetTimer;
      document.onkeypress = resetTimer;
      document.ontouchstart = resetTimer;
      
      setInterval(function() {
        idleTime++;
        if (idleTime >= timeoutMinutes) {
          window.location.href = '/admin/lockscreen';
        }
      }, 60000);
    })();
  </script>
</body>
</html>
