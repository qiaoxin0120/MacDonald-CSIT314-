-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: csit314
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','LeandraSchneider','EXF11KCI4IT','062-146-7341','ornare.tortor@protonmail.net'),(2,'Manager','UlyssesCarr','WGM49VWD7BM','053-790-7384','morbi.tristique@outlook.couk'),(3,'Customer','MadonnaShort','MXJ45SBQ8IG','027-838-7335','orci.donec.nibh@google.couk'),(4,'Owner','RebekahRoberson','SYM87TOB7JB','062-552-8577','nisi.cum@yahoo.com'),(5,'Staff','QuembyBryan','SBE47CEX2RH','046-874-1147','ut.tincidunt.vehicula@aol.edu'),(6,'Customer','CarterWood','OFU54VKG1WS','036-591-8466','eu.erat@outlook.couk'),(7,'Staff','ShaeleighSandoval','CSD37CXT2FL','010-748-4167','erat.neque.non@protonmail.edu'),(8,'Staff','DolanMacias','IYG51RTY0OK','098-376-2379','donec.luctus@protonmail.edu'),(9,'Customer','CarsonMooney','YDG90PWT2AL','082-936-8453','vitae.aliquet@google.org'),(10,'Customer','SkylerErickson','KDK51RKF0MD','068-819-5084','nec.enim.nunc@yahoo.edu'),(11,'Manager','GradyFarmer','DAE31FOD8VD','045-366-1250','arcu.ac@icloud.edu'),(12,'Staff','OctaviusDean','SXH57XJG6KL','056-868-8122','ornare@google.com'),(13,'Customer','AshelyBooker','TMH42VCC1FZ','006-898-4566','magna@icloud.com'),(14,'Manager','AmeliaPearson','UBN16UAI2MH','015-248-5518','ac.ipsum@yahoo.ca'),(15,'Customer','LucasBarr','CGO93XZP6LS','030-556-2566','amet@google.edu'),(16,'Staff','OttoKnowles','ECM48SSS7PH','075-870-6111','phasellus.libero.mauris@aol.com'),(17,'Staff','HaleyHood','PXC81YUF2WR','017-724-8771','sodales.elit.erat@aol.couk'),(18,'Customer','KarlyMcintosh','NTD01WWI4FV','014-643-8160','ligula.nullam@protonmail.net'),(19,'Staff','PrescottHess','ILB34UQS8PM','031-678-7682','ut.eros@google.com'),(20,'Staff','BrookeNoble','OWL35CCC6LK','017-941-6028','facilisis.suspendisse@protonmail.edu'),(21,'Manager','GageWolfe','SJT64PVZ1LS','043-648-2884','ut.eros@icloud.com'),(22,'Staff','SeanSchmidt','JGS84XPG3BT','065-830-1676','erat.vitae@protonmail.net'),(23,'Customer','JoelleCombs','EXG16ITL5VG','013-128-3821','aliquet.libero@outlook.couk'),(24,'Customer','LillithMeadows','QPZ11CDE5FD','077-922-8347','magna.a@hotmail.couk'),(25,'Customer','NolaWalter','SIT64XHG2AX','070-864-4472','elit.sed.consequat@icloud.org'),(26,'Staff','ZacharyVega','WJB61HYS7VA','021-618-1369','mollis@protonmail.net'),(27,'Customer','ReesePowell','XKJ82JIJ0PP','058-895-4237','per.conubia@aol.ca'),(28,'Customer','HasadTownsend','DDX96XMI6CC','055-951-0003','vel.faucibus@outlook.edu'),(29,'Customer','AdaraCameron','PNX68RLS4RL','047-814-8846','arcu@google.ca'),(30,'Customer','CheyennePena','FBU66PLI6IN','044-525-6075','amet.dapibus.id@protonmail.org'),(31,'Staff','JamaliaMacias','XLT30SHB2KY','008-206-8528','nec.mollis@outlook.ca'),(32,'Customer','BrianSexton','MDR42AHV6DP','078-868-2678','cum@hotmail.com'),(33,'Customer','EltonGentry','KVA83GNO6YG','017-073-5910','mattis.ornare.lectus@outlook.org'),(34,'Customer','BaxterWalsh','VBC58NOT2WX','066-772-3153','sem.molestie@yahoo.couk'),(35,'Manager','ShaineScott','RKR83ORK7NZ','067-363-0318','eu.turpis@protonmail.com'),(36,'Staff','GemmaMcleod','QPK60FNZ6VM','071-878-3886','facilisis@icloud.org'),(37,'Customer','HilelGillespie','YWH60BML8PS','045-786-6496','arcu@aol.edu'),(38,'Customer','XanthaRandolph','TQK71EHX6LC','063-915-5801','gravida.sit.amet@outlook.org'),(39,'Customer','NeroHenson','FXT21CHU1VK','084-445-4566','aenean@google.com'),(40,'Customer','FlorenceMcconnell','PCE28PDB1HW','010-329-6061','ullamcorper.magna.sed@icloud.ca'),(41,'Customer','WayneSears','SGE67ZLQ7NP','070-909-1585','dolor.fusce@google.edu'),(42,'Customer','TadHansen','IFL35TUJ1JS','016-768-2229','arcu.vivamus.sit@protonmail.edu'),(43,'Customer','BuffyGomez','TIQ39KBA2UG','077-739-2557','arcu.sed.eu@aol.couk'),(44,'Customer','BriannaStout','LEW35VBP5YF','066-176-0521','convallis.ante@hotmail.org'),(45,'Manager','SheaNichols','VYT78CPP9VX','029-871-4544','fusce.dolor@outlook.ca'),(46,'Staff','KerrySerrano','QGL36EMO7RL','049-049-4091','suspendisse.ac@outlook.com'),(47,'Customer','SawyerFrancis','FSG76SOG6KV','055-852-7374','neque@aol.org'),(48,'Customer','ShannonHansen','HCG41SFR6OX','070-517-8553','sit@hotmail.com'),(49,'Owner','ChantaleKaufman','APH85OJZ1LS','072-644-1120','praesent.eu@outlook.couk'),(50,'Customer','VirginiaHale','ZIQ83WZN0JL','032-961-4082','suspendisse.commodo@yahoo.org'),(51,'Customer','JennaCallahan','YFY66HBP1UY','092-133-1776','rutrum.non@google.ca'),(52,'Owner','CallieWyatt','LNR12FBD1IB','051-183-5405','vitae.velit@icloud.edu'),(53,'Customer','FrancescaCameron','WMQ54ERT9TY','082-641-3161','lectus.quis@yahoo.ca'),(54,'Staff','MaxwellGalloway','YTL77DBB8HK','066-959-2992','aliquam.vulputate@protonmail.ca'),(55,'Staff','HoytCarey','GRS70HLE4XA','065-483-3124','lacinia.mattis.integer@yahoo.edu'),(56,'Customer','VeronicaVillarreal','TOP43DWM2UR','048-868-8400','vulputate.dui@google.org'),(57,'Owner','XavieraBlair','BSC44LZT4FR','088-259-1533','hendrerit.donec.porttitor@yahoo.org'),(58,'Customer','EllaWatts','UYD47BIC4AP','094-285-9323','aliquam.ultrices@google.net'),(59,'Manager','TanekWolf','ZPM66HTW5VT','094-953-7811','iaculis.lacus@protonmail.net'),(60,'Owner','AndrewGordon','YBI62OLH8OL','019-326-7074','donec.dignissim.magna@google.edu'),(61,'Customer','FaithMalone','UMP55KOT1YA','071-933-4185','ligula.donec@aol.com'),(62,'Customer','MurphyMcclain','RXX36UKR1HX','011-733-5656','magna.et@google.ca'),(63,'Staff','AlfonsoLane','VRK37HJW5RZ','002-290-0774','facilisis.eget.ipsum@outlook.com'),(64,'Customer','SamsonBender','QKM26UGE0YJ','082-347-7760','diam.proin.dolor@icloud.org'),(65,'Manager','IndiaStokes','YZQ37CFH2RJ','077-954-5852','justo.proin@aol.org'),(66,'Staff','YuriCantrell','TAD64FWN4TB','074-785-0854','phasellus@hotmail.org'),(67,'Staff','BreeMcfadden','VTI13EGF7IQ','021-879-6993','cursus@hotmail.net'),(68,'Staff','XavierMaldonado','CUV87YRZ8IM','039-723-3421','phasellus.elit@aol.ca'),(69,'Customer','KeatonSalazar','QIY59GNY4ML','085-386-4178','suspendisse.sed.dolor@outlook.ca'),(70,'Customer','NathanielKeith','IQO55PSN9BQ','052-423-5369','vitae.velit.egestas@hotmail.net'),(71,'Customer','LukeGilliam','BHV20MNF4RN','024-775-3143','mi@outlook.org'),(72,'Customer','PriceWhitaker','JMW95BIJ6CO','062-365-2359','aliquam.erat@outlook.org'),(73,'Customer','LamarFry','HIX26SNR7GO','025-603-1701','id.risus@aol.couk'),(74,'Customer','BenedictLeach','HXM17RCH7KB','072-877-2840','orci@icloud.net'),(75,'Staff','CharissaPatton','FYM69HOV5GC','036-462-4612','cursus.nunc@hotmail.com'),(76,'Staff','VedaCampbell','KYN76AZP9JH','012-481-4135','cras@yahoo.net'),(77,'Customer','ClaireCabrera','TQP59MVN8ID','034-981-8691','aenean.egestas@outlook.ca'),(78,'Manager','HildaStevenson','SYL96FXM8MQ','011-384-3613','pretium.et@google.edu'),(79,'Staff','HanaeKnox','NRY32CYI7PS','082-808-1398','sed@yahoo.net'),(80,'Customer','ScarletBullock','HBP13TII2DZ','069-074-5960','aliquam@google.couk'),(81,'Customer','CameronKim','XNH59QLI3MY','040-552-9928','hymenaeos@protonmail.net'),(82,'Staff','ImaniLevy','KVL03AMF4LR','066-783-3753','quis.urna.nunc@hotmail.ca'),(83,'Customer','KatoMorales','THM31OGB3XC','059-615-1557','tincidunt.adipiscing@aol.couk'),(84,'Staff','WhoopiWeeks','IUQ34YRS7KQ','035-631-5239','eu.lacus@hotmail.ca'),(85,'Customer','JamaliaSutton','JNL67QVQ1YS','066-013-0761','lorem@outlook.edu'),(86,'Manager','ZeldaDuke','MCL92JPE4HE','065-759-5137','sapien.cras.dolor@icloud.org'),(87,'Customer','ByronMathews','OKL63YJV3YC','024-528-1747','gravida@yahoo.com'),(88,'Customer','MelindaCole','UMC41XQA9QG','097-924-6867','a.arcu@hotmail.edu'),(89,'Customer','ChaneySnider','IQO54UAL4IX','042-193-3135','sem.consequat@outlook.edu'),(90,'Customer','SawyerHuber','IDI77BLH5KK','005-921-1606','erat@hotmail.ca'),(91,'Staff','TylerGilmore','NOS13CBU8UK','077-385-6446','cras.lorem@icloud.edu'),(92,'Customer','DevinKennedy','YUH75OIN4GY','032-445-6439','leo.morbi@hotmail.com'),(93,'Staff','ThaneNolan','GNV14WEX8FS','057-271-4342','lobortis.class.aptent@hotmail.edu'),(94,'Customer','AlfonsoWatson','YVR63EHM8NH','038-590-6342','dui.fusce.diam@protonmail.edu'),(95,'Customer','LucasParker','BRL55DHJ4EV','088-741-8623','vivamus.euismod@outlook.edu'),(96,'Customer','SharonReilly','NCV73JTN4XM','062-105-0288','semper.cursus@aol.edu'),(97,'Customer','NellRiley','CXW15XPK8EZ','053-529-1670','magna@google.net'),(98,'Staff','JulianBurgess','SLT55GBW5VK','056-316-5525','mauris.non@hotmail.edu'),(99,'Customer','RahimSpencer','MYC65IXY6IB','083-548-7984','eget@hotmail.org'),(100,'Staff','BerthaChapman','QUN35DFE1PA','076-522-5528','sodales.nisi@protonmail.net');
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

-- Dump completed on 2022-04-26 20:11:37

