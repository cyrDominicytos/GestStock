-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Listage des données de la table inventory_manager.groups : ~5 rows (environ)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `guard`, `description`) VALUES
	(1, 'admin', 'Admin', 'Administrateur du système'),
	(2, 'comptable', 'comptable', 'Comptable'),
	(10, 'Vendeur', 'Ventes', 'Rôles attribué au service des ventes'),
	(11, 'Superviseur', 'Gerant', 'Rôle attribuer au chef ou au superviseur des ventes'),
	(12, 'SuperAdmin', 'SuperAdmin', 'Administrateur de toute l\'application');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Listage des données de la table inventory_manager.groups_permissions : ~97 rows (environ)
/*!40000 ALTER TABLE `groups_permissions` DISABLE KEYS */;
INSERT INTO `groups_permissions` (`id`, `group_id`, `permission_id`) VALUES
	(54, 2, 40),
	(85, 10, 20),
	(86, 10, 21),
	(87, 10, 22),
	(88, 10, 30),
	(89, 10, 31),
	(90, 10, 32),
	(91, 10, 60),
	(92, 10, 61),
	(93, 10, 62),
	(94, 10, 80),
	(95, 11, 10),
	(96, 11, 20),
	(97, 11, 21),
	(98, 11, 22),
	(99, 11, 23),
	(100, 11, 30),
	(101, 11, 31),
	(102, 11, 32),
	(103, 11, 40),
	(104, 11, 41),
	(105, 11, 42),
	(106, 11, 50),
	(107, 11, 60),
	(108, 11, 61),
	(109, 11, 62),
	(110, 11, 70),
	(111, 11, 71),
	(112, 11, 72),
	(113, 11, 80),
	(114, 11, 81),
	(115, 11, 82),
	(145, 12, 10),
	(146, 12, 20),
	(147, 12, 21),
	(148, 12, 22),
	(149, 12, 23),
	(150, 12, 30),
	(151, 12, 31),
	(152, 12, 32),
	(153, 12, 33),
	(154, 12, 40),
	(155, 12, 41),
	(156, 12, 42),
	(157, 12, 43),
	(158, 12, 50),
	(159, 12, 60),
	(160, 12, 61),
	(161, 12, 62),
	(162, 12, 63),
	(163, 12, 70),
	(164, 12, 71),
	(165, 12, 72),
	(166, 12, 73),
	(167, 12, 80),
	(168, 12, 81),
	(169, 12, 82),
	(170, 12, 83),
	(171, 12, 90),
	(172, 12, 91),
	(173, 12, 92),
	(174, 12, 93),
	(175, 12, 100),
	(176, 12, 101),
	(177, 12, 102),
	(178, 12, 103),
	(179, 12, 110),
	(180, 12, 112),
	(181, 1, 10),
	(182, 1, 20),
	(183, 1, 21),
	(184, 1, 22),
	(185, 1, 30),
	(186, 1, 31),
	(187, 1, 32),
	(188, 1, 41),
	(189, 1, 42),
	(190, 1, 50),
	(191, 1, 60),
	(192, 1, 61),
	(193, 1, 62),
	(194, 1, 70),
	(195, 1, 71),
	(196, 1, 72),
	(197, 1, 80),
	(198, 1, 81),
	(199, 1, 82),
	(200, 1, 90),
	(201, 1, 91),
	(202, 1, 92),
	(203, 1, 93),
	(204, 1, 100),
	(205, 1, 101),
	(206, 1, 102),
	(207, 1, 103),
	(208, 1, 110),
	(209, 1, 112);
/*!40000 ALTER TABLE `groups_permissions` ENABLE KEYS */;

-- Listage des données de la table inventory_manager.login_attempts : ~0 rows (environ)
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;

-- Listage des données de la table inventory_manager.migrations : ~1 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
	(1, '20181211100537', 'IonAuth\\Database\\Migrations\\Migration_Install_ion_auth', '', 'IonAuth', 1643908835, 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage des données de la table inventory_manager.permissions : ~36 rows (environ)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `module`, `description`) VALUES
	(10, 'Consulter_Statistiques', 'Statistiques', 'Voir le tabeau de bord'),
	(20, 'Consulter_Ventes', 'Ventes', 'Consulter la liste des ventes'),
	(21, 'Effectuer_Ventes', 'Ventes', 'Vendre un produit'),
	(22, 'Editer_Ventes', 'Ventes', 'Editer une vente'),
	(23, 'Supprimer_Ventes', 'Ventes', 'Supprimer une vente'),
	(30, 'Consulter_Commandes_Clients', 'Commandes_Clients', 'Consulter les commandes des clients'),
	(31, 'Enregistrer_Commandes_Clients', 'Commandes_Clients', 'Enregistrer les commandes des clients'),
	(32, 'Editer_Commandes_Clients', 'Commandes_Clients', 'Editer les commandes des clients'),
	(33, 'Supprimer_Commandes_Clients', 'Commandes_Clients', 'Supprimer les commandes des clients'),
	(40, 'Consulter_Approvisionnements', 'Approvisionnements', 'Consulter les approvisionnements de produit'),
	(41, 'Enregistrer_Approvisionnements', 'Approvisionnements', 'Enregistrer les approvisionnements de produit'),
	(42, 'Editer_Approvisionnements', 'Approvisionnements', 'Editer les approvisionnements de produit'),
	(43, 'Supprimer_Approvisionnements', 'Approvisionnements', 'Supprimer les approvisionnements de produit'),
	(50, 'Consulter_Stocks', 'Stocks', 'Consulter l\'inventaire de stock'),
	(60, 'Consulter_Clients', 'Clients', 'Voir la liste des clients'),
	(61, 'Enregistrer_Clients', 'Clients', 'Enregistrer un client'),
	(62, 'Editer_Clients', 'Clients', 'Editer un client'),
	(63, 'Supprimer_Clients', 'Clients', 'Supprimer un client'),
	(70, 'Consulter_Fournisseurs', 'Fournisseurs', 'Voir la liste des fournisseurs'),
	(71, 'Enregistrer_Fournisseurs', 'Fournisseurs', 'Enregistrer un fournisseur'),
	(72, 'Editer_Fournisseurs', 'Fournisseurs', 'Editer un fournisseur'),
	(73, 'Supprimer_Fournisseurs', 'Fournisseurs', 'Supprimer un fournisseur'),
	(80, 'Consulter_Livreurs', 'Livreurs', 'Voir la liste des livreurs'),
	(81, 'Enregistrer_Livreurs', 'Livreurs', 'Enregistrer un livreur'),
	(82, 'Editer_Livreurs', 'Livreurs', 'Editer un livreur'),
	(83, 'Supprimer_Livreurs', 'Livreurs', 'Supprimer un livreur'),
	(90, 'Consulter_Utilisateurs', 'Utilisateurs', 'Voir la liste des utilisateurs'),
	(91, 'Enregistrer_Utilisateurs', 'Utilisateurs', 'Enregistrer un utilisateur'),
	(92, 'Editer_Utilisateurs', 'Utilisateurs', 'Editer un utilisateur'),
	(93, 'Supprimer_Utilisateurs', 'Utilisateurs', 'Supprimer un utilisateur'),
	(100, 'Consulter_Roles_Permissions', 'Roles_Permissions', 'Voir la liste des Roles et Permissions'),
	(101, 'Enregistrer_Roles_Permissions', 'Roles_Permissions', 'Enregistrer un Rôle'),
	(102, 'Editer_Roles_Permissions', 'Roles_Permissions', 'Editer un Rôle'),
	(103, 'Supprimer_Roles_Permissions', 'Roles_Permissions', 'Supprimer un Rôle'),
	(110, 'Consulter_Parametrages', 'Parametrages', 'Voir les Paramétrages'),
	(112, 'Editer_Parametrages', 'Parametrages', 'Editer un Paramétrage');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Listage des données de la table inventory_manager.users : ~5 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_at`, `updated_at`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `address`) VALUES
	(1, '127.0.0.1', 'administrator', '$2y$12$4ctWzUqPWzXqNfq2tUMXKeeUHeKZLdCk9qlCLBWfyy82P4GloraHy', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, '2022-02-03 18:20:41', '2022-02-07 10:13:02', 1644225182, 1, 'Admin', 'istrator', 'ADMIN', '65656565', 'Cotonou'),
	(2, '127.0.0.1', 'Vendeur', '$2y$10$Cw0N4lbQ/SfIVFj.SRvive3r6AJKt5laZqD7I9RoP/QAHuZYa6If2', 'vendeur@vendeur.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 18:20:41', '2022-02-04 18:38:16', 1643970264, 1, 'Pierre', 'ALI', 'Seller', '66666666', 'Cotonou'),
	(3, '::1', 'kha', '$2y$10$RphovPhJLtPr2JrT7YOlrOEwSRi8nHu0TV5ViRuRmuNZLikS5Dvzy', 'kha@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-04 19:45:24', '2022-02-04 19:45:24', NULL, 1, 'Khalane', 'AFFISSOU', '', '+33 25035458', 'Rennes'),
	(4, '::1', 'julie', '$2y$10$FeyqmZGgMfceboHUoAb3R.FZjlyFFLHiwJSsSRASdGCRxfA.aM9Xe', 'julie@gmail.com', 'fecc475844f1186d2715', '$2y$10$Z5k9Ea.AWS.GTHqv8mrGBeQtpgPBA/UIAzISKVeNBWy/zIHh5aXY6', NULL, NULL, NULL, NULL, NULL, '2022-02-04 19:54:54', '2022-02-04 20:06:16', NULL, 0, 'Julie', 'SOSSOU', '', '65892547', ''),
	(5, '::1', 'pierro', '$2y$10$J4lto8X4o/b5xrABOi2yxeoWrJXgDhdyr7vq0Loq/pdXBWhGMTDcO', 'gbeffo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-06 09:52:21', '2022-02-06 11:12:40', NULL, 1, 'Pierrette', 'GBEFFO', '', '+22966757001', 'Rue 560, Cotonou, Bénin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage des données de la table inventory_manager.users_groups : ~5 rows (environ)
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
	(1, 1, 1),
	(2, 2, 2),
	(4, 4, 11),
	(5, 3, 10),
	(7, 5, 2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
