-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 17 nov. 2022 à 15:18
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_es`
--

-- --------------------------------------------------------

--
-- Structure de la table `operations`
--

DROP TABLE IF EXISTS `operations`;
CREATE TABLE IF NOT EXISTS `operations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prixU` float NOT NULL,
  `date` date NOT NULL,
  `quantite` int NOT NULL,
  `montant` float NOT NULL,
  `action` varchar(20) NOT NULL,
  `nom_user` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`nom_user`),
  KEY `nom_user` (`nom_user`),
  KEY `action` (`action`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `operations`
--

INSERT INTO `operations` (`id`, `designation`, `prixU`, `date`, `quantite`, `montant`, `action`, `nom_user`) VALUES
(1, 'logiciel applicatif', 7, '2022-11-07', 3, 0, 'recette', 'Ramses'),
(2, 'Bisscuit', 200, '2022-11-08', 2, 0, 'depense', 'Ramses'),
(3, 'Ayimolo', 4, '2022-11-08', 3, 0, 'depense', 'Ramses'),
(9, 'Telephone', 15000, '2022-11-09', 3, 45000, 'recette', 'ramses'),
(10, 'Tablette', 70000, '2022-11-09', 2, 140000, 'depense', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mdp` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`nom`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `mdp`) VALUES
(1, 'admin', 'admin123');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `operations`
--
ALTER TABLE `operations`
  ADD CONSTRAINT `operations_ibfk_1` FOREIGN KEY (`nom_user`) REFERENCES `users` (`nom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
