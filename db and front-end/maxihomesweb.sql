-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 10:53 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maxihomesweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_slider`
--

CREATE TABLE `about_slider` (
  `project_slider_id` int(128) NOT NULL,
  `location_id` int(128) NOT NULL,
  `thumbnails` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `salt` int(8) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `token` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `contact` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `role_id`, `username`, `password`, `salt`, `deleted`, `token`, `email`, `contact`) VALUES
(3, 1, 'cyyang', '27f501a09a16885bd6440acbf13ddeee35d64883f76c8e99c386e0acc8fc87d4', 592691, 0, 'dabs57p6ih', 'cyyang94@hotmail.com', '+60167780275'),
(4, 1, 'rob', 'cbc4551a758cf172cde258bb438585ae3edb9842df01877412cc17bf477cb537', 996509, 0, '', 'robxlee@hotmail.com', '123'),
(8, 1, 'ukbadmin', 'cbb6412a1b8db615de60ee4beaea5cbdd97b6319f885caf325d5af7f2ae7e8c4', 115657, 0, '', 'willen.wong@grownce.com', '+60127201755');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `admin_role_id` int(11) NOT NULL,
  `role` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`admin_role_id`, `role`) VALUES
(1, 'operator'),
(2, 'admin'),
(3, 'vendor'),
(4, 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `decription` longtext NOT NULL,
  `thumbnail` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(128) NOT NULL,
  `name` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `decription` longtext NOT NULL,
  `address` varchar(256) NOT NULL,
  `tag` varchar(128) NOT NULL,
  `advance_rental` decimal(10,0) NOT NULL,
  `security_deposit` decimal(10,0) NOT NULL,
  `utilities_deposit` decimal(10,0) NOT NULL,
  `keycard_deposit` decimal(10,2) NOT NULL,
  `rental_type` varchar(32) NOT NULL,
  `attached_bathroom` tinyint(1) NOT NULL,
  `building_type` varchar(32) NOT NULL,
  `availability` varchar(32) NOT NULL,
  `minimum_tenure` date NOT NULL,
  `furnishing` varchar(32) NOT NULL,
  `location_id` int(128) NOT NULL,
  `beds_in_room` int(2) NOT NULL,
  `gender_preference` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `salt` int(8) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `allowed_devices` int(11) NOT NULL DEFAULT '1',
  `contact_person` varchar(128) NOT NULL,
  `contact_number` varchar(32) NOT NULL,
  `address` varchar(128) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expiry` date NOT NULL,
  `email` varchar(64) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `salt`, `points`, `deleted`, `allowed_devices`, `contact_person`, `contact_number`, `address`, `start_date`, `expiry`, `email`, `active`) VALUES
(7, 'rob', '21f6d6f81aa712af34523e675f3e3a984f989b6b3da84d3b9e52bb05b04b79b4', 746750, 0, 0, 1, 'rob', '0167822973', 'menara msc cyberport', '2018-05-14 03:54:15', '2099-12-31', 'rob.lee@commonextract.com', 1),
(12, 'dev1', '59c7968209427a65aaabe44e125286564268f8f144026f6fbc0c1693723f8b35', 496610, 0, 0, 1, 'dev1', '0167822973', 'dev1', '2018-05-14 03:54:15', '2020-05-25', 'dev1@binkmail.com', 1),
(14, 'dev2', 'e4e0f45c745e6448bc0f5434d048437692e3f77c3d24616cca03c0908507bd87', 296989, 0, 0, 1, 'dev2', '0167822973', 'dev2', '2018-05-14 03:54:15', '2025-12-31', 'dev2@dev2.com', 1),
(19, 'Willen', 'cdf651d18d2cc5a296bc540fe757fc018e7f465fab93b4d5206aae47cd705cc3', 206330, 0, 0, 1, '', '', '', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(22, 'perakpkh', '3074274498d1aff09e5cf7e2ba5ac2aac468664631bc085b397ec86c4b2ef5ba', 248340, 0, 0, 1, 'Michael Phoon', '', '', '2018-05-14 03:54:15', '2099-01-01', '', 1),
(23, 'D07001', '3f36978db40c7c03a84f8c785926f778e423029b38904f00913886a1d1942477', 880320, 0, 0, 0, 'Tadika Baptist Canning', 'password 71g111', 'start 1/7/2018', '2018-05-14 03:54:15', '2020-06-30', '', 1),
(25, 'teacher1', '75412858e57fb59998e67732d299cae82b47843bbc7190e5feaf9aadc8854a9e', 160222, 0, 0, 1, 'Anstace', '', '', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(26, 'teacher2', '322471795708780e34131e305bc7977d623a1b4e55897b6642e6189e73bc00a5', 497605, 0, 0, 1, 'Sherly', '', '', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(29, 'DS1', 'a544fabf42055d19bcb3164d9f533d7026316fa0ab2c2ea5cda7b791815e1228', 441369, 0, 0, 1, 'Karen Ng', '', '', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(30, 'teacher3', '175cf1a677076a34b6d096995a425fe4a8ca2d4e4ff4af7ebd0ffba8c8f38976', 127186, 0, 0, 1, 'Sherlin', '', '', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(32, 'teacher4', '19096217a856f3767a2e93ab49b63641339f293240155f56d9e19cd56119a0c1', 443128, 0, 0, 1, '', '', '', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(33, 'test', 'd144598327cc9b625d5660f99c059e94b30ea58eb73e356f6e973005ee69390b', 417196, 0, 0, 1, '', '', '', '2018-05-14 03:54:15', '0000-00-00', 'test@hotmail.com', 1),
(35, 'Ric1', 'a8ff9aa70b4b9290166ec2945fd155044692e358ad93bb3857302ce3d665dd97', 127369, 0, 0, 1, 'Ric', '', 'Password: ric123456', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(36, 'teacher5', 'e7c93fdad0312fa34e75dc1eb4d38f8c179f92c8739b61028bd5ac6a5eb6674f', 803662, 0, 0, 1, '', '', '', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(40, 'peraklsc', 'e3126d4208f24199e554f7f37a67bdff9c53c97c7ca539652e2a0a1548d39a1d', 901563, 0, 0, 1, 'Lee Seng Choy', '', 'Password: GPerak002', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(42, 'D01002', '7b04c482ab95ec31b36d78abb499b6193d860e9e33295f59aced7e746c14035c', 796536, 0, 0, 1, 'Happy Kids Garden', 'Password: 11g112', '', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(43, 'ric2', 'f0be9df3ded71b988090267c3e862434f2ac6bc8add22092f888ae4edde8f414', 628830, 0, 0, 1, '', '', 'password: ric123456', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(44, 'nshkx', 'ad663e286c46629366d4d309e7ffbb2f6a413d14a1cec5f741c9ca06c3020230', 472152, 0, 0, 1, 'Hiew Kai Xuan', 'Password : gnsembilan001', '', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(46, 'selwce', '3c0f41eed4eae47540272b77b7180fa82650d83368a917ce7c99364ca2792c0f', 944005, 0, 0, 1, 'Joel Wong', 'Password: gselangor002', '', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(49, 'jhgsp', 'f944cf1da224c73abb86c407446f30acc8ef9aff37e72d2c36e46bffe3c0e97e', 708044, 0, 0, 1, 'Janet Gan', 'password: gjohor001', '', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(50, 'D01003', '88b56d5967ad4bc57e917300f56bd3c1f1d054f38fefb43ffd019d82d85e25f8', 118759, 0, 0, 1, 'Password : 11g113', 'Roly Poly', 'Start Date: 080518', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(51, 'try1', '978295bf4784659e1b5bdaa9fee60ba9f39c117a1eeed250f5090a703176a45f', 695697, 0, 0, 1, '', '', '', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(52, 'D01001', '8c41fe596858c6f8515005233c433a75836dcce6779f376646cf07a1ca9f6cfc', 128973, 0, 0, 1, 'Tadika Mini (Q-Dees BP)', 'Password: 11g111', 'Start: 7/4/2018', '2018-05-14 03:54:15', '0000-00-00', '', 1),
(53, 'changed pass', '3ef38fa24e9be52aaf3cbb0fe4f8d555848d7163bac785265dd3285c2a29ce12', 592530, 0, 0, 5, 'asd', '123123123', 'sadasd', '2018-05-14 03:54:15', '0001-01-01', 'asd@sd', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_slider`
--
ALTER TABLE `about_slider`
  ADD PRIMARY KEY (`project_slider_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`admin_role_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_slider`
--
ALTER TABLE `about_slider`
  MODIFY `project_slider_id` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `admin_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_slider`
--
ALTER TABLE `about_slider`
  ADD CONSTRAINT `about_slider_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
