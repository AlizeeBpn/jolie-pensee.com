-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 02 juil. 2023 à 15:36
-- Version du serveur : 10.5.19-MariaDB-cll-lve
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u741973141_jolieshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `nom` varchar(100) NOT NULL,
  `gamme` varchar(100) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `img`, `nom`, `gamme`, `prix`, `description`) VALUES
(1, 'img/products/f1.jpg', 'Crème visage', 'Jolie Pensée', 12, 'La crème visage à la fleur de pensée vous aide à combler les besoins de votre peau au quotidien. Son action en profondeur répare et protège votre peau pour rétablir l\'équilibre naturel de votre peau. Vous pourrez constater son efficacité dès\r\nle premier mois d\'utilisation !<br/>\r\n\r\nNotre gamme est formulée à 98% de produits d’origine naturelle et biologique, non comédogène.<br/>\r\n\r\nGrâce à une routine beauté simple et naturelle, nos produits équilibrent la santé de votre peau en douceur. Pour une peau nourrie et protégée.\r\n\r\n'),
(2, 'img/products/f2.jpg', 'Serum belle peau', 'Jolie Pensée', 14, 'Pour donner de l\'éclat à votre peau,\r\noptez pour le sérum belle peau de Jolie\r\nPensée ! <br>\r\nAppliquez deux gouttes de sérum sur\r\nvotre visage matin ou soir.<br>\r\nIl protégera votre peau tout en l\'apaisant\r\net en l\'hydratant !<br/>\r\n\r\nNotre gamme est formulée à 98% de produits d’origine naturelle et biologique, non comédogène. <br/>\r\n\r\nGrâce à une routine beauté simple et naturelle, nos produits équilibrent la santé de votre peau en douceur. Pour une peau nourrie et protégée.\r\n'),
(3, 'img/products/f3.jpg', 'Gel douche bio', 'Jolie Pensée', 6, 'Le gel douche bio jolie pensée sans sulfate* au parfum délicat de fleurs pour une sensation de Nature.<br/>\r\n\r\nNotre gamme est formulée à 98% de produits d’origine naturelle et biologique. <br/>\r\n\r\nGrâce à une routine beauté simple et naturelle, nos produits équilibrent la santé de votre peau en douceur. Pour une peau nourrie et protégée.\r\n\r\n'),
(4, 'img/products/f4.jpg', 'Nettoyant purifiant', 'Jolie Pensée', 9, 'Pour un nettoyage en douceur, utilisez le\r\nnettoyant purifiant matin et soir ! Il enlève\r\nles résidus de maquillage et de pollution\r\nqui peuvent agresser votre peau au\r\nquotidien.<br>\r\nIl saura être un indispensable dans votre\r\nroutine beauté !<br/>\r\n\r\nNotre gamme est formulée à 98% de produits d’origine naturelle et biologique, non comédogène. <br/>\r\n\r\nGrâce à une routine beauté simple et naturelle, nos produits équilibrent la santé de votre peau en douceur. Pour une peau nourrie et protégée.\r\n\r\n'),
(5, 'img/products/f5.jpg', 'Lotion tonifiante', 'Jolie Pensée', 12, 'La lotion Jolie Pensée purifie et resserre les pores grâce aux bienfaits de la pensée ! L\'utilisation quotidienne de cette lotion\r\naffinera votre grain de peau et vous offrira\r\nune sensation de fraîcheur instantanée !<br/>\r\n\r\nNotre gamme est formulée à 98% de produits d’origine naturelle et biologique, non comédogène. <br/>\r\n\r\nGrâce à une routine beauté simple et naturelle, nos produits équilibrent la santé de votre peau en douceur. Pour une peau nourrie et protégée.'),
(6, 'img/products/f6.jpg', 'Masque visage', 'Jolie Pensée', 8, 'Utilisez ce masque 1 à 2 fois par semaine pour offrir à votre peau un soin nourrissant optimal. Son action en profondeur répare et protège votre peau pour rétablir l’équilibre naturel de votre peau.<br/>\r\n\r\nNotre gamme est formulée à 98% de produits d’origine naturelle et biologique, non comédogène. <br/>\r\n\r\nGrâce à une routine beauté simple et naturelle, nos produits équilibrent la santé de votre peau en douceur. Pour une peau nourrie et protégée.\r\n\r\n'),
(7, 'img/products/f7.jpg', 'Lait corporel', 'Jolie Pensée', 6, 'Utilisez ce lait corporel pour prendre soin de votre peau au quotidien. Votre peau sera protégée des frottements et produits chimiques liés aux vêtements synthétiques. Pour une peau douce et nourrie.<br/>\r\n\r\nNotre gamme est formulée à 98% de produits d’origine naturelle et biologique, non comédogène. <br/>\r\n\r\nGrâce à une routine beauté simple et naturelle, nos produits équilibrent la santé de votre peau en douceur. Pour une peau nourrie et protégée.\r\n\r\n'),
(8, 'img/products/f8.jpg', 'savon doux', 'Jolie Pensée', 5, 'Utilisez ce savon doux à la délicate odeur de fleurs pour nettoyer votre peau.\r\n\r\nNotre gamme est formulée à 98% de produits d’origine naturelle et biologique, non comédogène. <br/>\r\n\r\nGrâce à une routine beauté simple et naturelle, nos produits équilibrent la santé de votre peau en douceur. Pour une peau nourrie et protégée.\r\n\r\n');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
