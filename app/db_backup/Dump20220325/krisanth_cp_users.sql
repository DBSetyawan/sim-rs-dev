CREATE DATABASE  IF NOT EXISTS `krisanth_cp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `krisanth_cp`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: 192.168.88.99    Database: krisanth_cp
-- ------------------------------------------------------
-- Server version	5.5.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_email_verified` tinyint(1) NOT NULL DEFAULT '0',
  `accessable` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(105) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'Team Support','artexs@mail.com',NULL,'$2y$10$2QDvaTAlXyJq76k7msu2Qu3ZbxVSG3MTsOyOHRYQgfCm2enUkSwK6',NULL,'2021-09-24 03:15:04','2021-09-24 03:16:28',1,'marketing',NULL,NULL,NULL,NULL,NULL,NULL),(4,'artexs (dnl)','daniel-dev@programmer.net',NULL,'$2y$10$mmS7ihA.993e1xKcG.6FwedqOv7Ctrlskb2zspSWs9w6S2gtzXL7i',NULL,'2021-12-16 07:28:43','2021-12-16 07:35:01',1,'user',NULL,NULL,NULL,NULL,NULL,NULL),(6,'Team Support','daniel.setyawan@krisanthium.com',NULL,'$2y$10$bERGuwr3SCswrdgg5HFz1.1OjtDT7zrYQGVN67li7DLPBPvTddFeK',NULL,'2022-01-06 07:29:31','2022-02-17 08:14:02',1,'marketing',NULL,NULL,NULL,NULL,NULL,NULL),(34,'Daniel Setyawan','artexsdns@gmail.com',NULL,'0','3TnFcsvfWnPrmaZoU1P5dG9RM7F8N8lv6A4ibox7vBezK5LXPk6h4ycG8mWf','2022-01-28 08:04:48','2022-01-28 08:04:48',1,'user',NULL,NULL,NULL,NULL,NULL,NULL),(36,'Krisanthium Offset Printing','krisanthium.op@gmail.com','2022-03-15 19:17:17','0','HFGmDGtqq1Wr2VqlQCqXoltHx2dcnTwqZKat7CjL8nSlFmYb0f0jCCEp27nH','2022-03-15 19:17:17','2022-03-15 19:17:17',1,'user',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-25 13:36:03
