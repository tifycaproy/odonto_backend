/*
SQLyog Ultimate v8.3 
MySQL - 5.5.5-10.1.36-MariaDB : Database - odonto
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`odonto` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `odonto`;

/*Table structure for table `estados_civiles` */

DROP TABLE IF EXISTS `estados_civiles`;

CREATE TABLE `estados_civiles` (
  `id_estado_civil` int(11) NOT NULL AUTO_INCREMENT,
  `estado_civil` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estado_civil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `estados_civiles` */

insert  into `estados_civiles`(`id_estado_civil`,`estado_civil`) values (1,'Soltero'),(2,'Casado'),(3,'Diviorciado'),(4,'Viudo');

/*Table structure for table `pacientes` */

DROP TABLE IF EXISTS `pacientes`;

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `id_tipo_sangre` int(11) NOT NULL,
  `id_estado_civil` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `pacientes` */

insert  into `pacientes`(`id`,`nombres`,`apellidos`,`id_tipo_sangre`,`id_estado_civil`) values (1,'Freddy','Peñalver',1,1),(2,'Freddy','Peñalver',1,1);

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `role_user` */

insert  into `role_user`(`id`,`role_id`,`user_id`,`created_at`,`updated_at`) values (1,1,1,'2018-10-19 16:06:42','0000-00-00 00:00:00'),(2,1,2,'2018-10-19 16:06:43','0000-00-00 00:00:00'),(3,1,3,'2018-10-19 16:06:45','0000-00-00 00:00:00'),(4,1,4,'2018-10-19 16:06:47','0000-00-00 00:00:00'),(5,1,5,'2018-10-19 16:06:48','0000-00-00 00:00:00');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`created_at`,`updated_at`,`id_usuario`) values (1,'admin',NULL,NULL,NULL),(2,'user',NULL,NULL,NULL);

/*Table structure for table `sessions` */

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text,
  `payload` text,
  `last_activity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sessions` */

insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values ('21bDUyqA7QSOz32ocP1O4Vb8owKzmwtPQgn02F7H',NULL,'123.200.2.194','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaFNJTUxTaVYyQ3hXTVY1eTA3ajRxTDRxbTh4cGgwSTdoTWxNekVGeCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzM1LjE1My4yNTAuMTI4Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8zNS4xNTMuMjUwLjEyOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538892470),('52RkD7k4pYtc0KE1u1dvSrnR0RywkecxBnDfTVQD',NULL,'60.191.38.77','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:47.0) Gecko/20100101 Firefox/47.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSklUMVVHVFMya0dzeE1oVWF1emNZaWZBMlBFV3RGY21aT21SUWplaSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzM1LjE1My4yNTAuMTI4Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8zNS4xNTMuMjUwLjEyOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538888281),('aYpNjKNhzBvWU4k47v022vRK25BpAAHJFglr0Ko2',NULL,'191.186.20.72','','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUEsyT0hhUFpuUWxzTVFqN1hwSnE2TmdDcW1oSE1ZMUdtTzJCSkdvcyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNjoiaHR0cDovL2lwLTE3Mi0zMS00Ni0xMDAuZWMyLmludGVybmFsIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9pcC0xNzItMzEtNDYtMTAwLmVjMi5pbnRlcm5hbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538895618),('eH5mxwnR4vfFQYp6fp1t8lXYWwjyE0UIGQIAMeYG',NULL,'212.69.136.184','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.7 (KHTML, like Gecko) Version/9.1.2 Safari/601.7.7','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTWZnRk16VkwxdzNyUXhvMFVLUlJqOE90Z0ZyeEVzRENpdVpOZWFMbCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzM1LjE1My4yNTAuMTI4Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8zNS4xNTMuMjUwLjEyOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538885309),('EXyzxJ3nJ5kzDpHx5V4bbsC1rEYdyT8TzzVLqFH5',NULL,'81.30.5.158','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoidjJUbE84R2w3QzFSbnhidXRGVUtVNno1VlJDT3FJNTZ0U280WkwwYyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzM1LjE1My4yNTAuMTI4Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8zNS4xNTMuMjUwLjEyOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538915945),('eY2r3Zz4ByyBwEu5iiRyyHnpUurFGwGqAj21Oxwm',NULL,'139.162.119.197','Go-http-client/1.1','YTo0OntzOjY6Il90b2tlbiI7czo0MDoia0hKY2Z5Y0tlUHY4WFNCM2t0TlB6RFAyemlkdHhYc1lRNlhOQ1o3QSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzM1LjE1My4yNTAuMTI4Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8zNS4xNTMuMjUwLjEyOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538912743),('fAdLoatXyhmUOCN1jwgtOs212kwsr7Zdl62jtMEQ',NULL,'47.98.154.31','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoibThwenpRWmdIbzJ5VzJLWFlNd3l3RE55dUJoWU5pRWtac1lNQVphZiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzM1LjE1My4yNTAuMTI4L2luZGV4LnBocCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMzUuMTUzLjI1MC4xMjgvaW5kZXgucGhwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1538910722),('h6V6nsi4Yv3CQzMcKFHgMtql6OlUnCC6cFVlQIKu',12,'186.89.170.215','Mozilla/5.0 (Windows NT 6.1; rv:60.0) Gecko/20100101 Firefox/60.0','YTo1OntzOjY6Il90b2tlbiI7czo0MDoickhKRm43YkdOZG8yVER1d1NsaHBxeVBURHE4TnJlSmI4VXpObDZHSyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU1OiJodHRwczovL2Rldi5jb25leHBhci5jb20vcHJvY2VzYXIvZGVzY29tcHVlc3Rvcy9zb3BvcnRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTI7fQ==',1538917425),('H9egSnB0wNdU3tl6U5tSEDFjNqheWLPa5NMf7XMx',NULL,'46.148.26.2','','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMmJBN1lTWllPbFVGbmxIUDYwMThsVU1QNWU3Um1FRkNRQmlseG1YZiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzM1LjE1My4yNTAuMTI4Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8zNS4xNTMuMjUwLjEyOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538908923),('lawpLa6qDHh9YA7fYxDQVcdV30kd2XhXlCvIMLXZ',NULL,'60.191.38.77','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:47.0) Gecko/20100101 Firefox/47.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoieHQxN2w0dUU2bjRtTkZoVW12VkVNb3ZkUElzbVZJUFBMenp0WDZCdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8zNS4xNTMuMjUwLjEyOC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538888282),('r8YEgd1xKpHkpWeeG2KgNVdij6JT1RhLm4UwF8MD',NULL,'107.170.197.60','Mozilla/5.0 zgrab/0.x','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSzd3TTluQWJRMXEzSEN2NHlNaEV0ckVBY0txODdKdnp6ZmRMaE9lSiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMjoiaHR0cHM6Ly8zNS4xNTMuMjUwLjEyOCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIyOiJodHRwczovLzM1LjE1My4yNTAuMTI4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1538886887),('rpsFk5FQGHotwjCZGUEamNCM9Jt59yGksOkRt6VE',NULL,'34.227.78.61','Slackbot-LinkExpanding 1.0 (+https://api.slack.com/robots)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZG1vNUFRWlI1ajUxWUd6SHQzTW1yZzg0U3V4ZkpHZHdEUFJJaUdZMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZGV2LmNvbmV4cGFyLmNvbS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538917358),('SSprfVaOK7mQCgnNwKdDrMsF90CAvRBFBE7fDhCc',NULL,'185.153.196.3','','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYW5hb2IxUkhadEJ0YWs0WGRSVzZibHhqZ2Y0VWJRYUtsVHkwcHphQiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzM1LjE1My4yNTAuMTI4Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8zNS4xNTMuMjUwLjEyOC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538892390),('uOJzrdq2hjax7J7tKtO95VvYpgTbyQIzxqpsgfvM',NULL,'34.227.78.61','Slackbot-LinkExpanding 1.0 (+https://api.slack.com/robots)','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQko1QjZEeERER2NicERvdXpQTGpST29PSXA0VVZzQXRUYlNJYjA3cSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly9kZXYuY29uZXhwYXIuY29tIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vZGV2LmNvbmV4cGFyLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538917358),('vaICQgGFDHtgpPkbHiLCftpRlCJjB7GDGxneCD6O',NULL,'143.202.254.62','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQlZ5MmZEazdXaWh2bnkzckZDNDl4TXBjc21PNFVWU2dhZ09kOXozYyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzM1LjE1My4yNTAuMTI4Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8zNS4xNTMuMjUwLjEyOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538895123),('w47nzkPviyjQq1a5sRP87uEnEipZTgq0qX96UHIi',NULL,'165.16.37.179','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.7 (KHTML, like Gecko) Version/9.1.2 Safari/601.7.7','YTo0OntzOjY6Il90b2tlbiI7czo0MDoib3ZhRHozWWpScXRjNFlZYnBMZzl0YW1BTjN0Rng1UktCMkNWcGFWbiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzM1LjE1My4yNTAuMTI4Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8zNS4xNTMuMjUwLjEyOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538911610),('wc8Od2J9ijbqYezvWFPyDyebzBTm0OElR3e3mrib',NULL,'190.248.157.10','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoia0hIVVNDeVRFdnI3WnhxUmRWWXUyUW9wTXhoUkZxV01JMFZ0N3c2aiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzM1LjE1My4yNTAuMTI4Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8zNS4xNTMuMjUwLjEyOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538904340),('yfPhIcM5iUFT46PLnUhVEnly4CJm6whDmw8WASSG',NULL,'46.148.26.2','','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXU3eE5HNDZ1SmEwOFVyZHFNSjBiejNUNmJha3hqZ3JqajFBM2RRMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8zNS4xNTMuMjUwLjEyOC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538908923),('YTP8D2HYLXkvARSFsgifvztFuX5xLQVQiLHiwm98',NULL,'181.210.83.148','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.7 (KHTML, like Gecko) Version/9.1.2 Safari/601.7.7','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYUNhV1V3NEFhSkdiWkZwdGh1eDFmY1NoRzJBWWdqWk13M3l5Y3ZNeCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzM1LjE1My4yNTAuMTI4Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8zNS4xNTMuMjUwLjEyOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1538900547);

/*Table structure for table `tipos_sangres` */

DROP TABLE IF EXISTS `tipos_sangres`;

CREATE TABLE `tipos_sangres` (
  `id_tipo_sangre` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_sangre` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipo_sangre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tipos_sangres` */

insert  into `tipos_sangres`(`id_tipo_sangre`,`tipo_sangre`) values (1,'A'),(2,'B'),(3,'AB');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol_id` int(11) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`rol_id`,`password`,`remember_token`,`created_at`,`updated_at`,`id_usuario`) values (1,'Yoelis Mendoza','yoe318@gmail.com',1,'$2y$10$Fc/JE9rczAo7fu85rdLvJOze60KmTFG7DZPJio/Pr/TwGNuMeZkO.','1N7xKW3s9ShYq8KEvB3xofIq4FYZc3qjJc1pG3tsYIQZpQi1WoEjyf8p1q4r',NULL,'2018-04-06 01:55:50',NULL),(2,'Anthoni Rodriguez','yosec.cervino@gmail.com',2,'$2y$10$Fc/JE9rczAo7fu85rdLvJOze60KmTFG7DZPJio/Pr/TwGNuMeZkO.','X37XPRcxQ4bJ1ALz1JsvXFlhIXTYlfq9Hgpi8icyTm3JgcKxpiCIvXUQXa2T','2018-03-21 12:35:26','2018-05-09 12:46:34',NULL),(3,'María Montilla','irenemontilla16@gmail.com',1,'$2y$10$Fc/JE9rczAo7fu85rdLvJOze60KmTFG7DZPJio/Pr/TwGNuMeZkO.','iVqdqEstXzSILBlsbSOUVu8K6Q8I75lvqfuCfjMY2R570LsYYaUHJgnK6ETj','2018-08-21 00:00:00','2018-08-21 00:00:00',NULL),(4,'Carlos Palacios','carlosspf24@gmail.com',1,'$2y$10$Fc/JE9rczAo7fu85rdLvJOze60KmTFG7DZPJio/Pr/TwGNuMeZkO.','aX16sIuEUMtFYAJncvtP3Y4daKOyC0qEcbvJRk6dN3cV3qZLr0NBhV92REZv','2018-08-22 00:00:00','2018-09-18 23:23:16',NULL),(5,'Jose Bello','jbello262@gmail.com',1,'$2y$10$Fc/JE9rczAo7fu85rdLvJOze60KmTFG7DZPJio/Pr/TwGNuMeZkO.','TQvYCWA6a1qWBv1HWrMxKFOo0tRcSA85LT8TYdVvpt9TWNPloVTNKuwxwSmH','2018-08-22 00:00:00','2018-08-22 00:00:00',NULL),(6,'Cristina Alves','ilbiaalves@gmail.com',1,'$2y$10$OYsSEqfiy8RX7Zr5fAYv2.4U84LG1RilTjeBz9YX3hW5wUiKehwCy','I7xipVKlCpxqdrr4R7NkMdT8nX9LL3lya1vc8apqwXEIrR4K1WwidkvKljF4','2018-09-03 21:53:24','2018-09-04 14:46:29',NULL),(7,'Brian','bgines@conexpar.com',1,'$2y$10$pek04Ur6Ye8Mdju.GJiCKeM6LzOSYkx72CDd2jCLajmJzrSOpPadu',NULL,'2018-09-12 00:11:27','2018-09-12 00:13:36',NULL),(8,'Jhonatan Gonzalez','thannajo@gmail.com',1,'$2y$10$8fv/JE9sCmotIkptp.GtZeb3fRWurnUsnX9Ozk7OWpsGkpEFt9K/i','151JOdi6KKtZGfZZYgYXjvsWXkTzfiLWgBQZ0XwJguIwsqGEayFLjf9MeZ9M','2018-09-12 23:07:22','2018-09-12 23:14:14',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
