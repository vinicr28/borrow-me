-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Nov-2022 às 18:14
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
  `log` int(11) NOT NULL,
  `id_proprietario` int(11) NOT NULL,
  `id_solicitante` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `dt_retirada` date NOT NULL,
  `dt_devolucao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'João da Silva', 2147483647, '2001-01-01', 12345000, 'PR', 2147483647, 'email@email.com.br', '123456', 'Me chamo João e adoro descobrir coisas novas. ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `todosemprestimos`
--
ALTER TABLE `todosemprestimos`
  ADD PRIMARY KEY (`log`);

--
-- Índices para tabela `todosprodutos`
--
ALTER TABLE `todosprodutos`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `todosusuarios`
--
ALTER TABLE `todosusuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `todosemprestimos`
--
ALTER TABLE `todosemprestimos`
  MODIFY `log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `todosprodutos`
--
ALTER TABLE `todosprodutos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `todosusuarios`
--
ALTER TABLE `todosusuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
