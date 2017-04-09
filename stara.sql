-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2017 at 02:27 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stara`
--

-- --------------------------------------------------------

--
-- Table structure for table `dohash`
--

CREATE TABLE IF NOT EXISTS `dohash` (
  `id` bigint(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=610 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dohash`
--

INSERT INTO `dohash` (`id`) VALUES
(119),
(120),
(121),
(122),
(123),
(124),
(125),
(126),
(127),
(128),
(129),
(130),
(131),
(132),
(133),
(134),
(135),
(136),
(137),
(138),
(139),
(140),
(141),
(142),
(143),
(144),
(145),
(146),
(147),
(148),
(149),
(150),
(151),
(152),
(153),
(154),
(155),
(156),
(157),
(158),
(159),
(160),
(161),
(162),
(163),
(164),
(165),
(166),
(167),
(168),
(169),
(170),
(171),
(172),
(173),
(174),
(175),
(176),
(177),
(178),
(179),
(180),
(181),
(182),
(183),
(184),
(185),
(186),
(187),
(188),
(189),
(190),
(191),
(192),
(193),
(194),
(195),
(196),
(197),
(198),
(199),
(200),
(201),
(202),
(203),
(204),
(205),
(206),
(207),
(208),
(209),
(210),
(211),
(212),
(213),
(214),
(215),
(216),
(217),
(218),
(219),
(220),
(221),
(222),
(223),
(224),
(225),
(226),
(227),
(228),
(229),
(230),
(231),
(232),
(233),
(234),
(235),
(236),
(237),
(238),
(239),
(240),
(241),
(242),
(243),
(244),
(245),
(246),
(247),
(248),
(249),
(250),
(251),
(252),
(253),
(254),
(255),
(256),
(257),
(258),
(259),
(260),
(261),
(262),
(263),
(264),
(265),
(266),
(267),
(268),
(269),
(270),
(271),
(272),
(273),
(274),
(275),
(276),
(277),
(278),
(279),
(280),
(281),
(282),
(283),
(284),
(285),
(286),
(287),
(288),
(289),
(290),
(291),
(292),
(293),
(294),
(295),
(296),
(297),
(298),
(299),
(300),
(301),
(302),
(303),
(304),
(305),
(306),
(307),
(308),
(309),
(310),
(311),
(312),
(313),
(314),
(315),
(316),
(317),
(318),
(319),
(320),
(321),
(322),
(323),
(324),
(325),
(326),
(327),
(328),
(329),
(330),
(331),
(332),
(333),
(334),
(335),
(336),
(337),
(338),
(339),
(340),
(341),
(342),
(343),
(344),
(345),
(346),
(347),
(348),
(349),
(350),
(351),
(352),
(353),
(354),
(355),
(356),
(357),
(358),
(359),
(360),
(361),
(362),
(363),
(364),
(365),
(366),
(367),
(368),
(369),
(370),
(371),
(372),
(373),
(374),
(375),
(376),
(377),
(378),
(379),
(380),
(381),
(382),
(383),
(384),
(385),
(386),
(387),
(388),
(389),
(390),
(391),
(392),
(393),
(394),
(395),
(396),
(397),
(398),
(399),
(400),
(401),
(402),
(403),
(404),
(405),
(406),
(407),
(408),
(409),
(410),
(411),
(412),
(413),
(414),
(415),
(416),
(417),
(418),
(419),
(420),
(421),
(422),
(423),
(424),
(425),
(426),
(427),
(428),
(429),
(430),
(431),
(432),
(433),
(434),
(435),
(436),
(437),
(438),
(439),
(440),
(441),
(442),
(443),
(444),
(445),
(446),
(447),
(448),
(449),
(450),
(451),
(452),
(453),
(454),
(455),
(456),
(457),
(458),
(459),
(460),
(461),
(462),
(463),
(464),
(465),
(466),
(467),
(468),
(469),
(470),
(471),
(472),
(473),
(474),
(475),
(476),
(477),
(478),
(479),
(480),
(481),
(482),
(483),
(484),
(485),
(486),
(487),
(488),
(489),
(490),
(491),
(492),
(493),
(494),
(495),
(496),
(497),
(498),
(499),
(500),
(501),
(502),
(503),
(504),
(505),
(506),
(507),
(508),
(509),
(510),
(511),
(512),
(513),
(514),
(515),
(516),
(517),
(518),
(519),
(520),
(521),
(522),
(523),
(524),
(525),
(526),
(527),
(528),
(529),
(530),
(531),
(532),
(533),
(534),
(535),
(536),
(537),
(538),
(539),
(540),
(541),
(542),
(543),
(544),
(545),
(546),
(547),
(548),
(549),
(550),
(551),
(552),
(553),
(554),
(555),
(556),
(557),
(558),
(559),
(560),
(561),
(562),
(563),
(564),
(565),
(566),
(567),
(568),
(569),
(570),
(571),
(572),
(573),
(574),
(575),
(576),
(577),
(578),
(579),
(580),
(581),
(582),
(583),
(584),
(585),
(586),
(587),
(588),
(589),
(590),
(591),
(592),
(593),
(594),
(595),
(596),
(597),
(598),
(599),
(600),
(601),
(602),
(603),
(604),
(605),
(606),
(607),
(608),
(609);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stara_posts`
--

CREATE TABLE IF NOT EXISTS `stara_posts` (
  `id` bigint(25) NOT NULL,
  `wdyw` int(5) NOT NULL DEFAULT '0',
  `post_url` varchar(100) DEFAULT NULL,
  `post_title` varchar(225) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_category` varchar(25) NOT NULL,
  `post_status` enum('0','1','2') NOT NULL DEFAULT '0',
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_rdate` varchar(25) NOT NULL,
  `post_followtype` varchar(5) DEFAULT NULL,
  `post_forusername` varchar(100) DEFAULT NULL,
  `post_forkey` varchar(100) DEFAULT NULL,
  `post_updv` enum('0','1') NOT NULL COMMENT '1 = upvoted, 0 = downvotedvoted',
  `post_views` bigint(50) NOT NULL,
  `post_comment` bigint(25) NOT NULL,
  `post_upvote` bigint(25) NOT NULL COMMENT 'total',
  `post_downvote` bigint(25) NOT NULL COMMENT 'total',
  `post_answer` bigint(25) NOT NULL,
  `post_childfrom` varchar(225) NOT NULL,
  `post_key` varchar(100) NOT NULL,
  `poster_username` varchar(225) NOT NULL,
  `poster_key` varchar(225) NOT NULL,
  `post_lastuser` text,
  `post_lastcontent` text
) ENGINE=InnoDB AUTO_INCREMENT=399 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stara_posts`
--

INSERT INTO `stara_posts` (`id`, `wdyw`, `post_url`, `post_title`, `post_content`, `post_category`, `post_status`, `post_date`, `post_rdate`, `post_followtype`, `post_forusername`, `post_forkey`, `post_updv`, `post_views`, `post_comment`, `post_upvote`, `post_downvote`, `post_answer`, `post_childfrom`, `post_key`, `poster_username`, `poster_key`, `post_lastuser`, `post_lastcontent`) VALUES
(1, 0, 'apakah-ayam-bisa-terbang-ke-angkasa', 'Apakah Ayam Bisa Terbang Ke Angkasa?', '', '0', '0', '2017-02-03 11:09:59', '', NULL, NULL, NULL, '0', 9, 1, 0, 0, 5, '', 'c81e728d9d4c2f636f067f89cc14862c', 'jihantoro', 'a2t3', NULL, NULL),
(2, 1, '', '', 'Lorem, ipsum dolor sit ame consectetur adipisicing elit sed do eiusmodtempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip cat cupidatat nonproiden sunt in culpa qui officia deserunt mollit anim id est laborum', '', '0', '2017-02-03 11:19:26', '', NULL, NULL, NULL, '0', 58, 0, 0, 0, 0, 'c81e728d9d4c2f636f067f89cc14862c', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'jihantoro', 'a2t3', NULL, NULL),
(3, 0, 'bagaimana-manusia-bisa-terbentuk', 'bagaimana manusia bisa terbentuk?', '', '0', '0', '2017-02-04 13:49:35', '', NULL, NULL, NULL, '0', 2, 0, 0, 0, 1, '', 'a87ff679a2f3e71d9181a67b7542122c', 'jihantoro', 'a2t3', NULL, NULL),
(4, 0, 'is-angle-really-exist', 'is angle really exist?', '', '0', '0', '2017-02-04 14:47:18', '', NULL, NULL, NULL, '0', 5, 0, 0, 0, 1, '', 'e4da3b7fbbce2345d7772b0674a318d5', 'jihantoro', 'a2t3', NULL, NULL),
(5, 0, 'apakah-benar-apa-yang-dilakukan-mereka', 'apakah benar apa yang dilakukan mereka?', '', '1', '0', '2017-02-04 22:01:29', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 1, '', '1679091c5a880faf6fb5e6087eb1b2dc', 'jihantoro', 'a2t3', NULL, NULL),
(6, 0, 'bagaimana-cara-memotong-ayam-sesuai-kaidah-agama', 'bagaimana cara memotong ayam sesuai kaidah agama?', '', '0', '0', '2017-02-05 02:33:59', '', NULL, NULL, NULL, '0', 5, 0, 0, 0, 1, '', '8f14e45fceea167a5a36dedd4bea2543', 'jihantoro', 'a2t3', NULL, NULL),
(7, 1, '', '', 'Semua nya bisa terbang ke angkasa, dengan syarat dia selalu tekun berlatih, dan konsisten pada apa yang di ingin kan', '', '0', '2017-02-05 06:28:46', '', NULL, NULL, NULL, '0', 46, 17, 0, 0, 0, 'c81e728d9d4c2f636f067f89cc14862c', 'c9f0f895fb98ab9159f51fd0297e236d', 'jihantoro', 'a2t3', NULL, NULL),
(39, 0, 'cara-agar-kita-menghargai-perbedaan', 'cara agar kita menghargai perbedaan', '', '0', '0', '2017-02-06 09:29:41', '', NULL, NULL, NULL, '0', 8, 3, 0, 0, 1, '', 'a2557a7b2e94197ff767970b67041697', 'jihantoro', 'a2t3', NULL, NULL),
(44, 1, '', '', 'itu si tinggal bagaimana seseorang bisa berpikir dengan baik dan benar', '', '0', '2017-02-06 12:02:51', '', NULL, NULL, NULL, '0', 5, 10, 0, 0, 0, 'a2557a7b2e94197ff767970b67041697', 'a597e50502f5ff68e3e25b9114205d4a', 'jihantoro', 'a2t3', NULL, NULL),
(45, 1, '', '', 'cara nya sangat gampang, yakni dengan menghadap kiblat lalu mengucapkan basmallah, dan PETOK PETOK, akan tetapi itu semua si tinggal bagaimana seseorang bisa berpikir dengan baik dan benar', '', '0', '2017-02-06 12:19:06', '', NULL, NULL, NULL, '0', 3, 0, 0, 0, 0, '8f14e45fceea167a5a36dedd4bea2543', '0336dcbab05b9d5ad24f4333c7658a0e', 'jihantoro', 'a2t3', NULL, NULL),
(50, 1, '', '', 'Isnt real, trust me, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', '0', '2017-02-06 12:36:28', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'e4da3b7fbbce2345d7772b0674a318d5', '3644a684f98ea8fe223c713b77189a77', 'jihantoro', 'a2t3', NULL, NULL),
(54, 4, '', '', 'yah ampun , masih kosong ternyata', '', '0', '2017-02-06 12:43:11', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c81e728d9d4c2f636f067f89cc14862c', '274ad4786c3abca69fa097b85867d9a4', 'jihantoro', 'a2t3', NULL, NULL),
(55, 4, '', '', 'ummmmmmmmmm', '', '0', '2017-02-06 12:43:39', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c81e728d9d4c2f636f067f89cc14862c', 'eae27d77ca20db309e056e3d2dcd7d69', 'jihantoro', 'a2t3', NULL, NULL),
(61, 1, NULL, '', 'sebenar nya cara nya sangat sangat mudah', '', '0', '2017-02-06 16:41:28', '', NULL, NULL, NULL, '0', 29, 3, 0, 0, 0, 'a87ff679a2f3e71d9181a67b7542122c', '1534b76d325a8f591b52d302e7181331', 'jihantoro', 'a2t3', NULL, NULL),
(105, 0, 'untuk-apa-manusia-hidup', 'untuk apa manusia hidup?', '', '0', '0', '2017-02-07 00:01:42', '', NULL, NULL, NULL, '0', 21, 10, 0, 0, 13, '', 'f718499c1c8cef6730f9fd03c8125cab', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(108, 1, NULL, '', 'Tentu nya, manusia hidup untuk menjalani kehidupan', '', '0', '2017-02-07 00:04:04', '', NULL, NULL, NULL, '0', 31, 0, 0, 0, 0, 'f718499c1c8cef6730f9fd03c8125cab', 'cfa0860e83a4c3a763a7e62d825349f7', 'jihantoro', 'a2t3', NULL, NULL),
(112, 1, NULL, '', 'untuk makan dan minum, karena manusia selalu butuh makanan dan minuman, betul', '', '0', '2017-02-07 00:28:34', '', NULL, NULL, NULL, '0', 24, 2, 0, 0, 0, 'f718499c1c8cef6730f9fd03c8125cab', '8c19f571e251e61cb8dd3612f26d5ecf', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(119, 1, NULL, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', '0', '2017-02-07 00:42:46', '', NULL, NULL, NULL, '0', 36, 0, 0, 0, 0, 'f718499c1c8cef6730f9fd03c8125cab', '7f100b7b36092fb9b06dfb4fac360931', 'legowo', '8f121ce07d74717e0b1f21d122e04521', NULL, NULL),
(120, 6, NULL, '', '', '', '0', '2017-02-07 00:42:46', '20170304170800', '1', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', '0', 0, 0, 0, 0, 0, 'f718499c1c8cef6730f9fd03c8125cab', '7a614fd06c325499f1680b9896beedeb', 'jihantoro', 'a2t3', 'jihantoro', '..'),
(121, 4, NULL, '', 'harus di jawab pertanyaann ini !', '', '0', '2017-02-07 00:43:22', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'f718499c1c8cef6730f9fd03c8125cab', '4734ba6f3de83d861c3176a6273cac6d', 'legowo', '8f121ce07d74717e0b1f21d122e04521', NULL, NULL),
(150, 5, NULL, '', ' laboris nisi ut aliquip ex ea commodoconsequat.', '', '0', '2017-02-07 01:35:27', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, '8c19f571e251e61cb8dd3612f26d5ecf', '577bcc914f9e55d5e4e4f82f9f00e7d4', 'legowo', '8f121ce07d74717e0b1f21d122e04521', NULL, NULL),
(151, 6, NULL, '', '', '', '0', '2017-02-07 01:35:27', '', '3', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', '0', 0, 0, 0, 0, 0, '8c19f571e251e61cb8dd3612f26d5ecf', '11b9842e0a271ff252c1903e7132cd68', 'legowo', '8f121ce07d74717e0b1f21d122e04521', NULL, NULL),
(153, 0, 'pandangan-bumi-datar-menurut-kalian', 'pandangan bumi datar menurut kalian', '', '0', '0', '2017-02-07 01:43:59', '', NULL, NULL, NULL, '0', 2, 0, 0, 0, 0, '', '496e05e1aea0a9c4655800e8a7b9ea28', 'jihantoro', 'a2t3', NULL, NULL),
(156, 6, NULL, '', '', '0', '0', '2017-02-07 08:47:40', '', '0', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c81e728d9d4c2f636f067f89cc14862c', 'a8c88a0055f636e4a163a5e3d16adab7', 'jihantoro', 'a2t3', NULL, NULL),
(187, 3, NULL, '', '', '', '0', '2017-02-08 02:23:45', '', NULL, NULL, NULL, '1', 0, 0, 0, 0, 0, 'a597e50502f5ff68e3e25b9114205d4a', 'd81f9c1be2e08964bf9f24b15f0e4900', 'jihantoro', 'a2t3', NULL, NULL),
(188, 6, NULL, '', '', '', '0', '2017-02-08 02:23:45', '20170208092345', '5', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'a597e50502f5ff68e3e25b9114205d4a', '13f9896df61279c928f19721878fac41', 'jihantoro', 'a2t3', NULL, NULL),
(194, 5, NULL, '', 'tau dah ya', '', '0', '2017-02-08 02:31:19', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'a597e50502f5ff68e3e25b9114205d4a', '371bce7dc83817b7893bcdeed13799b5', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(195, 6, NULL, '', '', '', '0', '2017-02-08 02:31:19', '20170208093119', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'a597e50502f5ff68e3e25b9114205d4a', '138bb0696595b338afbab333c555292a', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(202, 3, NULL, '', '', '', '0', '2017-02-08 02:44:15', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, '8c19f571e251e61cb8dd3612f26d5ecf', 'e7b24b112a44fdd9ee93bdf998c6ca0e', 'jihantoro', 'a2t3', NULL, NULL),
(205, 6, NULL, '', '', '', '0', '2017-02-08 02:45:17', '20170208094517', '6', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', '0', 0, 0, 0, 0, 0, '8c19f571e251e61cb8dd3612f26d5ecf', '00411460f7c92d2124a67ea0f4cb5f85', 'jihantoro', 'a2t3', NULL, NULL),
(208, 5, NULL, '', 'hmmm', '', '0', '2017-02-08 02:55:25', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '5ef698cd9fe650923ea331c15af3b160', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(209, 6, NULL, '', '', '', '0', '2017-02-08 02:55:25', '20170208095525', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '05049e90fa4f5039a8cadc6acbb4b2cc', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(210, 5, NULL, '', 'what jack', '', '0', '2017-02-08 02:56:47', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', 'cf004fdc76fa1a4f25f62e0eb5261ca3', 'jihantoro', 'a2t3', NULL, NULL),
(211, 6, NULL, '', '', '', '0', '2017-02-08 02:56:47', '20170208095647', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '0c74b7f78409a4022a2c4c5a5ca3ee19', 'jihantoro', 'a2t3', NULL, NULL),
(218, 0, 'bagaimana-jika-kita-semua-tiada', 'bagaimana jika kita semua tiada', '', '0', '0', '2017-02-08 05:24:56', '', NULL, NULL, NULL, '0', 50, 3, 0, 0, 0, '', '142949df56ea8ae0be8b5306971900a4', 'jihantoro', 'a2t3', NULL, NULL),
(219, 0, 'menghargai-perbedaan-ayam', 'menghargai perbedaan ayam', '', '0', '0', '2017-02-08 05:33:29', '', NULL, NULL, NULL, '0', 19, 0, 0, 0, 18, '', 'd34ab169b70c9dcd35e62896010cd9ff', 'jihantoro', 'a2t3', NULL, NULL),
(252, 0, 'how-to-make-wasabi-hot-twice', 'how to make, wasabi hot twice', '', '1', '0', '2017-02-09 03:15:31', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 1, '', '1068c6e4c8051cfd4e9ea8072e3189e2', 'jihantoro', 'a2t3', NULL, NULL),
(297, 6, NULL, '', '', '', '0', '2017-02-10 07:00:37', '20170210153224', '1', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'd34ab169b70c9dcd35e62896010cd9ff', '42998cf32d552343bc8e460416382dca', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', 'jason', 'etdah..'),
(299, 6, NULL, '', '', '', '0', '2017-02-10 07:00:41', '20170210153224', '1', 'legowo', '8f121ce07d74717e0b1f21d122e04521', '0', 0, 0, 0, 0, 0, 'd34ab169b70c9dcd35e62896010cd9ff', '7fe1f8abaad094e0b5cb1b01d712f708', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', 'jason', 'etdah..'),
(301, 6, NULL, '', '', '', '0', '2017-02-10 07:00:52', '20170210153224', '1', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', '0', 0, 0, 0, 0, 0, 'd34ab169b70c9dcd35e62896010cd9ff', '0353ab4cbed5beae847a7ff6e220b5cf', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', 'jason', 'etdah..'),
(313, 1, NULL, '', 'etdah', '', '0', '2017-02-10 08:32:24', '', NULL, NULL, NULL, '0', 5, 0, 0, 0, 0, 'd34ab169b70c9dcd35e62896010cd9ff', '2050e03ca119580f74cca14cc6e97462', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(316, 5, NULL, '', 'boy oh boy, tes test css', '', '0', '2017-02-11 00:07:26', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '74071a673307ca7459bcf75fbd024e09', 'jihantoro', 'a2t3', NULL, NULL),
(317, 6, NULL, '', '', '', '0', '2017-02-11 00:07:26', '20170211070726', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', 'cfee398643cbc3dc5eefc89334cacdc1', 'jihantoro', 'a2t3', NULL, NULL),
(322, 5, NULL, '', 'tes', '', '0', '2017-02-14 10:03:09', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '218a0aefd1d1a4be65601cc6ddc1520e', 'jihantoro', 'a2t3', NULL, NULL),
(323, 6, NULL, '', '', '', '0', '2017-02-14 10:03:09', '20170214170309', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '7d04bbbe5494ae9d2f5a76aa1c00fa2f', 'jihantoro', 'a2t3', NULL, NULL),
(324, 5, NULL, '', 'tes', '', '0', '2017-02-14 10:03:32', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', 'a516a87cfcaef229b342c437fe2b95f7', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(325, 6, NULL, '', '', '', '0', '2017-02-14 10:03:32', '20170214170332', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', 'c3c59e5f8b3e9753913f4d435b53c308', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(326, 5, NULL, '', 'halo', '', '0', '2017-02-14 10:03:33', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '854d9fca60b4bd07f9bb215d59ef5561', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(327, 6, NULL, '', '', '', '0', '2017-02-14 10:03:33', '20170214170333', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', 'c410003ef13d451727aeff9082c29a5c', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(328, 5, NULL, '', 'apa kabar', '', '0', '2017-02-14 10:03:36', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '559cb990c9dffd8675f6bc2186971dc2', 'jihantoro', 'a2t3', NULL, NULL),
(329, 6, NULL, '', '', '', '0', '2017-02-14 10:03:36', '20170214170336', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '55a7cf9c71f1c9c495413f934dd1a158', 'jihantoro', 'a2t3', NULL, NULL),
(330, 5, NULL, '', 'bagai mana kabar nya', '', '0', '2017-02-14 10:03:41', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '2f55707d4193dc27118a0f19a1985716', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(331, 6, NULL, '', '', '', '0', '2017-02-14 10:03:41', '20170214170341', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '1be3bc32e6564055d5ca3e5a354acbef', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(332, 5, NULL, '', 'apakah baik baik saja', '', '0', '2017-02-14 10:03:45', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '35051070e572e47d2c26c241ab88307f', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(333, 6, NULL, '', '', '', '0', '2017-02-14 10:03:45', '20170214170345', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', 'b534ba68236ba543ae44b22bd110a1d6', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(334, 5, NULL, '', 'iya, saya baik baik saja', '', '0', '2017-02-14 10:03:55', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '7380ad8a673226ae47fce7bff88e9c33', 'jihantoro', 'a2t3', NULL, NULL),
(335, 6, NULL, '', '', '', '0', '2017-02-14 10:03:55', '20170214170355', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '05f971b5ec196b8c65b75d2ef8267331', 'jihantoro', 'a2t3', NULL, NULL),
(336, 5, NULL, '', 'bagaimana dengan rencana kita ?', '', '0', '2017-02-14 10:04:01', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '3cf166c6b73f030b4f67eeaeba301103', 'jihantoro', 'a2t3', NULL, NULL),
(337, 6, NULL, '', '', '', '0', '2017-02-14 10:04:01', '20170214170401', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', 'cee631121c2ec9232f3a2f028ad5c89b', 'jihantoro', 'a2t3', NULL, NULL),
(338, 5, NULL, '', 'apakah jadi bermain ?', '', '0', '2017-02-14 10:04:06', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '5b69b9cb83065d403869739ae7f0995e', 'jihantoro', 'a2t3', NULL, NULL),
(339, 6, NULL, '', '', '', '0', '2017-02-14 10:04:06', '20170214170406', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', 'b5b41fac0361d157d9673ecb926af5ae', 'jihantoro', 'a2t3', NULL, NULL),
(340, 5, NULL, '', 'seperti nya aku tidak bisa', '', '0', '2017-02-14 10:04:13', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', '285e19f20beded7d215102b49d5c09a0', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(341, 6, NULL, '', '', '', '0', '2017-02-14 10:04:13', '20170214170413', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', 'b337e84de8752b27eda3a12363109e80', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(342, 5, NULL, '', 'terimakasih', '', '0', '2017-02-14 10:04:19', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', 'e8c0653fea13f91bf3c48159f7c24f78', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(343, 6, NULL, '', '', '', '0', '2017-02-14 10:04:19', '20170214170419', '3', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c9f0f895fb98ab9159f51fd0297e236d', 'ff4d5fbbafdf976cfdc032e3bde78de5', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(354, 3, NULL, '', '', '', '0', '2017-02-14 10:06:19', '', NULL, NULL, NULL, '1', 0, 0, 0, 0, 0, 'cfa0860e83a4c3a763a7e62d825349f7', '38913e1d6a7b94cb0f55994f679f5956', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(355, 6, NULL, '', '', '', '0', '2017-02-14 10:06:20', '20170214170620', '5', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'cfa0860e83a4c3a763a7e62d825349f7', 'ebd9629fc3ae5e9f6611e2ee05a31cef', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(357, 6, NULL, '', '', '0', '0', '2017-02-14 10:06:48', '20170214170648', '0', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c81e728d9d4c2f636f067f89cc14862c', 'cf67355a3333e6e143439161adc2d82e', 'jason', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(359, 7, NULL, '', '', '', '0', '2017-02-14 10:07:15', '', NULL, 'jason', 'c4ca4238a0b923820dcc509a6f75849b', '0', 0, 0, 0, 0, 0, '', '53fde96fcc4b4ce72d7739202324cd49', 'jihantoro', 'a2t3', NULL, NULL),
(360, 4, NULL, '', 'ayam', '', '0', '2017-02-17 00:40:44', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c81e728d9d4c2f636f067f89cc14862c', 'df877f3865752637daa540ea9cbc474f', 'jihantoro', 'a2t3', NULL, NULL),
(361, 6, NULL, '', '', '', '0', '2017-02-17 00:40:45', '20170217074045', '2', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c81e728d9d4c2f636f067f89cc14862c', 'c399862d3b9d6b76c8436e924a68c45b', 'jihantoro', 'a2t3', NULL, NULL),
(362, 3, NULL, '', '', '', '0', '2017-02-23 11:31:41', '', NULL, NULL, NULL, '1', 0, 0, 0, 0, 0, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '33e8075e9970de0cfea955afd4644bb2', 'jihantoro', 'a2t3', NULL, NULL),
(363, 6, NULL, '', '', '', '0', '2017-02-23 11:31:41', '20170223183141', '5', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '65658fde58ab3c2b6e5132a39fae7cb9', 'jihantoro', 'a2t3', NULL, NULL),
(364, 8, NULL, '', 'a1b6e54f3c9d6cb89a9007be1ce9d679.jpg', 'image', '0', '2017-03-03 21:55:55', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, '', 'ffeabd223de0d4eacb9a3e6e53e5448d', 'jihantoro', 'a2t3', NULL, NULL),
(367, 8, NULL, '', '75a42a4bbde244d4727e4a94700debff.txt', 'file', '0', '2017-03-03 22:12:32', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, '', 'a8849b052492b5106526b2331e526138', 'jihantoro', 'a2t3', NULL, NULL),
(368, 8, NULL, '', '3cad66b5597d6f513ffb8d5fb8bc9ab3.txt', 'file', '0', '2017-03-03 22:14:58', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, '', '258be18e31c8188555c2ff05b4d542c3', 'jihantoro', 'a2t3', NULL, NULL),
(369, 8, NULL, '', 'ab9906eff4f9c401a9cfed9141f9f2e7.txt', 'file', '0', '2017-03-03 22:16:57', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, '', '069d3bb002acd8d7dd095917f9efe4cb', 'jihantoro', 'a2t3', NULL, NULL),
(370, 8, NULL, '', '8b6fbeb4be581335e19236a5d9ff3e87.txt', 'file', '0', '2017-03-03 22:17:16', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, '', 'c6e19e830859f2cb9f7c8f8cacb8d2a6', 'jihantoro', 'a2t3', NULL, NULL),
(371, 8, NULL, '', 'd712d9796418cbf700d419d76999f038.txt', 'file', '0', '2017-03-03 22:18:41', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, '', '46922a0880a8f11f8f69cbb52b1396be', 'jihantoro', 'a2t3', NULL, NULL),
(372, 8, NULL, '', 'f7a053fbfceaa8f8b7d7ba99a2816831.txt', 'file', '0', '2017-03-03 22:20:47', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, '', '9ad6aaed513b73148b7d49f70afcfb32', 'jihantoro', 'a2t3', NULL, NULL),
(373, 8, NULL, '', 'b342491d67ea08a5c30aab1956e94c9e.txt', 'file', '0', '2017-03-03 22:21:23', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, '', 'f5deaeeae1538fb6c45901d524ee2f98', 'jihantoro', 'a2t3', NULL, NULL),
(374, 8, NULL, '', '70adc4c506075d00913604ae9cfd3e2f.txt', 'file', '0', '2017-03-03 22:22:38', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, '', 'a9a1d5317a33ae8cef33961c34144f84', 'jihantoro', 'a2t3', NULL, NULL),
(375, 8, NULL, '', 'd4e45596666bb7aea7b9bbc3c7bfad20.pdf', 'file', '0', '2017-03-03 22:23:48', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, '', '605ff764c617d3cd28dbbdd72be8f9a2', 'jihantoro', 'a2t3', NULL, NULL),
(383, 1, NULL, '', '<p style=''''>ehehahe</p><p style=''''><strong>hsseh</strong></p>', '', '0', '2017-03-03 23:10:20', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'f718499c1c8cef6730f9fd03c8125cab', '076a0c97d09cf1a0ec3e19c7f2529f2b', 'jihantoro', 'a2t3', NULL, NULL),
(384, 1, NULL, '', '<p style=''''><img class=''fr-dib fr-draggable fr-fil'' src=''http://localhost/stara/uploads/images/a1b6e54f3c9d6cb89a9007be1ce9d679.jpg'' style=''width: 134px; height: 134px;''>Saya nggak tau</p><p style=''''>tapi ya mana saya tau</p><p style=''''>la wong saya nggak tau</p><ol><li style=''''>Satu</li><li style=''''>Dua</li><li style=''''>Tiga</li></ol><ul><li style=''''>Huahaha</li><li style=''''>Huehehe</li><li style=''''>Hahaha</li><li style=''''>HUHUHU</li><li style=''''>f</li></ul><p style=''''><em>gagag&nbsp;<strong>&nbsp;gawgaa w&nbsp;</strong></em></p><ul><li style=''''><br></li></ul>', '', '0', '2017-03-03 23:15:49', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c81e728d9d4c2f636f067f89cc14862c', '04ecb1fa28506ccb6f72b12c0245ddbc', 'jihantoro', 'a2t3', NULL, NULL),
(393, 0, 'cara-membuat-data-object-json', 'cara membuat data object json', '', '0', '0', '2017-03-04 10:25:34', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 1, '', '9cf81d8026a9018052c429cc4e56739b', 'jihantoro', 'a2t3', NULL, NULL),
(394, 1, NULL, '', '<p style=''''>Itu memang benar benar ada, pertama</p><ol><li style=''''>Ayam</li><li style=''''><em>Goreng</em></li><li style=''''>Telor</li><li style=''''><strong>Kucing</strong></li><li style=''''><br></li></ol><p style=''''><img class=''fr-dib fr-draggable fr-fil'' src=''http://localhost/stara/uploads/images/a1b6e54f3c9d6cb89a9007be1ce9d679.jpg'' style=''width: 72px; height: 72px;''></p><p style=''''><br></p>', '', '0', '2017-03-04 10:27:42', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, '9cf81d8026a9018052c429cc4e56739b', 'c361bc7b2c033a83d663b8d9fb4be56e', 'jihantoro', 'a2t3', NULL, NULL),
(395, 6, NULL, '', '', '', '0', '2017-03-04 10:27:42', '20170304172742', '1', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, '9cf81d8026a9018052c429cc4e56739b', '44c4c17332cace2124a1a836d9fc4b6f', 'jihantoro', 'a2t3', 'jihantoro', 'Itu memang bena..'),
(396, 1, NULL, '', '<p style=''''><br></p>', '', '0', '2017-03-08 12:27:12', '', NULL, NULL, NULL, '0', 0, 0, 0, 0, 0, 'c81e728d9d4c2f636f067f89cc14862c', 'dc82d632c9fcecb0778afbc7924494a6', 'jihantoro', 'a2t3', NULL, NULL),
(397, 6, NULL, '', '', '', '0', '2017-03-08 12:27:12', '20170309013153', '1', 'jihantoro', 'a2t3', '0', 0, 0, 0, 0, 0, 'c81e728d9d4c2f636f067f89cc14862c', '996a7fa078cc36c46d02f9af3bef918b', 'jihantoro', 'a2t3', 'jihantoro', '..'),
(398, 1, NULL, '', '<p style=''''><br></p>', '', '0', '2017-03-08 18:31:53', '', NULL, NULL, NULL, '0', 5, 0, 0, 0, 0, 'c81e728d9d4c2f636f067f89cc14862c', 'd7a728a67d909e714c0774e22cb806f2', 'jihantoro', 'a2t3', NULL, NULL);

--
-- Triggers `stara_posts`
--
DELIMITER $$
CREATE TRIGGER `posts_trigger` BEFORE INSERT ON `stara_posts`
 FOR EACH ROW BEGIN
  INSERT INTO dohash () VALUES ();
  SET NEW.post_key = MD5(LAST_INSERT_ID());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `identity` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `borndate` varchar(50) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `image` text,
  `bio` text NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text NOT NULL,
  `ukey` varchar(100) NOT NULL,
  `last_activity` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `identity`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `borndate`, `gender`, `image`, `bio`, `company`, `phone`, `address`, `ukey`, `last_activity`) VALUES
(1, '127.0.0.1', 'jihantoro', 'jihantoro', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1489325502, 1, 'Rubi', 'Jihantoro', '13 September 1998', '', 'ruby.jpg', 'Unprofessional Eater', 'ADMIN', '082237522479', '', 'a2t3', '17-03-12 20:31:42'),
(2, '::1', 'jason', 'jason', '$2y$08$IuIIxm0GKdqRaQFGlUcfq.xNBQ8CvkRGraDdKpd5fqZ3hmOXSu5jO', NULL, 'jasongulla@gmail.com', NULL, NULL, NULL, NULL, 1486093302, 1487861544, 1, 'Jack', 'Spears', '13 September 1999', '1', 'jason.jpg', '', NULL, NULL, '', 'c4ca4238a0b923820dcc509a6f75849b', '17-02-23 21:52:24'),
(3, '::1', 'legowo', 'legowo', '$2y$08$haMsxqC5AC/rSoq91OyeAOsCl5tV9Mc76k7OxTBW9707UeIG/jOT.', NULL, 'legowo@mailmail.com', NULL, NULL, NULL, NULL, 1486427928, 1486707564, 1, 'Sukonto', 'Legowo', '12 Sep 2016', '1', 'sukonto.png', 'Unprofessional Singer', NULL, NULL, '', '8f121ce07d74717e0b1f21d122e04521', '17-02-10 13:19:24');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `users_trigger` BEFORE INSERT ON `users`
 FOR EACH ROW BEGIN
  INSERT INTO dohash () VALUES ();
  SET NEW.ukey = MD5(LAST_INSERT_ID());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dohash`
--
ALTER TABLE `dohash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stara_posts`
--
ALTER TABLE `stara_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dohash`
--
ALTER TABLE `dohash`
  MODIFY `id` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=610;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stara_posts`
--
ALTER TABLE `stara_posts`
  MODIFY `id` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=399;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
