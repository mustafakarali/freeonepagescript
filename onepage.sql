-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 06 Eyl 2021, 16:56:28
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `onepage`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `theme`
--

INSERT INTO `theme` (`id`, `field_name`, `name`, `value`, `type`) VALUES
(1, 'Site Başlık', 'site_title', 'deneme title', 'text'),
(2, 'Banner Başlık', 'top_title', 'deneme yazısıdır', 'text'),
(3, 'Banner Açıklama', 'top_article', 'deneme bir yazıdır gerisi bana kalmalıdır selamlar doslyarım hepinize saygı ve sevgilier ile selamlıyorum allaha emanet olun', 'text'),
(4, 'Banner Resim', 'top_image', 'assets/images/atamq.jpg', 'image'),
(5, 'Hakkımda Resim', 'about_image', 'assets/images/about-left-image.png', 'image'),
(6, 'Hakkımda Başlık 1', 'about_title_1', 'data analizi', 'text'),
(7, 'Hakkımda Açıklama 1', 'about_article_1', 'deneme açıklama 1 kardeş neya bakıyon hayırdır sen', 'text'),
(8, 'Hakkımda Başlık 2', 'about_title_2', 'hakkımda bailık 2', 'text'),
(9, 'Hakkımda Açıklama 2', 'about_article_2', 'hakkımda açaıklama 2', 'text'),
(10, 'Hakkımda Başlık 3', 'about_title_3', 'hakkımda başlık 3', 'text'),
(11, 'Hakkımda Açıklama 3', 'about_article_3', 'hakkımda açıklama yazsını 3', 'text'),
(12, 'Hakkımda Başlık 4', 'about_title_4', 'hakkımda başlık 4', 'text'),
(13, 'Hakkımda Açıklama 4', 'about_article_4', 'hakkımda açıklama 4', 'text'),
(14, 'Footer Başlık', 'footer_title', 'buradan bizimle iletişime geçebilirisinz', 'text'),
(15, 'Footer Açıklama', 'footer_article', 'deneme bir şey ler işte kardeşim buradan bana yaz ya da ara yalnız şunu unutma only telegram bizdae aga ', 'text'),
(16, 'İletişim Opsiyon 1', 'contact_title_1', 'İşte mail adresimiz', 'text'),
(17, 'İletişim Opsiyon 1 Değer', 'contact_mail', 'deneme@gmail.com', 'text'),
(18, 'İletişim Opsiyon 2', 'contact_title_2', 'İşte Telefon numaramız aynen öyle moruk yüzümde masker var aynen öyle', 'text'),
(19, 'İletişim Opsiyon 2 Değer', 'contact_telephone', '05524595867', 'text'),
(20, 'Banner Buton Yazı', 'button_text', 'Teklif Al', 'text'),
(21, 'Copyrgiht Yazı', 'copyright', '© Copyright 2021 | Powered By ASANPROGRAMMER', 'text');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
