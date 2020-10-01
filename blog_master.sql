-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-10-2020 a las 16:54:52
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog_master`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Accion'),
(2, 'Rol'),
(3, 'Deportes'),
(4, 'Plataformas'),
(5, 'MMO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

DROP TABLE IF EXISTS `entradas`;
CREATE TABLE IF NOT EXISTS `entradas` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(255) NOT NULL,
  `categoria_id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` mediumtext,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_entrada_usuario` (`usuario_id`),
  KEY `fk_entrada_categoria` (`categoria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) VALUES
(1, 6, 1, 'Review Call of duty Cold War', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus id eros elementum pretium. Vestibulum id sagittis velit. Nulla faucibus sed nibh consectetur scelerisque. Duis vulputate eros et congue malesuada. Nullam blandit sem molestie lacus pharetra tempus. Etiam vestibulum, augue eu elementum ornare, nisl erat consectetur justo, sed mattis dui massa vel tellus. Suspendisse et quam neque. Cras mattis eros nec risus interdum gravida. Suspendisse orci massa, accumsan sit amet ligula ac, posuere maximus felis. Suspendisse mollis dapibus justo eu condimentum. ', '2020-10-01'),
(2, 8, 3, 'Gameplay F1 2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus id eros elementum pretium. Vestibulum id sagittis velit. Nulla faucibus sed nibh consectetur scelerisque. Duis vulputate eros et congue malesuada. Nullam blandit sem molestie lacus pharetra tempus. Etiam vestibulum, augue eu elementum ornare, nisl erat consectetur justo, sed mattis dui massa vel tellus. Suspendisse et quam neque. Cras mattis eros nec risus interdum gravida. Suspendisse orci massa, accumsan sit amet ligula ac, posuere maximus felis. Suspendisse mollis dapibus justo eu condimentum. ', '2020-10-02'),
(3, 6, 1, 'Review Call of duty Cold War', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus id eros elementum pretium. Vestibulum id sagittis velit. Nulla faucibus sed nibh consectetur scelerisque. Duis vulputate eros et congue malesuada. Nullam blandit sem molestie lacus pharetra tempus. Etiam vestibulum, augue eu elementum ornare, nisl erat consectetur justo, sed mattis dui massa vel tellus. Suspendisse et quam neque. Cras mattis eros nec risus interdum gravida. Suspendisse orci massa, accumsan sit amet ligula ac, posuere maximus felis. Suspendisse mollis dapibus justo eu condimentum. ', '2020-10-01'),
(4, 8, 3, 'Gameplay F1 2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus id eros elementum pretium. Vestibulum id sagittis velit. Nulla faucibus sed nibh consectetur scelerisque. Duis vulputate eros et congue malesuada. Nullam blandit sem molestie lacus pharetra tempus. Etiam vestibulum, augue eu elementum ornare, nisl erat consectetur justo, sed mattis dui massa vel tellus. Suspendisse et quam neque. Cras mattis eros nec risus interdum gravida. Suspendisse orci massa, accumsan sit amet ligula ac, posuere maximus felis. Suspendisse mollis dapibus justo eu condimentum. ', '2020-10-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `fecha`) VALUES
(6, 'Fran', 'Martinez', 'fran@fran.com', '$2y$04$f5u8kPS7tYFQMsDwurATyuj29ZL0It88Pma.17wkr6XYJ1.3ih.ty', '2020-09-29'),
(7, 'Sara', 'Lafuente', 'sara@sara.com', '$2y$04$cNNDh9Y7gkx3JIryB6Wd9e0dT2caL7eAq9jo4aPlzC6/lKuQKxyV.', '2020-09-29'),
(8, 'hola', 'hola', 'hola@hola.com', '$2y$04$leKRQzqaPECi2GTMrLNPYeI7fPKqwTMF0KLRZ9JglfX439djQX/WS', '2020-09-30');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `fk_entrada_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `fk_entrada_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
