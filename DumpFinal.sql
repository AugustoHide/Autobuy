CREATE DATABASE  IF NOT EXISTS `carros` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `carros`;
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: carros
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `anuncios`
--

DROP TABLE IF EXISTS `anuncios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anuncios` (
  `id_anuncio` int(11) NOT NULL AUTO_INCREMENT,
  `idVendedor` int(11) NOT NULL,
  `veiculo` char(45) NOT NULL,
  `data` date NOT NULL,
  `validacao` tinyint(4) NOT NULL DEFAULT '1',
  `descricao` char(255) DEFAULT NULL,
  `veiculos_id_veiculo` int(11) NOT NULL,
  PRIMARY KEY (`id_anuncio`),
  KEY `fk_anuncios_veiculos_idx` (`veiculos_id_veiculo`),
  CONSTRAINT `fk_anuncios_veiculos` FOREIGN KEY (`veiculos_id_veiculo`) REFERENCES `veiculos` (`id_veiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anuncios`
--

LOCK TABLES `anuncios` WRITE;
/*!40000 ALTER TABLE `anuncios` DISABLE KEYS */;
/*!40000 ALTER TABLE `anuncios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` char(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `vendedor` tinyint(4) NOT NULL DEFAULT '0',
  `anuncio` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(12) NOT NULL,
  PRIMARY KEY (`id_cliente`,`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes_has_anuncios`
--

DROP TABLE IF EXISTS `clientes_has_anuncios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes_has_anuncios` (
  `clientes_id_cliente` int(11) NOT NULL,
  `clientes_cpf` char(11) NOT NULL,
  `anuncios_id_anuncio` int(11) NOT NULL,
  PRIMARY KEY (`clientes_id_cliente`,`clientes_cpf`,`anuncios_id_anuncio`),
  KEY `fk_clientes_has_anuncios_anuncios1_idx` (`anuncios_id_anuncio`),
  KEY `fk_clientes_has_anuncios_clientes1_idx` (`clientes_id_cliente`,`clientes_cpf`),
  CONSTRAINT `fk_clientes_has_anuncios_anuncios1` FOREIGN KEY (`anuncios_id_anuncio`) REFERENCES `anuncios` (`id_anuncio`),
  CONSTRAINT `fk_clientes_has_anuncios_clientes1` FOREIGN KEY (`clientes_id_cliente`, `clientes_cpf`) REFERENCES `clientes` (`id_cliente`, `cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes_has_anuncios`
--

LOCK TABLES `clientes_has_anuncios` WRITE;
/*!40000 ALTER TABLE `clientes_has_anuncios` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes_has_anuncios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veiculos`
--

DROP TABLE IF EXISTS `veiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `veiculos` (
  `id_veiculo` int(11) NOT NULL,
  `imagem` blob NOT NULL,
  `marca` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `ano` varchar(45) NOT NULL,
  `ano_modelo` varchar(45) NOT NULL,
  `cor` varchar(45) NOT NULL,
  `preco` double NOT NULL,
  `quilometragem` bigint(20) NOT NULL,
  `caterogia` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_veiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculos`
--

LOCK TABLES `veiculos` WRITE;
/*!40000 ALTER TABLE `veiculos` DISABLE KEYS */;
/*!40000 ALTER TABLE `veiculos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'carros'
--

--
-- Dumping routines for database 'carros'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-26 22:26:43
