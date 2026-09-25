-- Table for Matrimony WhatsApp Communities
CREATE TABLE IF NOT EXISTS `whatsapp_communities` (
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(150) NOT NULL,
  `caste_group` VARCHAR(80) NOT NULL DEFAULT 'All Communities',
  `region` VARCHAR(80) NOT NULL DEFAULT 'All India',
  `whatsapp_url` VARCHAR(255) NOT NULL,
  `member_count` INT UNSIGNED NOT NULL DEFAULT 240,
  `description` VARCHAR(255) NULL,
  `is_active` TINYINT(1) NOT NULL DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Update or Insert Master Admin with requested email and password (123456)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `profile_for`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`, `created_at`) 
VALUES (1, 'DM-ADMIN-01', 'dheerajamatrimony@gmail.com', '+919999988888', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'super_admin', 'myself', 'active', 1, 1, NOW(), NOW())
ON DUPLICATE KEY UPDATE 
  `email` = 'dheerajamatrimony@gmail.com',
  `password_hash` = '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2',
  `role` = 'super_admin',
  `status` = 'active';

UPDATE `app_settings` SET `setting_value` = 'dheerajamatrimony@gmail.com' WHERE `setting_key` IN ('support_email', 'alert_admin_email', 'smtp_username');

-- 10 GROOMS (MALE) AND 10 BRIDES (FEMALE) WITH FULL PROFILE & VIP PRO
-- Passwords for all users is: 123456 ($2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2)

-- Helper macro for clean replacement of demo users
DELETE FROM `users` WHERE `id` BETWEEN 10 AND 29;

-- ================= GROOMS (MALES) =================

-- Groom 1: Vikram Rathore (ID: 10)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(10, 'DM10010', 'vikram.rathore@example.com', '+919876500010', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(10, 'Vikram', 'Rathore', 'male', '1994-04-18', 'never_married', 182, 78, 'Jaipur', 'Rajasthan', 'IPS Officer currently serving in Rajasthan Cadre. Grounded in traditional Rajput values, fitness enthusiast, fond of polo and classical literature.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(10, 'UPSC / M.A. History', 'St. Stephens College Delhi', 'government_psu', 'IPS Officer (SP)', 1800000, 'Jaipur');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(10, 'Col. Digvijay Rathore (Retd)', 'alive', 'Indian Army Officer', 'joint', 'traditional', 'upper_middle_class');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(10, 'Rajput', 'Shekhawat', 'Kashyap', 'Simha', 'Magha', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(10, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Groom 2: Dr. Aarav Sharma (ID: 11)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(11, 'DM10011', 'dr.aarav.sharma@example.com', '+919876500011', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(11, 'Aarav', 'Sharma', 'male', '1993-08-25', 'never_married', 179, 74, 'New Delhi', 'Delhi', 'Interventional Cardiologist at AIIMS New Delhi. Looking for an educated, empathetic life partner with a progressive yet culturally rooted outlook.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(11, 'MD / DM Cardiology', 'AIIMS New Delhi', 'government_psu', 'Senior Consultant Cardiologist', 3200000, 'New Delhi');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(11, 'Justice B. K. Sharma', 'alive', 'High Court Judge (Retd)', 'nuclear', 'moderate', 'affluent');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(11, 'Brahmin', 'Gaur', 'Bharadwaj', 'Dhanu', 'Purva Ashadha', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(11, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Groom 3: Rohan Gupta (ID: 12)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(12, 'DM10012', 'rohan.gupta@example.com', '+919876500012', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(12, 'Rohan', 'Gupta', 'male', '1995-02-14', 'never_married', 177, 72, 'Bengaluru', 'Karnataka', 'VP of Engineering at a Series-C Fintech unicorn. IIT Bombay alumnus. Loves trekking, coffee brewing, and family weekend gatherings.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(12, 'B.Tech / M.Tech', 'IIT Bombay Computer Science', 'private_sector', 'VP of Engineering', 4800000, 'Bengaluru');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(12, 'Satish Gupta', 'alive', 'Senior Director PSU', 'nuclear', 'moderate', 'upper_middle_class');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(12, 'Baniya', 'Agarwal', 'Garg', 'Kanya', 'Hasta', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(12, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Groom 4: Karanveer Gill (ID: 13)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(13, 'DM10013', 'karanveer.gill@example.com', '+919876500013', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(13, 'Karanveer', 'Gill', 'male', '1994-10-09', 'never_married', 185, 82, 'Chandigarh', 'Punjab', 'Managing Director at Gill Agro & Organic Exports. Passionate about sustainable farming, fitness, and family traditions.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(13, 'B.Sc / MBA Agribusiness', 'PAU Ludhiana / Symbiosis Pune', 'business_self_employed', 'Managing Director', 3500000, 'Chandigarh');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(13, 'Sardar Gurpreet Gill', 'alive', 'Large Scale Farmer & Industrialist', 'joint', 'traditional', 'affluent');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(13, 'Sikh', 'Jat', 'Gill', 'Vrishabha', 'Rohini', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(13, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Groom 5: Siddharth Jain (ID: 14)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(14, 'DM10014', 'siddharth.jain@example.com', '+919876500014', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(14, 'Siddharth', 'Jain', 'male', '1995-12-04', 'never_married', 176, 70, 'Indore', 'Madhya Pradesh', '3rd-generation textile manufacturer & garment exporter in Indore. Vegetarian, teetotaler, values Jain ethics and family harmony.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(14, 'BBA / M.Sc Supply Chain', 'NMIMS Mumbai / Manchester UK', 'business_self_employed', 'Partner & Director', 4000000, 'Indore');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(14, 'Pramod Jain', 'alive', 'Textile Mill Owner', 'joint', 'traditional', 'affluent');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(14, 'Jain', 'Digambar', 'Kashyap', 'Meen', 'Revati', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(14, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Groom 6: Devansh Srivastava (ID: 15)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(15, 'DM10015', 'devansh.s@example.com', '+919876500015', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(15, 'Devansh', 'Srivastava', 'male', '1996-03-30', 'never_married', 180, 75, 'Lucknow', 'Uttar Pradesh', 'Principal Architect & Urban Designer running my firm in Gomti Nagar Lucknow. Appreciates Indian music, culinary arts, and meaningful conversations.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(15, 'B.Arch / M.Des', 'IIT Roorkee / CEPT Ahmedabad', 'business_self_employed', 'Principal Architect', 2600000, 'Lucknow');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(15, 'Dr. Rajiv Srivastava', 'alive', 'Chief Medical Officer (UP Govt)', 'nuclear', 'moderate', 'upper_middle_class');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(15, 'Kayastha', 'Srivastava', 'Shandilya', 'Mithun', 'Ardra', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(15, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Groom 7: Nikhil Reddy (ID: 16)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(16, 'DM10016', 'nikhil.reddy@example.com', '+919876500016', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(16, 'Nikhil', 'Reddy', 'male', '1995-07-12', 'never_married', 181, 76, 'Hyderabad', 'Telangana', 'Lead Product Manager at Google Hyderabad. BITS Pilani graduate. Fitness enthusiast, badminton player, balanced between modern tech and Telugu traditions.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(16, 'B.E. / MBA', 'BITS Pilani / ISB Hyderabad', 'private_sector', 'Lead Product Manager', 4200000, 'Hyderabad');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(16, 'V. R. Reddy', 'alive', 'Infrastructure Developer', 'nuclear', 'moderate', 'affluent');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(16, 'Reddy', 'Motati', 'Vashishtha', 'Tula', 'Swati', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(16, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Groom 8: Kunal Khandelwal (ID: 17)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(17, 'DM10017', 'kunal.k@example.com', '+919876500017', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(17, 'Kunal', 'Khandelwal', 'male', '1996-09-17', 'never_married', 178, 73, 'Pune', 'Maharashtra', 'Principal AI Data Scientist, returned from Silicon Valley to Pune. Values warmth, mutual respect, and intellectual curiosity.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(17, 'B.Tech / M.S. CS', 'COEP Pune / Carnegie Mellon USA', 'private_sector', 'Principal AI Scientist', 5200000, 'Pune');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(17, 'G. L. Khandelwal', 'alive', 'Chartered Accountant', 'nuclear', 'moderate', 'upper_middle_class');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(17, 'Vaishya', 'Khandelwal', 'Gautam', 'Kanya', 'Chitra', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(17, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Groom 9: Pranay Joshi (ID: 18)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(18, 'DM10018', 'pranay.joshi@example.com', '+919876500018', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(18, 'Pranay', 'Joshi', 'male', '1995-01-22', 'never_married', 178, 71, 'Ahmedabad', 'Gujarat', 'Corporate Legal Counsel for renewable energy conglomerates. Loves playing tennis, reading history, and travelling.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(18, 'B.A. LL.B (Hons)', 'GNLU Gandhinagar', 'private_sector', 'Senior Corporate Counsel', 2800000, 'Ahmedabad');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(18, 'N. K. Joshi', 'alive', 'Senior Advocate Gujarat HC', 'nuclear', 'moderate', 'upper_middle_class');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(18, 'Brahmin', 'Nagar', 'Harita', 'Makar', 'Shravana', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(18, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Groom 10: Ratan Tata Mittal (ID: 19)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(19, 'DM10019', 'ratan.mittal@example.com', '+919876500019', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(19, 'Ratan', 'Mittal', 'male', '1994-05-11', 'never_married', 180, 77, 'Kolkata', 'West Bengal', 'Managing partner in steel & manufacturing business. Deeply connected to Marwari cultural roots and philanthropic causes.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(19, 'B.Com (Hons) / MBA', 'St. Xavier Kolkata / SPJIMR Mumbai', 'business_self_employed', 'Managing Partner', 4500000, 'Kolkata');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(19, 'B. M. Mittal', 'alive', 'Industrialist', 'joint', 'traditional', 'affluent');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(19, 'Marwari', 'Agarwal', 'Mittal', 'Mesh', 'Bharani', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(19, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');


-- ================= BRIDES (FEMALES) =================

-- Bride 1: Meera Rajput (ID: 20)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(20, 'DM10020', 'meera.rajput@example.com', '+919876500020', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(20, 'Meera', 'Rajput', 'female', '1998-02-19', 'never_married', 167, 55, 'Udaipur', 'Rajasthan', 'Interior Designer & Heritage Art Curator running our studio in Udaipur. Rooted in Rajasthani values, graceful, loves Indian classical music and travel.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(20, 'B.Des / M.A. History', 'NID Ahmedabad', 'business_self_employed', 'Heritage Art Curator & Designer', 1800000, 'Udaipur');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(20, 'Rana Ranveer Singh', 'alive', 'Hotelier & Heritage Conservationist', 'joint', 'traditional', 'affluent');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(20, 'Rajput', 'Sisodia', 'Kaushik', 'Vrishabha', 'Krittika', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(20, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Bride 2: Dr. Tanvi Singhal (ID: 21)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(21, 'DM10021', 'dr.tanvi.singhal@example.com', '+919876500021', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(21, 'Tanvi', 'Singhal', 'female', '1997-06-14', 'never_married', 165, 53, 'Mumbai', 'Maharashtra', 'Pediatrician at Lilavati Hospital Mumbai. Warm-hearted, compassionate, vegetarian. Seeking an educated, affectionate life partner.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(21, 'MBBS / MD Pediatrics', 'KEM Hospital Mumbai', 'private_sector', 'Consultant Pediatrician', 2400000, 'Mumbai');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(21, 'Dr. Anand Singhal', 'alive', 'Senior Physician', 'nuclear', 'moderate', 'upper_middle_class');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(21, 'Marwari', 'Agarwal', 'Singhal', 'Kark', 'Pushya', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(21, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Bride 3: Simran Kaur (ID: 22)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(22, 'DM10022', 'simran.kaur@example.com', '+919876500022', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(22, 'Simran', 'Kaur', 'female', '1996-11-05', 'never_married', 168, 56, 'New Delhi', 'Delhi', 'HR Director at a European technology MNC in Gurugram. Bubbly, optimistic, loves baking, road trips, and celebrating Punjabi festivals with family.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(22, 'MBA HR', 'XLRI Jamshedpur', 'private_sector', 'HR Director', 3000000, 'Gurugram');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(22, 'Sardar Harbhajan Singh', 'alive', 'Businessman Delhi', 'nuclear', 'moderate', 'upper_middle_class');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(22, 'Sikh', 'Khatri', 'Sahni', 'Dhanu', 'Uttarashadha', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(22, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Bride 4: Riya Jain (ID: 23)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(23, 'DM10023', 'riya.jain@example.com', '+919876500023', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(23, 'Riya', 'Jain', 'female', '1998-04-12', 'never_married', 163, 50, 'Jaipur', 'Rajasthan', 'Chartered Accountant working as M&A tax advisor at PwC. Follows Jain principles, enjoys badminton, classical singing, and reading financial journals.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(23, 'Chartered Accountant (CA)', 'ICAI (AIR 24)', 'private_sector', 'Senior Tax Manager (PwC)', 2200000, 'Jaipur');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(23, 'Sunil Jain', 'alive', 'Jewellery Business Owner', 'nuclear', 'traditional', 'affluent');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(23, 'Jain', 'Shwetambar', 'Gautam', 'Kanya', 'Chitra', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(23, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Bride 5: Dr. Shreya Mishra (ID: 24)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(24, 'DM10024', 'dr.shreya.mishra@example.com', '+919876500024', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(24, 'Shreya', 'Mishra', 'female', '1996-07-29', 'never_married', 164, 52, 'Lucknow', 'Uttar Pradesh', 'Assistant Professor of Economics at University of Delhi. Cultured Brahmin upbringing, writes poetry, vegetarian, values integrity and mutual growth.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(24, 'Ph.D. Economics', 'Delhi School of Economics (DSE)', 'government_psu', 'Assistant Professor', 1600000, 'New Delhi');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(24, 'Prof. R. C. Mishra', 'alive', 'Vice Chancellor (Retd)', 'nuclear', 'moderate', 'upper_middle_class');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(24, 'Brahmin', 'Kanyakubj', 'Shandilya', 'Tula', 'Vishakha', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(24, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Bride 6: Divya Kulkarni (ID: 25)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(25, 'DM10025', 'divya.kulkarni@example.com', '+919876500025', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(25, 'Divya', 'Kulkarni', 'female', '1997-09-03', 'never_married', 162, 51, 'Pune', 'Maharashtra', 'Senior AI/ML Researcher at Nvidia Pune. Tech enthusiast, Bharatnatyam dancer, loves family get-togethers and exploring scenic nature trails.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(25, 'B.Tech / M.S. AI', 'VJTI Mumbai', 'private_sector', 'Senior AI Engineer', 2800000, 'Pune');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(25, 'Suresh Kulkarni', 'alive', 'Scientist DRDO (Retd)', 'nuclear', 'moderate', 'upper_middle_class');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(25, 'Brahmin', 'Deshastha', 'Vashishtha', 'Simha', 'Purva Phalguni', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(25, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Bride 7: Radhika Patel (ID: 26)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(26, 'DM10026', 'radhika.patel@example.com', '+919876500026', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(26, 'Radhika', 'Patel', 'female', '1998-01-15', 'never_married', 166, 54, 'Ahmedabad', 'Gujarat', 'Founder & Creative Director of an ethnic contemporary bridal wear label in Ahmedabad. Vibrant, energetic, rooted in Gujarati traditions and Jain vegetarianism.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(26, 'B.Des Fashion', 'NIFT Gandhinagar', 'business_self_employed', 'Creative Director & Founder', 3200000, 'Ahmedabad');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(26, 'Jayesh Patel', 'alive', 'Chemical Factory Owner', 'joint', 'traditional', 'affluent');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(26, 'Patel', 'Leva', 'Kashyap', 'Makar', 'Dhanishta', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(26, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Bride 8: Sneha Iyer (ID: 27)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(27, 'DM10027', 'sneha.iyer@example.com', '+919876500027', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(27, 'Sneha', 'Iyer', 'female', '1997-12-08', 'never_married', 163, 52, 'Bengaluru', 'Karnataka', 'Principal Strategy Consultant at McKinsey & Co Bengaluru. Carnatic vocal enthusiast, book lover, warm and family-first outlook.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(27, 'MBA Strategy', 'IIM Bangalore', 'private_sector', 'Strategy Consultant', 3800000, 'Bengaluru');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(27, 'K. V. Iyer', 'alive', 'Former General Manager RBI', 'nuclear', 'moderate', 'upper_middle_class');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(27, 'Brahmin', 'Iyer', 'Harita', 'Meen', 'Uttarabhadrapada', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(27, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Bride 9: Kritika Agarwal (ID: 28)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(28, 'DM10028', 'kritika.agarwal@example.com', '+919876500028', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(28, 'Kritika', 'Agarwal', 'female', '1996-05-18', 'never_married', 165, 53, 'Indore', 'Madhya Pradesh', 'Senior Investment Banker at Morgan Stanley. Born and brought up in Indore, fond of reading, fitness, and family celebrations.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(28, 'CFA / MBA Finance', 'FMS Delhi', 'private_sector', 'VP Investment Banking', 3600000, 'Mumbai');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(28, 'Ashok Agarwal', 'alive', 'Commercial Real Estate Investor', 'joint', 'traditional', 'affluent');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(28, 'Marwari', 'Agarwal', 'Garg', 'Vrishabha', 'Rohini', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(28, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');

-- Bride 10: Natasha Roy (ID: 29)
INSERT INTO `users` (`id`, `matrimony_id`, `email`, `phone`, `password_hash`, `role`, `status`, `is_kyc_verified`, `is_vip`, `email_verified_at`) VALUES
(29, 'DM10029', 'natasha.roy@example.com', '+919876500029', '$2y$12$/.Bc3rmgHCbyubzBu661pOngfYE66wbzuZVE9qKfDl4.El4ZGeuE2', 'user', 'active', 1, 1, NOW());
INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `height_cm`, `weight_kg`, `current_city`, `current_state`, `about_me`) VALUES
(29, 'Natasha', 'Roy', 'female', '1997-10-30', 'never_married', 166, 54, 'Kolkata', 'West Bengal', 'Senior UX/UI Design Lead at an international studio. Cultured, loves Rabindra Sangeet, photography, and values intellectual companionship.');
INSERT INTO `education_careers` (`user_id`, `highest_education`, `degree_details`, `employed_in`, `occupation`, `annual_income_inr`, `work_city`) VALUES
(29, 'B.Des Human Computer Interaction', 'IIT Guwahati', 'private_sector', 'Senior UX Design Lead', 2600000, 'Bengaluru');
INSERT INTO `family_details` (`user_id`, `father_name`, `father_status`, `father_occupation`, `family_type`, `family_values`, `family_status`) VALUES
(29, 'Dr. Subir Roy', 'alive', 'Professor & Author', 'nuclear', 'moderate', 'upper_middle_class');
INSERT INTO `astrology_details` (`user_id`, `caste`, `sub_caste`, `gotra`, `rashi`, `nakshatra`, `manglik`) VALUES
(29, 'Bengali', 'Kayastha', 'Kashyap', 'Tula', 'Swati', 'no');
INSERT INTO `user_subscriptions` (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`) VALUES
(29, 3, NOW(), DATE_ADD(NOW(), INTERVAL 90 DAY), 1, 'Launch Complimentary VIP Pro', 'active');


-- ================= WHATSAPP COMMUNITIES SEED =================
INSERT INTO `whatsapp_communities` (`title`, `caste_group`, `region`, `whatsapp_url`, `member_count`, `description`, `is_active`) VALUES
('Dheeraja Brahmin Matrimonial Circle', 'Brahmin', 'All India', 'https://chat.whatsapp.com/demo-brahmin-matrimony-dheeraja', 492, 'Verified matchmaking community for Brahmin brides, grooms & families across India.', 1),
('Royal Rajput & Kshatriya Vivah Sangam', 'Rajput', 'Rajasthan & Delhi NCR', 'https://chat.whatsapp.com/demo-rajput-matrimony-dheeraja', 380, 'Exclusive community for Rajput brides & grooms seeking auspicious alliances.', 1),
('Marwari, Baniya & Agarwal Rishtey Forum', 'Marwari / Baniya', 'Mumbai, Gujarat, Rajasthan', 'https://chat.whatsapp.com/demo-marwari-matrimony-dheeraja', 510, 'High-trust matrimonial network for Agarwal, Maheshwari and Jain families.', 1),
('Doctors, Engineers & CAs Elite Alliance', 'All Communities', 'Pan-India & Global', 'https://chat.whatsapp.com/demo-elite-professionals-dheeraja', 620, 'Profession-centric verified matrimony group for Doctors, Software Engineers, CAs, and IAS/IPS officers.', 1),
('Jain Samaj Auspicious Vivah Community', 'Jain', 'All India', 'https://chat.whatsapp.com/demo-jain-matrimony-dheeraja', 340, 'Vegetarian and teetotaler Digambar & Shwetambar matchmaking circle.', 1),
('Global NRI Matrimonial Network', 'All Communities', 'USA, UK, Canada, UAE', 'https://chat.whatsapp.com/demo-nri-matrimony-dheeraja', 285, 'Direct matchmaking group for Global Indian families seeking NRI alliances.', 1);
