-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 13-Jun-2019 às 15:53
-- Versão do servidor: 5.6.43-cll-lve
-- versão do PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdezy3d`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `dia` int(2) NOT NULL,
  `mes` int(4) NOT NULL,
  `ano` int(4) NOT NULL,
  `nome_mes` varchar(20) NOT NULL,
  `nome_dia` varchar(20) NOT NULL,
  `visualizacoes` int(11) NOT NULL,
  `browser` int(11) NOT NULL,
  `facebook` int(11) NOT NULL,
  `googleads` int(11) NOT NULL,
  `instagram` int(11) NOT NULL,
  `cadastro` int(11) NOT NULL,
  `orcamento` int(11) NOT NULL,
  `suporte` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`dia`, `mes`, `ano`, `nome_mes`, `nome_dia`, `visualizacoes`, `browser`, `facebook`, `googleads`, `instagram`, `cadastro`, `orcamento`, `suporte`, `data`) VALUES
(8, 2, 2019, 'fev', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-08'),
(9, 2, 2019, 'fev', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-09'),
(10, 2, 2019, 'fev', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-10'),
(11, 2, 2019, 'fev', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-11'),
(12, 2, 2019, 'fev', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-12'),
(13, 2, 2019, 'fev', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-13'),
(14, 2, 2019, 'fev', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-14'),
(15, 2, 2019, 'fev', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-15'),
(16, 2, 2019, 'fev', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-16'),
(17, 2, 2019, 'fev', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-17'),
(18, 2, 2019, 'fev', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-18'),
(19, 2, 2019, 'fev', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-19'),
(20, 2, 2019, 'fev', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-20'),
(21, 2, 2019, 'fev', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-21'),
(22, 2, 2019, 'fev', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-22'),
(23, 2, 2019, 'fev', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-23'),
(24, 2, 2019, 'fev', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-24'),
(25, 2, 2019, 'fev', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-25'),
(26, 2, 2019, 'fev', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-26'),
(27, 2, 2019, 'fev', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-27'),
(28, 2, 2019, 'fev', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-28'),
(1, 3, 2019, 'mar', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-01'),
(2, 3, 2019, 'mar', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-02'),
(3, 3, 2019, 'mar', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-03'),
(4, 3, 2019, 'mar', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-04'),
(5, 3, 2019, 'mar', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-05'),
(6, 3, 2019, 'mar', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-06'),
(7, 3, 2019, 'mar', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-07'),
(8, 3, 2019, 'mar', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-08'),
(9, 3, 2019, 'mar', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-09'),
(10, 3, 2019, 'mar', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-10'),
(11, 3, 2019, 'mar', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-11'),
(12, 3, 2019, 'mar', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-12'),
(13, 3, 2019, 'mar', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-13'),
(14, 3, 2019, 'mar', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-14'),
(15, 3, 2019, 'mar', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-15'),
(16, 3, 2019, 'mar', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-16'),
(17, 3, 2019, 'mar', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-17'),
(18, 3, 2019, 'mar', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-18'),
(19, 3, 2019, 'mar', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-19'),
(20, 3, 2019, 'mar', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-20'),
(21, 3, 2019, 'mar', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-21'),
(22, 3, 2019, 'mar', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-22'),
(23, 3, 2019, 'mar', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-23'),
(24, 3, 2019, 'mar', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-24'),
(25, 3, 2019, 'mar', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-25'),
(26, 3, 2019, 'mar', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-26'),
(27, 3, 2019, 'mar', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-27'),
(28, 3, 2019, 'mar', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-28'),
(29, 3, 2019, 'mar', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-29'),
(30, 3, 2019, 'mar', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-30'),
(31, 3, 2019, 'mar', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-31'),
(1, 4, 2019, 'abr', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-01'),
(2, 4, 2019, 'abr', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-02'),
(3, 4, 2019, 'abr', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-03'),
(4, 4, 2019, 'abr', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-04'),
(5, 4, 2019, 'abr', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-05'),
(6, 4, 2019, 'abr', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-06'),
(7, 4, 2019, 'abr', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-07'),
(8, 4, 2019, 'abr', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-08'),
(9, 4, 2019, 'abr', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-09'),
(10, 4, 2019, 'abr', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-10'),
(11, 4, 2019, 'abr', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-11'),
(12, 4, 2019, 'abr', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-12'),
(13, 4, 2019, 'abr', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-13'),
(14, 4, 2019, 'abr', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-14'),
(15, 4, 2019, 'abr', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-15'),
(16, 4, 2019, 'abr', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-16'),
(17, 4, 2019, 'abr', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-17'),
(18, 4, 2019, 'abr', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-18'),
(19, 4, 2019, 'abr', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-19'),
(20, 4, 2019, 'abr', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-20'),
(21, 4, 2019, 'abr', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-21'),
(22, 4, 2019, 'abr', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-22'),
(23, 4, 2019, 'abr', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-23'),
(24, 4, 2019, 'abr', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-24'),
(25, 4, 2019, 'abr', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-25'),
(26, 4, 2019, 'abr', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-26'),
(27, 4, 2019, 'abr', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-27'),
(28, 4, 2019, 'abr', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-28'),
(29, 4, 2019, 'abr', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-29'),
(30, 4, 2019, 'abr', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-04-30'),
(1, 5, 2019, 'mai', 'qua', 20, 5, 10, 5, 0, 10, 10, 0, '2019-05-01'),
(2, 5, 2019, 'mai', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-02'),
(3, 5, 2019, 'mai', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-03'),
(4, 5, 2019, 'mai', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-04'),
(5, 5, 2019, 'mai', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-05'),
(6, 5, 2019, 'mai', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-06'),
(7, 5, 2019, 'mai', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-07'),
(8, 5, 2019, 'mai', 'qua', 5, 5, 0, 0, 0, 0, 0, 0, '2019-05-08'),
(9, 5, 2019, 'mai', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-09'),
(10, 5, 2019, 'mai', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-10'),
(11, 5, 2019, 'mai', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-11'),
(12, 5, 2019, 'mai', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-12'),
(13, 5, 2019, 'mai', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-13'),
(14, 5, 2019, 'mai', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-14'),
(15, 5, 2019, 'mai', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-15'),
(16, 5, 2019, 'mai', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-16'),
(17, 5, 2019, 'mai', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-17'),
(18, 5, 2019, 'mai', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-18'),
(19, 5, 2019, 'mai', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-19'),
(20, 5, 2019, 'mai', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-20'),
(21, 5, 2019, 'mai', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-21'),
(22, 5, 2019, 'mai', 'qua', 5, 0, 0, 5, 0, 0, 0, 0, '2019-05-22'),
(23, 5, 2019, 'mai', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-23'),
(24, 5, 2019, 'mai', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-24'),
(25, 5, 2019, 'mai', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-25'),
(26, 5, 2019, 'mai', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-26'),
(27, 5, 2019, 'mai', 'seg', 3, 0, 0, 0, 3, 0, 0, 0, '2019-05-27'),
(28, 5, 2019, 'mai', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-28'),
(29, 5, 2019, 'mai', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-29'),
(30, 5, 2019, 'mai', 'qui', 7, 0, 0, 0, 7, 0, 0, 0, '2019-05-30'),
(31, 5, 2019, 'mai', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-31'),
(1, 6, 2019, 'jun', 'sáb', 15, 5, 5, 0, 5, 0, 0, 0, '2019-06-01'),
(2, 6, 2019, 'jun', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-02'),
(3, 6, 2019, 'jun', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-03'),
(4, 6, 2019, 'jun', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-04'),
(5, 6, 2019, 'jun', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-05'),
(6, 6, 2019, 'jun', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-06'),
(7, 6, 2019, 'jun', 'sex', 10, 1, 0, 0, 0, 0, 0, 10, '2019-06-07'),
(8, 6, 2019, 'jun', 'sáb', 1, 1, 0, 0, 0, 0, 0, 0, '2019-06-08'),
(9, 6, 2019, 'jun', 'dom', 1, 1, 0, 0, 0, 0, 0, 0, '2019-06-09'),
(10, 6, 2019, 'jun', 'seg', 4, 4, 0, 0, 0, 0, 0, 0, '2019-06-10'),
(11, 6, 2019, 'jun', 'ter', 4, 4, 0, 0, 0, 1, 4, 4, '2019-06-11'),
(12, 6, 2019, 'jun', 'qua', 20, 20, 0, 0, 0, 0, 2, 0, '2019-06-12'),
(13, 6, 2019, 'jun', 'qui', 28, 25, 0, 0, 3, 4, 1, 0, '2019-06-13'),
(14, 6, 2019, 'jun', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-14'),
(15, 6, 2019, 'jun', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-15'),
(16, 6, 2019, 'jun', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-16'),
(17, 6, 2019, 'jun', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-17'),
(18, 6, 2019, 'jun', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-18'),
(19, 6, 2019, 'jun', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-19'),
(20, 6, 2019, 'jun', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-20'),
(21, 6, 2019, 'jun', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-21'),
(22, 6, 2019, 'jun', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-22'),
(23, 6, 2019, 'jun', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-23'),
(24, 6, 2019, 'jun', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-24'),
(25, 6, 2019, 'jun', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-25'),
(26, 6, 2019, 'jun', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-26'),
(27, 6, 2019, 'jun', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-27'),
(28, 6, 2019, 'jun', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-28'),
(29, 6, 2019, 'jun', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-29'),
(30, 6, 2019, 'jun', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-30'),
(1, 7, 2019, 'jul', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-01'),
(2, 7, 2019, 'jul', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-02'),
(3, 7, 2019, 'jul', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-03'),
(4, 7, 2019, 'jul', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-04'),
(5, 7, 2019, 'jul', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-05'),
(6, 7, 2019, 'jul', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-06'),
(7, 7, 2019, 'jul', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-07'),
(8, 7, 2019, 'jul', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-08'),
(9, 7, 2019, 'jul', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-09'),
(10, 7, 2019, 'jul', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-10'),
(11, 7, 2019, 'jul', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-11'),
(12, 7, 2019, 'jul', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-12'),
(13, 7, 2019, 'jul', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-13'),
(14, 7, 2019, 'jul', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-14'),
(15, 7, 2019, 'jul', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-15'),
(16, 7, 2019, 'jul', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-16'),
(17, 7, 2019, 'jul', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-17'),
(18, 7, 2019, 'jul', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-18'),
(19, 7, 2019, 'jul', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-19'),
(20, 7, 2019, 'jul', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-20'),
(21, 7, 2019, 'jul', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-21'),
(22, 7, 2019, 'jul', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-22'),
(23, 7, 2019, 'jul', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-23'),
(24, 7, 2019, 'jul', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-24'),
(25, 7, 2019, 'jul', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-25'),
(26, 7, 2019, 'jul', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-26'),
(27, 7, 2019, 'jul', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-27'),
(28, 7, 2019, 'jul', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-28'),
(29, 7, 2019, 'jul', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-29'),
(30, 7, 2019, 'jul', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-30'),
(31, 7, 2019, 'jul', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-31'),
(1, 8, 2019, 'ago', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-01'),
(2, 8, 2019, 'ago', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-02'),
(3, 8, 2019, 'ago', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-03'),
(4, 8, 2019, 'ago', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-04'),
(5, 8, 2019, 'ago', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-05'),
(6, 8, 2019, 'ago', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-06'),
(7, 8, 2019, 'ago', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-07'),
(8, 8, 2019, 'ago', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-08'),
(9, 8, 2019, 'ago', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-09'),
(10, 8, 2019, 'ago', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-10'),
(11, 8, 2019, 'ago', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-11'),
(12, 8, 2019, 'ago', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-12'),
(13, 8, 2019, 'ago', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-13'),
(14, 8, 2019, 'ago', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-14'),
(15, 8, 2019, 'ago', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-15'),
(16, 8, 2019, 'ago', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-16'),
(17, 8, 2019, 'ago', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-17'),
(18, 8, 2019, 'ago', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-18'),
(19, 8, 2019, 'ago', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-19'),
(20, 8, 2019, 'ago', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-20'),
(21, 8, 2019, 'ago', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-21'),
(22, 8, 2019, 'ago', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-22'),
(23, 8, 2019, 'ago', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-23'),
(24, 8, 2019, 'ago', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-24'),
(25, 8, 2019, 'ago', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-25'),
(26, 8, 2019, 'ago', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-26'),
(27, 8, 2019, 'ago', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-27'),
(28, 8, 2019, 'ago', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-28'),
(29, 8, 2019, 'ago', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-29'),
(30, 8, 2019, 'ago', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-30'),
(31, 8, 2019, 'ago', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-08-31'),
(1, 9, 2019, 'set', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-01'),
(2, 9, 2019, 'set', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-02'),
(3, 9, 2019, 'set', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-03'),
(4, 9, 2019, 'set', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-04'),
(5, 9, 2019, 'set', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-05'),
(6, 9, 2019, 'set', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-06'),
(7, 9, 2019, 'set', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-07'),
(8, 9, 2019, 'set', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-08'),
(9, 9, 2019, 'set', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-09'),
(10, 9, 2019, 'set', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-10'),
(11, 9, 2019, 'set', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-11'),
(12, 9, 2019, 'set', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-12'),
(13, 9, 2019, 'set', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-13'),
(14, 9, 2019, 'set', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-14'),
(15, 9, 2019, 'set', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-15'),
(16, 9, 2019, 'set', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-16'),
(17, 9, 2019, 'set', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-17'),
(18, 9, 2019, 'set', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-18'),
(19, 9, 2019, 'set', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-19'),
(20, 9, 2019, 'set', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-20'),
(21, 9, 2019, 'set', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-21'),
(22, 9, 2019, 'set', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-22'),
(23, 9, 2019, 'set', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-23'),
(24, 9, 2019, 'set', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-24'),
(25, 9, 2019, 'set', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-25'),
(26, 9, 2019, 'set', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-26'),
(27, 9, 2019, 'set', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-27'),
(28, 9, 2019, 'set', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-28'),
(29, 9, 2019, 'set', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-29'),
(30, 9, 2019, 'set', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-09-30'),
(1, 10, 2019, 'out', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-01'),
(2, 10, 2019, 'out', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-02'),
(3, 10, 2019, 'out', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-03'),
(4, 10, 2019, 'out', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-04'),
(5, 10, 2019, 'out', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-05'),
(6, 10, 2019, 'out', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-06'),
(7, 10, 2019, 'out', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-07'),
(8, 10, 2019, 'out', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-08'),
(9, 10, 2019, 'out', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-09'),
(10, 10, 2019, 'out', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-10'),
(11, 10, 2019, 'out', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-11'),
(12, 10, 2019, 'out', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-12'),
(13, 10, 2019, 'out', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
(14, 10, 2019, 'out', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-14'),
(15, 10, 2019, 'out', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-15'),
(16, 10, 2019, 'out', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-16'),
(17, 10, 2019, 'out', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-17'),
(18, 10, 2019, 'out', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-18'),
(19, 10, 2019, 'out', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-19'),
(20, 10, 2019, 'out', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-20'),
(21, 10, 2019, 'out', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-21'),
(22, 10, 2019, 'out', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-22'),
(23, 10, 2019, 'out', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-23'),
(24, 10, 2019, 'out', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-24'),
(25, 10, 2019, 'out', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-25'),
(26, 10, 2019, 'out', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-26'),
(27, 10, 2019, 'out', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-27'),
(28, 10, 2019, 'out', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-28'),
(29, 10, 2019, 'out', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-29'),
(30, 10, 2019, 'out', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-30'),
(31, 10, 2019, 'out', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-31'),
(1, 11, 2019, 'nov', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-01'),
(2, 11, 2019, 'nov', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-02'),
(3, 11, 2019, 'nov', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-03'),
(4, 11, 2019, 'nov', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-04'),
(5, 11, 2019, 'nov', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-05'),
(6, 11, 2019, 'nov', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-06'),
(7, 11, 2019, 'nov', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-07'),
(8, 11, 2019, 'nov', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-08'),
(9, 11, 2019, 'nov', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-09'),
(10, 11, 2019, 'nov', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-10'),
(11, 11, 2019, 'nov', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-11'),
(12, 11, 2019, 'nov', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-12'),
(13, 11, 2019, 'nov', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-13'),
(14, 11, 2019, 'nov', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-14'),
(15, 11, 2019, 'nov', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-15'),
(16, 11, 2019, 'nov', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-16'),
(17, 11, 2019, 'nov', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-17'),
(18, 11, 2019, 'nov', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-18'),
(19, 11, 2019, 'nov', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-19'),
(20, 11, 2019, 'nov', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-20'),
(21, 11, 2019, 'nov', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-21'),
(22, 11, 2019, 'nov', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-22'),
(23, 11, 2019, 'nov', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-23'),
(24, 11, 2019, 'nov', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-24'),
(25, 11, 2019, 'nov', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-25'),
(26, 11, 2019, 'nov', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-26'),
(27, 11, 2019, 'nov', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-27'),
(28, 11, 2019, 'nov', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-28'),
(29, 11, 2019, 'nov', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-29'),
(30, 11, 2019, 'nov', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-11-30'),
(1, 12, 2019, 'dez', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-01'),
(2, 12, 2019, 'dez', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-02'),
(3, 12, 2019, 'dez', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-03'),
(4, 12, 2019, 'dez', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-04'),
(5, 12, 2019, 'dez', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-05'),
(6, 12, 2019, 'dez', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-06'),
(7, 12, 2019, 'dez', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-07'),
(8, 12, 2019, 'dez', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-08'),
(9, 12, 2019, 'dez', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-09'),
(10, 12, 2019, 'dez', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-10'),
(11, 12, 2019, 'dez', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-11'),
(12, 12, 2019, 'dez', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-12'),
(13, 12, 2019, 'dez', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-13'),
(14, 12, 2019, 'dez', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-14'),
(15, 12, 2019, 'dez', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-15'),
(16, 12, 2019, 'dez', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-16'),
(17, 12, 2019, 'dez', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-17'),
(18, 12, 2019, 'dez', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-18'),
(19, 12, 2019, 'dez', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-19'),
(20, 12, 2019, 'dez', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-20'),
(21, 12, 2019, 'dez', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-21'),
(22, 12, 2019, 'dez', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-22'),
(23, 12, 2019, 'dez', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-23'),
(24, 12, 2019, 'dez', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-24'),
(25, 12, 2019, 'dez', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-25'),
(26, 12, 2019, 'dez', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-26'),
(27, 12, 2019, 'dez', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-27'),
(28, 12, 2019, 'dez', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-28'),
(29, 12, 2019, 'dez', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-29'),
(30, 12, 2019, 'dez', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-30'),
(31, 12, 2019, 'dez', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-12-31'),
(7, 2, 2019, 'fev', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-07'),
(6, 2, 2019, 'fev', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-06'),
(5, 2, 2019, 'fev', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-05'),
(4, 2, 2019, 'fev', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-04'),
(3, 2, 2019, 'fev', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-03'),
(2, 2, 2019, 'fev', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-02'),
(1, 2, 2019, 'fev', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-02-01'),
(31, 1, 2019, 'jan', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-31'),
(30, 1, 2019, 'jan', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-30'),
(29, 1, 2019, 'jan', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-29'),
(28, 1, 2019, 'jan', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-28'),
(27, 1, 2019, 'jan', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-27'),
(26, 1, 2019, 'jan', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-26'),
(25, 1, 2019, 'jan', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-25'),
(24, 1, 2019, 'jan', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-24'),
(23, 1, 2019, 'jan', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-23'),
(22, 1, 2019, 'jan', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-22'),
(21, 1, 2019, 'jan', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-21'),
(20, 1, 2019, 'jan', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-20'),
(19, 1, 2019, 'jan', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-19'),
(18, 1, 2019, 'jan', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-18'),
(17, 1, 2019, 'jan', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-17'),
(16, 1, 2019, 'jan', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-16'),
(15, 1, 2019, 'jan', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-15'),
(14, 1, 2019, 'jan', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-14'),
(13, 1, 2019, 'jan', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-13'),
(12, 1, 2019, 'jan', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-12'),
(11, 1, 2019, 'jan', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-11'),
(10, 1, 2019, 'jan', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-10'),
(9, 1, 2019, 'jan', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-09'),
(8, 1, 2019, 'jan', 'ter', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-08'),
(7, 1, 2019, 'jan', 'seg', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-07'),
(6, 1, 2019, 'jan', 'dom', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-06'),
(5, 1, 2019, 'jan', 'sáb', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-05'),
(4, 1, 2019, 'jan', 'sex', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-04'),
(3, 1, 2019, 'jan', 'qui', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-03'),
(2, 1, 2019, 'jan', 'qua', 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-02'),
(1, 1, 2019, 'jan', 'ter', 500, 0, 0, 0, 0, 0, 0, 0, '2019-01-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` char(40) NOT NULL,
  `permissao` varchar(7) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`idadmin`, `nome`, `cargo`, `email`, `senha`, `permissao`) VALUES
(1, 'Gabriel de Oliveira', 'Técnico de TI', 'ti@ezy3d.com.br', '7ce0359f12857f2a90c7de465f40a95f01cb5da9', '@571824'),
(8, 'Douglas Guerra', 'Engenheiro', 'engenharia@ezy3d.com.br', '8b9ecb2803feabd5b78a99d1fb130f1988fee425', '&43642');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `telefone` char(11) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `ramo` varchar(20) DEFAULT NULL,
  `empresa` varchar(20) DEFAULT NULL,
  `local_acesso` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `sobrenome`, `email`, `senha`, `telefone`, `pais`, `ramo`, `empresa`, `local_acesso`) VALUES
(1, 'Gabriel', 'de Oliveira', 'gblosr@gmail.com', '4ea842c8c6304f4a418835fb6665df10524df1a5', '15997458852', 'Brasil', 'Informática', 'Ezy3D', 'facebook'),
(4, 'Teste', 'Testando', 'teste@gmail.com', '4ea842c8c6304f4a418835fb6665df10524df1a5', '11111111111', 'Brasil', 'Manufatura', 'IBM', 'instagram');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `idcontato` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(80) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`idcontato`, `nome`, `email`, `assunto`, `msg`, `data`) VALUES
(6, 'Gabriel de Oliveira Soares Ribeiro', 'gblosr@gmail.com', 'Teste', 'Testando', '2019-06-07 11:42:57'),
(8, 'Teste', 'gblosr@gmail.com', 'teste', '', '2019-06-12 16:01:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `apelido` varchar(30) NOT NULL,
  `pagina` varchar(30) NOT NULL,
  `pt` text,
  `en` text,
  `es` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`apelido`, `pagina`, `pt`, `en`, `es`) VALUES
('item0', 'menu', 'Inicio', 'Home', 'Primero'),
('item1', 'menu', 'Impressoras 3D', '3D Printers', 'Impresoras 3D'),
('printer1', 'menu', 'E1260T', 'E1260T', 'E1260T'),
('printer2', 'menu', 'Phylos', 'Phylos', 'Phylos'),
('printer3', 'menu', 'Core E3', 'Core E3', 'Core E3'),
('item2', 'menu', 'Acessórios', 'Accessories', 'Accesorios'),
('acessorio1', 'menu', 'EzyCure', 'EzyCure', 'EzyCure'),
('item3', 'menu', 'Aplicações', 'Applications', 'Aplicaciones'),
('aplicacao1', 'menu', 'Odontologia', 'Dentistry', 'Odontología'),
('aplicacao2', 'menu', 'Manufatura', 'Manufacturing', 'Manufactura'),
('aplicacao3', 'menu', 'Educação', 'Education', 'Educación'),
('aplicacao4', 'menu', 'Joalheria', 'Jewelry', 'Joyas'),
('item4', 'menu', 'Contato', 'Contact', 'Contacto'),
('logar', 'menu', 'Logar', 'Log in', 'Entrar'),
('cadastrar', 'menu', 'Cadastrar', 'Register', 'Registro'),
('perfil', 'menu', 'Perfil', 'Profile', 'Perfil'),
('sair', 'menu', 'Sair', 'Log out', 'Cerrar sesión'),
('idiomas', 'menu', 'Português', 'English', 'Español'),
('loginmodal_email', 'menu', 'E-mail', 'Email', 'E-mail'),
('loginmodal_senha', 'menu', 'Senha', 'Password', 'Contraseña'),
('loginmodal_logar', 'menu', 'Logar', 'Log in', 'Acceder'),
('loginmodal_erro1', 'menu', 'Senha ou e-mail incorreto(s).', 'Incorrect password or email (s).', 'Contraseña o e-mail incorrecto (s).'),
('loginmodal_erro2', 'menu', 'Insira as informações corretamente.', 'Enter the information correctly.', 'Introduzca la información correctamente.'),
('rdp_comocomprar', 'rodape', 'Como comprar', 'How to buy', 'Como comprar'),
('rdp_contato', 'rodape', 'Contato', 'Contact', 'Contacto'),
('rdp_suporteaocliente', 'rodape', 'Suporte ao cliente', 'Customer support', 'Soporte al cliente'),
('rdp_titulo1', 'rodape', 'EZY 3D', 'EZY 3D', 'EZY 3D'),
('rdp_txt1', 'rodape', 'Uma empresa para o que você pode precisar, da prototipagem do website à publicação', 'A company for whatever you may need, from website prototyping to publishing', 'Una empresa para lo que necesite, desde prototipos de sitios web hasta publicaciones.'),
('rdp_titulo2', 'rodape', 'Site', 'Site', 'Sitio'),
('rdp_titulo3', 'rodape', 'Contato', 'Contact', 'Contacto'),
('rdp_item1', 'rodape', '+246 - 542 550 5462', '+246 - 542 550 5462', '+246 - 542 550 5462'),
('rdp_item2', 'rodape', 'info@pingendo.com', 'info@pingendo.com', 'info@pingendo.com'),
('rdp_item3', 'rodape', '365 Park Street, NY', '365 Park Street, NY', '365 Park Street, NY'),
('rdp_titulo4', 'rodape', 'Newsletter', 'Newsletter', 'Newsletter'),
('rdp_txt4', 'rodape', 'Receber atualizações', 'Get Updates', 'Recibir actualizaciones'),
('rdp_button1', 'rodape', 'Enviar', 'Submit', 'Enviar'),
('rdp_copy', 'rodape', ' | EZY3D Printing', ' | EZY3D Printing', ' | EZY3D Printing'),
('titulo1', 'home', 'Ezy3D', 'Ezy3D', 'Ezy3D'),
('txt1', 'home', 'Empresa brasileira, especializada em impressoras 3D, tem como missão proporcionar o melhor custo / benefício do mercado para seus clientes. Conheça nosso principal produto clicando no botão abaixo:', 'Empresa brasileira, especializada em impressoras 3D, tem como missão proporcionar o melhor custo / benefício do mercado para seus clientes. Conheça nosso principal produto clicando no botão abaixo:', 'Empresa brasileira, especializada em impressoras 3D, tem como missão proporcionar o melhor custo / benefício do mercado para seus clientes. Conheça nosso principal produto clicando no botão abaixo:'),
('button1', 'home', 'Impressora 3D E1260T', 'Impressora 3D E1260T', 'Impressora 3D E1260T'),
('titulo2', 'home', 'Odontologia', 'Odontologia', 'Odontologia'),
('txt2', 'home', 'A indústria odontológica vem passando por uma revolução digital...', 'A indústria odontológica vem passando por uma revolução digital...', 'A indústria odontológica vem passando por uma revolução digital...'),
('button2', 'home', 'Saiba mais', 'Saiba mais', 'Saiba mais'),
('titulo3', 'home', 'Joalheria', 'Joalheria', 'Joalheria'),
('txt3', 'home', 'De sua imaginação, para a realidade de forma simples!', 'De sua imaginação, para a realidade de forma simples!', 'De sua imaginação, para a realidade de forma simples!'),
('button3', 'home', 'Saiba mais', 'Saiba mais', 'Saiba mais'),
('titulo4', 'home', 'Impressoras 3D', 'Impressoras 3D', 'Impressoras 3D'),
('produto1', 'home', 'E1260T', 'E1260T', 'E1260T'),
('titulo1', 'printer_e1260t', 'E1260T', 'E1260T', 'E1260T'),
('txt1', 'printer_e1260t', 'Pingendo para apps e techies', 'Pingendo for apps and techies', 'Pinging para aplicaciones y técnicos'),
('button1', 'printer_e1260t', 'Orçamento', 'Secundário1', 'Secundario1'),
('button2', 'printer_e1260t', 'Mais informações', 'Secundário2', 'Secundario2'),
('titulo2', 'printer_e1260t', 'O my friend', 'O my friend', 'O my friend'),
('txt2', 'printer_e1260t', 'PT - A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.', 'EN - A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.', 'ES - A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.'),
('txt2_1', 'printer_e1260t', 'PT - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.', 'EN - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.', 'ES - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.'),
('txt2_2', 'printer_e1260t', 'PT - My friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power.', 'EN - My friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power.', 'ES - My friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power.'),
('titulo3', 'printer_e1260t', 'PT - I enjoy with my whole heart', 'EN - I enjoy with my whole heart', 'ES - I enjoy with my whole heart'),
('txt3', 'printer_e1260t', 'PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.', 'EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.', 'ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.'),
('titulo4', 'printer_e1260t', 'PT - Features from the future', 'EN - Features from the future', 'ES - Features from the future'),
('titulo_especificacao1', 'printer_e1260t', 'PT - Responsive design', 'EN - Responsive design', 'ES - Responsive design'),
('txt_especificacao1', 'printer_e1260t', 'PT - Based on fluid design principles. Works with any screen resolution', 'EN - Based on fluid design principles. Works with any screen resolution', 'ES - Based on fluid design principles. Works with any screen resolution'),
('titulo_especificacao2', 'printer_e1260t', 'PT - Customized settings', 'EN - Customized settings', 'ES - Customized settings'),
('txt_especificacao2', 'printer_e1260t', 'PT - Choose settings depending on the criteria you value the most. With no limits.', 'EN - Choose settings depending on the criteria you value the most. With no limits.', 'ES - Choose settings depending on the criteria you value the most. With no limits.'),
('titulo_especificacao3', 'printer_e1260t', 'PT - Connect', 'EN - Connect', 'ES - Connect'),
('txt_especificacao3', 'printer_e1260t', 'PT - In-app chat panel 24/7 active. The support you need, right there', 'EN - In-app chat panel 24/7 active. The support you need, right there', 'ES - In-app chat panel 24/7 active. The support you need, right there'),
('titulo_especificacao4', 'printer_e1260t', 'PT - Battery-friendly', 'EN - Battery-friendly', 'ES - Battery-friendly'),
('txt_especificacao4', 'printer_e1260t', 'PT - Non consuming background operation for longer mobile life', 'EN - Non consuming background operation for longer mobile life', 'ES - Non consuming background operation for longer mobile life'),
('titulo_especificacao5', 'printer_e1260t', 'PT - Multilayers', 'EN - Multilayers', 'ES - Multilayers'),
('txt_especificacao5', 'printer_e1260t', 'PT - Work simultaneously on different panels with the switcher', 'EN - Work simultaneously on different panels with the switcher', 'ES - Work simultaneously on different panels with the switcher'),
('titulo_especificacao6', 'printer_e1260t', 'PT - Share the love', 'EN - Share the love', 'ES - Share the love'),
('txt_especificacao6', 'printer_e1260t', 'PT - Help us spreading the word. Tell your friends with just one-click', 'EN - Help us spreading the word. Tell your friends with just one-click', 'ES - Help us spreading the word. Tell your friends with just one-click'),
('button3', 'printer_e1260t', 'Contato', 'EN - Do something bold', 'ES - Do something bold'),
('titulo5', 'printer_e1260t', 'Para  mais informações entre em contato.', 'EN - Do not procrastinate. Act', 'ES - Do not procrastinate. Act'),
('titulo1', 'printer_phylos', 'PT - Heading 1', 'EN - Heading 1', 'ES - Heading 1'),
('txt1', 'printer_phylos', 'PT - Paragraph. Then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing.', 'EN - Paragraph. Then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing.', 'ES - Paragraph. Then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing.'),
('titulo2', 'printer_phylos', 'PT - A wonderful serenity', 'EN - A wonderful serenity', 'ES - A wonderful serenity'),
('txt2', 'printer_phylos', 'PT - Has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.', 'EN - Has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.', 'ES - Has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.'),
('txt2_1', 'printer_phylos', 'PT - Choose an option', 'EN - Choose an option', 'ES - Choose an option'),
('titulo3', 'printer_phylos', 'PT - I enjoy with my whole heart', 'EN - I enjoy with my whole heart', 'ES - I enjoy with my whole heart'),
('txt3', 'printer_phylos', 'PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.', 'EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.', 'ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.'),
('titulo4', 'printer_phylos', 'PT - I lie close to the earth', 'EN - I lie close to the earth', 'ES - I lie close to the earth'),
('titulo4_1', 'printer_phylos', 'PT - One', 'EN - One', 'ES - One'),
('txt4_1', 'printer_phylos', 'PT - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.', 'EN - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.', 'ES - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.'),
('titulo4_2', 'printer_phylos', 'PT - Two', 'EN - Two', 'ES - Two'),
('txt4_2', 'printer_phylos', 'PT - So full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!', 'EN - So full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!', 'ES - So full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!'),
('titulo4_3', 'printer_phylos', 'PT - Three', 'EN - Three', 'ES - Three'),
('txt4_3', 'printer_phylos', 'PT - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!', 'EN - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!', 'ES - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!'),
('titulo5', 'printer_phylos', 'PT - Call your visitors to act. Now', 'EN - Call your visitors to act. Now', 'ES - Call your visitors to act. Now'),
('button1', 'printer_phylos', 'PT - Get your license', 'EN - Get your license', 'ES - Get your license'),
('titulo1', 'printer_coree3', 'PT - I enjoy with my whole heart', 'EN - I enjoy with my whole heart', 'ES - I enjoy with my whole heart'),
('txt1', 'printer_coree3', 'PT - I am alone, and feel the charm of existence in this spot.', 'EN - I am alone, and feel the charm of existence in this spot.', 'ES - I am alone, and feel the charm of existence in this spot.'),
('titulo2', 'printer_coree3', 'PT - Indescribable forms', 'EN - Indescribable forms', 'ES - Indescribable forms'),
('txt2', 'printer_coree3', 'PT - And yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface.', 'EN - And yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface.', 'ES - And yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface.'),
('titulo3', 'printer_coree3', 'PT - We are not alone', 'EN - We are not alone', 'ES - We are not alone'),
('txt3', 'printer_coree3', 'PT - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!', 'EN - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!', 'ES - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!'),
('card_titulo1', 'printer_coree3', 'PT - Johann Goethe1', 'EN - Johann Goethe1', 'ES - Johann Goethe1'),
('card_p1', 'printer_coree3', 'PT - CEO & Founder1', 'EN - CEO & Founder1', 'ES - CEO & Founder1'),
('card_titulo2', 'printer_coree3', 'PT - Johann Goethe2', 'EN - Johann Goethe2', 'ES - Johann Goethe2'),
('card_p2', 'printer_coree3', 'PT - CEO & Founder2', 'EN - CEO & Founder2', 'ES - CEO & Founder2'),
('card_titulo3', 'printer_coree3', 'PT - Johann Goethe3', 'EN - Johann Goethe3', 'ES - Johann Goethe3'),
('card_p3', 'printer_coree3', 'PT - CEO & Founder3', 'EN - CEO & Founder3', 'ES - CEO & Founder3'),
('card_titulo4', 'printer_coree3', 'PT - Johann Goethe4', 'EN - Johann Goethe4', 'ES - Johann Goethe4'),
('card_p4', 'printer_coree3', 'PT - CEO & Founder4', 'EN - CEO & Founder4', 'ES - CEO & Founder4'),
('titulo4', 'printer_coree3', 'PT - I enjoy with my whole heart', 'EN - I enjoy with my whole heart', 'ES - I enjoy with my whole heart'),
('titulo4_1', 'printer_coree3', 'PT - One1', 'EN - One1', 'ES - One1'),
('txt4_1', 'printer_coree3', 'PT - A wonderful serenity has taken possession of my entire soul.', 'EN - A wonderful serenity has taken possession of my entire soul.', 'ES - A wonderful serenity has taken possession of my entire soul.'),
('titulo4_2', 'printer_coree3', 'PT - One2', 'EN - One2', 'ES - One2'),
('txt4_2', 'printer_coree3', 'PT - A wonderful serenity has taken possession of my entire soul.', 'EN - A wonderful serenity has taken possession of my entire soul.', 'ES - A wonderful serenity has taken possession of my entire soul.'),
('titulo4_3', 'printer_coree3', 'PT - One3', 'EN - One3', 'ES - One3'),
('txt4_3', 'printer_coree3', 'PT - A wonderful serenity has taken possession of my entire soul.', 'EN - A wonderful serenity has taken possession of my entire soul.', 'ES - A wonderful serenity has taken possession of my entire soul.'),
('titulo4_4', 'printer_coree3', 'PT - One4', 'EN - One4', 'ES - One4'),
('txt4_4', 'printer_coree3', 'PT - A wonderful serenity has taken possession of my entire soul.', 'EN - A wonderful serenity has taken possession of my entire soul.', 'ES - A wonderful serenity has taken possession of my entire soul.'),
('titulo4_5', 'printer_coree3', 'PT - One5', 'EN - One5', 'ES - One5'),
('txt4_5', 'printer_coree3', 'PT - A wonderful serenity has taken possession of my entire soul.', 'EN - A wonderful serenity has taken possession of my entire soul.', 'ES - A wonderful serenity has taken possession of my entire soul.'),
('titulo4_6', 'printer_coree3', 'PT - One6', 'EN - One6', 'ES - One6'),
('txt4_6', 'printer_coree3', 'PT - A wonderful serenity has taken possession of my entire soul.', 'EN - A wonderful serenity has taken possession of my entire soul.', 'ES - A wonderful serenity has taken possession of my entire soul.'),
('titulo5', 'printer_coree3', 'PT - It is time to act', 'EN - It is time to act', 'ES - It is time to act'),
('txt5', 'printer_coree3', 'PT - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.', 'EN - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.', 'ES - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.'),
('button1', 'printer_coree3', 'PT - Call to action', 'EN - Call to action', 'ES - Call to action'),
('titulo1', 'acessorio_ezycure', 'PT - Display 4', 'EN - Display 4', 'ES - Display 4'),
('txt1', 'acessorio_ezycure', 'PT - Lead paragraph. A wonderful serenity has taken possession of my entire soul.', 'EN - Lead paragraph. A wonderful serenity has taken possession of my entire soul.', 'ES - Lead paragraph. A wonderful serenity has taken possession of my entire soul.'),
('titulo2', 'acessorio_ezycure', 'PT - O my friend', 'EN - O my friend', 'ES - O my friend'),
('titulo2_1', 'acessorio_ezycure', 'PT - The trickling stream', 'EN - The trickling stream', 'ES - The trickling stream'),
('txt2', 'acessorio_ezycure', 'PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies', 'EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies', 'ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies'),
('titulo3', 'acessorio_ezycure', 'PT - I hear the buzz', 'EN - I hear the buzz', 'ES - I hear the buzz'),
('titulo3_1', 'acessorio_ezycure', 'PT - First', 'EN - First', 'ES - First'),
('txt3_1', 'acessorio_ezycure', 'PT - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'EN - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'ES - I am so happy, my dear friend, so absorbed in the exquisite sense.'),
('titulo3_2', 'acessorio_ezycure', 'PT - First', 'EN - First', 'ES - First'),
('txt3_2', 'acessorio_ezycure', 'PT - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'EN - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'ES - I am so happy, my dear friend, so absorbed in the exquisite sense.'),
('titulo3_3', 'acessorio_ezycure', 'PT - First', 'EN - First', 'ES - First'),
('txt3_3', 'acessorio_ezycure', 'PT - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'EN - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'ES - I am so happy, my dear friend, so absorbed in the exquisite sense.'),
('titulo3_4', 'acessorio_ezycure', 'PT - First', 'EN - First', 'ES - First'),
('txt3_4', 'acessorio_ezycure', 'PT - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'EN - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'ES - I am so happy, my dear friend, so absorbed in the exquisite sense.'),
('titulo4', 'acessorio_ezycure', 'PT - Countless indescribable forms', 'EN - Countless indescribable forms', 'ES - Countless indescribable forms'),
('titulo5', 'acessorio_ezycure', 'PT - It is time to act', 'EN - It is time to act', 'ES - It is time to act'),
('txt5', 'acessorio_ezycure', 'PT - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.', 'EN - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.', 'ES - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.'),
('button1', 'acessorio_ezycure', 'PT - Call to action', 'EN - Call to action', 'ES - Call to action'),
('titulo1', 'app_odontologia', 'Odontologia', 'Dentistry', 'Odontología'),
('txt1', 'app_odontologia', 'A indústria odontológica vem passando por uma revolução digital, e a EZY 3D está vindo justamente para suprir essas necessidades. As soluções oferecidas por nós são acessíveis e marcantes deixam de forma fácil o início na impressão. ', 'La industria dental está experimentando una revolución digital, y EZY 3D está llegando a satisfacer esas necesidades. Las soluciones que ofrecemos son asequibles y excepcionales y facilitan el inicio de la impresión.\r\n', 'The dental industry is undergoing a digital revolution, and EZY 3D is coming to meet those needs. The solutions offered by us are affordable and outstanding make it easy to start printing.'),
('titulo2', 'app_odontologia', 'Crescimento Escalável ', 'Scalable Growth\r\n', 'Crecimiento escalable\r\n'),
('txt2', 'app_odontologia', 'Com nossas impressoras E1260T, Phylos e Core E3 conheça a oportunidade de um crescimento exponencial e simples em sua produção odontológica. De forma versátil aumente sua produção, com a adição de nossas impressoras juntamente a nossa câmara de cura, simples assim. Isso permite uma consolidação, escalabilidade e consistência aos seus meios de produção. ', 'With our E1260T, Phylos and Core E3 printers you know the opportunity for exponential and simple growth in your dental production. In a versatile way increase your production, with the addition of our printers together with our cure chamber, simple as well. This allows for consolidation, scalability, and consistency of your means of production.', 'Con nuestras impresoras E1260T, Phylos y Core E3 conozca la oportunidad de un crecimiento exponencial y simple en su producción odontológica. De forma versátil aumente su producción, con la adición de nuestras impresoras junto a nuestra cámara de curación, simple así. Esto permite una consolidación, escalabilidad y consistencia a sus medios de producción.'),
('titulo3', 'app_odontologia', 'Uma impressão, várias impressões', 'Una impresión, varias impresiones', 'One print, various prints'),
('txt3', 'app_odontologia', 'Com apenas uma impressão consiga fazer  vários moldes odontológicos, basta ajustar do tamanho certo as impressões para caber na plataforma da impressora.', 'With just one print you can make multiple dental templates, just adjust the right size prints to fit on the printer platform.', '\r\nCon sólo una impresión consiga hacer varios moldes odontológicos, basta con ajustar el tamaño adecuado de las impresiones para caber en la plataforma de la impresora.'),
('titulo4', 'app_odontologia', 'Complexidade nas impressões', 'Impression Complexity', 'Complejidad en las impresiones'),
('txt4', 'app_odontologia', 'Consiga fazer diferentes moldes replicando arcadas dentarias de diferentes casos e de diferente complexidades.', 'Get different molds by replicating dental arches of different cases and different complexities.', 'Consiga hacer diferentes moldes replicando arcadas dentarias de diferentes casos y de diferentes complejidades'),
('titulo5', 'app_odontologia', 'Uma impressão várias possibilidades.', 'One impression several possibilities.', 'Una impresión varias posibilidades.'),
('titulo6', 'app_odontologia', 'Para mais informações entre em contato', 'For more information please contact us', 'Para obtener más información, póngase en contacto con nosotros'),
('button1', 'app_odontologia', 'Saiba mais', 'know more', 'Sepa mas'),
('titulo1', 'app_joalheria', 'Joalheria', 'Jewelry', 'Joyas'),
('txt1', 'app_joalheria', 'Crie moldes em questão de minutos ou horas, reduzindo tempo e gastos que antes eram maiores. O processo de impressão tornou rápido e preciso essas tarefas que antes demandavam muito custo e tempo, e agora com esta agilidade você pode investir seu dinheiro e tempo em tarefas mais desgastantes.', 'Create templates in a matter of minutes or hours, reducing time and expense that used to be greater. The printing process has made these tasks that required a lot of cost and time fast and accurate, and now with this agility you can invest your money and time in more demanding tasks.', 'Cree moldes en cuestión de minutos o horas, reduciendo tiempo y gastos que antes eran mayores. El proceso de impresión hizo rápido y preciso esas tareas que antes demandaban mucho costo y tiempo, y ahora con esta agilidad usted puede invertir su dinero y tiempo en tareas más desgastantes.'),
('txt1_1', 'app_joalheria', 'Aproveite a praticidade que nossas impressoras oferecem para criação de produtos mais personalizados e agradáveis para os clientes, e já faça o teste experimentação. ', 'Enjoy the convenience that our printers offer to create more personalized and pleasing products for customers, and already do the test experimentation.', 'Aproveche la practicidad que nuestras impresoras ofrecen para crear productos más personalizados y agradables para los clientes, y ya pruebe la experimentación.'),
('titulo2', 'app_joalheria', 'Melhore seu área de trabalho, deixe mais dinâmico sua forma de trabalhar assim melhorando a experiência do cliente', 'Improve your work area, make your work more dynamic, improving the customer experience', 'Mejore su área de trabajo, deje más dinámico su forma de trabajar así mejorando la experiencia del cliente'),
('titulo2_1', 'app_joalheria', 'Para mais informações entre em contato', 'For more information please contact us', 'Para obtener más información, póngase en contacto con nosotros'),
('titulo2_2', 'app_joalheria', 'PT - Two', 'EN - Two', 'ES - Two'),
('titulo2_3', 'app_joalheria', 'PT - Three', 'EN - Three', 'ES - Three'),
('titulo2_4', 'app_joalheria', 'PT - Four', 'EN - Four', 'ES - Four'),
('titulo2_5', 'app_joalheria', 'PT - Five', 'EN - Five', 'ES - Five'),
('titulo2_6', 'app_joalheria', 'PT - Six', 'EN - Six', 'ES - Six'),
('titulo3', 'app_joalheria', 'De sua imaginação, para a realidade de forma simples', 'From your imagination, to reality in a simple way', 'De su imaginación, a la realidad de forma sencilla'),
('txt3', 'app_joalheria', 'Use de softwares de modelagem 3d para criação e adaptação de moldes  de jóias que vieram de sua criatividade, converta-os para o formato de impressão e imprima-o.', 'Use 3d modeling software for creating and adapting jewelry molds that came from your creativity, convert them to the print format and print it out.', 'Utilice software de modelado 3d para crear y adaptar las plantillas de joyería que vienen de su creatividad, convertirlas al formato de impresión e imprimirlo.'),
('titulo4', 'app_joalheria', 'PT - Call your visitors to act. Now', 'EN - Call your visitors to act. Now', 'ES - Call your visitors to act. Now'),
('button1', 'app_joalheria', 'Saiba mais', 'Know more', 'Sepa mais'),
('titulo1', 'contato', 'Contate-nos!', 'Contact us!', 'Fotos!'),
('txt1', 'contato', 'Se você gostaria de saber mais sobre nossos produtos ou tem alguma dúvida nos contate e logo responderemos.', 'If you would like to know more about our products or have any questions contact us and we will respond soon.', 'Si usted desea saber más sobre nuestros productos o tiene alguna duda nos contacte y luego responderemos.'),
('txt1_1', 'contato', '(11) 95245-3334 - (15) 4101-0014', '(11) 95245-3334 - (15) 4101-0014', '(11) 95245-3334 - (15) 4101-0014'),
('txt1_2', 'contato', 'contato@ezy3d.com.br', 'contato@ezy3d.com.br', 'contato@ezy3d.com.br'),
('txt1_3', 'contato', 'R. Luís de Camargo Barros, 20 Vila São Cristovao, Tatuí - SP, 18280-010', 'R. Luís de Camargo Barros, 20 Vila São Cristovao, Tatuí - SP, 18280-010', 'R. Luís de Camargo Barros, 20 Vila São Cristovao, Tatuí - SP, 18280-010'),
('txt1_4', 'contato', 'Horário de atendimento: Segunda a Sexta das 08h15 às 17h45', 'Office hours: Monday to Friday from 08:15 to 17:45', 'Horario de atención: Lunes a Viernes de 08h15 a 17h45'),
('input1', 'contato', 'Nome', 'Name', 'Nombre'),
('input2', 'contato', 'E-mail', 'Email', 'Email'),
('input3', 'contato', 'Assunto', 'Subject matter', 'Sujeto'),
('input4', 'contato', 'Sua mensagem', 'Your message', 'Su mensaje'),
('button1', 'contato', 'Enviar', 'Submit', 'Enviar'),
('success', 'perfil_cliente', 'Alterações salvas comsucesso!', 'Changes savedwith success!', '¡Cambios guardados comsucesso!'),
('perfil_menu_editar', 'perfil_cliente', 'Editar Perfil', 'Edit profile', 'Editar Perfil'),
('perfil_menu_altsenha', 'perfil_cliente', 'Alterar Senha', 'Change Password', 'Cambiar contraseña'),
('perfil_menu_orcamento', 'perfil_cliente', 'Solicitar Orçamento', 'Request a Quote', 'Solicitar presupuesto'),
('perfil_menu_suporte', 'perfil_cliente', 'Suporte Técnico', 'Technical support', 'Suporte Técnico'),
('perfil_nome', 'perfil_cliente', 'Nome', 'Name', 'Nombre'),
('perfil_erronome', 'perfil_cliente', 'Pelo menos 3 caracteres requeridos.', 'At least 3 characters required.', 'Al menos 3 caracteres requeridos.'),
('perfil_sobrenome', 'perfil_cliente', 'Sobrenome', 'Submit', 'Submit'),
('perfil_errosobrenome', 'perfil_cliente', 'Pelo menos 3 caracteres requeridos.', 'At least 3 characters required.', 'Al menos 3 caracteres requeridos.'),
('perfil_empresa', 'perfil_cliente', 'Empresa', 'Company', 'Negocios'),
('perfil_pais', 'perfil_cliente', 'País', 'Country', 'País'),
('perfil_erropais', 'perfil_cliente', 'Informe seu País.', 'Enter your Country.', 'Ingrese su país.'),
('perfil_ramo', 'perfil_cliente', 'Ramo', 'Branch', 'Rama'),
('perfil_erroramo', 'perfil_cliente', 'Informe seu Ramo.', 'Inform your branch.', 'Informe su Rama.'),
('perfil_outro1', 'perfil_cliente', 'Outro', 'Other', 'Otro'),
('perfil_outroramo', 'perfil_cliente', 'Outro Ramo', 'Another branch', 'Otro Rama'),
('perfil_erro_outroramo', 'perfil_cliente', '3 caracteres requeridos', '3 characters required', '3 caracteres requeridos'),
('perfil_infoprivadas', 'perfil_cliente', 'Informações privadas', 'Private Information', 'Información privada'),
('perfil_email', 'perfil_cliente', 'E-mail', 'Email', 'Email'),
('perfil_erroemail1', 'perfil_cliente', 'Digite um e-mail válido.', 'Enter a valid email address.', 'Introduzca un correo electrónico válido.'),
('perfil_erroemail2', 'perfil_cliente', 'Este e-mail já está sendo utilizado.', 'This email is already being used.', 'Este e-mail ya está siendo utilizado.'),
('perfil_telefone', 'perfil_cliente', 'Telefone', 'Telephone', 'Teléfono'),
('perfil_errofone', 'perfil_cliente', 'Digite um telefone válido. (o DDD é necessário)', 'Please enter a valid phone number. (DDD required)', 'Introduzca un teléfono válido. (el DDD es necesario)'),
('perfil_oldsenha', 'perfil_cliente', 'Senha Antiga', 'Old Password', 'Contraseña Antigua'),
('perfil_erro_oldsenha', 'perfil_cliente', 'Senha antiga incorreta.', 'Submit', 'Submit'),
('perfil_newsenha', 'perfil_cliente', 'Nova Senha', 'New Password', 'Nueva Contraseña'),
('perfil_erro_newsenha', 'perfil_cliente', 'A sua nova senha não pode ser igual a senha antiga.', 'Your new password can not be the same as the old password.', 'Su nueva contraseña no puede ser igual a la contraseña antigua.'),
('perfil_confirmarsenha', 'perfil_cliente', 'Confirmar Nova Senha', 'Confirm New Password', 'Confirmar Nueva Contraseña'),
('perfil_erro_confirmarsenha', 'perfil_cliente', 'Senhas não coincidem. Tente novamente.', 'Passwords do not match. Try again.', 'Las contraseñas no coinciden. Inténtalo de nuevo.'),
('perfil_esqueceusenha', 'perfil_cliente', 'Esqueceu a Senha?', 'Forgot Password?', '¿Olvido la Contraseña?'),
('perfil_orcamento_titulo1', 'perfil_cliente', 'Solicitar Orçamento', 'Request a Quote', 'Solicitar Presupuesto'),
('perfil_orcamento_txt1', 'perfil_cliente', 'PT - The people listed here are contacts you ve uploaded to Instagram. To remove your synced contacts, tap Delete All.', 'EN - The people listed here are contacts you ve uploaded to Instagram. To remove your synced contacts, tap Delete All.', 'ES - The people listed here are contacts you ve uploaded to Instagram. To remove your synced contacts, tap Delete All.'),
('perfil_orcamento_label1', 'perfil_cliente', 'Impressoras 3D', '3D Printers', 'Impresoras 3D'),
('perfil_orcamento_label2', 'perfil_cliente', 'Acessórios', 'Accessories', 'Accessorios'),
('perfil_orcamento_label3', 'perfil_cliente', 'Observaçao', 'Note', 'Observación'),
('perfil_orcamento_placeholder1', 'perfil_cliente', 'Deixe um comentário', 'Leave a comment', 'Deja un comentario'),
('perfil_orcamento_button1', 'perfil_cliente', 'Enviar', 'Submit', 'Enviar'),
('perfil_suporte_titulo1', 'perfil_cliente', 'Suporte Técnico', 'Technical support', 'Suporte Técnico'),
('perfil_suporte_txt1', 'perfil_cliente', 'The people listed here are contacts you ve uploaded to Instagram. To remove your synced contacts, tap Delete All.', 'The people listed here are contacts you ve uploaded to Instagram. To remove your synced contacts, tap Delete All.', 'The people listed here are contacts you ve uploaded to Instagram. To remove your synced contacts, tap Delete All.'),
('perfil_suporte_label1', 'perfil_cliente', 'Máquina', 'Machine', 'Máquina'),
('perfil_suporte_select1', 'perfil_cliente', 'Selecione a sua máquina...', 'Select your machine...', 'Seleccione su máquina...'),
('perfil_suporte_label2', 'perfil_cliente', 'Problema', 'Problem', 'Problema'),
('perfil_suporte_select2', 'perfil_cliente', 'Selecione seu problema...', 'Select your problem', 'Seleccione su problema'),
('perfil_suporte_outro1', 'perfil_cliente', 'Outro', 'Other', 'Otro'),
('perfil_suporte_placeholder1', 'perfil_cliente', 'Descreva seu problema', 'Describe your problem', 'Describa su problema'),
('perfil_suporte_button1', 'perfil_cliente', 'Enviar', 'Submit', 'Enviar'),
('titulo4', 'app_entretenimento', 'PT - Call your visitors to act. Now', 'EN - Call your visitors to act. Now', 'ES - Call your visitors to act. Now'),
('button1', 'app_entretenimento', 'PT - Get your license', 'EN - Get your license', 'ES - Get your license'),
('titulo3_4', 'app_engenharia', 'Peça com acabamento final', 'Peça com acabamento final', 'Peça com acabamento final'),
('titulo2_3', 'app_entretenimento', 'Cachorro em 3D', 'Cachorro em 3D', 'Cachorro em 3D'),
('txt2_3', 'app_entretenimento', 'Cachorro feita á base de resina ST-450 de nossa parceira', 'Cachorro feita á base de resina ST-450 de nossa parceira', 'Cachorro feita á base de resina ST-450 de nossa parceira'),
('titulo3', 'app_entretenimento', 'Auxílio à pequenos Produtores', 'Auxílio à pequenos Produtores', 'Auxílio à pequenos Produtores'),
('txt3', 'app_entretenimento', 'Incorpore uma de nossas impressoras ao seu meio de trabalho para o auxilio de criações de obras de arte.', 'Incorpore uma de nossas impressoras ao seu meio de trabalho para o auxilio de criações de obras de arte.', 'Incorpore uma de nossas impressoras ao seu meio de trabalho para o auxilio de criações de obras de arte.'),
('txt2_2', 'app_entretenimento', 'Personagem de anime feito em nossa máquina', 'Personagem de anime feito em nossa máquina', 'Personagem de anime feito em nossa máquina'),
('titulo2_2', 'app_entretenimento', 'Beerus em 3D', 'Beerus em 3D', 'Beerus em 3D'),
('titulo2_1', 'app_entretenimento', 'Crânio 3D', 'Crânio 3D', 'Crânio  3D'),
('txt2_1', 'app_entretenimento', 'Feita em nossa impressora de filamento.', 'Feita em nossa impressora de filamento.', 'Feita em nossa impressora de filamento.'),
('txt1_1', 'app_entretenimento', 'Pegue um personagem ou algum conceito que veio de sua mente que foi criado digital por um software de computador e eleve-os para outro nível fazendo a impressão deles. Assim podendo enxergar aquilo que lhe veio em mente de uma forma mais detalhada e palpável.', 'Pegue um personagem ou algum conceito que veio de sua mente que foi criado digital por um software de computador e eleve-os para outro nível fazendo a impressão deles. Assim podendo enxergar aquilo que lhe veio em mente de uma forma mais detalhada e palpável.', 'Pegue um personagem ou algum conceito que veio de sua mente que foi criado digital por um software de computador e eleve-os para outro nível fazendo a impressão deles. Assim podendo enxergar aquilo que lhe veio em mente de uma forma mais detalhada e palpável.'),
('titulo1', 'app_entretenimento', 'Entretenimento', 'Entretenimento', 'Entretenimento'),
('titulo1_1', 'app_entretenimento', 'PT - Of existence in this spot', 'EN - Of existence in this spot', 'ES - Of existence in this spot'),
('txt1', 'app_entretenimento', 'Pegue seus modelos digitais que estão em seu computador e traga-os para realidade, apenas através do envio do modelo digital para uma de nossas impressoras e o tornando- o realístico, de forma rápida e barata.', 'Pegue seus modelos digitais que estão em seu computador e traga-os para realidade, apenas através do envio do modelo digital para uma de nossas impressoras e o tornando- o realístico, de forma rápida e barata.', 'Pegue seus modelos digitais que estão em seu computador e traga-os para realidade, apenas através do envio do modelo digital para uma de nossas impressoras e o tornando- o realístico, de forma rápida e barata.'),
('button1', 'app_engenharia', 'PT - Get your license', 'EN - Get your license', 'ES - Get your license'),
('titulo6', 'app_engenharia', 'PT - Call your visitors to act. Now', 'EN - Call your visitors to act. Now', 'ES - Call your visitors to act. Now'),
('titulo5_2', 'app_engenharia', 'Porta canetas de outra forma', 'Porta canetas de outra forma', 'Porta canetas de outra forma'),
('txt5_2', 'app_engenharia', 'Acrescente criatividade aos objetos cotidianos a sua volta, dando uma nova cara a algo monótomo e design.', 'Acrescente criatividade aos objetos cotidianos a sua volta, dando uma nova cara a algo monótomo e design', 'Acrescente criatividade aos objetos cotidianos a sua volta, dando uma nova cara a algo monótomo e design'),
('titulo3_1', 'app_engenharia', 'Ao sair da impressora', 'Ao sair da impressora', 'Ao sair da impressora'),
('titulo3_2', 'app_engenharia', 'Juntando as peças', 'Juntando as peças', 'Juntando as peças'),
('titulo3_3', 'app_engenharia', 'Dando os toques inciais', 'Dando os toques inciais', 'Dando os toques inciais'),
('titulo4', 'app_engenharia', 'Peça finalizada', 'Peça finalizada', 'Peça finalizada'),
('txt4', 'app_engenharia', 'Peça feita do inicio ao fim de uma forma simples, fácil e rápido', 'Peça feita do inicio ao fim de uma forma simples, fácil e rápido', 'Peça feita do inicio ao fim de uma forma simples, fácil e rápido'),
('titulo5', 'app_engenharia', 'Peça Finalizada', 'Peça Finalizada', 'Peça Finalizada'),
('txt5', 'app_engenharia', 'Peças com nível de acabamento  prontas para o consumidor  direto da impressora.', 'Peças com nível de acabamento  prontas para o consumidor  direto da impressora.', 'Peças com nível de acabamento  prontas para o consumidor  direto da impressora.'),
('titulo5_1', 'app_engenharia', 'Porta canetas ', 'Porta canetas', 'Porta canetas'),
('txt5_1', 'app_engenharia', 'Use da impressora para impressão de itens de utilidades para o auxílio do dia a dia', 'Use da impressora para impressão de itens de utilidades para o auxílio do dia a dia', 'Use da impressora para impressão de itens de utilidades para o auxílio do dia a dia'),
('txt3', 'app_engenharia', 'Com um acabamento próximo à o  produto finalizado é fácil dar os toques finais para à customização do seu gosto ou do cliente ', 'Com um acabamento próximo à o  produto finalizado é fácil dar os toques finais para à customização do seu gosto ou do cliente ', 'Com um acabamento próximo à o  produto finalizado é fácil dar os toques finais para à customização do seu gosto ou do cliente '),
('titulo3', 'app_engenharia', 'Da impressora para o acabamento final', 'Da impressora para o acabamento final', 'Da impressora para o acabamento final'),
('titulo2', 'app_engenharia', 'Estudo de novos conceitos', 'Estudo de novos conceitos', 'Estudo de novos conceitos'),
('txt2', 'app_engenharia', 'Explore conceitos iniciais feitos a partir de modelagem digital e eleve-os para outros níveis através de testes e adaptações. ', 'Explore conceitos iniciais feitos a partir de modelagem digital e eleve-os para outros níveis através de testes e adaptações. ', 'Explore conceitos iniciais feitos a partir de modelagem digital e eleve-os para outros níveis através de testes e adaptações. '),
('titulo1', 'app_engenharia', 'Engenharia', 'Engenharia', 'Engenharia'),
('txt1', 'app_engenharia', 'Com uma impressora incorporado ao meio do fluxo de trabalho de um engenheiro, lhe dá poder e agilidade, pois é possível o rápido desenvolvimento de um protótipo para testes, oque antes demandava muito tempo mesmo sendo um protótipo.', 'Com uma impressora incorporado ao meio do fluxo de trabalho de um engenheiro, lhe dá poder e agilidade, pois é possível o rápido desenvolvimento de um protótipo para testes, oque antes demandava muito tempo mesmo sendo um protótipo.', 'Com uma impressora incorporado ao meio do fluxo de trabalho de um engenheiro, lhe dá poder e agilidade, pois é possível o rápido desenvolvimento de um protótipo para testes, oque antes demandava muito tempo mesmo sendo um protótipo.'),
('btnproduto1_1', 'home', 'Orçamento', 'Orçamento', 'Orçamento'),
('btnproduto1_2', 'home', 'Orçamento', 'Orçamento', 'Orçamento'),
('produto2', 'home', 'Phylos', 'Phylos', 'Phylos'),
('btnproduto2_1', 'home', 'Orçamento', 'Orçamento', 'Orçamento'),
('btnproduto2_2', 'home', 'Saiba mais', 'Saiba mais', 'Saiba mais'),
('produto3', 'home', 'Core E3', 'Core E3', 'Core E3'),
('btnproduto3_1', 'home', 'Orçamento', 'Orçamento', 'Orçamento'),
('btnproduto3_2', 'home', 'Saiba mais', 'Saiba mais', 'Saiba mais'),
('titulo5', 'home', 'Acessórios', 'Acessórios', 'Acessórios'),
('produto4', 'home', 'EzyCure', 'EzyCure', 'EzyCure'),
('btnproduto4_1', 'home', 'Orçamento', 'Orçamento', 'Orçamento'),
('btnproduto4_2', 'home', 'Saiba mais', 'Saiba mais', 'Saiba mais'),
('titulo6', 'home', 'Areas de atuação', 'Areas de atuação', 'Areas de atuação'),
('txt6', 'home', 'Conheça um pouco sobre algumas áreas em que a EZY 3D atua!', 'Conheça um pouco sobre algumas áreas em que a EZY 3D atua!', 'Conheça um pouco sobre algumas áreas em que a EZY 3D atua!'),
('button4', 'home', 'Saiba mais', 'Saiba mais', 'Saiba mais');

-- --------------------------------------------------------

--
-- Estrutura da tabela `metas`
--

CREATE TABLE `metas` (
  `mes` int(2) NOT NULL,
  `ano` int(4) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `meta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `metas`
--

INSERT INTO `metas` (`mes`, `ano`, `tipo`, `meta`) VALUES
(6, 2019, 'cadastro', 11),
(6, 2019, 'orcamento', 11),
(6, 2019, 'visualizacoes', 44);

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `idorcamento` int(11) NOT NULL,
  `fkcliente` int(11) DEFAULT NULL,
  `produtos` varchar(150) DEFAULT NULL,
  `descricao` text NOT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `orcamento`
--

INSERT INTO `orcamento` (`idorcamento`, `fkcliente`, `produtos`, `descricao`, `data`) VALUES
(1, 1, 'E1260T, Phylos, CoreE3, EzyCure', 'null', '2019-06-07 11:37:08'),
(2, 1, 'E1260T, EzyCure', 'null', '2019-06-11 14:16:22'),
(9, 4, 'E1260T, EzyCure', 'null', '2019-06-11 14:16:22'),
(10, 4, 'E1260T, EzyCure', 'null', '2019-06-11 14:16:22'),
(11, 4, 'E1260T, EzyCure', 'null', '2019-06-11 14:16:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `suporte`
--

CREATE TABLE `suporte` (
  `idsuporte` int(11) NOT NULL,
  `maquina` varchar(20) NOT NULL,
  `problema` varchar(20) NOT NULL,
  `descricao` text NOT NULL,
  `fkcliente` int(11) DEFAULT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `suporte`
--

INSERT INTO `suporte` (`idsuporte`, `maquina`, `problema`, `descricao`, `fkcliente`, `data`) VALUES
(2, 'Phylos', 'Falha na impressão', 'sssssssssssssssssssssssssssssssss', 1, '2019-06-11 14:16:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acesso`
--
ALTER TABLE `acesso`
  ADD PRIMARY KEY (`dia`,`mes`,`ano`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idcontato`);

--
-- Indexes for table `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`apelido`,`pagina`);

--
-- Indexes for table `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`mes`,`ano`,`tipo`);

--
-- Indexes for table `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`idorcamento`),
  ADD KEY `fkcliente` (`fkcliente`);

--
-- Indexes for table `suporte`
--
ALTER TABLE `suporte`
  ADD PRIMARY KEY (`idsuporte`),
  ADD KEY `fkcliente` (`fkcliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `idcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `idorcamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `suporte`
--
ALTER TABLE `suporte`
  MODIFY `idsuporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD CONSTRAINT `orcamento_ibfk_1` FOREIGN KEY (`fkcliente`) REFERENCES `cliente` (`idcliente`);

--
-- Limitadores para a tabela `suporte`
--
ALTER TABLE `suporte`
  ADD CONSTRAINT `suporte_ibfk_1` FOREIGN KEY (`fkcliente`) REFERENCES `cliente` (`idcliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
