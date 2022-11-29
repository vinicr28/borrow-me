-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2022 às 19:29
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
(1, 'Moutain Bike', 'Montain Bike da marca Santa Cruz', 'Veloz e Furiosa!!! ❤ ', 'Esportes', '52', 0x62696b652e6a7067, 2),
(2, 'Apartamento para Temporada', 'Duplex na Barra da Tijuca, no RJ', 'Lindo apartamento, com vista para o mar, e sol da manhã.', 'Acomodacao', '250', 0x6170746f6261727261726a2e6a7067, 2),
(3, 'Carro Elétrico', 'Carro Elétrico da Apple', 'Incrível carro Futurista', 'Automoveis', '500', 0x636172726f6170706c652e6a7067, 4),
(4, 'Macbook 11', 'Lindo Macbook', 'super conservado, em total funcionamento', 'Games', '100', 0x6d6163626f6f6b2e6a7067, 1),
(5, 'Raquete ', 'Raquete Beach Tênis', 'Ótima raquete para uma tarde de beach tenis', 'Esportes', '35', 0x7261717565746574656e697370726169612e706e67, 3),
(6, 'Notebok do Futuro', 'Lindo Laptop Moderno', 'Equipamento do futuro. Oportunidade Única!', 'Games', '3000', 0x6c6170746f70787578612e6a7067, 2),
(7, 'Kit Golf', 'Kit para 2 pessoas, conteúdo tacos, 5 bolas e 1 bolsa', 'Super bacana para quem gosta de Golf', 'Esportes', '50', 0x6b6974676f6c662e6a7067, 2),
(8, 'Luigis Mansion', 'Jogo Luigis Mansion para Switch', 'Mídia Física de Luigis Mansion', 'Games', '25', 0x6c75696769736d616e73696f6e2e6a7067, 2),
(9, 'Videogame do futuro', 'Melhor video game do mundo.', 'Nintendo 64, lançamento previsto para 2023', 'Games', '1000', 0x6e696e74656e646f36342e77656270, 3);

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
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
