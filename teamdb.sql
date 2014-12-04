-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2014 at 06:42 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teamdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `communications`
--

CREATE TABLE IF NOT EXISTS `communications` (
`id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `position` text NOT NULL,
  `program` text NOT NULL,
  `growup` text NOT NULL,
  `favEco` text NOT NULL,
  `cereal` text NOT NULL,
  `bucket` text NOT NULL,
  `facts` text NOT NULL,
  `profileImage` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `communications`
--

INSERT INTO `communications` (`id`, `firstName`, `lastName`, `position`, `program`, `growup`, `favEco`, `cereal`, `bucket`, `facts`, `profileImage`) VALUES
(1, 'Yvonne', 'Jin', 'Business Events Lead', 'Business Administration with a concentration in Marketing and Brand Communications', 'Mermaid or a Baker', 'The ability to learn about the technical side and how much support the business and technical side had for one another to make a successful team', 'Cinnamon Toast Crunch', 'â€¢ Visit the 7 Wonders of the world\r\nâ€¢ Visit Love padlocks on Pont des Arts, Paris\r\nâ€¢ Visit The Maritimes', 'Love to be involved in philanthropy projects and very family oriented', 'images/profile7.jpg'),
(2, 'Anton', 'Kabanov', 'Strategy and Marketing', 'Mechanical Engineering 4A', 'A Car Designer', 'The potential for innovation', 'Sausage with Eggs', 'Drive an F1, have a drink with Jeremy Clarkson, skydiving with a wing suit in Norway.', 'If I set a goal, I never give up on it. Get bored really easily â€“ need to keep myself active.', 'images/profile1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projectmanagement`
--

CREATE TABLE IF NOT EXISTS `projectmanagement` (
`id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `position` text NOT NULL,
  `program` text NOT NULL,
  `growup` text NOT NULL,
  `favEco` text NOT NULL,
  `cereal` text NOT NULL,
  `bucket` text NOT NULL,
  `facts` text NOT NULL,
  `profileImage` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `projectmanagement`
--

INSERT INTO `projectmanagement` (`id`, `firstName`, `lastName`, `position`, `program`, `growup`, `favEco`, `cereal`, `bucket`, `facts`, `profileImage`) VALUES
(4, 'Daniel', 'van Lanen', 'Project Manager', 'Chemical Engineering', 'Too many different things', 'Random lunch breaks', 'Bulletproof Coffee', 'Visit all 7 continents, Be fluent in 6 languages, Do a bike tour of Europe.', 'Wish I could be barefoot all the time, Have 6 siblings', 'images/'),
(5, 'Daniel', 'van Lanen', 'Project Manager', 'Chemical Engineering', 'Too many different things', 'Random lunch breaks', 'Bulletproof Coffee', 'Visit all 7 continents, Be fluent in 6 languages, Do a bike tour of Europe.', 'Wish I could be barefoot all the time, Have 6 siblings', 'images/'),
(6, 'Daniel', 'van Lanen', 'Project Manager', 'Chemical Engineering', 'Too many different things', 'Random lunch breaks', 'Bulletproof Coffee', 'Visit all 7 continents, Be fluent in 6 languages, Do a bike tour of Europe.', 'Wish I could be barefoot all the time, Have 6 siblings', 'images/phpFA2D.tmp'),
(7, 'Daniel', 'van Lanen', 'Project Manager', 'Chemical Engineering', 'Too many different things', 'Random lunch breaks', 'Bulletproof Coffee', 'Visit all 7 continents, Be fluent in 6 languages, Do a bike tour of Europe.', 'Wish I could be barefoot all the time, Have 6 siblings', 'images/daniel.JPG'),
(8, 'Brian', 'Xu', 'Development Officer', 'Master of Business Administration', 'Be an inventor', 'Opportunity to learn new skills and immediately apply them, whilst receiving continuous feedback.', 'Coffee + Dunkinâ€™ Donuts', 'Skydiving in Dubai, Macchiato in Italy, Attempt to max a Bugatti Veyron on the Autobahn', 'I have a passion for photography and a love for exotic cars.', 'images/'),
(9, 'Oluwabukola', 'Oluwatobi Fasubaa', 'Human Resources Lead', 'Economics', 'a Banker', 'Being in the bay with the technical team.', 'Special K Almond and Vanilla', 'To travel the world, write a book and start a charity organization.', 'Iâ€™m Nigerian and I love leopard print.\r\nme in a small percentage of the world population. Significantly boosts my ego!', 'images/IMG_6958.JPG'),
(10, 'SALMAN', 'RANA', 'INTEGRATION LEAD', 'HONOURS ECONOMICS AND FINANCIAL MANAGEMENT', 'Supermanâ€™s Sidekick', 'University backed start-up working with leaders in automotive industry.  Despite all this, having autonomy to do what we think will win us the competition', 'Coco-Puffs (I think they only have Nesquik in North America)', 'Live on a Boat for a summer, Learn Mandarin, Name a Street or Town', 'Known to be able to grow pretty bad ass moustaches, Left handed and an identical twin, which puts', 'images/profile8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `technical`
--

CREATE TABLE IF NOT EXISTS `technical` (
`id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `position` text NOT NULL,
  `program` text NOT NULL,
  `growup` text NOT NULL,
  `favEco` text NOT NULL,
  `cereal` text NOT NULL,
  `bucket` text NOT NULL,
  `facts` text NOT NULL,
  `profileImage` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `technical`
--

INSERT INTO `technical` (`id`, `firstName`, `lastName`, `position`, `program`, `growup`, `favEco`, `cereal`, `bucket`, `facts`, `profileImage`) VALUES
(1, 'Ben', 'Gaffney', 'Engineering Manager', 'Masterâ€™s of Applied Science, Mechanical Engineering', 'A firefighter', 'Being able to work with the entire vehicle and seeing a design go from initial conceptual ideas to something that is fabricated, tested, and installed in the car.', 'Vector', '1) Travel the Vietnamese coast by motorcycle\r\n2) Cross the country by car\r\n3) Win EcoCAR', '1) Car nut\r\n2) Eager for new challenges and experiences', 'images/'),
(2, 'Thomas', 'Abdallah', 'Innovations Team Lead', 'Electronics Systems Engineering', 'Race car driver', 'Getting something to work for the first time after countless 4AM+ nights.', 'Coffee', 'Work on a World Championship winning Formula 1 team, see every continent, step foot in every ocean.', 'Borderline obsessive Automotive & Motorsport enthusiast, world class grilled cheese maker.', 'images/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `communications`
--
ALTER TABLE `communications`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectmanagement`
--
ALTER TABLE `projectmanagement`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical`
--
ALTER TABLE `technical`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `communications`
--
ALTER TABLE `communications`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `projectmanagement`
--
ALTER TABLE `projectmanagement`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `technical`
--
ALTER TABLE `technical`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
