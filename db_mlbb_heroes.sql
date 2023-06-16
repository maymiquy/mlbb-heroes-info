-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 06:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mlbb_heroes`
--

-- --------------------------------------------------------

--
-- Table structure for table `difficulties`
--

CREATE TABLE `difficulties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` enum('Easy','Normal','Hard','Extreme','Insane','Epical Glory') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `difficulties`
--

INSERT INTO `difficulties` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Easy', NULL, NULL),
(2, 'Normal', NULL, NULL),
(3, 'Hard', NULL, NULL),
(4, 'Extreme', NULL, '2023-06-15 20:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_heroes`
--

CREATE TABLE `favorite_heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `heroes_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `notes` text NOT NULL,
  `rating` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorite_heroes`
--

INSERT INTO `favorite_heroes` (`id`, `users_id`, `heroes_id`, `date`, `notes`, `rating`, `created_at`, `updated_at`) VALUES
(2, 2, 3, '2023-06-16', 'hehe', 10.00, NULL, '2023-06-15 08:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `weapon` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `specialty_id` bigint(20) UNSIGNED NOT NULL,
  `difficulty_id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `name`, `poster`, `weapon`, `role_id`, `specialty_id`, `difficulty_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Miya', '20230615065317.jpg', 'Bow', 1, 1, 1, 'Miya, Moonlight Archer, is a hero in Mobile Legends: Bang Bang.\r\n\r\nShe is the first hero in the game according to \"Sale Time\" as well as its official mascot, as seen in the end of every trailer and advertisements and the application icon.', NULL, '2023-06-14 23:53:17'),
(2, 'Gord', '20230615065326.jpg', 'Arcane skateboard', 2, 5, 1, 'Gord, Professor of the Mystic, is a hero in Mobile Legends: Bang Bang.', NULL, '2023-06-14 23:53:26'),
(3, 'Saber', '20230615070435.jpg', 'Swords', 2, 2, 2, 'Saber, Wandering Sword, is a hero in Mobile Legends: Bang Bang.\r\n\r\nOnce called Duanmeng and obsessed by kendo, Saber came to Laboratory 1718 to transform himself in order to pursue true invincibility, but his memory was erased and he became a killing machine. The torture of his memories drove him to finally destroy the laboratory. And set off on our life on the run, searching for the past.', '2023-06-14 02:26:54', '2023-06-15 00:04:35'),
(7, 'Balmond', '20230615065641.jpg', 'Battleaxe', 1, 3, 1, 'Balmond, Bloody Beast, is a hero in Mobile Legends: Bang Bang.\r\n\r\nBalmond is the leader of the Orcs, leading the Orc army against the invasion of the Demons. During a battle, he consumed the blood of a Blood Demon and went into a rage. This aroused Alice\'s interest, so she signed a contract with Balmond on the condition of returning the Stormeye Wasteland. Balmond, and his Orc army have since fought for the Demons.', '2023-06-14 04:02:47', '2023-06-14 23:56:41'),
(8, 'x', '20230615132248.jpg', 'ssssass', 2, 4, 3, 'asssaaaa', '2023-06-15 06:22:48', '2023-06-15 06:22:48'),
(9, 'fgggg', '20230615132304.jpg', 'ssss', 1, 5, 2, 'ggg', '2023-06-15 06:23:04', '2023-06-15 06:23:04'),
(10, 'ddd', 'ddd.jpg', 'ddd', 1, 5, 3, 'ddd', NULL, NULL),
(11, 'ttt', 'ttt.jpg', 'ttt', 2, 5, 4, 'ttt', NULL, NULL),
(12, 'hhh', 'hhh.jpg', 'hhh', 2, 2, 4, 'hhh', NULL, NULL),
(13, 'iii', 'iii.jpg', 'iii', 1, 6, 3, 'iii', NULL, NULL),
(14, 'ppp', 'ppp.jpg', 'ppp', 2, 6, 3, 'ppp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Marksman', 'Marksmen are ranged heroes whose power is almost entirely based on their basic attacks: by using their reach to land massive continuous damage from a distance, marksmens are capable of taking down even the most difficult opponents when positioned behind the safety of their team, and perform better at securing objectives such as the Lord and turrets.', NULL, NULL),
(2, 'Mage', 'A magician (abbreviated as mage) is a hero with a longer range, ability-based area of effect damage, and crowd control that they may utilize to strike from a distance. Mages primarily focus on magic skills that deals magic damage, usually burst damage, and as a consequence, they spend a lot of gold on equipment that allows them to do more damage and have shorter skill cooldowns.', NULL, NULL),
(3, 'Assassin', 'An assassin is an agile hero that specializes in killing or disabling roaming targets picking them of as they try to replenish HP. Focused on infiltration, deception, and mobility, assassins are opportunistic hunters who find favorable moments within a fight before jumping into the fray. Regardless of the size of the enemy team, assassins specializes in positioning and artful killing. They strike when the time is right – no sooner, no later. Assassins are more suitable to be played by experienced players as they have low HP and high burst damage. They are ideal for taking out opponents easily, but are easier to be killed due to bad positioning and wrong timing.', '2023-06-15 06:07:47', '2023-06-15 06:07:47'),
(6, 'Tank', 'Tank', '2023-06-15 06:31:27', '2023-06-15 09:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

CREATE TABLE `specialties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Reap', 'Reap', NULL, NULL),
(2, 'Damage', 'Damage', NULL, NULL),
(3, 'Regen', 'Regen', NULL, NULL),
(4, 'Charge', 'Charge', NULL, NULL),
(5, 'Burst', 'Burst', NULL, NULL),
(6, 'Crowd Control', 'Crowd Control', NULL, NULL),
(7, 'Superman', 'Superman', '2023-06-15 06:57:50', '2023-06-15 06:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@mlbbheroes.com', '$2y$10$v1ibfXdwU39xCOGXoxxhZ.bFmy/I4pZng6hlZvPlbrLme8eB1EtpS', 'admin', NULL, NULL),
(2, 'Anggoro', 'anggoro@super.user', '$2y$10$K1MP5aXOdjBUJ3OMUaiW6eSjnly6D89jNF4q6heXlgB5ST5ZnUSIi', 'admin', NULL, NULL),
(3, 'User', 'user@mlbbheroes.com', '$2y$10$ol3/rTEOEFWP4fLH/FWZcOmx3Ni9RfYrGfkpDbxbxNzZz675seWkO', 'user', NULL, NULL),
(4, 'Miqdams', 'miqdam@mlbbheroes.com', '$2y$10$Byr0s7Jqe7tajoLZBXgtFu5eKIFF7yV0LcegSky/N3.QDnV4xBG1.', 'admin', NULL, '2023-06-15 10:19:31'),
(5, 'user01', 'user01@user.mlbb', '$2y$10$h3pB2t3NGp6G6NN.530wCeXfQrXlxU4jm.dOwPv4T42TUv6uqPX2K', 'user', '2023-06-14 04:20:34', '2023-06-14 04:20:34'),
(6, 'useruser', 'user@user.user', '$2y$10$ROWIWHG.jmvYnkg7zzPEO.GFFJuxKeEKBSjpDBk7J95FtL0Ag6qrS', 'user', '2023-06-15 00:40:24', '2023-06-15 00:40:24'),
(7, 'Bayu', 'bayu@gmail.com', '$2y$10$OJ19WFe9R4T6jq7MouyNpeOOhG2eraCNZq2fS9BckhI5ScfKOEpS.', 'user', '2023-06-15 21:33:34', '2023-06-15 21:33:34'),
(10, 'janan', 'janan@gmail.com', 'janan123', 'user', '2023-06-15 21:41:48', '2023-06-15 21:41:48'),
(11, 'superduper', 'duper@super.duper', 'superduper', 'admin', '2023-06-15 21:42:11', '2023-06-15 21:42:11'),
(12, 'sri', 'sri@gmail.com', '$2y$10$ZAxVDNDNjPhMajiA0CsEcubipPXhuehzncXkY4ivwwU7ZyxudG/CO', 'admin', '2023-06-15 21:47:55', '2023-06-15 21:47:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `difficulties`
--
ALTER TABLE `difficulties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite_heroes`
--
ALTER TABLE `favorite_heroes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`,`heroes_id`),
  ADD KEY `heroes_id` (`heroes_id`),
  ADD KEY `users_id_2` (`users_id`,`heroes_id`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `heroes_name_unique` (`name`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD KEY `role_id` (`role_id`,`specialty_id`,`difficulty_id`),
  ADD KEY `specialty_id` (`specialty_id`),
  ADD KEY `difficulty_id` (`difficulty_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_name_unique` (`name`);

--
-- Indexes for table `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `specialty_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `difficulties`
--
ALTER TABLE `difficulties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `favorite_heroes`
--
ALTER TABLE `favorite_heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorite_heroes`
--
ALTER TABLE `favorite_heroes`
  ADD CONSTRAINT `favorite_heroes_ibfk_1` FOREIGN KEY (`heroes_id`) REFERENCES `heroes` (`id`),
  ADD CONSTRAINT `favorite_heroes_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `heroes`
--
ALTER TABLE `heroes`
  ADD CONSTRAINT `heroes_ibfk_1` FOREIGN KEY (`specialty_id`) REFERENCES `specialties` (`id`),
  ADD CONSTRAINT `heroes_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `heroes_ibfk_3` FOREIGN KEY (`difficulty_id`) REFERENCES `difficulties` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
