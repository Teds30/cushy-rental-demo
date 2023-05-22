use cushy_rental;

CREATE TABLE IF NOT EXISTS `cr_unit_images`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `unit_id` BIGINT NOT NULL,
    `image_id` BIGINT NOT NULL,
    `is_thumbnail` TINYINT NOT NULL DEFAULT '0',
    `status` TINYINT NOT NULL DEFAULT '1'
);
ALTER TABLE
    `cr_unit_images` ADD INDEX `cr_unit_images_unit_id_index`(`unit_id`);
ALTER TABLE
    `cr_unit_images` ADD INDEX `cr_unit_images_image_id_index`(`image_id`);
CREATE TABLE IF NOT EXISTS `cr_unit_amenities`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `unit_id` BIGINT NOT NULL,
    `amenity_id` BIGINT NOT NULL,
    -- `type` TINYINT NOT NULL COMMENT '\'0\' -> exclusion; \'1\' -> inclusion',
    `status` TINYINT NOT NULL DEFAULT '1'
);
ALTER TABLE
    `cr_unit_amenities` ADD INDEX `cr_unit_amenities_unit_id_index`(`unit_id`);
ALTER TABLE
    `cr_unit_amenities` ADD INDEX `cr_unit_amenities_amenity_id_index`(`amenity_id`);
CREATE TABLE IF NOT EXISTS `cr_unit_inclusions`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `unit_id` BIGINT NOT NULL,
    `inclusion_id` BIGINT NOT NULL,
    -- `type` TINYINT NOT NULL COMMENT '\'0\' -> exclusion; \'1\' -> inclusion',
    `status` TINYINT NOT NULL DEFAULT '1'
);
ALTER TABLE
    `cr_unit_inclusions` ADD INDEX `cr_unit_inclusions_unit_id_index`(`unit_id`);
ALTER TABLE
    `cr_unit_inclusions` ADD INDEX `cr_unit_inclusions_inclusion_id_index`(`inclusion_id`);
CREATE TABLE IF NOT EXISTS `cr_user_types`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `status` TINYINT NOT NULL DEFAULT '1'
);
CREATE TABLE IF NOT EXISTS `cr_unit_facilities`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `unit_id` BIGINT NOT NULL,
    `facility_id` BIGINT NOT NULL,
    `is_shared` TINYINT NOT NULL DEFAULT '0',
    `status` TINYINT NOT NULL DEFAULT '1'
);
ALTER TABLE
    `cr_unit_facilities` ADD INDEX `cr_unit_facilities_unit_id_index`(`unit_id`);
ALTER TABLE
    `cr_unit_facilities` ADD INDEX `cr_unit_facilities_facility_id_index`(`facility_id`);
CREATE TABLE IF NOT EXISTS `cr_images`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `image` BLOB NOT NULL,
    `status` TINYINT NOT NULL DEFAULT '1'
);
CREATE TABLE IF NOT EXISTS `cr_subscriptions`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `price` DOUBLE(8, 2) NOT NULL,
    `hex_color` VARCHAR(8) NOT NULL,
    `features` TEXT,
    `duration` INT NOT NULL COMMENT 'based on hours',
    `is_available` TINYINT NOT NULL DEFAULT '1',
    `status` TINYINT NOT NULL DEFAULT '1'
);
CREATE TABLE IF NOT EXISTS `cr_rules`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `icon` BIGINT NOT NULL,
    `is_available` TINYINT NOT NULL DEFAULT '1',
    `status` TINYINT NOT NULL DEFAULT '1'
);
CREATE TABLE IF NOT EXISTS `cr_facilities`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `icon` TEXT NOT NULL,
    `is_switch` TINYINT NOT NULL,
    `is_available` TINYINT NOT NULL DEFAULT '1',
    `status` TINYINT NOT NULL DEFAULT '1'
);
CREATE TABLE IF NOT EXISTS `cr_units`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `landlord_id` BIGINT NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `details` LONGTEXT NOT NULL,
    -- `floor_area` DOUBLE(8, 2) NOT NULL COMMENT 'based on sqm',
    `price` DOUBLE(8, 2) NOT NULL,
    `month_advance` INT NOT NULL COMMENT '\"0\" -> none',
    `month_deposit` INT NOT NULL COMMENT '\"0\" -> none',
    -- `minimum_stay` INT NOT NULL COMMENT 'based on month',
    `location` JSON NOT NULL COMMENT '{
latitude: 0,
longitude: 0
}',
    `address` TEXT NOT NULL,
    `target_gender` TINYINT NOT NULL DEFAULT '0' COMMENT '\"0\" -> all,
\"1\" -> male,
\"2\" -> female',
    `slots` INT NOT NULL DEFAULT '1',
    -- `contact_number` VARCHAR(255) NOT NULL,
    `subscription_id` BIGINT ,
    `is_listed` TINYINT NOT NULL,
    `request_status` TINYINT NOT NULL DEFAULT '0' COMMENT '\"0\" -> pending,
\"1\" -> approved,
\"2\" -> denied,
\"3\" -> canceled',
    `status` TINYINT NOT NULL DEFAULT '1'
);
ALTER TABLE
    `cr_units` ADD INDEX `cr_units_landlord_id_index`(`landlord_id`);
ALTER TABLE
    `cr_units` ADD INDEX `cr_units_subscription_id_index`(`subscription_id`);
CREATE TABLE IF NOT EXISTS `cr_unit_rules`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `unit_id` BIGINT NOT NULL,
    `rule_id` BIGINT NOT NULL,
    `status` TINYINT NOT NULL DEFAULT '1'
);
ALTER TABLE
    `cr_unit_rules` ADD INDEX `cr_unit_rules_unit_id_index`(`unit_id`);
ALTER TABLE
    `cr_unit_rules` ADD INDEX `cr_unit_rules_rule_id_index`(`rule_id`);
CREATE TABLE IF NOT EXISTS `cr_rentals`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT NOT NULL,
    `unit_id` BIGINT NOT NULL,
    `monthly_amount` BIGINT NOT NULL,
    `due_date` DATE NOT NULL,
    `date_start` DATE NOT NULL,
    `date_ended` DATE,
    `rental_status` TINYINT NOT NULL DEFAULT '0' COMMENT '\"0\" -> pending,
\"1\" -> approved,
\"2\" -> denied,
\"3\" -> canceled,
\"4\" -> terminated', 
    `status` TINYINT NOT NULL DEFAULT '1'
);
ALTER TABLE
    `cr_rentals` ADD INDEX `cr_rentals_user_id_index`(`user_id`);
ALTER TABLE
    `cr_rentals` ADD INDEX `cr_rentals_unit_id_index`(`unit_id`);
CREATE TABLE IF NOT EXISTS `cr_users`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(255) NOT NULL,
    `password` TEXT NOT NULL,
    `first_name` VARCHAR(255) NOT NULL,
    `middle_name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `gender` TINYINT NOT NULL,
    `phone_number` VARCHAR(255) NOT NULL,
    `user_type_id` BIGINT NOT NULL,
    `is_verified` TINYINT NOT NULL DEFAULT '0',
    `status` TINYINT NOT NULL DEFAULT '1'
);
ALTER TABLE
    `cr_users` ADD INDEX `cr_users_user_type_id_index`(`user_type_id`);
CREATE TABLE IF NOT EXISTS `cr_amenities`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `icon` TEXT NOT NULL,
    `is_available` TINYINT NOT NULL DEFAULT '1',
    `status` TINYINT NOT NULL DEFAULT '1'
);
CREATE TABLE IF NOT EXISTS `cr_inclusions`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `icon` TEXT NOT NULL,
    `is_available` TINYINT NOT NULL DEFAULT '1',
    `status` TINYINT NOT NULL DEFAULT '1'
);
CREATE TABLE IF NOT EXISTS `cr_schools`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `location` JSON NOT NULL COMMENT '{
longitude: 0,
latitude: 0
}',
    `image_id` BIGINT NOT NULL,
    `status` TINYINT NOT NULL DEFAULT '1'
);
ALTER TABLE
    `cr_schools` ADD INDEX `cr_schools_image_id_index`(`image_id`);
CREATE TABLE IF NOT EXISTS `cr_unit_subscriptions`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `unit_id` BIGINT NOT NULL,
    `subscription_id` BIGINT NOT NULL,
    `date_start` DATETIME,
    `date_end` DATETIME,
    `type` TINYINT NOT NULL DEFAULT '1' COMMENT '\"0\" -> expired, \"1\" -> terminated ',
    `request_status` TINYINT NOT NULL DEFAULT '0' COMMENT '\"0\" -> pending, \"1\" -> approved,\"2\" -> denied,\"3\" -> canceled',
    `status` TINYINT NOT NULL DEFAULT '1'
);
ALTER TABLE
    `cr_unit_subscriptions` ADD INDEX `cr_unit_subscriptions_unit_id_index`(`unit_id`);
ALTER TABLE
    `cr_unit_subscriptions` ADD INDEX `cr_unit_subscriptions_subscription_id_index`(`subscription_id`);
CREATE TABLE IF NOT EXISTS `cr_reviews`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT NOT NULL,
    `unit_id` BIGINT NOT NULL,
    `booking_id` BIGINT NOT NULL,
    `ratings` JSON NOT NULL,
    `review` TEXT NOT NULL,
    `status` TINYINT NOT NULL DEFAULT '1'
);
ALTER TABLE
    `cr_reviews` ADD INDEX `cr_reviews_user_id_index`(`user_id`);
ALTER TABLE
    `cr_reviews` ADD INDEX `cr_reviews_unit_id_index`(`unit_id`);

CREATE TABLE IF NOT EXISTS `cr_bookmarks` (
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT NOT NULL,
    `unit_id` BIGINT NOT NULL,
    `status` TINYINT NOT NULL DEFAULT '1'
);
ALTER TABLE
    `cr_bookmarks` ADD INDEX `cr_bookmarks_user_id_index` (`user_id`);
ALTER TABLE
    `cr_bookmarks` ADD INDEX `cr_bookmarks_unit_id_index` (`unit_id`);

CREATE TABLE IF NOT EXISTS `cr_account_verifications` (
    `id` BIGINT PRIMARY KEY NOT NULL,
    `user_id` BIGINT NOT NULL,
    `checked_by` BIGINT NOT NULL,
    `verdict` TINYINT NOT NULL DEFAULT '0' COMMENT '\"0\" -> pending,
\"1\" -> approved,
\"2\" -> denied',
    `denied_reason` TEXT,
    `submitted_id_image` TEXT NOT NULL,
    `id_type` BIGINT NOT NULL,
    `address` TEXT,
    `contact_number` TEXT NOT NULL,
    `status` TINYINT NOT NULL DEFAULT '1'
    
);
ALTER TABLE
    `cr_account_verifications` ADD INDEX `cr_account_verifications_user_id_index` (`user_id`);
ALTER TABLE
    `cr_account_verifications` ADD INDEX `cr_account_verifications_checked_by_index` (`checked_by`);
ALTER TABLE
    `cr_account_verifications` ADD INDEX `cr_account_verifications_id_type_index` (`id_type`);

CREATE TABLE IF NOT EXISTS `cr_id_types` (
    `id` BIGINT PRIMARY KEY NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `status` TINYINT NOT NULL DEFAULT '1'
);

CREATE TABLE IF NOT EXISTS `cr_reported_users` (
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT NOT NULL,
    `reported_by` BIGINT NOT NULL,
    `reason` TEXT NOT NULL,
    `status` TINYINT NOT NULL DEFAULT '1'
);
ALTER TABLE 
    `cr_reported_users` ADD INDEX `cr_reported_users_user_id_index` (`user_id`);
ALTER TABLE 
    `cr_reported_users` ADD INDEX `cr_reported_users_reported_by_index` (`reported_by`);

CREATE TABLE IF NOT EXISTS `cr_blacklisted_users` (
    `id` BIGINT NOT NULL,
    `user_id` BIGINT NOT NULL,
    `reason` TEXT NOT NULL,
    `restricted_until` DATE NOT NULL,
    `status` TINYINT NOT NULL DEFAULT '1'
);
ALTER TABLE
    `cr_blacklisted_users` ADD INDEX `cr_blacklisted_users_user_id_index` (`user_id`);


-- //TODO : Notification
CREATE TABLE IF NOT EXISTS `cr_notification_types`(
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `status` tinyint NOT NULL DEFAULT '1'
);

CREATE TABLE IF NOT EXISTS `cr_notifications` (
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `notification_type_id` BIGINT NOT NULL,
    `source_id` BIGINT,
    `message` TEXT NOT NULL,
    `status` tinyint NOT NULL DEFAULT '1'
);

ALTER TABLE
    `cr_notifications` ADD INDEX `cr_notifications_notification_type_id_index` (`notification_type_id`);
ALTER TABLE
    `cr_notifications` ADD INDEX `cr_notification_source_id_index` (`source_id`);


CREATE TABLE IF NOT EXISTS `cr_notification_subscribers` (
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `notification_id` BIGINT NOT NULL,
    `subscriber_id` BIGINT NOT NULL,
    `status` tinyint NOT NULL DEFAULT '1'
);

ALTER TABLE
    `cr_notification_subscribers` ADD INDEX `cr_notification_subscribers_notification_id_index` (`notification_id`);
ALTER TABLE
    `cr_notification_subscribers` ADD INDEX `cr_notification_subscribers_subscriber_id_index` (`subscriber_id`);

CREATE TABLE IF NOT EXISTS `cr_notification_settings` (
    `id` BIGINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT NOT NULL,
    `notification_type_id` BIGINT NOT NULL,
    `settings` TINYINT NOT NULL DEFAULT '1' COMMENT '\"0\" -> off,
\"1\" -> on',
    `status` tinyint NOT NULL DEFAULT '1'
);

ALTER TABLE
    `cr_notification_settings` ADD INDEX `cr_notification_settings_user_id_index` (`user_id`);
ALTER TABLE
    `cr_notification_settings` ADD INDEX `cr_notification_settings_notification_type_id_index` (`notification_type_id`);
ALTER TABLE
    `cr_unit_amenities` ADD CONSTRAINT `cr_unit_amenities_unit_id_foreign` FOREIGN KEY(`unit_id`) REFERENCES `cr_units`(`id`);
ALTER TABLE
    `cr_unit_amenities` ADD CONSTRAINT `cr_unit_amenities_amenity_id_foreign` FOREIGN KEY(`amenity_id`) REFERENCES `cr_amenities`(`id`);
ALTER TABLE
    `cr_unit_inclusions` ADD CONSTRAINT `cr_unit_inclusions_unit_id_foreign` FOREIGN KEY(`unit_id`) REFERENCES `cr_units`(`id`);
ALTER TABLE
    `cr_unit_inclusions` ADD CONSTRAINT `cr_unit_inclusions_inclusion_id_foreign` FOREIGN KEY(`inclusion_id`) REFERENCES `cr_inclusions`(`id`);
ALTER TABLE
    `cr_unit_rules` ADD CONSTRAINT `cr_unit_rules_rule_id_foreign` FOREIGN KEY(`rule_id`) REFERENCES `cr_rules`(`id`);
ALTER TABLE
    `cr_rentals` ADD CONSTRAINT `cr_rentals_unit_id_foreign` FOREIGN KEY(`unit_id`) REFERENCES `cr_units`(`id`);
ALTER TABLE
    `cr_unit_facilities` ADD CONSTRAINT `cr_unit_facilities_unit_id_foreign` FOREIGN KEY(`unit_id`) REFERENCES `cr_units`(`id`);
ALTER TABLE
    `cr_unit_subscriptions` ADD CONSTRAINT `cr_unit_subscriptions_subscription_id_foreign` FOREIGN KEY(`subscription_id`) REFERENCES `cr_subscriptions`(`id`);
ALTER TABLE
    `cr_unit_subscriptions` ADD CONSTRAINT `cr_unit_subscriptions_unit_id_foreign` FOREIGN KEY(`unit_id`) REFERENCES `cr_units`(`id`);
ALTER TABLE
    `cr_unit_facilities` ADD CONSTRAINT `cr_unit_facilities_facility_id_foreign` FOREIGN KEY(`facility_id`) REFERENCES `cr_facilities`(`id`);
ALTER TABLE
    `cr_unit_images` ADD CONSTRAINT `cr_unit_images_image_id_foreign` FOREIGN KEY(`image_id`) REFERENCES `cr_images`(`id`);
ALTER TABLE
    `cr_rentals` ADD CONSTRAINT `cr_rentals_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `cr_users`(`id`);
ALTER TABLE
    `cr_users` ADD CONSTRAINT `cr_users_user_type_id_foreign` FOREIGN KEY(`user_type_id`) REFERENCES `cr_user_types`(`id`);
ALTER TABLE
    `cr_units` ADD CONSTRAINT `cr_units_landlord_id_foreign` FOREIGN KEY(`landlord_id`) REFERENCES `cr_users`(`id`);
ALTER TABLE
    `cr_unit_rules` ADD CONSTRAINT `cr_unit_rules_unit_id_foreign` FOREIGN KEY(`unit_id`) REFERENCES `cr_units`(`id`);
ALTER TABLE
    `cr_unit_images` ADD CONSTRAINT `cr_unit_images_unit_id_foreign` FOREIGN KEY(`unit_id`) REFERENCES `cr_units`(`id`);
ALTER TABLE
    `cr_schools` ADD CONSTRAINT `cr_schools_image_id_foreign` FOREIGN KEY(`image_id`) REFERENCES `cr_images`(`id`);
ALTER TABLE
    `cr_reviews` ADD CONSTRAINT `cr_reviews_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `cr_users`(`id`);
ALTER TABLE
    `cr_reviews` ADD CONSTRAINT `cr_reviews_unit_id_foreign` FOREIGN KEY(`unit_id`) REFERENCES `cr_units`(`id`);
ALTER TABLE
    `cr_reviews` ADD CONSTRAINT `cr_reviews_booking_id_foreign` FOREIGN KEY(`booking_id`) REFERENCES `cr_rentals`(`id`);
ALTER TABLE
    `cr_bookmarks` ADD CONSTRAINT `cr_bookmarks_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `cr_users`(`id`);
ALTER TABLE
    `cr_bookmarks` ADD CONSTRAINT `cr_bookmarks_unit_id_foreign` FOREIGN KEY(`unit_id`) REFERENCES `cr_units`(`id`);
ALTER TABLE
    `cr_account_verifications` ADD CONSTRAINT `cr_account_verifications_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `cr_users`(`id`);
ALTER TABLE
    `cr_account_verifications` ADD CONSTRAINT `cr_account_verifications_checked_by_foreign` FOREIGN KEY(`checked_by`) REFERENCES `cr_users`(`id`);
ALTER TABLE
    `cr_account_verifications` ADD CONSTRAINT `cr_account_verifications_id_type_foreign` FOREIGN KEY(`id_type`) REFERENCES `cr_id_types`(`id`);
ALTER TABLE
    `cr_reported_users` ADD CONSTRAINT `cr_reported_users_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `cr_users`(`id`);
ALTER TABLE
    `cr_reported_users` ADD CONSTRAINT `cr_reported_users_reported_by_foreign` FOREIGN KEY(`reported_by`) REFERENCES `cr_users`(`id`);
ALTER TABLE
    `cr_blacklisted_users` ADD CONSTRAINT `cr_blacklisted_users_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `cr_users`(`id`);
ALTER TABLE
    `cr_notifications` ADD CONSTRAINT `cr_notifications_notification_type_id_foreign` FOREIGN KEY(`notification_type_id`) REFERENCES `cr_notification_types`(`id`);
ALTER TABLE
    `cr_notifications` ADD CONSTRAINT `cr_notfications_source_id_foreign` FOREIGN KEY(`source_id`) REFERENCES `cr_users`(`id`);
ALTER TABLE
    `cr_notification_subscribers` ADD CONSTRAINT `cr_notification_subscribers_notification_id_foreign` FOREIGN KEY(`notification_id`) REFERENCES `cr_notifications`(`id`);
ALTER TABLE
    `cr_notification_subscribers` ADD CONSTRAINT `cr_notification_subscribers_subscriber_id_foreign` FOREIGN KEY(`subscriber_id`) REFERENCES `cr_users`(`id`);
ALTER TABLE
    `cr_notification_settings` ADD CONSTRAINT `cr_notification_settings_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `cr_users`(`id`);
ALTER TABLE
    `cr_notification_settings` ADD CONSTRAINT `cr_notification_settings_notification_type_id_foreign` FOREIGN KEY(`notification_type_id`) REFERENCES `cr_notification_types`(`id`);


insert into cr_user_types (id, name, status) values
    (1, "Admin", 1),
    (2, "Landlord", 1),
    (3, "Tenant", 1);
insert into cr_users (id, email, password, first_name, middle_name, last_name, gender, phone_number, user_type_id, is_verified, status) values
    (1, "otilla@gmail.com", "123456789", "John", "Canila", "Otilla", 1, "09674322308", 1, 0, 1);
insert into cr_units (id, landlord_id, name, details, price, month_advance, month_deposit, location,address, target_gender, slots, subscription_id, is_listed, request_status, status) values
    (1, 1, "Elas Boarding House", "2 Bedrooms Boarding House Fully Furnished for rent in Legazpi City", 3500.00, 3500, 3500, '{"lat":13.145536, "lng":123.728441}',"EM's Barrio N",0, 5, 0, 1, 1, 1);
insert into cr_facilities (id, name, icon, is_switch, is_available, status) values
    (1, "Comfort Room", "tiolet", 0, 1, 1);
insert into cr_unit_facilities (id, unit_id, facility_id, is_shared, status) values
    (1, 1, 1, 1, 1);
insert into cr_amenities (id, name, icon, is_available, status) values
    (1, "TV", "Tv", 1, 1);
insert into cr_unit_amenities (id, unit_id, amenity_id, status) values
    (1, 1, 1, 1);
insert into cr_inclusions (id, name, icon, is_available, status) values
    (1, "WIFI", "react-icons/bs/BsWifi", 1, 1);
insert into cr_unit_inclusions (id, unit_id, inclusion_id, status) values
    (1, 1, 1, 1);
insert into cr_rules (id, name, icon, is_available, status) values
    (1, "No Pets", "paw", 1, 1);
insert into cr_unit_rules (id, unit_id, rule_id, status) values
    (1, 1, 1, 1);