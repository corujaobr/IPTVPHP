CREATE DATABASE usuarios_info;
USE usuarios_info;

CREATE TABLE `usuarios_info` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NOT NULL,
  `email` VARCHAR(32) NOT NULL,
  `status` bit NOT NULL,
  `telefone` VARCHAR(32) NOT NULL,
  `datavalidade` date NOT NULL,
  `datainicial` date NOT NULL,
  PRIMARY KEY (`usuario_id`));