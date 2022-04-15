-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.22-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.0.0.5958
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица esse.esse
CREATE TABLE IF NOT EXISTS `esse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_stud` int(11) DEFAULT NULL,
  `id_task` int(11) DEFAULT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unic` int(11) DEFAULT NULL,
  `toshnota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wordcount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы esse.esse: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `esse` DISABLE KEYS */;
INSERT INTO `esse` (`id`, `id_stud`, `id_task`, `text`, `unic`, `toshnota`, `wordcount`) VALUES
	(1, 3, 1, 'f', NULL, '10', 100);
/*!40000 ALTER TABLE `esse` ENABLE KEYS */;

-- Дамп структуры для таблица esse.task
CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_word` int(11) DEFAULT NULL,
  `unic` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы esse.task: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` (`id`, `id_user`, `name`, `count_word`, `unic`) VALUES
	(1, 1, 'first', 100, 80),
	(2, 2, 'sec', 100, 23);
/*!40000 ALTER TABLE `task` ENABLE KEYS */;

-- Дамп структуры для таблица esse.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `fio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы esse.users: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `log`, `pass`, `status`, `fio`) VALUES
	(1, '1', '1', 0, 'ivanov ivan'),
	(2, '2', '2', 0, 'petrov'),
	(3, '3', '3', 1, 'sidorov');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
