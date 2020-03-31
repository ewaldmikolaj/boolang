-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 31 Mar 2020, 15:56
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `boolang`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fiszka`
--

CREATE TABLE `fiszka` (
  `IDfiszki` int(5) NOT NULL,
  `Slowko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `Definicja` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `IDzestawu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `fiszka`
--

INSERT INTO `fiszka` (`IDfiszki`, `Slowko`, `Definicja`, `IDzestawu`) VALUES
(3, 'Table', 'Stolik', 1),
(4, 'Krzesło', 'chair', 1),
(5, 'pomarańczowy', 'orange', 1),
(6, 'Montag', 'poniedziałek', 2),
(7, 'Freitag', 'piątek', 2),
(36, 'le déjeuner', 'obiad', 13),
(37, 'le pain', 'chleb', 13),
(38, 'la crème', 'śmietana', 13),
(39, 'le riz', 'ryż', 13),
(40, 'le sucre', 'cukier', 13),
(41, 'la viande', 'mięso', 13),
(42, 'la saucisson', 'kiełbasa', 13),
(43, 'un', 'jeden', 14),
(44, 'deux', 'dwa', 14),
(45, 'trois', 'trzy', 14),
(46, 'quatre', 'cztery', 14),
(47, 'cinq', 'pięć', 14),
(48, 'six', 'sześć', 14),
(49, 'sept', 'siedem', 14),
(50, 'huit', 'osiem', 14),
(51, 'neuf', 'dziewięć', 14),
(52, 'dix', 'dziesięć', 14);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jezyk`
--

CREATE TABLE `jezyk` (
  `IDjezyka` int(5) NOT NULL,
  `Jezyk` varchar(40) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `jezyk`
--

INSERT INTO `jezyk` (`IDjezyka`, `Jezyk`) VALUES
(1, 'Angielski'),
(3, 'Francuski'),
(2, 'Niemiecki');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasa`
--

CREATE TABLE `klasa` (
  `IDklasy` int(5) NOT NULL,
  `NazwaKlasy` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klasa`
--

INSERT INTO `klasa` (`IDklasy`, `NazwaKlasy`) VALUES
(3, '4C'),
(1, '4D'),
(2, '4E');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `konto`
--

CREATE TABLE `konto` (
  `IDrodzajukonta` int(5) NOT NULL,
  `RodzajKonta` varchar(40) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `konto`
--

INSERT INTO `konto` (`IDrodzajukonta`, `RodzajKonta`) VALUES
(1, 'admin'),
(2, 'uczeń');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `status`
--

CREATE TABLE `status` (
  `IDstatusu` int(5) NOT NULL,
  `status` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `status`
--

INSERT INTO `status` (`IDstatusu`, `status`) VALUES
(1, 'aktywny'),
(2, 'nieaktywny');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `IDuzytkownika` int(5) NOT NULL,
  `Nazwa` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `Email` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `Haslo` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `IDrodzajukonta` int(5) NOT NULL DEFAULT 2,
  `IDklasy` int(5) NOT NULL DEFAULT 1,
  `IDstatusu` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`IDuzytkownika`, `Nazwa`, `Email`, `Haslo`, `IDrodzajukonta`, `IDklasy`, `IDstatusu`) VALUES
(15, 'Wiktor', 'wiktor@malysusiak.com', '$argon2i$v=19$m=65536,t=4,p=1$cHNCcTAua3NUTE03cEdBYw$GWxJuiBMWgsEOj/iNGQmhKb53g0z1tag8g8bOXpHfCs', 2, 1, 1),
(22, 'Janek', 'janek@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Ti80OWE1S2dPTVhlM3QvYw$ckdXH1em5MaTq46WuxXCM7YzDnbftLlthgQeBZ5YOz4', 1, 1, 1),
(23, 'Jakub', 'jakub@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$NWxOL20veHJ4aFFWWFNmMQ$S9PkeZCCFlfCe3+Tlo4jCy/Kxx7jDfcMBadIxJlENs8', 2, 3, 2),
(24, 'Paweł', 'pawel@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$RDFXUHpJRjB4NHdmMlU5aw$DVfgPzSkWhHy+UhnIhEO4B8U7v3/0iwKcmLw6frwOHo', 2, 3, 2),
(25, 'Nikodem', 'nikodem@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MXJnT2lZRVcwSGsxRzB3Zg$eiFbuUfJMRmw81tiWaMwAMJyk1g5v5hmWwwLGn7AoY8', 2, 2, 2),
(26, 'Andrzej', 'andrzej@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MUVsai5hcHkyV0tXbm9ONg$AugUwbY+FEE1UfKAMP+G2Yt7Ghv/I1xqFVebHaLfLzc', 2, 1, 1),
(28, 'Mikołaj', 'mikolaj@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UE1CaTVxY3MvMzNXQ1VxZw$H5mEZXOZCnCd6kwTzegj3tjr3MpxUQpeYyzaQGD6mak', 2, 1, 1),
(29, 'Wiktor2', 'QWERR@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MDdYYTNpWmhTckNBUWhMaA$t6pY70Q80BWmQAgXyjk52lNXunHhU7Bplr+7qyGsXSM', 2, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zestaw`
--

CREATE TABLE `zestaw` (
  `IDzestawu` int(5) NOT NULL,
  `Autor` int(10) NOT NULL,
  `IDjezyka` int(5) NOT NULL,
  `Nazwa` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `IDklasy` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zestaw`
--

INSERT INTO `zestaw` (`IDzestawu`, `Autor`, `IDjezyka`, `Nazwa`, `IDklasy`) VALUES
(1, 15, 1, 'Angielski', 1),
(2, 15, 2, 'Niemiecki', 1),
(3, 15, 3, 'Francuski', 1),
(13, 23, 3, 'Jedzenie', 3),
(14, 15, 3, 'Francuski - pojazdy', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `fiszka`
--
ALTER TABLE `fiszka`
  ADD PRIMARY KEY (`IDfiszki`),
  ADD KEY `IDzestawu` (`IDzestawu`);

--
-- Indeksy dla tabeli `jezyk`
--
ALTER TABLE `jezyk`
  ADD PRIMARY KEY (`IDjezyka`),
  ADD UNIQUE KEY `Jezyk` (`Jezyk`);

--
-- Indeksy dla tabeli `klasa`
--
ALTER TABLE `klasa`
  ADD PRIMARY KEY (`IDklasy`),
  ADD UNIQUE KEY `NazwaKlasy` (`NazwaKlasy`);

--
-- Indeksy dla tabeli `konto`
--
ALTER TABLE `konto`
  ADD PRIMARY KEY (`IDrodzajukonta`);

--
-- Indeksy dla tabeli `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`IDstatusu`);

--
-- Indeksy dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`IDuzytkownika`),
  ADD UNIQUE KEY `Nazwa` (`Nazwa`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Haslo` (`Haslo`),
  ADD KEY `Uzytkownik_fk0` (`IDrodzajukonta`),
  ADD KEY `Uzytkownik_fk1` (`IDklasy`),
  ADD KEY `Uzytkownik_fk2` (`IDstatusu`);

--
-- Indeksy dla tabeli `zestaw`
--
ALTER TABLE `zestaw`
  ADD PRIMARY KEY (`IDzestawu`),
  ADD KEY `Zestaw_fk0` (`IDjezyka`),
  ADD KEY `Nazwa` (`Nazwa`),
  ADD KEY `Autor` (`Autor`),
  ADD KEY `zestaw_ibfk_1` (`IDklasy`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `fiszka`
--
ALTER TABLE `fiszka`
  MODIFY `IDfiszki` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT dla tabeli `jezyk`
--
ALTER TABLE `jezyk`
  MODIFY `IDjezyka` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `klasa`
--
ALTER TABLE `klasa`
  MODIFY `IDklasy` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `konto`
--
ALTER TABLE `konto`
  MODIFY `IDrodzajukonta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `status`
--
ALTER TABLE `status`
  MODIFY `IDstatusu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `IDuzytkownika` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT dla tabeli `zestaw`
--
ALTER TABLE `zestaw`
  MODIFY `IDzestawu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `fiszka`
--
ALTER TABLE `fiszka`
  ADD CONSTRAINT `fiszka_ibfk_1` FOREIGN KEY (`IDzestawu`) REFERENCES `zestaw` (`IDzestawu`);

--
-- Ograniczenia dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD CONSTRAINT `Uzytkownik_fk0` FOREIGN KEY (`IDrodzajukonta`) REFERENCES `konto` (`IDrodzajukonta`),
  ADD CONSTRAINT `Uzytkownik_fk1` FOREIGN KEY (`IDklasy`) REFERENCES `klasa` (`IDklasy`),
  ADD CONSTRAINT `Uzytkownik_fk2` FOREIGN KEY (`IDstatusu`) REFERENCES `status` (`IDstatusu`);

--
-- Ograniczenia dla tabeli `zestaw`
--
ALTER TABLE `zestaw`
  ADD CONSTRAINT `zestaw_ibfk_1` FOREIGN KEY (`IDklasy`) REFERENCES `klasa` (`IDklasy`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zestaw_ibfk_2` FOREIGN KEY (`Autor`) REFERENCES `uzytkownik` (`IDuzytkownika`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
