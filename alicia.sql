-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 13 apr 2015 kl 10:57
-- Serverversion: 5.6.20
-- PHP-version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `alicia`
--
CREATE DATABASE IF NOT EXISTS `alicia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `alicia`;

-- --------------------------------------------------------

--
-- Tabellstruktur `index`
--

DROP TABLE IF EXISTS `index`;
CREATE TABLE IF NOT EXISTS `index` (
  `id` varchar(10) NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `index`
--

INSERT INTO `index` (`id`, `content`) VALUES
('h1-1', 'Be a part of ior'),
('p-1', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the gre'),
('h1-2', 'Our vison'),
('p-2', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the gre'),
('h1-3', 'Get a cute teddy bear'),
('p-3', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the gre');

-- --------------------------------------------------------

--
-- Tabellstruktur `inlog`
--

DROP TABLE IF EXISTS `inlog`;
CREATE TABLE IF NOT EXISTS `inlog` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `inlog`
--

INSERT INTO `inlog` (`username`, `password`) VALUES
('alicia', 'alicia');

-- --------------------------------------------------------

--
-- Tabellstruktur `om`
--

DROP TABLE IF EXISTS `om`;
CREATE TABLE IF NOT EXISTS `om` (
  `id` varchar(5) NOT NULL,
  `content` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `om`
--

INSERT INTO `om` (`id`, `content`) VALUES
('h2-1', 'CEO - Alicia Broberg'),
('p-1', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids'),
('h2-2', 'PR Director - Lovisa Schenning'),
('p-2', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids'),
('h2-3', 'Economy Director - Rebecka Ekström'),
('p-3', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids'),
('h2-4', 'Market Manager - Martin Benno Klevbrand'),
('p-4', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids'),
('h1', 'The Persons Behind BearHug');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `inlog`
--
ALTER TABLE `inlog`
 ADD UNIQUE KEY `username` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
