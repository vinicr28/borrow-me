-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2022 às 09:00
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
-- Estrutura da tabela `todosemprestimos`
--

CREATE TABLE `todosemprestimos` (
  `log_transacao` int(11) NOT NULL,
  `id_proprietario` int(11) NOT NULL,
  `id_solicitante` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `dt_retirada` date NOT NULL,
  `dt_devolucao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `todosemprestimos`
--

INSERT INTO `todosemprestimos` (`log_transacao`, `id_proprietario`, `id_solicitante`, `cod_produto`, `dt_retirada`, `dt_devolucao`) VALUES
(1, 2, 2, 7, '2022-11-29', '2022-11-30'),
(2, 2, 1, 7, '2022-11-11', '2022-11-14'),
(3, 2, 5, 7, '2022-11-11', '2022-11-29'),
(4, 2, 1, 7, '2022-11-11', '2022-11-16'),
(12, 2, 3, 1, '2022-11-29', '2022-11-30'),
(13, 4, 3, 3, '2022-11-30', '2022-12-03');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `todosemprestimos`
--
ALTER TABLE `todosemprestimos`
  ADD PRIMARY KEY (`log_transacao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `todosemprestimos`
--
ALTER TABLE `todosemprestimos`
  MODIFY `log_transacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
