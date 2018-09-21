-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 10.142.10.154    Database: noc
-- ------------------------------------------------------
-- Server version	5.5.56-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cabos`
--

DROP TABLE IF EXISTS `cabos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cabos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cabo` varchar(85) DEFAULT NULL,
  `origem` varchar(85) DEFAULT NULL,
  `destino` varchar(85) DEFAULT NULL,
  `obs` varchar(300) DEFAULT NULL,
  `cliente` varchar(65) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cabos`
--

LOCK TABLES `cabos` WRITE;
/*!40000 ALTER TABLE `cabos` DISABLE KEYS */;
INSERT INTO `cabos` VALUES (1,'16438','17 BH CP1 AP14 P4','16442 SW 173  2/23','','corporativo.','2017-10-17'),(2,'16439','17 BH CP1 AP14 P5','16443 SW 173 5/24','','corporativo.','2017-10-17'),(3,'16436','17 BI CP1 AY14 P4','16440 SW 174 2/23','','corporativo.','2017-10-17'),(4,'16437','17 BI CP1 AY14 P5','16441 SW 174 5/17','','corporativo.','2017-10-17'),(6,'16446','TC03 R2 PP 18 P 14 ISS023 B GO/21','ISS002 6/23 7700','TC03/26','COCAMAR','2017-10-20'),(7,'16445','TC03 R2 PP 18 P 13 ISS023 A GO/21','ISS001 6/23 7701','TC03/25','COCAMAR','2017-10-20'),(8,'16447','ISS023A  GO/36 TC03/25','TC03/20 ROTEADOR','','COCAMAR','2017-10-20'),(9,'16448','TC07/21 CTBH9','TC03/20 ROTEADOR','','COCAMAR','2017-10-20'),(10,'16432','TC03/20','ESS001 G5/31','','COCAMAR','2017-10-26'),(11,'16420','TC03/20','ISS001 6/20 16426','','cocamar','2017-10-26'),(12,'16421','TC03/20','ISS001 6/21 16427','','cocamar','2017-10-26'),(13,'16422','TC03/20','ISS001 6/22 16428','','COCAMAR','2017-10-26'),(14,'16433','TC03/21','ESS002 G5/31','','COCAMAR','2017-10-26'),(15,'16423','TC03/21','ISS002 G6/20 16429','','COCAMAR','2017-10-26'),(16,'16424','TC03/21','ISS002 G6/21 16430','','COCAMAR','2017-10-26'),(17,'16425','TC03/21','ISS002 G6/22 16431','','COCAMAR','2017-10-26'),(21,'16458','TC04/80 BTPR0137','CNX14 TC01/28','CABO DE FIBRA DIRETO.','CDR-VIEW','2017-10-31'),(22,'16459','TC04/80 BTPR0137','CNX15 TC01/28','CABO DE FIBRA DIRETO.','CDR-VIEW','2017-10-31'),(23,'16460','TC07 R2 PP09 P 12','TC06/08','CABO CI TELEFONê','ELECTROLUX','2017-11-10'),(25,'16453','TC04/13 BTPR0464','ISS013 4/2  16456','TC04 R2 PP04 P 24','OI CTA.','2017-11-20'),(26,'16454','TC04/14 BTPR0465','ISS013 4/3  16457','TC04 R2 PP04 P 25','OI CTA.','2017-11-20'),(27,'16452','TC04/13 BTPR0463','ISS013 4/1 16455','TC04 R2 PP04 P 23','OI CTA.','2017-11-20'),(28,'16462','TC07/18 CTACY 1050','BACKBONE MC01/07','SALA BACKBONE DIO FURUKAWA INTERLIGA COM  A SALA DA GARAGEM.','ENGENHARIA OI','2017-11-24'),(30,'14418','TC07/18 CTACY 1050','TC06/21 SW PORTA23','Primeiro sw do Rack.do Cliente\r\n','UNIPRIME','2017-12-05'),(31,'16563','TC03/14 SW SANCYRIO 20','SC01 FRAME0118 16569','MANOBRA 16565','COCAMAR','2017-12-06'),(32,'16562','TC03/14 SW SANCYRIO 20','SC01 FRAME0118 16570','MANOBRA 16566','COCAMAR','2017-12-06'),(33,'16561','TC03/13 SW SANCYRIO 10','SC01 FRAME0118 16571','MANOBRA 16567','COCAMAR','2017-12-06'),(34,'16564','TC03/13 SW SANCYRIO 10','SC01 FRAME0118 16572','MANOBRA 16568','COCAMAR','2017-12-06'),(35,'16585',' 17AY CP03 AY14 PT02','1A PT09 SALA 05 8ACABO 16588','',' Plaenge','2017-12-13'),(36,'16626','TC01/20 TC1 R2 PP02 P01 DO TC04','SPRCTA171 3/35 16630','','System Center (Hyper','2017-12-20'),(37,'16627','TC01/20 TC1 R2 PP02 P03 DO TC04','SPRCTA171 3/36 16631','','System Center (Hyper','2017-12-20'),(40,'16638','TC01/20','ISS023A P23','','COCAMAR','2017-12-20'),(41,'16639','TC01/20','ISS023A P24','','COCAMAR','2017-12-20'),(44,'16636','TC01/16','ISS023B P04','','COCAMAR','2017-12-20'),(45,'16637','TC01/16','ISS023B P06','','COCAMAR','2017-12-20'),(46,'16616','TC03/20 TC03 R1 PP16 P7','ISS001 G6/33-16620','','COCAMAR','2017-12-26'),(47,'16617','TC03/20 TC03 R1 PP16 P8','ISS001 G6/34-16621','','COCAMAR','2017-12-26'),(48,'16618','TC03/21 TC03 R1 PP16 P9','ISS001 G6/35-16622','','COCAMAR','2017-12-26'),(49,'16619','TC03/21 TC03 R1 PP16 P10','ISS001 G6/36-16623','','COCAMAR','2017-12-26'),(50,'16640','TC01/20 TC01 R2 PP2-9','SPRCTA 109 G3/25 16643','','System Center (Hyper','2017-12-26'),(51,'16641','TC01/20 TC01 R2 PP2-10','SPRCTA 109 G3/26 16644','','System Center (Hyper','2017-12-26'),(52,'16642','TC01/16 TC01 R2 PP02 P12','SPRCTA 110 G3/27 16645','','System Center (Hyper','2017-12-26'),(58,'16646','17 BI CP1 AY14 P9','PRBHD-CSA174 Gi2/26 16647','','corporativo BKPPX28','2017-12-26'),(59,'16464','TC01/20 TC04 R2 PP04 P 1	','SPRCTA001 M5/07 CABO 16465','','cyber cta.','2017-12-27'),(60,'16654','TC03/20 TC03 R1 PP16 P11','ISS001 G6/19 16656','','COCAMAR','2018-01-03'),(61,'16655','TC03/21 TC03 R1 PP16 P12','ISS002 G6/19 16657','','COCAMAR','2018-01-03'),(62,'16658','TC01/16','TC01/20','','System Center (Hyper','2018-01-04'),(63,'16625					','TC01/16 TC01 R2 PP02 P18','SPRCTA172 3/36 16635','','System Center (Hyper','2018-01-08'),(66,'16629			','TC01/20 TC1 R2 PP02 P05 DO TC04','SPRCTA171 3/38 16633','','System Center (Hyper','2018-01-08'),(67,'16624		','TC01/16 TC01 R2 PP02 P17','SPRCTA172 3/35 16634','','System Center (Hyper','2018-01-08'),(68,'16628','TC01/20 TC1 R2 PP02 P04 DO TC04','SPRCTA171 3/37 16632','','System Center (Hyper','2018-01-08'),(69,'16676','TC06-73/1 TC06 R2 PP02 P12','SW ESS020 TC06 P18 CABO 16675','','MULTILOJA','2018-01-24'),(70,'16672','SALA PTT  RACK 2/1 EMBRATEL','17 AY','CABO DIRETO.','RACK PLAENGE','2018-01-24'),(73,'16673','SALA PTT  RACK 2/1 EMBRATEL','17 AY','CABO DIRETO','RACK PLAENGE','2018-01-24'),(74,'16674','SALA PTT  RACK 2/1 EMBRATEL','17 AY','CABO DIRETO.','RACK PLAENGE','2018-01-24'),(75,'16678','SALA DA APANET SW SPRCTA 250','SALA DO BACKBONE SW PBHD-CSN101','CABO 16678 MANOBRA1 16679 RACK BACBONE 16680','OI CTA.','2018-01-31'),(76,'16691','TC02/23 TC02 R2PP06 19','SW SPRCTA001 8/33 16693','','VITAL QIP','2018-02-14'),(78,'16685','TC02/23 TC02 R4 PP01 24','SW SPRCTA109 G4/9 16688','','VITAL QIP','2018-02-14'),(79,'16692','TC02/04 TC02 R2 PP06 20','SW SPRCTA002 8/26 16694','','VITAL QIP','2018-02-14'),(80,'16686','TC02 04 TC02 R4 PP01 22','SW SPRCTA110 4/16 16687','','VITAL QIP','2018-02-14'),(81,'16681','TC6 60-1 CP5 AX14 P7 ','SW SPRCTA175 G1/30 16683','','VITAL QIP','2018-02-14'),(82,'16682','TC6 60-1 CP5 AX14 P8','SW SPRCTA173 G2/30 16684','','VITAL QIP','2018-02-14'),(84,'16698','TC03/31 TC03 R1 PP12 PORTA 24 ','ESS005 GO/40 CABO 16696 VAI GIGA TC05 PORTA 13 VAI PARA BACKBONE','PP12 INTERLIGA COM GIGA DO MC01 PP03 PORTA 13','FURUKAWA','2018-02-20'),(85,'16713','TC07/18 ','TC07/17/1  DIRETO','','REDECARD','2018-03-22'),(86,'16714','TC07/19','TC07/17/1  DIRETO','','REDECARD','2018-03-22'),(87,'16729','CNX12 TC04/49','ROBÔ SC2 16732','','OI CTA.','2018-03-22'),(88,'16730','CNX12 TC04/49','ROBÔ SC2 16733','','OI CTA.','2018-03-22'),(89,'16731','CNX13 TC04/49','ROBÔ SC2 16734','','OI CTA.','2018-03-22'),(90,'15458','TC05/30','TC07/19 CTACY 1051','','VIGIA','2018-04-04'),(91,'15457','TC05/30','TC07/18 CTACY 1050','','VIGIA','2018-04-04'),(92,'15453','TC05/30','SWITCH SW2 MODLO1 PORTA 05 15455','','ENGENHARIA','2018-04-04'),(93,'15454','TC05/30','SWITCH SW1 MODLO1 PORTA 05 15456','','ENGENHARIA','2018-04-04'),(94,'16716','TC02/15 TC02 R4 PP02 P35','SPRCTA 181 FO/26 16715','','OI CTA.','2018-04-11'),(95,'16717','TC02/15 TC02 R4 PP02 P36','SPRCTA182 FO/25 16735','','OI CTA.','2018-04-11'),(96,'16718','TC02/09 TC02 R4 PP01 P09','SPRCTA181 Fa0/28 16736','','OI CTA.','2018-04-11'),(97,'16719','TC02/09 TC02 R4 PP02 P01','SPRCTA182 Fa0/26 16737','','OI CTA.','2018-04-11'),(98,'16720','TC02/09 TC02 R4 PP02 P06','SPRCTA181 Fa0/29 16738','','OI CTA.','2018-04-11'),(99,'16739','TC07/18  CTACY 1050','TC06/08','LINK DE 50 MBPS','ELECTROLUX','2018-04-27'),(100,'16743','TC07/17/1','ESS021 porta 36 cp18 p2 13820','','Redecard','2018-05-24'),(101,'16745','TC07/17/1','ESS021 porta 34 cp 20 p1 13818','','Redecard','2018-05-24'),(102,'16744','TC07/17/1','ESS021 porta 37 cp18 p3 13821','','Redecard ','2018-05-24'),(103,'teste','teste','teste','teste','teste','2018-07-27'),(104,'100','11525','321','545','21','2018-07-28'),(105,'TESTE','TESTE','TESTE','TESTE','TESTE','2018-07-30');
/*!40000 ALTER TABLE `cabos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial` varchar(45) DEFAULT NULL,
  `descricao` varchar(1000) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro`
--

LOCK TABLES `cadastro` WRITE;
/*!40000 ALTER TABLE `cadastro` DISABLE KEYS */;
INSERT INTO `cadastro` VALUES (4,' 010789800977140221A083FB','Gabinete  retirado do circuito 0711858, entregue por  Wellington da APA no dia 5/12/17 a pedido do Rafa do Noc, equipamento estava dentro de um Hack que precisou ser desativado!! Rack tc4_35','2017-12-06'),(5,' 010789800977140221A083FB','Gabinete  retirado do circuito 0711858, entregue por  Wellington da APA no dia 5/12/17 a pedido do Rafa do Noc, equipamento estava dentro de um Hack que precisou ser desativado!! Rack tc4_35','2017-12-06'),(6,' 010789800977140221A083FA','Equipamento retirado do circuito 0711859 entregue por Wellington a pedido Rafael do Noc, equipamento retirado de um rack que precisou ser desativado no dia 5/12/17','2017-12-06'),(7,' 010789599900168721258825','Fracionador vinculado ao ccto 0711858, configuração 2 mbps, entregué por wellington  da apa retirado de um rack que precisou ser retirado do Cyber a pedido do Rafael do Noc no dia 5/12/17','2017-12-06'),(8,' 010789599900168721259003','Fracionador vinculado ao ccto 0711859, configuração 2 mbps, entregué por wellington  da apa retirado de um rack que precisou ser retirado do Cyber a pedido do Rafael do Noc no dia 5/12/17','2017-12-06'),(9,' FTX1624860P','Roteador cisco retirado do rack tc06-23 do cydc,vinculado ao ccto 0752952 primesys de 64 kbps, equipamento estava desativado no rack','2017-12-06'),(10,' 01304249','Modem retirado do rack tc06-23 do cydc,vinculado ao ccto 0752952 primesys de 64 kbps, equipamento estava desativado no rack','2017-12-06'),(11,' 010789800977140221768502','Gabinete parks retirado do rack tc06-23 do cydc,vinculado ao ccto 0752952 primesys de 64 kbps, equipamento estava desativado no rack','2017-12-06'),(12,' JMX0539F2MV','Roteador retirado do circuito 0711858, entregue por Wellington da APA no dia 5/12/17 a pedido do Rafa do Noc, equipamento estava dentro de um Hack que precisou ser desativado!! Rack tc4_35','2017-12-07'),(13,' FTX0936Y051','Gabinete retirado do circuito 0711858, entregue por Wellington da APA no dia 5/12/17 a pedido do Rafa do Noc, equipamento estava dentro de um Hack que precisou ser desativado!! Rack tc4_35','2017-12-07'),(14,' FTX163583C0','Roteador retirado do rack TC-5-18-2 por solicitação do cliente Tiago da loja de departamentos Milium com o BA 195713132 ','2018-01-05'),(15,' 0107895999030014210004027630','Modem fracionador retirado do rack tc5-18-2 a pedido do cliente Thiago (Loja de departamentos  Milium) juntamente  com o BA vinculado 195713132. .... Configurado para 64 kbps','2018-01-05'),(16,' CN34D0K0XH','Roteador HP AMSR 20 11 do cliente uniprime,retirado do rack TC06-21 do CYDC, a pedido do NOC para liberação do rack, cliente efetuou uma mudança de endereço e não gerou OS para retirarada dos mesmos.','2018-03-27'),(17,' CN49G060HP','Roteador HP MSR931 do cliente uniprime vinculado ao ccto 0798031 ,retirado do rack TC06-21 do CYDC, a pedido do NOC para liberação do rack, cliente efetuou uma mudança de endereço e não gerou OS para retirarada dos mesmos.','2018-03-27'),(18,'0002499033','Modem DM991CE  do cliente uniprime,vinculado ao ccto 0798031,retirado do rack TC06-21 do CYDC, a pedido do NOC para liberação do rack, cliente efetuou uma mudança de endereço e não gerou OS para retirarada dos mesmos.','2018-03-27'),(19,' FTX1633821K','Roteador Cisco 1921 do cliente uniprime,retirado do rack TC06-21 do CYDC, a pedido do NOC para liberação do rack, cliente efetuou uma mudança de endereço e não gerou OS para retirarada dos mesmos.','2018-03-27'),(20,' FSP1724ABAM','Roteador Cisco 1905 do cliente uniprime,retirado do rack TC06-21 do CYDC, a pedido do NOC para liberação do rack, cliente efetuou uma mudança de endereço e não gerou OS para retirarada dos mesmos.','2018-03-27'),(21,' 9028911051665055','Gabinete  do cliente uniprime,retirado do rack TC06-21 do CYDC, a pedido do NOC para liberação do rack, cliente efetuou uma mudança de endereço e não gerou OS para retirarada dos mesmos.','2018-03-27'),(22,' 010789800977140221B275F8','Gabinete do cliente uniprime,retirado do rack TC06-21 do CYDC, a pedido do NOC para liberação do rack, cliente efetuou uma mudança de endereço e não gerou OS para retirarada dos mesmos.','2018-03-27'),(23,' 01062504','Fracionador DT2048 do cliente uniprime,retirado do rack TC06-21 do CYDC, a pedido do NOC para liberação do rack, cliente efetuou uma mudança de endereço e não gerou OS para retirarada dos mesmos.','2018-03-27'),(24,' FTX163982ZB','Roteador cisco 1905 do cliente uniprime,vinculado ao ccto 0779193 retirado do rack TC06-21 do CYDC, a pedido do NOC para liberação do rack, cliente efetuou uma mudança de endereço e não gerou OS para retirarada dos mesmos.','2018-03-27'),(25,' 0001226838','Modem DM991CE do cliente uniprime,vincuñadp ao ccto 0788110 retirado do rack TC06-21 do CYDC, a pedido do NOC para liberação do rack, cliente efetuou uma mudança de endereço e não gerou OS para retirarada dos mesmos.','2018-03-27'),(26,' FTX174685CW','Routedor cisco retirado rack Arauco referente al ccto 0780200','2018-06-08'),(27,' 01062335','Modem DT2048 cliente Redecard vinculado ao ccto 0747460 ... Topologia: CTBH.20.390 sub A5/3 256 kbps. ... Retirado do rack tc4-46','2018-07-10'),(28,' FTX174685CW','Roteador retirado do rack TC6-16 do cliente Arauco, ccto 0780200, modificação de CPE, foi substituído por um cisco 3925','2018-07-24'),(29,'FTX1626Y0AF','ROTEADOR TIRADO DO RACK TC5-20,CLIENTE SERVOPA, A PEDIDO DA OI BA: 198068469 VINCULADO AO CCTO 0775034 (NO EQUIPAMENTO CONSTAVA CCTO 0768647)','2018-08-06');
/*!40000 ALTER TABLE `cadastro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `principal`
--

DROP TABLE IF EXISTS `principal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `principal` (
  `protocolo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_reg` varchar(45) DEFAULT NULL,
  `empresa` varchar(45) DEFAULT NULL,
  `servico` varchar(45) DEFAULT NULL,
  `projeto` varchar(75) DEFAULT NULL,
  `pedido` varchar(45) DEFAULT NULL,
  `recebido_doca` varchar(45) DEFAULT NULL,
  `ar` varchar(45) DEFAULT NULL,
  `volume` varchar(45) DEFAULT NULL,
  `site` varchar(45) DEFAULT NULL,
  `tipo_eqp` varchar(45) DEFAULT NULL,
  `descricao` varchar(1000) DEFAULT NULL,
  `responsavel` varchar(45) DEFAULT NULL,
  `empresa_resp` varchar(45) DEFAULT NULL,
  `rg` varchar(45) DEFAULT NULL,
  `uf` varchar(45) DEFAULT NULL,
  `pdf` varchar(45) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`protocolo`)
) ENGINE=InnoDB AUTO_INCREMENT=3025 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `principal`
--

LOCK TABLES `principal` WRITE;
/*!40000 ALTER TABLE `principal` DISABLE KEYS */;
INSERT INTO `principal` VALUES (3006,'ENTRADA','Multiloja','COLOCATION','Multiloja','Pertecente ao cliente','SIM','N/A','03','CTA','SWITCH','Roteador CPE MERAKI MX64 ETHERNET S/N 85176259','Willian Garcia Vieira','Multiloja - Wagner Polachini','0','PR','256126288ceb6225ccb3ef774af73b23','2018-08-02'),(3008,'ENTRADA','ELECTROLUX','COLOCATION','ELECTROLUX','N/A','NAO','17624187','25','CTA','FITAS','000032L4 000039L4 000052L4 000058L4 000077L4 000248L2 000248L4 000249L4 000252L2 000278L4 000350L4 000362L4 000414L4 000623L4 000690L4 000801L4 000830L4 000866L4 001243L4 001637L4 001821L4 001842L4 001857L4 001878L4 002707L4 ','ALLAN AUGUSTO VARAGO','GLOBALWEB ALLAN VARAGO','101195112','PR','381ac663a2d6918be2e218905e7debe0.pdf','2018-08-03'),(3009,'ENTRADA','Oi','ENGENHARIA','N/A','4506817387','SIM','N/A','3','CTA','OUTROS','MOD, TRANSC, CISCO, GLC-SX-MMD= (000005) ITEM 5 COD 100242 MODULO TRANSCEIVE \r\nFRWL, FIREPOWER,AC,CISCO,FPR2130-NGFW-K9(000004) ITEM 4 COD100216 FIREWALLETHERN 2 \r\nFRWL,FIREPOWER,AC,CISCOFPR2130-NGFW-K9(000006) ITEM 6 COD 100216 FIREWALL ETHERN 2','Felipe Ricarti','Felipe Ricarti - Oi','.','PR','bc360b5db7481d3d4d6926b9376880d8.pdf','2018-08-06'),(3010,'ENTRADA','Iron Mountain','COLOCATION','Electrolux','N/A','NAO','17655382','37','CTA','FITAS','001138L4 001897L4 002009L4 002070L4 002084L4 002102L4 002176L4 002488L4 002505L4 002506L4 002561L4 002597L4 002621L4 002624L4 002646L4 002657L4 002687L4 002720L4 002738L4 002780L4 002822L4 002881L4 002932L4 002988L4 003035L4 003063L4 003075L4 003077L4 003115L4 003121L4 003132L4 003138L4 + anexo.','Patrick Sueki','Iron Mountain','9.489.279-1','PR','a2edb58ced1e970b5c11a8bc732ca142','2018-08-10'),(3011,'SAIDA','Iron Mountain','COLOCATION','Electrolux','N/A','NAO','17655382','42','CTA','FITAS','002729L4 002785L4 002940L4 003197L4 003206L4 002131L4 002209L4 002256L4 002475L4 002485L4 002676L4 002700L4 002943L4 003139L4 003150L4 003193L4 003215L4 003239L4 000344L4 000500L4 000506L4 000957L4 001772L4 001916L4 001985L4 002217L4 002219L4 002921L4 003066L4 003274L4 ','Patrick Sueki','Iron Mountain','9.489.279-1','PR','114312566720c299a113caf9e6907a90','2018-08-10'),(3012,'SAIDA','IRON MOUNTAIN','COLOCATION','ELECTROLUX','N/A','NAO','17679144','07','CTA','FITAS','003222L4, 001032L4, 002246L4, 002599L4, 002596L4, 002704L4,\r\n002213L4','ALLAN AUGUSTO VARAGO','IRON MOUTAIN - PATRIC ANDRÃ‰ SUEKI ','9489279-1','PR','8ce7a0b5aedf0fa673576b415d3ab8d7','2018-08-15'),(3013,'ENTRADA','IRON MOUNTAIN','COLOCATION','ELECTROLUX','N/A','SIM','17674183','02','CTA','FRAME','003222L4\r\n001032 L4','ALLAN AUGUSTO VARAGO','IRON MOUTAIN - PATRIC ANDRÃ‰ SUEKI ','9489279-1','PR','8617d858a2352431aee39f76ccfffef5','2018-08-15'),(3014,'SAIDA','GLOBALWEB','HOSTING','OI','N/A','NAO','N/A','01','CTA','SERVIDORES','SERVIDOR INTEL PART HP PROLIANT DL380 G9','RAFAEL SOARES BENDEMBIK','GLOBALWEB','0','PR','d334aa09439f7b3fe76369d9444ac1d7','2018-08-15'),(3015,'SAIDA','Globalweb','HOSTING','OI','N/A','SIM','17679998','2','CTA','SERVIDORES','2 SERVIDORES INTEL PART HP PROLIANT DL380 G9, NF: 485 SÃ‰RIE 3. NÃšMEROS DE SÃ‰RIE: HP_DL580_BRC4174S1Y,\r\nHP_DL580_BRC4174S21.','RAFAEL SOARES BENDEMBIK','Globalweb','0','PR','50aab0df813046c869bfe010ded72891','2018-08-15'),(3016,'SAIDA','IRON MOUNTAIN','COLOCATION','ELECTROLUX','N/A','NAO','17689217','60','CTA','FITAS','Lista anexada.','WILLIAN GARCIA VIEIRA','GLOBALWEB','0','PR','a4a1cb42c15788c1ed8a4e971a262268','2018-08-17'),(3017,'ENTRADA','Santa Cruz S.A.','COLOCATION','Santa Cruz S.A.','Pertecente ao cliente','SIM','N/A','15','CTA','FRAME','MODULO OPTICO JUNIPER QSFP \r\nCABO OPTICO DIVISOR 20 M4 CONE\r\nMAQUINA ORACLE CLOUD X6-2\r\nCABO 15 POL\r\nCABO LIGAÃ‡ÃƒO 1X2M C13\r\nEXADATA CLOUD AT COSTUMER\r\nSERVIDOR ORACLE ADVANCED GATEWAY','WILLIAN GARCIA VIEIRA','SANTA CRUZ S.A.','0','PR','69304782a943479989ad7b5998eed4af.pdf','2018-08-24'),(3018,'ENTRADA','IRON MOUNTAIN','COLOCATION','ELECTROLUX','Pertecente ao cliente','SIM','N/A','30','CTA','FITAS','000251L2, 000344L4, 000859L4, 000894L4, 001219L4, 001675L4, 001721L4, 001758L4, 001810L4, 002006L4, 002019L4, 002062L4, 002072L4, 002940L4, 002943L4, 003055L4, 003057L4, 003076L4, 003113L4, 003114L4, 003116L4, 003119L4, 003130L4, 003139L4, 003166L4, 003177L4, 003178L4, 003185L4, 003189L4, 003190L4.','WILLIAN GARCIA VIEIRA','IRON MOUTAIN ','0','PR','0ef9e57e451f761fd8eeb9b15e826fc7','2018-08-24'),(3019,'ENTRADA','IRON MOUNTAIN','COLOCATION','ELECTROLUX','Pertecente ao cliente','SIM','N/A','20','CTA','FITAS','003202L4, 002080L4, 002083L4, 002100L4, 002215L4, 002219L4, 002260L4, 002267L4, 002325L4, 002675L4, 002729L4, 002847L4, 002883L4, 003203L4, 003205L4, 003208L4, 003217L4, 003219L4, 003239L4, 00456L4.','WILLIAN GARCIA VIEIRA','IRON MOUTAIN','0','PR','0d95de86984d712564a96cc14a3adff7','2018-08-24'),(3020,'ENTRADA','IRON MOUNTAIN','COLOCATION','ELECTROLUX','Pertecente ao cliente','SIM','N/A','01','CTA','FITAS','0456L4','WILLIAN GARCIA VIEIRA','IRON MOUTAIN','0','PR','2ccdef3d5b01d1a22f20266330265090','2018-08-24'),(3021,'ENTRADA','Iron Mountain','COLOCATION','ELECTROLUX','N/A','NAO','17725914','2','CTA','FITAS','Recebido as mÃ­dias: 1548L4 e 350L4','Nain Eduardo Assis Lima e Veiga','Demetrio Cavalheiro Teixeira de Faria','1217421-7','PR','0bebee196c43e4aef4e540cbdb719779','2018-08-24'),(3022,'SAIDA','Multiloja','COLOCATION','Multiloja','N/A','SIM','N/A','2','CTA','SWITCH','2Un - Dell SonicWALL NSA 2600.','Luis Mario Garcia','Multiloja - Wagner Marciroli','14.400.147-8','PR','74a779cde3544e0f5e5ec703f852c2e1','2018-08-28'),(3023,'SAIDA','Iron Mountain','COLOCATION','Electrolux','N/A','NAO','17754266','74','CTA','FITAS','623 801 1138 1269 1548 1698 1857 1884 1897 1920 2009 2070 2080 2092 2134 2145 2210 2213 2216 2226 2318 2326 2334 2506 2510 2597 2600 2654 2657 2619 2639 2704 2723 2739 2803 2804 2843 2857 2860 2870 2882 2884 2935 2944 2985 2998 3025 3029 3040 3059 3065 3070 3071 3075 3118 3121 3132 3141 3142 3143','Luis Mario Garcia','Iron Mountain','Patrick Sueki   9.489.279-1','PR','4dc57fc8db324f078a66514fd81528a5','2018-08-31'),(3024,'SAIDA','Iron Mountain','COLOCATION','Electrolux','N/A','SIM','17754266','74','CTA','FRAME','3149 3156 3161 3165 3167 3170 3172 3223 3255 3264 3279 3284 3293 3296','Luis Mario Garcia','Iron Mountain','Patrick Sueki   9.489.279-1','PR','19d008f0c03ad3182a2e69c915d41f35','2018-08-31');
/*!40000 ALTER TABLE `principal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `uf` varchar(45) DEFAULT NULL,
  `site` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `acesso` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (0,'PR','PR','ANDRE','andre','andre','NOC'),(10,'PR','PR','RUDINEI','391789','391789','NOC'),(11,'PR','PR','WELLINGTON','apa','apa','CABO'),(12,'PR','PR','NOC','noc','noc','NOC');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-04 17:55:22
