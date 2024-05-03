create database mydb;
use mydb;

CREATE TABLE `mydb`.`cadastro` (
`cliente` INT NOT NULL auto_increment,
`nome` VARCHAR(45) NULL,
`sobrenome` VARCHAR(45) NULL,
`sexo` VARCHAR(20) NULL,
PRIMARY KEY (`cliente`),
UNIQUE INDEX `nome_UNIQUE` (`nome` ASC) VISIBLE);
