-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2022 a las 01:31:03
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agecopro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

CREATE TABLE `agentes` (
  `id` int(11) NOT NULL,
  `email_empresa` varchar(40) NOT NULL,
  `pass_empresa` varchar(8) NOT NULL,
  `nombre_empresa` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agentes`
--

INSERT INTO `agentes` (`id`, `email_empresa`, `pass_empresa`, `nombre_empresa`) VALUES
(1, 'triki@trakes.com', '12345678', 'Triki Trakes Inc.'),
(4, 'coca@cola.com.mx', '123', 'cocacola'),
(5, 'amazon@amazon.com', '123', 'amazon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre_empresa` varchar(40) NOT NULL,
  `email_empresa` varchar(40) NOT NULL,
  `celular_empresa` varchar(10) NOT NULL,
  `comentarios_empresa` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre_empresa`, `email_empresa`, `celular_empresa`, `comentarios_empresa`) VALUES
(1, 'Triki Trakes', 'triki@trakes.com', '9992515714', 'Ponle chispa a tu vida con nuestros productos.'),
(2, 'cocacola', 'coca@cola.com.mx', '9991195233', 'Empresa lider en envasado de refrescos'),
(3, 'Amazon', 'amazon@amazon.com', '9993334334', 'Cuidando tus pertenencias como si fueran nuestras.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `fotoperfil` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `usuario`, `fotoperfil`) VALUES
(49, 'Omar', 'imgperfil/omarcito.jpg'),
(50, 'fermedi230@gmail.com', 'imgperfil/242348756_6323997070974455_2303085910441048568_n.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `nombreusuario` varchar(40) NOT NULL,
  `apellidousuario` varchar(40) NOT NULL,
  `correousuario` varchar(30) NOT NULL,
  `correo2usuario` varchar(30) NOT NULL,
  `numerousuario` varchar(10) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`id`, `usuario`, `nombreusuario`, `apellidousuario`, `correousuario`, `correo2usuario`, `numerousuario`, `facebook`, `insta`, `twitter`) VALUES
(16, 'fermedi230@gmail.com', 'Carmen Fernanda', 'Medina Andrade', 'fermedi230@gmail.com', 'fechi11@hotmail.com', '9992515714', 'https://www.facebook.com/Fernanda230.Medina/', 'https://www.facebook.com/Fernanda230.Medina/', 'https://www.facebook.com/Fernanda230.Medina/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `id` int(10) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`id`, `usuario`, `logo`) VALUES
(2, 'triki@trakes.com', 'imglogos/hola.jpg'),
(3, 'coca@cola.com.mx', 'imglogos/cocacola-logo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `universidad` varchar(60) NOT NULL,
  `residencia` varchar(60) NOT NULL,
  `area` varchar(30) NOT NULL,
  `comentario` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `usuario`, `universidad`, `residencia`, `area`, `comentario`) VALUES
(18, 'fermedi230@gmail.com', 'tnm', 'merida', 'Web', 'Soy freelancer desde hace 3 años.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio`
--

CREATE TABLE `portafolio` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `nombredoc` varchar(150) NOT NULL,
  `documento` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `portafolio`
--

INSERT INTO `portafolio` (`id`, `usuario`, `nombredoc`, `documento`) VALUES
(32, 'Omar', '4.1 -8SI- Estado del Arte-Equipo3.pdf', 'portafolios/4.1 -8SI- Estado del Arte-Equipo3.pdf'),
(33, 'Omar', 'Tarea 3. Resumen. 4.5 Resolución de problemas.pdf', 'portafolios/Tarea 3. Resumen. 4.5 Resolución de problemas.pdf'),
(36, 'fermedi230@gmail.com', 'fondo_popup.jpg', 'portafolios/fondo_popup.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `nombre_proyecto` varchar(50) NOT NULL,
  `responsable_proyecto` varchar(50) NOT NULL,
  `area` varchar(20) NOT NULL,
  `comentarios_proyecto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `usuario`, `nombre_proyecto`, `responsable_proyecto`, `area`, `comentarios_proyecto`) VALUES
(9, 'coca@cola.com.mx', 'sadasdvas', 'asdvasdv', 'Web', ''),
(10, 'coca@cola.com.mx', 'x', 'fdzbd', 'Telecomunicaciones', 'dfzbdfbdfbb'),
(11, 'triki@trakes.com', 'Instalación windows', 'Ing. Ortiz Camacho', 'Soporte', 'Necesitamos un Ing. Sistemas que nos ayude con los aspectos básicos de computación. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_empresa`
--

CREATE TABLE `solicitudes_empresa` (
  `id` int(11) NOT NULL,
  `mensaje` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitudes_empresa`
--

INSERT INTO `solicitudes_empresa` (`id`, `mensaje`) VALUES
(1, 'I need it.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `pass`) VALUES
(36, 'fermedi230@gmail.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes_empresa`
--
ALTER TABLE `solicitudes_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agentes`
--
ALTER TABLE `agentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `solicitudes_empresa`
--
ALTER TABLE `solicitudes_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
