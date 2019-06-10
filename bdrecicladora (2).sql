-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2018 a las 05:08:33
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdrecicladora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `id_caja` int(10) UNSIGNED NOT NULL,
  `usuarios_idUsuarios` int(10) UNSIGNED NOT NULL,
  `inicio_caja` double DEFAULT NULL,
  `corte_caja` double DEFAULT NULL,
  `gastos_dia` double DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_clientes` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `rfc` varchar(50) DEFAULT NULL,
  `plazoCred` int(10) UNSIGNED DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_clientes`, `nombre`, `direccion`, `telefono`, `email`, `rfc`, `plazoCred`, `ciudad`, `estado`) VALUES
(2, 'pecsa', 'abasolo', 123456, 'f@f', 'fghj678', 20, 'ciudad', 'Coahuila'),
(5, '3', '3', 3, 'sasa@susu', '3', 3, '3', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compras` int(10) UNSIGNED NOT NULL,
  `producto_id_producto` int(10) UNSIGNED NOT NULL,
  `peso` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(10) UNSIGNED NOT NULL,
  `nomDep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nomDep`) VALUES
(1, 'jefatura'),
(2, 'Contabilidad'),
(3, 'Finanzas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `numEmpleado` varchar(50) DEFAULT NULL,
  `nomEmpleado` varchar(100) DEFAULT NULL,
  `apellidoPat` varchar(100) DEFAULT NULL,
  `apellidoMat` varchar(100) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `numEmpleado`, `nomEmpleado`, `apellidoPat`, `apellidoMat`, `departamento`, `direccion`, `telefono`, `email`) VALUES
(3, '3', '', '3', '3', NULL, '3', 3, 'sasa@susu'),
(4, '4', '4', '4', '4', NULL, '4', 4, 'sasa@susu'),
(5, '5', '5', '5', '5', '6', '5', 5, 'sasa@susu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `idFamilia` int(11) NOT NULL,
  `nomFam` varchar(200) NOT NULL,
  `descFam` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`idFamilia`, `nomFam`, `descFam`) VALUES
(1, 'metales', NULL),
(2, 'madera', NULL),
(3, 'x', '0'),
(4, 'x', 'x');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id_gastos` int(10) UNSIGNED NOT NULL,
  `departamento_id_departamento` int(10) UNSIGNED NOT NULL,
  `concepto` varchar(100) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `cantidad` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_compras`
--

CREATE TABLE `lista_compras` (
  `id_lis_comp` int(10) UNSIGNED NOT NULL,
  `cliente_id_clientes` int(10) UNSIGNED NOT NULL,
  `compras_id_compras` int(10) UNSIGNED NOT NULL,
  `total` double DEFAULT NULL,
  `iva` double DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_ventas`
--

CREATE TABLE `lista_ventas` (
  `id_list_vent` int(10) UNSIGNED NOT NULL,
  `proveedor_id_proveedor` int(10) UNSIGNED NOT NULL,
  `ventas_id_venta` int(10) UNSIGNED NOT NULL,
  `total` double DEFAULT NULL,
  `iva` double DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivelseguridad`
--

CREATE TABLE `nivelseguridad` (
  `idnivelSeguridad` int(10) UNSIGNED NOT NULL,
  `nomNivelSeg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivelseguridad`
--

INSERT INTO `nivelseguridad` (`idnivelSeguridad`, `nomNivelSeg`) VALUES
(1, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(10) UNSIGNED NOT NULL,
  `familia` int(11) DEFAULT NULL,
  `nombre_producto` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `precio_venta` double DEFAULT NULL,
  `precio_compra` double DEFAULT NULL,
  `unidadMed` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `rfc` varchar(50) DEFAULT NULL,
  `contacto` varchar(100) DEFAULT NULL,
  `plazoCred` int(10) UNSIGNED DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `direccion`, `telefono`, `email`, `rfc`, `contacto`, `plazoCred`, `estado`) VALUES
(1, 'kadima', 'manzana', 4509876, 'f@g.com', '456fgh', 'luis', 30, 'coahuila'),
(3, 'ayg', 'sendero', 123456, 'fghj@ghjk', 'fghj678', 'jorge', 15, 'Coahuila');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `id_unidades` int(10) UNSIGNED NOT NULL,
  `unidad` int(10) UNSIGNED NOT NULL,
  `placa` varchar(20) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`id_unidades`, `unidad`, `placa`, `marca`, `descripcion`) VALUES
(1, 26, 'asd456', 'chevrolet', 'chevy azul marino'),
(2, 27, 'dfgh789', 'vw', 'bocho blanco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(10) UNSIGNED NOT NULL,
  `nivelSeguridad_idnivelSeguridad` int(10) UNSIGNED NOT NULL,
  `nomUs` varchar(100) NOT NULL,
  `apellidoUs` varchar(100) NOT NULL,
  `fechaIng` date DEFAULT NULL,
  `fechaNac` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `passUs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `nivelSeguridad_idnivelSeguridad`, `nomUs`, `apellidoUs`, `fechaIng`, `fechaNac`, `email`, `passUs`) VALUES
(2, 1, 'laura', 'berlanga', '2018-03-13', '2018-03-08', 'fghj@ghjk', 'limon'),
(4, 1, 'braulio', 'montero', '2018-04-11', '2018-04-18', 'caca@pipi', 'popis'),
(7, 1, 'julio', 'mazatan', '2018-04-19', '2018-04-18', 'flaco@tilico', 'tablon'),
(15, 1, 'JOSE', 'morales', '2018-04-07', '2018-04-07', 'min@gol', 'popis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(10) UNSIGNED NOT NULL,
  `producto_id_producto` int(10) UNSIGNED NOT NULL,
  `peso` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`id_caja`),
  ADD KEY `caja_FKIndex1` (`usuarios_idUsuarios`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_clientes`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compras`),
  ADD KEY `compras_FKIndex1` (`producto_id_producto`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`idFamilia`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id_gastos`),
  ADD KEY `gastos_FKIndex1` (`departamento_id_departamento`);

--
-- Indices de la tabla `lista_compras`
--
ALTER TABLE `lista_compras`
  ADD PRIMARY KEY (`id_lis_comp`),
  ADD KEY `lista_compras_FKIndex1` (`compras_id_compras`),
  ADD KEY `lista_compras_FKIndex2` (`cliente_id_clientes`);

--
-- Indices de la tabla `lista_ventas`
--
ALTER TABLE `lista_ventas`
  ADD PRIMARY KEY (`id_list_vent`),
  ADD KEY `lista_ventas_FKIndex1` (`ventas_id_venta`),
  ADD KEY `lista_ventas_FKIndex2` (`proveedor_id_proveedor`);

--
-- Indices de la tabla `nivelseguridad`
--
ALTER TABLE `nivelseguridad`
  ADD PRIMARY KEY (`idnivelSeguridad`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id_unidades`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `usuarios_FKIndex1` (`nivelSeguridad_idnivelSeguridad`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `ventas_FKIndex1` (`producto_id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `id_caja` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_clientes` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compras` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `familia`
--
ALTER TABLE `familia`
  MODIFY `idFamilia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id_gastos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lista_compras`
--
ALTER TABLE `lista_compras`
  MODIFY `id_lis_comp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lista_ventas`
--
ALTER TABLE `lista_ventas`
  MODIFY `id_list_vent` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nivelseguridad`
--
ALTER TABLE `nivelseguridad`
  MODIFY `idnivelSeguridad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id_unidades` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caja`
--
ALTER TABLE `caja`
  ADD CONSTRAINT `caja_ibfk_1` FOREIGN KEY (`usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`producto_id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `gastos_ibfk_1` FOREIGN KEY (`departamento_id_departamento`) REFERENCES `departamento` (`id_departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `lista_compras`
--
ALTER TABLE `lista_compras`
  ADD CONSTRAINT `lista_compras_ibfk_1` FOREIGN KEY (`compras_id_compras`) REFERENCES `compras` (`id_compras`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `lista_compras_ibfk_2` FOREIGN KEY (`cliente_id_clientes`) REFERENCES `cliente` (`id_clientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `lista_ventas`
--
ALTER TABLE `lista_ventas`
  ADD CONSTRAINT `lista_ventas_ibfk_1` FOREIGN KEY (`ventas_id_venta`) REFERENCES `ventas` (`id_venta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `lista_ventas_ibfk_2` FOREIGN KEY (`proveedor_id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`nivelSeguridad_idnivelSeguridad`) REFERENCES `nivelseguridad` (`idnivelSeguridad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`producto_id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
