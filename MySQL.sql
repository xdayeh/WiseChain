# ************************************************************
# Sequel Ace SQL dump
# Version 20031
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: database-2.coymy9m1axur.us-east-1.rds.amazonaws.com (MySQL 8.0.28)
# Database: WiseChain
# Generation Time: 2023-01-07 22:29:29 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table College
# ------------------------------------------------------------

DROP TABLE IF EXISTS `College`;

CREATE TABLE `College` (
                           `collage_name` varchar(45) NOT NULL,
                           `dean` int unsigned NOT NULL AUTO_INCREMENT,
                           PRIMARY KEY (`collage_name`),
                           UNIQUE KEY `collage_name_UNIQUE` (`collage_name`),
                           KEY `dean_idx` (`dean`),
                           CONSTRAINT `dean` FOREIGN KEY (`dean`) REFERENCES `Instructors` (`InstructorId`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `College` WRITE;
/*!40000 ALTER TABLE `College` DISABLE KEYS */;

INSERT INTO `College` (`collage_name`, `dean`)
VALUES
    ('IT',1);

/*!40000 ALTER TABLE `College` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Courses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Courses`;

CREATE TABLE `Courses` (
                           `course_number` int NOT NULL,
                           `course_name` varchar(45) NOT NULL,
                           `approved_hours` tinyint(1) NOT NULL,
                           `dept_name` varchar(45) NOT NULL,
                           PRIMARY KEY (`course_number`),
                           UNIQUE KEY `course_number_UNIQUE` (`course_number`),
                           KEY `department_courses_idx` (`dept_name`),
                           CONSTRAINT `department_courses` FOREIGN KEY (`dept_name`) REFERENCES `Department` (`department_name`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `Courses` WRITE;
/*!40000 ALTER TABLE `Courses` DISABLE KEYS */;

INSERT INTO `Courses` (`course_number`, `course_name`, `approved_hours`, `dept_name`)
VALUES
    (603449,'Dadabase',3,'security'),
    (603450,'network',3,'security'),
    (603451,'cloud security',3,'security');

/*!40000 ALTER TABLE `Courses` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Department
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Department`;

CREATE TABLE `Department` (
                              `department_name` varchar(45) NOT NULL,
                              `collage_name` varchar(45) NOT NULL,
                              `head_of_department` int unsigned NOT NULL AUTO_INCREMENT,
                              PRIMARY KEY (`department_name`),
                              UNIQUE KEY `department_name_UNIQUE` (`department_name`),
                              KEY `head_of_dept_idx` (`head_of_department`),
                              KEY `collage_departments_idx` (`collage_name`),
                              CONSTRAINT `collage_departments` FOREIGN KEY (`collage_name`) REFERENCES `College` (`collage_name`) ON DELETE RESTRICT ON UPDATE CASCADE,
                              CONSTRAINT `head_of_dept` FOREIGN KEY (`head_of_department`) REFERENCES `Instructors` (`InstructorId`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `Department` WRITE;
/*!40000 ALTER TABLE `Department` DISABLE KEYS */;

INSERT INTO `Department` (`department_name`, `collage_name`, `head_of_department`)
VALUES
    ('security','IT',2);

/*!40000 ALTER TABLE `Department` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Instructors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Instructors`;

CREATE TABLE `Instructors` (
                               `InstructorId` int unsigned NOT NULL AUTO_INCREMENT,
                               `Username` varchar(12) NOT NULL,
                               `Password` char(60) NOT NULL,
                               `Email` varchar(40) NOT NULL,
                               `PhoneNumber` varchar(15) DEFAULT NULL,
                               `SubscriptionDate` date NOT NULL,
                               `LastLogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                               `GroupId` tinyint unsigned NOT NULL,
                               `Status` tinyint NOT NULL DEFAULT '1',
                               `FailedLogin` tinyint unsigned NOT NULL DEFAULT '0',
                               PRIMARY KEY (`InstructorId`),
                               UNIQUE KEY `Username` (`Username`),
                               UNIQUE KEY `Email` (`Email`),
                               UNIQUE KEY `PhoneNumber` (`PhoneNumber`),
                               KEY `GroupId` (`GroupId`),
                               CONSTRAINT `Instructors_CONSTRAINT` FOREIGN KEY (`GroupId`) REFERENCES `Instructors_Groups` (`GroupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `Instructors` WRITE;
/*!40000 ALTER TABLE `Instructors` DISABLE KEYS */;

INSERT INTO `Instructors` (`InstructorId`, `Username`, `Password`, `Email`, `PhoneNumber`, `SubscriptionDate`, `LastLogin`, `GroupId`, `Status`, `FailedLogin`)
VALUES
    (1,'Dean','601f1889667efaebb33b8c12572835da3f027f78','Dean@wise.edu.jo','0788888881','2023-01-01','2022-12-31 21:00:00',1,1,0),
    (2,'HeadOfD','601f1889667efaebb33b8c12572835da3f027f78','HeadOfD@wise.edu.jo','0788888882','2023-01-01','2022-12-31 21:00:00',2,1,3),
    (3,'Doctor','601f1889667efaebb33b8c12572835da3f027f78','Doctor@wise.edu.jo','0788888883','2023-01-01','2022-12-31 21:00:00',3,0,0);

/*!40000 ALTER TABLE `Instructors` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Instructors_Groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Instructors_Groups`;

CREATE TABLE `Instructors_Groups` (
                                      `GroupId` tinyint unsigned NOT NULL AUTO_INCREMENT,
                                      `GroupName_En` varchar(20) NOT NULL,
                                      `GroupName_Ar` varchar(20) NOT NULL,
                                      PRIMARY KEY (`GroupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `Instructors_Groups` WRITE;
/*!40000 ALTER TABLE `Instructors_Groups` DISABLE KEYS */;

INSERT INTO `Instructors_Groups` (`GroupId`, `GroupName_En`, `GroupName_Ar`)
VALUES
    (1,'Dean','عميد'),
    (2,'Head Of Department','رئيس قسم'),
    (3,'Doctor','دكتور');

/*!40000 ALTER TABLE `Instructors_Groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Instructors_Groups_Privileges
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Instructors_Groups_Privileges`;

CREATE TABLE `Instructors_Groups_Privileges` (
                                                 `Id` tinyint unsigned NOT NULL AUTO_INCREMENT,
                                                 `GroupId` tinyint unsigned NOT NULL,
                                                 `PrivilegeId` tinyint unsigned NOT NULL,
                                                 PRIMARY KEY (`Id`),
                                                 KEY `GroupId` (`GroupId`),
                                                 KEY `PrivilegeId` (`PrivilegeId`),
                                                 CONSTRAINT `Instructors_Groups_Privileges_CONSTRAINT_1` FOREIGN KEY (`GroupId`) REFERENCES `Instructors_Groups` (`GroupId`),
                                                 CONSTRAINT `Instructors_Groups_Privileges_CONSTRAINT_2` FOREIGN KEY (`PrivilegeId`) REFERENCES `Instructors_Privileges` (`PrivilegeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `Instructors_Groups_Privileges` WRITE;
/*!40000 ALTER TABLE `Instructors_Groups_Privileges` DISABLE KEYS */;

INSERT INTO `Instructors_Groups_Privileges` (`Id`, `GroupId`, `PrivilegeId`)
VALUES
    (1,1,1),
    (2,1,2),
    (3,1,3),
    (4,1,4),
    (5,1,5),
    (6,1,6),
    (7,1,7),
    (8,1,8),
    (9,1,9);

/*!40000 ALTER TABLE `Instructors_Groups_Privileges` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Instructors_Privileges
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Instructors_Privileges`;

CREATE TABLE `Instructors_Privileges` (
                                          `PrivilegeId` tinyint unsigned NOT NULL AUTO_INCREMENT,
                                          `PrivilegeName_En` varchar(30) NOT NULL,
                                          `PrivilegeName_Ar` varchar(30) NOT NULL,
                                          `Privilege_URL` varchar(30) NOT NULL,
                                          PRIMARY KEY (`PrivilegeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `Instructors_Privileges` WRITE;
/*!40000 ALTER TABLE `Instructors_Privileges` DISABLE KEYS */;

INSERT INTO `Instructors_Privileges` (`PrivilegeId`, `PrivilegeName_En`, `PrivilegeName_Ar`, `Privilege_URL`)
VALUES
    (1,'Create user','انشاء مستخدم','/Instructors/create'),
    (2,'Edit user','تعديل مستخدم','/Instructors/edit'),
    (3,'Delete user','حذف مستخدم','/Instructors/delete'),
    (4,'View user','مشاهدة المستخدمين','/Instructors/default'),
    (5,'View system settings','مشاهدة اعدادات النظام','/settings/default'),
    (6,'View Privileges','مشاهدة الصلاحيات','/privileges/default'),
    (7,'Create Privileges','اضافة صلاحية جديدة','/privileges/create'),
    (8,'Delete Privileges','حذف صلاحية','/privileges/delete'),
    (9,'Edit Privileges','التعديل على الصلاحيات','/privileges/edit');

/*!40000 ALTER TABLE `Instructors_Privileges` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Instructors_Profiles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Instructors_Profiles`;

CREATE TABLE `Instructors_Profiles` (
                                        `InstructorId` int unsigned NOT NULL AUTO_INCREMENT,
                                        `FirstName_En` varchar(50) NOT NULL,
                                        `LastName_En` varchar(50) NOT NULL,
                                        `Address_En` varchar(50) DEFAULT NULL,
                                        `FirstName_Ar` varchar(50) NOT NULL,
                                        `LastName_Ar` varchar(50) NOT NULL,
                                        `Address_Ar` varchar(50) DEFAULT NULL,
                                        `DOB` date DEFAULT NULL,
                                        `Image` varchar(30) DEFAULT 'style/img/avatar.webp',
                                        PRIMARY KEY (`InstructorId`),
                                        CONSTRAINT `Instructors_Profiles_CONSTRAINT` FOREIGN KEY (`InstructorId`) REFERENCES `Instructors` (`InstructorId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `Instructors_Profiles` WRITE;
/*!40000 ALTER TABLE `Instructors_Profiles` DISABLE KEYS */;

INSERT INTO `Instructors_Profiles` (`InstructorId`, `FirstName_En`, `LastName_En`, `Address_En`, `FirstName_Ar`, `LastName_Ar`, `Address_Ar`, `DOB`, `Image`)
VALUES
    (1,'Issa','Al-Atoum','Jordan','عيسى','العتوم','الاردن','1975-01-01','style/img/Issa.png'),
    (2,'Ali','Al-Naimat','Jordan','علي','النعمات','الاردن','1982-05-20','style/img/Ali.png'),
    (3,'Safa','Al-Sarayrah','Jordan','صفاء','الصرايرة','الاردن','1984-10-26','style/img/Safa.png');

/*!40000 ALTER TABLE `Instructors_Profiles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Sections
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Sections`;

CREATE TABLE `Sections` (
                            `section_number` int NOT NULL,
                            `year` varchar(45) NOT NULL,
                            `semester` varchar(45) NOT NULL,
                            `days` varchar(45) NOT NULL,
                            `time` varchar(45) NOT NULL,
                            `course_number` int NOT NULL,
                            `instructor_num` int unsigned NOT NULL AUTO_INCREMENT,
                            `approved` tinyint(1) NOT NULL,
                            `student_id` varchar(10) NOT NULL,
                            `final_garde` varchar(45) DEFAULT NULL,
                            PRIMARY KEY (`student_id`,`section_number`,`year`,`semester`,`course_number`),
                            KEY `course_section_idx` (`course_number`),
                            KEY `instructor_idx` (`instructor_num`),
                            KEY `student_section_idx` (`student_id`),
                            CONSTRAINT `course_section` FOREIGN KEY (`course_number`) REFERENCES `Courses` (`course_number`) ON DELETE CASCADE ON UPDATE CASCADE,
                            CONSTRAINT `instructor_section` FOREIGN KEY (`instructor_num`) REFERENCES `Instructors` (`InstructorId`) ON DELETE CASCADE ON UPDATE CASCADE,
                            CONSTRAINT `student_section` FOREIGN KEY (`student_id`) REFERENCES `Students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `Sections` WRITE;
/*!40000 ALTER TABLE `Sections` DISABLE KEYS */;

INSERT INTO `Sections` (`section_number`, `year`, `semester`, `days`, `time`, `course_number`, `instructor_num`, `approved`, `student_id`, `final_garde`)
VALUES
    (1,'2022/2032','first','mon,wed','8:00-9:30',603450,2,0,'3180606052','76'),
    (2,'2022/2023','first','sun,tus,thr','9:00-10:00',603449,3,0,'3190601023','89'),
    (1,'2022/2023','first','mon,wed','10:30-11:30',603451,1,0,'3190606051','85'),
    (3,'2022/2023','first','sun,tus,thr','9:00-10:00',603449,3,0,'3190606051','88'),
    (4,'2022/2023','first','mon,wed','8:00-9:30',603450,2,0,'3190606051','78'),
    (2,'2022/2023','first','sun,tus,thr','9:00-10:00',603449,3,0,'3190606073','90'),
    (3,'2022/2023','first','mon,wed','10:30-11:30',603451,1,0,'3190606073','73');

/*!40000 ALTER TABLE `Sections` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Students
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Students`;

CREATE TABLE `Students` (
                            `student_id` varchar(10) NOT NULL,
                            `fullname` varchar(255) NOT NULL,
                            `degree` varchar(45) NOT NULL,
                            `department_name` varchar(45) NOT NULL,
                            `student_number` int NOT NULL AUTO_INCREMENT,
                            PRIMARY KEY (`student_id`),
                            UNIQUE KEY `student_id_UNIQUE` (`student_id`),
                            UNIQUE KEY `student_number_UNIQUE` (`student_number`),
                            KEY `department_student_idx` (`department_name`),
                            CONSTRAINT `department_student` FOREIGN KEY (`department_name`) REFERENCES `Department` (`department_name`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `Students` WRITE;
/*!40000 ALTER TABLE `Students` DISABLE KEYS */;

INSERT INTO `Students` (`student_id`, `fullname`, `degree`, `department_name`, `student_number`)
VALUES
    ('3170606052','Mohammad AbuDayeh','bachelor','security',4),
    ('3190601023','alaa shalabi','bachelor','security',3),
    ('3190606051','suhib katout','bechloer','security',1),
    ('3190606073','rashed safadi','bechloer','security',2);

/*!40000 ALTER TABLE `Students` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
