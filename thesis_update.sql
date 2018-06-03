/*
SQLyog Enterprise Trial - MySQL GUI v7.11 
MySQL - 5.5.5-10.1.28-MariaDB : Database - thesis_update
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`thesis_update` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `thesis_update`;

/*Table structure for table `checks` */

DROP TABLE IF EXISTS `checks`;

CREATE TABLE `checks` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `IP` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `IP` (`IP`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Phone` (`Phone`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `checks` */

insert  into `checks`(`ID`,`IP`,`Email`,`Phone`) values (1,'172.162.16.2','abc@x.com','01912969336'),(2,'192.185.10.5','xyz@abc.com','01680569800');

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Size` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `files` */

insert  into `files`(`ID`,`Name`,`Size`) values (6,'cu.png','145293'),(7,'mm.png','533883'),(8,'pp.png','614058'),(9,'xtra.png','104327');

/*Table structure for table `guest_room_device` */

DROP TABLE IF EXISTS `guest_room_device`;

CREATE TABLE `guest_room_device` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `device` varchar(20) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `guest_room_device` */

insert  into `guest_room_device`(`id`,`device`,`status`) values (1,'Fan',0),(2,'Light',1);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `rooms` */

DROP TABLE IF EXISTS `rooms`;

CREATE TABLE `rooms` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `device` varchar(20) NOT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `rooms` */

insert  into `rooms`(`id`,`device`,`status`) values (1,'Light',1),(2,'Fan',0),(3,'AC',0),(4,'TV',0),(5,'Laptop',0),(6,'Almirah',0),(7,'Refrigerator',0);

/*Table structure for table `subadmin_room_device` */

DROP TABLE IF EXISTS `subadmin_room_device`;

CREATE TABLE `subadmin_room_device` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `device` varchar(20) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `subadmin_room_device` */

insert  into `subadmin_room_device`(`id`,`device`,`status`) values (1,'Light',0),(2,'Fan',0),(3,'AC',1),(4,'TV',1),(7,'Refrigerator',0);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(13) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`role`,`remember_token`,`created_at`,`updated_at`,`ip`,`phone`,`status`) values (1,'Admin','admin@yahoo.com','$2y$10$L9zYYn.NCda/N9qLc101reQVle59uPr43WFzfRoPbdUzUSdZsAXNC','admin','EA9zqmjJaJe92fjdVnTM34xg1rPpM8HNR66RK8JPhzk0FfuFnR9P1y80p7hB','2018-05-25 04:59:00','2018-05-25 04:59:00','172.162.16.2',1674563623,1),(2,'Sub Admin','subadmin@xample.com','$2y$10$rnxdyInqxWKJed3Kp5vNW.MYzel/GCNxSVE0KY2f4yn8pHA/x.PZi','subadmin','iBcFelE4DYeRmEdZIUGZ8aQACo6ajuwDUObT6pSUfjjYdO5ZVFckSvWOFLzO','2018-05-25 05:00:30','2018-06-02 14:49:01','192.168.0.1',1674563625,1),(3,'Guest','guest@xample.com','$2y$10$TeH..NzMX0D5TNzoayol0uWAcV9S.Mi.lqVUXh.vY0eItaahnlDma','guest','Q4UVBNZym6jMorMhV7shVkcZ11zw2u2jwhVIMYkdVin6iumuHlGgN0GpDJuJ','2018-05-25 05:01:35','2018-06-02 14:09:05','192.168.0.2',1234567892,1),(15,'work','abc@x.com','$2y$10$fjpJAaeQ2BdV2xdDN5tUCOwT7nW.aH1EBgwAlKsnkK0APvo/9EJQC','subadmin','i4AK61kNtA5saOJBOEHaOXW6DA37XkZ0hyBQU9lgVBOkrYyd14','2018-06-02 15:45:51','2018-06-02 15:45:51','192.168.0.5',1912969338,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
