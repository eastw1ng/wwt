-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2012 at 02:22 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodatie`
--

CREATE TABLE IF NOT EXISTS `accomodatie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accomodatie_soort` varchar(25) NOT NULL,
  `accomodatie_naam` varchar(60) NOT NULL,
  `accomodatie_prijs` decimal(5,2) NOT NULL,
  `bestemming_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_accomodatie_soort` (`accomodatie_soort`),
  KEY `ix_accomodatie_bestemming_id` (`bestemming_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `accomodatie`
--

INSERT INTO `accomodatie` (`id`, `accomodatie_soort`, `accomodatie_naam`, `accomodatie_prijs`, `bestemming_id`) VALUES
(1, 'Hotel', 'Hotel Altpradl', '100.00', 4),
(2, 'Hotel', 'Hotel Ar El Lodge', '110.00', 10),
(3, 'Hostel', 'Hostel Montesol Artyco', '120.00', 6),
(4, 'Hostel', 'De Lamore', '130.00', 3),
(5, 'Appartement', 'De La Fontaine', '140.00', 1),
(6, 'Appartement', 'Seimler', '150.00', 2),
(7, 'Appartement', 'WIlling-Schwalefeld', '160.00', 9),
(8, 'Appartement', 'La Alcando', '170.00', 8),
(9, 'Pension', 'Pension Arnika', '180.00', 7),
(10, 'Hotel', 'Seimler', '190.00', 3),
(11, 'Hotel', 'Hotel La Roccia', '540.00', 11),
(12, 'Hotel', 'Hotel Fiordaliso', '345.00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=187 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 188),
(2, 1, NULL, NULL, 'Accomodatie', 2, 15),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(35, 1, NULL, NULL, 'Groups', 16, 29),
(36, 35, NULL, NULL, 'index', 17, 18),
(37, 35, NULL, NULL, 'view', 19, 20),
(38, 35, NULL, NULL, 'add', 21, 22),
(39, 35, NULL, NULL, 'edit', 23, 24),
(40, 35, NULL, NULL, 'delete', 25, 26),
(42, 1, NULL, NULL, 'Home', 30, 33),
(43, 42, NULL, NULL, 'index', 31, 32),
(55, 1, NULL, NULL, 'Land', 34, 47),
(56, 55, NULL, NULL, 'index', 35, 36),
(57, 55, NULL, NULL, 'view', 37, 38),
(58, 55, NULL, NULL, 'add', 39, 40),
(59, 55, NULL, NULL, 'edit', 41, 42),
(60, 55, NULL, NULL, 'delete', 43, 44),
(66, 1, NULL, NULL, 'Plaats', 48, 61),
(67, 66, NULL, NULL, 'index', 49, 50),
(68, 66, NULL, NULL, 'view', 51, 52),
(69, 66, NULL, NULL, 'add', 53, 54),
(70, 66, NULL, NULL, 'edit', 55, 56),
(71, 66, NULL, NULL, 'delete', 57, 58),
(77, 1, NULL, NULL, 'Reis', 62, 79),
(78, 77, NULL, NULL, 'index', 63, 64),
(79, 77, NULL, NULL, 'calcPrice', 65, 66),
(80, 77, NULL, NULL, 'view', 67, 68),
(81, 77, NULL, NULL, 'add', 69, 70),
(82, 77, NULL, NULL, 'edit', 71, 72),
(83, 77, NULL, NULL, 'delete', 73, 74),
(89, 1, NULL, NULL, 'Transport', 80, 93),
(90, 89, NULL, NULL, 'index', 81, 82),
(91, 89, NULL, NULL, 'view', 83, 84),
(92, 89, NULL, NULL, 'add', 85, 86),
(93, 89, NULL, NULL, 'edit', 87, 88),
(94, 89, NULL, NULL, 'delete', 89, 90),
(100, 1, NULL, NULL, 'TransportSoort', 94, 107),
(101, 100, NULL, NULL, 'index', 95, 96),
(102, 100, NULL, NULL, 'view', 97, 98),
(103, 100, NULL, NULL, 'add', 99, 100),
(104, 100, NULL, NULL, 'edit', 101, 102),
(105, 100, NULL, NULL, 'delete', 103, 104),
(111, 1, NULL, NULL, 'Users', 108, 125),
(112, 111, NULL, NULL, 'login', 109, 110),
(113, 111, NULL, NULL, 'logout', 111, 112),
(114, 111, NULL, NULL, 'index', 113, 114),
(115, 111, NULL, NULL, 'view', 115, 116),
(116, 111, NULL, NULL, 'add', 117, 118),
(117, 111, NULL, NULL, 'edit', 119, 120),
(118, 111, NULL, NULL, 'delete', 121, 122),
(119, 1, NULL, NULL, 'AclExtras', 126, 127),
(120, 1, NULL, NULL, 'Bestemmings', 128, 141),
(121, 120, NULL, NULL, 'index', 129, 130),
(122, 120, NULL, NULL, 'view', 131, 132),
(123, 120, NULL, NULL, 'add', 133, 134),
(124, 120, NULL, NULL, 'edit', 135, 136),
(125, 120, NULL, NULL, 'delete', 137, 138),
(131, 1, NULL, NULL, 'Boekings', 142, 161),
(132, 131, NULL, NULL, 'index', 143, 144),
(133, 131, NULL, NULL, 'calcPrice', 145, 146),
(134, 131, NULL, NULL, 'view', 147, 148),
(135, 131, NULL, NULL, 'add', 149, 150),
(136, 131, NULL, NULL, 'book', 151, 152),
(137, 131, NULL, NULL, 'edit', 153, 154),
(138, 131, NULL, NULL, 'delete', 155, 156),
(144, 1, NULL, NULL, 'Klants', 162, 179),
(156, 144, NULL, NULL, 'index', 163, 164),
(157, 144, NULL, NULL, 'myProfile', 165, 166),
(158, 144, NULL, NULL, 'view', 167, 168),
(159, 144, NULL, NULL, 'add', 169, 170),
(160, 144, NULL, NULL, 'edit', 171, 172),
(161, 144, NULL, NULL, 'delete', 173, 174),
(169, 131, NULL, NULL, 'checkAcces', 157, 158),
(170, 2, NULL, NULL, 'checkAcces', 13, 14),
(171, 120, NULL, NULL, 'checkAcces', 139, 140),
(172, 131, NULL, NULL, 'factuur', 159, 160),
(173, 35, NULL, NULL, 'checkAcces', 27, 28),
(174, 144, NULL, NULL, 'checkAcces', 175, 176),
(175, 55, NULL, NULL, 'checkAcces', 45, 46),
(176, 1, NULL, NULL, 'Link', 180, 187),
(177, 176, NULL, NULL, 'importControllers', 181, 182),
(178, 176, NULL, NULL, 'loggedIn', 183, 184),
(179, 66, NULL, NULL, 'checkAcces', 59, 60),
(180, 77, NULL, NULL, 'checkAcces', 75, 76),
(181, 89, NULL, NULL, 'checkAcces', 91, 92),
(182, 100, NULL, NULL, 'checkAcces', 105, 106),
(183, 111, NULL, NULL, 'checkAcces', 123, 124),
(184, 144, NULL, NULL, 'getKlantInfo', 177, 178),
(185, 77, NULL, NULL, 'topReizen', 77, 78),
(186, 176, NULL, NULL, 'manualCheckAcces', 185, 186);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 6),
(2, NULL, 'Group', 2, NULL, 7, 12),
(3, NULL, 'Group', 3, NULL, 13, 14),
(4, 1, 'User', 1, NULL, 2, 3),
(5, 2, 'User', 2, NULL, 8, 9),
(6, 1, 'User', 3, NULL, 4, 5),
(7, 2, 'User', 9, NULL, 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '1', '1', '1', '1'),
(3, 2, 77, '1', '1', '1', '1'),
(5, 3, 1, '-1', '-1', '-1', '-1'),
(6, 2, 78, '1', '1', '1', '1'),
(7, 2, 80, '1', '1', '1', '1'),
(8, 2, 185, '1', '1', '1', '1'),
(9, 2, 79, '1', '1', '1', '1'),
(10, 2, 136, '1', '1', '1', '1'),
(11, 2, 172, '1', '1', '1', '1'),
(12, 2, 132, '1', '1', '1', '1'),
(13, 2, 133, '1', '1', '1', '1'),
(14, 2, 134, '1', '1', '1', '1'),
(15, 2, 131, '1', '1', '1', '1'),
(16, 2, 135, '-1', '-1', '-1', '-1'),
(17, 2, 137, '-1', '-1', '-1', '-1'),
(18, 2, 81, '-1', '-1', '-1', '-1'),
(19, 2, 82, '-1', '-1', '-1', '-1'),
(20, 2, 2, '-1', '-1', '-1', '-1'),
(21, 2, 35, '-1', '-1', '-1', '-1'),
(22, 2, 144, '-1', '-1', '-1', '-1'),
(23, 2, 55, '-1', '-1', '-1', '-1'),
(24, 2, 66, '-1', '-1', '-1', '-1'),
(25, 2, 89, '-1', '-1', '-1', '-1'),
(26, 2, 100, '-1', '-1', '-1', '-1'),
(27, 2, 111, '-1', '-1', '-1', '-1'),
(28, 2, 120, '-1', '-1', '-1', '-1'),
(29, 2, 184, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bestemming`
--

CREATE TABLE IF NOT EXISTS `bestemming` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(80) DEFAULT NULL,
  `plaats_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_bestemming_plaats_id` (`plaats_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `bestemming`
--

INSERT INTO `bestemming` (`id`, `alias`, `plaats_id`) VALUES
(1, 'Kaprun', 3),
(2, 'Val Cenis', 7),
(3, 'Krapacz', 1),
(4, 'Swinoujscie', 13),
(5, 'Granada', 14),
(6, 'Sierra Nevada', 10),
(7, 'Kaprun', 12),
(8, 'Innsbruck', 6),
(9, 'Val Gardena', 10),
(10, 'Cavalese', 2),
(11, 'Lombardia', 5),
(12, 'Amsterdam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `boeking`
--

CREATE TABLE IF NOT EXISTS `boeking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `boek_datum` date NOT NULL,
  `annulering_datum` date DEFAULT NULL,
  `prijs` double(10,2) DEFAULT NULL,
  `aantal_reizigers` int(11) NOT NULL,
  `reis_id` int(11) NOT NULL,
  `klant_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_boeking_reis_id` (`reis_id`),
  KEY `ix_boeking_klant_id` (`klant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `boeking`
--

INSERT INTO `boeking` (`id`, `boek_datum`, `annulering_datum`, `prijs`, `aantal_reizigers`, `reis_id`, `klant_id`) VALUES
(3, '2012-02-26', '2012-03-10', 295.00, 1, 2, 4),
(4, '2012-02-25', '2012-03-09', 215.00, 3, 2, 3),
(6, '2012-02-05', '2012-02-19', 259.99, 1, 1, 1),
(7, '2012-02-05', '2012-02-19', 239.99, 2, 3, 1),
(8, '2012-02-05', '2012-02-19', 259.99, 1, 1, 1),
(9, '2012-02-05', '2012-02-19', 239.99, 1, 3, 1),
(10, '2012-03-18', '2012-03-20', 206.00, 5, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrators', '2012-02-02 21:48:09', '2012-02-02 21:48:09'),
(2, 'Klant', '2012-02-02 21:48:15', '2012-02-02 21:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `klant`
--

CREATE TABLE IF NOT EXISTS `klant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(25) NOT NULL,
  `achternaam` varchar(25) NOT NULL,
  `adres` varchar(60) NOT NULL,
  `woonplaats` varchar(25) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_klant_naw` (`voornaam`,`achternaam`,`adres`,`woonplaats`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `klant`
--

INSERT INTO `klant` (`id`, `voornaam`, `achternaam`, `adres`, `woonplaats`, `postcode`) VALUES
(1, 'Tim', 'van der Gaag', 'Doornenburg 38', 'Alphen aan den rijn', '2402KE'),
(2, 'Ivo', 'Lek', 'ergens 12', 'Roelofsarendsveen', '4561AS'),
(3, 'Iwan', 'Arensman', 'Sesamstraat 10', 'Leiden', '4893DF'),
(4, 'Edwin', 'Van Vliet', 'beerenbotje', 'zuid-laren', '1234AD'),
(5, 'Tjesco', 'de Vries', 'koudlaan', 'Forstland', '7531RT');

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE IF NOT EXISTS `land` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `c_landen_uq_naam` (`naam`),
  KEY `ix_landen_naam` (`naam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`id`, `naam`) VALUES
(2, 'Duitsland'),
(7, 'Engeland'),
(3, 'Frankrijk'),
(4, 'Griekenland'),
(6, 'Italie'),
(1, 'Nederland'),
(5, 'Spanje');

-- --------------------------------------------------------

--
-- Table structure for table `plaats`
--

CREATE TABLE IF NOT EXISTS `plaats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(60) NOT NULL,
  `land_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `c_plaats_uq_naam` (`naam`),
  KEY `ix_plaats_naam` (`naam`),
  KEY `ix_plaats_land_id` (`land_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `plaats`
--

INSERT INTO `plaats` (`id`, `naam`, `land_id`) VALUES
(1, 'Amsterdam', 1),
(2, 'Leiden', 1),
(3, 'Berlijn', 2),
(4, 'Frankfurt', 2),
(5, 'Parijs', 3),
(6, 'Le Havre', 3),
(7, 'Rhodes', 4),
(8, 'Kreta', 4),
(9, 'Madrid', 5),
(10, 'Barcelona', 5),
(11, 'Rome', 6),
(12, 'Milan', 6),
(13, 'Londen', 7),
(14, 'Manchester', 7);

-- --------------------------------------------------------

--
-- Table structure for table `reis`
--

CREATE TABLE IF NOT EXISTS `reis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vertrek_datum` date NOT NULL,
  `terugkeer_datum` date NOT NULL,
  `beschrijving` text,
  `image_url` varchar(45) DEFAULT NULL,
  `bestemming_id` int(11) NOT NULL,
  `transport_id` int(11) NOT NULL,
  `omschrijving` tinytext,
  PRIMARY KEY (`id`),
  KEY `c_reis_fk_1_bestemming_id` (`bestemming_id`),
  KEY `c_reis_fk_2_transport_id` (`transport_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `reis`
--

INSERT INTO `reis` (`id`, `vertrek_datum`, `terugkeer_datum`, `beschrijving`, `image_url`, `bestemming_id`, `transport_id`, `omschrijving`) VALUES
(1, '2012-04-16', '2012-04-20', NULL, NULL, 7, 5, 'Deze reis gaat naar Milan, een skigebied in Italie met een prachtig uitzicht.'),
(2, '2012-05-01', '2012-05-16', NULL, NULL, 9, 6, 'Deze reis gaat naar Barcelona, een skigebied in de Spanje met een prachtig uitzicht.'),
(3, '2012-04-16', '2012-04-20', NULL, NULL, 5, 5, 'Deze reis gaat naar Manchester, een skigebied Engeland met een prachtig uitzicht.'),
(4, '2012-05-01', '2012-05-16', NULL, NULL, 4, 6, 'Deze reis gaat naar Londen, een skigebied in Engeland met een prachtig uitzicht.'),
(5, '2012-04-16', '2012-04-20', NULL, NULL, 1, 5, 'Deze reis gaat naar Berlijn, een skigebied in de Duitsland met een prachtig uitzicht.'),
(6, '2012-05-01', '2012-05-16', NULL, NULL, 2, 6, 'Deze reis gaat naar Rhodos, een skigebied in Griekenland met een prachtig uitzicht.'),
(7, '2012-02-08', '2012-02-20', NULL, NULL, 11, 5, 'Deze reis gaat naar Le Val D''Arvan, een skigebied in de buurt van parijs met een prachtig uitzicht.'),
(8, '2012-03-18', '2012-03-28', NULL, NULL, 9, 6, 'Deze avontuurlijke boottrip brengt u naar een prachtige skigebied in dichtbij Val Gardena waar u 6 dagen zult verblijven en daarna weer terug zal keren met de boot.');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vertrek_plaats` int(11) NOT NULL,
  `aantal_plaats` int(11) NOT NULL,
  `plaats_id` int(11) NOT NULL,
  `prijs` decimal(8,2) NOT NULL,
  `transport_soort_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_transport_soort_id` (`transport_soort_id`),
  KEY `c_transport_fk_vertrekpaats_id` (`plaats_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id`, `vertrek_plaats`, `aantal_plaats`, `plaats_id`, `prijs`, `transport_soort_id`) VALUES
(5, 1, 300, 1, '99.99', 2),
(6, 1, 6000, 1, '10.00', 3),
(7, 2, 2, 1, '99.99', 5);

-- --------------------------------------------------------

--
-- Table structure for table `transport_soort`
--

CREATE TABLE IF NOT EXISTS `transport_soort` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `c_transport_soort_uq_naam` (`naam`),
  KEY `ix_transport_soort_naam` (`naam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `transport_soort`
--

INSERT INTO `transport_soort` (`id`, `naam`) VALUES
(3, 'Boot'),
(1, 'Bus'),
(4, 'Rolstoel'),
(5, 'Segway'),
(2, 'Vliegtuig');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `klant_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `fk_users_klant_id` (`klant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `klant_id`, `created`, `modified`) VALUES
(1, 'Tim', '71db10de2306cb31b10eb2d237ad160509a7c87e', 1, 1, '2012-02-02 21:52:05', '2012-02-02 21:52:05'),
(2, 'test', '71db10de2306cb31b10eb2d237ad160509a7c87e', 2, 2, '2012-02-02 22:23:51', '2012-02-02 22:23:51'),
(3, 'tjesco', '71db10de2306cb31b10eb2d237ad160509a7c87e', 1, 3, '2012-02-03 12:22:52', '2012-02-03 12:22:52'),
(6, 'edwin', '71db10de2306cb31b10eb2d237ad160509a7c87e', 1, 4, NULL, NULL),
(7, 'iwan', '71db10de2306cb31b10eb2d237ad160509a7c87e', 1, 5, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accomodatie`
--
ALTER TABLE `accomodatie`
  ADD CONSTRAINT `c_accomodatie_fk_bestemming_id` FOREIGN KEY (`bestemming_id`) REFERENCES `bestemming` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `bestemming`
--
ALTER TABLE `bestemming`
  ADD CONSTRAINT `c_bestemming_fk_plaats_id` FOREIGN KEY (`plaats_id`) REFERENCES `plaats` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `boeking`
--
ALTER TABLE `boeking`
  ADD CONSTRAINT `c_boeking_fk_1_reis_id` FOREIGN KEY (`reis_id`) REFERENCES `reis` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `c_boeking_fk_2_klant_id` FOREIGN KEY (`klant_id`) REFERENCES `klant` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `plaats`
--
ALTER TABLE `plaats`
  ADD CONSTRAINT `c_plaats_fk_land_id` FOREIGN KEY (`land_id`) REFERENCES `land` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `reis`
--
ALTER TABLE `reis`
  ADD CONSTRAINT `c_reis_fk_1_bestemming_id` FOREIGN KEY (`bestemming_id`) REFERENCES `bestemming` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `c_reis_fk_2_transport_id` FOREIGN KEY (`transport_id`) REFERENCES `transport` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `c_transport_fk_soort_id` FOREIGN KEY (`transport_soort_id`) REFERENCES `transport_soort` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `c_transport_fk_vertrekpaats_id` FOREIGN KEY (`plaats_id`) REFERENCES `plaats` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_klant_id` FOREIGN KEY (`klant_id`) REFERENCES `klant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
