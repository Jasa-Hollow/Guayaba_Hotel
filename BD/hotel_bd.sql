-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2020 a las 03:24:09
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
-- Base de datos: `hotel_g`
--
CREATE DATABASE IF NOT EXISTS `hotel_g` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hotel_g`;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cinco_estrellas`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `cinco_estrellas` (
`id_habitacion` int(11)
,`tipo` varchar(50)
,`descripcion` varchar(400)
,`precio` float(20,2)
,`capacidad` varchar(10)
,`num_camas` int(5)
,`img_room` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombres`, `apellidos`, `email`, `telefono`, `direccion`, `id_usuario`) VALUES
(1, 'Hikari', 'Éden', 'hikahika@gmail.com', '', 'Coststeinz', 3),
(2, 'Xenon', 'Hollow', 'xehi@gmail.com', '', 'Olocuilta', 2),
(3, 'Joel Alexander', 'Sandoval', 'joel2262000@gmail.com', '1111-1111', 'Olocuilta', 4),
(4, 'Karen', 'Méndez', 'leokaren@gmail.com', '6482-0572', 'Cuyultitán', 5);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `doble`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `doble` (
`id_habitacion` int(11)
,`tipo` varchar(50)
,`descripcion` varchar(400)
,`precio` float(20,2)
,`capacidad` varchar(10)
,`num_camas` int(5)
,`img_room` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `familiar`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `familiar` (
`id_habitacion` int(11)
,`tipo` varchar(50)
,`descripcion` varchar(400)
,`precio` float(20,2)
,`capacidad` varchar(10)
,`num_camas` int(5)
,`img_room` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE `fecha` (
  `id_fecha` int(11) NOT NULL,
  `fecha_reserva` date NOT NULL,
  `fecha_inicial` date NOT NULL,
  `fecha_final` date NOT NULL,
  `fecha_cancelacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fecha`
--

INSERT INTO `fecha` (`id_fecha`, `fecha_reserva`, `fecha_inicial`, `fecha_final`, `fecha_cancelacion`) VALUES
(1, '0000-00-00', '2020-12-20', '2020-12-24', '0000-00-00'),
(2, '0000-00-00', '2020-12-30', '2020-12-31', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `id_habitacion` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `precio` float(20,2) NOT NULL,
  `capacidad` varchar(10) NOT NULL,
  `num_camas` int(5) NOT NULL,
  `img_room` varchar(50) NOT NULL COMMENT 'Tiene que terminar en extensión .jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`id_habitacion`, `tipo`, `descripcion`, `precio`, `capacidad`, `num_camas`, `img_room`) VALUES
(1, 'Individual', 'Habitación dedicada para una sola persona, con vistas al jardín del hotel, dispone de una recámara, dos sofás y un cuarto de baño con tina.\r\n', 50.00, '2', 1, '0001.jpg'),
(2, 'Doble', 'Habitación para dos personas, una reserva especial para parejas que quieren tener un momento tranquilo y una privacidad suficiente. Con una ventana hacia la calle, así como un cuarto de baño, es la opción perfecta para pasarlo bien entre dos personas.', 75.00, '2', 1, '0002.jpg'),
(3, 'Individual', 'Habitación dedicada para dos personas con una sola cama, aire acondicionado incluido, baño y tina, así como dos ventanas con vista al jardín del hotel.', 40.00, '2', 1, '0003.jpg'),
(4, 'Doble', 'Habitación para dos personas, con aire acondicionado incluido, ventana que posee vistas a la calle, así como un cuarto de baño con tina y regadera.', 70.00, '2', 1, '0004.jpg'),
(5, 'Individual', 'Habitación para una sola persona, perfecta para los viajes de negocios o querer hacer escala por los viajes en un avión. Barato y sencillo, posee un baño, una cama y una ventana con vistas a la calle.', 31.99, '1', 1, '0005.jpg'),
(6, 'Quad', 'Habitación para cuatro personas, con vistas al jardín del hotel, con un diseño de madera muy especial, es una de las mejores opciones que el hotel posee.', 100.00, '4', 2, '0006.jpg'),
(7, 'Suite', 'Suite para amantes de lo exótico, así como las personas qué quiera tener una bella vista al mar. Con dos camas es el alojamiento perfecto, en un viaje de vacaciones.', 150.00, '4', 2, '0007.jpg'),
(8, 'Individual', 'Habitación con un diseño minimalista, una ventana y un baño, dedicada para una sola persona.', 40.00, '1', 1, '0008.jpg'),
(9, 'Suite', 'Suite de una sola cama, dedicada a parejas o huéspedes con un acompañante, esta habitación lejana a las demás, tiene unas preciosas vistas al mar, así como dos cuartos de baño y una cama.', 140.00, '2', 1, '0009.jpg'),
(10, 'Suite Doble', 'Suite con dos camas, dos cuartos de baño, vistas a la calle y una sala de estar.', 120.00, '4', 2, '0010.jpg'),
(11, 'Individual', 'Habitación minimalista para una sola persona, una mesa de noche y un escritorio para trabajar, así como un cuarto de baño y una tina.', 50.00, '1', 1, '0011.jpg'),
(12, 'Suite Individual', 'Suite para una sola persona, con servicios como televisor y aire acondicionado incluidos, un amplio cuarto de baño con regadera y jacuzzi.', 100.00, '1', 1, '0012.jpg'),
(13, 'Doble', 'Habitación para dos personas, minimalista, con cuarto de baño y regadera; posee vistas a la calle.', 40.00, '2', 2, '0013.jpg'),
(14, 'Suite Presidencial', 'Habitación única en lo alto del hotel, la mejor opción para alojar a empresarios. Una sola cama, dos baños y dos salas, una de juegos y otra de estar.', 200.00, '2', 1, '0014.jpg'),
(15, 'Triple', 'Habitación con dos camas abajo, minimalista, la cual tiene vista a la playa, también posee una segunda cama al subir las escaleras. Dos cuartos de baño y dos regaderas.', 120.00, '3', 3, '0015.jpg'),
(16, 'Individual', 'Habitación que incluye el servicio de cable y clima artificial; no posee ventana y tiene un cuarto de baño pequeño.', 50.00, '2', 1, '0016.jpg'),
(17, 'Suite Matrimonial', 'Suite con una cama grande, así como una amplia sala de estar con algunos sofás. Posee un baño y un jacuzzi.', 150.00, '2', 1, '0017.jpg'),
(18, 'Individual', 'Habitación compacta, con una cama sofá, un cuarto de baño y regadera. Posee vistas tanto a la calle como a la playa.', 45.00, '2', 1, '0018.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modopago`
--

CREATE TABLE `modopago` (
  `id_pago` int(11) NOT NULL,
  `pago` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modopago`
--

INSERT INTO `modopago` (`id_pago`, `pago`) VALUES
(1, 'Tarjeta de Débito'),
(2, 'Tarjeta de Crédito'),
(3, 'Paypal'),
(4, 'Transferencia bancaria'),
(5, 'Visa');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `personal`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `personal` (
`id_habitacion` int(11)
,`tipo` varchar(50)
,`descripcion` varchar(400)
,`precio` float(20,2)
,`capacidad` varchar(10)
,`num_camas` int(5)
,`img_room` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `presidencial`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `presidencial` (
`id_habitacion` int(11)
,`tipo` varchar(50)
,`descripcion` varchar(400)
,`precio` float(20,2)
,`capacidad` varchar(10)
,`num_camas` int(5)
,`img_room` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `Ncuenta` varchar(50) DEFAULT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_pago` int(11) NOT NULL,
  `id_habitacion` int(11) NOT NULL,
  `id_fecha` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 0 COMMENT '1: Reservada | 0: Sin reservar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id_reserva`, `Ncuenta`, `id_cliente`, `id_pago`, `id_habitacion`, `id_fecha`, `estado`) VALUES
(1, '$2y$10$KMIp0yQXf2u7r/cOGC.MIu2OXlCgRzfTEloi6ytvPB2', 1, 3, 15, 1, 1),
(2, '$2y$10$Mi.kZ8Vu9kqiMuxj9vbHZ.kssHulE52u2oW9BBi/Hg8', 2, 2, 4, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `tipo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `tipo`) VALUES
(1, 'jasa', '$2y$10$JxYuNYCmru8/ifx2xhRB3OLzXtldeATGi6Y4AIclqvOkqAcUeRvvq', 1),
(2, 'xehi@gmail.com', '$2y$10$KWwv/Bxps.9SZb5pWz8ESu.UzkTCGBpLYmDDdRzrk2xz2jFHFXX7C', 2),
(3, 'hikahika@gmail.com', '$2y$10$ON1zCfn8JvNhx6fOU6soeezlyQiRZ2qzC0t1igpsy1PYY4sqxyWc6', 2);

-- --------------------------------------------------------

--
-- Estructura para la vista `cinco_estrellas`
--
DROP TABLE IF EXISTS `cinco_estrellas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cinco_estrellas`  AS  select `habitacion`.`id_habitacion` AS `id_habitacion`,`habitacion`.`tipo` AS `tipo`,`habitacion`.`descripcion` AS `descripcion`,`habitacion`.`precio` AS `precio`,`habitacion`.`capacidad` AS `capacidad`,`habitacion`.`num_camas` AS `num_camas`,`habitacion`.`img_room` AS `img_room` from `habitacion` where `habitacion`.`tipo` like '%Suite%' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `doble`
--
DROP TABLE IF EXISTS `doble`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `doble`  AS  select `habitacion`.`id_habitacion` AS `id_habitacion`,`habitacion`.`tipo` AS `tipo`,`habitacion`.`descripcion` AS `descripcion`,`habitacion`.`precio` AS `precio`,`habitacion`.`capacidad` AS `capacidad`,`habitacion`.`num_camas` AS `num_camas`,`habitacion`.`img_room` AS `img_room` from `habitacion` where `habitacion`.`tipo` = 'Doble' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `familiar`
--
DROP TABLE IF EXISTS `familiar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `familiar`  AS  select `habitacion`.`id_habitacion` AS `id_habitacion`,`habitacion`.`tipo` AS `tipo`,`habitacion`.`descripcion` AS `descripcion`,`habitacion`.`precio` AS `precio`,`habitacion`.`capacidad` AS `capacidad`,`habitacion`.`num_camas` AS `num_camas`,`habitacion`.`img_room` AS `img_room` from `habitacion` where `habitacion`.`tipo` = 'Triple' or `habitacion`.`tipo` = 'Quad' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `personal`
--
DROP TABLE IF EXISTS `personal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `personal`  AS  select `habitacion`.`id_habitacion` AS `id_habitacion`,`habitacion`.`tipo` AS `tipo`,`habitacion`.`descripcion` AS `descripcion`,`habitacion`.`precio` AS `precio`,`habitacion`.`capacidad` AS `capacidad`,`habitacion`.`num_camas` AS `num_camas`,`habitacion`.`img_room` AS `img_room` from `habitacion` where `habitacion`.`tipo` = 'Individual' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `presidencial`
--
DROP TABLE IF EXISTS `presidencial`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `presidencial`  AS  select `habitacion`.`id_habitacion` AS `id_habitacion`,`habitacion`.`tipo` AS `tipo`,`habitacion`.`descripcion` AS `descripcion`,`habitacion`.`precio` AS `precio`,`habitacion`.`capacidad` AS `capacidad`,`habitacion`.`num_camas` AS `num_camas`,`habitacion`.`img_room` AS `img_room` from `habitacion` where `habitacion`.`tipo` = 'Suite Presidencial' ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `fecha`
--
ALTER TABLE `fecha`
  ADD PRIMARY KEY (`id_fecha`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id_habitacion`);

--
-- Indices de la tabla `modopago`
--
ALTER TABLE `modopago`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `fecha`
--
ALTER TABLE `fecha`
  MODIFY `id_fecha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `id_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `modopago`
--
ALTER TABLE `modopago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
