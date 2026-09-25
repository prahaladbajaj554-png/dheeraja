# 👑 Module 04: Master Admin Panel Specification

## 📌 Executive Overview

The **Master Admin Panel** provides **100% unrestricted administrative sovereignty** over the entire Dheeraja Matrimony ecosystem. 

Unlike basic dashboards that squeeze operations into a single confusing screen, this architecture enforces a **strict Laravel-inspired CRUD separation** where every business entity has dedicated, distinct pages for:
1. `index.php` (Search, Advanced Filter, Bulk Actions, Data Table)
2. `add.php` (Complete Creation Form with Stepwise / Accordion Validation)
3. `edit.php` (Granular Field Mutation & Credential Overrides)
4. `view.php` (360-degree Member Profile Dossier with Tabbed Histories)
5. `grant-vip.php` (Instant Plan Provisioning / VIP Overrides)
6. `delete.php` (Soft Delete / Hard Purge with Mandatory Audit Reasons)

---

## 🎨 Design Theme: Royal White, Maroon, Gold & Liquid Glass

The Admin Panel UI is custom-styled with our **Imperial Royal Theme**:
- **Background**: Soft Ivory Pearl (`#FDFBF7`) with subtle gold geometric lattice patterns.
- **Sidebar & Top Bar**: Deep Crimson Maroon (`#6B1D2F` to `#4A121F` gradient) with Frosted Liquid Glass (`backdrop-blur: 16px`, `rgba(255, 255, 255, 0.1)` border highlights).
- **Accents & Badges**: Antique Radiant Gold (`#D4AF37` / `#F5BD42`) glow effects on active links, KPI cards, and VIP action buttons.
- **Typography**: Clean modern typography (`Cinzel` for royal headings, `Plus Jakarta Sans` or `Inter` for data density and tabular legibility).

---

## 🏛️ Comprehensive Feature Breakdown by Module

### 1. Master Dashboard (`/admin/dashboard`)
- **Key Metric Widgets (KPIs)**:
  - Total Profiles Registered (Male vs Female split).
  - KYC Verifications Pending (Flashing Amber Alert).
  - Active Paid vs Free VIP Subscribers.
  - Daily Active Users (DAU) & New Signups Today.
  - Active Conversations & Matches Generated.
- **Urgent Action Queue**:
  - Unapproved Profile Photos awaiting review.
  - Flagged/Reported Profiles requiring moderator intervention.
  - Government ID / KYC submissions queue.
- **Visual Analytics**:
  - Registrations per day chart (Chart.js / ApexCharts).
  - Caste & Regional distribution breakdown.
  - Subscription tier distribution.

---

### 2. User Management Suite (`/admin/users`)

#### A. Manage Users (`views/admin/users/index.php`)
- Advanced multi-filter: Matrimony ID, Name, Phone, Email, Gender, Caste, KYC Status, VIP Status, Account Status (Active/Suspended/Banned).
- Bulk actions: Bulk Approve Photos, Bulk KYC Verify, Bulk Grant 30-Day VIP, Bulk Ban Spam Accounts.
- One-click quick status toggles (Active / Suspended / Banned).

#### B. Add New Member (`views/admin/users/add.php`)
- Full manual profile creation capability for assisted matchmaking / offline clients.
- Sections:
  1. Account Credentials (Email, Phone, Temp Password, Created For).
  2. Personal & Physical (Full Name, Gender, DOB, Height, Complexion, Eating/Smoking habits).
  3. Education & Career (Degree, University, Company, Annual Income LPA).
  4. Family Background (Father/Mother status, Siblings, Native Place, Values).
  5. Kundali / Astrology (Gotra, Rashi, Nakshatra, Manglik status).
  6. Initial Partner Preferences.

#### C. Edit Member Profile (`views/admin/users/edit.php`)
- Comprehensive edit capability for every single field in the user database.
- Ability to reset user passwords or generate instant magic login links.
- Override contact details, email verification status, and phone verification flag.

#### D. 360° Member Dossier (`views/admin/users/view.php`)
- Tabbed interface:
  - **Tab 1: Profile & Bio**: Complete personal, family, and educational summary.
  - **Tab 2: Photo Gallery**: All uploaded photos with instant "Approve", "Reject with Reason", or "Set Primary" buttons.
  - **Tab 3: KYC Documents**: High-resolution zoomable front & back ID viewer with metadata comparison.
  - **Tab 4: Activity & Connections**: List of sent/received interests, shortlists, and chat logs.
  - **Tab 5: Subscription Ledger**: Active package, days remaining, contact views consumed, and past transaction records.
  - **Tab 6: Security & Logs**: User login history, last known IP addresses, device user-agents.

#### E. VIP Grant Engine (`views/admin/users/grant-vip.php`)
- **Direct VIP Power**: The Master Admin can grant any subscription tier to any user immediately.
- Form inputs:
  - Target User (Pre-selected or search by Matrimony ID / Phone).
  - Select Plan (e.g., Free Trial VIP, Gold 90 Days, Royal VIP 180 Days, Lifetime Free VIP).
  - Custom Validity Override (Number of days, e.g., 7, 30, 90, 180, 365, or Unlimited).
  - Contact View Limit Override (e.g., 50, 100, 500, or Unlimited).
  - Direct Message Limit Override (e.g., 200, 1000, or Unlimited).
  - Internal Admin Grant Reason (e.g., "Launch Promotion", "VIP Influencer", "Offline Customer Support").
  - Instant Notification Checkbox ("Send celebratory VIP Email & In-App Alert to user").

---

### 3. KYC & Verification Queue (`/admin/kyc`)

- **Dedicated Verification Workbench (`views/admin/kyc/review.php`)**:
  - Side-by-side view comparing user submitted data (Name, DOB, Gender) against the uploaded document (Aadhaar, Passport, PAN, Voter ID).
  - Secure document viewer with image zoom, rotation, and high-contrast filters.
  - One-click **"Approve & Badge"**: Automatically sets `is_kyc_verified = 1`, adds the blue verified shield to the user's mobile profile, and triggers an automated congratulations email.
  - One-click **"Reject with Reason"**: Provides a dropdown of standard rejection reasons (e.g., "Blurry document", "Name mismatch", "Expired ID") plus custom notes. Automatically alerts the user to re-upload.

---

### 4. Subscription & Monetization Manager (`/admin/subscriptions`)

- **Manage Plans (`views/admin/subscriptions/index.php`)**:
  - View all defined packages with active subscriber counts.
- **Add & Edit Plan (`views/admin/subscriptions/add.php`, `edit.php`)**:
  - Plan Code, Display Title, Tagline.
  - Price in INR (Set to `0.00` for promotional tiers).
  - Validity in Days.
  - Contact Views quota & Direct Messages quota.
  - Perks toggles: Priority Search Boost, Unlimited Kundali Matching, Verified Badge.
  - Active/Inactive toggle.
- **Manual Grant Audit Ledger (`views/admin/subscriptions/grant-logs.php`)**:
  - Full transparent log of every plan granted for free by administrators, tracking:
    `Admin Name | User Matrimony ID | Plan Granted | Duration | Date | Reason`.

---

### 5. Promotional & Announcement Engine (`/admin/promotions`)

- **Launch Promotion Switch**: Global toggle in admin settings to enable **"Free VIP For All Early Users"**.
- **Promotional Banners**:
  - Upload mobile and desktop promotional banners.
  - Target audience: All users, Unverified users, Free tier users.
  - Action link (e.g., deep-link to KYC upload or profile completion).
- **Coupon & Discount Engine**:
  - Create promotional discount codes (e.g., `DHEERAJA100`, `SHUBHLAABH50`).

---

### 6. Anti-Hacking & Security Operations Center (`/admin/security`)

#### A. Inactivity Session Lock Screen
- Automatic idle detection on the admin interface (configurable: 15 or 30 minutes).
- Upon timeout, the screen blurs into a secure royal glassmorphic lock screen.
- The administrator must re-enter their password to resume work, preventing unauthorized access if an admin leaves their workstation unattended.

#### B. Permanent Admin Audit Logs (`views/admin/security/audit-logs.php`)
- Every sensitive operation is permanently logged into `admin_logs`:
  - Login attempts (successful and failed).
  - Profile data edits or credential changes.
  - Plan grants or revocations.
  - User bans, unbans, or deletions.
  - KYC approvals or rejections.
  - Includes: Admin ID, Action Name, Target ID, Timestamp, IP Address, and JSON diff of modified attributes.

#### C. Dynamic IP Blacklist & Firewall (`views/admin/security/ip-firewall.php`)
- View and manage blocked IP addresses.
- Auto-ban trigger: IPs attempting more than 5 failed admin logins or suspicious API scraping are automatically blacklisted for 24 hours.
- Whitelist mode: Option to restrict Admin Panel access strictly to specified corporate/office IP ranges.

#### D. Anti-Tamper & Defensive Headers
- Strict **CSRF (Cross-Site Request Forgery)** token validation on 100% of admin forms.
- **Content Security Policy (CSP)**, `X-Frame-Options: SAMEORIGIN`, `X-XSS-Protection`, and `X-Content-Type-Options: nosniff`.
- Parameterized PDO prepared statements across the board to completely prevent SQL Injection.
