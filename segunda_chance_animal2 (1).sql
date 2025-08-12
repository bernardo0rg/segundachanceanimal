-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Ago-2025 às 00:43
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `segunda_chance_animal2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adocao`
--

CREATE TABLE `adocao` (
  `id_adocao` int(11) NOT NULL,
  `formulario_adocao` varchar(50) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

CREATE TABLE `animais` (
  `id_animais` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `porte` varchar(15) NOT NULL,
  `especie` varchar(20) NOT NULL,
  `data_cadastro` date NOT NULL,
  `status_adocao` varchar(15) NOT NULL,
  `pedigre` varchar(5) NOT NULL,
  `idade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao_monetaria`
--

CREATE TABLE `doacao_monetaria` (
  `id_doacao` int(11) NOT NULL,
  `metodo_pagamento` varchar(15) NOT NULL,
  `doacao_anonima` varchar(10) DEFAULT NULL,
  `data_doacao` date NOT NULL,
  `status_doacao` varchar(20) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario_voluntario`
--

CREATE TABLE `formulario_voluntario` (
  `id_formulario_voluntario` int(11) NOT NULL,
  `area_interesse` varchar(20) NOT NULL,
  `periodo_preferencia` varchar(10) NOT NULL,
  `extras` text DEFAULT NULL,
  `experiencia` varchar(5) DEFAULT NULL,
  `disponibilidade` varchar(20) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_animais`
--

CREATE TABLE `imagem_animais` (
  `id_imagem_animal` int(11) NOT NULL,
  `url_img_animal` text DEFAULT NULL,
  `id_animais` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo_adotivo`
--

CREATE TABLE `processo_adotivo` (
  `id_processo_adotivo` int(11) NOT NULL,
  `fechamento` date NOT NULL,
  `abertura` date NOT NULL,
  `id_animais` int(11) DEFAULT NULL,
  `id_adocao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `voluntario` int(11) DEFAULT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cidade` varchar(25) NOT NULL,
  `estado` varchar(5) NOT NULL,
  `idadocao` int(11) DEFAULT NULL,
  `senha` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adocao`
--
ALTER TABLE `adocao`
  ADD PRIMARY KEY (`id_adocao`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`id_animais`);

--
-- Índices para tabela `doacao_monetaria`
--
ALTER TABLE `doacao_monetaria`
  ADD PRIMARY KEY (`id_doacao`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `formulario_voluntario`
--
ALTER TABLE `formulario_voluntario`
  ADD PRIMARY KEY (`id_formulario_voluntario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `imagem_animais`
--
ALTER TABLE `imagem_animais`
  ADD PRIMARY KEY (`id_imagem_animal`),
  ADD KEY `id_animais` (`id_animais`);

--
-- Índices para tabela `processo_adotivo`
--
ALTER TABLE `processo_adotivo`
  ADD PRIMARY KEY (`id_processo_adotivo`),
  ADD KEY `id_animais` (`id_animais`),
  ADD KEY `id_adocao` (`id_adocao`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `cpf` (`cpf`,`email`,`telefone`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adocao`
--
ALTER TABLE `adocao`
  MODIFY `id_adocao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `animais`
--
ALTER TABLE `animais`
  MODIFY `id_animais` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `doacao_monetaria`
--
ALTER TABLE `doacao_monetaria`
  MODIFY `id_doacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `formulario_voluntario`
--
ALTER TABLE `formulario_voluntario`
  MODIFY `id_formulario_voluntario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imagem_animais`
--
ALTER TABLE `imagem_animais`
  MODIFY `id_imagem_animal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `processo_adotivo`
--
ALTER TABLE `processo_adotivo`
  MODIFY `id_processo_adotivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `adocao`
--
ALTER TABLE `adocao`
  ADD CONSTRAINT `adocao_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `doacao_monetaria`
--
ALTER TABLE `doacao_monetaria`
  ADD CONSTRAINT `doacao_monetaria_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `formulario_voluntario`
--
ALTER TABLE `formulario_voluntario`
  ADD CONSTRAINT `formulario_voluntario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `imagem_animais`
--
ALTER TABLE `imagem_animais`
  ADD CONSTRAINT `imagem_animais_ibfk_1` FOREIGN KEY (`id_animais`) REFERENCES `animais` (`id_animais`);

--
-- Limitadores para a tabela `processo_adotivo`
--
ALTER TABLE `processo_adotivo`
  ADD CONSTRAINT `processo_adotivo_ibfk_1` FOREIGN KEY (`id_animais`) REFERENCES `animais` (`id_animais`),
  ADD CONSTRAINT `processo_adotivo_ibfk_2` FOREIGN KEY (`id_adocao`) REFERENCES `adocao` (`id_adocao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
