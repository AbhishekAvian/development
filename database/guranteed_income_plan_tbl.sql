-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2023 at 04:58 AM
-- Server version: 10.3.37-MariaDB-log-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdjjxe_avivadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `guranteed_income_plan_tbl`
--

CREATE TABLE `guranteed_income_plan_tbl` (
  `id` int(11) NOT NULL,
  `enquiry_type` enum('0','1','2','3','4') NOT NULL DEFAULT '0' COMMENT '0=>child Proposition, 1=>Saving Plan, 2 =>Retirement Plan, 3=>Term Insurance, 4=> Group Insurance Plan',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `location_code` varchar(255) DEFAULT NULL,
  `plan_type` varchar(255) DEFAULT NULL,
  `annual_income` varchar(255) DEFAULT NULL,
  `posted_ip` varchar(255) DEFAULT NULL,
  `posted_date_hrs` datetime DEFAULT NULL,
  `posted_date` date DEFAULT NULL,
  `posted_url` varchar(255) DEFAULT NULL,
  `compaign_code` varchar(255) DEFAULT '0',
  `compaign_name` varchar(255) DEFAULT NULL,
  `compaign_type` varchar(255) DEFAULT '0',
  `utm_source` varchar(255) DEFAULT '0',
  `utm_medium` varchar(255) DEFAULT '0',
  `utm_compaign` varchar(255) DEFAULT '0',
  `utm_term` varchar(255) DEFAULT NULL,
  `utm_content` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `guranteed_income_plan_tbl`
--

INSERT INTO `guranteed_income_plan_tbl` (`id`, `enquiry_type`, `name`, `email`, `phone`, `location`, `location_code`, `plan_type`, `annual_income`, `posted_ip`, `posted_date_hrs`, `posted_date`, `posted_url`, `compaign_code`, `compaign_name`, `compaign_type`, `utm_source`, `utm_medium`, `utm_compaign`, `utm_term`, `utm_content`, `token`) VALUES
(1, '1', 'Abhishek', 'abhishekt@avian.com', '9504617430', '', 'Chennai', NULL, '7-10', '106.210.100.156', '2023-02-14 15:22:00', '2023-02-14', 'https://webdev24x7.com/aviva-signature-guranteed-income-plan/?utm_source=testing&utm_medium=Search&utm_campaign=ULIP_SIP_PLAN&utm_content=test_content&utm_term=term_test', '0', NULL, '0', 'testing', 'Search', 'ULIP_SIP_PLAN', 'term_test', 'test_content', '5478115823');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guranteed_income_plan_tbl`
--
ALTER TABLE `guranteed_income_plan_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guranteed_income_plan_tbl`
--
ALTER TABLE `guranteed_income_plan_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
