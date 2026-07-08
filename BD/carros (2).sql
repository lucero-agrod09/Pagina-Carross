-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2026 a las 09:11:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

CREATE TABLE `carro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `categoria` enum('producto','venta') NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen_nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carro`
--

INSERT INTO `carro` (`id`, `nombre`, `categoria`, `precio`, `descripcion`, `imagen_nombre`) VALUES
(12, 'Luces LED', 'producto', 300.00, 'Las mejores luces led para autos', '1769452373_imagen1.jpg'),
(13, 'Llanta para carro', 'producto', 600.00, 'Las mejores llantas', '1769452801_imagen2.jpg'),
(14, 'Espejo retrovisor', 'producto', 400.00, 'Los mejores espejos para autos', '1769453087_imagen3.jpg'),
(15, 'Volkswagen Jetta', 'venta', 21345.00, 'Los motores turbocargados (TSI) están diseñados para obtener altos niveles de aceleración y potencia con bajo consumo de combustible.', '1769453345_carro1.jpg'),
(16, 'SUV Kia', 'venta', 23400.00, 'Inspirada en la filosofía de diseño de Kia Opposites United, Seltos integra un nuevo elemento de diseño la iluminación Signature Star-map, que, en conjunto con la parrilla y los faros LED, maximizan el carácter audaz y futurista de esta SUV', '1769453666_carro2.jpg'),
(17, 'H6 Julietta', 'venta', 34000.00, 'El H6 Julietta es unaconcepto de hiperdeportivo creado por el diseñador Lee Rosario, con sede en Orlando. Presentado alrededor de 2020-2021, este diseño CGI destaca por sus líneas aerodinámicas agresivas, a menudo comparadas con una mezcla de Ferrari, Alpine A110 y AMG.', '1769453878_carro3.jpg'),
(18, 'SUV Volkswagen Tiguan', 'venta', 600000.00, 'En los momentos que compartes en familia existen intercambios de miradas de amor, risas que graban un recuerdo inolvidable, emoción por ir juntos a un mismo destino y más. Son instantes que tienen algo especial y no logras explicar, solo sabes que quieres más. Así que te vamos a contar un secreto… con Nuevo Tiguan 2026, esos momentos especiales se multiplican, convirtiendo cada viaje en una aventura inolvidable.', '1769454092_carro4.jpg'),
(20, 'Toyota HILUX', 'venta', 496000.00, 'La Toyota Hilux es una pickup de tamaño mediano reconocida mundialmente por su alta durabilidad, confiabilidad y robustez, diseñada para el trabajo duro y terrenos difíciles.. Disponible en versiones a gasolina (2.7L) y diésel (2.4L/2.8L turbo), destaca por su capacidad de carga (820 kg - 1220 kg), tracción 4x4, y un enfoque funcional, duradero y, en las versiones más modernas, tecnológicas. ', '1769583232_toyota1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_per` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido_pa` varchar(40) NOT NULL,
  `Apellido_ma` varchar(40) DEFAULT NULL,
  `Usuario` varchar(30) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Telefono` varchar(14) DEFAULT NULL,
  `Contraseña` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_per`, `Nombre`, `Apellido_pa`, `Apellido_ma`, `Usuario`, `Correo`, `Direccion`, `Telefono`, `Contraseña`) VALUES
(1, 'alondra', 'garcia', 'rodriguez', 'alondra', 'alo@gmail.com', 's/n', '9191321324', '1234'),
(2, 'lucero', 'gar', 'rod', 'lucero', 'lu@gmail.com', 's/n', '91913213221', '4321'),
(3, 'luci', 'rodriguez', 'alvarez', 'luci', 'luci@gmail.com', 's/n', '9191321423', 'luci'),
(4, 'juan', 'sanchez', 'juarez', 'juan', 'juan@gmail.com', '', '9191342213', 'juan123'),
(5, 'andrea', 'sanchez', 'juarez', 'andi', 'andi@gmail.com', '', '9191342214', '4321');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_per`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carro`
--
ALTER TABLE `carro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
