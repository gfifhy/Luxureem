-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 05:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luxureemdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `aboutusid` int(11) NOT NULL,
  `sec1label` mediumtext NOT NULL,
  `sec1desc` mediumtext NOT NULL,
  `sec1pic1` mediumtext NOT NULL,
  `sec1pic2` mediumtext NOT NULL,
  `sec2label1` mediumtext NOT NULL,
  `sec2sublabel1` mediumtext NOT NULL,
  `sec2sublabel2` mediumtext NOT NULL,
  `sec2sublabel3` mediumtext NOT NULL,
  `sec2sublabel4` mediumtext NOT NULL,
  `sec2desc1` mediumtext NOT NULL,
  `sec2desc2` mediumtext NOT NULL,
  `sec2desc3` mediumtext NOT NULL,
  `sec2desc4` mediumtext NOT NULL,
  `sec2pic1` mediumtext NOT NULL,
  `sec2pic2` mediumtext NOT NULL,
  `sec2label2` mediumtext NOT NULL,
  `sec2desc5` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`aboutusid`, `sec1label`, `sec1desc`, `sec1pic1`, `sec1pic2`, `sec2label1`, `sec2sublabel1`, `sec2sublabel2`, `sec2sublabel3`, `sec2sublabel4`, `sec2desc1`, `sec2desc2`, `sec2desc3`, `sec2desc4`, `sec2pic1`, `sec2pic2`, `sec2label2`, `sec2desc5`) VALUES
(1, 'Patience in Beauty, Luxureem Unveiled', 'At Luxureem, we embrace the beauty of patience as the cornerstone of our philosophy. Our approach is simple yet profound – to gradually unveil and enhance your natural glow. With a commitment to the artistry of beauty, we believe in taking the time to nurture and unfold the radiance within. Luxureem is not just a brand; it\'s a journey, an experience where the grace of patience intertwines with the timeless pursuit of beauty. We invite you to explore the subtle transformation, discovering the enchanting allure that comes to life when beauty meets time with Luxureem.', 'aboutus1.png', 'aboutus2.png', 'Our Services', 'Patience', 'Artistry', 'Transformation', 'Elegance', 'Luxureem believes in the beauty of patience as the core principle of its philosophy. We take the time to nurture and unveil your natural glow gradually.', 'Committed to the artistry of beauty, Luxureem combines skill and creativity to enhance your unique features, creating an enchanting allure.', 'Luxureem offers a journey of subtle transformation, where the grace of patience meets the timeless pursuit of beauty, unveiling a captivating you.', 'Embracing elegance in every aspect, Luxureem provides an experience where beauty and time converge, resulting in a sophisticated allure.', 'services.png', 'services1.png', 'Antioxidant Properties', 'Glutathione is a powerful antioxidant that helps neutralize free radicals in the body.              Free radicals are molecules that can damage cells and contribute to aging and various health issues');

-- --------------------------------------------------------

--
-- Table structure for table `barbie`
--

CREATE TABLE `barbie` (
  `barbieid` int(255) NOT NULL,
  `barbiecat` varchar(255) NOT NULL,
  `barbiename` varchar(255) NOT NULL,
  `barbiedesc` varchar(255) NOT NULL,
  `barbiepic` varchar(255) NOT NULL,
  `barbieprice` decimal(65,2) NOT NULL,
  `sales` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barbie`
--

INSERT INTO `barbie` (`barbieid`, `barbiecat`, `barbiename`, `barbiedesc`, `barbiepic`, `barbieprice`, `sales`) VALUES
(37, 'nails', 'good nails', 'good nails', 'Logo.jpg', 23.00, 0),
(38, 'gluta', 'Hikari Drip', 'whitening', 'wired-meme-nft-brian.jpg', 2222.00, 1),
(39, 'nails', '123', '123', 'image_2024-01-12_003255216.png', 123.00, 0),
(40, 'addcat', '2223', '23232', 'image_2024-01-12_003301912.png', 333.00, 0),
(41, 'angas', '12333', '233332', 'image_2024-01-12_003339749.png', 0.00, 0),
(42, 'nails', 'weqewqe', 'wqewewq', 'image_2024-01-12_003346143.png', 2222.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cattable`
--

CREATE TABLE `cattable` (
  `catid` int(255) NOT NULL,
  `catname` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cattable`
--

INSERT INTO `cattable` (`catid`, `catname`) VALUES
(1, 'nails'),
(2, 'addcat'),
(5, 'gluta'),
(6, 'angas');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `picture`, `phonenumber`, `email`, `password`) VALUES
(1, 'Kutrapali', 'wired-meme-nft-brian.jpg', '12345678901', 'pewdy320@gmail.com', '$2y$10$nhTXSfkJfm8IAhjKyQlhke9hNJnB7jHkIV5RwY6tHJktXX2.cTlJu');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `receipt` varchar(255) NOT NULL,
  `regdate` mediumtext NOT NULL,
  `status` mediumtext NOT NULL,
  `idfront` mediumtext NOT NULL,
  `idback` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `picture`, `name`, `age`, `sex`, `phonenumber`, `address`, `email`, `password`, `date`, `service`, `receipt`, `regdate`, `status`, `idfront`, `idback`) VALUES
(9, 'Logo.jpg659ce3b8255fb0.00031588.jpg', 'Charles Tan', '26', 'male', '09996521516', '7425 kalayaan ave', 'charlesthebot@yahoo.com', '$2y$10$QRcJc1Q7vmwO8jAatgg1Z.7qCKH1S4iFTOpqRg/G1Ye7vXy1INOvq', '3000-11-11', 'Barbie Arms Service', 'wired-meme-nft-brian.jpg', '2024-01-07 10:23:22', 'Pending', 'ID-front-EN.png', 'ID-back-EN.png'),
(10, 'Florence Malinao659d1e29178ee7.80127579.jpg', 'Florence Malinao', '19', 'female', '09091003381', '7425 kalayaan ave', 'asd@sdf.com', '$2y$10$pCUu29XQKoyg5.cMKh8OVe5QZup6W7QabYFEqvJwQJQcfUSBepH9W', '', '', '', '2024-01-09 11:21:29', 'Not Verified', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `webcontent`
--

CREATE TABLE `webcontent` (
  `webid` int(255) NOT NULL,
  `webname` varchar(255) NOT NULL,
  `weblogo` varchar(255) NOT NULL,
  `webheaderpic` varchar(255) NOT NULL,
  `heroh` varchar(255) NOT NULL,
  `herop` varchar(255) NOT NULL,
  `herob` varchar(255) NOT NULL,
  `toph` varchar(255) NOT NULL,
  `topp` varchar(255) NOT NULL,
  `gallerypic1` varchar(255) NOT NULL,
  `gallerypic2` varchar(255) NOT NULL,
  `gallerypic3` varchar(255) NOT NULL,
  `gallerypic4` varchar(255) NOT NULL,
  `gallerylabel1` varchar(255) NOT NULL,
  `galleryldesc1` mediumtext NOT NULL,
  `gallerylabel2` varchar(255) NOT NULL,
  `galleryldesc2` mediumtext NOT NULL,
  `faq1` mediumtext NOT NULL,
  `faq2` mediumtext NOT NULL,
  `faq3` mediumtext NOT NULL,
  `faqa1` mediumtext NOT NULL,
  `faqa2` mediumtext NOT NULL,
  `faqa3` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `webcontent`
--

INSERT INTO `webcontent` (`webid`, `webname`, `weblogo`, `webheaderpic`, `heroh`, `herop`, `herob`, `toph`, `topp`, `gallerypic1`, `gallerypic2`, `gallerypic3`, `gallerypic4`, `gallerylabel1`, `galleryldesc1`, `gallerylabel2`, `galleryldesc2`, `faq1`, `faq2`, `faq3`, `faqa1`, `faqa2`, `faqa3`) VALUES
(1, 'Luxureem', 'logo.png', 'sec1.jpg', 'Illuminate with Luxureem\'s Gluta Drips', 'Experience the Luxureem glow. Transform with Gluta Drip sessions for a radiant new you. Book now and shine!', 'Discover Products', 'asdasdasdads', 'qweqweqew', 'photo3.png', 'photo1.png', 'photo2.png', 'photo4.png', 'Glow', 'Boost your health with Glutathione drips – powerful antioxidants straight to your system. They help your liver, make your skin glow, and keep your immune system strong. It\'s like a quick recharge for your body, personalized for what you need. Feel better, look better – try Glutathione drips for a healthier you!', 'Medical Use', 'Glutathione is sometimes used in medical settings, including intravenous administration, for conditions such as acetaminophen overdose and certain liver diseases.', 'Are Glutathione Drips safe?', 'How long does a typical Glutathione session drip lasts?', 'Are the effects of Glutathione Drips permanent?', 'When administered by qualified healthcare professionals,                   Glutathione Drips are generally considered safe. However,                   individual responses may vary, and it\'s essential to consult                   with a healthcare provider to determine suitability.', 'The duration of a Glutathione Drip session can vary but                   typically ranges from 30 minutes to an hour. The actual time                   may depend on factors such as the dosage and specific protocol                   used.', 'The effects of Glutathione Drips are often temporary, and                   maintenance sessions may be recommended to sustain the desired                   benefits. Individual responses can vary, and long-term results                   depend on factors such as lifestyle and overall health.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`aboutusid`);

--
-- Indexes for table `barbie`
--
ALTER TABLE `barbie`
  ADD PRIMARY KEY (`barbieid`);

--
-- Indexes for table `cattable`
--
ALTER TABLE `cattable`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webcontent`
--
ALTER TABLE `webcontent`
  ADD PRIMARY KEY (`webid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `aboutusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barbie`
--
ALTER TABLE `barbie`
  MODIFY `barbieid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `cattable`
--
ALTER TABLE `cattable`
  MODIFY `catid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `webcontent`
--
ALTER TABLE `webcontent`
  MODIFY `webid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
