-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 21 juin 2022 à 11:11
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'London'),
(2, 1, 0, 'Fes'),
(3, 1, 0, 'Tanger'),
(4, 1, 0, 'Tokyo'),
(5, 1, 1, 'Rabat'),
(6, 2, 0, 'London'),
(7, 2, 1, 'Paris'),
(8, 2, 0, 'Tanger'),
(9, 2, 0, 'Tokyo'),
(10, 2, 0, 'Berlin'),
(11, 3, 0, 'London'),
(12, 3, 0, 'Fes'),
(13, 3, 0, 'Newyork'),
(14, 3, 1, 'Tokyo'),
(15, 3, 0, 'Rabat'),
(16, 4, 1, 'London'),
(17, 4, 0, 'Fes'),
(18, 4, 0, 'Tanger'),
(19, 4, 0, 'Tokyo'),
(20, 4, 0, 'Oujda'),
(21, 5, 0, 'London'),
(22, 5, 0, 'Fes'),
(23, 5, 0, 'Tanger'),
(24, 5, 1, 'Madrid'),
(25, 5, 0, 'Berlin'),
(26, 6, 0, 'London'),
(27, 6, 0, 'Fes'),
(28, 6, 0, 'Tanger'),
(29, 6, 0, 'Tokyo'),
(30, 6, 1, 'Berlin');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'What is the capital of morocco ?'),
(2, 'What is the capital of france ?'),
(3, 'What is the capital of Japan ?'),
(4, 'What is the capital of England ?'),
(5, 'What is the capital of Spain ?'),
(6, 'What is the capital of Germany ?');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_number` (`question_number`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
