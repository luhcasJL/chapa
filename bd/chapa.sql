-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 14, 2020 at 09:11 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chapa`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `type` int(11) NOT NULL,
  `cep` varchar(12) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `number` varchar(50) NOT NULL,
  `neighborhood` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(2) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `summary` varchar(60) NOT NULL,
  `register` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `type`, `cep`, `adress`, `number`, `neighborhood`, `city`, `state`, `latitude`, `longitude`, `summary`, `register`) VALUES
(1, 'JL Tecno', 'jl@gmail.com', 1, '02471-210', 'Rua Rozo Lagoa', '300', 'Imirim', 'São Paulo', 'SP', '-22.8371724', '-45.2213445,14', '', '2020-06-14 00:00:00'),
(2, 'Restaurante Dona Florinda', 'florinda@gmail.com', 2, '02471-200', 'Rua Quirinópolis', '200', 'Imirim', 'São Paulo', 'SP', '-22.8550182', '-45.2235694,14', 'Panquecas, sanduiches de presunto, xícaras de café, etc', '2020-06-14 00:00:00'),
(3, 'Posto Seu Madruga', 'madruga@gmail.com', 1, '02471-200', 'Rua Quirinópolis', '200', 'Imirim', 'São Paulo', 'SP', '-22.8550182', '-45.2235694,14', 'Já fui de tudo nesse mundo', '2020-06-14 00:00:00'),
(4, 'Hotel Seu Barriga', 'barriga@gmail.com', 3, '02471-250', 'Rua Carvalho e Albuquerque', '400', 'Vila Basileia', 'São Paulo', 'SP', '-22.8550182', '-45.2235694,14', 'A melhor hospedaria da região', '2020-06-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` int(11) NOT NULL,
  `trucker` int(11) NOT NULL,
  `rating` float(10,2) NOT NULL,
  `testimony` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recuperar_senha`
--

DROP TABLE IF EXISTS `recuperar_senha`;
CREATE TABLE IF NOT EXISTS `recuperar_senha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sos`
--

DROP TABLE IF EXISTS `sos`;
CREATE TABLE IF NOT EXISTS `sos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `trucker` int(11) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `register` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sos`
--

INSERT INTO `sos` (`id`, `type`, `trucker`, `latitude`, `longitude`, `register`) VALUES
(1, 1, 3, '-22.8371724', '-45.2213445,14', '2020-06-14 02:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `type_company`
--

DROP TABLE IF EXISTS `type_company`;
CREATE TABLE IF NOT EXISTS `type_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_company`
--

INSERT INTO `type_company` (`id`, `type`, `description`) VALUES
(1, 1, 'Posto de Gasolina'),
(2, 2, 'Restaurante'),
(3, 3, 'Hotel'),
(4, 4, 'Borracharia');

-- --------------------------------------------------------

--
-- Table structure for table `type_sos`
--

DROP TABLE IF EXISTS `type_sos`;
CREATE TABLE IF NOT EXISTS `type_sos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_sos`
--

INSERT INTO `type_sos` (`id`, `type`, `description`) VALUES
(1, 1, 'Acidente'),
(2, 2, 'Assalto'),
(3, 3, 'Manutenção');

-- --------------------------------------------------------

--
-- Table structure for table `type_user`
--

DROP TABLE IF EXISTS `type_user`;
CREATE TABLE IF NOT EXISTS `type_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_user`
--

INSERT INTO `type_user` (`id`, `profile`, `description`) VALUES
(1, 1, 'Administrador'),
(2, 2, 'Caminhoneiro');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `profile` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `register` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `city`, `state`, `profile`, `email`, `password`, `register`) VALUES
(1, 'Admin', '', '', 1, 'admin@gmail.com', '$2y$10$spvu4A2OfcCdgZges9FWWutzAmyIgx91s6cYTwRkMQ8U1/FKsM/qS', '2020-05-01 12:58:37'),
(3, 'Lucas', 'Taiobeiras', 'Minas Gerais', 2, 'lucas@gmail.com', '$2y$10$btERPIA8exDzlSATZGGuIu8oes2g0T.st0pwpBOqSkl7isXS1KG56', '2020-06-13 14:38:01'),
(4, 'joao', 'São Paulo', 'São Paulo', 2, 'joao@gmail.com', '$2y$10$YhtrOq/xJr8XGQdEgUh.yumqmLNLhogX.AR6uU.1P7TQLLbAb6kQy', '2020-06-14 15:54:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
