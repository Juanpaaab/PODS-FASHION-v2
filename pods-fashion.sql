-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2020 a las 23:53:55
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pods-fashion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(11, 3, 31, 1),
(13, 2, 30, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(1, 'Accesorios', 'accesorios'),
(2, 'Faldas', 'faldas'),
(3, 'Blusas', 'blusas'),
(4, 'Jeans', 'jeans'),
(5, 'Shorts', 'shorts'),
(6, 'Vestidos', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(14, 9, 11, 2),
(15, 9, 13, 5),
(16, 9, 3, 2),
(17, 9, 1, 3),
(18, 10, 13, 3),
(19, 10, 2, 4),
(20, 10, 19, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `price`, `photo`, `date_view`, `counter`) VALUES
(30, 3, 'Blusa Amarre Blanco', '<p>Blusa de amarre color blanco</p>\r\n', 'blusa-amarre-blanco', 250000, 'blusa-amarilla-blanco.jpg', '2020-05-15', 1),
(31, 3, 'Blusa Amarre Negra', '<p>Blusa de amarre&nbsp;color negra</p>\r\n', 'blusa-amarre-negra', 250000, 'blusa-amarrar-negra.jpg', '2020-05-12', 1),
(32, 3, 'Blusa Amarre Azul', '<p>Blusa Amarre Azul</p>\r\n', 'blusa-amarre-azul', 200000, 'blusa-amarre-azul.jpg', '0000-00-00', 0),
(33, 3, 'Blusa Basica Azul', 'Blusa Basica Azul', 'blusa-basica-azul', 220000, 'blusa-basica-azul.jpg', '0000-00-00', 0),
(34, 4, 'Jean Dama Bebe', 'Jean Dama Bebe', 'jean-dama-bebe', 300000, 'jean-dama-bebe.png', '0000-00-00', 0),
(35, 1, 'Reloj blanco', 'Reloj blanco', 'reloj-blanco', 75000, 'reloj-blanco.jpeg', '0000-00-00', 0),
(36, 1, 'Reloj dorado', 'Reloj dorado', 'reloj-dorado', 90000, 'reloj-dorado.jpeg', '0000-00-00', 0),
(37, 4, 'Most Wanted Blanco', 'Jean marca: Most Wanted \r\nColor. Blanco', 'most-wanted-blanco', 300000, 'most-wanted-blanco_1589578132.png', '0000-00-00', 0),
(38, 5, 'Short Baca Negro', 'Short Baca Negro', 'short-baca-negro', 50000, 'short-baca-negro.jpg', '0000-00-00', 0),
(39, 4, 'Most Wanted Correa', 'Most Wanted Correa', 'most-wanted-correa', 220000, 'most-wanted-correa.png', '0000-00-00', 0),
(40, 5, 'Short Most Wanted Oscuro', 'Short de marca Most Wanted y color oscuro', 'short-most-wanted-oscuro', 75000, 'short-most-wanted-oscuro.jpg', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(20) NOT NULL,
  `email` text DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `Nombre` text DEFAULT NULL,
  `Apellidos` text DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL,
  `Ciudad` text DEFAULT NULL,
  `Rol` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `email`, `password`, `Nombre`, `Apellidos`, `Direccion`, `Ciudad`, `Rol`) VALUES
(1, 'xjuanpaab@gmail.com', '$2y$10$mN6z4uRi5hQRErtv1AuN1Oef/r7FKKQ4GDyFUe.D32BC/yIKCJbIa', 'Juan Pablo', 'Acosta Bedoya', 'Calle 100B 23-16', 'Cali', 1),
(2, 'DanielaLo@gmail.com', '$2y$10$jgi.AwQqAmNhEoisi4SPZerjNjoGrPYA/h6coGSf2VUkbFg8D/RDW', 'Daniela', 'Lozano Amaya', 'Calle 154A', 'Cali', 0),
(6, 'diego@hotmail.com', '$2y$10$aAjnu.m1XNVzeVl15jhI7eXLxIqUBhXRhCw7Ud3u.bhdgkk.sTwB2', 'Diego', 'Ochoa Acosta', 'Calle 20C', 'Cali', 0),
(7, 'diego@hotmail.com', '$2y$10$w76wDhinm5.tpIllMAPSXOOtM85YbgbVwTcV/VkerUV9Jgp1vF.KK', 'Diego', 'Ochoa Acosta', 'Calle 647A', 'Yumbo', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
