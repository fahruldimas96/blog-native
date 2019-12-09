-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 09:16 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_native`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `ID_KAT` int(5) NOT NULL,
  `NAMA_KAT` varchar(50) NOT NULL,
  `TARGET_LINK` varchar(100) NOT NULL,
  `NOTE` varchar(100) NOT NULL,
  `NOTE_HEADER` varchar(15) NOT NULL,
  `TGL_KAT` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ID_KAT`, `NAMA_KAT`, `TARGET_LINK`, `NOTE`, `NOTE_HEADER`, `TGL_KAT`) VALUES
(1, 'JAVASCRIPT', '?page=front/javascript', 'post-category cat-2', 'cat-2', '2019-10-26 22:39:38'),
(2, 'WEB DESIGN', '?page=front/web_design', 'post-category cat-1', 'cat-1', '2019-10-26 22:39:38'),
(3, 'CSS', '?page=front/css', 'post-category cat-4', 'cat-3', '2019-10-26 22:39:38'),
(4, 'JQUERY', '?page=front/jquery', 'post-category cat-3', 'cat-4', '2019-10-26 22:39:38'),
(5, 'HOT', '?page=front/hot', 'post-category cat-6', 'cat-5', '2019-10-26 22:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `ID_PESAN` int(5) NOT NULL,
  `ID_ADMIN` int(5) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `TELP` varchar(13) NOT NULL,
  `JUDUL_PESAN` varchar(100) NOT NULL,
  `ISI_PESAN` longtext NOT NULL,
  `TGL_PESAN` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`ID_PESAN`, `ID_ADMIN`, `EMAIL`, `TELP`, `JUDUL_PESAN`, `ISI_PESAN`, `TGL_PESAN`) VALUES
(36, 1, 'fahrul_dimas@student.smc.edu', '201881235512', 'asd', 'asd', '2019-12-09 15:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `ID_POST` int(5) NOT NULL,
  `ID_KAT` int(5) NOT NULL,
  `ID_ADMIN` int(5) NOT NULL,
  `ID_STATUS` int(5) NOT NULL,
  `JUDUL_POST` varchar(100) NOT NULL,
  `TITLE_POST` varchar(150) NOT NULL,
  `FOTO_POST` varchar(50) NOT NULL,
  `ISI` longtext NOT NULL,
  `VIEWS` int(5) DEFAULT 0,
  `TGL_POST` datetime NOT NULL DEFAULT current_timestamp(),
  `LAST_EDIT` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`ID_POST`, `ID_KAT`, `ID_ADMIN`, `ID_STATUS`, `JUDUL_POST`, `TITLE_POST`, `FOTO_POST`, `ISI`, `VIEWS`, `TGL_POST`, `LAST_EDIT`) VALUES
(3, 3, 3, 1, 'TEST POST 3', 'Menurut buku Millennials Kill Everything, terdapat', 'post-3.jpg', 'TEST POST 3', 1, '2019-10-26 21:00:14', '2019-12-05 16:07:21'),
(4, 4, 1, 3, 'TEST POST 4', 'Menurut buku Millennials Kill Everything, terdapat', 'post-4.jpg', 'TEST POST 3', 3, '2019-10-26 21:00:24', '2019-12-05 16:07:21'),
(5, 5, 2, 1, 'TEST POST 5', 'Menurut buku Millennials Kill Everything, terdapat', 'post-5.jpg', 'TEST POST 5', 0, '2019-10-26 21:01:02', '2019-12-05 16:07:21'),
(6, 1, 3, 1, 'TEST POST 6', 'Menurut buku Millennials Kill Everything, terdapat', 'post-6.jpg', 'TEST POST 6', 0, '2019-10-26 21:01:09', '2019-12-05 16:07:21'),
(7, 5, 1, 1, 'TEST POST 7', 'Menurut buku Millennials Kill Everything, terdapat', 'post-6.jpg', 'TEST POST 7', 0, '2019-10-26 21:03:05', '2019-12-05 16:07:21'),
(8, 1, 2, 1, 'TEST POST 8', 'Menurut buku Millennials Kill Everything, terdapat', 'post-3.jpg', 'TEST POST 8', 0, '2019-10-26 21:06:19', '2019-12-05 16:07:21'),
(9, 3, 3, 1, 'TEST POST 7', 'Menurut buku Millennials Kill Everything, terdapat', 'post-6.jpg', 'TEST POST 9', 10, '2019-10-26 21:04:36', '2019-12-05 16:07:21'),
(10, 2, 1, 1, 'TEST POST 10', 'Menurut buku Millennials Kill Everything, terdapat', 'post-3.jpg', 'TEST POST 10', 2, '2019-10-26 21:05:36', '2019-12-05 16:07:21'),
(11, 2, 1, 1, 'TEST POST 11', 'Menurut buku Millennials Kill Everything, terdapat', 'post-1.jpg', 'TEST POST 11', 14, '2019-10-26 21:05:36', '2019-12-05 16:07:21'),
(12, 4, 1, 1, 'TEST POST 12', 'Menurut buku Millennials Kill Everything, terdapat', 'post-2.jpg', 'TEST POST 12', 2, '2019-10-26 21:05:36', '2019-12-05 16:07:21'),
(13, 5, 1, 1, 'TEST POST 13', 'Menurut buku Millennials Kill Everything, terdapat', 'post-1.jpg', 'TEST POST 13', 0, '2019-10-27 21:01:24', '2019-12-05 16:07:21'),
(14, 5, 1, 1, 'TEST POST 14', 'Menurut buku Millennials Kill Everything, terdapat', 'post-1.jpg', 'TEST POST 14', 2, '2019-10-27 21:02:22', '2019-12-09 15:08:40'),
(15, 5, 1, 1, 'TEST POST 15', 'Menurut buku Millennials Kill Everything, terdapat', 'post-1.jpg', 'TEST POST 15', 0, '2019-10-27 21:02:22', '2019-12-05 16:07:21'),
(16, 5, 1, 1, 'TEST POST 16', 'Menurut buku Millennials Kill Everything, terdapat', 'post-1.jpg', 'TEST POST 16', 3, '2019-10-27 21:02:22', '2019-12-05 16:07:21'),
(17, 5, 2, 1, 'TEST POST 17', 'Menurut buku Millennials Kill Everything, terdapat', 'post-1.jpg', 'TEST POST 17', 0, '2019-10-27 21:02:22', '2019-12-05 16:07:21'),
(18, 1, 3, 1, 'TEST POST 18', 'Menurut buku Millennials Kill Everything, terdapat', 'post-2.jpg', 'TEST POST 18', 1, '2019-10-28 17:21:04', '2019-12-05 16:07:21'),
(19, 1, 2, 1, 'TEST POST 19', 'Menurut buku Millennials Kill Everything, terdapat', 'post-3.jpg', 'TEST POST 18', 4, '2019-10-28 16:32:58', '2019-12-05 16:07:21'),
(20, 1, 3, 1, 'TEST POST 20', 'Menurut buku Millennials Kill Everything, terdapat', 'post-2.jpg', 'TEST POST 20', 14, '2019-10-28 16:33:23', '2019-12-05 16:07:21'),
(21, 1, 3, 1, 'Investasi Dunia Akhirat Melalui Platform Fintech Cicilan Pendidikan Syariah', 'Menurut buku Millennials Kill Everything, terdapatMenurut buku Millennials Kill Everything, terdapatMenurut buku Millennials Kill Everything, terdapat', 'post-1.jpg', '<div style=\"text-align: left;\"><span style=\"font-size: 12pt; font-family: Arial;\">Menurut buku Millennials Kill Everything, terdapat tiga disrupsi yang akan menghancurkan bisnis-bisnis raksasa di Indonesia. Tiga disrupsi tersebut adalah digital disruption, millennial disruption, dan muslim market disruption.&nbsp;</span></div><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><span style=\"font-size: 12pt; font-family: Arial;\">Seperti yang kita ketahui bahwa disrupsi adalah pergeseran perilaku dari yang biasanya dilakukan di dunia nyata ke dunia maya. Pergeseran ini memicu digitalisasi dalam berbagai bidang yang dilakukan secara masif.</span></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><img name=\"image\" id=\"3190206472\" swaf:cywrite:info=\"image|2019020614090604954.jpg|http%3A%2F%2Fimage.elevenia.co.id%2F%2FeditorImg%2F2019%2F02%2F06%2F31207299%2F2019020614090604954.jpg|90670|4778107\" swaf:cywrite:file_seq=\"\" swaf:cywrite:object_id=\"3190206472\" src=\"http://image.elevenia.co.id//editorImg/2019/02/06/31207299/2019020614090604954.jpg\" style=\"border: none;\"></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><span style=\"font-size: 12pt; font-family: Arial;\">Salah satu digitalisasi yang disebabkan disrupsi ini adalah munculnya platform-platform keuangan digital atau yang kita kenal sebagai platform financial technology (fintech).</span></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><span style=\"font-size: 12pt; font-family: Arial;\">Perkembangan platform fintech yang melesat cepat seperti sekarang ini semakin memerlihatkan pengaruh besar dari era disrupsi yang kita hadapi saat ini. Pernyataan tersebut dapat dibuktikan dengan jumlah fintech terutama fintech pinjaman online yang mencapai 113 perusahaan pada 31 Mei 2019 (OJK, 2019).&nbsp;</span></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><span style=\"font-size: 12pt; font-family: Arial;\">Selain itu, Perkembangan platform fintech dapat kita lihat pada berbagai bidang keuangan, investasi, alat pembayaran non tunai, pemberian pinjaman online atau cicilan online, dan banyak jenis fintech lain.&nbsp;</span></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><span style=\"font-size: 12pt; font-family: Arial;\">Hal ini menciptakan ekosistem baru dan perubahan yang sangat besar dalam industri keuangan. Salah satu bidang fintech yang saat ini sedang populer adalah fintech cicilan online atau pinjaman online.</span></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><span style=\"font-size: 12pt; font-family: Arial;\">Fintech cicilan online di Indonesia dibagi menjadi dua sistem, yaitu sistem konvensional dan sistem syariah. Perbedaan sistem ini adalah terletak pada mekanisme pembayarannya di mana dalam sistem konvensional menggunakan bunga sebagai imbal balik pinjaman, sedangkan sistem syariah menggunakan bagi hasil (mudharabah) dalam imbal balik pinjaman yang diberikan. Mayoritas fintech yang telah ada di Indonesia saat ini menggunakan sistem konvensional.</span></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><span style=\"font-size: 12pt; font-family: Arial;\">Padahal, mayoritas penduduk di Indonesia sendiri adalah muslim yang mengharamkan adanya riba dari bunga yang ada pada sistem konvensional. Hal itu membuat masyarakat muslim seakan-akan terkepung dengan fintech-fintech konvensional ini.&nbsp;</span></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><span style=\"font-size: 12pt; font-family: Arial;\">Meskipun demikian, fintech-fintech syariah juga mulai berkembang, bahkan ada beberapa fintech konvensional yang menawarkan sistem syariah juga. Perkembangan fintech-fintech syariah ini tidak terlepas dari adanya disrupsi pasar muslim di Indonesia (muslim market disruption) dikarenakan banyak orang islam yang mulai sadar akan bahaya riba bagi harta mereka.</span></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><span style=\"font-size: 12pt; font-family: Arial;\">Layanan pendanaan dari fintech ini juga bermacam-macam, seperti pendanaan UMKM, pendanaan kredit rumah, pendanaan kredit kendaraan, bahkan hingga pendanaan biaya pendidikan pada perguruan tinggi.&nbsp;</span></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><span style=\"font-size: 12pt; font-family: Arial;\">Salah satu layanan yang kini sedang hangat di masyarakat adalah mengenai pendanaan biaya pendidikan atau sering disebut cicilan pendidikan.</span></p><div style=\"text-align: left;\"><span style=\"font-size: 12pt; text-align: justify; font-family: Arial;\">&nbsp;</span><span style=\"font-size: 12pt; font-family: Arial;\">&nbsp;</span></div>', 272, '2019-10-28 17:15:58', '2019-12-05 16:07:21'),
(34, 5, 1, 1, 'Kapan Anda Mulai Menulis?', ' Jika mendapat pertanyaan soal hobi, saya memberi jawaban makan dan menulis. Kemudian saya buru-buru menyampaikan penjelasan tambahan. Saya konsisten ', '06112019111514istria-5db900a3097f3623626f7ab2.jpg', '<p>Jika mendapat pertanyaan soal&nbsp;<a href=\"https://www.kompasiana.com/tag/hobi\">hobi</a>, saya memberi jawaban makan dan&nbsp;<a href=\"https://www.kompasiana.com/tag/menulis\">menulis</a>. Kemudian saya buru-buru menyampaikan penjelasan tambahan. Saya konsisten menjalani hobi makan hingga berat badan selalu masuk kategori kelas berat. Namun untuk hobi menulis saya suka angin-anginan alias kurang istiqomah. Kadang rajin, tapi lebih sering tidak pernah menghasilkan tulisan apapun dalam jangka waktu lumayan lama.</p>\r\n<p>Pengalaman pertama saya Menulis (dengan M kapital) adalah saat guru saya meminta saya ikut lomba mengarang level Sekolah Dasar tingkat kecamatan. Respon saya saat itu adalah terbengong-bengong. Di kelas tidak pernah ada pelajaran mengarang. Bagaimana saya bisa ikut lomba mengarang?-</p>\r\n<p>Karena taat dengan perintah guru, saya mulai corat-coret sekenanya untuk persiapan lomba. Namanya juga tidak ada bekal pengetahuan sama sekali, corat-coret berakhir tanpa hasil. Sampai akhirnya ayah saya (beliau tidak lulus SD) memberi ide: tulis tentang keindahan desa kita. Lalu beliau menulis satu paragraf sebagai contoh. Jadi, ayah adalah guru menulis pertama saya.</p>\r\n<p>Ternyata saya masuk 3 besar tingkat kecamatan dan selanjutnya diikutkan ke lomba mengarang tingkat kabupaten. Sayang sekali saya datang terlambat (karena ketinggalan armada angkutan pedesaan dan sama sekali tidak berpengalaman bepergian ke ibukota kabupaten), dan saya mengikuti lomba di tengah rasa panik dan bersalah. Alhasil saya gagal total. Namun demikian, pengalaman ikut lomba mengarang ini menjadi awal ketertarikan saya dengan dunia tulis-menulis.</p>\r\n<p>&nbsp;</p>\r\n<p>Di SMP dan SMA saya menyalurkan hobi menulis melalui media majalah dinding. Majalah dinding? Anak-anak&nbsp;<em>zaman now</em>&nbsp;tentunya tidak familiar dengan majalah dinding. Membaca majalah&nbsp;<em>beneran</em>&nbsp;alias cetak saja mereka sudah jarang. Generasi sekarang lebih suka menulis di media sosial. Bukan di dinding, eh majalah dinding. Tulisan saya di majalah dinding bermacam-macam, mulai dari&nbsp;<a href=\"https://www.kompasiana.com/tag/opini\">opini</a>&nbsp;hingga puisi. Dan semuanya dalam bentuk tulisan tangan yang dikerjakan dengan ekstra hati-hati.</p>\r\n<p>Saat SMA saya pernah mengirimkan tulisan pendek ke rubrik lembaran pelajar di sebuah koran daerah terbitan Yogyakarta. Tema yang saya pilih adalah seputar kepahlawanan. Kebetulan tulisan saya kirim menjelang peringatan Hari Pahlawan 10 November. Ternyata tulisan saya dimuat. Satu hari kemudian saya mendapat kiriman via pos dari redaksi koran tersebut. Isinya novel Sherlock Holmes. Itulah tulisan pertama saya yang dipublikasikan di koran.</p>\r\n<p>Sewaktu kuliah hobi menulis tidak tersalurkan karena minimnya fasilitas. Saya tidak punya mesin ketik, apalagi komputer. Namun dengan mesin ketik pinjaman dari tetangga kos saya pernah menulis sebuah cerpen. Dan ternyata dimuat oleh sebuah tabloid terbitan Jakarta (sekarang sudah gulung tikar).</p>\r\n<p>Cerpen itu menjadi karya sastra saya - jika boleh disebut begitu - satu-satunya. Sampai sekarang saya belum bisa menghasilkan cerpen lagi. Selain cerpen, saya juga mengirim cerita-cerita lucu format pendek. Untuk pertama kalinya saya mendapat honorarium dari tulis-menulis. Saya ingat honorarium dikirim dengan pos wesel.</p>\r\n<p>Selepas kuliah saya mulai sibuk dengan dunia kerja. Namun ternyata gairah menulis tetap ada, meskipun ya tidak konsisten itu tadi. Saya banting setir menulis&nbsp;<a href=\"https://www.kompasiana.com/tag/artikel\">artikel</a>&nbsp;opini.&nbsp;<em>Ngga</em>&nbsp;sering,&nbsp;<em>sih</em>. Jika&nbsp;<em>mood</em>&nbsp;sedang bagus saja. Topik tulisan saya adalah hubungan internasional dan diplomasi, sesuai bidang pekerjaan yang saya geluti.</p>\r\n<p>Menulis adalah hobi yang mendatangkan kebahagiaan. Terutama saat tulisan kita dipublikasikan dan dibaca khalayak ramai. Imbalan finanasialnya mungkin tidak seberapa. Namun kepuasan batin yang didapat tidak ternilai harganya.</p>\r\n<p>Ini pengalaman saya seputar dunia tulis-menulis. Suka tapi belum bisa konsisten. Bagaimana dengan Anda?</p>', 97, '2019-11-06 11:15:14', '2019-12-05 16:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `ID_STATUS` int(5) NOT NULL,
  `NAMA_STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`ID_STATUS`, `NAMA_STATUS`) VALUES
(1, 'AKTIF'),
(2, 'SEMBUNYI'),
(3, 'MODERASI'),
(4, 'BLOKIR');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_ADMIN` int(5) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `TELP` varchar(13) NOT NULL,
  `REGISTERED_DATE` datetime NOT NULL DEFAULT current_timestamp(),
  `LEVEL` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_ADMIN`, `NAMA`, `USERNAME`, `PASSWORD`, `EMAIL`, `TELP`, `REGISTERED_DATE`, `LEVEL`) VALUES
(1, 'Fahrul Dimas', 'fahrul', '81dc9bdb52d04dc20036dbd8313ed055', 'fahrul.dimassaputra@gmail.com', '081296188831', '2019-12-02 15:41:57', 'admin'),
(2, 'Nisa', 'nisa', '81dc9bdb52d04dc20036dbd8313ed055', 'nisa_fatim@gmail.com', '08583753412', '2019-12-02 15:41:57', 'penulis'),
(3, 'Wanti', 'wanti', '81dc9bdb52d04dc20036dbd8313ed055', 'rahmawanti@gmail.com', '089652573745', '2019-12-02 15:41:57', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`ID_KAT`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`ID_PESAN`),
  ADD KEY `ID_ADMIN` (`ID_ADMIN`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`ID_POST`),
  ADD KEY `ID_KAT` (`ID_KAT`),
  ADD KEY `ID_ADMIN` (`ID_ADMIN`),
  ADD KEY `ID_STATUS` (`ID_STATUS`) USING BTREE;

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID_STATUS`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `ID_KAT` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `ID_PESAN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `ID_POST` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `ID_STATUS` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_ADMIN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`ID_ADMIN`) REFERENCES `user` (`ID_ADMIN`);

--
-- Constraints for table `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `FK_posting_1` FOREIGN KEY (`ID_KAT`) REFERENCES `kategori` (`ID_KAT`),
  ADD CONSTRAINT `FK_posting_2` FOREIGN KEY (`ID_ADMIN`) REFERENCES `user` (`ID_ADMIN`),
  ADD CONSTRAINT `FK_posting_3` FOREIGN KEY (`ID_STATUS`) REFERENCES `status` (`ID_STATUS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
