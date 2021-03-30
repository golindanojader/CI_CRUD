-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para posts
CREATE DATABASE IF NOT EXISTS `posts` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `posts`;

-- Volcando estructura para tabla posts.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `title` char(255) NOT NULL DEFAULT '0',
  `body` text NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `date_published` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla posts.blogs: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
REPLACE INTO `blogs` (`id`, `user_id`, `title`, `body`, `slug`, `date_published`) VALUES
	(1, 5, 'second  post edit 2', 'this is a body efit 2', 'second-post', '2021-03-26 22:19:26'),
	(2, 5, 'firts pots', 'this is a body', 'firts-pots', '2021-03-26 22:20:31'),
	(3, 5, 'third  post', 'this is a body', 'third-post', '2021-03-26 22:19:26'),
	(4, 5, 'four  post', 'this is a body', 'four-post', '2021-03-26 22:19:26'),
	(5, 5, 'five  post', 'this is a body', 'five-post', '2021-03-26 22:19:26'),
	(6, 0, 'title of new post by jagol', 'lorem ipsun saten doles', 'title-of-new-post-by-jagol', '2021-03-29 15:50:00'),
	(7, 0, 'jagol dev', 'lorem ipsin  lorem ipsin lorem ipsin lorem ipsin lorem ipsin lorem ipsin lorem ipsin lorem ipsin ', 'jagol-dev', '0000-00-00 00:00:00'),
	(10, 0, 'The new virus COVID-19', 'lorem ipsun lorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsun', 'the-new-virus-covid-19', '0000-00-00 00:00:00'),
	(11, 0, 'by jhon doe', 'lorem ipsun lorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsunlorem ipsun', 'by-jhon-doe', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Volcando estructura para tabla posts.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text,
  `lastname` text,
  `email` text,
  `password` text NOT NULL,
  `location` text NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT '0',
  `registered_at` datetime NOT NULL,
  `dept` text NOT NULL,
  `age` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla posts.user: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `location`, `is_admin`, `registered_at`, `dept`, `age`) VALUES
	(1, 'jhon', 'martin', 'jgol@gmail.com', '123', 'pandora st', 1, '2021-03-29 18:06:54', 'sales', 25),
	(2, 'clara', 'stevens', 'csl33@gmail.com', '2222', 'cro st 334', 0, '2021-03-29 18:07:45', 'IT', 28),
	(3, 'jhon ', 'doe', 'jhondoe@gmail.com', '122', 'boston 331 ', 0, '2021-03-29 18:08:23', 'Engineering', 50);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
