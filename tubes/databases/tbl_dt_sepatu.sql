-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 05:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_sepatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dt_sepatu`
--

CREATE TABLE `tbl_dt_sepatu` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dt_sepatu`
--

INSERT INTO `tbl_dt_sepatu` (`product_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`) VALUES
(1, 'Fauzi naeba', 1200000, 'mantap jiwa', 'SABER.jpg', 'Habis'),
(15, 'Sepatu Jelek Mahal', 5000000, 'dijual sepatu jelek tapi mahal bro hehe', '836208343_sepatujelektapimahal.jpg', 'Tersedia'),
(16, 'Sepatu Jadi jadian', 100000, 'Gak tau', '662792959_2696646767.jpg', 'Tersedia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dt_sepatu`
--
ALTER TABLE `tbl_dt_sepatu`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dt_sepatu`
--
ALTER TABLE `tbl_dt_sepatu`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
