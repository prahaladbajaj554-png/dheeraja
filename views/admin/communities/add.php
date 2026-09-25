<div class="max-w-2xl mx-auto space-y-6">
  
  <div class="flex items-center justify-between">
    <div class="flex items-center space-x-2 text-xs text-stone-500">
      <a href="/admin/communities" class="hover:text-maroon-700">WhatsApp Communities</a>
      <span>/</span>
      <span class="text-maroon-800 font-semibold">New Group</span>
    </div>
    <a href="/admin/communities" class="px-3.5 py-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">
      &larr; Back to Communities
    </a>
  </div>

  <form action="/admin/communities/create" method="POST" class="glass-card p-8 rounded-3xl space-y-6">
    <?= csrf_field() ?>

    <div class="border-b border-stone-200 pb-3">
      <h2 class="text-xl font-cinzel font-bold text-maroon-800 flex items-center">
        <i class="fa-brands fa-whatsapp text-emerald-500 mr-2"></i> Add Matrimony WhatsApp Community
      </h2>
      <p class="text-xs text-stone-500 mt-1">Provide direct join link for prospective brides, grooms & families</p>
    </div>

    <div class="space-y-4 text-xs">
      <div>
        <label class="block font-semibold text-stone-700 mb-1">Community Group Title *</label>
        <input type="text" name="title" placeholder="e.g. Dheeraja Marwari & Agarwal Rishtey Circle" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Target Community / Caste *</label>
          <input type="text" name="caste_group" value="All Communities" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Region / Location *</label>
          <input type="text" name="region" value="Pan-India & Global" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
      </div>
      <div>
        <label class="block font-semibold text-stone-700 mb-1">WhatsApp Group / Community Link *</label>
        <input type="url" name="whatsapp_url" placeholder="https://chat.whatsapp.com/..." required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl font-mono focus:border-gold-400">
      </div>
      <div>
        <label class="block font-semibold text-stone-700 mb-1">Estimated Member Count (Badge)</label>
        <input type="number" name="member_count" value="250" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
      </div>
      <div>
        <label class="block font-semibold text-stone-700 mb-1">Short Description</label>
        <textarea name="description" rows="2" placeholder="e.g. Exclusive matchmaking circle for verified families..." class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400"></textarea>
      </div>
    </div>

    <div class="flex items-center justify-end space-x-3 pt-2">
      <a href="/admin/communities" class="px-5 py-2.5 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">Cancel</a>
      <button type="submit" class="btn-royal-gold px-8 py-3 rounded-xl text-xs font-bold uppercase tracking-wider shadow-md">
        Publish Community
      </button>
    </div>

  </form>

</div>
