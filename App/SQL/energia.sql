-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 10/07/2018 às 10:13
-- Versão do servidor: 5.5.59-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `energia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `DISPOSITIVOS`
--

CREATE TABLE `DISPOSITIVOS` (
  `ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CODIGO` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `IDEMPRESA` int(11) DEFAULT NULL,
  `LOCAL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DESCRICAO` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CONSUMO` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ATIVADO` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `EMPRESAS`
--

CREATE TABLE `EMPRESAS` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ENDERECO` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AREA` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RESPONSAVEL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TELEFONE` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CPF_CNPJ` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `COMENTARIOS` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FATURAMENTO_CADASTRO` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FATURAMENTO_ATUAL` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `USUARIOS`
--

CREATE TABLE `USUARIOS` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `primeiroNome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `verificacao` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `USUARIOS_EMPRESAS`
--

CREATE TABLE `USUARIOS_EMPRESAS` (
  `EMPRESAS_ID` int(11) NOT NULL,
  `USUARIOS_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `DISPOSITIVOS`
--
ALTER TABLE `DISPOSITIVOS`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `CODIGO` (`CODIGO`),
  ADD KEY `IDEMPRESA` (`IDEMPRESA`);

--
-- Índices de tabela `EMPRESAS`
--
ALTER TABLE `EMPRESAS`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `USUARIOS`
--
ALTER TABLE `USUARIOS`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`,`email`);

--
-- Índices de tabela `USUARIOS_EMPRESAS`
--
ALTER TABLE `USUARIOS_EMPRESAS`
  ADD KEY `EMPRESAS_ID` (`EMPRESAS_ID`),
  ADD KEY `USUARIOS_ID` (`USUARIOS_ID`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `EMPRESAS`
--
ALTER TABLE `EMPRESAS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `USUARIOS`
--
ALTER TABLE `USUARIOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `DISPOSITIVOS`
--
ALTER TABLE `DISPOSITIVOS`
  ADD CONSTRAINT `DISPOSITIVOS_ibfk_1` FOREIGN KEY (`IDEMPRESA`) REFERENCES `EMPRESAS` (`ID`);

--
-- Restrições para tabelas `USUARIOS_EMPRESAS`
--
ALTER TABLE `USUARIOS_EMPRESAS`
  ADD CONSTRAINT `USUARIOS_EMPRESAS_ibfk_1` FOREIGN KEY (`EMPRESAS_ID`) REFERENCES `EMPRESAS` (`ID`),
  ADD CONSTRAINT `USUARIOS_EMPRESAS_ibfk_2` FOREIGN KEY (`USUARIOS_ID`) REFERENCES `USUARIOS` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
