-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: thebrandchimp_primed
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blogimage` varchar(255) DEFAULT NULL,
  `blogdate` varchar(255) DEFAULT NULL,
  `blogcontent` varchar(2000) DEFAULT NULL,
  `blogcategory` varchar(100) DEFAULT NULL,
  `blogshort` varchar(100) DEFAULT NULL,
  `blogtitle` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (10,'panshot1.png','2024-03-15','fffffdddkkkk',NULL,'fff','testing',NULL);
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `subcat` varchar(255) DEFAULT 'No',
  `pimage` varchar(100) DEFAULT NULL,
  `types` varchar(100) DEFAULT NULL,
  `subhead` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (56,'Wedding','Active','No',NULL,NULL,NULL),(57,'Milestones','Active','No',NULL,NULL,NULL),(58,'Lifestyle','Active','No',NULL,NULL,NULL),(59,'Headshots','Active','No',NULL,NULL,NULL);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `codeigniter_register`
--

DROP TABLE IF EXISTS `codeigniter_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `codeigniter_register` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL,
  `coupon` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Active',
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codeigniter_register`
--

LOCK TABLES `codeigniter_register` WRITE;
/*!40000 ALTER TABLE `codeigniter_register` DISABLE KEYS */;
INSERT INTO `codeigniter_register` VALUES (23,'Zubair','venkat@gmail.com','e10adc3949ba59abbe56e057f20f883e','06e543a4d7c4b98728d49583340fec41','yes',NULL,'9895728445','Active','hyd',NULL,NULL,NULL);
/*!40000 ALTER TABLE `codeigniter_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homeprojects`
--

DROP TABLE IF EXISTS `homeprojects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `homeprojects` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `totalbuildings` varchar(50) DEFAULT NULL,
  `unitsold` varchar(50) DEFAULT NULL,
  `available` varchar(50) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `pimage` varchar(100) DEFAULT NULL,
  `urlt` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homeprojects`
--

LOCK TABLES `homeprojects` WRITE;
/*!40000 ALTER TABLE `homeprojects` DISABLE KEYS */;
INSERT INTO `homeprojects` VALUES (1,'RRC Phase I','15101 Ronald Reagan Blvd, Leander, TX 78641','10','32','27','retail','primed2.jpg','https://demo.thebrandchimp.com/primed/homecontroller/projectdetails/5'),(2,'RRC Phase II','15101 Ronald Reagan Blvd, Leander, TX 78641','2','21','15','retail','primed3.jpg','https://demo.thebrandchimp.com/primed/homecontroller/projectdetails/6'),(3,'Centro Plaza ','14300 Ronald Reagan Blvd, Cedar Park, TX 78641','12','22','7','retail','4.jpg','https://demo.thebrandchimp.com/primed/homecontroller/projectdetails/3'),(5,'Splur Plaza','2085 Highway 183, Leander, TX 78641','7','10','29','flex','1.jpg','https://demo.thebrandchimp.com/primed/homecontroller/projectdetails/4'),(6,'POW Leander','15901 Ronald Reagan Blvd, Leander, TX 78641','5','41','21','flex','IMG_99091.jpg','https://demo.thebrandchimp.com/primed/homecontroller/projectdetails/7'),(7,'POW Lewisville Phase I','2601 State Hwy 121, Lewisville, TX 75067','5','64','7','flex','71.jpg','https://demo.thebrandchimp.com/primed/homecontroller/projectdetails/1'),(8,'POW Lewisville Phase II','2601 TX-121, Lewisville, TX 75056','2','12','11','flex','8.jpg','https://demo.thebrandchimp.com/primed/homecontroller/projectdetails/2'),(10,'Rio Ranch 1 Acre Lots','3150 CR 258, Liberty Hill, TX 78642','0','36','19','plots','10_-1.jpg','https://demo.thebrandchimp.com/primed/homecontroller/projectdetails/9'),(11,'Rio Ranch Commercial Lots','3150 CR 258, Liberty Hill, TX 78642','0','5','13','plots','11.jpg','https://demo.thebrandchimp.com/primed/homecontroller/projectdetails/8');
/*!40000 ALTER TABLE `homeprojects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `productname` varchar(1000) DEFAULT NULL,
  `productid` varchar(255) DEFAULT NULL,
  `productsize` varchar(255) DEFAULT NULL,
  `jrp` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `orderid` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Processing',
  `quantity` varchar(255) DEFAULT NULL,
  `customerid` varchar(255) DEFAULT NULL,
  `cancel` varchar(255) DEFAULT NULL,
  `deposit` varchar(255) DEFAULT NULL,
  `tid` varchar(255) DEFAULT NULL,
  `orderstatus` varchar(255) DEFAULT NULL,
  `dater` varchar(255) DEFAULT NULL,
  `chest` varchar(255) DEFAULT NULL,
  `waist` varchar(255) DEFAULT NULL,
  `adhaar` varchar(255) DEFAULT NULL,
  `ordereddate` varchar(100) NOT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (92,'925 Silver Gents Ring','129',NULL,'4160',NULL,'Zubair','9895728','web.zubairnazaroliyat@gmail.com','Hyderabad','93407','6050.5','Out For Delivery','1','',NULL,NULL,NULL,NULL,'2023-04-24',NULL,NULL,NULL,'','670120','Tel'),(93,'925 Silver Ladies Ring ','126',NULL,'650',NULL,'Zubair','9895728','web.zubairnazaroliyat@gmail.com','Hyderabad','93407','6050.5','Received','1','',NULL,NULL,NULL,NULL,'2023-04-24',NULL,NULL,NULL,'','670120','Tel'),(94,'Test','183',NULL,'319',NULL,'Zubair','9396563882','web.zubairnazaroliyat@gmail.com','Hyderabad','57463','1334.95','Processing','1','',NULL,NULL,NULL,NULL,'2023-05-22',NULL,NULL,NULL,'','670120','Tel');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pc`
--

DROP TABLE IF EXISTS `pc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pc` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pc`
--

LOCK TABLES `pc` WRITE;
/*!40000 ALTER TABLE `pc` DISABLE KEYS */;
INSERT INTO `pc` VALUES (24,'Appetizers Non-Vegetarian'),(25,'Appetizers Vegetarian'),(26,'Beverages'),(27,'Biryani, Fried Rice & More'),(28,'Breads'),(29,'Chaats'),(30,'Cocktails Platters'),(31,'Desserts'),(32,'Dosa and More'),(33,'Main Course Non-Vegetarian'),(34,'Main Course Vegetarian'),(35,'Pastas'),(36,'Side Orders'),(37,'Tandoori Specials'),(38,'Wraps');
/*!40000 ALTER TABLE `pc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `mrp` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `pimage` varchar(100) DEFAULT NULL,
  `pc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (345,'Buffalo Wings 8 piece','13.99','Chicken wings, ranch dressing, hot sauce, honey, butter.','4','Buffalo_Wings.jpg','24'),(346,'Spicy chicken samosa 2 piece','6.99','Fried pastry with a savory filling of spiced chicken, onions and peas.\r\n','4','Spicy_chicken_samosas.jpg','24'),(347,'Chilli Chicken','13.99','Fried boneless chicken cubes tossed with pepper, Chilies, spices and herbs.','4','Chilli_Chicken.jpg','24'),(348,'Chicken 65','13.99','Fried boneless chicken with spices.','4','Chicken_65.jpg','24'),(349,'Chicken Lollipop','13.99','Rice flour, chili sauce, garam masala, spring onions, vinegar.','4','Chicken_Lollipop.jpg','24'),(350,'Family Buffalo Wings 24 piece','29.99','Chicken wings, ranch dressing, hot sauce, honey, butter.','4','Family_Buffalo_Wings.jpg','24'),(351,'Peri Peri Chicken Wings','13.99','Chicken wings, ranch dressing, hot sauce, honey, butter.','4','Peri_Peri_Chicken_Wings.jpg','24'),(352,'Chicken Manchurian','13.99','Chicken sauteed with chopped onion, capsicum, garlic and chili sauce.','4','Chicken_Manchurian.jpg','24'),(353,'Chicken Pakoda','13.99','Deep fried boneless chicken coated with chick peas batter and spices.','4','Chicken_Pakoda.jpg','24'),(354,'Chili Shrimp','15.99','Fried shrimp tossed with pepper, chilies, spices and herbs.','4','Chili_Shrimp.jpg','24'),(355,'Fish 65','15.99','Boneless Fish marinated in spices and then batter fried.','4','Fish_65.jpg','24'),(356,'Shrimp 65','15.99','Fried shrimp with spices.','4','Shrimp_65.jpg','24'),(357,'Goat Sukha','15.99','Bone goat sauteed with onions and spices.','4','Goat_Sukha.jpg','24'),(358,'Samosa 2 piece','4.99','Fried pastry with a savory filling of spiced potatoes, onions and peas.','4','Samosa.jpg','25'),(359,'Gobi Manchurian','12.99','Fried Cauliflower florets sauteed in chopped onion, capsicum, garlic, with soy and chili sauce.','4','Gobi_Manchurian.jpg','25'),(360,'Mirchi Bajji 5 piece','10.99','Deep fried green chili fritters made with gram flour.','4','Mirchi_Bajji.jpg','25'),(361,'Onion Pakoda','10.99','Crisp golden potato, onion bites cooked with spices in a gram flour batter.','4','Onion_Pakoda.jpg','25'),(362,'Cut Mirchi','10.99','Chopped mirchi bajji deep fried.','4','Cut_Mirchi.jpg','25'),(363,'Chilli Paneer','13.99','Batter fried Paneer cubes tossed with onion, capsicum, garlic, and green chilies.','4','Chili_Paneer.jpg','25'),(364,'Gobi 65','12.99','Batter fried Cauliflower florets with spices.','4','Gobi_65.jpg','25'),(365,'French Fries','5.99','These are deep-fried, very thin, salted slices of potato that are usually served at room temperature.','4','French_Fries.jpg','25'),(366,'Paneer 65','13.99','Batter fried paneer with spices.','4','Paneer_65.jpg','25'),(367,'Mango Lassi','3.99','Blend of Yogurt, water, spices and mango fruit.','4','Mango_Lassi.jpg','26'),(368,'Diet Coke Soda - Soft Drink','2','Diet Coke Soda Soft Drink, 12 fl oz Can.','4','Diet_Coke.jpg','26'),(369,'Falooda','8.99','Sabja seeds, vanilla ice cream, chilled milk, fruit jelly, rose syrup.','4','Falooda.jpg','26'),(370,'Sprite - Soft Drink','2','Sprite Soda Cans, 12 fl oz Can.','4','Sprite.jpg','26'),(371,'Bottled Water','2','Bottled water, 16.9 fl oz.','4','Water_Bottle.jpg','26'),(372,'Rose Milk','6.99','A rose by any other name would smell as sweet. But our rose milk is the sweetest around.','4','Rose_Milk.jpg','26'),(373,'Coffee','3.99','Roasted Indian coffee beans boiled in hot water and milk.','4','Coffee.jpg','26'),(374,'Tea','3.99','Hot beverage made with Tea leaves and Milk.','4','Tea.jpg','26'),(375,'Chicken Dum Biryani','11.99','Flavored basmati rice cooked with chicken, herbs, spices and butter.','4','Chicken_Dum_BIryani.jpg','27'),(376,'Goat Dum Biryani','15.99','Bone goat meat cooked with Basmati rice.','4','Goat_Dum_Biryani.jpg','27'),(377,'Egg Fried Rice','10.99','Basmati rice seasoned with vegetables and egg.','4','Egg_Fried_Rice.jpg','27'),(378,'Singapore Noodles','10.99','Noodles seasoned with vegetables.','4','Singapore_Noodles.jpg','27'),(379,'Bisibele Bath','10.99','Rice cooked with lentil and garden fresh vegetables.','4','Bisibele_Bath.jpg','27'),(380,'Chicken Egg Fried Rice','13.99','Basmati rice seasoned with vegetables, scrambled egg and Chicken.','4','Chicken_Fried_Rice.jpg','27'),(381,'Veg Biryani','10.99','Basmati rice cooked with vegetables.','4','Veg_Biryani.jpg','27'),(382,'Veg Fried Rice','10.99','Basmati rice seasoned with vegetables.','4','Veg_Fried_Rice.jpg','27'),(383,'Chicken egg Noodles','14.99','Noodles seasoned with Chicken and vegetables.','4','Chicken_Egg_Noodles.jpg','27'),(384,'Butter Naan','3.99','Fresh baked tandoori bread with butter.','4','Butter_Naan.jpg','28'),(385,'Garlic Naan','4.99','Fresh baked tandoori bread tossed with garlic.','4','Garlic_Naan.jpg','28'),(386,'Plain Naan','3.49','Fresh baked tandoori bread.','4','Plain_Naan.jpg','28'),(387,'Bread Basket','9.99','Combo of Butter Naan, Plain Garlic Naan.','4','Bread_Basket.jpg','28'),(388,'Chilli Naan','4.99','Fresh baked tandoori bread with butter and added fresh green Chillis, its very hot.','4','Chilli_Naan.jpg','28'),(389,'Butter Roti','3.99','Fresh baked whole wheat flour bread.','4','Butter_Roti.jpg','28'),(390,'Samosa Chaat','7.99','Chopped samosa garnished with chickpeas, yogurt, mint and tamarind chutney.','4','Samosa_Chaat.jpg','29'),(392,'Fish Cocktails Platters','13.99','Combo of Samosa, Lollipop, Veg Spring Roll and Fish Pakoda.','4','Fish_Cocktails_Platters.jpg','30'),(393,'Chicken Cocktails Platters','13.99','Combo of Samosa, Lollipop, Veg Spring Roll and Chicken Pakoda.','4','Chicken_Cocktails_Platters.jpg','30'),(394,'Gulab Jamun 3 piece','5.99','Dry milk dumplings fried and soaked in sugar syrup.','4','Gulab_Jamun_2.jpg','31'),(395,'Carrot Halwa','5.99','Carrot based sweet dessert pudding made with grated carrot, sugar, milk and ghee.','4','Carrot_halwa.jpg','31'),(397,'Rasmalai 3 piece','5.99','Cottage Cheese Dumplings Soaked In Sweetened thick Milk Flavored With Saffron & Cardamom.','4','Rasmalai.jpg','31'),(398,'Masala Dosa','13.99','Crepe made with rice batter and served with potato curry.','4','Masala_Dosa.jpg','32'),(399,'Rava Masala Dosa','15.99','Crepe made with suji batter served with potato curry.','4','Rava_Masala_Dosa.jpg','32'),(400,'Andhra Masala Dosa','13.99','Crepe layered with Andhra spicy paste and served with potato curry.','4','Andhra_Masala_Dosa.jpg','32'),(401,'Idli 4 piece','8.99','Steamed rice cake.','4','idli.jpg','32'),(402,'Idli Vada Combo','8.99','Rice cake and fried lentil donut.','4','Idli_Vada_Combo.jpg','32'),(403,'Sambar Idli 2 piece','8.99','Button Idli in Sambar.','4','Sambar_Idli.jpg','32'),(404,'Vada 2 piece','8.99','Fried lentil donut.','4','Vada.jpg','32'),(405,'Sambar Vada  2 piece','8.99','Fried lentil donut dipped in a sambar.','4','Sambar_Vada.jpg','32'),(406,'Poori 2 piece','12.99','Fried unleavened dough of whole wheat.','4','Poori.jpg','32'),(407,'Channa Batura 2 piece','12.99','Fried dough of whole wheat served with chick peas curry.','4','Channa_Batura.jpg','32'),(408,'Egg Bhurji','10.99','Scrambled eggs sauteed with onions, green chilies, tomato and spices.','4','Egg_Bhurji.jpg','32'),(409,'Omelette','10.99','Beaten eggs cooked with onion, tomato and green chilies.','4','Omelette.jpg','32'),(410,'Plain Uttappam','11.99','Thick pancake made with rice batter.','4','Plain_Uttappam.jpg','32'),(411,'Paneer Uttappam','14.99','Thick pancake with rice batter and Paneer.','4','Paneer_Uttappam.jpg','32'),(412,'Onion Uttappam','13.99','Thick pancake with rice batter onions and Chilies.','4','Onion_Uttappam.jpg','32'),(413,'Ghee Roast Dosa','12.99','Crispy crepe made with ghee.','4','Ghee_Roast_Dosa.jpg','32'),(414,'Ghee Masala Dosa','13.99','Crispy crepe made with ghee.','4','Ghee_Masala_Dosa.jpg','32'),(415,'Rava Dosa','14.99','crepe made with Suji batter.','4','Rava_Dosa.jpg','32'),(416,'Egg Dosa','13.99','Crepe with a layer of beaten egg.','4','Egg_Dosa.jpg','32'),(417,'Onion Dosa','13.99','Crepe layered with chopped onions.','4','Onion_Dosa.jpg','32'),(418,'Onion Masala Dosa','13.99','Crepe layered with chopped onions.','4','Onion_Masala_Dosa.jpg','32'),(419,'Paneer Dosa','15.99','Crepe Layered with Paneer.','4','Paneer_Dosa.jpg','32'),(420,'Paneer Masala Dosa','15.99','Crepe Layered with Paneer.','4','Paneer_Masala_Dosa.jpg','32'),(421,'Cheese Dosa','15.99','Crepe with cheese.','4','Cheese_Dosa.jpg','32'),(422,'Set Dosa 2 piece','13.99','Lentil batter crepe.','4','Set_Dosa.jpg','32'),(423,'Chicken Chettinad Dosa','13.99','Crepe served with chicken chettinad curry.','4','Chicken_Chettinad_Dosa.jpg','32'),(424,'Chicken Tikka Dosa','13.99','Crepe served with Chicken Tikka curry.','4','Chicken_Tikka_Dosa.jpg','32'),(425,'Goat Masala Dosa','15.99','Crepe served with goat masala curry.','4','Goat_Masala_Dosa.jpg','32'),(426,'Plain Dosa','11.99','Crepe made with rice batter and served with Sambar and Chutney.','4','Plain_Dosa.jpg','32'),(427,'Mysore Masala Dosa','14.99','Crepe made with rice batter and served with potato masala, Sambar and Chutney.','4','Mysore_Masala_Dosa.jpg','32'),(428,'Rava Onion Dosa','15.99','Crepe made with suji batter served with Onion.','4','Rava_Onion_Dosa.jpg','32'),(429,'Rava Onion Masala Dosa','13.99','Crepe made with suji batter served with potato curry and Onion.','4','Rava_Onion_Masala_Dosa.jpg','32'),(430,'Chilli Uttappam','13.99','Thick pancake with rice batter and Chilies.','4','Chili_Uttappam.jpg','32'),(431,'Butter Chicken','15.99','Boneless chicken baked and cooked in creamy tomato sauce with butter and spices.','4','Butter_Chicken.jpg','33'),(432,'Chicken Tikka Masala','15.99','Boneless chicken cooked with cream, fresh tomato sauce, onions and Indian spices.','4','Chicken_Tikka_Masala.jpg','33'),(433,'Chicken Vindaloo','14.99','Chicken cooked with potatoes, red chilies, vinegar, garlic in vindaloo sauce.','4','Chicken_Vindaloo.jpg','33'),(434,'Chicken Curry','14.99','Boneless chicken cooked with Indian Herbs.','4','Chicken_Curry.jpg','33'),(435,'Chicken Korma','14.99','Chicken braised with yogurt, ginger, garlic and spices.','4','Chicken_Korma.jpg','33'),(436,'Chicken Chettinad','14.99','Chicken cooked in typical Tamilnadu style.','4','Chicken_Chettinad.jpg','33'),(437,'Ginger Chicken','14.99','Boneless chicken cooked with onion, ginger and spices.','4','Ginger_Chicken.jpg','33'),(438,'Pepper Chicken','14.99','Chicken cooked with black pepper, tomato sauce & spices.','4','Pepper_Chicken.jpg','33'),(439,'Kadai Chicken','14.99','Chicken cooked with capsicum, ginger in a spicy cream.','4','Kadai_Chicken.jpg','33'),(440,'Goat Curry','15.99','Goat simmered in a tangy sauce with spices.','4','Goat_Curry.jpg','33'),(441,'Goat Vindaloo','15.99','Goat cooked with potatoes, red chilies, vinegar, garlic in vindaloo sauce.','4','Goat_Vindaloo.jpg','33'),(442,'Goat rogan josh','15.99','an Indian lamb curry with a heady combination of intense spices in a creamy tomato curry sauce.','4','Goat_rogan_josh.jpg','33'),(443,'Goat korma','13.99','Goat rice with yogurt, ginger, garlic and spices.','4','Goat_korma.jpg','33'),(444,'Kadai Goat','15.99','Goat cooked with capsicum, ginger and spices.','4','Kadai_Goat.jpg','33'),(445,'Goat Chettinad','15.99','Goat simmered in a tangy sauce with spices in chettinad style.','4','Goat_Chettinad.jpg','33'),(446,'Paneer Tikka Masala','14.99','Paneer cubes cooked in creamy sauce.','4','Paneer_Tikka_Masala.jpg','34'),(447,'Navratan Korma','12.99','Mixed vegetables cooked with spices and light sauce.','4','Navratan_Korma.jpg','34'),(448,'Channa Masala','12.99','Chickpeas cooked with fresh tomatoes ,onions and peppers in a thick spicy sauce.','4','Channa_Masala.jpg','34'),(449,'Dal Tadka','12.99','Dal tempered with gravy made of Onion, Tomato, Indian spices and ghee.','4','Dal_Tadka.jpg','34'),(450,'Dal Makhani','12.99','Dal cooked with butter and spices.','4','Dal_Makhani.jpg','34'),(451,'Kadai Paneer','14.99','Fried paneer and green bell peppers are cooked in a spicy cream.','4','Kadai_Paneer.jpg','34'),(452,'Mutter Paneer','14.99','Green peas and paneer cooked with onion paste and spices.','4','Mutter_Paneer.jpg','34'),(453,'Palak Paneer','14.99','Spinach & Paneer cooked with tomatoes, onions and spices.','4','Palak_Paneer.jpg','34'),(454,'Bhindi Masala','13.99','Okra stir fried with tomatoes, ginger, garlic and spice mix.','4','Bhindi_Masala.jpg','34'),(455,'veg chettinad','12.99','Veg cooked in typical tamil nadu style.','4','veg_chettinad.jpg','34'),(456,'Penne Tomato Sauce','11.99','Veg Pasta with Penne Tomato Sauce.','4','Penne_Tomato_Sauce.jpg','35'),(457,'Veg Pasta with Penne Rose Sauce','9.99','Veg Pasta with Penne Rose Sauce','4','Veg_Pasta_with_Penne_Rose_Sauce.jpg','35'),(458,'Penne Butter Chicken','13.99','Authentic flavors of classic butter chicken sauce combined with pasta.','4','Penne_Butter_Chicken.jpg','35'),(459,'Chicken Pasta with tomato sauce','13.99','Authentic flavors of classic chicken sauce combined with pasta.','4','Chicken_Pasta_with_tomato_sauce.jpg','35'),(460,'Plain Rice','3.99','Steamed basmati white rice cooked with jeera and a hint of butter.','4','Plain_Rice.jpg','36'),(461,'Raita','3.99','Yogurt mixed with finely chopped onions, tomatoes, carrot, cilantro and flavored spices.','4','Raita.jpg','36'),(462,'Sambar','3.99','Lentil based vegetable soup cooked with Namaste sambar masala','4','Sambar.jpg','36'),(463,'Tandoori Chicken','13.99','Chicken marinated in yogurt ,herbs and spices, cooked in tandoor oven.','4','Tandoori_Chicken.jpg','37'),(464,'Malai Chicken Kabab','13.99','Chicken marinated with cream, lemon juice, paprika, garlic and cumin and cooked in Tandoor.','4','Malai_Chicken_Kabab.jpg','37'),(465,'Paneer Tikka','15.99','Paneer baked using skewers in tandoor after marinating in spices and Yogurt.','4','Paneer_Tikka.jpg','37'),(466,'Chicken Tikka','13.99','Boneless chicken baked using skewers in tandoor after marinating in spices and yogurt.','4','Chicken_Tikka.jpg','37'),(467,'Goat Seekh Kabab','15.99','Ground goat mixed with spices and cooked in Tandoor.','4','Goat_Seekh_Kabab.jpg','37'),(468,'Tandoori Platter','24.99','Combinatioon of Chicken Tandoor, Tikka Kabob, Malai Kabob,Chick Sheek Kabab, Lamb Sheek Cabab, Shrip marinated and cooked in tandoor oven.','4','Tandoori_Platter.jpg','37'),(469,'Chicken Seekh Kabob','13.99','Ground Chicken mixed with spices and cooked in Tandoor.','4','Chicken_Seekh_Kabob.jpg','37'),(470,'Chicken Tikka Wrap','11.99','Flat bread wrap with Boneless chicken Tikka thigh, onion, Lettuce and mint Sauce.','4','Chicken_Tikka_Wrap.jpg','38'),(471,'Chicken kebab wrap','11.99','1 piece chicken kebab wrapped with naan garden salad and mint chutney and mayo !','4','Chicken_kebab_wrap.jpg','38'),(472,'Chicken Shawarma Wrap','11.99','Shawarma chicken,pickles, lettuce,onion,peppers,garlic mayo tahini,tortilla.','4','Chicken_Shawarma_Wrap.jpg','38');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projectclients`
--

DROP TABLE IF EXISTS `projectclients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projectclients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projectclients`
--

LOCK TABLES `projectclients` WRITE;
/*!40000 ALTER TABLE `projectclients` DISABLE KEYS */;
INSERT INTO `projectclients` VALUES (2,'1.png',1),(3,'2.png',1),(4,'3.png',1),(5,'4.png',1),(6,'5.png',1),(7,'11.png',2),(8,'21.png',2),(9,'31.png',2),(10,'41.png',2),(11,'51.png',2),(17,'1.png',4),(18,'2.png',4),(19,'3.png',4),(20,'4.png',4),(21,'5.png',4),(27,'1.png',6),(28,'2.png',6),(29,'3.png',6),(30,'4.png',6),(31,'5.png',6),(34,'22.png',7),(39,'threewheels.png',7),(40,'bawarchi.jpg',7),(41,'lego.png',7),(53,'thebrace.png',5),(54,'ups.png',5),(55,'sevenoaks.png',5),(56,'cara_denstiry.png',5),(57,'niva_dental.jpg',5),(58,'shipley.png',5),(59,'bestbrains.png',5),(60,'thelearning.jpg',5),(61,'keds.png',5),(62,'malabar.jpg',5),(63,'ion.jpg',5),(64,'firmtocook.png',3),(65,'teapico.png',3),(66,'vivek.png',3),(67,'parinama.png',3),(68,'indiabazar.png',3),(69,'pizzabazar.png',3),(70,'luxe.png',3),(72,'williamson.png',3),(73,'lava.png',3),(74,'ohwah.png',3),(75,'tuffipuff.jpg',3),(76,'sangam1.png',3);
/*!40000 ALTER TABLE `projectclients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL ,
  `name` varchar(100) DEFAULT NULL,
  `photos` varchar(500) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `flyer` varchar(100) DEFAULT NULL,
  `retailelevation` varchar(100) DEFAULT NULL,
  `retailfloorplan` varchar(100) DEFAULT NULL,
  `retail3dview` varchar(100) DEFAULT NULL,
  `floorplansretail` varchar(100) DEFAULT NULL,
  `floorplansoffice` varchar(100) DEFAULT NULL,
  `nearby` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `loopnet` varchar(100) DEFAULT NULL,
  `crexi` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `video1` varchar(100) DEFAULT NULL,
  `video2` varchar(100) DEFAULT NULL,
  `parkingratio` varchar(100) DEFAULT NULL,
  `highlights` varchar(1200) DEFAULT NULL,
  `summary` varchar(1200) DEFAULT NULL,
  `amenities` varchar(1200) DEFAULT NULL,
  `facts` varchar(1200) DEFAULT NULL,
  `aboutheading` varchar(100) DEFAULT NULL,
  `abouttag` varchar(100) DEFAULT NULL,
  `projectsize` varchar(20) DEFAULT NULL,
  `acres` varchar(20) DEFAULT NULL,
  `totalunits` varchar(20) DEFAULT NULL,
  `availableunits` varchar(20) DEFAULT NULL,
  `galleryheading` varchar(100) DEFAULT NULL,
  `gallerysubheading` varchar(100) DEFAULT NULL,
  `projecttag` varchar(100) DEFAULT NULL,
  `projectheading` varchar(100) DEFAULT NULL,
  `ptraffic` varchar(100) DEFAULT NULL,
  `putilities` varchar(100) DEFAULT NULL,
  `paccess` varchar(100) DEFAULT NULL,
  `plocation` varchar(100) DEFAULT NULL,
  `buildingsize` varchar(30) DEFAULT NULL,
  `floorsize` varchar(30) DEFAULT NULL,
  `floorplan1` varchar(100) DEFAULT NULL,
  `floorplan2` varchar(100) DEFAULT NULL,
  `buildingname1` varchar(50) DEFAULT NULL,
  `buildingname2` varchar(50) DEFAULT NULL,
  `totalarea1` varchar(50) DEFAULT NULL,
  `totalarea2` varchar(50) DEFAULT NULL,
  `building1` varchar(50) DEFAULT NULL,
  `building2` varchar(50) DEFAULT NULL,
  `totalunits1` varchar(50) DEFAULT NULL,
  `totalunits2` varchar(50) DEFAULT NULL,
  `availableunits1` varchar(50) DEFAULT NULL,
  `availableunits2` varchar(50) DEFAULT NULL,
  `parking1` varchar(50) DEFAULT NULL,
  `parking2` varchar(50) DEFAULT NULL,
  `price1` varchar(50) DEFAULT NULL,
  `price2` varchar(50) DEFAULT NULL,
  `floorplanheading` varchar(100) DEFAULT NULL,
  `floorplancontent` varchar(500) DEFAULT NULL,
  `bannertag` varchar(200) DEFAULT NULL,
  `buildingsizeheading` varchar(50) DEFAULT NULL,
  `floorsizeheading` varchar(50) DEFAULT NULL,
  `gallerybehind` varchar(50) DEFAULT NULL,
  `plocationheading` varchar(50) DEFAULT NULL,
  `ptrafficheading` varchar(50) DEFAULT NULL,
  `paccessheading` varchar(50) DEFAULT NULL,
  `putilitiesheading` varchar(50) DEFAULT NULL,
  `y1` varchar(100) DEFAULT NULL,
  `y2` varchar(100) DEFAULT NULL,
  `y3` varchar(100) DEFAULT NULL,
  `y4` varchar(100) DEFAULT NULL,
  `y5` varchar(100) DEFAULT NULL,
  `y6` varchar(100) DEFAULT NULL,
  `floorplan3` varchar(100) DEFAULT NULL,
  `buildingname3` varchar(50) DEFAULT NULL,
  `totalarea3` varchar(50) DEFAULT NULL,
  `building3` varchar(50) DEFAULT NULL,
  `totalunits3` varchar(50) DEFAULT NULL,
  `availableunits3` varchar(50) DEFAULT NULL,
  `parking3` varchar(50) DEFAULT NULL,
  `price3` varchar(50) DEFAULT NULL,
  `floorplan4` varchar(100) DEFAULT NULL,
  `buildingname4` varchar(50) DEFAULT NULL,
  `totalarea4` varchar(50) DEFAULT NULL,
  `building4` varchar(50) DEFAULT NULL,
  `totalunits4` varchar(50) DEFAULT NULL,
  `availableunits4` varchar(50) DEFAULT NULL,
  `parking4` varchar(50) DEFAULT NULL,
  `price4` varchar(50) DEFAULT NULL,
  `floorplan5` varchar(100) DEFAULT NULL,
  `buildingname5` varchar(50) DEFAULT NULL,
  `totalarea5` varchar(50) DEFAULT NULL,
  `building5` varchar(50) DEFAULT NULL,
  `totalunits5` varchar(50) DEFAULT NULL,
  `availableunits5` varchar(50) DEFAULT NULL,
  `parking5` varchar(50) DEFAULT NULL,
  `price5` varchar(50) DEFAULT NULL,
  `floorplan6` varchar(100) DEFAULT NULL,
  `buildingname6` varchar(50) DEFAULT NULL,
  `totalarea6` varchar(50) DEFAULT NULL,
  `building6` varchar(50) DEFAULT NULL,
  `totalunits6` varchar(50) DEFAULT NULL,
  `availableunits6` varchar(50) DEFAULT NULL,
  `parking6` varchar(50) DEFAULT NULL,
  `price6` varchar(50) DEFAULT NULL,
  `floorplan7` varchar(100) DEFAULT NULL,
  `buildingname7` varchar(50) DEFAULT NULL,
  `totalarea7` varchar(50) DEFAULT NULL,
  `building7` varchar(50) DEFAULT NULL,
  `totalunits7` varchar(50) DEFAULT NULL,
  `availableunits7` varchar(50) DEFAULT NULL,
  `parking7` varchar(50) DEFAULT NULL,
  `price7` varchar(50) DEFAULT NULL,
  `floorplan8` varchar(100) DEFAULT NULL,
  `buildingname8` varchar(30) DEFAULT NULL,
  `totalarea8` varchar(30) DEFAULT NULL,
  `building8` varchar(30) DEFAULT NULL,
  `totalunits8` varchar(30) DEFAULT NULL,
  `availableunits8` varchar(30) DEFAULT NULL,
  `parking8` varchar(30) DEFAULT NULL,
  `price8` varchar(30) DEFAULT NULL,
  `floorplan9` varchar(100) DEFAULT NULL,
  `buildingname9` varchar(30) DEFAULT NULL,
  `totalarea9` varchar(30) DEFAULT NULL,
  `building9` varchar(30) DEFAULT NULL,
  `totalunits9` varchar(30) DEFAULT NULL,
  `availableunits9` varchar(30) DEFAULT NULL,
  `parking9` varchar(30) DEFAULT NULL,
  `price9` varchar(30) DEFAULT NULL,
  `floorplan10` varchar(100) DEFAULT NULL,
  `buildingname10` varchar(30) DEFAULT NULL,
  `totalarea10` varchar(30) DEFAULT NULL,
  `building10` varchar(30) DEFAULT NULL,
  `totalunits10` varchar(30) DEFAULT NULL,
  `availableunits10` varchar(30) DEFAULT NULL,
  `parking10` varchar(30) DEFAULT NULL,
  `price10` varchar(30) DEFAULT NULL,
  `floorplan11` varchar(100) DEFAULT NULL,
  `buildingname11` varchar(30) DEFAULT NULL,
  `totalarea11` varchar(30) DEFAULT NULL,
  `building11` varchar(30) DEFAULT NULL,
  `totalunits11` varchar(30) DEFAULT NULL,
  `availableunits11` varchar(30) DEFAULT NULL,
  `parking11` varchar(30) DEFAULT NULL,
  `price11` varchar(30) DEFAULT NULL,
  `floorplan12` varchar(100) DEFAULT NULL,
  `buildingname12` varchar(30) DEFAULT NULL,
  `totalarea12` varchar(30) DEFAULT NULL,
  `building12` varchar(30) DEFAULT NULL,
  `totalunits12` varchar(30) DEFAULT NULL,
  `availableunits12` varchar(30) DEFAULT NULL,
  `parking12` varchar(30) DEFAULT NULL,
  `price12` varchar(30) DEFAULT NULL,
  `floorplan13` varchar(100) DEFAULT NULL,
  `buildingname13` varchar(30) DEFAULT NULL,
  `totalarea13` varchar(30) DEFAULT NULL,
  `building13` varchar(30) DEFAULT NULL,
  `totalunits13` varchar(30) DEFAULT NULL,
  `availableunits13` varchar(30) DEFAULT NULL,
  `parking13` varchar(30) DEFAULT NULL,
  `price13` varchar(30) DEFAULT NULL,
  `floorplan14` varchar(100) DEFAULT NULL,
  `buildingname14` varchar(30) DEFAULT NULL,
  `totalarea14` varchar(30) DEFAULT NULL,
  `building14` varchar(30) DEFAULT NULL,
  `totalunits14` varchar(30) DEFAULT NULL,
  `availableunits14` varchar(30) DEFAULT NULL,
  `parking14` varchar(30) DEFAULT NULL,
  `price14` varchar(30) DEFAULT NULL,
  `floorplan15` varchar(100) DEFAULT NULL,
  `buildingname15` varchar(30) DEFAULT NULL,
  `totalarea15` varchar(30) DEFAULT NULL,
  `building15` varchar(30) DEFAULT NULL,
  `totalunits15` varchar(30) DEFAULT NULL,
  `availableunits15` varchar(30) DEFAULT NULL,
  `parking15` varchar(30) DEFAULT NULL,
  `price15` varchar(30) DEFAULT NULL
) ENGINE=MYISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPRESSED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'POW Lewisville Phase I','attachment(13).jpg,attachment(12).jpg,attachment(11).jpg,attachment(10).jpg,attachment(9).jpg,attachment(8).jpg,attachment(7).jpg,attachment(6).jpg,attachment(5).jpg,attachment(4).jpg,attachment(3).jpg,attachment(2).jpg,attachment(1).jpg,attachment.jpg','Active','Lewisville_ph1_flyer.pdf','',NULL,'pow_banner.jpg','attachment(14)3.jpg','attachment1.jpg','','Dynamic Business Spaces at Leora Ln & E State Hwy 121!',NULL,NULL,'https://www.loopnet.com/Listing/2601-Tx-121-Lewisville-TX/22144421/','','','','<p>Offering a distinctive fusion of warehouse, retail, and office space. Each unit boasts a welcoming storefront design, inviting customers to enter as if it were a retail store. Additionally, each unit can be tailored to serve as either traditional office space or warehouse, with flexible open floor plans to accommodate various business needs.</p>\r\n\r\n<ol>\r\n	<li>Curated Spaces: Carefully designed offices to attract customers.</li>\r\n	<li>Versatile Sizes: Ranging from 1,250 to 30,000 square feet.</li>\r\n	<li>Flexible Options: Buy, lease, or customize to suit your needs.</li>\r\n</ol>\r\n','','<p>Prime Office Warehouses offers over 125,000 square feet of office space spread across 5 buildings, with unit sites ranging from 1,250 to 30,000 square feet. Whether you&#39;re buying, leasing, or opting for a &#39;built to suit&#39; option, our diverse value propositions cater to your business needs.</p>\r\n\r\n<p>Strategically located on Highway 121, Leora Lane, our property benefits from high visibility with over 125,000 daily vehicles, making it easily accessible from all corners of the greater Dallas Fort Worth Area. With zoning suitable for various businesses such as gymnastics centers, car service stations, roofing contractors, and more, it&#39;s an ideal location for entrepreneurs seeking growth opportunities in a rapidly expanding suburb.</p>\r\n','<p>294,512 sq ft across 6-7 buildings on Highway 121, Leora Lane, offering flexible options from 3,375 to 9,270 sq ft. With high visibility and zoning for diverse businesses like car service stations and sign shops, it&#39;s a prime commercial hub accessible from all corners of Dallas Fort Worth.</p>\r\n','Hybrid Retail Ready Workspaces','PRIME OFFICE WAREHOUSE','125000 ','','75','9','GATEWAY FOR GROWTH','Strategic Location & Zoning','PROJECT HIGHLIGHTS','Tailored Spaces For Your Success','Spans from 294,512 square feet on 21 E State HWY.','50% base floor plan for versatile layouts.','Private balconies, restrooms, and glass entrance doors.','Exceeds 90,000 vehicles per day on US Road.','9270 ','2607','Prime_Office_Ware_House_phase1_site_(1)22_page-0001225.jpg','Prime_Office_Ware_House_phase1_site_(1)22_page-0001227.jpg','Building 1','Building 2','29,121 SF','23,400 SF','1','2','15','16','0','0','Yes','Yes','','','Crafting Contemporary Spaces','Every unit on our site is a contemporary flair, whether it\'s for a small business or a modern office space. We understand the importance of creating an attractive environment that enhances productivity, leaving a positive impression on customers. With our commitment to delivering innovative solutions, we leave no stone unturned in ensuring excellence.',NULL,'SFT Unit Size','SFT Floor Size','TAILORED','High Traffic Location','Expansive Project','Premium Features','Mezzanine Allowance','https://www.youtube.com/watch?v=SU2ADiU-9oE','https://www.youtube.com/watch?v=cHLL6mikzKQ','https://www.youtube.com/watch?v=70DngEBi9-k','https://www.youtube.com/watch?v=ko6-k0Ztx6c','','','Prime_Office_Ware_House_phase1_site_(1)22_page-0001230.jpg','Building 3','19,812','3','11','0','','','PLANS_Lewisville_B4.jpg','Building 4','1','2','3','4','5','6','PLANS_Lewisville_B5.jpg','Building 5','','','','','','','Prime_Office_Ware_House_phase1_site_(1)22_page-0001233.jpg','','','','','','','','Prime_Office_Ware_House_phase1_site_(1)22_page-0001234.jpg','','','','','','','','Prime_Office_Ware_House_phase1_site_(1)22_page-0001235.jpg','','','','','','','','Prime_Office_Ware_House_phase1_site_(1)22_page-0001236.jpg','','','','','','','','Prime_Office_Ware_House_phase1_site_(1)22_page-0001237.jpg','','','','','','','','Prime_Office_Ware_House_phase1_site_(1)22_page-0001238.jpg','','','','','','','','Prime_Office_Ware_House_phase1_site_(1)22_page-0001239.jpg','','','','','','','','Prime_Office_Ware_House_phase1_site_(1)22_page-0001240.jpg','','','','','','','','Prime_Office_Ware_House_phase1_site_(1)22_page-0001241.jpg','','','','','','','','Prime_Office_Ware_House_phase1_site_(1)22_page-0001242.jpg','','','','','5','',''),(2,'POW Lewisville Phase II','special-16.jpg,special-26.jpg,special-36.jpg,special-46.jpg,special-56.jpg','Active','Prime_Office_Warehouses_flyer_(2)louis3.pdf','1.pdf',NULL,'banner.jpg','about-one-img-1.jpg','about-one-img-2.jpg','PRIME_LEWSVILLE_BLDG-06-Model_(6)_new_(1)_(1)_(1).pdf','Transforming Workspaces in Lewisville, Texas.',NULL,NULL,'https://drive.google.com/file/d/14JVNIeE2vE4mH25qg-8g0DPNLBEkgx_1/view?usp=drive_link','https://www.youtube.com/watch?v=jDVvP5MsG7M&t=23s','https://youtu.be/6SNvHeJ8VKQ','Table_.png','<p>Located at Leora Ln &amp; E State Hwy 121 in Lewisville, Texas 75067, Prime Office Warehouses offer a distinctive blend of warehouse, retail, and office spaces. Each unit boasts a welcoming storefront ambiance, inviting customers with a retail-like experience.</p>\r\n\r\n<p>- Customize each unit for office or warehouse use.<br />\r\n- Adaptable open floor plans cater to diverse business needs.<br />\r\n- Tailor your space to suit your requirements precisely.</p>\r\n','','<h3>Our facilities offer round-the-clock access, front-loading convenience, mezzanine options, prominent signage, and air conditioning for your comfort and productivity.</h3>\r\n\r\n<p>Explore a wide range of suitable businesses for our zoning, including automotive services, construction, retail, and more. From gyms and car services to manufacturing and shipping, there&#39;s a perfect fit for every entrepreneur within our vibrant community.</p>\r\n','','Transforming Workspaces in Lewisville, Texas.','PRIME OFFICE WAREHOUSES','72400 ','','23','11','Zoning Opportunities ','Tailored To Your Business Vision','PROJECT HIGHLIGHTS','Versatile Spaces For Your Business','High traffic volume and extended road frontage.','On-site availability of electricity, water and parking space.','Proximity to Leander\'s South San Gabriel River Park.','Traffic counts along U.S. Route 183 exceed 23,000 vehicles.','294512','2607','PLANS_Lewisville_B6.jpg','PLANS_Lewisville_B7.jpg','Building 6','Building 7','36624','38960','6','7','11','12','5','6','Yes','Yes','','','Your Future Workspace Awaits','Below, explore the detailed floor plans for our two premier buildings, each meticulously designed to accommodate your business needs. Additionally, our comprehensive site plan provides an overview of available and sold units, guiding you towards your ideal space in our thriving community.',NULL,'Total Building Size','Typical Floor Size','Amenities','Location','Traffic','Access','Utilities','https://www.youtube.com/watch?v=Kpua3d5RKLM','https://www.youtube.com/watch?v=ouA2c7FdYLk','https://www.youtube.com/watch?v=aIZYFBGO1OQ','https://www.youtube.com/watch?v=c5szqNDA-XI','https://www.youtube.com/watch?v=h-nsWbta5Wc','https://www.youtube.com/watch?v=kiHEcxuHqBY','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(3,'Centro Plaza ','15.jpg,16.jpg,17.jpg,18.jpg,19.jpg,20.jpg,21.jpg,22.jpg,23.jpg,24.jpg,26.jpg,28.jpg,81.jpg,c_(2).jpg,c_(3).jpg,c.jpg,centro_india_bazaar.png','Active','CENTRO_A4_FLYER1.pdf','',NULL,'banner3.jpg','about-one-img-13.jpg','about-one-img-23.jpg','CentroPlaza__Ronald_W_Reagan_Blvd_NearBusinessMap_(1).jpg','14300 Ronald Reagan Blvd: Premier Mixed-Used',NULL,NULL,'https://www.loopnet.com/Listing/14300-Ronald-Reagan-Blvd-Cedar-Park-TX/29761611/?slsrpurl=https%3a%2','','','','<p>Situated at 14300 Ronald Reagan Blvd in Leander, TX 78641, USA, Centro Plaza offers a lucrative 15-acre mixed-use development prospect. Boasting 753 feet of frontage on Ronald Reagan Blvd, a crucial thoroughfare linking Cedar Park and Liberty Hill, the property is strategically positioned to capitalize on the burgeoning retail, commercial, and population expansion in the area.</p>\r\n\r\n<ul>\r\n	<li>Explosive growth fuels potential.</li>\r\n	<li>Realize 149,808 SFT Project.</li>\r\n	<li>Mixed &ndash; used development opportunity thrives.</li>\r\n</ul>\r\n','','<p>This envisioned project could entail ten build-to-suit buildings, comprising four retail structures totaling 8,000 square feet each at the forefront, and six office buildings ranging from 2,000 to 26,000 square feet. Zoned for various uses including retail, restaurants, services, medical, and office spaces, it caters to the diverse needs of tenants and buyers in the burgeoning Leander/North Austin region.</p>\r\n\r\n<p>Strategically situated, it lies 8 miles North of the $5 billion Apple Campus, currently under construction and expected to accommodate 5,000 new employees. Additionally, it sits 6 miles South of a new HEB shopping center development, further enhancing its appeal amidst the region&#39;s growth trajectory.</p>\r\n','<p>Situated just one mile North of the pivotal Ronald Reagan and 1431 intersection, this development offers unparalleled accessibility. Zoned for a myriad of uses including retail, dining, services, medical, and office spaces, Centro Plaza presents a dynamic opportunity for businesses seeking a strategic foothold in a rapidly expanding market.</p>\r\n','Diverse Strategic Investment Potential','CENTRO PLAZA','150000','','109','7','ZONING OPPORTUNITIES','Prime Opportunity: Exclusive Growth Zone ','','PROJECT HIGHLIGHTS','Brand new development project available for sale.','Exceeds 23,00 vehicles per day on US Route 183.','Strong demographic profile in surrounding area.','Permits various uses like retail, restaurant, medical and services.','57776 ','46632 ','PLANS_Centro_B11.jpg','PLANS_Centro_B21.jpg','Building 1','Building 2','27,560','11,032','8','9','20','8','4','2','Yes','Yes','xxx','xxx','Your Blueprint To Spacious Living','Introducing a new development project, strategically positioned amidst a backdrop of robust demographics in the surrounding area. This entire project is now available for sale, presenting a compelling opportunity for investors. With high visibility and signage, it attracts foot traffic, appealing to buyers or tenants.',NULL,'SFT Office Space','SFT Retail Space','AMENTITIES ','Zoning Options','Prime Investment','Favorable Demographics','High Traffic','https://www.youtube.com/watch?v=jDVvP5MsG7M&t','https://www.youtube.com/watch?v=6SNvHeJ8VKQ','','','','','PLANS_Centro_B61.jpg','Building 6','','','','','','','PLANS_Centro_B81.jpg','Building 8','','','','','','','PLANS_Centro_B91.jpg','Building 9','','','','','','','PLANS_Centro_B101.jpg','Building 10','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(4,'Spur Plaza','13.jpg','Active','spur_plaza.pdf','',NULL,'WhatsApp_Image_2024-05-23_at_11_17_48_AM.jpeg','WhatsApp_Image_2024-05-23_at_11_42_35_AM1.jpeg','WhatsApp_Image_2024-05-23_at_11_30_27_AM2.jpeg','','Experience a unique of Retail and Flex space',NULL,NULL,'https://www.loopnet.com/Listing/2079-US-183-Leander-TX/30520137/','https://www.youtube.com/watch?v=myxxp9RxtqI','','','<h3><q><span dir=\"ltr\"><small>Mixed used development property.Blend combination of retail and office.It is located on Larkspur Blvd facing HWY 183.</small></span></q></h3>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h2 style=\"font-style:italic\">&nbsp;</h2>\r\n','','','<p>Discover a versatile fusion of flexible workspaces and vibrant retail offerings, curated to inspire creativity and productivity. Seamlessly blending functionality with modern aesthetics, our project embodies innovation and adaptability at its core. Whether you seek collaborative work environments or retail experiences tailored to your lifestyle, our space is designed to exceed expectations.</p>\r\n','Dynamic Flex Spaces & Retail','Spur Plaza','116640','','89','50','','','PROJECT HIGHLIGHTS','Transforming Spaces: Elevating Flexibility and Retail Innovation','','','','','','','PLANS_Spur_B1.jpg','PLANS_Spur_B2.jpg','Building 1','Building 2','20,000SF','15,220','02','6','16','10','15','6','Yes','Yes','','','Promising Future Growth Potential','\"Your Next Investment Awaits: Explore Our Retail and Flexspace Properties for Sale!\"',NULL,'','','','','Traffic Counts Along U.S Route 183 Exceed 23,000 V','','','https://www.youtube.com/watch?v=myxxp9RxtqI','','','','','','PLANS_Spur_B4.jpg','Building 4','11,327','Building 1 Second Floor','7','7','Yes','','PLANS_Spur_B6.jpg','Building 6','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(5,'Reagan Crossing Phase I','57.jpg,58.jpg,59.jpg,60.jpg,61.jpg,78.jpg,malabar_rrc.png,rrc_(2).jpg,rrc_(3).jpg,rrc_(4).jpg,rrc_(5).jpg,Site_1_Twilight_-1.jpg,Site_1_Twilight_-5.jpg,Site_1_Twilight_-6.jpg,WhatsApp_Image_2025-10-21_at_10_49_41_PM.jpeg','Active','RRC_PH_1.pdf','',NULL,'banner1.jpg','about-one-img-11.jpg','about-one-img-21.jpg','RRC_Map-17-09-2025.jpg','Redefining Neighborhood Destination Hubs',NULL,NULL,'https://www.loopnet.com/Listing/15101-Ronald-Reagan-Blvd-Leander-TX/30168672/?slsrpurl=https%3a%2f%2','','','','<p>Located at 15101 Ronald Reagan Blvd in Leander, TX 78641, Reagan Crossing is a mixed-use development featuring modern buildings with 37,000 SF of medical/professional office space, 45,000 SF of retail space, 6,000 SF of drive-thrus, and a 10,000 SF daycare. Strategically situated in a densely populated neighborhood, it serves as a convenient hub for diverse community needs.</p>\r\n\r\n<p>- Adjacent Businesses: Includes daycare, retail, and more.</p>\r\n\r\n<p>- Project: Blending office, retail, and community spaces on 15.69 acres.</p>\r\n\r\n<p>- Features: Modern buildings with signage on Ronald Reagan Blvd.</p>\r\n','','<p>Reagan Crossing, strategically situated in the thriving city of Leander, offers small business professionals an appealing and affordable alternative to high-priced office spaces. With pad sites and retail space available for lease, this prime location boasts a hard corner position at a signalized intersection, featuring an AM traffic pattern and 1,600 feet of frontage along Ronald Reagan.</p>\r\n\r\n<p>Positioned at the intersection of the City&#39;s proposed six-lane Ronald Reagan Blvd and Journey Parkway, the site enjoys exceptional visibility and accessibility, with approximately 1,000 feet facing Ronald Reagan Blvd and a traffic volume of 18,000 vehicles per day.</p>\r\n\r\n<ol>\r\n</ol>\r\n','<p>Strategically positioned at a signalized intersection, this property offers pad sites and office/retail spaces for lease. With 1,600 feet of frontage along Ronald Reagan and zoning allowing for diverse opportunities, including retail, restaurants, services, daycare, offices, and hotels, it&#39;s a prime location. Over 2,500 residential lots within 1.5 miles add to its potential.</p>\r\n','Convenience Meeting Community','REAGAN CROSSING PHASE I','160000','','59','9','EXPANSIVE FOCUSED - LOCATION','Optimal Growth Environment','PROJECT HIGHLIGHTS','Prime Lease Opportunities','Ideal for businesses seeking exposure in a bustling area.','Perfect for businesses such as chiropractors, liquor stores, CBD retailers, and more.','Located in front of 2,500 newly built homes, offering a ready customer base.','Part of a 160,000 sq ft development, providing ample opportunities.','510','9460','PLANS_RRC_B3.jpg','RRC_BUILDING_4.png','Building 3','Building 4','19007','16,261','3','4','9','10','4','0','Yes','Yes','xxx','xxx','Promising Future Growth Potential','With ~23,000 VPD (2022), this site offers great visibility and access with a curb-cut across Ronald Reagan. Surrounded by dense neighborhoods and apartments, it\'s poised for growth with plans to expand Ronald Reagan Blvd to six lanes.',NULL,'Parking Space','SFT Drive Thru','','Mixed-Use Project','Visibility & Traffic','Proximity to Homes','Versatile Usage','https://www.youtube.com/watch?v=v3WWq6wQ-Ls','https://www.youtube.com/watch?v=BnCOcmXCOUY','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(6,'Reagan Crossing Phase II','special-15.jpg,special-25.jpg,special-35.jpg,special-45.jpg,special-55.jpg','Active','RRC_PH_2.pdf','',NULL,'banner2.jpg','about-one-img-12.jpg','about-one-img-22.jpg','RRC_Map-17-09-20251.jpg','Integrated Retail & Professional Facilities',NULL,NULL,'','','','','<p>Reagan Crossing at 15101 Ronald Reagan Blvd in Leander, TX is a new mixed-use development with 21,000 sq ft of retail space on the ground floor, 21,000 sq ft for medical and professional offices on the top floor, and 12,000 sq ft for drive-thru facilities.</p>\r\n\r\n<p>- Prime Location: 15101 Ronald Reagan Blvd with easy access to major roads and amenities.<br />\r\n-&nbsp;Contemporary Design: Modern architecture and facilities for retail, medical, and professional needs.<br />\r\n-&nbsp;Flexible Layout: Adaptable spaces for various businesses, enabling customization and growth.</p>\r\n','','<p>Situated in Leander, one of the nation&#39;s burgeoning cities, Reagan Crossing offers small business professionals an affordable and appealing office space solution. Additionally, the daycare center provides a safe environment in a family-friendly community.</p>\r\n\r\n<p>Conveniently located just 2.7 miles from Indigo Ridge and a short 12-minute drive from Apple HQ2, the site is strategically positioned at the intersection of Ronald Reagan Blvd and Journey Parkway, with high visibility and access. With approximately 500 feet facing Ronald Reagan Blvd and daily traffic of 18,000 vehicles, it presents an ideal opportunity for business growth.</p>\r\n','<p>Strategically positioned at a signalized intersection, this property offers pad sites and office/retail spaces for lease. With 1,600 feet of frontage along Ronald Reagan and zoning allowing for diverse opportunities, including retail, restaurants, services, daycare, offices, and hotels, it&#39;s a prime location. Over 2,500 residential lots within 1.5 miles add to its potential.</p>\r\n','Modern Office & Retail Space','REAGAN CROSSING PHASE II','60000 ','','36','15','STRATEGIC EXCELLENCE - LOCATION & AMENTITIES','Connecting Businesses, Families & Growth','PROJECT HIGHLIGHTS','Prime Lease Opportunities',' Ideal for businesses seeking exposure in a bustling area.','Perfect for businesses such as chiropractors, liquor stores, CBD retailers, and more.','Located in front of 2,500 newly built homes, offering a ready customer base.','Part of a 160,000 sq ft development, providing ample opportunities.','12000 ','269 ','PLANS_RRC_B9.jpg','PLANS_RRC_B10.jpg','Building 9','Building 10','6,797','5,499','9','10','2','2','','','Yes','Yes','','','','',NULL,'SFT Drive Thru','Parking Spaces','','Mixed-Use Project','Visibility & Traffic','Proximity to Homes','Versatile Usage','https://www.youtube.com/watch?v=v3WWq6wQ-Ls','https://www.youtube.com/watch?v=BnCOcmXCOUY','','','','','PLANS_RRC_B11.jpg','Building 11','','','','','','','PLANS_RRC_B12.jpg','Building 12','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(7,'POW Leander','IMG_9907.jpg,IMG_9911.jpg,IMG_9914.jpg,IMG_9918.jpg,IMG_9919(1).jpg,IMG_9919.jpg,IMG_9921(1).jpg,IMG_9921.jpg,IMG_9922.jpg,IMG_9923.jpg,IMG_9931.jpg','Active','leander_A4flyer.pdf','',NULL,'IMG-20240524-WA0005.jpg','IMG_9926.jpg','IMG_9916.jpg','Leander_Map-1.jpg','Experience a Unique Fusion of Warehouse, Retail and Office Space!',NULL,NULL,'https://www.loopnet.com/Listing/15901-Ronald-Reagan-Blvd-Leander-TX/25111340/','','','','<p>Customize your space to suit your business needs, whether it&#39;s a proper office setup or an open floor plan warehouse.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n','','<p>Prime Office Warehouse Leander offers small business professionals a cost-effective alternative to high-priced office spaces in the heart of Leander, one of the nation&#39;s fastest-growing cities. With zoning for retail, restaurants, services, offices, and hotels, it caters to diverse business needs.</p>\r\n\r\n<p>Benefitting from its prime location, the property enjoys over 2,500 residential lots nearby and occupies a hard corner at a signalized intersection with significant morning traffic. Additionally, Indigo Ridge, just 2.7 miles away, adds to the area&#39;s appeal. With Apple HQ2 employing 15,000 people a short 12-minute drive away, it provides unparalleled access to major economic hubs, ideal for businesses seeking growth opportunities.</p>\r\n','<p>Whether it&#39;s a small business or a modern office warehouse, we design each unit on our site with contemporary flair. We understand that an appealing space enhances productivity and customer perception. We spare no effort in delivering innovative real estate solutions.</p>\r\n\r\n<p>&nbsp;</p>\r\n','','PRIME OFFICE WAREHOUSES LEANDER','104000 ','','62','21','PREMIUM DESTINATION ','Your Ideal Business Hub','PROJECT HIGHLIGHTS','Innovative Designs For Productive Spaces','50% of base floor plan, maximizing space utilization.','Exceeding 23,000 vehicles per day on U.S. Route 183, ensuring high visibility.','Ensure round-the-clock availability for authorized individuals.','Larger units feature 14W x 14H feet doors, smaller units have 12W x 14H.','22','1000','PLANS_Leander_B2.jpg','PLANS_Leander_B4.jpg','Building 2','Building 4','35,636 SFT','24,012','2','4','20','20','4','16','Yes','Yes','xxx','xxx','Versatile Options – Prime Location','Located at 15901 Ronald Reagan Blvd, our property enjoys high visibility with 35,000+ daily vehicles, making it a prime spot in Austin. Its convenient accessibility within twenty minutes from all corners attracts individuals and families to this rapidly growing suburb.',NULL,'Feet Celing Height','Parking Spaces','LEANDER’S','Overhead Doors','Mezzanine Allowance','24-Hour Access','Traffic Counts','https://www.youtube.com/watch?v=kiHEcxuHqBY','https://www.youtube.com/watch?v=ouA2c7FdYLk','https://www.youtube.com/watch?v=aIZYFBGO1OQ','https://www.youtube.com/watch?v=c5szqNDA-XI','https://www.youtube.com/watch?v=yQa0GV0GpTg','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(8,'Rio Ranch Commercial Lots','special-113.jpg,special-213.jpg,special-313.jpg,special-413.jpg,special-512.jpg','Active','Rio_ranch_commercial_flyer_(2)_(1).pdf','',NULL,'banner9.jpg','about-one-img-19.jpg','about-one-img-29.jpg','Rio_Ranch_-5Acre_Comercial_16-09-2025.jpg','Exclusive Land Opportunity on Ronald Reagan Boulevard!',NULL,NULL,'https://www.loopnet.com/Listing/3150-CR-258-Liberty-Hill-TX/25066498/','','','','<p>Rio Ranch presents a unique chance to acquire land along Ronald Reagan Boulevard in Williamson County, Texas. Here, clients have the option to engage their preferred builder for custom home development. Nestled in the picturesque side of Georgetown, it&#39;s conveniently located just beyond HWY 29 on Ronald Reagan Boulevard.</p>\r\n\r\n<ol>\r\n	<li>Prime Land: Ronald Reagan Boulevard, Williamson County.</li>\r\n	<li>Scenic Site: Tranquil Ronald Reagan route, Williamson County.</li>\r\n	<li>Zoned for Business: Liberty Hill ISD, six commercial lots available.</li>\r\n</ol>\r\n','','<p>Explore an exclusive opportunity to own land on prestigious Ronald Reagan Boulevard in Williamson County, perfect for your custom dream home. With Liberty Hill ISD zoning, access top-rated schools. Choose from premium lots with panoramic views for your ideal backdrop.</p>\r\n\r\n<p>Enjoy easy access to major thoroughfares like Ronald Reagan Boulevard, Hwy 29, and US 183 for seamless commuting. Nearby upscale shopping and upcoming amenities in Leander and HEB offer convenience. Plus, proximity to Liberty Hill, Leander, and Cedar Park places you in a vibrant community hub. Whether you crave tranquility or urban amenities, this opportunity offers the best of both worlds. Secure your slice of paradise in this coveted Williamson County locale today.</p>\r\n','<p>Rio Ranch offers exclusive land for sale on Ronald Reagan Boulevard in Williamson County. Clients can choose their builder for custom homes. Conveniently located near HWY 29 and US 183, it&#39;s close to Liberty Hill, Leander, and Cedar Park, and within 25 miles of the new Apple complex.</p>\r\n','Your Custom Home Haven','RIO RANCH COMMERCIAL LOTS','','61','11','4','PRE DEVELOPED  ','Premier Boulevard Opportunity Land Offering','PROJECT HIGHLIGHTS','Gateway To Scenic Living In Williamson County','Low-price entry for equity growth. ','Prominent location along HWY 183. ','Positioned in a high-growth zone. ','Exceeds 23,000 vehicles daily on U.S. Route 183.','','','Rio_Ranch_Comercial_16-09-2025.jpg','','Various Lots ',' ','','','','','','','04','','','','','','Prime location','High visibility, easy access via Ronald Reagan Blvd and CR258. Proximity to amenities: Near Santa Rita Ranch, Hwy 183, and State Hwy 29. Scenic appeal: San Gabriel River frontage with incredible views. Commercial potential: Rapidly growing area, excellent visibility, daily traffic exceeds 34,000 vehicles on State Hwy 29.',NULL,'','','OPPORTUNITY','High Traffic Counts','Special Investment Opportunity','Thriving Growth Area','High Visibility','https://www.youtube.com/watch?v=2sjYhrsTPsQ','https://www.youtube.com/watch?v=VrdIDnzOZRw','https://www.youtube.com/watch?v=cCWKEDQiX-I','https://www.youtube.com/watch?v=qUrn0semSBI','https://www.youtube.com/watch?v=-8apzuWxxLU','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(9,'Rio Ranch 1 Acre Lots','131.jpg','Active','Rio_Ranch_1_acre_lot_flyer.pdf','',NULL,'','WhatsApp_Image_2024-05-23_at_2_03_56_PM.jpeg','','Just_Listed_Rio_Ranch_-1Acre_Lots_10-09-2025-2.jpg','Expansive Living, Infinite Possibilities',NULL,NULL,'','','','','<p>Mixed use development planned with community amenities, Park Trails and much more,&nbsp;Panoramic views from premium lots&nbsp;Situated in the scenic side of Georgetown just<br />\r\npast HWY 29 on Ronald Reagan Boulevard</p>\r\n','','','<p>Delve into the essence of our project, where every detail is meticulously crafted to redefine excellence. From the sprawling landscapes to the meticulously planned infrastructure, each aspect reflects our commitment to creating a haven of luxury and comfort. Immerse yourself in the tranquility of spacious 1-acre lots, offering ample room for your imagination to flourish. Discover a harmonious blend of nature and modernity, where every corner tells a story of meticulous design and unparalleled quality. Welcome to a lifestyle redefined.</p>\r\n','Expansive 1-Acre Lots: Your Canvas for Boundless Possibilities','RIO RANCH RONALD REAGAN & CR 258','','75','56','21','','','PROJECT HIGHLIGHTS','Unlocking Potential: A Spotlight on Our Project\'s Unique Features','Traffic Counts Along U.S Route 183 Exceed 23,000 Vehicles Per Day','Prominent location along HWY 183.','Special Investment Opportunity Low-price entry for equity growth.','Positioned in a high-growth zone.','','','Rio_Ranch_one_acre_-png1.png','','LOTS','','','','','','62','','','','YES','','','','Prime Location','\"Prime 1-Acre Lots: Your Gateway to Expansive Living!\"',NULL,'','','','Thriving Growth Area ','High Traffic Counts','Special Investment Oppurtunity','High Visibility ','https://youtu.be/VrdIDnzOZRw','https://youtu.be/cCWKEDQiX-I','https://youtu.be/qUrn0semSBI','https://youtu.be/-8apzuWxxLU','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projectsites`
--

DROP TABLE IF EXISTS `projectsites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projectsites` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projectsites`
--

LOCK TABLES `projectsites` WRITE;
/*!40000 ALTER TABLE `projectsites` DISABLE KEYS */;
INSERT INTO `projectsites` VALUES (2,1,'apartment-1-13.jpg'),(3,1,'apartment-1-23.jpg'),(4,1,'apartment-1-33.jpg'),(5,1,'apartment-1-43.jpg'),(6,2,'apartment-1-14.jpg'),(7,2,'apartment-1-24.jpg'),(8,2,'apartment-1-34.jpg'),(9,2,'apartment-1-44.jpg'),(10,4,'apartment-1-15.jpg'),(13,4,'apartment-1-45.jpg'),(14,5,'apartment-1-16.jpg'),(15,5,'apartment-1-26.jpg'),(16,5,'apartment-1-36.jpg'),(17,5,'apartment-1-46.jpg'),(18,6,'apartment-1-17.jpg'),(19,6,'apartment-1-27.jpg'),(20,6,'apartment-1-37.jpg'),(21,6,'apartment-1-47.jpg'),(22,6,'apartment-1-48.jpg'),(23,7,'apartment-1-28.jpg'),(26,7,'apartment-1-18.jpg'),(27,7,'apartment-1-38.jpg'),(28,7,'apartment-1-49.jpg'),(29,4,'apartment-1-211.jpg'),(30,4,'apartment-1-410.jpg');
/*!40000 ALTER TABLE `projectsites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrations`
--

DROP TABLE IF EXISTS `registrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `dater` varchar(50) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrations`
--

LOCK TABLES `registrations` WRITE;
/*!40000 ALTER TABLE `registrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `registrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `parentcategory` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pimage` varchar(255) DEFAULT NULL,
  `types` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategory`
--

LOCK TABLES `subcategory` WRITE;
/*!40000 ALTER TABLE `subcategory` DISABLE KEYS */;
INSERT INTO `subcategory` VALUES (68,'Birthdays','57','Active',NULL,NULL),(69,'Anniversaries','57','Active',NULL,NULL),(70,'Maternity','58','Active',NULL,NULL),(71,'New Born','58','Active',NULL,NULL),(72,'Family','58','Active',NULL,NULL);
/*!40000 ALTER TABLE `subcategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive',
  `usertype` varchar(255) DEFAULT NULL,
  `adstate` varchar(255) DEFAULT 'admin',
  `oauth_provider` varchar(255) DEFAULT NULL,
  `oauth_uid` varchar(255) DEFAULT NULL,
  `locale` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Prime Developers','Admin','admin@primed.com','e10adc3949ba59abbe56e057f20f883e','Male','','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Admin','admin',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=Active | 0=Inactive',
  `usertype` varchar(255) DEFAULT NULL,
  `adstate` varchar(255) DEFAULT 'admin',
  `oauth_provider` varchar(255) DEFAULT NULL,
  `oauth_uid` varchar(255) DEFAULT NULL,
  `locale` varchar(255) DEFAULT NULL,
  `is_email_verified` enum('no','yes') NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `altnumber` varchar(100) DEFAULT NULL,
  `companyname` varchar(250) DEFAULT NULL,
  `gst` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `scity` varchar(255) DEFAULT NULL,
  `scategory` varchar(255) DEFAULT NULL,
  `ssubcategory` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendors`
--

LOCK TABLES `vendors` WRITE;
/*!40000 ALTER TABLE `vendors` DISABLE KEYS */;
INSERT INTO `vendors` VALUES (14,'GAURAV JAJU','','mohinijewellers8797@gmail.com','00a9863b7a97b13218114bdb4d9a4cbf','Male','9246568797','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,'admin',NULL,NULL,NULL,'yes','d9a3ffdb614ea06fa800a38451be8941','21-7-721,M.B.TOWER, GHANSI BAZAR','9246518797','MOHINI GEMS N JEWELS','36ABZPJ3249C1ZF','1','1,2','21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40',NULL),(16,'Zubair Nazar','','web.zubairnazaroliyat@gmail.com','e10adc3949ba59abbe56e057f20f883e','Male','9544533322','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,'admin',NULL,NULL,NULL,'yes','f38b473795219ba717ad330c2e14b91b','hi','8289888445','company','gst','1','2','21,22','chokar'),(17,'Rashi','','rl.digitalillustrator@gmail.com','e10adc3949ba59abbe56e057f20f883e','Male','9396563882','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,'admin',NULL,NULL,NULL,'yes','77ba4ba2fd2da1444c039502c41a22d0','dddddd','99999999','TBC','','1','1,2','22','chokar');
/*!40000 ALTER TABLE `vendors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-11-18 14:16:11
