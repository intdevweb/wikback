-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 20 Août 2015 à 17:25
-- Version du serveur :  5.6.24
-- Version de PHP :  5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dico-quebecois`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(30) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `role`, `date_created`, `date_modified`) VALUES
(12, 'joel', '$2y$10$ZWtE0BUd7DULrcv7Puur5.oa2DAUts0C65tjTN0UxbZBX9yzTFmhO', 'joelpicoche@gmail.com', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'joel', '$2y$10$ATwsx0xayiTEfv2qzmfEF.mCYXxWzp6mgn6xgVTluQKLacEMnIZeS', 'joelpicoche@gmail.com', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'joel', '$2y$10$WJoQ45vsV9x3Z5BWbKQUH.BvDlVhmaQ3vmgM/Tctc7jDjXhobAsUu', 'joelpicoche@gmail.com', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'joel', '$2y$10$CpTU0MKxMwvZfoS3TyFypeUH4F5JBx9MNC6NKsOWuc.pAgDoKerFu', 'joelpicoche@gmail.com', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'joel', '$2y$10$LQK2L7kNHmzKFMKARK9Bferk55NheXqJxEEYWOfeVTcmr/oyDAmse', 'joelpicoche@gmail.com', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'joel', '$2y$10$G.2GZTAfVqnvrDPmUEReP.aSZrom5ceJo5OLdgs26DwwpBHRcEjRG', 'joelpicoche@gmail.com', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
