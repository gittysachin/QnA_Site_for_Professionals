-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 07:09 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stackoverflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetail`
--

CREATE TABLE `admindetail` (
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindetail`
--

INSERT INTO `admindetail` (`email`, `password`) VALUES
('sachinjangid774@gmail.com', 'sachin123');

-- --------------------------------------------------------

--
-- Table structure for table `ansupvote`
--

CREATE TABLE `ansupvote` (
  `anscode` varchar(111) NOT NULL,
  `upvote` int(11) NOT NULL,
  `user` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `code` varchar(111) NOT NULL,
  `qncode` varchar(111) NOT NULL,
  `answer` text NOT NULL,
  `upvote` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`code`, `qncode`, `answer`, `upvote`, `status`) VALUES
('CHINOQR3', 'EFLOT179', 'No. But you just need a good mentor.', 0, 1),
('FGHILZ16', 'EFLOT179', 'lajfl jajf hahglhao\r\n', 0, 1),
('BDEFJKW5', 'GKQS6890', 'UIDUI GAFGU AG', 0, 1),
('ABKLPWY5', 'GKQS6890', 'a dauig fugadha sdas', 0, 1),
('JMQZ5780', 'GKQS6890', 'f ghjsg jh gaksdkjas ', 0, 1),
('EFHQVZ30', 'GKQS6890', 'fg hasgdkg sdah\r\n asd adsdj\r\na sd', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category` varchar(111) NOT NULL,
  `code` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category`, `code`) VALUES
('C++', 'MTUY%260_'),
('JAVA', 'FNPVWZ28_'),
('PYTHON', 'CGLOPQX2_'),
('DJANGO-MODELS', 'DKORTY40_'),
('BOOTSTRAP-4', 'AKOQV^&9_'),
('DATA-MANIPULATION', 'DHRXZ^26_'),
('JQUERY', 'FHVWZ167_');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `email` varchar(1111) NOT NULL,
  `interest` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`email`, `interest`) VALUES
('sachinjangid832@gmail.com', 'JAVA'),
('sachinjangid832@gmail.com', 'PYTHON');

-- --------------------------------------------------------

--
-- Table structure for table `qnupvote`
--

CREATE TABLE `qnupvote` (
  `qncode` varchar(111) NOT NULL,
  `upvote` int(11) NOT NULL,
  `user` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qnupvote`
--

INSERT INTO `qnupvote` (`qncode`, `upvote`, `user`) VALUES
('EFLOT179', 0, 'sachinjangid832@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `quecategory`
--

CREATE TABLE `quecategory` (
  `catname` varchar(111) NOT NULL,
  `qncode` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quecategory`
--

INSERT INTO `quecategory` (`catname`, `qncode`) VALUES
('JAVA', 'EFLOT179'),
('PYTHON', 'EFLOT179'),
('JAVA', 'GKQS6890'),
('PYTHON', 'GKQS6890'),
('C++', 'ACGP3560'),
('JAVA', 'ACGP3560'),
('C++', 'ACDIJZ37'),
('PYTHON', 'ACDIJZ37'),
('C++', 'BDFINPR2'),
('DJANGO-MODELS', 'BCJLMXZ9'),
('DATA-MANIPULATION', 'BCJLMXZ9'),
('PYTHON', 'AJKWXY35'),
('DJANGO-MODELS', 'AJKWXY35'),
('BOOTSTRAP-4', 'AJKWXY35'),
('JAVA', 'EKNOPQ39'),
('BOOTSTRAP-4', 'EKNOPQ39');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `code` varchar(111) NOT NULL,
  `question` varchar(11111) NOT NULL,
  `qdesc` varchar(11111) NOT NULL,
  `upvote` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`code`, `question`, `qdesc`, `upvote`, `status`, `email`) VALUES
('EFLOT179', 'Is java difficult to learn?', 'Tell me all the aspect of this question.', 0, 1, 'sachinjangid832@gmail.com'),
('GKQS6890', 'What is Java?', 'Why are you asking this question?', 0, 1, 'sachinjangid832@gmail.com'),
('ACGP3560', 'What are you thinking of..', 'Are you talking about programming?', 0, 1, 'sachinjangid832@gmail.com'),
('ACDIJZ37', 'Hello Friends Coffee pilo...', 'What are you doing right now?\r\n', 0, 1, 'sachinjangid832@gmail.com'),
('BDFINPR2', 'ahsid qq ', ' QIOD UHIFFIU QQ', 0, 0, 'sachinjangid832@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `sn` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `mobile` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `warning` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`sn`, `name`, `email`, `mobile`, `password`, `warning`, `status`) VALUES
(1, 'Sachin Jangid', 'sachinjangid832@gmail.com', '87646876464', 'sachin123', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
