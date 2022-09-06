-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.32


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema `db_saim`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `db_saim`;
USE `db_saim`;

--
-- Table structure for table `db_saim`.`failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_saim`.`failed_jobs`
--

/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;


--
-- Table structure for table `db_saim`.`history_pui`
--

DROP TABLE IF EXISTS `history_pui`;
CREATE TABLE `history_pui` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pui` varchar(150) NOT NULL,
  `user_sim` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `query` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_saim`.`history_pui`
--

/*!40000 ALTER TABLE `history_pui` DISABLE KEYS */;
INSERT INTO `history_pui` (`id`,`pui`,`user_sim`,`tanggal`,`query`) VALUES 
 (2,'PUI-190715-0004','daniel staff','2021-08-12 02:53:26','select * from `kristest`.`purchaseinvoiceh` where `DocNo` in (\'PUI-190715-0004\')'),
 (3,'PUI-200518-0001','head finance','2021-08-20 08:49:36','select * from `kristest`.`purchaseinvoiceh` where `DocNo` in (\'PUI-200518-0001\')');
/*!40000 ALTER TABLE `history_pui` ENABLE KEYS */;


--
-- Table structure for table `db_saim`.`migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_saim`.`migrations`
--

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES 
 (1,'2014_10_12_000000_create_users_table',1),
 (2,'2014_10_12_100000_create_password_resets_table',1),
 (3,'2019_08_19_000000_create_failed_jobs_table',1),
 (4,'2021_08_02_071352_create_permission_tables',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


--
-- Table structure for table `db_saim`.`model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_saim`.`model_has_permissions`
--

/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;


--
-- Table structure for table `db_saim`.`model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_saim`.`model_has_roles`
--

/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`,`model_type`,`model_id`) VALUES 
 (3,'App\\Models\\User',5),
 (3,'App\\Models\\User',6),
 (4,'App\\Models\\User',7),
 (6,'App\\Models\\User',8),
 (5,'App\\Models\\User',9);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;


--
-- Table structure for table `db_saim`.`password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_saim`.`password_resets`
--

/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


--
-- Table structure for table `db_saim`.`permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_saim`.`permissions`
--

/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`,`name`,`guard_name`,`created_at`,`updated_at`) VALUES 
 (1,'role-list','web','2021-08-03 04:52:04','2021-08-03 04:52:04'),
 (2,'role-create','web','2021-08-03 04:52:05','2021-08-03 04:52:05'),
 (3,'role-edit','web','2021-08-03 04:52:06','2021-08-03 04:52:06'),
 (4,'role-delete','web','2021-08-03 04:52:07','2021-08-03 04:52:07');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;


--
-- Table structure for table `db_saim`.`role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_saim`.`role_has_permissions`
--

/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` (`permission_id`,`role_id`) VALUES 
 (1,3),
 (2,3),
 (3,3),
 (4,3),
 (1,4),
 (2,4),
 (3,4),
 (4,4),
 (1,5),
 (2,5),
 (3,5),
 (4,5),
 (1,6),
 (2,6),
 (3,6),
 (4,6);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;


--
-- Table structure for table `db_saim`.`roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_saim`.`roles`
--

/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`,`name`,`guard_name`,`created_at`,`updated_at`) VALUES 
 (3,'administrator','web','2021-08-03 06:08:25','2021-08-03 06:59:21'),
 (4,'head finance','web','2021-08-20 01:19:46','2021-08-20 01:19:46'),
 (5,'staff finance','web','2021-08-20 01:20:11','2021-08-20 01:20:11'),
 (6,'manager finance','web','2021-08-20 01:22:29','2021-08-20 01:22:29');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


--
-- Table structure for table `db_saim`.`tb_barang`
--

DROP TABLE IF EXISTS `tb_barang`;
CREATE TABLE `tb_barang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sai` varchar(150) DEFAULT NULL,
  `kode` varchar(150) NOT NULL,
  `nama` varchar(160) DEFAULT NULL,
  `unit` varchar(160) DEFAULT NULL,
  `harga` int(12) unsigned NOT NULL,
  `jumlah` int(12) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_saim`.`tb_barang`
--

/*!40000 ALTER TABLE `tb_barang` DISABLE KEYS */;
INSERT INTO `tb_barang` (`id`,`sai`,`kode`,`nama`,`unit`,`harga`,`jumlah`,`created_at`,`updated_at`) VALUES 
 (13,'SAB-200203-0001','K.060.0400.PLN.082','DPC 400 / 69.5 x 91.5 LG -- IK','RIM',2350,23124,NULL,NULL),
 (14,'SAB-200203-0001','SDASD.9291','K.060.0450.PLN.029','LBS',29329,329932,NULL,NULL),
 (15,'SAB-200203-0001','CFFA.23123','K.060.0450.PLN.029','LBR',2991200,3423523,NULL,NULL),
 (19,'SAI-190513-0011','ET.0189.0008','Bale Label Sampoerna A Volution 100g DHX 20 SSL (63.G068)','PCS',4560,4421,NULL,NULL),
 (20,'SAI-190513-0011','CD','K.060.0450.PLN.029','RIM',3451,4512,NULL,NULL),
 (21,'SAI-210802-0001','TC.0021.0210','Pepsodent White ALADDIN 225G','PCS',988,9877,NULL,NULL),
 (22,'SAA-191030-0001','BP.001.338','PLATE AGFA AIYINDA 1030mm x800mm-50','LBR',0,21453,NULL,NULL),
 (23,'SAA-191030-0001','4dyds','PLATE AGFA AIYINDA 1030mm x800mm-50','lbr',7567,878,NULL,NULL);
/*!40000 ALTER TABLE `tb_barang` ENABLE KEYS */;


--
-- Table structure for table `db_saim`.`tb_po`
--

DROP TABLE IF EXISTS `tb_po`;
CREATE TABLE `tb_po` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_sai` varchar(150) DEFAULT NULL,
  `po_no` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_saim`.`tb_po`
--

/*!40000 ALTER TABLE `tb_po` DISABLE KEYS */;
INSERT INTO `tb_po` (`id`,`id_sai`,`po_no`,`created_at`) VALUES 
 (17,'SAB-200203-0001','PO1912-0019',NULL),
 (18,'SAB-200203-0001','PO1912-3423',NULL),
 (19,'SAB-200203-0001','PO129102-10201',NULL),
 (20,'SAB-200203-0001','POI-20192-20131',NULL),
 (25,'SAI-190513-0011','PO-2031231',NULL),
 (31,'SAI-190513-0011','PO-352623',NULL),
 (32,'SAI-190513-0011','PO-5262342',NULL),
 (33,'SAI-210802-0001',' 4520938537',NULL),
 (34,'SAI-210802-0001','97986675859',NULL),
 (35,'SAA-191030-0001','1910-163',NULL),
 (36,'SAA-191030-0001','POSD-20121',NULL);
/*!40000 ALTER TABLE `tb_po` ENABLE KEYS */;


--
-- Table structure for table `db_saim`.`tb_saim`
--

DROP TABLE IF EXISTS `tb_saim`;
CREATE TABLE `tb_saim` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sai` varchar(150) DEFAULT NULL,
  `KodeCus` varchar(150) NOT NULL,
  `NamaCus` varchar(200) NOT NULL,
  `printed` varchar(150) DEFAULT NULL,
  `CreatedDate` varchar(100) NOT NULL,
  `ApprovedBy` varchar(100) NOT NULL,
  `CreatedBy` varchar(100) DEFAULT NULL,
  `ChangedDate` varchar(100) DEFAULT NULL,
  `ChangedBy` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `arc` varchar(100) DEFAULT NULL,
  `ard` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_docs` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_saim`.`tb_saim`
--

/*!40000 ALTER TABLE `tb_saim` DISABLE KEYS */;
INSERT INTO `tb_saim` (`id`,`sai`,`KodeCus`,`NamaCus`,`printed`,`CreatedDate`,`ApprovedBy`,`CreatedBy`,`ChangedDate`,`ChangedBy`,`arc`,`ard`,`created_at`,`updated_at`,`status_docs`) VALUES 
 (7,'SAB-200203-0001','','PT. Serunigraf Jaya Sentosa','PAID','','ffitrotul','mwaluyo','2021-08-10','head finance',NULL,NULL,NULL,'2021-08-20 07:57:52','dissaproved'),
 (8,'SAA-191030-0001','','PT. Imperial Nusantara','DELETED','','ffitrotul','mwaluyo','2021-08-20','head finance',NULL,NULL,NULL,'2021-08-20 08:46:51','dissaproved'),
 (9,'SAI-190513-0011','SUB.0189','PT. Hanjaya Mandala Sampoerna Tbk','PAID','','unknown','sutami','2019-06-26 15:25:04','head finance',NULL,NULL,NULL,'2021-08-20 08:02:16','dissaproved'),
 (10,'SAI-210802-0001','JKT.0021','PT. Unilever Indonesia Tbk','PRINTED','','aalbert','alistya','2021-08-03 11:27:42','head finance',NULL,NULL,NULL,'2021-08-20 10:18:51','dissaproved');
/*!40000 ALTER TABLE `tb_saim` ENABLE KEYS */;


--
-- Table structure for table `db_saim`.`users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_saim`.`users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES 
 (5,'daniel staff','daniel@staff.co.id',NULL,'$2y$10$lDiDUGfqEMGVrWyJe1Qg3eO6zDMKvFRvaJW/acW1tL2n1gsTMDR5m',NULL,'2021-08-03 06:10:02','2021-08-03 06:10:02'),
 (6,'EDP','edp@krisanthium.com',NULL,'$2y$10$GsJOjfmLTVgRlX2TtRknjO6xi2XP.44finZWB88Zdwib8CWXCnvp.',NULL,'2021-08-03 07:09:38','2021-08-03 07:09:38'),
 (7,'head finance','head@finance.tech',NULL,'$2y$10$TRntJZkE2LFp1LqvJaV1PeHKXP4pdeUC.VdpCp/NaH72tCWQHgsuS',NULL,'2021-08-20 01:53:24','2021-08-20 01:53:24'),
 (8,'manager finance','manager@finance.tech',NULL,'$2y$10$7PP8vdgQd56yi4Xo2n7S6exS9KWRj/dwiruvv.kFCVts5vNEqoUxy',NULL,'2021-08-20 01:54:23','2021-08-20 01:54:23'),
 (9,'staff finance','staff@finance.tech',NULL,'$2y$10$mEaUyzEWHr12a970dcfUnecCmB8Wzal7ahbBXkQqAoqfxuEgsG54a',NULL,'2021-08-20 01:55:23','2021-08-20 01:55:23');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
