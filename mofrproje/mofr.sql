-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Eki 2024, 18:34:43
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mofr`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `Urun_ID` int(11) NOT NULL,
  `Urun_Ad` varchar(30) NOT NULL,
  `Urun_Fiyat` decimal(10,2) NOT NULL,
  `Urun_Resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`Urun_ID`, `Urun_Ad`, `Urun_Fiyat`, `Urun_Resim`) VALUES
(1, 'Arnavut Ciğeri', 250.00, 'arnavutcigeri.jpg'),
(2, 'Humus', 90.00, 'humus.jpg'),
(3, 'Adana Kebap', 180.00, 'adana.jpg'),
(4, 'Urfa Kebap', 180.00, 'urfa.jpeg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sweatshirtler`
--

CREATE TABLE `sweatshirtler` (
  `Urun_ID` int(11) NOT NULL,
  `Urun_Marka` varchar(20) NOT NULL,
  `Urun_Kalip` varchar(20) NOT NULL,
  `Urun_Renk` varchar(20) NOT NULL,
  `Urun_S_Beden` int(11) NOT NULL,
  `Urun_M_Beden` int(11) NOT NULL,
  `Urun_L_Beden` int(11) NOT NULL,
  `Urun_XL_Beden` int(11) NOT NULL,
  `Urun_XXL_Beden` int(11) NOT NULL,
  `Urun_Fiyat` decimal(10,2) NOT NULL,
  `Urun_Tukendi_Mi` varchar(20) NOT NULL,
  `Urun_Resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `sweatshirtler`
--

INSERT INTO `sweatshirtler` (`Urun_ID`, `Urun_Marka`, `Urun_Kalip`, `Urun_Renk`, `Urun_S_Beden`, `Urun_M_Beden`, `Urun_L_Beden`, `Urun_XL_Beden`, `Urun_XXL_Beden`, `Urun_Fiyat`, `Urun_Tukendi_Mi`, `Urun_Resim`) VALUES
(1, 'Calvin Klein', 'Bol kesim', 'Beyaz', 3, 3, 3, 3, 3, 1000.00, 'Hayır', 'ck1.png'),
(2, 'Calvin Klein', 'Bol kesim', 'Beyaz', 3, 3, 3, 3, 3, 1000.00, 'Hayır', 'ck2.png'),
(3, 'Calvin Klein', 'Bol kesim', 'Beyaz', 3, 3, 3, 3, 3, 1000.00, 'Hayır', 'ck3.png'),
(4, 'Calvin Klein', 'Bol kesim', 'Beyaz', 3, 3, 3, 3, 3, 1000.00, 'Hayır', 'ck4.png'),
(5, 'Calvin Klein', 'Bol kesim', 'Beyaz', 3, 3, 3, 3, 3, 1000.00, 'Hayır', 'ck5.png');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Urun_ID`);

--
-- Tablo için indeksler `sweatshirtler`
--
ALTER TABLE `sweatshirtler`
  ADD PRIMARY KEY (`Urun_ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `Urun_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `sweatshirtler`
--
ALTER TABLE `sweatshirtler`
  MODIFY `Urun_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
