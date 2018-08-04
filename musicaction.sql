-- MySQL dump 10.13  Distrib 5.7.21, for FreeBSD11.1 (amd64)
--
-- Host: localhost    Database: musicaction
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Current Database: `musicaction`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `musicaction` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `musicaction`;

--
-- Table structure for table `music`
--

DROP TABLE IF EXISTS `music`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `music` (
  `Mname` varchar(75) NOT NULL,
  `Mlink` varchar(200) NOT NULL,
  `Mid` int(11) NOT NULL AUTO_INCREMENT,
  `mode` int(11) DEFAULT NULL,
  `up` json DEFAULT NULL,
  `down` json DEFAULT NULL,
  `left` json DEFAULT NULL,
  `right` json DEFAULT NULL,
  PRIMARY KEY (`Mid`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `music`
--

LOCK TABLES `music` WRITE;
/*!40000 ALTER TABLE `music` DISABLE KEYS */;
INSERT INTO `music` VALUES ('LSD - Genius','LSD - Genius.mp3',11,2,'\"889,2929,3914,4674,5532,6134,6657,7094,7506,7965,8551,8977,9399,9807,10259\"','\"\"','\"1686,3293,4181,4916,5749,6321,6810,7239,7727,8271,8706,9118,9514,9907,10377\"','\"2565,3620,4451,5294,5979,6485,6938,7363,7819,8403,8823,9252,9651,10101\"'),('LSD - Genius(part)','LSD - Genius(part).mp3',23,1,'\"9264,10698,12235,13730,21213,22777,24308,25771\"','\"9947,11479,12976,14476,22034,23534,25020,26509\"','\"3217,4728,6252,7790,15234,16621,18291,19759\"','\"3960,5474,7044,8498,15981,17496,19028,20469\"'),('LSD - Genius(part)','LSD - Genius(part).mp3',29,3,'\"663,1011,1343,2628,2948,3239\"','\"1476,1879,2187,2959\"','\"628,1032,2548,3274\"','\"1351,2670,3253\"');
/*!40000 ALTER TABLE `music` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scores`
--

DROP TABLE IF EXISTS `scores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scores` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0',
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sid`),
  KEY `index_id` (`id`),
  KEY `index_username` (`username`),
  CONSTRAINT `scores_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scores`
--

LOCK TABLES `scores` WRITE;
/*!40000 ALTER TABLE `scores` DISABLE KEYS */;
INSERT INTO `scores` VALUES (1,'manager',100,1),(1,'manager',70,2),(1,'manager',90,3),(1,'manager',95,4),(20,'Yolanda',96,5),(20,'Yolanda',80,6),(27,'frank',99,7),(60,'frank',97,102),(60,'frank',97,103),(60,'frank',97,104),(60,'frank',97,105),(60,'frank',97,106),(60,'frank',97,107),(60,'frank',97,108),(60,'frank',97,109),(60,'frank',97,110),(60,'frank',97,111),(60,'frank',97,112),(60,'frank',97,113),(60,'frank',97,114),(60,'frank',97,115),(60,'frank',97,116),(60,'frank',97,117),(60,'frank',97,118),(60,'frank',97,119),(90,'frank',95,120),(90,'frank',94,121),(90,'frank',94,122),(90,'frank',94,123),(90,'frank',94,124),(90,'frank',94,125),(90,'frank',94,126),(90,'frank',94,127),(90,'frank',94,128),(90,'frank',93,129),(90,'frank',93,130),(90,'frank',93,131),(90,'frank',93,132),(90,'frank',93,133),(90,'frank',92,134),(0,'frank',92,135),(0,'frank',92,136),(0,'frank',2990,137),(1,'manager',120,138),(1,'manager',540,139),(1,'manager',530,140),(1,'manager',-110,141),(1,'manager',2050,142),(1,'manager',290,143),(1,'manager',2230,144);
/*!40000 ALTER TABLE `scores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `profile` text,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(20) NOT NULL,
  `activationKey` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`,`username`),
  UNIQUE KEY `Username` (`username`),
  UNIQUE KEY `activationkey` (`activationKey`),
  KEY `index_id` (`id`),
  KEY `index_username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('manager','527045740@qq.com','06875133',NULL,'2018-05-26 09:52:35',1,'activated',NULL),('Yolanda','younghtyw@gmail.com','kvksmq',NULL,'2018-06-06 19:21:02',20,'activated',NULL),('frank','yggg100@126.com','just do it',NULL,'2018-06-07 07:42:30',27,'activated',NULL),('kks','younghtyw@gmail.com','123456',NULL,'2018-06-11 13:07:10',35,'activated',NULL),('iloveworld','younghtyw@gmail.com','111111',NULL,'2018-06-11 13:13:47',36,'activated',NULL),('gdtop','JHWang0517@gmail.com','qwer12345',NULL,'2018-06-15 18:13:07',39,'activated',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-21 16:51:55
