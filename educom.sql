-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 02:39 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educom`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `p_id` varchar(254) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `user_id` varchar(254) NOT NULL,
  `qty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(2, '2', '::1', '1', '3'),
(24, '1', '::1', '1', '1'),
(25, '2', '::1', '-1', '1'),
(26, '1', '::1', '-1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(254) NOT NULL,
  `pro_cat` varchar(500) NOT NULL,
  `pro_name` varchar(500) NOT NULL,
  `pro_modal` varchar(500) NOT NULL,
  `fake_price` varchar(100) NOT NULL,
  `real_price` varchar(100) NOT NULL,
  `pro_desc` varchar(2000) NOT NULL,
  `pro_image` varchar(1000) NOT NULL,
  `keyword` varchar(1000) NOT NULL,
  `availability` varchar(400) NOT NULL,
  `warranty` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_cat`, `pro_name`, `pro_modal`, `fake_price`, `real_price`, `pro_desc`, `pro_image`, `keyword`, `availability`, `warranty`) VALUES
(1, '1', 'Arduino Uno', 'Arduino Uno R3', '400', '340', 'This board is based on and fully compatible with Arduino Uno R3. In addition to all the features of the previous board, the Uno now uses an ATmega16U2 instead of the 8U2 found on the Uno (or the FTDI found on previous generations). This allows for faster transfer rates and more memory. No drivers needed for Linux or Mac (inf file for Windows is needed and included in the Arduino IDE), and the ability to have the Uno show up as a keyboard, mouse, joystick, etc.', 'arduino_r3.jpg', 'arduino uno r3 microcontroller', 'In Stock', 'None'),
(2, '1', 'Arduino Neno', 'Arduino Neno', '300', '250', 'The Nano V3 built on the ATmega168 minicontroller (16MHz) has a small size that can be used with the model board for solderless wiring (breadboard).The board uses the CH340G chip as the converter UART-USB.  \r\nThe Nano V3 can be powered via a miniUSB port (up to 500mA). The external power supply 6-12V does not regulate the output VIN or 5V external power supply regulation output 5V. The power supply automatically selects the maximum voltage value. ', 'arduino_neno.jpg', 'Arduino neno micro controller', 'In Stock', 'None'),
(3, '1', 'Arduino Mega', 'Arduino Mega', '950', '850', 'It is a modernized version of the classic Arduino UNO R3 board. Full integration of a microcontroller ATmega328 and a Wi-Fi chip ESP8266 with 32 MB memory on one board. All modules can work together or individually. Each of the microcontrollers has led for connecting peripheral sensors and modules. A convenient solution for developing new projects that require Wi-Fi.', 'arduino_mega.jpg', 'Arduino Mega micro controller', 'In Stock', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `date` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `contact`, `gender`, `password`, `ip`, `date`) VALUES
(1, 'Jugal Kishor', 'sutharjugalkishor@gmail.com', '8890209205', 'male', 'jksuthar', '::1', 'date');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
