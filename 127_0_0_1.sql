-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2020 a las 20:55:14
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contrato_mascotas`
--
CREATE DATABASE IF NOT EXISTS `contrato_mascotas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `contrato_mascotas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_contrato`
--

CREATE TABLE `datos_contrato` (
  `id_contrato` int(45) NOT NULL,
  `fecha_c_contrato` date NOT NULL,
  `feha_i_contrato` date DEFAULT NULL,
  `hora_i_contrato` varchar(45) NOT NULL,
  `id_titular` int(11) NOT NULL,
  `id_trabajo` int(11) DEFAULT NULL,
  `id_periodicidad` int(11) DEFAULT NULL,
  `id_vocero` int(11) DEFAULT NULL,
  `id_mascota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_contrato`
--

INSERT INTO `datos_contrato` (`id_contrato`, `fecha_c_contrato`, `feha_i_contrato`, `hora_i_contrato`, `id_titular`, `id_trabajo`, `id_periodicidad`, `id_vocero`, `id_mascota`) VALUES
(1, '2020-08-12', NULL, '', 2, NULL, NULL, NULL, NULL),
(2, '2020-08-12', '2020-08-12', '08:53:18 PM', 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_mascota`
--

CREATE TABLE `datos_mascota` (
  `id_registro` int(11) NOT NULL,
  `nombre_mascota` varchar(45) NOT NULL,
  `especie_mascota` varchar(45) NOT NULL,
  `raza_mascota` varchar(45) NOT NULL,
  `edad_mascota` varchar(45) NOT NULL,
  `peso_mascota` varchar(45) NOT NULL,
  `foto_mascota` varchar(45) DEFAULT NULL,
  `carne_mascota` varchar(200) DEFAULT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_mascota`
--

INSERT INTO `datos_mascota` (`id_registro`, `nombre_mascota`, `especie_mascota`, `raza_mascota`, `edad_mascota`, `peso_mascota`, `foto_mascota`, `carne_mascota`, `fecha_registro`) VALUES
(2, 'Copito', 'Caninos', 'Labrador', '3 a 6 meses', '40 a 50 kg', 'WhatsApp Image 2020-08-11 at 10.33.04.jpeg', 'WhatsApp Image 2020-08-11 at 10.33.04.jpeg', '2020-08-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_titular`
--

CREATE TABLE `datos_titular` (
  `id_registro` int(11) NOT NULL,
  `nombre_titular` varchar(45) NOT NULL,
  `tipo_documento` varchar(45) NOT NULL,
  `numero_documento` varchar(45) NOT NULL,
  `fecha_nacimiento` varchar(45) NOT NULL,
  `direccion_residencia` varchar(45) NOT NULL,
  `barrio_residencia` varchar(45) NOT NULL,
  `ciudad_residencia` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_titular`
--

INSERT INTO `datos_titular` (`id_registro`, `nombre_titular`, `tipo_documento`, `numero_documento`, `fecha_nacimiento`, `direccion_residencia`, `barrio_residencia`, `ciudad_residencia`, `email`, `celular`, `fecha_registro`) VALUES
(1, 'Elkin Andrés Alarcón Díaz', 'CC', '1073522345', '2020-12-31', 'Cl 7 A # 19 Norte', 'Tunja', 'Escandinavo', 'elkandi20@gmail.com', '3152312513', '2020-08-12'),
(2, 'Elkin Andrés Alarcón Díaz', 'CC', '1073522345', '2020-12-31', 'Cl 7 A # 19 Norte', 'Tunja', 'Escandinavo', 'elkandi20@gmail.com', '3152312513', '2020-08-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_trabajo`
--

CREATE TABLE `datos_trabajo` (
  `id_registro` int(11) NOT NULL,
  `direccion_trabajo` varchar(45) NOT NULL,
  `ciudad_trabajo` varchar(45) NOT NULL,
  `barrio_trabajo` varchar(45) NOT NULL,
  `telefono_trabajo` varchar(45) NOT NULL,
  `nombre_empresa` varchar(45) NOT NULL,
  `email_trabajo` varchar(45) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_trabajo`
--

INSERT INTO `datos_trabajo` (`id_registro`, `direccion_trabajo`, `ciudad_trabajo`, `barrio_trabajo`, `telefono_trabajo`, `nombre_empresa`, `email_trabajo`, `fecha_registro`) VALUES
(2, '   #  ', '', '', '', '', '', '2020-08-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_vocero`
--

CREATE TABLE `datos_vocero` (
  `id_registro` int(11) NOT NULL,
  `nombre_vocero` varchar(45) NOT NULL,
  `tipo_documento_v` varchar(45) NOT NULL,
  `numero_documento_v` varchar(45) NOT NULL,
  `direccion_residencia_v` varchar(45) NOT NULL,
  `barrio_residencia_v` varchar(45) NOT NULL,
  `ciudad_residencia_v` varchar(45) NOT NULL,
  `email_vocero` varchar(45) NOT NULL,
  `celular_vocero` varchar(45) NOT NULL,
  `fecha_registro_v` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_vocero`
--

INSERT INTO `datos_vocero` (`id_registro`, `nombre_vocero`, `tipo_documento_v`, `numero_documento_v`, `direccion_residencia_v`, `barrio_residencia_v`, `ciudad_residencia_v`, `email_vocero`, `celular_vocero`, `fecha_registro_v`) VALUES
(2, 'Elkin Andrés Alarcón Díaz', 'CC', '1073522345', 'Cl 7 A # 19 Norte', 'Escandinavo', 'Tunja', 'elkandi20@gmail.com', '312', '2020-08-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodicidad_de_pago`
--

CREATE TABLE `periodicidad_de_pago` (
  `id_registro` int(11) NOT NULL,
  `periodicidad` varchar(45) NOT NULL,
  `lugar_cobro` varchar(45) NOT NULL,
  `contrato_deligado` varchar(45) NOT NULL,
  `id_plan` int(11) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `periodicidad_de_pago`
--

INSERT INTO `periodicidad_de_pago` (`id_registro`, `periodicidad`, `lugar_cobro`, `contrato_deligado`, `id_plan`, `fecha_registro`) VALUES
(2, 'Anual', 'Lugar de Trabajo', '', 1, '2020-08-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_planes`
--

CREATE TABLE `tipos_planes` (
  `id_plan` int(11) NOT NULL,
  `nombre_plan` varchar(45) NOT NULL,
  `precio_plan` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos_planes`
--

INSERT INTO `tipos_planes` (`id_plan`, `nombre_plan`, `precio_plan`) VALUES
(1, 'HUELLITAS MEMORIA', 12000),
(2, 'HUELLITAS DESPEDIDA', 10000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_contrato`
--
ALTER TABLE `datos_contrato`
  ADD PRIMARY KEY (`id_contrato`),
  ADD KEY `id_titular` (`id_titular`),
  ADD KEY `id_trabajo` (`id_trabajo`),
  ADD KEY `id_periodicidad` (`id_periodicidad`),
  ADD KEY `id_vocero` (`id_vocero`),
  ADD KEY `id_mascota` (`id_mascota`);

--
-- Indices de la tabla `datos_mascota`
--
ALTER TABLE `datos_mascota`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `datos_titular`
--
ALTER TABLE `datos_titular`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `datos_trabajo`
--
ALTER TABLE `datos_trabajo`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `datos_vocero`
--
ALTER TABLE `datos_vocero`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `periodicidad_de_pago`
--
ALTER TABLE `periodicidad_de_pago`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `id_plan` (`id_plan`);

--
-- Indices de la tabla `tipos_planes`
--
ALTER TABLE `tipos_planes`
  ADD PRIMARY KEY (`id_plan`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_contrato`
--
ALTER TABLE `datos_contrato`
  MODIFY `id_contrato` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `datos_mascota`
--
ALTER TABLE `datos_mascota`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `datos_titular`
--
ALTER TABLE `datos_titular`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `datos_trabajo`
--
ALTER TABLE `datos_trabajo`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `datos_vocero`
--
ALTER TABLE `datos_vocero`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `periodicidad_de_pago`
--
ALTER TABLE `periodicidad_de_pago`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipos_planes`
--
ALTER TABLE `tipos_planes`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_contrato`
--
ALTER TABLE `datos_contrato`
  ADD CONSTRAINT `datos_contrato_ibfk_1` FOREIGN KEY (`id_titular`) REFERENCES `datos_titular` (`id_registro`),
  ADD CONSTRAINT `datos_contrato_ibfk_2` FOREIGN KEY (`id_trabajo`) REFERENCES `datos_trabajo` (`id_registro`),
  ADD CONSTRAINT `datos_contrato_ibfk_3` FOREIGN KEY (`id_periodicidad`) REFERENCES `periodicidad_de_pago` (`id_registro`),
  ADD CONSTRAINT `datos_contrato_ibfk_4` FOREIGN KEY (`id_vocero`) REFERENCES `datos_vocero` (`id_registro`),
  ADD CONSTRAINT `datos_contrato_ibfk_5` FOREIGN KEY (`id_mascota`) REFERENCES `datos_mascota` (`id_registro`);

--
-- Filtros para la tabla `periodicidad_de_pago`
--
ALTER TABLE `periodicidad_de_pago`
  ADD CONSTRAINT `periodicidad_de_pago_ibfk_1` FOREIGN KEY (`id_plan`) REFERENCES `tipos_planes` (`id_plan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
