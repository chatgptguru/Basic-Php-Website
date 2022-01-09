/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.11-MariaDB : Database - master_list
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`master_list` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `master_list`;

/*Table structure for table `abouts` */

DROP TABLE IF EXISTS `abouts`;

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `problem` text DEFAULT NULL,
  `goal` text DEFAULT NULL,
  `indicator` text DEFAULT NULL,
  `assessment` text DEFAULT NULL,
  `intervention` text DEFAULT NULL,
  `risk` text DEFAULT NULL,
  `follow_up` text DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `abouts` */

insert  into `abouts`(`id`,`type`,`title`,`desc`,`problem`,`goal`,`indicator`,`assessment`,`intervention`,`risk`,`follow_up`,`created_date`,`updated_date`,`group_id`) values 
(12,'inputs','wer','wer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-04 18:45:21','2021-11-04 18:45:21',5),
(13,'actions','werwer','wer','wer','wer','wer','we','rwer\nwe\nr\nwer','','werwer','2021-11-04 18:45:25','2021-11-04 18:45:34',10),
(14,'inputs','ff','ss',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-04 22:51:31','2021-11-04 22:51:31',0),
(15,'outputs','ff','ssss',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-09 19:32:28','2021-11-09 19:32:28',0),
(16,'actions','ss','ggg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-09 23:02:22','2021-11-09 23:02:22',10),
(17,'actions','yy','hhhh',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-10 10:59:39','2021-11-10 10:59:39',4);

/*Table structure for table `burnout` */

DROP TABLE IF EXISTS `burnout`;

CREATE TABLE `burnout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UID` int(11) NOT NULL,
  `UPCC` text DEFAULT NULL,
  `Other_UPCC` text DEFAULT NULL,
  `FTE` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `Mot_P1` int(11) NOT NULL,
  `Mot_P2` int(11) NOT NULL,
  `Mot_P3` int(11) NOT NULL,
  `Mot_P4` int(11) NOT NULL,
  `Mot_A1` int(11) NOT NULL,
  `Mot_A2` int(11) NOT NULL,
  `Mot_A3` int(11) NOT NULL,
  `Mot_A4` int(11) NOT NULL,
  `Mot_M1` int(11) NOT NULL,
  `Mot_M2` int(11) NOT NULL,
  `Mot_M3` int(11) NOT NULL,
  `Mot_M4` int(11) NOT NULL,
  `Mot_M5` int(11) NOT NULL,
  `TCI_V1` int(11) NOT NULL,
  `TCI_V2` int(11) NOT NULL,
  `TCI_V3` int(11) NOT NULL,
  `TCI_V4` int(11) NOT NULL,
  `TCI_V5` int(11) NOT NULL,
  `TCI_PS1` int(11) NOT NULL,
  `TCI_PS2` int(11) NOT NULL,
  `TCI_PS3` int(11) NOT NULL,
  `TCI_PS4` int(11) NOT NULL,
  `TCI_TO1` int(11) NOT NULL,
  `TCI_TO2` int(11) NOT NULL,
  `TCI_TO3` int(11) NOT NULL,
  `TCI_IS1` int(11) NOT NULL,
  `TCI_IS2` int(11) NOT NULL,
  `TCI_IS3` int(11) NOT NULL,
  `Burn_1` int(11) NOT NULL,
  `Burn_2` int(11) NOT NULL,
  `Burn_3` int(11) NOT NULL,
  `Burn_4` int(11) NOT NULL,
  `Burn_5` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `burnout` */

insert  into `burnout`(`id`,`UID`,`UPCC`,`Other_UPCC`,`FTE`,`created_at`,`Mot_P1`,`Mot_P2`,`Mot_P3`,`Mot_P4`,`Mot_A1`,`Mot_A2`,`Mot_A3`,`Mot_A4`,`Mot_M1`,`Mot_M2`,`Mot_M3`,`Mot_M4`,`Mot_M5`,`TCI_V1`,`TCI_V2`,`TCI_V3`,`TCI_V4`,`TCI_V5`,`TCI_PS1`,`TCI_PS2`,`TCI_PS3`,`TCI_PS4`,`TCI_TO1`,`TCI_TO2`,`TCI_TO3`,`TCI_IS1`,`TCI_IS2`,`TCI_IS3`,`Burn_1`,`Burn_2`,`Burn_3`,`Burn_4`,`Burn_5`) values 
(5,1,'PCC','rety','FT','0000-00-00 00:00:00',2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,4,2,5,1,1,1,1,2,1,1,1,1,1,1,1,1,1),
(6,1,'RN','asdf','Cas','0000-00-00 00:00:00',3,2,2,3,2,4,3,4,4,4,4,1,4,4,3,1,4,2,5,2,4,4,4,2,4,2,3,5,2,4,4,5,4);

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `groups` */

insert  into `groups`(`id`,`name`) values 
(1,'group1'),
(2,'group2'),
(3,'group3'),
(4,'groupA'),
(5,'groupB'),
(6,'sdfg'),
(7,'test roup1'),
(8,'group ABC'),
(9,'group ABCd'),
(10,'group AAA'),
(11,'group BBB');

/*Table structure for table `nps` */

DROP TABLE IF EXISTS `nps`;

CREATE TABLE `nps` (
  `UID` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `reason` text NOT NULL,
  `improvements` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `nps` */

insert  into `nps`(`UID`,`score`,`reason`,`improvements`,`email`) values 
(0,2,'','',''),
(0,2,'','',''),
(0,4,'','',''),
(0,4,'','',''),
(0,9,'','',''),
(3,6,'','',''),
(3,7,'','',''),
(3,8,'','',''),
(1,3,'','',''),
(1,9,'aaa','sdfg','admin@admin.com'),
(1,4,'aaa','asdf','admin@admin.com'),
(1,2,'adsf','asdf','monolit2048@gmail.com'),
(1,3,'aaa','fdas','monolit2048@gmail.com'),
(1,4,'dd','ww','admin@admin.com'),
(1,2,'aaa','sdf','monolit2048@gmail.com'),
(1,2,'aaa','asdf','admin@admin.com'),
(1,2,'asdf','fdsa','webpioneer23@gmail.com'),
(1,2,'asdf','fdsa','admin@gmail.com'),
(1,2,'asdf','fdsa','admin@gmail.com');

/*Table structure for table `popepc` */

DROP TABLE IF EXISTS `popepc`;

CREATE TABLE `popepc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UID` int(11) NOT NULL,
  `pc1` int(11) NOT NULL,
  `pc2` int(11) NOT NULL,
  `pc3` int(11) NOT NULL,
  `pc4` int(11) NOT NULL,
  `pc5` int(11) NOT NULL,
  `pc6` int(11) NOT NULL,
  `pc7` int(11) NOT NULL,
  `pc8` int(11) NOT NULL,
  `pc9` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `popepc` */

insert  into `popepc`(`id`,`UID`,`pc1`,`pc2`,`pc3`,`pc4`,`pc5`,`pc6`,`pc7`,`pc8`,`pc9`,`created_at`) values 
(5,1,2,3,4,4,2,4,4,4,3,'0000-00-00 00:00:00'),
(6,1,1,3,4,3,4,3,4,4,2,'0000-00-00 00:00:00'),
(7,1,2,3,3,5,2,5,2,3,3,'0000-00-00 00:00:00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `company` text NOT NULL,
  `company_id` int(11) NOT NULL,
  `survey1` int(11) NOT NULL,
  `survey1_comp` int(11) NOT NULL,
  `survey2` int(11) NOT NULL,
  `survey2_comp` int(11) NOT NULL,
  `survey3` int(11) NOT NULL,
  `survey3_comp` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`company`,`company_id`,`survey1`,`survey1_comp`,`survey2`,`survey2_comp`,`survey3`,`survey3_comp`,`created_at`) values 
(2,'admin1','e00cf25ad42683b3df678c61f42c6bda','none1',2,0,0,0,0,0,0,'2021-04-27 15:24:52'),
(3,'admin','21232f297a57a5a743894a0e4a801fc3','a company',1,1,0,1,1,1,1,'2021-04-27 16:17:03'),
(4,'user1','24c9e15e52afc47c225b757e7bee1f9d','company2',2,1,0,1,0,0,0,'2021-05-23 16:42:14');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
