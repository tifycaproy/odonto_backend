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

/*Table structure for table `enfermedades` */

DROP TABLE IF EXISTS `enfermedades`;

CREATE TABLE `enfermedades` (
  `id_enfermedad` int(11) NOT NULL AUTO_INCREMENT,
  `enfermedad` varchar(254) NOT NULL,
  PRIMARY KEY (`id_enfermedad`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `enfermedades` */

insert  into `enfermedades`(`id_enfermedad`,`enfermedad`) values (1,'Enf. Cardiovascular'),(2,'Cáncer'),(3,'Presion arterial alta'),(4,'Presion arterial baja '),(5,'VIH'),(6,'Fiebre Reumática'),(7,'Trastorno Nervioso'),(8,'Sinisitis'),(9,'Enf. Gastrointestinales'),(10,'Asma'),(11,'Enf. Renal'),(12,'Tuberculosis'),(13,'Diabetes'),(14,'Artritis'),(15,'Hepatitis'),(16,'Glándulas Tiroides ');

/*Table structure for table `estados_civiles` */

DROP TABLE IF EXISTS `estados_civiles`;

CREATE TABLE `estados_civiles` (
  `id_estado_civil` int(11) NOT NULL AUTO_INCREMENT,
  `estado_civil` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estado_civil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `estados_civiles` */

insert  into `estados_civiles`(`id_estado_civil`,`estado_civil`) values (1,'Soltero'),(2,'Casado'),(3,'Diviorciado'),(4,'Viudo');

/*Table structure for table `historias_medicas` */

DROP TABLE IF EXISTS `historias_medicas`;

CREATE TABLE `historias_medicas` (
  `id_historia_medica` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `ultima_consulta_medica` date DEFAULT NULL,
  `motivo_medica` varchar(254) DEFAULT NULL,
  `ultima_consulta_odontologica` date DEFAULT NULL,
  `motivo_odontologica` varchar(254) DEFAULT NULL,
  `bajo_tratamiento` char(2) NOT NULL,
  `cual_tratamiento` varchar(254) DEFAULT NULL,
  `toma_medicina` char(2) NOT NULL,
  `nombre_medicina` varchar(254) DEFAULT NULL,
  `hospitalizado` char(2) NOT NULL,
  `causa_hospitalizacion` varchar(254) DEFAULT NULL,
  `embarazada` char(2) NOT NULL,
  `problema_anestesico_dental` char(2) NOT NULL,
  `alergia_m` char(2) NOT NULL,
  `alergia_medicamentos` varchar(254) DEFAULT NULL,
  `alergia_a` char(2) NOT NULL,
  `alergia_alimentos` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id_historia_medica`),
  KEY `FK_historias_medicas_id_paciente` (`id_paciente`),
  CONSTRAINT `FK_historias_medicas_id_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `historias_medicas` */

insert  into `historias_medicas`(`id_historia_medica`,`id_paciente`,`ultima_consulta_medica`,`motivo_medica`,`ultima_consulta_odontologica`,`motivo_odontologica`,`bajo_tratamiento`,`cual_tratamiento`,`toma_medicina`,`nombre_medicina`,`hospitalizado`,`causa_hospitalizacion`,`embarazada`,`problema_anestesico_dental`,`alergia_m`,`alergia_medicamentos`,`alergia_a`,`alergia_alimentos`) values (1,9,'2018-11-15','32132121','2018-11-22','321321','Si','32132123','Si','321321321','Si','1321231','No','Si','Si','12132','No','321321'),(4,12,NULL,NULL,NULL,NULL,'No',NULL,'No',NULL,'No',NULL,'No','No','No',NULL,'No',NULL),(5,10,'2018-11-01','1','2018-11-01','1','Si','1','Si','1','Si','1','Si','Si','Si','1','No','1'),(9,11,NULL,'3',NULL,'3','No',NULL,'No',NULL,'No',NULL,'No','No','No','3','No','3'),(10,8,'2018-11-10','10','2018-11-10',NULL,'No',NULL,'Si','10','Si','10','No','No','No','1010','No','10');

/*Table structure for table `historias_medicas_enfermedades` */

DROP TABLE IF EXISTS `historias_medicas_enfermedades`;

CREATE TABLE `historias_medicas_enfermedades` (
  `id_historia_medica_enfermedad` int(11) NOT NULL AUTO_INCREMENT,
  `id_historia_medica` int(11) NOT NULL,
  `id_enfermedad` int(11) NOT NULL,
  PRIMARY KEY (`id_historia_medica_enfermedad`),
  KEY `FK_historias_medicas_enfermedades_id_historia_medica` (`id_historia_medica`),
  KEY `FK_historias_medicas_enfermedades_id_enfermedad` (`id_enfermedad`),
  CONSTRAINT `FK_historias_medicas_enfermedades_id_enfermedad` FOREIGN KEY (`id_enfermedad`) REFERENCES `enfermedades` (`id_enfermedad`) ON UPDATE CASCADE,
  CONSTRAINT `FK_historias_medicas_enfermedades_id_historia_medica` FOREIGN KEY (`id_historia_medica`) REFERENCES `historias_medicas` (`id_historia_medica`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

/*Data for the table `historias_medicas_enfermedades` */

insert  into `historias_medicas_enfermedades`(`id_historia_medica_enfermedad`,`id_historia_medica`,`id_enfermedad`) values (14,4,1),(15,4,9),(16,4,11),(26,5,1),(27,5,2),(28,5,7),(29,5,8),(38,10,1),(39,10,2),(40,10,5),(41,10,8),(42,10,11),(43,10,14);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_09_13_214338_create_roles_table',1),(4,'2018_09_13_214643_create_role_user_table',1);

/*Table structure for table `ocupaciones` */

DROP TABLE IF EXISTS `ocupaciones`;

CREATE TABLE `ocupaciones` (
  `id_ocupacion` int(11) NOT NULL AUTO_INCREMENT,
  `ocupacion` varchar(250) NOT NULL,
  PRIMARY KEY (`id_ocupacion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ocupaciones` */

insert  into `ocupaciones`(`id_ocupacion`,`ocupacion`) values (1,'Estudiante'),(2,'Doctor');

/*Table structure for table `pacientes` */

DROP TABLE IF EXISTS `pacientes`;

CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `identificacion` varchar(20) DEFAULT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `direccion` varchar(254) DEFAULT NULL,
  `seguro_medico` varchar(120) DEFAULT NULL,
  `nss` varchar(120) DEFAULT NULL,
  `nombre_emergencia` varchar(120) DEFAULT NULL,
  `telefono_emergencia` varchar(50) DEFAULT NULL,
  `menor` char(2) DEFAULT 'NO',
  `id_pais` int(11) NOT NULL,
  `id_tipo_sangre` int(11) NOT NULL,
  `id_estado_civil` int(11) NOT NULL,
  `id_sexo` int(11) NOT NULL,
  `id_ocupacion` int(11) NOT NULL,
  `id_parentesco` int(11) DEFAULT '1',
  `id_referidor` int(11) DEFAULT '1',
  PRIMARY KEY (`id_paciente`),
  KEY `FK_pacientes_id_sexo` (`id_sexo`),
  KEY `FK_pacientes_id_pais` (`id_pais`),
  KEY `FK_pacientes_id_tipo_sangre` (`id_tipo_sangre`),
  KEY `FK_pacientes_id_estado_civil` (`id_estado_civil`),
  KEY `FK_pacientes_id_ocupacion` (`id_ocupacion`),
  KEY `FK_pacientes_id_parentesco` (`id_parentesco`),
  KEY `FK_pacientes_id_referidor` (`id_referidor`),
  CONSTRAINT `FK_pacientes_id_estado_civil` FOREIGN KEY (`id_estado_civil`) REFERENCES `estados_civiles` (`id_estado_civil`) ON UPDATE CASCADE,
  CONSTRAINT `FK_pacientes_id_ocupacion` FOREIGN KEY (`id_ocupacion`) REFERENCES `ocupaciones` (`id_ocupacion`) ON UPDATE CASCADE,
  CONSTRAINT `FK_pacientes_id_pais` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id_pais`) ON UPDATE CASCADE,
  CONSTRAINT `FK_pacientes_id_parentesco` FOREIGN KEY (`id_parentesco`) REFERENCES `parentescos` (`id_parentesco`) ON UPDATE CASCADE,
  CONSTRAINT `FK_pacientes_id_referidor` FOREIGN KEY (`id_referidor`) REFERENCES `referidores` (`id_referidor`) ON UPDATE CASCADE,
  CONSTRAINT `FK_pacientes_id_sexo` FOREIGN KEY (`id_sexo`) REFERENCES `sexos` (`id_sexo`) ON UPDATE CASCADE,
  CONSTRAINT `FK_pacientes_id_tipo_sangre` FOREIGN KEY (`id_tipo_sangre`) REFERENCES `tipos_sangres` (`id_tipo_sangre`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `pacientes` */

insert  into `pacientes`(`id_paciente`,`identificacion`,`nombres`,`apellidos`,`fecha_nacimiento`,`edad`,`telefono`,`celular`,`email`,`direccion`,`seguro_medico`,`nss`,`nombre_emergencia`,`telefono_emergencia`,`menor`,`id_pais`,`id_tipo_sangre`,`id_estado_civil`,`id_sexo`,`id_ocupacion`,`id_parentesco`,`id_referidor`) values (1,'555','123456','2311321','2002-12-12',35,'02126715181','054226666','hectornaspe@gmail.com','su direccion',NULL,NULL,NULL,NULL,'NO',1,2,2,1,2,1,1),(2,NULL,'12313132131321','321321321212',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'NO',1,1,2,1,1,1,1),(3,'30142589','pedro','de los montes','1950-12-15',50,'12332132',NULL,'jose@gmail.com','su direccion','servicio medico','32',NULL,NULL,'NO',1,2,3,2,1,1,2),(4,NULL,'12313132131321','321321321212',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'NO',1,1,2,1,1,1,1),(5,NULL,'6598797987','8888888888888888',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'NO',1,2,1,1,1,1,1),(6,NULL,'4545454545454','45454545454',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'NO',1,1,3,1,1,1,1),(7,'15801757','Freddy Rafael','Peñalver Nuñez','1983-09-13',35,'02126150997','04166084655','freddyp19@gmail.com','Av. Andres Bello, Centro Andres Bello, Torre Oeste, Piso PH Ofc. 8','servicio medico','32','Annys Aponte','04263908880','NO',1,2,2,2,1,7,2),(8,'555','freddy pealver','Carrasquero','2018-11-06',35,'2222','2222','Mercocentroventas@gmail.com','2323222323222222222222222222222222222222222222222222222222222222222','22222','23232323',NULL,NULL,'NO',1,2,1,2,1,1,3),(9,'555','Carmen','Morales','2018-11-20',35,'321321','321321','veronicapochet7@gmail.com','123132 123121231213 2121231122313213213 213212312121321','1231321','32132121',NULL,NULL,'NO',1,1,1,1,2,1,2),(10,'1','1','1','2018-11-01',1,'1','1','hectornaspe@gmail.com','1','1','1','1','1','NO',1,1,1,1,1,2,2),(11,'3','3','3','2018-11-01',3,'3','3','carlosspf24@gmail.com','6333','3','3',NULL,NULL,'NO',1,1,3,1,1,1,2),(12,'3','3','3','2018-11-05',3,'3','3','32@ggg.com','333','3','3',NULL,NULL,'NO',1,2,2,1,1,1,2),(13,'10','10','10','2018-11-01',10,'10','10','carlosspf24@gmail.com','10','10','10',NULL,NULL,'NO',1,1,2,1,1,1,3);

/*Table structure for table `paises` */

DROP TABLE IF EXISTS `paises`;

CREATE TABLE `paises` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(150) NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `paises` */

insert  into `paises`(`id_pais`,`pais`) values (1,'Paraguay');

/*Table structure for table `parentescos` */

DROP TABLE IF EXISTS `parentescos`;

CREATE TABLE `parentescos` (
  `id_parentesco` int(11) NOT NULL AUTO_INCREMENT,
  `parentesco` varchar(30) NOT NULL,
  PRIMARY KEY (`id_parentesco`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `parentescos` */

insert  into `parentescos`(`id_parentesco`,`parentesco`) values (1,'No definido'),(2,'Padre / Madre'),(3,'Hermano'),(4,'Tio'),(5,'Abuelo'),(6,'Primo'),(7,'Pareja / Esposo'),(8,'Amigo');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `referidores` */

DROP TABLE IF EXISTS `referidores`;

CREATE TABLE `referidores` (
  `id_referidor` int(11) NOT NULL AUTO_INCREMENT,
  `referidor` varchar(20) NOT NULL,
  PRIMARY KEY (`id_referidor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `referidores` */

insert  into `referidores`(`id_referidor`,`referidor`) values (1,'Sin Referencia'),(2,'Doctor'),(3,'Paciente'),(4,'Otro');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`created_at`,`updated_at`,`id_usuario`) values (1,'admin',NULL,NULL,NULL),(2,'vendedor',NULL,NULL,NULL),(3,'usuario',NULL,NULL,NULL);

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

/*Table structure for table `sexos` */

DROP TABLE IF EXISTS `sexos`;

CREATE TABLE `sexos` (
  `id_sexo` int(11) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(20) NOT NULL,
  PRIMARY KEY (`id_sexo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `sexos` */

insert  into `sexos`(`id_sexo`,`sexo`) values (1,'Femenimo'),(2,'Masculino');

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
