DROP TABLE IF EXISTS `stage`;

CREATE TABLE `stage` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `order` tinyint(2) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_ORDER` (`order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `client`;

CREATE TABLE `client` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `stage_id` bigint(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_STAGE` FOREIGN KEY (`stage_id`) REFERENCES `stage` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `stage` VALUES
(1, 1, 'Первый этап'),
(2, 3, 'Третий этап'),
(3, 2, 'Второй этап');

INSERT INTO `client` VALUES
(1, 1),
(2, 2),
(3, 1),
(4, 3),
(5, 2),
(6, 3),
(7, 1),
(8, 2),
(9, 1);
