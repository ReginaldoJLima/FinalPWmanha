-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para bloginterativo
CREATE DATABASE IF NOT EXISTS `bloginterativo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bloginterativo`;

-- Copiando estrutura para tabela bloginterativo.arquivosvalidados
CREATE TABLE IF NOT EXISTS `arquivosvalidados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `artigo` longtext NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `usuario` enum('aluno','ex-aluno','professor') NOT NULL,
  `mensagem` longtext,
  `curso` varchar(50) NOT NULL,
  `instituicao` varchar(50) NOT NULL,
  `linkVideo` varchar(50) NOT NULL,
  `linkImagem` varchar(50) NOT NULL,
  `categoria` enum('artes','beleza','comercio','conservacaoezeladoria','design','educacional','gastronomia','gestao','hospedagem','idiomas','informatica','lazer','meioambiente','moda','saude','seguranca','turismo','comunicacao') NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela bloginterativo.contato
CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomecompleto` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `mensagem` longtext,
  `dataCriacao` timestamp NULL DEFAULT NULL,
  `dataAtualizacao` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela bloginterativo.facavocemesmo
CREATE TABLE IF NOT EXISTS `facavocemesmo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `artigo` longtext NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `usuario` enum('aluno','ex-aluno','professor') NOT NULL,
  `mensagem` longtext,
  `curso` varchar(50) NOT NULL,
  `instituicao` varchar(50) NOT NULL,
  `linkVideo` varchar(50) NOT NULL,
  `linkImagem` varchar(50) NOT NULL,
  `categoria` enum('artes','beleza','comercio','conservacaoezeladoria','design','educacional','gastronomia','gestao','hospedagem','idiomas','informatica','lazer','meioambiente','moda','saude','seguranca','turismo','comunicacao') NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
