-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: mi-shop
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu18.04.1

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
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` VALUES (1,0,1,'首页','fa-bar-chart','/',NULL,NULL,'2019-01-08 12:25:15'),(2,0,10,'系统管理','fa-tasks',NULL,NULL,NULL,'2019-01-17 10:57:30'),(3,2,11,'管理员','fa-users','auth/users',NULL,NULL,'2019-01-17 10:57:30'),(4,2,12,'角色','fa-user','auth/roles',NULL,NULL,'2019-01-17 10:57:30'),(5,2,13,'权限','fa-ban','auth/permissions',NULL,NULL,'2019-01-17 10:57:30'),(6,2,14,'菜单','fa-bars','auth/menu',NULL,NULL,'2019-01-17 10:57:30'),(7,2,15,'操作日志','fa-history','auth/logs',NULL,NULL,'2019-01-17 10:57:30'),(8,0,2,'用户管理','fa-users','/users',NULL,'2019-01-08 12:34:23','2019-01-08 12:35:11'),(9,0,4,'商品管理','fa-cubes','/products',NULL,'2019-01-08 13:34:50','2019-01-14 10:55:26'),(10,0,8,'订单管理','fa-rmb','/orders',NULL,'2019-01-11 11:19:35','2019-01-17 10:57:30'),(11,0,9,'优惠券管理','fa-tags','/coupon_codes',NULL,'2019-01-11 15:13:06','2019-01-17 10:57:30'),(12,0,3,'类目管理','fa-bars','/categories',NULL,'2019-01-14 10:55:07','2019-01-14 10:55:26'),(13,9,6,'众筹商品','fa-flag-checkered','/crowdfunding_products',NULL,'2019-01-14 12:17:46','2019-01-14 12:19:38'),(14,9,5,'普通商品','fa-cubes','/products',NULL,'2019-01-14 12:19:22','2019-01-14 12:19:38'),(15,9,7,'秒杀商品','fa-bolt','/seckill_products',NULL,'2019-01-17 10:57:25','2019-01-17 10:57:30');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (1,'All permission','*','','*',NULL,NULL),(2,'Dashboard','dashboard','GET','/',NULL,NULL),(3,'Login','auth.login','','/auth/login\r\n/auth/logout',NULL,NULL),(4,'User setting','auth.setting','GET,PUT','/auth/setting',NULL,NULL),(5,'Auth management','auth.management','','/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs',NULL,NULL),(6,'用户管理','users','','/users*','2019-01-08 12:51:50','2019-01-08 12:51:50'),(7,'商品管理','products','','/products*','2019-01-11 17:21:39','2019-01-11 17:21:39'),(8,'优惠券管理','coupon_codes','','/coupon_codes*','2019-01-11 17:22:32','2019-01-11 17:22:32'),(9,'订单管理','orders','','/orders*','2019-01-11 17:23:12','2019-01-11 17:23:12');
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_menu`
--

LOCK TABLES `admin_role_menu` WRITE;
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
INSERT INTO `admin_role_menu` VALUES (1,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_permissions`
--

LOCK TABLES `admin_role_permissions` WRITE;
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
INSERT INTO `admin_role_permissions` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL),(2,3,NULL,NULL),(2,4,NULL,NULL),(2,6,NULL,NULL),(2,7,NULL,NULL),(2,8,NULL,NULL),(2,9,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_users`
--

LOCK TABLES `admin_role_users` WRITE;
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
INSERT INTO `admin_role_users` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,'Administrator','administrator','2019-01-08 12:11:39','2019-01-08 12:11:39'),(2,'运营','operator','2019-01-08 12:53:12','2019-01-08 12:53:12');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_user_permissions`
--

LOCK TABLES `admin_user_permissions` WRITE;
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$U6kMvYmVBehpz8XD7vW90eAKwUXNS06hEGi2nyF.sFS8zLgNLyPo6','Administrator',NULL,'18UFt7eqXQu72GpuB2e9ZFOpPRhNDpgZmt0sQnAUr11nn9neardjyF32J5Ms','2019-01-08 12:11:39','2019-01-08 12:11:39'),(2,'operator','$2y$10$WW5XOyDN/f98l0v/UPGoN.8dHrqXklpiVCmTuae4X9VTXBehzbRdS','运营',NULL,'nFwB6zcx8ftz75M2FgGAcsKWLmVQt2LQXtgkJxss16ddAZvRUJPwOGt4anwm','2019-01-08 12:54:44','2019-01-08 12:54:44');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-17  3:02:10
