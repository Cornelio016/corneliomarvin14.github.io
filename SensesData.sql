/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.5.5-10.1.9-MariaDB : Database - joyceching
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`senses` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `senses`;

/*Table structure for table `count` */

DROP TABLE IF EXISTS `count`;

CREATE TABLE `count` (
  `id` int(11) NOT NULL,
  `count` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `count` */

insert  into `count`(`id`,`count`) values (1,0);

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Description` text,
  `date` text,
  `dateexpired` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `events` */

/*Table structure for table `finaltrans` */

DROP TABLE IF EXISTS `finaltrans`;

CREATE TABLE `finaltrans` (
  `id` int(255) NOT NULL,
  `date` date DEFAULT NULL,
  `category` text,
  `servicename` text,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `finaltrans` */

/*Table structure for table `gtotal` */

DROP TABLE IF EXISTS `gtotal`;

CREATE TABLE `gtotal` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `total` int(255) DEFAULT NULL,
  `money` int(255) DEFAULT NULL,
  `change` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gtotal` */

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `idmoto` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `name` text,
  `timein` time DEFAULT NULL,
  `timeout` time DEFAULT NULL,
  `islogin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idmoto`,`id`,`islogin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `service` */

DROP TABLE IF EXISTS `service`;

CREATE TABLE `service` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `categoryname` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `service` */

/*Table structure for table `service1` */

DROP TABLE IF EXISTS `service1`;

CREATE TABLE `service1` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `category` text,
  `servicename` text,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `service1` */

/*Table structure for table `serviceface` */

DROP TABLE IF EXISTS `serviceface`;

CREATE TABLE `serviceface` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameservice` text,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `serviceface` */

insert  into `serviceface`(`id`,`nameservice`,`price`) values (3,'Eyebrow Showing','29.00'),(4,'Eyelash Extension','349.00'),(5,'Eyeleash Perming','249.00'),(6,'Ear Candling','199.00'),(7,'Hair and Make Up','499.00'),(8,'False Eyeleash','49.00');

/*Table structure for table `servicehaircolor` */

DROP TABLE IF EXISTS `servicehaircolor`;

CREATE TABLE `servicehaircolor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicename` text,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Table structure for table `servicehairstyle` */

DROP TABLE IF EXISTS `servicehairstyle`;

CREATE TABLE `servicehairstyle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicename` text,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `servicehairstyle` */

insert  into `servicehairstyle`(`servicename`,`price`) values ('Hair wax','59.00'),('Blowdry','99.00'),('Hair Setting','199.00'),('Hair Ironing','199.00'),('Regular Haircut','39.00');

/*Table structure for table `servicehairtreatment` */

DROP TABLE IF EXISTS `servicehairtreatment`;

CREATE TABLE `servicehairtreatment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicename` text,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

/*Table structure for table `servicenailcare` */

DROP TABLE IF EXISTS `servicenailcare`;

CREATE TABLE `servicenailcare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicename` text,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `servicenailcare` */

/*Table structure for table `servicesenseskids` */

DROP TABLE IF EXISTS `servicesenseskids`;

CREATE TABLE `servicesenseskids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicename` text,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `servicesenseskids` */

insert  into `servicesenseskids`(`id`,`servicename`,`price`) values (1,'Bubble Foot Spa','99.00'),(2,'Organic Foot Spa','149.00'),(3,'Kids Manicure','79.00'),(4,'Kids Pedicure','79.00'),(5,'Kids Nail Art','99.00'),(6,'Hair Spa Treatment Chocolate','199.00'),(7,'Hair Spa Treatment Strawberry','199.00'),(8,'Hair Spa Treatment Orange','199.00'),(9,'HeadLice Treatment Ear Candling','149.00'),(10,'HeadLice Treatment 1 - 5 years old HC','149.00'),(11,'HeadLice Treatment 6 - 11 years old HC','149.00');

/*Table structure for table `servicespa` */

DROP TABLE IF EXISTS `servicespa`;

CREATE TABLE `servicespa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicename` text,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Table structure for table `servicewaxing` */

DROP TABLE IF EXISTS `servicewaxing`;

CREATE TABLE `servicewaxing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicename` text,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` tinytext,
  `Email` tinytext,
  `Cellphone_NO` tinytext,
  `postion` text,
  `Address` tinytext,
  `civil` text,
  `Gender` text,
  `blocation` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Employee_ID` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `staff` */

insert  into `staff`(`id`,`Name`,`Email`,`Cellphone_NO`,`postion`,`Address`,`civil`,`Gender`,`blocation`) values (6,'Analilsa Borja','ana@yahoo.com','987654321','hairstylist','rial st','Single','female','Road 1 Main'),(7,'jennifer anne a. repaso','jjj@yahoo.com','09185661781','hairstylist and massage therapist','bsu','Single','female','Road 1 Main'),(8,'love','okna@yahoo.com','987654321','manicurist/massaging','bigte',NULL,'female','Road 1 Main');

/*Table structure for table `staffarchive` */

DROP TABLE IF EXISTS `staffarchive`;

CREATE TABLE `staffarchive` (
  `id` int(11) NOT NULL,
  `Name` text,
  `Email` tinytext,
  `Cellphone_NO` int(11) DEFAULT NULL,
  `postion` text,
  `Address` text,
  `civil` text,
  `Gender` text,
  `blocation` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `staffarchive` */

insert  into `staffarchive`(`id`,`Name`,`Email`,`Cellphone_NO`,`postion`,`Address`,`civil`,`Gender`,`blocation`) values (4,'lovely','lovely@yahoo.com',2147483647,'pedicurist','bulacan','Married','male','Road 1 Brach'),(5,'Corneliob','corneliomarvin16@yahoo.com',2147483647,'napakatanga','bulacan','Single','female','Road 1 Main');

/*Table structure for table `topservice` */

DROP TABLE IF EXISTS `topservice`;

CREATE TABLE `topservice` (
  `id` int(11) NOT NULL,
  `count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `topservice` */

/*Table structure for table `transhistory` */

DROP TABLE IF EXISTS `transhistory`;

CREATE TABLE `transhistory` (
  `trans_number` varchar(11) NOT NULL,
  `item_number` int(11) NOT NULL,
  `date` text,
  `servicename` text,
  `price` double DEFAULT NULL,
  `category` text,
  `Branch` text,
  `Total` int(11) DEFAULT NULL,
  PRIMARY KEY (`trans_number`,`item_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `admin` tinyint(1) DEFAULT '0',
  `branch` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`admin`,`branch`) values (1,'Cornelio','marvincornelio16@yahoo.com','$2y$10$rF1voVJVnTgS0TNTTL03NeeCvRNojXd0xMtLSyy/WLES/utYYa8Du','qn69lbkaycTfatOU2JYNiBgQDYBZM9VMrHV84JBTGXXH6PfrrXqrb1yiWQNW','2017-08-17 16:32:40','2017-12-14 14:01:52',1,NULL),(17,'Tungko','Tungko@yahoo.com','$2y$10$vNEd7J6DfgGWPR2tqJYXiu1KHlqSuv0sxHkHnXnlr14bxNAggXBnK','GAbVzFPGD9SVip2rfNWAZ9z0Lm86x2trpIt2cB42Ye7ND8b6bW0ZYD63Fs5K','2017-12-05 03:29:59','2017-12-07 17:42:20',0,'Tungko'),(18,'Road1','Road1@yahoo.com','$2y$10$hr3YuTJYLbFCiDLVsHprsexlCfGu.6oFvn7AXrqhqgviTUuh6Yrk.','RtZH7G1WZFxUtzshG82TOyNG7zrwgAQcUQjqyDFNsWYJdX1d5V4qZGflk96d','2017-12-05 19:47:25','2017-12-14 14:48:53',0,'Road1'),(19,'Sampol','Sampol@yahoo.com','$2y$10$78atcG8G8hqDCZDdtc.tsOwSEGT3WulPLHPmNUb68/ykWwQnN3B6m','RcMWbyZnhliBZinuQjhpgICwYzS1n5mibwUqjp5YUP0Sf7vtGM8LES72UB0E','2017-12-05 19:48:53','2017-12-12 07:51:42',0,'Sampol');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;