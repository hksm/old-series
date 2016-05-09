CREATE DATABASE  IF NOT EXISTS `tvbank` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `tvbank`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: tvbank
-- ------------------------------------------------------
-- Server version	5.6.22-log

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
-- Table structure for table `assistido`
--

DROP TABLE IF EXISTS `assistido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assistido` (
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_serie` int(11) NOT NULL,
  `season` int(11) NOT NULL,
  `episodio` int(11) NOT NULL,
  `assistido` tinyint(3) unsigned DEFAULT NULL,
  `nota` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`usuario`,`id_serie`,`season`,`episodio`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assistido`
--

LOCK TABLES `assistido` WRITE;
/*!40000 ALTER TABLE `assistido` DISABLE KEYS */;
INSERT INTO `assistido` VALUES ('marcos',1,1,1,1,8),('marcos',1,1,4,0,NULL),('marcos',1,1,3,1,NULL),('marcos',1,1,2,1,NULL),('marcos',1,1,10,0,NULL),('marcos',1,1,9,1,NULL),('marcos',1,1,8,1,7),('marcos',1,1,7,0,NULL),('marcos',1,1,6,0,10),('marcos',1,1,5,0,NULL),('marcos',12,1,3,1,10),('marcos',12,1,2,1,9),('marcos',12,1,1,1,9),('marcos',12,2,6,1,10),('marcos',12,2,5,1,9),('marcos',12,2,4,1,10),('marcos',12,2,3,1,9),('marcos',12,2,2,1,9),('marcos',12,2,1,1,8),('andresa',9,1,23,1,9),('andresa',9,1,22,1,8),('andresa',9,1,21,1,8),('andresa',9,1,20,1,10),('andresa',9,1,19,1,8),('andresa',9,1,18,1,9),('andresa',9,1,17,1,9),('andresa',9,1,16,1,8),('andresa',9,1,15,1,8),('andresa',9,1,14,1,9),('andresa',9,1,13,1,10),('andresa',9,1,12,1,9),('andresa',9,1,11,1,8),('andresa',9,1,10,1,8),('andresa',9,1,9,1,8),('andresa',9,1,8,1,7),('andresa',9,1,7,1,8),('andresa',9,1,6,1,6),('andresa',9,1,5,1,5),('andresa',9,1,4,1,6),('andresa',9,1,3,1,7),('andresa',9,1,2,1,9),('andresa',9,1,1,1,8),('andresa',10,2,23,1,9),('andresa',10,2,22,1,8),('andresa',10,2,21,1,7),('andresa',10,2,20,1,6),('andresa',10,2,19,1,7),('andresa',10,2,18,1,8),('andresa',10,2,17,1,7),('andresa',10,2,16,1,6),('andresa',10,2,15,1,8),('andresa',10,2,14,1,7),('andresa',10,2,13,1,7),('andresa',10,2,12,1,8),('andresa',10,2,11,1,7),('andresa',10,2,10,1,8),('andresa',10,2,9,1,7),('andresa',10,2,8,1,9),('andresa',10,2,7,1,8),('andresa',10,2,6,1,7),('andresa',10,2,5,1,7),('andresa',10,2,4,1,9),('andresa',10,2,3,1,8),('andresa',10,2,2,1,8),('andresa',10,2,1,1,9),('andresa',10,3,23,1,7),('andresa',10,3,22,1,7),('andresa',10,3,21,1,7),('andresa',10,3,20,1,7),('andresa',10,3,19,1,7),('andresa',10,3,18,1,7),('andresa',10,3,17,1,7),('andresa',10,3,16,1,7),('andresa',10,3,15,1,7),('andresa',10,3,14,1,7),('andresa',10,3,13,1,7),('andresa',10,3,12,1,7),('andresa',10,3,11,1,7),('andresa',10,3,10,1,7),('andresa',10,3,9,1,7),('andresa',10,3,8,1,7),('andresa',10,3,7,1,7),('andresa',10,3,6,1,7),('andresa',10,3,5,1,7),('andresa',10,3,4,1,7),('andresa',10,3,3,1,7),('andresa',10,3,2,1,7),('andresa',10,3,1,1,7),('andresa',10,4,4,1,7),('andresa',10,4,3,1,6),('andresa',10,4,2,1,8),('andresa',10,4,1,1,6),('andresa',10,1,23,1,7),('andresa',10,1,22,1,7),('andresa',10,1,21,1,7),('andresa',10,1,20,1,7),('andresa',10,1,19,1,7),('andresa',10,1,18,1,7),('andresa',10,1,17,1,7),('andresa',10,1,16,1,7),('andresa',10,1,15,1,7),('andresa',10,1,14,1,7),('andresa',10,1,13,1,7),('andresa',10,1,12,1,7),('andresa',10,1,11,1,7),('andresa',10,1,10,1,7),('andresa',10,1,9,1,7),('andresa',10,1,8,1,7),('andresa',10,1,7,1,7),('andresa',10,1,6,1,7),('andresa',10,1,5,1,7),('andresa',10,1,4,1,7),('andresa',10,1,3,1,7),('andresa',10,1,2,1,7),('andresa',10,1,1,1,7),('andresa',11,1,6,1,9),('andresa',11,1,5,1,9),('andresa',11,1,4,1,9),('andresa',11,1,3,1,9),('andresa',11,1,2,1,9),('andresa',11,1,1,1,9),('andresa',12,1,3,1,9),('andresa',12,1,2,1,9),('andresa',12,1,1,1,9),('andresa',12,2,6,1,9),('andresa',12,2,5,1,9),('andresa',12,2,4,1,9),('andresa',12,2,3,1,9),('andresa',12,2,2,1,9),('andresa',12,2,1,1,9),('andresa',1,1,10,1,9),('andresa',1,1,9,1,9),('andresa',1,1,8,1,9),('andresa',1,1,7,1,9),('andresa',1,1,6,1,9),('andresa',1,1,5,1,9),('andresa',1,1,4,1,9),('andresa',1,1,3,1,9),('andresa',1,1,2,1,9),('andresa',1,1,1,1,9),('andresa',13,1,8,0,NULL),('andresa',13,1,7,0,NULL),('andresa',13,1,6,0,NULL),('andresa',13,1,5,0,NULL),('andresa',13,1,4,0,NULL),('andresa',13,1,3,0,NULL),('andresa',13,1,2,0,NULL),('andresa',13,1,1,1,9),('andresa',10,4,7,1,9),('andresa',10,4,6,1,9),('andresa',10,4,5,1,9),('andresa',5,3,20,1,9),('andresa',5,3,19,1,9),('andresa',5,3,18,1,9),('andresa',5,3,17,1,9),('andresa',5,3,16,1,9),('andresa',5,3,15,1,9),('andresa',5,3,14,1,9),('andresa',5,3,13,1,9),('andresa',5,3,12,1,9),('andresa',5,3,11,1,9),('andresa',5,3,10,1,9),('andresa',5,3,9,1,9),('andresa',5,3,8,1,9),('andresa',5,3,7,1,9),('andresa',5,3,6,1,9),('andresa',5,3,5,1,9),('andresa',5,3,4,1,9),('andresa',5,3,3,1,9),('andresa',5,3,2,1,9),('andresa',5,3,1,1,9),('andresa',5,1,22,1,10),('andresa',5,1,21,1,10),('andresa',5,1,20,1,10),('andresa',5,1,19,1,10),('andresa',5,1,18,1,10),('andresa',5,1,17,1,10),('andresa',5,1,16,1,10),('andresa',5,1,15,1,10),('andresa',5,1,14,1,10),('andresa',5,1,13,1,10),('andresa',5,1,12,1,10),('andresa',5,1,11,1,10),('andresa',5,1,10,1,10),('andresa',5,1,9,1,10),('andresa',5,1,8,1,10),('andresa',5,1,7,1,10),('andresa',5,1,6,1,10),('andresa',5,1,5,1,10),('andresa',5,1,4,1,10),('andresa',5,1,3,1,10),('andresa',5,1,2,1,10),('andresa',5,1,1,1,10),('andresa',5,2,22,1,10),('andresa',5,2,21,1,10),('andresa',5,2,20,1,10),('andresa',5,2,19,1,10),('andresa',5,2,18,1,10),('andresa',5,2,17,1,10),('andresa',5,2,16,1,10),('andresa',5,2,15,1,10),('andresa',5,2,14,1,10),('andresa',5,2,13,1,10),('andresa',5,2,12,1,10),('andresa',5,2,11,1,10),('andresa',5,2,10,1,10),('andresa',5,2,9,1,10),('andresa',5,2,8,1,10),('andresa',5,2,7,1,10),('andresa',5,2,6,1,10),('andresa',5,2,5,1,10),('andresa',5,2,4,1,10),('andresa',5,2,3,1,10),('andresa',5,2,2,1,10),('andresa',5,2,1,1,10),('diuli',5,1,22,1,9),('diuli',5,1,21,1,9),('diuli',5,1,20,1,9),('diuli',5,1,19,1,9),('diuli',5,1,18,1,9),('diuli',5,1,17,1,9),('diuli',5,1,16,1,9),('diuli',5,1,15,1,9),('diuli',5,1,14,1,9),('diuli',5,1,13,1,9),('diuli',5,1,12,1,9),('diuli',5,1,11,1,9),('diuli',5,1,10,1,9),('diuli',5,1,9,1,9),('diuli',5,1,8,1,9),('diuli',5,1,7,1,9),('diuli',5,1,6,1,9),('diuli',5,1,5,1,9),('diuli',5,1,4,1,9),('diuli',5,1,3,1,9),('diuli',5,1,2,1,9),('diuli',5,1,1,1,9),('diuli',5,2,22,1,9),('diuli',5,2,21,1,9),('diuli',5,2,20,1,9),('diuli',5,2,19,1,9),('diuli',5,2,18,1,9),('diuli',5,2,17,1,9),('diuli',5,2,16,1,9),('diuli',5,2,15,1,9),('diuli',5,2,14,1,9),('diuli',5,2,13,1,9),('diuli',5,2,12,1,9),('diuli',5,2,11,1,9),('diuli',5,2,10,1,9),('diuli',5,2,9,1,9),('diuli',5,2,8,1,9),('diuli',5,2,7,1,9),('diuli',5,2,6,1,9),('diuli',5,2,5,1,9),('diuli',5,2,4,1,9),('diuli',5,2,3,1,9),('diuli',5,2,2,1,9),('diuli',5,2,1,1,9),('diuli',5,3,20,1,10),('diuli',5,3,19,1,10),('diuli',5,3,18,1,10),('diuli',5,3,17,1,10),('diuli',5,3,16,1,10),('diuli',5,3,15,1,10),('diuli',5,3,14,1,10),('diuli',5,3,13,1,10),('diuli',5,3,12,1,10),('diuli',5,3,11,1,10),('diuli',5,3,10,1,10),('diuli',5,3,9,1,10),('diuli',5,3,8,1,10),('diuli',5,3,7,1,10),('diuli',5,3,6,1,10),('diuli',5,3,5,1,10),('diuli',5,3,4,1,10),('diuli',5,3,3,1,10),('diuli',5,3,2,1,10),('diuli',5,3,1,1,10),('andresa',17,1,10,1,10),('andresa',17,1,9,1,10),('andresa',17,1,8,1,10),('andresa',17,1,7,1,10),('andresa',17,1,6,1,10),('andresa',17,1,5,1,10),('andresa',17,1,4,1,10),('andresa',17,1,3,1,10),('andresa',17,1,2,1,10),('andresa',17,1,1,1,10),('andresa',17,2,7,0,NULL),('andresa',17,2,6,0,NULL),('andresa',17,2,5,0,NULL),('andresa',17,2,4,0,NULL),('andresa',17,2,3,0,NULL),('andresa',17,2,2,1,8),('andresa',17,2,1,1,9);
/*!40000 ALTER TABLE `assistido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `canal`
--

DROP TABLE IF EXISTS `canal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `canal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `canal`
--

LOCK TABLES `canal` WRITE;
/*!40000 ALTER TABLE `canal` DISABLE KEYS */;
INSERT INTO `canal` VALUES (1,'HBO','Estados Unidos'),(2,'Netflix','Estados Unidos'),(3,'AMC','Estados Unidos'),(4,'ABC','Estados Unidos'),(5,'NBC','Estados Unidos'),(6,'FOX','Estados Unidos'),(7,'CBS','Estados Unidos'),(8,'USA','Estados Unidos'),(9,'The CW','Estados Unidos'),(11,'Channel 4','Reino Unido'),(10,'BBC','Reino Unido'),(14,'ABC AU','Austrália'),(15,'BBC Three','Reino Unido'),(16,'Showtime','Estados Unidos'),(17,'FX','Estados Unidos');
/*!40000 ALTER TABLE `canal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `episodio`
--

DROP TABLE IF EXISTS `episodio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `episodio` (
  `id_serie` int(11) NOT NULL,
  `season` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_exibicao` date DEFAULT NULL,
  PRIMARY KEY (`id_serie`,`season`,`numero`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `episodio`
--

LOCK TABLES `episodio` WRITE;
/*!40000 ALTER TABLE `episodio` DISABLE KEYS */;
INSERT INTO `episodio` VALUES (1,1,1,'Winter is Coming','2011-04-17'),(1,1,2,'The Kingsroad','2011-04-24'),(1,1,3,'Lord Snow','2011-05-01'),(1,1,4,'Cripples, Bastards, and Broken Things ','2011-05-08'),(1,1,5,'The Wolf and the Lion','2011-05-15'),(1,1,6,'A Golden Crown','2011-05-22'),(1,1,7,'You Win or You Die','2011-05-29'),(1,1,8,'The Pointy End','2011-06-05'),(1,1,9,'Baelor','2011-06-12'),(1,1,10,'Fire and Blood','2011-06-19'),(2,1,1,'eps1.0_hellofriend.mov','2015-06-24'),(2,1,2,'eps1.1_ones-and-zer0es.mpeg','2015-07-01'),(2,1,3,'eps1.2_d3bug.mkv','2015-07-08'),(2,1,4,'eps1.3_da3m0ns.mp4','2015-07-15'),(2,1,5,'eps1.4_3xpl0its.wmv','2015-07-22'),(2,1,6,'eps1.5_br4ve-trave1er.asf','2015-07-29'),(2,1,7,'eps1.6_v1ew-s0urce.flv','2015-08-05'),(2,1,8,'eps1.7_wh1ter0se.m4v','2015-08-12'),(2,1,9,'eps1.8_m1rr0r1ng.qt','2015-08-19'),(2,1,10,'eps1.9_zer0-day.avi','2015-09-02'),(6,1,1,'Yesterday\'s Jam','2006-02-03'),(7,1,1,'Episode 1','2014-09-21'),(7,1,2,'Episode 2','2014-09-28'),(7,1,3,'Episode 3','2014-10-05'),(7,1,4,'Episode 4','2014-10-12'),(7,1,5,'Episode 5','2014-10-19'),(7,1,6,'Episode 6','2014-10-26'),(8,1,1,'Episode 1','2013-01-15'),(8,1,2,'Episode 2','2013-01-22'),(8,1,3,'Episode 3','2013-01-29'),(8,1,4,'Episode 4','2013-02-05'),(8,1,5,'Episode 5','2013-02-12'),(8,1,6,'Episode 19','2013-02-19'),(8,2,1,'Episode 1','2014-07-14'),(8,2,2,'Episode 2','2014-07-15'),(8,2,3,'Episode 3','2014-07-22'),(8,2,4,'Episode 4','2014-07-29'),(8,2,5,'Episode 5','2014-08-05'),(8,2,6,'Episode 6','2014-08-12'),(9,1,1,'Pilot','2014-10-07'),(9,1,2,'Fastest Man Alive','2014-10-14'),(9,1,3,'Things You Can\'t Outrun','2014-10-21'),(9,1,4,'Going Rogue','2014-10-28'),(9,1,5,'Plastique','2014-11-04'),(9,1,6,'The Flash Is Born','2014-11-11'),(9,1,7,'Power Outage','2014-11-18'),(9,1,8,'Flash vs. Arrow (1)','2014-11-25'),(9,1,9,'The Man in the Yellow Suit','2014-12-02'),(9,1,10,'Revenge of the Rogues','2014-12-09'),(9,1,11,'The Sound and the Fury','2014-12-16'),(9,1,12,'Crazy for You','2014-12-23'),(9,1,13,'The Nuclear Man','2014-12-30'),(9,1,14,'Fallout','2015-01-06'),(9,1,15,'Out of Time','2015-01-13'),(9,1,16,'Rogue Time','2015-01-20'),(9,1,17,'Tricksters','2015-01-27'),(9,1,18,'All-Star Team Up','2015-02-03'),(9,1,19,'Who Is Harrison Wells?','2015-02-10'),(9,1,20,'The Trap','2015-02-17'),(9,1,21,'Grodd Lives','2015-05-05'),(9,1,22,'Rogue Air','2015-05-12'),(9,1,23,'Fast Enough','2015-05-19'),(9,2,1,'The Man Who Saved Central City','2015-10-06'),(9,2,2,'Flash of Two Worlds','2015-10-13'),(9,2,3,'Family of Rogues','2015-10-20'),(9,2,4,'The Fury of Firestorm','2015-10-27'),(10,1,1,'Pilot','2012-10-10'),(10,1,2,'Honor Thy Father','2012-10-17'),(10,1,3,'Lone Gunmen','2012-10-24'),(10,1,4,'An Innocent Man','2012-10-31'),(10,1,5,'Damaged','2012-11-07'),(10,1,6,'Legacies','2012-11-14'),(10,1,7,'Muse of Fire','2012-11-21'),(10,1,8,'Vendetta','2012-11-28'),(10,1,9,'Year\'s End','2012-12-05'),(10,1,10,'Burned','2012-12-12'),(10,1,11,'Trust But Verify','2012-12-19'),(10,1,12,'Vertigo','2012-12-26'),(10,1,13,'Betrayal','2013-01-02'),(10,1,14,'The Odyssey','2013-01-09'),(10,1,15,'Dodger','2013-01-16'),(10,1,16,'Dead to Rights','2013-01-23'),(10,1,17,'The Huntress Returns','2013-01-30'),(10,1,18,'Salvation','2013-02-06'),(10,1,19,'Unfinished Business','2013-02-13'),(10,1,20,'Home Invasion','2013-02-20'),(10,1,21,'The Undertaking','2013-02-27'),(10,1,22,'Darkness on the Edge of Town','2013-03-06'),(10,1,23,'Sacrifice','2013-03-13'),(10,2,1,'City of Heroes','2013-10-09'),(10,2,2,'Identity','2013-10-16'),(10,2,3,'Broken Dolls','2013-10-23'),(10,2,4,'Crucible','2013-10-30'),(10,2,5,'League of Assassins','2013-11-06'),(10,2,6,'Keep Your Enemies Closer','2013-11-13'),(10,2,7,'State v. Queen','2013-11-20'),(10,2,8,'The Scientist','2013-11-27'),(10,2,9,'Three Ghosts','2013-12-04'),(10,2,10,'Blast Radius','2013-12-11'),(10,2,11,'Blind Spot','2013-12-18'),(10,2,12,'Tremors','2013-12-25'),(10,2,13,'Heir to the Demon','2014-01-01'),(10,2,14,'Time of Death','2014-01-08'),(10,2,15,'The Promise','2014-01-15'),(10,2,16,'Suicide Squad','2014-01-22'),(10,2,17,'Birds of Prey','2014-01-29'),(10,2,18,'Deathstroke','2014-02-05'),(10,2,19,'The Man Under the Hood','2014-02-12'),(10,2,20,'Seeing Red','2014-02-19'),(10,2,21,'City of Blood','2014-02-26'),(10,2,22,'Streets of Fire','2014-03-05'),(10,2,23,'Unthinkable','2014-03-12'),(10,3,1,'The Calm','2014-10-08'),(10,3,2,'Sara','2014-10-15'),(10,3,3,'Corto Maltese','2014-10-22'),(10,3,4,'The Magician','2014-10-29'),(10,3,5,'The Secret Origin of Felicity Smoak','2014-11-05'),(10,3,6,'Guilty','2014-11-12'),(10,3,7,'Draw Back Your Bow','2014-11-19'),(10,3,8,'The Brave and the Bold (2)','2014-11-26'),(10,3,9,'The Climb','2014-12-10'),(10,3,10,'Left Behind','2014-12-17'),(10,3,11,'Midnight City','2014-12-24'),(10,3,12,'Uprising','2014-12-31'),(10,3,13,'Canaries','2015-01-07'),(10,3,14,'The Return','2015-01-14'),(10,3,15,'Nanda Parbat','2015-01-21'),(10,3,16,'The Offer','2015-01-28'),(10,3,17,'Suicidal Tendencies','2015-02-04'),(10,3,18,'Public Enemy','2015-02-11'),(10,3,19,'Broken Arrow','2015-02-18'),(10,3,20,'The Fallen','2015-02-25'),(10,3,21,'Al Sah-him','2015-03-04'),(10,3,22,'This Is Your Sword','2015-03-11'),(10,3,23,'My Name Is Oliver Queen','2015-03-18'),(10,4,1,'Green Arrow','2015-10-07'),(10,4,2,'The Candidate','2015-10-14'),(10,4,3,'Restoration','2015-10-21'),(10,4,4,'Beyond Redemption','2015-10-28'),(11,1,1,'Pilot','2015-09-22'),(11,1,2,'Hell Week','2015-09-29'),(11,1,3,'Chainsaw','2015-10-06'),(11,1,4,'Haunted House','2015-10-13'),(11,1,5,'Pumpkin Patch','2015-10-20'),(11,1,6,'Seven Minutes in Hell','2015-10-27'),(12,1,1,'Episode 1','2013-03-17'),(12,1,2,'Episode 2','2013-03-24'),(12,1,3,'Episode 3','2013-03-31'),(12,2,1,'Episode 1','2013-04-07'),(12,2,2,'Episode 2','2013-04-14'),(12,2,3,'Episode 3','2013-04-21'),(12,2,4,'Episode 4','2013-04-28'),(12,2,5,'Episode 5','2013-05-05'),(12,2,6,'Episode 6','2013-05-12'),(13,1,1,'Night Work','2014-05-11'),(13,1,2,'SÃ©ance','2014-05-18'),(13,1,3,'Resurrection','2014-05-25'),(13,1,4,'Demimonde','2014-06-01'),(13,1,5,'Closer Than Sisters','2014-06-08'),(13,1,6,'What Death Can Join Together','2014-06-15'),(13,1,7,'Possession','2014-06-22'),(13,1,8,'Grand Guignol','2014-06-29'),(13,2,1,'Fresh Hell','2015-05-03'),(13,2,2,'Verbis Diablo','2015-05-10'),(13,2,3,'The Nightcomers','2015-05-17'),(13,2,4,'Evil Spirits in Heavenly Places','2015-05-24'),(13,2,5,'Above the Vaulted Sky','2015-05-31'),(13,2,6,'Glorious Horrors','2015-06-07'),(13,2,7,'Little Scorpion','2015-06-14'),(13,2,8,'Memento Mori','2015-06-21'),(13,2,9,'And Hell Itself My Only Foe','2015-06-28'),(13,2,10,'And They Were Enemies','2015-07-05'),(1,2,1,'The North Remembers','2012-04-01'),(1,2,2,'The Night Lands','2012-04-08'),(1,2,3,'What is Dead May Never Die','2012-04-15'),(1,2,4,'Garden of Bones','2012-04-22'),(1,2,5,'The Ghost of Harrenhal','2012-04-29'),(1,2,6,'The Old Gods and the New','2012-05-06'),(1,2,7,'A Man Without Honor','2012-05-13'),(1,2,8,'The Prince of Winterfell','2012-05-20'),(1,2,9,'Blackwater','2012-05-27'),(1,2,10,'Valar Morghulis','2012-06-03'),(1,3,1,'Valar Dohaeris','2013-03-31'),(1,3,2,'Dark Wings, Dark Words','2013-04-07'),(1,3,3,'Walk of Punishment','2013-04-14'),(1,3,4,'And Now His Watch Is Ended','2013-04-21'),(1,3,5,'Kissed by Fire','2013-04-28'),(1,3,6,'The Climb','2013-05-05'),(1,3,7,'The Bear and the Maiden Fair','2013-05-12'),(1,3,8,'Second Sons','2013-05-19'),(1,3,9,'The Rains of Castamere','2013-05-26'),(1,3,10,'Mhysa','2013-06-02'),(1,4,1,'Two Swords','2014-04-06'),(1,4,2,'The Lion and the Rose','2014-04-13'),(1,4,3,'Breaker of Chains','2014-04-20'),(1,4,4,'Oathkeeper','2014-04-27'),(1,4,5,'First of His Name','2014-05-04'),(1,4,6,'The Laws of Gods and Men','2014-05-11'),(1,4,7,'Mockingbird','2014-05-18'),(1,4,8,'The Mountain and the Viper','2014-05-25'),(1,4,9,'The Watchers on the Wall','2014-06-01'),(1,4,10,'The Children','2014-06-08'),(1,5,1,'The Wars to Come','2015-04-12'),(1,5,2,'The House of Black and White','2015-04-19'),(1,5,3,'High Sparrow','2015-04-26'),(1,5,4,'Sons of the Harpy','2015-05-03'),(1,5,5,'Kill the Boy','2015-05-10'),(1,5,6,'Unbowed, Unbent, Unbroken','2015-05-17'),(1,5,7,'The Gift','2015-05-24'),(1,5,8,'Hardhome','2015-05-31'),(1,5,9,'The Dance of Dragons','2015-06-07'),(1,5,10,'Mother\'s Mercy','2015-06-14'),(3,1,1,'Pilot','2009-09-22'),(3,1,2,'Stripped','2009-09-29'),(3,1,3,'Home','2009-10-06'),(3,1,4,'Fixed','2009-10-13'),(3,1,5,'Crash','2009-10-20'),(3,1,6,'Conjugal','2009-10-27'),(3,1,7,'Unorthodox','2009-11-03'),(3,1,8,'Unprepared','2009-11-10'),(3,1,9,'Threesome','2009-11-24'),(3,1,10,'Lifeguard','2009-12-01'),(3,1,11,'Infamy','2009-12-08'),(3,1,12,'Painkiller','2009-12-15'),(3,1,13,'Bad','2009-12-22'),(3,1,14,'Hi','2009-12-29'),(3,1,15,'Bang','2010-01-05'),(3,1,16,'Fleas','2010-01-12'),(3,1,17,'Heart','2010-01-19'),(3,1,18,'Doubt','2010-01-26'),(3,1,19,'Boom','2010-02-02'),(3,1,20,'Mock','2010-02-09'),(3,1,21,'Unplugged','2010-02-16'),(3,1,22,'Hybristophilia','2010-02-23'),(3,1,23,'Running','2010-03-02'),(3,2,1,'Taking Control','2010-09-28'),(3,2,2,'Double Jeopardy','2010-10-05'),(3,2,3,'Breaking Fast','2010-10-12'),(3,2,4,'Cleaning House','2010-10-19'),(3,2,5,'VIP Treatment','2010-10-26'),(3,2,6,'Poisoned Pill','2010-11-02'),(3,2,7,'Bad Girls','2010-11-09'),(3,2,8,'On Tap','2010-11-16'),(3,2,9,'Nine Hours','2010-11-23'),(3,2,10,'Breaking Up','2010-11-30'),(3,2,11,'Two Courts','2010-12-07'),(3,2,12,'Silly Season','2010-12-14'),(3,2,13,'Real Deal','2010-12-21'),(3,2,14,'Net Worth','2010-12-28'),(3,2,15,'Silver Bullet','2011-01-04'),(3,2,16,'Great Firewall','2011-01-11'),(3,2,17,'Ham Sandwich','2011-01-18'),(3,2,18,'Killer Song','2011-01-25'),(3,2,19,'Wrongful Termination','2011-02-01'),(3,2,20,'Foreign Affairs','2011-02-08'),(3,2,21,'In Sickness','2011-02-15'),(3,2,22,'Getting Off (1)','2011-02-22'),(3,2,23,'Closing Arguments (2)','2011-03-01'),(3,3,1,'A New Day','2011-09-25'),(3,3,2,'The Death Zone','2011-10-02'),(3,3,3,'Get a Room','2011-10-09'),(3,3,4,'Feeding the Rat','2011-10-16'),(3,3,5,'Marthas and Caitlins','2011-10-23'),(3,3,6,'Affairs of State','2011-10-30'),(3,3,7,'Executive Order 13224','2011-11-06'),(3,3,8,'Death Row Tip','2011-11-13'),(3,3,9,'Whiskey Tango Foxtrot','2011-11-20'),(3,3,10,'Parenting Made Easy','2011-11-27'),(3,3,11,'What Went Wrong','2011-12-04'),(3,3,12,'Alienation of Affection','2011-12-11'),(3,3,13,'Bitcoin for Dummies','2011-12-18'),(3,3,14,'Another Ham Sandwich','2011-12-25'),(3,3,15,'Live from Damascus','2012-01-01'),(3,3,16,'After the Fall','2012-01-08'),(3,3,17,'Long Way Home','2012-01-15'),(3,3,18,'Gloves Come Off','2012-01-22'),(3,3,19,'Blue Ribbon Panel','2012-01-29'),(3,3,20,'Pants on Fire','2012-02-05'),(3,3,21,'The Penalty Box','2012-02-12'),(3,3,22,'The Dream Team','2012-02-19'),(3,4,1,'I Fought the Law','2012-09-30'),(3,4,2,'And the Law Won','2012-10-07'),(3,4,3,'Two Girls, One Code','2012-10-14'),(3,4,4,'Don\'t Haze Me, Bro','2012-10-21'),(3,4,5,'Waiting for the Knock','2012-10-28'),(3,4,6,'The Art of War','2012-11-04'),(3,4,7,'Anatomy of a Joke','2012-11-11'),(3,4,8,'Here Comes the Judge','2012-11-18'),(3,4,9,'A Defense of Marriage','2012-11-25'),(3,4,10,'Battle of the Proxies','2012-12-02'),(3,4,11,'Boom De Yah Da','2012-12-09'),(3,4,12,'Je Ne Sais What?','2012-12-16'),(3,4,13,'The Seven Day Rule','2012-12-23'),(3,4,14,'Red Team/Blue Team','2012-12-30'),(3,4,15,'Going for the Gold','2013-01-06'),(3,4,16,'Runnin\' with the Devil','2013-01-13'),(3,4,17,'Invitation to an Inquest','2013-01-20'),(3,4,18,'Death of a Client','2013-01-27'),(3,4,19,'The Wheels of Justice','2013-02-03'),(3,4,20,'Rape: A Modern Perspective','2013-02-10'),(3,4,21,'A More Perfect Union','2013-02-17'),(3,4,22,'What\'s in the Box?','2013-02-24'),(3,5,1,'Everything Is Ending','2013-09-29'),(3,5,2,'The Bit Bucket','2013-10-06'),(3,5,3,'A Precious Commodity','2013-10-13'),(3,5,4,'Outside the Bubble','2013-10-20'),(3,5,5,'Hitting the Fan','2013-10-27'),(3,5,6,'The Next Day','2013-11-03'),(3,5,7,'The Next Week','2013-11-10'),(3,5,8,'The Next Month','2013-11-17'),(3,5,9,'Whack-a-Mole','2013-11-24'),(3,5,10,'The Decision Tree','2013-12-01'),(3,5,11,'Goliath and David','2013-12-08'),(3,5,12,'We, the Juries','2013-12-15'),(3,5,13,'Parallel Construction, Bitches','2013-12-22'),(3,5,14,'A Few Words','2013-12-29'),(3,5,15,'Dramatics, Your Honor','2014-01-05'),(3,5,16,'The Last Call','2014-01-12'),(3,5,17,'A Material World','2014-01-19'),(3,5,18,'All Tapped Out','2014-01-26'),(3,5,19,'Tying the Knot','2014-02-02'),(3,5,20,'The Deep Web','2014-02-09'),(3,5,21,'The One Percent','2014-02-16'),(3,5,22,'A Weird Year','2014-02-23'),(3,6,1,'The Line','2014-09-21'),(3,6,2,'Trust Issues','2014-09-28'),(3,6,3,'Dear God','2014-10-05'),(3,6,4,'Oppo Research','2014-10-12'),(3,6,5,'Shiny Objects','2014-10-19'),(3,6,6,'Old Spice','2014-10-26'),(3,6,7,'Message Discipline','2014-11-02'),(3,6,8,'Red Zone','2014-11-09'),(3,6,9,'Sticky Content','2014-11-16'),(3,6,10,'The Trial','2014-11-23'),(3,6,11,'Hail Mary','2014-11-30'),(3,6,12,'The Debate','2014-12-07'),(3,6,13,'Dark Money','2014-12-14'),(3,6,14,'Mind\'s Eye','2014-12-21'),(3,6,15,'Open Source','2014-12-28'),(3,6,16,'Red Meat','2015-01-04'),(3,6,17,'Undisclosed Recipients','2015-01-11'),(3,6,18,'Loser Edit','2015-01-18'),(3,6,19,'Winning Ugly','2015-01-25'),(3,6,20,'The Deconstruction','2015-02-01'),(3,6,21,'Don\'t Fail','2015-02-08'),(3,6,22,'Wanna Partner?','2015-02-15'),(4,1,1,'Chapter','2013-02-01'),(4,1,2,'Chapter 2','2013-02-01'),(4,1,3,'Chapter 3','2013-02-01'),(4,1,4,'Chapter 4','2013-02-01'),(4,1,5,'Chapter 5','2013-02-01'),(4,1,6,'Chapter 6','2013-02-01'),(4,1,7,'Chapter 7','2013-02-01'),(4,1,8,'Chapter 8','2013-02-01'),(4,1,9,'Chapter 9','2013-02-01'),(4,1,10,'Chapter 10','2013-02-01'),(4,1,11,'Chapter 11','2013-02-01'),(4,1,12,'Chapter 12','2013-02-01'),(4,1,13,'Chapter 13','2013-02-01'),(4,2,1,'Chapter 14','2014-02-14'),(4,2,2,'Chapter 15','2014-02-14'),(4,2,3,'Chapter 16','2014-02-14'),(4,2,4,'Chapter 17','2014-02-14'),(4,2,5,'Chapter 18','2014-02-14'),(4,2,6,'Chapter 19','2014-02-14'),(4,2,7,'Chapter 20','2014-02-14'),(4,2,8,'Chapter 21','2014-02-14'),(4,2,9,'Chapter 22','2014-02-14'),(4,2,10,'Chapter 23','2014-02-14'),(4,2,11,'Chapter 24','2014-02-14'),(4,2,12,'Chapter 25','2014-02-14'),(4,2,13,'Chapter 26','2014-02-14'),(4,3,1,'Chapter 27','2015-02-27'),(4,3,2,'Chapter 28','2015-02-27'),(4,3,3,'Chapter 29','2015-02-27'),(4,3,4,'Chapter 30','2015-02-27'),(4,3,5,'Chapter 31','2015-02-27'),(4,3,6,'Chapter 32','2015-02-27'),(4,3,7,'Chapter 33','2015-02-27'),(4,3,8,'Chapter 34','2015-02-27'),(4,3,9,'Chapter 35','2015-02-27'),(4,3,10,'Chapter 36','2015-02-27'),(4,3,11,'Chapter 37','2015-02-27'),(4,3,12,'Chapter 38','2015-02-27'),(4,3,13,'Chapter 39','2015-02-27'),(5,1,1,'Pilot','2004-09-22'),(5,1,2,'Credit Where Credit\'s Due','2004-09-29'),(5,1,3,'Meet John Smith','2004-10-06'),(5,1,4,'The Wrath of Con','2004-10-13'),(5,1,5,'You Think You Know Somebody','2004-10-20'),(5,1,6,'Return of the Kane','2004-10-27'),(5,1,7,'The Girl Next Door','2004-11-03'),(5,1,8,'Like a Virgin','2004-11-10'),(5,1,9,'Drinking the Kool-Aid','2004-11-17'),(5,1,10,'An Echolls Family Christmas','2004-11-24'),(5,1,11,'Silence of the Lamb','2004-12-01'),(5,1,12,'Clash of the Tritons','2004-12-08'),(5,1,13,'Lord of the Bling','2004-12-15'),(5,1,14,'Mars vs. Mars','2004-12-22'),(5,1,15,'Ruskie Business','2004-12-29'),(5,1,16,'Betty and Veronica','2005-01-05'),(5,1,17,'Kanes and Abel\'s','2005-01-12'),(5,1,18,'Weapons of Class Destruction','2005-01-19'),(5,1,19,'Hot Dogs','2005-01-26'),(5,1,20,'M.A.D.','2005-02-02'),(5,1,21,'A Trip to the Dentist','2005-02-09'),(5,1,22,'Leave It to Beaver','2005-02-16'),(5,2,1,'Normal is the Watchword','2005-09-28'),(5,2,2,'Driver Ed','2005-10-05'),(5,2,3,'Cheatty Cheatty Bang Bang','2005-10-12'),(5,2,4,'Green-Eyed Monster','2005-10-19'),(5,2,5,'Blast From the Past','2005-10-26'),(5,2,6,'Rat Saw God','2005-11-02'),(5,2,7,'Nobody Puts Baby in a Corner','2005-11-09'),(5,2,8,'Ahoy Mateys!','2005-11-16'),(5,2,9,'My Mother, the Fiend','2005-11-23'),(5,2,10,'One Angry Veronica','2005-11-30'),(5,2,11,'Donut Run','2005-12-07'),(5,2,12,'Rashard and Wallace Go to White Castle','2005-12-14'),(5,2,13,'Ain\'t No Magic Mountain High Enough','2005-12-21'),(5,2,14,'Versatile Toppings','2005-12-28'),(5,2,15,'The Quick and the Wed','2006-01-04'),(5,2,16,'The Rapes of Graff','2006-01-11'),(5,2,17,'Plan B','2006-01-18'),(5,2,18,'I am God','2006-01-25'),(5,2,19,'Nevermind the Buttocks','2006-02-01'),(5,2,20,'Look Who\'s Stalking','2006-02-08'),(5,2,21,'Happy Go Lucky','2006-02-15'),(5,2,22,'Not Pictured','2006-02-22'),(5,3,1,'Welcome Wagon','2006-10-03'),(5,3,2,'My Big Fat Greek Rush Week','2006-10-10'),(5,3,3,'Wichita Linebacker (a.k.a Friday Night Sleights)','2006-10-17'),(5,3,4,'Charlie Don\'t Surf','2006-10-24'),(5,3,5,'President Evil','2006-10-31'),(5,3,6,'Hi, Infidelity','2006-11-07'),(5,3,7,'Of Vice and Men','2006-11-14'),(5,3,8,'Lord of the Pi\'s','2006-11-21'),(5,3,9,'Spit & Eggs','2006-11-28'),(5,3,10,'Show Me the Monkey','2006-12-05'),(5,3,11,'Poughkeepsie, Tramps, and Thieves','2006-12-12'),(5,3,12,'There\'s Got to Be a Morning After Pill','2006-12-19'),(5,3,13,'Postgame Mortem','2006-12-26'),(5,3,14,'Mars, Bars','2007-01-02'),(5,3,15,'Papas\'s Cabin','2007-01-09'),(5,3,16,'Un-American Graffiti','2007-01-16'),(5,3,17,'Debasement Tapes','2007-01-23'),(5,3,18,'I Know What You\'ll Do Next Summer','2007-01-30'),(5,3,19,'Weevils Wobble But They Don\'t Go Down','2007-02-06'),(5,3,20,'The Bitch is Back','2007-02-13'),(3,7,1,'Bond','2015-10-04'),(3,7,2,'Innocents','2015-10-11'),(3,7,3,'Cooked','2015-10-18'),(3,7,4,'Taxed','2015-10-25'),(3,7,5,'Payback','2015-11-01'),(3,7,6,'Lies','2015-11-08'),(3,7,7,'Driven','2015-11-15'),(3,7,8,'Restraint','2015-11-22'),(10,4,5,'Haunted','2015-11-04'),(10,4,6,'Lost Souls','2015-11-11'),(10,4,7,'Brotherhood','2015-11-18'),(10,4,8,'Legends of Yesterday (2)','2015-12-02'),(10,4,9,'Dark Waters','2015-12-09'),(10,4,10,'Blood Debts','2016-01-20'),(10,4,11,'A.W.O.L.','2016-01-27'),(9,2,5,'The Darkness and the Light','2015-11-03'),(9,2,6,'Enter Zoom','2015-11-10'),(9,2,7,'Gorilla Warfare','2015-11-17'),(9,2,8,'Legends of Today (1)','2015-12-01'),(9,2,9,'Running to Stand Still','2015-12-08'),(15,1,1,'Run','2015-09-27'),(15,1,2,'America','2015-10-04'),(15,1,3,'Cover','2015-10-11'),(15,1,4,'Kill','2015-10-18'),(15,1,5,'Found','2015-10-25'),(15,1,6,'God','2015-11-01'),(15,1,7,'Go','2015-11-08'),(15,1,8,'Over','2015-11-15'),(15,1,9,'Guilty','2015-11-29'),(14,1,1,'Episode 1','2010-05-04'),(14,1,2,'Episode 2','2010-05-11'),(14,1,3,'Episode 3','2010-05-18'),(14,1,4,'Episode 4','2010-05-25'),(14,1,5,'Episode 5','2010-06-01'),(14,1,6,'Episode 6','2010-06-08'),(14,2,1,'Episode 1','2011-06-14'),(14,2,2,'Episode 2','2011-06-21'),(14,2,3,'Episode 3','2011-06-28'),(14,2,4,'Episode 4','2011-07-05'),(14,3,1,'Episode 1','2013-07-02'),(14,3,2,'Episode 2','2013-07-09'),(14,3,3,'Episode 3','2013-07-16'),(14,3,4,'Episode 4','2013-07-23'),(14,4,1,'Episode 1','2015-12-17'),(14,4,2,'Episode 2','2015-12-17'),(11,1,7,'Beware of Young Girls','2015-11-03'),(11,1,8,'Mommie Dearest','2015-11-10'),(11,1,9,'Ghost Stories','2015-11-17'),(11,1,10,'Thanksgiving','2015-11-24'),(16,1,1,'Limbic Resonance','2015-06-05'),(16,1,2,'I Am Also a We','2015-06-05'),(16,1,3,'Smart Money Is on the Skinny Bitch','2015-06-05'),(16,1,4,'What\'s Going On?','2015-06-05'),(16,1,5,'Art Is Like Religion','2015-06-05'),(16,1,6,'Demons','2015-06-05'),(16,1,7,'W. W. N. Double D?','2015-06-05'),(16,1,8,'We Will All Be Judged By the Courage of Our Hearts','2015-06-05'),(16,1,9,'Death Doesn\'t Let You Say Goodbye','2015-06-05'),(16,1,10,'What Is Human?','2015-06-05'),(16,1,11,'Just Turn the Wheel and the Future Changes','2015-06-05'),(16,1,12,'I Can\'t Leave Her','2015-06-05'),(17,1,1,'The Crocodile\'s Dilemma','2014-04-15'),(17,1,2,'The Rooster Prince','2014-04-22'),(17,1,3,'A Muddy Road','2014-04-29'),(17,1,4,'Eating the Blame','2014-05-06'),(17,1,5,'The Six Ungraspables','2014-05-13'),(17,1,6,'Buridan\'s Ass','2014-05-20'),(17,1,7,'Who Shaves the Barber?','2014-05-27'),(17,1,8,'The Heap','2014-06-03'),(17,1,9,'A Fox, a Rabbit, and a Cabbage','2014-06-10'),(17,1,10,'Morton\'s Fork','2014-06-17'),(17,2,1,'Waiting for Dutch','2015-10-12'),(17,2,2,'Before the Law','2015-10-19'),(17,2,3,'The Myth of Sisyphus','2015-10-26'),(17,2,4,'Fear and Trembling','2015-11-02'),(17,2,5,'The Gift of the Magi','2015-11-09'),(17,2,6,'Rhinoceros','2015-11-16'),(17,2,7,'Did You Do This? No, You Did It!','2015-11-23'),(17,2,8,'Loplop','2015-11-30'),(17,2,9,'The Castle','2015-12-07'),(17,2,10,'Palindrome','2015-12-14');
/*!40000 ALTER TABLE `episodio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grade` (
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_serie` int(11) NOT NULL,
  PRIMARY KEY (`usuario`,`id_serie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade`
--

LOCK TABLES `grade` WRITE;
/*!40000 ALTER TABLE `grade` DISABLE KEYS */;
INSERT INTO `grade` VALUES ('andresa',5),('andresa',9),('andresa',10),('andresa',11),('andresa',12),('andresa',17),('diuli',5),('marcos',1),('marcos',3),('marcos',5),('marcos',6),('marcos',12);
/*!40000 ALTER TABLE `grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serie`
--

DROP TABLE IF EXISTS `serie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_canal` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `inicio` int(11) NOT NULL,
  `fim` int(11) DEFAULT NULL,
  `sinopse` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serie`
--

LOCK TABLES `serie` WRITE;
/*!40000 ALTER TABLE `serie` DISABLE KEYS */;
INSERT INTO `serie` VALUES (1,1,'Game of Thrones','Renovada',2011,NULL,'Série baseada nos livros de George R. R. Martin, que conta a saga de sete nobres famílias em luta pelo controle da mítica terra de Westeros, dividida depois de uma guerra. Num cenário que lembra a Europa medieval, reis, rainhas, cavaleiros e renegados usam todos os meios em nome do poder.'),(4,2,'House of Cards','Renovada',2013,NULL,'Remake de uma série da BBC dos anos 90, House of Cards tem como protagonista Frank Underwood (Kevin Spacey), um político que lidera a bancada majoritária da Câmara dos Representantes dos Estados Unidos. Underwood fica decepcionado quando descobre que não ocupará o cargo de Secretário de Estado da nova gestão, posto que foi prometido anteriormente a ele, pelo agora recém-eleito presidente. Em vez de aceitar a derrota, Frank decide usar seu conhecimento sobre os bastidores da políticas para orquestrar sua vingança.'),(3,7,'The Good Wife','Em exibição',2009,NULL,'Julianna Margulies, vencedora do Emmy, do Globo de Ouro e do SAG Award, é Alicia Florrick, a obstinada esposa de um procurador público que caiu em desgraça. Após o tumultuado escândalo político e sexual de seu marido, Alicia toma as rédeas de sua família e de sua vida. Enquanto cria os dois filhos adolescentes, ela retoma sua carreira como advogada, que abandonou quando se tornou esposa de um político.\r\nContratada pela empresa de um antigo colega de faculdade, as habilidades de Florrick são colocadas à prova quando ela reingressa nos tribunais após treze anos e encara afiados oponentes de 20 e poucos anos. Alicia está decidida a construir um novo começo para seus filhos e para si mesma.'),(2,8,'Mr. Robot','Renovada',2015,NULL,'Elliot (Rami Malek) é um jovem programador que trabalha como engenheiro de segurança virtual durante o dia na Companhia Allsafe, e como hacker vigilante durante a noite. Elliot se vê numa encruzilhada quando o líder (Christian Slater) de um misterioso grupo de hacker o recruta para destruir a Evil Corp que o mesmo é pago para proteger. Motivado pelas suas crenças pessoais, ele luta para resistir à chance de destruir os CEOs da multinacional que ele acredita estarem controlando - e destruindo - o mundo.'),(5,9,'Veronica Mars','Finalizada',2004,2007,'null'),(6,11,'The IT Crowd','Finalizada',2006,2010,NULL),(7,14,'The Code','Renovada',2014,NULL,NULL),(8,11,'Utopia','Finalizada',2013,2014,NULL),(14,10,'Luther','Renovada',2010,NULL,'A história gira em torno do detetive John Luther, da polícia de Londres. Luther está de volta ao trabalho após ter se afastado ao sofrer uma crise emocional durante as investigações que o levaram à captura de um assassino em série de crianças. Agora, ele tenta manter o equilíbrio mental para manter seu emprego e seu casamento com Zoe. Dedicado, obsessivo e possessivo, Luther pode se tornar violento em sua determinação em encontrar o criminoso, questões que o levam a um ponto crítico em seu casamento com a jovem que conheceu quando ainda era estudante.'),(15,4,'Quantico','Em exibição',2015,NULL,'Um grupo bastante diversificado de recrutas chega à base do FBI em Quântico para ser treinado. Eles são os melhores, mais brilhantes e mais testados. Parece impossível que um deles seja suspeito de ser a grande mente por trás do maior ataque à Nova York desde 11 de setembro.'),(9,9,'The Flash','Em exibição',2014,NULL,NULL),(10,9,'Arrow','Em exibição',2012,NULL,NULL),(11,6,'Scream Queens','Em exibição',2015,NULL,NULL),(12,15,'In The Flesh','Finalizada',2013,2014,NULL),(13,16,'Penny Dreadful','Hiatus',2014,NULL,NULL),(16,2,'Sense8','Renovada',2015,NULL,'Após um evento peculiar com uma misteriosa mulher chamada ANGÉLICA, oito pessoas, que não se conhecem, ficam interligadas mentalmente e precisam lidar com os perigos de suas novas vidas. Um disparo. Uma morte. Um instante no tempo em que oito mentes em seis continentes são interligadas para sempre. Oito pessoas vivem suas vidas, segredos e ameaças como uma. São pessoas comuns, renascidas com um mesmo inimigo e destino.'),(17,17,'Fargo','Em exibição',2014,NULL,'Esta é uma adaptação do filme Fargo de Joel e Ethan Coen, lançado em 1996. Com roteiro de Noah Hawley (My Generation), a história traz personagens diferentes em relação ao filme. Billy Bob Thornton é Lorne Malvo, um andarilho que chega em uma pequena cidade do interior dos EUA. Lá ele entra em contato com Lester Nygaard (Martin Freeman, de Sherlock), um vendedor de seguros dominado pela esposa, que Lorne logo passa a manipular.');
/*!40000 ALTER TABLE `serie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prioridade` int(11) NOT NULL,
  `data_cadastro` date NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('admin','21232f297a57a5a743894a0e4a801fc3','Administrador','admin@admin.com',1,'2015-10-05'),('marcos','81dc9bdb52d04dc20036dbd8313ed055','Marcos Henkes','marcoshenkes@gmail.com',0,'2015-10-15'),('andresa','6be0eeffe0d7fa63f16587514566e719','Andresa','andresa@hotmail.com',0,'2015-11-01'),('diuli','48bde7b72145fe2344e53c6ae23a2b4c','Diuli Keiti da Luz Tiscoski','diuli@gmail.com',0,'2015-11-05'),('moderador','100a452278bbd0fb2a448df97de0ffd1','Moderador','mod@admin.com',1,'2015-10-28'),('teste','81dc9bdb52d04dc20036dbd8313ed055','Usuário','dsad',0,'2015-10-30');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-26 20:38:25
