-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2019 at 04:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FunCoding`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahasa`
--

CREATE TABLE `bahasa` (
  `IdBahasa` int(11) NOT NULL,
  `NamaBahasa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahasa`
--

INSERT INTO `bahasa` (`IdBahasa`, `NamaBahasa`) VALUES
(1, 'CSS'),
(2, 'HTML');

-- --------------------------------------------------------

--
-- Table structure for table `lvl`
--

CREATE TABLE `lvl` (
  `IdLevel` int(11) NOT NULL,
  `NamaLevel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lvl`
--

INSERT INTO `lvl` (`IdLevel`, `NamaLevel`) VALUES
(1, 'Beginner'),
(2, 'Intermediate'),
(3, 'Advanced');

-- --------------------------------------------------------

--
-- Table structure for table `mastersoal`
--

CREATE TABLE `mastersoal` (
  `IdMasterSoal` int(11) NOT NULL,
  `IdBahasa` int(11) NOT NULL,
  `IdLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mastersoal`
--

INSERT INTO `mastersoal` (`IdMasterSoal`, `IdBahasa`, `IdLevel`) VALUES
(1, 2, 1),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `Username` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `NamaPengguna` varchar(100) NOT NULL,
  `Negara` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `profil` varchar(100) NOT NULL,
  `IdPosisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`Username`, `Pass`, `NamaPengguna`, `Negara`, `Email`, `profil`, `IdPosisi`) VALUES
('enrico', 'e10adc3949ba59abbe56e057f20f883e', 'Enrico Wibawa', 'United States', 'enrico@gmail.com', 'man-user.png', 3),
('harry', 'e10adc3949ba59abbe56e057f20f883e', 'Harry Senjaya', 'Indonesia', 'harry@gmail.com', 'man-user.png', 1),
('henrico', 'e10adc3949ba59abbe56e057f20f883e', 'Henrico Leodra', 'Indonesia', 'henrico@gmail.com', 'man-user.png', 3),
('indra', 'e10adc3949ba59abbe56e057f20f883e', 'Indra Permana', 'Indonesia', 'indra@gmail.com', 'man-user.png', 3),
('jodee', 'e10adc3949ba59abbe56e057f20f883e', 'Joshua Delavo', 'Japan', 'jode@gmail.com', 'man-user.png', 3),
('jodii', 'e10adc3949ba59abbe56e057f20f883e', 'Jodi Tanato', 'China', 'jodi@gmail.com', 'man-user.png', 3),
('michael', 'e10adc3949ba59abbe56e057f20f883e', 'Ignatius Michael', 'Indonesia', 'michael@gmail.com', 'man-user.png', 3),
('namchee', 'e10adc3949ba59abbe56e057f20f883e', 'Cristopher', 'Japan', 'namchee@gmail.com', 'man-user.png', 3),
('yovan', 'e10adc3949ba59abbe56e057f20f883e', 'Yovannanta Jong', 'Indonesia', 'yovan@gmail.com', 'man-user.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `penggunasoal`
--

CREATE TABLE `penggunasoal` (
  `Username` varchar(100) NOT NULL,
  `IdSoal` int(11) NOT NULL,
  `Jawaban` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penggunasoal`
--

INSERT INTO `penggunasoal` (`Username`, `IdSoal`, `Jawaban`) VALUES
('henrico', 1, 'password'),
('henrico', 2, 'h1'),
('henrico', 3, 'br'),
('henrico', 4, 'Text'),
('henrico', 5, 'footer'),
('henrico', 6, 'strong'),
('henrico', 7, 'em'),
('henrico', 8, 'ol'),
('henrico', 9, 'ul'),
('henrico', 10, 'select'),
('michael', 1, 'password'),
('michael', 2, 'h1'),
('michael', 3, 'br'),
('michael', 4, 'Text'),
('michael', 5, 'footer'),
('michael', 6, 'strong'),
('michael', 7, 'em'),
('michael', 8, 'ol'),
('michael', 9, 'ul'),
('michael', 10, 'select'),
('michael', 11, 'style'),
('michael', 12, 'In'),
('michael', 13, 'style'),
('michael', 14, 'background-color'),
('michael', 15, 'color'),
('michael', 16, 'font-size'),
('michael', 17, 'font-family'),
('michael', 18, 'margin-left'),
('michael', 19, 'static'),
('michael', 20, '.test'),
('jodii', 11, 'css'),
('jodii', 12, 'In'),
('jodii', 13, 'style'),
('jodii', 14, 'background-color'),
('jodii', 15, 'color'),
('jodii', 16, 'text-style'),
('jodii', 17, 'font-family'),
('jodii', 18, 'indet'),
('jodii', 19, 'fixed'),
('jodii', 20, '*test'),
('enrico', 1, 'password'),
('enrico', 2, 'h1'),
('enrico', 3, 'br'),
('enrico', 4, 'Text'),
('enrico', 5, 'footer'),
('enrico', 6, 'important'),
('enrico', 7, 'italic'),
('enrico', 8, 'ol'),
('enrico', 9, 'ul'),
('enrico', 10, 'select');

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `IdPosisi` int(11) NOT NULL,
  `NamaPosisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`IdPosisi`, `NamaPosisi`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `IdSertifikat` int(11) NOT NULL,
  `Waktu` datetime NOT NULL,
  `Username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `IdSoal` int(11) NOT NULL,
  `Soal` varchar(200) NOT NULL,
  `A` varchar(200) NOT NULL,
  `B` varchar(200) NOT NULL,
  `C` varchar(200) NOT NULL,
  `D` varchar(200) NOT NULL,
  `JawabanSoal` varchar(200) NOT NULL,
  `IdMasterSoal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`IdSoal`, `Soal`, `A`, `B`, `C`, `D`, `JawabanSoal`, `IdMasterSoal`) VALUES
(1, '#**# merupakan karakter yang terdapat pada type data', 'text', 'password', 'radio', 'submit', 'password', 1),
(2, 'Choose the correct HTML element for the largest heading', 'heading', 'h1', 'h6', 'head', 'h1', 1),
(3, 'Perintah untuk mengganti baris pada HTML adalah', 'br', 'tr', 'p', 'td', 'br', 1),
(4, 'Type yang berfungsi untuk menerima masukan berupa teks dari pengguna adalah', 'Checkbox', 'Submit', 'File', 'Text', 'Text', 1),
(5, 'Which HTML element is used to specify a footer for a document or section?', 'footer', 'bottom', 'section', 'head', 'footer', 1),
(6, 'Choose the correct HTML element to define important text', 'strong', 'important', 'i', 'b', 'strong', 1),
(7, 'Choose the correct HTML element to define emphasized text', 'italic', 'i', 'em', 'p', 'em', 1),
(8, 'How can you make a numbered list?', 'ul', 'ol', 'list', 'dl', 'ol', 1),
(9, 'How can you make a bulleted list', 'list', 'ol', 'dl', 'ul', 'ul', 1),
(10, 'What is the correct HTML for making a drop-down list?', 'select', 'list', 'input type dropdown', 'input type list', 'select', 1),
(11, 'Which HTML tag is used to define an internal style sheet?', 'css', 'script', 'style', 'htmlcss', 'style', 2),
(12, 'Where in an HTML document is the correct place to refer to an external style sheet?', 'In the head section', 'In the body section', 'At the end of the document', 'At the start of the document', 'In the head section', 2),
(13, 'Which HTML attribute is used to define inline styles?', 'style', 'styles', 'font', 'class', 'style', 2),
(14, 'Which property is used to change the background color?', 'background-color', 'bgcolor', 'color', 'backgroundcolor', 'background-color', 2),
(15, 'Which CSS property is used to change the text color of an element?', 'color', 'fgcolor', 'text-color', 'ecolor', 'color', 2),
(16, 'Which CSS property controls the text size?', 'text-style', 'text-size', 'font-size', 'font-style', 'font-size', 2),
(17, 'Which property is used to change the font of an element?', 'font-family', 'font-style', 'font-weight', 'font-decoration', 'font-family', 2),
(18, 'Which property is used to change the left margin of an element?', 'indet', 'margin-left', 'padding-left', 'left-margin', 'margin-left', 2),
(19, 'What is the default value of the position property?', 'fixed', 'static', 'relative', 'absolute', 'static', 2),
(20, 'How do you select elements with class name \"test\"?', '*test', '.test', 'test', '#test', '.test', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `IdUjian` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `IdMasterSoal` int(11) NOT NULL,
  `Skor` int(3) NOT NULL,
  `Hasil` varchar(100) NOT NULL,
  `Durasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`IdUjian`, `Username`, `IdMasterSoal`, `Skor`, `Hasil`, `Durasi`) VALUES
(48, 'henrico', 1, 100, 'LULUS', 66),
(49, 'michael', 1, 100, 'LULUS', 24),
(50, 'michael', 2, 90, 'LULUS', 30),
(51, 'jodii', 2, 40, 'TIDAK LULUS', 2),
(52, 'enrico', 1, 80, 'LULUS', 26);

-- --------------------------------------------------------

--
-- Table structure for table `ujiansertifikat`
--

CREATE TABLE `ujiansertifikat` (
  `IdUjian` int(11) NOT NULL,
  `IdSertifikat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`IdBahasa`);

--
-- Indexes for table `lvl`
--
ALTER TABLE `lvl`
  ADD PRIMARY KEY (`IdLevel`);

--
-- Indexes for table `mastersoal`
--
ALTER TABLE `mastersoal`
  ADD PRIMARY KEY (`IdMasterSoal`),
  ADD KEY `FK-Master_Bahasa` (`IdBahasa`),
  ADD KEY `FK-Master_Level` (`IdLevel`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `Fk-Pengguna_Posisi` (`IdPosisi`);

--
-- Indexes for table `penggunasoal`
--
ALTER TABLE `penggunasoal`
  ADD KEY `FK-IdSoal` (`IdSoal`),
  ADD KEY `FK-Username` (`Username`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`IdPosisi`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`IdSertifikat`),
  ADD KEY `FK-Sertifikat_Pengguna` (`Username`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`IdSoal`),
  ADD KEY `FK-Soal_Master` (`IdMasterSoal`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`IdUjian`),
  ADD KEY `FK-Ujian_Pengguna` (`Username`),
  ADD KEY `FK-Ujian_Master` (`IdMasterSoal`);

--
-- Indexes for table `ujiansertifikat`
--
ALTER TABLE `ujiansertifikat`
  ADD KEY `FK-Ujian` (`IdUjian`),
  ADD KEY `FK-Sertifikat` (`IdSertifikat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `IdBahasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lvl`
--
ALTER TABLE `lvl`
  MODIFY `IdLevel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mastersoal`
--
ALTER TABLE `mastersoal`
  MODIFY `IdMasterSoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `IdPosisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `IdSertifikat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `IdSoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `IdUjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mastersoal`
--
ALTER TABLE `mastersoal`
  ADD CONSTRAINT `FK-Master_Bahasa` FOREIGN KEY (`IdBahasa`) REFERENCES `bahasa` (`IdBahasa`),
  ADD CONSTRAINT `FK-Master_Level` FOREIGN KEY (`IdLevel`) REFERENCES `lvl` (`IdLevel`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `Fk-Pengguna_Posisi` FOREIGN KEY (`IdPosisi`) REFERENCES `posisi` (`IdPosisi`);

--
-- Constraints for table `penggunasoal`
--
ALTER TABLE `penggunasoal`
  ADD CONSTRAINT `FK-IdSoal` FOREIGN KEY (`IdSoal`) REFERENCES `soal` (`IdSoal`),
  ADD CONSTRAINT `FK-Username` FOREIGN KEY (`Username`) REFERENCES `pengguna` (`Username`);

--
-- Constraints for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD CONSTRAINT `FK-Sertifikat_Pengguna` FOREIGN KEY (`Username`) REFERENCES `pengguna` (`Username`);

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `FK-Soal_Master` FOREIGN KEY (`IdMasterSoal`) REFERENCES `mastersoal` (`IdMasterSoal`);

--
-- Constraints for table `ujian`
--
ALTER TABLE `ujian`
  ADD CONSTRAINT `FK-Ujian_Master` FOREIGN KEY (`IdMasterSoal`) REFERENCES `mastersoal` (`IdMasterSoal`),
  ADD CONSTRAINT `FK-Ujian_Pengguna` FOREIGN KEY (`Username`) REFERENCES `pengguna` (`Username`);

--
-- Constraints for table `ujiansertifikat`
--
ALTER TABLE `ujiansertifikat`
  ADD CONSTRAINT `FK-Sertifikat` FOREIGN KEY (`IdSertifikat`) REFERENCES `sertifikat` (`IdSertifikat`),
  ADD CONSTRAINT `FK-Ujian` FOREIGN KEY (`IdUjian`) REFERENCES `ujian` (`IdUjian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
