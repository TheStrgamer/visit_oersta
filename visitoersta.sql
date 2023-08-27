-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 01. Jun, 2022 13:22 PM
-- Tjener-versjon: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitoersta`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `attraksjon`
--

DROP TABLE IF EXISTS `attraksjon`;
CREATE TABLE IF NOT EXISTS `attraksjon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bilde` varchar(255) COLLATE utf8_bin NOT NULL,
  `tittel` varchar(45) COLLATE utf8_bin NOT NULL,
  `info` text COLLATE utf8_bin NOT NULL,
  `telefonnummer` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `telefonnummer` (`telefonnummer`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dataark for tabell `attraksjon`
--

INSERT INTO `attraksjon` (`id`, `bilde`, `tittel`, `info`, `telefonnummer`) VALUES
(1, 'bilder/lunsjpause_small.jpg', 'Tur på Ramoen', 'Tur i ett av Ørstas mange store og flotte fjell Ramoen. Dette er en vakker tur jeg anbefaler mange å prøve seg på når de er her.', 94039995),
(2, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/14/79/de/76/mount-saksa.jpg?w=1200&h=-1&s=1', 'Topptur til Saksa', 'La deg ikke lure av at Saksa er en av de laveste toppene i området. Plasseringen gjør at utsikten til fjord og fjellparti er spektakulær. Fjellet har tre topper, hvor den nordligste utgjør det høyeste punktet. Man kan starte turen både på Leknes (der ferjekaia ligger) eller fra Urke (mellom Leknes og Urke). Fra Leknes finner du turskilt allerede fra ferjekaia og opp forbi gården. Finn traktorvei i retning Leknesnakken. Bryt av mot nord og følg den stien som fører skrått nordover mot Leknesdalen. Derfra er oppstigingen bratt, dels i sti og dels i steinur. Fra Urke finner du en bratt veg opp fra riksvei 655 på ytre Urke. Følg traktorveg et kort stykke som vil fører deg til en sti som går i lia langs elva oppover til Leknesdalen, deretter som for start fra Leknes.', 94039995),
(3, 'https://images1.peakbook.org/images/193/janyga_20180908_5b940cfaa1de8.jpg?p=xtralarge', 'Topptur til Saudehornet', 'Saudehornet er en flott topp som gir fantastisk utsikt til fjellene i regionen, Ørstafjorden og Ørsta sentrum rett under. Start gjerne turen i Ørsta sentrum, eller kjør opp Skålavegen og parker ved vassverket. Følg veien opp til Vikeskåla og bryt deretter av mot høyre til ryggen bak Vallahornet som (833 moh) rett fremfor Saudehornet. Den siste biten oppover til toppen er steinur.', 94039995),
(4, 'bilder/by_small.jpg', 'Topptur til Kolåstinden', 'La deg ikke lure av at Saksa er en av de laveste toppene i området. Plasseringen gjør at utsikten til fjord og fjellparti er spektakulær. Fjellet har tre topper, hvor den nordligste utgjør det høyeste punktet. ', 94836523),
(17, 'bilder/elv_small.jpg', 'Fin tur opp Fladalen', 'Vakket tur opp Fladalen med fin utsikt over havet, og på toppen er det en fin badeplass for de som tåler kaldt vann', 94039995),
(18, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/5b/44/96/caption.jpg?w=800&h=600&s=1', 'Kajakktur ', 'For bare 1050 kr per voksen kan du og noen du kjenner padle kajakk igjennom Ørstas fineste vann', 47534568),
(23, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/06/f4/65/12/ivar-aasen-tunet.jpg?w=1200&h=-1&s=1', 'Ivar Åsen Tunet', 'IVAR AASEN-TUNET gir born og vaksne gode opplevingar av språk, litteratur, arkitektur, kunst og musikk.\r\n\r\nIvar Aasen (1813–1896) var mannen som endra norsk språkhistorie. Allereie i 1836, 22 år gamal, hadde han klare tankar om korleis ein burde gå fram for å gjenreise det norske språket i skrift. Aasen meinte ein burde ta utgangspunkt i alle dei norske dialektane. Språkforskaren reiste dermed halve jorda rundt innanfor grensene i Noreg for å finne det norske språket.\r\n\r\nIvar Aasen-tunet ligg der Ivar Aasen var fødd og voks opp. Her skreiv han sine første ord og plukka si første symre. I Noregs eldste personmuseum frå 1898 finn du fem bygningar frå fire hundreår og eit uteamfi som har vore stemneplass i over hundre år.', 39827555),
(24, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/f3/4b/3e/her-startar-hellevegen.jpg?w=1200&h=-1&s=1', 'Hellevegen', 'Foreslått varighet\r\n1-2 timer\r\nEn fin tur der mye av stien er en naturlig trapp bygget opp av stein.', 39827555),
(25, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/17/8b/66/alti-orsta.jpg?w=1200&h=-1&s=1', 'Alti Ørsta', 'Er du sliten etter å gå i fjellene, eller har du barelyst til å shoppe?\r\nVelkommen til Alti Ørsta! Alti Ørsta eit triveleg kjøpesenter ved vasskanten i Ørsta sentrum. Her finn du over 30 spennande butikkar, inkludert apotek, Vinmonopolet, kafe og serveringsstader. Vi har 400 gratis parkeringsplassar og er det største kjøpesenteret på Søre Sunnmøre.', 94836523);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `kommentar`
--

DROP TABLE IF EXISTS `kommentar`;
CREATE TABLE IF NOT EXISTS `kommentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tittel` varchar(45) COLLATE utf8_bin NOT NULL,
  `tekst` varchar(255) COLLATE utf8_bin NOT NULL,
  `dato` date NOT NULL,
  `aktid` int(11) NOT NULL,
  `telefonnummer` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aktid` (`aktid`),
  KEY `telefonnummer` (`telefonnummer`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dataark for tabell `kommentar`
--

INSERT INTO `kommentar` (`id`, `tittel`, `tekst`, `dato`, `aktid`, `telefonnummer`) VALUES
(1, 'fin tur', 'dette var en veldig fin tur jeg anbefaler alle', '2022-05-02', 3, 94854522),
(2, 'Veldig fin', 'Fin utsikt', '2022-05-29', 3, 94039995),
(7, 'Anbefales', 'jeg vil sterkt anbefale denne turen', '2022-05-29', 1, 94039995),
(8, 'Veldig fin utsikt', 'Fint sted å gå tur med familien\r\n', '2022-05-29', 1, 94854522),
(9, 'Jeg badet her', 'det var ett veldig fint sted å bade, andbefaler det til andre badeelskere', '2022-05-29', 2, 94568234),
(10, 'Fint sted', 'Veldig fint', '2022-05-29', 4, 94568234),
(11, 'Ut av mitt vann', 'Jeg badet i dette havet og Padlere padlet over meg, hold dere unna mitt vann', '2022-05-29', 18, 94568234),
(12, 'Hold kjeft Roger', 'du og dine badefedre kan holde DERE unna!', '2022-05-29', 18, 94836523),
(13, 'Hvorfor måtte du finne opp nynorsk?', 'Kjære Ivar Åsen, hvorfor måtte du? Det gjør meg trist', '2022-05-29', 23, 94836523),
(14, 'Vakkert sted', 'Alle burde dra hit en gang.\r\n#nynorskforlife', '2022-05-29', 23, 39827555),
(15, 'Trappene gjorde det lettere', 'Trappene gjorde turen lettere og er derfor bra for folk med lite erfaring.', '2022-06-01', 24, 94836523);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `fornavn` varchar(45) COLLATE utf8_bin NOT NULL,
  `etternavn` varchar(45) COLLATE utf8_bin NOT NULL,
  `passord` varchar(45) COLLATE utf8_bin NOT NULL,
  `telefonnummer` int(8) NOT NULL,
  `bosted` varchar(48) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`telefonnummer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dataark for tabell `person`
--

INSERT INTO `person` (`fornavn`, `etternavn`, `passord`, `telefonnummer`, `bosted`) VALUES
('Ivar', 'Åsen', 'NynorskForLife', 39827555, 'Norge'),
('Heavy', 'fra TF2', 'Sasha', 47534568, 'TF2'),
('Konrad Øye', 'Seime', 'apekatt', 94039995, 'Norge'),
('Roger', 'Badefar', 'badekar', 94568234, 'Norge'),
('Robert', 'Åsberg', 'schnabelfant', 94836523, 'Norge'),
('Pelle', 'Prokrast', 'stjelepenger65', 94854522, 'USA');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `reisetips`
--

DROP TABLE IF EXISTS `reisetips`;
CREATE TABLE IF NOT EXISTS `reisetips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tittel` varchar(45) COLLATE utf8_bin NOT NULL,
  `tekst` text COLLATE utf8_bin NOT NULL,
  `telefonnummer` int(8) NOT NULL,
  `dato` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `telefonnummer` (`telefonnummer`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dataark for tabell `reisetips`
--

INSERT INTO `reisetips` (`id`, `tittel`, `tekst`, `telefonnummer`, `dato`) VALUES
(1, 'Veldig fint sted', 'Når jeg først kom hit som fallskjemjeger i 1943 ble jeg begeistret over de fine fjellene og den flotte naturen. Jeg anbefaler sterkt å gå opp til saudehornet.', 94836523, '2022-05-02'),
(2, 'Flotte fjell', 'De høye fjellene er veldig majestetiske, og å se ned fra toppen av dem er noe alle burde oppleve en gang.', 94854522, '2022-05-22'),
(3, 'Apekatt', 'Da jeg og Tobias besøkte dette stedet på vei til Apeland, synes vi det var Schnabelt.\r\nApeland er nærmere enn du tror!', 94039995, '2022-05-23'),
(4, 'Sandwitch', 'Heavy brought sandwitch to mountian, very good.\r\nSasha loved to mow you cowards down from the top.\r\nRUN COWARD.', 47534568, '2022-05-23'),
(6, 'veldig fint sted å bade', 'jeg vil anbefale å bade her', 94568234, '2022-05-29');

--
-- Begrensninger for dumpede tabeller
--

--
-- Begrensninger for tabell `attraksjon`
--
ALTER TABLE `attraksjon`
  ADD CONSTRAINT `attraksjon_ibfk_1` FOREIGN KEY (`telefonnummer`) REFERENCES `person` (`telefonnummer`);

--
-- Begrensninger for tabell `kommentar`
--
ALTER TABLE `kommentar`
  ADD CONSTRAINT `kommentar_ibfk_1` FOREIGN KEY (`aktid`) REFERENCES `attraksjon` (`id`),
  ADD CONSTRAINT `kommentar_ibfk_2` FOREIGN KEY (`telefonnummer`) REFERENCES `person` (`telefonnummer`);

--
-- Begrensninger for tabell `reisetips`
--
ALTER TABLE `reisetips`
  ADD CONSTRAINT `reisetips_ibfk_1` FOREIGN KEY (`telefonnummer`) REFERENCES `person` (`telefonnummer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
