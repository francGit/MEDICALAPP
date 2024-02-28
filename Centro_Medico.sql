-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2024 a las 03:54:26
-- Versión del servidor: 8.0.33
-- Versión de PHP: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Centro_Medico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancelar_cita`
--

CREATE TABLE `cancelar_cita` (
  `No_cita` int NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_paciente` int NOT NULL,
  `id_medico` int NOT NULL,
  `campo_extra` tinyint DEFAULT NULL,
  `id_consultorio` int NOT NULL,
  `cancelada` tinyint NOT NULL,
  `citas_consecutivo_citas` int NOT NULL,
  `citas_cedula_paciente` int NOT NULL,
  `citas_id_medico` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `consecutivo_citas` int NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `cedula_paciente` int NOT NULL,
  `id_medico` int NOT NULL,
  `id_consultorio` int NOT NULL,
  `especialidad` varchar(20) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `paciente_No_cedula` int NOT NULL,
  `medico_documento` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorio`
--

CREATE TABLE `consultorio` (
  `No_consultorio` int NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `especialidad` varchar(20) NOT NULL,
  `horario` datetime DEFAULT NULL,
  `medico_documento` int NOT NULL,
  `citas_consecutivo_citas` int NOT NULL,
  `citas_cedula_paciente` int NOT NULL,
  `citas_id_medico` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE `medicamento` (
  `codigo_nacional` int NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `composicion` varchar(250) NOT NULL,
  `presentacion` varchar(25) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `conservacion` varchar(50) NOT NULL,
  `medico_documento` int NOT NULL,
  `tratamientos_id_tratamiento` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `documento` int NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `especialidad` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `horario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `No_cedula` int NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `feccha_nacimiento` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `id_tratamiento` int NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `indicaciones` varchar(120) NOT NULL,
  `contraindicaciones` varchar(120) NOT NULL,
  `medicamentos` varchar(150) NOT NULL,
  `dosis` varchar(120) NOT NULL,
  `duracion` datetime NOT NULL,
  `paciente_No_cedula` int NOT NULL,
  `medico_documento` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cancelar_cita`
--
ALTER TABLE `cancelar_cita`
  ADD PRIMARY KEY (`No_cita`,`id_paciente`),
  ADD KEY `fk_cancelar_cita_citas1_idx` (`citas_consecutivo_citas`,`citas_cedula_paciente`,`citas_id_medico`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`consecutivo_citas`,`cedula_paciente`,`id_medico`),
  ADD KEY `fk_citas_paciente_idx` (`paciente_No_cedula`),
  ADD KEY `fk_citas_medico1_idx` (`medico_documento`);

--
-- Indices de la tabla `consultorio`
--
ALTER TABLE `consultorio`
  ADD PRIMARY KEY (`No_consultorio`),
  ADD KEY `fk_consultorio_medico1_idx` (`medico_documento`),
  ADD KEY `fk_consultorio_citas1_idx` (`citas_consecutivo_citas`,`citas_cedula_paciente`,`citas_id_medico`);

--
-- Indices de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`codigo_nacional`),
  ADD KEY `fk_medicamento_medico1_idx` (`medico_documento`),
  ADD KEY `fk_medicamento_tratamientos1_idx` (`tratamientos_id_tratamiento`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`No_cedula`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD PRIMARY KEY (`id_tratamiento`),
  ADD KEY `fk_tratamientos_paciente1_idx` (`paciente_No_cedula`),
  ADD KEY `fk_tratamientos_medico1_idx` (`medico_documento`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cancelar_cita`
--
ALTER TABLE `cancelar_cita`
  ADD CONSTRAINT `fk_cancelar_cita_citas1` FOREIGN KEY (`citas_consecutivo_citas`,`citas_cedula_paciente`,`citas_id_medico`) REFERENCES `citas` (`consecutivo_citas`, `cedula_paciente`, `id_medico`);

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `fk_citas_medico1` FOREIGN KEY (`medico_documento`) REFERENCES `medico` (`documento`),
  ADD CONSTRAINT `fk_citas_paciente` FOREIGN KEY (`paciente_No_cedula`) REFERENCES `paciente` (`No_cedula`);

--
-- Filtros para la tabla `consultorio`
--
ALTER TABLE `consultorio`
  ADD CONSTRAINT `fk_consultorio_citas1` FOREIGN KEY (`citas_consecutivo_citas`,`citas_cedula_paciente`,`citas_id_medico`) REFERENCES `citas` (`consecutivo_citas`, `cedula_paciente`, `id_medico`),
  ADD CONSTRAINT `fk_consultorio_medico1` FOREIGN KEY (`medico_documento`) REFERENCES `medico` (`documento`);

--
-- Filtros para la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD CONSTRAINT `fk_medicamento_medico1` FOREIGN KEY (`medico_documento`) REFERENCES `medico` (`documento`),
  ADD CONSTRAINT `fk_medicamento_tratamientos1` FOREIGN KEY (`tratamientos_id_tratamiento`) REFERENCES `tratamientos` (`id_tratamiento`);

--
-- Filtros para la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD CONSTRAINT `fk_tratamientos_medico1` FOREIGN KEY (`medico_documento`) REFERENCES `medico` (`documento`),
  ADD CONSTRAINT `fk_tratamientos_paciente1` FOREIGN KEY (`paciente_No_cedula`) REFERENCES `paciente` (`No_cedula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
