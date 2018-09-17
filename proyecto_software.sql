-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2018 a las 17:35:44
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto_software`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id_banner` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` varchar(30) NOT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id_banner`, `ruta`) VALUES
(1, 'banner/img/auto1.jpg'),
(2, 'banner/img/auto2.jpg'),
(3, 'banner/img/auto3.jpg'),
(4, 'banner/img/auto4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE IF NOT EXISTS `consultas` (
  `id_consulta` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `comentario` text NOT NULL,
  PRIMARY KEY (`id_consulta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_consulta`, `foto`, `nombre`, `comentario`) VALUES
(1, 'consultas/img/user.png', 'nombre', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quaerat vel natus libero dolores eos est, ad quis sunt, tempore provident ducimus ullam, adipisci aperiam nulla voluptatem. Consectetur, eum, eaque?'),
(2, 'consultas/img/user.png', 'nombre', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quaerat vel natus libero dolores eos est, ad quis sunt, tempore provident ducimus ullam, adipisci aperiam nulla voluptatem. Consectetur, eum, eaque?'),
(3, 'consultas/img/user.png', 'nombre', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quaerat vel natus libero dolores eos est, ad quis sunt, tempore provident ducimus ullam, adipisci aperiam nulla voluptatem. Consectetur, eum, eaque?'),
(4, 'consultas/img/user.png', 'nombre', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quaerat vel natus libero dolores eos est, ad quis sunt, tempore provident ducimus ullam, adipisci aperiam nulla voluptatem. Consectetur, eum, eaque?'),
(5, 'consultas/img/user.png', 'nombre', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quaerat vel natus libero dolores eos est, ad quis sunt, tempore provident ducimus ullam, adipisci aperiam nulla voluptatem. Consectetur, eum, eaque?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(10) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `historia` text NOT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `comentario` text,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `fecha`, `titulo`, `imagen`, `historia`, `foto`, `nombre`, `comentario`) VALUES
(1, '2018-05-07', 'que no le pase tambien', 'banner/img/img3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel accusantium obcaecati quod nihil hic nostrum consequatur quo animi voluptatum, ipsam eligendi ullam nemo labore, velit necessitatibus magnam quas praesentium adipisci.', 'consultas/img/user.png', 'nombre', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel accusantium obcaecati quod nihil hic nostrum consequatur quo animi voluptatum, ipsam eligendi ullam nemo labore, velit necessitatibus magnam quas praesentium adipisci.'),
(2, '0000-00-00', 'entrega de proyecto', 'noticias/img/producto2.jpg', 'se hara la entrega de un nuevo producto para revisar el proyecto', 'consultas/img/user.png', NULL, 'se el primero en comentar'),
(3, '0000-00-00', 'hombre lobo en yacuiba', 'noticias/img/IMG-20180524-WA00', 'se ah encontrado en inmediaciones de la plaza principal', 'consultas/img/user.png', NULL, 'se el primero en comentar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `id_permiso` int(10) NOT NULL AUTO_INCREMENT,
  `id_rol` int(10) NOT NULL,
  `m_noticias` varchar(2) NOT NULL,
  `g_reportes` varchar(2) NOT NULL,
  `r_proveedor` varchar(2) NOT NULL,
  `m_inventario` varchar(2) NOT NULL,
  `n_compras` varchar(2) NOT NULL,
  `e_roles` varchar(2) NOT NULL,
  `g_backup` varchar(2) NOT NULL,
  `c_ventas` varchar(2) NOT NULL,
  `e_permisos` varchar(2) NOT NULL,
  `c_backup` varchar(2) NOT NULL,
  `e_comentarios` varchar(2) NOT NULL,
  `r_servicios` varchar(2) NOT NULL,
  PRIMARY KEY (`id_permiso`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE IF NOT EXISTS `promociones` (
  `id_prom` int(11) NOT NULL AUTO_INCREMENT,
  `cod_prom` varchar(20) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` varchar(30) NOT NULL,
  PRIMARY KEY (`id_prom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id_prom`, `cod_prom`, `titulo`, `imagen`, `descripcion`, `fecha`) VALUES
(1, 'liq-097', 'Limpiador de suelos para talle', 'promociones/img/producto1.jpg', 'Dispone de un gran desengrase. De secado rapido. Baja espumacion. No requiere enjuague. Puede ser utilizado en todo tipo de suelos, tales como azulejos, pisos industriales, madera etc. Tambien se utiliza con las maquinas especiales de limpieza de suelo. Se diluye desde 1 hasta 5% en agua.', '07/05/2018-07/06/2018'),
(2, 'liq-098', 'Shampoo de autos ecologico', 'promociones/img/producto2.jpg', 'Powerfull Car Wash,  es un shampoo 100 % ecológico, no requiere agua. Encera al instante. Es de muy fácil aplicación y de larga duración.', '20/06/2018-26/06/2018'),
(3, 'liq-098', 'Shampoo de autos ecologico', 'promociones/img/producto2.jpg', 'Powerfull Car Wash,  es un shampoo 100 % ecológico, no requiere agua. Encera al instante. Es de muy fácil aplicación y de larga duración.', '20/06/2018-26/06/2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(30) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(1, 'administrador'),
(2, 'usuario'),
(3, 'secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `pin` varchar(4) NOT NULL,
  `save_pass` varchar(1) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `user`, `pass`, `pin`, `save_pass`) VALUES
(1, 'diego', '4321', '1234', 's');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
