-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2016 pada 02.23
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `thesis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
  `activity_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(128) NOT NULL,
  PRIMARY KEY (`activity_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=384 ;

--
-- Dumping data untuk tabel `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(281, 'admin', '2016-11-09 08:22:14', 'Add device Type Komputer'),
(282, 'admin', '2016-11-09 08:27:20', 'Add device Detail id 10&nbspName&nbspKomputer'),
(283, 'admin', '2016-11-09 08:37:05', 'Add device Type Monitor'),
(284, 'admin', '2016-11-09 08:37:27', 'Edit Device Type Meja'),
(285, 'admin', '2016-11-09 08:38:43', 'Add device Detail id 11&nbspName&nbspMeja'),
(286, 'admin', '2016-11-09 15:29:07', 'Add device Detail id 10&nbspName&nbspKomputer'),
(287, 'admin', '2016-11-10 05:04:01', 'Edit device info Komputer'),
(288, 'admin', '2016-11-10 05:05:04', 'Edit device info Komputer'),
(289, 'admin', '2016-11-10 06:07:48', 'Add device Type jhhhjj'),
(292, 'admin', '2016-11-10 06:28:57', 'Add device Type kl'),
(293, 'admin', '2016-11-10 08:07:36', 'Edit Device Type kwkwkw'),
(294, 'admin', '2016-11-10 08:08:44', 'Edit Device Type kkska'),
(295, 'admin', '2016-11-10 08:08:59', 'Edit Device Type klo'),
(296, 'admin', '2016-11-10 08:31:39', 'Add device Type wowo'),
(297, 'admin', '2016-11-10 08:31:55', 'Add device Type wow'),
(298, 'admin', '2016-11-11 04:35:01', 'Edit Client User liam'),
(299, 'admin', '2016-11-11 04:52:13', 'Add Client User wkwkl'),
(300, 'admin', '2016-11-11 05:15:00', 'Add Client User liam'),
(301, 'admin', '2016-11-11 09:22:25', 'Add location Office'),
(302, 'admin', '2016-11-11 11:06:56', 'Add location Mesjid'),
(303, 'admin', '2016-11-11 12:34:01', 'Add location wkwkwk'),
(304, 'admin', '2016-11-11 12:34:12', 'Add location wlwlw'),
(305, 'admin', '2016-11-11 12:52:53', 'Edit location Masjid'),
(306, 'admin', '2016-11-11 13:05:40', 'Add Client User wkwklw'),
(307, 'admin', '2016-11-11 13:41:27', 'Edit Client User Reynaldo1'),
(308, 'admin', '2016-11-11 14:01:32', 'Add System User hi'),
(309, 'admin', '2016-11-11 14:13:14', 'Edit system User hi'),
(310, 'admin', '2016-11-12 09:13:23', 'Add device Detail id 10&nbspName&nbspKomputer'),
(311, 'admin', '2016-11-12 09:14:27', 'Assign Device id 126&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(312, 'admin', '2016-11-12 09:14:29', 'Assign Device id 126&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(313, 'admin', '2016-11-12 09:35:36', 'Assign Device id 125&nbspName&nbspMeja to location id 24&nbspName&nbspPCID'),
(314, 'admin', '2016-11-12 09:54:22', 'Assign Device id 124&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(315, 'admin', '2016-11-12 10:58:01', 'Assign Device id 123&nbspName&nbspMeja to location id 27&nbspName&nbspAdmin Office'),
(316, 'admin', '2016-11-12 11:03:35', 'Assign Device id 122&nbspName&nbspKomputer to location id 26&nbspName&nbspOSAS'),
(317, 'admin', '2016-11-12 11:18:15', 'Assign Device id 123&nbspName&nbspMeja to location id 30&nbspName&nbspMj Dorm'),
(318, 'admin', '2016-11-12 11:24:26', 'Assign Device id 122&nbspName&nbspKomputer to location id 24&nbspName&nbspPCID'),
(319, 'admin', '2016-11-12 11:33:51', 'Assign Device id 122&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(320, 'admin', '2016-11-12 11:39:06', 'Assign Device id 122&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(321, 'admin', '2016-11-12 11:41:03', 'Assign Device id 122&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(322, 'admin', '2016-11-12 11:42:33', 'Assign Device id 126&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(323, 'admin', '2016-11-12 11:47:49', 'Assign Device id 125&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(324, 'admin', '2016-11-12 12:22:21', 'Assign Device id 124&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(325, 'admin', '2016-11-12 12:27:21', 'Assign Device id 123&nbspName&nbspMeja to location id 24&nbspName&nbspPCID'),
(326, 'admin', '2016-11-12 12:36:57', 'Add device Detail id 11&nbspName&nbspMeja'),
(327, 'admin', '2016-11-12 12:37:15', 'Assign Device id 124&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(328, 'admin', '2016-11-12 12:39:52', 'Add device Detail id 10&nbspName&nbspKomputer'),
(329, 'admin', '2016-11-12 12:40:11', 'Assign Device id 128&nbspName&nbspKomputer to location id 38&nbspName&nbspMasjid'),
(330, 'admin', '2016-11-12 12:42:23', 'Add device Detail id 11&nbspName&nbspMeja'),
(331, 'admin', '2016-11-12 12:42:57', 'Add device Detail id 11&nbspName&nbspMeja'),
(332, 'admin', '2016-11-12 13:02:47', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(333, 'admin', '2016-11-12 13:10:43', 'Assign Device id 129&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(334, 'admin', '2016-11-12 13:13:48', 'Assign Device id 127&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(335, 'admin', '2016-11-12 13:19:51', 'Assign Device id 129&nbspName&nbspMeja to location id 26&nbspName&nbspOSAS'),
(336, 'admin', '2016-11-12 13:24:14', 'Assign Device id 129&nbspName&nbspMeja to location id 26&nbspName&nbspOSAS'),
(337, 'admin', '2016-11-12 14:05:46', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(338, 'admin', '2016-11-12 14:08:06', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(339, 'admin', '2016-11-12 14:37:10', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(340, 'admin', '2016-11-12 14:38:56', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(341, 'admin', '2016-11-12 14:50:50', 'Assign Device id 127&nbspName&nbspMeja to location id 26&nbspName&nbspOSAS'),
(342, 'admin', '2016-11-12 14:55:55', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(343, 'admin', '2016-11-12 15:02:32', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(344, 'admin', '2016-11-12 15:05:31', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(345, 'admin', '2016-11-12 15:11:12', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(346, 'admin', '2016-11-12 15:14:22', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(347, 'admin', '2016-11-12 15:16:32', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(348, 'admin', '2016-11-12 15:18:45', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(349, 'admin', '2016-11-12 15:20:52', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(350, 'admin', '2016-11-12 15:27:07', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(351, 'admin', '2016-11-12 15:30:43', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(352, 'admin', '2016-11-12 15:51:42', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(353, 'admin', '2016-11-12 15:54:01', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(354, 'admin', '2016-11-12 15:56:11', 'Assign Device id 130&nbspName&nbspMeja to location id 28&nbspName&nbspHigh school'),
(355, 'admin', '2016-11-12 16:01:53', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(356, 'admin', '2016-11-12 16:03:02', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(357, 'admin', '2016-11-12 16:04:22', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(358, 'admin', '2016-11-12 19:37:45', 'Assign Device id 130&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(359, 'admin', '2016-11-12 22:29:29', 'Add device Detail id 10&nbspName&nbspKomputer'),
(360, 'admin', '2016-11-12 22:29:55', 'Assign Device id 131&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(361, 'admin', '2016-11-13 12:44:30', 'Assign Device id 131&nbspName&nbspKomputer to location id 27&nbspName&nbspAdmin Office'),
(362, 'admin', '2016-11-13 12:44:58', 'Assign Device id 131&nbspName&nbspKomputer to location id 22&nbspName&nbspComlab A'),
(363, 'admin', '2016-11-13 14:16:29', 'Add device Detail id 10&nbspName&nbspKomputer'),
(364, 'admin', '2016-11-13 15:09:37', 'Assign Device id 132&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(365, 'admin', '2016-11-13 15:10:09', 'Assign Device id 132&nbspName&nbspKomputer to location id 24&nbspName&nbspPCID'),
(366, 'admin', '2016-11-13 15:14:46', 'Assign Device id 132&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(367, 'admin', '2016-11-13 15:15:42', 'Assign Device id 132&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(368, 'admin', '2016-11-13 15:35:17', 'Assign Device id 132&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(369, 'admin', '2016-11-13 15:45:41', 'Assign Device id 132&nbspName&nbspKomputer to location id 24&nbspName&nbspPCID'),
(370, 'admin', '2016-11-14 17:38:15', 'Update Status Komputer to Used '),
(371, 'admin', '2016-11-14 17:39:40', 'Update Status Komputer to Used '),
(372, 'admin', '2016-11-14 17:40:24', 'Update Status Komputer to Used '),
(373, 'admin', '2016-11-14 17:40:52', 'transfer Device  Komputer to location id 35&nbspName&nbspAVH'),
(374, 'admin', '2016-11-14 18:01:30', 'transfer Device  Komputer to location id 27&nbspName&nbspAdmin Office'),
(375, 'admin', '2016-11-14 18:02:03', 'transfer Device  Komputer to location id 29&nbspName&nbspElementary'),
(376, 'admin', '2016-11-14 18:03:12', 'Update Status Komputer to Damage '),
(377, 'admin', '2016-11-14 18:06:59', 'Assign Device id 127&nbspName&nbspMeja to location id 23&nbspName&nbspComlab B'),
(378, 'admin', '2016-11-14 18:09:47', 'Add device Detail id 10&nbspName&nbspKomputer'),
(379, 'admin', '2016-11-14 18:10:14', 'Assign Device id 133&nbspName&nbspKomputer to location id 23&nbspName&nbspComlab B'),
(380, 'admin', '2016-11-14 18:20:00', 'transfer Device  Komputer to location id 34&nbspName&nbspsouthland clinic'),
(381, 'admin', '2016-11-14 18:20:15', 'Update Status Komputer to Used '),
(382, 'admin', '2016-11-14 18:20:25', 'Update Status Komputer to Damage '),
(383, 'admin', '2016-11-14 08:27:36', 'Assign Device id 127&nbspName&nbspMeja to location id 24&nbspName&nbspPCID');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(128) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `adminthumbnails` varchar(300) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `adminthumbnails`) VALUES
(4, 'Jonald', 'Sevellejo', 'jonremus', 'me', 'uploads/442048-samsung-galaxy-s5-vs-galaxy-note-3-specs-and-price-comparison-in-austr.jpg'),
(5, 'Hector Neil', 'Cornea', 'admin', 'admin', 'uploads/Penguins.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
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
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`client_id`, `username`, `password`, `firstname`, `lastname`, `thumbnails`) VALUES
(10, 'oting', 'oting', 'Reynaldo1', 'Tianzon', 'uploads/Tulips.jpg'),
(11, 'kiritosan23', 'kirito', 'Joecel', 'Ongsip', 'uploads/10933713_756692371081917_31846816310386324_n.jpg'),
(12, 'asylum1121', 'kevineleven11', 'liam', 'Camparecio', 'images/NO-IMAGE-AVAILABLE.jpg'),
(14, 'admin', 'admin', 'liam', 'gallagher', 'images/NO-IMAGE-AVAILABLE.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`content_id`, `title`, `content`) VALUES
(1, 'Mission', '<pre>\n<span style="font-size:16px"><strong>Mission</strong></span></pre>\n\n<p style="text-align:left"><span style="font-family:arial,helvetica,sans-serif; font-size:medium"><span style="font-size:large">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span>&nbsp; &nbsp;<span style="font-size:18px"> &nbsp; &nbsp; &nbsp;Respecting the human dignity and unique talents of each person, Southland College is dedicated in helping its students actualizetheir potentials for the enchancementof their own lives and or nationals Development.&nbsp;</span></p>\n\n<p style="text-align:left">&nbsp;</p>\n'),
(2, 'Vision', '<pre><span style="font-size: large;"><strong>Vision</strong></span></pre>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: large;">&nbsp; A progressive educational community where the individual is at the core of his own learning </span><br /><br /></p>'),
(3, 'History', '<pre><span style="font-size: large;">HISTORY &nbsp;</span> </pre>\n<p style="text-align: justify;"><span style="font-family:arial,helvetica,sans-serif; font-size:medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The southland college story is the intermingling of imposibilities and unbelief, against optimism and faith.the story of this new school is a beatifull retelling of god''s goodness; his hands helping shape the foundation of southland college.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amid Challeges, stumbling blocks, and interfering forces, southland college was established-a shining testamentof God''s wondrous ways and his helping hand for those who trust in Him.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deeply saddened by the anticipated mass resignation of the faculty and staff with the change of leadership of a private school where he was the former president, DR. Anecito D. Villaluz, Jr. Decided to put up his own school where he could freely make use of his publicity acknowledged and admired managerial skills and organizational expertise.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the preparations for the new school started in March 2009. The incorporators who compose the Board of directors are Dr.Villaluz, Chairman; Mrs. Annette Z. Villaluz, vice-chairman; Dr. Emiliano L. Sama,Jr.,corporate secretary; Mrs.Yvonne Z. Rocha, Treasurer; and Dr.Rhoda J. Amor,Dr. Grace A. Badrina, Dr. Henly S. Pahilagao, and Mr. Miguel M. Zayco, directors.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The securities and Exchange Commision (DepEd) issurd the school registration permiton March 24,2009.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The department of Education (DepEd) Western Visayas Regional office issued the permit for the basic education on June 1. 2009. The school established the consortium with the Northern Negros state College of Science and Technology (NONESCOST) for the Nursing Degree program, and with the Negros Oriental State Accounting Technology, BS Business Administrators, BS Hospiitality Management, and the 2-year Midwifery course. The administrators, faculty and staff, parents and strengthen the new school. Each of them undertook the assigned task without expecting any personal reward. it was evidend that God is shaping the southland destiny throught the hearts, hands and minds of these people.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Regional Quality Assesment Team (RQUAT) and Commission on Higher Education (CHEd) Supersvisors readily issuad permits for all degree programs After validating the requirements and inspecting the facilities.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The school was formerly launched on May 13, 2009. It was followed by the a grand caravan. The following days saw the advertisements and promotion blitz in variious towns and cities.<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By the end of the enrolment period, God gave soutland collegeits needed initial number of students. Enrolled during the school year 2009-2010 were: pre school, 69; elementary, 130; and High school, 122. During the first semester of the same school year, college enrolment reached 177. it was an impressive number for a new school which opened within a few months time after its inception.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A thanksgiving service with the theme "Triumph Amid Trials" was held on August 28, 2009 morning. It was immediatly followed by the school''s very first academic convocation. The officers of student councils, faculty and staff club, and the parents and teachers assembleis were inducted in the afternoon. aquaintance parties in all levels followed.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amid the trials, Southland College is seen to Survive and Prevail for its story in a tapestry of good relationships, great resposibilities, and God''s redemption<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indeed, at Southland College the foundation of God stand''s sure!\n</p>'),
(4, 'Footer', '<p style="text-align:center">Technology Resource Inventory System (T.R.S) Copyright 2015</p>\n\n<p style="text-align:center">All Rights Reserved &reg;2015</p>\n'),
(5, 'Title', '<p><span style="font-family:trebuchet ms,geneva">Technology Resource Inventory System</span></p>\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `device_name`
--

CREATE TABLE IF NOT EXISTS `device_name` (
  `dev_id` int(11) NOT NULL AUTO_INCREMENT,
  `dev_name` varchar(100) NOT NULL,
  PRIMARY KEY (`dev_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `device_name`
--

INSERT INTO `device_name` (`dev_id`, `dev_name`) VALUES
(10, 'Komputer'),
(11, 'Meja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `location_details`
--

CREATE TABLE IF NOT EXISTS `location_details` (
  `ld_id` int(11) NOT NULL AUTO_INCREMENT,
  `stdev_id` int(11) NOT NULL,
  `date_deployment` date NOT NULL,
  `id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`ld_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `location_details`
--

INSERT INTO `location_details` (`ld_id`, `stdev_id`, `date_deployment`, `id`, `jumlah`) VALUES
(1, 24, '2016-11-14', 127, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(128) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `date_of_notification` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `notification`
--

INSERT INTO `notification` (`notification_id`, `fullname`, `notification`, `date_of_notification`, `link`) VALUES
(1, 'Reynaldo1 Tianzon', 'Add device id 11&nbspName&nbspMeja, Serial Number: 18981', '2016-11-12 01:03:48', 'device_stocks.php'),
(2, 'Reynaldo1 Tianzon', 'Edit device Meja, Serial Number: 18981', '2016-11-12 01:09:05', 'device_stocks.php'),
(3, 'Reynaldo1 Tianzon', 'Edit device Meja, Serial Number: 18981', '2016-11-12 01:09:24', 'device_stocks.php'),
(4, 'Reynaldo1 Tianzon', 'Edit device Meja, Serial Number: 18981', '2016-11-12 01:12:00', 'device_stocks.php'),
(5, 'Reynaldo1 Tianzon', 'Edit device Meja, Serial Number: 18981', '2016-11-12 01:13:18', 'device_stocks.php');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notification_read`
--

CREATE TABLE IF NOT EXISTS `notification_read` (
  `notification_read_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `admin_read` varchar(50) NOT NULL,
  `notification_id` int(11) NOT NULL,
  PRIMARY KEY (`notification_read_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `notification_read`
--

INSERT INTO `notification_read` (`notification_read_id`, `admin_id`, `admin_read`, `notification_id`) VALUES
(1, 5, 'yes', 5),
(2, 5, 'yes', 4),
(3, 5, 'yes', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stdevice`
--

CREATE TABLE IF NOT EXISTS `stdevice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dev_id` int(11) NOT NULL,
  `dev_desc` varchar(128) NOT NULL,
  `dev_serial` varchar(128) NOT NULL,
  `dev_brand` varchar(128) NOT NULL,
  `dev_model` varchar(128) NOT NULL,
  `dev_status` varchar(128) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=134 ;

--
-- Dumping data untuk tabel `stdevice`
--

INSERT INTO `stdevice` (`id`, `dev_id`, `dev_desc`, `dev_serial`, `dev_brand`, `dev_model`, `dev_status`, `jumlah`) VALUES
(127, 11, '<p>ammaa</p>\r\n', '17871', 'jJ', 'msns', 'New', 48),
(132, 10, '<p>bagus banget</p>\r\n', '1099819', 'Accer', 'Slim', 'Damage', 84),
(133, 10, '<p>QLKQ</p>\r\n', '19090', 'ASUS', 'Bulat', 'Damage', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stlocation`
--

CREATE TABLE IF NOT EXISTS `stlocation` (
  `stdev_id` int(11) NOT NULL AUTO_INCREMENT,
  `stdev_location_name` varchar(128) NOT NULL,
  `thumbnails` varchar(100) NOT NULL,
  PRIMARY KEY (`stdev_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data untuk tabel `stlocation`
--

INSERT INTO `stlocation` (`stdev_id`, `stdev_location_name`, `thumbnails`) VALUES
(22, 'Comlab A', 'images/thumbnails.jpg'),
(23, 'Comlab B', 'images/thumbnails.jpg'),
(24, 'PCID', 'images/thumbnails.jpg'),
(25, 'Library', 'images/thumbnails.jpg'),
(26, 'OSAS', 'images/thumbnails.jpg'),
(27, 'Admin Office', 'images/thumbnails.jpg'),
(28, 'High school', 'images/thumbnails.jpg'),
(29, 'Elementary', 'images/thumbnails.jpg'),
(30, 'Mj Dorm', 'images/thumbnails.jpg'),
(31, 'kcafe', 'images/thumbnails.jpg'),
(34, 'southland clinic', 'images/thumbnails.jpg'),
(35, 'AVH', 'images/thumbnails.jpg'),
(36, 'new location', 'images/thumbnails.jpg'),
(37, 'Office', 'images/thumbnails.jpg'),
(38, 'Masjid', 'images/thumbnails.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(128) NOT NULL,
  `admin_id` int(128) NOT NULL,
  `client_id` int(128) NOT NULL,
  PRIMARY KEY (`user_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=270 ;

--
-- Dumping data untuk tabel `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `admin_id`, `client_id`) VALUES
(190, 'admin', '2016-11-09 07:47:25', '2016-11-12', 5, 0),
(191, 'admin', '2016-11-09 09:26:29', '2016-11-12', 5, 0),
(192, 'admin', '2016-11-09 09:26:31', '2016-11-12', 5, 0),
(193, 'admin', '2016-11-09 09:30:02', '2016-11-12', 5, 0),
(194, 'admin', '2016-11-09 09:30:04', '2016-11-12', 5, 0),
(195, 'admin', '2016-11-09 12:59:08', '2016-11-12', 5, 0),
(196, 'admin', '2016-11-09 13:07:17', '2016-11-12', 5, 0),
(197, 'admin', '2016-11-09 14:20:16', '2016-11-12', 5, 0),
(198, 'admin', '2016-11-09 14:20:17', '2016-11-12', 5, 0),
(200, 'admin', '2016-11-09 14:20:17', '2016-11-12', 5, 0),
(201, 'admin', '2016-11-09 14:26:35', '2016-11-12', 5, 0),
(202, 'admin', '2016-11-09 14:26:35', '2016-11-12', 5, 0),
(203, 'admin', '2016-11-09 14:26:35', '2016-11-12', 5, 0),
(204, 'admin', '2016-11-09 14:26:36', '2016-11-12', 5, 0),
(205, 'admin', '2016-11-09 14:26:37', '2016-11-12', 5, 0),
(206, 'admin', '2016-11-09 14:26:37', '2016-11-12', 5, 0),
(207, 'admin', '2016-11-09 14:26:37', '2016-11-12', 5, 0),
(208, 'admin', '2016-11-09 14:29:35', '2016-11-12', 5, 0),
(209, 'admin', '2016-11-09 14:30:52', '2016-11-12', 5, 0),
(210, 'admin', '2016-11-09 14:40:52', '2016-11-12', 5, 0),
(211, 'admin', '2016-11-09 14:42:54', '2016-11-12', 5, 0),
(212, 'admin', '2016-11-09 14:44:12', '2016-11-12', 5, 0),
(213, 'admin', '2016-11-09 14:50:31', '2016-11-12', 5, 0),
(214, 'admin', '2016-11-09 14:51:05', '2016-11-12', 5, 0),
(215, 'admin', '2016-11-09 15:48:37', '2016-11-12', 5, 0),
(216, 'admin', '2016-11-09 17:18:47', '2016-11-12', 5, 0),
(217, 'admin', '2016-11-09 17:26:58', '2016-11-12', 5, 0),
(218, 'admin', '2016-11-09 18:23:06', '2016-11-12', 5, 0),
(219, 'admin', '2016-11-09 21:36:32', '2016-11-12', 5, 0),
(220, 'admin', '2016-11-10 04:27:06', '2016-11-12', 5, 0),
(221, 'admin', '2016-11-10 07:48:23', '2016-11-12', 5, 0),
(222, 'admin', '2016-11-11 04:33:54', '2016-11-12', 5, 0),
(223, 'oting', '2016-11-11 04:40:47', '2016-11-12', 0, 10),
(224, 'admin', '2016-11-11 04:41:29', '2016-11-12', 5, 0),
(225, 'admin', '2016-11-11 04:41:31', '2016-11-12', 5, 0),
(226, 'admin', '2016-11-11 07:43:50', '2016-11-12', 5, 0),
(227, 'admin', '2016-11-11 07:43:51', '2016-11-12', 5, 0),
(228, 'admin', '2016-11-11 07:48:15', '2016-11-12', 5, 0),
(229, 'admin', '2016-11-11 07:49:16', '2016-11-12', 5, 0),
(230, 'admin', '2016-11-11 23:12:40', '2016-11-12', 5, 0),
(231, 'oting', '2016-11-11 23:19:58', '2016-11-12', 0, 10),
(232, 'oting', '2016-11-11 23:20:00', '2016-11-12', 0, 10),
(233, 'oting', '2016-11-11 23:51:54', '2016-11-12', 0, 10),
(234, 'oting', '2016-11-11 23:52:57', '2016-11-12', 0, 10),
(235, 'oting', '2016-11-11 23:53:10', '2016-11-12', 0, 10),
(236, 'oting', '2016-11-11 23:53:11', '2016-11-12', 0, 10),
(237, 'oting', '2016-11-11 23:54:14', '2016-11-12', 0, 10),
(238, 'admin', '2016-11-11 23:54:29', '2016-11-12', 5, 0),
(239, 'oting', '2016-11-11 23:54:47', '2016-11-12', 0, 10),
(240, 'oting', '2016-11-11 23:56:04', '2016-11-12', 0, 10),
(241, 'oting', '2016-11-11 23:56:07', '2016-11-12', 0, 10),
(242, 'oting', '2016-11-11 23:57:16', '2016-11-12', 0, 10),
(243, 'oting', '2016-11-11 23:58:27', '2016-11-12', 0, 10),
(244, 'admin', '2016-11-11 23:58:54', '2016-11-12', 5, 0),
(245, 'admin', '2016-11-11 23:59:50', '2016-11-12', 5, 0),
(246, 'admin', '2016-11-12 00:03:03', '2016-11-12', 5, 0),
(247, 'admin', '2016-11-12 00:10:58', '2016-11-12', 5, 0),
(248, 'oting', '2016-11-12 00:11:17', '2016-11-12', 0, 10),
(249, 'admin', '2016-11-12 00:16:38', '2016-11-12', 5, 0),
(250, 'oting', '2016-11-12 00:16:54', '2016-11-12', 0, 10),
(251, 'admin', '2016-11-12 03:35:15', '2016-11-12', 5, 0),
(252, 'admin', '2016-11-12 07:46:08', '2016-11-12', 5, 0),
(253, 'admin', '2016-11-12 07:46:10', '2016-11-12', 5, 0),
(254, 'oting', '2016-11-12 08:36:41', '2016-11-12', 0, 10),
(255, 'admin', '2016-11-12 08:47:58', '', 5, 0),
(256, 'admin', '2016-11-12 18:24:26', '', 5, 0),
(257, 'admin', '2016-11-13 07:47:14', '', 5, 0),
(258, 'admin', '2016-11-13 07:57:53', '', 5, 0),
(259, 'admin', '2016-11-13 10:26:43', '', 5, 0),
(260, 'admin', '2016-11-13 12:30:05', '', 5, 0),
(261, 'admin', '2016-11-13 12:50:33', '', 5, 0),
(262, 'admin', '2016-11-13 12:52:12', '', 5, 0),
(263, 'admin', '2016-11-13 13:18:24', '', 5, 0),
(264, 'admin', '2016-11-13 13:18:25', '', 5, 0),
(265, 'admin', '2016-11-14 16:01:11', '', 5, 0),
(266, 'admin', '2016-11-14 08:09:11', '', 5, 0),
(267, 'admin', '2016-11-14 08:14:15', '', 5, 0),
(268, 'admin', '2016-11-14 08:14:43', '', 5, 0),
(269, 'admin', '2016-11-14 08:22:12', '', 5, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
