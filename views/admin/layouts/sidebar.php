<?php
$currentUri = $_SERVER['REQUEST_URI'] ?? '';
function isActive(string $route, string $currentUri): string {
    return strpos($currentUri, $route) === 0 
        ? 'bg-gradient-to-r from-amber-100/90 to-amber-50 text-maroon-800 border-l-4 border-amber-500 font-bold shadow-sm' 
        : 'text-stone-700 hover:bg-amber-50/80 hover:text-maroon-800 font-medium';
}
?>
<aside class="w-64 bg-white text-stone-800 flex-shrink-0 flex flex-col border-r border-amber-200/70 z-20 shadow-lg shadow-stone-200/40">
  
  <!-- Sidebar Brand Logo -->
  <div class="p-6 text-center border-b border-amber-100 bg-[#FAF7F2]/60">
    <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-gradient-to-br from-amber-400 via-amber-500 to-amber-600 text-maroon-950 text-2xl font-bold shadow-md shadow-amber-500/25 mb-2">
      <i class="fa-solid fa-crown"></i>
    </div>
    <div class="font-cinzel font-bold text-lg text-maroon-800 tracking-wider">DHEERAJA</div>
    <div class="text-[10px] text-stone-500 font-semibold tracking-widest uppercase">Master Admin Suite</div>
  </div>

  <!-- Navigation Links -->
  <nav class="flex-1 px-3 py-6 space-y-1.5 overflow-y-auto">
    
    <div class="px-3 pb-2 text-[10px] font-bold text-stone-400 tracking-widest uppercase">Core Management</div>

    <a href="/admin/dashboard" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-sm transition <?= isActive('/admin/dashboard', $currentUri) ?>">
      <i class="fa-solid fa-chart-pie w-5 text-amber-500"></i>
      <span>Dashboard</span>
    </a>

    <a href="/admin/users" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-sm transition <?= isActive('/admin/users', $currentUri) && !isActive('/admin/users/add', $currentUri) ? 'bg-gradient-to-r from-amber-100/90 to-amber-50 text-maroon-800 border-l-4 border-amber-500 font-bold shadow-sm' : 'text-stone-700 hover:bg-amber-50/80 hover:text-maroon-800 font-medium' ?>">
      <i class="fa-solid fa-users w-5 text-amber-500"></i>
      <span>Manage Members</span>
    </a>

    <a href="/admin/users/add" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-sm transition <?= isActive('/admin/users/add', $currentUri) ?>">
      <i class="fa-solid fa-user-plus w-5 text-amber-500"></i>
      <span>Add New Member</span>
    </a>

    <a href="/admin/kyc" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-sm transition <?= isActive('/admin/kyc', $currentUri) ?>">
      <i class="fa-solid fa-shield-halved w-5 text-amber-500"></i>
      <span>KYC Workbench</span>
    </a>

    <div class="pt-5 px-3 pb-2 text-[10px] font-bold text-stone-400 tracking-widest uppercase">Monetization & VIP</div>

    <a href="/admin/subscriptions" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-sm transition <?= isActive('/admin/subscriptions', $currentUri) && !isActive('/admin/subscriptions/grant-logs', $currentUri) ? 'bg-gradient-to-r from-amber-100/90 to-amber-50 text-maroon-800 border-l-4 border-amber-500 font-bold shadow-sm' : 'text-stone-700 hover:bg-amber-50/80 hover:text-maroon-800 font-medium' ?>">
      <i class="fa-solid fa-crown w-5 text-amber-500"></i>
      <span>Subscription Plans</span>
    </a>

    <a href="/admin/subscriptions/grant-logs" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-sm transition <?= isActive('/admin/subscriptions/grant-logs', $currentUri) ?>">
      <i class="fa-solid fa-book-open w-5 text-amber-500"></i>
      <span>VIP Grant Ledger</span>
    </a>

    <a href="/admin/promotions" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-sm transition <?= isActive('/admin/promotions', $currentUri) ?>">
      <i class="fa-solid fa-bullhorn w-5 text-amber-500"></i>
      <span>Launch Promo Engine</span>
    </a>

    <a href="/admin/communities" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-sm transition <?= isActive('/admin/communities', $currentUri) ?>">
      <i class="fa-brands fa-whatsapp w-5 text-emerald-600"></i>
      <span>WhatsApp Groups</span>
    </a>

    <a href="/admin/brokers" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-sm transition <?= isActive('/admin/brokers', $currentUri) ? 'bg-gradient-to-r from-amber-100/90 to-amber-50 text-maroon-800 border-l-4 border-amber-500 font-bold shadow-sm' : 'text-stone-700 hover:bg-amber-50/80 hover:text-maroon-800 font-medium' ?>">
      <i class="fa-solid fa-handshake w-5 text-amber-500"></i>
      <span>Brokers & Bureaus</span>
    </a>

    <div class="pt-5 px-3 pb-2 text-[10px] font-bold text-stone-400 tracking-widest uppercase">System & Anti-Hacking</div>

    <a href="/admin/settings/api" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-sm transition <?= isActive('/admin/settings/api', $currentUri) ? 'bg-gradient-to-r from-amber-100/90 to-amber-50 text-maroon-800 border-l-4 border-amber-500 font-bold shadow-sm' : 'text-stone-700 hover:bg-amber-50/80 hover:text-maroon-800 font-medium' ?>">
      <i class="fa-solid fa-key w-5 text-amber-500"></i>
      <span>API & Gateway Secrets</span>
    </a>

    <a href="/admin/settings/mail" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-sm transition <?= isActive('/admin/settings/mail', $currentUri) ?>">
      <i class="fa-solid fa-envelope-open-text w-5 text-amber-500"></i>
      <span>Email & SMTP Config</span>
    </a>

    <a href="/admin/security/audit-logs" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-sm transition <?= isActive('/admin/security/audit-logs', $currentUri) ?>">
      <i class="fa-solid fa-clock-rotate-left w-5 text-amber-500"></i>
      <span>Security Audit Logs</span>
    </a>

    <a href="/admin/security/firewall" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-sm transition <?= isActive('/admin/security/firewall', $currentUri) ?>">
      <i class="fa-solid fa-fire-extinguisher w-5 text-amber-500"></i>
      <span>Firewall & IP Shield</span>
    </a>

    <div class="pt-5 px-3 pb-2 text-[10px] font-bold text-stone-400 tracking-widest uppercase">Mobile View</div>

    <a href="/app" target="_blank" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-sm text-maroon-800 bg-amber-50/80 hover:bg-amber-100 border border-amber-300/80 transition font-bold shadow-sm">
      <i class="fa-solid fa-mobile-screen-button w-5 text-amber-600"></i>
      <span>Live Mobile App View</span>
    </a>

  </nav>

  <!-- Bottom Session Quick-Lock -->
  <div class="p-4 border-t border-amber-100 bg-[#FAF7F2]/60 text-center">
    <a href="/admin/lockscreen" class="inline-flex items-center justify-center space-x-2 w-full py-2.5 px-3 rounded-xl text-xs font-bold bg-white hover:bg-amber-50 text-stone-700 hover:text-maroon-800 border border-stone-200 shadow-sm transition">
      <i class="fa-solid fa-lock text-amber-500"></i>
      <span>Lock Workstation</span>
    </a>
  </div>
</aside>
