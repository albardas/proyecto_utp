-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2018 a las 04:11:05
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE registry;
USE registry;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;



--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL auto_increment,
  `name` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  primary key(id)
) ENGINE=InnoDB;

--
-- Estructura de tabla para la tabla `assitans`
--
CREATE TABLE IF NOT EXISTS `assitans` (
  `id` int NOT NULL auto_increment,
  `id_user` int NOT NULL ,
  `name` varchar(50) COLLATE utf8_spanish_ci ,
  `last_name` varchar(50) COLLATE utf8_spanish_ci,
  `email` varchar(50) COLLATE utf8_spanish_ci ,
  `phone` varchar(15) COLLATE utf8_spanish_ci ,
  `gender` varchar(30) COLLATE utf8_spanish_ci ,
  `city` varchar(50) COLLATE utf8_spanish_ci ,
  `date` varchar(20) COLLATE utf8_spanish_ci ,
  `time` varchar(20) COLLATE utf8_spanish_ci ,
  `description` text COLLATE utf8_spanish_ci ,
  primary key(id)
) ENGINE=InnoDB;

--
-- Estructura de tabla para la tabla `special_assitans`
--
CREATE TABLE IF NOT EXISTS `special_assitans` (
  `id` int NOT NULL auto_increment,
  `id_user` int NOT NULL ,
  `name` varchar(50) COLLATE utf8_spanish_ci ,
  `last_name` varchar(50) COLLATE utf8_spanish_ci ,
  `email` varchar(50) COLLATE utf8_spanish_ci ,
  `phone` varchar(15) COLLATE utf8_spanish_ci ,
  `gender` varchar(30) COLLATE utf8_spanish_ci ,
  `city` varchar(50) COLLATE utf8_spanish_ci ,
  `company` varchar(40) COLLATE utf8_spanish_ci ,
  `position` varchar(40) COLLATE utf8_spanish_ci ,
  `status` int COLLATE utf8_spanish_ci ,
  `representative` varchar(40) COLLATE utf8_spanish_ci ,
  `date` varchar(20) COLLATE utf8_spanish_ci ,
  `time` varchar(20) COLLATE utf8_spanish_ci ,
  `description` text COLLATE utf8_spanish_ci ,
  primary key(id)
) ENGINE=InnoDB;

--
-- 	Relaciones entre las tablas
--
alter table assitans add foreign key(id_user) references users(id);
alter table special_assitans add foreign key(id_user) references users(id);

