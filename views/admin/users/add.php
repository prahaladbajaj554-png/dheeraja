<div class="max-w-4xl mx-auto space-y-6">
  
  <!-- Breadcrumb & Header -->
  <div class="flex items-center justify-between">
    <div>
      <div class="flex items-center space-x-2 text-xs text-stone-500 mb-1">
        <a href="/admin/users" class="hover:text-maroon-700">Members</a>
        <span>/</span>
        <span class="text-maroon-800 font-semibold">Register New Member</span>
      </div>
      <h2 class="text-2xl font-cinzel font-bold text-maroon-800">Register New Matrimonial Profile</h2>
    </div>
    <a href="/admin/users" class="px-3.5 py-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold flex items-center space-x-1.5 transition">
      <i class="fa-solid fa-arrow-left"></i>
      <span>Back to List</span>
    </a>
  </div>

  <!-- Form Container -->
  <form action="/admin/users/create" method="POST" class="space-y-6">
    <?= csrf_field() ?>

    <!-- Section 1: Account Credentials -->
    <div class="glass-card p-6 rounded-2xl space-y-4">
      <h3 class="font-cinzel font-bold text-base text-maroon-800 border-b border-stone-200 pb-2 flex items-center">
        <span class="w-6 h-6 rounded-full bg-maroon-100 text-maroon-800 text-xs flex items-center justify-center mr-2">1</span>
        Account Credentials & Contact
      </h3>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 text-xs">
        <div>
          <label class="block font-semibold text-stone-700 mb-1">First Name *</label>
          <input type="text" name="first_name" required placeholder="e.g. Vikram" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Last Name *</label>
          <input type="text" name="last_name" required placeholder="e.g. Rathore" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Profile Created For</label>
          <select name="profile_for" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
            <option value="myself">Myself</option>
            <option value="son">Son</option>
            <option value="daughter">Daughter</option>
            <option value="brother">Brother</option>
            <option value="sister">Sister</option>
            <option value="relative">Relative / Friend</option>
          </select>
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Email Address *</label>
          <input type="email" name="email" required placeholder="vikram@example.com" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Mobile / WhatsApp Number *</label>
          <input type="text" name="phone" required placeholder="+91 9876543210" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Temporary Password</label>
          <input type="text" name="password" value="Dheeraja@2026" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400 font-mono">
        </div>
      </div>
    </div>

    <!-- Section 2: Personal & Physical Details -->
    <div class="glass-card p-6 rounded-2xl space-y-4">
      <h3 class="font-cinzel font-bold text-base text-maroon-800 border-b border-stone-200 pb-2 flex items-center">
        <span class="w-6 h-6 rounded-full bg-maroon-100 text-maroon-800 text-xs flex items-center justify-center mr-2">2</span>
        Personal, Physical & Location
      </h3>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 text-xs">
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Gender *</label>
          <select name="gender" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
            <option value="male">Groom (Male)</option>
            <option value="female">Bride (Female)</option>
          </select>
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Date of Birth *</label>
          <input type="date" name="dob" value="1995-06-15" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Marital Status</label>
          <select name="marital_status" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
            <option value="never_married">Never Married</option>
            <option value="divorced">Divorced</option>
            <option value="widowed">Widowed</option>
            <option value="separated">Separated</option>
          </select>
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Height (cm)</label>
          <input type="number" name="height_cm" value="175" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Current City</label>
          <input type="text" name="city" value="Jaipur" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Current State</label>
          <input type="text" name="state" value="Rajasthan" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div class="sm:col-span-2">
          <label class="block font-semibold text-stone-700 mb-1">About Bio</label>
          <input type="text" name="about_me" placeholder="A brief introduction about personality and lifestyle" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
      </div>
    </div>

    <!-- Section 3: Education & Career -->
    <div class="glass-card p-6 rounded-2xl space-y-4">
      <h3 class="font-cinzel font-bold text-base text-maroon-800 border-b border-stone-200 pb-2 flex items-center">
        <span class="w-6 h-6 rounded-full bg-maroon-100 text-maroon-800 text-xs flex items-center justify-center mr-2">3</span>
        Education, Profession & Income
      </h3>

      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Highest Qualification</label>
          <input type="text" name="highest_education" value="B.Tech / MBA" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Employed In</label>
          <select name="employed_in" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
            <option value="private_sector">Private Sector</option>
            <option value="government_psu">Government / PSU</option>
            <option value="business_self_employed">Business / Entrepreneur</option>
            <option value="defense">Defense</option>
          </select>
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Annual Income (INR)</label>
          <input type="number" name="annual_income_inr" value="1500000" placeholder="e.g. 1500000 (15 LPA)" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
      </div>
    </div>

    <!-- Section 4: Astrology & Kundali Details -->
    <div class="glass-card p-6 rounded-2xl space-y-4">
      <h3 class="font-cinzel font-bold text-base text-maroon-800 border-b border-stone-200 pb-2 flex items-center">
        <span class="w-6 h-6 rounded-full bg-maroon-100 text-maroon-800 text-xs flex items-center justify-center mr-2">4</span>
        Astrology & Cultural Background
      </h3>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 text-xs">
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Caste *</label>
          <input type="text" name="caste" value="Rajput" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Sub-caste</label>
          <input type="text" name="sub_caste" placeholder="e.g. Shekhawat" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Gotra</label>
          <input type="text" name="gotra" placeholder="e.g. Kashyap" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Manglik Status</label>
          <select name="manglik" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
            <option value="no">Non-Manglik</option>
            <option value="anshik">Anshik (Partial)</option>
            <option value="yes">Manglik</option>
            <option value="dont_know">Don't Know</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Section 5: VIP Granting Privilege -->
    <div class="glass-card p-6 rounded-2xl bg-gradient-to-r from-amber-50 to-amber-100/50 border border-amber-300 space-y-3">
      <div class="flex items-center space-x-3">
        <input type="checkbox" name="grant_vip" id="grant_vip" value="1" checked class="w-4 h-4 text-gold-600 rounded border-amber-300 focus:ring-gold-500">
        <label for="grant_vip" class="font-bold text-xs text-amber-900 cursor-pointer">
          👑 Auto-Grant 90 Days Royal VIP Pro Plan Immediately (Free Launch Privilege)
        </label>
      </div>
      <p class="text-[11px] text-amber-800/80 pl-7 leading-relaxed">
        Grants 200 free verified contact views, unlimited direct in-app chatting, priority match recommendation boost, and the Royal VIP Gold badge.
      </p>
    </div>

    <!-- Submit Toolbar -->
    <div class="flex items-center justify-end space-x-3 pt-2">
      <a href="/admin/users" class="px-5 py-2.5 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">Cancel</a>
      <button type="submit" class="btn-royal-gold px-8 py-3 rounded-xl text-xs font-bold uppercase tracking-wider shadow-md">
        <i class="fa-solid fa-check mr-1.5"></i> Create & Activate Member
      </button>
    </div>

  </form>

</div>
