-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 02 Feb 2012 om 22:40
-- Serverversie: 5.5.8
-- PHP-Versie: 5.3.5

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
-- Tabelstructuur voor tabel `accomodatie`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Gegevens worden uitgevoerd voor tabel `accomodatie`
--

INSERT INTO `accomodatie` (`id`, `accomodatie_soort`, `accomodatie_naam`, `accomodatie_prijs`, `bestemming_id`) VALUES
(1, 'Hotel', 'A', 0.00, 4),
(2, 'Hotel', 'B', 0.00, 10),
(3, 'Hostel', 'C', 0.00, 6),
(4, 'Hostel', 'D', 0.00, 3),
(5, 'Appartement', 'E', 0.00, 1),
(6, 'Appartement', 'F', 0.00, 2),
(7, 'Appartement', 'G', 0.00, 9),
(8, 'Appartement', 'H', 0.00, 8),
(9, 'Hotel', 'I', 0.00, 7),
(10, 'Hotel', 'J', 0.00, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `acos`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=120 ;

--
-- Gegevens worden uitgevoerd voor tabel `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 236),
(2, 1, NULL, NULL, 'Accomodatie', 2, 23),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 2, NULL, NULL, 'admin_index', 13, 14),
(9, 2, NULL, NULL, 'admin_view', 15, 16),
(10, 2, NULL, NULL, 'admin_add', 17, 18),
(11, 2, NULL, NULL, 'admin_edit', 19, 20),
(12, 2, NULL, NULL, 'admin_delete', 21, 22),
(13, 1, NULL, NULL, 'Bestemming', 24, 45),
(14, 13, NULL, NULL, 'index', 25, 26),
(15, 13, NULL, NULL, 'view', 27, 28),
(16, 13, NULL, NULL, 'add', 29, 30),
(17, 13, NULL, NULL, 'edit', 31, 32),
(18, 13, NULL, NULL, 'delete', 33, 34),
(19, 13, NULL, NULL, 'admin_index', 35, 36),
(20, 13, NULL, NULL, 'admin_view', 37, 38),
(21, 13, NULL, NULL, 'admin_add', 39, 40),
(22, 13, NULL, NULL, 'admin_edit', 41, 42),
(23, 13, NULL, NULL, 'admin_delete', 43, 44),
(24, 1, NULL, NULL, 'Boeking', 46, 67),
(25, 24, NULL, NULL, 'index', 47, 48),
(26, 24, NULL, NULL, 'view', 49, 50),
(27, 24, NULL, NULL, 'add', 51, 52),
(28, 24, NULL, NULL, 'edit', 53, 54),
(29, 24, NULL, NULL, 'delete', 55, 56),
(30, 24, NULL, NULL, 'admin_index', 57, 58),
(31, 24, NULL, NULL, 'admin_view', 59, 60),
(32, 24, NULL, NULL, 'admin_add', 61, 62),
(33, 24, NULL, NULL, 'admin_edit', 63, 64),
(34, 24, NULL, NULL, 'admin_delete', 65, 66),
(35, 1, NULL, NULL, 'Groups', 68, 79),
(36, 35, NULL, NULL, 'index', 69, 70),
(37, 35, NULL, NULL, 'view', 71, 72),
(38, 35, NULL, NULL, 'add', 73, 74),
(39, 35, NULL, NULL, 'edit', 75, 76),
(40, 35, NULL, NULL, 'delete', 77, 78),
(42, 1, NULL, NULL, 'Home', 80, 83),
(43, 42, NULL, NULL, 'index', 81, 82),
(44, 1, NULL, NULL, 'Klant', 84, 105),
(45, 44, NULL, NULL, 'index', 85, 86),
(46, 44, NULL, NULL, 'view', 87, 88),
(47, 44, NULL, NULL, 'add', 89, 90),
(48, 44, NULL, NULL, 'edit', 91, 92),
(49, 44, NULL, NULL, 'delete', 93, 94),
(50, 44, NULL, NULL, 'admin_index', 95, 96),
(51, 44, NULL, NULL, 'admin_view', 97, 98),
(52, 44, NULL, NULL, 'admin_add', 99, 100),
(53, 44, NULL, NULL, 'admin_edit', 101, 102),
(54, 44, NULL, NULL, 'admin_delete', 103, 104),
(55, 1, NULL, NULL, 'Land', 106, 127),
(56, 55, NULL, NULL, 'index', 107, 108),
(57, 55, NULL, NULL, 'view', 109, 110),
(58, 55, NULL, NULL, 'add', 111, 112),
(59, 55, NULL, NULL, 'edit', 113, 114),
(60, 55, NULL, NULL, 'delete', 115, 116),
(61, 55, NULL, NULL, 'admin_index', 117, 118),
(62, 55, NULL, NULL, 'admin_view', 119, 120),
(63, 55, NULL, NULL, 'admin_add', 121, 122),
(64, 55, NULL, NULL, 'admin_edit', 123, 124),
(65, 55, NULL, NULL, 'admin_delete', 125, 126),
(66, 1, NULL, NULL, 'Plaats', 128, 149),
(67, 66, NULL, NULL, 'index', 129, 130),
(68, 66, NULL, NULL, 'view', 131, 132),
(69, 66, NULL, NULL, 'add', 133, 134),
(70, 66, NULL, NULL, 'edit', 135, 136),
(71, 66, NULL, NULL, 'delete', 137, 138),
(72, 66, NULL, NULL, 'admin_index', 139, 140),
(73, 66, NULL, NULL, 'admin_view', 141, 142),
(74, 66, NULL, NULL, 'admin_add', 143, 144),
(75, 66, NULL, NULL, 'admin_edit', 145, 146),
(76, 66, NULL, NULL, 'admin_delete', 147, 148),
(77, 1, NULL, NULL, 'Reis', 150, 173),
(78, 77, NULL, NULL, 'index', 151, 152),
(79, 77, NULL, NULL, 'calcPrice', 153, 154),
(80, 77, NULL, NULL, 'view', 155, 156),
(81, 77, NULL, NULL, 'add', 157, 158),
(82, 77, NULL, NULL, 'edit', 159, 160),
(83, 77, NULL, NULL, 'delete', 161, 162),
(84, 77, NULL, NULL, 'admin_index', 163, 164),
(85, 77, NULL, NULL, 'admin_view', 165, 166),
(86, 77, NULL, NULL, 'admin_add', 167, 168),
(87, 77, NULL, NULL, 'admin_edit', 169, 170),
(88, 77, NULL, NULL, 'admin_delete', 171, 172),
(89, 1, NULL, NULL, 'Transport', 174, 195),
(90, 89, NULL, NULL, 'index', 175, 176),
(91, 89, NULL, NULL, 'view', 177, 178),
(92, 89, NULL, NULL, 'add', 179, 180),
(93, 89, NULL, NULL, 'edit', 181, 182),
(94, 89, NULL, NULL, 'delete', 183, 184),
(95, 89, NULL, NULL, 'admin_index', 185, 186),
(96, 89, NULL, NULL, 'admin_view', 187, 188),
(97, 89, NULL, NULL, 'admin_add', 189, 190),
(98, 89, NULL, NULL, 'admin_edit', 191, 192),
(99, 89, NULL, NULL, 'admin_delete', 193, 194),
(100, 1, NULL, NULL, 'TransportSoort', 196, 217),
(101, 100, NULL, NULL, 'index', 197, 198),
(102, 100, NULL, NULL, 'view', 199, 200),
(103, 100, NULL, NULL, 'add', 201, 202),
(104, 100, NULL, NULL, 'edit', 203, 204),
(105, 100, NULL, NULL, 'delete', 205, 206),
(106, 100, NULL, NULL, 'admin_index', 207, 208),
(107, 100, NULL, NULL, 'admin_view', 209, 210),
(108, 100, NULL, NULL, 'admin_add', 211, 212),
(109, 100, NULL, NULL, 'admin_edit', 213, 214),
(110, 100, NULL, NULL, 'admin_delete', 215, 216),
(111, 1, NULL, NULL, 'Users', 218, 233),
(112, 111, NULL, NULL, 'login', 219, 220),
(113, 111, NULL, NULL, 'logout', 221, 222),
(114, 111, NULL, NULL, 'index', 223, 224),
(115, 111, NULL, NULL, 'view', 225, 226),
(116, 111, NULL, NULL, 'add', 227, 228),
(117, 111, NULL, NULL, 'edit', 229, 230),
(118, 111, NULL, NULL, 'delete', 231, 232),
(119, 1, NULL, NULL, 'AclExtras', 234, 235);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aros`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, NULL, 'Group', 2, NULL, 5, 8),
(3, NULL, 'Group', 3, NULL, 9, 10),
(4, 1, 'User', 1, NULL, 2, 3),
(5, 2, 'User', 2, NULL, 6, 7);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aros_acos`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 77, '1', '1', '1', '1'),
(4, 2, 24, '1', '1', '1', '1'),
(5, 3, 1, '-1', '-1', '-1', '-1');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestemming`
--

CREATE TABLE IF NOT EXISTS `bestemming` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(80) DEFAULT NULL,
  `plaats_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_bestemming_plaats_id` (`plaats_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Gegevens worden uitgevoerd voor tabel `bestemming`
--

INSERT INTO `bestemming` (`id`, `alias`, `plaats_id`) VALUES
(1, NULL, 3),
(2, NULL, 7),
(3, NULL, 1),
(4, NULL, 13),
(5, NULL, 14),
(6, NULL, 10),
(7, NULL, 12),
(8, NULL, 6),
(9, NULL, 10),
(10, NULL, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `boeking`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `boeking`
--

INSERT INTO `boeking` (`id`, `boek_datum`, `annulering_datum`, `prijs`, `aantal_reizigers`, `reis_id`, `klant_id`) VALUES
(1, '2012-01-30', '2012-02-26', NULL, 4, 1, 1),
(2, '2012-01-30', '2012-02-26', NULL, 10, 1, 2),
(3, '2012-02-26', '2012-03-10', NULL, 1, 2, 4),
(4, '2012-02-25', '2012-03-09', NULL, 3, 2, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrators', '2012-02-02 21:48:09', '2012-02-02 21:48:09'),
(2, 'Klant', '2012-02-02 21:48:15', '2012-02-02 21:48:15'),
(3, 'Guest', '2012-02-02 21:48:21', '2012-02-02 21:48:21');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
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
-- Gegevens worden uitgevoerd voor tabel `klant`
--

INSERT INTO `klant` (`id`, `voornaam`, `achternaam`, `adres`, `woonplaats`, `postcode`) VALUES
(1, 'Tim', 'van der Gaag', 'Doornenburg 38', 'Alphen aan den rijn', '2402KE'),
(2, 'Ivo', 'Lek', 'ergens 12', 'Roelofsarendsveen', '4561AS'),
(3, 'Iwan', 'Arensman', 'Sesamstraat 10', 'Leiden', '4893DF'),
(4, 'Edwin', 'Van Vliet', 'beerenbotje', 'zuid-laren', '1234AD'),
(5, 'Tjesco', 'de Vries', 'koudlaan', 'Forstland', '7531RT');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `land`
--

CREATE TABLE IF NOT EXISTS `land` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `c_landen_uq_naam` (`naam`),
  KEY `ix_landen_naam` (`naam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Gegevens worden uitgevoerd voor tabel `land`
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
-- Tabelstructuur voor tabel `plaats`
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
-- Gegevens worden uitgevoerd voor tabel `plaats`
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
(13, 'Londen', NULL),
(14, 'Manchester', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reis`
--

CREATE TABLE IF NOT EXISTS `reis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vertrek_datum` date NOT NULL,
  `terugkeer_datum` date NOT NULL,
  `beschrijving` text,
  `bestemming_id` int(11) NOT NULL,
  `transport_id` int(11) NOT NULL,
  `omschrijving` tinytext,
  PRIMARY KEY (`id`),
  KEY `c_reis_fk_1_bestemming_id` (`bestemming_id`),
  KEY `c_reis_fk_2_transport_id` (`transport_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `reis`
--

INSERT INTO `reis` (`id`, `vertrek_datum`, `terugkeer_datum`, `beschrijving`, `bestemming_id`, `transport_id`, `omschrijving`) VALUES
(1, '2012-04-16', '2012-04-20', NULL, 7, 5, NULL),
(2, '2012-05-01', '2012-05-16', NULL, 9, 6, NULL),
(3, '2012-04-16', '2012-04-20', NULL, 5, 5, NULL),
(4, '2012-05-01', '2012-05-16', NULL, 4, 6, NULL),
(5, '2012-04-16', '2012-04-20', NULL, 1, 5, NULL),
(6, '2012-05-01', '2012-05-16', NULL, 2, 6, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `transport`
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
-- Gegevens worden uitgevoerd voor tabel `transport`
--

INSERT INTO `transport` (`id`, `vertrek_plaats`, `aantal_plaats`, `plaats_id`, `prijs`, `transport_soort_id`) VALUES
(5, 1, 300, 1, 99.99, 2),
(6, 1, 6000, 1, 10.00, 3),
(7, 2, 2, 1, 99.99, 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `transport_soort`
--

CREATE TABLE IF NOT EXISTS `transport_soort` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `c_transport_soort_uq_naam` (`naam`),
  KEY `ix_transport_soort_naam` (`naam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `transport_soort`
--

INSERT INTO `transport_soort` (`id`, `naam`) VALUES
(3, 'Boot'),
(1, 'Bus'),
(4, 'Rolstoel'),
(5, 'Segway'),
(2, 'Vliegtuig');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(1, 'Tim', '71db10de2306cb31b10eb2d237ad160509a7c87e', 1, '2012-02-02 21:52:05', '2012-02-02 21:52:05'),
(2, 'test', '71db10de2306cb31b10eb2d237ad160509a7c87e', 2, '2012-02-02 22:23:51', '2012-02-02 22:23:51');

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `accomodatie`
--
ALTER TABLE `accomodatie`
  ADD CONSTRAINT `c_accomodatie_fk_bestemming_id` FOREIGN KEY (`bestemming_id`) REFERENCES `bestemming` (`id`) ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `bestemming`
--
ALTER TABLE `bestemming`
  ADD CONSTRAINT `c_bestemming_fk_plaats_id` FOREIGN KEY (`plaats_id`) REFERENCES `plaats` (`id`) ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `boeking`
--
ALTER TABLE `boeking`
  ADD CONSTRAINT `c_boeking_fk_1_reis_id` FOREIGN KEY (`reis_id`) REFERENCES `reis` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `c_boeking_fk_2_klant_id` FOREIGN KEY (`klant_id`) REFERENCES `klant` (`id`) ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `plaats`
--
ALTER TABLE `plaats`
  ADD CONSTRAINT `c_plaats_fk_land_id` FOREIGN KEY (`land_id`) REFERENCES `land` (`id`) ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `reis`
--
ALTER TABLE `reis`
  ADD CONSTRAINT `c_reis_fk_1_bestemming_id` FOREIGN KEY (`bestemming_id`) REFERENCES `bestemming` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `c_reis_fk_2_transport_id` FOREIGN KEY (`transport_id`) REFERENCES `transport` (`id`) ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `c_transport_fk_soort_id` FOREIGN KEY (`transport_soort_id`) REFERENCES `transport_soort` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `c_transport_fk_vertrekpaats_id` FOREIGN KEY (`plaats_id`) REFERENCES `plaats` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
