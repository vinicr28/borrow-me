-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Nov-2022 às 18:35
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
-- Estrutura da tabela `todosprodutos`
--

CREATE TABLE `todosprodutos` (
  `cod` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `resumo` varchar(100) NOT NULL,
  `detalhes` varchar(500) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `imagem` longblob NOT NULL,
  `id_proprietario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `todosprodutos`
--

INSERT INTO `todosprodutos` (`cod`, `titulo`, `resumo`, `detalhes`, `categoria`, `preco`, `imagem`, `id_proprietario`) VALUES
(1, 'Macbook 11', 'Lindo Macbook', 'super conservado, em total funcionamento', 'Games', '100', 0x6d6163626f6f6b2e6a7067, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `todosprodutos`
--
ALTER TABLE `todosprodutos`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `todosprodutos`
--
ALTER TABLE `todosprodutos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
