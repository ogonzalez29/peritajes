-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2016 a las 19:43:44
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `servital_servita3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `document2`
--

CREATE TABLE IF NOT EXISTS `document2` (
`id` int(11) NOT NULL,
  `day` int(2) unsigned zerofill NOT NULL,
  `month` int(2) unsigned zerofill NOT NULL,
  `year` int(2) NOT NULL,
  `firstname1` varchar(32) NOT NULL,
  `lastname1` varchar(32) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `idnumber` varchar(32) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `make` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `model` varchar(32) NOT NULL,
  `license` varchar(32) NOT NULL,
  `mileage` int(6) NOT NULL,
  `m1_el1` int(1) NOT NULL,
  `m1_el2` int(1) NOT NULL,
  `m1_el3` int(1) NOT NULL,
  `m1_el4` int(1) NOT NULL,
  `m1_el5` int(1) NOT NULL,
  `m1_el6` int(1) NOT NULL,
  `m1_el7` int(1) NOT NULL,
  `m1_el8` int(1) NOT NULL,
  `m1_el9` int(1) NOT NULL,
  `m1_el10` int(1) NOT NULL,
  `m1_el11` int(1) NOT NULL,
  `m1_el12` int(1) NOT NULL,
  `m1_el13` int(1) NOT NULL,
  `m1_el14` int(1) NOT NULL,
  `m1_el15` int(1) NOT NULL,
  `m1_el16` int(1) NOT NULL,
  `m1_el17` int(1) NOT NULL,
  `m1_el18` int(1) NOT NULL,
  `m1_el19` int(1) NOT NULL,
  `m1_el20` int(1) NOT NULL,
  `m1_el21` int(1) NOT NULL,
  `m1_el22` int(1) NOT NULL,
  `m1_el23` int(1) NOT NULL,
  `m1_el24` int(1) NOT NULL,
  `m1_el25` int(1) NOT NULL,
  `m1_el26` int(1) NOT NULL,
  `m1_el27` int(1) NOT NULL,
  `m2_el1` int(1) NOT NULL,
  `m2_el2` int(1) NOT NULL,
  `m2_el3` int(1) NOT NULL,
  `m2_el4` int(1) NOT NULL,
  `m2_el5` int(1) NOT NULL,
  `m2_el6` int(1) NOT NULL,
  `m2_el7` int(1) NOT NULL,
  `m2_el8` int(1) NOT NULL,
  `m2_el9` int(1) NOT NULL,
  `m2_el10` int(1) NOT NULL,
  `m2_el11` int(1) NOT NULL,
  `m2_el12` int(1) NOT NULL,
  `m2_el13` int(1) NOT NULL,
  `m2_el14` int(1) NOT NULL,
  `m2_el15` int(1) NOT NULL,
  `m2_el16` int(1) NOT NULL,
  `m2_el17` int(1) NOT NULL,
  `m2_el18` int(1) NOT NULL,
  `m2_el19` int(1) NOT NULL,
  `m2_el20` int(1) NOT NULL,
  `m2_el21` int(1) NOT NULL,
  `m2_el22` int(1) NOT NULL,
  `m3_el1` int(1) NOT NULL,
  `m3_el2` int(1) NOT NULL,
  `m3_el3` int(1) NOT NULL,
  `m3_el4` int(1) NOT NULL,
  `m3_el5` int(1) NOT NULL,
  `m3_el6` int(1) NOT NULL,
  `m3_el7` int(1) NOT NULL,
  `m3_el8` int(1) NOT NULL,
  `m3_el9` int(1) NOT NULL,
  `m3_el10` int(1) NOT NULL,
  `m3_el11` int(1) NOT NULL,
  `m3_el12` int(1) NOT NULL,
  `m3_el13` int(1) NOT NULL,
  `m4_el1` int(1) NOT NULL,
  `m4_el2` int(1) NOT NULL,
  `m4_el3` int(1) NOT NULL,
  `m4_el4` int(1) NOT NULL,
  `m4_el5` int(1) NOT NULL,
  `m4_el6` int(1) NOT NULL,
  `m4_el7` int(1) NOT NULL,
  `m4_el8` int(1) NOT NULL,
  `m4_el9` int(1) NOT NULL,
  `m4_el10` int(1) NOT NULL,
  `m4_el11` int(1) NOT NULL,
  `m4_el12` int(1) NOT NULL,
  `m4_el13` int(1) NOT NULL,
  `m4_el14` int(1) NOT NULL,
  `m4_el15` int(1) NOT NULL,
  `m5_el1` int(1) NOT NULL,
  `m5_el2` int(1) NOT NULL,
  `m5_el3` int(1) NOT NULL,
  `m5_el4` int(1) NOT NULL,
  `m5_el5` int(1) NOT NULL,
  `m5_el6` int(1) NOT NULL,
  `m5_el7` int(1) NOT NULL,
  `m5_el8` int(1) NOT NULL,
  `m5_el9` int(1) NOT NULL,
  `m6_el1` int(1) NOT NULL,
  `m6_el2` int(1) NOT NULL,
  `m6_el3` int(1) NOT NULL,
  `m6_el4` int(1) NOT NULL,
  `m6_el5` int(1) NOT NULL,
  `m6_el6` int(1) NOT NULL,
  `m6_el7` int(1) NOT NULL,
  `m6_el8` int(1) NOT NULL,
  `m6_el9` int(1) NOT NULL,
  `m6_el10` int(1) NOT NULL,
  `m6_el11` int(1) NOT NULL,
  `m6_el12` int(1) NOT NULL,
  `m6_el13` int(1) NOT NULL,
  `m6_el14` int(1) NOT NULL,
  `m6_el15` int(1) NOT NULL,
  `m6_el16` int(1) NOT NULL,
  `m6_el17` int(1) NOT NULL,
  `m6_el18` int(1) NOT NULL,
  `m6_el19` int(1) NOT NULL,
  `m6_el20` int(1) NOT NULL,
  `m6_el21` int(1) NOT NULL,
  `m6_el22` int(1) NOT NULL,
  `m6_el23` int(1) NOT NULL,
  `m6_el24` int(1) NOT NULL,
  `m7_el1` int(1) NOT NULL,
  `m7_el2` int(1) NOT NULL,
  `m7_el3` int(1) NOT NULL,
  `m7_el4` int(1) NOT NULL,
  `m7_el5` int(1) NOT NULL,
  `m7_el6` int(1) NOT NULL,
  `m7_el7` int(1) NOT NULL,
  `m7_el8` int(1) NOT NULL,
  `m7_el9` int(1) NOT NULL,
  `m7_el10` int(1) NOT NULL,
  `m8_el1` int(1) NOT NULL,
  `m8_el2` int(1) NOT NULL,
  `m8_el3` int(1) NOT NULL,
  `m8_el4` int(1) NOT NULL,
  `m8_el5` int(1) NOT NULL,
  `comment1` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `comment2` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `comment3` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `comment4` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `comment5` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `comment6` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `comment7` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `comment8` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `signature` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sig_hash` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(46) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `document2`
--
ALTER TABLE `document2`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `document2`
--
ALTER TABLE `document2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
