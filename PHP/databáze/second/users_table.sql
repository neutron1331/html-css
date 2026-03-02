-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 02. bře 2026, 11:32
-- Verze serveru: 10.4.32-MariaDB
-- Verze PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `users`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `users_table`
--

CREATE TABLE `users_table` (
  `id` int(50) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `account_status` int(50) NOT NULL,
  `date_of_creation` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `email`, `password`, `account_status`, `date_of_creation`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 1, 20260302),
(1, 'admin', 'admin@admin.com', 'admin', 1, 20260302),
(2, 'john', 'john.mammal@email.com', 'jonny', 3, 20260302),
(1, 'admin', 'admin@admin.com', 'admin', 1, 20260302),
(2, 'john', 'john.mammal@email.com', 'jonny', 3, 20260302);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
