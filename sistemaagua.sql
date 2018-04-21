-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-04-2018 a las 22:42:01
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaagua`
--

DELIMITER $$
--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `TotalUsuarios` () RETURNS INT(11) NO SQL
return (SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'sistemaagua'
AND   TABLE_NAME   = 'usuarios')$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calles`
--

CREATE TABLE `calles` (
  `idCalle` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `colonia` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cp` varchar(5) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `calles`
--

INSERT INTO `calles` (`idCalle`, `nombre`, `colonia`, `cp`) VALUES
(1, 'Belisario Dominguez', 'Centro', '49000'),
(2, 'Gordoa', 'Centro', '49000'),
(3, 'degollado', 'centro', '49000'),
(4, 'ocampo', 'centro', '49000'),
(5, 'Guzmán', '1', '1'),
(6, 'el grullo', 'solidaridad', '49000'),
(7, 'tuxpan', 'solidaridad', '49000'),
(8, 'rosales', 'centro', '49000'),
(9, 'buenrostro', 'centro', '49000'),
(10, 'sayula', 'centro', '49000'),
(11, 'ignacio ragazosa', 'CTM', '49052'),
(12, 'corregidora', 'centro', '49000'),
(13, 'antonio caso', 'CNOP', '49052'),
(14, 'jose vasconcelos', 'revolucion', '49052'),
(15, '1ro de mayo', 'centro', '49000'),
(16, 'chamizal', 'centro', '49000'),
(17, 'reforma', 'centro', '4900'),
(18, 'felix', 'solidaridad', '49000'),
(19, 'articulo 149', 'ctm', '49000'),
(20, 'constitución', 'centro', '49000'),
(21, 'serafin vazquez', 'solidaridad', '49052'),
(22, 'vallarta', 'centro', '4900'),
(23, 'federico del toro', 'centro', '4900'),
(24, 'cristobal colon', 'centro', '49000'),
(25, 'vicente mendiola', 'centro', '49052'),
(26, 'nuñez', 'centro', '49000'),
(27, 'quintanar', 'centro', '4900'),
(28, 'carlos villa señor', 'constituyentes', '49000'),
(29, 'av tecnológico ', 'centro', '49000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `idCuenta` int(11) NOT NULL,
  `idCalle` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nombreCliente` varchar(200) CHARACTER SET latin1 NOT NULL,
  `noExterior` int(11) NOT NULL,
  `noInterior` int(11) DEFAULT NULL,
  `telefono` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `fechaAlta` date DEFAULT NULL,
  `ultimoPagoM` int(11) NOT NULL,
  `ultimoPagoA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`idCuenta`, `idCalle`, `idUsuario`, `nombreCliente`, `noExterior`, `noInterior`, `telefono`, `fechaAlta`, `ultimoPagoM`, `ultimoPagoA`) VALUES
(1, 1, 4, 'Jessy', 95, 2, '3414125424', '2017-01-09', 12, 2017),
(2, 1, 2, 'Angelica Lopez', 95, 2, '3414125424', '2018-03-19', 1, 2016),
(3, 3, 3, 'El tío', 4, 2, '4132171', '2016-06-15', 12, 2016),
(4, 4, 5, 'Carlos Alejandro Buenrostro', 8, 0, '4125875', '2018-04-18', 12, 2016);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepago`
--

CREATE TABLE `detallepago` (
  `idPago` int(11) NOT NULL,
  `idSituacion` int(11) NOT NULL,
  `idTarifa` int(11) NOT NULL,
  `MesInicial` int(11) NOT NULL,
  `MesFinal` int(11) NOT NULL,
  `coutaFija` float NOT NULL,
  `recargo` float NOT NULL,
  `tarifa` float NOT NULL,
  `infraestructura` float NOT NULL,
  `descuento` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idEmpleado` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `rol` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleado`, `idUsuario`, `nombre`, `rol`) VALUES
(1, 1, 'Andrea Monserrat', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `idPago` int(11) NOT NULL,
  `idCuenta` int(11) NOT NULL,
  `fecha` varchar(10) CHARACTER SET latin1 NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situaciones`
--

CREATE TABLE `situaciones` (
  `idSituacion` int(11) NOT NULL,
  `descripcion` varchar(50) CHARACTER SET latin1 NOT NULL,
  `descuento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `situaciones`
--

INSERT INTO `situaciones` (`idSituacion`, `descripcion`, `descuento`) VALUES
(1, 'NINGUNO', 0),
(2, 'ENERO Y FEBRERO', 15),
(3, '60 AÑOS O MAS', 50),
(4, 'VIUDAS Y/O VIUDOS', 50),
(5, 'DISCAPACITADOS', 50),
(6, 'JUBILADOS Y/O PENSIONADOS', 50),
(7, 'hola', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `idTarifa` int(11) NOT NULL,
  `fecha` int(11) DEFAULT NULL,
  `coutaFija` double NOT NULL DEFAULT '0',
  `recargo` double NOT NULL DEFAULT '0',
  `tarifa` double NOT NULL DEFAULT '0',
  `infraestructura` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tarifas`
--

INSERT INTO `tarifas` (`idTarifa`, `fecha`, `coutaFija`, `recargo`, `tarifa`, `infraestructura`) VALUES
(1, 2012, 702, 93, 140.4, 21.6),
(2, 2013, 727.2, 93, 145.2, 21.6),
(3, 2014, 756.6, 93, 151.2, 21.6),
(4, 2015, 780, 93, 156, 24),
(5, 2016, 810, 93, 162, 24),
(6, 2017, 844.5, 93, 168.5, 25),
(7, 2018, 878.5, 0, 174.5, 25),
(9, 2000, 1, 1, 1, 1),
(10, 1999, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(8) CHARACTER SET latin1 NOT NULL,
  `rol` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `email`, `password`, `rol`) VALUES
(1, 'administrador@gmail.com', '123', 'Administrador'),
(2, 'angelica@hotmail.com', '123', 'Cliente'),
(3, 'eltio@gmail.com', '123', 'Cliente'),
(4, 'jessi.com', '123', 'Cliente'),
(5, 'carlos@gmail.com', '123', 'Cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calles`
--
ALTER TABLE `calles`
  ADD PRIMARY KEY (`idCalle`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`idCuenta`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`idPago`);

--
-- Indices de la tabla `situaciones`
--
ALTER TABLE `situaciones`
  ADD PRIMARY KEY (`idSituacion`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`idTarifa`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calles`
--
ALTER TABLE `calles`
  MODIFY `idCalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `idCuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `idPago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `situaciones`
--
ALTER TABLE `situaciones`
  MODIFY `idSituacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `idTarifa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
