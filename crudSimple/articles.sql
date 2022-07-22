-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 22 juil. 2022 à 01:34
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crudsimple`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url_image` varchar(255) DEFAULT NULL,
  `date_publication` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `description`, `url_image`, `date_publication`) VALUES
(4, 'Incididunt pariatur', 'Ad doloribus ea volu', 'https://www.misesakovihyget.cc', '2022-07-21 23:20:22'),
(7, 'Quisquam Nam esse c', 'Dicta dolore veritat', 'https://www.dezyf.tv', '2022-07-21 23:20:45'),
(8, 'Rerum expedita qui s', 'Rem nihil voluptas s', 'https://www.vakoximija.co.uk', '2022-07-21 23:20:49'),
(10, 'Non ut voluptatem E', 'Vitae consectetur e', 'https://www.hihesan.us', '2022-07-21 23:32:38'),
(11, 'Animi obcaecati eli', 'Deleniti eligendi it', 'https://www.gulehivigevu.co', '2022-07-21 23:32:44'),
(12, 'Sed quos consequatur', 'Temporibus velit nu', 'https://www.cytyzuwy.us', '2022-07-21 23:33:07');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
