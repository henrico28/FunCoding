-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 04:37 PM
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
-- Database: `funcoding`
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
(1, 'Java'),
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
('harry', 'e10adc3949ba59abbe56e057f20f883e', 'Harry', 'Korea', 'harry@yahoo.com', '', 2),
('harry2', 'e10adc3949ba59abbe56e057f20f883e', 'Harry', 'Indonesia', 'harxsenjaya@yahoo.com', '', 3),
('Henrico', '25d55ad283aa400af464c76d713c07ad', 'Henrico Leodra', 'Indonesia', '', '', 3),
('yovan', 'e10adc3949ba59abbe56e057f20f883e', 'Yovan Yovan', 'Indonesia', 'leodra28@gmail.com', '', 3);

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
(2, 'Perintah untuk mengosongkan kolom pada HTML adalah', 'tr', 'br', 'td', '&nbsp', '&nbsp', 1),
(3, 'Perintah untuk mengganti baris pada HTML adalah', 'br', 'tr', 'p', 'td', 'br', 1),
(4, 'Type yang berfungsi untuk menerima masukan berupa teks dari pengguna adalah', 'Checkbox', 'Submit', 'File', 'Text', 'Text', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `IdUjian` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `IdMasterSoal` int(11) NOT NULL,
  `Skor` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`IdUjian`, `Username`, `IdMasterSoal`, `Skor`) VALUES
(1, 'harry', 1, 75),
(2, 'harry', 2, 80),
(3, 'yovan', 1, 60),
(4, 'yovan', 2, 60);

-- --------------------------------------------------------

--
-- Table structure for table `ujian-sertifikat`
--

CREATE TABLE `ujian-sertifikat` (
  `IdUjian` int(11) NOT NULL,
  `IdSertifikat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ujian-soal`
--

CREATE TABLE `ujian-soal` (
  `IdUjian` int(11) NOT NULL,
  `IdSoal` int(11) NOT NULL,
  `Jawaban` varchar(100) NOT NULL
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
-- Indexes for table `ujian-sertifikat`
--
ALTER TABLE `ujian-sertifikat`
  ADD KEY `FK-Ujian` (`IdUjian`),
  ADD KEY `FK-Sertifikat` (`IdSertifikat`);

--
-- Indexes for table `ujian-soal`
--
ALTER TABLE `ujian-soal`
  ADD KEY `FK-IdUjian` (`IdUjian`),
  ADD KEY `FK-IdSoal` (`IdSoal`);

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
  MODIFY `IdSoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `IdUjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Constraints for table `ujian-sertifikat`
--
ALTER TABLE `ujian-sertifikat`
  ADD CONSTRAINT `FK-Sertifikat` FOREIGN KEY (`IdSertifikat`) REFERENCES `sertifikat` (`IdSertifikat`),
  ADD CONSTRAINT `FK-Ujian` FOREIGN KEY (`IdUjian`) REFERENCES `ujian` (`IdUjian`);

--
-- Constraints for table `ujian-soal`
--
ALTER TABLE `ujian-soal`
  ADD CONSTRAINT `FK-IdSoal` FOREIGN KEY (`IdSoal`) REFERENCES `soal` (`IdSoal`),
  ADD CONSTRAINT `FK-IdUjian` FOREIGN KEY (`IdUjian`) REFERENCES `ujian` (`IdUjian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
