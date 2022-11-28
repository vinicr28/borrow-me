-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2022 às 02:08
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `borrowme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `todosusuarios`
--

CREATE TABLE `todosusuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` int(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cep` int(8) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `about_me` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `todosusuarios`
--

INSERT INTO `todosusuarios` (`id`, `nome`, `cpf`, `data_nascimento`, `cep`, `uf`, `telefone`, `email`, `senha`, `about_me`) VALUES
(1, 'João da Silva', 2147483647, '2001-01-01', 12345000, 'PR', 2147483647, 'email@email.com.br', '123456', 'Me chamo João e adoro descobrir coisas novas. '),
(2, 'Maria de Souza', 2147483647, '2001-01-01', 11111123, 'SP', 2147483647, 'maria@email.com', '1111', ''),
(3, 'Bill Gates', 2147483647, '2002-02-02', 55555000, 'SP', 2147483647, 'bill@gates.com', '0101', 'Adoro tecnologia, inovação e causas sociais. '),
(4, 'Steve Jobs', 2147483647, '2003-03-03', 44444567, 'MG', 2147483647, 'steve@jobs.com', '123456', 'Apaixonado por inovação.'),
(5, 'Elon Musk', 2147483647, '2004-04-04', 77777888, 'CE', 2147483647, 'elon@musk.com', '0101', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `todosusuarios`
--
ALTER TABLE `todosusuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `todosusuarios`
--
ALTER TABLE `todosusuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
