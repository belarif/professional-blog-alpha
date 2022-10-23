-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 23 oct. 2022 à 15:19
-- Version du serveur : 8.0.27
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `professional_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `isEnabled` tinyint(1) NOT NULL,
  `user_id` int NOT NULL,
  `post_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `content`, `createdAt`, `isEnabled`, `user_id`, `post_id`) VALUES
(69, 'mon commentaire pour le post 6', '2021-12-02 17:39:12', 1, 9, 150),
(70, 'Mon commentaire pour le post 5', '2021-12-02 17:39:33', 1, 9, 149),
(71, 'commentaire laissé par : sabrina pour le post 6', '2021-12-02 18:36:23', 1, 70, 150),
(72, 'commentaire laissé par amar pour le post 6', '2021-12-02 18:39:06', 1, 89, 150),
(74, 'commentaire laissé par amar pour le post 5', '2021-12-02 18:41:36', 0, 89, 149);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL,
  `title` varchar(70) NOT NULL,
  `chapo` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` text NOT NULL,
  `lastUpdate` datetime DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `published` tinyint(1) NOT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `title`, `chapo`, `content`, `lastUpdate`, `createdAt`, `published`, `user_id`) VALUES
(145, 'post 1', 'ceci est le chapô du post 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore \r\nmagna aliqua. Integer feugiat scelerisque varius morbi enim nunc faucibus. Consequat nisl vel pretium lectus \r\nquam id. Morbi tristique senectus et netus et malesuada. Mauris a diam maecenas sed enim ut sem viverra. \r\nPharetra convallis posuere morbi leo urna molestie at. Non pulvinar neque laoreet suspendisse interdum.\r\n Aliquet risus feugiat in ante metus dictum. Viverra suspendisse potenti nullam ac tortor vitae purus. \r\nDui faucibus in ornare quam viverra. Pulvinar etiam non quam lacus suspendisse faucibus interdum. \r\nUllamcorper velit sed ullamcorper morbi tincidunt ornare.', '2021-12-02 17:26:56', '2021-11-10 14:29:53', 1, 9),
(146, 'post 2', 'ceci est le chapô du post 2', 'Augue eget arcu dictum varius duis at consectetur lorem donec. Eget egestas purus viverra accumsan in. \r\nNeque vitae tempus quam pellentesque nec. Sodales ut eu sem integer vitae justo eget. \r\nScelerisque fermentum dui faucibus in ornare quam viverra orci sagittis. Egestas purus viverra accumsan in. \r\nNisi est sit amet facilisis magna etiam tempor orci eu. Gravida cum sociis natoque penatibus. \r\nElit at imperdiet dui accumsan. Viverra justo nec ultrices dui sapien eget mi proin sed. \r\nVulputate odio ut enim blandit volutpat maecenas. Dolor magna eget est lorem ipsum dolor. \r\nOdio tempor orci dapibus ultrices in. Neque gravida in fermentum et sollicitudin. \r\nMauris augue neque gravida in fermentum et sollicitudin. Sit amet aliquam id diam maecenas ultricies mi. \r\nMorbi leo urna molestie at elementum.', '2021-12-02 17:28:00', '2021-11-10 14:30:36', 1, 9),
(147, 'post 3', 'ceci est le chapô du post 3, un text court qui précède le contenu', 'Egestas maecenas pharetra convallis posuere morbi leo. Senectus et netus et malesuada. Sed cras ornare arcu \r\ndui vivamus arcu felis. Erat nam at lectus urna duis convallis convallis. Vel facilisis volutpat est velit. Nibh sed \r\npulvinar proin gravida hendrerit lectus. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Sed felis eget \r\nvelit aliquet sagittis id. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Tellus id interdum\r\n velit laoreet. Nibh venenatis cras sed felis eget velit aliquet.\r\n\r\nSenectus et netus et malesuada fames. Enim nunc faucibus a pellentesque. Tristique senectus et netus et malesuada.\r\n Nibh cras pulvinar mattis nunc. Consectetur adipiscing elit ut aliquam purus sit amet luctus.\r\n Varius duis at consectetur lorem donec massa. Feugiat pretium nibh ipsum consequat.\r\n Pharetra diam sit amet nisl suscipit adipiscing. Sit amet justo donec enim diam vulputate ut pharetra sit.\r\n Ultrices vitae auctor eu augue ut lectus arcu bibendum at. Ullamcorper morbi tincidunt ornare massa. \r\nArcu ac tortor dignissim convallis aenean et tortor at risus. Eleifend mi in nulla posuere sollicitudin aliquam \r\nultrices.', '2021-12-02 17:28:20', '2021-11-10 14:31:04', 1, 9),
(148, 'post 4', 'ceci est le chapô du post 4', 'Augue eget arcu dictum varius duis at consectetur lorem donec. Eget egestas purus viverra accumsan in. \r\nNeque vitae tempus quam pellentesque nec. Sodales ut eu sem integer vitae justo eget. \r\nScelerisque fermentum dui faucibus in ornare quam viverra orci sagittis. Egestas purus viverra accumsan in. \r\nNisi est sit amet facilisis magna etiam tempor orci eu. Gravida cum sociis natoque penatibus. \r\nElit at imperdiet dui accumsan. Viverra justo nec ultrices dui sapien eget mi proin sed. \r\nVulputate odio ut enim blandit volutpat maecenas. Dolor magna eget est lorem ipsum dolor. \r\nOdio tempor orci dapibus ultrices in. Neque gravida in fermentum et sollicitudin. \r\nMauris augue neque gravida in fermentum et sollicitudin. Sit amet aliquam id diam maecenas ultricies mi. \r\nMorbi leo urna molestie at elementum.', '2021-12-02 17:28:44', '2021-11-10 14:31:35', 1, 9),
(149, 'post 5', 'ceci est le chapô du post 5, un text court qui précède le contenu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore \r\nmagna aliqua. Integer feugiat scelerisque varius morbi enim nunc faucibus. Consequat nisl vel pretium lectus \r\nquam id. Morbi tristique senectus et netus et malesuada. Mauris a diam maecenas sed enim ut sem viverra. \r\nPharetra convallis posuere morbi leo urna molestie at. Non pulvinar neque laoreet suspendisse interdum.\r\n Aliquet risus feugiat in ante metus dictum. Viverra suspendisse potenti nullam ac tortor vitae purus. \r\nDui faucibus in ornare quam viverra. Pulvinar etiam non quam lacus suspendisse faucibus interdum. \r\nUllamcorper velit sed ullamcorper morbi tincidunt ornare.', '2021-12-02 17:29:03', '2021-11-10 14:32:37', 1, 9),
(150, 'post 6', 'ceci est le chapô du post 6, un text court qui précède le contenu', 'Lectus magna fringilla urna porttitor rhoncus dolor purus non enim. Sapien eget mi proin sed libero. \r\nId velit ut tortor pretium viverra suspendisse potenti nullam. Erat imperdiet sed euismod nisi porta lorem.\r\n Eu lobortis elementum nibh tellus molestie nunc non blandit. Et egestas quis ipsum suspendisse ultrices gravida. \r\nIn eu mi bibendum neque egestas. Sed velit dignissim sodales ut eu sem integer vitae. \r\nAugue interdum velit euismod in pellentesque massa placerat. \r\nPlatea dictumst quisque sagittis purus sit amet volutpat consequat. Faucibus ornare suspendisse sed nisi lacus \r\nsed viverra tellus in. In hac habitasse platea dictumst vestibulum rhoncus.\r\n\r\nEgestas maecenas pharetra convallis posuere morbi leo. Senectus et netus et malesuada. Sed cras ornare arcu \r\ndui vivamus arcu felis. Erat nam at lectus urna duis convallis convallis. Vel facilisis volutpat est velit. Nibh sed \r\npulvinar proin gravida hendrerit lectus. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Sed felis eget \r\nvelit aliquet sagittis id. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Tellus id interdum\r\n velit laoreet. Nibh venenatis cras sed felis eget velit aliquet.', '2021-12-02 17:29:21', '2021-11-10 14:33:13', 1, 9);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `lastName`, `firstName`, `email`, `password`, `role`, `createdAt`) VALUES
(9, 'belarif', 'hocine', 'b.ocine@live.fr', '$2y$10$IAHVRnWQpQjkZ0cDWkQktuthfWe8IEgMfLuzorzX6fGj1bbs6f8bi', 1, '2021-11-10 14:26:00'),
(70, 'OUBRAHIM', 'SABRINA', 'oubrahim.sabrina@gmail.com', '$2y$10$CzsnMF4/8vM9RcJ.WJPLrOWmKM.PV2HWHOMgycl.FDMgWrDSuaKs.', 2, '2021-12-02 17:36:04'),
(89, 'amar', 'richard', 'richard@live.fr', '$2y$10$A8kEda0KTRIvg13doy0cF.VHw.W9.8qVmreAPuJq9nViRAyMVAKYG', 2, '2021-12-02 18:35:21'),
(91, 'example', 'example', 'example@gmail.com', '$2y$10$.jGqbIfFs5Ws5CAUiQ5GJOWarhVxipdKpRMofJrdJlhPfLnblDSXq', 1, '2022-10-23 15:18:43');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
