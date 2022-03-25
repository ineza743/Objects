-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 02:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entreconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `business_id` int(11) NOT NULL,
  `f_name` varchar(120) NOT NULL,
  `l_name` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `bussiness_name` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `business_type` varchar(100) NOT NULL,
  `linkedin` varchar(600) NOT NULL,
  `instagram` varchar(600) NOT NULL,
  `twitter` varchar(600) NOT NULL,
  `details` varchar(600) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`business_id`, `f_name`, `l_name`, `email`, `phone`, `bussiness_name`, `role`, `address`, `business_type`, `linkedin`, `instagram`, `twitter`, `details`, `picture`, `password`) VALUES
(1, 'other', 'other', 'other.other@gmail.com', '0001', 'freiy', 'manager', '1 university', 'Maturity', 'glu,i', 'xfgnc mh', 'vjh,bb j,', 'none', '../view/images/businesses/avatar.png', '$2y$10$u3mYAhSc6A.nM2EkzYa2ceKQ8YQ/enAX1McsMMDoWiKdxx76WBY7e'),
(2, 'faculty', 'intern', 'faculty@intern.com', '0001jdjdk', 'hiu', 'CEO', '783st', 'Growth', 'jhfld;,vo', 'hsjd.co', 'ajshdc ', 'none', '../view/images/businesses/avatar.png', '$2y$10$7so2SRPvos6Vo6npFQLH3.qq3pYsAn.afz.4my1ZgBH6.F.Cnc3W6');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyer_id` int(11) NOT NULL,
  `buyer_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `buyer_email` varchar(150) NOT NULL,
  `passwod` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`buyer_id`, `buyer_name`, `address`, `buyer_email`, `passwod`) VALUES
(19, 'Ineza Hirwa', '1 university avenue', 'ineza.hirwa@gmail.com', 'ineza');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `buyer_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity_nbr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`buyer_id`, `product_id`, `ip_address`, `quantity_nbr`) VALUES
(19, 50, '::1', 10),
(19, 50, '::1', 10),
(19, 76, '::1', 1),
(19, 2, '::1', 2),
(19, 90, '::1', 4),
(19, 324, '::1', 2),
(19, 123, '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `category_desc` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_desc`) VALUES
(1, 'Electronics', 'electronics devices are included'),
(2, 'Fashion', 'an type of clothing.'),
(3, 'alimentation', 'it includes food, beverages, fruits, and other things to eat.'),
(4, 'Hair', 'This includes hair products and services.');

-- --------------------------------------------------------

--
-- Table structure for table `incubator`
--

CREATE TABLE `incubator` (
  `incubator_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `business_type` varchar(200) NOT NULL,
  `document` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incubator`
--

INSERT INTO `incubator` (`incubator_id`, `first_name`, `last_name`, `email`, `address`, `phone`, `occupation`, `business_type`, `document`, `password`, `details`) VALUES
(10, 'inc', 'ator', 'inc.ator@gmail.com', 'skjdl', '8938094090', 'nkf.d', 'Ideation stage', '../view/images/investor_doc/download.jfif', 'njdsnfkv s fkja', '$2y$10$SddLU6.hEPw6Kp14HSQRPOJUSnCLate9j1cbBbNV0rFwR.WY6GFey');

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

CREATE TABLE `investor` (
  `investor_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `business_type` varchar(200) NOT NULL,
  `document` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investor`
--

INSERT INTO `investor` (`investor_id`, `first_name`, `last_name`, `email`, `address`, `phone`, `occupation`, `business_type`, `document`, `password`, `details`) VALUES
(1, 'defter', 'fer', 'defter.fer@gmail.com', '1 University Ave, Berekuso', '287794389', 'Lecturer', 'idea', 'background.jpg', 'studies', '$2y$10$kehqhrfT/2jIhkKebINr8e47ItpwArqiunH7b0IckXhhdTWVMzlny'),
(2, 'Salim', 'Hirwa', 'salimhirwa4@gmail.com', 'Kigarama, Kicukiro', '787794389', 'Student', 'idea', 'background.jpg', 'studies', '$2y$10$4YZiuutxa3dPD50h5vTgbOsnwu0KvxkhFnDftY9L5yoENurk.aBsy'),
(3, 'Kareem', 'Holland', 'kareem.holland@gmail.com', '1 University Ave, Berekuso', '907794389', 'Student', 'idea', 'background.jpg', 'studies', '$2y$10$wfo81g2j4D4wtlEL6VlMPeIy3xn7AMuMXatmB3qr2jzxkePb78SOG'),
(4, 'Adjerati', 'Urusaro', 'adjeratibijouxurusaro@gmail.com', 'Kigarama', '0350618', 'consultant', 'idea', '../view/images/investor_doc/', 'I want businesses with objectives in mind', '$2y$10$aFBLbYgTNVMyuNobt50.4uQI9D1Zarksogl5pwmxzR0EfZl/cf1eS'),
(5, 'Adjera', 'Sununu', 'sununubijouxurusaro@gmail.com', 'ma', '1350618', 'consultant', 'idea', '../view/images/investor_doc/', 'I want businesses with objectives in mind', '$2y$10$GYaXXF3HLFjy05C8QiNB.uz07ahXC10HYWiEcADp1uM7naCVPEpJO'),
(6, 'corali', 'steli', 'corali.steli@gmail.com', '1 University Avenue', '80350618', 'vendor', 'idea', '../view/images/investor_doc/', 'studies', '$2y$10$HWexr7hiFNZHdd68WMmnaeh390V.oR/U97VzFyZscZV3TcIxC1aOW'),
(7, 'Sali', 'Hirw', 'salirwa4@gmail.com', 'Kiga, Kicukiro', '00794389', 'cnsultantd', 'idea', '../view/images/investor_doc/dress.jfif', 'I want businesses with objectives in mind', '$2y$10$d6Mf8tEl8IppJ602njNzp.3PvgzpxxLdQYDbO/gfh7IL4OlsxsyTG'),
(8, 'investor', 'city', 'investor.city@gmail.com', 'mbyo', '901342', 'FI', 'idea', '../view/images/investor_doc/chicago.jpg', 'I only support five businesses in a year', '$2y$10$MluqQ0QpEIxBGYvj3HOEz.IaNC3344rVIfujrLGD.ChdkOAeZlCfO'),
(9, 'math', 'kie', 'math.kei@yahoo.com', 'kenya', '90173924', 'career services', 'Growth', '../view/images/investor_doc/jamper.jpg', 'None', '$2y$10$fbhpljSaKrcBSQ1HI.hD8uAYoRn8taAkKpNOGQWZHBKM5iv0tycCO'),
(10, 'ezie', 'leg', 'ezie.leg@gmail.com', 'bugesera', '89025373', 'useless', 'Maturity', '../view/images/investor_doc/berekusious.JPG', 'I only invest in promising projects', '$2y$10$7xedQoN7KMWRVKL7DM4VruW2gTTH0T/zUM2DBKy1l.73PHNIjjVf.'),
(11, 'candidature', 'selm', 'candidature.selm@gmail.com', 'geras', '6789290', 'nkdjs', 'Decline', '../view/images/investor_doc/blouse.jpg', 'jksdjdlskldc jkdnjsndoidnm', '$2y$10$pPM29xbuVsvAVsvOEhBcQOOqA67.z8NSc5nBfcDlRy.C4tT74IkK.'),
(12, 'candidature', 'selm', 'candidature.selm@gmail.com', 'geras', '6789290', 'nkdjs', 'Decline', '../view/images/investor_doc/blouse.jpg', 'jksdjdlskldc jkdnjsndoidnm', '$2y$10$9khtyGrHVjUTfNrWGAUHde16BFlzP8qvunsJxE2Oh97Wq6ho.sZJO');

-- --------------------------------------------------------

--
-- Table structure for table `investor_opportunity`
--

CREATE TABLE `investor_opportunity` (
  `opportunity_id` int(11) NOT NULL,
  `opportunity_name` varchar(150) NOT NULL,
  `reward` int(11) NOT NULL,
  `details` varchar(400) NOT NULL,
  `deadline` timestamp NOT NULL DEFAULT current_timestamp(),
  `investor_id` int(11) NOT NULL,
  `apply` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investor_opportunity`
--

INSERT INTO `investor_opportunity` (`opportunity_id`, `opportunity_name`, `reward`, `details`, `deadline`, `investor_id`, `apply`) VALUES
(1, 'hackathon', 998090, 'there is no more info', '2022-03-25 00:00:00', 1, 'www.apply.com'),
(2, 'Nestle project', 1200, 'Every one is welcomed to aply for this ooporunity.', '2022-03-16 00:00:00', 1, 'www.apply@gmal.com'),
(3, 'managerial competition', 800000, 'apply if you think you fit!', '2022-03-16 00:00:00', 1, 'www.grek.com'),
(4, 'entrepreneurship apprenticeship', 1200, 'this opportunity is no longer accepting!', '2020-11-05 00:00:00', 1, 'www.olk.com'),
(5, 'faculty intern', 2900, 'apply to become an FI at Ashesi university', '2030-02-05 00:00:00', 1, 'www.future.com'),
(6, 'faculty ', 7800, 'apply if you think you fit!', '2018-11-05 00:00:00', 1, 'www.grek.com'),
(7, 'opporties', 209, 'This trouser has long lines on the side', '2022-02-28 00:00:00', 1, 'gjsjk@gmjs.cbdn'),
(8, 'iop', 122, 'quality opportunity', '2022-03-08 00:00:00', 1, 'www.now.com'),
(9, 'jourjy', 904, 'there is no more info', '2022-03-31 00:00:00', 1, 'www.apply@kur.com'),
(10, 'ijana', 580, 'yuuuu', '2022-04-02 00:00:00', 1, 'www.applyl.com');

-- --------------------------------------------------------

--
-- Table structure for table `messaging`
--

CREATE TABLE `messaging` (
  `message_id` int(11) NOT NULL,
  `receiver_id` int(255) NOT NULL,
  `sender_id` int(255) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messaging`
--

INSERT INTO `messaging` (`message_id`, `receiver_id`, `sender_id`, `content`) VALUES
(1, 1, 6, 'hello'),
(2, 1, 5, 'is that'),
(3, 1, 5, 'is that'),
(4, 11, 1, 'Give me  oney'),
(5, 11, 1, 'Give me  oney'),
(6, 1, 6, 'Give me  oney'),
(7, 1, 6, 'Give me  oney'),
(8, 1, 6, 'Give me  oney'),
(9, 6, 1, 'I am the one'),
(10, 6, 1, 'I am the one'),
(11, 6, 1, 'I am the one'),
(12, 6, 1, 'I am the one'),
(13, 6, 1, 'I am the one'),
(14, 6, 1, 'yoo'),
(15, 6, 1, 'pboo'),
(16, 6, 1, 'pboo'),
(17, 6, 1, 'pboo'),
(18, 6, 1, 'pboo'),
(19, 6, 11, 'pboo'),
(20, 6, 11, 'pboo'),
(21, 11, 1, 'I am confused'),
(22, 11, 1, 'I am confused'),
(23, 11, 1, 'I am confused'),
(24, 6, 1, 'I am confused'),
(25, 6, 1, 'I am confused'),
(26, 6, 3, 'I am confused'),
(27, 6, 3, 'I am confused'),
(28, 6, 3, 'hsjs'),
(29, 6, 6, 'I am happy to connect with you'),
(30, 6, 5, 'Good evening sir'),
(31, 6, 10, 'why then?'),
(32, 6, 1, 'what\'s with messages?'),
(33, 6, 9, 'make sure you follow'),
(34, 5, 10, 'because'),
(35, 5, 5, 'should we talk?'),
(36, 5, 1, 'what are you asking me?'),
(37, 5, 9, 'I was learning how to make it work'),
(38, 5, 3, 'what is your problem though?'),
(39, 8, 5, 'bite se?'),
(40, 5, 8, 'shn ni byiza pee'),
(41, 8, 5, 'ko tudaherukana se?'),
(42, 8, 5, 'okay sure'),
(43, 5, 8, 'nzaruka'),
(44, 8, 5, 'narakize'),
(45, 5, 8, 'wakize iki?'),
(46, 8, 5, 'yoo'),
(47, 5, 8, 'ni imibeshyo'),
(48, 8, 5, 'mubali'),
(49, 5, 8, 'vipi se'),
(50, 5, 8, 'for real'),
(51, 8, 5, 'yego'),
(52, 8, 5, 'what'),
(53, 8, 5, 'igiseko'),
(54, 5, 8, 'ahereye'),
(55, 8, 5, 'ngabk'),
(56, 8, 5, 'ok'),
(57, 8, 2, 'heyy'),
(58, 8, 3, 'hi holland'),
(59, 5, 8, 'are you texting holland?'),
(60, 8, 5, 'yes why'),
(61, 8, 8, 'hello'),
(62, 8, 8, 'what\'s up'),
(63, 8, 8, 'ok'),
(64, 8, 3, 'hi there'),
(65, 8, 11, 'helo'),
(66, 8, 4, 'wait what?'),
(67, 1, 4, 'I am a business woman'),
(68, 1, 10, 'I am an incubator'),
(69, 1, 5, 'please I will send money tomoorow'),
(70, 8, 4, 'is it working now?'),
(71, 8, 6, 'let\'s talk?'),
(72, 8, 12, 'hetyy'),
(73, 8, 12, 'I am a business with less funding'),
(74, 8, 11, 'yes'),
(75, 8, 11, 'what\'s '),
(76, 8, 7, 'hamuza'),
(77, 8, 7, 'wa he?'),
(78, 8, 7, 'kumfashe'),
(79, 8, 5, 'uzumirwa'),
(80, 8, 8, 'nzira iki?'),
(81, 8, 6, 'later'),
(82, 8, 6, 'what\'s up'),
(83, 8, 8, 'he'),
(84, 8, 5, 'Izina se iki?'),
(85, 8, 5, 'what are you up to?'),
(87, 1, 5, 'Thank you for your time yesterday'),
(88, 1, 6, 'what?'),
(89, 1, 6, 'please be polite atleast'),
(90, 1, 11, 'why are you sending me messages that you are confuse?'),
(91, 1, 11, 'okay isee'),
(92, 1, 4, 'okay'),
(93, 1, 5, 'please respond'),
(94, 1, 6, 'heyy');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` double NOT NULL,
  `picture` varchar(400) NOT NULL,
  `information` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `category_id`, `price`, `picture`, `information`) VALUES
(2, 'Chicago', 1, 831, '../view/images/prod_images/chicago.jpg', 'free trade policy, innsignficance of African investment in China\r\nchina related to russia ukraine attack\r\n\r\n\"China\'s aid is only a very small part of what it considers to be development engagement, which often simply means doing business deals,\" Matt Ferchen'),
(50, 'jumper', 1, 890, '../view/images/prod_images/jamper.jpg', 'Nicest Jumper.\r\naid is only a very small part of what it considers to be development engagement, which often simply means doing business deals,\" Matt Ferchen, a\r\n'),
(76, 'w', 1, 239, '../view/images/prod_images/blouse.jpg', 'thanks'),
(90, 'tshirt', 1, 890, '../view/images/prod_images/tshirt.jfif', 'best tshirt'),
(123, 'blousers', 1, 780, '../view/images/prod_images/blouse.jpg', 'jj.\r\naid is only a very small part of what it considers to be development engagement, which often simply means doing business deals,\" Matt Ferchen, a\r\n'),
(321, 'new arrivage', 1, 109, '../view/images/prod_images/background.jpg', 'this comes in doubles'),
(324, 'gert', 1, 26, '../view/images/prod_images/image.png', 'Kitktak'),
(9001, 'fruits', 3, 349, '../view/images/prod_images/prototype.jpg', 'quality fruit');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `product_id` int(11) NOT NULL,
  `Porder_id` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `Porder_id` int(11) NOT NULL,
  `porder_date` date NOT NULL,
  `buyer_name` varchar(200) NOT NULL,
  `buyer_location` varchar(200) NOT NULL,
  `order_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`business_id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buyer_id`),
  ADD UNIQUE KEY `buyer_email` (`buyer_email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `buyer_id` (`buyer_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `incubator`
--
ALTER TABLE `incubator`
  ADD PRIMARY KEY (`incubator_id`);

--
-- Indexes for table `investor`
--
ALTER TABLE `investor`
  ADD PRIMARY KEY (`investor_id`);

--
-- Indexes for table `investor_opportunity`
--
ALTER TABLE `investor_opportunity`
  ADD PRIMARY KEY (`opportunity_id`),
  ADD KEY `investor_id` (`investor_id`);

--
-- Indexes for table `messaging`
--
ALTER TABLE `messaging`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `Porder_id` (`Porder_id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`Porder_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `incubator`
--
ALTER TABLE `incubator`
  MODIFY `incubator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `investor`
--
ALTER TABLE `investor`
  MODIFY `investor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `investor_opportunity`
--
ALTER TABLE `investor_opportunity`
  MODIFY `opportunity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messaging`
--
ALTER TABLE `messaging`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`buyer_id`) REFERENCES `buyer` (`buyer_id`);

--
-- Constraints for table `investor_opportunity`
--
ALTER TABLE `investor_opportunity`
  ADD CONSTRAINT `investor_opportunity_ibfk_1` FOREIGN KEY (`investor_id`) REFERENCES `investor` (`investor_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `product_detail_ibfk_2` FOREIGN KEY (`Porder_id`) REFERENCES `product_order` (`Porder_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
