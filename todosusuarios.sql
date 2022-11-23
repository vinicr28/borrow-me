-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2022 às 22:10
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
  `nome` varchar(100) NOT NULL,
  `cpf` char(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `cidade` varchar(25) DEFAULT NULL,
  `uf` varchar(25) DEFAULT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `todosusuarios`
--

INSERT INTO `todosusuarios` (`id`, `nome`, `cpf`, `data_nascimento`, `cep`, `logradouro`, `bairro`, `cidade`, `uf`, `telefone`, `email`, `senha`) VALUES
(1, 'Administrador e Testador', '11122233300', '2001-01-01', NULL, NULL, NULL, NULL, NULL, '55999998888', 'admin.test@email.com', 'adminborrowme'),
(2, '{inputnome}', '{inputCPF}', '0000-00-00', NULL, NULL, NULL, NULL, NULL, '{inputtel}', '{inputemail}', '{inputsenha}'),
(3, 'Fulano de Tal', '11122233345', '1991-11-11', NULL, NULL, NULL, NULL, NULL, '55988888888', 'email@email.com.br', '123456'),
(4, 'Vini Mestre do PHP', '12345678900', '2021-01-01', NULL, NULL, NULL, NULL, NULL, '55555554444', 'testtador@gmail.com.br', '010101'),
(5, 'Vini Mestre do PHP', '12345678900', '2021-01-01', NULL, NULL, NULL, NULL, NULL, '55555554444', 'testtador@gmail.com.br', '010101'),
(6, 'beltrano', '1111111111', '2020-02-20', NULL, NULL, NULL, NULL, NULL, '40444441111', 'emailemail@out.com.br', '010101'),
(7, 'beltrano', '1111111111', '2020-02-20', NULL, NULL, NULL, NULL, NULL, '40444441111', 'emailemail@out.com.br', '010101'),
(8, 'joao da silva ', '5151515151', '1999-02-20', NULL, NULL, NULL, NULL, NULL, '55444442222', 'joaojoao@outout.com.br', '1234569'),
(9, 'joao da silva ', '5151515151', '1999-02-20', NULL, NULL, NULL, NULL, NULL, '55444442222', 'joaojoao@outout.com.br', '1234569'),
(10, 'joao da silva ', '5151515151', '1999-02-20', NULL, NULL, NULL, NULL, NULL, '55444442222', 'joaojoao@outout.com.br', '123456'),
(11, 'joao da silva ', '5151515151', '1999-02-20', NULL, NULL, NULL, NULL, NULL, '55444442222', 'joaojoao@outout.com.br', '123456'),
(13, 'joao da silva ', '5151515151', '1999-02-20', NULL, NULL, NULL, NULL, NULL, '55444442222', 'joaojoao@outout.com.br', '8888'),
(14, 'Tentando com Funcao', '74174174188', '2005-05-05', NULL, NULL, NULL, NULL, NULL, '10911111444', 'tentafuncao@email.com.br', '123456'),
(15, 'Tentando com Funcao', '74174174188', '2005-05-05', NULL, NULL, NULL, NULL, NULL, '10911111444', 'tentafuncao@email.com.br', '123456'),
(16, 'testando funcao2', '85285285222', '2002-02-20', NULL, NULL, NULL, NULL, NULL, '22555558888', 'testedefuncao@email.io', '123456'),
(17, 'teste com conn nova', '888888888', '2008-08-08', NULL, NULL, NULL, NULL, NULL, '888888888', 'oito@oito.com', 'oioi'),
(35, 'teste com conn interna', '111111', '2011-11-11', NULL, NULL, NULL, NULL, NULL, '11111111', 'conndentrofuncao@funcao.com', '123'),
(44, 'tentando nao repetir', '555', '2010-10-10', NULL, NULL, NULL, NULL, NULL, '55555', 'semrepetir@funcao.com', '123456'),
(51, 'teste com require once sem repetir', '5555', '2010-10-10', NULL, NULL, NULL, NULL, NULL, '5555', 'require@once.com.br', '123'),
(111, 'tentando com retunr', '555', '2010-10-10', NULL, NULL, NULL, NULL, NULL, '555', 'test@email', '123'),
(151, 'testando exit', '555', '2010-10-10', NULL, NULL, NULL, NULL, NULL, '5555', 'oi@oi.com', '123'),
(211, 'teste com funcoes sql e gerais', '555', '2010-10-10', NULL, NULL, NULL, NULL, NULL, '555555', 'funcoessql@novo.com', '123'),
(212, 'teste com funcoes sql e gerais', '555', '2010-10-10', NULL, NULL, NULL, NULL, NULL, '555555', 'funcoessql@novo.com', '123'),
(213, 'oioi script', '5555', '2010-10-10', NULL, NULL, NULL, NULL, NULL, '55555', 'teste@email', 'oi'),
(214, 'teste de alert', '555', '2010-10-10', NULL, NULL, NULL, NULL, NULL, '555', 'teste@email.com', 'ppp'),
(215, 'teste de alert', '555', '2010-10-10', NULL, NULL, NULL, NULL, NULL, '5555', 'alert@js.com.br', '123'),
(216, 'teste alert', '555', '2010-10-10', NULL, NULL, NULL, NULL, NULL, '5555', 'teste@email.com', '123'),
(217, 'teste de alert', '5555', '2010-10-10', NULL, NULL, NULL, NULL, NULL, '5555', 'teste@email.com', '123456'),
(218, 'alert', '111111', '1911-11-11', NULL, NULL, NULL, NULL, NULL, '111111', 'onzealert@email.com', '123'),
(219, 'victor sp', '11122233355', '2020-10-10', NULL, NULL, NULL, NULL, NULL, '5511111', 'victor@outlook.com', '123'),
(220, 'vini Camargo', '11122233345', '2011-11-28', NULL, NULL, NULL, NULL, NULL, '55555554444', 'teste@email.com', '1234'),
(221, 'teste aws', '5555', '2010-10-10', NULL, NULL, NULL, NULL, NULL, '101010', 'teste@aws.com', '123'),
(222, 'oioi', '111', '2010-10-10', '123', 'de', '', '', '', '555', 'teste@email.com', 'oi');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
