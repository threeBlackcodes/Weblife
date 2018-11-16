-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: localhost    Database: weblife
-- ------------------------------------------------------
-- Server version	8.0.12
create database if not exists weblife;

use weblife;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_adm`
--

DROP TABLE IF EXISTS `tb_adm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_adm` (
  `cd_adm` int(4) NOT NULL AUTO_INCREMENT,
  `nm_adm` varchar(60) DEFAULT NULL,
  `cd_senha_adm` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`cd_adm`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_adm`
--

LOCK TABLES `tb_adm` WRITE;
/*!40000 ALTER TABLE `tb_adm` DISABLE KEYS */;
INSERT INTO `tb_adm` VALUES (1,'Lumma','aetherium'),(2,'Fer','hjsim'),(3,'gio','giogio'),(4,'yuri','yuri1234'),(5,'teste','123456');
/*!40000 ALTER TABLE `tb_adm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_area`
--

DROP TABLE IF EXISTS `tb_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_area` (
  `cd_area` int(4) NOT NULL AUTO_INCREMENT,
  `nm_area` varchar(60) DEFAULT NULL,
  `ds_area` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`cd_area`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_area`
--

LOCK TABLES `tb_area` WRITE;
/*!40000 ALTER TABLE `tb_area` DISABLE KEYS */;
INSERT INTO `tb_area` VALUES (1,'Humanas','questionamento constantes, senso cirtico apurado, conhecimento historico, cultural e social.'),(2,'Exatas',' ter raciocinio rapido interesse em numeros e e por avancos tecnologicos'),(3,'Biologicas','querer seguir a area da saude ou biologia');
/*!40000 ALTER TABLE `tb_area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_curso`
--

DROP TABLE IF EXISTS `tb_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_curso` (
  `cd_curso` int(4) NOT NULL AUTO_INCREMENT,
  `nm_curso` varchar(60) DEFAULT NULL,
  `ds_curso` varchar(500) DEFAULT NULL,
  `cd_cep_curso` int(8) DEFAULT NULL,
  PRIMARY KEY (`cd_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_curso`
--

LOCK TABLES `tb_curso` WRITE;
/*!40000 ALTER TABLE `tb_curso` DISABLE KEYS */;
INSERT INTO `tb_curso` VALUES (1,'Informatica','Webdesign',11705150),(2,'Medico','Farmacia',11745150),(3,'Engenharia','Engenharia Civil',11712550),(4,'Ingles','1 ano de curso',11705165),(5,'Contabilidade','é curso',11752152);
/*!40000 ALTER TABLE `tb_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_feed`
--

DROP TABLE IF EXISTS `tb_feed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_feed` (
  `cd_feed` int(4) NOT NULL AUTO_INCREMENT,
  `nm_seed` varchar(60) NOT NULL,
  `nm_assunto` varchar(60) DEFAULT NULL,
  `ds_assunto` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`cd_feed`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_feed`
--

LOCK TABLES `tb_feed` WRITE;
/*!40000 ALTER TABLE `tb_feed` DISABLE KEYS */;
INSERT INTO `tb_feed` VALUES (1,'Lumma','Teste','HDyuakdyhsailds'),(2,'Gio','','dasdkshfgasfhasfhsaj');
/*!40000 ALTER TABLE `tb_feed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_inst`
--

DROP TABLE IF EXISTS `tb_inst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_inst` (
  `cd_inst` int(11) NOT NULL AUTO_INCREMENT,
  `nm_email_inst` varchar(260) DEFAULT NULL,
  `nm_inst` varchar(60) DEFAULT NULL,
  `cd_cep_inst` int(8) DEFAULT NULL,
  `nm_cidade_inst` varchar(60) DEFAULT NULL,
  `num_inst` varchar(10) DEFAULT NULL,
  `nm_bairro_inst` varchar(60) DEFAULT NULL,
  `nm_rua_inst` varchar(60) DEFAULT NULL,
  `sg_estado_inst` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cd_inst`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_inst`
--

LOCK TABLES `tb_inst` WRITE;
/*!40000 ALTER TABLE `tb_inst` DISABLE KEYS */;
INSERT INTO `tb_inst` VALUES (2,'dsadsadsa@fgafasfsafasf','fasfokl',11712320,'Praia Grande','112','Melvi','Rua da Coragem','SP'),(3,'universidadesanta@santa.com','Universidade Santa CecÃ­lia',11045,'Santos','227','BoqueirÃ£o','Rua Oswaldo Cruz','SP');
/*!40000 ALTER TABLE `tb_inst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_perguntas`
--

DROP TABLE IF EXISTS `tb_perguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_perguntas` (
  `id_perguntas` int(4) NOT NULL AUTO_INCREMENT,
  `ds_perguntas` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_perguntas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_perguntas`
--

LOCK TABLES `tb_perguntas` WRITE;
/*!40000 ALTER TABLE `tb_perguntas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_perguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_respostas`
--

DROP TABLE IF EXISTS `tb_respostas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_respostas` (
  `id_respostas` int(10) NOT NULL,
  `id_area` int(10) DEFAULT NULL,
  `peso` varchar(15) DEFAULT NULL,
  `cd_area` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_respostas`),
  KEY `cd_area_idx` (`cd_area`),
  CONSTRAINT `cd_area` FOREIGN KEY (`cd_area`) REFERENCES `tb_area` (`cd_area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_respostas`
--

LOCK TABLES `tb_respostas` WRITE;
/*!40000 ALTER TABLE `tb_respostas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_respostas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_usuario` (
  `cd_usuario` int(4) NOT NULL AUTO_INCREMENT,
  `nm_email` varchar(250) DEFAULT NULL,
  `nm_usuario` varchar(60) DEFAULT NULL,
  `cd_cep_usuario` int(8) DEFAULT NULL,
  `nm_cidade_usuario` varchar(60) NOT NULL,
  `num_casa` varchar(10) NOT NULL,
  `nm_bairro_usuario` varchar(60) NOT NULL,
  `nm_rua_usuario` varchar(60) NOT NULL,
  `sg_estado_usuario` varchar(4) NOT NULL,
  `cd_senha_usuario` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`cd_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuario`
--

LOCK TABLES `tb_usuario` WRITE;
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` VALUES (1,'giovanni@gmail.com','Giovanni',11706785,'','','','','','giogio123'),(2,'leticiabrenan@hotmail.com','Leticia',11726784,'','','','','','leticia157'),(3,'luansantana@ig.com.br','Luan',11708755,'','','','','','luan153'),(4,'thico26@msn.com','Thiago',11726065,'','','','','','thico26'),(5,'paulobonfa@gmail.com','Paulo',11700785,'','','','','','paulo155'),(6,'yuricaires@gmail.com','Yuri',11724220,'','','','','','yuri666'),(15,'fgsfg@fgf.com','root',11706130,'Praia Grande','218','CaiÃ§ara','Rua Flausina de Oliveira Rosa','SP','usbw'),(16,'giovanni@gmail.com','giovanni',11706130,'Praia Grande','','CaiÃ§ara','Rua Flausina de Oliveira Rosa','SP','giogio123');
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'weblife'
--

--
-- Dumping routines for database 'weblife'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-31 20:49:47
