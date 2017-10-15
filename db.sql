-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 15. Oktober 2017 jam 06:57
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wdc17_formatifur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `beasiswa`
--

CREATE TABLE IF NOT EXISTS `beasiswa` (
  `id_beasiswa` varchar(5) NOT NULL,
  `nama_beasiswa` varchar(100) NOT NULL,
  `id_kategori` varchar(5) NOT NULL,
  `keterangan` text NOT NULL,
  `link` varchar(200) NOT NULL,
  `dateline` date NOT NULL,
  PRIMARY KEY (`id_beasiswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beasiswa`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` varchar(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE IF NOT EXISTS `buku_tamu` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `buku_tamu`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` varchar(5) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `alasan` text NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `no_hp` (`no_hp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

