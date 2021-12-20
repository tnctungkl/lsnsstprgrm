-- --------------------------------------------------------
-- Sunucu:                       127.0.0.1
-- Sunucu sürümü:                10.4.17-MariaDB - mariadb.org binary distribution
-- Sunucu İşletim Sistemi:       Win64
-- HeidiSQL Sürüm:               11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- tpanel için veritabanı yapısı dökülüyor
CREATE DATABASE IF NOT EXISTS `tpanel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci */;
USE `tpanel`;

-- tablo yapısı dökülüyor tpanel.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_mail` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `admin_password` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `admin_permission` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- tpanel.admin: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`admin_mail`, `admin_password`, `admin_permission`) VALUES
	('malko', '6f336f477dfc1e0c44ed8bfb4344a11c', 2);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- tablo yapısı dökülüyor tpanel.admin_lssnbasvurular
CREATE TABLE IF NOT EXISTS `admin_lssnbasvurular` (
  `lssn_mail` char(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `lssn_isim` char(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `lssn_soyisim` char(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `lssn_dtarih` date NOT NULL,
  `lssn_cinsiyet` char(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `lssn_bolum` char(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- tpanel.admin_lssnbasvurular: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `admin_lssnbasvurular` DISABLE KEYS */;
INSERT INTO `admin_lssnbasvurular` (`lssn_mail`, `lssn_isim`, `lssn_soyisim`, `lssn_dtarih`, `lssn_cinsiyet`, `lssn_bolum`) VALUES
	('ggf', 'gfg', 'hfjgjgjhg', '2021-12-08', 'fjghjhgf', 'jhfgjhfg'),
	('sdffsdfsd', 'fdsfdsfds', 'fdsfdsfds', '2021-12-08', 'dfssdffsd', 'sdfdfsfsdsdf'),
	('hgfhgfhgfhgf', 'ghfhgfhgfhfg', 'kjhhjkkjhjhk', '2021-12-01', '765675765765', '32324432');
/*!40000 ALTER TABLE `admin_lssnbasvurular` ENABLE KEYS */;

-- tablo yapısı dökülüyor tpanel.admin_notif
CREATE TABLE IF NOT EXISTS `admin_notif` (
  `notification` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- tpanel.admin_notif: ~2 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `admin_notif` DISABLE KEYS */;
INSERT INTO `admin_notif` (`notification`, `time`) VALUES
	('dfgdf', '2021-12-19 21:59:44'),
	('asdasd', '2021-12-19 21:59:38');
/*!40000 ALTER TABLE `admin_notif` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
