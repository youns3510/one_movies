-- create admin table and password table=========
CREATE TABLE IF NOT EXISTS `admins`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255),
  `name` VARCHAR(255),
  `email` VARCHAR(255),
  `role` VARCHAR(255),
  `created_at` TIMESTAMP,
  PRIMARY KEY `pk_id`(`id`)
);

CREATE TABLE IF NOT EXISTS `ad_pass`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` INT UNSIGNED NOT NULL,
  `password` VARCHAR(255),
  `created_at` TIMESTAMP,
  PRIMARY KEY `pk_id`(`id`),
  FOREIGN KEY(`admin_id`) REFERENCES admins(`id`)
);

CREATE TABLE IF NOT EXISTS `ad_profile`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` INT UNSIGNED NOT NULL,
  `image` VARCHAR(255),
  `experience` TEXT,
  `skills` TEXT,
  `created_at` TIMESTAMP,
  PRIMARY KEY `pk_id`(`id`),
  FOREIGN KEY(`admin_id`) REFERENCES admins(`id`)
);
-- ==========================================

-- movies table movie && admin

CREATE TABLE IF NOT EXISTS `movies` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` INT UNSIGNED NOT NULL,
  `name` VARCHAR(255),
  `image` VARCHAR(255),
  `created_at` TIMESTAMP,
  PRIMARY KEY `pk_id`(`id`),
  FOREIGN KEY(`admin_id`) REFERENCES admins(`id`)
);

-- =====================================================

CREATE TABLE IF NOT EXISTS `users`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255),
  `name` VARCHAR(255),
  `email` VARCHAR(255),  
  `created_at` TIMESTAMP,
  PRIMARY KEY `pk_id`(`id`)
);

-- =================================================================
-- comments table  user && movie
CREATE TABLE IF NOT EXISTS `comments` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INT UNSIGNED NOT NULL,
  `movie_id` INT UNSIGNED NOT NULL,
  `comment_id` INT UNSIGNED  NULL,
  `name` VARCHAR(255), 
  `email` VARCHAR(255), 
  `phone` VARCHAR(255), 
  `message` VARCHAR(255),
  `created_at` TIMESTAMP, 
  PRIMARY KEY `pk_id`(`id`),
  FOREIGN KEY(`user_id`) REFERENCES users(`id`),
  FOREIGN KEY(`movie_id`) REFERENCES movies(`id`),
  FOREIGN KEY(`comment_id`) REFERENCES comments(`id`)
);
-- =================================