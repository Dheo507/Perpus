-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 08:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_category` varchar(100) NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`book_id`, `book_name`, `book_category`, `book_price`, `book_author`, `book_image`) VALUES
(1, 'Ilmu Pengetahuan Alam', 'Pelajaran', 50000, 'Dr. Erlangga', 'images/ipa.jpg'),
(2, 'Cooking time', 'Masak', 40000, 'Cheff Master', 'images/masak.jpg'),
(3, 'Buku sukses', 'motivasi', 50000, 'Jack Ma', 'images/motivasi.jpg'),
(5, 'Keluarga SUPER IRIT', 'Komik', 30000, 'hendri', 'images/komik.jpg'),
(6, 'Ilmu Pengetahuan Sosial', 'Pelajaran', 50000, 'Dr. Erlangga', 'images/ips.jpg'),
(7, 'Pintar Masak', 'Masak', 40000, 'Arnold', 'images/masakk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_verifikasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_address`, `user_phone`, `user_password`, `user_verifikasi`) VALUES
(1, 'sdfsd', 'sdadsa@dsfsd', 'sdfsf', '423423', '123', 0),
(9, 'dasd', 'asdasdasd@yahoo', 'asd', '21312', '123', 0),
(10, 'dheo', 'dheo.6699@ski.sch.id', 'Serdam', '08123434543', '123', 0),
(11, 'andrian', 'andrian.chen@yahoo.com', 'asdasdasd', '0828222', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
