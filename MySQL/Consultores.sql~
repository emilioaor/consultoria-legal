/*
SQLyog Ultimate v9.63 
MySQL - 5.1.41 : Database - consultores
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`consultores` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `consultores`;

/*Table structure for table `contactanos` */

DROP TABLE IF EXISTS `contactanos`;

CREATE TABLE `contactanos` (
  `codigo` INT(11) NOT NULL AUTO_INCREMENT,
  `correo` VARCHAR(100) NOT NULL,
  `fecha` DATETIME NOT NULL,
  `mensaje` TEXT NOT NULL,
  PRIMARY KEY (`codigo`,`correo`,`fecha`)
) ENGINE=INNODB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `contactanos` */

INSERT  INTO `contactanos`(`codigo`,`correo`,`fecha`,`mensaje`) VALUES (1,'correo@mail.com','2015-02-04 15:49:28','Hola Mundo!'),(10,'correo@mail.com','2015-02-05 13:31:56','Prueba Exitosa!');

/*Table structure for table `contactanos_solicitud` */

DROP TABLE IF EXISTS `contactanos_solicitud`;

CREATE TABLE `contactanos_solicitud` (
  `codigo` INT(11) NOT NULL AUTO_INCREMENT,
  `num_solicitud` INT(11) NOT NULL,
  `mensaje` TEXT NOT NULL,
  `usuario` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`codigo`,`num_solicitud`,`usuario`),
  KEY `num_solicitud` (`num_solicitud`),
  KEY `usuario` (`usuario`),
  CONSTRAINT `contactanos_solicitud_ibfk_1` FOREIGN KEY (`num_solicitud`) REFERENCES `solicitud` (`num_solicitud`),
  CONSTRAINT `contactanos_solicitud_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`usuario`)
) ENGINE=INNODB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `contactanos_solicitud` */

INSERT  INTO `contactanos_solicitud`(`codigo`,`num_solicitud`,`mensaje`,`usuario`) VALUES (1,1,'ok le ayudare','administrador'),(2,1,'gracias','usuario'),(3,1,'Digame su problema','administrador');

/*Table structure for table `cotizacion` */

DROP TABLE IF EXISTS `cotizacion`;

CREATE TABLE `cotizacion` (
  `num_cotizacion` INT(11) NOT NULL AUTO_INCREMENT,
  `EmpresaID` INT(11) NOT NULL,
  `fecha` DATETIME NOT NULL,
  `observacion` TEXT NOT NULL,
  `estatus` VARCHAR(20) NOT NULL,
  `total` DECIMAL(8,2) DEFAULT NULL,
  PRIMARY KEY (`num_cotizacion`,`EmpresaID`),
  KEY `EmpresaID` (`EmpresaID`),
  CONSTRAINT `cotizacion_ibfk_1` FOREIGN KEY (`EmpresaID`) REFERENCES `empresa` (`EmpresaID`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `cotizacion` */

INSERT  INTO `cotizacion`(`num_cotizacion`,`EmpresaID`,`fecha`,`observacion`,`estatus`,`total`) VALUES (1,2,'2015-01-08 16:24:49','','Procesada','8.50'),(2,2,'2015-02-08 04:54:54','','En Proceso','63.50');

/*Table structure for table `detalle_cotizacion` */

DROP TABLE IF EXISTS `detalle_cotizacion`;

CREATE TABLE `detalle_cotizacion` (
  `DetalleID` INT(11) NOT NULL AUTO_INCREMENT,
  `num_cotizacion` INT(11) NOT NULL,
  `cod_servicio` INT(11) NOT NULL,
  PRIMARY KEY (`DetalleID`,`num_cotizacion`,`cod_servicio`),
  KEY `cod_servicio` (`cod_servicio`),
  KEY `num_cotizacion` (`num_cotizacion`),
  CONSTRAINT `detalle_cotizacion_ibfk_1` FOREIGN KEY (`cod_servicio`) REFERENCES `servicio` (`cod_servicio`),
  CONSTRAINT `detalle_cotizacion_ibfk_2` FOREIGN KEY (`num_cotizacion`) REFERENCES `cotizacion` (`num_cotizacion`)
) ENGINE=INNODB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `detalle_cotizacion` */

INSERT  INTO `detalle_cotizacion`(`DetalleID`,`num_cotizacion`,`cod_servicio`) VALUES (4,2,1),(5,2,2),(1,1,3),(6,2,3),(7,2,4),(2,1,5),(8,2,5),(3,2,6),(9,2,7),(10,2,8),(11,2,9),(12,2,10);

/*Table structure for table `detalles_solicitud` */

DROP TABLE IF EXISTS `detalles_solicitud`;

CREATE TABLE `detalles_solicitud` (
  `DetalleID` INT(11) NOT NULL AUTO_INCREMENT,
  `num_solicitud` INT(11) NOT NULL,
  `cod_servicio` INT(11) NOT NULL,
  PRIMARY KEY (`DetalleID`,`num_solicitud`,`cod_servicio`),
  KEY `num_solicitud` (`num_solicitud`),
  KEY `cod_servicio` (`cod_servicio`),
  CONSTRAINT `detalles_solicitud_ibfk_1` FOREIGN KEY (`num_solicitud`) REFERENCES `solicitud` (`num_solicitud`),
  CONSTRAINT `detalles_solicitud_ibfk_2` FOREIGN KEY (`cod_servicio`) REFERENCES `servicio` (`cod_servicio`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `detalles_solicitud` */

INSERT  INTO `detalles_solicitud`(`DetalleID`,`num_solicitud`,`cod_servicio`) VALUES (1,1,3),(2,1,5);

/*Table structure for table `documento` */

DROP TABLE IF EXISTS `documento`;

CREATE TABLE `documento` (
  `codigo_documento` INT(11) NOT NULL AUTO_INCREMENT,
  `documento` VARCHAR(250) NOT NULL,
  `usuario` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`codigo_documento`),
  KEY `usuario` (`usuario`),
  CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`usuario`)
) ENGINE=INNODB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `documento` */

/*Table structure for table `empresa` */

DROP TABLE IF EXISTS `empresa`;

CREATE TABLE `empresa` (
  `EmpresaID` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(40) NOT NULL,
  `Direccion` VARCHAR(50) NOT NULL,
  `Telefono` CHAR(11) NOT NULL,
  `Ciudad` VARCHAR(25) NOT NULL,
  `fax` CHAR(11) DEFAULT NULL,
  `cod_ramo` INT(11) NOT NULL,
  PRIMARY KEY (`EmpresaID`),
  KEY `cod_ramo` (`cod_ramo`),
  CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`cod_ramo`) REFERENCES `ramo` (`cod_ramo`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `empresa` */

INSERT  INTO `empresa`(`EmpresaID`,`Nombre`,`Direccion`,`Telefono`,`Ciudad`,`fax`,`cod_ramo`) VALUES (2,'Todo Sport','Naguanagua','02418661773','Valencia','04127833949',2);

/*Table structure for table `nivel_usuario` */

DROP TABLE IF EXISTS `nivel_usuario`;

CREATE TABLE `nivel_usuario` (
  `cod_nivel` INT(11) NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`cod_nivel`)
) ENGINE=INNODB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `nivel_usuario` */

INSERT  INTO `nivel_usuario`(`cod_nivel`,`descripcion`) VALUES (1,'administrador'),(2,'consultor'),(3,'cliente');

/*Table structure for table `ramo` */

DROP TABLE IF EXISTS `ramo`;

CREATE TABLE `ramo` (
  `cod_ramo` INT(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`cod_ramo`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `ramo` */

INSERT  INTO `ramo`(`cod_ramo`,`Descripcion`) VALUES (1,'administracion'),(2,'deporte');

/*Table structure for table `representante_legal` */

DROP TABLE IF EXISTS `representante_legal`;

CREATE TABLE `representante_legal` (
  `EmpresaID` INT(11) NOT NULL,
  `cedula` VARCHAR(8) NOT NULL,
  `apellido` VARCHAR(25) NOT NULL,
  `nombre` VARCHAR(25) NOT NULL,
  `direccion` VARCHAR(50) NOT NULL,
  `cargo` VARCHAR(30) NOT NULL,
  `telefono` CHAR(11) NOT NULL,
  PRIMARY KEY (`EmpresaID`),
  CONSTRAINT `representante_legal_ibfk_1` FOREIGN KEY (`EmpresaID`) REFERENCES `empresa` (`EmpresaID`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

/*Data for the table `representante_legal` */

INSERT  INTO `representante_legal`(`EmpresaID`,`cedula`,`apellido`,`nombre`,`direccion`,`cargo`,`telefono`) VALUES (2,'21029522','Ochoa','Emilio','V.R. Barbula','Director General','04141459498');

/*Table structure for table `servicio` */

DROP TABLE IF EXISTS `servicio`;

CREATE TABLE `servicio` (
  `cod_servicio` INT(11) NOT NULL AUTO_INCREMENT,
  `descripcion` TEXT NOT NULL,
  `precio` DECIMAL(6,2) NOT NULL,
  PRIMARY KEY (`cod_servicio`)
) ENGINE=INNODB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `servicio` */

INSERT  INTO `servicio`(`cod_servicio`,`descripcion`,`precio`) VALUES (1,'Tramitacion de Numero de identificacion laboral (NIL) y Solvencia Laboral','1500.35'),(2,'Realizacion de Manuales Organizativos','1085.00'),(3,'Asesoria para el procedimiento adecuado y efectivo en caso de indole laboral','1800.50'),(4,'Tramitacion de Inscripciones y solvencias en: IVSS, INCES, BANAVIH','1250.50'),(5,'Asesoria en materia del Programa de Alimentacion para trabajadores','1300.25'),(6,'Induccion en nominas, retenciones laborales y compensaciones','2080.99'),(7,'Calculo de Prestaciones Sociales y Finiquito de Prestaciones','2500.00'),(8,'Programas de Adiestramiento y capacitacion, Seguridad e Higiene Laboral (Conformacion de Delegados y Comite de Seguridad Laboral)','3200.00'),(9,'Asesoria para el procedimiento adecuado y efectivo en caso de indole Administrativo','1700.50'),(10,'Inscripcion ante el Registro Nacional de Contratista (SNC)','1200.75');

/*Table structure for table `solicitud` */

DROP TABLE IF EXISTS `solicitud`;

CREATE TABLE `solicitud` (
  `num_solicitud` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha` DATETIME NOT NULL,
  `EmpresaID` INT(11) NOT NULL,
  `observacion` TEXT NOT NULL,
  `estatus` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`num_solicitud`,`fecha`,`EmpresaID`),
  KEY `EmpresaID` (`EmpresaID`),
  CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`EmpresaID`) REFERENCES `empresa` (`EmpresaID`)
) ENGINE=INNODB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `solicitud` */

INSERT  INTO `solicitud`(`num_solicitud`,`fecha`,`EmpresaID`,`observacion`,`estatus`) VALUES (1,'2015-01-08 16:25:09',2,'','Leida');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `usuario` VARCHAR(20) NOT NULL,
  `password` VARCHAR(20) NOT NULL,
  `cod_nivel` INT(11) NOT NULL,
  `EmpresaID` INT(11) DEFAULT NULL,
  PRIMARY KEY (`usuario`),
  KEY `EmpresaID` (`EmpresaID`),
  KEY `cod_nivel` (`cod_nivel`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`EmpresaID`) REFERENCES `empresa` (`EmpresaID`),
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`cod_nivel`) REFERENCES `nivel_usuario` (`cod_nivel`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

/*Data for the table `usuario` */

INSERT  INTO `usuario`(`usuario`,`password`,`cod_nivel`,`EmpresaID`) VALUES ('administrador','123456',1,NULL),('consultor','123456',2,NULL),('usuario','123456',3,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
