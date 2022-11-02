-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2020 at 11:51 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinkespariaman`
--

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
-- Table structure for table `bag_aplikasi`
--

CREATE TABLE `bag_aplikasi` (
  `aplikasi_id` int(11) NOT NULL,
  `aplikasi_nama` varchar(100) NOT NULL,
  `aplikasi_image` varchar(300) NOT NULL,
  `aplikasi_keterangan` text NOT NULL,
  `aplikasi_url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bag_aplikasi`
--

INSERT INTO `bag_aplikasi` (`aplikasi_id`, `aplikasi_nama`, `aplikasi_image`, `aplikasi_keterangan`, `aplikasi_url`) VALUES
(2, 'e-Puskesmas', '/uploads/icon_apl/c08b44d3b755945479c3e02b9fe5e187.png', 'Dolor sit amet, consectetur adipisicing elit. Dolorem consectetur delectus debitis doloribus sed, obcaecati illum quos expedita recusandae! Cupiditate.', 'ekinerja3.pariamankota.go.id'),
(3, 'KOMDAT', '/uploads/icon_apl/af0d497496e0f45b940f55f6265fb268.jpg', 'Dolor sit amet, consectetur adipisicing elit. Dolorem consectetur delectus debitis doloribus sed, obcaecati illum quos expedita recusandae! Cupiditate.', 'ekinerja3.pariamankota.go.id'),
(4, 'ASPAK', '/uploads/icon_apl/db96f11b56bf361c8840776f57891c30.png', 'Dolor sit amet, consectetur adipisicing elit. Dolorem consectetur delectus debitis doloribus sed, obcaecati illum quos expedita recusandae! Cupiditate.', 'ekinerja3.pariamankota.go.id'),
(5, 'SPM', '/uploads/icon_apl/bc44cd7a48031feb31a3850631140526.png', 'Dolor sit amet, consectetur adipisicing elit. Dolorem consectetur delectus debitis doloribus sed, obcaecati illum quos expedita recusandae! Cupiditate.', 'ekinerja3.pariamankota.go.id');

-- --------------------------------------------------------

--
-- Table structure for table `corona_pariaman`
--

CREATE TABLE `corona_pariaman` (
  `kecamatan_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `suspek_rawat` int(11) NOT NULL,
  `suspek_isolasi_mandiri` int(11) NOT NULL,
  `suspek_discarded` int(11) NOT NULL,
  `terkonfirmasi_rawat` int(11) NOT NULL,
  `terkonfirmasi_fasilitas_khusus` int(11) NOT NULL,
  `terkonfirmasi_isolasi_mandiri` int(11) NOT NULL,
  `terkonfirmasi_meninggal` int(11) NOT NULL,
  `terkonfirmasi_sembuh` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` tinyint(1) NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` tinyint(1) DEFAULT NULL,
  `trans_ip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Sosial Media', 1),
(2, 'Menu', 1),
(3, 'Slider', 1),
(4, 'Deskripsi OPD', 1),
(5, 'Jenis Aplikasi Utama OPD', 1),
(6, 'Jadwal Kerja', 1),
(7, 'Bidang atau UPT', 1),
(8, 'Sambutan Kepala Dinas', 1),
(9, 'Informasi Covid', 1),
(10, 'Pegawai OPD', 1),
(11, 'Pengumuman Seputar OPD', 1),
(12, 'Berita', 1),
(13, 'Jenis Pelayanan', 1),
(14, 'Kepala Dinas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kecamatan_id` int(11) NOT NULL,
  `kecamatan_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kecamatan_id`, `kecamatan_nama`) VALUES
(1, 'Pariaman Tengah'),
(2, 'Pariaman Timur'),
(3, 'Pariaman Utara'),
(4, 'Pariaman Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `kepala_dinas`
--

CREATE TABLE `kepala_dinas` (
  `NIP` varchar(18) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `judul_sambutan` varchar(255) NOT NULL,
  `kata_sambutan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepala_dinas`
--

INSERT INTO `kepala_dinas` (`NIP`, `jabatan`, `tahun`, `status`, `judul_sambutan`, `kata_sambutan`) VALUES
('196210031982101001', 'Kepala Dinas Kesehatan Kota Pariaman', 2020, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit Perferendis repudiandae nostrum quibusdam! elit Perferendis repudiandae', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident tempora perspiciatis quod commodi iure neque eaque quos, consequuntur expedita dolorem dicta dignissimos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident tempora perspiciatis quod commodi iure neque eaque quos, consequuntur expedita dolorem dicta dignissimos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident tempora perspiciatis quod commodi iure neque eaque quos, consequuntur expedita dolorem dicta dignissimos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident tempora perspiciatis quod commodi iure neque eaque quos, consequuntur expedita dolorem dicta dignissimos.');

-- --------------------------------------------------------

--
-- Table structure for table `kesmas`
--

CREATE TABLE `kesmas` (
  `kesmas_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesmas`
--

INSERT INTO `kesmas` (`kesmas_id`, `sub_id`, `group_id`, `tahun`, `jumlah`) VALUES
(1, 1, 61, 2020, 2),
(4, 61, 61, 2020, 2),
(5, 3, 61, 2020, 14),
(6, 4, 61, 2020, 13),
(7, 5, 61, 2020, 9),
(8, 6, 61, 2020, 0),
(9, 7, 61, 2020, 137),
(10, 8, 61, 2020, 3),
(11, 9, 61, 2020, 3),
(12, 10, 62, 2020, 3),
(13, 11, 62, 2020, 21),
(14, 12, 62, 2020, 6),
(15, 13, 62, 2020, 30),
(16, 14, 62, 2020, 18),
(17, 15, 62, 2020, 8),
(18, 16, 62, 2020, 13),
(19, 17, 62, 2020, 0),
(20, 63, 62, 2020, 121),
(21, 18, 62, 2020, 7),
(22, 19, 62, 2020, 77),
(23, 65, 31, 2020, 10381),
(24, 65, 32, 2020, 2319),
(25, 65, 33, 2020, 3354),
(26, 66, 31, 2020, 34.6),
(27, 66, 33, 2020, 7.7);

-- --------------------------------------------------------

--
-- Table structure for table `kesmas_group`
--

CREATE TABLE `kesmas_group` (
  `group_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `group_nama` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesmas_group`
--

INSERT INTO `kesmas_group` (`group_id`, `kategori_id`, `group_nama`, `status`) VALUES
(31, 5, 'Penyakit Saluran Pernapasan Bagian Atas (ISPA)', 1),
(32, 5, 'Penyakit Infeksi Kulit', 1),
(33, 5, 'Penyakit Reumatik', 1),
(34, 5, 'Penyakit Gastritis', 1),
(35, 5, 'Penyakit Hipertensi', 1),
(36, 5, 'Penyakit Diare', 1),
(37, 5, 'Penyakit Infeksi Jamur', 1),
(38, 5, 'Penyakit Asma', 1),
(39, 5, 'Penyakit Gigi', 1),
(40, 5, 'Penyakit Bronkitis', 1),
(41, 6, 'Poli Bedah', 1),
(42, 6, 'Poli Mata', 1),
(43, 6, 'Poli Gigi', 1),
(44, 6, 'Poli Kebidanan', 1),
(45, 6, 'Poli Anak', 1),
(46, 6, 'Poli Umum', 1),
(47, 6, 'Poli Keluarga Berencana', 1),
(48, 6, 'Poli Jiwa', 1),
(49, 6, 'UGD', 1),
(50, 6, 'Poli THT', 1),
(51, 6, 'Poli Kulit dan Kelamin', 1),
(52, 6, 'Poli Penyakit Dalam', 1),
(53, 6, 'Poli Paru-Paru', 1),
(54, 6, 'Neurology', 1),
(55, 6, 'Fisioterapy', 1),
(56, 6, 'Kanker', 1),
(57, 6, 'Poli Urologi', 1),
(58, 6, 'Poli Bedah Plastik', 1),
(59, 6, 'Poli Psikologi / Tumbuh Kembang', 1),
(60, 6, 'Okupasi Terasi', 1),
(61, 1, 'Jumlah Total Pertahun', 1),
(62, 2, 'Jumlah Total Pertahun', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kesmas_kategori`
--

CREATE TABLE `kesmas_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesmas_kategori`
--

INSERT INTO `kesmas_kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Jumlah Sarana Kesehatan di Kota Pariaman'),
(2, 'Jumlah Tenaga Kesehatan di Kota Pariaman'),
(3, 'Banyaknya Kelahiran, Kematian Ibu dan Keguguran di Puskesmas di Kota Pariaman'),
(4, 'Jumlah Imunisasi Bayi di Kota Pariaman'),
(5, 'Jumlah Kunjungan Sepuluh Jenis Penyakit Terbanyak di Puskesmas di Kota Pariaman'),
(6, 'Jumlah Pasien Rawat Jalan di Rumah Sakit Umum Pariaman'),
(7, 'Jumlah Pasien Rawat Inap di Rumah Sakit Umum Pariaman'),
(8, 'Jumlah Pengunjung Rawat Jalan dan Rata-Rata Kunjungan per Hari  di RSUD Pariaman'),
(9, 'Jumlah Peserta KB Baru Menurut Jenis Kontrasepsi di Kota Pariaman'),
(10, 'Pencapaian Peserta KB Aktif per Mix Kontrasepsi  di Kota Pariaman '),
(11, 'Jumlah Ibu Bersalin yang ditolong oleh tenaga kesehatan menurut kecamatan di Kota Pariaman'),
(12, 'Jumlah desa/ Kelurahan UCI (Universal Child Immunization), jumlah balita gizi buruk yang mendapat perawatan dan jumlah seluruh balita gizi buruk di Kota Pariaman'),
(13, 'Jumlah penderita baru TBC BTA (+) yang diobati dan perkiraan penderita baru TBC BTA (+) Menurut Kecamatan  di Kota Pariaman'),
(14, 'Jumlah penderita DBD yang ditangani  dan penderita DBD yang ditemukan di Kota Pariaman'),
(15, 'Jumlah bayi yang memperoleh pelayanan kesehatan dan Kelahiran Bayi di Kota Pariaman '),
(16, 'Jumlah Kematian Bayi dan Anak Balita Menurut Kecamatan di Kota Pariaman ');

-- --------------------------------------------------------

--
-- Table structure for table `kesmas_subkategori`
--

CREATE TABLE `kesmas_subkategori` (
  `sub_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `sub_nama` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesmas_subkategori`
--

INSERT INTO `kesmas_subkategori` (`sub_id`, `kategori_id`, `sub_nama`, `status`) VALUES
(1, 1, 'Rumah Sakit Pemerintah', 1),
(2, 1, 'Puskesmas', 1),
(3, 1, 'Puskesmas Keliling', 1),
(4, 1, 'Puskesmas Pembantu', 1),
(5, 1, 'Klinik Swasta', 1),
(6, 1, 'Rumah Bersalin', 1),
(7, 1, 'Posyandu', 1),
(8, 1, 'Rumah Obat', 1),
(9, 1, 'Apotek Dispen', 1),
(10, 2, 'Dokter Spesialis', 1),
(11, 2, 'Dokter Umum', 1),
(12, 2, 'Dokter Gigi', 1),
(13, 2, 'Sarjana Kesehatan Masyarakat', 1),
(14, 2, 'Sarjana Farmasi/Apoteker', 1),
(15, 2, 'Sarjana Kesehatan (S-2)', 1),
(16, 2, 'Sarjana Non Kesehatan', 1),
(17, 2, 'Dokter (PTT)', 1),
(18, 2, 'Bidan (PTT)', 1),
(19, 2, 'Perawat', 1),
(20, 3, 'Lahir Hidup', 1),
(21, 3, 'Lahir Mati', 1),
(22, 3, 'Kematian Ibu Bersalin', 1),
(23, 3, 'Keguguran', 1),
(24, 4, 'DPT- 1 + HB1', 1),
(25, 4, 'DPT-3 + HB 3', 1),
(26, 4, 'B-3', 1),
(27, 4, 'BCG', 1),
(28, 4, 'Campak', 1),
(29, 4, 'Polio III', 1),
(30, 4, 'Polio IV', 1),
(61, 1, 'Rumah Sakit Swasta', 1),
(62, 1, 'Lokasi', 1),
(63, 2, 'Bidan (PNS)', 1),
(65, 5, 'Jumlah Kunjungan', 1),
(66, 5, 'Persentase', 1);

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
(4, NULL, 'Pelayanan', 1, 'site/all-pelayanan', 1),
(6, 2, 'Visi dan Misi', 2, 'site/visimisi', 1),
(7, 2, 'Struktur Organisasi', 3, 'site/struktur', 1),
(8, 2, 'Tupoksi', 4, '-', 1),
(9, 2, 'Tentang', 1, 'site/tentangopd', 1),
(10, 2, 'Profil Pejabat', 5, '-', 1),
(11, NULL, 'Berita', 1, 'site/all-berita', 1),
(12, NULL, 'Pengumuman', 1, 'site/all-pengumuman', 1),
(13, NULL, 'Informasi KesMas', 1, 'site/info-kesmas', 1),
(14, NULL, 'Covid-19', 1, '-', 1);

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
-- Table structure for table `pegawaifoto`
--

CREATE TABLE `pegawaifoto` (
  `pegawai_nip` varchar(30) NOT NULL,
  `lokasi_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawaifoto`
--

INSERT INTO `pegawaifoto` (`pegawai_nip`, `lokasi_image`) VALUES
('196210031982101001', '/uploads/fotopegawai/196210031982101001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `posting_id` int(11) NOT NULL,
  `posting_kategori` int(11) NOT NULL,
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

INSERT INTO `posting` (`posting_id`, `posting_kategori`, `posting_menu`, `posting_judul`, `posting_icon`, `posting_image_utama`, `posting_deskripsi`, `posting_status`, `posting_layout`, `create_at`, `update_at`, `create_by`, `update_by`, `trans_ip`) VALUES
(2, 7, 0, 'UPT Puskesmas Kurai Taji', '/uploads/posting/icon/7d2f7a7c24a2d1dfdfdbdedb76eb3495.png', '/uploads/posting/image_utama/a368d752a4b6cd11cacf752d1dc2e445.jpg', '<p><strong><img alt=\"\" src=\"http://localhost/dinkespariaman/uploads/posting/content/01fc8f95f82b4200e8cc2a8f00fdded3.png\" style=\"height:205px; width:157px\" /><img alt=\"\" src=\"http://localhost/dinkespariaman/uploads/posting/content/z3PWDBbl6WNiNCWK.jpg\" style=\"height:600px; width:800px\" /></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Nullam mattis odio quis justo finibus ultricies. </strong>Duis elementum dui congue diam mattis blandit. Praesent convallis fringilla tellus a venenatis. Donec pharetra, leo tempus pulvinar fermentum, urna felis semper dui, at commodo metus purus ornare velit. Proin facilisis vehicula blandit. Nulla elementum congue fermentum. Aenean feugiat sit amet justo vitae tempus. Proin sed porttitor lorem, sed iaculis ligula. <strong>Aenean eget quam dolor</strong>, Aliquam id diam id mi condimentum semper vitae at lorem. Sed diam orci, malesuada sit amet ornare at, finibus vel mi. Vestibulum elit justo, posuere eget nibh vel, faucibus placerat sem. Sed id purus in urna ullamcorper hendrerit. In interdum pellentesque dolor, ut posuere lectus malesuada id.</p>\r\n', 1, 1, '2020-07-24 04:22:01', '2020-07-29 04:50:26', 1, 1, '::1'),
(3, 7, 0, 'UPT Puskesmas Marunggi', '/uploads/posting/icon/dfd8eb8bc082317a4bda9f92793a4358.png', '/uploads/posting/image_utama/dfd8d5975f06a98b75990c9e45f345e3.jpg', '<p><strong>Nullam mattis odio quis justo finibus ultricies. </strong>Duis elementum dui congue diam mattis blandit. Praesent convallis fringilla tellus a venenatis. Donec pharetra, leo tempus pulvinar fermentum, urna felis semper dui, at commodo metus purus ornare velit. Proin facilisis vehicula blandit. Nulla elementum congue fermentum. Aenean feugiat sit amet justo vitae tempus. Proin sed porttitor lorem, sed iaculis ligula. <strong>Aenean eget quam dolor</strong>, Aliquam id diam id mi condimentum semper vitae at lorem. Sed diam orci, malesuada sit amet ornare at, finibus vel mi. Vestibulum elit justo, posuere eget nibh vel, faucibus placerat sem. Sed id purus in urna ullamcorper hendrerit. In interdum pellentesque dolor, ut posuere lectus malesuada id.</p>\r\n', 1, 1, '2020-07-24 06:07:44', '2020-07-29 05:34:01', 1, 1, '::1'),
(4, 7, 0, 'UPT Puskesmas Pariaman', '/uploads/posting/icon/cf80c3f401cbd9397af44e6a51663892.png', NULL, '<p><strong>Nullam mattis odio quis justo finibus ultricies. </strong>Duis elementum dui congue diam mattis blandit. Praesent convallis fringilla tellus a venenatis. Donec pharetra, leo tempus pulvinar fermentum, urna felis semper dui, at commodo metus purus ornare velit. Proin facilisis vehicula blandit. Nulla elementum congue fermentum. Aenean feugiat sit amet justo vitae tempus. Proin sed porttitor lorem, sed iaculis ligula. <strong>Aenean eget quam dolor</strong>, Aliquam id diam id mi condimentum semper vitae at lorem. Sed diam orci, malesuada sit amet ornare at, finibus vel mi. Vestibulum elit justo, posuere eget nibh vel, faucibus placerat sem. Sed id purus in urna ullamcorper hendrerit. In interdum pellentesque dolor, ut posuere lectus malesuada id.</p>\r\n', 1, 1, '2020-07-24 06:08:42', '2020-07-29 05:49:02', 1, 1, '::1'),
(5, 7, 0, 'UPT Puskesmas Naras', '/uploads/posting/icon/0ab8de36aa436e5349518fdb6346748a.png', NULL, '<p><strong>Nullam mattis odio quis justo finibus ultricies. </strong>Duis elementum dui congue diam mattis blandit. Praesent convallis fringilla tellus a venenatis. Donec pharetra, leo tempus pulvinar fermentum, urna felis semper dui, at commodo metus purus ornare velit. Proin facilisis vehicula blandit. Nulla elementum congue fermentum. Aenean feugiat sit amet justo vitae tempus. Proin sed porttitor lorem, sed iaculis ligula. <strong>Aenean eget quam dolor</strong>, Aliquam id diam id mi condimentum semper vitae at lorem. Sed diam orci, malesuada sit amet ornare at, finibus vel mi. Vestibulum elit justo, posuere eget nibh vel, faucibus placerat sem. Sed id purus in urna ullamcorper hendrerit. In interdum pellentesque dolor, ut posuere lectus malesuada id.</p>\r\n', 1, 1, '2020-07-24 06:09:22', '2020-07-29 05:49:16', 1, 1, '::1'),
(6, 7, 0, 'UPT Puskesmas Sikapak', '/uploads/posting/icon/d2b262e5955fabe2036e1431a33ebcce.png', NULL, '<p><strong>Nullam mattis odio quis justo finibus ultricies. </strong>Duis elementum dui congue diam mattis blandit. Praesent convallis fringilla tellus a venenatis. Donec pharetra, leo tempus pulvinar fermentum, urna felis semper dui, at commodo metus purus ornare velit. Proin facilisis vehicula blandit. Nulla elementum congue fermentum. Aenean feugiat sit amet justo vitae tempus. Proin sed porttitor lorem, sed iaculis ligula. <strong>Aenean eget quam dolor</strong>, Aliquam id diam id mi condimentum semper vitae at lorem. Sed diam orci, malesuada sit amet ornare at, finibus vel mi. Vestibulum elit justo, posuere eget nibh vel, faucibus placerat sem. Sed id purus in urna ullamcorper hendrerit. In interdum pellentesque dolor, ut posuere lectus malesuada id.</p>\r\n', 1, 1, '2020-07-24 06:25:36', '2020-07-29 05:49:27', 1, 1, '::1'),
(7, 7, 0, 'UPT Puskesmas Kp. Baru Padusunan', '/uploads/posting/icon/f4cf9a66ddfab53193a82abf30d20634.png', NULL, '<p><strong>Nullam mattis odio quis justo finibus ultricies. </strong>Duis elementum dui congue diam mattis blandit. Praesent convallis fringilla tellus a venenatis. Donec pharetra, leo tempus pulvinar fermentum, urna felis semper dui, at commodo metus purus ornare velit. Proin facilisis vehicula blandit. Nulla elementum congue fermentum. Aenean feugiat sit amet justo vitae tempus. Proin sed porttitor lorem, sed iaculis ligula. <strong>Aenean eget quam dolor</strong>, Aliquam id diam id mi condimentum semper vitae at lorem. Sed diam orci, malesuada sit amet ornare at, finibus vel mi. Vestibulum elit justo, posuere eget nibh vel, faucibus placerat sem. Sed id purus in urna ullamcorper hendrerit. In interdum pellentesque dolor, ut posuere lectus malesuada id.</p>\r\n', 1, 1, '2020-07-24 06:26:08', '2020-07-29 05:50:13', 1, 1, '::1'),
(8, 7, 0, 'UPT Puskesmas Santok', '/uploads/posting/icon/e46d650f6ab967cfb9e566d6e276faed.png', NULL, '<p><strong>Nullam mattis odio quis justo finibus ultricies. </strong>Duis elementum dui congue diam mattis blandit. Praesent convallis fringilla tellus a venenatis. Donec pharetra, leo tempus pulvinar fermentum, urna felis semper dui, at commodo metus purus ornare velit. Proin facilisis vehicula blandit. Nulla elementum congue fermentum. Aenean feugiat sit amet justo vitae tempus. Proin sed porttitor lorem, sed iaculis ligula. <strong>Aenean eget quam dolor</strong>, Aliquam id diam id mi condimentum semper vitae at lorem. Sed diam orci, malesuada sit amet ornare at, finibus vel mi. Vestibulum elit justo, posuere eget nibh vel, faucibus placerat sem. Sed id purus in urna ullamcorper hendrerit. In interdum pellentesque dolor, ut posuere lectus malesuada id.</p>\r\n', 1, 1, '2020-07-24 06:26:41', '2020-07-29 05:50:31', 1, 1, '::1'),
(9, 7, 0, 'RSUD Dr. Sadikin', '/uploads/posting/icon/279d35ed7b63fd2ec2763b64ceade24a.png', NULL, '<p><strong>Nullam mattis odio quis justo finibus ultricies. </strong>Duis elementum dui congue diam mattis blandit. Praesent convallis fringilla tellus a venenatis. Donec pharetra, leo tempus pulvinar fermentum, urna felis semper dui, at commodo metus purus ornare velit. Proin facilisis vehicula blandit. Nulla elementum congue fermentum. Aenean feugiat sit amet justo vitae tempus. Proin sed porttitor lorem, sed iaculis ligula. <strong>Aenean eget quam dolor</strong>, Aliquam id diam id mi condimentum semper vitae at lorem. Sed diam orci, malesuada sit amet ornare at, finibus vel mi. Vestibulum elit justo, posuere eget nibh vel, faucibus placerat sem. Sed id purus in urna ullamcorper hendrerit. In interdum pellentesque dolor, ut posuere lectus malesuada id.</p>\r\n', 1, 1, '2020-07-24 06:27:10', '2020-07-29 05:53:55', 1, 1, '::1'),
(10, 7, 0, 'UPT Instalasi Farmasi', '/uploads/posting/icon/6a1578a77d2849ee8e9800192d372aac.png', NULL, '<p><strong>Nullam mattis odio quis justo finibus ultricies. </strong>Duis elementum dui congue diam mattis blandit. Praesent convallis fringilla tellus a venenatis. Donec pharetra, leo tempus pulvinar fermentum, urna felis semper dui, at commodo metus purus ornare velit. Proin facilisis vehicula blandit. Nulla elementum congue fermentum. Aenean feugiat sit amet justo vitae tempus. Proin sed porttitor lorem, sed iaculis ligula. <strong>Aenean eget quam dolor</strong>, Aliquam id diam id mi condimentum semper vitae at lorem. Sed diam orci, malesuada sit amet ornare at, finibus vel mi. Vestibulum elit justo, posuere eget nibh vel, faucibus placerat sem. Sed id purus in urna ullamcorper hendrerit. In interdum pellentesque dolor, ut posuere lectus malesuada id.</p>\r\n', 1, 1, '2020-07-24 06:27:39', '2020-07-29 05:53:42', 1, 1, '::1'),
(11, 7, 0, 'Bidang Yankes dan SDK', '/uploads/posting/icon/0bed16ac7a2c19f0414a6eeb644f847d.png', NULL, '<p><strong>Nullam mattis odio quis justo finibus ultricies. </strong>Duis elementum dui congue diam mattis blandit. Praesent convallis fringilla tellus a venenatis. Donec pharetra, leo tempus pulvinar fermentum, urna felis semper dui, at commodo metus purus ornare velit. Proin facilisis vehicula blandit. Nulla elementum congue fermentum. Aenean feugiat sit amet justo vitae tempus. Proin sed porttitor lorem, sed iaculis ligula. <strong>Aenean eget quam dolor</strong>, Aliquam id diam id mi condimentum semper vitae at lorem. Sed diam orci, malesuada sit amet ornare at, finibus vel mi. Vestibulum elit justo, posuere eget nibh vel, faucibus placerat sem. Sed id purus in urna ullamcorper hendrerit. In interdum pellentesque dolor, ut posuere lectus malesuada id.</p>\r\n', 1, 1, '2020-07-24 06:28:36', '2020-07-29 05:54:11', 1, 1, '::1'),
(12, 7, 0, 'Bidang KesMas', '/uploads/posting/icon/f83363788f71916fc3fad98740827ba6.png', NULL, '<p><strong>Nullam mattis odio quis justo finibus ultricies. </strong>Duis elementum dui congue diam mattis blandit. Praesent convallis fringilla tellus a venenatis. Donec pharetra, leo tempus pulvinar fermentum, urna felis semper dui, at commodo metus purus ornare velit. Proin facilisis vehicula blandit. Nulla elementum congue fermentum. Aenean feugiat sit amet justo vitae tempus. Proin sed porttitor lorem, sed iaculis ligula. <strong>Aenean eget quam dolor</strong>, Aliquam id diam id mi condimentum semper vitae at lorem. Sed diam orci, malesuada sit amet ornare at, finibus vel mi. Vestibulum elit justo, posuere eget nibh vel, faucibus placerat sem. Sed id purus in urna ullamcorper hendrerit. In interdum pellentesque dolor, ut posuere lectus malesuada id.</p>\r\n', 1, 1, '2020-07-24 06:29:25', '2020-07-29 05:54:29', 1, 1, '::1'),
(13, 7, 0, 'Bidang P2P', '/uploads/posting/icon/091c9a993ec68b4dd7b74d151f8526e5.png', NULL, '<p><strong>Nullam mattis odio quis justo finibus ultricies. </strong>Duis elementum dui congue diam mattis blandit. Praesent convallis fringilla tellus a venenatis. Donec pharetra, leo tempus pulvinar fermentum, urna felis semper dui, at commodo metus purus ornare velit. Proin facilisis vehicula blandit. Nulla elementum congue fermentum. Aenean feugiat sit amet justo vitae tempus. Proin sed porttitor lorem, sed iaculis ligula. <strong>Aenean eget quam dolor</strong>, Aliquam id diam id mi condimentum semper vitae at lorem. Sed diam orci, malesuada sit amet ornare at, finibus vel mi. Vestibulum elit justo, posuere eget nibh vel, faucibus placerat sem. Sed id purus in urna ullamcorper hendrerit. In interdum pellentesque dolor, ut posuere lectus malesuada id.</p>\r\n', 1, 1, '2020-07-24 06:30:11', '2020-07-29 05:54:44', 1, 1, '::1'),
(14, 5, 0, 'e-Puskesmas', '/uploads/posting/icon/d32599de1cff9efe863eb204958a69e2.png', NULL, '<p>Fusce sem dui, venenatis vitae tempor sit amet, suscipit vitae tellus. Cras id ornare odio, id pellentesque quam. Maecenas fermentum urna vitae nunc pretium, at sollicitudin turpis tincidunt. Sed augue justo, aliquet finibus bibendum at</p>\r\n', 1, 1, '2020-07-24 09:04:35', '2020-07-29 05:55:18', 1, 1, '::1'),
(15, 5, 0, 'KOMDAT', '/uploads/posting/icon/3cbe64fc08b9aed234ea99dd7680342c.png', NULL, '<p>Fusce sem dui, venenatis vitae tempor sit amet, suscipit vitae tellus. Cras id ornare odio, id pellentesque quam. Maecenas fermentum urna vitae nunc pretium, at sollicitudin turpis tincidunt. Sed augue justo, aliquet finibus bibendum at</p>\r\n', 1, 1, '2020-07-24 09:07:41', '2020-07-29 05:55:30', 1, 1, '::1'),
(16, 5, 0, 'ASPAK', '/uploads/posting/icon/1956d37352bf3d9d543d069869814393.png', NULL, '<p>Fusce sem dui, venenatis vitae tempor sit amet, suscipit vitae tellus. Cras id ornare odio, id pellentesque quam. Maecenas fermentum urna vitae nunc pretium, at sollicitudin turpis tincidunt. Sed augue justo, aliquet finibus bibendum at</p>\r\n', 1, 1, '2020-07-24 09:14:43', '2020-07-29 05:55:41', 1, 1, '::1'),
(17, 5, 0, 'SPM', '/uploads/posting/icon/a369b47ba5e1575fa38e76fc4eec2f48.png', NULL, '<p>Fusce sem dui, venenatis vitae tempor sit amet, suscipit vitae tellus. Cras id ornare odio, id pellentesque quam. Maecenas fermentum urna vitae nunc pretium, at sollicitudin turpis tincidunt. Sed augue justo, aliquet finibus bibendum at</p>\r\n', 1, 1, '2020-07-24 09:19:47', '2020-07-29 05:55:54', 1, 1, '::1'),
(18, 5, 0, 'Aplikasi Data PTT', '/uploads/posting/icon/f8c85482bbd960749324d0b3fb4eff34.png', NULL, '<p>Fusce sem dui, venenatis vitae tempor sit amet, suscipit vitae tellus. Cras id ornare odio, id pellentesque quam. Maecenas fermentum urna vitae nunc pretium, at sollicitudin turpis tincidunt. Sed augue justo, aliquet finibus bibendum at</p>\r\n', 1, 1, '2020-07-24 09:22:42', '2020-07-29 05:56:12', 1, 1, '::1'),
(19, 5, 0, 'Gizi KIA Terintegrasi', '/uploads/posting/icon/3c3b259e3a5463f5dd12e04d4ec9526a.png', NULL, '<p>Fusce sem dui, venenatis vitae tempor sit amet, suscipit vitae tellus. Cras id ornare odio, id pellentesque quam. Maecenas fermentum urna vitae nunc pretium, at sollicitudin turpis tincidunt. Sed augue justo, aliquet finibus bibendum at</p>\r\n', 1, 1, '2020-07-24 09:23:16', '2020-07-29 05:56:24', 1, 1, '::1'),
(20, 5, 0, 'SIK Gizi', '/uploads/posting/icon/9a6d7276774f51f9e4993d1e19d6d74b.png', NULL, '<p>Fusce sem dui, venenatis vitae tempor sit amet, suscipit vitae tellus. Cras id ornare odio, id pellentesque quam. Maecenas fermentum urna vitae nunc pretium, at sollicitudin turpis tincidunt. Sed augue justo, aliquet finibus bibendum at</p>\r\n', 1, 1, '2020-07-24 09:24:35', '2020-07-29 05:56:36', 1, 1, '::1'),
(21, 5, 0, 'e-Monev HSP', '/uploads/posting/icon/b70f6e2bb990280d538eee4f9484c2e8.png', NULL, '<p>Fusce sem dui, venenatis vitae tempor sit amet, suscipit vitae tellus. Cras id ornare odio, id pellentesque quam. Maecenas fermentum urna vitae nunc pretium, at sollicitudin turpis tincidunt. Sed augue justo, aliquet finibus bibendum at</p>\r\n', 1, 1, '2020-07-24 09:25:21', '2020-07-29 05:56:48', 1, 1, '::1'),
(22, 5, 0, 'STBM', '/uploads/posting/icon/21061bc2b232ae873e8ded5eebdd5e8a.png', NULL, '<p>Fusce sem dui, venenatis vitae tempor sit amet, suscipit vitae tellus. Cras id ornare odio, id pellentesque quam. Maecenas fermentum urna vitae nunc pretium, at sollicitudin turpis tincidunt. Sed augue justo, aliquet finibus bibendum at</p>\r\n', 1, 1, '2020-07-24 09:25:49', '2020-07-29 05:57:10', 1, 1, '::1'),
(23, 5, 0, 'SITT', '/uploads/posting/icon/c3a27955f4e36bb4ac91d71fe3afc362.png', NULL, '<p>Fusce sem dui, venenatis vitae tempor sit amet, suscipit vitae tellus. Cras id ornare odio, id pellentesque quam. Maecenas fermentum urna vitae nunc pretium, at sollicitudin turpis tincidunt. Sed augue justo, aliquet finibus bibendum at</p>\r\n', 1, 1, '2020-07-24 09:27:07', '2020-07-29 05:57:28', 1, 1, '::1'),
(24, 5, 0, 'e-Sismal', '/uploads/posting/icon/5f5a030a7c81a3118067ef26bb993ae4.png', NULL, '<p>Fusce sem dui, venenatis vitae tempor sit amet, suscipit vitae tellus. Cras id ornare odio, id pellentesque quam. Maecenas fermentum urna vitae nunc pretium, at sollicitudin turpis tincidunt. Sed augue justo, aliquet finibus bibendum at</p>\r\n', 1, 1, '2020-07-24 09:27:30', '2020-07-29 05:57:35', 1, 1, '::1'),
(25, 5, 0, 'Kursa Elektronik', '/uploads/posting/icon/2493f602d4917a6b47f20eb55587d11b.png', NULL, '<p>Fusce sem dui, venenatis vitae tempor sit amet, suscipit vitae tellus. Cras id ornare odio, id pellentesque quam. Maecenas fermentum urna vitae nunc pretium, at sollicitudin turpis tincidunt. Sed augue justo, aliquet finibus bibendum at</p>\r\n', 1, 1, '2020-07-24 09:27:55', '2020-07-29 05:57:43', 1, 1, '::1'),
(26, 5, 0, 'SKDR Surveilans', '/uploads/posting/icon/9ad663d500b095b57a324a07355a1d0e.png', NULL, '<p>Fusce sem dui, venenatis vitae tempor sit amet, suscipit vitae tellus. Cras id ornare odio, id pellentesque quam. Maecenas fermentum urna vitae nunc pretium, at sollicitudin turpis tincidunt. Sed augue justo, aliquet finibus bibendum at</p>\r\n', 1, 1, '2020-07-24 09:28:27', '2020-07-29 05:57:51', 1, 1, '::1'),
(27, 5, 0, 'Portal PTM', '/uploads/posting/icon/101271950911bb41bc1492c2b705259d.png', NULL, '<p>Fusce sem dui, venenatis vitae tempor sit amet, suscipit vitae tellus. Cras id ornare odio, id pellentesque quam. Maecenas fermentum urna vitae nunc pretium, at sollicitudin turpis tincidunt. Sed augue justo, aliquet finibus bibendum at</p>\r\n', 1, 1, '2020-07-24 09:28:53', '2020-07-29 05:57:58', 1, 1, '::1'),
(28, 9, 0, 'Terkonfirmasi', '/uploads/posting/icon/5df9864aa8c9a6436aa61a82b0eab0b5.png', NULL, '<p>Ketiga istilah ini dibuat untuk mengelompokkan risiko serta penampakan gejala dari orang-orang yang mungkin atau sudah terpapar <a href=\"https://www.sehatq.com/penyakit/virus-corona\" rel=\"noopener\" target=\"_blank\">virus Corona (SARS-CoV-2)</a>.&nbsp;Contoh orang-orang yang akan dimasukkan dalam kelompok-kelompok ini adalah mereka yang baru pulang dari luar negeri dan yang pernah berkontak secara langsung dengan pasien positif corona.</p>\r\n\r\n<p>Pemberian status ODP, PDP, dan suspect didapat dari proses tracking yang dilakukan pemerintah dengan mengaitkan data-data yang ada di lapangan. Pasien yang masuk sebagai salah satu dari ketiga kelompok tersebut akan diberitahu oleh petugas kesehatan terkait, dan umumnya diinstruksikan untuk menjalani karantina selama 14 hari.</p>\r\n', 1, 1, '2020-07-27 09:51:22', '2020-07-29 05:58:38', 1, 1, '::1'),
(29, 9, 0, 'ODP', '/uploads/posting/icon/88cf03589fe281f68769b76488982ca0.png', NULL, '<p>Ketiga istilah ini dibuat untuk mengelompokkan risiko serta penampakan gejala dari orang-orang yang mungkin atau sudah terpapar <a href=\"https://www.sehatq.com/penyakit/virus-corona\" rel=\"noopener\" target=\"_blank\">virus Corona (SARS-CoV-2)</a>.&nbsp;Contoh orang-orang yang akan dimasukkan dalam kelompok-kelompok ini adalah mereka yang baru pulang dari luar negeri dan yang pernah berkontak secara langsung dengan pasien positif corona.</p>\r\n\r\n<p>Pemberian status ODP, PDP, dan suspect didapat dari proses tracking yang dilakukan pemerintah dengan mengaitkan data-data yang ada di lapangan. Pasien yang masuk sebagai salah satu dari ketiga kelompok tersebut akan diberitahu oleh petugas kesehatan terkait, dan umumnya diinstruksikan untuk menjalani karantina selama 14 hari.</p>\r\n', 1, 1, '2020-07-27 09:56:20', '2020-07-29 05:58:48', 1, 1, '::1'),
(30, 9, 0, 'Dirawat', '/uploads/posting/icon/c1da90e48f5d335e87a74324e3cda26d.png', NULL, '<p>Ketiga istilah ini dibuat untuk mengelompokkan risiko serta penampakan gejala dari orang-orang yang mungkin atau sudah terpapar <a href=\"https://www.sehatq.com/penyakit/virus-corona\" rel=\"noopener\" target=\"_blank\">virus Corona (SARS-CoV-2)</a>.&nbsp;Contoh orang-orang yang akan dimasukkan dalam kelompok-kelompok ini adalah mereka yang baru pulang dari luar negeri dan yang pernah berkontak secara langsung dengan pasien positif corona.</p>\r\n\r\n<p>Pemberian status ODP, PDP, dan suspect didapat dari proses tracking yang dilakukan pemerintah dengan mengaitkan data-data yang ada di lapangan. Pasien yang masuk sebagai salah satu dari ketiga kelompok tersebut akan diberitahu oleh petugas kesehatan terkait, dan umumnya diinstruksikan untuk menjalani karantina selama 14 hari.</p>\r\n', 1, 1, '2020-07-27 09:58:00', '2020-07-29 05:59:03', 1, 1, '::1'),
(31, 9, 0, 'PDP', '/uploads/posting/icon/0bbbb039818989d0c61230cb6d664a72.png', NULL, '<p>Ketiga istilah ini dibuat untuk mengelompokkan risiko serta penampakan gejala dari orang-orang yang mungkin atau sudah terpapar <a href=\"https://www.sehatq.com/penyakit/virus-corona\" rel=\"noopener\" target=\"_blank\">virus Corona (SARS-CoV-2)</a>.&nbsp;Contoh orang-orang yang akan dimasukkan dalam kelompok-kelompok ini adalah mereka yang baru pulang dari luar negeri dan yang pernah berkontak secara langsung dengan pasien positif corona.</p>\r\n\r\n<p>Pemberian status ODP, PDP, dan suspect didapat dari proses tracking yang dilakukan pemerintah dengan mengaitkan data-data yang ada di lapangan. Pasien yang masuk sebagai salah satu dari ketiga kelompok tersebut akan diberitahu oleh petugas kesehatan terkait, dan umumnya diinstruksikan untuk menjalani karantina selama 14 hari.</p>\r\n', 1, 1, '2020-07-27 09:59:56', '2020-07-29 05:59:14', 1, 1, '::1'),
(32, 9, 0, 'Meninggal', '/uploads/posting/icon/7419f52c89b4bd2dcd0ee4cce96ba7f1.png', NULL, '<p>Ketiga istilah ini dibuat untuk mengelompokkan risiko serta penampakan gejala dari orang-orang yang mungkin atau sudah terpapar <a href=\"https://www.sehatq.com/penyakit/virus-corona\" rel=\"noopener\" target=\"_blank\">virus Corona (SARS-CoV-2)</a>.&nbsp;Contoh orang-orang yang akan dimasukkan dalam kelompok-kelompok ini adalah mereka yang baru pulang dari luar negeri dan yang pernah berkontak secara langsung dengan pasien positif corona.</p>\r\n\r\n<p>Pemberian status ODP, PDP, dan suspect didapat dari proses tracking yang dilakukan pemerintah dengan mengaitkan data-data yang ada di lapangan. Pasien yang masuk sebagai salah satu dari ketiga kelompok tersebut akan diberitahu oleh petugas kesehatan terkait, dan umumnya diinstruksikan untuk menjalani karantina selama 14 hari.</p>\r\n', 1, 1, '2020-07-27 10:02:15', '2020-07-29 05:59:21', 1, 1, '::1'),
(33, 9, 0, 'Sembuh', '/uploads/posting/icon/5ba3f5644bdb16ae5b9535049014d445.png', NULL, '<p>Ketiga istilah ini dibuat untuk mengelompokkan risiko serta penampakan gejala dari orang-orang yang mungkin atau sudah terpapar <a href=\"https://www.sehatq.com/penyakit/virus-corona\" rel=\"noopener\" target=\"_blank\">virus Corona (SARS-CoV-2)</a>.&nbsp;Contoh orang-orang yang akan dimasukkan dalam kelompok-kelompok ini adalah mereka yang baru pulang dari luar negeri dan yang pernah berkontak secara langsung dengan pasien positif corona.</p>\r\n\r\n<p>Pemberian status ODP, PDP, dan suspect didapat dari proses tracking yang dilakukan pemerintah dengan mengaitkan data-data yang ada di lapangan. Pasien yang masuk sebagai salah satu dari ketiga kelompok tersebut akan diberitahu oleh petugas kesehatan terkait, dan umumnya diinstruksikan untuk menjalani karantina selama 14 hari.</p>\r\n', 1, 1, '2020-07-27 10:06:59', '2020-07-29 05:59:30', 1, 1, '::1'),
(34, 12, 0, 'Meningkatkan Sistem Kesehatan Nasional', NULL, '/uploads/posting/image_utama/4ae9a6b8fce4aca98364d306b1d78ede.jpg', '<p><strong>Dinna Prapto Raharja, PhD</strong><br />\r\nPraktisi &amp; Pengajar Hubungan Internasional<br />\r\n@Dinna_PR<br />\r\n<br />\r\n<strong>SAYA</strong> memfasilitasi diskusi peluncuran data <a href=\"https://www.sindonews.com/topic/10483/kesehatan-masyarakat\"><strong>kesehatan</strong></a> yang diolah bersama oleh Dewan Jaminan Sosial Nasional (DJSN) dan Badan Penyelenggara Jaminan Sosial Kesehatan dua pekan lalu. Data itu kumpulan informasi yang diolah sejak 2014-2018. Sangat berharga dan informatif.<br />\r\n<br />\r\nDari data tersebut kita dapat mengevaluasi dan mengukur postur kesehatan kita sejak 2014, kemudian memprediksi postur kesehatan kita lima atau sepuluh tahun yang akan datang. Data ini juga penting bagi pengambil kebijakan untuk memutuskan strategi kesehatan apa yang harus dilakukan segera untuk dapat meningkatkan kualitas kesehatan masyarakat.<br />\r\n<br />\r\nDalam situasi <a href=\"https://www.sindonews.com/topic/48/covid-19\"><strong>Covid-19</strong></a> seperti sekarang, data semacam ini membantu kita tidak berandai-andai lagi tentang kebutuhan masyarakat, tetapi lebih pasti dalam merencanakan sistem kesehatan nasional yang lebih tanggap.</p>\r\n', 1, 1, '2020-08-05 09:35:51', '2020-08-05 09:52:39', 1, 1, '::1'),
(35, 12, 0, 'Apa Itu PP PSBB dan Kedaruratan Kesehatan Masyarakat? ', NULL, '/uploads/posting/image_utama/d0984ca2cdad193e0e20931c45b06018.jpeg', '<p><strong>Jakarta</strong> -</p>\r\n\r\n<p>Presiden Joko Widodo (Jokowi) menerbitkan Peraturan Pemerintah tentang <a href=\"https://www.detik.com/tag/pembatasan-sosial-skala-besar\">Pembatasan Sosial Berskala Besar</a> atau PSBB. Peraturan ini diberlakukan untuk memutus mata rantai penyebaran virus corona atau COVID-19.</p>\r\n\r\n<p>Dua peraturan pendukung kebijakan PSBB sudah diterbitkan yakni tentang PP tentang Pembatasan Sosial Berskala Besar dan Keputusan Presiden atau Keppres Penetapan <a href=\"https://www.detik.com/tag/kesehatan-masyarakat\">Kedaruratan Kesehatan Masyarakat</a>.</p>\r\n\r\n<p>Salah satu dasar hukum PP PSBB dan Keppres tentang Penetapan Kedaruratan Kesehatan Masyarakat adalah Undang-undang atau UU nomor 6 tahun 2018. Undang-undang tersebut mengatur tentang kekarantinaan kesehatan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><a href=\"https://www.detik.com/tag/pembatasan-sosial-skala-besar\">Pembatasan Sosial Berskala Besar</a> atau <a href=\"https://www.detik.com/tag/pembatasan-sosial-skala-besar\">PSBB</a></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam UU nomor 6/2018, PSBB adalah pembatasan kegiatan tertentu penduduk dalam suatu wilayah, yang diduga terinfeksi penyakit dan/atau terkontaminasi. Pembatasan sosial berskala besar ditetapkan menteri.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pertimbangan saat menetapkan <a href=\"https://www.detik.com/tag/pembatasan-sosial-skala-besar\">PSBB</a> berasal dari epidemiologis, besarnya ancaman, efektifitas, dukungan sumber daya, teknis operasional, pertimbangan ekonomi, sosial, budaya, dan keamanan. Mitigasi terhadap faktor risiko di wilayah berstatus PSBB dilakukan pejabat karantina kesehatan.</p>\r\n', 1, 1, '2020-08-05 09:58:19', '2020-08-05 10:01:58', 1, 1, '::1'),
(36, 2, 9, 'Mengenal Dinas Kesehatan Kota Pariaman', NULL, '/uploads/posting/image_utama/99861e06f1afba0dd970d3afe4db9e38.jpeg', '<p>Kota Pariaman termasuk kota tertua di pantai barat Pulau Sumatera. Pariaman merupakan daerah yang cukup dikenal oleh pedagang bangsa asing semenjak tahun 1500-an. Catatan tertua tentang Pariaman ditemukan oleh Tomec Pires (1446-1524), seorang pelaut Portugis yang bekerja untuk kerajaan Portugis di Asia. Ia mencatat telah ada lalu lintas perdagangan antara India dengan Pariaman, Tiku dan Barus.</p>\r\n\r\n<p>Secara historis, Pariaman dikenal sebagai pusat pengembangan ajaran Islam yang tertua di pantai barat Sumatera. Salah seorang ulama yang terkenal seperti alm. Syekh Burhanuddin merupakan murid dari Khatib Sangko yang bermakam di Pulau Angso Duo yang sekarang dikenal dengan &ldquo;kuburan panjang&rdquo;. Jauh sebelum kemerdekaan Indonesia diproklamirkan, pelaksanaan pendidikan bernuansa Islam telah berkembang di Pariaman.</p>\r\n\r\n<p>Secara administratif, Kota Pariaman merupakan wilayah pemekaran dari Kabupaten Padang Pariaman yang terbentuk pada tanggal 2 Juli 2002 berdasarkan Undang-undang No. 12 Tahun 2002, memiliki luas wilayah sekitar 73,36 Km&sup2;.</p>\r\n', 1, 1, '2020-08-10 05:59:36', NULL, 1, NULL, '::1'),
(37, 2, 6, 'Visi dan Misi Dinkes Pariaman', NULL, '/uploads/posting/image_utama/e48c3b8fd25311e467f453915271023a.png', '<h2>engertian Visi</h2>\r\n\r\n<div class=\"article-content-body__item-content\">\r\n<p>Arti kata visi: Visi itu lebih berorientasi ke depan</p>\r\n\r\n<p>Perbedaan visi dan misi yang pertama yaitu menurut KBBI (Kamus Besar Bahasa Indonesia) visi bermakna kepada penglihatan; pengamatan, kemampuan untuk merasakan sesuatu yang tidak tampak melalui kehalusan jiwa dan ketajaman penglihatan, kemampuan untuk melihat pada inti persoalan, pandangan atau wawasan ke depan. Secara umum visi itu merupakan serangkaian kata yang menunjukkan impian, cita-cita atau nilai inti sebuah keinginan sekelompok orang atau secara pribadi dengan pandangan yang jauh ke masa depan demi mencapai sebuah tujuan yang diinginkan.</p>\r\n\r\n<p>Pada dasarnya visi dijadikan sebagai panutan gambaran akan situasi dan karakteristik mengenai arah kemana tujuan perjalanan selanjutnya. Sehingga dengan adanya visi bisa menjadi alarm untuk selalu mampu eksis, antisipatif dan inovatif.</p>\r\n\r\n<p>Visi itu dapat berubah dan berkembang sesuai pengaruh dan perkembangan zaman yang tidak bisa diprediksi kedepannya. Oleh karena itu visi sering kali tidak ditulis secara detail, namun digambarkan menerangkan detail gambaran sistem yang menjadi tujuannya. Oleh karena itu ada beberapa syarat sebuah kata atau kalimat bisa dikatakan memenuhi kriteria visi yaitu tidak dibuat berdasarkan kondisi pada saat ini, berorientasi ke depan dan mengekspresikan kreativitas dan berdasarkan pada prinsip nilai-nilai yang mengandung penghargaan bagi masyarakat.</p>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Pengertian Misi</h2>\r\n\r\n<div class=\"article-content-body__item-content\">\r\n<p>Makna kata misi: Misi lebih fokus ke bagaimana langkah-langkah demi mencapai visi yang sudah ditentukan</p>\r\n\r\n<p>What be believe we can do atau apa yang bisa dipercaya, akan bisa kita lakukan. Itulah perbedaan Perbedaan visi dan misi jika di artikan secara harafiah. Misi adalah suatu pernyataan tentang apa yang harus dikerjakan dalam usaha mewujudkan suatu visi yang telah dibuat. Misi itu ibarat langkah-langkah kecil yang dibagi untuk mempermudah serta bentuk usaha nyata dalam memberikan arah sekaligus batasan-batasan proses pencapaian tujuan.</p>\r\n\r\n<p>Dengan kata lain, arti misi adalah prioritas, metode, atau nilai-nilai kerja yang menjadi landasan untuk memberi petunjuk garis besar dalam mewujudkan sebuah visi. Walaupun perbedaan visi dan misi cukup membuat kita bingung, namun misi dan visi merupakan suatu kesatuan yang harus seiring sejalan. Jadi dapat disimpulkan bahwa misi adalah pernyataan yang menetapkan tujuan dan sasaran, apa, mengapa dan bagaimana demi merangsang adanya pencapaian visi utama.</p>\r\n</div>\r\n', 1, 1, '2020-08-31 04:23:01', NULL, 1, NULL, '::1'),
(38, 13, 4, 'Pelayanan 1', '/uploads/posting/icon/db36a5964aee5dd38e578543c95d8ca8.png', NULL, '<p>Sed malesuada nunc sit amet quam hendrerit, mollis vulputate risus tristique. Quisque dapibus eros et dolor accumsan, sit amet interdum tortor imperdiet.</p>\r\n', 1, 1, '2020-09-07 02:29:17', NULL, 1, NULL, '::1'),
(39, 13, 4, 'Pelayanan 2', '/uploads/posting/icon/4ec2ed8f3c89da49e5e45bb5a65b5adc.png', NULL, '<p>Sed malesuada nunc sit amet quam hendrerit, mollis vulputate risus tristique. Quisque dapibus eros et dolor accumsan, sit amet interdum tortor imperdiet.</p>\r\n', 1, 2, '2020-09-07 02:32:33', NULL, 1, NULL, '::1'),
(40, 13, 4, 'Pelayanan 3', '/uploads/posting/icon/984034f5453208bae0e978e21bcb2f3b.png', NULL, '<p>Sed malesuada nunc sit amet quam hendrerit, mollis vulputate risus tristique. Quisque dapibus eros et dolor accumsan, sit amet interdum tortor imperdiet.</p>\r\n', 1, 2, '2020-09-07 02:33:05', NULL, 1, NULL, '::1'),
(41, 13, 4, 'Pelayanan 4', '/uploads/posting/icon/d4f719ff8376ba565b6ccda3c2037d0f.png', NULL, '<p>Sed malesuada nunc sit amet quam hendrerit, mollis vulputate risus tristique. Quisque dapibus eros et dolor accumsan, sit amet interdum tortor imperdiet.</p>\r\n', 1, 2, '2020-09-07 04:05:27', NULL, 1, NULL, '::1'),
(42, 11, 12, 'Tes Pengumuman', NULL, '/uploads/posting/image_utama/f880b3d66460ddcc02b4310d34fd0022.jpg', '<p>Program Kartu Prakerja adalah program pengembangan kompetensi kerja yang ditujukan untuk pencari kerja, pekerja/buruh yang terkena pemutusan hubungan kerja, dan/atau pekerja/buruh yang membutuhkan peningkatan kompetensi.</p>\r\n\r\n<h3>Apa sih tujuan Kartu Prakerja?</h3>\r\n\r\n<p>Program Kartu Prakerja bertujuan untuk mengembangkan kompetensi angkatan kerja, meningkatkan produktivitas dan daya saing angkatan kerja, serta mengembangkan kewirausahaan.</p>\r\n', 1, 1, '2020-09-16 09:39:32', NULL, 1, NULL, '::1'),
(43, 11, 12, 'Tes Pengumuman 2', NULL, '/uploads/posting/image_utama/b7f09313c7c638cc2401df45f9984268.png', '<p>Program Kartu Prakerja adalah program pengembangan kompetensi kerja yang ditujukan untuk pencari kerja, pekerja/buruh yang terkena pemutusan hubungan kerja, dan/atau pekerja/buruh yang membutuhkan peningkatan kompetensi.</p>\r\n\r\n<h3>Apa sih tujuan Kartu Prakerja?</h3>\r\n\r\n<p>Program Kartu Prakerja bertujuan untuk mengembangkan kompetensi angkatan kerja, meningkatkan produktivitas dan daya saing angkatan kerja, serta mengembangkan kewirausahaan.</p>\r\n', 1, 1, '2020-09-16 09:40:31', NULL, 1, NULL, '::1');

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
(1, 1, '2018-06-01 23:58:57', '2018-06-02 00:05:25', 'Suci Ramadhani', '', '', NULL),
(16, 16, '2020-05-25 03:39:39', '2020-05-25 03:39:39', 'Ade Rahma Sari Hasanah', '1714040046', '84202', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `can_admin` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`, `can_admin`) VALUES
(1, 'Admin', '2018-06-01 23:58:56', NULL, 1),
(2, 'User', '2018-06-01 23:58:56', NULL, 0);

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
(9, '/uploads/slider/244ef4143e154e69f4c233bea465e7b1.jpg', 'Kota Pariaman', 'Dinas Kesehatan '),
(10, '/uploads/slider/bf697223f7eeb67758db08fbdf327d92.jpg', 'Jangan Lupa', 'Pakai Masker dan Cuci Tangan');

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
(1, 1, 1, 'neo@neo.com', 'suci', '$2y$13$33Xruj9PMx.KF8vzYbBcbuQgmniz6HdGbAcZgagxoGToncO3GdcfS', '91C7Z0a4DJ_nIEHuYIARxOevTx-3hpdf', 'oS4BmhbLU9Y9-1fhYc1264hkxxBvJVx9', '::1', '2020-09-24 05:04:46', NULL, '2018-06-01 23:58:56', '2018-06-02 00:05:25', NULL, NULL),
(16, 2, 1, 'ichigoramadhani26@gmail.com', 'cigo', '$2y$13$JfZOFG/KRr6LZPZuHKTDw.irM2kilFCtAMSYzK36oeVkqsgWlJnAS', 'VHjObFJmucN6mwPI4nF76XwRdb5ZGsmD', 'XlUPJHjx6In0AqKtcgtW41a4w_qDgmxa', '::1', '2020-05-28 19:39:42', '::1', '2020-05-25 03:39:39', '2020-05-25 03:39:39', NULL, NULL);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian_upt`
--
ALTER TABLE `bagian_upt`
  ADD PRIMARY KEY (`bagupt_id`);

--
-- Indexes for table `bag_aplikasi`
--
ALTER TABLE `bag_aplikasi`
  ADD PRIMARY KEY (`aplikasi_id`);

--
-- Indexes for table `corona_pariaman`
--
ALTER TABLE `corona_pariaman`
  ADD PRIMARY KEY (`kecamatan_id`,`tanggal`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kecamatan_id`);

--
-- Indexes for table `kepala_dinas`
--
ALTER TABLE `kepala_dinas`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `kesmas`
--
ALTER TABLE `kesmas`
  ADD PRIMARY KEY (`kesmas_id`),
  ADD UNIQUE KEY `sub_id` (`sub_id`,`group_id`,`tahun`);

--
-- Indexes for table `kesmas_group`
--
ALTER TABLE `kesmas_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `kesmas_kategori`
--
ALTER TABLE `kesmas_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kesmas_subkategori`
--
ALTER TABLE `kesmas_subkategori`
  ADD PRIMARY KEY (`sub_id`);

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
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `pegawaifoto`
--
ALTER TABLE `pegawaifoto`
  ADD PRIMARY KEY (`pegawai_nip`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`posting_id`);

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
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

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
-- AUTO_INCREMENT for table `bagian_upt`
--
ALTER TABLE `bagian_upt`
  MODIFY `bagupt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bag_aplikasi`
--
ALTER TABLE `bag_aplikasi`
  MODIFY `aplikasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `kecamatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kesmas`
--
ALTER TABLE `kesmas`
  MODIFY `kesmas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kesmas_group`
--
ALTER TABLE `kesmas_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `kesmas_kategori`
--
ALTER TABLE `kesmas_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kesmas_subkategori`
--
ALTER TABLE `kesmas_subkategori`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `media_social`
--
ALTER TABLE `media_social`
  MODIFY `sosmed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `posting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
