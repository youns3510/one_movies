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
  FOREIGN KEY(`admin_id`) REFERENCES admins(`id`) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS `ad_profile`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` INT UNSIGNED NOT NULL,
  `image` VARCHAR(255) NOT NULL,
  `experience` TEXT,
  `skills` TEXT,
  `created_at` TIMESTAMP,
  PRIMARY KEY `pk_id`(`id`),
  FOREIGN KEY(`admin_id`) REFERENCES admins(`id`) ON DELETE CASCADE ON UPDATE CASCADE
);
-- ==========================================

-- movies table movie && admin

CREATE TABLE IF NOT EXISTS `movies`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `admin_id` INT UNSIGNED NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `story` TEXT NOT NULL,       
    `release_date` DATE NOT NULL,   
    `image` VARCHAR(255) NOT NULL,  
    `video` VARCHAR(255) NOT NULL,  
    `created_at` TIMESTAMP,
    PRIMARY KEY `pk_id`(`id`),
    FOREIGN KEY(`admin_id`) REFERENCES admins(`id`) ON DELETE CASCADE ON UPDATE CASCADE
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
  FOREIGN KEY(`movie_id`) REFERENCES movies(`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY(`comment_id`) REFERENCES comments(`id`) ON DELETE CASCADE ON UPDATE CASCADE
);
-- =================================
-- star rating 
-- every colum contain a count of all user rating choosed

CREATE TABLE IF NOT EXISTS `star_rating`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `movie_id` INT UNSIGNED NOT NULL,
    `one` INT(10) DEFAULT 0,
    `two` INT(10) DEFAULT 0,
    `three` INT(10) DEFAULT 0,
    `four` INT(10) DEFAULT 0,
    `five` INT(10) DEFAULT 0,
    PRIMARY KEY `pk_id`(`id`),
    FOREIGN KEY(`movie_id`) REFERENCES `movies`(`id`) ON DELETE CASCADE ON UPDATE CASCADE
);

-- =====================================================
-- genres table
CREATE TABLE IF NOT EXISTS `genres`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `movie_id` INT UNSIGNED NOT NULL,
    `action` CHAR DEFAULT 0,
    `biography` CHAR DEFAULT 0,
    `crime` CHAR DEFAULT 0,
    `family` CHAR DEFAULT 0,
    `horror` CHAR DEFAULT 0,
    `romance` CHAR DEFAULT 0,
    `sports` CHAR DEFAULT 0,
    `war` CHAR DEFAULT 0,
    `adventure` CHAR DEFAULT 0,
    `comedy` CHAR DEFAULT 0,
    `documentary` CHAR DEFAULT 0,
    `fantasy` CHAR DEFAULT 0,
    `thriller` CHAR DEFAULT 0,
    `animation` CHAR DEFAULT 0,
    `costume` CHAR DEFAULT 0,
    `drama` CHAR DEFAULT 0,
    `history` CHAR DEFAULT 0,
    `musical` CHAR DEFAULT 0,
    `psychological` CHAR DEFAULT 0,
    PRIMARY KEY `pk_id`(`id`),
    FOREIGN KEY(`movie_id`) REFERENCES `movies`(`id`) ON DELETE CASCADE ON UPDATE CASCADE
);
SELECT movies.*,star_rating.* FROM movies,star_rating WHERE movies.id=1 AND star_rating.movie_id=1;
'action','biography','crime','family','horror','romance','sports','war','adventure','comedy','documentary','fantasy','thriller','animation','costume','drama','history','musical','psychological',