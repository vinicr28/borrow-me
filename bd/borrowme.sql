-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2022 às 19:30
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
(13, 4, 3, 3, '2022-11-30', '2022-12-03'),
(14, 2, 3, 2, '2022-11-16', '2022-11-29'),
(15, 2, 6, 1, '2022-11-30', '2022-12-05');

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
(1, 'Moutain Bike', 'Montain Bike da marca Santa Cruz', 'Veloz e Furiosa!!! ❤ ', 'Esportes', '52', 0x62696b652e6a7067, 2),
(2, 'Apartamento para Temporada', 'Duplex na Barra da Tijuca, no RJ', 'Lindo apartamento, com vista para o mar, e sol da manhã.', 'Acomodacao', '250', 0x6170746f6261727261726a2e6a7067, 2),
(3, 'Carro Elétrico', 'Carro Elétrico da Apple', 'Incrível carro Futurista', 'Automoveis', '500', 0x636172726f6170706c652e6a7067, 4),
(4, 'Macbook 11', 'Lindo Macbook', 'super conservado, em total funcionamento', 'Games', '100', 0x6d6163626f6f6b2e6a7067, 1),
(5, 'Raquete ', 'Raquete Beach Tênis', 'Ótima raquete para uma tarde de beach tenis', 'Esportes', '35', 0x7261717565746574656e697370726169612e706e67, 3),
(6, 'Notebok do Futuro', 'Lindo Laptop Moderno', 'Equipamento do futuro. Oportunidade Única!', 'Games', '3000', 0x6c6170746f70787578612e6a7067, 2),
(7, 'Kit Golf', 'Kit para 2 pessoas, conteúdo tacos, 5 bolas e 1 bolsa', 'Super bacana para quem gosta de Golf', 'Esportes', '50', 0x6b6974676f6c662e6a7067, 2),
(8, 'Luigis Mansion', 'Jogo Luigis Mansion para Switch', 'Mídia Física de Luigis Mansion', 'Games', '25', 0x6c75696769736d616e73696f6e2e6a7067, 2),
(9, 'Videogame do futuro', 'Melhor video game do mundo.', 'Nintendo 64, lançamento previsto para 2023', 'Games', '1000', 0x6e696e74656e646f36342e77656270, 3);

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
(3, 'Bill Gates da Silva', 2147483647, '2002-02-02', 55555000, 'SP', 2147483647, 'bill@gates.com', '0101', 'Adoro tecnologia, inovação e causas sociais. '),
(4, 'Steve Jobs', 2147483647, '2003-03-03', 44444567, 'MG', 2147483647, 'steve@jobs.com', '123456', 'Apaixonado por inovação.'),
(5, 'Elon Musk', 2147483647, '2004-04-04', 77777888, 'CE', 2147483647, 'elon@musk.com', '0101', ''),
(6, 'Professor Legal', 2147483647, '1998-08-28', 12345123, 'AC', 2147483647, 'professor@legal.com', '1234', 'Sou um professor legal.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `todosemprestimos`
--
ALTER TABLE `todosemprestimos`
  ADD PRIMARY KEY (`log_transacao`);

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
  MODIFY `log_transacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `todosprodutos`
--
ALTER TABLE `todosprodutos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `todosusuarios`
--
ALTER TABLE `todosusuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
