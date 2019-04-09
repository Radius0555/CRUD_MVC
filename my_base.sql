-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Kwi 2019, 07:27
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `my_base`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `empl`
--

CREATE TABLE `empl` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf32_polish_ci NOT NULL,
  `job` varchar(255) COLLATE utf32_polish_ci NOT NULL,
  `wage` varchar(255) COLLATE utf32_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_polish_ci;

--
-- Zrzut danych tabeli `empl`
--

INSERT INTO `empl` (`id`, `name`, `job`, `wage`) VALUES
(1, 'Ryszard Jeleniewski', 'Pracownik produkcji', '2500'),
(2, 'Andrzej Jałowiecki', 'Kierownik', '4000'),
(3, 'Antoni Pawlikowski', 'Pracownik dziaÅ‚u logistyki', '3500'),
(4, 'Kuba MIna', 'Dyrektor', '10000');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nameuser` varchar(255) COLLATE utf32_polish_ci NOT NULL,
  `email` varchar(255) COLLATE utf32_polish_ci NOT NULL,
  `password` varchar(255) COLLATE utf32_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `nameuser`, `email`, `password`) VALUES
(2, 'radek', 'radius555555@wp.pl', '111111'),
(3, 'adom', 'radius666@wp.pl', '111111'),
(6, 'radek1', 'radius55@wp.pl', '123456'),
(7, 'radek2', 'radius0555@wp.pl', '123456'),
(8, 'radek3', 'radius3@wp.pl', '123456'),
(9, 'radek4', 'radius4@wp.pl', '123456'),
(10, 'radek6', 'radius66@wp.pl', '123456'),
(11, 'radek7', 'radius77@wp.pl', '123456'),
(12, 'radek8', 'radius88@wp.pl', '123456'),
(13, 'radek9', 'radius9@wp.pl', '123456'),
(14, 'radek71', 'radius57@wp.pl', '123456'),
(15, 'radek789', 'radius789@wp.pl', '123456'),
(16, 'battlefield999', 'radius010155@gmail.pl', '1234567890');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `empl`
--
ALTER TABLE `empl`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `empl`
--
ALTER TABLE `empl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
