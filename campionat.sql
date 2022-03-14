-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 08:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campionat`
--

-- --------------------------------------------------------

--
-- Table structure for table `arbitri_meci`
--

CREATE TABLE `arbitri_meci` (
  `MeciID` int(11) NOT NULL,
  `ArbitruID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `arbitru`
--

CREATE TABLE `arbitru` (
  `ArbitruID` int(11) NOT NULL,
  `Nume` varchar(50) NOT NULL,
  `Prenume` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `echipa`
--

CREATE TABLE `echipa` (
  `EchipaID` int(11) NOT NULL,
  `NumeEchipa` varchar(50) NOT NULL,
  `NumarVictorii` int(11) NOT NULL,
  `NumarRemize` int(11) NOT NULL,
  `Golaveraj` int(11) NOT NULL,
  `Punctaj` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `echipa`
--

INSERT INTO `echipa` (`EchipaID`, `NumeEchipa`, `NumarVictorii`, `NumarRemize`, `Golaveraj`, `Punctaj`) VALUES
(1, 'Barcelona', 25, 5, 30, 80),
(2, 'Manchester City', 20, 10, 32, 70),
(3, 'Juventus', 19, 11, 25, 68),
(4, 'PSG', 29, 2, 40, 89),
(5, 'Real Madrid', 26, 6, 33, 84),
(6, 'AC Milan', 28, 4, 36, 88),
(7, 'Atletico Madrid', 24, 6, 30, 78),
(8, 'Chelsea', 30, 5, 36, 95),
(10, 'Borussia Dortmund', 26, 7, 35, 85);

-- --------------------------------------------------------

--
-- Table structure for table `jucator`
--

CREATE TABLE `jucator` (
  `JucatorID` int(11) NOT NULL,
  `EchipaID` int(11) NOT NULL,
  `Nume` varchar(50) NOT NULL,
  `Prenume` varchar(50) NOT NULL,
  `Varsta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jucator`
--

INSERT INTO `jucator` (`JucatorID`, `EchipaID`, `Nume`, `Prenume`, `Varsta`) VALUES
(1, 1, 'Fati', 'Ansu', 19),
(2, 1, 'De Jong', 'Frenkie', 24),
(3, 1, 'Pique', 'Gerard', 34),
(4, 1, 'Alves', 'Dani', 38),
(5, 1, 'Umtiti', 'Samuel', 28),
(6, 1, 'ter Stegen', 'Marc-Andre', 29),
(7, 1, 'Roberto', 'Sergi', 29),
(8, 1, 'Busquets', 'Sergio', 33),
(9, 1, 'Torres', 'Ferran', 21),
(11, 2, 'De Bruyne', 'Kevin', 30),
(13, 2, 'Foden', 'Phil', 21),
(14, 2, 'Sterling', 'Raheem', 27),
(15, 2, 'Silva', 'Bernardo', 27),
(16, 2, 'Dias', 'Ruben', 24),
(17, 2, 'Walker', 'Kyle', 31),
(18, 2, 'Gundogan', 'Ilkay', 31),
(19, 2, 'Mahrez', 'Riyad', 30),
(20, 2, 'Grealish', 'Jack', 26),
(22, 3, 'Dibala', 'Paolo', 28),
(23, 3, 'Morata', 'Alvaro', 28),
(24, 3, 'Chiesa', 'Federico', 24),
(25, 3, 'Bonucci', 'Leonardo', 34),
(26, 3, 'Ramsey', 'Aaron', 31),
(27, 3, 'Locatelli', 'Manuel', 24),
(28, 3, 'Chellini', 'Girgio', 37),
(29, 3, 'Bernardeschi', 'Federico', 27),
(30, 3, 'Rabiot', 'Adrien', 26),
(31, 3, 'de Ligt', 'Matthijs', 22),
(33, 4, 'Santos', 'Neymar', 29),
(34, 4, 'Mbappe', 'Kylian', 23),
(35, 4, 'Donnarumma', 'Gianluigi', 22),
(36, 4, 'Ramos', 'Sergio ', 36),
(37, 4, 'Icardi', 'Mauro ', 29),
(39, 4, 'Hakimi', 'Achraf', 23),
(40, 4, 'Messi', 'Lionel', 34),
(42, 5, 'Benzema', 'Karim', 34),
(43, 5, 'Junior', 'Vinicius', 21),
(44, 5, 'Hazard', 'Eden ', 31),
(45, 5, 'Kros', 'Toni', 32),
(46, 5, 'Modric', 'Luka', 36),
(47, 5, 'Alaba', 'David', 27),
(50, 6, 'Ibrahimovic', 'Zlatan', 40),
(51, 6, 'Giroud', 'Olivier ', 35),
(52, 6, 'Kjaer', 'Simon', 32),
(53, 6, 'Tatarusanu', 'Ciprian', 35),
(55, 6, 'Hernandez', 'Theo', 24),
(56, 6, 'Diaz', 'Brahim ', 22),
(57, 7, 'Suarez', 'Luis', 35),
(58, 7, 'Griezmann', 'Antoine', 30),
(61, 7, 'Felix', 'Joao', 22),
(62, 7, 'Correa', 'Angel ', 26),
(64, 7, 'Oblak', 'Jan', 29),
(65, 7, 'Llorente', 'Marcos', 26),
(66, 7, 'Gimenez', 'Jose', 27),
(69, 8, 'Lukaku', 'Romero ', 28),
(70, 8, 'Kante', 'N Golo', 31),
(72, 8, 'Rudiger', 'Antonio', 28),
(73, 8, 'Pulisic', 'Christian', 23),
(74, 8, 'Havertz', 'Kai', 22),
(75, 8, 'Werner', 'Timo', 25),
(78, 9, 'Lewandowski', 'Robert', 33),
(79, 9, 'Muller', 'Thomas', 32),
(80, 9, 'Davies', 'Alphonso', 21),
(81, 9, 'Neuer', 'Manuel', 35),
(82, 9, 'Kimmich', 'Joshua', 26),
(83, 9, 'Sane', 'Leroy', 26),
(84, 9, 'Sule', 'Niklas', 26),
(85, 9, 'Gnabry', 'Serge', 26),
(86, 10, 'Haland', 'Erling', 21),
(88, 10, 'Reus', 'Marco', 32),
(89, 10, 'Hummels', 'Mats', 33),
(92, 10, 'Can', 'Emre', 28),
(93, 10, 'Hazard', 'Thorgan', 28),
(94, 10, 'Reyna', 'Giovanni', 19),
(100, 1, 'Constantinescu ', 'Radu-Nicolae', 21);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Username`, `Password`) VALUES
(1, 'Radu', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `ManagerID` int(11) NOT NULL,
  `Nume` varchar(50) NOT NULL,
  `Prenume` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meci`
--

CREATE TABLE `meci` (
  `MeciID` int(11) NOT NULL,
  `Echipa1_ID` int(11) NOT NULL,
  `Echipa2_ID` int(11) NOT NULL,
  `Echipa1_marcate` int(11) NOT NULL,
  `Echipa1_primite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meci`
--

INSERT INTO `meci` (`MeciID`, `Echipa1_ID`, `Echipa2_ID`, `Echipa1_marcate`, `Echipa1_primite`) VALUES
(1, 1, 2, 1, 2),
(1, 1, 2, 1, 2),
(2, 1, 5, 2, 1),
(3, 5, 1, 5, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arbitru`
--
ALTER TABLE `arbitru`
  ADD PRIMARY KEY (`ArbitruID`);

--
-- Indexes for table `echipa`
--
ALTER TABLE `echipa`
  ADD PRIMARY KEY (`EchipaID`);

--
-- Indexes for table `jucator`
--
ALTER TABLE `jucator`
  ADD PRIMARY KEY (`JucatorID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`ManagerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
