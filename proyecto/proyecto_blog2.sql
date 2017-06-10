-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2017 a las 13:30:26
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
CREATE DATABASE IF NOT EXISTS "proyecto_blog3";
--
-- Base de datos: `proyecto_blog2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(5) NOT NULL,
  `valor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `valor`) VALUES
(1, 'Nacional'),
(2, 'Internacional'),
(3, 'Deportes'),
(4, 'Tecnologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentario` int(11) NOT NULL,
  `idNoticia` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `fCreacionC` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `idNoticia` int(11) NOT NULL,
  `titular` varchar(255) NOT NULL,
  `cuerpo` text NOT NULL,
  `fCreacion` date NOT NULL,
  `fPublicacion` date NOT NULL,
  `fModificacion` date DEFAULT NULL,
  `idUsuario` int(11) NOT NULL,
  `idCategoria` int(5) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`idNoticia`, `titular`, `cuerpo`, `fCreacion`, `fPublicacion`, `fModificacion`, `idUsuario`, `idCategoria`, `image`) VALUES
(10, 'El sprint de Keylor Navas', 'Keylor Navas se santiguÃ³ al entrar al vestuario el domingo por la noche, antes de recibir el abrazo de todos sus compaÃ±eros. EncontrÃ³ calor tras una noche de rayos y truenos sobre el cÃ©sped del BernabÃ©u. El mismo pÃºblico que le renovÃ³ en la porterÃ­a hace un aÃ±o, frente al Betis le bajÃ³ el pulgar con saÃ±a despuÃ©s del autogol que fabricÃ³ con un chute suave de Sanabria, al comienzo del encuentro. A esas alturas (20 minutos) ya habÃ­a dejado una salida alocada que pudo costarle la roja. Ã‰l, hombre de extremos, acabÃ³ salvando al Real Madrid en el Ãºltimo minuto, con una palomita que valÃ­a el triunfo y el liderato. Â¿LimpiÃ³ esa acciÃ³n su pifia inicial? En el lunes de resaca, ambas jugadas se repetÃ­an en bucle en los resÃºmenes de la jornada. LogrÃ³ quitar algo de foco (y no es sencillo) a Sergio Ramos, el futbolista mÃ¡s encendido de la plantilla.\"Somos un equipo muy unido y todos me apoyan bastante\", se podÃ­a leer en el Ãºltimo mensaje que colgÃ³ en sus redes sociales. Zinedine Zidane y sus futbolistas defendieron con afÃ¡n a un tipo muy querido y al que detectan en peligro. Combina buen humor, mÃºsica alegre en el mÃ³vil, discurso animoso y un punto de fiereza. Tiene dÃ­as con el cartel de no molestar colgado al pecho. El pasado aÃ±o, no le gustÃ³ el guion de un documental que una importante cadena norteamericana estaba realizando sobre Ã©l y vetÃ³ la cinta. DecidiÃ³ no participar. Pendiente de su familia, icono de Costa Rica, el mÃ¡s religioso de Valdebebas... Cae bien y, al menos hasta ahora, mantenÃ­a una llama milagrera que a todos tranquilizaba. AsÃ­ creciÃ³ la pasada temporada, superada la competencia con Iker Casillas y olvidados los incidentes del 31 de agosto de 2015, cuando estuvo a punto de salir del Madrid camino de Manchester. Aquel fichaje, el de David de Gea, se pudo retomar en junio de 2016, pero la directiva, sensible a la voz de la masa social y a la opiniÃ³n del vestuario, descartÃ³ la operaciÃ³n. Mejor seguir con Keylor. Se lo habÃ­a ganado.', '2017-03-14', '2017-03-14', '2017-05-28', 17, 2, 'imagenes/keylor-navas-facebook.jpg'),
(11, 'Zapatero cree que DÃ­az â€œreÃºne todas las condicionesâ€ para liderar el PSOE', 'A juicio de JosÃ© Luis RodrÃ­guez Zapatero, la presidenta de AndalucÃ­a reÃºne â€œtodas las condiciones para el liderazgo polÃ­ticoâ€. El expresidente del Gobierno ha reiterado una vez mÃ¡s en pÃºblico su respaldo a la secretaria general de la principal federaciÃ³n socialista, que el 26 de marzo presentarÃ¡ su candidatura a las primarias del PSOE.<br /><br />\r\nEl respaldo de Zapatero, explicitado en un acto en el CÃ­rculo de Bellas Artes dentro de los trabajos previos para la elaboraciÃ³n de la ponencia marco que los socialistas debatirÃ¡n y aprobarÃ¡n en el 39Âº Congreso del 17 y 18 de junio, es absoluto. â€œCada uno tiene la capacidad que tiene de trabajarâ€, sostuvo Zapatero sobre la posibilidad de que DÃ­az pudiera compatibilizar la secretarÃ­a general del PSOE con el Ejecutivo autonÃ³mico. El dirigente, que ve capacitada a DÃ­az, se puso de ejemplo y recordÃ³ que Ã©l mismo, el Ãºltimo presidente socialista de EspaÃ±a, compaginÃ³ durante sus dos legislaturas en La Moncloa (2004-2011) la mÃ¡xima responsabilidad en Ferraz, que desempeÃ±o de 2000 a 2012.', '2017-03-14', '2017-03-14', '2017-05-07', 17, 1, 'imagenes/zp.jpg'),
(12, 'Fillon, imputado por desvÃ­o de fondos pÃºblicos', 'FranÃ§ois Fillon, el candidato de la derecha a las elecciones presidenciales francesas, fue imputado este martes por desvÃ­o de fondos pÃºblicos y apropiaciÃ³n indebida de bienes sociales. Los jueces han considerado que existen indicios â€œgraves y concordantesâ€ de que el candidato remunerÃ³ a su esposa, Penelope Fillon, como asistente parlamentaria, sin demostrar haber trabajado a cambio del salario.', '2017-03-14', '2017-03-14', NULL, 17, 2, 'imagenes/fillon.jpg'),
(13, 'La empresa mexicana que quiere participar en el muro de Trump:â€œNo es para traicionar a nadieâ€', 'Theodore Atalla, que tiene una pequeÃ±a empresa de iluminaciÃ³n industrial en Puebla (MÃ©xico), no solo apoya el muro que quiere levantar Donald Trump en la frontera mexicana sino que ha pedido participar en la construcciÃ³n. Ecovelocity es la Ãºnica compaÃ±Ã­a domiciliada en MÃ©xico entre las mÃ¡s de 600 que se han registrado en el proceso de adjudicaciÃ³n de la barrera, un sÃ­mbolo electoral para Trump pero una humillaciÃ³n para el paÃ­s vecino.<br />\r\n\"Vimos que estaban empezado con eso y pensamos que Ã­bamos a poder apoyar algo en MÃ©xico\", dice en una entrevista telefÃ³nica Atalla, de 58 aÃ±os.<br />\r\nNacido en Egipto, viviÃ³ en Estados Unidos y lleva 22 aÃ±os en MÃ©xico. Tiene nacionalidad egipcia y estadounidense. Tiene la residencia permanente en MÃ©xico y estÃ¡ tramitando la ciudadanÃ­a. Se ve el resto de su vida en el paÃ­s y no considera que su interÃ©s por el muro fronterizo sea una afrenta. Lo percibe como una vÃ­a para \"mejorar\" a MÃ©xico. \"No es para traicionar a nadie. Es mÃ¡s, por si nosotros en MÃ©xico necesitamos algo, que se comuniquen con nosotros y los apoyamos\", esgrime.', '2017-03-14', '2017-03-14', '2017-05-03', 17, 2, 'imagenes/muro.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `tipo` enum('admin','comun') NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `fecha_registro` date NOT NULL,
  `tema` varchar(255) DEFAULT 'Predeterminado'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `tipo`, `password`, `email`, `nombre_usuario`, `fecha_registro`, `tema`) VALUES
(17, 'admin', '7ed1ca45414f40612d0c469e24453e40', 'sergio1345@gmail.com', 'admin', '2017-03-07', 'Predeterminado'),
(19, 'comun', 'd3372905a13602b51a97ebdd477ab2c9', 'alvarito@roto2.com', 'alvaro', '2017-03-07', 'Predeterminado'),
(20, 'admin', '7ed1ca45414f40612d0c469e24453e40', 'juan@diego.com', 'juandiego', '2017-05-28', 'Predeterminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoraciones`
--

CREATE TABLE `valoraciones` (
  `idValoracion` int(11) NOT NULL,
  `idNoticia` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nota` int(2) DEFAULT NULL,
  `fValoracion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `idNoticia` (`idNoticia`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idNoticia`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD PRIMARY KEY (`idValoracion`),
  ADD KEY `idNoticia` (`idNoticia`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `idValoracion` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`idNoticia`) REFERENCES `noticia` (`idNoticia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `noticia_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD CONSTRAINT `valoraciones_ibfk_1` FOREIGN KEY (`idNoticia`) REFERENCES `noticia` (`idNoticia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valoraciones_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
