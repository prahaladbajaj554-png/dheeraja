<?php
$successMsg = flash('success');
$errorMsg   = flash('error');
$warningMsg = flash('warning');
?>

<div class="fixed top-5 right-5 z-50 flex flex-col space-y-3 max-w-md w-full pointer-events-none">
  
  <?php if ($successMsg): ?>
    <div id="flash-success" class="pointer-events-auto bg-emerald-900/90 border border-emerald-400 text-emerald-100 px-5 py-4 rounded-xl shadow-2xl backdrop-blur-md flex items-center justify-between animate-bounce">
      <div class="flex items-center space-x-3">
        <i class="fa-solid fa-circle-check text-emerald-400 text-xl"></i>
        <span class="text-sm font-medium"><?= htmlspecialchars($successMsg) ?></span>
      </div>
      <button onclick="this.parentElement.remove()" class="text-emerald-300 hover:text-white ml-4">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
  <?php endif; ?>

  <?php if ($errorMsg): ?>
    <div id="flash-error" class="pointer-events-auto bg-red-950/90 border border-red-500 text-red-100 px-5 py-4 rounded-xl shadow-2xl backdrop-blur-md flex items-center justify-between">
      <div class="flex items-center space-x-3">
        <i class="fa-solid fa-triangle-exclamation text-red-400 text-xl"></i>
        <span class="text-sm font-medium"><?= htmlspecialchars($errorMsg) ?></span>
      </div>
      <button onclick="this.parentElement.remove()" class="text-red-300 hover:text-white ml-4">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
  <?php endif; ?>

  <?php if ($warningMsg): ?>
    <div id="flash-warning" class="pointer-events-auto bg-amber-950/90 border border-amber-400 text-amber-100 px-5 py-4 rounded-xl shadow-2xl backdrop-blur-md flex items-center justify-between">
      <div class="flex items-center space-x-3">
        <i class="fa-solid fa-circle-exclamation text-amber-400 text-xl"></i>
        <span class="text-sm font-medium"><?= htmlspecialchars($warningMsg) ?></span>
      </div>
      <button onclick="this.parentElement.remove()" class="text-amber-300 hover:text-white ml-4">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
  <?php endif; ?>

</div>

<script>
  setTimeout(() => {
    ['flash-success', 'flash-error', 'flash-warning'].forEach(id => {
      const el = document.getElementById(id);
      if (el) {
        el.style.transition = 'opacity 0.5s ease';
        el.style.opacity = '0';
        setTimeout(() => el.remove(), 500);
      }
    });
  }, 5000);
</script>
