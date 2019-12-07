-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2019 at 08:18 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kingsbakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `isFeatured` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id`, `name`, `description`, `image`, `isFeatured`) VALUES
(1, 'Brunch', 'Short description of item is placed here. It tastes great though.', NULL, 1),
(2, 'Assorted Manouishes', 'Short description of item is placed here. It tastes great though.', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `pricing` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `isFeatured` tinyint(1) NOT NULL DEFAULT 1,
  `type` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id`, `name`, `description`, `image`, `pricing`, `isFeatured`, `type`) VALUES
(1, 'Pepsi', 'Short description of item is placed here. It tastes great though.', NULL, 'Can:0.75;20 oz.:150;2 liter:2.00', 1, 'drinks'),
(2, 'Dr Pepper', 'Short description of item is placed here. It tastes great though.', NULL, 'Can:0.75;20 oz.:150;2 liter:2.00', 1, 'drinks'),
(3, 'Coke', 'Short description of item is placed here. It tastes great though.', NULL, 'Can:0.75;20 oz.:150;2 liter:2.00	', 1, 'drinks'),
(4, 'Mountain Dew', 'Short description of item is placed here. It tastes great though.', NULL, 'Can:0.75;20 oz.:150;2 liter:2.00', 1, 'drinks'),
(5, 'Crush', 'Short description of item is placed here. It tastes great though.', NULL, 'Can:0.75;20 oz.:150;2 liter:2.00', 1, 'drinks'),
(6, 'Sierra Mist', 'Short description of item is placed here. It tastes great though.', NULL, 'Can:0.75;20 oz.:150;2 liter:2.00', 1, 'drinks'),
(7, 'Diet Coke', 'Short description of item is placed here. It tastes great though.', NULL, 'Can:0.75;20 oz.:150;2 liter:2.00', 1, 'drinks'),
(8, 'Diet Pepsi', 'Short description of item is placed here. It tastes great though.', NULL, 'Can:0.75;20 oz.:150;2 liter:2.00', 1, 'drinks'),
(9, 'Cheetos Crunch Flamin Hot', 'Hot Cheetos', NULL, 'Small:0.65;Large:1.59', 1, 'snacks'),
(10, 'Granny Smith Apples', 'Some Apples', NULL, 'Ea:0.94;Per lb:1.97', 1, 'fruits'),
(11, 'Roma Tomatoes', 'Ripe', NULL, 'Ea:0.31;Per lb:1.48', 1, 'vegetables'),
(12, 'Windex Original Glass Cleaner', 'Cleans Glass', NULL, '23 fl oz.:2.97', 1, 'householditems'),
(13, 'Paper Plates', 'Solid, firm paper plates.', NULL, '30 pk:3.59;100 pk:9.99', 1, 'householditems'),
(14, 'Misc Item #1', 'Not sure what a misc item would be, so here\'s a test for it. ', NULL, 'Ea:0.99;Dozen:9.99', 1, 'misc');

-- --------------------------------------------------------

--
-- Table structure for table `meat`
--

CREATE TABLE `meat` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `pricing` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `isFeatured` tinyint(1) NOT NULL DEFAULT 1,
  `type` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `meat`
--

INSERT INTO `meat` (`id`, `name`, `description`, `image`, `pricing`, `isFeatured`, `type`) VALUES
(1, 'Steak', 'Short description of item is placed here. It tastes great though.', NULL, 'Per Lb:7.99', 1, 'beef'),
(2, 'Chicken Breast', 'Short descripiton of item is placed here. It tastes great though.', NULL, 'Per Lb:7.99', 1, 'poultry'),
(3, 'Lamb Chops', 'Short descripiton of item is placed here. It tastes great though.', NULL, 'Per Lb:7.99', 1, 'lamb');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `pricing` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `isFeatured` tinyint(1) NOT NULL DEFAULT 1,
  `type` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `image`, `pricing`, `isFeatured`, `type`) VALUES
(1, 'Zaatar', 'Short description of item is placed here. It tastes great though.	', NULL, 'Reg:1.50;Long:2.00', 1, 'manaeesh'),
(2, 'Zaatar with Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:2.50;Long:3.00', 1, 'manaeesh'),
(3, 'Zaatar with Veggies', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:2.50;Long:3.50', 1, 'manaeesh'),
(4, 'Cheese', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:2.50;Long:3.50', 1, 'manaeesh'),
(5, 'Cheese with Zaatar', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.00;Long:4.00', 1, 'manaeesh'),
(6, 'Cheese with Veggies', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.50;Long:4.50', 1, 'manaeesh'),
(7, 'Cheese with Pepperoni', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.50;Long:4.50', 1, 'manaeesh'),
(8, 'Half Cheese/Half Zaatar', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:2.50;Long:3.50', 1, 'manaeesh'),
(9, 'Meat', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:2.50;Long:3.50', 1, 'manaeesh'),
(10, 'Meat with Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.50;Long:4.50', 1, 'manaeesh'),
(11, 'Cheese with Ackawi', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.75;Long:4.75', 1, 'manaeesh'),
(12, 'Half Cheese/Half Meat', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:3.50;Long:4.50', 1, 'manaeesh'),
(13, 'Ackawi', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.00;Long:4.00', 1, 'manaeesh'),
(14, 'Ackawi with Zaatar', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.50;Long:4.50', 1, 'manaeesh'),
(15, 'Mixed Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.00;Long:4.00', 1, 'manaeesh'),
(16, 'Kafta', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:3.00;Long:4.00', 1, 'manaeesh'),
(17, 'Kafta with Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:4.00;Long:5.00', 1, 'manaeesh'),
(18, 'Soujouk', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.00;Long:4.00', 1, 'manaeesh'),
(19, 'Soujouk with Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:4.00;Long:5.00', 1, 'manaeesh'),
(20, 'Makanek', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:3.00;Long:4.00', 1, 'manaeesh'),
(21, 'Makanek with Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:4.00;Long:5.00', 1, 'manaeesh'),
(22, 'Kishik', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.00;Long:4.00', 1, 'manaeesh'),
(23, 'Veggie', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.00;Long:4.00', 1, 'manaeesh'),
(24, 'Veggie with Cheese', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:4.00;Long:5.00', 1, 'manaeesh'),
(25, 'Pizza', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.50;Long:4.50', 1, 'manaeesh'),
(26, 'Pizza with Pepperoni', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:4.50;Long:5.50', 1, 'manaeesh'),
(27, 'Veggie Pizza', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:4.50;Long:5.50', 1, 'manaeesh'),
(28, 'Spinach', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:3.00;Long:4.00', 1, 'manaeesh'),
(29, 'Spinach with Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:4.00;Long:5.00', 1, 'manaeesh'),
(30, 'Broccoli with Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.50;Long:4.50', 1, 'manaeesh'),
(33, 'Pepperoni Roll', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:3.00', 1, 'rolls'),
(34, 'Meat Roll', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:4.00', 1, 'rolls'),
(35, 'Chicken Roll', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:4.00', 1, 'rolls'),
(36, 'Chicken Shawarma Plate', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Plate:12.99', 1, 'dinnerplates'),
(37, 'Meat Shawarma Plate', 'Short description of item is placed here. It tastes great though.', NULL, 'Plate:12.99', 1, 'dinnerplates'),
(38, 'Chicken Fatoush', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Small:5.99;Medium:8.99;Large:13.99', 1, 'dinnerplates'),
(39, 'Meat Fatoush', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Small:5.99;Medium:8.99;Large:13.99', 1, 'dinnerplates'),
(40, '#1 - Meat Shawarma', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:5.99;Long:9.49', 1, 'manouwich'),
(41, '#2 - Chicken Shawarma', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:5.99;Long:9.49', 1, 'manouwich'),
(42, '#3 - Falafel', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:5.99;Long:9.49', 1, 'manouwich'),
(43, '#4 - Turkey', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:5.99;Long:9.49', 1, 'manouwich'),
(44, '#5 - Turkey & Bacon', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:6.99;Long:10.49', 1, 'manouwich'),
(45, '#6 - Turkey & Pastrami', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:6.99;Long:10.49', 1, 'manouwich'),
(46, '#7 - Chicken Bacon Ranch', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:6.99;Long:10.49', 1, 'manouwich'),
(47, '#8 - Corned Beef', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:5.99;Long:9.49', 1, 'manouwich'),
(48, '#9 - Roast Beef', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:5.99;Long:9.49', 1, 'manouwich'),
(49, '#10 - Soujouk', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:5.99;Long:9.49', 1, 'manouwich'),
(50, '#11 - Basturma', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:6.99;Long:10.49', 1, 'manouwich'),
(51, '#12 - King\'s Royal', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:8.99;Long:12.49', 1, 'manouwich'),
(52, '#13 - Kafta', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:5.99;Long:9.49', 1, 'manouwich'),
(53, '#14 - Makanek', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:5.99;Long:9.49', 1, 'manouwich'),
(54, '#15 - Tuna Melt', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:5.99;Long:9.49', 1, 'manouwich'),
(55, 'Egg & Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.25;Long:4.25', 1, 'kingsmanaeeshspecial'),
(56, 'Zaatar, Egg & Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.99;Long:4.99', 1, 'kingsmanaeeshspecial'),
(57, 'Meat, Egg & Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:4.99;Long:5.99', 1, 'kingsmanaeeshspecial'),
(58, 'Soujouk, Egg & Cheese', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:4.99;Long:5.99', 1, 'kingsmanaeeshspecial'),
(59, 'Mananek, Egg & Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:4.99;Long:5.99', 1, 'kingsmanaeeshspecial'),
(60, 'Veggie, Egg & Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:4.99;Long:5.99', 1, 'kingsmanaeeshspecial'),
(61, 'Pepperoni, Egg & Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:4.25;Long:5.25', 1, 'kingsmanaeeshspecial'),
(62, 'Broccoli, Egg & Cheese', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:4.99;Long:5.99', 1, 'kingsmanaeeshspecial'),
(63, 'Kafta, Egg & Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:4.99;Long:5.99', 1, 'kingsmanaeeshspecial'),
(64, 'Feta Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.25;Long:4.25', 1, 'kingsmanaeeshspecial'),
(65, 'Ackawi with Honey', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.99;Long:4.99', 1, 'kingsmanaeeshspecial'),
(66, 'Cheese with Honey', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:3.25;Long:4.25', 1, 'kingsmanaeeshspecial'),
(67, 'Zaatar', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:0.75;Dozen:9.00', 1, 'smallmanaeesh'),
(68, 'Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:1.00;Dozen:12.00', 1, 'smallmanaeesh'),
(69, 'Meat', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:1.50;Dozen:15.00', 1, 'smallmanaeesh'),
(70, 'Ackawi', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:1.50;Dozen:15.00', 1, 'smallmanaeesh'),
(71, 'Kishik', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:1.50;Dozen:15.00', 1, 'smallmanaeesh'),
(72, 'Kafta', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:1.50;Dozen:15.00', 1, 'smallmanaeesh'),
(73, 'Soujouk', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:1.50;Dozen:15.00', 1, 'smallmanaeesh'),
(74, 'Makanek', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:1.50;Dozen:15.00', 1, 'smallmanaeesh'),
(75, 'Veggie', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:1.50;Dozen:15.00', 1, 'smallmanaeesh'),
(76, 'Pizza', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:1.50;Dozen:15.00', 1, 'smallmanaeesh'),
(77, 'Spinach', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:1.50;Dozen:15.00', 1, 'smallmanaeesh'),
(78, 'Broccoli with Cheese', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:1.50;Dozen:15.00', 1, 'smallmanaeesh'),
(79, 'Egg & Cheese', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:1.50;Dozen:15.00', 1, 'smallmanaeesh'),
(80, 'Pizza Mini', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:0.55;Dozen:6.00', 1, 'minipies'),
(81, 'Meat Mini', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:0.55;Dozen:6.00', 1, 'minipies'),
(82, 'Spinach Mini', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:0.55;Dozen:6.00', 1, 'minipies'),
(83, 'Cheese Mini', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:0.55;Dozen:6.00', 1, 'minipies'),
(84, 'Lebna & Zaatar Mini', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:0.55;Dozen:6.00', 1, 'minipies'),
(85, 'Meat & Onion Mini', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:0.85;Dozen:9.00', 1, 'minipies'),
(86, 'Broccoli & Cheese Mini', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:0.85;Dozen:9.00', 1, 'minipies'),
(87, 'Feta Cheese Mini', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:0.85;Dozen:9.00', 1, 'minipies'),
(88, 'Cheese Croissant', 'Short description of item is placed here. It tastes great though.', NULL, 'Single:1.50;Dozen:16.00', 1, 'croissant'),
(89, 'Zaatar Croissant', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Single:1.50;Dozen:16.00', 1, 'croissant'),
(90, 'Strawberry Croissant', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Single:1.50;Dozen:16.00', 1, 'croissant'),
(91, 'Chocolate Croissant', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Single:1.50;Dozen:16.00', 1, 'croissant'),
(92, 'Spinach Croissant', 'Short description of item is placed here. It tastes great though.', NULL, 'Single:2.00;Dozen:22.00', 1, 'croissant'),
(93, 'Nutella Croissant', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Single:2.50;Dozen:27.00', 1, 'croissant'),
(94, 'Croissant Dog', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Single:1.00;Dozen:10.00', 1, 'croissant'),
(95, 'Pepperoni Croissant', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Single:1.00;Dozen:10.00', 1, 'croissant'),
(96, 'Fool', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Small:5.99;Large:11.99', 1, 'breakfastplates'),
(97, 'Msabaha', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Small:5.99;Large:11.99', 1, 'breakfastplates'),
(98, 'Ballelah', 'Short description of item is placed here. It tastes great though.', NULL, 'Small:5.99;Large:11.99', 1, 'breakfastplates'),
(99, 'Hummus with Meat', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Small:7.99;Large:11.99', 1, 'breakfastplates'),
(100, 'Fateh', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Small:6.99', 1, 'breakfastplates'),
(101, 'Hummus', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Small:3.50;Med:4.50;Large:6.00', 1, 'sides'),
(102, 'Baba Ghanoush', 'Short description of item is placed here. It tastes great though.', NULL, 'Small:3.50;Med:4.50;Large:6.00', 1, 'sides'),
(103, 'Fatoush', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Small:3.50;Med:4.50;Large:6.00', 1, 'sides'),
(104, 'Tabbouleh', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Small:3.50;Med:4.50;Large:6.00', 1, 'sides'),
(105, 'French Fries', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Small:3.50;Med:4.50;Large:6.00', 1, 'sides'),
(106, 'Soup', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Price Per Lb:2.99', 1, 'sides'),
(107, 'Falafel', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:0.50;Dozen:4.99', 1, 'sides'),
(108, 'Grape Leaves', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:0.65;Dozen:6.99', 1, 'sides'),
(109, 'Chicken Shawarma', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.49;Combo:7.49', 1, 'sandwiches'),
(110, 'Meat Shawarma', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.49;Combo:7.49', 1, 'sandwiches'),
(111, 'Falafel', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.49;Combo:7.49', 1, 'sandwiches'),
(112, 'Kefta', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:3.99;Combo:7.99', 1, 'sandwiches'),
(113, 'Soujouk', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.99;Combo:7.99', 1, 'sandwiches'),
(114, 'Shish Tawook', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.99;Combo:7.99', 1, 'sandwiches'),
(115, 'Spicy Potato', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:2.99;Combo:6.99', 1, 'sandwiches'),
(116, 'Makanek', 'Short description of item is placed here. It tastes great though.', NULL, 'Reg:3.99;Combo:7.99', 1, 'sandwiches'),
(117, 'Meaqleh', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.99;Combo:7.99', 1, 'sandwiches'),
(118, 'Grape Leaves', 'Short description of item is placed here. It tastes great though.\r\n', NULL, 'Reg:3.99;Combo:7.99', 1, 'sandwiches');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'Ahmed', 'Saeed', 'saeedal', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meat`
--
ALTER TABLE `meat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `meat`
--
ALTER TABLE `meat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
