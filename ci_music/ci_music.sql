-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2022 at 02:23 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_music`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lagu`
--

DROP TABLE IF EXISTS `tbl_lagu`;
CREATE TABLE IF NOT EXISTS `tbl_lagu` (
  `lagu_id` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  `lagu_title` varchar(255) NOT NULL,
  `lagu_artis` varchar(255) NOT NULL,
  `lagu_genre` varchar(255) NOT NULL,
  `lagu_sub_genre` varchar(255) NOT NULL,
  `lagu_record_label` varchar(255) NOT NULL,
  `lagu_nama_produksi` varchar(255) NOT NULL,
  `lagu_tahun_produksi` year NOT NULL,
  `lagu_pertama_tanggal_rilis` date NOT NULL,
  `lagu_tanggal_rilis` date NOT NULL,
  `lagu_lirik` varchar(255) NOT NULL,
  `lagu_deskripsi` text NOT NULL,
  `lagu_status` varchar(1) NOT NULL,
  `lagu_created_at` datetime NOT NULL,
  `lagu_update_at` datetime NOT NULL,
  `lagu_filename_album` varchar(255) NOT NULL,
  `lagu_link_lirik` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`lagu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_lagu`
--

INSERT INTO `tbl_lagu` (`lagu_id`, `user_id`, `lagu_title`, `lagu_artis`, `lagu_genre`, `lagu_sub_genre`, `lagu_record_label`, `lagu_nama_produksi`, `lagu_tahun_produksi`, `lagu_pertama_tanggal_rilis`, `lagu_tanggal_rilis`, `lagu_lirik`, `lagu_deskripsi`, `lagu_status`, `lagu_created_at`, `lagu_update_at`, `lagu_filename_album`, `lagu_link_lirik`) VALUES
('P-1368249096', 2, 'Hip Hop Song', 'Eminem', 'Hip Hop Song', 'Dub step Style', 'Eminem -  Mocking Bird', 'Mocking Studio', 2001, '2001-03-09', '2001-06-09', 'Eminem - Mocking Bird', 'Eminem - Mocking Bird', '0', '2022-12-09 18:44:15', '0000-00-00 00:00:00', '48930.jpg', 'liriklagu-1670586256.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `user_akses` int NOT NULL,
  `user_status` int NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_akses`, `user_status`) VALUES
(1, 'Tuanku Imam Bonjol', 'admin@gmail.com', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 1, 1),
(2, 'Muhammad Hatta', 'user@gmail.com', '3941682be12c0cafa9f7575160bf548254898fa2f4d27974405fd603', 2, 1),
(3, 'Stepanus Janu', 'kitoyu22@gmail.com', '2cdf7af4fc08d47c62a87de507b9f71d645142690083c5e29a3d22a7', 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
