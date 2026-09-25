<div class="text-center py-20">
  <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-maroon-100 text-maroon-800 text-4xl mb-4">
    <i class="fa-solid fa-triangle-exclamation"></i>
  </div>
  <h2 class="text-3xl font-cinzel font-bold text-maroon-800">404 - Page Not Found</h2>
  <p class="text-xs text-stone-500 mt-2">The requested resource [<?= htmlspecialchars($uri ?? '') ?>] does not exist or has been relocated.</p>
  <div class="mt-6">
    <a href="/admin/dashboard" class="btn-royal-gold px-6 py-2.5 rounded-xl text-xs font-bold inline-block">
      Return to Executive Dashboard &rarr;
    </a>
  </div>
</div>
