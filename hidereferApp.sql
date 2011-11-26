-- MySQL dump 10.13  Distrib 5.1.41, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: hidereferApp
-- ------------------------------------------------------
-- Server version	5.1.41-3ubuntu12.9

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
-- Table structure for table `hide_url`
--

DROP TABLE IF EXISTS `hide_url`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hide_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(256) NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hide_url`
--

LOCK TABLES `hide_url` WRITE;
/*!40000 ALTER TABLE `hide_url` DISABLE KEYS */;
INSERT INTO `hide_url` VALUES (1,'http://news.com',1321293568),(2,'http://newscred.com',1321296585),(3,'http://mushfiq.me',1321296650),(4,'http://google.com',1321298029),(5,'http://google.com',1321380130),(6,'http://odesk.com',1321380273),(7,'http://mushfiqsimple.wordpress.com',1321554221),(8,'http://mushfiqsimple.wordpress.com',1321554627),(9,'http://mushfiqsimple.wordpress.com',1321554689),(10,'http://mushfiqsimple.wordpress.com',1321554721),(11,'http://mushfiqsimple.wordpress.com',1321554735),(12,'http://mushfiq.me',1321554828),(13,'http://mushfiq.me',1321555930),(14,'http://news.com',1321556001),(15,'http://google.com',1321556045),(16,'http://news.com',1321556217),(17,'http://mushfiq.me',1321556277),(18,'http://mushfiq.me',1321556716),(19,'http://news.com',1321556762),(20,'http://mushfiq.me',1321556968),(21,'http://google.com',1321557011),(22,'http://goog.com',1321557095),(23,'http://mushfiq.me',1321557119),(24,'http://mushfiq.me',1321557155),(25,'http://mushfiq.me',1321557186),(26,'http://mushfiqsimple.wordpress.com',1321557225),(27,'http://news.com',1321557316),(28,'http://mushfiqsimple.wordpress.com',1321557397),(29,'http://mushfiq.me',1321557511),(30,'http://mushfiq.me',1321557574),(31,'http://news.com',1321557929),(32,'http://mushfiq.me',1321558027),(33,'http://news.com',1321558063),(34,'http://news.com',1321558312),(35,'http://news.com',1321558378),(36,'http://news.com',1321558435),(37,'http://news.com',1321559223),(38,'http://news.com',1321559432),(39,'http://mushfiqsimple.wordpress.com',1321560486),(40,'http://mushfiqsimple.wordpress.com',1321560556),(41,'http://mushfiq.me',1321560572),(42,'http://mushfiq.me',1321560653),(43,'http://mushfiq.me',1321560659),(44,'http://mushfiqsimple.wordpress.com',1321560671),(45,'http://abcdf.com',1321560698),(46,'http://abcdf.com',1321560714),(47,'http://goog.com',1321560829),(48,'http://facebook.com',1321600608),(49,'http://mushfiq.me',1321603540),(50,'http://news.com',1321610692),(51,'http://news.com',1321610737),(52,'http://mushfiq.me',1321610786),(53,'http://mushfiq.me',1321610807),(54,'http://news.com',1321610848),(55,'http://news.com',1321610851),(56,'http://news.com',1321610854),(57,'http://news.com',1321611202),(58,'http://news.com',1321611211),(59,'http://news.com',1321611251),(60,'http://news.com',1321611449),(61,'http://news.com',1321612309),(62,'http://news.com',1321612347),(63,'http://news.com',1321612408),(64,'http://news.com',1321612436),(65,'http://news.com',1321612804),(66,'http://news.com',1321612884),(67,'http://go.go',1321613382),(68,'http://news.com',1321613425),(69,'http://news.com',1321613664),(70,'http://go.go',1321613917),(71,'http://go.go',1321621623),(72,'http://go.go',1321621657),(73,'http://go.go',1321622415),(74,'http://go.go',1321622442),(75,'http://newscred.com',1321623363),(76,'http://newscred.com',1321623399),(77,'http://newscred.com',1321623542),(78,'http://news.com',1321623785),(79,'http://news.com',1321623813),(80,'http://newscred.com',1321623880),(81,'http://newscred.com',1321623902),(82,'http://newscred.com',1321624375),(83,'http://newscred.com',1321624488),(84,'http://newscred.com',1321624541),(85,'http://newscred.com',1321624585),(86,'http://mushfiq.me',1321624734);
/*!40000 ALTER TABLE `hide_url` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-11-18 20:12:16
