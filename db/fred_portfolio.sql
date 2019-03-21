# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.43)
# Database: portfolio
# Generation Time: 2019-03-21 15:37:06 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table about
# ------------------------------------------------------------

DROP TABLE IF EXISTS `about`;

CREATE TABLE `about` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(10000) NOT NULL DEFAULT '',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;

INSERT INTO `about` (`id`, `text`, `deleted`)
VALUES
	(1,'I have been training at the highly-regarded Mayden Academy in Bath. Already a Certified Scrum Master and proficient in HTML and CSS, I am enjoying myself immensely and look forward to gaining yet more skills in PHP and javascript to name but a few! I love finding creative solutions to problems and there is an enormous pleasure in learning new things.',0),
	(2,'Beyond coding, I conduct orchestras professionally and have a deep love of classical music. I direct Resonance Orchestra in Bristol and the University of Bath Orchestra. My favourite gig to date was putting a 100-strong orchestra under Concorde at the Aerospace Museum to perform Shostakovich. 500 people came, it was a really special night!',0),
	(3,'In my free time I enjoy riding my motorcycle, which I often do off-road. It is lovely to get out into the countryside and reconnect with nature, so occasionally I will take a tent or a hammock and have a weekend away from the city, out in the wilderness! Beyond that I enjoy cooking, climbing, playing with my niece and nephews and very occasionally doing absolutely nothing.',0),
	(4,'Submit to Fred',0),
	(5,'Fred is also a breeder of pedigree platypi, possums and parakeets.',0),
	(6,'Fred is also a breeder of pedigree platypi.',0),
	(9,'1',0),
	(10,'Fred is also a breeder of pedigree platypi.',0),
	(11,'Fred is also a breeder of pedigree platypusses',0),
	(12,'tralalalala',0);

/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table credentials
# ------------------------------------------------------------

DROP TABLE IF EXISTS `credentials`;

CREATE TABLE `credentials` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `credentials` WRITE;
/*!40000 ALTER TABLE `credentials` DISABLE KEYS */;

INSERT INTO `credentials` (`id`, `username`, `password`)
VALUES
	(1,'fred','$2y$10$7LkWlLjgM6xTY3wktLmjB.6bz77z8YQd3UUzCW5T7QGDvCKK9HsXq');

/*!40000 ALTER TABLE `credentials` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
