-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ecfgarage
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nomfamille` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'Martin','LEGRAND','m.Legrand','B@rde-Magik23'),(2,'Fernand','BICHON','f.Bichon','ProDUg@rage55');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timetable` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Jour` varchar(255) NOT NULL,
  `okam` tinyint(1) NOT NULL,
  `opentimeam` time DEFAULT NULL,
  `closetimeam` time DEFAULT NULL,
  `okpm` tinyint(1) NOT NULL,
  `opentimepm` time DEFAULT NULL,
  `closetimepm` time DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timetable`
--

LOCK TABLES `timetable` WRITE;
/*!40000 ALTER TABLE `timetable` DISABLE KEYS */;
INSERT INTO `timetable` VALUES (1,'Lundi',1,'08:45:00','12:00:00',1,'14:00:00','18:00:00'),(2,'Mardi',1,'08:45:00','12:00:00',1,'14:00:00','18:00:00'),(3,'Mercredi',1,'08:45:00','12:00:00',1,'14:00:00','18:00:00'),(4,'Jeudi',1,'08:45:00','12:00:00',1,'14:00:00','18:00:00'),(5,'Vendredi',1,'08:45:00','12:00:00',1,'14:00:00','18:00:00'),(6,'Samedi',1,'08:45:00','12:00:00',0,NULL,NULL),(7,'Dimanche',0,NULL,NULL,0,NULL,NULL);
/*!40000 ALTER TABLE `timetable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicules`
--

DROP TABLE IF EXISTS `vehicules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marque` varchar(255) DEFAULT NULL,
  `modele` varchar(255) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `kilometrage` int(11) DEFAULT NULL,
  `date_mise_circulation` year(4) DEFAULT NULL,
  `baisse_prix` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicules`
--

LOCK TABLES `vehicules` WRITE;
/*!40000 ALTER TABLE `vehicules` DISABLE KEYS */;
INSERT INTO `vehicules` VALUES (1,'Toyota','Yaris',15000,25000,2018,1),(2,'Volkswagen','Golf',18000,35000,2017,0),(3,'Renault','Clio',12000,20000,2019,0),(4,'Peugeot','208',13000,18000,2018,0),(5,'Ford','Fiesta',11000,22000,2016,0),(6,'Audi','A3',25000,40000,2017,0),(7,'BMW','3 Series',28000,45000,2016,0),(8,'Mercedes-Benz','C-Class',30000,50000,2015,1),(9,'Nissan','Qashqai',20000,30000,2018,0),(10,'Hyundai','i30',14000,22000,2017,0),(11,'Kia','Sportage',22000,40000,2016,0),(12,'Volvo','XC60',32000,55000,2015,0),(13,'Citroen','C3',12500,18000,2019,0),(14,'Seat','Ibiza',11500,20000,2018,0),(15,'Skoda','Octavia',16000,30000,2017,0),(16,'Mazda','3',14000,25000,2018,0),(17,'Fiat','500',10000,15000,2017,0),(18,'Jeep','Renegade',18000,35000,2016,0),(19,'Mini','Cooper',20000,30000,2015,0);
/*!40000 ALTER TABLE `vehicules` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-26 11:04:26
