-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 09:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas_marunggi`
--

-- --------------------------------------------------------

--
-- Table structure for table `atribut_puskesmas`
--

CREATE TABLE `atribut_puskesmas` (
  `id_atribut` int(11) NOT NULL,
  `jenis_atribut` varchar(100) NOT NULL,
  `nama_atribut` varchar(200) NOT NULL,
  `dekripsi_atribut` text NOT NULL,
  `gambar_atribut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atribut_puskesmas`
--

INSERT INTO `atribut_puskesmas` (`id_atribut`, `jenis_atribut`, `nama_atribut`, `dekripsi_atribut`, `gambar_atribut`) VALUES
(3, 'Atribut Pengunjung Puskesmas', 'Kokarde Pasien Prioritas', 'Dekripsi Pasien Prioritas', '/uploads/atribut/abf8d1ad203e2763dc7e25d4ead3ff9e.jpg'),
(4, 'Atribut pengunjung Puskesmas', 'Kokarde Ibu Hamil', 'Digunakan oleh Pasien Ibu hamil', '/uploads/atribut/2f916cd6ae0ad99ede1c50c1ea19c42a.jpeg'),
(5, 'Atribut pengunjung Puskesmas', 'kokarde TB', 'Digunakan oleh Pasien TB', '/uploads/atribut/119b335cbbd728308b1635c584ca0512.jpeg'),
(6, 'Atribut pengunjung Puskesmas', 'Kokarde Lansia', 'Digunakan oleh Pasien Lansia', '/uploads/atribut/ab4490abd1b11e76bfe8f5670c80f5f1.jpeg'),
(7, 'Atribut Tamu Puskesmas', 'Kokarde Tamu', 'Digunakan oleh Tamu Puskesmas', '/uploads/atribut/2670655323a3a9e9bab8fdd98083da84.jpeg'),
(8, 'Atribut Pegawai Puskesmas', 'Pin Pegawai', 'Pin ceria yang digunakan oleh Seluruh Pegawai Puskesmas', '/uploads/atribut/155fa200f20479518f13dcac2a54d0c9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `bagian_upt`
--

CREATE TABLE `bagian_upt` (
  `bagupt_id` int(11) NOT NULL,
  `bagupt_nama` varchar(200) NOT NULL,
  `bagupt_deskripsi` text NOT NULL,
  `bagupt_logoicon` varchar(300) NOT NULL,
  `bagupt_layout` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_instansi`
--

CREATE TABLE `data_instansi` (
  `id` int(11) NOT NULL,
  `nama_upt` varchar(100) NOT NULL,
  `alamat_upt` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_instansi`
--

INSERT INTO `data_instansi` (`id`, `nama_upt`, `alamat_upt`, `telp`, `no_wa`, `email`, `website`) VALUES
(1, 'Puskesmas Marunggi', 'Jl. Ambacang No.Desa, Kp. Baru Padusunan, Pariaman Tim., Kota Pariaman, Sumatera Barat 25526', '0813-6348-4344', '081363484344', 'puskesmaskpbarupadusunan@gmail.com', 'puskesmaskpbarupadusunan.pariamankota.go.id');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(100) NOT NULL,
  `kategori_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_status`) VALUES
(1, 'Menu', 1),
(2, 'Slider', 1),
(3, 'Tentang dan Jam Layanan', 1),
(4, 'Pelayanan Kami', 1),
(5, 'Berita Terbaru', 1),
(6, 'Galeri', 1),
(7, 'Pengumuman', 1),
(8, 'Artikel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `media_social`
--

CREATE TABLE `media_social` (
  `sosmed_id` int(11) NOT NULL,
  `sosmed_icon` varchar(250) NOT NULL,
  `sosmed_url` varchar(250) NOT NULL,
  `sosmed_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media_social`
--

INSERT INTO `media_social` (`sosmed_id`, `sosmed_icon`, `sosmed_url`, `sosmed_status`) VALUES
(2, '1', 'tes', 1),
(3, '2', 'tes', 1),
(4, '3', 'tes', 1),
(5, '4', 'tes', 1),
(7, '5', 'tes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_parent` int(11) DEFAULT NULL,
  `menu_nama` varchar(100) NOT NULL,
  `menu_sorter` int(11) DEFAULT NULL,
  `menu_url` varchar(250) NOT NULL,
  `menu_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_parent`, `menu_nama`, `menu_sorter`, `menu_url`, `menu_status`) VALUES
(2, NULL, 'Profil', 1, 'site/profile', 1),
(4, NULL, 'Layanan', 1, 'site/all-pelayanan', 1),
(6, 2, 'Sejarah & Visi Misi', 1, 'site/visimisi', 1),
(7, 2, 'Struktur Organisasi', 2, 'site/struktur-organisasi', 1),
(8, 2, 'Tupoksi', 3, 'site/tupoksi', 1),
(10, 2, 'Daftar Pegawai', 5, 'site/pegawai-opd', 1),
(11, NULL, 'Berita', 1, 'site/all-berita', 1),
(12, 13, 'Pengumuman', 2, 'site/all-pengumuman', 1),
(13, NULL, 'Informasi', 1, '-', 1),
(15, 2, 'Program & Kegiatan', 4, 'site/program-kegiatan', 1),
(17, 13, 'Download Doc & App', NULL, 'site/unggah-doc-apl', 1),
(18, 13, 'Agenda', 3, '-', 1),
(19, NULL, 'Hubungi Kami', NULL, '-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_managemen`
--

CREATE TABLE `menu_managemen` (
  `menu_id` int(11) NOT NULL,
  `menu_parent` int(11) DEFAULT 0,
  `menu_nama` varchar(200) NOT NULL,
  `menu_type` varchar(30) NOT NULL,
  `menu_item` varchar(255) NOT NULL,
  `menu_order` int(11) NOT NULL,
  `menu_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_managemen`
--

INSERT INTO `menu_managemen` (`menu_id`, `menu_parent`, `menu_nama`, `menu_type`, `menu_item`, `menu_order`, `menu_status`) VALUES
(3, NULL, 'Beranda', 'statis_page', '3', 1, 1),
(4, NULL, 'Profil', 'link', '#', 2, 1),
(5, 4, 'Sekilas Puskesmas', 'post', '18', 1, 1),
(6, 4, 'Struktur Organisasi', 'post', '19', 2, 1),
(7, 4, 'Visi Misi & Motto', 'post', '20', 3, 1),
(11, 17, 'Berita', 'category', '2', 2, 1),
(12, 17, 'Pengumuman', 'category', '1', 3, 1),
(13, NULL, 'Direktori', 'statis_page', '4', 6, 1),
(14, NULL, 'Galeri', 'post', '99', 7, 2),
(15, NULL, 'Hubungi Kami', 'statis_page', '5', 6, 1),
(16, 21, 'Atribut Puskesmas', 'statis_page', '6', 2, 1),
(17, NULL, 'Informasi', 'link', '#', 3, 1),
(18, 17, 'Artikel Kami', 'category', '6', 1, 1),
(19, 21, 'Indeks Kepuasan Masyarakat', 'statis_page', '7', 1, 1),
(20, 4, 'Maklumat Pelayanan', 'post', '37', 5, 1),
(21, NULL, 'Fasilitas', 'link', '#', 4, 1),
(22, 21, 'Sarana dan Prasarana', 'statis_page', '8', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1527920853),
('m150214_044831_init_user', 1527922737);

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `posting_id` int(11) NOT NULL,
  `homepage_kategori` int(11) NOT NULL,
  `posting_category` int(11) NOT NULL DEFAULT 0,
  `posting_menu` int(11) NOT NULL,
  `posting_judul` varchar(255) NOT NULL,
  `posting_icon` varchar(255) DEFAULT NULL,
  `posting_image_utama` varchar(255) DEFAULT NULL,
  `posting_deskripsi` text NOT NULL,
  `posting_status` int(11) NOT NULL,
  `posting_layout` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `trans_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`posting_id`, `homepage_kategori`, `posting_category`, `posting_menu`, `posting_judul`, `posting_icon`, `posting_image_utama`, `posting_deskripsi`, `posting_status`, `posting_layout`, `create_at`, `update_at`, `create_by`, `update_by`, `trans_ip`) VALUES
(18, 1, 0, 5, 'Sekilas Puskesmas Marunggi', NULL, '/uploads/posting/image_utama/8782683755704c4fe2dbd90238543e92.jpeg', '<p style=\"text-align:justify\">Sejarah Puskesmas</p>\r\n\r\n<p style=\"text-align:justify\">Puskesmas Kp. Baru Padusunan sebelumnya merupakan Puskesmas pembantu (Pustu) bagian dari wilayah kerja Puskesmas Naras kecamatan pariaman Utara. Pada Tahun 2005 Dinas Kesehatan Kota Pariaman melakukan pemekaran Pelayanan Kesehatan Dasar, salah satunya berdirilah Puskesmas Kp. Baru Padusunan yang terletak di desa Kp. Baru, memiliki wilayah kerja 10 Desa, diantaranya: Desa Kp. Baru, desa Kp. Gadang, Desa Pakasai, Desa Talago Sariak, Desa Ampalu, desa cubadak aia selatan, desa cubadak aia, desa sikapak barat, Desa Sikapak Timur, Desa Tanjung Sabar.</p>\r\n\r\n<p style=\"text-align:justify\">Tahun 2009 Puskesmas Kp. Baru Padusunan pindah ke Desa Kp. Gadang dengan bangunan Baru serta penambahan fungsi puskesmas sebagai Puskesmas Ramah anak dan rawat Inap (PONED), dengan memiliki 8 desa wilayah kerja yaitu : desa Kp. gadang, desa Kp. baru, desa talago sariak, desa pakasai, desa kotomarapak, desa bato, desa batang kabuang, desa sungai sirah, seiringan dengan pemekaran kecamatan, menjadi kecamatan Pariaman Timur.</p>\r\n\r\n<p style=\"text-align:justify\">sejalan dengan perkembangan Puskesmas dimana terjadinya peningkatan pelayanan rawat inap, maka dinas kesehatan dan Pemko pariaman melakukan perubahan puskesmas menjadi rumah sakit kota pariaman pada tahun 2017. dan diresmikan oleh bpk. Mukhlis, R selaku walikota pariaman dengan nama &quot; RSUD. dr. Sadikin&quot;</p>\r\n\r\n<p style=\"text-align:justify\">Pelayanan dasar dipindahkan kembali ke puskesmas lama yang terletak didesa Kp. baru Padusunan pada Bulan Februari tahun 2018, untuk pemenuhan kebutuhan pelayanan dasar secara standar pemko melakukan pemugaran puskesmas ini, Pelayanan puskesmas dipindahkan sementara waktu ke Pustu Talago sariak&nbsp; dan kembali beroperasional ke gedung yang baru desa Kp. Baru pada tanggal 5 februari 2019 sampai dengan sekarang.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 1, '2021-05-29 11:01:51', '2021-06-16 11:16:12', 1, 1, '127.0.0.1');
INSERT INTO `posting` (`posting_id`, `homepage_kategori`, `posting_category`, `posting_menu`, `posting_judul`, `posting_icon`, `posting_image_utama`, `posting_deskripsi`, `posting_status`, `posting_layout`, `create_at`, `update_at`, `create_by`, `update_by`, `trans_ip`) VALUES
(19, 1, 0, 6, 'Struktur Organisasi', NULL, '/uploads/posting/image_utama/320770df9f20bb1f2df6fab83d6a684e.jpg', '<p dir=\"ltr\" style=\"text-align:center\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">PROFIL UPTD PUSKESMAS KP. BARU PADUSUNAN </span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:27.08600616455078pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">A. VISI MISI&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:25.77800750732422pt; margin-right:2.89599609375pt; text-align:justify\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Visi Puskesmas Kampung Baru Padusunan adalah mengacu pada visi&nbsp; Kementrian Kesehatan dan merujuk pada Visi Dinas Kesehatan Kota Pariaman&nbsp; serta sesuai dengan kondisi dengan wilayah kerja Puskesmas Kp. Baru Padusunan&nbsp; yaitu &ldquo;Mewujudkan Masyarakat Mandiri untuk Hidup Sehat di Wilayah Kerja&nbsp; Puskesmas Kampung Baru Padusunan&rdquo;.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:52.970001220703125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Misi Puskesmas Kp Baru Padusunan adalah:&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:49.358001708984375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1. Memberikan pelayanan secara profesional&nbsp;&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:48.38600158691406pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">2. Mendorong masyarakat untuk hidup sehat&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:48.54200744628906pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">3. Membina kerja sama lintan program dan lintas sektor&nbsp;&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:27.110008239746094pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">B. MOTO&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:47.93000793457031pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Moto Puskesmas Kp Baru Padusunan adalah:&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:104.84199523925781pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">&ldquo; CERIA &rdquo;&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:52.07000732421875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Tata Nilai:&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:52.20201110839844pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">C : Cerdas dalam bertindak&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:52.010009765625pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">E : Edukatif dalam pelayanan&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:52.07000732421875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">R : Responsif terhadap keluhan pasien&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:52.08201599121094pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">I : Inovatif dalam bekerja&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:52.04600524902344pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">A : Aspiratif dalam masukan dan kritikan&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:27.24200439453125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">C. MAKLUMAT&nbsp;&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:41.87001037597656pt; margin-right:3.194000244140625pt; text-align:justify\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Maklumat Puskesmas Kampung Baru Padusunan adalah dengan ini&nbsp; kami menyatakan akan siap memberikan pelayanan kesehatan masyarakat&nbsp; sesuai janji dan standar pelayanan yang telah ditetapkan dan apabila tidak&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:41.97801208496094pt; margin-right:3.09197998046875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">menepati janji layanan secara professional dan sepenuh hati tegurlah dan&nbsp; laporkan ke unit pengaduan.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:27.098007202148438pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">D. REKAP SOP&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:49.118011474609375pt; margin-right:3.20196533203125pt; text-align:justify\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1. SOP Pelayanan Kesehatan Ibu (ANTENATAL CARE/ANC TERPADU)&nbsp; berdasarkan SK Kepala UPTD Puskesmas Kp. Baru Padusunan Nomor:&nbsp; 01/A.I.SK/HC-KBP/I/2020&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:48.14601135253906pt; margin-right:2.94000244140625pt; text-align:justify\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">2. SOP Pelayanan Kesehatan Anak (STIMULASI, DETEKSI DAN&nbsp; INTERVENSI DINI TUMBUH KEMBANG BALITA DAN APRAS)&nbsp; berdasarkan SK Kepala UPTD Puskesmas Kp. Baru Padusunan Nomor:&nbsp; 10/SK/HC-KBP/I/2020&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:47.93000793457031pt; margin-right:3.14202880859375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">3. SOP Pelayanan Kesehatan Jiwa berdasarkan SK Kepala UPTD&nbsp; Puskesmas Kp. Baru Padusunan Nomor: 08/SK/HC-KBP/I/2020 4. SOP Pelayanan Gizi di Puskesmas berdasarkan SK Kepala UPTD&nbsp; Puskesmas Kp. Baru Padusunan Nomor: 13/SK/HC-KBP/I/2020 5. SOP Pelayanan UKS (Usaha Kesehatan Gizi) berdasarkan SK Kepala&nbsp; UPTD Puskesmas Kp. Baru Padusunan Nomor: 11/SK/HC-KBP/I/2020 6. SOP Pelayanan UKGS (Usaha Kesehatan Gigi Sekolah) berdasarkan SK&nbsp; Kepala UPTD Puskesmas Kp. Baru Padusunan Nomor: 15/SK/HC KBP/I/2020&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:48.02601623535156pt; margin-right:0.10601806640625pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">7. SOP Pelayanan TB PARU berdasarkan SK Kepala UPTD Puskesmas Kp.&nbsp; Baru Padusunan Nomor: 14/SK/HC-KBP/I/2020&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:48.14601135253906pt; margin-right:2.9959716796875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">8. SOP Penjaringan Pasien Kusta berdasarkan SK Kepala UPTD&nbsp; Puskesmas Kp. Baru Padusunan Nomor: 16/SK/HC-KBP/I/2020 9. SOP Posyandu Lansia berdasarkan SK Kepala UPTD Puskesmas Kp.&nbsp; Baru Padusunan Nomor: 12/SK/HC-KBP/I/2020</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:49.118011474609375pt; margin-right:3.166015625pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">&nbsp;10. SOP Pelayanan Ruang Tindakan berdasarkan SK Kepala UPTD&nbsp; Puskesmas Kp. Baru Padusunan Nomor: 097/CVII.SK/HC-KBP/I/2019 11. SOP Pelayanan Poli Umum berdasarkan SK Kepala UPTD Puskesmas&nbsp; Kp. Baru Padusunan Nomor: 09/SK/HC-KBP/I/2020&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:49.118011474609375pt; margin-right:0.093994140625pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">12. SOP Inovasi (Jumparikes) berdasarkan SK Kepala UPTD Puskesmas Kp.&nbsp; Baru Padusunan Nomor: 141/SK/HC-KBPI/1/2019&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:49.118011474609375pt; margin-right:3.238037109375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">13. SOP Pelayanan Prolanis berdasarkan SK Kepala UPTD Puskesmas Kp.&nbsp; Baru Padusunan Nomor: 17/SK/HC-KBPI/1/2020&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:49.118011474609375pt; margin-right:3.2020263671875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">14. SOP Posyandu Balita berdasarkan SK Kepala UPTD Puskesmas Kp.&nbsp; Baru Padusunan Nomor: 18/SK/HC-KBPI/1/2020&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:49.118011474609375pt; margin-right:3.2020263671875pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:26.81000518798828pt; margin-right:86.39999389648438pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">E. SISTEM PENGELOLAAN PENGADUAN MASYARAKAT Alur Pengaduan:&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:45.75801086425781pt; margin-right:3.0360107421875pt; text-align:justify\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1. Keluhan Pasien/ Masyarakat dapat di kumpulkan melalui&nbsp; email:puskesmaspadusunan88@gmail.com, kotak kritik dan saran, kotak&nbsp; kepuasan, buku keluhan di jejaring kesehatan, dan dapat juga melalui&nbsp; pengaduan langsung serta dengan SMS Center/ kontak person pimpinan:&nbsp; 081363484344 (Doni Paslah, SKM) .&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:44.7860107421875pt; margin-right:3.177978515625pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">2. Penerimaan keluhan, Puskesmas akan melakukan pengumpulan catatan&nbsp; keluhan&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:44.57000732421875pt; margin-right:3.29803466796875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">3. Penyelesaian keluhan, Keluhan akan dianalisa dan di tindak lanjuti oleh&nbsp; Tim pengaduan dan koordinasi dengan pimpinan dan bagian terkait.\\ 4. Pengaduan/ Keluhan selesai, akan di diumumkan di papan informasi&nbsp; 5. Pengaduan belum selesai, akan dilaporkan ke Dinas Kesehatan.</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-right:6.001983642578125pt; text-align:right\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:27.050003051757812pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">F. HASIL SURVEY KEPUASAN MASYARAKAT&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:41.84600830078125pt; margin-right:2.829986572265625pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Indeks Kepuasan Masyarakat (IKM) UPTD Puskesmas Kp. Baru&nbsp; Padusunan Dinas Kesehatan Tahun 2020 adalah 81.11 dengan teknik penyebaran kuesioner kepada responden/ pasien yang berisikan 9 pertanyaan&nbsp; yang bersumber dari pedoman survey yang dikeluarkan Permenpan NO 14&nbsp; Tahun 2017. </span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:41.84600830078125pt; margin-right:2.829986572265625pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:5.952003479003906pt\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; G. SARANA DAN PRASARANA&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:16.03400421142578pt; margin-right:2.761993408203125pt; text-align:justify\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sarana Prasarana yang dimiliki oleh Puskesmas Kp Baru Padusunan pada&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Umumnya sudah memadai, namun ada beberapa prasarana yang belum dimiliki&nbsp; oleh Puskesmas, berikut rinciannya:&nbsp;</span></p>\r\n\r\n<div dir=\"ltr\" style=\"float:left; margin-left:0pt\">\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse; border:none\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><strong>No&nbsp;</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><strong>Yang Telah Dimiliki&nbsp;</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><strong>Yang Belum Dimiliki</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:7.092002868652344pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Ruang Pendaftaran/ Rekam Medis&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Ruang UBM</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.120002746582031pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">2&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Ruang Poli Umum&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Ruang Poli Jiwa</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.2760009765625pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">3&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Ruang Poli Ibu/Anak/KB&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Rumah Dinas</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.903999328613281pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">4&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Ruang Poli Imunisasi</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.144004821777344pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">5&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Ruang Tindakan</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.288002014160156pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">6&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Ruang Poli Gigi</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">7&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt; margin-right:2.506011962890625pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Ruang Konsultasi Gizi/ Klinik&nbsp; Sanitasi/ Ruang Laktasi</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.431999206542969pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">8&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Ruang Promkes/ Kesling</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.120002746582031pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">9&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Ruang Sholat</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">10&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Toilet</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">11&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.6999969482421875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Ambulance</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:5.987998962402344pt\"><strong>4. </strong></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:5.987998962402344pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:5.987998962402344pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:5.987998962402344pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:5.987998962402344pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:5.987998962402344pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:5.987998962402344pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:5.987998962402344pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:5.987998962402344pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:5.987998962402344pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:5.987998962402344pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:5.987998962402344pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:5.987998962402344pt\"><strong>H.INOVASI PELAYANAN PUBLIK&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:16.31000518798828pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">a) Program ADMEN&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. SICERIA (id Barcode, Layanan kepegawaian Satu Pintu)&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:15.902008056640625pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">b) Program UKM&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:70.238pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1. POS GIZI&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-right:64.466pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. JUMPARIKES (Jum&rsquo;at Pagi Periksa Kesehatan) </span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-right:50.39pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 3. KOPPERIBA (Komunitas Percepatan Penurunan Aki/Akaba)&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:69.05001831054688pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">4. PERMATA Fe (Pemantauan Remaja Makan Tablet Fe)&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:69.29002380371094pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">5. S3 (Sedekah Seribu Sehari)</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:69.43402099609375pt; margin-right:3.266082763671875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">6. POSTER Imunisasi (Penyuluhan Sosialisasi Pemberian Sertifikat dan&nbsp; Reward Imunisasi)&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:16.16600799560547pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">c) Program UKP&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:center\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">&nbsp; &nbsp; 1. TOL TB (Melayani Pasien TB Tanpa Ikut Nomor Antrian)&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:66.14601135253906pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">&nbsp;2. SPBU (Sabtu Pagi Makan Buah)&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:66.14601135253906pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:6.0240020751953125pt; margin-right:67.92999267578125pt\"><strong>&nbsp;SALAH SATU INOVASI PUSKESMAS KP BARU PADUSUNAN</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:6.0240020751953125pt; margin-right:67.92999267578125pt\"><strong>&nbsp;</strong><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">JUMPARIKES&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:45.902008056640625pt; margin-right:2.89599609375pt; text-align:justify\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">JUMPARIKES (JUM&#39;AT PAGI PERIKSA KESEHATAN)&nbsp; merupakan suatu program lintas sektor yang di bentuk oleh puskesmas kp.&nbsp; baru padusunan dalam rangka meningkatkan derajat kesehatan masyarakat di&nbsp; wilayah kerja puskesmas kp. baru padusunan yang menggabungkan beberapa&nbsp; program menjadi satu dalam pelaksanaannya. Jumparikes dilaksanakan pada&nbsp; pagi setiap hari Jumat di seluruh Mesjid di wilayah kerja Kp. Baru padusunan. Jumparikes telah terlaksana sejak tahun 2019, dimana pembentukan&nbsp; Jumparikes tertulis dalam Surat Keputusan Kepala UPTD Puskesmas Kp.&nbsp; Baru Padusunan Nomor: 141/SK/HC-KBP/I/2019.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:45.92601013183594pt; margin-right:2.91998291015625pt; text-align:justify\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">Tujuan umum dari JUMPARIKES adalah menjaring masyarakat usia&nbsp; produktif dan lansia terutama bagi yang laki-laki yang berada pada wilayah&nbsp; kerja puskesmas kp. baru padusunan.</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:41.990013122558594pt\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">Tujuan khusus dari JUMPARIKES:&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:44.87001037597656pt; margin-right:3.218017578125pt\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">a) Meningkatkan kerja sama lintas sektor dan lintas program dalam kegiatan&nbsp; posbindu PTM, Yandu Lansia, Puskesmas Keliling, dan Screening Usia Produktif.&nbsp;&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:44.462005615234375pt; margin-right:3.16998291015625pt\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">b) Meningkatkan pelayanan kesehatan pada masyarakat yang tidak mampu&nbsp; berkunjung ke puskesmas.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:44.72601318359375pt; margin-right:6.19390869140625pt\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">c) Meingkatkan capaian penderita penyakit Hipertensi dan DM di wilayah kerja Puskesmas Kp. Baru Padusunan.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:46.03401184082031pt\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">Untuk Sumber Daya Inovasi ini 5M:&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:46.9580078125pt; margin-right:-0.20001220703125pt\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">1. Man (Tenaga Kerja): Tenaga Kerja yang terlibat dalam inovasi yaitu:&nbsp; Pimpinan, Ka TU, Dokter, Perawat, Bidan, Tenaga Gizi, Tenaga Refraksi,&nbsp; Tenaga Labor, Tenaga Apotik, Promkes, Sopir Ambulance dan juga&nbsp; kader.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:44.7860107421875pt; margin-right:3.000030517578125pt\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">2. Money (Modal): inovasi ini memanfaatkan sumber daya yang ada antara&nbsp; lain dari DPA BOK Puskesmas Kp. Baru&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:44.9420166015625pt; margin-right:2.77398681640625pt; text-align:justify\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">3. Materials (Bahan Baku): Untuk melakukan program ini bahan yang&nbsp; diperlukan antara lain: meteran, timbangan, dan serta strip untuk&nbsp; pemeriksan labor&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:44.57000732421875pt; margin-right:3.23797607421875pt; text-align:justify\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">4. Machine (Mesin): alat yang digunakan saat melakukan program ini antara&nbsp; lain alat pemeriksaan Gula Darah, Cholesterol, dan Asam Urat, alat&nbsp; pemeriksaan Tekanan Darah&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:44.81001281738281pt; margin-right:3.20196533203125pt\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">5. Method (Metode): Pada melaksanakan program ini dilakukan metode 5&nbsp; Meja.</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:44.57000732421875pt\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">Mekanisme/ cara kerja JUMPARIKES terdiri dari 5 meja.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:44.60600280761719pt; margin-right:3.26190185546875pt\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">A. Meja 1, Warga datang dan mendaftarkan diri dengan menggunakan KTP/&nbsp; NIK, dimeja pertama ini wrga dibantu oleh kader untuk melakukan pengukuran TB, BB, Lingkar Perut, dan Tekanan Darah&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:44.6300048828125pt; margin-right:3.177978515625pt; text-align:justify\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">B. Meja 2, Warga akan melakukan konsultasi/ screening dengan Petugas&nbsp; Kesehatan mengenai faktor resiko penyakit tidak menular (PTM) pada&nbsp; individu dan keluarga.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:44.76200866699219pt; margin-right:2.853973388671875pt\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">C. Meja 3, Dilakukan pemeriksaan labor, baik pemeriksaan Gula Darah,&nbsp; Cholesterol, dan Asam Urat.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:center\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">D. Meja 4, Dilakukan konsultasi dan edukasi pada warga oleh Dokter&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:44.57000732421875pt; margin-right:3.21405029296875pt\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">E. Meja 5, Tempat pengambilan Obat bagi warga yang di indikasikan&nbsp; minum obat oleh dokter.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:45.92601013183594pt; margin-right:2.91998291015625pt; text-align:justify\"><span style=\"background-color:transparent; color:#222222; font-family:Times,serif; font-size:12pt\">Selain memberi pelayanan JUMPARIKES juga memberi buku&nbsp; Monitoring Faktor Resiko Penyakit Tidak Menular pada Individu dan&nbsp; Keluarga.Jumparikes dengan beberapa muatan layanannya berkontribusi&nbsp; terhadap pencapaian sasaran SDG&#39;s no 3. Memastikan Kehidupan yang sehat&nbsp; dan menduung kesejahteraan bagi semua untuk semua usia, seirama dengan&nbsp; target yang akan dicapai pada tahun 2030 yakni mengurangi hingga sepertiga&nbsp; angka kematian dini akibat penyakit tidak menular, melalui pencegahan dan&nbsp; pengobatan, serta meningkatkan kesehatan mental dan kesejahteraan.</span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:41.84600830078125pt; margin-right:2.829986572265625pt\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:25.886009216308594pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">I. DATA PERSONIL (SDM) </span></p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:26.318008422851562pt; margin-right:3.21405029296875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Puskesmas Kp Baru Padusunan mempunyai sebanyak 36 orang denan rincian&nbsp; sebagai berikut: </span></p>\r\n\r\n<div dir=\"ltr\" style=\"float:left; margin-left:0pt\">\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse; border:none\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><strong>No&nbsp;</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><strong>Kualifikasi SDM&nbsp;</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><strong>Pendidikan&nbsp;</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><strong>Jumlah (Orang)</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:7.092002868652344pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.711997985839844pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Pimpinan&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.26397705078125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">S1&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.88201904296875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.120002746582031pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">2&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.9279937744140625pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Ka TU&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.26397705078125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">S1&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.88201904296875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.2760009765625pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">3&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.711997985839844pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Dokter Umum&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.26397705078125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">S1&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.910003662109375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">2</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.903999328613281pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">4&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.711997985839844pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Dokter Gigi&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.26397705078125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">S1&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.88201904296875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.144004821777344pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">5&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.711997985839844pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Perawat&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.26397705078125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">S1 2, DIII 3&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.93402099609375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">5</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.288002014160156pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">6&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Bidan&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.95196533203125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">D4 3, DIII 7&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.88201904296875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">10</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">7&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.711997985839844pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Penyuluh Kesehatan masyarakat&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.26397705078125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">S1&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.910003662109375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">2</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.431999206542969pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">8&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.6999969482421875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Administrator Kesehatan&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.26397705078125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">S1&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.066009521484375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">3</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.120002746582031pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">9&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Tenaga kesling&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.26397705078125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">S1 1, DIII 1&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.910003662109375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">2</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">10&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.663993835449219pt; margin-right:2.253997802734375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Ahli Teknologi Laboratorium&nbsp; Medik</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.95196533203125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">D III&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.88201904296875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">11&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Tenaga Rekam Medis&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.95196533203125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">D III&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.88201904296875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">12&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Refraksionis Optision&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.95196533203125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">D III&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.88201904296875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">13&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Tenaga Gizi&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.95196533203125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">D III&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.88201904296875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">14&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Tenaga Administrasi&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.26397705078125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">S1&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.910003662109375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">2</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">15&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.7239990234375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Tenaga Kefarmasian&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.95196533203125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">DIII&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.88201904296875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">16&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.711997985839844pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Pekarya&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.26397705078125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">SLTA&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.88201904296875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"text-align:center\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">17&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.023994445800781pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Sopir&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.26397705078125pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">SLTA&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.88201904296875pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">1</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:5.6399993896484375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">Jumlah&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p dir=\"ltr\" style=\"margin-left:6.066009521484375pt\"><span style=\"background-color:transparent; color:#000000; font-family:Times,serif; font-size:12pt\">36</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 1, '2021-05-29 11:15:39', '2021-06-16 11:16:46', 1, 1, '127.0.0.1');
INSERT INTO `posting` (`posting_id`, `homepage_kategori`, `posting_category`, `posting_menu`, `posting_judul`, `posting_icon`, `posting_image_utama`, `posting_deskripsi`, `posting_status`, `posting_layout`, `create_at`, `update_at`, `create_by`, `update_by`, `trans_ip`) VALUES
(20, 1, 0, 11, 'Visi Misi dan Motto Puskesmas Marunggi', NULL, '/uploads/posting/image_utama/d1d8521030f2796664324e6d7d1c9d91.jpg', '<p>Program Puskesmas</p>\r\n\r\n<p><strong>1. UPAYA KESEHATAN WAJIB</strong></p>\r\n\r\n<p><strong>a. Promosi Kesehatan</strong> :penyuluhan, pengkajian PHBS,pembinaan Batra, pembinaan Toga,&nbsp; kesorga</p>\r\n\r\n<p>b. <strong>Program kesehatan Lingkungan</strong> : klinik sanitasi, pengolahan sampah medis, pembinaan dan praktek CTPS, pemantauan Tempat Umum, pemantauan tempat pengolahan makanan, validasi data rumah sehat, epidemiologi dan fogging, pengambilan sampel air dan inspeksi sanitasi, survey Jentik.</p>\r\n\r\n<p>c. <strong>Kesehatan Ibu dan anak serta KB</strong> : Kesehatan Ibu, Anak, KB</p>\r\n\r\n<p>d. <strong>Pencegahan dan pemberantasan penyakit menular</strong> : Imunisasi,P2TB, Surveillans, Diare, ISPA, Kusta, DBD, Malaria, IMS/ HIV</p>\r\n\r\n<p>e<strong>. Upaya Perbaikan Gizi Masyarakat</strong> : penanggulangan gizi makro, penanggulangan gizi mikro, pojok Gizi, Pos Gizi, SKPG (pemantauan pola konsumsi, asi ekslusif)</p>\r\n\r\n<p>f. <strong>Upaya Pengobatan</strong></p>\r\n\r\n<p><strong>2. UPAYA KESEHATAN PENUNJANG</strong></p>\r\n\r\n<p>b. laboratorium sederhana</p>\r\n\r\n<p>c. pencatatan dan pelaporan</p>\r\n\r\n<p><strong>3. UPAYA KESEHATAN PENGEMBANGAN</strong></p>\r\n\r\n<p>a. UKS/UKGS</p>\r\n\r\n<p>b. Upaya kesehatan Gigi dan mulut</p>\r\n\r\n<p>c. Upaya Kesehatan Mata</p>\r\n\r\n<p>d. Upaya Perawatan Kesehatan Masyarakat</p>\r\n\r\n<p>e. Upaya Pembinaan Pengobatan Tradisional</p>\r\n\r\n<p>f. Upaya Kesehatan Kerja</p>\r\n\r\n<p>g. Upaya Kesehatan olah Raga</p>\r\n\r\n<p>h. Upaya Kesehatan Jiwa</p>\r\n\r\n<p><strong>4. PROGRAM UNGGULAN</strong></p>\r\n\r\n<p>a. JUMPARIKES</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 1, '2021-05-29 11:16:51', '2021-06-16 11:16:58', 1, 1, '127.0.0.1'),
(37, 1, 0, 4, 'Maklumat Pelayanan', NULL, '/uploads/posting/image_utama/b2adf1f1570ea997ce7dd7b5a6f1361b.jpg', '<div class=\"col-md-4 col-sm-6 med-icon\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<div class=\"content\">\r\n<h4>Blood Test</h4>\r\n\r\n<div class=\"text\">\r\n<p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-4 col-sm-6 med-icon\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<div class=\"content\">\r\n<h4>Blood Test</h4>\r\n\r\n<div class=\"text\">\r\n<p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-4 col-sm-6 med-icon\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<div class=\"content\">\r\n<h4>Blood Test</h4>\r\n\r\n<div class=\"text\">\r\n<p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus.</p>\r\n</div>\r\n</div>\r\n</div>\r\n', 1, 1, '2021-06-15 14:41:17', NULL, 1, NULL, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `posting_kategori`
--

CREATE TABLE `posting_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posting_kategori`
--

INSERT INTO `posting_kategori` (`id_kategori`, `nama_kategori`) VALUES
(0, 'Tak Berkategori'),
(1, 'Pengumuman'),
(2, 'Berita'),
(3, 'Tipe Page'),
(4, 'Galeri'),
(5, 'Program'),
(6, 'Artikel');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nim` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kode_jurusan` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `timezone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `created_at`, `updated_at`, `full_name`, `nim`, `kode_jurusan`, `timezone`) VALUES
(1, 1, '2018-06-01 23:58:57', '2021-05-26 20:07:36', 'Suci Ramadhani', '', '', 'Africa/Conakry'),
(18, 18, '2020-12-07 20:05:26', '2020-12-07 20:05:26', 'Admin Website', '', '', NULL),
(19, 19, '2021-05-26 20:24:04', '2021-05-26 20:24:04', 'Admin OKE', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `can_admin` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`, `can_admin`) VALUES
(1, 'Super Admin', '2018-06-01 23:58:56', NULL, 1),
(2, 'Admin Website', '2018-06-01 23:58:56', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sarana_prasarana`
--

CREATE TABLE `sarana_prasarana` (
  `id_sarana` int(11) NOT NULL,
  `nama_sarana` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar_sarana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarana_prasarana`
--

INSERT INTO `sarana_prasarana` (`id_sarana`, `nama_sarana`, `deskripsi`, `gambar_sarana`) VALUES
(1, 'Mobil Ambulan', 'Deksripsi', '/uploads/sarana/97b49d705933447028f339f75a7698a4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_title` varchar(200) NOT NULL,
  `slider_h1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `slider_title`, `slider_h1`) VALUES
(1, '/uploads/slider/630a93cca669e52c831aeb4f5d1d58a6.jpg', 'Selamat Datang di', 'Layanan Publik'),
(2, '/uploads/slider/f2a0d2fd1d4df954a6073ac9acfcfd75.jpg', 'Pemerintahan Kota Pariaman', 'Puskesmas Kp. Baru Padusunan');

-- --------------------------------------------------------

--
-- Table structure for table `statis_page`
--

CREATE TABLE `statis_page` (
  `id_page` int(11) NOT NULL,
  `nama_page` varchar(50) NOT NULL,
  `url_page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statis_page`
--

INSERT INTO `statis_page` (`id_page`, `nama_page`, `url_page`) VALUES
(1, 'Data Pegawai', '/site/pegawai-opd'),
(2, 'Layanan', 'site/all-layanan'),
(3, 'Beranda', 'site/index'),
(4, 'Download Dok&App', 'site/unggah-doc-apl'),
(5, 'Hubungi Kami', 'site/hubungi-kami'),
(6, 'Atribut Puskesmas', 'site/atribut-puskesmas'),
(7, 'Indeks Kepuasan Masyarakat', 'site/ikm'),
(8, 'Sarana dan Prasarana', 'site/sarana');

-- --------------------------------------------------------

--
-- Table structure for table `survei_detail`
--

CREATE TABLE `survei_detail` (
  `kode_survei_detail` int(11) NOT NULL,
  `kode_survei` varchar(5) NOT NULL,
  `nama_survei_detail` varchar(255) NOT NULL,
  `jenis_input` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survei_detail`
--

INSERT INTO `survei_detail` (`kode_survei_detail`, `kode_survei`, `nama_survei_detail`, `jenis_input`) VALUES
(1, 'SUR01', 'Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayana di unit ini?', 'radiolist'),
(2, 'SUR01', 'Bagaimana pendapat saudara tentang kesamaan persyaratan pelayanan dengan jenis pelayanannya?', 'radiolist'),
(3, 'SUR02', 'Menutur anda apakah sarana dan prasana puskesmas kami sudah memadai?', 'radiolist'),
(4, 'SUR03', 'Bagaimana menurut anda penanganan keluhan di puskesmas kami?', 'radiolist');

-- --------------------------------------------------------

--
-- Table structure for table `survei_ikm`
--

CREATE TABLE `survei_ikm` (
  `id_ikm` int(11) NOT NULL,
  `nama_surveyer` varchar(100) NOT NULL,
  `umur_surveyer` tinyint(2) NOT NULL,
  `alamat_surveyer` varchar(255) NOT NULL,
  `pedidikan` varchar(10) NOT NULL,
  `pekerjaan` varchar(10) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survei_ikm`
--

INSERT INTO `survei_ikm` (`id_ikm`, `nama_surveyer`, `umur_surveyer`, `alamat_surveyer`, `pedidikan`, `pekerjaan`, `create_at`, `update_at`, `create_by`, `update_by`) VALUES
(1, 'Suci Ramadhani', 27, 'Padang', 'S1', 'Programmer', '2021-06-13 15:20:25', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `survei_ikm_detail`
--

CREATE TABLE `survei_ikm_detail` (
  `id_detail` int(11) NOT NULL,
  `id_ikm` int(11) NOT NULL,
  `kode_survei_detail` varchar(255) NOT NULL,
  `nilai_survei_detail` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survei_ikm_detail`
--

INSERT INTO `survei_ikm_detail` (`id_detail`, `id_ikm`, `kode_survei_detail`, `nilai_survei_detail`, `create_at`, `update_at`, `create_by`, `update_by`) VALUES
(1, 1, '1', NULL, '2021-06-13 15:20:25', NULL, NULL, NULL),
(2, 1, '2', NULL, '2021-06-13 15:20:25', NULL, NULL, NULL),
(3, 1, '3', NULL, '2021-06-13 15:20:25', NULL, NULL, NULL),
(4, 1, '4', NULL, '2021-06-13 15:20:25', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `survei_kategori`
--

CREATE TABLE `survei_kategori` (
  `kode_survei` varchar(5) NOT NULL,
  `nama_survei` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survei_kategori`
--

INSERT INTO `survei_kategori` (`kode_survei`, `nama_survei`) VALUES
('SUR01', 'Pelayanan'),
('SUR02', 'Sarana dan Prasarana'),
('SUR03', 'Penanganan Keluhan');

-- --------------------------------------------------------

--
-- Table structure for table `survei_setting_detail`
--

CREATE TABLE `survei_setting_detail` (
  `id_survei` int(11) NOT NULL,
  `kode_survei` varchar(5) NOT NULL,
  `kode_survei_detail` varchar(255) NOT NULL,
  `nama_settingsurveidetail` varchar(100) NOT NULL,
  `nilai_surveidetail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survei_setting_detail`
--

INSERT INTO `survei_setting_detail` (`id_survei`, `kode_survei`, `kode_survei_detail`, `nama_settingsurveidetail`, `nilai_surveidetail`) VALUES
(1, 'SUR01', '1', 'Tidak Mudah', 1),
(2, 'SUR01', '1', 'Kurang Mudah', 2),
(3, 'SUR01', '1', 'Mudah', 3),
(4, 'SUR01', '1', 'Sangat Mudah', 4),
(5, 'SUR02', '3', 'Kurang Memadai', 1),
(6, 'SUR02', '3', 'Memadai', 2),
(7, 'SUR02', '3', 'Sangat Memadai', 3),
(8, 'SUR03', '4', 'Kurang Puas', 1),
(9, 'SUR03', '4', 'Puas', 2),
(10, 'SUR03', '4', 'Sangat Puas', 3),
(11, 'SUR01', '2', 'Kurang Puas', 1),
(12, 'SUR01', '2', 'Memadai', 2),
(13, 'SUR01', '2', 'Puas', 4);

-- --------------------------------------------------------

--
-- Table structure for table `t_setting`
--

CREATE TABLE `t_setting` (
  `no_urut` int(11) NOT NULL,
  `grup_setting` varchar(150) NOT NULL,
  `nama_setting` varchar(50) NOT NULL,
  `nilai_setting` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_setting`
--

INSERT INTO `t_setting` (`no_urut`, `grup_setting`, `nama_setting`, `nilai_setting`) VALUES
(0, 'Profil OPD/UPT', 'Alamat', 'Jl. Imam Bonjol No 44 Pariaman, Desa Cimparuah, Kecamatan Pariaman Tengah Kota Pariaman, 25511'),
(4, 'Data Pegawai', 'Bidang', '[\"337\",\"338\",\"339\",\"340\"]'),
(0, 'Profil OPD/UPT', 'e-mail', 'diskominfo@pariamankota.go.id'),
(1, 'Data Pegawai', 'Jenis Web', 'OPD'),
(6, 'Profil OPD/UPT', 'NIP Pimpinan', '197204011993031005 --'),
(5, 'Profil OPD/UPT', 'Pimpinan', 'Hendri, S.Sos ---'),
(3, 'Data Pegawai', 'Satker', 'O29'),
(2, 'Data Pegawai', 'SKPD', 'O29'),
(0, 'Profil OPD/UPT', 'Tanggal Berdiri', '2000-01-01'),
(0, 'Profil OPD/UPT', 'Telpon dan Fax', '0812345678');

-- --------------------------------------------------------

--
-- Table structure for table `unggah_file`
--

CREATE TABLE `unggah_file` (
  `id_unggah` int(11) NOT NULL,
  `jenis_unggah` varchar(30) NOT NULL,
  `nama_unggah` varchar(100) NOT NULL,
  `keterangan_unggah` text DEFAULT NULL,
  `lokasi_unggah` varchar(255) DEFAULT NULL,
  `alamat_url` varchar(255) DEFAULT NULL,
  `tanggal_unggah` date NOT NULL,
  `unggah_oleh` int(11) NOT NULL,
  `status_unggah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unggah_file`
--

INSERT INTO `unggah_file` (`id_unggah`, `jenis_unggah`, `nama_unggah`, `keterangan_unggah`, `lokasi_unggah`, `alamat_url`, `tanggal_unggah`, `unggah_oleh`, `status_unggah`) VALUES
(1, '1', 'Vidio Pelayanan Puskesmas Kp. Baru Padusunan', '<p>Pelayanan Puskesmas Kp. Baru Padusunan :</p>\r\n\r\n<p>https://youtu.be/GqFocbrDdQU</p>\r\n', '/uploads/filepdf/ca27413b038cbfbe5854f83b70222cbb.pdf', 'https://youtu.be/GqFocbrDdQU', '2020-11-02', 1, 1),
(2, '2', 'Aplikasi SIPP', '<p>Aplikasi SIPP apat diunggah pada link berikut:</p>\r\n\r\n<p>https://sipp.menpan.go.id/webcontrol/home</p>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, 'https://sipp.menpan.go.id/webcontrol/home', '2020-11-03', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `access_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logged_in_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logged_in_at` timestamp NULL DEFAULT NULL,
  `created_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  `banned_reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role_id`, `status`, `email`, `username`, `password`, `auth_key`, `access_token`, `logged_in_ip`, `logged_in_at`, `created_ip`, `created_at`, `updated_at`, `banned_at`, `banned_reason`) VALUES
(1, 1, 2, 'neo@neo.com', 'super admin', '$2y$13$kvnj9UV9329wPqeVq99ltOUCk3f.wIVbLy3wlaILUiMtLxdhmUbke', '91C7Z0a4DJ_nIEHuYIARxOevTx-3hpdf', 'oS4BmhbLU9Y9-1fhYc1264hkxxBvJVx9', '127.0.0.1', '2021-06-15 21:10:56', NULL, '2018-06-01 23:58:56', '2020-12-10 20:38:31', NULL, NULL),
(18, 2, 1, 'adminweb@gmail.com', 'webadmin', '$2y$13$6Dn7hX18ysJknpt/LB/VLOtHcC7hTnBBTTeyB3HoKAH2x5a9gIjEa', NULL, NULL, '::1', '2021-02-28 21:16:17', NULL, '2020-12-07 20:05:26', '2020-12-07 20:05:26', NULL, NULL),
(19, 1, 1, 'admin2@gmail.com', 'admin', '$2y$13$agwJzHaRviwl3tJPsW/vA.AuL8JR04UiMmz8DQ3efFhCT5ndkjqT2', NULL, NULL, NULL, NULL, NULL, '2021-05-26 20:24:04', '2021-05-26 20:24:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_attributes` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` smallint(6) NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `user_id`, `type`, `token`, `data`, `created_at`, `expired_at`) VALUES
(1, 1, 2, 'EGmE6BNaZo3yFc7Pyf_0Ff6ECMnwniMz', 'sucicigo@gmail.com', '2020-12-10 20:38:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atribut_puskesmas`
--
ALTER TABLE `atribut_puskesmas`
  ADD PRIMARY KEY (`id_atribut`);

--
-- Indexes for table `bagian_upt`
--
ALTER TABLE `bagian_upt`
  ADD PRIMARY KEY (`bagupt_id`);

--
-- Indexes for table `data_instansi`
--
ALTER TABLE `data_instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `media_social`
--
ALTER TABLE `media_social`
  ADD PRIMARY KEY (`sosmed_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `menu_managemen`
--
ALTER TABLE `menu_managemen`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`posting_id`);

--
-- Indexes for table `posting_kategori`
--
ALTER TABLE `posting_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_user_id` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  ADD PRIMARY KEY (`id_sarana`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `statis_page`
--
ALTER TABLE `statis_page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `survei_detail`
--
ALTER TABLE `survei_detail`
  ADD PRIMARY KEY (`kode_survei_detail`);

--
-- Indexes for table `survei_ikm`
--
ALTER TABLE `survei_ikm`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indexes for table `survei_ikm_detail`
--
ALTER TABLE `survei_ikm_detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_ikm` (`id_ikm`);

--
-- Indexes for table `survei_kategori`
--
ALTER TABLE `survei_kategori`
  ADD PRIMARY KEY (`kode_survei`);

--
-- Indexes for table `survei_setting_detail`
--
ALTER TABLE `survei_setting_detail`
  ADD PRIMARY KEY (`id_survei`);

--
-- Indexes for table `t_setting`
--
ALTER TABLE `t_setting`
  ADD PRIMARY KEY (`nama_setting`);

--
-- Indexes for table `unggah_file`
--
ALTER TABLE `unggah_file`
  ADD PRIMARY KEY (`id_unggah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`email`),
  ADD UNIQUE KEY `user_username` (`username`),
  ADD KEY `user_role_id` (`role_id`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_auth_provider_id` (`provider_id`),
  ADD KEY `user_auth_user_id` (`user_id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_token_token` (`token`),
  ADD KEY `user_token_user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atribut_puskesmas`
--
ALTER TABLE `atribut_puskesmas`
  MODIFY `id_atribut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bagian_upt`
--
ALTER TABLE `bagian_upt`
  MODIFY `bagupt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_instansi`
--
ALTER TABLE `data_instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media_social`
--
ALTER TABLE `media_social`
  MODIFY `sosmed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `menu_managemen`
--
ALTER TABLE `menu_managemen`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `posting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `posting_kategori`
--
ALTER TABLE `posting_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  MODIFY `id_sarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statis_page`
--
ALTER TABLE `statis_page`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `survei_detail`
--
ALTER TABLE `survei_detail`
  MODIFY `kode_survei_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `survei_ikm`
--
ALTER TABLE `survei_ikm`
  MODIFY `id_ikm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survei_ikm_detail`
--
ALTER TABLE `survei_ikm_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `survei_setting_detail`
--
ALTER TABLE `survei_setting_detail`
  MODIFY `id_survei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `unggah_file`
--
ALTER TABLE `unggah_file`
  MODIFY `id_unggah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Constraints for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD CONSTRAINT `user_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_token`
--
ALTER TABLE `user_token`
  ADD CONSTRAINT `user_token_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
