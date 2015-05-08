DROP TABLE IF EXISTS `zf2tutorial`.`address_book`;
CREATE TABLE  `zf2tutorial`.`address_book` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_email` varchar(75) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_tel` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_add` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;