-- phpMyAdmin SQL Dump
-- version 4.5.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-07-2016 a las 04:30:13
-- Versión del servidor: 10.1.11-MariaDB-log
-- Versión de PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autobuses`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autobuses`
--

CREATE TABLE `autobuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `numero` int(11) NOT NULL,
  `marca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serial` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `matricula` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `autobuses`
--

INSERT INTO `autobuses` (`id`, `numero`, `marca`, `modelo`, `serial`, `matricula`, `created_at`, `updated_at`) VALUES
(1, 1, 'mercedes benz', 'modelo', 'serial-1', 'abcd123', '2016-04-30 20:23:07', '2016-04-30 20:23:07'),
(2, 2, 'otra', 'otro', 'serial-2', 'qwe12300', '2016-04-30 21:32:12', '2016-04-30 21:32:12'),
(4, 3, 'Encava', '2 puertas', 'puertas2', 'asdqwe2', '2016-04-30 22:15:34', '2016-04-30 22:15:34'),
(5, 4, 'marca', 'model', 'ser', 'mat123', '2016-04-30 22:17:36', '2016-04-30 22:17:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto_dueno`
--

CREATE TABLE `auto_dueno` (
  `id` int(10) UNSIGNED NOT NULL,
  `auto_id` int(10) UNSIGNED NOT NULL,
  `persona_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auto_dueno`
--

INSERT INTO `auto_dueno` (`id`, `auto_id`, `persona_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2016-04-30 20:23:08', '2016-04-30 20:23:08'),
(2, 2, 3, '2016-04-30 21:32:12', '2016-04-30 21:32:12'),
(3, 4, 1, '2016-04-30 22:15:34', '2016-04-30 22:15:34'),
(4, 5, 3, '2016-04-30 22:17:36', '2016-04-30 22:17:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto_responsable`
--

CREATE TABLE `auto_responsable` (
  `id` int(10) UNSIGNED NOT NULL,
  `auto_id` int(10) UNSIGNED NOT NULL,
  `persona_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auto_responsable`
--

INSERT INTO `auto_responsable` (`id`, `auto_id`, `persona_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2016-04-30 20:23:08', '2016-04-30 20:23:08'),
(2, 2, 1, '2016-04-30 21:32:13', '2016-04-30 21:32:13'),
(3, 4, 3, '2016-04-30 22:15:34', '2016-04-30 22:15:34'),
(4, 5, 1, '2016-04-30 22:17:36', '2016-04-30 22:17:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto_ruta`
--

CREATE TABLE `auto_ruta` (
  `id` int(10) UNSIGNED NOT NULL,
  `auto_id` int(10) UNSIGNED NOT NULL,
  `ruta_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auto_ruta`
--

INSERT INTO `auto_ruta` (`id`, `auto_id`, `ruta_id`, `created_at`, `updated_at`) VALUES
(6, 4, 3, '2016-05-16 23:22:07', '2016-07-03 06:18:49'),
(7, 2, 6, '2016-06-30 09:57:59', '2016-07-03 06:18:39'),
(8, 1, 6, '2016-07-03 06:24:42', '2016-07-03 06:24:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'San Juan de los Morros', '2016-05-16 18:50:20', '2016-05-16 18:55:43'),
(2, 'Maracay', '2016-05-16 20:57:00', '2016-05-16 20:57:00'),
(3, 'Cagua', '2016-05-16 21:55:33', '2016-05-16 21:55:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_04_23_181327_create_perfiles_table', 1),
('2016_04_23_181446_create_users_table', 1),
('2016_04_23_181824_create_oficinas_table', 1),
('2016_04_23_210803_create_personas_table', 1),
('2016_04_23_211135_create_autobuses_table', 1),
('2016_04_23_211419_create_auto_dueno_table', 1),
('2016_04_23_211426_create_auto_responsable_table', 1),
('2016_04_24_211426_create_localidades_table', 2),
('2016_05_16_140456_create_rutas_table', 2),
('2016_05_16_140458_create_rutas_table', 3),
('2016_05_16_175045_create_auto_ruta_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficinas`
--

CREATE TABLE `oficinas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `oficinas`
--

INSERT INTO `oficinas` (`id`, `nombre`, `direccion`, `telefono`, `created_at`, `updated_at`) VALUES
(1, 'Oficina primera', 'San Juan', '041212345678', '2016-04-30 07:57:50', '2016-06-30 11:18:58'),
(2, 'central', 'San Juan Tambien', '04124567890', '2016-04-30 08:15:24', '2016-04-30 08:15:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', '2016-04-24 02:24:50', '2016-04-24 02:24:50'),
(4, 'Secretario (a)', '2016-04-30 08:54:24', '2016-05-16 23:26:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(10) UNSIGNED NOT NULL,
  `cedula` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `oficina_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `cedula`, `nombres`, `apellidos`, `telefono`, `direccion`, `fecha_nacimiento`, `oficina_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '12345678', 'admin', 'admin', '0987654321', 'administracion', '2000-09-16', 1, 1, '2016-04-30 10:29:46', '2016-04-30 10:29:46'),
(3, '321456987', 'qwerty', 'qwewqeas', '09876654543', 'San juan city', '0000-00-00', 2, 9, '2016-04-30 11:09:16', '2016-04-30 11:09:16'),
(4, '19132933', 'luis', 'garcia', '09876654543', 'cagua no san juan', '1990-11-21', 2, 10, '2016-05-04 08:58:38', '2016-05-04 08:58:38'),
(5, '15487984', 'asd', 'asd', '04164567890', 'asd calle asd sector el teclado', '1990-10-10', 2, 11, '2016-05-16 23:28:45', '2016-05-16 23:28:45'),
(6, '1231231', 'qweqweqwe', 'qweqweqwe', 'qweqwe', 'qweqwewqe', '0000-00-00', 2, 12, '2016-06-13 02:56:58', '2016-06-13 02:56:58'),
(7, '19132033', 'arterash', 'garcia', '09876654543', 'cagua cagua cagua', '0000-00-00', 2, 13, '2016-06-13 03:18:13', '2016-06-13 03:18:13'),
(8, '12234234', 'esem', 'ismo', '02441234567', 'qwe12qwe es la clave', '1992-01-28', 2, 14, '2016-06-30 11:12:37', '2016-06-30 11:12:37'),
(9, '20012012', 'otrom', 'asquepruebo', '02441234562', 'asdqweasd es la clave', '1991-10-21', 1, 15, '2016-06-30 11:17:44', '2016-06-30 11:17:44'),
(10, '21548751', 'secre', 'tario', '02445874163', 'secretario', '2016-06-28', 2, 16, '2016-07-03 05:29:29', '2016-07-03 05:29:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `nombre`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Maracay - San Juan de los Morros', 1, '2016-05-16 21:10:29', '2016-07-03 08:29:23'),
(3, 'San Juan de los Morros - Maracay', 0, '2016-05-16 21:47:35', '2016-05-16 21:47:35'),
(4, 'Cagua - San Juan de los Morros', 0, '2016-05-16 21:55:40', '2016-05-16 21:55:40'),
(6, 'Cagua - Maracay', 1, '2016-05-16 22:15:54', '2016-07-03 08:29:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `perfil_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `perfil_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '$2y$10$r0tXeBf9ep.NVXkG6x0iSO/rPittMx6R9OY8hXZkQlhhjkZgpttky', 1, 'CBize50himFwqhGbvk23YVeuf4OCJmMCC249BpEY8adIJo6VBQgdjH8GmqMd', '2016-04-24 02:26:45', '2016-07-03 06:42:17'),
(9, 'qwe@qwe.com', '$2y$10$d9U2SnSXcvFt2/ZMuik.4eAY9Ki0IFns7Tx7/UVNfRYqj8jQ/WD6q', 4, NULL, '2016-04-30 11:09:16', '2016-04-30 11:09:16'),
(10, 'sh.raul.jgb@gmail.com', '$2y$10$u4BHwnmw4mca.hnbJf1dvOnaPnrdjbKQXSOLSFuWqPhBU4DEjVs46', 4, '7wmh2TWZR9JJ3jgvkh2c8GRR8v6m5giEs9nZCIz2djQpgRnMKuGRZPdCrk7r', '2016-05-04 08:58:37', '2016-05-04 09:18:57'),
(11, 'asd@asd.com', '$2y$10$eDly/70sslbow6a9EVMAfO1xFn0PrafvP8bnIIYEm90ZZrZOaei0e', 4, '3SPipJdEMA7Qr8ZvLmXAFs0ZcOmUXoeahVcofBrYX05N7LLCKqH5RgPbAVcJ', '2016-05-16 23:28:45', '2016-05-16 23:33:11'),
(12, 'qweqew@qwe.qwe', '$2y$10$Qwa7MIkqdhf0x6JWYrK07.KmDVneTOEeuvRRRzYZA46DXGFOTHeEm', 1, NULL, '2016-06-13 02:56:58', '2016-06-13 02:56:58'),
(13, 'arterash@gmail.com', '$2y$10$HQaMacvsxfLwlG31ch.CJelJH569cNvZgZAXcNC3e8DA0o0xC61Lm', 4, 'ydTG0Ff73cnBsBHjGhEpwuHFcR1OiLIS3OmfssNl6hoeJq4Gg3K88yrdcSTY', '2016-06-13 03:18:13', '2016-06-13 03:41:57'),
(14, 'qwe12@qwe.com', '$2y$10$b4QbkLzZesj9eFrhAOAoNuHmay7IkQrbH7RAH8UZnpgmmdL.zmPqC', 4, NULL, '2016-06-30 11:12:37', '2016-06-30 11:12:37'),
(15, 'asd012@qwe.com', '$2y$10$A5PhMui9YFEdIaL2HCKEee14sM3MduTwkp6Gl6cwyOYN1sOAiJace', 4, NULL, '2016-06-30 11:17:44', '2016-06-30 11:17:44'),
(16, 'secretario@secretario.com', '$2y$10$oKT1uzzWeLLcNX4raYnZs.KeJBx3zu.HWeSKKMHByxcCvjRKOAqRm', 4, 'DXZvNB3gDXRyay6vW3hfRO032h3MQOxZ9MhvSTTzmav1Z3alff7Se80D6mje', '2016-07-03 05:29:29', '2016-07-03 06:43:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autobuses`
--
ALTER TABLE `autobuses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `auto_dueno`
--
ALTER TABLE `auto_dueno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auto_dueno_autobus_id_foreign` (`auto_id`),
  ADD KEY `auto_dueno_persona_id_foreign` (`persona_id`);

--
-- Indices de la tabla `auto_responsable`
--
ALTER TABLE `auto_responsable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auto_responsable_autobus_id_foreign` (`auto_id`),
  ADD KEY `auto_responsable_persona_id_foreign` (`persona_id`);

--
-- Indices de la tabla `auto_ruta`
--
ALTER TABLE `auto_ruta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auto_ruta_auto_id_foreign` (`auto_id`),
  ADD KEY `auto_ruta_ruta_id_foreign` (`ruta_id`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oficinas`
--
ALTER TABLE `oficinas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personas_oficina_id_foreign` (`oficina_id`),
  ADD KEY `personas_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_perfil_id_foreign` (`perfil_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autobuses`
--
ALTER TABLE `autobuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `auto_dueno`
--
ALTER TABLE `auto_dueno`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `auto_responsable`
--
ALTER TABLE `auto_responsable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `auto_ruta`
--
ALTER TABLE `auto_ruta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `oficinas`
--
ALTER TABLE `oficinas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auto_dueno`
--
ALTER TABLE `auto_dueno`
  ADD CONSTRAINT `auto_dueno_autobus_id_foreign` FOREIGN KEY (`auto_id`) REFERENCES `autobuses` (`id`),
  ADD CONSTRAINT `auto_dueno_persona_id_foreign` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`);

--
-- Filtros para la tabla `auto_responsable`
--
ALTER TABLE `auto_responsable`
  ADD CONSTRAINT `auto_responsable_autobus_id_foreign` FOREIGN KEY (`auto_id`) REFERENCES `autobuses` (`id`),
  ADD CONSTRAINT `auto_responsable_persona_id_foreign` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`);

--
-- Filtros para la tabla `auto_ruta`
--
ALTER TABLE `auto_ruta`
  ADD CONSTRAINT `auto_ruta_auto_id_foreign` FOREIGN KEY (`auto_id`) REFERENCES `autobuses` (`id`),
  ADD CONSTRAINT `auto_ruta_ruta_id_foreign` FOREIGN KEY (`ruta_id`) REFERENCES `rutas` (`id`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_oficina_id_foreign` FOREIGN KEY (`oficina_id`) REFERENCES `oficinas` (`id`),
  ADD CONSTRAINT `personas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_perfil_id_foreign` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
