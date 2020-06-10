-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2020 at 08:17 AM
-- Server version: 5.1.67
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c1thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
  `activity_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(128) NOT NULL,
  PRIMARY KEY (`activity_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=237 ;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(1, 'admin', '2020-06-05 07:22:36', 'Assign Device id 19343111505ed9900113d61 to location id 1'),
(2, 'admin', '2020-06-05 07:23:21', 'Assign Device id 2680209115ed9900129286 to location id 2'),
(3, 'admin', '2020-06-05 07:23:49', 'Assign Device id 17512253025ed99001467fb to location id 3'),
(4, 'admin', '2020-06-05 07:24:34', 'Assign Device id 21310184945ed9900163755 to location id 4'),
(5, 'admin', '2020-06-05 07:25:20', 'Assign Device id 19343111505ed9900113d61 to location id 5'),
(6, 'admin', '2020-06-05 07:25:51', 'Assign Device id 20337688475ed990017ddb4 to location id 6'),
(7, 'admin', '2020-06-05 07:26:18', 'Assign Device id 17512253025ed99001467fb to location id 7'),
(8, 'admin', '2020-06-05 07:27:03', 'Assign Device id 20337688475ed990017ddb4 to location id 8'),
(9, 'admin', '2020-06-05 07:27:34', 'Assign Device id 1948483585ed990012f084 to location id 9'),
(10, 'admin', '2020-06-05 07:28:09', 'Assign Device id 2680209115ed9900129286 to location id 10'),
(11, 'admin', '2020-06-05 07:28:56', 'Assign Device id 2680209115ed9900129286 to location id 11'),
(12, 'admin', '2020-06-05 07:29:41', 'Assign Device id 10315180315ed990019552a to location id 12'),
(13, 'admin', '2020-06-05 07:31:51', 'Assign Device id 991756645ed990014bfba to location id 13'),
(14, 'admin', '2020-06-05 07:32:20', 'Assign Device id 991756645ed990014bfba to location id 14'),
(15, 'admin', '2020-06-05 07:32:56', 'Assign Device id 2680209115ed9900129286 to location id 15'),
(16, 'admin', '2020-06-05 07:33:15', 'Assign Device id 1948483585ed990012f084 to location id 15'),
(17, 'admin', '2020-06-05 07:33:43', 'Assign Device id 2680209115ed9900129286 to location id 16'),
(18, 'admin', '2020-06-05 07:34:08', 'Assign Device id 1688506005ed9900123470 to location id 17'),
(19, 'admin', '2020-06-05 07:38:22', 'Assign Device id 1688506005ed9900123470 to location id 18'),
(20, 'admin', '2020-06-05 07:38:53', 'Assign Device id 6899646635ed9900157b92 to location id 19'),
(21, 'admin', '2020-06-05 07:39:40', 'Assign Device id 1688506005ed9900123470 to location id 20'),
(22, 'admin', '2020-06-05 07:40:18', 'Assign Device id 991756645ed990014bfba to location id 21'),
(23, 'admin', '2020-06-05 07:40:40', 'Assign Device id 9685362115ed990018998c to location id 21'),
(24, 'admin', '2020-06-05 07:41:11', 'Assign Device id 1688506005ed9900123470 to location id 22'),
(25, 'admin', '2020-06-05 07:41:40', 'Assign Device id 991756645ed990014bfba to location id 22'),
(26, 'admin', '2020-06-05 07:42:24', 'Assign Device id 1688506005ed9900123470 to location id 23'),
(27, 'admin', '2020-06-05 07:42:46', 'Assign Device id 10315180315ed990019552a to location id 23'),
(28, 'admin', '2020-06-05 07:43:27', 'Assign Device id 2680209115ed9900129286 to location id 24'),
(29, 'admin', '2020-06-05 07:44:12', 'Assign Device id 1948483585ed990012f084 to location id 25'),
(30, 'admin', '2020-06-05 07:44:44', 'Assign Device id 2680209115ed9900129286 to location id 26'),
(31, 'admin', '2020-06-05 07:47:00', 'Assign Device id 2680209115ed9900129286 to location id 27'),
(32, 'admin', '2020-06-05 07:47:33', 'Assign Device id 8881047915ed990016f336 to location id 28'),
(33, 'admin', '2020-06-05 07:48:25', 'Assign Device id 2680209115ed9900129286 to location id 28'),
(34, 'admin', '2020-06-05 07:48:48', 'Assign Device id 7837254715ed9900183beb to location id 28'),
(35, 'admin', '2020-06-05 07:49:25', 'Assign Device id 3777802055ed99001750ef to location id 29'),
(36, 'admin', '2020-06-05 07:49:49', 'Assign Device id 2680209115ed9900129286 to location id 29'),
(37, 'admin', '2020-06-05 07:50:22', 'Assign Device id 1688506005ed9900123470 to location id 30'),
(38, 'admin', '2020-06-05 07:50:49', 'Assign Device id 1718191165ed990011cfae to location id 30'),
(39, 'admin', '2020-06-05 07:51:15', 'Assign Device id 1688506005ed9900123470 to location id 31'),
(40, 'admin', '2020-06-05 07:51:46', 'Assign Device id 1688506005ed9900123470 to location id 32'),
(41, 'admin', '2020-06-05 07:52:10', 'Assign Device id 991756645ed990014bfba to location id 32'),
(42, 'admin', '2020-06-05 07:52:38', 'Assign Device id 1948483585ed990012f084 to location id 33'),
(43, 'admin', '2020-06-05 07:53:07', 'Assign Device id 2680209115ed9900129286 to location id 33'),
(44, 'admin', '2020-06-05 07:53:33', 'Assign Device id 2680209115ed9900129286 to location id 34'),
(45, 'admin', '2020-06-05 07:54:01', 'Assign Device id 1718191165ed990011cfae to location id 35'),
(46, 'admin', '2020-06-05 07:54:27', 'Assign Device id 1718191165ed990011cfae to location id 36'),
(47, 'admin', '2020-06-05 07:54:55', 'Assign Device id 991756645ed990014bfba to location id 36'),
(48, 'admin', '2020-06-05 07:56:21', 'Assign Device id 2680209115ed9900129286 to location id 37'),
(49, 'admin', '2020-06-05 07:56:47', 'Assign Device id 2680209115ed9900129286 to location id 38'),
(50, 'admin', '2020-06-05 07:57:18', 'Assign Device id 8074591405ed99001409ff to location id 39'),
(51, 'admin', '2020-06-05 07:59:36', 'Assign Device id 1948483585ed990012f084 to location id 40'),
(52, 'admin', '2020-06-05 08:00:05', 'Assign Device id 991756645ed990014bfba to location id 41'),
(53, 'admin', '2020-06-05 08:00:36', 'Assign Device id 12140656595ed990018f744 to location id 42'),
(54, 'admin', '2020-06-05 08:00:57', 'Assign Device id 2680209115ed9900129286 to location id 42'),
(55, 'admin', '2020-06-05 08:01:28', 'Assign Device id 1212873915ed9900169b37 to location id 43'),
(56, 'admin', '2020-06-05 08:02:03', 'Assign Device id 1688506005ed9900123470 to location id 44'),
(57, 'admin', '2020-06-05 08:02:31', 'Assign Device id 1688506005ed9900123470 to location id 45'),
(58, 'admin', '2020-06-05 08:02:51', 'Assign Device id 13683756845ed990015d94b to location id 45'),
(59, 'admin', '2020-06-05 08:03:22', 'Assign Device id 1688506005ed9900123470 to location id 46'),
(60, 'admin', '2020-06-05 08:04:03', 'Assign Device id 12044226305ed9900151da9 to location id 47'),
(61, 'admin', '2020-06-05 08:04:33', 'Assign Device id 1688506005ed9900123470 to location id 47'),
(62, 'admin', '2020-06-05 08:05:03', 'Assign Device id 2680209115ed9900129286 to location id 48'),
(63, 'admin', '2020-06-05 08:05:31', 'Assign Device id 2680209115ed9900129286 to location id 49'),
(64, 'admin', '2020-06-05 08:05:50', 'Assign Device id 1948483585ed990012f084 to location id 49'),
(65, 'admin', '2020-06-05 08:06:23', 'Assign Device id 2680209115ed9900129286 to location id 50'),
(66, 'admin', '2020-06-05 08:09:01', 'Assign Device id 101551215ed9900134e46 to location id 51'),
(67, 'admin', '2020-06-05 08:09:26', 'Assign Device id 6683520705ed990013ac22 to location id 51'),
(68, 'admin', '2020-06-05 08:10:00', 'Assign Device id 101551215ed9900134e46 to location id 52'),
(69, 'admin', '2020-06-05 08:10:22', 'Assign Device id 6683520705ed990013ac22 to location id 52'),
(70, 'admin', '2020-06-05 08:10:49', 'Assign Device id 101551215ed9900134e46 to location id 53'),
(71, 'admin', '2020-06-05 08:11:07', 'Assign Device id 6683520705ed990013ac22 to location id 53'),
(72, 'admin', '2020-06-05 08:11:29', 'Assign Device id 6683520705ed990013ac22 to location id 54'),
(73, 'admin', '2020-06-05 08:11:45', 'Assign Device id 101551215ed9900134e46 to location id 54'),
(74, 'admin', '2020-06-05 08:13:42', 'Assign Device id 10878176515ed99001c1d41 to location id 20'),
(75, 'admin', '2020-06-05 08:14:10', 'Assign Device id 14324827575ed99001a6ede to location id 21'),
(76, 'admin', '2020-06-05 08:14:56', 'Assign Device id 14133989275ed99001c642e to location id 22'),
(77, 'admin', '2020-06-05 08:15:49', 'Assign Device id 14324827575ed99001a6ede to location id 23'),
(78, 'admin', '2020-06-05 08:16:11', 'Assign Device id 16708464265ed99001bd725 to location id 51'),
(79, 'admin', '2020-06-05 08:16:30', 'Assign Device id 3752006445ed99001b2ad8 to location id 52'),
(80, 'admin', '2020-06-05 08:16:50', 'Assign Device id 12596367675ed99001cf10b to location id 53'),
(81, 'admin', '2020-06-05 08:17:12', 'Assign Device id 14324827575ed99001a6ede to location id 54'),
(82, 'admin', '2020-06-05 08:17:32', 'Assign Device id 14324827575ed99001a6ede to location id 39'),
(83, 'admin', '2020-06-05 08:17:56', 'Assign Device id 1144606175ed99001ec6cb to location id 32'),
(84, 'admin', '2020-06-05 08:18:36', 'Assign Device id 14133989275ed99001c642e to location id 32'),
(85, 'admin', '2020-06-05 08:18:57', 'Assign Device id 16708464265ed99001bd725 to location id 33'),
(86, 'admin', '2020-06-05 08:19:16', 'Assign Device id 16708464265ed99001bd725 to location id 34'),
(87, 'admin', '2020-06-05 08:19:53', 'Assign Device id 14324827575ed99001a6ede to location id 35'),
(88, 'admin', '2020-06-05 08:20:10', 'Assign Device id 9245396145ed99001b889f to location id 36'),
(89, 'admin', '2020-06-05 08:20:31', 'Assign Device id 14544851255ed99001dc499 to location id 37'),
(90, 'admin', '2020-06-05 08:20:48', 'Assign Device id 15822495285ed99001d379e to location id 38'),
(91, 'admin', '2020-06-05 08:21:10', 'Assign Device id 1144606175ed99001ec6cb to location id 49'),
(92, 'admin', '2020-06-05 08:21:32', 'Assign Device id 15822495285ed99001d379e to location id 48'),
(93, 'admin', '2020-06-05 08:21:55', 'Assign Device id 19607768395ed99001acca4 to location id 45'),
(94, 'admin', '2020-06-05 08:22:13', 'Assign Device id 14576739285ed99001caa9a to location id 50'),
(95, 'admin', '2020-06-05 08:22:32', 'Assign Device id 19607768395ed99001acca4 to location id 44'),
(96, 'admin', '2020-06-05 08:25:40', 'Assign Device id 19607768395ed99001acca4 to location id 46'),
(97, 'admin', '2020-06-05 08:26:09', 'Assign Device id 17256948395ed99001d7e18 to location id 47'),
(98, 'admin', '2020-06-05 08:26:27', 'Assign Device id 19607768395ed99001acca4 to location id 27'),
(99, 'admin', '2020-06-05 08:26:43', 'Assign Device id 19607768395ed99001acca4 to location id 15'),
(100, 'admin', '2020-06-05 08:26:56', 'Assign Device id 7124471885ed990019b2f0 to location id 16'),
(101, 'admin', '2020-06-05 08:27:16', 'Assign Device id 14576739285ed99001caa9a to location id 40'),
(102, 'admin', '2020-06-05 08:27:46', 'Assign Device id 16786831225ed99001a111d to location id 17'),
(103, 'admin', '2020-06-05 09:03:07', 'Assign Device id 10123222685ed9a7b0afd78 to location id 1'),
(104, 'admin', '2020-06-05 09:04:31', 'Assign Device id 18913433835ed9a7b01453b to location id 20'),
(105, 'admin', '2020-06-05 09:04:58', 'Assign Device id 18913433835ed9a7b01453b to location id 21'),
(106, 'admin', '2020-06-05 09:05:14', 'Assign Device id 12303400715ed9a7b01a30f to location id 22'),
(107, 'admin', '2020-06-05 09:05:32', 'Assign Device id 16986078445ed9a7af50e15 to location id 23'),
(108, 'admin', '2020-06-05 09:05:47', 'Assign Device id 2633927085ed9a7b0200ff to location id 31'),
(109, 'admin', '2020-06-05 09:06:04', 'Assign Device id 19722636335ed9a7b025ee0 to location id 32'),
(110, 'admin', '2020-06-05 09:06:19', 'Assign Device id 7950849045ed9a7af7af45 to location id 33'),
(111, 'admin', '2020-06-05 09:06:37', 'Assign Device id 5462468185ed9a7af80d3c to location id 34'),
(112, 'admin', '2020-06-05 09:06:57', 'Assign Device id 9449697985ed9a7b02bcec to location id 35'),
(113, 'admin', '2020-06-05 09:07:13', 'Assign Device id 9216963955ed9a7afd4775 to location id 36'),
(114, 'admin', '2020-06-05 09:07:31', 'Assign Device id 1469497915ed9a7afda729 to location id 37'),
(115, 'admin', '2020-06-05 09:07:48', 'Assign Device id 16866763845ed9a7b06dd38 to location id 38'),
(116, 'admin', '2020-06-05 09:08:08', 'Assign Device id 9545952935ed9a7b073b18 to location id 39'),
(117, 'admin', '2020-06-05 09:08:27', 'Assign Device id 16258239105ed9a7afdf3bc to location id 51'),
(118, 'admin', '2020-06-05 09:08:40', 'Assign Device id 11068976905ed9a7b031ac5 to location id 52'),
(119, 'admin', '2020-06-05 09:08:54', 'Assign Device id 13895642375ed9a7b0798fb to location id 53'),
(120, 'admin', '2020-06-05 09:09:07', 'Assign Device id 3650404115ed9a7b07f6cd to location id 54'),
(121, 'admin', '2020-06-05 09:10:50', 'Assign Device id 12867368075ed9a7b091099 to location id 28'),
(122, 'admin', '2020-06-05 09:12:13', 'Assign Device id 16007576055ed9a7b096e77 to location id 28'),
(123, 'admin', '2020-06-05 09:12:32', 'Assign Device id 4529133335ed9a7b09cc60 to location id 28'),
(124, 'admin', '2020-06-05 09:12:45', 'Assign Device id 18191266435ed9a7b0a2a4a to location id 28'),
(125, 'admin', '2020-06-05 09:13:33', 'Assign Device id 11163732635ed9a7b0a8825 to location id 28'),
(126, 'admin', '2020-06-05 09:14:02', 'Assign Device id 16191558485ed9a7b10a766 to location id 5'),
(127, 'admin', '2020-06-05 09:14:13', 'Assign Device id 17949624445ed9a7b110559 to location id 5'),
(128, 'admin', '2020-06-05 09:14:41', 'Assign Device id 8222911345ed9a7b12362b to location id 5'),
(129, 'admin', '2020-06-05 09:14:53', 'Assign Device id 1553425325ed9a7b117a56 to location id 5'),
(130, 'admin', '2020-06-05 09:15:04', 'Assign Device id 17546231555ed9a7b11d857 to location id 5'),
(131, 'admin', '2020-06-05 09:15:23', 'Assign Device id 20133794805ed9a7b129411 to location id 5'),
(132, 'admin', '2020-06-05 09:15:36', 'Assign Device id 3671330555ed9a7b12f1f1 to location id 5'),
(133, 'admin', '2020-06-05 09:15:52', 'Assign Device id 3614838705ed9a7b134ff1 to location id 5'),
(134, 'admin', '2020-06-05 09:23:18', 'Assign Device id 18231412705ed9a7af4b032 to location id 41'),
(135, 'admin', '2020-06-05 09:24:34', 'Assign Device id 18069817995ed99002bb0cc to location id 1'),
(136, 'admin', '2020-06-05 09:24:52', 'Assign Device id 18069817995ed99002bb0cc to location id 2'),
(137, 'admin', '2020-06-05 09:25:16', 'Assign Device id 9958817605ed99002efdee to location id 5'),
(138, 'admin', '2020-06-05 09:26:07', 'Add location LPM'),
(139, 'admin', '2020-06-05 09:48:23', 'Assign Device id 19544833375ed9900273901 to location id 16'),
(140, 'admin', '2020-06-05 09:49:24', 'Assign Device id 20080279485ed990027f49c to location id 16'),
(141, 'admin', '2020-06-05 09:49:45', 'Assign Device id 10666364565ed99002852bd to location id 16'),
(142, 'admin', '2020-06-05 09:50:08', 'Assign Device id 4946308975ed99002de439 to location id 15'),
(143, 'admin', '2020-06-05 09:50:38', 'Assign Device id 9602655685ed990023d483 to location id 14'),
(144, 'admin', '2020-06-05 09:51:10', 'Assign Device id 17141146105ed990020e53d to location id 13'),
(145, 'admin', '2020-06-05 09:51:38', 'Assign Device id 5503540205ed990026dae3 to location id 13'),
(146, 'admin', '2020-06-05 09:52:08', 'Assign Device id 3320343305ed9900267d40 to location id 8'),
(147, 'admin', '2020-06-05 09:53:10', 'Assign Device id 3320343305ed9900267d40 to location id 6'),
(148, 'admin', '2020-06-05 09:54:56', 'Assign Device id 8666656865ed9900261f3e to location id 4'),
(149, 'admin', '2020-06-05 09:55:32', 'Assign Device id 9619162465ed99002cca4d to location id 10'),
(150, 'admin', '2020-06-05 09:56:12', 'Assign Device id 18861109665ed9900209e99 to location id 27'),
(151, 'admin', '2020-06-05 09:56:31', 'Assign Device id 15862391395ed9900290e42 to location id 30'),
(152, 'admin', '2020-06-05 09:56:48', 'Assign Device id 3736379345ed9900296c57 to location id 30'),
(153, 'admin', '2020-06-05 09:57:15', 'Assign Device id 15598937605ed99002c0ec1 to location id 3'),
(154, 'admin', '2020-06-05 09:57:51', 'Assign Device id 6251201395ed990029ca55 to location id 44'),
(155, 'admin', '2020-06-05 09:58:19', 'Assign Device id 18328024015ed99002a280f to location id 44'),
(156, 'admin', '2020-06-05 09:58:49', 'Assign Device id 5012508625ed990023766d to location id 45'),
(157, 'admin', '2020-06-05 09:59:20', 'Assign Device id 4547357535ed990021ff14 to location id 45'),
(158, 'admin', '2020-06-05 09:59:46', 'Assign Device id 20073983575ed990021a0d7 to location id 46'),
(159, 'admin', '2020-06-05 10:00:24', 'Assign Device id 18936835565ed990022babe to location id 46'),
(160, 'admin', '2020-06-05 10:00:42', 'Assign Device id 4880985515ed99002a85ce to location id 47'),
(161, 'admin', '2020-06-05 10:01:05', 'Assign Device id 6251201395ed990029ca55 to location id 47'),
(162, 'admin', '2020-06-05 10:01:20', 'Assign Device id 18328024015ed99002a280f to location id 47'),
(163, 'admin', '2020-06-05 10:01:36', 'Assign Device id 12384612245ed990023189e to location id 48'),
(164, 'admin', '2020-06-05 10:02:01', 'Assign Device id 20073983575ed990021a0d7 to location id 48'),
(165, 'admin', '2020-06-05 10:02:28', 'Assign Device id 18212664425ed99002afb30 to location id 50'),
(166, 'admin', '2020-06-05 10:02:59', 'Assign Device id 310576795ed99002b52cf to location id 50'),
(167, 'admin', '2020-06-05 10:03:28', 'Assign Device id 6251201395ed990029ca55 to location id 42'),
(168, 'admin', '2020-06-05 10:03:59', 'Assign Device id 4914650425ed990025054f to location id 42'),
(169, 'admin', '2020-06-05 10:07:26', 'Assign Device id 1632136865ed9a7af56c25 to location id 44'),
(170, 'admin', '2020-06-05 10:07:45', 'Assign Device id 8777485225ed9a7b0e0426 to location id 45'),
(171, 'admin', '2020-06-05 10:07:58', 'Assign Device id 14976134125ed9a7b0f15e4 to location id 46'),
(172, 'admin', '2020-06-05 10:08:14', 'Assign Device id 11623050765ed9a7b0d4861 to location id 47'),
(173, 'admin', '2020-06-05 10:08:27', 'Assign Device id 17581770895ed9a7af0b6dd to location id 48'),
(174, 'admin', '2020-06-05 10:08:41', 'Assign Device id 15161495155ed9a7af2c323 to location id 49'),
(175, 'admin', '2020-06-05 10:08:52', 'Assign Device id 14538078145ed9a7b0854cc to location id 50'),
(176, 'admin', '2020-06-05 10:10:49', 'Assign Device id 21072748745ed9a7b0e5a5e to location id 28'),
(177, 'admin', '2020-06-05 10:11:01', 'Assign Device id 2053479215ed9a7b00e72d to location id 28'),
(178, 'admin', '2020-06-05 10:11:19', 'Assign Device id 4066812165ed9a7b0c8cb5 to location id 42'),
(179, 'admin', '2020-06-05 10:12:00', 'Assign Device id 2973490325ed9a7b049250 to location id 42'),
(180, 'admin', '2020-06-05 10:12:15', 'Assign Device id 6245262415ed9a7afab624 to location id 42'),
(181, 'admin', '2020-06-05 10:12:32', 'Assign Device id 5118640465ed9a7afb13ec to location id 42'),
(182, 'admin', '2020-06-05 10:12:47', 'Assign Device id 12440419935ed9a7afb71c3 to location id 42'),
(183, 'admin', '2020-06-05 10:13:06', 'Assign Device id 6295706895ed9a7afbcfa1 to location id 42'),
(184, 'admin', '2020-06-05 10:13:19', 'Assign Device id 8258476755ed9a7afc2d8f to location id 42'),
(185, 'admin', '2020-06-05 10:13:34', 'Assign Device id 4992125215ed9a7afc8b78 to location id 42'),
(186, 'admin', '2020-06-05 10:14:07', 'Assign Device id 8518183375ed9a7b0507a6 to location id 42'),
(187, 'admin', '2020-06-05 10:14:21', 'Assign Device id 1354673075ed9a7b0565da to location id 42'),
(188, 'admin', '2020-06-05 10:14:40', 'Assign Device id 10671263855ed9a7b008964 to location id 13'),
(189, 'admin', '2020-06-05 10:14:50', 'Assign Device id 14026541765ed9a7aed451c to location id 13'),
(190, 'admin', '2020-06-05 10:15:05', 'Assign Device id 11029217925ed9a7aeda343 to location id 13'),
(191, 'admin', '2020-06-05 10:15:16', 'Assign Device id 958487205ed9a7aee00f3 to location id 6'),
(192, 'admin', '2020-06-05 10:15:28', 'Assign Device id 10062186105ed9a7afa5826 to location id 6'),
(193, 'admin', '2020-06-05 10:15:47', 'Assign Device id 7141646535ed9a7ae70927 to location id 14'),
(194, 'admin', '2020-06-05 10:15:57', 'Assign Device id 20794486535ed9a7b0c2e9f to location id 14'),
(195, 'admin', '2020-06-05 10:16:07', 'Assign Device id 15579965305ed9a7ae9827f to location id 14'),
(196, 'admin', '2020-06-05 10:16:18', 'Assign Device id 6771198815ed9a7af3f444 to location id 14'),
(197, 'admin', '2020-06-05 10:16:56', 'Assign Device id 5594089355ed9a7afec78e to location id 28'),
(198, 'admin', '2020-06-05 10:17:10', 'Assign Device id 17818843895ed9a7aebcca1 to location id 14'),
(199, 'admin', '2020-06-05 10:17:22', 'Assign Device id 580447865ed9a7af5c9ea to location id 13'),
(200, 'admin', '2020-06-05 10:17:33', 'Assign Device id 16630993065ed9a7afe80e3 to location id 6'),
(201, 'admin', '2020-06-05 10:17:47', 'Assign Device id 580447865ed9a7af5c9ea to location id 42'),
(202, 'admin', '2020-06-05 10:18:07', 'Assign Device id 6198648895ed9a7b03788e to location id 42'),
(203, 'admin', '2020-06-05 13:39:55', 'Add location Gudang UPT.PLT'),
(204, 'admin', '2020-06-05 13:41:11', 'Edit location Laboratorium 7'),
(205, 'admin', '2020-06-05 13:41:37', 'Edit location Kelas 2.4'),
(206, 'admin', '2020-06-05 13:41:53', 'Edit location LP3M'),
(207, 'admin', '2020-06-05 13:42:04', 'Edit location Dosen SI'),
(208, 'admin', '2020-06-05 13:42:23', 'Edit location Prodi Tek. Informasi'),
(209, 'admin', '2020-06-05 13:42:39', 'Edit location BAA/Pengajaran'),
(210, 'admin', '2020-06-05 13:42:51', 'Edit location BAU'),
(211, 'admin', '2020-06-05 13:43:54', 'Edit location Kelas 2.1'),
(212, 'admin', '2020-06-05 13:44:08', 'Edit location Produksi Radio'),
(213, 'admin', '2020-06-05 13:44:20', 'Edit location Siaran Radio'),
(214, 'admin', '2020-06-05 13:44:33', 'Edit location Bioskop'),
(215, 'admin', '2020-06-05 13:44:53', 'Edit location Eksekutif'),
(216, 'admin', '2020-06-05 13:45:05', 'Edit location Aula'),
(217, 'admin', '2020-06-05 13:45:24', 'Edit location Kelas 2.2'),
(218, 'admin', '2020-06-05 13:45:47', 'Edit location Kelas 2.3'),
(219, 'admin', '2020-06-05 13:46:02', 'Edit location Dosen IF'),
(220, 'admin', '2020-06-05 13:46:17', 'Edit location Rapat'),
(221, 'admin', '2020-06-05 13:46:29', 'Edit location UPT. Bahasa'),
(222, 'admin', '2020-06-05 13:46:43', 'Edit location Ampu Studio'),
(223, 'admin', '2020-06-05 13:47:09', 'Edit location LPU'),
(224, 'admin', '2020-06-05 13:47:31', 'Edit location Laboratorium 1'),
(225, 'admin', '2020-06-05 13:47:47', 'Edit location Laboratorium 2'),
(226, 'admin', '2020-06-05 13:48:06', 'Edit location Laboratorium 3'),
(227, 'admin', '2020-06-05 13:48:22', 'Edit location Laboratorium 4'),
(228, 'admin', '2020-06-05 13:48:33', 'Edit location Laboratorium 5'),
(229, 'admin', '2020-06-05 13:48:44', 'Edit location Laboratorium 6'),
(230, 'admin', '2020-06-05 13:48:58', 'Edit location Pemancar'),
(231, 'admin', '2020-06-05 13:50:20', 'Edit location Laboratorium Animasi'),
(232, 'admin', '2020-06-05 14:04:49', 'Edit Device Type PC '),
(233, 'admin', '2020-06-05 14:12:22', 'Add device Type  PC Lab 01'),
(234, 'admin', '2020-06-05 14:13:04', 'Edit Device Type 01 4 PC Lab'),
(235, 'admin', '2020-06-05 14:14:29', 'Edit Device Type 01 1 PC Admin'),
(236, 'admin', '2020-06-05 14:18:24', 'Edit device info Air Conditioning');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(128) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `adminthumbnails` varchar(300) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `adminthumbnails`) VALUES
(5, 'Muhammad', 'Imron', 'admin', 'admin', 'images/NO-IMAGE-AVAILABLE.jpg'),
(8, 'Darso', '.', 'darso', 'admin', 'images/NO-IMAGE-AVAILABLE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(128) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `thumbnails` varchar(200) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `username`, `password`, `firstname`, `lastname`, `thumbnails`) VALUES
(14, 'petugas', 'user', 'lab', 'lab', 'images/NO-IMAGE-AVAILABLE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `title`, `content`) VALUES
(1, 'Mission', '<pre>\n<span style="font-size:16px"><strong>Mission</strong></span></pre>\n\n<p style="text-align:left"><span style="font-family:arial,helvetica,sans-serif; font-size:medium"><span style="font-size:large">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span>&nbsp; &nbsp;<span style="font-size:18px"> &nbsp; &nbsp; &nbsp;Respecting the human dignity and unique talents of each person, Southland College is dedicated in helping its students actualizetheir potentials for the enchancementof their own lives and or nationals Development.&nbsp;</span></p>\n\n<p style="text-align:left">&nbsp;</p>\n'),
(2, 'Vision', '<pre><span style="font-size: large;"><strong>Vision</strong></span></pre>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: large;">&nbsp; A progressive educational community where the individual is at the core of his own learning </span><br /><br /></p>'),
(3, 'History', '<pre><span style="font-size: large;">HISTORY &nbsp;</span> </pre>\n<p style="text-align: justify;"><span style="font-family:arial,helvetica,sans-serif; font-size:medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The southland college story is the intermingling of imposibilities and unbelief, against optimism and faith.the story of this new school is a beatifull retelling of god''s goodness; his hands helping shape the foundation of southland college.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amid Challeges, stumbling blocks, and interfering forces, southland college was established-a shining testamentof God''s wondrous ways and his helping hand for those who trust in Him.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deeply saddened by the anticipated mass resignation of the faculty and staff with the change of leadership of a private school where he was the former president, DR. Anecito D. Villaluz, Jr. Decided to put up his own school where he could freely make use of his publicity acknowledged and admired managerial skills and organizational expertise.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the preparations for the new school started in March 2009. The incorporators who compose the Board of directors are Dr.Villaluz, Chairman; Mrs. Annette Z. Villaluz, vice-chairman; Dr. Emiliano L. Sama,Jr.,corporate secretary; Mrs.Yvonne Z. Rocha, Treasurer; and Dr.Rhoda J. Amor,Dr. Grace A. Badrina, Dr. Henly S. Pahilagao, and Mr. Miguel M. Zayco, directors.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The securities and Exchange Commision (DepEd) issurd the school registration permiton March 24,2009.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The department of Education (DepEd) Western Visayas Regional office issued the permit for the basic education on June 1. 2009. The school established the consortium with the Northern Negros state College of Science and Technology (NONESCOST) for the Nursing Degree program, and with the Negros Oriental State Accounting Technology, BS Business Administrators, BS Hospiitality Management, and the 2-year Midwifery course. The administrators, faculty and staff, parents and strengthen the new school. Each of them undertook the assigned task without expecting any personal reward. it was evidend that God is shaping the southland destiny throught the hearts, hands and minds of these people.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Regional Quality Assesment Team (RQUAT) and Commission on Higher Education (CHEd) Supersvisors readily issuad permits for all degree programs After validating the requirements and inspecting the facilities.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The school was formerly launched on May 13, 2009. It was followed by the a grand caravan. The following days saw the advertisements and promotion blitz in variious towns and cities.<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By the end of the enrolment period, God gave soutland collegeits needed initial number of students. Enrolled during the school year 2009-2010 were: pre school, 69; elementary, 130; and High school, 122. During the first semester of the same school year, college enrolment reached 177. it was an impressive number for a new school which opened within a few months time after its inception.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A thanksgiving service with the theme "Triumph Amid Trials" was held on August 28, 2009 morning. It was immediatly followed by the school''s very first academic convocation. The officers of student councils, faculty and staff club, and the parents and teachers assembleis were inducted in the afternoon. aquaintance parties in all levels followed.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amid the trials, Southland College is seen to Survive and Prevail for its story in a tapestry of good relationships, great resposibilities, and God''s redemption<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indeed, at Southland College the foundation of God stand''s sure!\n</p>'),
(4, 'Footer', '<p style="text-align:center">Technology Resource Inventory System (T.R.S) Copyright 2015</p>\n\n<p style="text-align:center">All Rights Reserved &reg;2015</p>\n'),
(5, 'Title', '<p><span style="font-family:trebuchet ms,geneva">Technology Resource Inventory System</span></p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `device_name`
--

CREATE TABLE IF NOT EXISTS `device_name` (
  `dev_id` varchar(11) NOT NULL,
  `dev_name` varchar(100) NOT NULL,
  PRIMARY KEY (`dev_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device_name`
--

INSERT INTO `device_name` (`dev_id`, `dev_name`) VALUES
('01', 'PC '),
('02', 'Networking'),
('03', 'Kelistrikan'),
('04', 'Alat Elektronik'),
('05', 'Sound System'),
('06', 'Air Conditioning'),
('07', 'Pencetak'),
('08', 'Alat Laboratorium'),
('09', 'Furniture'),
('10', 'Alat Komunikasi'),
('11', 'Alat Transportasi'),
('12', 'Alat Olahraga'),
('13', 'Alat Perkakas'),
('14', 'Alat Kebersihan'),
('15', 'Alat Dapur'),
('16', 'Alat Pemancar'),
('17', 'Alat Kesehatan'),
('18', 'Alat Musik'),
('19', 'Keselamatan Kerja');

-- --------------------------------------------------------

--
-- Table structure for table `device_name_type`
--

CREATE TABLE IF NOT EXISTS `device_name_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_number` varchar(11) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `dev_id` varchar(11) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `device_name_type`
--

INSERT INTO `device_name_type` (`type_id`, `type_number`, `type_name`, `dev_id`) VALUES
(1, '1', 'PC Admin', '01'),
(2, '2', 'LCD Monitor', '01'),
(3, '1', 'Scaner', '07'),
(4, '2', 'Printer', '07'),
(5, '1', 'LCD Televisi', '04'),
(6, '2', 'LCD Proyektor', '04'),
(7, '1', 'Mikrotik', '02'),
(8, '2', 'Switch Hub', '02'),
(9, '3', 'Access Point', '02'),
(10, '1', 'AC', '06'),
(11, '2', 'Kipas Angin', '06'),
(12, '1', 'Arduino Uno', '08'),
(13, '2', 'Osciloscope', '08'),
(14, '3', 'Headset', '08'),
(15, '4', 'Speaker', '08'),
(16, '5', 'Gelang Antistatic', '08'),
(17, '3', 'Server', '01'),
(18, '3', 'UPS', '04'),
(19, '4', 'PC Lab', '01');

-- --------------------------------------------------------

--
-- Table structure for table `device_procurement`
--

CREATE TABLE IF NOT EXISTS `device_procurement` (
  `procure_id` varchar(11) NOT NULL,
  `procure_code` varchar(11) NOT NULL,
  `procure_name` varchar(100) NOT NULL,
  PRIMARY KEY (`procure_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device_procurement`
--

INSERT INTO `device_procurement` (`procure_id`, `procure_code`, `procure_name`) VALUES
('Y', 'Y', 'Yayasan'),
('H', 'H', 'Hibah');

-- --------------------------------------------------------

--
-- Table structure for table `device_unit`
--

CREATE TABLE IF NOT EXISTS `device_unit` (
  `unit_id` varchar(100) NOT NULL,
  `unit_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device_unit`
--

INSERT INTO `device_unit` (`unit_id`, `unit_name`) VALUES
('Unit', 'Unit'),
('Buah', 'Buah'),
('Pasang', 'Pasang'),
('Lembar', 'Lembar'),
('Keping', 'Keping'),
('Batang', 'Batang'),
('Bungkus', 'Bungkus'),
('Potong', 'Potong'),
('Tablet', 'Tablet'),
('Ekor', 'Ekor'),
('Rim', 'Rim'),
('Karat', 'Karat'),
('Botol', 'Botol'),
('Butir', 'Butir'),
('Roll', 'Roll'),
('Dus', 'Dus'),
('Karung', 'Karung'),
('Koli', 'Koli'),
('Sak', 'Sak'),
('Bal', 'Bal'),
('Kaleng', 'Kaleng'),
('Set', 'Set'),
('Slop', 'Slop'),
('Gulung', 'Gulung'),
('Ton', 'Ton'),
('Kilogram', 'Kilogram'),
('Gram', 'Gram'),
('Miligram', 'Miligram'),
('Meter', 'Meter'),
('M2', 'M2'),
('M3', 'M3'),
('Inchi', 'Inchi'),
('CC', 'CC'),
('Liter', 'Liter');

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE IF NOT EXISTS `institution` (
  `inst_id` varchar(11) NOT NULL,
  `inst_code` varchar(255) NOT NULL,
  `inst_name` varchar(255) NOT NULL,
  PRIMARY KEY (`inst_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`inst_id`, `inst_code`, `inst_name`) VALUES
('UAP', 'UAP', 'Universitas AMIKOM Purwokerto');

-- --------------------------------------------------------

--
-- Table structure for table `location_details`
--

CREATE TABLE IF NOT EXISTS `location_details` (
  `ld_id` int(11) NOT NULL AUTO_INCREMENT,
  `stdev_id` int(11) NOT NULL,
  `date_deployment` date NOT NULL,
  `id` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`ld_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=202 ;

--
-- Dumping data for table `location_details`
--

INSERT INTO `location_details` (`ld_id`, `stdev_id`, `date_deployment`, `id`, `jumlah`) VALUES
(1, 1, '2020-06-05', '19343111505ed9900113d61', 1),
(2, 2, '2020-06-05', '2680209115ed9900129286', 1),
(3, 3, '2020-06-05', '17512253025ed99001467fb', 1),
(4, 4, '2020-06-05', '21310184945ed9900163755', 1),
(5, 5, '2020-06-05', '19343111505ed9900113d61', 1),
(6, 6, '2020-06-05', '20337688475ed990017ddb4', 1),
(7, 7, '2020-06-05', '17512253025ed99001467fb', 1),
(8, 8, '2020-06-05', '20337688475ed990017ddb4', 1),
(9, 9, '2020-06-05', '1948483585ed990012f084', 2),
(10, 10, '2020-06-05', '2680209115ed9900129286', 2),
(11, 11, '2020-06-05', '2680209115ed9900129286', 1),
(12, 12, '2020-06-05', '10315180315ed990019552a', 1),
(13, 13, '2020-06-05', '991756645ed990014bfba', 1),
(14, 14, '2020-06-05', '991756645ed990014bfba', 1),
(15, 15, '2020-06-05', '2680209115ed9900129286', 2),
(16, 15, '2020-06-05', '1948483585ed990012f084', 2),
(17, 16, '2020-06-05', '2680209115ed9900129286', 2),
(18, 17, '2020-06-05', '1688506005ed9900123470', 2),
(19, 18, '2020-06-05', '1688506005ed9900123470', 1),
(20, 19, '2020-06-05', '6899646635ed9900157b92', 1),
(21, 20, '2020-06-05', '1688506005ed9900123470', 2),
(22, 21, '2020-06-05', '991756645ed990014bfba', 1),
(23, 21, '2020-06-05', '9685362115ed990018998c', 1),
(24, 22, '2020-06-05', '1688506005ed9900123470', 1),
(25, 22, '2020-06-05', '991756645ed990014bfba', 1),
(26, 23, '2020-06-05', '1688506005ed9900123470', 1),
(27, 23, '2020-06-05', '10315180315ed990019552a', 1),
(28, 24, '2020-06-05', '2680209115ed9900129286', 3),
(29, 25, '2020-06-05', '1948483585ed990012f084', 1),
(30, 26, '2020-06-05', '2680209115ed9900129286', 1),
(31, 27, '2020-06-05', '2680209115ed9900129286', 2),
(32, 28, '2020-06-05', '8881047915ed990016f336', 1),
(33, 28, '2020-06-05', '2680209115ed9900129286', 1),
(34, 28, '2020-06-05', '7837254715ed9900183beb', 1),
(35, 29, '2020-06-05', '3777802055ed99001750ef', 1),
(36, 29, '2020-06-05', '2680209115ed9900129286', 1),
(37, 30, '2020-06-05', '1688506005ed9900123470', 1),
(38, 30, '2020-06-05', '1718191165ed990011cfae', 1),
(39, 31, '2020-06-05', '1688506005ed9900123470', 2),
(40, 32, '2020-06-05', '1688506005ed9900123470', 1),
(41, 32, '2020-06-05', '991756645ed990014bfba', 1),
(42, 33, '2020-06-05', '1948483585ed990012f084', 1),
(43, 33, '2020-06-05', '2680209115ed9900129286', 1),
(44, 34, '2020-06-05', '2680209115ed9900129286', 2),
(45, 35, '2020-06-05', '1718191165ed990011cfae', 2),
(46, 36, '2020-06-05', '1718191165ed990011cfae', 1),
(47, 36, '2020-06-05', '991756645ed990014bfba', 1),
(48, 37, '2020-06-05', '2680209115ed9900129286', 2),
(49, 38, '2020-06-05', '2680209115ed9900129286', 2),
(50, 39, '2020-06-05', '8074591405ed99001409ff', 2),
(51, 40, '2020-06-05', '1948483585ed990012f084', 1),
(52, 41, '2020-06-05', '991756645ed990014bfba', 1),
(53, 42, '2020-06-05', '12140656595ed990018f744', 1),
(54, 42, '2020-06-05', '2680209115ed9900129286', 1),
(55, 43, '2020-06-05', '1212873915ed9900169b37', 1),
(56, 44, '2020-06-05', '1688506005ed9900123470', 3),
(57, 45, '2020-06-05', '1688506005ed9900123470', 2),
(58, 45, '2020-06-05', '13683756845ed990015d94b', 1),
(59, 46, '2020-06-05', '1688506005ed9900123470', 3),
(60, 47, '2020-06-05', '12044226305ed9900151da9', 1),
(61, 47, '2020-06-05', '1688506005ed9900123470', 2),
(62, 48, '2020-06-05', '2680209115ed9900129286', 3),
(63, 49, '2020-06-05', '2680209115ed9900129286', 2),
(64, 49, '2020-06-05', '1948483585ed990012f084', 1),
(65, 50, '2020-06-05', '2680209115ed9900129286', 3),
(66, 51, '2020-06-05', '101551215ed9900134e46', 1),
(67, 51, '2020-06-05', '6683520705ed990013ac22', 1),
(68, 52, '2020-06-05', '101551215ed9900134e46', 1),
(69, 52, '2020-06-05', '6683520705ed990013ac22', 1),
(70, 53, '2020-06-05', '101551215ed9900134e46', 1),
(71, 53, '2020-06-05', '6683520705ed990013ac22', 1),
(72, 54, '2020-06-05', '6683520705ed990013ac22', 1),
(73, 54, '2020-06-05', '101551215ed9900134e46', 1),
(74, 20, '2020-06-05', '10878176515ed99001c1d41', 1),
(75, 21, '2020-06-05', '14324827575ed99001a6ede', 1),
(76, 22, '2020-06-05', '14133989275ed99001c642e', 1),
(77, 23, '2020-06-05', '14324827575ed99001a6ede', 1),
(78, 51, '2020-06-05', '16708464265ed99001bd725', 1),
(79, 52, '2020-06-05', '3752006445ed99001b2ad8', 1),
(80, 53, '2020-06-05', '12596367675ed99001cf10b', 1),
(81, 54, '2020-06-05', '14324827575ed99001a6ede', 1),
(82, 39, '2020-06-05', '14324827575ed99001a6ede', 1),
(83, 32, '2020-06-05', '1144606175ed99001ec6cb', 1),
(84, 32, '2020-06-05', '14133989275ed99001c642e', 1),
(85, 33, '2020-06-05', '16708464265ed99001bd725', 1),
(86, 34, '2020-06-05', '16708464265ed99001bd725', 1),
(87, 35, '2020-06-05', '14324827575ed99001a6ede', 1),
(88, 36, '2020-06-05', '9245396145ed99001b889f', 1),
(89, 37, '2020-06-05', '14544851255ed99001dc499', 1),
(90, 38, '2020-06-05', '15822495285ed99001d379e', 1),
(91, 49, '2020-06-05', '1144606175ed99001ec6cb', 1),
(92, 48, '2020-06-05', '15822495285ed99001d379e', 1),
(93, 45, '2020-06-05', '19607768395ed99001acca4', 1),
(94, 50, '2020-06-05', '14576739285ed99001caa9a', 1),
(95, 44, '2020-06-05', '19607768395ed99001acca4', 1),
(96, 46, '2020-06-05', '19607768395ed99001acca4', 1),
(97, 47, '2020-06-05', '17256948395ed99001d7e18', 1),
(98, 27, '2020-06-05', '19607768395ed99001acca4', 1),
(99, 15, '2020-06-05', '19607768395ed99001acca4', 1),
(100, 16, '2020-06-05', '7124471885ed990019b2f0', 1),
(101, 40, '2020-06-05', '14576739285ed99001caa9a', 1),
(102, 17, '2020-06-05', '16786831225ed99001a111d', 1),
(103, 1, '2020-06-05', '10123222685ed9a7b0afd78', 1),
(104, 20, '2020-06-05', '18913433835ed9a7b01453b', 1),
(105, 21, '2020-06-05', '18913433835ed9a7b01453b', 1),
(106, 22, '2020-06-05', '12303400715ed9a7b01a30f', 1),
(107, 23, '2020-06-05', '16986078445ed9a7af50e15', 1),
(108, 31, '2020-06-05', '2633927085ed9a7b0200ff', 1),
(109, 32, '2020-06-05', '19722636335ed9a7b025ee0', 1),
(110, 33, '2020-06-05', '7950849045ed9a7af7af45', 1),
(111, 34, '2020-06-05', '5462468185ed9a7af80d3c', 1),
(112, 35, '2020-06-05', '9449697985ed9a7b02bcec', 1),
(113, 36, '2020-06-05', '9216963955ed9a7afd4775', 1),
(114, 37, '2020-06-05', '1469497915ed9a7afda729', 1),
(115, 38, '2020-06-05', '16866763845ed9a7b06dd38', 1),
(116, 39, '2020-06-05', '9545952935ed9a7b073b18', 1),
(117, 51, '2020-06-05', '16258239105ed9a7afdf3bc', 1),
(118, 52, '2020-06-05', '11068976905ed9a7b031ac5', 1),
(119, 53, '2020-06-05', '13895642375ed9a7b0798fb', 1),
(120, 54, '2020-06-05', '3650404115ed9a7b07f6cd', 1),
(121, 28, '2020-06-05', '12867368075ed9a7b091099', 1),
(122, 28, '2020-06-05', '16007576055ed9a7b096e77', 1),
(123, 28, '2020-06-05', '4529133335ed9a7b09cc60', 5),
(124, 28, '2020-06-05', '18191266435ed9a7b0a2a4a', 1),
(125, 28, '2020-06-05', '11163732635ed9a7b0a8825', 1),
(126, 5, '2020-06-05', '16191558485ed9a7b10a766', 1),
(127, 5, '2020-06-05', '17949624445ed9a7b110559', 1),
(128, 5, '2020-06-05', '8222911345ed9a7b12362b', 1),
(129, 5, '2020-06-05', '1553425325ed9a7b117a56', 1),
(130, 5, '2020-06-05', '17546231555ed9a7b11d857', 1),
(131, 5, '2020-06-05', '20133794805ed9a7b129411', 1),
(132, 5, '2020-06-05', '3671330555ed9a7b12f1f1', 1),
(133, 5, '2020-06-05', '3614838705ed9a7b134ff1', 1),
(134, 41, '2020-06-05', '18231412705ed9a7af4b032', 1),
(135, 1, '2020-06-05', '18069817995ed99002bb0cc', 1),
(136, 2, '2020-06-05', '18069817995ed99002bb0cc', 1),
(137, 5, '2020-06-05', '9958817605ed99002efdee', 1),
(138, 16, '2020-06-05', '19544833375ed9900273901', 1),
(139, 16, '2020-06-05', '20080279485ed990027f49c', 1),
(140, 16, '2020-06-05', '10666364565ed99002852bd', 1),
(141, 15, '2020-06-05', '4946308975ed99002de439', 1),
(142, 14, '2020-06-05', '9602655685ed990023d483', 1),
(143, 13, '2020-06-05', '17141146105ed990020e53d', 1),
(144, 13, '2020-06-05', '5503540205ed990026dae3', 1),
(145, 8, '2020-06-05', '3320343305ed9900267d40', 1),
(146, 6, '2020-06-05', '3320343305ed9900267d40', 1),
(147, 4, '2020-06-05', '8666656865ed9900261f3e', 1),
(148, 10, '2020-06-05', '9619162465ed99002cca4d', 1),
(149, 27, '2020-06-05', '18861109665ed9900209e99', 1),
(150, 30, '2020-06-05', '15862391395ed9900290e42', 1),
(151, 30, '2020-06-05', '3736379345ed9900296c57', 1),
(152, 3, '2020-06-05', '15598937605ed99002c0ec1', 1),
(153, 44, '2020-06-05', '6251201395ed990029ca55', 1),
(154, 44, '2020-06-05', '18328024015ed99002a280f', 1),
(155, 45, '2020-06-05', '5012508625ed990023766d', 1),
(156, 45, '2020-06-05', '4547357535ed990021ff14', 1),
(157, 46, '2020-06-05', '20073983575ed990021a0d7', 1),
(158, 46, '2020-06-05', '18936835565ed990022babe', 1),
(159, 47, '2020-06-05', '4880985515ed99002a85ce', 1),
(160, 47, '2020-06-05', '6251201395ed990029ca55', 1),
(161, 47, '2020-06-05', '18328024015ed99002a280f', 1),
(162, 48, '2020-06-05', '12384612245ed990023189e', 1),
(163, 48, '2020-06-05', '20073983575ed990021a0d7', 1),
(164, 50, '2020-06-05', '18212664425ed99002afb30', 1),
(165, 50, '2020-06-05', '310576795ed99002b52cf', 1),
(166, 42, '2020-06-05', '6251201395ed990029ca55', 1),
(167, 42, '2020-06-05', '4914650425ed990025054f', 1),
(168, 44, '2020-06-05', '1632136865ed9a7af56c25', 55),
(169, 45, '2020-06-05', '8777485225ed9a7b0e0426', 55),
(170, 46, '2020-06-05', '14976134125ed9a7b0f15e4', 55),
(171, 47, '2020-06-05', '11623050765ed9a7b0d4861', 55),
(172, 48, '2020-06-05', '17581770895ed9a7af0b6dd', 40),
(173, 49, '2020-06-05', '15161495155ed9a7af2c323', 50),
(174, 50, '2020-06-05', '14538078145ed9a7b0854cc', 55),
(175, 28, '2020-06-05', '21072748745ed9a7b0e5a5e', 2),
(176, 28, '2020-06-05', '2053479215ed9a7b00e72d', 1),
(177, 42, '2020-06-05', '4066812165ed9a7b0c8cb5', 1),
(178, 42, '2020-06-05', '2973490325ed9a7b049250', 1),
(179, 42, '2020-06-05', '6245262415ed9a7afab624', 1),
(180, 42, '2020-06-05', '5118640465ed9a7afb13ec', 1),
(181, 42, '2020-06-05', '12440419935ed9a7afb71c3', 1),
(182, 42, '2020-06-05', '6295706895ed9a7afbcfa1', 1),
(183, 42, '2020-06-05', '8258476755ed9a7afc2d8f', 1),
(184, 42, '2020-06-05', '4992125215ed9a7afc8b78', 2),
(185, 42, '2020-06-05', '8518183375ed9a7b0507a6', 1),
(186, 42, '2020-06-05', '1354673075ed9a7b0565da', 1),
(187, 13, '2020-06-05', '10671263855ed9a7b008964', 1),
(188, 13, '2020-06-05', '14026541765ed9a7aed451c', 1),
(189, 13, '2020-06-05', '11029217925ed9a7aeda343', 1),
(190, 6, '2020-06-05', '958487205ed9a7aee00f3', 1),
(191, 6, '2020-06-05', '10062186105ed9a7afa5826', 1),
(192, 14, '2020-06-05', '7141646535ed9a7ae70927', 1),
(193, 14, '2020-06-05', '20794486535ed9a7b0c2e9f', 1),
(194, 14, '2020-06-05', '15579965305ed9a7ae9827f', 1),
(195, 14, '2020-06-05', '6771198815ed9a7af3f444', 1),
(196, 28, '2020-06-05', '5594089355ed9a7afec78e', 1),
(197, 14, '2020-06-05', '17818843895ed9a7aebcca1', 1),
(198, 13, '2020-06-05', '580447865ed9a7af5c9ea', 1),
(199, 6, '2020-06-05', '16630993065ed9a7afe80e3', 1),
(200, 42, '2020-06-05', '580447865ed9a7af5c9ea', 1),
(201, 42, '2020-06-05', '6198648895ed9a7b03788e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(128) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `date_of_notification` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `notification`
--


-- --------------------------------------------------------

--
-- Table structure for table `notification_read`
--

CREATE TABLE IF NOT EXISTS `notification_read` (
  `notification_read_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `admin_read` varchar(50) NOT NULL,
  `notification_id` int(11) NOT NULL,
  PRIMARY KEY (`notification_read_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `notification_read`
--


-- --------------------------------------------------------

--
-- Table structure for table `stdevice`
--

CREATE TABLE IF NOT EXISTS `stdevice` (
  `id` varchar(100) NOT NULL,
  `dev_id` varchar(11) NOT NULL,
  `type_id` varchar(11) NOT NULL,
  `dev_code` varchar(128) NOT NULL,
  `dev_brand` varchar(128) NOT NULL,
  `dev_model` varchar(128) NOT NULL,
  `dev_desc` text NOT NULL,
  `dev_status` varchar(128) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `unit_id` varchar(11) NOT NULL,
  `inst_id` varchar(11) NOT NULL,
  `procure_id` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdevice`
--

INSERT INTO `stdevice` (`id`, `dev_id`, `type_id`, `dev_code`, `dev_brand`, `dev_model`, `dev_desc`, `dev_status`, `jumlah`, `year`, `unit_id`, `inst_id`, `procure_id`, `created_at`, `updated_at`) VALUES
('10062186105ed9a7afa5826', '01', '1', '0121', 'PC', 'Intel Core Tm 2 duo CPU E7500 2.93Ghz/DDR3 2GB/250GB', '', 'New', 0, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10123222685ed9a7b0afd78', '01', '1', '0165', 'PC', 'Intel Core i3 4150 CPU 5,50 GHz/DDR3 4GB/HD.500', '', 'New', 0, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('101551215ed9900134e46', '06', '10', '0006', 'AC Panasonic', '1,5 PK', '', 'New', 0, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '2020-06-05 02:18:24'),
('10269912425ed990025c140', '02', '8', '0057', 'D-Link 24 Port', 'Des 1024 D 10/100', '', 'New', 1, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10298828875ed9a7ae85103', '01', '1', '0086', 'PC', 'Intel Core Tm 2 B4600/ DDR2 2GB/160', '', 'New', 1, '2009', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10315180315ed990019552a', '06', '10', '0022', 'Midea', '1,5 PK', '', 'New', 0, '2019', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10529685375ed9a7b0cea82', '01', '1', '0170', 'PC', 'Intel Core i3/ DDR3 2GB/250GB', '', 'New', 1, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10666364565ed99002852bd', '02', '8', '0064', 'D-Link 24 Port', 'DES-1024 A 10/100', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10671263855ed9a7b008964', '01', '1', '0137', 'PC', 'Intel Pentium G630/ DDR3 4GB/ 360GB', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10810686735ed9a7af33802', '01', '1', '0103', 'PC', 'Intel Core 2 duo/DDR 2 2GB/360GB', '', 'New', 1, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10878176515ed99001c1d41', '04', '6', '0030', 'Lcd Projektor', 'Epson EB-X-300', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11029217925ed9a7aeda343', '01', '1', '0097', 'PC', 'Intel Core i3/ DDR3 2GB/250GB', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11068976905ed9a7b031ac5', '01', '1', '0144', 'PC', 'Intel core i3-2120/DDR RAM 2G/HD.WDC 250G/VGA 512G', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11163732635ed9a7b0a8825', '01', '1', '0164', 'PC', 'Intel Pentium//DDR3 1GB/80 GB', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('1144606175ed99001ec6cb', '04', '6', '0039', 'Lcd PANASONIC', 'PT-LB1VEA', '', 'New', 1, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11623050765ed9a7b0d4861', '01', '1', '0171', 'PC', 'Intel core I3/Ram 4gb/ hd 250GB/LCD 19.5 Inch/OS WIN 7 Pro', '', 'New', 0, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11660083775ed99002e4248', '02', '8', '0080', 'TP-Link 5 Port', 'TLSF 1005 D 10/100', '', 'New', 2, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11748123375ed9a7b05c380', '01', '1', '0151', 'PC', 'Intel core TM i3 4150 cpu 350Ghz/DDR3 2GB/HD 320GB', '', 'New', 1, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11801991385ed990028b0ab', '02', '8', '0065', 'TP-Link 16 Port', 'TLSF 1016 D 10/100', '', 'New', 1, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11961463035ed99001f0d5f', '08', '14', '0040', 'Headset', 'M-Tech MT-01', '', 'New', 44, '2017', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11999791625ed9a7aea7b47', '01', '1', '0089', 'PC', 'Intel Pentium Dual E2700/ DDR2 2GB/80GB ', '', 'New', 1, '2009', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('12044226305ed9900151da9', '06', '10', '0011', 'Panasonic', '2 PK', '', 'New', 0, '2019', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('1212873915ed9900169b37', '06', '10', '0015', 'LG', '1 PK', '', 'New', 0, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('12136980515ed990024a7c1', '02', '8', '0054', 'TP-Link 8 port', 'TLSF 1008D 10/100', '', 'New', 1, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('12140656595ed990018f744', '06', '10', '0021', 'Gree', '2 PK', '', 'New', 0, '2019', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('1224956075ed9900243275', '02', '8', '0053', 'TP-Link 5 Port', 'TLSF 1005 D 10/100', '', 'New', 1, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('12303400715ed9a7b01a30f', '01', '1', '0140', 'PC', 'Intel core TM i3 540,@3.07Ghz/RAM 2GB/HD.ST250', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('12384612245ed990023189e', '02', '8', '0050', 'D-Link 16 Port', 'Des 1016 A', '', 'New', 0, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('12440419935ed9a7afb71c3', '01', '1', '0124', 'PC', 'Intel core2 duo/RAM 2GB DDR2/80GB', '', 'New', 0, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('12596367675ed99001cf10b', '04', '6', '0033', 'Lcd Projektor', 'X1261N', '', 'New', 0, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('12867368075ed9a7b091099', '01', '1', '0160', 'PC', 'Intel Core i3/DDR3 1GB/80 GB', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('12908856185ed99002ea04a', '02', '8', '0081', 'D-Link 8 port', '10/1000', '', 'New', 2, '2018', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('13024180945ed99002142f0', '02', '8', '0045', 'D-Link 8 port', 'Des 1008A 10/100', '', 'New', 1, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('13091088025ed9a7b0bd0c8', '01', '1', '0167', 'PC', 'Intel Core i3/DDR3 4GB/', '', 'New', 1, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('13188832485ed990020580c', '08', '16', '0042', 'Gelang Antistatic', 'Leko', '', 'New', 25, '2019', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('1354673075ed9a7b0565da', '01', '1', '0150', 'PC', 'Core i3/DDR3 4GB/320GB', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('13683756845ed990015d94b', '06', '10', '0013', 'LG', '1,5 PK', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('13895642375ed9a7b0798fb', '01', '1', '0156', 'PC', 'Intel dual core 4300/DDR RAM 1G/HD 250', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('14026541765ed9a7aed451c', '01', '1', '0096', 'PC', 'Intel Core i3 550/DDR3 2GB/250/400', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('14133989275ed99001c642e', '04', '6', '0031', 'Lcd Projektor', 'LB280-XGA', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('14198084695ed99002d28a1', '02', '8', '0077', 'TP-Link 8 port', 'TLSF 1008D 10/100', '', 'New', 1, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('14324827575ed99001a6ede', '04', '6', '0025', 'Lcd Projektor', 'EB-X-300', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('14510078425ed9a7b10496a', '01', '1', '0177', 'PC', 'Intel core I3/Ram 4gb/ hd 250GB/ LCD 19.5 Inch/OS WIN 7 Pro', '', 'New', 55, '2020', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('14538078145ed9a7b0854cc', '01', '1', '0158', 'PC', 'Intel core I3/Ram 8gb/ hd 250GB/LCD 19.5 Inch/OS WIN 7 Pro', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('14544851255ed99001dc499', '04', '6', '0036', 'Lcd Projektor', 'View Sonic', '', 'New', 0, '2019', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('14576739285ed99001caa9a', '04', '6', '0032', 'Lcd Projektor', 'LB280-XGA', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('1469497915ed9a7afda729', '01', '1', '0130', 'PC', 'Intel core 2 Duo E 4600/DDR RAM 1G/ HD.160G', '', 'New', 0, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('14912166165ed9a7b03d678', '01', '1', '0146', 'PC', 'Intel pentium G230/Hd 160GB/4GB Ram', '', 'New', 1, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('14976134125ed9a7b0f15e4', '01', '1', '0176', 'PC', 'Intel core I5/Ram 8gb/ hd 250GB/LCD 19.5 Inch/OS WIN 7 Pro', '', 'New', 0, '2019', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('15080853695ed9a7af926f7', '01', '1', '0118', 'PC', 'Intel CORE 2 DUO /3.00 Ghz/DDR2 1GB/80GB', '', 'New', 1, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('15161495155ed9a7af2c323', '01', '1', '0102', 'PC', 'Intel core 2 Duo/Ram 4gb/160GB/OS WIN 7 Pro', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('1553425325ed9a7b117a56', '01', '17', '0180', 'SERVER', 'Intel Core I5/DDR3 16GB/1TB', '', 'New', 0, '2017', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('15549783645ed990025638d', '02', '8', '0056', 'D-Link 8 port', 'Des 1008A 10/100', '', 'New', 1, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('15579965305ed9a7ae9827f', '01', '1', '0088', 'PC', 'Intel Dual Pentium CPU G2700/ DDR3 1GB/80GB', '', 'New', 0, '2009', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('15598937605ed99002c0ec1', '02', '8', '0074', 'D-Link 5 port', 'Des 1005A', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('15822495285ed99001d379e', '04', '6', '0034', 'Lcd Projektor', 'X1261N', '', 'New', 0, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('15862391395ed9900290e42', '02', '8', '0066', 'D-Link 16 Port', 'Des 1016 10/100', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('15924046495ed99001e31e8', '04', '6', '0037', 'Lcd PANASONIC', 'LB280-XGA', '', 'Damage', 2, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('16007576055ed9a7b096e77', '01', '1', '0161', 'PC', 'Intel Core 2 duo/DDR3 1GB/80 GB', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('16191558485ed9a7b10a766', '01', '17', '0178', 'SERVER', 'HP ProLiant ML350 G6 Tower Intel Xeon E5520 2.26 GHz 4GB DDR3 2 x 6GB PC3-10600R-9 517430-005/160GB', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('16258239105ed9a7afdf3bc', '01', '1', '0131', 'PC', 'Intel core 2 Duo 4300/DDR RAM 2G/HD.250G', '', 'New', 0, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('1632136865ed9a7af56c25', '01', '1', '0109', 'PC', 'Intel core I3/Ram 4gb/ hd 250GB/ LCD 19.5 Inch/OS WIN 7 Pro', '', 'New', 0, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('16456168895ed9a7aeb1b20', '01', '1', '0090', 'PC', 'Intel pentium G 630/DDR2 2GB/160GB', '', 'New', 1, '2009', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('16630993065ed9a7afe80e3', '01', '1', '0133', 'PC', 'Intel Pentium Dual Core E5700C 3.00/80GB/DDR3', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('16708464265ed99001bd725', '04', '6', '0029', 'Lcd Projektor', 'EB-S-400', '', 'New', 0, '2019', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('16786831225ed99001a111d', '04', '6', '0024', 'Lcd Projektor', 'EB-X-300', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('16801982995ed9900225ca7', '02', '8', '0048', 'D-Link 16 Port', 'Des 1016 D ', '', 'New', 2, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('16866763845ed9a7b06dd38', '01', '1', '0154', 'PC', 'Intel dual core G 630/ DDR RAM 2G/HD.80G', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('1688506005ed9900123470', '06', '10', '0003', 'Panasonic', '2 PK', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('16986078445ed9a7af50e15', '01', '1', '0108', 'PC', 'Intel core 2 Duo E7500/RAM 2 GB/HD.ST380', '', 'New', 0, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('17141146105ed990020e53d', '02', '8', '0044', 'TP-Link 5 port', 'TLSF 1005 D 10/100', '', 'New', 0, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('1718191165ed990011cfae', '06', '10', '0002', 'Panasonic', '1,5 PK', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('17256948395ed99001d7e18', '04', '6', '0035', 'Lcd Projektor', 'PT-LX26H', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('17324924815ed9a7afce98d', '01', '1', '0128', 'PC', 'Intel Core 2 duo E7500/DDR3 2GB/40GB', '', 'New', 1, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('17451722895ed99002c6cb6', '02', '8', '0075', 'D-Link 16 Port', 'Des 1016 A', '', 'New', 1, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('17454332585ed99002796ee', '02', '8', '0062', 'D-Link 8 port', '10/100', '', 'New', 6, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('17512253025ed99001467fb', '06', '10', '0009', 'Panasonic', '2 PK', '', 'New', 0, '2018', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('17546231555ed9a7b11d857', '01', '17', '0181', 'SERVER', 'Lenovo Thinksystem st550-intel xeon silver 4110 2.10Ghz (32cpu)/DDR4 32GB/HDD 2 X 600GB', '', 'New', 0, '2019', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('17581770895ed9a7af0b6dd', '01', '1', '0101', 'PC', 'Intel core I3/Ram 4gb/160GB/OS WIN 7 Pro', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('17769716145ed9a7b0eb80c', '01', '1', '0175', 'PC', 'Core i3/DDR4 4GB', '', 'New', 1, '2019', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('17818843895ed9a7aebcca1', '01', '1', '0092', 'PC', 'intel Pentium Dual E2200/DDR2 2GB/160GB', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('17949624445ed9a7b110559', '01', '17', '0179', 'SERVER', 'HP ProLiant ML350 G6 Tower Intel Xeon E5520 2.26 GHz 4GB DDR3 4 x 8GB PC3-10600R-9 517430-005/160GB', '', 'New', 0, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('17952209185ed9a7aee609d', '01', '1', '0099', 'PC', 'Intel core2 duo/RAM 1GB DDR2/150GB', '', 'New', 1, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('18069817995ed99002bb0cc', '02', '8', '0073', 'TP-Link 5 port', 'TLSF 100D', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('18191266435ed9a7b0a2a4a', '01', '1', '0163', 'PC', 'Intel Core 2 duo/DDR3 1GB/40 GB', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('18212664425ed99002afb30', '02', '8', '0071', 'D-Link 24 Port', 'Des 1024 D', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('18231412705ed9a7af4b032', '01', '1', '0107', 'PC', 'Core i3/DDR3 4GB', '', 'New', 1, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('18249677915ed9a7af8c935', '01', '1', '0117', 'PC', 'AMD sempron proccessor 2600/DDR2 1GB/HD/160GB', '', 'New', 1, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('18328024015ed99002a280f', '02', '8', '0069', 'D-Link 16 Port', 'Des 1016 A ', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('18580369485ed9a7b062163', '01', '1', '0152', 'PC', 'Intel core i3 2120 cpu3/30Ghz/DDR3 2GB/Wdc HD 500GB', '', 'New', 1, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('18621133745ed9a7af6f37e', '01', '1', '0112', 'PC', 'Intel Core 2duo/ DDR3 2GB/80/400GB', '', 'New', 1, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('18861109665ed9900209e99', '02', '8', '0043', 'D-Link 24 Port', 'Des 1024 D 10/100', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('18913433835ed9a7b01453b', '01', '1', '0139', 'PC', 'Intel core i3 2120/RAM 2 GB/HD.WD250', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('18936835565ed990022babe', '02', '8', '0049', 'D-Link 24 Port', 'Des 1024 A ', '', 'New', 1, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('1927355395ed9a7b002b87', '01', '1', '0136', 'PC', 'Intel core i3 2120/DDR3 2GB/500GB', '', 'New', 1, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('19343111505ed9900113d61', '06', '10', '0001', 'Panasonic', '1 PK', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('1948483585ed990012f084', '06', '10', '0005', 'Panasonic', '2 PK', '', 'New', 0, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('19544833375ed9900273901', '02', '8', '0061', 'E-LINK 8 port', 'ES-108 10/100', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('19607768395ed99001acca4', '04', '6', '0026', 'Lcd Projektor', 'EB-X-300', '', 'New', 1, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('19722636335ed9a7b025ee0', '01', '1', '0142', 'PC', 'Intel core i3 2120/DDR RAM 2G/HD.250G/VGA 512G', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('19896678815ed9a7b04345c', '01', '1', '0147', 'PC', 'Intel Core I3 /DDR3 2GB/360GB', '', 'New', 1, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('20073983575ed990021a0d7', '02', '8', '0046', 'D-Link 16 Port', 'Des 1016 D ', '', 'New', 0, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('20080279485ed990027f49c', '02', '8', '0063', 'D-Link 24 Port', 'DES-1024 D 10/100', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('2013332945ed9a7b0b5b51', '01', '1', '0166', 'PC', 'Intel Core Tm i3 4150/ DDR3 4GB/HD.160/500GB', '', 'New', 1, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('20133794805ed9a7b129411', '02', '7', '0183', 'MIKROTIK', 'CCR 1016 12 PORT', '', 'New', 0, '2019', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('20337688475ed990017ddb4', '06', '10', '0018', 'Toshiba', '1,5 PK', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('20408150765ed9a7aeeff69', '01', '1', '0100', 'PC', 'ntel Core 2duo E4600/DDR2 2GB/160GB', '', 'New', 1, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('2053479215ed9a7b00e72d', '01', '1', '0138', 'PC', 'Intel pentium dual E2200/DDR3 1GB/80GB', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('20794486535ed9a7b0c2e9f', '01', '1', '0168', 'PC', 'Intel Core TM i3 4150/DDR3 2GB/300', '', 'New', 0, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('21072748745ed9a7b0e5a5e', '01', '1', '0174', 'PC', 'intel corei3 /DDR3 4GB', '', 'New', 0, '2019', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('21310184945ed9900163755', '06', '10', '0014', 'LG', '2 PK', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('21447841105ed9a7af39679', '01', '1', '0104', 'PC', 'Intel Core 2 duo/DDR 3 2GB/360GB', '', 'New', 1, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('2378233825ed9a7aec2a6e', '01', '1', '0093', 'PC', 'Intel pentium dual CPU E2700/DDR2 2GB/HD 250 GB', '', 'New', 1, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('2465632625ed99001e8041', '04', '6', '0038', 'Lcd PANASONIC', 'PT-LB1', '', 'Damage', 1, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('2633927085ed9a7b0200ff', '01', '1', '0141', 'PC', 'Intel core i3 2120/DDR 3 RAM 2G/HD.WDC 250G/VGA 1G', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('2680209115ed9900129286', '06', '10', '0004', 'Panasonic', '1,5 PK', '', 'New', 0, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('2932830735ed9a7af9a44d', '01', '1', '0119', 'PC', 'Intel core2 duo/ DDR2 2GB/80GB', '', 'New', 3, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('2973490325ed9a7b049250', '01', '1', '0148', 'PC', 'Intel Core i3/ DDR3 4GB/250GB', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('310576795ed99002b52cf', '02', '8', '0072', 'D-Link 16 Port', 'Des 1016 D ', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('3139836295ed9a7aece7e0', '01', '1', '0095', 'PC', 'Intel Core i3 2120/DDR3 4GB/500GB', '', 'New', 1, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('3312431675ed9a7aeb6e8e', '01', '1', '0091', 'PC', 'Intel Core 2 duo/DDR3 2GB/160GB', '', 'New', 1, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('3320343305ed9900267d40', '02', '8', '0059', 'D-Link 5 port', 'Des 1005 A', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('3457389265ed9900201192', '08', '15', '0041', 'Speaker', 'Logitech R-5', '', 'New', 22, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('3614838705ed9a7b134ff1', '04', '18', '0185', 'UPS', 'SOCOMEC ITY E TWO30B-U; POWER 3000VA 2400Watt', '', 'New', 0, '2017', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('3650404115ed9a7b07f6cd', '01', '1', '0157', 'PC', 'Intel dual core G 630/DDR RAM 2G/HD 80', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('3671330555ed9a7b12f1f1', '04', '18', '0184', 'UPS', 'APC SMART UPS C1000 220-240V; 50-60Hz; power 1000VA 600Watt', '', 'New', 0, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('3736379345ed9900296c57', '02', '8', '0067', 'TP-Link 8 Port', 'TL SF 1008D 10/100', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('3752006445ed99001b2ad8', '04', '6', '0027', 'Lcd Projektor', 'EB-S-200', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('3777802055ed99001750ef', '06', '10', '0017', 'LG', '1,5 PK', '', 'New', 0, '2018', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('392652085ed9a7ae7f313', '01', '1', '0085', 'PC', 'Intel Core 2 duo E4600/DDR2 2GB/80GB/DVD', '', 'New', 1, '2009', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('4066812165ed9a7b0c8cb5', '01', '1', '0169', 'PC', 'Intel Core i3/ DDR3 4GB/1TB', '', 'New', 0, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('4529133335ed9a7b09cc60', '01', '1', '0162', 'PC', 'Intel Pentium//DDR3 1GB/160 GB', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('4547357535ed990021ff14', '02', '8', '0047', 'D-Link 24 Port', 'Des 1024 D ', '', 'New', 1, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('4880985515ed99002a85ce', '02', '8', '0070', 'D-Link 8 port', 'Des 108 A', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('4914650425ed990025054f', '02', '8', '0055', 'TP-Link 8 port', 'TLSF 1008D 10/100', '', 'New', 0, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('4946308975ed99002de439', '02', '8', '0079', 'TP-Link 16 Port', 'TLSF 1016 D 10/100', '', 'New', 0, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('4992125215ed9a7afc8b78', '01', '1', '0127', 'PC', 'Intel Core i3/ DDR3 4GB/500GB', '', 'New', 0, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5012508625ed990023766d', '02', '8', '0051', 'D-Link 16 Port', 'Des 1016 D ', '', 'New', 0, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('50444485ed9a7aec8a1c', '01', '1', '0094', 'PC', 'Intel Pentium Dual CPU E2200/DDR3 1GB/HD.80GB', '', 'New', 1, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5077174505ed9a7af4524f', '01', '1', '0106', 'PC', 'Intel Core i3/DDR3 2GB/160GB', '', 'New', 1, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5118640465ed9a7afb13ec', '01', '1', '0123', 'PC', 'Intel core2 duo/RAM 3GB DDR2/350GB', '', 'New', 0, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('524243945ed99002d86a8', '02', '8', '0078', 'D-Link 5 port', 'Des 1005 C', '', 'New', 1, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5296902995ed9a7aff0fde', '01', '1', '0135', 'PC', 'Intel Pentium Dual CPU/DDR3 2GB/80GB', '', 'New', 1, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5323898365ed9a7afe3a67', '01', '1', '0132', 'PC', 'Intel Core 2 duo E4600/DDR2 2GB/HD.80GB', '', 'New', 1, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5462468185ed9a7af80d3c', '01', '1', '0115', 'PC', 'Intel core 2 Duo-E7500/DDR RAM 1G/ HD 80G', '', 'New', 0, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5503540205ed990026dae3', '02', '8', '0060', 'TP-Link 5 port', 'TLSF 100D', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5594089355ed9a7afec78e', '01', '1', '0134', 'PC', 'Intel Core i3 3240/DDR3 4GB/500GB', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('580447865ed9a7af5c9ea', '01', '1', '0110', 'PC', 'Intel Core i3 2120/DDR3 4GB/HD.1TB', '', 'New', 0, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6198648895ed9a7b03788e', '01', '1', '0145', 'PC', 'Intel Core i3 4130/DDR3 4GB/500GB', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6245262415ed9a7afab624', '01', '1', '0122', 'PC', 'Intel Core i3/ DDR3 4GB/250GB(2)', '', 'New', 0, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6251201395ed990029ca55', '02', '8', '0068', 'D-Link 24 Port', 'Des 1024 A ', '', 'New', 2, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6295706895ed9a7afbcfa1', '01', '1', '0125', 'PC', 'Intel Core i3/ DDR3 4GB/750GB(2)', '', 'New', 0, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6683520705ed990013ac22', '06', '10', '0007', 'Panasonic', '2 PK', '', 'New', 0, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6700739245ed9a7b0da61b', '01', '1', '0172', 'PC', 'Intel Core (Tm) i3-2100/DDR3 2GB/', '', 'New', 1, '2017', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6771198815ed9a7af3f444', '01', '1', '0105', 'PC', 'Intel Core TM 2 duo /DDR3 2GB', '', 'New', 0, '2011', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6899646635ed9900157b92', '06', '10', '0012', 'LG', '1 PK', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('7124471885ed990019b2f0', '04', '6', '0023', 'Lcd Projektor', 'EB-X-200', '', 'New', 0, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('7141646535ed9a7ae70927', '01', '1', '0083', 'PC', 'Intel Pentium Dual E2200/DDR3 2GB/250/160GB', '', 'New', 0, '2008', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('7599935485ed9a7b067f48', '01', '1', '0153', 'PC', 'Intel core i3/3240/3.40Ghz/DDR3 4GB/HD.Wdc 1TB', '', 'New', 1, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('7837254715ed9900183beb', '06', '10', '0019', 'Toshiba', '1,5 PK', '', 'New', 0, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('7950849045ed9a7af7af45', '01', '1', '0114', 'PC', 'Intel core 2 Duo-E7500/DDR RAM 2G/HD.250G/VGA 512G', '', 'New', 0, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('8074591405ed99001409ff', '06', '10', '0008', 'Panasonic', '2 PK', '', 'New', 0, '2017', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('809202505ed9a7af695c0', '01', '1', '0111', 'PC', 'Intel Core 2 duo E7500/DDR3 2GB/', '', 'New', 1, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('8204911255ed9a7b13add6', '', '', '0186', '', '', '', 'New', 0, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('8222911345ed9a7b12362b', '01', '17', '0182', 'SERVER', 'Intel Core I5/DDR3 16GB/1TB', '', 'New', 0, '2017', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('8258476755ed9a7afc2d8f', '01', '1', '0126', 'PC', 'Intel Core i3/ DDR3 2GB/500GB', '', 'New', 0, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('8316170915ed9a7ae7952f', '01', '1', '0084', 'PC', 'Intel Pentium Dual/DDR3 2GB/230GB', '', 'New', 1, '2009', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('8435049825ed9a7af75177', '01', '1', '0113', 'PC', 'Intel Core 2duo E7500/DDR3 2GB/80/80', '', 'New', 1, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('8518183375ed9a7b0507a6', '01', '1', '0149', 'PC', 'Intel Pentium CPU G3260/ DDR3 4GB', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('8666656865ed9900261f3e', '02', '8', '0058', 'TP-Link 5 port', 'TLSF 1008 D', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('8774633055ed9a7af9fa21', '01', '1', '0120', 'PC', 'Core 2 duo/DDR3 2GB/60GB', '', 'New', 1, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('8777485225ed9a7b0e0426', '01', '1', '0173', 'PC', 'Intel core I5/Ram 8gb/ hd 250GB/LCD 19.5 Inch/OS WIN 10/Intel HD VGA', '', 'New', 0, '2018', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('8827701915ed9a7af86b13', '01', '1', '0116', 'PC', 'Intel pentium G 2030/3.00 Ghz/DDR2 2GB/80GB', '', 'New', 1, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('8881047915ed990016f336', '06', '10', '0016', 'LG', '2 PK', '', 'New', 0, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('9216963955ed9a7afd4775', '01', '1', '0129', 'PC', 'Intel core 2 Duo E 7500/DDR RAM 2G/HD 80G', '', 'New', 0, '2013', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('9245396145ed99001b889f', '04', '6', '0028', 'Lcd Projektor', 'EB-S-300', '', 'New', 0, '2016', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('9449697985ed9a7b02bcec', '01', '1', '0143', 'PC', 'Intel core i3-2120/DDR RAM 2G/HD.WDC 250G/VGA 512MB', '', 'New', 0, '2014', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('9545952935ed9a7b073b18', '01', '1', '0155', 'PC', 'Intel dual core E2180/DDR RAM 2G/HD.80G', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('958487205ed9a7aee00f3', '01', '1', '0098', 'PC', 'Intel Pentium G630 2.70 Ghz/DDR3/2GB/250GB', '', 'New', 0, '2010', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('9602655685ed990023d483', '02', '8', '0052', 'D-Link 5 port', 'Des 1005 D 10/100', '', 'New', 0, '2012', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('9618385515ed9a7ae90528', '01', '1', '0087', 'PC', 'Intel Pentium 4/DDR2 1GB/160GB', '', 'New', 1, '2009', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('9619162465ed99002cca4d', '02', '8', '0076', 'D-Link 24 Port', 'Des 1024 A ', '', 'New', 0, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('9685362115ed990018998c', '06', '10', '0020', 'Akari', '1,5 PK', '', 'New', 0, '2019', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('9745730715ed9a7b08b2b9', '01', '1', '0159', 'PC', 'Intel pentium G 2030/DDR3 2GB/160GB', '', 'New', 1, '2015', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('991756645ed990014bfba', '06', '10', '0010', 'Panasonic', '1,5 PK', '', 'New', 0, '2019', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('9958817605ed99002efdee', '02', '8', '0082', 'D-Link 24 Port', '10/1000', '', 'New', 0, '2018', 'Unit', 'UAP', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stlocation`
--

CREATE TABLE IF NOT EXISTS `stlocation` (
  `stdev_id` int(11) NOT NULL AUTO_INCREMENT,
  `stdev_location_code` varchar(255) NOT NULL,
  `stdev_location_name` varchar(128) NOT NULL,
  `stdev_location_floor` varchar(11) NOT NULL,
  `thumbnails` varchar(100) NOT NULL,
  PRIMARY KEY (`stdev_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `stlocation`
--

INSERT INTO `stlocation` (`stdev_id`, `stdev_location_code`, `stdev_location_name`, `stdev_location_floor`, `thumbnails`) VALUES
(1, '', 'Rektor', 'I', 'images/thumbnails.jpg'),
(2, '', 'Sekretaris Rektor', 'I', 'images/thumbnails.jpg'),
(3, '', 'Wakil Rektor', 'I', 'images/thumbnails.jpg'),
(4, '', 'Front Office', 'I', 'images/thumbnails.jpg'),
(5, '', 'Server', 'I', 'images/thumbnails.jpg'),
(6, '', 'Humas', 'I', 'images/thumbnails.jpg'),
(7, '', 'FBIS', 'I', 'images/thumbnails.jpg'),
(8, '', 'Kerumahtanggaan/LPPM', 'I', 'images/thumbnails.jpg'),
(9, '', 'Lobby', 'I', 'images/thumbnails.jpg'),
(10, '', 'Dosen SI', 'I', 'images/thumbnails.jpg'),
(11, '', 'LP3M', 'I', 'images/thumbnails.jpg'),
(12, '', 'Prodi Tek. Informasi', 'I', 'images/thumbnails.jpg'),
(13, '', 'BAA/Pengajaran', 'I', 'images/thumbnails.jpg'),
(14, '', 'BAU', 'I', 'images/thumbnails.jpg'),
(15, '', 'Aula', 'I', 'images/thumbnails.jpg'),
(16, '', 'Eksekutif', 'I', 'images/thumbnails.jpg'),
(17, '', 'Bioskop', 'II', 'images/thumbnails.jpg'),
(18, '', 'Siaran Radio', 'II', 'images/thumbnails.jpg'),
(19, '', 'Produksi Radio', 'II', 'images/thumbnails.jpg'),
(20, '', 'Kelas 2.1', 'II', 'images/thumbnails.jpg'),
(21, '', 'Kelas 2.2', 'II', 'images/thumbnails.jpg'),
(22, '', 'Kelas 2.3', 'II', 'images/thumbnails.jpg'),
(23, '', 'Kelas 2.4', 'II', 'images/thumbnails.jpg'),
(24, '', 'Dosen IF', 'II', 'images/thumbnails.jpg'),
(25, '', 'Ujian 1', '', 'images/thumbnails.jpg'),
(26, '', 'Ujian 2', '', 'images/thumbnails.jpg'),
(27, '', 'Rapat', 'II', 'images/thumbnails.jpg'),
(28, '', 'Perpustakaan', 'III', 'images/thumbnails.jpg'),
(29, '', 'UPT. Bahasa', 'II', 'images/thumbnails.jpg'),
(30, '', 'Laboratorium Animasi', 'III', 'images/thumbnails.jpg'),
(31, '', 'Kelas 3.1', 'III', 'images/thumbnails.jpg'),
(32, '', 'Kelas 3.2', 'III', 'images/thumbnails.jpg'),
(33, '', 'Kelas 3.3', 'III', 'images/thumbnails.jpg'),
(34, '', 'Kelas 3.4', 'III', 'images/thumbnails.jpg'),
(35, '', 'Kelas 3.5', 'III', 'images/thumbnails.jpg'),
(36, '', 'Kelas 3.6', 'III', 'images/thumbnails.jpg'),
(37, '', 'Kelas 3.7', 'III', 'images/thumbnails.jpg'),
(38, '', 'Kelas 3.8', 'III', 'images/thumbnails.jpg'),
(39, '', 'Kelas 3.9', 'III', 'images/thumbnails.jpg'),
(40, '', 'Ujian 3', '', 'images/thumbnails.jpg'),
(41, '', 'LPU', 'III', 'images/thumbnails.jpg'),
(42, '', 'UPT. PLT', 'IV', 'images/thumbnails.jpg'),
(43, '', 'Pemancar', 'IV', 'images/thumbnails.jpg'),
(44, '', 'Laboratorium 1', 'IV', 'images/thumbnails.jpg'),
(45, '', 'Laboratorium 2', 'IV', 'images/thumbnails.jpg'),
(46, '', 'Laboratorium 3', 'IV', 'images/thumbnails.jpg'),
(47, '', 'Laboratorium 4', 'IV', 'images/thumbnails.jpg'),
(48, '', 'Laboratorium 5', 'IV', 'images/thumbnails.jpg'),
(49, '', 'Laboratorium 6', 'IV', 'images/thumbnails.jpg'),
(50, '', 'Laboratorium 7', 'IV', 'images/thumbnails.jpg'),
(51, '', 'Kelas 4.1', 'IV', 'images/thumbnails.jpg'),
(52, '', 'Kelas 4.2', 'IV', 'images/thumbnails.jpg'),
(53, '', 'Kelas 4.3', 'IV', 'images/thumbnails.jpg'),
(54, '', 'Kelas 4.4', 'IV', 'images/thumbnails.jpg'),
(55, '', 'LPM', 'I', 'images/thumbnails.jpg'),
(56, '', 'Gudang UPT.PLT', 'IV', 'images/thumbnails.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(128) NOT NULL,
  `admin_id` int(128) NOT NULL,
  `client_id` int(128) NOT NULL,
  PRIMARY KEY (`user_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `admin_id`, `client_id`) VALUES
(1, 'admin', '2020-06-05 06:23:19', '2020-06-05', 5, 0),
(2, 'admin', '2020-06-05 11:04:49', '2020-06-05', 5, 0),
(3, 'admin', '2020-06-05 13:21:07', '', 5, 0);
