-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 10:32 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `log_in`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `ID` int(100) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `CONFIRMP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`ID`, `NAME`, `EMAIL`, `PASSWORD`, `CONFIRMP`) VALUES
(1, 'aroosafayaz', 'aroosafayaz0@gmail.com', '$2y$10$TGpnt11STBpsVWBn1ZS3V.nuXCsPE5C0dJ3PAS6eG/cYaHoX.qyN2', ' $2y$10$TH.jHZx.kDjtRX3cULhHSONia8SCTYS9QgTAn0TgozH5jLrFcgMQG'),
(2, 'anum', 'anumfayaz0@gmail.com', '$2y$10$N37hvnz5sI3Xt67tt63bUulLTYQUOaGbzhsYGFcxZsfTWWY44fmIa', ' $2y$10$VI6HGv/bqtlWJTrI/ihxb.oY3mndqVzO6TPvAVzRlriICDiAdchBm'),
(3, 'aroosaf', 'arshman@gmail.com', '$2y$10$FXEomdg0XrXsgJGfjQ7sB.big/hU7GeJR1W2MLqtEn7TtS/HLvGc.', ' $2y$10$.cynCCyyUs/6EQe0AsyS/OYS4dC0ucC3GUCfSDbbDei5mKTgROCvW'),
(4, 'zain', 'zain@gmail.com', '$2y$10$EL7D1RkJjbY0ItjH5WvLPueKHzFbvn.B5cHxrN0H8E7u9Pv2ErvQS', ' $2y$10$MJoTz8jpy255JeCTp5tsvudaTsFbGTfNGqky/SJblQ5n4PGd.L5cC'),
(5, 'aroosaf', 'awais@gmail.com', '$2y$10$Y2vRJ1sJymJo941hfZud5eWzX9JaitsetoIYNYTj9YKorJw73x/aS', ' $2y$10$YAP2F6jIWX7exQvQuievquQtWJC1OO8YcG/umWJIU6YZPazi56TGa'),
(6, 'ali', 'ali@gmail.com', '$2y$10$6vcN5Ay8SdolF9ccOp889OX2bdMw4Stf8D5JOIUyYuiTI.uweVysS', ' $2y$10$VCeDS15asINavIkNGUE1F.IEuY674Cq8HOXTg66coCJDtGign1iMO'),
(7, 'AroosaRao', 'aroosarao@gmail.com', '$2y$10$QbcmX5bBmVbjpcUS3l8anuHJM/NBrtmBC8juhq/PLZA1M6txBiUYi', ' $2y$10$iCYl4bXKuMZt9vWifojxxOlKSgu1H0iK.ox5j2gctSx9AHQDHCjey'),
(8, 'humi', 'humi@gmail.com', '$2y$10$tkCrLNC.1/Bv2uABhufSgO8kua4y9CF3bHET8BVVat9wi9dZ2Thxq', ' $2y$10$ryVpxn8PWs.6EnmNoSLHYuzj5qKmt1zU6RmCKYhfTvXJqBkh5L6.e'),
(9, 'flower', 'flower@gmail.com', '$2y$10$e48ajHX0jGCwpMfhL/PVleU/a5VFttbuPoCuC4RL6YmQNEZ47TJWy', ' $2y$10$ujz7smXZ1vpal5CKYUSV9eraak.ZXKrgDClpVGh3hIBzR0c9/ZE7S'),
(10, 'shah', 'shah@gmail.com', '$2y$10$zDOFXTT5VAkmh2o3wzm1o.3L9kWDlL0WaBqQoipMif7X6VkFoZowO', ' $2y$10$UEbXp70yb0.SAsj/BNeSx.WQ5vBmawef6GlEsHPxMn2e.62p9L9q2'),
(11, 'arooj', 'arooj@gmail.com', '$2y$10$BhJUJiwLmO32yF8wLV0RAO1SORHCbTzQ1TNP/DRvlwlBWmJGi51kS', ' $2y$10$yU4/psQkNSFjS0RkVquS5.k3X/QH5.vwBkqfTk8At5pfLYmzMtDs.'),
(12, 'shahbaz', 'shahbaz@gmail.com', '$2y$10$OL9oQ48s6trIUbx/.8iI.eo6P1jZeRNjTGtIKZefug2rECIyYavYu', ' $2y$10$8b/y8QiyGrNTxkwYb2ri5.ZojEjyl/pmkj2EppKtsv8heoBVoDi4e'),
(13, 'aroosaf', 'mahum@gmail.com', '$2y$10$VpqpSXvlHm0A9d7Gr2qGueZR5uuOUXPvp2VBRK5AmkS67HYwqN29W', ' $2y$10$wQrFVexCDwaGIjS8Buq27.OJF8GaXdWTRGrEu/FF.hil3cbJBzp92'),
(14, 'arooj', 'aroojmadam@gmail.com', '$2y$10$XrRzKq5eqf36jH5J8U7MO.rBSG5u3m6V8AbhDRnLKVIvHjgQng2vu', ' $2y$10$e2bdagLKB349LJ5NpODvQuGoQIvtYlswLN0bv0QQel1ag8VmwBlOy'),
(15, 'jungl', 'jungle@gmail.com', '$2y$10$v1l8XzVtlIx2c6zvTwyM0.7aBpryOfsIYmQT70t5M0yDG9/jFNZ/W', ' $2y$10$mm8/UlP6kVRhrGMp1CkOkuAc3aeKMcWzdGzoJZNov8qz5xZd8aGt.'),
(16, 'amoo', 'amo@gmail.com', '$2y$10$gmv0bh3Pr3SD5SC0eWMq7.pLinJMHHj2wT1i9iGZLji5c3B4kvOTu', ' $2y$10$XV4imL9wBiXsvvVb6gdTEOXsizRrH8mKEStRCqzC9M/KLFnHgnjJ.'),
(17, 'ani', 'ani@gmail.com', '$2y$10$hIiXCM4XDytR2NJSwtCs6OX.jsiX2l7Vtvc95IqRVaiLtoHqA9RGG', ' $2y$10$DW8O2sLE0Z2RsMEEUanuNOHacJYtHsiYZJNiFDc6NwDWEGOAStpaG'),
(18, 'aroosaaaa', 'arohi@gmail.com', '$2y$10$D1rj.Ows.fsUTeRUzTm4yurgzsibGILnz7JXEgEcbaWolNIV32Pti', ' $2y$10$jgSkQvzdbD4j7a4KggW3aOQtQT/PbfgbhgsoWQ9J1/4utH8bQ6sni'),
(19, 'aroosag', 'aroosag@gmail.com', '$2y$10$I2Yyt4.BVTSWkSqPbHoXBOIqJNjUgIvuuNjf2R5FYEYLnUvJCcEdi', ' $2y$10$pRcy4iiuGnE5oe313Sb1quP4U8YHhTZFShU6RlZ.Ob/c6ndQMNBdO'),
(20, 'sami', 'sami@gmail.com', '$2y$10$./Usvst1uxdVEOjqveyoE.MlZZ8GSjMPARLHRjCS55mlvzcERFGP2', ' $2y$10$we2g5LxqOpIDwZE9WAWpdezJpOj4m.lSEVK50XTbcIrNWEzOmfTZK'),
(21, 'anum', 'anum@gmail.com', '$2y$10$gNnW0Azq3nMkmahhZj51jeu67vxiEu8k/P0w9McrefHOIECvIRBz6', ' $2y$10$VEKTERA6qNvfLp5L0TIjhO5wR3RIP86DvKenFUPaRjqHJJtgiVr2a'),
(22, 'zaini', 'zaini@gmail.com', '$2y$10$wZUlx/jaEclyUcn0xNXy0e3WUs5fbmA1h2LLwLNJQ0WeZ.ubDn7Vi', ' $2y$10$k7T.Ajgq/SbV3CB5EYMDl.d/ntJ.2FoVfS/28JEV1yXnTz4HDT9q.'),
(23, 'rooma', 'rooma@gmail.com', '$2y$10$OX9bwkUvkD9gUFZBJ7ILGu4v9HpeOLpBiyAcQbuFbiIE4h.OL53xe', ' $2y$10$.qKBNSEtJ4MNPOYFmMqgfuhIWa0Egl0YZaYQ2w.jdVdzvMo58lfrm'),
(24, 'arooo', 'aroooosa@gmail.com', '$2y$10$VgrK6QPvJwylUKvQCK4ksek7yvrPwLINYnlnwPaFZ51fOjjCTorMK', ' $2y$10$7iRx5IyzZRH.CrBRITGlJ.o.6s/7hHLBYBat0.YM.2/4YiwJ/NGfu'),
(25, 'anoo', 'anoo@gmail.com', '$2y$10$EwLFEFraHy4ztt..cgnQ5exdBP6tVosRojZZKrnqAzCNqJ.8o3g2u', ' $2y$10$gVY0F.N3f7eC3jjVbgwyfOP2jHQsDtw8hQ54Ygk3gB3IxkYkIihee'),
(26, 'nazi', 'nazi@gmail.com', '$2y$10$6Lv2FM9obzEbb5Lz5tC4tuwa0wASDRneMPxFhnxiWgVamyKrbCs66', ' $2y$10$0fpj4eoVUDkdQfRbeDiJveN4ScVwi6rF73eSHBgIq4Id7xm.YyAee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
