-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'user'
-- 
-- ---

DROP TABLE IF EXISTS `user`;
		
CREATE TABLE `user` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `firstname` VARCHAR(127) NULL DEFAULT NULL,
  `lastname` VARCHAR NULL DEFAULT NULL,
  `DoB` DATE NULL DEFAULT NULL,
  `country of origin` VARCHAR NULL DEFAULT NULL,
  `country` VARCHAR NULL DEFAULT NULL,
  `phone` VARCHAR NULL DEFAULT NULL,
  `email` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `lastname`)
);

-- ---
-- Table 'friends'
-- 
-- ---

DROP TABLE IF EXISTS `friends`;
		
CREATE TABLE `friends` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `friend 1` VARCHAR NULL DEFAULT NULL,
  `friend 2` VARCHAR NULL DEFAULT NULL,
  `friend 3` VARCHAR NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'chats'
-- 
-- ---

DROP TABLE IF EXISTS `chats`;
		
CREATE TABLE `chats` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `friend 1` MEDIUMTEXT NULL DEFAULT NULL,
  `friend 2` MEDIUMTEXT NULL DEFAULT NULL,
  `friend 3` MEDIUMTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `friend 1`, `friend 2`, `friend 3`)
);

-- ---
-- Table 'photos'
-- 
-- ---

DROP TABLE IF EXISTS `photos`;
		
CREATE TABLE `photos` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `photo 1` MEDIUMTEXT NULL DEFAULT NULL,
  `photo 2` MEDIUMTEXT NULL DEFAULT NULL,
  `photo 3` MEDIUMTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'groups'
-- 
-- ---

DROP TABLE IF EXISTS `groups`;
		
CREATE TABLE `groups` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `group 1` VARCHAR NULL DEFAULT NULL,
  `group 2` VARCHAR NULL DEFAULT NULL,
  `group 3` VARCHAR NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'events'
-- 
-- ---

DROP TABLE IF EXISTS `events`;
		
CREATE TABLE `events` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `event 1` MEDIUMTEXT NULL DEFAULT NULL,
  `event 2` MEDIUMTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'privacy settings'
-- 
-- ---

DROP TABLE IF EXISTS `privacy settings`;
		
CREATE TABLE `privacy settings` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE `user` ADD FOREIGN KEY (id) REFERENCES `chats` (`id`);
ALTER TABLE `friends` ADD FOREIGN KEY (friend 1) REFERENCES `chats` (`friend 1`);
ALTER TABLE `friends` ADD FOREIGN KEY (friend 2) REFERENCES `chats` (`friend 2`);
ALTER TABLE `friends` ADD FOREIGN KEY (friend 3) REFERENCES `chats` (`friend 3`);
ALTER TABLE `photos` ADD FOREIGN KEY (id) REFERENCES `user` (`id`);
ALTER TABLE `groups` ADD FOREIGN KEY (group 1) REFERENCES `user` (`id`);
ALTER TABLE `groups` ADD FOREIGN KEY (group 2) REFERENCES `user` (`id`);
ALTER TABLE `groups` ADD FOREIGN KEY (group 3) REFERENCES `user` (`id`);
ALTER TABLE `events` ADD FOREIGN KEY (event 1) REFERENCES `user` (`id`);
ALTER TABLE `privacy settings` ADD FOREIGN KEY (id) REFERENCES `user` (`id`);

-- ---
-- Table Properties
-- ---

-- ALTER TABLE `user` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `friends` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `chats` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `photos` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `groups` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `events` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `privacy settings` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `user` (`id`,`firstname`,`lastname`,`DoB`,`country of origin`,`country`,`phone`,`email`) VALUES
-- ('','','','','','','','');
-- INSERT INTO `friends` (`id`,`friend 1`,`friend 2`,`friend 3`) VALUES
-- ('','','','');
-- INSERT INTO `chats` (`id`,`friend 1`,`friend 2`,`friend 3`) VALUES
-- ('','','','');
-- INSERT INTO `photos` (`id`,`photo 1`,`photo 2`,`photo 3`) VALUES
-- ('','','','');
-- INSERT INTO `groups` (`id`,`group 1`,`group 2`,`group 3`) VALUES
-- ('','','','');
-- INSERT INTO `events` (`id`,`event 1`,`event 2`) VALUES
-- ('','','');
-- INSERT INTO `privacy settings` (`id`) VALUES
-- ('');