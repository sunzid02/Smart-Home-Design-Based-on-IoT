/*
SQLyog Community v12.5.0 (64 bit)
MySQL - 5.7.19 : Database - thesis_update
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
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

insert  into `checks`(`ID`,`IP`,`Email`,`Phone`) values
(1,'172.162.16.2','abc@x.com','01912969336'),
(2,'192.185.10.5','xyz@abc.com','01680569800');

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Size` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `files` */

insert  into `files`(`ID`,`Name`,`Size`) values
(6,'cu.png','145293'),
(7,'mm.png','533883'),
(8,'pp.png','614058');

/*Table structure for table `guest_room_device` */

DROP TABLE IF EXISTS `guest_room_device`;

CREATE TABLE `guest_room_device` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `device` varchar(20) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `guest_room_device` */

insert  into `guest_room_device`(`id`,`device`,`status`) values
(1,'Fan',1),
(2,'Light',1);

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
  `switchOn` tinyint(1) NOT NULL,
  `switchOff` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `rooms` */

insert  into `rooms`(`id`,`device`,`switchOn`,`switchOff`) values
(1,'Light',0,0),
(2,'Fan',0,0),
(3,'AC',1,1),
(4,'TV',0,0);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`role`,`remember_token`,`created_at`,`updated_at`) values
(1,'Admin','admin@yahoo.com','$2y$10$L9zYYn.NCda/N9qLc101reQVle59uPr43WFzfRoPbdUzUSdZsAXNC','admin','W69bBDZr5H2lgSnPUsqzx4NuTNQ1CpchdcyY9jjTkdH8gWTRcxzT9KxFTtje','2018-05-25 04:59:00','2018-05-25 04:59:00'),
(2,'Sub Admin','subadmin@xample.com','$2y$10$rnxdyInqxWKJed3Kp5vNW.MYzel/GCNxSVE0KY2f4yn8pHA/x.PZi','subadmin','qIR5Isvw4j8corqySfUhe9VyBhYb8BPP9zpJcIGqLRM6YV7UtzmyXpvo1U27','2018-05-25 05:00:30','2018-05-25 05:00:30'),
(3,'Guest','guest@xample.com','$2y$10$TeH..NzMX0D5TNzoayol0uWAcV9S.Mi.lqVUXh.vY0eItaahnlDma','guest','h5uSTNCKLQ9ph33B3jYUtx3anLXqvWTq7hfLiTYBs8lOqhqxtMcg9LwPHENe','2018-05-25 05:01:35','2018-05-25 05:01:35'),
(5,'joy saha','joysaha3112@gmail.com','$2y$10$8sVnkjB2ZxQbZW8CSJD60OqDWVz/WmcsLLgqgUmD0C1v.h7iAhKLe','subadmin','vyht18lR8x9x93FlkGufYVkQrhni1AAqPM2KIg7kc4sbiBL8nz','2018-05-25 14:53:24','2018-05-25 14:53:24'),
(7,'johura','aajobandfriend@gmail.com','$2y$10$HCdM7djbtBHtkL092B/iQOF12AA/LbQW7fxCkBdY2afbT8aJiHMsu','guest','VVoSa8xpRKefr8BBt3rIZydish1eEUpeuqyhlRTv1h7nEdbQXL','2018-05-25 15:41:55','2018-05-25 15:41:55'),
(8,'zia','zia@yahoo.com','$2y$10$51.TxMfeSvFZURnujVVYreOpkGCAMwohTKAS1Ot5ti892lpfa1sZi','guest','wYf5E88frDeavn38E3mfed71qvO73BZJ7ubusuJd33PCebuupvfbM0ZABxTn','2018-05-26 16:05:18','2018-05-26 16:05:18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
