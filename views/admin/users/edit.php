<div class="max-w-4xl mx-auto space-y-6">
  
  <!-- Breadcrumb -->
  <div class="flex items-center justify-between">
    <div class="flex items-center space-x-2 text-xs text-stone-500">
      <a href="/admin/users" class="hover:text-maroon-700">Members</a>
      <span>/</span>
      <a href="/admin/users/view/<?= $user['id'] ?>" class="hover:text-maroon-700"><?= htmlspecialchars($user['first_name']) ?></a>
      <span>/</span>
      <span class="text-maroon-800 font-semibold">Edit Record</span>
    </div>
    <a href="/admin/users/view/<?= $user['id'] ?>" class="px-3.5 py-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">
      &larr; Back to Dossier
    </a>
  </div>

  <form action="/admin/users/update/<?= $user['id'] ?>" method="POST" class="space-y-6">
    <?= csrf_field() ?>

    <!-- Section 1: Account & Status -->
    <div class="glass-card p-6 rounded-2xl space-y-4">
      <h3 class="font-cinzel font-bold text-base text-maroon-800 border-b border-stone-200 pb-2">
        Account Credentials & Status
      </h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 text-xs">
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Email Address</label>
          <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Phone Number</label>
          <input type="text" name="phone" value="<?= htmlspecialchars($user['phone']) ?>" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Account Status</label>
          <select name="status" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
            <option value="active" <?= $user['status'] === 'active' ? 'selected' : '' ?>>Active</option>
            <option value="suspended" <?= $user['status'] === 'suspended' ? 'selected' : '' ?>>Suspended</option>
            <option value="banned" <?= $user['status'] === 'banned' ? 'selected' : '' ?>>Banned</option>
          </select>
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">KYC Status</label>
          <select name="is_kyc_verified" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
            <option value="1" <?= !empty($user['is_kyc_verified']) ? 'selected' : '' ?>>Verified (Blue Shield)</option>
            <option value="0" <?= empty($user['is_kyc_verified']) ? 'selected' : '' ?>>Unverified</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Section 2: Personal Profile -->
    <div class="glass-card p-6 rounded-2xl space-y-4">
      <h3 class="font-cinzel font-bold text-base text-maroon-800 border-b border-stone-200 pb-2">
        Personal, Physical & Location
      </h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 text-xs">
        <div>
          <label class="block font-semibold text-stone-700 mb-1">First Name</label>
          <input type="text" name="first_name" value="<?= htmlspecialchars($user['first_name'] ?? '') ?>" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Last Name</label>
          <input type="text" name="last_name" value="<?= htmlspecialchars($user['last_name'] ?? '') ?>" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Date of Birth</label>
          <input type="date" name="dob" value="<?= $user['dob'] ?? '1995-01-01' ?>" required class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Height (cm)</label>
          <input type="number" name="height_cm" value="<?= $user['height_cm'] ?? 165 ?>" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Marital Status</label>
          <select name="marital_status" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
            <option value="never_married" <?= ($user['marital_status'] ?? '') === 'never_married' ? 'selected' : '' ?>>Never Married</option>
            <option value="divorced" <?= ($user['marital_status'] ?? '') === 'divorced' ? 'selected' : '' ?>>Divorced</option>
            <option value="widowed" <?= ($user['marital_status'] ?? '') === 'widowed' ? 'selected' : '' ?>>Widowed</option>
          </select>
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">City</label>
          <input type="text" name="current_city" value="<?= htmlspecialchars($user['current_city'] ?? '') ?>" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">State</label>
          <input type="text" name="current_state" value="<?= htmlspecialchars($user['current_state'] ?? '') ?>" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Caste</label>
          <input type="text" name="caste" value="<?= htmlspecialchars($user['caste'] ?? '') ?>" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div class="sm:col-span-4">
          <label class="block font-semibold text-stone-700 mb-1">About Bio</label>
          <textarea name="about_me" rows="3" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400"><?= htmlspecialchars($user['about_me'] ?? '') ?></textarea>
        </div>
      </div>
    </div>

    <!-- Section 3: Career & Astrology -->
    <div class="glass-card p-6 rounded-2xl space-y-4">
      <h3 class="font-cinzel font-bold text-base text-maroon-800 border-b border-stone-200 pb-2">
        Career, Income & Gotra
      </h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 text-xs">
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Qualification</label>
          <input type="text" name="highest_education" value="<?= htmlspecialchars($user['highest_education'] ?? '') ?>" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Occupation</label>
          <input type="text" name="occupation" value="<?= htmlspecialchars($user['occupation'] ?? '') ?>" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Annual Income (INR)</label>
          <input type="number" name="annual_income_inr" value="<?= (int)($user['annual_income_inr'] ?? 0) ?>" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
        <div>
          <label class="block font-semibold text-stone-700 mb-1">Gotra</label>
          <input type="text" name="gotra" value="<?= htmlspecialchars($user['gotra'] ?? '') ?>" class="w-full px-3 py-2 bg-stone-50 border border-stone-200 rounded-xl focus:border-gold-400">
        </div>
      </div>
    </div>

    <!-- Submit Toolbar -->
    <div class="flex items-center justify-end space-x-3 pt-2">
      <a href="/admin/users/view/<?= $user['id'] ?>" class="px-5 py-2.5 rounded-xl bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold">Cancel</a>
      <button type="submit" class="btn-royal-maroon px-8 py-3 rounded-xl text-xs font-bold uppercase tracking-wider shadow-md">
        Save Changes
      </button>
    </div>

  </form>

</div>
