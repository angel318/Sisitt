
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- usuario
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario`
(
    `id` INTEGER(20) NOT NULL AUTO_INCREMENT,
    `matricula` VARCHAR(150) NOT NULL,
    `correo` VARCHAR(200) NOT NULL,
    `contrasena` VARCHAR(20) NOT NULL,
    `nombres` VARCHAR(150) NOT NULL,
    `apellidop` VARCHAR(150) NOT NULL,
    `apellidom` VARCHAR(150) NOT NULL,
    `curp` VARCHAR(150) NOT NULL,
    `rfc` VARCHAR(150) NOT NULL,
    `telefono` VARCHAR(150) NOT NULL,
    `plan_id` INTEGER(20),
    `contacto_id` INTEGER(20),
    `estatus` TINYINT(10) NOT NULL,
    `tipo` TINYINT(10) NOT NULL,
    `genero` TINYINT(25) NOT NULL,
    `nacimiento` DATE NOT NULL,
    `foto` VARCHAR(200) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `usuario_FI_1` (`plan_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- planestudio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `planestudio`;

CREATE TABLE `planestudio`
(
    `id` INTEGER(20) NOT NULL AUTO_INCREMENT,
    `nombreplaestudio` VARCHAR(200) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- permiso
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `permiso`;

CREATE TABLE `permiso`
(
    `id` INTEGER(20) NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER(20) NOT NULL,
    `modulo` VARCHAR(200) NOT NULL,
    `acceso` TINYINT(5) NOT NULL,
    `tipo` TINYINT(5) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `permiso_FI_1` (`idusuario`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- encuempr_datgen
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `encuempr_datgen`;

CREATE TABLE `encuempr_datgen`
(
    `id` INTEGER(20) NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER(20) NOT NULL,
    `nombre` VARCHAR(50) NOT NULL,
    `direccion` VARCHAR(100) NOT NULL,
    `ciudad` VARCHAR(250) NOT NULL,
    `correo` VARCHAR(200) NOT NULL,
    `telefono` VARCHAR(150) NOT NULL,
    `tipo` TINYINT(20),
    `tamano` TINYINT(20),
    `actividad1` TINYINT(1),
    `actividad2` TINYINT(1),
    `actividad3` TINYINT(1),
    `actividad4` TINYINT(1),
    `actividad5` TINYINT(1),
    `actividad6` TINYINT(1),
    `actividad7` TINYINT(1),
    `actividad8` TINYINT(1),
    `actividad9` TINYINT(1),
    `actividad10` TINYINT(1),
    `actividad11` TINYINT(1),
    `actividad12` TINYINT(1),
    `actividad13` TINYINT(1),
    `actividad14` TINYINT(1),
    `actividad15` TINYINT(1),
    `actividad16` TINYINT(1),
    `actividad17` TINYINT(1),
    `actividad18` TINYINT(1),
    `actividad19` TINYINT(1),
    `actividad20` VARCHAR(100),
    PRIMARY KEY (`id`),
    INDEX `encuempr_datgen_FI_1` (`idusuario`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- encuempr_ubilab
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `encuempr_ubilab`;

CREATE TABLE `encuempr_ubilab`
(
    `id` INTEGER(20) NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER(20) NOT NULL,
    `numpro` TINYINT(20),
    `numegre` TINYINT(20),
    `congruencia` TINYINT(20),
    `carrera1` VARCHAR(50) NOT NULL,
    `carrera2` VARCHAR(50) NOT NULL,
    `carrera3` VARCHAR(50) NOT NULL,
    `carrera4` VARCHAR(50) NOT NULL,
    `carrera5` VARCHAR(50) NOT NULL,
    `carrera6` VARCHAR(50) NOT NULL,
    `requisito1` TINYINT(1),
    `requisito2` TINYINT(1),
    `requisito3` TINYINT(1),
    `requisito4` TINYINT(1),
    `requisito5` TINYINT(1),
    `requisito6` TINYINT(1),
    `requisito7` TINYINT(1),
    `requisito8` TINYINT(1),
    `requisito9` VARCHAR(100),
    PRIMARY KEY (`id`),
    INDEX `encuempr_ubilab_FI_1` (`idusuario`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- encuempr_nivjer
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `encuempr_nivjer`;

CREATE TABLE `encuempr_nivjer`
(
    `id` INTEGER(20) NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER(20) NOT NULL,
    `agromandosu` INTEGER(20) NOT NULL,
    `agromandoin` INTEGER(20) NOT NULL,
    `agrosupervisor` INTEGER(20) NOT NULL,
    `agrotecnico` INTEGER(20) NOT NULL,
    `agrootro` INTEGER(20) NOT NULL,
    `igemandosu` INTEGER(20) NOT NULL,
    `igemandoin` INTEGER(20) NOT NULL,
    `igesupervisor` INTEGER(20) NOT NULL,
    `igetecnico` INTEGER(20) NOT NULL,
    `igeotro` INTEGER(20) NOT NULL,
    `biomandosu` INTEGER(20) NOT NULL,
    `biomandoin` INTEGER(20) NOT NULL,
    `biosupervisor` INTEGER(20) NOT NULL,
    `biotecnico` INTEGER(20) NOT NULL,
    `biootro` INTEGER(20) NOT NULL,
    `adminmandosu` INTEGER(20) NOT NULL,
    `adminmandoin` INTEGER(20) NOT NULL,
    `adminsupervisor` INTEGER(20) NOT NULL,
    `admintecnico` INTEGER(20) NOT NULL,
    `adminotro` INTEGER(20) NOT NULL,
    `infomandosu` INTEGER(20) NOT NULL,
    `infomandoin` INTEGER(20) NOT NULL,
    `infosupervisor` INTEGER(20) NOT NULL,
    `infotecnico` INTEGER(20) NOT NULL,
    `infootro` INTEGER(20) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `encuempr_nivjer_FI_1` (`idusuario`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- encuempr_comlab
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `encuempr_comlab`;

CREATE TABLE `encuempr_comlab`
(
    `id` INTEGER(20) NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER(20) NOT NULL,
    `conflictos` INTEGER(5) NOT NULL,
    `ortografia` INTEGER(5) NOT NULL,
    `procesos` INTEGER(5) NOT NULL,
    `equipo` INTEGER(5) NOT NULL,
    `admintiempo` INTEGER(5) NOT NULL,
    `seguridadpersonal` INTEGER(5) NOT NULL,
    `facilidadpalabra` INTEGER(5) NOT NULL,
    `gestionproyectos` INTEGER(5) NOT NULL,
    `puntualidad` INTEGER(5) NOT NULL,
    `normas` INTEGER(5) NOT NULL,
    `integracion` INTEGER(5) NOT NULL,
    `innovacion` INTEGER(5) NOT NULL,
    `negociacion` INTEGER(5) NOT NULL,
    `abstraccion` INTEGER(5) NOT NULL,
    `decisiones` INTEGER(5) NOT NULL,
    `adaptacion` INTEGER(5) NOT NULL,
    `otras` INTEGER(5) NOT NULL,
    `desempeniolaboral` INTEGER(5) NOT NULL,
    `mejoras` VARCHAR(500) NOT NULL,
    `sugerencias` VARCHAR(500) NOT NULL,
    `nombres` VARCHAR(150) NOT NULL,
    `puesto` VARCHAR(150) NOT NULL,
    `correo` VARCHAR(200) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `encuempr_comlab_FI_1` (`idusuario`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- volantes
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `volantes`;

CREATE TABLE `volantes`
(
    `id` INTEGER(20) NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER(20) NOT NULL,
    `carrera` TINYINT(20),
    `fecha` DATETIME NOT NULL,
    `descripcion` TEXT NOT NULL,
    `cargo` VARCHAR(100) NOT NULL,
    `direccion` VARCHAR(100) NOT NULL,
    `foto` VARCHAR(300) NOT NULL,
    `telefono1` VARCHAR(150) NOT NULL,
    `telefono2` VARCHAR(150) NOT NULL,
    `estatus` TINYINT(10) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `volantes_FI_1` (`idusuario`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- curriculums
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `curriculums`;

CREATE TABLE `curriculums`
(
    `id` INTEGER(20) NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER(20) NOT NULL,
    `documento` VARCHAR(100),
    PRIMARY KEY (`id`),
    INDEX `curriculums_FI_1` (`idusuario`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- candidatos
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `candidatos`;

CREATE TABLE `candidatos`
(
    `id` INTEGER(20) NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER(20) NOT NULL,
    `idvolante` INTEGER(20) NOT NULL,
    `idempresa` INTEGER(20) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `candidatos_FI_1` (`idusuario`),
    INDEX `candidatos_FI_2` (`idvolante`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
