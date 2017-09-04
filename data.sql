/*
SQLyog Ultimate v12.14 (64 bit)
MySQL - 10.2.3-MariaDB-log : Database - rashel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rashel` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT '',
  `parent_id` int(10) unsigned DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`id`,`name`,`description`,`parent_id`,`deleted_at`,`created_at`,`updated_at`) values 
(1,'None','',0,NULL,NULL,NULL),
(2,'Factory','',0,NULL,NULL,NULL),
(3,'SMD','',2,NULL,NULL,NULL),
(4,'PMD','',2,NULL,NULL,NULL),
(5,'Engineering','',2,NULL,NULL,NULL),
(6,'Cultivation','',0,NULL,NULL,NULL),
(7,'Distribution','',0,NULL,NULL,NULL),
(8,'Travelling','',0,NULL,NULL,NULL),
(9,NULL,NULL,NULL,NULL,'2017-08-12 06:22:36','2017-08-12 06:22:36');

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `mobile_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `customers` */

/*Table structure for table `designations` */

DROP TABLE IF EXISTS `designations`;

CREATE TABLE `designations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT '',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `designations` */

insert  into `designations`(`id`,`name`,`description`,`deleted_at`,`created_at`,`updated_at`) values 
(1,'test1','',NULL,NULL,NULL),
(2,'test2','',NULL,NULL,NULL),
(3,'test3','',NULL,NULL,NULL),
(4,'test4','',NULL,NULL,NULL),
(5,'test5','',NULL,NULL,NULL);

/*Table structure for table `invoices` */

DROP TABLE IF EXISTS `invoices`;

CREATE TABLE `invoices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT 0,
  `user_id` int(10) unsigned DEFAULT NULL,
  `invoice_date` date DEFAULT '2017-08-12',
  `vat_rate` decimal(15,3) DEFAULT 0.000,
  `vat_total` decimal(15,3) DEFAULT 0.000,
  `sub_total` decimal(15,3) DEFAULT 0.000,
  `discount` decimal(15,3) DEFAULT 0.000,
  `grand_total` decimal(15,3) DEFAULT 0.000,
  `total_payable` decimal(15,3) DEFAULT 0.000,
  `payment_type` enum('Cash','Card','both') COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `card_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `bank_amount` decimal(15,3) DEFAULT 0.000,
  `cash_amount` decimal(15,3) DEFAULT 0.000,
  `payment_status` tinyint(4) DEFAULT 0,
  `in_words` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `invoices` */

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invoice_id` int(10) unsigned DEFAULT 0,
  `product_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT 0,
  `unit_price` decimal(15,3) DEFAULT 0.000,
  `discount_percent` decimal(15,3) DEFAULT 0.000,
  `sub_total` decimal(15,3) DEFAULT 0.000,
  `vat_rate` decimal(15,3) DEFAULT 0.000,
  `vat_total` decimal(15,3) DEFAULT 0.000,
  `total` decimal(15,3) DEFAULT 0.000,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `items` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(23,'2014_10_12_000000_create_tickets_table',1),
(24,'2014_10_12_000000_create_users_table',1),
(25,'2014_10_12_100000_create_password_resets_table',1),
(26,'2017_05_20_102220_create_categories_table',1),
(27,'2017_05_20_102220_create_designations_table',1),
(28,'2017_05_20_102220_create_pops_table',1),
(29,'2017_05_20_102220_create_sub_centres _table',1),
(30,'2017_05_20_102333_create_products_table',1),
(31,'2017_05_20_102428_create_stocks_table',1),
(32,'2017_05_20_102446_create_invoices_table',1),
(33,'2017_05_21_070742_create_customers_table',1),
(34,'2017_05_27_084843_create_items_table',1),
(35,'2017_07_29_153446_create_return_policies_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pops` */

DROP TABLE IF EXISTS `pops`;

CREATE TABLE `pops` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT '',
  `user_id` int(11) DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `pops` */

insert  into `pops`(`id`,`name`,`description`,`user_id`,`deleted_at`,`created_at`,`updated_at`) values 
(1,'pop1','',0,NULL,NULL,NULL),
(2,'pop12','',0,NULL,NULL,NULL),
(3,'pop123','',0,NULL,NULL,NULL);

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned DEFAULT 0,
  `user_id` int(10) unsigned DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `products` */

/*Table structure for table `return_policies` */

DROP TABLE IF EXISTS `return_policies`;

CREATE TABLE `return_policies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invoice_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `salesman_id` int(10) unsigned NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `return_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `return_policies` */

/*Table structure for table `stocks` */

DROP TABLE IF EXISTS `stocks`;

CREATE TABLE `stocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `supplier_id` int(10) unsigned DEFAULT 0,
  `product_id` int(10) unsigned DEFAULT 0,
  `barcode_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `buying_price` decimal(15,3) DEFAULT 0.000,
  `sell_price` decimal(15,3) DEFAULT 0.000,
  `profit_percent` decimal(15,3) DEFAULT 0.000,
  `discount_percent` decimal(15,3) DEFAULT 0.000,
  `flat_discount` decimal(15,3) DEFAULT 0.000,
  `vat_rate` decimal(15,3) DEFAULT 0.000,
  `vat_total` decimal(15,3) DEFAULT 0.000,
  `sub_total` decimal(8,2) DEFAULT 0.00,
  `stock_in` decimal(15,3) DEFAULT 0.000,
  `stock_out` decimal(15,3) DEFAULT 0.000,
  `stock_balance` decimal(15,3) DEFAULT 0.000,
  `created_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `updated_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `stocks` */

/*Table structure for table `sub_centres` */

DROP TABLE IF EXISTS `sub_centres`;

CREATE TABLE `sub_centres` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT '',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `sub_centres` */

insert  into `sub_centres`(`id`,`name`,`description`,`deleted_at`,`created_at`,`updated_at`) values 
(1,'test1','',NULL,NULL,NULL),
(2,'test12','',NULL,NULL,NULL),
(3,'test123','',NULL,NULL,NULL);

/*Table structure for table `tickets` */

DROP TABLE IF EXISTS `tickets`;

CREATE TABLE `tickets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT 0,
  `sub_centre_id` int(11) DEFAULT 0,
  `pop_id` int(11) DEFAULT 0,
  `request_date` date DEFAULT NULL,
  `work_dscription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `approval_status` tinyint(4) DEFAULT 2,
  `approval_id` int(11) DEFAULT 0,
  `approve_date` date DEFAULT NULL,
  `last_day_to_return` date DEFAULT NULL,
  `received_date` date DEFAULT NULL,
  `received_by` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tickets` */

insert  into `tickets`(`id`,`user_id`,`sub_centre_id`,`pop_id`,`request_date`,`work_dscription`,`approval_status`,`approval_id`,`approve_date`,`last_day_to_return`,`received_date`,`received_by`,`created_at`,`updated_at`) values 
(1,1,1,1,'2017-08-13','naomiergfgf',0,1,NULL,NULL,NULL,0,'2017-08-12 06:33:01','2017-08-13 15:02:37'),
(2,1,1,1,'2017-08-13','tf',1,1,NULL,NULL,NULL,0,'2017-08-12 06:35:55','2017-08-13 15:03:52'),
(3,1,1,1,'2017-08-13','tf',1,1,NULL,NULL,NULL,0,'2017-08-12 06:50:02','2017-08-13 14:58:27'),
(4,1,1,1,'2017-08-03','asdfghj',2,0,NULL,NULL,NULL,0,'2017-08-12 06:51:00','2017-08-12 06:51:00'),
(5,2,1,1,'2017-08-13','gt',1,1,NULL,NULL,NULL,0,NULL,'2017-08-13 15:04:03');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `designation_id` int(11) DEFAULT 0,
  `sub_centre_id` int(11) DEFAULT 0,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` enum('super','admin','user') COLLATE utf8_unicode_ci DEFAULT 'admin',
  `contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `additional_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`designation_id`,`sub_centre_id`,`username`,`role`,`contact`,`additional_no`,`address`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'user','admin12@gmail.com',2,1,'farzana','admin','013242','4656','dffddf','$2y$10$/Zj1MB/k0DtKL.i1/5ekW.Iaxov4j1ByS3823A8fmBh445hCl0WBG','W4xBuwe7Ip1aHJ72LPcMTAQ4c20XrGY36BwOmJbNf4QBL8xG74skO12E4HI8',NULL,NULL),
(2,'farzana','farzananaomi@gmail.com',2,2,'harmony1','user','23456789','farzananaomi@gmail.com','y','$2y$10$/Zj1MB/k0DtKL.i1/5ekW.Iaxov4j1ByS3823A8fmBh445hCl0WBG','b3AlqgFk7XTyFebCr6FTTFtSMOXnnAlZQJGEXd3psPq9rLEsR202kBM0XWqm','2017-08-12 13:28:55','2017-08-12 13:28:55'),
(3,'naomi','tslrer@fggbg.com',1,1,'harmony1','super','23456789','admin12@gmail.com','dfghj','$2y$10$/Zj1MB/k0DtKL.i1/5ekW.Iaxov4j1ByS3823A8fmBh445hCl0WBG',NULL,'2017-08-12 14:54:41','2017-08-12 14:54:41');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
