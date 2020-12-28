-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 04:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmatech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_number`) VALUES
(6, 'Showmen Purkayasta', 'showmen88@gmail.com', '112233', '01797081596'),
(7, 'Muntasir Chowdhury', 'muntasir99@gmail.com', '112233', '01711737190'),
(19, 'Soumitra Chakrabartee', 'shuvo@gmail.com', '123123', '01745696945');

-- --------------------------------------------------------

--
-- Table structure for table `appoint_info`
--

CREATE TABLE `appoint_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `doctor` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoint_info`
--

INSERT INTO `appoint_info` (`id`, `name`, `email`, `phone`, `date`, `doctor`, `status`) VALUES
(1, 'Soumitra', 'soumitra.jr@gmail.com', '01745696945', '2020-12-12', '1', 1),
(6, 'Puja ', 'puja76@gmail.com', '01790135287', '2020-12-10', '2', 1),
(7, 'Showmen Purkayasta', 'purkayasthashowmen@gmail.com', '01797081596', '2020-12-11', '1', 1),
(8, 'Sohag Das Rahul', 'rahul25@gmail.com', '01789564925', '2020-12-13', '3', 1),
(9, 'Sohag Das Rahul', 'sdsd@gmaiil.com', '01788565069', '2020-12-13', '1', 1),
(10, 'Amit Deb', 'amit16@gmail.com', '01625478960', '2020-12-15', '1', 1),
(11, 'Dhiman Dash', 'dash77@gmail.com', '01711737190', '2020-12-15', '3', 0),
(12, 'Shuvra Paul', 'paul96@gmail.com', '01622565069', '2020-12-15', '2', 0),
(16, 'Shibashish Debnath', 'shiba69@gmail.com', '01756206918', '2020-12-17', '3', 0),
(17, 'Jamila Khantun', 'jamila@gmail.com', '01745696945', '2020-12-17', '2', 0),
(18, 'Shanchita Roy', 'royshn55@gmail.com', '01966552233', '2020-12-22', '2', 0),
(19, 'Wasiur Rahman', 'wasirrahman@gmail.com', '01322556653', '2020-12-23', '3', 0),
(20, 'Shojib Roy', 'royshojib@gmail.com', '013698565565', '2020-12-25', '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `cnt_id` int(11) NOT NULL,
  `cnt_name` varchar(30) NOT NULL,
  `cnt_email` varchar(50) NOT NULL,
  `cnt_number` varchar(11) NOT NULL,
  `cnt_msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`cnt_id`, `cnt_name`, `cnt_email`, `cnt_number`, `cnt_msg`) VALUES
(5, 'Muntasir Moin', 'moin12@gmail.com', '01797081596', 'Order Medicine '),
(6, 'Vaskor', 'vaskor@gmail.com', '01788565069', 'Need ambulence'),
(7, 'Shuvra Paul', 'paul96@gmail.com', '0625962659', 'Ami appointment book disilam,kintu amake date janano hoy akn o'),
(8, 'Ruslan Ahmed', 'ruslan@gmail.com', '01829162659', 'Need Ambulence \r\naddress: Dariyapara -13/A'),
(9, 'Evan paul', 'evanpaul33@gmail.com', '01978562563', 'Need Neutak 5 pack'),
(10, 'Shahub uddin', 'shahubuddin@gmail.com', '01356585925', 'Thanks for you\'r fast delivery ');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_list`
--

CREATE TABLE `medicine_list` (
  `medicine_id` int(255) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `medicine_generic_name` varchar(255) NOT NULL,
  `medicine_strength` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_list`
--

INSERT INTO `medicine_list` (`medicine_id`, `medicine_name`, `medicine_generic_name`, `medicine_strength`, `price`) VALUES
(1, 'Abentel Tablet', 'Albendazole', '20mg', '70'),
(3, 'Agoxin Tablet ', 'Digoxin bss', '40mg', '120'),
(4, 'Beclovan Tablet', 'Baclofenzx', '43g', '65'),
(5, 'Clocard Tablet', 'Clopidogrel', '5mg', '45'),
(6, 'Dualvir Tabletd', 'Ledipasvir+Sofosbuvir', '20mg', '100'),
(7, 'Etovan-60 Tablet', 'Etoricoxib', '40mg', '120'),
(12, 'Napa', 'Square', '10mg', '20'),
(16, 'Revotril', 'Beximco Pharma', '8mg', '40'),
(17, 'Etorix', 'SK-F Pharma', '8mg', '80'),
(18, 'Comet', 'Beximco Pharma', '20mg', '80'),
(19, 'Ace Plus', 'Square Pharma', '10mg', '40'),
(20, 'Bitacore', 'Square Pharma', '20mg', '80'),
(24, 'Ecospirin', 'Square Pharma', '8mg', '40'),
(25, 'Amdocol Plus', 'Beximco Pharma', '40mg', '120'),
(26, 'Atova', 'Beximco Pharma', '20mg', '65'),
(27, 'Azmasol', 'Beximco Pharma', '40mg', '140'),
(28, 'Betapro', 'Beximco Pharma', '20mg', '75'),
(29, 'Colbox', 'Beximco Pharma', '5mg', '85'),
(30, 'Diactin', 'Beximco Pharma', '40mg', '55'),
(31, 'Dextrim', 'Beximco Pharma', '10mg', '40'),
(32, 'Exovate', 'Beximco Pharma', '15mg', '40'),
(33, 'Fillmet ', 'Beximco Pharma', '10mg', '60'),
(34, 'Flubex', 'Beximco Pharma', '40mg', '90'),
(35, 'Glipita M', 'Beximco Pharma', '10mg', '65'),
(36, 'Hemofix', 'Beximco Pharma', '20mg', '70'),
(37, 'Iprasol', 'Beximco Pharma', '10mg', '45'),
(38, 'Jardian', 'Beximco Pharma', '10mg', '105'),
(39, 'Koloride', 'Beximco Pharma', '30mg', '150'),
(40, 'Lospan ', 'Beximco Pharma', '20mg', '90'),
(41, 'Megtrim', 'Square Pharma', '20mg', '155'),
(42, 'Napa Extra', 'Beximco Pharma', '40mg', '40'),
(43, 'Osmosol', 'Beximco Pharma', '20mg', '55'),
(44, 'Prudex', 'Beximco Pharma', '10mg', '75'),
(45, 'Q-Rash', 'Beximco Pharma', '40mg', '175'),
(46, 'Ribox ', 'Square Pharma', '40mg', '150'),
(47, 'Synroid', 'SK-F Pharma', '20mg', '85'),
(48, 'Tuspel', 'SK-F Pharma', '20mg', '55'),
(49, 'Tolmus', 'SK-F Pharma', '20mg', '60'),
(50, 'Ural-K', 'SK-F Pharma', '20mg', '70'),
(51, 'Vasolux', 'SK-F Pharma', '40mg', '95'),
(52, 'Xiodolac', 'Beximco Pharma', '20mg', '85'),
(53, 'Zymet', 'SK-F Pharma', '20mg', '55'),
(54, 'Fona Plus', 'Square Pharma', '5mg', '50'),
(55, 'Virux Tablet', 'Square Pharma', '20mg', '100'),
(56, 'Eslorix', 'Square Pharma', '20mg', '75'),
(57, 'Almex', 'Square Pharma', '20mg', '60'),
(58, 'Geston', 'Square Pharma', '20mg', '100'),
(59, 'Trypitin', 'Square Pharma', '10mg', '50'),
(60, 'Camlosart', 'Square Pharma', '40mg', '95'),
(61, 'Apsol', 'Square Pharma', '8mg', '45'),
(62, 'Moxaclav ', 'Square Pharma', '10mg', '55'),
(63, 'Anzitor', 'Beximco Pharma', '10mg', '65'),
(64, 'Carva-75', 'SK-F Pharma', '30mg', '90'),
(65, 'Zimax', 'Square Pharma', '40mg', '300'),
(66, 'Betameson', 'Square Pharma', '20mg', '50'),
(67, 'Neurolin', 'Square Pharma', '10mg', '100'),
(68, 'Nexum', 'Square Pharma', '20mg', '75'),
(69, 'Neotak', 'Square Pharma', '300mg', '45');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_medicine`
--

CREATE TABLE `purchase_medicine` (
  `id` int(11) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `buyer_contact` varchar(255) NOT NULL,
  `patient_prescrip` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `buyer_address` varchar(255) NOT NULL,
  `buyer_medicine` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_medicine`
--

INSERT INTO `purchase_medicine` (`id`, `buyer_name`, `buyer_contact`, `patient_prescrip`, `date`, `buyer_address`, `buyer_medicine`, `status`) VALUES
(11, 'Muntasir Moin', 'moin22@gmail.com', 'images/prescription/prescription33.gif', '2020-12-23', 'Munshi Para,Sylhet', 'Neutak,Etorix', 1),
(12, 'Shahub Uddin ', 'shahubuddin@gmail.com', 'images/prescription/prescripsion1.jpg', '2020-12-24', '13-A Sobujbag,Shamshernager ', 'Atova -1\r\nAzmaso-2l', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appoint_info`
--
ALTER TABLE `appoint_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`cnt_id`);

--
-- Indexes for table `medicine_list`
--
ALTER TABLE `medicine_list`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `purchase_medicine`
--
ALTER TABLE `purchase_medicine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `appoint_info`
--
ALTER TABLE `appoint_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `cnt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `medicine_list`
--
ALTER TABLE `medicine_list`
  MODIFY `medicine_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `purchase_medicine`
--
ALTER TABLE `purchase_medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
