-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : sam. 04 mars 2023 à 13:54
-- Version du serveur : 8.0.32
-- Version de PHP : 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_ecf_quai_antique`
--

-- --------------------------------------------------------

--
-- Structure de la table `bookings`
--

-- DROP TABLE IF EXISTS `bookings`;
-- CREATE TABLE IF NOT EXISTS `bookings` (
--   `id` int NOT NULL AUTO_INCREMENT,
--   `persons` int NOT NULL,
--   `date` date NOT NULL,
--   `hour` time NOT NULL,
--   `allergy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
--   `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

-- DROP TABLE IF EXISTS `categories`;
-- CREATE TABLE IF NOT EXISTS `categories` (
--   `id` int NOT NULL AUTO_INCREMENT,
--   `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Entrées'),
(2, 'Plats'),
(3, 'Desserts'),
(4, 'Boissons');

-- --------------------------------------------------------

--
-- Structure de la table `dishes`
--

-- DROP TABLE IF EXISTS `dishes`;
-- CREATE TABLE IF NOT EXISTS `dishes` (
--   `id` int NOT NULL AUTO_INCREMENT,
--   `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `description` longtext COLLATE utf8mb4_unicode_ci,
--   `price` int NOT NULL,
--   `categories_id` int DEFAULT NULL,
--   PRIMARY KEY (`id`),
--   KEY `IDX_584DD35DA21214B7` (`categories_id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `dishes`
--

INSERT INTO `dishes` (`id`, `title`, `description`, `price`, `categories_id`) VALUES
(1, 'Pavé de truite rôti', '<div>Bouillon de curry, légumes de saison</div>', 22, 2),
(2, 'Ravioles grande tradition aux copeaux d’ Abondance', NULL, 15, 2),
(3, 'Le «Berthoud» au fromage d’Abondance', '<div>Accompagné de Charcuteries ,Pommes de Terre<br><br></div><div><br></div>', 24, 2),
(5, 'Hamburger du Savoyard', NULL, 19, 2),
(6, 'Raclette de Savoie', '<div>Salade verte, charcuteries et pomme de terre</div>', 24, 2),
(7, 'Fondue montagnarde', '<div>Fondue Savoyarde, salade verte et assortiment de charcuteries<br><br></div><div>supplément cèpes : 3,50 €/pers.<br><br></div>', 24, 2),
(8, 'Dome choco mandarine, sauce chocolat', '<div>Glaces yaourt, <em>marron glacé</em> et caramel beurre salé,<br>Biscuit chocolat,sauce chocolat, crème fouettée</div>', 8, 3),
(9, 'Poire confite aux épices, crumble aux noix', '<div>Sorbets citron, passion et mangue, fruits frais,<br>coulis de fruits, crème fouettée<br><br></div><div><br></div>', 8, 3),
(10, 'Sablé aux pommes caramélisées, crème double', '<div>Glace marron, caramel beurre salé, vanille, crème de marron, meringue, crème fouettée<br><br></div><div><br></div>', 8, 3),
(11, 'Baba au rhum, mousse marron glacé', '<div>Glace Chartreuse (2b) arrosée de Genépi<br><br></div><div><br></div>', 10, 3),
(12, 'Tarte citron et sarrasin, meringue légère', '<div>Sorbet Citron (2b), arrosées de Limoncello<br><br></div><div><br></div>', 10, 3),
(13, 'Glace artisanale 2 boules', NULL, 8, 3),
(14, 'Gratinée à l’oignons', NULL, 9, 1),
(15, 'Oeuf 64 °', '<div>Polenta moelleuse et fricassée de champignons</div>', 9, 1),
(16, 'Gravlax de maquereau', '<div>Salade de vitelotte aux échalotes confites</div>', 9, 1),
(17, 'Pressé de bœuf et pormonier', NULL, 9, 1),
(18, 'Duo de petits panés de reblochon et st Marcellin et sa salade', NULL, 9, 1),
(19, 'Salade gourmande du Savoyard', NULL, 9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `dishes_menus`
--

-- DROP TABLE IF EXISTS `dishes_menus`;
-- CREATE TABLE IF NOT EXISTS `dishes_menus` (
--   `dishes_id` int NOT NULL,
--   `menus_id` int NOT NULL,
--   PRIMARY KEY (`dishes_id`,`menus_id`),
--   KEY `IDX_8DD9051BA05DD37A` (`dishes_id`),
--   KEY `IDX_8DD9051B14041B84` (`menus_id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `dishes_menus`
--

INSERT INTO `dishes_menus` (`dishes_id`, `menus_id`) VALUES
(1, 1),
(2, 3),
(8, 1),
(9, 3),
(17, 1),
(18, 3);

-- --------------------------------------------------------

--
-- Structure de la table `formules`
--

-- DROP TABLE IF EXISTS `formules`;
-- CREATE TABLE IF NOT EXISTS `formules` (
--   `id` int NOT NULL AUTO_INCREMENT,
--   `dish_id` int NOT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

-- DROP TABLE IF EXISTS `gallery`;
-- CREATE TABLE IF NOT EXISTS `gallery` (
--   `id` int NOT NULL AUTO_INCREMENT,
--   `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
--   `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `gallery`
--

INSERT INTO `gallery` (`id`, `url`, `title`) VALUES
(4, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

-- DROP TABLE IF EXISTS `menus`;
-- CREATE TABLE IF NOT EXISTS `menus` (
--   `id` int NOT NULL AUTO_INCREMENT,
--   `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id`, `title`) VALUES
(1, 'Le Savoyard'),
(3, 'Le Lot');

-- --------------------------------------------------------

--
-- Structure de la table `menus_categories`
--

-- DROP TABLE IF EXISTS `menus_categories`;
-- CREATE TABLE IF NOT EXISTS `menus_categories` (
--   `menus_id` int NOT NULL,
--   `categories_id` int NOT NULL,
--   PRIMARY KEY (`menus_id`,`categories_id`),
--   KEY `IDX_2C7F3E2514041B84` (`menus_id`),
--   KEY `IDX_2C7F3E25A21214B7` (`categories_id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- -- --------------------------------------------------------

-- --
-- -- Structure de la table `openings`
-- --

-- DROP TABLE IF EXISTS `openings`;
-- CREATE TABLE IF NOT EXISTS `openings` (
--   `id` int NOT NULL AUTO_INCREMENT,
--   `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `morning_state` tinyint(1) NOT NULL,
--   `evening_state` tinyint(1) NOT NULL,
--   `morning_open` time NOT NULL,
--   `morning_close` time NOT NULL,
--   `evening_open` time NOT NULL,
--   `evening_close` time NOT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `openings`
--

INSERT INTO `openings` (`id`, `day`, `morning_state`, `evening_state`, `morning_open`, `morning_close`, `evening_open`, `evening_close`) VALUES
(1, 'Lundi', 1, 1, '11:00:00', '12:00:00', '12:01:00', '23:00:00'),
(2, 'Mardi', 1, 1, '11:00:00', '12:00:00', '12:01:00', '23:00:00'),
(3, 'Mercredi', 1, 1, '11:00:00', '12:00:00', '12:01:00', '23:00:00'),
(4, 'Jeudi', 1, 1, '11:00:00', '12:00:00', '12:01:00', '23:00:00'),
(5, 'Vendredi', 1, 1, '11:00:00', '12:00:00', '12:01:00', '23:00:00'),
(6, 'Samedi', 1, 1, '11:00:00', '12:00:00', '12:01:00', '23:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

-- DROP TABLE IF EXISTS `reservations`;
-- CREATE TABLE IF NOT EXISTS `reservations` (
--   `id` int NOT NULL AUTO_INCREMENT,
--   `date` date NOT NULL,
--   `booking_id` int NOT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `date`, `booking_id`) VALUES
(1, '2023-02-02', 2),
(2, '2023-02-22', 2);

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

-- DROP TABLE IF EXISTS `restaurant`;
-- CREATE TABLE IF NOT EXISTS `restaurant` (
--   `id` int NOT NULL AUTO_INCREMENT,
--   `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `description` longtext COLLATE utf8mb4_unicode_ci,
--   `maximum_capacity` int NOT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `description`, `maximum_capacity`) VALUES
(1, 'Quai Antique', 'Le Quai Antique est installé à Chambéry et propose au déjeuner comme au dîner une expérience gastronomique, à travers une cuisine sans artifice. Plus encore que ses deux autres restaurants, Arnaud Michant le voit comme une promesse d’un voyage dans son univers culinaire.', 50);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

-- DROP TABLE IF EXISTS `user`;
-- CREATE TABLE IF NOT EXISTS `user` (
--   `id` int NOT NULL AUTO_INCREMENT,
--   `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `roles` json NOT NULL,
--   PRIMARY KEY (`id`),
--   UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `roles`) VALUES
(2, 'adminquaiantique@quaiant.fr', '$2y$13$VkuqTLuLgVA8SWbZ/8okCOrO23kMgtc8KjQBhgNTWuiV1J1lcgc96', '[\"ROLE_ADMIN\"]'),
(3, 'floperez1701@gmail.com', '$2y$13$iWn6iUCBFt941fQjJHjVjef1j0N2Gcbl10oTeB8nkf9s37y1LSM4O', '[\"ROLE_USER\"]');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `dishes`
--
ALTER TABLE `dishes`
  ADD CONSTRAINT `FK_584DD35DA21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `dishes_menus`
--
ALTER TABLE `dishes_menus`
  ADD CONSTRAINT `FK_8DD9051B14041B84` FOREIGN KEY (`menus_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8DD9051BA05DD37A` FOREIGN KEY (`dishes_id`) REFERENCES `dishes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `menus_categories`
--
ALTER TABLE `menus_categories`
  ADD CONSTRAINT `FK_2C7F3E2514041B84` FOREIGN KEY (`menus_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2C7F3E25A21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
