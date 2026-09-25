<div class="max-w-2xl mx-auto space-y-6">
  
  <div class="flex items-center justify-between">
    <div class="flex items-center space-x-2 text-xs text-stone-500">
      <a href="/admin/subscriptions" class="hover:text-maroon-700">Plans</a>
      <span>/</span>
      <span class="text-maroon-800 font-semibold">New Package</span>
    </div>
    <a href="/admin/subscriptions" class="px-3.5 py-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">
      &larr; Back to Plans
    </a>
  </div>

  <form action="/admin/subscriptions/create" method="POST" class="glass-card p-8 rounded-3xl space-y-6">
    <?= csrf_field() ?>

    <div class="border-b border-stone-200 pb-3">
      <h2 class="text-xl font-cinzel font-bold text-maroon-800">Create New Subscription Package</h2>
      <p class="text-xs text-stone-500 mt-1">Configure pricing, duration, and feature limits</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
      <div>
        <label class="block font-semibold text-stone-700 mb-1">Unique Plan Code *</label>
        <input type="text" name="plan_code" placeholder="e.g. PLATINUM_365" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400 font-mono uppercase">
      </div>
      <div>
        <label class="block font-semibold text-stone-700 mb-1">Display Title *</label>
        <input type="text" name="title" placeholder="e.g. Platinum Crown Match" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
      </div>
      <div>
        <label class="block font-semibold text-stone-700 mb-1">Price (INR) *</label>
        <input type="number" step="0.01" name="price_inr" value="3999.00" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
      </div>
      <div>
        <label class="block font-semibold text-stone-700 mb-1">Validity (Days) *</label>
        <input type="number" name="duration_days" value="180" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
      </div>
      <div>
        <label class="block font-semibold text-stone-700 mb-1">Contact Views Limit *</label>
        <input type="number" name="contact_views_limit" value="100" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
      </div>
      <div>
        <label class="block font-semibold text-stone-700 mb-1">Direct Messages Limit *</label>
        <input type="number" name="direct_messages_limit" value="500" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
      </div>
      <div class="sm:col-span-2">
        <label class="block font-semibold text-stone-700 mb-1">Badge Display Name</label>
        <input type="text" name="badge_name" value="Platinum VIP" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
      </div>
    </div>

    <!-- Toggles -->
    <div class="p-4 rounded-xl bg-stone-50 border border-stone-200 space-y-3 text-xs">
      <label class="flex items-center space-x-2.5 cursor-pointer">
        <input type="checkbox" name="priority_search_boost" value="1" checked class="w-4 h-4 text-gold-600 rounded">
        <span class="font-medium text-stone-800">Priority Search Boost (Displays at the top of recommendations)</span>
      </label>
      <label class="flex items-center space-x-2.5 cursor-pointer">
        <input type="checkbox" name="kundali_matching_unlimited" value="1" checked class="w-4 h-4 text-gold-600 rounded">
        <span class="font-medium text-stone-800">Unlimited Kundali Gun Milan Calculator</span>
      </label>
    </div>

    <div class="flex items-center justify-end space-x-3 pt-2">
      <a href="/admin/subscriptions" class="px-5 py-2.5 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">Cancel</a>
      <button type="submit" class="btn-royal-gold px-8 py-3 rounded-xl text-xs font-bold uppercase tracking-wider shadow-md">
        Publish Package
      </button>
    </div>

  </form>

</div>
