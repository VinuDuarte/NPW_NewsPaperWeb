-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2019 às 02:33
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinicius_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

use vinicius_bd;


CREATE TABLE `noticias` (
  `COD_NOT` int(11) NOT NULL,
  `MANCHETE_NOT` varchar(45) NOT NULL,
  `RESUMO_NOT` varchar(45) NOT NULL,
  `TEXTO_NOT` longtext NOT NULL,
  `CATEGORIA_NOT` varchar(10) NOT NULL,
  `IMAGEM_NOT` varchar(45) NOT NULL,
  `usuario_cod_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`COD_NOT`, `MANCHETE_NOT`, `RESUMO_NOT`, `TEXTO_NOT`, `CATEGORIA_NOT`, `IMAGEM_NOT`, `usuario_cod_user`) VALUES
(1, 'Manchete 1 ', 'resumo da manchete 1 ', 'AAAAAAAAAAAAAAA A A AA AA \r\nADFAD\r\nFASD\r\nF\r\nADF\r\nAD\r\nFAD\r\nF\r\nADF\r\nAD\r\nF\r\nADF\r\nAD\r\nFAD\r\nF\r\nADF\r\nAD\r\nFAD\r\nF\r\nADF\r\nA\r\nFAD\r\nF\r\nAD\r\nFADF', 'hardware', '', NULL),
(2, 'Bolsonaro Preso', 'Bolsonaro foi preso hojwe', 'tem que se fuder cabor porra ', 'hardware', '', NULL),
(3, 'Coala chapado', 'Coala chapado de coca ao vivo em cores ', 'Esse coala chapado aovivo em cores apareceu hoje de mannha na rua 5', 'hardware', 'img/Koala.jpg', NULL),
(4, 'noticia 1', 'Primeira noticias do site', 'a sua mÃ£e Ã© minha ', 'hardware', 'img/foto_lingua_quente.jpg', 1),
(5, 'Ze Ã© gay', 'zore foi encontrado pelado na beira da estrad', 'chocante', 'hardware', 'img/foto_careca.jpg', 1),
(6, 'ola marilente', 'a noite da inha vinho ', ' muito xeco', 'hardware', 'img/foto_barba.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `COD_USER` int(11) NOT NULL,
  `NOME_USER` varchar(45) NOT NULL,
  `PERFIL_USER` varchar(20) NOT NULL,
  `LOGIN_USER` varchar(45) NOT NULL,
  `SENHA_USER` varchar(45) NOT NULL,
  `STATUS_USER` char(1) NOT NULL DEFAULT 'a',
  `IMAGEM_USER` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`COD_USER`, `NOME_USER`, `PERFIL_USER`, `LOGIN_USER`, `SENHA_USER`, `STATUS_USER`, `IMAGEM_USER`) VALUES
(1, 'Vinicius', 'Administrador', 'admin', '1', 'a', ''),
(2, 'zezinPanocu', 'jornalista', 'ze', '1', 'a', 'img/foto_bonita.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`COD_NOT`),
  ADD KEY `usuario_cod_user` (`usuario_cod_user`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`COD_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `COD_NOT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `COD_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`usuario_cod_user`) REFERENCES `usuarios` (`COD_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
