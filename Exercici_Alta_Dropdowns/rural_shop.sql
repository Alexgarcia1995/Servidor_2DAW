CREATE DATABASE  IF NOT EXISTS `rural_shop` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `rural_shop`;
-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: rural_shop
-- ------------------------------------------------------
-- Server version	5.6.27-0ubuntu0.15.04.1

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
  `name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `birth_date` varchar(10) DEFAULT NULL,
  `title_date` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `en_lvl` varchar(45) DEFAULT NULL,
  `Computing` tinyint(1) DEFAULT NULL,
  `History` tinyint(1) DEFAULT NULL,
  `Magic` tinyint(1) DEFAULT NULL,
  `Music` tinyint(1) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('Ana','Marti Saborit','20/12/1996','20/12/2014','anarcar@gmail.com','anarcar','anarcar','anarcar','A1',0,0,1,1,'/PhpProject1/media/default-avatar.png'),('Jose','Rios Tolsa','20/12/1996','20/12/2014','josema@gmail.com','josema','josema','josema','A1',0,0,1,1,'/PhpProject1/media/default-avatar.png'),('Lara','Tormo Bas','20/12/1996','20/12/2014','lareto@gmail.com','lareto','lareto','lareto','A1',0,0,1,1,'/PhpProject1/media/default-avatar.png'),('Miguel','Asdasd','09/01/1996','09/01/2015','mi@gmail.com','calle12 n58 pta3','meganeo','asdasd','A1',1,1,0,0,'/PhpProject1/media/default-avatar.png'),('Miguel','Gandia','10/01/1996','10/01/2015','miguel.gh96@gmai.com','avalmaig n59 pta3','miguel','asdasd','A1',1,1,1,0,'/PhpProject1/media/default-avatar.png');
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

-- Dump completed on 2015-11-04 18:58:01
