-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 07 avr. 2022 à 13:19
-- Version du serveur :  8.0.28
-- Version de PHP : 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `omarhaya_chrikeyc_devsoltech_communication`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `ID_contact` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `tb_admin`
--

INSERT INTO `tb_admin` (`ID_contact`, `username`, `Email`, `password`) VALUES
(5, 'elcadi', 'elcadi.aymane@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `ID_contact` int NOT NULL,
  `usename` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `subject` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `tb_contact`
--

INSERT INTO `tb_contact` (`ID_contact`, `usename`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'abdellah', 'abde@gmail.com', '3254564', 'Subject', 'dsqfgdqfh h '),
(2, 'abdellah', 'abde@gmail.com', '+63456', '', 'fdgj');

-- --------------------------------------------------------

--
-- Structure de la table `tb_postes`
--

CREATE TABLE `tb_postes` (
  `ID_posts` int NOT NULL,
  `title` varchar(300) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `tb_postes`
--

INSERT INTO `tb_postes` (`ID_posts`, `title`, `Image`) VALUES
(10, 'promo', '185_social mediaArtboard 2.png '),
(11, 'free', '418_ADS.png '),
(12, 'aze', '433_cover.png '),
(13, 'Titre 3', '775_ADS.png '),
(14, 'titre 4', '808_Contact us-rafiki.png '),
(15, 'titre 5', '28_Contact us-rafiki.png '),
(16, 'titre 6', '710_error.png '),
(17, 'titre 9', '519_ADS.png '),
(18, 'titre 100', '824_logo2.png ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`ID_contact`);

--
-- Index pour la table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`ID_contact`);

--
-- Index pour la table `tb_postes`
--
ALTER TABLE `tb_postes`
  ADD PRIMARY KEY (`ID_posts`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `ID_contact` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `ID_contact` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tb_postes`
--
ALTER TABLE `tb_postes`
  MODIFY `ID_posts` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
