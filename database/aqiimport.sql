-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 30 nov. 2017 à 10:54
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `aqi`
--

-- --------------------------------------------------------

--
-- Structure de la table `aqi`
--

CREATE TABLE `aqi` (
  `aqiId` int(11) NOT NULL,
  `aqiStationId` int(50) NOT NULL,
  `aqiUserId` int(50) NOT NULL,
  `aqiValue` float NOT NULL,
  `aqiTime` varchar(50) NOT NULL,
  `aqiLat` float NOT NULL,
  `aqiLng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `place`
--

CREATE TABLE `place` (
  `placeId` int(50) NOT NULL,
  `placeName` varchar(100) NOT NULL,
  `placeUserId` int(50) NOT NULL,
  `placeLat` float NOT NULL,
  `placeLng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `station`
--

CREATE TABLE `station` (
  `stationId` int(50) NOT NULL,
  `stationIndex` int(10) NOT NULL,
  `stationName` varchar(50) NOT NULL,
  `stationCountry` varchar(50) NOT NULL,
  `stationLat` float NOT NULL,
  `stationLng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `userId` int(10) NOT NULL,
  `userSignature` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `aqi`
--
ALTER TABLE `aqi`
  ADD KEY `aqiStationId` (`aqiStationId`),
  ADD KEY `aqiUserId` (`aqiUserId`);

--
-- Index pour la table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`placeId`),
  ADD UNIQUE KEY `placeLat` (`placeLat`),
  ADD KEY `placeUserId` (`placeUserId`);

--
-- Index pour la table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`stationId`),
  ADD UNIQUE KEY `stationLat` (`stationLat`),
  ADD UNIQUE KEY `stationIndex` (`stationIndex`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userSignature` (`userSignature`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `aqi`
--
ALTER TABLE `aqi`
  ADD CONSTRAINT `aqi_ibfk_1` FOREIGN KEY (`aqiStationId`) REFERENCES `station` (`stationId`),
  ADD CONSTRAINT `aqi_ibfk_2` FOREIGN KEY (`aqiUserId`) REFERENCES `user` (`userId`);

--
-- Contraintes pour la table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `place_ibfk_1` FOREIGN KEY (`placeUserId`) REFERENCES `user` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
