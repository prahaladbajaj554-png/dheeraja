<div class="max-w-2xl mx-auto space-y-6">
  
  <div class="flex items-center justify-between">
    <div class="flex items-center space-x-2 text-xs text-stone-500">
      <a href="/admin/promotions" class="hover:text-maroon-700">Promotions</a>
      <span>/</span>
      <span class="text-maroon-800 font-semibold">New Campaign</span>
    </div>
    <a href="/admin/promotions" class="px-3.5 py-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">
      &larr; Back to Promotions
    </a>
  </div>

  <form action="/admin/promotions/create" method="POST" class="glass-card p-8 rounded-3xl space-y-6">
    <?= csrf_field() ?>

    <div class="border-b border-stone-200 pb-3">
      <h2 class="text-xl font-cinzel font-bold text-maroon-800">Publish Marketing Campaign / Banner</h2>
      <p class="text-xs text-stone-500 mt-1">Broadcast launch offers and promotional alerts across the mobile app</p>
    </div>

    <div class="space-y-4 text-xs">
      <div>
        <label class="block font-semibold text-stone-700 mb-1">Campaign Headline Title *</label>
        <input type="text" name="title" placeholder="e.g. Navratri Special: 50% Off on Royal Gold Plans" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Badge Tag</label>
          <input type="text" name="badge_text" value="FESTIVE SPECIAL" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400 uppercase">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Discount Coupon Code</label>
          <input type="text" name="coupon_code" placeholder="e.g. FESTIVE50" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400 uppercase font-mono">
        </div>
      </div>
      <div>
        <label class="block font-semibold text-stone-700 mb-1">Target Deep Link / Action URL</label>
        <input type="text" name="action_link" value="/plans" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400 font-mono">
      </div>
      <div>
        <label class="block font-semibold text-stone-700 mb-1">Detailed Description</label>
        <textarea name="description" rows="3" placeholder="Explain campaign perks and terms..." class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400"></textarea>
      </div>
    </div>

    <div class="flex items-center justify-end space-x-3 pt-2">
      <a href="/admin/promotions" class="px-5 py-2.5 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">Cancel</a>
      <button type="submit" class="btn-royal-gold px-8 py-3 rounded-xl text-xs font-bold uppercase tracking-wider shadow-md">
        Publish Campaign
      </button>
    </div>

  </form>

</div>
