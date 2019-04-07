-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 14, 2018 at 11:32 AM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computerscience`
--

-- --------------------------------------------------------

--
-- Table structure for table `lecture_allocate`
--

DROP TABLE IF EXISTS `lecture_allocate`;
CREATE TABLE IF NOT EXISTS `lecture_allocate` (
  `lect_name` varchar(50) NOT NULL,
  `lect_id` varchar(30) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sub_code` varchar(50) NOT NULL,
  `sem` int(1) NOT NULL,
  `sec` char(1) NOT NULL,
  PRIMARY KEY (`lect_id`,`sub_code`,`sem`,`sec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture_allocate`
--

INSERT INTO `lecture_allocate` (`lect_name`, `lect_id`, `sub_name`, `sub_code`, `sem`, `sec`) VALUES
('janaki', 'cd101', 'OS', 'p13cs001', 5, 'A'),
('janaki', 'cd101', 'cyber security', 'p13cs003', 5, 'B'),
('swheta', 'cd102', 'p13cs003', 'p13cs003', 5, 'A'),
('manjula', 'cd102', 'os', 'p13cs003', 5, 'B'),
('suraj', 'cd104', 'cyber security', 'p13cs003', 5, 'A'),
('swetha', 'cd107', 'OS', 'p13cs001', 5, 'B'),
('swetha', 'cd107', 'java', 'p13cs002', 5, 'A'),
('anitha', 'cd108', 'java', 'p13cs002', 5, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `lecture_profile`
--

DROP TABLE IF EXISTS `lecture_profile`;
CREATE TABLE IF NOT EXISTS `lecture_profile` (
  `lect_id` varchar(10) NOT NULL,
  `lect_name` varchar(30) NOT NULL,
  `lect_dept` varchar(50) NOT NULL,
  `lect_phone` bigint(12) NOT NULL,
  `lect_age` int(2) NOT NULL,
  `lect_adhar` bigint(16) NOT NULL,
  `lect_dob` date NOT NULL,
  `lect_degree` varchar(30) NOT NULL,
  `lect_master` varchar(50) DEFAULT NULL,
  `lect_phd1` varchar(50) DEFAULT NULL,
  `lect_phd2` varchar(50) DEFAULT NULL,
  `lect_phd3` varchar(50) DEFAULT NULL,
  `lect_dateofjoin` date NOT NULL,
  `lect_designation` varchar(50) DEFAULT NULL,
  `lect_email` varchar(30) DEFAULT NULL,
  `lect_experience` int(2) DEFAULT NULL,
  `lect_areaof_intrest` varchar(50) DEFAULT NULL,
  `pdf_data` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`lect_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture_profile`
--

INSERT INTO `lecture_profile` (`lect_id`, `lect_name`, `lect_dept`, `lect_phone`, `lect_age`, `lect_adhar`, `lect_dob`, `lect_degree`, `lect_master`, `lect_phd1`, `lect_phd2`, `lect_phd3`, `lect_dateofjoin`, `lect_designation`, `lect_email`, `lect_experience`, `lect_areaof_intrest`, `pdf_data`) VALUES
('cd101', 'janaki', 'CSE', 9480158042, 35, 102456541023, '1978-09-12', 'B.E', 'MS', NULL, NULL, NULL, '1996-01-01', 'Asst. lect', 'janaki@gmail.com', 21, 'web', 'janaki'),
('cd102', 'vishwanath', 'CSE', 9480168042, 58, 102456541013, '1960-09-13', 'B.E', 'MS', NULL, NULL, NULL, '1986-01-02', 'Asst. lect', 'vishwa@gmail.com', 31, 'OS', 'BSY'),
('cd103', 'vinayak', 'CSE', 9480312512, 40, 102466541023, '1978-09-14', 'B.E', 'MS', NULL, NULL, NULL, '1976-01-03', 'Asst. lect', 'vinayaka@gmail.com', 41, 'data analytics', NULL),
('cd104', 'suraj', 'CSE', 9480515235, 50, 102486541023, '1968-09-15', 'B.E', 'MS', NULL, NULL, NULL, '1986-01-04', 'Asst. lect', 'suraj@gmail.com', 31, 'web', NULL),
('cd105', 'ankitha', 'CSE', 9012348567, 30, 102455541023, '1988-09-16', 'B.E', NULL, NULL, NULL, NULL, '1992-01-05', 'Asst. lect', 'ankitha@gmail.com', 25, 'unix', NULL),
('cd106', 'suresh', 'CSE', 9482013515, 37, 102456561023, '1981-09-17', 'B.E', NULL, NULL, NULL, NULL, '1991-01-06', 'Asst. lect', 'suresh@gmail.com', 26, 'computer hardware', NULL),
('cd107', 'shwetha', 'CSE', 9480231564, 48, 102456341023, '1975-09-18', 'B.E', 'MS', NULL, NULL, NULL, '1990-01-07', 'Asst. lect', 'shwetha@gmail.com', 27, 'java', NULL),
('cd108', 'anitha', 'CSE', 9450232152, 45, 102456546023, '1978-09-19', 'B.E', 'MS', 'data science', NULL, NULL, '1996-01-08', 'asst.prof', 'anita@gmial.com', 21, 'iot', NULL),
('cd109', 'girish', 'CSE', 9451220352, 44, 102456541223, '1979-09-20', 'B.E', NULL, NULL, NULL, NULL, '2009-01-09', 'lect', 'girisha@gmail.com', 9, 'python', NULL),
('cd110', 'santosh', 'CSE', 3221505421, 33, 102456549223, '1984-09-21', 'B.E', NULL, NULL, NULL, NULL, '2015-01-10', 'lect', 'santosh@gmail.com', 3, 'cyber security', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `usn` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`usn`, `password`) VALUES
('4PS13CS097', '097'),
('admin', 'admin'),
('cd000', '000'),
('cd101', '101');

-- --------------------------------------------------------

--
-- Table structure for table `nontech_profile`
--

DROP TABLE IF EXISTS `nontech_profile`;
CREATE TABLE IF NOT EXISTS `nontech_profile` (
  `nts_name` varchar(50) NOT NULL,
  `nts_id` varchar(10) NOT NULL,
  `nts_designation` varchar(50) NOT NULL,
  `nts_qualification` varchar(50) NOT NULL,
  `nts_exp` varchar(50) NOT NULL,
  PRIMARY KEY (`nts_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nontech_profile`
--

INSERT INTO `nontech_profile` (`nts_name`, `nts_id`, `nts_designation`, `nts_qualification`, `nts_exp`) VALUES
('M.N.Kishore', '', 'computer programmer', 'B.Sc,PGDCA', '25'),
('G.K.Thiruneelakataswamy', '', 'Computer Operator', 'B.Sc, PGDCA', '20'),
('K.V.Puttaswamy', '', 'Asst. Instructor', 'B.Sc, PGDCA', '20'),
('M.S.Sunitha', '', 'Computer Operator', 'B.Sc(CS), M.Sc[IT]', '12'),
('A.L. Shobharani', '', 'Computer Operator', 'B.Sc(CS)', '16'),
('M.K.Vidyashree', '', 'Computer Instructor', 'Diploma in CS', '5');

-- --------------------------------------------------------

--
-- Table structure for table `student_allocate`
--

DROP TABLE IF EXISTS `student_allocate`;
CREATE TABLE IF NOT EXISTS `student_allocate` (
  `usn` varchar(10) NOT NULL,
  `sem` int(1) NOT NULL,
  `sec` char(1) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_allocate`
--

INSERT INTO `student_allocate` (`usn`, `sem`, `sec`) VALUES
('4PS13CS097', 5, 'A'),
('4PS14CS008', 7, 'B'),
('4PS14CS017', 5, 'B'),
('4PS15CS003', 5, 'A'),
('4PS15CS004', 5, 'B'),
('4PS15CS005', 5, 'A'),
('4PS15CS006', 5, 'B'),
('4PS15CS007', 5, 'A'),
('4PS15CS008', 5, 'B'),
('4PS15CS009', 5, 'B'),
('4PS15CS010', 5, 'A'),
('4PS15CS012', 5, 'B'),
('4PS15CS013', 5, 'A'),
('4PS15CS019', 5, 'B'),
('4PS15CS020', 5, 'A'),
('4PS15CS021', 5, 'A'),
('4PS15CS022', 5, 'B'),
('4PS15CS023', 5, 'A'),
('4PS15CS024', 5, 'B'),
('4PS15CS027', 5, 'A'),
('4PS15CS028', 5, 'A'),
('4PS15CS029', 5, 'B'),
('4PS15CS031', 5, 'A'),
('4PS15CS050', 5, 'B'),
('4PS15CS116', 5, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

DROP TABLE IF EXISTS `student_attendance`;
CREATE TABLE IF NOT EXISTS `student_attendance` (
  `usn` varchar(10) NOT NULL,
  `sub_code` varchar(10) NOT NULL,
  `sem` int(1) NOT NULL,
  `sec` varchar(10) NOT NULL,
  `sub_name` text NOT NULL,
  `attendance` int(10) NOT NULL,
  PRIMARY KEY (`usn`,`sub_code`,`sem`,`sec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`usn`, `sub_code`, `sem`, `sec`, `sub_name`, `attendance`) VALUES
('4PS13CS097', 'p13cs001', 5, 'A', 'OS', 95),
('4PS13CS097', 'p13cs002', 5, 'A', 'java', 94),
('4PS13CS097', 'p13cs003', 5, 'A', 'cyber security', 12),
('4PS14CS017', 'p13cs001', 5, 'A', 'OS', 56),
('4PS14CS017', 'p13cs002', 5, 'A', 'java', 94),
('4PS14CS017', 'p13cs003', 5, 'A', 'cyber security', 12),
('4PS15CS003', 'p13cs001', 5, 'A', 'OS', 15),
('4PS15CS003', 'p13cs002', 5, 'A', 'java', 96),
('4PS15CS003', 'p13cs003', 5, 'A', 'cyber security', 32),
('4PS15CS004', 'p13cs001', 5, 'B', 'OS', 45),
('4PS15CS004', 'p13cs002', 5, 'B', 'java', 98),
('4PS15CS004', 'p13cs003', 5, 'B', 'cyber security', 65),
('4PS15CS005', 'p13cs001', 5, 'B', 'OS', 75),
('4PS15CS005', 'p13cs002', 5, 'B', 'java', 92),
('4PS15CS005', 'p13cs003', 5, 'B', 'cyber security', 56),
('4PS15CS006', 'p13cs001', 5, 'B', 'OS', 45),
('4PS15CS006', 'p13cs002', 5, 'B', 'java', 90),
('4PS15CS006', 'p13cs003', 5, 'B', 'cyber security', 32),
('4PS15CS007', 'p13cs001', 5, 'B', 'OS', 84),
('4PS15CS007', 'p13cs002', 5, 'B', 'java', 45),
('4PS15CS007', 'p13cs003', 5, 'B', 'cyber security', 75),
('4PS15CS008', 'p13cs001', 5, 'A', 'OS', 48),
('4PS15CS008', 'p13cs002', 5, 'A', 'java', 78),
('4PS15CS008', 'p13cs003', 5, 'A', 'cyber security', 78),
('4PS15CS009', 'p13cs001', 5, 'A', 'OS', 65),
('4PS15CS009', 'p13cs002', 5, '', 'java', 75),
('4PS15CS009', 'p13cs002', 5, 'A', 'java', 52),
('4PS15CS009', 'p13cs003', 5, '', 'cyber security', 87);

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

DROP TABLE IF EXISTS `student_marks`;
CREATE TABLE IF NOT EXISTS `student_marks` (
  `usn` varchar(10) NOT NULL,
  `sub_code` varchar(10) NOT NULL,
  `sub_name` text NOT NULL,
  `sem` int(5) NOT NULL,
  `sec` varchar(10) NOT NULL,
  `cie1` int(4) DEFAULT NULL,
  `cie2` int(4) DEFAULT NULL,
  `assignment1` int(4) DEFAULT NULL,
  `assignment2` int(4) DEFAULT NULL,
  `cie` int(5) DEFAULT NULL,
  `see` int(5) DEFAULT NULL,
  `grade` text,
  PRIMARY KEY (`usn`,`sub_code`,`sem`,`sec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`usn`, `sub_code`, `sub_name`, `sem`, `sec`, `cie1`, `cie2`, `assignment1`, `assignment2`, `cie`, `see`, `grade`) VALUES
('4PS13CS097', 'p13cs001', 'OS', 5, 'A', 22, 21, 0, NULL, 11, 45, 'a'),
('4PS13CS097', 'p13cs002', 'java', 5, 'A', 21, 23, 10, NULL, 14, 54, 's'),
('4PS13CS097', 'p13cs003', 'cyber security', 5, 'A', 26, 21, 8, NULL, 14, 21, 'a'),
('4PS14CS017', 'p13cs001', 'OS', 5, 'A', 34, 24, 2, NULL, 16, 62, 'b'),
('4PS14CS017', 'p13cs002', 'java', 5, 'A', 28, 23, 5, NULL, 15, 87, 'f'),
('4PS14CS017', 'p13cs003', 'cyber security', 5, 'A', 25, 32, 8, NULL, 17, 65, 'd'),
('4PS15CS003', 'p13cs001', 'OS', 5, 'A', 15, 25, 5, NULL, 12, 98, 's'),
('4PS15CS003', 'p13cs002', 'java', 5, 'A', 23, 22, 8, NULL, 14, 6, 's'),
('4PS15CS003', 'p13cs003', 'cyber security', 5, 'A', 24, 32, 10, NULL, 17, 45, 'c'),
('4PS15CS004', 'p13cs001', 'OS', 5, 'B', 21, 26, 3, NULL, 13, 65, 'd'),
('4PS15CS004', 'p13cs002', 'java', 5, 'B', 15, 32, 2, NULL, 13, 5, 'a'),
('4PS15CS004', 'p13cs003', 'cyber security', 5, 'B', 34, 2, 6, NULL, 11, 46, 's'),
('4PS15CS005', 'p13cs001', 'OS', 5, 'B', 21, 25, 7, NULL, 14, 54, 'a'),
('4PS15CS005', 'p13cs002', 'java', 5, 'B', 32, 34, 9, NULL, 19, 65, 'd'),
('4PS15CS005', 'p13cs003', 'cyber security', 5, 'B', 30, 21, 4, NULL, 14, 65, 'f'),
('4PS15CS006', 'p13cs001', 'OS', 5, 'B', 32, 24, 10, NULL, 17, 21, 's'),
('4PS15CS006', 'p13cs002', 'java', 5, 'B', 34, 22, 7, NULL, 16, 54, 'w'),
('4PS15CS006', 'p13cs003', 'cyber security', 5, 'B', 39, 21, 0, NULL, 16, 87, 'f'),
('4PS15CS007', 'p13cs001', 'OS', 5, 'B', 32, 34, 6, NULL, 19, 65, 'd'),
('4PS15CS007', 'p13cs002', 'java', 5, 'B', 21, 34, 6, NULL, 16, 3, 's'),
('4PS15CS007', 'p13cs003', 'cyber security', 5, 'B', 23, 28, 5, NULL, 15, 8, 's'),
('4PS15CS008', 'p13cs001', 'OS', 5, 'A', 2, 30, 4, NULL, 10, 65, 'd'),
('4PS15CS008', 'p13cs002', 'java', 5, 'A', 24, 15, 7, NULL, 12, 54, 'f'),
('4PS15CS008', 'p13cs003', 'cyber security', 5, 'A', 23, 23, 6, NULL, 14, 45, 'a'),
('4PS15CS009', 'p13cs001', 'OS', 5, 'A', 21, 39, 9, NULL, 18, 98, 'f'),
('4PS15CS009', 'p13cs002', 'java', 5, '', 25, 21, 3, NULL, 13, 95, 'd'),
('4PS15CS009', 'p13cs003', 'cyber security', 5, '', 22, 15, 4, NULL, 11, 5, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

DROP TABLE IF EXISTS `student_profile`;
CREATE TABLE IF NOT EXISTS `student_profile` (
  `usn` varchar(50) NOT NULL,
  `student_name` text NOT NULL,
  `student_dept` text NOT NULL,
  `sem` int(10) NOT NULL,
  `sec` varchar(10) NOT NULL,
  `student_phone` bigint(12) NOT NULL,
  `student_email` varchar(30) NOT NULL,
  `student_adhar` bigint(20) UNSIGNED NOT NULL,
  `student_dob` varchar(50) NOT NULL,
  `student_addmission` date NOT NULL,
  `student_blood` varchar(5) NOT NULL,
  `student_father` text NOT NULL,
  `student_father_phone` bigint(12) NOT NULL,
  `student_mother` text NOT NULL,
  `student_mother_phone` bigint(12) NOT NULL,
  `student_address` varchar(50) NOT NULL,
  `student_guardian` text NOT NULL,
  `student_guardian_phone` bigint(12) NOT NULL,
  `student_guardian_address` varchar(50) NOT NULL,
  PRIMARY KEY (`usn`),
  UNIQUE KEY `student_adhar` (`student_adhar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`usn`, `student_name`, `student_dept`, `sem`, `sec`, `student_phone`, `student_email`, `student_adhar`, `student_dob`, `student_addmission`, `student_blood`, `student_father`, `student_father_phone`, `student_mother`, `student_mother_phone`, `student_address`, `student_guardian`, `student_guardian_phone`, `student_guardian_address`) VALUES
('4PS13CS097', 'RAM NIVAS Y.', 'CSE', 5, 'A', 8904599641, 'ramnivas.y@outlook.com', 770544023301, '1998-09-12', '2013-06-12', 'o+', 'NANJESH', 9480164589, 'VIDYA', 9845684232, '770544023301', 'ANOOP', 9482658432, '#807, KT STREET,12 CROSS,MYSORE'),
('4PS14CS017', 'BISHAL GHOSH', 'CSE', 5, 'B', 9609411300, 'vishalghosh1412@gmail.com', 311811172412, '1998-09-13', '2014-05-13', 'a+', 'NAGESH', 9480168256, 'VARSHA', 9845684232, '#807, KT STREET,13 CROSS,MYSORE', 'KARTHIK', 9482658432, '#807, KT STREET,13 CROSS,MYSORE'),
('4PS14CS088', 'pavan', 'cse', 5, 'B', 948403113, 'p@gmail.com', 123123123123, '22-2-1996', '2014-07-15', 'O+', 'asdzxzc', 9648512345, 'ascxczc', 12345678451, 'asdzx', 'asdxzceadfcz', 32645812654, 'adxzczxca'),
('4PS15CS003', 'AFTHAB KHAN C G', 'CSE', 5, 'A', 9482515282, 'aftabkhan9729@gmail.com', 282019386729, '1998-09-14', '2015-05-08', 'b+', 'GANESH', 9482123400, 'VANITHA', 9845684232, '#807, KT STREET,14 CROSS,MYSORE', 'RAJEEV', 9482658432, '#807, KT STREET,14 CROSS,MYSORE'),
('4PS15CS004', 'AISHWARYA M R', 'CSE', 5, 'B', 9008671575, 'aishwaryagowda97@gmail.com', 770244016602, '1998-09-15', '2015-05-09', 'o-', 'GANGADKAR', 9482123401, 'SHREYA', 9845684232, '#807, KT STREET,15 CROSS,MYSORE', 'RAJESH', 9482658432, '#807, KT STREET,15 CROSS,MYSORE'),
('4PS15CS005', 'AISHWARYA.K.S', 'CSE', 5, 'A', 9945624383, 'gowdaaishu17@gmail.com', 822839008769, '1998-09-16', '2015-05-10', 'ab+', 'GOPAL', 9480123402, 'NIDHI', 9845684232, '#807, KT STREET,16 CROSS,MYSORE', 'RAKESH', 9482658432, '#807, KT STREET,16 CROSS,MYSORE'),
('4PS15CS006', 'AKSHATHA.A.P', 'CSE', 5, 'B', 8722169305, 'akshuparu56@gmail.com', 517218966597, '1998-09-17', '2015-05-11', 'a+', 'ABHISHEK', 9482401234, 'JULIE', 9845684232, '#807, KT STREET,17 CROSS,MYSORE', 'RAJ GOPAL ', 9482658432, '#807, KT STREET,17 CROSS,MYSORE'),
('4PS15CS007', 'AMIT DILIP KUMAR', 'CSE', 5, 'A', 9738948274, 'mtkta3@gmail.com', 787077941679, '1998-09-18', '2015-05-12', 'ab+', 'CHENNAPPA', 9480123400, 'SHUBRATHA', 9845684232, '#807, KT STREET,18 CROSS,MYSORE', 'VARMA', 9482658432, '#807, KT STREET,18 CROSS,MYSORE'),
('4PS15CS008', 'AMOGH BABU K A', 'CSE', 5, 'B', 9964647991, 'amoghbabuka@gmail.com', 557239035616, '1998-09-19', '2015-05-13', 'o+', 'CHENNAIYYA', 9482403215, 'PRIYA', 9845684232, '#807, KT STREET,19 CROSS,MYSORE', 'YASH RAJ', 9482658432, '#807, KT STREET,19 CROSS,MYSORE'),
('4PS15CS009', 'AMRUTHA LAKSHMI.M', 'CSE', 5, 'B', 8749011954, 'amruthalakshmi47@gmail.com', 880599047706, '1998-09-20', '2015-05-14', 'o+', 'RAVI', 9482123405, 'PRIYANKA', 9845684232, '#807, KT STREET,20 CROSS,MYSORE', 'YASHWANTH', 9482658432, '#807, KT STREET,20 CROSS,MYSORE'),
('4PS15CS010', 'ANIKET MALLICK', 'CSE', 5, 'A', 8880948352, 'aniketmallic.am@gmail.com', 990588127735, '1998-09-21', '2015-05-15', 'o+', 'SURESH', 9482123406, 'PREETHI', 9845684232, '#807, KT STREET,21 CROSS,MYSORE', 'KARIYAPPA', 9482658432, '#807, KT STREET,21 CROSS,MYSORE'),
('4PS15CS012', 'ANUJ SINHA', 'CSE', 5, 'B', 8073377564, 'anujsinha106@gmail.com', 855293864065, '1998-09-22', '2015-05-08', 'a-', 'PRAVEEN', 9482123407, 'KALPANA', 9845684232, '#807, KT STREET,22 CROSS,MYSORE', 'BILIYAPPA', 9482658432, '#807, KT STREET,22 CROSS,MYSORE'),
('4PS15CS013', 'ANURAG PRAKASH', 'CSE', 5, 'A', 8867898753, 'anuragprakash45@gmail.com', 746500778340, '1998-09-23', '2015-05-09', 'ab-', 'DHERAJ', 9482123408, 'NEETHU', 9845684232, '#807, KT STREET,23 CROSS,MYSORE', 'SHANKAR', 9482658432, '#807, KT STREET,23 CROSS,MYSORE'),
('4PS15CS019', 'ASHWINI B D', 'CSE', 5, 'B', 8792188703, 'ashwinibd6697@gmail.com', 442992236631, '1998-09-24', '2015-05-10', 'o-', 'DINESH', 9482123409, 'SHRIYA', 9845684232, '#807, KT STREET,24 CROSS,MYSORE', 'VANITHA', 9482658432, '#807, KT STREET,24 CROSS,MYSORE'),
('4PS15CS020', 'ASHWINI POOJARI.M.H', 'CSE', 5, 'A', 7026560600, 'ashwini9718@gmail.com', 266699953025, '1998-09-25', '2015-05-11', 'o+', 'DEVA', 9482123410, 'JOSHLIN', 9845684232, '#807, KT STREET,25 CROSS,MYSORE', 'SHREYA', 9482658432, '#807, KT STREET,25 CROSS,MYSORE'),
('4PS15CS021', 'B KIRAN KUMAR', 'CSE', 5, 'A', 7411295557, 'mman1866@gmail.com', 337409487107, '1998-09-26', '2015-05-12', 'o+', 'DEVRAJ', 9482123411, 'KUSHI', 9845684232, '#807, KT STREET,26 CROSS,MYSORE', 'NIDHI', 9482658432, '#807, KT STREET,26 CROSS,MYSORE'),
('4PS15CS022', 'BHARGAVI G N', 'CSE', 5, 'A', 8861573636, 'bhargavib586@gmail.com', 387818625220, '1998-09-27', '2015-05-13', 'a+', 'HARISH', 9482123412, 'KUMUDA', 9845684232, '#807, KT STREET,27 CROSS,MYSORE', 'JULIE', 9482658432, '#807, KT STREET,27 CROSS,MYSORE'),
('4PS15CS023', 'BHAVYA P', 'CSE', 5, 'A', 7411872545, 'bhavyap281998@gmail.com', 846785155171, '1998-09-28', '2015-05-14', 'b+', 'HARSHA', 9482123413, 'MANJULA', 9845684232, '#807, KT STREET,28 CROSS,MYSORE', 'SHUBRATHA', 9482658432, '#807, KT STREET,28 CROSS,MYSORE'),
('4PS15CS024', 'BHOOMIKA.B.RAJ', 'CSE', 5, 'A', 9886585732, 'bhoomikabraj14@gmail.com', 515237528280, '1998-09-29', '2015-05-15', 'o-', 'HARSHVARDHAN', 9482123414, 'VEENA', 9845684232, '#807, KT STREET,29 CROSS,MYSORE', 'PRIYA', 9482658432, '#807, KT STREET,29 CROSS,MYSORE'),
('4PS15CS027', 'CHANDAN M', 'CSE', 5, 'B', 8762170489, 'mchandanpes@gmail.com', 270133947621, '1998-09-30', '2015-05-08', 'ab+', 'JEEVAN', 9482123415, 'SWATHI', 9845684232, '#807, KT STREET,30 CROSS,MYSORE', 'PRIYANKA', 9482658432, '#807, KT STREET,30 CROSS,MYSORE'),
('4PS15CS028', 'CHINMAYI S B', 'CSE', 5, 'A', 8147556544, 'chinmayigbkcs@gmail.com', 523674581452, '1998-10-01', '2015-05-09', 'a+', 'MOINAM', 9482123416, 'SHWETHA', 9845684232, '#807, KT STREET,31 CROSS,MYSORE', 'PREETHI', 9482658432, '#807, KT STREET,31 CROSS,MYSORE'),
('4PS15CS029', 'CHINTHANA J', 'CSE', 5, 'A', 9008704706, 'chinthanagowda1997@gmail.com', 281539894497, '1998-10-02', '2015-05-10', 'ab+', 'ADITYA', 9482123417, 'SHILPA', 9845684232, '#807, KT STREET,32 CROSS,MYSORE', 'KALPANA', 9482658432, '#807, KT STREET,32 CROSS,MYSORE'),
('4PS15CS031', 'DARSHINI S K', 'CSE', 5, 'A', 9164060413, 'darshinidarshu31@gmail.com', 204599880554, '1998-10-03', '2015-05-11', 'o+', 'AKASH', 9482123418, 'SHUSHMITHA', 9845684232, '#807, KT STREET,33 CROSS,MYSORE', 'NEETHU', 9482658432, '#807, KT STREET,33 CROSS,MYSORE'),
('4PS15CS050', 'MANASA V.', 'CSE', 5, 'B', 8884077496, 'manasav696@gmail.com', 563849457104, '1998-10-04', '2015-05-12', 'o+', 'ANKIT', 9482123419, 'SUHANA', 9845684232, '#807, KT STREET,34 CROSS,MYSORE', 'AKASH', 9482658432, '#807, KT STREET,34 CROSS,MYSORE'),
('4PS15CS116', 'SURABHI A K', 'CSE', 5, 'B', 8867083618, 'surabhishanbough@gmail.com', 355713707592, '1998-10-05', '2015-05-13', 'o+', 'ANOOP', 9482123420, 'SAHANA', 9845684232, '#807, KT STREET,35 CROSS,MYSORE', 'NANJESH', 9482658432, '#807, KT STREET,35 CROSS,MYSORE'),
('4PS15CS117', 'SUSHMITHA.N', 'CSE', 5, 'B', 9482411231, 'sushmithanarain@gmail.com', 456175385977, '1998-10-06', '2015-05-14', 'a-', 'KARTHIK', 9482123421, 'SHALINI', 9845684232, '#807, KT STREET,36 CROSS,MYSORE', 'NAGESH', 9482658432, '#807, KT STREET,36 CROSS,MYSORE'),
('4PS15CS118', 'SWATHI G S', 'CSE', 5, 'A', 7899532345, 'gsswathi2015@gmail.com', 348041983868, '1998-10-07', '2015-05-15', 'ab-', 'RAJEEV', 9482123422, 'ARPITHA', 9845684232, '#807, KT STREET,37 CROSS,MYSORE', 'GANESH', 9482658432, '#807, KT STREET,37 CROSS,MYSORE'),
('4PS15CS119', 'TEJAS KUMAR N', 'CSE', 5, 'A', 9449528285, 'tejaskumar666tj@gmail.com', 679092233237, '1998-10-08', '2015-05-08', 'o-', 'RAJESH', 9482123423, 'MEGHANA', 9845684232, '#807, KT STREET,38 CROSS,MYSORE', 'GANGADKAR', 9482658432, '#807, KT STREET,38 CROSS,MYSORE'),
('4PS15CS120', 'TUSHAR CHANDRA', 'CSE', 5, 'A', 9483596964, 'timir.tushar@gmail.com', 689476948849, '1998-10-09', '2015-05-09', 'o+', 'RAKESH', 9482123424, 'MANOGNA', 9845684232, '#807, KT STREET,39 CROSS,MYSORE', 'GOPAL', 9482658432, '#807, KT STREET,39 CROSS,MYSORE'),
('4PS15CS121', 'VANITHA.M', 'CSE', 5, 'B', 7996659454, 'vanitham979@gmail.com', 818266383013, '1998-10-10', '2015-05-10', 'o+', 'RAJ GOPAL ', 9482123425, 'MANUJA', 9845684232, '#807, KT STREET,40 CROSS,MYSORE', 'ABHISHEK', 9482658432, '#807, KT STREET,40 CROSS,MYSORE'),
('4PS15CS124', 'VASUKI VARUNA Y R', 'CSE', 5, 'A', 7259948944, 'vasuki286@gmail.com', 854513926143, '1998-10-11', '2015-05-11', 'a+', 'VARMA', 9482123426, 'MALINI', 9845684232, '#807, KT STREET,41 CROSS,MYSORE', 'CHENNAPPA', 9482658432, '#807, KT STREET,41 CROSS,MYSORE'),
('4PS15CS126', 'YASHAS M', 'CSE', 5, 'A', 7204429043, 'yashasm003@gmail.com', 875572707077, '1998-10-12', '2015-05-12', 'b+', 'YASH RAJ', 9482123427, 'MANI', 9845684232, '#807, KT STREET,42 CROSS,MYSORE', 'CHENNAIYYA', 9482658432, '#807, KT STREET,42 CROSS,MYSORE'),
('4PS15CS127', 'YOGANANDA M C', 'CSE', 0, '', 9620773932, 'yogananda.chandru@gmail.com', 532798131729, '1998-10-13', '2015-05-13', 'o-', 'YASHWANTH', 9482123428, 'NIKITHA', 9845684232, '#807, KT STREET,43 CROSS,MYSORE', 'RAVI', 9482658432, '#807, KT STREET,43 CROSS,MYSORE'),
('4PS15CS131', 'SHASHANK M.U.', 'CSE', 0, '', 9731232030, 'sshashu63@gmail.com', 611498259560, '1998-10-14', '2015-05-14', 'ab+', 'KARIYAPPA', 9482123429, 'NIVEDITHA', 9845684232, '#807, KT STREET,44 CROSS,MYSORE', 'SURESH', 9482658432, '#807, KT STREET,44 CROSS,MYSORE'),
('4PS15CS132', 'VINUTHA H.L.', 'CSE', 0, '', 8050324552, 'vinuthahlaradhya@gmail.com', 466182506061, '1998-10-15', '2015-05-15', 'a+', 'BILIYAPPA', 9482123430, 'VARSHINI', 9845684232, '#807, KT STREET,45 CROSS,MYSORE', 'PRAVEEN', 9482658432, '#807, KT STREET,45 CROSS,MYSORE'),
('4PS16CS400', 'ABRAR AHMED', 'CSE', 0, '', 9980699763, 'abrarahmed.aa69@gmail.com', 612140366796, '1998-10-16', '2016-05-16', 'ab+', 'SHANKAR', 9482123431, 'KALPANA', 9845684232, '#807, KT STREET,46 CROSS,MYSORE', 'DHERAJ', 9482658432, '#807, KT STREET,46 CROSS,MYSORE'),
('4PS16CS402', 'BEERESH T.', 'CSE', 0, '', 9986767921, 'beereshm08@gmail.com', 895263907821, '1998-10-17', '2016-05-17', 'o+', 'SHASHANK', 9482123432, 'KANCHANA', 9845684232, '#807, KT STREET,47 CROSS,MYSORE', 'DINESH', 9482658432, '#807, KT STREET,47 CROSS,MYSORE'),
('4PS16CS404', 'DILIPA ', 'CSE', 0, '', 8746937747, 'dileep.bs@yahoo.com', 254125637458, '1998-10-18', '2016-05-18', 'o+', 'SANKET', 9482123433, 'NAYANA', 9845684232, '#807, KT STREET,48 CROSS,MYSORE', 'DEVA', 9482658432, '#807, KT STREET,48 CROSS,MYSORE'),
('4PS16CS405', 'GHANAVI K.N.', 'CSE', 0, '', 8496008586, 'ganaviharshi@gmail.com', 225169910331, '1998-10-19', '2016-05-19', 'o+', 'SATVIK', 9482123434, 'AIGIRI', 9845684232, '#807, KT STREET,49 CROSS,MYSORE', 'DEVRAJ', 9482658432, '#807, KT STREET,49 CROSS,MYSORE'),
('4PS16CS406', 'GEETHA M.R.', 'CSE', 0, '', 8861131231, 'geethamrthanu@gmail.com', 3541304367587, '1998-10-20', '2016-05-20', 'a-', 'RUTHVIK', 9482123435, 'NANDINI', 9845684232, '#807, KT STREET,50 CROSS,MYSORE', 'HARISH', 9482658432, '#807, KT STREET,50 CROSS,MYSORE'),
('4PS16CS409', 'KUMARA H.S.', 'CSE', 0, '', 9035774200, 'hskumarhs@gmail.com', 453539875496, '1998-10-21', '2016-05-21', 'ab-', 'ROOPESH', 9482123436, 'NANDITHA', 9845684232, '#807, KT STREET,51 CROSS,MYSORE', 'HARSHA', 9482658432, '#807, KT STREET,51 CROSS,MYSORE'),
('4PS16CS410', 'LIJU THOMAS', 'CSE', 0, '', 9035506798, 'lijuthomas95@gmail.com', 670340492744, '1998-10-22', '2016-05-22', 'o-', 'ROOPNANDAN', 9482123437, 'MOHINI', 9845684232, '#807, KT STREET,52 CROSS,MYSORE', 'HARSHVARDHAN', 9482658432, '#807, KT STREET,52 CROSS,MYSORE'),
('4PS16CS412', 'MEGHA M', 'CSE', 0, '', 9008707415, 'megham759@gmail.com', 541256325874, '1998-10-23', '2016-05-23', 'o+', 'RAKSHITH', 9482123438, 'VINODINI', 9845684232, '#807, KT STREET,53 CROSS,MYSORE', 'JEEVAN', 9482658432, '#807, KT STREET,53 CROSS,MYSORE'),
('4PS16CS415', 'MOHAMMED SHUAIB', 'CSE', 0, '', 8747893193, 'shuaibmaddur@gmail.com', 334710690745, '1998-10-24', '2016-05-24', 'o+', 'ASHWIN', 9482123439, 'NANDASUTHE', 9845684232, '#807, KT STREET,54 CROSS,MYSORE', 'MOINAM', 9482658432, '#807, KT STREET,54 CROSS,MYSORE'),
('4PS16CS420', 'SHARATH KUMAR G.', 'CSE', 0, '', 9972494817, 'sharathkumarg3012@gmail.com', 728162586349, '1998-10-25', '2016-05-25', 'a+', 'ANAND', 9482123440, 'SAKAMMA', 9845684232, '#807, KT STREET,55 CROSS,MYSORE', 'ADITYA', 9482658432, '#807, KT STREET,55 CROSS,MYSORE');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `sub_code` varchar(10) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  `sem` int(1) NOT NULL,
  PRIMARY KEY (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_code`, `sub_name`, `sem`) VALUES
('p13cs001', 'OS', 5),
('p13cs002', 'java', 5),
('p13cs003', 'cyber security', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
