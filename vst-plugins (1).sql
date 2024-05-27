-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 10:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vst-plugins`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `heslo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `email`, `heslo`) VALUES
(1, 'tomas.zsembera@student.ukf.sk', '$2y$10$QWRPFsIztguAjsYINjslbOmkiZ485.2Pb5KGfCPjOPVDeO1JYKfu6');

-- --------------------------------------------------------

--
-- Table structure for table `objednavky`
--

CREATE TABLE `objednavky` (
  `objednavka_id` int(11) NOT NULL,
  `meno` varchar(255) NOT NULL,
  `priezvisko` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `suma` float NOT NULL,
  `datum` date NOT NULL DEFAULT current_timestamp(),
  `adresa` varchar(255) NOT NULL,
  `mesto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `objednavky`
--

INSERT INTO `objednavky` (`objednavka_id`, `meno`, `priezvisko`, `email`, `suma`, `datum`, `adresa`, `mesto`) VALUES
(1, 'martin', 'komar', 'mkomar@gmail.com', 500.59, '2024-05-27', 'Fialková 20', 'Komárno'),
(22, 'Kristian', 'Szabó', 'gymshark@azet.sk', 319.99, '2024-05-27', 'Turecká 12', 'Nové Zámky'),
(23, 'Juraj', 'Pálenkáš', 'srncijazyk@seznam.cz', 210.98, '2024-05-27', 'Podmostom 8 ', 'Ersekujvar'),
(24, 'Tomáš ', 'Katzenbach', 'ekam69@azet.sk', 1283.95, '2024-05-27', 'Podzáhradná 6 ', 'Hurbanovo'),
(25, 'Kristian', 'Szabó', 'gymshark@azet.sk', 668.98, '2024-05-27', 'Pivovarská 30', 'Nové Zámky');

-- --------------------------------------------------------

--
-- Table structure for table `produkty`
--

CREATE TABLE `produkty` (
  `produkt_id` int(11) NOT NULL,
  `nazov` varchar(255) NOT NULL,
  `cena` float NOT NULL,
  `popis` text NOT NULL,
  `obrazok` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produkty`
--

INSERT INTO `produkty` (`produkt_id`, `nazov`, `cena`, `popis`, `obrazok`) VALUES
(6, 'Antares Auto-Tune', 319.99, 'Auto-Tune Artist (predtým Auto-Tune Live) je navrhnutý tak, aby vyhovoval náročným potrebám pracujúcich hudobníkov, producentov a zvukových inžinierov. Obsahuje všetky pokročilé funkcie korekcie výšky tónu v reálnom čase Auto-Tune Pro a je optimalizovaný pre použitie s nízkou latenciou na pódiu alebo v štúdiu.\r\n', '../img/Antares.webp'),
(12, 'Waves Compressor', 149.99, 'H-Comp combines the performance and precision of modern compressors with the charming, and enduring, sound quality of tubes, transformers, and transistors. Even better, unlike the immutable nature of “character” compressors, you can choose from four distinct analog personalities.\r\n\r\nWhether warming up today’s tracks with a vintage vibe, packing percussive power and punch into rhythm tracks and loops, or sweetening vocals with the nostalgic sheen of tubes, H-Comp delivers.', '../img/image_2024-05-26_232124617.png'),
(14, 'VocalSynth 2', 21.99, 'VocalSynth 2 is an immersive vocal experience that adapts and adapts and evolves with your unique style and opens up a world of vocal possibilities. Color and shape vocals with five blendable eccentric must-haves and stompbox-style studio effects. A one-stop for past, present, and future vocal sounds, VocalSynth 2 features a Vocoder, Compuvox, Polyvox, Talkbox, and Biovox: a brand new effect based on the sonic qualities of the human vocal tract.', '../img/image_2024-05-26_234117789.png'),
(15, 'Infinity Bass', 49.99, 'Infinity Bass is a new sound-sculpting tool that makes low-end processing easier than ever. Four different sound profiles (or ‘Modes’) interact with a responsive set of controls that revitalize your track’s lower-end components with added depth and warmth and even generate missing or lacking subharmonics.Infinity Bass is powered by four (4) unique modes that deliver a wide range of processing potential. Whether you need a bass exciter, a dual-band subharmonic synthesizer, a clean sub-bass generator, or a bass-focused all-pass filter, this plugin does it all.', '../img/image_2024-05-27_111151515.png'),
(16, 'Valhalla VintageVerb', 49.99, 'Listen: Valhalla DSP has come unstuck in time.\r\nValhalla VintageVerb™ features 22 classic digital reverbs and 3 color modes inspired by the most beloved reverb hardware from the 1970s and 1980s.\r\n\r\nReverb Modes: Concert Hall / Bright Hall / Plate / Room / Chamber / Random Space / Chorus Space / Ambience / Sanctuary / Dirty Hall / Dirty Plate / Smooth Plate / Smooth Room / Smooth Random / Nonlin / Chaotic Hall / Chaotic Chamber / Chaotic Neutral / Cathedral / Palace / Chamber1979 (new in 4.0.0) / Hall1984 (new in 4.0.0)', '../img/image_2024-05-27_111340090.png'),
(17, 'Kontakt 7 ', 149.5, 'Kontakt is a VST sampler and the industry’s leading instrument-building tool. It powers a huge range of products from both Native Instruments and our partner developers. In fact Kontakt is a gateway to the widest collection of sampled VST instruments available anywhere. Access hundreds of instruments and VST plugins from NI and other leading manufacturers, alongside thousands more from boutique developers, sound designers, and composers. The seventh generation of Kontakt offers a new resizable browser, redesigned Factory Library, fresh effects, and under-the-hood audio improvements. ', '../img/image_2024-05-27_111623959.png'),
(18, 'Playbox', 199, 'Playbox is a VST instrument pack full of samples, chord sets, effects, and presets. It’s perfect for both generating new musical ideas and adding the final layer to complete a production.\r\n\r\nGet over 200 chord sets that can be randomized and tweaked and over 900 samples to start or finish tracks. You can even shake up your own sample libraries, by importing up to 450 of your own sounds. Whatever your style or experience, Playbox is Native Instruments’ best VST for creative experimentation, bringing one-of-a-kind results to every producer.', '../img/image_2024-05-27_111831129.png'),
(19, 'Massive X', 149.99, 'Rethought, rewired, and reincarnated – MASSIVE X is the successor to an iconic synthesizer that helped spawn entire genres. Get everything you need to create any sound imaginable. Quickly patch complex routings to bring your ideas to life – no matter how far-out they might seem – and take things further than you thought you could with expressive, playable modulation. Think it up, dial it in, and define what the future sounds like.\r\n\r\nMASSIVE X will grow, adapt, and evolve with regular free updates – both inspired by, and to inspire, the cultures it helps to create.', '../img/image_2024-05-27_111940848.png'),
(20, 'RX 11 Standard', 324.99, 'RX is the industry standard for audio repair that helps restore, clean up, and improve recordings. It’s long been trusted by professional audio engineers to quickly and reliably deliver clean sound and the new version brings a whole host of new features. If you’re new to audio repair, the Repair Assistant plugin uses machine learning to find and fix audio issues quickly without leaving your DAW. Repair Assistant automatically recognizes problems and intelligently defines an audio repair chain that you can modify to your liking with easy-to-use dials.\r\n\r\nFinally, RX 10 comes loaded with advanced new features like Text Navigation function, Spectral Recovery, Multiple Speaker Detection, De-hum Dynamic Adaptive Mode, and much more.', '../img/image_2024-05-27_112150134.png'),
(21, 'Ozone 11', 219.99, 'Ozone is the perfect plugin for finishing your final track. It’s a widely-acclaimed mastering VST and an essential addition to your production toolkit. Ozone makes mastering easy with cutting-edge matching technology for tonal balance, width, and impact with the updated Master Assistant. Add vocals in the mix with Assistive Vocal Balance and easily tailor processing suggestions with the updated Assistant View.\r\n\r\nOzone 11 is a mastering plugin like no other thanks to cutting-edge processing and AI-powered workflows. Get your tracks release-ready and unlock the full potential of your productions with this indispensable VST.', '../img/image_2024-05-27_112312915.png'),
(22, 'Xfer Serum - Wavetable Synthesizer', 188.99, 'Serum has a Wavetable editor built right in- you can create your own wavetables in a variety of ways. Import audio directly from audio files - Serum has a variety of methods and options for analyzing audio for breaking it apart into individual waveforms. You can import single-cycle wavetables of course, as well as many at once (with in-built sorting options, or manual re-ordering). Morph between various wavetables using standard linear interpolation (crossfading) or via harmonic/spectral morphing. Draw directly on the waveform, with optional grid-size snapping and a variety of shape tools. Generate or modify waveforms using FFT (additive). Create or process waveforms using formula functions. Processing menu options allow you to do the other tasks you would want, such as apply fades, crossfades, normalize, export, and much more.', '../img/image_2024-05-27_154511438.png'),
(23, 'Omnisphere', 499.99, 'Omnisphere is the only software synth in the world to offer a Hardware Synth Integration feature. This remarkable innovation transforms over 65 well-known hardware synthesizers into extensive hands-on controllers that unlock Omnisphere’s newly expanded synthesis capabilities. Simply put, this ground-breaking feature makes using Omnisphere feel just like using a hardware synth! By bridging the physical experience gap between software and hardware, users gain intuitive control of Omnisphere by using the familiar layout of their supported hardware synth. Virtual instrument users can now experience the joy of the hardware synth workflow and hardware synth users can fully expand their capabilities into the vast sonic world of Omnisphere!', '../img/image_2024-05-27_154719530.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `objednavky`
--
ALTER TABLE `objednavky`
  ADD PRIMARY KEY (`objednavka_id`);

--
-- Indexes for table `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`produkt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `objednavky`
--
ALTER TABLE `objednavky`
  MODIFY `objednavka_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `produkty`
--
ALTER TABLE `produkty`
  MODIFY `produkt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
