-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 04:10 AM
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
  `about_slider_id` int(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_slider`
--

INSERT INTO `about_slider` (`about_slider_id`, `title`, `thumbnail`, `link`) VALUES
(2, 'Bandar Sunway', '/images/slider/slide_1.jpg', 'rooms'),
(3, 'Glenmarie', '/images/slider/slide_2.jpg', 'rooms'),
(4, 'Bandar Sunway', '/images/slider/slide_3.jpg', 'rooms'),
(5, 'Glenmarie', '/images/slider/slide_4.jpg', 'rooms'),
(6, 'Bandar Sunway', '/images/slider/slide_5.jpg', 'rooms');

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
(9, 1, 'Seet', 'e6d69d2d7f334e990309e3a320e34be041a4468f43b6fa5fbde788fade1dc756', 495361, 0, '', 'sgz@asd', '000');

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
(4, 'Rated Number 1 Choice by Sunway Students', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '/images/event/sunway.jpg'),
(5, 'Grand Opening in Mont Kiara', 'We are expanding ! \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '/images/event/ribbon.jpg'),
(6, 'How to find the most suitable accommodation for you', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '/images/event/prop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(128) NOT NULL,
  `name` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL,
  `description` longtext NOT NULL,
  `thumbnail` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `name`, `address`, `description`, `thumbnail`) VALUES
(4, 'Bandar Sunway', 'Subang Jaya', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dapibus sapien ac nisl porttitor ultrices. Ut tempor condimentum bibendum. Duis maximus enim vitae velit mollis malesuada. Integer convallis malesuada tellus, sit amet sodales nibh commodo vel. Aliquam volutpat felis et urna lacinia porta. Etiam eu libero purus. Nunc porttitor congue risus condimentum rutrum. Donec convallis pharetra aliquam. Sed non eros lacinia, finibus mi pretium, tempus nibh. Sed gravida lectus vulputate ex egestas pharetra. Sed quis nisi ullamcorper, placerat mauris at, gravida lacus.', '/images/location/g-2.png'),
(5, 'Glenmarie', 'Shah Alam', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dapibus sapien ac nisl porttitor ultrices. Ut tempor condimentum bibendum. Duis maximus enim vitae velit mollis malesuada. Integer convallis malesuada tellus, sit amet sodales nibh commodo vel. Aliquam volutpat felis et urna lacinia porta. Etiam eu libero purus. Nunc porttitor congue risus condimentum rutrum. Donec convallis pharetra aliquam. Sed non eros lacinia, finibus mi pretium, tempus nibh. Sed gravida lectus vulputate ex egestas pharetra. Sed quis nisi ullamcorper, placerat mauris at, gravida lacus.', '/images/location/g-1.png');

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
  `availability` tinyint(1) NOT NULL,
  `minimum_tenure` varchar(128) NOT NULL,
  `furnishing` varchar(32) NOT NULL,
  `beds_in_room` int(2) NOT NULL,
  `gender_preference` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental_condition`
--

INSERT INTO `rental_condition` (`rental_condition_id`, `room_id`, `rental_type`, `attached_bathroom`, `building_type`, `availability`, `minimum_tenure`, `furnishing`, `beds_in_room`, `gender_preference`) VALUES
(2, 2, 'Private Room', 1, 'Condominium', 0, '6 months', 'Fully Furnished', 1, 'Boys');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` longtext NOT NULL,
  `address` varchar(256) NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `location_id` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `name`, `description`, `address`, `thumbnail`, `location_id`) VALUES
(2, 'Jalan PJS 9/12 Single Room', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', ' 2, jalan pjs 11 ', '/images/room/g-4.JPG', 4);

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

--
-- Dumping data for table `room_price`
--

INSERT INTO `room_price` (`room_price_id`, `room_id`, `advance_rental`, `security_deposit`, `utilities_deposit`, `keycard_deposit`) VALUES
(2, 2, '500', '1000', '250', '50.00');

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
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tag_id`, `room_id`, `tag_name`) VALUES
(6, 2, 'Single room with Attached Bathroom'),
(7, 2, 'test tag 1'),
(8, 2, 'test tag 2');

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
  MODIFY `about_slider_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `admin_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rental_condition`
--
ALTER TABLE `rental_condition`
  MODIFY `rental_condition_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_price`
--
ALTER TABLE `room_price`
  MODIFY `room_price_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tag_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON UPDATE CASCADE;

--
-- Constraints for table `room_price`
--
ALTER TABLE `room_price`
  ADD CONSTRAINT `room_price_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE;

--
-- Constraints for table `tag`
--
ALTER TABLE `tag`
  ADD CONSTRAINT `tag_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
