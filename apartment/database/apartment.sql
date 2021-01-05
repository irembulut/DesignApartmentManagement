-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Oca 2021, 19:44:12
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `apartment`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `phone` int(10) NOT NULL,
  `otherphone` int(10) NOT NULL,
  `flat` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `reg_date`, `phone`, `otherphone`, `flat`) VALUES
(1, 'irem', 'irembulut18@gmail.com', '$2y$10$sZZgXSrs.S36JqTxwXk7yu1HNeEwLM8AiuDfNPMkUYJ2GJttQ.F7.', '', '', '2021-01-04 17:29:49', 0, 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyuru`
--

CREATE TABLE `duyuru` (
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `duyuru`
--

INSERT INTO `duyuru` (`text`) VALUES
('afesbhnn\r\ndvgfndgn\r\ndsbfdn d\r\nfb n gn '),
('affhsıgvjsofğjbpğb\r\nsdvjopbjğpsjbüpb\r\ndsvopbjpğjüb bf'),
('Built-in responsiveness\r\n\r\nMobile first fluid grid\r\n\r\nFits any screen sizes\r\n\r\nPC Tablet and Mobile'),
('Built-in responsiveness\r\n\r\nMobile first fluid grid\r\n\r\nFits any screen sizes\r\n\r\nPC Tablet and Mobile');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `payments`
--

CREATE TABLE `payments` (
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `Text` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `payments`
--

INSERT INTO `payments` (`username`, `firstname`, `lastname`, `Text`, `reg_date`, `image`) VALUES
('', '', '', 'fesghfjgkk', '2021-01-04 22:02:59', ''),
('', '', '', 'fesghfjgkk', '2021-01-04 22:02:59', ''),
('', '', '', 'dgdhbfnmf', '2021-01-04 22:02:59', ''),
('', '', '', 'dgdhbfnmf', '2021-01-04 22:02:59', ''),
('irem', 'irem', 'irem', 'irem', '2021-01-04 22:02:59', ''),
('irem', 'irem', 'irem', 'fe98sfyu09shg09h09gh909rfh9rgh*9reh9g*rhe09gh90eht0g9hıhoıfdngıongıo', '2021-01-04 22:02:59', ''),
('iremx', 'irem', 'irem', 'efsbgıhsgojsgpğkbüpüğbş\r\nfdjopjğdpgpğküb\r\ndjıogjğofkv', '2021-01-05 00:21:46', ''),
('irem', 'irem', 'irem', 'dfnduong0ımfbo', '2021-01-05 15:34:54', ''),
('irem', 'irem', 'irem', 'rbfdf ngn', '2021-01-05 15:36:39', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `phone` int(10) NOT NULL,
  `otherphone` int(10) NOT NULL,
  `flat` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `reg_date`, `phone`, `otherphone`, `flat`) VALUES
(1, 'irem', 'irem@gmail.com', '$2y$10$Cl5LDYqHBXBVD33HaTWAbOvPkN6m24xBTtkpayskvdEIs0eaT/IQS', 'irem', 'irem', '2021-01-04 20:41:20', 12345, 12345, 4),
(2, 'john', 'john@gmail.com', '$2y$10$nAE4pPXYSzUEKwvwPBy6aOge9kFUEKuyheitkm8MakOJCAAahYIma', 'john', 'john', '2021-01-05 17:53:22', 15644, 654984, 5);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
