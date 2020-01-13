-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 jan 2020 om 13:34
-- Serverversie: 10.4.8-MariaDB
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qabana`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `bedrijf` varchar(50) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `telefoon` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bericht` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `form`
--

INSERT INTO `form` (`id`, `bedrijf`, `naam`, `telefoon`, `email`, `bericht`) VALUES
(39, 'Batu Khan B.V', 'Batuhan', 650632997, 'batuhan_celik766@hotmail.com', 'dawdasdwads'),
(40, 'Batu Khan B.V', 'Batuhan', 650632997, 'batuhan_celik766@hotmail.com', 'dwasdwa'),
(41, 'dasd', 'Celik', 618545192, 'timoer070@hotmail.com', 'dawwwwwwwwwwww'),
(42, '23', '12323', 3213, '123213', '3213'),
(43, 'Batuhan', 'Celik', 618545192, 'timoer070@hotmail.com', 'ddddddddddddd'),
(44, 'dead', 'man', 55, 'dasdsad@dsad.com', 'ddddddddd'),
(45, 'dead', 'man', 55855448, 'dasdsad@dsad.com', 'ggg'),
(46, 'Yil 2002 BV', 'Levent', 618545192, '1041570@mborijnland.nl', 'KLAAR IS KEES'),
(47, 'Yil 2002 BV', 'Levent', 618545192, 'vabewaf699@newmail.top', 'ewwwwwwwwwwwwwwwwwww'),
(48, 'Yil 2002 BV', 'Levent', 618545192, 'vabewaf699@newmail.top', 'ewwwwwwwwwwwwwwwwwww'),
(49, 'dead', 'Celik', 618545192, 'Batuhan_celik766@hotmail.com', 'dddddddddd'),
(50, 'dead', 'Celik', 618545192, 'Batuhan_celik766@hotmail.com', 'dddddddddd'),
(51, 'Batuhan', 'Levent', 618545192, 'Batuhan_celik76@hotmail.com', 'fffffffffff'),
(52, 'Batuhan', 'Levent', 618545192, 'Batuhan_celik76@hotmail.com', 'fffffffffff'),
(53, 'Batuhan', 'Levent', 618545192, 'Batuhan_celik76@hotmail.com', 'fffffffffff'),
(54, 'Batuhan', 'Levent', 618545192, 'Batuhan_celik76@hotmail.com', 'fffffffffff'),
(55, 'Aldi', 'Piet', 618545192, 'info@aldi.nl', 'Website'),
(56, 'Yil 2002 BV', 'Levent', 618545192, 'timoer070@hotmail.com', 'dddddd'),
(57, 'Yil 2002 BV', 'Levent', 618545192, 'timoer070@hotmail.com', 'dddddd'),
(58, '', 'Celik', 618545192, 'dasdsad@dsad.com', ''),
(59, 'Batuhan', 'Celik', 618545192, 'Batuhan_celik766@hotmail.com', 'ddddd'),
(60, 'Yil 2002 BV', 'man', 618545192, 'timoer070@hotmail.com', 'd'),
(61, 'Funda', 'Levent', 618545192, 'timoer070@hotmail.com', 'd'),
(62, 'Batuhan', 'Celik', 618545192, '1041570@mborijnland.nl', 'ddawdsdwa'),
(63, 'Batuhan', 'Celik', 618545192, '1041570@mborijnland.nl', 'ddawdsdwa'),
(64, 'dead', 'Celik', 618545192, 'timoer070@hotmail.com', 'dd'),
(65, 'dead', 'Celik', 618545192, 'timoer070@hotmail.com', 'ddwasd');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
