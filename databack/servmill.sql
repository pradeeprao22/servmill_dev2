-- MySQL dump 10.13  Distrib 5.5.52, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: servmill
-- ------------------------------------------------------
-- Server version	5.5.52-0ubuntu0.14.04.1

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
-- Table structure for table `adloginfo`
--

DROP TABLE IF EXISTS `adloginfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adloginfo` (
  `ip` varchar(30) NOT NULL,
  `browser` varchar(70) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adloginfo`
--

LOCK TABLES `adloginfo` WRITE;
/*!40000 ALTER TABLE `adloginfo` DISABLE KEYS */;
INSERT INTO `adloginfo` VALUES ('::1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Ge','2016-04-18 16:34:21'),('::1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Ge','2016-04-21 15:51:06'),('::1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Ge','2016-04-21 15:51:06'),('::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, l','2016-07-10 14:24:40'),('49.204.230.106','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, l','2016-09-02 05:58:37'),('185.38.14.215','Mozilla/5.0 (Windows NT 6.1; rv:45.0) Gecko/20100101 Firefox/45.0','2016-09-10 16:47:08'),('79.134.234.247','Mozilla/5.0 (Windows NT 6.1; rv:45.0) Gecko/20100101 Firefox/45.0','2016-09-10 16:51:57'),('78.110.162.242','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.7 (K','2016-09-10 16:52:36'),('193.107.85.62','Mozilla/5.0 (Windows NT 6.1; rv:45.0) Gecko/20100101 Firefox/45.0','2016-09-10 18:04:06');
/*!40000 ALTER TABLE `adloginfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('pradeepraoservever','serverver');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gadgetdataform`
--

DROP TABLE IF EXISTS `gadgetdataform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gadgetdataform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactnumber` varchar(12) NOT NULL,
  `dateandtime` varchar(30) NOT NULL,
  `serviceprovider` varchar(255) NOT NULL,
  `deviceinformation` varchar(255) NOT NULL,
  `devicecategory` varchar(255) NOT NULL,
  `faultdescription` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `input2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gadgetdataform`
--

LOCK TABLES `gadgetdataform` WRITE;
/*!40000 ALTER TABLE `gadgetdataform` DISABLE KEYS */;
/*!40000 ALTER TABLE `gadgetdataform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_info`
--

DROP TABLE IF EXISTS `login_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_info` (
  `memberid` int(11) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `browser` varchar(60) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_info`
--

LOCK TABLES `login_info` WRITE;
/*!40000 ALTER TABLE `login_info` DISABLE KEYS */;
INSERT INTO `login_info` VALUES (1,'127.0.0.1','Mozilla/5.0 (Windows NT 6.1; rv:6.0.2) Gecko/20100101 Firefo','2011-09-20 19:29:42');
/*!40000 ALTER TABLE `login_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `markers`
--

DROP TABLE IF EXISTS `markers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `markers`
--

LOCK TABLES `markers` WRITE;
/*!40000 ALTER TABLE `markers` DISABLE KEYS */;
INSERT INTO `markers` VALUES (4,'servmill','Khilwat',17.357922,78.470222,''),(3,'kong','Khairatabad',17.415062,78.464828,''),(5,'prao55','Koti',17.385757,78.479500,''),(6,'okiamonroll','Khairatabad',17.415062,78.464828,''),(7,'12545026','Kishan Bagh',17.355280,78.443245,''),(8,'pradeepking','Khairatabad',17.415062,78.464828,''),(9,'syamprasad','Kukatpally',17.494793,78.399643,''),(10,'pradeeprao','Koti',17.385757,78.479500,''),(11,'pradeeprao','Secunderabad',17.439930,78.498276,''),(12,'kingkong','Miyapur',17.512510,78.352226,''),(13,'pradeeprao','Karmanghat',17.340960,78.535667,''),(14,'king','Kharagpur',22.346010,87.231972,''),(15,'pradeeprao23','Kharagpur',22.346010,87.231972,''),(16,'pradeeprao','Kharagpur',22.346010,87.231972,''),(17,'pradeeprao23','Kharagpur',22.346010,87.231972,''),(18,'pradeep','Habsiguda',17.409628,78.544113,''),(19,'8609651104','Khairatabad',17.415062,78.464828,''),(20,'pradeep','Koti',17.385757,78.479500,''),(21,'pradeeprao','Hyderabad',17.385044,78.486671,''),(22,'8125450625','Hyderabad',17.385044,78.486671,''),(23,'pradeeprao','Khartoum',15.500654,32.559898,''),(24,'pradeep','Kharghar',19.047321,73.069908,''),(25,'pradeepking','Khanh Hoa Province',12.258510,109.052605,''),(26,'pradeeprao','Karnataka',15.317277,75.713890,''),(27,'pradeeprao','Kharagpur',22.346010,87.231972,''),(28,'pradeeprao','Houston',29.760427,-95.369804,''),(29,'nagarjuna','Malkajgiri Railway Station',17.448261,78.529411,''),(30,'pradeeprao','Hi-Tech City Construction',17.340601,78.520210,''),(31,'viswanadh','Bapatla',15.905897,80.471588,''),(32,'pradeepkingkong','Paris',48.856613,2.352222,''),(33,'pradeeprao','Kerala',10.850516,76.271080,''),(34,'kinkom','Georgia',32.165623,-82.900078,'');
/*!40000 ALTER TABLE `markers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `memberid` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `birthdate` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `verification` varchar(5) NOT NULL,
  `memberimg` varchar(100) NOT NULL,
  `confirmed` int(11) NOT NULL,
  `confirmcode` int(11) NOT NULL,
  `activationcode` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`memberid`)
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (36,'','Microcare','Male','microcare','micro','microcare.kgp@gmail.com','0','','Gitangjali Building','Malancha Road, Kharagpur ','yes','servmilluser.png',0,1258785,1058152),(37,'City','Cyber','Male','Cyber City','cyber','cybercity.kgp@gmail.com','0','','Stall no: 30','Malancha Super Market, Kharagpur','yes','servmilluser.png',0,126105,1158264),(38,'World','Computer','Male','Computer World','world','computerworldkgp786@gmail.com','0','','Puri Gate','IIT Main Road, Kharagpur 721302 West Bengal','yes','servmilluser.png',0,10584,136482),(39,'Center','Exide The Battery ','Male','Exide The Battery Ce','exide','thebatterycenter@gmail.com','0','','Malancha Road ','Rakhajungle Kharagpur 721302 West Bengal','yes','servmilluser.png',0,221522,2545632),(40,'Infotech ','Supreme','Male','Supreme Infotech','tech','supremekgp@rediffmail.com','0','','Shop no. F-1 ','IIT Tech Market Kharagpur 721302 West Bengal','yes','servmilluser.png',0,457548,47124563),(41,'Infotech','Aditya','Male','Aditya Infotech','info','aditya4545@gmail.com','0','','Puri Gate','IIT Main Road Kharagpur 721302 West Bengal','yes','servmilluser.png',0,78458,9584587),(42,'Zone','Computer','Male','Computer Zone','zone','','0','','Shop no. 21, Beside Bimla Swee','Tech Market, Kharagpur 721302 West Bengal ','yes','servmilluser.png',0,123456,789456),(43,'City','Computer','Male','Computer City','city','computercity.kgp@gmail.com','0','','Near IIT Main Gate','Puri Gate Kharagpur, Kharagpur-6 721302 West Bengal.','yes','servmilluser.png',0,125678,7895236),(44,'Care','Aahelee Mobile','Male','Aahelee Mobile Care','care','aaheleemobilecare@gmail.com','0','','E-10 IIT Tech Market','Kharagpur-02 Kharagpur 721302 West Bengal','yes','servmilluser.png',0,4585245,48697582),(45,'Enterprise','Chandana','Male','Chandana Enterprice','enter','','0','','IIT Tech Market, Kharagpur-02 ','Kharagpur 721302 West Bengal','yes','servmilluser.png',0,9586458,85956487),(46,'Point','Servicing','Male','Servicing Point','point','','0','','S-13 IIT Tech Market, ','IIT Kharagpur, Kharagpur-02 721302 West Bengal. ','yes','servmilluser.png',0,5858524,8569124),(47,'Re-Paring Point','Computec','Male','Computec Mobile','paring','','0','','Shop No. 106 Railway Market','Bhandari Chowk Kharagpur West Bengal','yes','servmilluser.png',0,8741587,965847),(48,'Care','Vishal Mobile','Male','Vishal Mobile Care','vishal','','0','','Shop No. 179-180 Gole Bazar ','Gupta Complex Kharagpur West Bengal ','yes','servmilluser.png',0,4587452,45236145),(49,'Services','Globe Mobile','Male','Globe Mobile Service','globe','','0','','Shop No. S-105 Gole Bazar ','Bhandari Chowr Kharagpur West Bengal','yes','servmilluser.png',0,97030498,8125450),(50,'Services','3G Mobile','Male','3G Mobile Services','3g','','0','','179/180, Gupta Complex ','Beside Alice Optical, Golebazar Kharagpur 721302 West Bengal','yes','servmilluser.png',0,81254,8524514),(58,'Communications','Swapna','','Swapana','','','9989136040','','Shop no:1-1/2/A,guttala begump','police station line,hitech city road,madhapur,hyderabad-5000','','servmilluser.png',0,0,0),(59,'','TOTOODO','','TOTOODO','1234','info@totoodo.com','04040021436','','#2-49-1,Madhapur main road','Opp.to vikram hospitals,Madhapur,Hyderabad,Telangana-500081','','servmilluser.png',0,0,0),(60,'Computers','DS','','Kumar','1234','','04065291919','','Shop No.1-40/A,H.No.1-98/90/5,','Near metro piller no.47,madhapur,hyderabad.','','servmilluser.png',0,0,0),(61,'Computers','Star','','star computers','1234','','9000014194','','Besides Chennai Shopping mall,','Besides Chennai Shopping mall,chanda nagar','','servmilluser.png',0,0,0),(63,'Adore','I','','Sahithi Reddy','1234','','+914065703333','','8-2-293/82/J3/564,Road No.92','Jubilee Hills,Hyderabad','','servmilluser.png',0,0,0),(64,'Beauty Parlour','Srilu','','K.Sridevi','1234','','9000764519','','Flat No:402,Om Sai Laxmi Resid','Opp.Ginger Court,Beside Syndicate Bank,Madhapur,hyderabad','','servmilluser.png',0,0,0),(65,'Salon','MY','','Vinod Kumar','1234','mysalonhyd@gmail.com','9885323079','','2nd Floor,Below MYGYM,Above PM','Madinaguda,Chandanagar,Hyderabad.','','servmilluser.png',0,0,0),(66,'Beauty Salon','Lakes','','Rosy','1234','','9963978179','','Plot.No.1263,Road No.36','beside:Mahalaxmi Jewellers,Above:Just Bake Jubliee Hills,Hyd','','servmilluser.png',0,0,0),(67,'Training','F45','','F45','1234','info@f45training.in','7306764545','','Level-2,Starbucks Building,Roa','Next To apollo Hospital,Jubilee Hills,Hyderabad.','','servmilluser.png',0,0,0),(68,'Solutions','Mobile','','Mobile Solutions','123','mobileprofessionals@yahoo.in','8008582915','','Sai Nagar,Ayyappa Socity Road','Madhapur,Hyderabad','','servmilluser.png',0,0,0),(69,'Electronics&Electricals','Anu','','G.Mallesh','123','','9849626658','','#2-56/33/17/1,Ayyappa Socity R','Sai Nagar,Madhapur,Hyderabad','','servmilluser.png',0,0,0),(70,'Motors','Ignite','','M.Ajay','123','','7893544893','','Road No.41,Beside Peddamma Tem','Jubilee Hills,Hyderabad.','','servmilluser.png',0,0,0),(71,'','Fernsnpetals','','K.Santosh','123','fnphitech@gmail.com','+914065705000','','Plot No.49B,1-63/4/49B,Beside ','Madhapur,Hyderabad.','','servmilluser.png',0,0,0),(75,'Value Fitnes','Talwalkars Better','','Talwalkars','123','akbals@talwalkars.net','','','Kaveri hills,Opp Mercedez Show','Jubilee Hills,Hyderabad','','servmilluser.png',0,0,0),(76,'Electrical Works','National','','National Electrical ','123','','9392486564','','Shop No.8,H.NO.2-52-1/1','Guttala Begumpet,Metro Pillor No.34,Opp.ICICI ATM,Hi-Tech Ma','','servmilluser.png',0,0,0),(77,'','WOOD ART','','Wood art','123','','9885633758','','S,No.6,H.No.2-52/1/1,Guttala B','Opp.ICICI Bank ATM & Hotel Kasani GR,Hitech City Main Road,M','','',0,0,0),(78,'','Nutrifi Clinic','','Jagadish','123','help@nutrifi.in','+914039363963','','101,163/2,Kailash Meadows','Patrika Nagar,Besides Sunshine Hospital,Hitech City,Hyderaba','','',0,0,0),(85,'','TOTOODO','','TOTOODO','123','info@totoodo.com','04040062386','','#2-108/7/2,Chanda Nagar Shop-1','Main Road Facing,Opp to khazana Jewellers,Hyderabad.  ','','',0,0,0),(86,'Technologies ','Laxmi','','Laxmi Technologies ','123','kaleemmohd786@gmail.com','9000583903','','Opp.Sai Ram Theater','P.N Yadaiah Complex,Malkajgiri,Hyderabad.','','',0,0,0),(87,'World','Mobile','','Mobile World','123','','9866024974','','Shop No.91-139 G2,Yadaiah Comp','Adj to Sai Ram Theater,Malkajgiri,Hyderabad.','','',0,0,0),(88,'Tailor','Sirisha','','Sirisha Tailors','123','','8019535693','','9-139/1','New Malkajgiri,Hyderabad.','','',0,0,0),(89,'Tailors ','Sofia ','','Sofia Tailors','123','','9247843767','','9-134/1','Opp.Sri Sai Ram Theater,Malkajgiri,Hyderabad.','','',0,0,0),(90,'nagarjuna','kalikivayi ','Male','nagarjuna','080228','nagarjuna.228@gmail.com','8019639697','15 June 1991','hanumanpet','Malkajgiri Railway Station, Malkajgiri, Secunderabad, Telang','yes','servmilluser.jpg',0,325689165,427482264),(133,'viswanadh','Reddy','Male','viswanadh','vissurebel','viswanadhbtech30@gmail.com','9000733046','25 October 1991','akbar peta','Bapatla, Andhra Pradesh, India','yes','servmilluser.jpg',0,2105025375,1434761958),(200,'pradeep','rao','','pradeep','123456','sri@gmail.com','8609651104','23/11/1993','105','hyderabad','yes','',0,0,0),(201,'','','','sriram','123456','sriram123@gmail.com','8985607161','','kukatpally','hyderabad','yes','',0,0,0),(202,'','','','kiran','343343','kiranmattaprthi343343@gmail.co','9652299497','','','','yes','',0,0,0),(204,'rao','pradeep','','pradeeprao','kingkong','pradeepraoiitkgp11@gmail.com','','','','','no','servmilluser.jpg',0,959066150,251877289);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `millfollow`
--

DROP TABLE IF EXISTS `millfollow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `millfollow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userlogged` int(11) NOT NULL,
  `userprofile` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `millfollow`
--

LOCK TABLES `millfollow` WRITE;
/*!40000 ALTER TABLE `millfollow` DISABLE KEYS */;
INSERT INTO `millfollow` VALUES (3,181,71),(4,181,86),(6,0,70),(7,0,71),(8,0,78),(11,0,70),(12,0,71),(13,0,78),(15,0,71),(16,0,78),(17,0,70);
/*!40000 ALTER TABLE `millfollow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msgnotifs`
--

DROP TABLE IF EXISTS `msgnotifs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msgnotifs` (
  `msgnotifsid` int(11) NOT NULL AUTO_INCREMENT,
  `toid` varchar(30) NOT NULL,
  `fromid` varchar(30) NOT NULL,
  `msgnotif` varchar(300) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `memberid` varchar(60) NOT NULL,
  `tomemberid` varchar(60) NOT NULL,
  PRIMARY KEY (`msgnotifsid`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msgnotifs`
--

LOCK TABLES `msgnotifs` WRITE;
/*!40000 ALTER TABLE `msgnotifs` DISABLE KEYS */;
INSERT INTO `msgnotifs` VALUES (73,'radhayalavati','pradeeprao','ok','2016-07-28 05:51:02',0,'',''),(74,'radhayalavati','pradeeprao','hello','2016-07-28 09:11:12',0,'',''),(75,'radhayalavati','pradeeprao','hello','2016-07-28 18:36:11',0,'',''),(76,'radhayalavati','pradeeprao','ok','2016-07-29 04:24:28',0,'',''),(78,'radhayalavati','pradeeprao','hello','2016-07-29 19:24:01',0,'',''),(79,'Sirisha Tailors','pradeeprao','ok ','0000-00-00 00:00:00',0,'',''),(80,'Sirisha Tailors','pradeeprao','hello','2016-09-30 08:22:19',0,'',''),(81,'sriram','pradeeprao','hello','2016-10-25 04:15:38',0,'',''),(82,'sriram','pradeeprao','hey','2016-10-27 07:48:49',0,'','');
/*!40000 ALTER TABLE `msgnotifs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `needtopay`
--

DROP TABLE IF EXISTS `needtopay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `needtopay` (
  `needtopayid` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) NOT NULL,
  `serviceid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `declined` int(11) NOT NULL,
  `dateadded` varchar(40) NOT NULL,
  PRIMARY KEY (`needtopayid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `needtopay`
--

LOCK TABLES `needtopay` WRITE;
/*!40000 ALTER TABLE `needtopay` DISABLE KEYS */;
/*!40000 ALTER TABLE `needtopay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `header` varchar(300) NOT NULL,
  `body` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `secretquestions`
--

DROP TABLE IF EXISTS `secretquestions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `secretquestions` (
  `memberid` int(11) NOT NULL,
  `question` varchar(60) NOT NULL,
  `answer` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `secretquestions`
--

LOCK TABLES `secretquestions` WRITE;
/*!40000 ALTER TABLE `secretquestions` DISABLE KEYS */;
INSERT INTO `secretquestions` VALUES (24,'Am I Gorgeous?','yes i am'),(26,'Am I Gorgeous?','yes'),(27,'Am I Gorgeous?','yes'),(29,'Name of my Pet?','dog'),(0,'Am I Gorgeous?','yes i am.'),(0,'Am I Gorgeous?','yes'),(31,'Am I Gorgeous?','yes'),(32,'Am I Gorgeous?','yes'),(33,'Am I Gorgeous?','yes'),(34,'Am I Gorgeous?','yes'),(35,'Am I Gorgeous?','yes'),(51,'Am I Gorgeous?','yes'),(52,'Name of my Pet?','dog'),(53,'Am I Gorgeous?','yes'),(54,'Am I Gorgeous?','yes'),(55,'Am I Gorgeous?','no'),(56,'Am I Gorgeous?','yes'),(57,'Am I Gorgeous?','yes'),(73,'Am I Gorgeous?','no'),(74,'Am I Gorgeous?','yes i am '),(79,'Am I Gorgeous?','yes'),(80,'Am I Gorgeous?','no'),(81,'Am I Gorgeous?','no'),(79,'Am I Gorgeous?','no'),(79,'Am I Gorgeous?','yes'),(79,'Am I Gorgeous?','yes'),(133,'Name of my Pet?','babu'),(180,'Am I Gorgeous?','yes you are'),(91,'Am I Gorgeous?','no'),(182,'Am I Gorgeous?','yes');
/*!40000 ALTER TABLE `secretquestions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servdevelop`
--

DROP TABLE IF EXISTS `servdevelop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servdevelop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servdevelop`
--

LOCK TABLES `servdevelop` WRITE;
/*!40000 ALTER TABLE `servdevelop` DISABLE KEYS */;
INSERT INTO `servdevelop` VALUES (10,'Name...','Email...','Message'),(11,'Name...','Contact number..','Message..');
/*!40000 ALTER TABLE `servdevelop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_repo`
--

DROP TABLE IF EXISTS `service_repo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_repo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) DEFAULT NULL,
  `serviceid` int(11) DEFAULT NULL,
  `dateofrepo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_repo`
--

LOCK TABLES `service_repo` WRITE;
/*!40000 ALTER TABLE `service_repo` DISABLE KEYS */;
INSERT INTO `service_repo` VALUES (1,22,42,'2016-07-10 13:37:03'),(2,22,43,'2016-07-10 13:37:12'),(3,0,55,'2016-07-10 13:50:24'),(4,0,42,'2016-07-19 11:49:18'),(5,0,43,'2016-07-19 11:49:22'),(6,0,61,'2016-07-24 05:40:38'),(7,22,60,'2016-07-24 05:42:03');
/*!40000 ALTER TABLE `service_repo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicecategories`
--

DROP TABLE IF EXISTS `servicecategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicecategories` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(50) NOT NULL,
  `catimage` varchar(100) NOT NULL,
  `categorydes` varchar(250) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicecategories`
--

LOCK TABLES `servicecategories` WRITE;
/*!40000 ALTER TABLE `servicecategories` DISABLE KEYS */;
INSERT INTO `servicecategories` VALUES (1,'AC/Fan/Cooler','',''),(2,'Auto mobile service','',''),(6,'App Developer(Android/iOS/MSN)','',''),(8,'Biographers','',''),(10,'Baby Sitting ','',''),(11,'Carpenter service','',''),(12,'Carpeting','',''),(13,'Car Washing','',''),(14,'Construction/Renovation/Remodeling','',''),(15,'Computer and Accessories ','',''),(16,'Catering Service','',''),(17,'Chef Service','',''),(18,'CCTV dealer','',''),(19,'Dance classes','',''),(20,'Driver on Demand','',''),(21,'Delivery or Transportation Service','',''),(23,'Dry Cleaning','',''),(24,'Dietician','',''),(25,'Electrical Wiring','',''),(26,'Electrical and Electronics ','',''),(28,'Exhibition','',''),(29,'Event Planner','',''),(30,'Fitness Trainer','',''),(31,'Interior Designing','',''),(32,'Internet Services','',''),(33,'Laundry Services','',''),(34,'Lawyer Services','',''),(36,'Massage Therapy','',''),(37,'Plumbing','',''),(38,'Pest Control','',''),(39,'Pet Service','',''),(40,'Physiotherapist','',''),(41,'Photography','',''),(42,'Pan Card Agent','',''),(43,'Mobiles','',''),(44,'Stitching','','');
/*!40000 ALTER TABLE `servicecategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicereport`
--

DROP TABLE IF EXISTS `servicereport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicereport` (
  `bidid` int(11) NOT NULL AUTO_INCREMENT,
  `serviceid` int(11) NOT NULL,
  `bidder` varchar(60) NOT NULL,
  `biddatetime` varchar(60) NOT NULL,
  `bidamount` varchar(300) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`bidid`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicereport`
--

LOCK TABLES `servicereport` WRITE;
/*!40000 ALTER TABLE `servicereport` DISABLE KEYS */;
INSERT INTO `servicereport` VALUES (51,32,'23','2016-04-15 05:40:32','this service is good we can trust on him..',0),(52,32,'23','2016-04-15 05:44:16','this service is good we can trust on him..',0),(53,46,'22','2016-05-22 05:14:13','this service is fine and we can use this service',0),(54,55,'22','2016-05-23 18:11:09','hello',0),(55,67,'22','2016-07-25 19:46:09','dfhjfhdjfh hdjfhdjfh',0),(56,67,'22','2016-07-28 16:51:48','this service is good',0),(57,70,'22','2016-07-28 23:45:14','ok got it',0),(58,76,'22','2016-07-30 06:05:30','this service is good',0),(59,76,'22','2016-07-30 06:05:51','this service is good',0),(60,82,'22','2016-07-31 06:00:21','this service is good',0);
/*!40000 ALTER TABLE `servicereport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `serviceid` int(11) NOT NULL AUTO_INCREMENT,
  `servicename` varchar(100) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `servicedescription` varchar(300) NOT NULL,
  `startingcost` int(11) NOT NULL,
  `serviceimage` varchar(100) NOT NULL,
  `regularprice` int(11) NOT NULL,
  `dateposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `duedate` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `sellername` varchar(30) NOT NULL,
  `sellerpayaccount` varchar(30) NOT NULL,
  `servicehits` int(10) NOT NULL,
  `location` varchar(300) NOT NULL,
  PRIMARY KEY (`serviceid`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (65,'We provide all kind of Mobile Services',15,'The Ultimate solution for mobile internet, dish TV (Hardware and Software service)',0,'servmillam.png',0,'2016-11-19 06:42:25','2016-10-05','1','Aahelee Mobile Care','aaheleemobilecare@gmail.com',216,'IIT Market, E-10, Kharagpur-02, IIT Khargpur, West Bengal.'),(67,'Mobiles sales and service center.',15,'Touchpad not working or Broken, Mobiles and Tablets screen gaurd tempered glass are available here, All Mobile Parts are available here, Mobiles and Tablets screen gaurd tempered glass are available here, Tatasky, Dish Tv, Airtel Digital Tv, Videocon D2H Services, Signal, Remot, Cable, Power.\n\n\n',0,'servmillce.png',0,'2016-11-09 01:49:36','0000-00-00','1','Chandana Enterprice','',96,'IIT Market, Kharagpur-02, IIT Khargpur, West Bengal.'),(70,'Mobile Servicing',15,'We are providing all kind of Mobile services',0,'servmillsp.png',0,'2016-11-27 18:51:17','0000-00-00','1','Servicing point','',76,'IIT Market, Kharagpur-02, S-13, IIT Khargpur, West Bengal.'),(71,'We provide mobile and computer services',15,'Mobiles services and computer services at low cost feel free to contact us',0,'detservmill.png',0,'2016-10-28 15:33:05','0000-00-00','1','Vishal Mobile Care','',48,'Shop No. 179-180 Gole Bazar Gupta Complex Kharagpur West Bengal.'),(76,'Laptops and Desktops sales and service center. Contact Service Provider.',15,'Hinges repair,\nGraphic issue,\nDisplay issue,\nHeating issue,\nGraphic card issue,\nMother Board issue,\nLaptop cleaning,Speaker repairs,\nPrinter both Ink Jet & Laser repair.',0,'servmillcw.png',0,'2016-11-27 06:00:52','0000-00-00','1','Computer World','computerworldkgp786@gmail.com',107,'Puri Gate, IIT Main Road, Kharagpur 721302 West Bengal.'),(77,'We provide repair solution for laptops and computers',15,'Laptops, Computers service and repair are available here.',0,'servmillSI.png',0,'2016-11-25 06:01:28','0000-00-00','1','Supreme Infotech','supremekgp@rediffmail.com',176,'Shop no, F-1, IIT Tech Market, Kharagpur 721302 West Bengal. '),(78,'sales and service center.',15,'Laptops and Desktops sales and service center. Contact Service Provider.',0,'servmillai.png',0,'2016-11-26 16:53:41','0000-00-00','1','Aditya Infotech','aditya4545@gmail.com',96,'IIT Main Road, Puri Gate, Kharagpur Near IIT Main Gate 721302 West Bengal.'),(79,'Laptops and Desktops sales and service center. Contact Service Provider',15,'Laptop no power problem, Laptop over heating issue, Laptop no display issue, Laptop charging issue, Graphic card issue, Laptop cleaning and maintenance, Laptop hinges repair,Screen change',0,'servmillcz.png',0,'2016-11-21 14:05:09','0000-00-00','1','Computer Zone','',99,'Shop No. 21, Beside Bimla Sweet, Tech Market, Kharagpur 721302 West Bengal. '),(80,'Laptops and Desktops sales and service center. Contact Service Provider\r\n',15,'Toner(Repair), Printer repair, Networking, CCTV, Data recovery',0,'servmillcc.png',0,'2016-11-26 08:13:54','0000-00-00','1','Computer City','computercity.kgp@gmail.com',126,'Near IIT Main Gate and Puri Gate, Kharagpur-6 721302 West Bengal. \r\n'),(81,'Computer and Mobile repairing done here ',15,'We provide mobile, computers repair and  service. ',0,'detservmill.png',0,'2016-11-22 20:20:45','0000-00-00','1','Computec Mobile Repairing','',150,'Shop no. 106 Railway Market Bhandari Chowak Kharagpur West Bengal.'),(82,'Mobile Point Sales And Service',43,'We provide all kind of mobile services including iphone blackberry.',0,'noimage.png',0,'2016-11-10 07:25:15','0000-00-00','1','Swapana Communications','',47,'Shop No: 1-1/2/A, Guttala Begumpet, Madhapur, Police Station Line, Hitech City Road, Hyderabad - 500081'),(83,'All computer services',15,'Smartphone,tablet,laptop',0,'noimage.png',0,'2016-11-22 16:45:13','0000-00-00','1','TOTOODO','',39,'#2-49-1,Madhapur main road,opp.to vikram hospitals,madhapur,Hyderabad,Telangana-500081.'),(84,'All about computers',15,'Buy,Sale,Repair',0,'noimage.png',0,'2016-11-25 17:34:45','0000-00-00','1','Kumar','',94,'Shop No.1-40/A,H.No.1-98/90/5,Sai nagar,Madhapur,Near Metro Pillar NO.47,Hyderabad.'),(85,'all types of computer services',15,'Laotop&Desktop,Motherboard.',0,'noimage.png',0,'2016-11-28 21:15:50','0000-00-00','1','','',65,'Chandanagar,Beside Chennai Shopping mall.\r\nKPHB,Bank of Maharashtra.'),(86,'Women Spa And Salon',0,'we provide all types of beauty and salon services',0,'noimage.png',0,'2016-11-18 03:45:20','0000-00-00','1','Sahithi Reddy','',58,'8-2-293/82/J3/564,Road No.92,Jubilee Hills,Hyderabad.'),(87,'beauty parlour',0,'Beauty parlour',0,'noimage.png',0,'2016-11-27 12:38:25','0000-00-00','1','K.Sridevi','',51,'Flat No:402,Om Sai Laxmi Residency,Opp:Ginger Court,Beside Syndicate Bank,Madhapur,Hyderabad.'),(88,'Salon',0,'A Family Studio for Hair And Beauty',0,'noimage.png',0,'2016-11-21 09:33:32','0000-00-00','1','Vinod Kumar','',52,'2nd Floor,Below MY GYM,Above PM Bajaj Showroom,Near RS Brothers,Madinaguda,Chandanagar,Hyderabad.'),(89,'Beauty Saloon',0,'Beauty Saloon',0,'noimage.png',0,'2016-11-28 13:54:04','0000-00-00','1','Rosy','',74,'Plot No.1263,ROad No.36,Mahalaxmi Jewellers,Above Just Bake Jubliee Hills,Hyderabad.'),(90,'Fitness Training ',30,'Fitness Training ',0,'noimage.png',0,'2016-11-18 07:43:39','0000-00-00','1','','',70,'Level-2,Starbucks Building,Road No,92,Next To Apollo Hospital,Jubilee Hills,Hyderabad.'),(91,'mobile solutions sales and services',43,'complete mobile service,all hardware&software solutions,all mobile accessories.',0,'noimage.png',0,'2016-11-26 06:01:28','0000-00-00','1','','',73,'#Sai nagar,Ayyappa Socity Road,Madhapur,Hyderabad.'),(92,'Electronics And Electricals',27,'All Electronics services ',0,'noimage.png',0,'2016-11-23 01:31:20','0000-00-00','1','G.Mallesh','',66,'#2-56/33/17/1,Ayyappa Socity Road,Sai Nagar,Madhapur,Hyderabad-81'),(93,'All Car Services',13,'We Provide Complete Car Care,Denting,Painting,Engine,Body Reparing,Servicing.',0,'noimage.png',0,'2016-11-27 11:50:05','0000-00-00','1','M.Ajay','',144,'Road No.41,Besides Peddamma Temple,Jubilee Hills,Hyderabad.'),(94,'Flower Decorations And Gifts',30,'We Provide All Types OF Decorations,artimcial And Dried Nowers,Trousseau Packing,Wedding Garlands, WE Also Deliver Nowers,cakes&Gifs.',0,'noimage.png',0,'2016-11-27 04:01:51','0000-00-00','1','K.Santosh','',119,'Plot No.49B,1-63/4/49B,Beside AMG Mercedes,Madhapur,Hyderabad'),(95,'Fitness In The World Of Fitness',30,'Gym,Cardio,Nutrition,Massage,Personal Training,Aerobics,Spinning,Reduce.',0,'noimage.png',0,'2016-11-27 07:00:13','0000-00-00','1','','',87,'1st floor Kaveri Hills,OPP.Mercedez Showroom,Jubilee Hills,Hyderabad'),(96,'All Type Of Electrical Works',27,'We Provide All Type Of Fan,Washing Machine,Table Fan,Air Coolers,Water Pump,Submersible Pump,Rewinding Repair Works.',0,'noimage.png',0,'2016-11-28 23:29:43','0000-00-00','1','Md.Khadar','',268,'Shop NO:8,H.NO:2-52-1/1,Guttala Begumpet,Metro Pillar No.34,Opp.ICICI Atm,Hi-Tech City Main Road,Madhapur,Hyderabad.'),(97,'All Type Of Wood Art',11,'Specialist in Carving Furniture,Door Interior Decorators & CNC Cutting.',0,'noimage.png',0,'2016-11-29 02:50:29','0000-00-00','1','Noor Mohammed','',84,'S.No.6,H.No.2-52/1/1,Guttala Begumpet,Opp.ICICI Bank ATM & Hotel Kasani GR,Hitech City Main Road,Madhapur,Hyderbad.'),(98,'Nutrition Personalised ',24,'We Provide All Nutrition foods',0,'noimage.png',0,'2016-11-28 05:04:52','0000-00-00','1','Jagadish','',217,'101,163/2,Kailash Meadows,Patrika Nagar,Besides Sunshine Hospital,Hitech City,Hyderabad.'),(99,'All computer,Laptop,Tablet services ',15,'We provide all computer,Laptop,Tablet services ',0,'noimage.png',0,'2016-11-26 21:21:56','0000-00-00','1','TOTOODO','',227,'#2-108/7/2,Chanda Nagar Shop-1,Main Road Facing,Opp to Khazana Jewellers,Hyderabad.'),(100,'All Desktop,Laptop,chiplevel Services,ALLNetworking Services.',15,'We provide All Desktop,Laptop,chiplevel Services,ALLNetworking Services.',0,'noimage.png',0,'2016-11-26 16:54:57','0000-00-00','1','Laxmi Technologies ','',158,'Opp to Sai Ram Theater,P.N Yadaiah Complex,Malkajgiri,Hyderabad'),(101,'Mobile\'s World ',43,'We Provide All types Of GSM,CDMA,CORDLESS Phone Services.',0,'noimage.png',0,'2016-11-28 23:00:02','0000-00-00','1','Md.Lqbal','',332,'Shop No.91-139 G2,Yadaiah Complex,Adj to Sairam Theater,Malkajgiri,Hyderabad.'),(102,'Ladies Tailor',44,'We stitch All Type Of Dress and We Are Specialist in Punjabi Dress.',0,'noimage.png',0,'2016-11-29 04:12:38','0000-00-00','1','Sirisha Tailors','',430,'9-139/1,New Malkajgiri,Hyderabad.'),(103,'Gents Tailors ',44,'We Stitch AllType Men Dress And We Are Specialists in Jeans.',0,'noimage.png',0,'2016-11-29 00:51:35','0000-00-00','1','Satyanarayana','',444,'9-134/1,Opp.Sri Sai Ram Theater,Malkajgiri,Hyderabad.');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` varchar(200) NOT NULL,
  `label` varchar(200) NOT NULL,
  `value` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES ('debug-status','Debug Status','0');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `first` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `confirmed` int(11) NOT NULL,
  `confirmcode` int(11) NOT NULL,
  `activationcode` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `watchlist`
--

DROP TABLE IF EXISTS `watchlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `watchlist` (
  `memberid` int(11) NOT NULL,
  `serviceid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `watchlist`
--

LOCK TABLES `watchlist` WRITE;
/*!40000 ALTER TABLE `watchlist` DISABLE KEYS */;
INSERT INTO `watchlist` VALUES (1,2);
/*!40000 ALTER TABLE `watchlist` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-29  9:25:50
