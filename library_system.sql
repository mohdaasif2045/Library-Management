-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2017 at 01:20 PM
-- Server version: 5.5.45
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `book_id` varchar(50) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `book_category` varchar(50) NOT NULL,
  `no_copies` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `book_category`, `no_copies`, `status`) VALUES
('00001', 'The tail of Lam-ang', 'Filipino', '10', 'available'),
('00003', 'vb6 for dummies', 'programming', '10', 'available'),
('00002', 'php for dummies', 'programming', '10', 'available'),
('00004', 'reading fundamentals', 'english', '10', 'available'),
('00005', 'css design', 'programming', '10', 'available'),
('00006', 'geometry', 'math', '10', 'available'),
('00007', 'statistics', 'math', '10', 'available'),
('00004', 'Lam-ang', 'english', 'sample', 'available'),
('00007', 'css design', 'sample', '20', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `borrowed`
--

DROP TABLE IF EXISTS `borrowed`;
CREATE TABLE IF NOT EXISTS `borrowed` (
  `transaction_id` varchar(50) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `no_copies` varchar(50) NOT NULL,
  `fine` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

DROP TABLE IF EXISTS `borrowers`;
CREATE TABLE IF NOT EXISTS `borrowers` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `date_borrow` varchar(100) NOT NULL,
  `date_will_return` varchar(100) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `no_copies` int(20) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`transaction_id`, `id_number`, `name`, `course`, `year`, `section`, `date_borrow`, `date_will_return`, `book_title`, `no_copies`) VALUES
(5, '0001', 'Harold B. Llagono', 'BSIT', 'IV', 'A', '5-10-2012', '2012-10-06', 'The tail of Lam-ang', 10),
(7, '0107-01', 'Joe D. Basanta', 'BSIT', 'IV', 'A', '8-10-2012', '2012-10-09', 'php for dummies', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reserve_books`
--

DROP TABLE IF EXISTS `reserve_books`;
CREATE TABLE IF NOT EXISTS `reserve_books` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `date_tobe_borrow` varchar(50) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `no_copies` varchar(50) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve_books`
--

INSERT INTO `reserve_books` (`transaction_id`, `id_number`, `name`, `course`, `year`, `section`, `date_tobe_borrow`, `book_title`, `no_copies`) VALUES
(3, '00011', 'Harold B. Llagono', 'BSIT', 'IV', 'A', '2012-10-18', 'The tail of Lam-ang', '2');

-- --------------------------------------------------------

--
-- Table structure for table `returned`
--

DROP TABLE IF EXISTS `returned`;
CREATE TABLE IF NOT EXISTS `returned` (
  `transaction_id` varchar(50) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `no_copies` varchar(50) NOT NULL,
  `fine` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'administrator', 'password'),
(2, 'guest', 'guest');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
