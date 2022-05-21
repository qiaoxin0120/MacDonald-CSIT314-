-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 08:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csit314`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `menuID` varchar(45) DEFAULT NULL,
  `menuName` varchar(45) DEFAULT NULL,
  `menuPrice` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `customerTable` int(11) DEFAULT NULL,
  `totalPrice` int(11) DEFAULT NULL,
  `status` varchar(15) DEFAULT 'Not Done'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderID`, `menuID`, `menuName`, `menuPrice`, `quantity`, `order_date`, `customerTable`, `totalPrice`, `status`) VALUES
(1, 'M001', 'Parsley and polenta bread', '$12', '3', '2022-01-01 10:00:00', 1, 36, 'Not Done'),
(2, 'M029', 'Parmesan and black pepper ciabatta', '$19', '1', '2022-01-01 10:10:00', 2, 19, 'Not Done'),
(3, 'M001', 'Parsley and polenta bread', '$12', '1', '2022-01-01 11:10:00', 3, 12, 'Not Done'),
(4, 'M100', 'Aubergine and rice bread', '$20', '1', '2022-01-01 11:45:00', 4, 20, 'Not Done'),
(5, 'M089', 'Pepper and falafel toastie', '$14', '2', '2022-01-01 12:11:00', 1, 24, 'Not Done'),
(6, 'M003', 'Pepper and mushroom sausages', '$20', '2', '2022-01-01 12:15:00', 2, 40, 'Not Done'),
(7, 'M035', 'Lettuce and onion toastie', '$19', '3', '2022-01-01 12:30:00', 4, 57, 'Not Done'),
(8, 'M017', 'Flaxseed and loaf', '$11', '3', '2022-01-01 13:15:00', 3, 33, 'Not Done'),
(9, 'M038', 'Pork and cheddar toastie', '$18', '1', '2022-01-01 13:44:00', 6, 18, 'Not Done'),
(10, 'M035', 'Lettuce and onion toastie', '$19', '1', '2022-01-01 13:50:00', 5, 19, 'Not Done'),
(11, 'M089', 'Pepper and falafel toastie', '$14', '3', '2022-01-01 14:02:00', 3, 42, 'Not Done'),
(12, 'M014', 'Yeast and date bread', '$25', '2', '2022-01-01 16:14:00', 1, 50, 'Not Done'),
(13, 'M089', 'Pepper and falafel toastie', '$14', '2', '2022-01-01 16:30:00', 2, 28, 'Not Done'),
(14, 'M028', 'Mint and sesame sausages', '$14', '1', '2022-01-01 17:01:00', 6, 14, 'Not Done'),
(15, 'M014', 'Yeast and date bread', '$25', '1', '2022-01-01 18:44:00', 3, 25, 'Not Done'),
(16, 'M082', 'Hazelnut and currant loaf', '$19', '2', '2022-01-01 19:10:00', 4, 38, 'Not Done'),
(17, 'M006', 'Egg and cucumber toastie', '$30', '1', '2022-01-01 19:20:00', 2, 30, 'Not Done'),
(18, 'M030', 'Parmesan and cheese bread', '$14', '1', '2022-01-01 19:44:00', 4, 14, 'Not Done'),
(19, 'M100', 'Aubergine and rice bread', '$20', '1', '2022-01-01 20:15:00', 5, 20, 'Not Done'),
(20, 'M006', 'Egg and cucumber toastie', '$30', '1', '2022-01-02 10:00:00', 6, 30, 'Not Done'),
(21, 'M089', 'Pepper and falafel toastie', '$14', '2', '2022-01-02 16:30:00', 1, 28, 'Not Done'),
(22, 'M089', 'Pepper and falafel toastie', '$14', '1', '2022-01-02 18:44:00', 2, 14, 'Not Done'),
(23, 'M012', 'Chicken and peppercorn toastie', '$25', '1', '2022-01-03 19:10:00', 4, 25, 'Not Done'),
(24, 'M035', 'Lettuce and onion toastie', '$19', '1', '2022-01-04 11:10:00', 2, 19, 'Not Done'),
(25, 'M083', 'Squash and tofu burgers', '$29', '2', '2022-01-04 13:50:00', 1, 58, 'Not Done'),
(26, 'M019', 'Turkey and crayfish bagel', '$27', '3', '2022-01-04 19:20:00', 6, 81, 'Not Done'),
(27, 'M035', 'Lettuce and onion toastie', '$19', '2', '2022-01-05 13:50:00', 4, 38, 'Not Done'),
(28, 'M019', 'Turkey and crayfish bagel', '$27', '3', '2022-01-06 16:30:00', 3, 81, 'Not Done'),
(29, 'M085', 'Black pepper and sultana bread', '$17', '1', '2022-01-07 11:45:00', 2, 17, 'Not Done'),
(30, 'M085', 'Black pepper and sultana bread', '$17', '1', '2022-01-08 12:11:00', 4, 17, 'Not Done'),
(31, 'M085', 'Black pepper and sultana bread', '$17', '1', '2022-01-09 14:02:00', 5, 17, 'Not Done'),
(32, 'M098', 'Pepper and chicken panini', '$23', '1', '2022-01-10 19:20:00', 4, 23, 'Not Done'),
(33, 'M097', 'Pepper and spelt loaf', '$25', '1', '2022-01-10 20:01:00', 1, 25, 'Not Done'),
(34, 'M006', 'Egg and cucumber toastie', '$30', '1', '2022-01-14 11:31:00', 2, 30, 'Not Done'),
(35, 'M098', 'Pepper and chicken panini', '$23', '1', '2022-01-14 14:45:00', 6, 23, 'Not Done'),
(36, 'M001', 'Parsley and polenta bread', '$12', '1', '2022-01-19 12:30:00', 4, 12, 'Not Done'),
(37, 'M088', 'Steak and black pepper toastie', '$11', '2', '2022-01-19 14:35:00', 3, 22, 'Not Done'),
(38, 'M033', 'Weetabix and rice loaf', '$30', '2', '2022-01-19 14:50:00', 2, 60, 'Not Done'),
(39, 'M090', 'Turkey and falafel panini', '$20', '1', '2022-01-20 13:50:00', 5, 20, 'Not Done'),
(40, 'M014', 'Yeast and date bread', '$25', '2', '2022-01-20 14:15:00', 4, 50, 'Not Done'),
(41, 'M096', 'Chickpea and kipper toastie', '$13', '1', '2022-01-20 16:20:00', 2, 13, 'Not Done'),
(42, 'M013', 'Weetabix and bread', '$23', '1', '2022-01-20 18:50:00', 4, 23, 'Not Done'),
(43, 'M088', 'Steak and black pepper toastie', '$11', '1', '2022-01-20 19:20:00', 3, 11, 'Not Done'),
(44, 'M002', 'Brie and apple toastie', '$12', '1', '2022-01-21 11:45:00', 1, 12, 'Not Done'),
(45, 'M019', 'Turkey and crayfish bagel', '$27', '1', '2022-01-21 12:10:00', 2, 27, 'Not Done'),
(46, 'M029', 'Parmesan and black pepper ciabatta', '$19', '2', '2022-01-21 12:15:00', 3, 38, 'Not Done'),
(47, 'M033', 'Weetabix and rice loaf', '$30', '1', '2022-01-21 12:40:00', 5, 30, 'Not Done'),
(48, 'M097', 'Pepper and spelt loaf', '$25', '1', '2022-01-21 14:20:00', 6, 25, 'Not Done'),
(49, 'M026', 'Brie and apple bagel', '$26', '1', '2022-01-21 14:44:00', 4, 26, 'Not Done'),
(50, 'M090', 'Turkey and falafel panini', '$20', '1', '2022-01-21 15:12:00', 3, 20, 'Not Done'),
(51, 'M022', 'Onion and cheese bagel', '$23', '2', '2022-01-21 15:23:00', 2, 46, 'Not Done'),
(52, 'M093', 'Bacon and buffalo burgers', '$25', '2', '2022-01-21 16:32:00', 1, 50, 'Not Done'),
(53, 'M030', 'Parmesan and cheese bread', '$14', '1', '2022-01-21 16:52:00', 4, 14, 'Not Done'),
(54, 'M033', 'Weetabix and rice loaf', '$30', '1', '2022-01-21 17:15:00', 2, 30, 'Not Done'),
(55, 'M033', 'Weetabix and rice loaf', '$30', '1', '2022-01-21 17:32:00', 3, 30, 'Not Done'),
(56, 'M091', 'Grouse and cucumber bagel', '$14', '1', '2022-01-21 17:45:00', 4, 14, 'Not Done'),
(57, 'M019', 'Turkey and crayfish bagel', '$27', '1', '2022-01-21 19:15:00', 6, 27, 'Not Done'),
(58, 'M002', 'Brie and apple toastie', '$12', '1', '2022-01-21 19:32:00', 2, 12, 'Not Done'),
(59, 'M002', 'Brie and apple toastie', '$12', '2', '2022-01-21 20:10:00', 4, 24, 'Not Done'),
(60, 'M029', 'Parmesan and black pepper ciabatta', '$19', '1', '2022-01-22 10:12:00', 5, 19, 'Not Done'),
(61, 'M022', 'Onion and cheese bagel', '$23', '1', '2022-01-22 10:31:00', 6, 23, 'Not Done'),
(62, 'M093', 'Bacon and buffalo burgers', '$25', '1', '2022-01-22 10:51:00', 1, 25, 'Not Done'),
(63, 'M091', 'Grouse and cucumber bagel', '$14', '1', '2022-01-22 11:15:00', 2, 14, 'Not Done'),
(64, 'M030', 'Parmesan and cheese bread', '$14', '2', '2022-01-22 11:24:00', 3, 28, 'Not Done'),
(65, 'M019', 'Turkey and crayfish bagel', '$27', '1', '2022-01-22 13:44:00', 5, 27, 'Not Done'),
(66, 'M026', 'Brie and apple bagel', '$26', '1', '2022-01-22 13:15:00', 6, 26, 'Not Done'),
(67, 'M022', 'Onion and cheese bagel', '$23', '1', '2022-01-22 13:22:00', 4, 23, 'Not Done'),
(68, 'M011', 'Limpa and chocolate bread', '$19', '2', '2022-01-22 13:45:00', 2, 38, 'Not Done'),
(69, 'M011', 'Limpa and chocolate bread', '$19', '1', '2022-01-22 13:52:00', 1, 19, 'Not Done'),
(70, 'M005', 'Polenta and fish pizza', '$20', '1', '2022-01-22 15:03:00', 5, 20, 'Not Done'),
(71, 'M005', 'Polenta and fish pizza', '$20', '1', '2022-01-22 15:49:00', 6, 20, 'Not Done'),
(72, 'M026', 'Brie and apple bagel', '$26', '1', '2022-01-22 17:23:00', 4, 26, 'Not Done'),
(73, 'M018', 'Crayfish and grouse ciabatta', '$13', '1', '2022-01-22 19:12:00', 5, 13, 'Not Done'),
(74, 'M018', 'Crayfish and grouse ciabatta', '$13', '2', '2022-01-23 11:45:00', 4, 26, 'Not Done'),
(75, 'M021', 'Rosemary and garlic bread', '$16', '1', '2022-01-23 13:15:00', 2, 16, 'Not Done'),
(76, 'M005', 'Polenta and fish pizza', '$20', '2', '2022-01-23 15:22:00', 1, 40, 'Not Done'),
(77, 'M022', 'Onion and cheese bagel', '$23', '1', '2022-01-23 17:40:00', 6, 23, 'Not Done'),
(78, 'M026', 'Brie and apple bagel', '$26', '1', '2022-01-23 18:12:00', 4, 26, 'Not Done'),
(79, 'M100', 'Aubergine and rice bread', '$20', '1', '2022-01-23 20:22:00', 2, 20, 'Not Done'),
(80, 'M020', 'Steak and egg bagel', '$19', '1', '2022-01-24 10:30:00', 5, 19, 'Not Done'),
(81, 'M013', 'Weetabix and bread', '$23', '2', '2022-01-24 11:12:00', 6, 46, 'Not Done'),
(82, 'M003', 'Pepper and mushroom sausages', '$20', '1', '2022-01-24 12:40:00', 2, 20, 'Not Done'),
(83, 'M010', 'Cocoa and bread', '$21', '2', '2022-01-24 14:13:00', 4, 42, 'Not Done'),
(84, 'M030', 'Parmesan and cheese bread', '$14', '2', '2022-01-24 14:45:00', 3, 28, 'Not Done'),
(85, 'M031', 'Potato and squash bread', '$14', '1', '2022-01-24 15:12:00', 1, 14, 'Not Done'),
(86, 'M026', 'Brie and apple bagel', '$26', '2', '2022-01-24 17:24:00', 3, 52, 'Not Done'),
(87, 'M006', 'Egg and cucumber toastie', '$30', '1', '2022-01-24 18:21:00', 2, 30, 'Not Done'),
(88, 'M031', 'Potato and squash bread', '$14', '1', '2022-01-24 20:11:00', 5, 14, 'Not Done'),
(89, 'M020', 'Steak and egg bagel', '$19', '1', '2022-01-25 11:41:00', 2, 19, 'Not Done'),
(90, 'M010', 'Cocoa and bread', '$21', '1', '2022-01-25 13:21:00', 2, 21, 'Not Done'),
(91, 'M017', 'Flaxseed and loaf', '$11', '2', '2022-01-25 13:50:00', 4, 22, 'Not Done'),
(92, 'M088', 'Steak and black pepper toastie', '$11', '1', '2022-01-25 14:02:00', 5, 11, 'Not Done'),
(93, 'M088', 'Steak and black pepper toastie', '$11', '1', '2022-01-26 16:22:00', 4, 11, 'Not Done'),
(94, 'M093', 'Bacon and buffalo burgers', '$25', '1', '2022-01-26 19:41:00', 3, 25, 'Not Done'),
(95, 'M090', 'Turkey and falafel panini', '$20', '2', '2022-01-27 12:45:00', 2, 40, 'Not Done'),
(96, 'M093', 'Bacon and buffalo burgers', '$25', '2', '2022-01-28 15:15:00', 6, 50, 'Not Done'),
(97, 'M017', 'Flaxseed and loaf', '$11', '1', '2022-01-29 18:42:00', 6, 11, 'Not Done'),
(98, 'M003', 'Pepper and mushroom sausages', '$20', '1', '2022-01-30 14:15:00', 1, 20, 'Not Done'),
(99, 'M012', 'Chicken and peppercorn toastie', '$25', '1', '2022-01-31 12:17:00', 1, 25, 'Not Done'),
(100, 'M096', 'Chickpea and kipper toastie', '$13', '2', '2022-01-31 15:52:00', 2, 26, 'Not Done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `menuID_idx` (`menuID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `menuID` FOREIGN KEY (`menuID`) REFERENCES `menu` (`idMenu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
