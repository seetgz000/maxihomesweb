-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 06:39 PM
-- Server version: 5.7.12-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `about_slider_id` int(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_slider`
--

INSERT INTO `about_slider` (`about_slider_id`, `title`, `thumbnail`, `link`) VALUES
(1, 'etest', '/images/slider/38268056.png', 'asdasd');

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
  `description` longtext NOT NULL,
  `thumbnail` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `title`, `description`, `thumbnail`) VALUES
(1, 'test asdasdas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id auctor arcu. In commodo, sem ac elementum tempus, eros sapien hendrerit turpis, id blandit nunc mi sollicitudin felis. Aenean at ipsum at libero interdum hendrerit. Vestibulum id nisl eu felis luctus dignissim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vel ornare leo. Nunc rhoncus turpis et felis egestas sodales. Nam eros mauris, consequat ut porttitor at, fringilla quis magna. Vestibulum nisi dui, vulputate in venenatis at, tempor sed ipsum. In mollis eget nunc commodo commodo. Proin et nulla aliquam, eleifend lectus sed, pellentesque elit. Vivamus porttitor condimentum ipsum, sed convallis tellus. Nulla ut quam pulvinar, tempus justo vitae, sagittis lectus. Maecenas ac consectetur dolor, ac varius ex. Phasellus pharetra, tortor a mattis congue, ipsum elit dictum ligula, ut fringilla nunc mauris et odio.\r\n\r\nIn porta, orci a bibendum porta, mi dolor sollicitudin felis, vel bibendum dui diam blandit felis. Phasellus at porta leo. Phasellus scelerisque mi ac velit ultricies, cursus eleifend tellus ultricies. Sed fermentum eget leo id accumsan. Proin feugiat justo eu dapibus condimentum. Morbi viverra efficitur eleifend. Aenean velit mauris, faucibus et felis vitae, tempus semper eros. Suspendisse quis tincidunt sem. Quisque ut risus sagittis, convallis nibh non, varius leo. Praesent malesuada vitae ipsum et rhoncus. Aenean aliquet tortor magna, imperdiet consectetur enim lacinia non. Duis ornare urna sit amet nulla pellentesque rhoncus. Quisque tempor mollis turpis, id venenatis urna tincidunt eget.\r\n\r\nDuis sodales ex ac augue sagittis bibendum nec non lectus. Ut blandit ornare eros, et hendrerit erat ultricies eget. In vel sem eu odio imperdiet varius quis at elit. Duis varius sodales maximus. Nam quis arcu blandit, tincidunt lacus non, commodo leo. Duis dignissim tincidunt ex nec euismod. Sed placerat metus nunc. Praesent augue sapien, mollis sed bibendum in, tincidunt non mi. Praesent venenatis aliquet sodales. Duis imperdiet magna eget odio pharetra, sit amet convallis dolor iaculis. Praesent tempor libero velit, sed gravida velit pellentesque et. In hac habitasse platea dictumst.', '/images/event/38268056.png');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(128) NOT NULL,
  `name` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `name`, `address`) VALUES
(1, 'Bandar Sunway', 'Subang Jaya'),
(2, 'Glenmarie', 'Shah Alam');

-- --------------------------------------------------------

--
-- Table structure for table `rental_condition`
--

CREATE TABLE `rental_condition` (
  `rental_condition_id` int(128) NOT NULL,
  `room_id` int(128) NOT NULL,
  `rental_type` varchar(32) NOT NULL,
  `attached_bathroom` tinyint(1) NOT NULL,
  `building_type` varchar(32) NOT NULL,
  `availability` varchar(32) NOT NULL,
  `minimum_tenure` date NOT NULL,
  `furnishing` varchar(32) NOT NULL,
  `beds_in_room` int(2) NOT NULL,
  `gender_preference` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `decription` longtext NOT NULL,
  `address` varchar(256) NOT NULL,
  `location_id` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_price`
--

CREATE TABLE `room_price` (
  `room_price_id` int(128) NOT NULL,
  `room_id` int(128) NOT NULL,
  `advance_rental` decimal(10,0) NOT NULL,
  `security_deposit` decimal(10,0) NOT NULL,
  `utilities_deposit` decimal(10,0) NOT NULL,
  `keycard_deposit` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tag_id` int(128) NOT NULL,
  `room_id` int(128) NOT NULL,
  `tag_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_slider`
--
ALTER TABLE `about_slider`
  ADD PRIMARY KEY (`about_slider_id`),
  ADD KEY `location_id` (`title`);

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
-- Indexes for table `rental_condition`
--
ALTER TABLE `rental_condition`
  ADD PRIMARY KEY (`rental_condition_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `room_price`
--
ALTER TABLE `room_price`
  ADD PRIMARY KEY (`room_price_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tag_id`),
  ADD KEY `room_id` (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_slider`
--
ALTER TABLE `about_slider`
  MODIFY `about_slider_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `event_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rental_condition`
--
ALTER TABLE `rental_condition`
  MODIFY `rental_condition_id` int(128) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(128) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room_price`
--
ALTER TABLE `room_price`
  MODIFY `room_price_id` int(128) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tag_id` int(128) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `rental_condition`
--
ALTER TABLE `rental_condition`
  ADD CONSTRAINT `rental_condition_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room_price`
--
ALTER TABLE `room_price`
  ADD CONSTRAINT `room_price_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `tag`
--
ALTER TABLE `tag`
  ADD CONSTRAINT `tag_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
