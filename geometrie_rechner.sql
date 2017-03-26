-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Jan 2017 um 14:32
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `geometrie_rechner`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kreise`
--

CREATE TABLE `kreise` (
  `id` int(10) UNSIGNED NOT NULL,
  `radius` double(15,2) NOT NULL,
  `durchmesser` double(15,2) NOT NULL,
  `umfang` double(15,2) NOT NULL,
  `flacheninhalt` double(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kugeln`
--

CREATE TABLE `kugeln` (
  `kugel_id` int(10) UNSIGNED NOT NULL,
  `radius` double(15,2) NOT NULL,
  `durchmesser` double(15,2) NOT NULL,
  `umfang` double(15,2) NOT NULL,
  `oberflache` double(15,2) NOT NULL,
  `volumen` double(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `quader`
--

CREATE TABLE `quader` (
  `quader_id` int(10) UNSIGNED NOT NULL,
  `breite` decimal(10,2) NOT NULL,
  `lange` decimal(10,2) NOT NULL,
  `hohe` decimal(10,2) NOT NULL,
  `oberflache` decimal(10,2) NOT NULL,
  `volumen` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rechtecke`
--

CREATE TABLE `rechtecke` (
  `rechteck_id` int(10) UNSIGNED NOT NULL,
  `breite` decimal(10,2) NOT NULL,
  `lange` decimal(10,2) NOT NULL,
  `flacheninahlt` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kreise`
--
ALTER TABLE `kreise`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `kugeln`
--
ALTER TABLE `kugeln`
  ADD PRIMARY KEY (`kugel_id`);

--
-- Indizes für die Tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `quader`
--
ALTER TABLE `quader`
  ADD PRIMARY KEY (`quader_id`);

--
-- Indizes für die Tabelle `rechtecke`
--
ALTER TABLE `rechtecke`
  ADD PRIMARY KEY (`rechteck_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `kreise`
--
ALTER TABLE `kreise`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `kugeln`
--
ALTER TABLE `kugeln`
  MODIFY `kugel_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `quader`
--
ALTER TABLE `quader`
  MODIFY `quader_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `rechtecke`
--
ALTER TABLE `rechtecke`
  MODIFY `rechteck_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
