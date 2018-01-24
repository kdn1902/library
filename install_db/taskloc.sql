-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2017 at 06:35 PM
-- Server version: 5.6.31
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskloc`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` mediumint(9) NOT NULL,
  `name` char(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(1, 'Jazmyn Lowe'),
(2, 'Freddy Mayer'),
(3, 'Mike Johnston'),
(4, 'Roman Reynolds'),
(5, 'Mrs. Cassandra Johns PhD'),
(6, 'Norwood Beer'),
(7, 'Daisha Mertz'),
(8, 'Dr. Victor Mosciski'),
(9, 'Mr. Urban Kessler'),
(10, 'Ms. Flavie Grant'),
(14, 'Иванов И.И.'),
(15, 'Сидоров А.Г.');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` mediumint(9) NOT NULL,
  `name` char(30) NOT NULL,
  `author_id` mediumint(9) NOT NULL,
  `genre_id` mediumint(9) NOT NULL,
  `customer_id` mediumint(9) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author_id`, `genre_id`, `customer_id`) VALUES
(1, 'Ea consequuntur doloremque mod', 7, 1, NULL),
(2, 'Consequatur sit accusamus moll', 6, 4, 12),
(3, 'Beatae fugiat repellendus temp', 3, 6, NULL),
(4, 'Beatae praesentium sed est nem', 4, 1, NULL),
(5, 'Quod animi distinctio reprehen', 10, 1, NULL),
(6, 'Expedita soluta minima ipsam.', 3, 2, NULL),
(7, 'Delectus ut in voluptate et.', 1, 2, NULL),
(8, 'Qui quia eius.', 7, 2, NULL),
(9, 'Est nulla sint officiis.', 2, 5, NULL),
(10, 'Voluptatem eius corrupti tempo', 1, 5, NULL),
(11, 'Amet aut non similique reprehe', 1, 4, NULL),
(12, 'Nesciunt deserunt veritatis ev', 10, 6, NULL),
(13, 'Expedita sed voluptatem volupt', 8, 4, NULL),
(14, 'Porro velit delectus.', 10, 3, NULL),
(15, 'Velit error soluta nihil sed.', 5, 3, NULL),
(16, 'Ipsum dolore et excepturi.', 8, 4, NULL),
(17, 'Aliquam omnis perferendis even', 10, 1, NULL),
(18, 'Labore et et cum.', 6, 5, NULL),
(19, 'Et sit ipsum laborum repellend', 8, 6, NULL),
(20, 'Fuga quaerat omnis.', 7, 4, NULL),
(21, 'Inventore incidunt debitis exc', 9, 2, NULL),
(22, 'Error perspiciatis vel.', 5, 4, NULL),
(23, 'Veniam voluptatum voluptatibus', 2, 1, NULL),
(24, 'Quia enim rem qui dolorem.', 8, 1, NULL),
(26, 'Architecto laudantium voluptat', 10, 3, NULL),
(27, 'Quae vero dolores temporibus e', 1, 4, NULL),
(28, 'Sed voluptas omnis.', 3, 2, NULL),
(29, 'Eius commodi voluptas adipisci', 4, 3, NULL),
(30, 'Odio suscipit aut debitis volu', 10, 4, 48),
(31, 'Iusto exercitationem voluptas', 2, 4, NULL),
(32, 'Omnis ullam fugit ratione iust', 9, 1, NULL),
(33, 'Eius voluptas nihil ab.', 6, 5, NULL),
(34, 'Est similique perferendis repe', 1, 2, NULL),
(35, 'Id itaque et quia.', 9, 6, NULL),
(36, 'Eos quia earum nostrum dolorum', 1, 2, NULL),
(37, 'Natus corrupti quidem nostrum', 10, 6, NULL),
(38, 'Eaque laborum rerum.', 6, 2, NULL),
(39, 'Repudiandae magnam omnis omnis', 2, 5, NULL),
(40, 'Labore accusamus itaque qui ve', 3, 3, NULL),
(41, 'Nam repellat asperiores sit co', 5, 5, NULL),
(42, 'Et possimus ipsam vel non omni', 8, 6, NULL),
(44, 'Dicta eaque molestiae dolorem', 2, 5, NULL),
(45, 'Cupiditate quae cum explicabo', 4, 1, NULL),
(46, 'Et ut aut dignissimos nam.', 10, 5, NULL),
(47, 'Sit omnis unde ut cum.', 2, 4, NULL),
(48, 'Voluptas vero consectetur.', 9, 1, NULL),
(49, 'Accusantium maxime occaecati h', 9, 2, NULL),
(50, 'Dolores qui quod dolorem quide', 8, 4, NULL),
(51, 'Cum sit similique.', 5, 1, NULL),
(52, 'Error quisquam alias.', 7, 5, NULL),
(53, 'Nisi quia placeat enim veniam.', 2, 3, NULL),
(54, 'Sapiente molestiae molestiae i', 2, 5, NULL),
(55, 'Vel aperiam delectus quod.', 10, 5, NULL),
(56, 'Tempora officia quia tempore i', 2, 4, NULL),
(57, 'Itaque nisi voluptas odit quod', 7, 6, NULL),
(58, 'Accusantium fugiat sit et maio', 10, 2, NULL),
(59, 'Dolores omnis quia eos.', 5, 5, NULL),
(60, 'Excepturi expedita est.', 9, 2, NULL),
(61, 'Harum assumenda est vel sunt e', 10, 1, NULL),
(62, 'Ab ut praesentium aut.', 5, 1, NULL),
(63, 'Tempore doloribus ut.', 7, 2, NULL),
(64, 'Non totam et mollitia.', 7, 3, NULL),
(65, 'Atque maxime totam natus.', 3, 6, NULL),
(66, 'Quo quia aperiam et.', 2, 5, NULL),
(67, 'Molestiae ab reprehenderit.', 3, 1, NULL),
(68, 'Eum vel tempore debitis beatae', 2, 6, NULL),
(69, 'Deleniti non perferendis velit', 1, 1, NULL),
(70, 'Nihil et ut nostrum omnis.', 10, 4, NULL),
(71, 'Non facilis earum earum iusto.', 2, 5, NULL),
(72, 'Expedita eos rerum et ex occae', 5, 5, NULL),
(73, 'Voluptatem reprehenderit magni', 9, 2, NULL),
(74, 'Rem accusamus soluta amet nesc', 7, 5, NULL),
(75, 'Vero sequi et molestias.', 2, 2, NULL),
(76, 'Necessitatibus aut asperiores', 6, 6, NULL),
(77, 'Hic molestias autem et esse.', 7, 1, NULL),
(78, 'Nisi aut consequuntur deleniti', 7, 3, NULL),
(79, 'Praesentium sapiente quis nihi', 1, 4, NULL),
(80, 'Possimus modi quibusdam dolore', 7, 3, NULL),
(81, 'Molestiae aliquid accusamus.', 3, 4, NULL),
(82, 'Enim ratione velit consequatur', 9, 5, NULL),
(83, 'Expedita sed dolorum voluptate', 5, 6, NULL),
(84, 'Ut consequatur asperiores sint', 2, 6, NULL),
(85, 'Facilis dolores delectus beata', 6, 1, NULL),
(86, 'Natus deserunt velit aut ad.', 7, 3, NULL),
(87, 'Id atque corrupti quo.', 7, 5, NULL),
(88, 'Et et quo voluptatibus.', 6, 4, NULL),
(89, 'Fuga natus temporibus quisquam', 4, 6, NULL),
(90, 'Et in qui nam cum.', 9, 2, NULL),
(91, 'Nesciunt dicta libero.', 7, 3, NULL),
(92, 'Ratione vero tempora itaque et', 2, 6, NULL),
(93, 'Sit maxime accusamus vel quisq', 2, 3, NULL),
(94, 'Dolore perspiciatis aut facili', 1, 5, NULL),
(95, 'Consequatur exercitationem aut', 3, 5, NULL),
(96, 'Architecto consequatur et sapi', 4, 4, NULL),
(97, 'Aut aspernatur deserunt.', 4, 6, 47),
(98, 'Est aut et voluptatem velit si', 1, 6, NULL),
(99, 'Architecto voluptatibus recusa', 1, 5, NULL),
(100, 'Corporis reprehenderit qui.', 7, 1, NULL),
(101, 'превед, медвед', 1, 1, NULL),
(102, 'Типографика и современный CSS', 14, 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` mediumint(9) NOT NULL,
  `name` char(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`) VALUES
(1, 'Prof. Elenora Hessel DVM'),
(2, 'Joannie Denesik'),
(3, 'Dr. Derick Deckow DVM'),
(4, 'Edgardo Runolfsson II'),
(5, 'Prof. Merl Kuphal MD'),
(7, 'Isaac Harris Sr.'),
(8, 'Mrs. Amelia Rath'),
(9, 'Dr. Selina Sipes'),
(10, 'Camryn Runolfsdottir'),
(11, 'Fermin Huels'),
(12, 'Mr. Bret Grimes'),
(13, 'Burdette Feeney DDS'),
(14, 'Llewellyn Hamill'),
(15, 'Haleigh Effertz'),
(16, 'Loy Paucek PhD'),
(17, 'Ardith Koelpin III'),
(18, 'Sean Zieme'),
(19, 'Dr. Richmond Fahey MD'),
(20, 'Theresia Reichert IV'),
(21, 'Prof. Nicolette Armstrong'),
(22, 'Addison Hudson'),
(23, 'Jacquelyn Boehm'),
(24, 'Thaddeus Goodwin'),
(25, 'Taya Hyatt'),
(26, 'Vickie McGlynn'),
(27, 'Brenda Wiegand II'),
(28, 'Nettie Mante'),
(29, 'Prof. Curt Dickens DVM'),
(30, 'Lincoln Kuhlman'),
(31, 'Mckayla Kutch'),
(32, 'Myrtle Kuphal MD'),
(33, 'Allene Brakus'),
(34, 'Mr. Trevor Schoen'),
(35, 'Prof. Marge Johnston PhD'),
(36, 'Kassandra Balistreri'),
(37, 'Daryl Toy'),
(38, 'Luis Gottlieb'),
(39, 'Mr. Amani Hodkiewicz'),
(40, 'Miss Albina Hauck II'),
(41, 'Angela Barton'),
(42, 'Dr. Keegan Veum MD'),
(43, 'Alec Stroman'),
(44, 'Katelynn Hansen'),
(45, 'Prof. Herman Schowalter'),
(46, 'Emil Grimes'),
(47, 'Charlotte Wyman Sr.'),
(48, 'Colten Klein DDS'),
(49, 'Giovani Kirlin DVM'),
(50, 'Norwood Hodkiewicz'),
(51, 'Furman Swaniawski I'),
(52, 'Adella Lind II'),
(53, 'Alena Larkin PhD'),
(54, 'Prof. Kelvin Hahn'),
(55, 'Sibyl Kling'),
(56, 'Dr. Chadrick Wintheiser I'),
(57, 'Freddy Hand'),
(58, 'Maritza Kuhic'),
(59, 'Vida Dare'),
(60, 'Izabella Armstrong DVM'),
(61, 'Jaclyn Kerluke'),
(62, 'Mrs. Lindsay Ondricka V'),
(63, 'Kamryn Jast V'),
(64, 'Tracey Dibbert'),
(65, 'Alia Corkery Sr.'),
(66, 'Magali Kling'),
(67, 'Dolly Welch'),
(68, 'Miss Fiona Bailey'),
(69, 'Shany Muller'),
(70, 'Miss Caroline O''Hara'),
(71, 'Theron Kuphal'),
(72, 'Clemens Greenholt I'),
(73, 'Tyrique Bode'),
(74, 'Miss Asa Haley'),
(75, 'Arlie Simonis'),
(76, 'Seth Stehr'),
(77, 'Prof. Stefan Lubowitz IV'),
(78, 'Dr. Easter Stanton Sr.'),
(79, 'Julie Crooks'),
(80, 'Keith Bauch'),
(81, 'Mr. Earl Berge'),
(82, 'Victor Monahan'),
(83, 'Mrs. Violet Wunsch'),
(84, 'Mr. Bradley Cormier'),
(85, 'Arne Borer'),
(86, 'Stefanie Braun'),
(87, 'Odie Ratke'),
(88, 'Carolina Keeling'),
(89, 'Odell Daugherty II'),
(90, 'Noelia Conroy'),
(91, 'Nelda McCullough Sr.'),
(92, 'Dr. Noel Jenkins'),
(93, 'Jailyn Murazik'),
(94, 'Americo Hermiston'),
(95, 'Dr. Lambert O''Conner DVM'),
(96, 'Miss Linnea O''Kon Jr.'),
(97, 'Bernadette Toy'),
(98, 'Randall Purdy'),
(99, 'Otha Rath'),
(100, 'Prof. Tony Kling'),
(102, 'Петров'),
(103, 'пертор');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `id` mediumint(9) NOT NULL,
  `name` char(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'детектив'),
(2, 'комедия'),
(3, 'триллер'),
(4, 'ужасы'),
(5, 'мистика'),
(6, 'документальная');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` mediumint(9) NOT NULL,
  `date` datetime NOT NULL,
  `book_id` mediumint(9) NOT NULL,
  `customer_id` mediumint(9) DEFAULT NULL,
  `action` char(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `date`, `book_id`, `customer_id`, `action`) VALUES
(1, '2017-10-30 16:08:04', 30, 13, 'Книга выдана'),
(2, '2017-10-30 16:08:30', 30, NULL, 'Книга возвращена в библиотеку'),
(3, '2017-10-30 16:24:34', 26, 20, 'Книга выдана'),
(4, '2017-10-30 16:24:48', 26, NULL, 'Книга возвращена в библиотеку'),
(5, '2017-10-30 16:55:17', 30, 48, 'Книга выдана'),
(6, '2017-10-31 10:51:51', 97, 47, 'Книга выдана');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(9) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', '$2y$10$WiK7YxAHN7f1EihMmh/ruO6PSJJV2gjWp3XZPSW7pI5.kMrNniwvy'),
(2, 'kdn', '$2y$10$wYM8jCOGUH46.0gmjitlwOqvIP2JDLRrUHIfWHnXIpymbJAFsKBzq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
