-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-03-2026 a las 21:13:25
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Control_Vehicular2026`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Centros_Verificacion`
--

CREATE TABLE `Centros_Verificacion` (
  `Numero_centro` int(11) NOT NULL,
  `Hora_entrada` time DEFAULT NULL,
  `Hora_salida` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Centros_Verificacion`
--

INSERT INTO `Centros_Verificacion` (`Numero_centro`, `Hora_entrada`, `Hora_salida`) VALUES
(1, '00:00:01', '00:00:01'),
(2, '00:00:02', '00:00:02'),
(5, '00:00:05', '00:00:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Conductores`
--

CREATE TABLE `Conductores` (
  `Numero_Licencia` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido_paterno` varchar(20) NOT NULL,
  `Apellido_materno` varchar(20) NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `Estado_procedencia` varchar(30) NOT NULL,
  `Grupo_sanguineo` char(4) NOT NULL,
  `Donador_organos` varchar(4) DEFAULT NULL,
  `Sexo` tinyint(1) NOT NULL,
  `Id_domicilio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Conductores`
--

INSERT INTO `Conductores` (`Numero_Licencia`, `Nombre`, `Apellido_paterno`, `Apellido_materno`, `Fecha_nacimiento`, `Estado_procedencia`, `Grupo_sanguineo`, `Donador_organos`, `Sexo`, `Id_domicilio`) VALUES
(1, '1', '1', '1', '0001-01-01', '1', '1', '1', 1, 1),
(4, '4', '4', '4', '0004-04-04', '4', '4', '4', 4, 1),
(10, '10', '10', '10', '1010-10-10', 'Chiapas', 'AB+', 'Si', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Domicilios`
--

CREATE TABLE `Domicilios` (
  `Id` int(11) NOT NULL,
  `Localidad` varchar(20) NOT NULL,
  `Municipio` varchar(20) NOT NULL,
  `Entidad_federativa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Domicilios`
--

INSERT INTO `Domicilios` (`Id`, `Localidad`, `Municipio`, `Entidad_federativa`) VALUES
(1, '1', '1', '1'),
(3, '3', '3', '3'),
(10, '10', '10', ''),
(11, '11', '11', 'Durango');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Licencias`
--

CREATE TABLE `Licencias` (
  `Id` int(11) NOT NULL,
  `Fecha_expedicion` date NOT NULL,
  `Fecha_validez` date NOT NULL,
  `Antiguedad` date NOT NULL,
  `Id_conductor` int(11) NOT NULL,
  `Id_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Licencias`
--

INSERT INTO `Licencias` (`Id`, `Fecha_expedicion`, `Fecha_validez`, `Antiguedad`, `Id_conductor`, `Id_pago`) VALUES
(1, '0001-01-01', '0001-01-01', '0001-01-01', 1, 1),
(4, '0004-04-04', '0004-04-04', '0004-04-04', 1, 1),
(11, '1111-11-11', '1111-11-11', '1111-11-11', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Multas`
--

CREATE TABLE `Multas` (
  `Folio` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Reporte_seccion` varchar(50) NOT NULL,
  `Nombre_via` varchar(20) NOT NULL,
  `Kilometro` int(11) NOT NULL,
  `Fundamentos` text NOT NULL,
  `Observaciones_personal` text DEFAULT NULL,
  `Observaciones_conductor` text DEFAULT NULL,
  `Id_oficial` int(11) NOT NULL,
  `Id_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Multas`
--

INSERT INTO `Multas` (`Folio`, `Fecha`, `Hora`, `Reporte_seccion`, `Nombre_via`, `Kilometro`, `Fundamentos`, `Observaciones_personal`, `Observaciones_conductor`, `Id_oficial`, `Id_pago`) VALUES
(1, '0001-01-01', '00:00:01', '1', '1', 1, '1', '1', '1', 1, 1),
(4, '0004-04-04', '00:00:04', '4', '4', 4, '4', '4', '4', 1, 1),
(11, '1111-11-11', '11:11:00', '11', '11', 11, '11', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Oficiales`
--

CREATE TABLE `Oficiales` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Grupo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Oficiales`
--

INSERT INTO `Oficiales` (`Id`, `Nombre`, `Apellidos`, `Grupo`) VALUES
(1, '1', '1', '1'),
(4, '4', '4', '4'),
(11, '11', '11', '11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pagos`
--

CREATE TABLE `Pagos` (
  `Linea_captura` int(11) NOT NULL,
  `Fecha_limite` date NOT NULL,
  `Importe` decimal(10,2) NOT NULL,
  `Instrumento` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Pagos`
--

INSERT INTO `Pagos` (`Linea_captura`, `Fecha_limite`, `Importe`, `Instrumento`) VALUES
(1, '0001-01-01', 1.00, '1'),
(11, '1111-11-11', 11.11, '11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Propietarios`
--

CREATE TABLE `Propietarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido_paterno` varchar(20) NOT NULL,
  `Apellido_materno` varchar(20) NOT NULL,
  `RFC` char(13) NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `Id_Domicilio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Propietarios`
--

INSERT INTO `Propietarios` (`Id`, `Nombre`, `Apellido_paterno`, `Apellido_materno`, `RFC`, `Fecha_nacimiento`, `Id_Domicilio`) VALUES
(1, '1', '1', '1', '1', '0001-01-01', 1),
(11, '11', '11', '11', '1111111111111', '1111-11-11', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tarjetas_Circulacion`
--

CREATE TABLE `Tarjetas_Circulacion` (
  `Folio` int(11) NOT NULL,
  `Vigencia` date NOT NULL,
  `Operacion` varchar(30) NOT NULL,
  `Oficina` varchar(20) NOT NULL,
  `Movimiento` varchar(30) NOT NULL,
  `Id_vehiculo` int(11) NOT NULL,
  `Id_propietario` int(11) NOT NULL,
  `Id_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Tarjetas_Circulacion`
--

INSERT INTO `Tarjetas_Circulacion` (`Folio`, `Vigencia`, `Operacion`, `Oficina`, `Movimiento`, `Id_vehiculo`, `Id_propietario`, `Id_pago`) VALUES
(1, '0001-01-01', '1', '1', '1', 1, 1, 1),
(2, '0002-02-02', '2', '2', '2', 1, 1, 1),
(11, '1111-11-11', '11', 'Oficina1', 'baja', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tarjetas_Verificacion`
--

CREATE TABLE `Tarjetas_Verificacion` (
  `Folio` int(11) NOT NULL,
  `Tipo_servicio` varchar(50) NOT NULL,
  `Fecha_expedicion` date NOT NULL,
  `Motivo` text NOT NULL,
  `Semestre` int(11) NOT NULL,
  `Vigencia` date NOT NULL,
  `Tecnico_verificador` varchar(40) NOT NULL,
  `Linea_vigencia` varchar(30) DEFAULT NULL,
  `Numero_centro` int(11) NOT NULL,
  `Id_pago` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Tarjetas_Verificacion`
--

INSERT INTO `Tarjetas_Verificacion` (`Folio`, `Tipo_servicio`, `Fecha_expedicion`, `Motivo`, `Semestre`, `Vigencia`, `Tecnico_verificador`, `Linea_vigencia`, `Numero_centro`, `Id_pago`) VALUES
(1, '1', '0001-01-01', '1', 1, '0001-01-01', '1', '1', 1, 1),
(11, 'verificacion_extemporanea', '1111-11-11', '11', 11, '1111-11-11', '11', '11', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Vehiculos`
--

CREATE TABLE `Vehiculos` (
  `Id` int(11) NOT NULL,
  `Año` int(11) NOT NULL,
  `Placa` char(7) NOT NULL,
  `Numero_serie` char(17) NOT NULL,
  `Marca` varchar(10) NOT NULL,
  `Origen` varchar(20) NOT NULL,
  `Color` varchar(10) NOT NULL,
  `Cilindraje` int(11) NOT NULL,
  `Capacidad` int(11) NOT NULL,
  `Puertas` int(11) NOT NULL,
  `Asientos` int(11) NOT NULL,
  `Transmision` varchar(10) NOT NULL,
  `Clave_vehicular` char(7) NOT NULL,
  `Tipo_combustible` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Vehiculos`
--

INSERT INTO `Vehiculos` (`Id`, `Año`, `Placa`, `Numero_serie`, `Marca`, `Origen`, `Color`, `Cilindraje`, `Capacidad`, `Puertas`, `Asientos`, `Transmision`, `Clave_vehicular`, `Tipo_combustible`) VALUES
(1, 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, '1', '1', '1'),
(11, 11, '11', '11', '11', '11', '11', 11, 11, 1, 11, '11', '11', 'Diesel');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Centros_Verificacion`
--
ALTER TABLE `Centros_Verificacion`
  ADD PRIMARY KEY (`Numero_centro`);

--
-- Indices de la tabla `Conductores`
--
ALTER TABLE `Conductores`
  ADD PRIMARY KEY (`Numero_Licencia`),
  ADD KEY `Id_domicilio` (`Id_domicilio`);

--
-- Indices de la tabla `Domicilios`
--
ALTER TABLE `Domicilios`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Entidad_federativa` (`Entidad_federativa`);

--
-- Indices de la tabla `Licencias`
--
ALTER TABLE `Licencias`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_conductor` (`Id_conductor`),
  ADD KEY `Id_pago` (`Id_pago`);

--
-- Indices de la tabla `Multas`
--
ALTER TABLE `Multas`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `Id_oficial` (`Id_oficial`),
  ADD KEY `Id_pago` (`Id_pago`);

--
-- Indices de la tabla `Oficiales`
--
ALTER TABLE `Oficiales`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Pagos`
--
ALTER TABLE `Pagos`
  ADD PRIMARY KEY (`Linea_captura`);

--
-- Indices de la tabla `Propietarios`
--
ALTER TABLE `Propietarios`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `RFC` (`RFC`),
  ADD KEY `Id_Domicilio` (`Id_Domicilio`);

--
-- Indices de la tabla `Tarjetas_Circulacion`
--
ALTER TABLE `Tarjetas_Circulacion`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `Id_vehiculo` (`Id_vehiculo`),
  ADD KEY `Id_pago` (`Id_pago`),
  ADD KEY `Id_propietario` (`Id_propietario`);

--
-- Indices de la tabla `Tarjetas_Verificacion`
--
ALTER TABLE `Tarjetas_Verificacion`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `Numero_centro` (`Numero_centro`),
  ADD KEY `Id_paGo` (`Id_pago`);

--
-- Indices de la tabla `Vehiculos`
--
ALTER TABLE `Vehiculos`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Placa` (`Placa`),
  ADD UNIQUE KEY `Numero_serie` (`Numero_serie`),
  ADD UNIQUE KEY `Clave_vehicular` (`Clave_vehicular`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Conductores`
--
ALTER TABLE `Conductores`
  MODIFY `Numero_Licencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Domicilios`
--
ALTER TABLE `Domicilios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Licencias`
--
ALTER TABLE `Licencias`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Multas`
--
ALTER TABLE `Multas`
  MODIFY `Folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Oficiales`
--
ALTER TABLE `Oficiales`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Pagos`
--
ALTER TABLE `Pagos`
  MODIFY `Linea_captura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Propietarios`
--
ALTER TABLE `Propietarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Tarjetas_Circulacion`
--
ALTER TABLE `Tarjetas_Circulacion`
  MODIFY `Folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Tarjetas_Verificacion`
--
ALTER TABLE `Tarjetas_Verificacion`
  MODIFY `Folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Vehiculos`
--
ALTER TABLE `Vehiculos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Conductores`
--
ALTER TABLE `Conductores`
  ADD CONSTRAINT `conductores_ibfk_1` FOREIGN KEY (`Id_domicilio`) REFERENCES `Domicilios` (`Id`);

--
-- Filtros para la tabla `Licencias`
--
ALTER TABLE `Licencias`
  ADD CONSTRAINT `licencias_ibfk_1` FOREIGN KEY (`Id_conductor`) REFERENCES `Conductores` (`Numero_Licencia`),
  ADD CONSTRAINT `licencias_ibfk_2` FOREIGN KEY (`Id_pago`) REFERENCES `Pagos` (`Linea_captura`);

--
-- Filtros para la tabla `Multas`
--
ALTER TABLE `Multas`
  ADD CONSTRAINT `multas_ibfk_1` FOREIGN KEY (`Id_oficial`) REFERENCES `Oficiales` (`Id`),
  ADD CONSTRAINT `multas_ibfk_2` FOREIGN KEY (`Id_pago`) REFERENCES `Pagos` (`Linea_captura`);

--
-- Filtros para la tabla `Propietarios`
--
ALTER TABLE `Propietarios`
  ADD CONSTRAINT `propietarios_ibfk_1` FOREIGN KEY (`Id_Domicilio`) REFERENCES `Domicilios` (`Id`);

--
-- Filtros para la tabla `Tarjetas_Circulacion`
--
ALTER TABLE `Tarjetas_Circulacion`
  ADD CONSTRAINT `tarjetas_circulacion_ibfk_1` FOREIGN KEY (`Id_vehiculo`) REFERENCES `Vehiculos` (`Id`),
  ADD CONSTRAINT `tarjetas_circulacion_ibfk_2` FOREIGN KEY (`Id_pago`) REFERENCES `Pagos` (`Linea_captura`),
  ADD CONSTRAINT `tarjetas_circulacion_ibfk_3` FOREIGN KEY (`Id_propietario`) REFERENCES `Propietarios` (`Id`);

--
-- Filtros para la tabla `Tarjetas_Verificacion`
--
ALTER TABLE `Tarjetas_Verificacion`
  ADD CONSTRAINT `tarjetas_verificacion_ibfk_1` FOREIGN KEY (`Numero_centro`) REFERENCES `Centros_Verificacion` (`Numero_Centro`),
  ADD CONSTRAINT `tarjetas_verificacion_ibfk_2` FOREIGN KEY (`Id_paGo`) REFERENCES `Pagos` (`Linea_captura`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
