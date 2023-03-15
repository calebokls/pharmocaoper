-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 06 oct. 2022 à 19:25
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jemidb`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `img`) VALUES
(1, 'Ford', 'upload/Ford1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `last` int(10) NOT NULL,
  `now` int(10) NOT NULL,
  `description` text NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `img6` varchar(255) NOT NULL,
  `img7` varchar(255) NOT NULL,
  `img8` varchar(255) NOT NULL,
  `img9` varchar(255) NOT NULL,
  `img10` varchar(255) NOT NULL,
  `img11` varchar(255) NOT NULL,
  `img12` varchar(255) NOT NULL,
  `img13` varchar(255) NOT NULL,
  `img14` varchar(255) NOT NULL,
  `img15` varchar(255) NOT NULL,
  `img16` varchar(255) NOT NULL,
  `img17` varchar(255) NOT NULL,
  `img18` varchar(255) NOT NULL,
  `img19` varchar(255) NOT NULL,
  `img20` varchar(255) NOT NULL,
  `img21` varchar(255) NOT NULL,
  `img22` varchar(255) NOT NULL,
  `img23` varchar(255) NOT NULL,
  `img24` varchar(255) NOT NULL,
  `img25` varchar(255) NOT NULL,
  `img26` varchar(255) NOT NULL,
  `img27` varchar(255) NOT NULL,
  `img28` varchar(255) NOT NULL,
  `img29` varchar(255) NOT NULL,
  `img30` varchar(255) NOT NULL,
  `img31` varchar(255) NOT NULL,
  `img32` varchar(255) NOT NULL,
  `img33` varchar(255) NOT NULL,
  `img34` varchar(255) NOT NULL,
  `img35` varchar(255) NOT NULL,
  `img36` varchar(255) NOT NULL,
  `img37` varchar(255) NOT NULL,
  `img38` varchar(255) NOT NULL,
  `img39` varchar(255) NOT NULL,
  `img40` varchar(255) NOT NULL,
  `img41` varchar(255) NOT NULL,
  `img42` varchar(255) NOT NULL,
  `img43` varchar(255) NOT NULL,
  `img44` varchar(255) NOT NULL,
  `img45` varchar(255) NOT NULL,
  `img46` varchar(255) NOT NULL,
  `img47` varchar(255) NOT NULL,
  `img48` varchar(255) NOT NULL,
  `img49` varchar(255) NOT NULL,
  `img50` varchar(255) NOT NULL,
  `cat_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
