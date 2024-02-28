-- MySQL Script generado por MySQL Workbench
-- Fecha: Tue Nov 28 09:44:55 2023
-- Modelo: Nuevo Modelo    Versión: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Centro_Medico
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Centro_Medico` DEFAULT CHARACTER SET utf8 ;
USE `Centro_Medico` ;

-- -----------------------------------------------------
-- Table `Centro_Medico`.`paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `paciente` (
  `No_cedula` INT NOT NULL,
  `nombres` VARCHAR(30) NOT NULL,
  `apellido` VARCHAR(30) NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `sexo` CHAR(1) NOT NULL,
  `telefono` VARCHAR(15) NOT NULL,
  `correo` VARCHAR(50) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`No_cedula`)
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Centro_Medico`.`medico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `medico` (
  `documento` INT NOT NULL,
  `nombres` VARCHAR(30) NOT NULL,
  `apellidos` VARCHAR(40) NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `especialidad` VARCHAR(20) NOT NULL,
  `telefono` VARCHAR(20) NOT NULL,
  `direccion` VARCHAR(60) NOT NULL,
  `correo` VARCHAR(50) NOT NULL,
  `horario` DATETIME NOT NULL,
  PRIMARY KEY (`documento`)
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Centro_Medico`.`citas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `citas` (
  `consecutivo_citas` INT NOT NULL,
  `fecha` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `cedula_paciente` INT NOT NULL,
  `id_medico` INT NOT NULL,
  `id_consultorio` INT NOT NULL,
  `especialidad` VARCHAR(20) NOT NULL,
  `direccion` VARCHAR(60) NOT NULL,
  `paciente_No_cedula` INT NOT NULL,
  `medico_documento` INT NOT NULL,
  PRIMARY KEY (`consecutivo_citas`, `cedula_paciente`, `id_medico`),
  INDEX `fk_citas_paciente_idx` (`paciente_No_cedula` ASC),
  INDEX `fk_citas_medico1_idx` (`medico_documento` ASC),
  CONSTRAINT `fk_citas_paciente`
    FOREIGN KEY (`paciente_No_cedula`)
    REFERENCES `paciente` (`No_cedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_citas_medico1`
    FOREIGN KEY (`medico_documento`)
    REFERENCES `medico` (`documento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Centro_Medico`.`cancelar_cita`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cancelar_cita` (
  `No_cita` INT NOT NULL,
  `fecha` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `id_paciente` INT NOT NULL,
  `id_medico` INT NOT NULL,
  `campo_extra` TINYINT NULL,
  `id_consultorio` INT NOT NULL,
  `cancelada` TINYINT NOT NULL,
  `citas_consecutivo_citas` INT NOT NULL,
  `citas_cedula_paciente` INT NOT NULL,
  `citas_id_medico` INT NOT NULL,
  PRIMARY KEY (`No_cita`, `id_paciente`),
  INDEX `fk_cancelar_cita_citas1_idx` (`citas_consecutivo_citas` ASC, `citas_cedula_paciente` ASC, `citas_id_medico` ASC),
  CONSTRAINT `fk_cancelar_cita_citas1`
    FOREIGN KEY (`citas_consecutivo_citas`, `citas_cedula_paciente`, `citas_id_medico`)
    REFERENCES `citas` (`consecutivo_citas`, `cedula_paciente`, `id_medico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Centro_Medico`.`consultorio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `consultorio` (
  `No_consultorio` INT NOT NULL,
  `direccion` VARCHAR(60) NOT NULL,
  `telefono` VARCHAR(20) NOT NULL,
  `especialidad` VARCHAR(20) NOT NULL,
  `horario` DATETIME NULL,
  `medico_documento` INT NOT NULL,
  `citas_consecutivo_citas` INT NOT NULL,
  `citas_cedula_paciente` INT NOT NULL,
  `citas_id_medico` INT NOT NULL,
  PRIMARY KEY (`No_consultorio`),
  INDEX `fk_consultorio_medico1_idx` (`medico_documento` ASC),
  INDEX `fk_consultorio_citas1_idx` (`citas_consecutivo_citas` ASC, `citas_cedula_paciente` ASC, `citas_id_medico` ASC),
  CONSTRAINT `fk_consultorio_medico1`
    FOREIGN KEY (`medico_documento`)
    REFERENCES `medico` (`documento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_consultorio_citas1`
    FOREIGN KEY (`citas_consecutivo_citas`, `citas_cedula_paciente`, `citas_id_medico`)
    REFERENCES `citas` (`consecutivo_citas`, `cedula_paciente`, `id_medico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Centro_Medico`.`tratamientos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tratamientos` (
  `id_tratamiento` INT NOT NULL,
  `descripcion` VARCHAR(80) NOT NULL,
  `indicaciones` VARCHAR(120) NOT NULL,
  `contraindicaciones` VARCHAR(120) NOT NULL,
  `medicamentos` VARCHAR(150) NOT NULL,
  `dosis` VARCHAR(120) NOT NULL,
  `duracion` DATETIME NOT NULL,
  `paciente_No_cedula` INT NOT NULL,
  `medico_documento` INT NOT NULL,
  PRIMARY KEY (`id_tratamiento`),
  INDEX `fk_tratamientos_paciente1_idx` (`paciente_No_cedula` ASC),
  INDEX `fk_tratamientos_medico1_idx` (`medico_documento` ASC),
  CONSTRAINT `fk_tratamientos_paciente1`
    FOREIGN KEY (`paciente_No_cedula`)
    REFERENCES `paciente` (`No_cedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tratamientos_medico1`
    FOREIGN KEY (`medico_documento`)
    REFERENCES `medico` (`documento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Centro_Medico`.`medicamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `medicamento` (
  `codigo_nacional` INT NOT NULL,
  `nombre` VARCHAR(60) NOT NULL,
  `composicion` VARCHAR(250) NOT NULL,
  `presentacion` VARCHAR(25) NOT NULL,
  `fecha_vencimiento` DATE NOT NULL,
  `conservacion` VARCHAR(50) NOT NULL,
  `medico_documento` INT NOT NULL,
  `tratamientos_id_tratamiento` INT NOT NULL,
  PRIMARY KEY (`codigo_nacional`),
  INDEX `fk_medicamento_medico1_idx` (`medico_documento` ASC),
  INDEX `fk_medicamento_tratamientos1_idx` (`tratamientos_id_tratamiento` ASC),
  CONSTRAINT `fk_medicamento_medico1`
    FOREIGN KEY (`medico_documento`)
    REFERENCES `medico` (`documento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_medicamento_tratamientos1`
    FOREIGN KEY (`tratamientos_id_tratamiento`)
    REFERENCES `tratamientos` (`id_tratamiento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
