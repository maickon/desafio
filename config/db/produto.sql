-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Abr-2016 às 22:01
-- Versão do servidor: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desafio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `estoque_inicial` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `preco`, `estoque_inicial`) VALUES
(2, 'Creme dental', '2.22', 9),
(3, 'Caixa de Nescau', '6.70', 1),
(4, 'Caixa de Bom Bom', '2.76', 0),
(5, 'Feijão', '4.89', 45),
(6, 'Feijão Tropeiro 1KG', '6.89', 55),
(9, 'Pizza', '10.22', 0),
(10, 'Leite 2L', '6.55', 5),
(13, 'Melão', '9.87', 20),
(15, 'Refrigerante Coca Cola', '8.70', 50),
(16, 'Leite Moça', '3.44', 10),
(17, 'Refrigerante guaraná', '6.80', 70),
(18, 'Toalha de pano', '3.20', 12),
(19, 'Vodka', '27.00', 33),
(20, 'Copo de Vidro', '5.50', 5),
(21, 'Ovos 1 dúzia', '4.00', 9),
(22, 'Cravo de canela', '1.90', 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
