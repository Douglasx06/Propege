-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Ago-2024 às 02:00
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `propege`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `assuntos`
--

CREATE TABLE `assuntos` (
  `id_assunto` int(255) NOT NULL,
  `Assunto` varchar(200) NOT NULL,
  `Texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_usuario` int(255) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` int(11) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_usuario`, `usuario`, `email`, `cpf`, `senha`) VALUES
(2, 'Douglas', 'douglas@gmail', 111222, 'Senha'),
(3, 'sss', 'sss', 0, '$2y$10$HUyYdR.2SoYPEy86D5os4e3w.NHPh0u1pcSV13LEBzxbdhm5T0dRW');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `assuntos`
--
ALTER TABLE `assuntos`
  ADD PRIMARY KEY (`id_assunto`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `assuntos`
--
ALTER TABLE `assuntos`
  MODIFY `id_assunto` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_usuario` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
