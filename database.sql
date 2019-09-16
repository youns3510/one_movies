-- create admin table and password table=========
CREATE TABLE IF NOT EXISTS `admins`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `role` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP,
  PRIMARY KEY `pk_id`(`id`),
  UNIQUE KEY `UNIQUE`(`email`)
);


CREATE TABLE IF NOT EXISTS `ad_pass`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` INT UNSIGNED NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP,
  PRIMARY KEY `pk_id`(`id`),
  FOREIGN KEY(`admin_id`) REFERENCES admins(`id`)
);

CREATE TABLE IF NOT EXISTS `ad_profile`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` INT UNSIGNED NOT NULL,
  `image` VARCHAR(255) NOT NULL,
  `experience` TEXT,
  `skills` TEXT,
  `created_at` TIMESTAMP,
  PRIMARY KEY `pk_id`(`id`),
  FOREIGN KEY(`admin_id`) REFERENCES admins(`id`)
);
-- ==========================================

-- movies table movie && admin

CREATE TABLE IF NOT EXISTS `movies`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `admin_id` INT UNSIGNED NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `story` TEXT NOT NULL,    
    `genres` VARCHAR(255) NOT NULL,     
    `release_date` DATE NOT NULL,   
    `image` VARCHAR(255) NOT NULL,  
    `video` VARCHAR(255) NOT NULL,  
    `created_at` TIMESTAMP,
    PRIMARY KEY `pk_id`(`id`),
    FOREIGN KEY(`admin_id`) REFERENCES admins(`id`)
);

-- =====================================================

CREATE TABLE IF NOT EXISTS `users`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,  
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
  `name` VARCHAR(255) NOT NULL, 
  `email` VARCHAR(255) NOT NULL, 
  `phone` VARCHAR(255) NOT NULL, 
  `message` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP, 
  PRIMARY KEY `pk_id`(`id`),
  FOREIGN KEY(`user_id`) REFERENCES users(`id`),
  FOREIGN KEY(`movie_id`) REFERENCES movies(`id`),
  FOREIGN KEY(`comment_id`) REFERENCES comments(`id`)
);
-- =================================
-- star rating 


CREATE TABLE IF NOT EXISTS `star_rating`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `movie_id` INT UNSIGNED NOT NULL,
    `one` INT(10) DEFAULT 0,
    `two` INT(10) DEFAULT 0,
    `three` INT(10) DEFAULT 0,
    `four` INT(10) DEFAULT 0,
    `five` INT(10) DEFAULT 0,
    PRIMARY KEY `pk_id`(`id`),
    FOREIGN KEY(`movie_id`) REFERENCES `movies`(`id`)
);

-- =====================================================