-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 04:09 PM
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
-- Database: `museum`
--

-- --------------------------------------------------------

--
-- Table structure for table `artifact`
--

CREATE TABLE `artifact` (
  `Artifact_id` int(11) NOT NULL,
  `Dept_ID` int(11) DEFAULT NULL,
  `Title` varchar(30) NOT NULL DEFAULT 'Unnamed',
  `Date_acquired` date DEFAULT NULL,
  `Description` varchar(300) DEFAULT NULL,
  `Artist_ID` varchar(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artifact`
--

INSERT INTO `artifact` (`Artifact_id`, `Dept_ID`, `Title`, `Date_acquired`, `Description`, `Artist_ID`, `status`) VALUES
(1, 10, 'DAMAYANTI', '2011-01-05', 'Damayanti by Raja Ravi Varma is his most expensive artwork. The scene depicted in this painting is Damayanti, engrossed in thoughts of Nala and being fanned by her attendant Keshini.', '11', 'DISPLAYING'),
(2, 10, 'THE STARRY NIGHT', '2012-03-05', 'Vincent van Gogh painted this master piece in June 1889, it depicts the view from the east-facing window of his asylum room at Saint-Rémy-de-Provence, just before sunrise, with the addition of an imaginary village.', '12', 'DISPLAYING'),
(3, 10, 'MADRI', '2011-03-12', 'Madri painted by the famous Indian artist Raja Ravi Varma, is a beautiful portrait of a lady from Maharashtra, dressed traditionally holding a plate full of fruits', '11', 'DISPLAYING'),
(4, 10, 'THE LAST SUPPER', '2013-03-12', 'The Last Supper covers an end wall of the dining hall at the monastery of Santa Maria delle Grazie in Milan, Italy. The theme was a traditional one for refectories, although the room was not a refectory at the time that Leonardo painted it.', '15', 'DISPLAYING'),
(5, 10, 'Shakuntala - Looks of Love', '2011-03-12', 'Shakuntala - Looks of Love is an epic painting by the celebrated Indian painter, Raja Ravi Varma depicts Shakuntala, an important character of Mahabaratha, pretending to remove a thorn from her foot, while actually looking for her husband/lover, Dushyantha, while her friends call her bluff. In Hindu', '11', 'NOT DISPLAYED'),
(6, 20, 'THE IMMORTAL MOMENT', '2013-02-05', 'These sculptures Neeraj Gupta follows the logic of Indian aesthetic (rasa, bhava, symmetry, ornamentation, philosophical text), as well as the Indic image making techniques. This work is thus a convincing continuation of the foregoing vigorous art forms. After an intuitive as well as intellective gr', '14', 'DISPLAYING'),
(7, 20, 'RABINDRANATH TAGORE', '2013-12-05', 'The sculpture was done a year before Rabindranath’s death at a time when World War II was raging and the poet was particularly distressed by the scale of the global conflict.', '16', 'DISPLAYING'),
(8, 20, 'DAWN OF CONCIOUSNESS', '2011-11-09', 'Neeraj Gupta’s Dawn of Consciousness, a sculpture resembling a human figure, made of white cement and oil paints. It had circular textures as its skin, depicting nature and chaos.', '14', 'DISPLAYING'),
(9, 20, 'THE THINKER', '2014-11-09', 'The scuplture is depicting one of deep thought and contemplation, and the statue is often used as an image to represent philosophy.', '13', 'NOT DISPLAYED'),
(10, 20, 'BOATMEN', '2013-12-10', 'Boatmen playfully depicts swarming fishermen, young and old, struggling with their traditional fishing net and their unimpressive bounty. The dynamic lyricism of hatched net and rhythmic figures exudes movement as if these figures are entangled in an ecstatic dance around their ensnared catch.', '13', 'DISPLAYING'),
(12, 10, 'VIILAGE EN FETE', '2014-05-31', 'asdfghjklkjhgvbjhv', '11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `Artist_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Born` varchar(30) DEFAULT NULL,
  `Died` varchar(30) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`Artist_ID`, `Name`, `Born`, `Died`, `Phone`) VALUES
(11, 'RAJA RAVI VARMA', '29 April 1848', '2 October 1906', 1234567890),
(12, 'VINCENT VAN GOGH', '30 March 1853', '29 July 1890', 2147483647),
(13, 'MEERA MUKHERJEE', '1923', '1998', 2147483647),
(14, 'NEERAJ GUPTA', '1969', NULL, 2147483647),
(15, 'LEONARDO DA VINCI', '15 April 1452', '2 May 1519', 2147483647),
(16, 'RAMKINKAR BAJI', '25 May 1906', '2 August 1980', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `number_of_tickets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ticket_id`, `user_id`, `date`, `name`, `phone`, `number_of_tickets`) VALUES
(1, 5, '2023-01-17', 'jos', 1234567890, 4),
(2, 1, '2023-01-16', 'keerthana', 1234567890, 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dept_ID` int(11) NOT NULL,
  `dName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept_ID`, `dName`) VALUES
(10, 'PAINTINGS'),
(20, 'HISTORICAL ARTIFACTS AND SCULPTURES');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `name`, `email`, `message`) VALUES
(1, 'jos', 'jos@cs.com', 'It was a great visit');

-- --------------------------------------------------------

--
-- Table structure for table `ualogin`
--

CREATE TABLE `ualogin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pnumber` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ualogin`
--

INSERT INTO `ualogin` (`id`, `name`, `email`, `pnumber`, `address`, `password`, `user_type`) VALUES
(1, 'keer', 'kee@abc.com', 1234567678, 'S P road', 'abcd', 'user'),
(2, 'Harsha', 'har@cmr.com', 1234509876, 'Vartur', 'cmr@123', 'admin'),
(3, 'abc', 'abcd@12.com', 1234543267, 'VV Puram', 'abc123', 'user'),
(4, 'jo', 'jo@cs.comm', 1234543210, 'MAHA', '12345', 'user'),
(5, 'jos', 'jos@cs.com', 1234567890, 'ojn', '123456', 'user'),
(6, 'ma', 'say@123', 987654321, 'poiu', '123456', 'admin'),
(7, 'jom', 'jom@cs.com', 1234567890, 'awertyy', '12345', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artifact`
--
ALTER TABLE `artifact`
  ADD PRIMARY KEY (`Artifact_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`Artist_ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dept_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `ualogin`
--
ALTER TABLE `ualogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artifact`
--
ALTER TABLE `artifact`
  MODIFY `Artifact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `Artist_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Dept_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ualogin`
--
ALTER TABLE `ualogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
