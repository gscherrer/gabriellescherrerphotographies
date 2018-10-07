SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `gabrielldx6455d` ;
CREATE SCHEMA IF NOT EXISTS `gabrielldx6455d` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
DROP SCHEMA IF EXISTS `gabriellescherrerphotographie` ;
CREATE SCHEMA IF NOT EXISTS `gabriellescherrerphotographie` DEFAULT CHARACTER SET utf8 ;
USE `gabrielldx6455d` ;

-- -----------------------------------------------------
-- Table `gabrielldx6455d`.`mariage`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gabrielldx6455d`.`mariage` ;

CREATE TABLE IF NOT EXISTS `gabrielldx6455d`.`mariage` (
  `idmariage` INT NOT NULL AUTO_INCREMENT,
  `downloadPassword` VARCHAR(45) NOT NULL,
  `titreMariage` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idmariage`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gabrielldx6455d`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gabrielldx6455d`.`user` ;

CREATE TABLE IF NOT EXISTS `gabrielldx6455d`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `mail` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `level` VARCHAR(45) NOT NULL,
  `mariage_idmariage` INT NOT NULL,
  PRIMARY KEY (`iduser`, `mariage_idmariage`),
  INDEX `fk_user_mariage_idx` (`mariage_idmariage` ASC),
  CONSTRAINT `fk_user_mariage`
    FOREIGN KEY (`mariage_idmariage`)
    REFERENCES `gabrielldx6455d`.`mariage` (`idmariage`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `gabriellescherrerphotographie` ;

-- -----------------------------------------------------
-- Table `gabriellescherrerphotographie`.`mariage`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gabriellescherrerphotographie`.`mariage` ;

CREATE TABLE IF NOT EXISTS `gabriellescherrerphotographie`.`mariage` (
  `idmariage` INT(11) NOT NULL AUTO_INCREMENT,
  `downloadPassword` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idmariage`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gabriellescherrerphotographie`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gabriellescherrerphotographie`.`user` ;

CREATE TABLE IF NOT EXISTS `gabriellescherrerphotographie`.`user` (
  `iduser` INT(11) NOT NULL AUTO_INCREMENT,
  `mail` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `level` VARCHAR(45) NOT NULL,
  `mariage_idmariage` INT(11) NOT NULL,
  PRIMARY KEY (`iduser`, `mariage_idmariage`),
  INDEX `fk_user_mariage_idx` (`mariage_idmariage` ASC),
  CONSTRAINT `fk_user_mariage`
    FOREIGN KEY (`mariage_idmariage`)
    REFERENCES `gabriellescherrerphotographie`.`mariage` (`idmariage`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
