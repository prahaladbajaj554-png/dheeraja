<div class="max-w-4xl mx-auto space-y-6">

  <!-- Header Breadcrumb -->
  <div class="flex items-center justify-between">
    <div>
      <div class="flex items-center space-x-2 text-xs text-stone-500 mb-1">
        <a href="/admin/brokers" class="hover:text-maroon-700">Brokers</a>
        <span>/</span>
        <span class="text-maroon-800 font-bold">Register New Agent</span>
      </div>
      <h1 class="text-2xl font-cinzel font-bold text-stone-900">Register Marriage Bureau / Agent</h1>
    </div>

    <a href="/admin/brokers" class="px-3.5 py-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">
      &larr; Back to Directory
    </a>
  </div>

  <!-- Registration Form Card -->
  <div class="bg-white rounded-3xl border border-stone-200 shadow-sm p-6 sm:p-8">
    <form action="/admin/brokers/create" method="POST" class="space-y-6">
      <?= csrf_field() ?>

      <!-- Section: Agent Identity -->
      <div>
        <h3 class="font-cinzel font-bold text-sm text-maroon-800 border-b border-amber-100 pb-2 mb-4">
          <i class="fa-solid fa-id-card-clip text-amber-500 mr-2"></i> Agent & Bureau Identity
        </h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
          <div>
            <label class="block font-semibold text-stone-700 mb-1">Agent / Pandit Name *</label>
            <input type="text" name="name" required placeholder="e.g. Pt. Radheshyam Sharma"
                   class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 text-sm">
          </div>

          <div>
            <label class="block font-semibold text-stone-700 mb-1">Bureau / Agency Name</label>
            <input type="text" name="agency_name" placeholder="e.g. Royal Rajputana Vivah Kendra"
                   class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 text-sm">
          </div>

          <div>
            <label class="block font-semibold text-stone-700 mb-1">Mobile / WhatsApp Number *</label>
            <input type="text" name="phone" required placeholder="+91 98290 12345"
                   class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 text-sm">
          </div>

          <div>
            <label class="block font-semibold text-stone-700 mb-1">Email Address</label>
            <input type="email" name="email" placeholder="agent@agency.com"
                   class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 text-sm">
          </div>

          <div>
            <label class="block font-semibold text-stone-700 mb-1">City / Region</label>
            <input type="text" name="city" placeholder="e.g. Jaipur"
                   class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 text-sm">
          </div>

          <div>
            <label class="block font-semibold text-stone-700 mb-1">State</label>
            <input type="text" name="state" placeholder="e.g. Rajasthan"
                   class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 text-sm">
          </div>
        </div>
      </div>

      <!-- Section: Commission & Banking -->
      <div>
        <h3 class="font-cinzel font-bold text-sm text-maroon-800 border-b border-amber-100 pb-2 mb-4">
          <i class="fa-solid fa-coins text-amber-500 mr-2"></i> Commission Terms & Payout Channels
        </h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
          <div>
            <label class="block font-semibold text-stone-700 mb-1">Referral Commission Rate (%)</label>
            <input type="number" step="0.5" name="commission_rate_percent" value="15.0"
                   class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 text-sm font-bold">
            <span class="text-[11px] text-stone-400 mt-0.5 block">% of subscription fees or closing bonus awarded to broker</span>
          </div>

          <div>
            <label class="block font-semibold text-stone-700 mb-1">Payout UPI ID (Instant Transfer)</label>
            <input type="text" name="payout_upi_id" placeholder="e.g. shastri@upi / mobile@okaxis"
                   class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 text-sm">
          </div>

          <div>
            <label class="block font-semibold text-stone-700 mb-1">Bank Account Number</label>
            <input type="text" name="bank_account_number" placeholder="Bank account number"
                   class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 text-sm">
          </div>

          <div>
            <label class="block font-semibold text-stone-700 mb-1">Bank IFSC Code</label>
            <input type="text" name="bank_ifsc" placeholder="e.g. SBIN0001234"
                   class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 text-sm uppercase">
          </div>

          <div class="sm:col-span-2">
            <label class="block font-semibold text-stone-700 mb-1">Specialization / Notes</label>
            <textarea name="notes" rows="3" placeholder="e.g. Specializes in Jain & Marwari industrialist families..."
                      class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl focus:border-amber-500 text-sm"></textarea>
          </div>
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="pt-4 border-t border-stone-100 flex items-center justify-end space-x-3">
        <a href="/admin/brokers" class="px-5 py-2.5 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">Cancel</a>
        <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-maroon-700 to-maroon-800 text-white font-bold text-xs shadow-md shadow-maroon-700/20 hover:from-maroon-800 hover:to-maroon-900 transition">
          <i class="fa-solid fa-check mr-1.5 text-amber-300"></i> Register & Activate Broker
        </button>
      </div>

    </form>
  </div>

</div>
