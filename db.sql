-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2024 pada 11.38
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itdev7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id_produk`, `nama`, `deskripsi`, `harga`, `gambar`) VALUES
(2, 'TORY BURCH Eleanor ballet ghw - Black, 6', 'The TORY BURCH Eleanor Ballet GHW (Gold Hardware) is a classic and refined ballet flat known for its timeless design and sophisticated appeal. Crafted with high-quality materials and featuring gold hardware accents, these ballet flats are an elegant choice for adding a touch of luxury to any ensemble.', '32000000', 'https://devivace-testing.s3.ap-southeast-1.amazonaws.com/details/product-16846796820127-TORY-S-48-B.jpg'),
(3, 'SALVATORE FERRAGAMO Varina patent leather - Amaretti, 6.5', 'The SALVATORE FERRAGAMO Varina patent leather flats are an epitome of elegance and versatility. These iconic ballet flats, adorned with the signature grosgrain Vara bow and logo-engraved plaque, offer a comfortable and stylish option for both casual and formal occasions, making them a timeless addition to any shoe collection.', '7625000', 'https://images.tokopedia.net/img/cache/100-square/VqbcmM/2023/1/16/89c5d42f-df1b-47a7-94a1-3d40729a6d4d.jpg.webp?ect=4g');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
