-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2019 pada 11.17
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

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
-- Struktur dari tabel `bahasa`
--

CREATE TABLE `bahasa` (
  `IdBahasa` int(11) NOT NULL,
  `NamaBahasa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahasa`
--

INSERT INTO `bahasa` (`IdBahasa`, `NamaBahasa`) VALUES
(1, 'Java'),
(2, 'HTML');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `IdLevel` int(11) NOT NULL,
  `NamaLevel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`IdLevel`, `NamaLevel`) VALUES
(1, 'Beginner'),
(2, 'Intermediate'),
(3, 'Advanced');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mastersoal`
--

CREATE TABLE `mastersoal` (
  `IdMasterSoal` int(11) NOT NULL,
  `IdBahasa` int(11) NOT NULL,
  `IdLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mastersoal`
--

INSERT INTO `mastersoal` (`IdMasterSoal`, `IdBahasa`, `IdLevel`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `Username` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `NamaPengguna` varchar(100) NOT NULL,
  `Negara` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `IdPosisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`Username`, `Pass`, `NamaPengguna`, `Negara`, `Email`, `IdPosisi`) VALUES
('harry', 'e10adc3949ba59abbe56e057f20f883e', 'Harry', 'Korea', 'harry@yahoo.com', 3),
('harry2', 'e10adc3949ba59abbe56e057f20f883e', 'Harry', 'Indonesia', 'harxsenjaya@yahoo.com', 3),
('Henrico', '25d55ad283aa400af464c76d713c07ad', 'Henrico Leodra', 'Indonesia', '', 3),
('yovan', 'e10adc3949ba59abbe56e057f20f883e', 'Yovan Yovan', 'Indonesia', 'leodra28@gmail.com', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posisi`
--

CREATE TABLE `posisi` (
  `IdPosisi` int(11) NOT NULL,
  `NamaPosisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posisi`
--

INSERT INTO `posisi` (`IdPosisi`, `NamaPosisi`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'Pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat`
--

CREATE TABLE `sertifikat` (
  `IdSertifikat` int(11) NOT NULL,
  `Waktu` datetime NOT NULL,
  `Username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian`
--

CREATE TABLE `ujian` (
  `IdUjian` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `IdMasterSoal` int(11) NOT NULL,
  `Skor` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ujian`
--

INSERT INTO `ujian` (`IdUjian`, `Username`, `IdMasterSoal`, `Skor`) VALUES
(1, 'harry', 1, 75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian-sertifikat`
--

CREATE TABLE `ujian-sertifikat` (
  `IdUjian` int(11) NOT NULL,
  `IdSertifikat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian-soal`
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
-- Indeks untuk tabel `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`IdBahasa`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`IdLevel`);

--
-- Indeks untuk tabel `mastersoal`
--
ALTER TABLE `mastersoal`
  ADD PRIMARY KEY (`IdMasterSoal`),
  ADD KEY `FK-Master_Bahasa` (`IdBahasa`),
  ADD KEY `FK-Master_Level` (`IdLevel`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `Fk-Pengguna_Posisi` (`IdPosisi`);

--
-- Indeks untuk tabel `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`IdPosisi`);

--
-- Indeks untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`IdSertifikat`),
  ADD KEY `FK-Sertifikat_Pengguna` (`Username`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`IdSoal`),
  ADD KEY `FK-Soal_Master` (`IdMasterSoal`);

--
-- Indeks untuk tabel `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`IdUjian`),
  ADD KEY `FK-Ujian_Pengguna` (`Username`),
  ADD KEY `FK-Ujian_Master` (`IdMasterSoal`);

--
-- Indeks untuk tabel `ujian-sertifikat`
--
ALTER TABLE `ujian-sertifikat`
  ADD KEY `FK-Ujian` (`IdUjian`),
  ADD KEY `FK-Sertifikat` (`IdSertifikat`);

--
-- Indeks untuk tabel `ujian-soal`
--
ALTER TABLE `ujian-soal`
  ADD KEY `FK-IdUjian` (`IdUjian`),
  ADD KEY `FK-IdSoal` (`IdSoal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `IdBahasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `IdLevel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mastersoal`
--
ALTER TABLE `mastersoal`
  MODIFY `IdMasterSoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `posisi`
--
ALTER TABLE `posisi`
  MODIFY `IdPosisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `IdSertifikat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `IdSoal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ujian`
--
ALTER TABLE `ujian`
  MODIFY `IdUjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mastersoal`
--
ALTER TABLE `mastersoal`
  ADD CONSTRAINT `FK-Master_Bahasa` FOREIGN KEY (`IdBahasa`) REFERENCES `bahasa` (`IdBahasa`),
  ADD CONSTRAINT `FK-Master_Level` FOREIGN KEY (`IdLevel`) REFERENCES `level` (`IdLevel`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `Fk-Pengguna_Posisi` FOREIGN KEY (`IdPosisi`) REFERENCES `posisi` (`IdPosisi`);

--
-- Ketidakleluasaan untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD CONSTRAINT `FK-Sertifikat_Pengguna` FOREIGN KEY (`Username`) REFERENCES `pengguna` (`Username`);

--
-- Ketidakleluasaan untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `FK-Soal_Master` FOREIGN KEY (`IdMasterSoal`) REFERENCES `mastersoal` (`IdMasterSoal`);

--
-- Ketidakleluasaan untuk tabel `ujian`
--
ALTER TABLE `ujian`
  ADD CONSTRAINT `FK-Ujian_Master` FOREIGN KEY (`IdMasterSoal`) REFERENCES `mastersoal` (`IdMasterSoal`),
  ADD CONSTRAINT `FK-Ujian_Pengguna` FOREIGN KEY (`Username`) REFERENCES `pengguna` (`Username`);

--
-- Ketidakleluasaan untuk tabel `ujian-sertifikat`
--
ALTER TABLE `ujian-sertifikat`
  ADD CONSTRAINT `FK-Sertifikat` FOREIGN KEY (`IdSertifikat`) REFERENCES `sertifikat` (`IdSertifikat`),
  ADD CONSTRAINT `FK-Ujian` FOREIGN KEY (`IdUjian`) REFERENCES `ujian` (`IdUjian`);

--
-- Ketidakleluasaan untuk tabel `ujian-soal`
--
ALTER TABLE `ujian-soal`
  ADD CONSTRAINT `FK-IdSoal` FOREIGN KEY (`IdSoal`) REFERENCES `soal` (`IdSoal`),
  ADD CONSTRAINT `FK-IdUjian` FOREIGN KEY (`IdUjian`) REFERENCES `ujian` (`IdUjian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
