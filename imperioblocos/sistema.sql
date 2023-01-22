-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 10-Set-2019 às 01:14
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd_agenda`
--
CREATE DATABASE IF NOT EXISTS `sistema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `cd_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nm_admin` varchar(30) NOT NULL,
  `ds_imagem` varchar(50) NOT NULL,
  `senha_admin` varchar(30) NOT NULL,
  PRIMARY KEY (`cd_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;


INSERT INTO `tb_admin` (`cd_admin`, `nm_admin`,`ds_imagem`,`senha_admin`) VALUES

(1,'admin','img/usuarios/admin.png','admin');


--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `cd_cliente` int(3) NOT NULL AUTO_INCREMENT,
  `nm_cliente` varchar(30) NOT NULL,
  `cpf_cliente` int(12) DEFAULT NULL,
  `cnpj_cliente` int(14) DEFAULT NULL,
  `rg_cliente` int(12) DEFAULT NULL,
  `cep_cliente` int(9) NOT NULL,
  `num_cliente` int(7) NOT NULL,
  `tel_cliente` int(12) NOT NULL,
  `cel_cliente` int(19) NOT NULL,
  `email_cliente` varchar(30) NOT NULL,
  `senha_cliente` varchar(15) NOT NULL,
  PRIMARY KEY (`cd_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`cd_cliente`, `nm_cliente`, `cpf_cliente`, `rg_cliente`, `cep_cliente`, `num_cliente`, `tel_cliente`, `cel_cliente`, `email_cliente`) VALUES
(1, 'Fabio', 0, '1', '1', '1', 1, 1, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE IF NOT EXISTS `tb_funcionario` (
  `cd_funcionario` int(3) NOT NULL AUTO_INCREMENT,
  `nm_funcionario` varchar(30) NOT NULL,
  `cpf_funcionario` char(12) DEFAULT NULL,
  `rg_funcionario` int(12) DEFAULT NULL,
  `cep_funcionario` int(9) DEFAULT NULL,
  `num_funcionario` int(7) DEFAULT NULL,
  `tel_funcionario` int(12) DEFAULT NULL,
  `cel_funcionario` int(19) DEFAULT NULL,
  `email_funcionario` varchar(30) NOT NULL,
  `senha_funcionario` varchar(15) NOT NULL,
  PRIMARY KEY (`cd_funcionario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_funcionario`rg_funcionario
--

INSERT INTO `tb_funcionario` (`cd_funcionario`, `nm_funcionario`, `cpf_funcionario`, `rg_funcionario`, `cep_funcionario`, `num_funcionario`, `tel_funcionario`, `cel_funcionario`, `email_funcionario`) VALUES
(1, 'Fabio', '1', 0, 1, 1, 1, 1, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_orcamento`
--

CREATE TABLE IF NOT EXISTS `tb_orcamento` (
  `cd_orcamento` int(3) NOT NULL AUTO_INCREMENT,
  `precototal_orcamento` int(20) DEFAULT NULL,
  PRIMARY KEY (`cd_orcamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE IF NOT EXISTS `tb_produto` (
  `cd_produto` int(3) NOT NULL AUTO_INCREMENT,
  `nm_produto` varchar(15) NOT NULL,
  `tipo_produto` varchar(10) DEFAULT NULL,
  `precount_produto` int(10) NOT NULL,
  `qtd_produto` int(7) NOT NULL,
  `tamanho_produto` int(10) NOT NULL,
  PRIMARY KEY (`cd_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;




 
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `cd_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(30) NOT NULL,
  `ds_imagem` varchar(50) NOT NULL,
  `cpf_usuario` int(12) DEFAULT NULL,
  `cnpj_usuario` int(14) DEFAULT NULL,
  `rg_usuario` int(12) DEFAULT NULL,
  `cep_usuario` int(9) NOT NULL,
  `num_usuario` int(7) NOT NULL,
  `tel_usuario` int(12) NOT NULL,
  `cel_usuario` int(19) NOT NULL,
  `email_usuario` varchar(30) NOT NULL,
  `senha_usuario` varchar(30) NOT NULL,
  
  
  PRIMARY KEY (`cd_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cd_usuario`, `nm_usuario`,`ds_imagem`,`cpf_usuario`,`cnpj_usuario`,`rg_usuario`,`cep_usuario`,`num_usuario`,`tel_usuario`,`cel_usuario`,`email_usuario`, `senha_usuario`) VALUES

(1, 'koala','img/usuarios/2019.10.04-20.22.19.jpg','49853108836',44444444444,111,1,1,1,1,'1','koala' );

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
