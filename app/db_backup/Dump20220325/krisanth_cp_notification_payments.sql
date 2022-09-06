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
-- Table structure for table `notification_payments`
--

DROP TABLE IF EXISTS `notification_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification_payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_time` varchar(54) DEFAULT NULL,
  `transaction_status` varchar(45) DEFAULT NULL,
  `transaction_id` varchar(45) DEFAULT NULL,
  `store` varchar(45) DEFAULT NULL,
  `status_message` varchar(45) DEFAULT NULL,
  `status_code` varchar(45) DEFAULT NULL,
  `signature_key` varchar(200) DEFAULT NULL,
  `payment_type` varchar(45) DEFAULT NULL,
  `payment_code` varchar(45) DEFAULT NULL,
  `order_id` varchar(45) DEFAULT NULL,
  `merchant_id` varchar(45) DEFAULT NULL,
  `gross_amount` varchar(45) DEFAULT NULL,
  `currency` varchar(45) DEFAULT NULL,
  `approval_code` varchar(45) DEFAULT NULL,
  `settlement_time` varchar(45) DEFAULT NULL,
  `fraud_status` varchar(45) DEFAULT NULL,
  `biller_code` varchar(45) DEFAULT NULL,
  `bill_key` varchar(45) DEFAULT NULL,
  `va_numbers` varchar(100) DEFAULT NULL,
  `payment_amounts` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification_payments`
--

LOCK TABLES `notification_payments` WRITE;
/*!40000 ALTER TABLE `notification_payments` DISABLE KEYS */;
INSERT INTO `notification_payments` VALUES (1,'2022-03-24 14:43:23','pending','4028cb2d-65ed-45f3-b2a3-bc85bbbe2ca5',NULL,'midtrans payment notification','201','4a437e8ac402ffa5fbc72481c4f6604e401f5b164a65bea10b31d458b61f848cbdb4dc7783b47944b43623cfff20857c1539182f32f4b8c3b75cdf46df8ae340','gopay',NULL,'001623c209938e18','G936119607','200000.00','IDR',NULL,NULL,'accept',NULL,NULL,NULL,NULL,'2022-03-24 00:43:25','2022-03-24 00:43:25'),(2,'2022-03-24 14:43:23','settlement','4028cb2d-65ed-45f3-b2a3-bc85bbbe2ca5',NULL,'midtrans payment notification','200','dc9cbf7a6391794ddb9e6e590c2dd281d72c21b3f2c494cbd075ea2eb18b85ab36c00c7fb27b8fb1f7dc2b00c662b43d9196af8c539d6bec83c5f48b332d7a1c','gopay',NULL,'001623c209938e18','G936119607','200000.00','IDR',NULL,'2022-03-24 14:44:23','accept',NULL,NULL,NULL,NULL,'2022-03-24 00:44:23','2022-03-24 00:44:23'),(3,'2022-03-24 14:51:12','pending','f02ab7a3-351d-491d-8268-1252189dc45b',NULL,'midtrans payment notification','201','9d045ade7a6c9990f70375ba6a61f9fc838590c3738ed95d73f98aaf8d44d4e9d3852406b645751787cb18f2a24774126070e0c4caef6cef9fcb8dbbbda2cf7e','gopay',NULL,'001623c22e3ee5f2','G936119607','200000.00','IDR',NULL,NULL,'accept',NULL,NULL,NULL,NULL,'2022-03-24 00:51:13','2022-03-24 00:51:13'),(4,'2022-03-24 14:51:12','settlement','f02ab7a3-351d-491d-8268-1252189dc45b',NULL,'midtrans payment notification','200','62c8803661b765d5a6a5225e2c3515e02aa4ddfd7c723650f47cd2a59e295aa4e63c4d6b99cfbb83049860370fc73ebaf86bf9bb3a77f1796d0f894297894a28','gopay',NULL,'001623c22e3ee5f2','G936119607','200000.00','IDR',NULL,'2022-03-24 14:51:31','accept',NULL,NULL,NULL,NULL,'2022-03-24 00:51:32','2022-03-24 00:51:32');
/*!40000 ALTER TABLE `notification_payments` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-25 13:36:07
