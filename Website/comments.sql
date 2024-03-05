-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 07:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comments`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(64) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_agent` varchar(256) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `ip_address`, `date`, `user_agent`, `comments`) VALUES
(7, 'NURSHAHIRAN SUFYAN MUHAMMAD NOOR', '2021122091@student.uitm.edu.my', '192.168.245.1', '2023-07-21 20:30:30', 'Dalvik/2.1.0 (Linux; U; Android 13; sdk_gphone64_x86_64 Build/TE1A.220922.010)', 'Road Issues Report at Jalan Lompat Pagar 13/37, Shah Alam, Selangor'),
(8, 'NURSHAHIRAN SUFYAN MUHAMMAD NOOR', '2021122091@student.uitm.edu.my', '192.168.245.1', '2023-07-21 20:32:20', 'Dalvik/2.1.0 (Linux; U; Android 13; sdk_gphone64_x86_64 Build/TE1A.220922.010)', 'Illegal Waste Disposal Report at Jalan Sungai Jati, Klang, Selangor'),
(9, 'yan', 'syahiran19987@gmail.com', '192.168.245.1', '2023-07-22 10:55:08', 'Dalvik/2.1.0 (Linux; U; Android 11; sdk_gphone_x86 Build/RSR1.201013.001)', 'Masalah jalan berlubang di kuala kangsar ');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image_name`, `author`, `publish_date`) VALUES
(2, 'Malaysian road maintenance plans', 'Malaysia has road maintenance plans for Pahang State. The work will improve existing road links and also repair or \r\nreplace structures damaged by flooding. A number of temporary bailey type bridges will be installed to replace damaged bridges.\r\n\r\nA budget of US$91 million has been set for the work. However, $227 million is being budgeted for further works to improve the federal road network in Pahang State.', 'dreamstime_m_8989738 (1).png', 'https://www.worldhighways.com/wh9/news/malaysian-road-maintenance-plans', '2023-05-04'),
(7, 'Works ministry needs RM3.4 billion to repair road problem in malaysia', 'The works ministry says it needs an allocation of RM3.4 billion to repair damaged federal roads throughout Peninsular Malaysia, reports Bernama. According to works minister Datuk Seri Fadillah Yusof, the funds will be used for resurfacing, adding another layer or building new roads, with the works expected to be completed by 2023.\r\n\r\n“We are aware that a lot of priorities have to be considered before the allocation is given, which in some cases, is insufficient like the RM68 million required to repair federal road FT004 of the East-West Highway. We are not blaming the ministry of finance but that is the challenge we are facing. However, we will find ways to improve the situation in the short and long terms,” he said.\r\n\r\n“My ministry has identified the roads, not just in Perak but throughout Peninsular Malaysia, that need to be repaired after five or seven years as the original layer could no longer cope with the traffic volume. Imagine the condition of the roads if these were built 40 years ago like in Gerik,” he added.\r\n\r\nFadillah explained that in most cases, the short-term measures taken by his ministry is to resurface the road before building another layer or a new road at the identified damaged stretches of the federal roads. According to the works ministry, there are over 17,830 km federal roads throughout the country up to now, including in Sabah and Sarawak.', 'Badroad.jpg', 'Gerard Lye', '2023-06-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
