-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.23 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for robdb
CREATE DATABASE IF NOT EXISTS `robdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `robdb`;

-- Dumping structure for table robdb.account
CREATE TABLE IF NOT EXISTS `account` (
  `account_id` int NOT NULL AUTO_INCREMENT,
  `account_username` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `account_email` varchar(100) NOT NULL,
  `account_password` varchar(45) NOT NULL,
  `account_first_name` varchar(45) NOT NULL,
  `account_last_name` varchar(45) NOT NULL,
  UNIQUE KEY `account_password` (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table robdb.account: ~1 rows (approximately)
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` (`account_id`, `account_username`, `account_email`, `account_password`, `account_first_name`, `account_last_name`) VALUES
	(7, 'egino200', 'Egin.h.jensen@gmail.com', 'e', 'Egin', 'Jensen');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;

-- Dumping structure for table robdb.basket
CREATE TABLE IF NOT EXISTS `basket` (
  `basket_price` int NOT NULL,
  `basket_pic_path` varchar(100) NOT NULL,
  `basket_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table robdb.basket: ~0 rows (approximately)
/*!40000 ALTER TABLE `basket` DISABLE KEYS */;
/*!40000 ALTER TABLE `basket` ENABLE KEYS */;

-- Dumping structure for table robdb.clothes
CREATE TABLE IF NOT EXISTS `clothes` (
  `clothes_id` int NOT NULL,
  `clothes_name` varchar(45) NOT NULL,
  `clothes_price` int NOT NULL,
  `clothes_pic_path` varchar(45) NOT NULL,
  PRIMARY KEY (`clothes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table robdb.clothes: ~3 rows (approximately)
/*!40000 ALTER TABLE `clothes` DISABLE KEYS */;
INSERT INTO `clothes` (`clothes_id`, `clothes_name`, `clothes_price`, `clothes_pic_path`) VALUES
	(0, 'Hoodie', 45, 'images/eeeeee.jpg'),
	(1, 'Jacket', 46, 'images/eeeeeeee.jpg'),
	(2, 'Jersey', 47, 'images/eeeeeeeee.jpg');
/*!40000 ALTER TABLE `clothes` ENABLE KEYS */;

-- Dumping structure for table robdb.wallet
CREATE TABLE IF NOT EXISTS `wallet` (
  `wallet_id` int NOT NULL,
  `wallet_balance` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table robdb.wallet: ~0 rows (approximately)
/*!40000 ALTER TABLE `wallet` DISABLE KEYS */;
/*!40000 ALTER TABLE `wallet` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
