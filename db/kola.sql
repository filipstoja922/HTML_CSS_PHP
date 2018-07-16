-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2016 at 09:35 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kola`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `fime` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_broj` int(11) NOT NULL,
  `telefon` int(11) NOT NULL,
  `lokacija` varchar(255) NOT NULL,
  `pol` varchar(255) NOT NULL,
  `kola_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `banka` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `fime`, `email`, `id_broj`, `telefon`, `lokacija`, `pol`, `kola_id`, `status`, `banka`) VALUES
(20, 'Fika', 'fika.92@hotmail.com', 123, 32423, 'ruma', 'Musko', 5, 'Dozvoljeno', 'AIK'),
(21, 'Sasa', 'sasa@gmail.com', 123, 632223, 'Zajecar', 'Muski', 0, 'Dozvoljeno', 'AIK'),
(22, 'Milan', 'milan@gmail.com', 1221, 0, 'bg', 'Muski', 0, 'Dozvoljeno', 'Inteza'),
(23, 'Milan', 'milan@gmail.com', 1221, 2323, 'bg', 'Musko', 9, 'Dozvoljeno', 'Inteza'),
(24, 'Aleks', 'aleks@gmail.com', 123, 69232, 'Nis', 'Musko', 3, 'Dozvoljeno', 'AIK'),
(25, 'Nikola', 'nikola@gmail.com', 123, 53533, 'Nis', 'Musko', 13, 'Dozvoljeno', 'AIK'),
(26, 'Rada', 'rade@gmail.com', 123, 5343, 'Nis', 'Musko', 11, 'Dozvoljeno', 'AIK'),
(27, 'Mica', 'mica@gmail.com', 123, 642323, 'Zajecar', 'Musko', 16, 'Dozvoljeno', 'AIK');

-- --------------------------------------------------------

--
-- Table structure for table `kola`
--

CREATE TABLE `kola` (
  `id` int(11) NOT NULL,
  `ime_auta` varchar(255) NOT NULL,
  `tip` varchar(255) NOT NULL,
  `slika` text NOT NULL,
  `cena_iznajmljivanja` int(11) NOT NULL,
  `kapacitet` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kola`
--

INSERT INTO `kola` (`id`, `ime_auta`, `tip`, `slika`, `cena_iznajmljivanja`, `kapacitet`, `status`) VALUES
(3, 'Harrier', 'Toyota', 'car3.jpg', 20000, 6, 'Dozvoljeno'),
(9, 'Limo', 'Opel', 'Opel.jpg', 30000, 4, 'Dozvoljeno'),
(10, 'Aventador', 'Lamborgini', 'lambo.jpg', 50000, 2, 'Dozvoljeno'),
(11, 'M3', 'BMW', 'bmw.jpg', 30000, 4, 'Dozvoljeno'),
(13, 'Megan', 'Reno', 'truecar.png', 30000, 4, 'Dozvoljeno'),
(14, 'Sportage', 'Kia', 'Kia.png', 10000, 2, 'Dozvoljeno'),
(15, 'Rav4', 'Toyota', 'TOYO.png', 2000, 4, 'Dozvoljeno'),
(16, 'Rajd', 'Rover', 'car2.jpg', 10000, 4, 'Dozvoljeno');

-- --------------------------------------------------------

--
-- Table structure for table `poruke`
--

CREATE TABLE `poruke` (
  `poruka_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `poruka` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `vreme` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poruke`
--

INSERT INTO `poruke` (`poruka_id`, `client_id`, `poruka`, `status`, `vreme`) VALUES
(8, 0, 'Jel ste primili obavestenje?', 'Unread', '2016-06-10 21:55:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `kola`
--
ALTER TABLE `kola`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poruke`
--
ALTER TABLE `poruke`
  ADD PRIMARY KEY (`poruka_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `kola`
--
ALTER TABLE `kola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `poruke`
--
ALTER TABLE `poruke`
  MODIFY `poruka_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
