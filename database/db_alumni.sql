-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2020 at 12:56 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `judul_banner` varchar(125) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `judul_banner`, `deskripsi`, `gambar`) VALUES
(8, 'asd', 'asdasd', 'gambar1607860187.jpg'),
(9, 'asd', 'asd', 'gambar1607860218.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(125) NOT NULL,
  `judul_event` varchar(125) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(125) NOT NULL,
  `tanggal_posting` varchar(125) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `judul_event`, `deskripsi`, `foto`, `tanggal_posting`, `id_user`) VALUES
(4, 'Acara pertama', 'Platform khusus event alumni', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Id natus qui nobis laboriosam laborum libero quos illum, sed numquam aliquam quia debitis, hic vitae dolor aliquid doloremque modi voluptas! Aspernatur.', 'event.jpg', '2020-08-24', 2),
(5, 'Acara kedua', 'Naik gunung rinjani', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa itaque veniam perspiciatis, ea et totam in rem distinctio sit veritatis nisi doloremque quam at, reprehenderit cum repellendus cumque natus quidem.', 'event-gunung.jpg', '2020-08-24', 2);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `id_pertanyaan`, `id_user`, `jawaban`) VALUES
(39, 2, 6, '2 Bulan'),
(40, 4, 6, 'Orang Tua'),
(41, 5, 6, 'Bekerja'),
(42, 6, 6, 'Kurang Erat'),
(43, 7, 6, 'Pendidikan Editor'),
(44, 8, 6, '20 Juta'),
(45, 9, 6, 'Setelah Lulus'),
(46, 10, 6, 'Mengikuti Event'),
(47, 11, 6, '4 Perusahaan'),
(48, 12, 6, '4 Perusahaan'),
(49, 13, 6, '4 Perusahaan'),
(50, 14, 6, 'Perusahaan Editor'),
(51, 15, 6, 'Karena Kebutuhan'),
(78, 2, 7, '2 Bulan'),
(79, 4, 7, 'Beasiswa'),
(80, 5, 7, 'Tidak'),
(81, 6, 7, 'Cukup erat'),
(82, 7, 7, 'S1'),
(83, 8, 7, '10 Juta'),
(84, 9, 7, 'Kemarin'),
(85, 10, 7, 'Sulit pak'),
(86, 11, 7, '5 instansi'),
(87, 12, 7, '1 instansi'),
(88, 13, 7, '1 instansi'),
(89, 14, 7, 'PT. Firman indonesia'),
(90, 15, 7, 'Ijazahnya pak');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(11) NOT NULL,
  `nama_jurnal` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kaprodi`
--

CREATE TABLE `kaprodi` (
  `id_kaprodi` int(11) NOT NULL,
  `nidn` int(11) NOT NULL,
  `nama_lengkap` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` varchar(125) NOT NULL,
  `tempat_lahir` varchar(125) NOT NULL,
  `agama` varchar(125) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `periode_jabatan` varchar(125) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id_kritiksaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kritik` text NOT NULL,
  `saran` text NOT NULL,
  `tanggal_posting` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kritik_saran`
--

INSERT INTO `kritik_saran` (`id_kritiksaran`, `id_user`, `kritik`, `saran`, `tanggal_posting`) VALUES
(1, 2, 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptates, dolore numquam ut enim commodi autem a, natus dolorum vitae voluptas molestiae nihil sunt magni similique quasi? Quas magnam, totam.', '2020-08-21'),
(2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptates, dolore numquam ut enim commodi autem a, natus dolorum vitae voluptas molestiae nihil sunt magni similique quasi? Quas magnam, totam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptates, dolore numquam ut enim commodi autem a, natus dolorum vitae voluptas molestiae nihil sunt magni similique quasi? Quas magnam, totam.', '2020-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `nama_perusahaan` varchar(125) NOT NULL,
  `judul_lowongan` varchar(125) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_posting` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `nama_perusahaan`, `judul_lowongan`, `deskripsi`, `gambar`, `tanggal_posting`) VALUES
(6, 'PT. Kafindo Cita Rasa Tangerang', 'Lowongan Kerja Banyak Posisi PT. Kafindo Cita Rasa Tangerang', 'Kami sedang membutuhkan kandidat untuk beberapa posisi berikut :\r\n\r\nAdmin Surat Jalan\r\nAdmin Frozen Food\r\nAdmin Distributor\r\nSales Cashvan\r\nMD Wanita & Pria\r\nAdmin Sosmed\r\nAdmin Inventory\r\nSenior Finance\r\nSenior Adm. Marketing\r\nKualifikasi :\r\n\r\nPria/Wanita (diutamakan wanita untuk admin)\r\nUsia maksimal 30 tahun\r\nPengalaman di bidang yang sama minimal 2 tahun\r\nJika anda tertarik dan memenuhi kualifikasi diatas, silahkan kirim CV dan lamaran terbaru anda ke email berikut : recruitment.kafindocitrarasa@gmail.com / spvhrga@kafindo.com \r\n\r\nDengan subjek ” Posisi yang dilamar_LinkedIn “\r\n\r\nUntuk penempatan semua posisi di bawah ini di Puri Kembangan Jakarta Barat & Gudang Dadap Kosambi Tangerang', 'loker.jpg', '2020 / Aug / 24'),
(7, 'Horison Ultima Ratu Hotel Serang', 'Lowongan Kerja Horison Ultima Ratu Hotel Serang', 'Kami sedang membutuhkan kandidat untuk posisi berikut :\r\n\r\nFood and Beverages Manager\r\nExecutive Chef\r\nQUALIFICATION :\r\n\r\nExperience Min. 1-2 year at the same position\r\nWell groom and service oriented\r\nHospitality Oriented, diligent, and responsible\r\nRelevant education education background with the position being applied\r\nMaximum 30 years old\r\nPlease send your best CV to : hrm.ratuserang@horisonhotels.com', 'loker2.jpg', '2020 / Aug / 24'),
(8, 'Rumah Sakit Kurnia Cilegon', 'Lowongan Kerja Rumah Sakit Kurnia Cilegon', 'Kami sedang membutuhkan kandidat untuk posisi berikut :\r\n\r\nAnalis Kesehatan\r\n\r\nKualifikasi :\r\n\r\nPendidikan Minimal D3 Analis Kesehatan\r\nSehat Jasmani & Rohani\r\nBerpengalaman (diutamakan)\r\nMampu bekerjasama secara team\r\nJujur, Teliti, Cekatan, Komunikatif, Tanggung Jawab dan memiliki inisiatif yang baik\r\nMemiliki STR/Sertifikat Kompetensi IRNIA\r\nBagi yang berminat silahkan mengirim CV dan surat lamaran yang ditujukan kepada HRD RS Kurnia Cilegon via email ke alamat : hrd@rskurnia.co.id', 'loker3.png', '2020 / Aug / 24');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `pertanyaan`) VALUES
(2, 'Berapa Waktu Yang Dibutuhkan Untuk Mencari Pekerjaan ?'),
(4, 'Darimana Sumber Dana Dalam Pembiayaan Kuliah ?'),
(5, 'Apakah Anda Bekerja Saat Ini (Termasuk Kerja Sambilan dan Wirausaha) ?'),
(6, 'Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?'),
(7, 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?'),
(8, 'Kira-kira berapa pendapatan anda setiap bulannya?'),
(9, 'Kapan anda mulai mencari pekerjaan?'),
(10, 'Bagaimana anda mencari pekerjaan tersebut ?'),
(11, 'Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memperoleh pekerjaan pertama ?'),
(12, 'Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda ?'),
(13, 'Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara ?'),
(14, 'Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang ?'),
(15, 'Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya ?');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(2, 'admin'),
(3, 'kaprodi'),
(4, 'alumni');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `testimoni` text NOT NULL,
  `is_view` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `id_user`, `testimoni`, `is_view`) VALUES
(2, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius facere veritatis tempora, nulla nihil reiciendis fugiat? Minima vero ad perspiciatis molestiae ipsum accusamus blanditiis deleniti impedit totam esse consequatur aperiam inventore, numquam, non id consequuntur repudiandae at a quas soluta error eaque. Excepturi cupiditate quisquam, debitis laudantium ut, ipsa fugiat.', 'Ya'),
(5, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ab nostrum porro, facilis accusantium officiis qui est, delectus nulla expedita a aliquam, dolore non mollitia adipisci, doloribus aperiam. Veritatis, tenetur?', 'Tidak'),
(6, 2, 'lorem', 'Ya'),
(7, 4, 'Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Doloribus animi perspiciatis est, accusantium, vero corrupti! Cum necessitatibus aspernatur, mollitia, assumenda magnam harum, nesciunt repellat praesentium ex qui est debitis architecto.', 'Tidak'),
(8, 2, 'Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Doloribus animi perspiciatis est, accusantium, vero corrupti! Cum necessitatibus aspernatur, mollitia, assumenda magnam harum, nesciunt repellat praesentium ex qui est debitis architecto.', 'Ya'),
(9, 6, 'Saya sangat beruntung dapat berkuliah pada Universitas Sultan Agen Tirtayasa Prodi Pendidikan Fisika, saya mendapat sebuah pelajaran bahasa yang berguna bagi saya meski pekerjaan sekarang kurang nyambung dengan histori pendidikan saya, berkat almamater saya, saya sekarang dapat menjadi Video Editor Cinematic di negara sakura (Japan)', 'Ya'),
(10, 7, 'Saya berkuliah di Universitas Sultan Ageng Tirtayasa Prodi Pendidikan Fisika mendapatkan pengalaman edukasi yang baik untuk bekal saya & saya sekarang menjadi seorang guru.', 'Ya'),
(11, 8, 'Saya Ica Faizah, senang dapat berkuliah disini, banyak knowledge yang saya dapat dari para dosen atau teman yang berbeda wilayah, meski kurang tepat pekerjaan saya dengan lulusan tapi pelajaran bahasa yang saya peroleh bermanfaat untuk pekerjaan saya', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(11) NOT NULL,
  `gambar` varchar(125) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `role_id`, `gambar`, `status`) VALUES
(2, 'admin', 'admin@untirta.ac.id', '$2y$10$f31BKv0ULTi59Om7PieGf.at0.2VZfkVtRSj/e9uPszAkDC4hDjdC', 2, 'sekre.png', ''),
(11, 'asd', 'asd@asd.com', '$2y$10$juCHXQnDRjqa8ZfdzNP.QetWW6JggWMlrbaLSw9mlfu0PlRxmGpza', 4, 'default.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `npm` int(125) NOT NULL,
  `nama_lengkap` varchar(125) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telpon` int(11) NOT NULL,
  `ipk` varchar(11) NOT NULL,
  `jenjang` varchar(20) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(125) NOT NULL,
  `tahun_masuk` varchar(10) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `id_user`, `npm`, `nama_lengkap`, `tempat_lahir`, `jenis_kelamin`, `agama`, `alamat`, `telpon`, `ipk`, `jenjang`, `pekerjaan`, `nama_perusahaan`, `tahun_masuk`, `tahun_lulus`) VALUES
(9, 11, 12312111, 'asdasd', 'asdasdasd', 'Laki-Laki', 'Islam', 'serang', 9238123, '3.36', 'S2', 'Freelancer', 'PT. Kafindo Cita Rasa Tangerang', '2016', '2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- Indexes for table `kaprodi`
--
ALTER TABLE `kaprodi`
  ADD PRIMARY KEY (`id_kaprodi`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id_kritiksaran`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kaprodi`
--
ALTER TABLE `kaprodi`
  MODIFY `id_kaprodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id_kritiksaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
