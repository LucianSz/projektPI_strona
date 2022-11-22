-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Wrz 2021, 23:03
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `strona_internetowa`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cart`
--

CREATE TABLE `cart` (
  `Id_cart` int(11) NOT NULL,
  `Id_product` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `cart`
--

INSERT INTO `cart` (`Id_cart`, `Id_product`, `Id_user`, `quantity`) VALUES
(1, 2, 1, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `Category_name` varchar(100) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`id_category`, `Category_name`) VALUES
(31, 'suit');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clothes`
--

CREATE TABLE `clothes` (
  `Id_clothes` int(11) NOT NULL,
  `name_clothes` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `category_clothes` int(10) NOT NULL,
  `company_clothes` int(10) NOT NULL,
  `price_clothes` float NOT NULL,
  `image_clothes` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `clothes`
--

INSERT INTO `clothes` (`Id_clothes`, `name_clothes`, `category_clothes`, `company_clothes`, `price_clothes`, `image_clothes`) VALUES
(11, 'eqwesa', 2, 3, 4, 0x332e706e67),
(12, 'purple skirt 2WSX', 0, 0, 99, 0x322e6a7067),
(17, 'eqwesa', 1, 1, 2, ''),
(18, 'adsasdas', 3, 4, 55, 0x6d656e332e706e67),
(19, 'pablito', 55, 66, 12, 0x6176617461722e6a7067);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `company`
--

CREATE TABLE `company` (
  `Id_company` int(10) NOT NULL,
  `Company_name` varchar(44) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `Id_role` int(11) NOT NULL,
  `name_role` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `create_item` tinyint(1) NOT NULL,
  `delete_item` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `drewno` int(11) NOT NULL,
  `kamien` int(11) NOT NULL,
  `zboze` int(11) NOT NULL,
  `dnipremium` int(11) NOT NULL,
  `role` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`, `email`, `drewno`, `kamien`, `zboze`, `dnipremium`, `role`) VALUES
(26, 'testtest1', '$2y$10$x/hVAxulhQvSaKVcSFYQoeJbEaquwR73bjFX4s7.aqHqa4BXEDpwu', 'testest1@gmail.com', 100, 100, 100, 14, 0),
(25, 'test777', '$2y$10$9eC2iNeexm6bZXxzNMj8EuN4ZDgnSvvhf0Zb7QPlJgB8fIH.YsUV2', 'test777@gmail.com', 100, 100, 100, 14, 0),
(24, 'test4test4', '$2y$10$eqUEaxrU9mE8mx21WlrxdujRwEBEFa1men2DRBHjHxk1sUWWFoH7O', 'test4@gmail.com', 100, 100, 100, 14, 0),
(29, 'test1test1', '$2y$10$X4ibLBU4MyZThnhv3KYwAOudGF6Np46u/WfSYkesx0aq8d74JtPPO', 'test1@gmail.com', 100, 100, 100, 14, 0),
(21, 'test2test2', '$2y$10$u6zQfUilMSJ7nWWGX.kG9emRZZhf0eZdk2kBEXsQYWYiyzzqjtdH.', 'test2@gmail.com', 100, 100, 100, 14, 0),
(23, 'TEST4TEST5', '$2y$10$RThc8vWlmaNllOdfhwRn3uaHl8a1EZokl3VzxqgsUiFWskLFoEHZ6', 'test5@gmail.com', 100, 100, 100, 14, 0),
(27, 'root', '$2y$10$dt9qO7n4wqcY3K9Ly6K0y.0Us3bJJaGSt4Teil9waZGmucw3Vd39W', 'root@gmail.com', 100, 100, 100, 14, 0),
(28, 'testtest', '$2y$10$tzyBIoKfQNJgndYkAvK61eBICD0p.xZOv8DOX.uavzywLS4F/fnuu', 'testtest@gmail.com', 100, 100, 100, 14, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id_cart`);

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeksy dla tabeli `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`Id_clothes`),
  ADD UNIQUE KEY `category_clothes` (`category_clothes`),
  ADD UNIQUE KEY `comapny_clothes` (`company_clothes`);

--
-- Indeksy dla tabeli `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Id_company`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Id_role`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `cart`
--
ALTER TABLE `cart`
  MODIFY `Id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT dla tabeli `clothes`
--
ALTER TABLE `clothes`
  MODIFY `Id_clothes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `company`
--
ALTER TABLE `company`
  MODIFY `Id_company` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `role`
--
ALTER TABLE `role`
  MODIFY `Id_role` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`Id_role`) REFERENCES `cart` (`Id_cart`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
