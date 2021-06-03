-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 03 juin 2021 à 09:09
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `uml_laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id_client` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_naissance` date NOT NULL,
  `numero_permis` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin,
  `telephone` text COLLATE utf8_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_client`, `nom`, `prenom`, `date_naissance`, `numero_permis`, `email`, `telephone`, `created_at`, `updated_at`) VALUES
(1, 'Cash', 'Johnny', '2020-11-10', '123455', NULL, NULL, '2021-05-18 13:33:00', NULL),
(2, 'aze', 'rtyui', '2021-05-11', '1212', NULL, NULL, NULL, NULL),
(3, 'Test', 'AZERT', '1997-05-03', '12345678', NULL, NULL, '2021-06-01 19:23:26', '2021-06-01 19:23:26'),
(4, 'azertyu', 'azertyu', '1988-04-01', '123456', NULL, NULL, '2021-06-03 05:35:09', '2021-06-03 05:35:09'),
(5, 'azertyu', 'azertyu', '2018-02-02', '12345678', NULL, NULL, '2021-06-03 05:36:42', '2021-06-03 05:36:42'),
(6, 'AZERTY', 'QSDFGHJ', '1985-01-01', '8765234', NULL, NULL, '2021-06-03 05:37:14', '2021-06-03 05:37:14'),
(7, 'test', 'test', '1988-02-02', '76458', NULL, NULL, '2021-06-03 05:37:42', '2021-06-03 05:37:42'),
(8, 'LKJHGDFGH', 'CVBNFGHJ', '1984-04-03', '8723456', NULL, NULL, '2021-06-03 05:38:03', '2021-06-03 05:38:03'),
(9, 'oievhfhjvkbdf', 'kfdjbvdfkljbv', '1989-03-02', '98734686', NULL, NULL, '2021-06-03 05:38:28', '2021-06-03 05:38:28'),
(10, 'eringerbvdfk', 'kf kvdfkvnsdfkjvn', '1989-04-02', '12345678', NULL, NULL, '2021-06-03 05:44:55', '2021-06-03 05:44:55'),
(11, 'iqrhgigb', 'jdfbldjfkbsd', '1967-04-03', '4987456', NULL, NULL, '2021-06-03 05:45:18', '2021-06-03 05:45:18'),
(12, 'sdfjnfkhsd', 'sdkfbvsfkjlbv', '1978-02-02', '987625678', NULL, NULL, '2021-06-03 05:46:24', '2021-06-03 05:46:24'),
(13, 'zrjghzez', 'nslbfgbrlhkjgb', '1994-01-01', '12345678', NULL, NULL, '2021-06-03 05:47:55', '2021-06-03 05:47:55'),
(14, 'jnafkjng', 'kfjnerafgjklb', '2024-03-02', '12459876', 'kqjdghsdg@mail.fr', '234567890', '2021-06-03 06:34:04', '2021-06-03 06:34:04'),
(15, 'sdfghjkl', 'sdfghjk', '1988-01-01', '123456789', 'sdfghjkl', '1234567890', '2021-06-03 06:42:13', '2021-06-03 06:42:13'),
(16, 'Maire', 'Gautier', '1970-01-01', '123456789', 'test2@test.fr', '1234567890', '2021-06-03 07:08:26', '2021-06-03 07:08:44');

-- --------------------------------------------------------

--
-- Structure de la table `contrats`
--

DROP TABLE IF EXISTS `contrats`;
CREATE TABLE IF NOT EXISTS `contrats` (
  `id_contrat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_employe` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `km_avant` int(11) DEFAULT NULL,
  `km_apres` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_contrat`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `contrats`
--

INSERT INTO `contrats` (`id_contrat`, `id_employe`, `id_client`, `date_debut`, `date_fin`, `km_avant`, `km_apres`, `created_at`, `updated_at`) VALUES
(16, 2, 1, '2021-06-02', '2021-06-09', 42, 84, '2021-06-02 17:48:05', '2021-06-02 17:48:05'),
(15, 2, 3, '2021-06-05', '2021-07-02', 3, 5, '2021-06-02 16:46:42', '2021-06-02 16:46:42'),
(10, 1, 1, '2021-05-02', '2021-05-31', 1, 2, '2021-05-31 19:24:46', '2021-05-31 19:24:46'),
(11, 2, 1, '2021-05-03', '2021-05-31', 2, 4, '2021-05-31 19:27:47', '2021-05-31 19:27:47'),
(12, 2, 1, '2021-06-01', '2021-06-02', 1, 2, '2021-06-01 18:15:24', '2021-06-01 18:15:24'),
(14, 2, 3, '2021-06-01', '2021-06-02', 1, 2, '2021-06-01 20:22:11', '2021-06-01 20:22:11');

-- --------------------------------------------------------

--
-- Structure de la table `contrat_to_vehicules`
--

DROP TABLE IF EXISTS `contrat_to_vehicules`;
CREATE TABLE IF NOT EXISTS `contrat_to_vehicules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contrat` int(11) NOT NULL,
  `id_vehicule` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `contrat_to_vehicules`
--

INSERT INTO `contrat_to_vehicules` (`id`, `id_contrat`, `id_vehicule`, `created_at`, `updated_at`) VALUES
(1, 11, 1, '2021-05-31', '2021-05-31'),
(15, 15, 6, '2021-06-02', '2021-06-02'),
(22, 12, 2, '2021-06-02', '2021-06-02'),
(20, 14, 6, '2021-06-02', '2021-06-02'),
(19, 14, 5, '2021-06-02', '2021-06-02'),
(18, 14, 2, '2021-06-02', '2021-06-02'),
(16, 15, 6, '2021-06-02', '2021-06-02'),
(17, 15, 5, '2021-06-02', '2021-06-02'),
(21, 14, 5, '2021-06-02', '2021-06-02'),
(23, 12, 2, '2021-06-02', '2021-06-02'),
(43, 16, 2, '2021-06-03', '2021-06-03'),
(42, 16, 1, '2021-06-03', '2021-06-03'),
(41, 16, 1, '2021-06-03', '2021-06-03'),
(40, 16, 6, '2021-06-03', '2021-06-03'),
(39, 16, 2, '2021-06-03', '2021-06-03'),
(38, 16, 2, '2021-06-03', '2021-06-03'),
(37, 16, 6, '2021-06-03', '2021-06-03'),
(36, 16, 5, '2021-06-03', '2021-06-03'),
(35, 16, 2, '2021-06-03', '2021-06-03'),
(34, 16, 1, '2021-06-03', '2021-06-03');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `id_employe` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id_employe`, `nom`, `fonction`, `created_at`, `updated_at`) VALUES
(1, 'Owen Coogan', 'DevOps', NULL, NULL),
(2, 'Gautier Maire', 'Lead Dev', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_bin NOT NULL,
  `connection` text COLLATE utf8_bin NOT NULL,
  `queue` text COLLATE utf8_bin NOT NULL,
  `payload` longtext COLLATE utf8_bin NOT NULL,
  `exception` longtext COLLATE utf8_bin NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

DROP TABLE IF EXISTS `historique`;
CREATE TABLE IF NOT EXISTS `historique` (
  `id_historique` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_contrat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_historique`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_bin NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_28_190355_create_contrats_table', 1),
(5, '2021_05_28_191325_create_vehicules_table', 1),
(6, '2021_05_28_192914_create_employes_table', 1),
(7, '2021_05_29_152939_create_clients_table', 2),
(8, '2021_05_29_153241_create_clients_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `token` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Gautier Maire', 'gautier.maire@mail-ecv.fr', NULL, '$2y$10$vHpRqfH8YILRGDxql2oKzOAPGO3xDQm/KQoE7uJmj8J6XChEd41ze', NULL, '2021-05-31 18:47:10', '2021-05-31 18:47:10');

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

DROP TABLE IF EXISTS `vehicules`;
CREATE TABLE IF NOT EXISTS `vehicules` (
  `id_vehicule` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `immatriculation` varchar(255) COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_vehicule`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`id_vehicule`, `nom`, `immatriculation`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Opel Astra', '123-5667', 'https://www.autoscout24.fr/assets/auto/images/model/opel/opel-astra/opel-astra-l-02.jpg', NULL, NULL),
(2, 'Maserati', 'AZERTY', 'https://s7g10.scene7.com/is/image/maserati/maserati/international/News/2020/maserati-and-the-italian-tricolor,--applied-by-hand---a-project-for-renewal-/01_Maserati_Levante_Trofeo_Livery_Italy_@_Rome.jpg?$1400x2000$&fit=constrain', '2021-05-31 20:20:10', '2021-05-31 20:20:10'),
(5, 'Ford Mustang 67', 'QSDFGH', 'https://www.automobile-magazine.fr/asset/cms/840x394/163317/config/112197/mustang01.jpg', '2021-06-01 19:25:26', '2021-06-01 19:25:26'),
(6, 'Buggati', '420420', 'https://www.bugatti.com/fileadmin/_processed_/sei/p54/se-image-4799f9106491ebb58ca3351f6df5c44a.jpg', '2021-06-01 19:28:25', '2021-06-01 19:28:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
