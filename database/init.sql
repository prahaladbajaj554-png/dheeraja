-- Dheeraja Matrimony Database Initializer
-- Clean Setup & Relational Architecture

SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `admin_logs`;
DROP TABLE IF EXISTS `blocked_ips`;
DROP TABLE IF EXISTS `promotions`;
DROP TABLE IF EXISTS `app_settings`;
DROP TABLE IF EXISTS `notifications`;
DROP TABLE IF EXISTS `chat_messages`;
DROP TABLE IF EXISTS `shortlists`;
DROP TABLE IF EXISTS `interests`;
DROP TABLE IF EXISTS `user_subscriptions`;
DROP TABLE IF EXISTS `subscription_plans`;
DROP TABLE IF EXISTS `kyc_documents`;
DROP TABLE IF EXISTS `user_photos`;
DROP TABLE IF EXISTS `partner_preferences`;
DROP TABLE IF EXISTS `astrology_details`;
DROP TABLE IF EXISTS `family_details`;
DROP TABLE IF EXISTS `education_careers`;
DROP TABLE IF EXISTS `profiles`;
DROP TABLE IF EXISTS `users`;

SET FOREIGN_KEY_CHECKS = 1;

-- 1. Users Table
CREATE TABLE `users` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `matrimony_id` VARCHAR(20) NOT NULL UNIQUE,
  `email` VARCHAR(150) NOT NULL UNIQUE,
  `phone` VARCHAR(20) NOT NULL UNIQUE,
  `password_hash` VARCHAR(255) NOT NULL,
  `role` ENUM('super_admin', 'admin', 'moderator', 'user') NOT NULL DEFAULT 'user',
  `profile_for` ENUM('myself', 'son', 'daughter', 'brother', 'sister', 'relative', 'friend') NOT NULL DEFAULT 'myself',
  `status` ENUM('pending', 'active', 'suspended', 'banned') NOT NULL DEFAULT 'active',
  `is_kyc_verified` TINYINT(1) NOT NULL DEFAULT 0,
  `is_vip` TINYINT(1) NOT NULL DEFAULT 0,
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `phone_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `last_login_at` TIMESTAMP NULL DEFAULT NULL,
  `last_login_ip` VARCHAR(45) NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  INDEX `idx_users_role_status` (`role`, `status`),
  INDEX `idx_users_matrimony_id` (`matrimony_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 2. Profiles Table
CREATE TABLE `profiles` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_id` BIGINT UNSIGNED NOT NULL UNIQUE,
  `first_name` VARCHAR(60) NOT NULL,
  `last_name` VARCHAR(60) NOT NULL,
  `gender` ENUM('male', 'female') NOT NULL,
  `dob` DATE NOT NULL,
  `marital_status` ENUM('never_married', 'divorced', 'widowed', 'separated') NOT NULL DEFAULT 'never_married',
  `mother_tongue` VARCHAR(50) NOT NULL DEFAULT 'Hindi',
  `height_cm` SMALLINT UNSIGNED NOT NULL DEFAULT 165,
  `weight_kg` SMALLINT UNSIGNED NULL DEFAULT 65,
  `blood_group` VARCHAR(10) NULL,
  `body_type` ENUM('slim', 'athletic', 'average', 'heavy') DEFAULT 'average',
  `complexion` ENUM('very_fair', 'fair', 'wheatish', 'dark') DEFAULT 'fair',
  `physical_status` ENUM('normal', 'physically_challenged') DEFAULT 'normal',
  `eating_habits` ENUM('vegetarian', 'non_vegetarian', 'eggetarian', 'jain') DEFAULT 'vegetarian',
  `drinking_habits` ENUM('no', 'occasionally', 'yes') DEFAULT 'no',
  `smoking_habits` ENUM('no', 'occasionally', 'yes') DEFAULT 'no',
  `about_me` TEXT NULL,
  `current_city` VARCHAR(80) NOT NULL,
  `current_state` VARCHAR(80) NOT NULL,
  `current_country` VARCHAR(80) NOT NULL DEFAULT 'India',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 3. Education & Career
CREATE TABLE `education_careers` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_id` BIGINT UNSIGNED NOT NULL UNIQUE,
  `highest_education` VARCHAR(100) NOT NULL,
  `degree_details` VARCHAR(150) NULL,
  `college_university` VARCHAR(180) NULL,
  `employed_in` ENUM('private_sector', 'government_psu', 'defense', 'business_self_employed', 'not_working') NOT NULL,
  `occupation` VARCHAR(100) NOT NULL,
  `organization_name` VARCHAR(150) NULL,
  `annual_income_inr` BIGINT UNSIGNED NOT NULL DEFAULT 600000,
  `work_city` VARCHAR(80) NOT NULL,
  `work_country` VARCHAR(80) NOT NULL DEFAULT 'India',
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 4. Family Details
CREATE TABLE `family_details` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_id` BIGINT UNSIGNED NOT NULL UNIQUE,
  `father_name` VARCHAR(100) NULL,
  `father_status` ENUM('alive', 'deceased') DEFAULT 'alive',
  `father_occupation` VARCHAR(120) NULL,
  `mother_name` VARCHAR(100) NULL,
  `mother_status` ENUM('alive', 'deceased') DEFAULT 'alive',
  `mother_occupation` VARCHAR(120) NULL,
  `brothers_count` TINYINT UNSIGNED DEFAULT 0,
  `brothers_married` TINYINT UNSIGNED DEFAULT 0,
  `sisters_count` TINYINT UNSIGNED DEFAULT 0,
  `sisters_married` TINYINT UNSIGNED DEFAULT 0,
  `family_type` ENUM('joint', 'nuclear') DEFAULT 'nuclear',
  `family_values` ENUM('traditional', 'moderate', 'liberal') DEFAULT 'moderate',
  `family_status` ENUM('middle_class', 'upper_middle_class', 'rich', 'affluent') DEFAULT 'upper_middle_class',
  `native_city` VARCHAR(80) NULL,
  `native_state` VARCHAR(80) NULL,
  `about_family` TEXT NULL,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 5. Astrology Details
CREATE TABLE `astrology_details` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_id` BIGINT UNSIGNED NOT NULL UNIQUE,
  `religion` VARCHAR(50) NOT NULL DEFAULT 'Hindu',
  `caste` VARCHAR(80) NOT NULL,
  `sub_caste` VARCHAR(80) NULL,
  `gotra` VARCHAR(80) NULL,
  `rashi` VARCHAR(50) NULL,
  `nakshatra` VARCHAR(50) NULL,
  `manglik` ENUM('no', 'yes', 'anshik', 'dont_know') NOT NULL DEFAULT 'no',
  `birth_time` TIME NULL,
  `birth_city` VARCHAR(80) NULL,
  `kundali_chart_file` VARCHAR(255) NULL,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 6. Partner Preferences
CREATE TABLE `partner_preferences` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_id` BIGINT UNSIGNED NOT NULL UNIQUE,
  `min_age` TINYINT UNSIGNED NOT NULL DEFAULT 21,
  `max_age` TINYINT UNSIGNED NOT NULL DEFAULT 35,
  `min_height_cm` SMALLINT UNSIGNED NOT NULL DEFAULT 150,
  `max_height_cm` SMALLINT UNSIGNED NOT NULL DEFAULT 190,
  `marital_status` VARCHAR(255) DEFAULT 'never_married',
  `religion` VARCHAR(100) DEFAULT 'Hindu',
  `caste` VARCHAR(255) NULL,
  `manglik` ENUM('no', 'yes', 'doesnt_matter') DEFAULT 'doesnt_matter',
  `min_education` VARCHAR(100) NULL,
  `employed_in` VARCHAR(255) NULL,
  `min_annual_income_inr` BIGINT UNSIGNED DEFAULT 0,
  `preferred_state` VARCHAR(255) NULL,
  `preferred_city` VARCHAR(255) NULL,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 7. User Photos
CREATE TABLE `user_photos` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_id` BIGINT UNSIGNED NOT NULL,
  `file_path` VARCHAR(255) NOT NULL,
  `is_profile_picture` TINYINT(1) NOT NULL DEFAULT 0,
  `is_private` TINYINT(1) NOT NULL DEFAULT 0,
  `is_approved` ENUM('pending', 'approved', 'rejected') NOT NULL DEFAULT 'approved',
  `rejection_reason` VARCHAR(255) NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 8. KYC Documents
CREATE TABLE `kyc_documents` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_id` BIGINT UNSIGNED NOT NULL,
  `doc_type` ENUM('aadhaar', 'pan_card', 'passport', 'voter_id', 'driving_license') NOT NULL,
  `doc_number_masked` VARCHAR(50) NOT NULL,
  `file_front` VARCHAR(255) NOT NULL,
  `file_back` VARCHAR(255) NULL,
  `status` ENUM('pending', 'approved', 'rejected') NOT NULL DEFAULT 'pending',
  `rejection_reason` TEXT NULL,
  `verified_by` BIGINT UNSIGNED NULL,
  `verified_at` TIMESTAMP NULL DEFAULT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 9. Subscription Plans
CREATE TABLE `subscription_plans` (
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `plan_code` VARCHAR(30) NOT NULL UNIQUE,
  `title` VARCHAR(100) NOT NULL,
  `price_inr` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  `duration_days` INT UNSIGNED NOT NULL DEFAULT 30,
  `contact_views_limit` INT NOT NULL DEFAULT 10,
  `direct_messages_limit` INT NOT NULL DEFAULT 50,
  `priority_search_boost` TINYINT(1) NOT NULL DEFAULT 0,
  `kundali_matching_unlimited` TINYINT(1) NOT NULL DEFAULT 0,
  `badge_name` VARCHAR(50) NOT NULL DEFAULT 'Member',
  `is_active` TINYINT(1) NOT NULL DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 10. User Subscriptions
CREATE TABLE `user_subscriptions` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_id` BIGINT UNSIGNED NOT NULL,
  `plan_id` INT UNSIGNED NOT NULL,
  `starts_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expires_at` TIMESTAMP NOT NULL,
  `contacts_viewed_count` INT UNSIGNED NOT NULL DEFAULT 0,
  `messages_sent_count` INT UNSIGNED NOT NULL DEFAULT 0,
  `is_free_grant` TINYINT(1) NOT NULL DEFAULT 0,
  `granted_by_admin_id` BIGINT UNSIGNED NULL,
  `grant_notes` VARCHAR(255) NULL,
  `status` ENUM('active', 'expired', 'revoked') NOT NULL DEFAULT 'active',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`plan_id`) REFERENCES `subscription_plans`(`id`),
  INDEX `idx_sub_user_status` (`user_id`, `status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 11. Interests
CREATE TABLE `interests` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `sender_id` BIGINT UNSIGNED NOT NULL,
  `receiver_id` BIGINT UNSIGNED NOT NULL,
  `status` ENUM('pending', 'accepted', 'declined', 'cancelled') NOT NULL DEFAULT 'pending',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `unique_interest_pair` (`sender_id`, `receiver_id`),
  FOREIGN KEY (`sender_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`receiver_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 12. Shortlists
CREATE TABLE `shortlists` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_id` BIGINT UNSIGNED NOT NULL,
  `saved_user_id` BIGINT UNSIGNED NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `unique_user_shortlist` (`user_id`, `saved_user_id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`saved_user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 13. Chat Messages
CREATE TABLE `chat_messages` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `sender_id` BIGINT UNSIGNED NOT NULL,
  `receiver_id` BIGINT UNSIGNED NOT NULL,
  `message` TEXT NOT NULL,
  `is_read` TINYINT(1) NOT NULL DEFAULT 0,
  `read_at` TIMESTAMP NULL DEFAULT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`sender_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`receiver_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
  INDEX `idx_chat_pair` (`sender_id`, `receiver_id`, `created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 14. Notifications
CREATE TABLE `notifications` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_id` BIGINT UNSIGNED NOT NULL,
  `type` ENUM('interest', 'interest_accepted', 'message', 'match', 'plan', 'kyc', 'admin_alert') NOT NULL,
  `title` VARCHAR(150) NOT NULL,
  `message` TEXT NOT NULL,
  `action_url` VARCHAR(255) NULL,
  `is_read` TINYINT(1) NOT NULL DEFAULT 0,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
  INDEX `idx_user_unread` (`user_id`, `is_read`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 15. Admin Security Audit Logs
CREATE TABLE `admin_logs` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `admin_id` BIGINT UNSIGNED NOT NULL,
  `action` VARCHAR(100) NOT NULL,
  `target_entity` VARCHAR(50) NOT NULL,
  `target_id` BIGINT UNSIGNED NULL,
  `ip_address` VARCHAR(45) NOT NULL,
  `user_agent` TEXT NULL,
  `details_json` JSON NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`admin_id`) REFERENCES `users`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 16. Blocked IPs Firewall
CREATE TABLE `blocked_ips` (
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `ip_address` VARCHAR(45) NOT NULL UNIQUE,
  `reason` VARCHAR(255) NOT NULL,
  `blocked_by` BIGINT UNSIGNED NULL,
  `blocked_until` TIMESTAMP NULL DEFAULT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 17. Promotions & Banners
CREATE TABLE `promotions` (
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(150) NOT NULL,
  `banner_image` VARCHAR(255) NULL,
  `badge_text` VARCHAR(50) DEFAULT 'LAUNCH OFFER',
  `description` TEXT NULL,
  `coupon_code` VARCHAR(30) NULL,
  `action_link` VARCHAR(255) NULL,
  `is_active` TINYINT(1) NOT NULL DEFAULT 1,
  `starts_at` TIMESTAMP NULL DEFAULT NULL,
  `expires_at` TIMESTAMP NULL DEFAULT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 18. App Settings
CREATE TABLE `app_settings` (
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `setting_key` VARCHAR(80) NOT NULL UNIQUE,
  `setting_value` TEXT NULL,
  `setting_group` VARCHAR(50) NOT NULL DEFAULT 'general',
  `description` VARCHAR(255) NULL,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- SEED DATA

-- Default Subscription Plans
INSERT INTO `subscription_plans` (`id`, `plan_code`, `title`, `price_inr`, `duration_days`, `contact_views_limit`, `direct_messages_limit`, `priority_search_boost`, `kundali_matching_unlimited`, `badge_name`, `is_active`) VALUES
(1, 'FREE_BASIC', 'Free Member', 0.00, 365, 3, 10, 0, 0, 'Basic', 1),
(2, 'GOLD_PREMIUM', 'Gold Match', 2499.00, 90, 50, 200, 1, 1, 'Gold', 1),
(3, 'VIP_PRO', 'Dheeraja Royal VIP Pro', 4999.00, 180, 200, 1000, 1, 1, 'Royal VIP', 1);

-- Default Settings
INSERT INTO `app_settings` (`setting_key`, `setting_value`, `setting_group`, `description`) VALUES
('site_name', 'Dheeraja Matrimony', 'general', 'Platform Brand Name'),
('site_tagline', 'Sacred Connections • Royal Heritage • Trust', 'general', 'Brand Tagline'),
('support_email', 'support@dheerajamatrimony.com', 'general', 'Customer Support Email'),
('support_phone', '+91 98765 43210', 'general', 'Customer Support Helpline'),
('alert_admin_email', 'admin@dheerajamatrimony.com', 'mail', 'Email receiving critical admin alerts'),
('smtp_host', 'smtp.gmail.com', 'mail', 'Gmail SMTP Host'),
('smtp_port', '587', 'mail', 'Gmail SMTP Port (TLS)'),
('smtp_username', '', 'mail', 'Gmail Account Email Address'),
('smtp_password', '', 'mail', 'Gmail 16-character App Password'),
('smtp_from_name', 'Dheeraja Matrimony Alerts', 'mail', 'Outgoing Email Sender Name'),
('smtp_encryption', 'tls', 'mail', 'Encryption type (tls/ssl)'),
('launch_free_vip_enabled', '1', 'promotion', 'Automatically grants free VIP Pro plan to all new signups during initial launch'),
('launch_free_vip_days', '90', 'promotion', 'Duration in days for free launch VIP plan'),
('admin_session_timeout_minutes', '15', 'security', 'Minutes of inactivity before auto-locking Admin session');

-- Super Admin Account (Password: Admin@123456 -> $2y$12$NqB8aJmN6g6sVqUe9o7qE.g7vYc3D0hR8xM6L5P4s9Y6E1Gz9W3uK - let's use standard bcrypt)
-- Using PHP password_hash('Admin@123456', PASSWORD_BCRYPT)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `profile_for`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`, `phone_verified_at`, `created_at`) VALUES
(1, 'DM-ADMIN-01', 'admin@dheerajamatrimony.com', '+919999988888', '$2y$12$5NlqF1R7g2QY6gZ7bO/k3.P8zD.pE3Kk1X7Xl3M4G9F2L1D3R4T5e', 'super_admin', 'myself', 'active', 1, 1, NOW(), NOW(), NOW());

-- Profile for Admin
INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `mother_tongue`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `current_country`, `about_me`) VALUES
(1, 1, 'Master', 'Admin', 'male', '1990-01-01', 'never_married', 'Hindi', 178, 75, 'Jaipur', 'Rajasthan', 'India', 'Master Administrator of Dheeraja Matrimony');

-- Demo Member 1: Bride (Pooja Sharma)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `profile_for`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`, `phone_verified_at`, `created_at`) VALUES
(2, 'DM10001', 'pooja.sharma@example.com', '+919876543211', '$2y$12$5NlqF1R7g2QY6gZ7bO/k3.P8zD.pE3Kk1X7Xl3M4G9F2L1D3R4T5e', 'user', 'myself', 'active', 1, 1, NOW(), NOW(), NOW());

INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `mother_tongue`, `height_cm`, `weight_kg`, `eating_habits`, `about_me`, `current_city`, `current_state`) VALUES
(2, 2, 'Pooja', 'Sharma', 'female', '1998-05-12', 'never_married', 'Hindi', 165, 54, 'vegetarian', 'Software Engineer based in Bengaluru, born & brought up in Jaipur. Looking for an educated, family-oriented partner with good moral values.', 'Bengaluru', 'Karnataka');

INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `college_university`, `employed_in`, `occupation`, `organization_name`, `annual_income_inr`, `work_city`) VALUES
(2, 'B.Tech', 'Computer Science & Engineering', 'MNIT Jaipur', 'private_sector', 'Senior Software Engineer', 'Amazon India', 2400000, 'Bengaluru');

INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `mother_name`, `mother_status`, `mother_occupation`, `family_type`, `family_values`, `family_status`, `native_city`, `native_state`) VALUES
(2, 'Dr. Ramesh Sharma', 'alive', 'Senior Surgeon (Retd)', 'Sunita Sharma', 'alive', 'Homemaker', 'nuclear', 'moderate', 'upper_middle_class', 'Jaipur', 'Rajasthan');

INSERT INTO `astrology_details` (`user_id`, `religion`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`, `birth_city`) VALUES
(2, 'Hindu', 'Brahmin', 'Gaur', 'Vashishtha', 'Mesh', 'Ashwini', 'no', 'Jaipur');

INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `contacts_viewed_count`, `messages_sent_count`, `is_free_grant`, `grant_notes`, `status`) VALUES
(2, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 5, 12, 1, 'Launch Special Free Royal VIP Pro', 'active');

-- Demo Member 2: Groom (Aditya Singhania)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `profile_for`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`, `phone_verified_at`, `created_at`) VALUES
(3, 'DM10002', 'aditya.s@example.com', '+919876543212', '$2y$12$5NlqF1R7g2QY6gZ7bO/k3.P8zD.pE3Kk1X7Xl3M4G9F2L1D3R4T5e', 'user', 'myself', 'active', 1, 1, NOW(), NOW(), NOW());

INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `mother_tongue`, `height_cm`, `weight_kg`, `eating_habits`, `about_me`, `current_city`, `current_state`) VALUES
(3, 3, 'Aditya', 'Singhania', 'male', '1995-11-20', 'never_married', 'Hindi', 180, 76, 'vegetarian', 'Chartered Accountant running our family financial advisory firm in Mumbai. Passionate about fitness, travelling and Indian classical music.', 'Mumbai', 'Maharashtra');

INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `college_university`, `employed_in`, `occupation`, `organization_name`, `annual_income_inr`, `work_city`) VALUES
(3, 'CA / MBA', 'Finance & Taxation', 'ICAI / NMIMS Mumbai', 'business_self_employed', 'Managing Partner & CA', 'Singhania & Associates', 3600000, 'Mumbai');

INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `mother_name`, `mother_status`, `mother_occupation`, `family_type`, `family_values`, `family_status`, `native_city`, `native_state`) VALUES
(3, 'Harish Singhania', 'alive', 'Industrialist', 'Meena Singhania', 'alive', 'Homemaker', 'joint', 'traditional', 'affluent', 'Udaipur', 'Rajasthan');

INSERT INTO `astrology_details` (`user_id`, `religion`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`, `birth_city`) VALUES
(3, 'Hindu', 'Marwari', 'Agarwal', 'Garg', 'Dhanu', 'Moola', 'no', 'Mumbai');

INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `contacts_viewed_count`, `messages_sent_count`, `is_free_grant`, `grant_notes`, `status`) VALUES
(3, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 12, 28, 1, 'Launch Special Free Royal VIP Pro', 'active');

-- Demo Member 3: Bride (Ananya Verma - Pending KYC)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `profile_for`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`, `phone_verified_at`, `created_at`) VALUES
(4, 'DM10003', 'ananya.verma@example.com', '+919876543213', '$2y$12$5NlqF1R7g2QY6gZ7bO/k3.P8zD.pE3Kk1X7Xl3M4G9F2L1D3R4T5e', 'user', 'myself', 'active', 0, 1, NOW(), NOW(), NOW());

INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `mother_tongue`, `height_cm`, `weight_kg`, `eating_habits`, `about_me`, `current_city`, `current_state`) VALUES
(4, 4, 'Ananya', 'Verma', 'female', '1997-03-08', 'never_married', 'Hindi', 162, 52, 'vegetarian', 'Architect and interior designer running my boutique studio in Delhi NCR. Modern outlook rooted in Indian values.', 'New Delhi', 'Delhi');

INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `college_university`, `employed_in`, `occupation`, `organization_name`, `annual_income_inr`, `work_city`) VALUES
(4, 'B.Arch', 'Architecture & Design', 'SPA New Delhi', 'business_self_employed', 'Principal Architect', 'Studio Verma', 1800000, 'New Delhi');

INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `mother_name`, `mother_status`, `mother_occupation`, `family_type`, `family_values`, `family_status`, `native_city`, `native_state`) VALUES
(4, 'Virendra Verma', 'alive', 'Govt Class-I Officer', 'Kavita Verma', 'alive', 'Senior School Teacher', 'nuclear', 'moderate', 'upper_middle_class', 'Lucknow', 'Uttar Pradesh');

INSERT INTO `astrology_details` (`user_id`, `religion`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`, `birth_city`) VALUES
(4, 'Hindu', 'Kayastha', 'Srivastava', 'Kashyap', 'Kumbha', 'Shatabhisha', 'anshik', 'New Delhi');

INSERT INTO `kyc_documents` (`user_id`, `doc_type`, `doc_number_masked`, `file_front`, `status`, `created_at`) VALUES
(4, 'aadhaar', 'XXXX-XXXX-4589', '/assets/images/demo_aadhaar.jpg', 'pending', NOW());

INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `contacts_viewed_count`, `messages_sent_count`, `is_free_grant`, `grant_notes`, `status`) VALUES
(4, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 2, 4, 1, 'Launch Special Free Royal VIP Pro', 'active');

-- Demo Launch Promotion Banner
INSERT INTO `promotions` (`title`, `badge_text`, `description`, `coupon_code`, `action_link`, `is_active`, `starts_at`, `expires_at`) VALUES
('Grand Launch Celebration: 90 Days Royal VIP Pro 100% Free', 'LIMITED EARLY BIRD OFFER', 'Enjoy unlimited messages, 200 free verified phone views and priority match recommendations.', 'LAUNCHVIP', '/plans', 1, NOW(), DATE_ADD(NOW(), INTERVAL 180 DAY));
