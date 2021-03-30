-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Mar-2021 às 07:38
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `cidade` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `bairro` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `rua` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `numero_casa` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `celular` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `telefone` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`id_cliente`, `nome_cliente`, `cidade`, `bairro`, `rua`, `numero_casa`, `celular`, `telefone`) VALUES
(1, 'Caio Henrique Rodrigues', 'Bebedouro', 'Residencial Centenário', 'Rua Galileu Galilei Belemo', '659', '17991171717', '17988040531');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_horario`
--

DROP TABLE IF EXISTS `tb_horario`;
CREATE TABLE IF NOT EXISTS `tb_horario` (
  `id_horario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `servico` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `valor` float(10,0) NOT NULL,
  PRIMARY KEY (`id_horario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tb_horario`
--

INSERT INTO `tb_horario` (`id_horario`, `nome_cliente`, `dia`, `hora`, `servico`, `valor`) VALUES
(2, 'Caio Henrique Rodrigues', '2021-03-25', '00:12:12', 'Corte', 200);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pagamento`
--

DROP TABLE IF EXISTS `tb_pagamento`;
CREATE TABLE IF NOT EXISTS `tb_pagamento` (
  `id_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `valor` float NOT NULL,
  `parcelas` int(11) NOT NULL,
  `pago` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_pagamento`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tb_pagamento`
--

INSERT INTO `tb_pagamento` (`id_pagamento`, `nome`, `valor`, `parcelas`, `pago`) VALUES
(1, 'Caio Henrique Rodrigues', 200, 4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `senha` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_usuario`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `email`, `senha`) VALUES
(1, 'jhennifer@gmail.com', '21232f297a57a5a743894a0e4a801fc3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
