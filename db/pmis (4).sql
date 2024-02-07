-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2024 at 07:35 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmis`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int NOT NULL,
  `activity_name` varchar(200) NOT NULL,
  `activity_date` date NOT NULL,
  `club_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `activity_name`, `activity_date`, `club_id`) VALUES
(1, 'Fan Meeting', '2023-10-11', 1),
(2, 'Enhypen Concert', '2023-11-18', 2),
(3, 'Streaming Music Video', '2023-09-09', 3),
(4, 'Video Call with Enhypen', '2023-12-25', 4),
(5, 'Purchasing Digital and Physical Album', '2023-10-25', 5),
(6, 'Voting in Music Video', '2023-09-09', 6),
(7, 'Create and Share Fan Content', '2023-09-20', 7),
(8, 'Fan Project at Concert', '2023-11-30', 8),
(9, 'Fan Contest', '2023-12-12', 9),
(10, 'Promote Comebacks and Debuts', '2024-01-01', 10),
(11, 'Song Cover Competition', '2023-12-02', 11),
(12, 'Themed Virtual Parties', '2023-08-04', 12),
(13, 'Engene Book Club', '2023-08-20', 13),
(14, 'Q&A Sessions', '2023-09-13', 14),
(15, 'Charity Events', '2023-10-01', 15);

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_id` int NOT NULL,
  `club_name` varchar(200) NOT NULL,
  `club_owner` varchar(200) NOT NULL,
  `club_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `club_owner`, `club_type`) VALUES
(1, 'Enhypen Global', 'Korea', 'Fans Club'),
(2, 'Enhypen Malaysia', 'Malaysia', 'Fans Club');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_studid` int NOT NULL,
  `contact_desc` longtext NOT NULL,
  `contact_email` varchar(150) NOT NULL,
  `contact_phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_studid`, `contact_desc`, `contact_email`, `contact_phone`) VALUES
(1, 'Zarin Zalikha', 2030, 'Fighting guys!', 'zarr@gmail.com', '0196784523'),
(2, 'Jang Wonyoung', 2189, 'Stay calm guys!', 'wonyoung@gmail.com', '0112456518'),
(3, 'Winter', 2067, 'Lets\' be badass!', 'winter@gmail.com', '0114537890'),
(4, 'Ningning', 2059, 'We can do it!', 'ningning@gmail.com', '0113604875'),
(5, 'Sakura', 2188, 'Dreams big!', 'sakura@gmail.com', '0179806070'),
(6, 'Miyeon', 2090, 'Together we rise!', 'miyeon@gmail.com', '0199687235'),
(7, 'Rose', 2171, 'Stay determined!', 'rose@gmail.com', '017567170'),
(8, 'Jisoo', 2999, 'Let\'s be a queen!', 'jisoo@gmail.com', '0199878998'),
(9, 'Minji', 2505, 'We come back stronger!', 'minji@gmail.com', '019546455'),
(10, 'Yunjin', 2230, 'We conquer the world!', 'yunjin@gmail.com', '0145689004'),
(11, 'Karina', 2230, 'Everything is possible!', 'karina@gmail.com', '0124356778'),
(12, 'Kazuha', 3303, 'I love them!', 'kazuha@gmail.com', '0134713737'),
(13, 'Chaewon', 1011, 'Cutest being!', 'chaewon@gmail.com', '011789011'),
(14, 'Eunchae', 4234, 'Enhypen Cool!', 'eunchae@gmail.com', '0143455564'),
(15, 'Yuna', 8800, 'Pretty cool!', 'yuna@gmail.com', '0183646778');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `gender`, `username`, `password`) VALUES
(1, 'Mohd Zafian', 'Mohd Zawawi', 'zaffian@gmail.com', 'male', 'zaff', '123'),
(2, 'Zarin', 'Mohd Zani', 'zarinzalikha@gmail.com', 'female', 'zarr', '123'),
(3, 'Ain', 'Abdullah', 'ainsyaf@gmail.com', 'female', 'ayen', '123'),
(4, 'Amalin Eliana', 'Wan Zulman', 'amalinn@gmail.com', 'female', 'malin', '123'),
(5, 'Jungwon', 'Yang', 'jungwon@gmail.com', 'male', 'jungwon', '123'),
(6, 'Heeseung', 'Lee', 'heeseung@gmail.com', 'male', 'heeseung', '123'),
(7, 'Jay', 'Park', 'jay@gmail.com', 'male', 'jay', '123'),
(8, 'Jake', 'Sim', 'jake@gmail.com', 'male', 'jake', '123'),
(9, 'Sunghoon', 'Park', 'sunghoon@gmail.com', 'male', 'sunghoon', '123'),
(10, 'Sunoo', 'Kim', 'sunoo@gmail.com', 'male', 'sunoo', '123'),
(11, 'Riki', 'Nishimura', 'niki@gmail.com', 'male', 'niki', '123'),
(12, 'Winter', 'Kim', 'winter@gmail.com', 'female', 'winter', '123'),
(13, 'Jennie', 'Kim', 'jennie@gmail.com', 'female', 'jennie', '123'),
(14, 'Jungkook', 'Jeon', 'jungkook@gmail.com', 'male', 'jungkook', '123'),
(15, 'Jimin', 'Park', 'jimin@gmail.com', 'male', 'jimin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
