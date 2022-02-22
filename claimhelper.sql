/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.21-MariaDB : Database - claimhelper
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`claimhelper` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `claimhelper`;

/*Table structure for table `applicant_info` */

DROP TABLE IF EXISTS `applicant_info`;

CREATE TABLE `applicant_info` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(100) DEFAULT NULL,
  `Policy_No` varchar(100) DEFAULT NULL,
  `User_Name` varchar(100) DEFAULT NULL,
  `User_Submission` varchar(100) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=utf8mb4;

/*Data for the table `applicant_info` */

/*Table structure for table `f1_ce` */

DROP TABLE IF EXISTS `f1_ce`;

CREATE TABLE `f1_ce` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(100) DEFAULT NULL,
  `Policy_No` varchar(100) DEFAULT NULL,
  `Clinical_Date` varchar(100) DEFAULT NULL,
  `Clinical_Expense` varchar(100) DEFAULT NULL,
  `Clinical_Diagnosis` text DEFAULT NULL,
  `Clinical_HK` varchar(100) DEFAULT NULL,
  `Clinical_recovered` text DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f1_ce` */

/*Table structure for table `f1_de` */

DROP TABLE IF EXISTS `f1_de`;

CREATE TABLE `f1_de` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(100) DEFAULT NULL,
  `Policy_No` varchar(100) DEFAULT NULL,
  `Dental_Date` varchar(100) DEFAULT NULL,
  `Dental_Diagonsis` text DEFAULT NULL,
  `Dental_HK` varchar(100) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f1_de` */

/*Table structure for table `f1_ec` */

DROP TABLE IF EXISTS `f1_ec`;

CREATE TABLE `f1_ec` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(100) DEFAULT NULL,
  `Policy_No` varchar(100) DEFAULT NULL,
  `Employee_Date` varchar(100) DEFAULT NULL,
  `Employee_Description` text DEFAULT NULL,
  `Employee_Sick_From` varchar(100) DEFAULT NULL,
  `Employee_Sick_To` varchar(100) DEFAULT NULL,
  `Employee_Nature` text DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f1_ec` */

/*Table structure for table `f1_holderinfo` */

DROP TABLE IF EXISTS `f1_holderinfo`;

CREATE TABLE `f1_holderinfo` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(50) DEFAULT NULL,
  `Policy_No` varchar(50) DEFAULT NULL,
  `Holder_Name` varchar(50) DEFAULT NULL,
  `Insured_Name` varchar(50) DEFAULT NULL,
  `Claimant_Name` varchar(50) DEFAULT NULL,
  `Person_Name` varchar(50) DEFAULT NULL,
  `Email_Address` varchar(50) DEFAULT NULL,
  `Mobile_No` varchar(50) DEFAULT NULL,
  `Claims_Info_Checked` varchar(50) DEFAULT NULL,
  `Claims_Info` text DEFAULT NULL,
  `Claims_Type` varchar(50) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `reference_id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f1_holderinfo` */

/*Table structure for table `f1_image` */

DROP TABLE IF EXISTS `f1_image`;

CREATE TABLE `f1_image` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(100) DEFAULT NULL,
  `Claims_Type` varchar(100) DEFAULT NULL,
  `Old_name` text DEFAULT NULL,
  `New_name` text DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=337 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f1_image` */

/*Table structure for table `f1_lsca` */

DROP TABLE IF EXISTS `f1_lsca`;

CREATE TABLE `f1_lsca` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(100) DEFAULT NULL,
  `Policy_No` varchar(100) DEFAULT NULL,
  `Loss_Date` varchar(100) DEFAULT NULL,
  `Loss_Diagonsis` text DEFAULT NULL,
  `Loss_Period_From` varchar(100) DEFAULT NULL,
  `Loss_Period_To` varchar(100) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f1_lsca` */

/*Table structure for table `f1_pa` */

DROP TABLE IF EXISTS `f1_pa`;

CREATE TABLE `f1_pa` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(100) DEFAULT NULL,
  `Policy_No` varchar(100) DEFAULT NULL,
  `Personal_Date` varchar(100) DEFAULT NULL,
  `Personal_Description` text DEFAULT NULL,
  `Personal_Sick_From` varchar(100) DEFAULT NULL,
  `Personal_Sick_To` varchar(100) DEFAULT NULL,
  `Personal_Nature` text DEFAULT NULL,
  `Personal_recovered` text DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f1_pa` */

/*Table structure for table `f1_rep` */

DROP TABLE IF EXISTS `f1_rep`;

CREATE TABLE `f1_rep` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(100) DEFAULT NULL,
  `Policy_No` varchar(100) DEFAULT NULL,
  `Repatriation_Date` varchar(100) DEFAULT NULL,
  `Repatriation_Description` text DEFAULT NULL,
  `Repatriation_Reason` text DEFAULT NULL,
  `Repatriation_recovered` text DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f1_rep` */

/*Table structure for table `f1_rhe` */

DROP TABLE IF EXISTS `f1_rhe`;

CREATE TABLE `f1_rhe` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(100) DEFAULT NULL,
  `Policy_No` varchar(100) DEFAULT NULL,
  `Replacement_Reason` text DEFAULT NULL,
  `Replacement_HK` varchar(100) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f1_rhe` */

/*Table structure for table `f1_she` */

DROP TABLE IF EXISTS `f1_she`;

CREATE TABLE `f1_she` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(100) DEFAULT NULL,
  `Policy_No` varchar(100) DEFAULT NULL,
  `Surgical_Date` varchar(100) DEFAULT NULL,
  `Surgical_Description` text DEFAULT NULL,
  `Surgical_Diagonsis` text DEFAULT NULL,
  `Surgical_HK` varchar(100) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f1_she` */

/*Table structure for table `f2_ddlp` */

DROP TABLE IF EXISTS `f2_ddlp`;

CREATE TABLE `f2_ddlp` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(100) DEFAULT NULL,
  `Policy_No` varchar(100) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Date` varchar(100) DEFAULT NULL,
  `Original` varchar(100) DEFAULT NULL,
  `Repair` varchar(100) DEFAULT NULL,
  `Claim` varchar(100) DEFAULT NULL,
  `sub_total` varchar(100) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f2_ddlp` */

/*Table structure for table `f2_gen` */

DROP TABLE IF EXISTS `f2_gen`;

CREATE TABLE `f2_gen` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Policy_No` varchar(100) DEFAULT NULL,
  `reference_id` varchar(100) DEFAULT NULL,
  `Date_time_accident` varchar(100) DEFAULT NULL,
  `Location_incident` varchar(100) DEFAULT NULL,
  `Description_incident` text DEFAULT NULL,
  `Q1_description` text DEFAULT NULL,
  `Q2_description` text DEFAULT NULL,
  `Q3_description` text DEFAULT NULL,
  `Q7_description` text DEFAULT NULL,
  `Q8_description` text DEFAULT NULL,
  `Questions` text DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f2_gen` */

/*Table structure for table `f2_holderinfo` */

DROP TABLE IF EXISTS `f2_holderinfo`;

CREATE TABLE `f2_holderinfo` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(100) DEFAULT NULL,
  `Policy_No` varchar(100) DEFAULT NULL,
  `Holder_Name` varchar(100) DEFAULT NULL,
  `Insured_Name` varchar(100) DEFAULT NULL,
  `Claimant_Name` varchar(100) DEFAULT NULL,
  `Person_Name` varchar(100) DEFAULT NULL,
  `Email_Address` varchar(100) DEFAULT NULL,
  `Mobile_No` varchar(100) DEFAULT NULL,
  `Claims_Type` varchar(100) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f2_holderinfo` */

/*Table structure for table `f2_image` */

DROP TABLE IF EXISTS `f2_image`;

CREATE TABLE `f2_image` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(100) DEFAULT NULL,
  `Claims_Type` varchar(100) DEFAULT NULL,
  `Old_name` varchar(100) DEFAULT NULL,
  `New_name` varchar(100) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f2_image` */

/*Table structure for table `f2_other` */

DROP TABLE IF EXISTS `f2_other`;

CREATE TABLE `f2_other` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Policy_No` varchar(100) DEFAULT NULL,
  `reference_id` varchar(100) DEFAULT NULL,
  `Reason_claim` text DEFAULT NULL,
  `Total_c_a_HK` varchar(100) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f2_other` */

/*Table structure for table `f2_ppl` */

DROP TABLE IF EXISTS `f2_ppl`;

CREATE TABLE `f2_ppl` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Policy_No` varchar(100) DEFAULT NULL,
  `reference_id` varchar(100) DEFAULT NULL,
  `Name_Property_owner` varchar(100) DEFAULT NULL,
  `Detail_e_d_p_o` text DEFAULT NULL,
  `Name_injured` varchar(100) DEFAULT NULL,
  `Detail_e_i_o` text DEFAULT NULL,
  `Q1_description` text DEFAULT NULL,
  `Q2_description` text DEFAULT NULL,
  `Q3_description` text DEFAULT NULL,
  `Questions` varchar(100) DEFAULT NULL,
  `State_all_Name` text DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f2_ppl` */

/*Table structure for table `f3_applicant_info` */

DROP TABLE IF EXISTS `f3_applicant_info`;

CREATE TABLE `f3_applicant_info` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(50) DEFAULT NULL,
  `Policy_No` varchar(50) DEFAULT NULL,
  `User_Name` varchar(50) DEFAULT NULL,
  `User_Submission` varchar(50) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f3_applicant_info` */

insert  into `f3_applicant_info`(`id`,`reference_id`,`Policy_No`,`User_Name`,`User_Submission`,`update_date`) values 
(11,'C00031\n','1/qq/11111/11','123','2022-01-14 00:01','2022-01-14 23:28:01'),
(12,'C00032\n','1/qq/11111/11','12312','2022-01-14 00:01','2022-01-14 23:33:34'),
(13,'C00033\n','1/qq/11111/11','123123','2022-01-14 00:01','2022-01-14 23:35:19'),
(14,'C00034\n','1/qq/11111/11','123123','2022-01-14 00:01','2022-01-14 23:35:57'),
(15,'C00035\n','1/qq/11111/11','123123','2022-01-14 00:01','2022-01-14 23:36:44'),
(16,'C00036\n','1/qq/11111/11','123123','2022-01-14 00:01','2022-01-14 23:37:20'),
(17,'C00037\n','1/qq/11111/11','123123','2022-01-14 00:01','2022-01-14 23:40:08');

/*Table structure for table `f3_bi` */

DROP TABLE IF EXISTS `f3_bi`;

CREATE TABLE `f3_bi` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(50) DEFAULT NULL,
  `Policy_No` varchar(50) DEFAULT NULL,
  `Period_Business` varchar(50) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f3_bi` */

insert  into `f3_bi`(`id`,`reference_id`,`Policy_No`,`Period_Business`,`update_date`) values 
(12,'C00031\n','1/qq/11111/11','2022/01/14 - 2022/01/14','2022-01-14 23:28:01'),
(13,'C00032\n','1/qq/11111/11','2022/01/14 - 2022/01/14','2022-01-14 23:33:34'),
(14,'C00033\n','1/qq/11111/11','2022/01/14 - 2022/01/14','2022-01-14 23:35:19'),
(15,'C00034\n','1/qq/11111/11','2022/01/14 - 2022/01/14','2022-01-14 23:35:57'),
(16,'C00035\n','1/qq/11111/11','2022/01/14 - 2022/01/14','2022-01-14 23:36:44'),
(17,'C00036\n','1/qq/11111/11','2022/01/14 - 2022/01/14','2022-01-14 23:37:20'),
(18,'C00037\n','1/qq/11111/11','2022/01/14 - 2022/01/14','2022-01-14 23:40:08');

/*Table structure for table `f3_bi_details` */

DROP TABLE IF EXISTS `f3_bi_details`;

CREATE TABLE `f3_bi_details` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(50) DEFAULT NULL,
  `Policy_No` varchar(50) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Reason_cost` varchar(50) DEFAULT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `Claim` varchar(50) DEFAULT NULL,
  `sub_total` varchar(50) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f3_bi_details` */

insert  into `f3_bi_details`(`id`,`reference_id`,`Policy_No`,`Description`,`Reason_cost`,`Date`,`Claim`,`sub_total`,`update_date`) values 
(13,'C00037\n','1/qq/11111/11','13','123','2022-01-14','1.23','$1.23','2022-01-14 23:40:08');

/*Table structure for table `f3_ec` */

DROP TABLE IF EXISTS `f3_ec`;

CREATE TABLE `f3_ec` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(50) DEFAULT NULL,
  `Policy_No` varchar(50) DEFAULT NULL,
  `Date_injury` varchar(50) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Sick_leave` varchar(50) DEFAULT NULL,
  `Nature_injury` text DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f3_ec` */

/*Table structure for table `f3_gen` */

DROP TABLE IF EXISTS `f3_gen`;

CREATE TABLE `f3_gen` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Policy_No` varchar(50) DEFAULT NULL,
  `reference_id` varchar(50) DEFAULT NULL,
  `Date_time_accident` varchar(50) DEFAULT NULL,
  `Location_incident` varchar(50) DEFAULT NULL,
  `Description_incident` text DEFAULT NULL,
  `Q1_description` text DEFAULT NULL,
  `Q2_description` text DEFAULT NULL,
  `Q3_description` text DEFAULT NULL,
  `Q5_description` text DEFAULT NULL,
  `Questions` varchar(50) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f3_gen` */

insert  into `f3_gen`(`id`,`Policy_No`,`reference_id`,`Date_time_accident`,`Location_incident`,`Description_incident`,`Q1_description`,`Q2_description`,`Q3_description`,`Q5_description`,`Questions`,`update_date`) values 
(30,'1/qq/11111/11','C00031\n','2022-01-14 00:01','123','123','','','','','0||0||0||0||0','2022-01-14 23:28:01'),
(31,'1/qq/11111/11','C00032\n','2022-01-14 00:01','123','123','','','','','0||0||0||0||0','2022-01-14 23:33:34'),
(32,'1/qq/11111/11','C00033\n','2022-01-14 00:01','123','123','','','','','0||0||0||0||0','2022-01-14 23:35:19'),
(33,'1/qq/11111/11','C00034\n','2022-01-14 00:01','123','123','','','','','0||0||0||0||0','2022-01-14 23:35:57'),
(34,'1/qq/11111/11','C00035\n','2022-01-14 00:01','123','123','','','','','0||0||0||0||0','2022-01-14 23:36:44'),
(35,'1/qq/11111/11','C00036\n','2022-01-14 00:01','123','123','','','','','0||0||0||0||0','2022-01-14 23:37:20'),
(36,'1/qq/11111/11','C00037\n','2022-01-14 00:01','123','123','','','','','0||0||0||0||0','2022-01-14 23:40:08');

/*Table structure for table `f3_holderinfo` */

DROP TABLE IF EXISTS `f3_holderinfo`;

CREATE TABLE `f3_holderinfo` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(50) DEFAULT NULL,
  `Policy_No` varchar(50) DEFAULT NULL,
  `Holder_Name` varchar(50) DEFAULT NULL,
  `Insured_Name` varchar(50) DEFAULT NULL,
  `Claimant_Name` varchar(50) DEFAULT NULL,
  `Person_Name` varchar(50) DEFAULT NULL,
  `Email_Address` varchar(50) DEFAULT NULL,
  `Mobile_No` varchar(50) DEFAULT NULL,
  `Claims_Type` varchar(50) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f3_holderinfo` */

insert  into `f3_holderinfo`(`id`,`reference_id`,`Policy_No`,`Holder_Name`,`Insured_Name`,`Claimant_Name`,`Person_Name`,`Email_Address`,`Mobile_No`,`Claims_Type`,`update_date`) values 
(31,'C00031\n','1/qq/11111/11','123','123','123','123','123@123.123','+(123) 1231-2312','1||1||0||0||0||0||0||0','2022-01-14 23:28:00'),
(32,'C00032\n','1/qq/11111/11','qwe','qwe','qwe','234123','234@123.123','+(234) 1231-2312','1||1||1||0||0||0||0||0','2022-01-14 23:33:33'),
(33,'C00033\n','1/qq/11111/11','123','123','123','123','123@123.123','+(123) 1231-2312','1||1||0||0||0||0||0||0','2022-01-14 23:35:19'),
(34,'C00034\n','1/qq/11111/11','123','123','123','123','123@123.123','+(123) 1231-2312','1||1||0||0||0||0||0||0','2022-01-14 23:35:57'),
(35,'C00035\n','1/qq/11111/11','123','123','123','123','123@123.123','+(123) 1231-2312','1||1||0||0||0||0||0||0','2022-01-14 23:36:43'),
(36,'C00036\n','1/qq/11111/11','123','123','123','123','123@123.123','+(123) 1231-2312','1||1||0||0||0||0||0||0','2022-01-14 23:37:19'),
(37,'C00037\n','1/qq/11111/11','123','123','123','123','123@123.123','+(123) 1231-2312','1||1||0||0||0||0||0||0','2022-01-14 23:40:08');

/*Table structure for table `f3_image` */

DROP TABLE IF EXISTS `f3_image`;

CREATE TABLE `f3_image` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(50) DEFAULT NULL,
  `Claims_Type` varchar(50) DEFAULT NULL,
  `Old_name` varchar(50) DEFAULT NULL,
  `New_name` varchar(50) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f3_image` */

insert  into `f3_image`(`id`,`reference_id`,`Claims_Type`,`Old_name`,`New_name`,`update_date`) values 
(47,'C00032\n','0','PDF.png','form1_20220114153308_0.png','2022-01-14 23:33:33'),
(48,'C00032\n','0','Sample.pdf','form1_20220114153308_1.pdf','2022-01-14 23:33:33'),
(49,'C00032\n','0','slide-2.jpg','form1_20220114153308_2.jpg','2022-01-14 23:33:33');

/*Table structure for table `f3_ldcs_detail_1` */

DROP TABLE IF EXISTS `f3_ldcs_detail_1`;

CREATE TABLE `f3_ldcs_detail_1` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(50) DEFAULT NULL,
  `Policy_No` varchar(50) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `Original` varchar(50) DEFAULT NULL,
  `Repair` varchar(50) DEFAULT NULL,
  `Claim` varchar(50) DEFAULT NULL,
  `sub_total` varchar(50) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f3_ldcs_detail_1` */

insert  into `f3_ldcs_detail_1`(`id`,`reference_id`,`Policy_No`,`Description`,`Date`,`Original`,`Repair`,`Claim`,`sub_total`,`update_date`) values 
(28,'C00033\n','1/qq/11111/11','123','2022-01-14','1.23','1.23','1.23','$1.23','2022-01-14 23:35:19'),
(29,'C00034\n','1/qq/11111/11','123','2022-01-14','1.23','1.23','1.23','$1.23','2022-01-14 23:35:57'),
(30,'C00035\n','1/qq/11111/11','123','2022-01-14','1.23','1.23','1.23','$1.23','2022-01-14 23:36:44'),
(31,'C00036\n','1/qq/11111/11','123','2022-01-14','1.23','1.23','1.23','$1.23','2022-01-14 23:37:20'),
(32,'C00037\n','1/qq/11111/11','123','2022-01-14','1.23','1.23','1.23','$1.23','2022-01-14 23:40:08');

/*Table structure for table `f3_ldcs_detail_2` */

DROP TABLE IF EXISTS `f3_ldcs_detail_2`;

CREATE TABLE `f3_ldcs_detail_2` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(50) DEFAULT NULL,
  `Policy_No` varchar(50) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Reason_cost` varchar(50) DEFAULT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `Claim` varchar(50) DEFAULT NULL,
  `sub_total` varchar(50) DEFAULT NULL,
  `Details_Total_Sum` varchar(50) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f3_ldcs_detail_2` */

insert  into `f3_ldcs_detail_2`(`id`,`reference_id`,`Policy_No`,`Description`,`Reason_cost`,`Date`,`Claim`,`sub_total`,`Details_Total_Sum`,`update_date`) values 
(35,'C00037\n','1/qq/11111/11','123','123','2022-01-14','1.23','$1.23','$2.46','2022-01-14 23:40:08');

/*Table structure for table `f3_lm` */

DROP TABLE IF EXISTS `f3_lm`;

CREATE TABLE `f3_lm` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(50) DEFAULT NULL,
  `Policy_No` varchar(50) DEFAULT NULL,
  `Reason_claims` varchar(50) DEFAULT NULL,
  `Total_claimed` varchar(50) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f3_lm` */

insert  into `f3_lm`(`id`,`reference_id`,`Policy_No`,`Reason_claims`,`Total_claimed`,`update_date`) values 
(9,'C00032\n','1/qq/11111/11','13','1,231.23','2022-01-14 23:33:34');

/*Table structure for table `f3_others` */

DROP TABLE IF EXISTS `f3_others`;

CREATE TABLE `f3_others` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(50) DEFAULT NULL,
  `Policy_No` varchar(50) DEFAULT NULL,
  `Reason_claims` text DEFAULT NULL,
  `Total_claimed` varchar(50) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f3_others` */

/*Table structure for table `f3_pa` */

DROP TABLE IF EXISTS `f3_pa`;

CREATE TABLE `f3_pa` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(50) DEFAULT NULL,
  `Policy_No` varchar(50) DEFAULT NULL,
  `Name_i_e` varchar(50) DEFAULT NULL,
  `Name_c` varchar(50) DEFAULT NULL,
  `Reason_claims` text DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f3_pa` */

/*Table structure for table `f3_pg` */

DROP TABLE IF EXISTS `f3_pg`;

CREATE TABLE `f3_pg` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(50) DEFAULT NULL,
  `Policy_No` varchar(50) DEFAULT NULL,
  `Reason_claims` text DEFAULT NULL,
  `Total_claimed` varchar(50) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f3_pg` */

/*Table structure for table `f3_pl` */

DROP TABLE IF EXISTS `f3_pl`;

CREATE TABLE `f3_pl` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reference_id` varchar(50) DEFAULT NULL,
  `Policy_No` varchar(50) DEFAULT NULL,
  `Name_p_o` varchar(50) DEFAULT NULL,
  `Details_d_p_o` text DEFAULT NULL,
  `Name_injured` varchar(50) DEFAULT NULL,
  `Details_i_o` text DEFAULT NULL,
  `Q1_description` text DEFAULT NULL,
  `Q2_description` text DEFAULT NULL,
  `Q3_description` text DEFAULT NULL,
  `Questions` varchar(50) DEFAULT NULL,
  `state_all_name` text DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `f3_pl` */

/*Table structure for table `validate` */

DROP TABLE IF EXISTS `validate`;

CREATE TABLE `validate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_no` varchar(50) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `validate` */

insert  into `validate`(`id`,`policy_no`) values 
(1,'2/ww/22222/22'),
(2,'1/qq/11111/11'),
(3,'3ee/33333/33');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
