-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Des 2019 pada 07.07
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dishub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'hasan', '$2y$10$6rhdimDy9D/uno4rcDJRtOO9SkXb8./ll/qk.j12wMdyQuGzr3cWi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id_berita` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `gambar`, `isi`, `tanggal`) VALUES
(21, 'Dishub Sidoarjo Naikkan Gaji Jukir Setara UMK', 'b1.PNG', '<p style="text-align:start"><strong>JawaPos.com</strong>&nbsp;&ndash; Peran juru parkir (jukir) tetap sangat penting. Saat sistem parkir elektronik (e-parking) diterapkan nanti, mereka punya tugas berat. Karena itu, Dinas Perhubungan Sidoarjo mengusulkan kenaikan gaji bagi mereka. Jumlahnya mungkin setara UMK.</p>\r\n\r\n<p style="text-align:start">Tugas berat para jukir, antara lain, melayani pemilik kendaraan yang membayar retribusi parkir. Mereka memindai (scan) bar code dalam aplikasi e-parkir di ponsel pengguna. Selain itu, jukir wajib menjaga keamanan kendaraan.</p>\r\n\r\n<p style="text-align:start">Kepala Dinas Perhubungan (Dishub) M. Bahrul Amig menjelaskan, sistem e-parking mengharuskan pemilik kendaraan memanfaatkan aplikasi. Di lokasi parkir, mereka dilayani para jukir. Saat datang, dicarikan tempat parkir. Begitu selesai parkir, bar code aplikasi dipindai. Saldo uang virtual dalam aplikasi e-parking berkurang.</p>\r\n\r\n<p style="text-align:start">&rdquo;Yang juga penting, jangan sampai kendaraan hilang. Harus diawasi,&rdquo; papar Amig. Mantan camat Krembung, Krian, dan Taman itu mengaku sangat memahami tugas jukir. Memang butuh tambahan penghasilan.</p>\r\n\r\n<p style="text-align:start">Saat ini, sebut Amig, penghasilan resmi jukir setiap bulan hanya Rp 750 ribu. Pendapatan sangat tidak layak untuk biaya hidup mereka dan keluarga. Nilai gaji jukir jauh lebih kecil jika dibandingkan dengan pekerja industri. Pekerja pabrik saja memperoleh bayaran sesuai UMK. Upah minimum kabupaten (UMK) Sidoarjo 2019 sekitar Rp 3,8 juta. Bahkan, usul UMK 2020 mencapai Rp 4,1 juta.</p>\r\n\r\n<p style="text-align:start">Minimnya penghasilan itu mendorong niat menarik pungutan lain kepada pemilik kendaraan. Ke depan, tegas mantan kepala dinas kebersihan itu, dishub mengusulkan tambahan gaji jukir. Jumlahnya diupayakan sama dengan UMK Sidoarjo. &rdquo;Jukir harus mendapatkan penghasilan yang layak,&rdquo; ungkap Amig.</p>\r\n\r\n<p style="text-align:start">Kabid Sarpras Dishub Rizal Asnan menambahkan, tambahan penghasilan memang sangat dibutuhkan jukir. Itu bisa meningkatkan semangat dan motivasi kerja. Selain itu, para jukir bakal dibekali saldo e-parking.</p>\r\n\r\n<p style="text-align:start">Untuk apa? Kalau kehabisan saldo, pemilik kendaraan cukup membayar ke jukir. Ditalangi petugas parkir. &rdquo;Mereka membayar ke jukir dengan uang tunai,&rdquo; paparnya.</p>\r\n\r\n<p style="text-align:start">Kapan sistem e-parking diterapkan? Anggota Komisi B (keuangan dan perekonomian) DPRD Sidoarjo Sudjalil berpendapat lebih baik secepatnya. Sistem pengganti parkir berlangganan itu bisa dimulai awal 2020.</p>\r\n\r\n<p style="text-align:start">Meski demikian, lanjut Sudjalil, pada tahun pertama dishub sebaiknya berfokus pada peningkatan kualitas pelayanan. Harus meningkat. &rdquo;Tidak fokus ke pendapatan dulu,&rdquo; jelasnya. Baru tahun selanjutnya, DPRD meminta pemkab menaikkan target pendapatan. Sudjalil optimistis pendapatan parkir bisa meningkat pesat. &rdquo;E-parking pasti menutup lubang kebocoran,&rdquo; terangnya<strong>.&nbsp;</strong></p>\r\n', '2019-12-05'),
(22, 'Dishub Sidoarjo Ubah Jalur Alternatif Raya Sukodono', 'b2.PNG', '<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="color:null"><strong>SIDOARJO -</strong>&nbsp;Dinas Perhubungan (Dishub) Sidoarjo bersiap mengubah jalur alternatif sebagai solusi atas ditutupnya jalan raya Sukodono</span><span style="color:null"> karena sedang ada pembangunan jembatan di sana.</span></p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="color:null">Perubahan rute jalur alternatif tersebut dilakukan paska ada keluhan dari sejumlah warga dan terjadinya beberapa insiden di jalur alternatif yang ada selama dua Minggu belakangan.</span></p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="color:null">&quot;Pagi tadi tim sudah turun ke lapangan. Selain mengevaluasi dan mengecek sejumlah hal di sana, tim juga berkordinasi dengan instansi terkait. Termasuk Polsek Sukodono</span><span style="color:null">,&quot; ungkap Kepala Dishub Sidoarjo</span><span style="color:null"> Bahrul Amiq, Rabu (24/7/2019).</span></p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="color:null">Dari hasil evaluasi, jalur alternatif dari selatan&nbsp; lewat Pademonegoro lalu di pertigaan dekat MI Ma&#39;arif belok kanan melewati Plumbungan.</span></p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="color:null">Di pertigaan Sawobangsri, belok kiri lanjut belok kanan melewati jembatan ke kanan tembus ke perempatan Dungus.&nbsp;</span></p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="color:null">Sementara dari Utara atau dari perempatan Dungus, jalur alternatifnya ke kiri jalan Masangan Wetan, di pertigaan Masjid Baitul Maghfirah belok kanan menuju jalan Suruh. Di Simpang tiga Suruh belok kanan ke jalan Imam Bonjol, sampai ke simpang tiga Polsek&nbsp;</span><a href="https://surabaya.tribunnews.com/tag/sukodono" style="padding: 0px; margin: 0px; color: rgb(1, 111, 186); text-decoration: none; outline: 0px;" title="Sukodono"><span style="color:null">Sukodono</span></a><span style="color:null">.</span></p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="color:null">&quot;Penentuan jalur alternatif itu kan sifatnya diskresi. Sehingga ketika diperlukan, bisa dievaluasi dan diubah sebagaimana hasil kajian dan evaluasi lapangan,&quot; lanjut Amiq.</span></p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="color:null">Selama ini, sejak jembatan di Jalan Raya&nbsp;</span><a href="https://surabaya.tribunnews.com/tag/sukodono" style="padding: 0px; margin: 0px; color: rgb(1, 111, 186); text-decoration: none; outline: 0px;" title="Sukodono"><span style="color:null">Sukodono</span></a><span style="color:null">&nbsp;dibongkar, kendaraan dari selatan harus belok ke kanan di dekat Polsek&nbsp;</span><a href="https://surabaya.tribunnews.com/tag/sukodono" style="padding: 0px; margin: 0px; color: rgb(1, 111, 186); text-decoration: none; outline: 0px;" title="Sukodono"><span style="color:null">Sukodono</span></a><span style="color:null">. Sekitar 1,5 Km ke timur kemudian belok kiri melewati Desa Suruh dan area persawahan di Dusun Lengki. Terus sampai ke Desa Klopo Sepuluh dan belok kiri ke pertigaan Dungus.</span></p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="color:null">Demikian halnya dari arah Utara, dari Dungus melewati jalan yang sama sampai tembus pertigaan sebelah Polsek&nbsp;</span><a href="https://surabaya.tribunnews.com/tag/sukodono" style="padding: 0px; margin: 0px; color: rgb(1, 111, 186); text-decoration: none; outline: 0px;" title="Sukodono"><span style="color:null">Sukodono</span></a><span style="color:null">. Karena jalan kecil, kerap&nbsp;terjadimasalah. Beberapa kali truk terperosok di persawahan Lengki ketika bersimpangan.</span></p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="color:null">Sementara jembatan sendiri direncanakan baru selesai pembangunan pada akhir Agustus nanti. Nah karena banyak keluhan dari warga, Dishub turun tangan untuk mengevaluasi jalur alternatif tersebut.</span></p>\r\n', '2019-12-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
`id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `keterangan`, `tanggal`) VALUES
(19, 'imagesa.jpg', 'uji-kir', '2019-10-27'),
(20, 'imagessc.jpg', 'uji-kir', '2019-10-27'),
(21, 'imagesx.jpg', 'uji-kir', '2019-10-27'),
(22, 'IMG_20171113_132725_HDR.jpg', 'upt pkb', '2019-12-05'),
(23, 'IMG_20171106_092513_HDR.jpg', 'uji kir', '2019-12-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
`id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `kritik` varchar(250) NOT NULL,
  `saran` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `kritik`, `saran`) VALUES
(2, 'djifrkd', 'jhdvjf@hsgd', 'dhfrj', 'fjgkirf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekom`
--

CREATE TABLE IF NOT EXISTS `rekom` (
`id` int(11) NOT NULL,
  `jenis` text NOT NULL,
  `syarat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekom`
--

INSERT INTO `rekom` (`id`, `jenis`, `syarat`) VALUES
(1, 'Kendaraan Rubah Bentuk', '<p>a. Formulir permohonan rekomendasi.</p>\r\n\r\n<p>b. Fotocopy BPKB.</p>\r\n\r\n<p>c. STUK/STNK Asli dan fotocopy.</p>\r\n\r\n<p>d. Gesekan nomor mesin dan rangka.</p>\r\n\r\n<p>e. KTP ali atau fotocopy atas nama pemilik atau surat keterangan domisili dari instansi/perusahaan yang bersangkutan.</p>\r\n\r\n<p>f. Surat kuasa bermaterai dari pemilik jika pengajuan permohonan dilakukan orang lain.</p>\r\n\r\n<p>g. Surat keterangan uji mutu dari Dinas Perhubungan Propinsi atau Dinas Teknis Tingkat Propinsi yang berwenang dan bertanggung jawab di bidang lalu lintas dan angkutan jalan.</p>\r\n\r\n<p>h. Surat keterangan persetujuan trayek untuk kendaraan mobil penumpang umum, angkutan kota dan angkutan pedesaan.</p>\r\n\r\n<p>i. Surat keterangan persetujuan trayek untuk kendaraan bus umum.</p>\r\n'),
(2, 'Kendaraan Tidak Rubah Bentuk', '<p>a. Formulir permohonan rekomendasi.</p>\r\n\r\n<p>b. Faktur asli dan/atau fotocopy.</p>\r\n\r\n<p>c. KTP asli dan fotocopy atas nama pemilik atau keterangan domisili dari instansi/perusahaan yang bersangkutan.</p>\r\n\r\n<p>d. Surat kuasa bermaterai dari pemilik jika pengajuan permohonan dilakukan orang lain.</p>\r\n\r\n<p>e. Gesekan nomor mesin dan rangka</p>\r\n'),
(3, 'Kendaraaan Rubah Sifat', '<p>a. Formulir permohonan Rekomendasi rubah sifat.</p>\r\n\r\n<p>b. Fotocopy BPKB.</p>\r\n\r\n<p>c. KTP asli dan fotocopy atas nama pemilik/keterangan domisili dari instansi/perusahaan yang bersangkutan.</p>\r\n\r\n<p>d. Fotocopy STNK.</p>\r\n\r\n<p>e. Fotocopi SIPA Angkutan Barang atau Angkutan Umum.</p>\r\n\r\n<p>f. Fotocopy izin trayek khusus angkutan umum.</p>\r\n\r\n<p>g. Foto kendraan yang akan rubah status atau rubah sifat.</p>\r\n'),
(4, 'Numpang Uji Keluar Kabupaten Sidoarjo', '<p>a. Numpang uji keluar Kabupaten Sidoarjo</p>\r\n\r\n<ul>\r\n	<li>Formulir permohonan numpang uji kendaraan bermotor.</li>\r\n	<li>STNK dan STUK asli/fotocopy yang masih berlaku.</li>\r\n	<li>Bukti pembayaran tagihan.</li>\r\n</ul>\r\n\r\n<p>b. Numpang uji masuk Kabupaten Sidoarjo</p>\r\n\r\n<ul>\r\n	<li>Formulir permohonan numpang uji kendaraan bermotor.</li>\r\n	<li>Surat keterangan numpang ujidari Dinas Perhubungan asal kendaraan .</li>\r\n</ul>\r\n'),
(5, 'Mutasi', '<p>a. Mutasi Uji keluar Kabupaten Sidoarjo</p>\r\n\r\n<ul>\r\n	<li>Formulir permohonan mutasi keluar kendaraan.</li>\r\n	<li>Surat mutasi dari kepolisian.</li>\r\n	<li>STNK dan STUK asli dan fotocopy yang masih berlaku.</li>\r\n	<li>Surat keterangan fiskal asli dan fotocopy.</li>\r\n	<li>Bukti pembayaran tagihan.</li>\r\n	<li>KTP asli dan fotocopy atas nama atau pemilik/surat keterangan domisili dari instansi/perusahaan yang bersangkutan.</li>\r\n	<li>Surat kuasa bermaterai dari pemilik jika pengajuan permohonan dilakukan oleh orang lain.</li>\r\n</ul>\r\n\r\n<p>b. Mutasi uji masuk Kabupaten Sidoarjo</p>\r\n\r\n<ul>\r\n	<li>Formulir permohonan mutasi masuk kendaraan.</li>\r\n	<li>Surat keterangan mutasi dari Dinas Perhubungan asal kendaraan..</li>\r\n	<li>STNK dan STUK asli dan fotocopy yang masih berlaku.</li>\r\n	<li>Bukti pembayaran tagihan.</li>\r\n	<li>Kartu induk pemeriksaan asli dan fotocopy</li>\r\n	<li>KTP asli dan fotocopy atas nama atau pemilik/surat keterangan domisili dari instansi/perusahaan yang bersangkutan dan surat kuasa bermaterai dari pemilik jika pengajuan permohonan dilakukan oleh orang lain.</li>\r\n	<li>Surat keterangan fiskal asli dan fotocopy.</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
`id_tugas` int(11) NOT NULL,
  `tugas` text NOT NULL,
  `fungsi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `tugas`, `fungsi`) VALUES
(2, '(Sesuai Peraturan Bupat Sidoarjo Nomor 44 Tahun 2008 tentang rincian Tugas, Fungsi dan Tata Kerja Dinas Perhubungan Kabupaten Sidoarjo}. Unit Pelaksanaan Teknis Dinas (UPTD) adalah unsur pelaksanateknis Dinas Perhubungan yang mempunyai tugas melaksanakan sebagian tugas Dinas Perhubungan di bidang pelayanan umum.\r\nUnit Pelaksanaan Teknis Dinas (UPTD) Pengujian Kendaraan Bermotor mempunyai tugas :\r\n\r\n1. Pelaksanaan pelayanan umum Pengujian kendaraan bermotor dan tidak bermotor wajib uji, penetapan daya angkut, pemeriksaan dan penghapusan kendaraan instansi Pemerintah.\r\n2. Inventarisasi kendaraan bermotor, kereta gandeng, kereta tempel dan kendaraan tidak bermotor wajib uji.\r\n3. Memproses perjanjian melaksanakan akreditasi dan pengesahan penyelenggaraan uji kendaraan bermotor oleh bengkel umum.\r\n4. Melaksanakan pengelolaan administrasi Pengujian kendaraan bermotor.\r\n5. Melaksanakan pemungutan retribusi dan pendapatan daerah lainnya yang sah yang berkaitan dengan pelayanan umum pengujian kendraan bermotor, kereta gandeng, kereta tempel dan tidak bermotor wajib uji.\r\n6. Memproses persetujuan/rekomendasi pengesahan modifikasi kendaraan bermotor.\r\n7. Memproses rekomendasi kendaraan baru sebagai bahan proses penerbitan STNK.\r\n8. Menetapkan jumlah berat yang diijinkan untuk kendaraan bermotor.\r\n9. Melaksanakan penilaian hasil pemeriksaan untuk penghapusan kendaraan bermotor instansi Pemerintah.\r\n10. Memproses persetujuan/rekomendasi untuk mutasi dan numpang kendaraan bermotor wajib uji.\r\n11. Melaksanakan tugas lain yang diberikan oleh Kepala Dinas Perhubungan sesuai dengan tugas dan fungsinya.', '1. Undang-undang Nomor 22 tahun 2009 Tentang Lalu Lintas dan Angkutan Jalan.\r\n2. Keputusan Mentri Perhubungan KM 71 Tahun 1993 Tentang Pengujian Berkala Kendaraan Bermotor.\r\n3. Keputusan Bupati bidang Pengujian Kendaraan Bermotor pada Dinas Perhubungan Kabupaten Sidoarjo.\r\n4. PERDA Kabupaten Sidoarjo Nomor 21 Tahun 2011 tentang retribusi pengujian kendaraan bermotor.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uji`
--

CREATE TABLE IF NOT EXISTS `uji` (
`id` int(11) NOT NULL,
  `jenis` varchar(250) NOT NULL,
  `syarat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `uji`
--

INSERT INTO `uji` (`id`, `jenis`, `syarat`) VALUES
(1, 'Uji Pertama Kali', '<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">a. Formulir permohonan uji kendaraan bermotor.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">b. Rekomendasi.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">c.STNK/notice dan fotocopy.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">d. Kwitansi/bukti pembayaran uji kendaraan bermotor.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">e. KTP asli dan fotocopy atas nama pemilik atau keterangan domisili dari instansi dan perusahaan yang bersangkutan.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">f. Surat kuasa bermaterai dari pemilik jika pengajuan permohonan dilakukan oleh orang lain.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">g. Gesekan nomor mesin dan rangka.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">h. Nota persetujuan pengeluaran izin trayek untuk angkutan sejenis.</span></span></p>\r\n'),
(2, 'Uji Berkala', '<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">a. Formulir permohonan uji kendaraan bermotor.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">b. Fotocopy STNK dan STUK yang masih berlaku.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">c. Kwitansi / Bukti pembayaran uji kendaraan bermotor baik dengan maupun tanpa biaya tagihan.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">d. KTP asli dan fotocopy atas nama pemilik atau keterangan domisilidari instansi/perusahaan yang bersangkutan</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">e. Surat kuasa bermaterai dari pemilik jika pengajuan dilakukan oleh orang lain.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">f. Gesekan nomor mesin dan rangka.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">g. Rekomendasi rubah bentuk bagi kendaraan yang mengalami rubah bentuk.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">h. Surat izin trayek bagi angkutan kendaraan penumpang umum.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">i. Surat Tera dan Jawatan Metrologi khusus untuk kendaraan tangki.</span></span></p>\r\n\r\n<p><span style="font-size:18px"><span style="font-family:Times New Roman,Times,serif">j. Surat lunas pajak asli dan fotocopy bagi kereta gandengan dan tempelan.</span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi`
--

CREATE TABLE IF NOT EXISTS `visi` (
`id` int(11) NOT NULL,
  `visii` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visi`
--

INSERT INTO `visi` (`id`, `visii`, `misi`) VALUES
(1, 'Mewujudkan layanan jasa perhubungan yang handal yang didukung dengan organisasi birokrasi dan kompetensi SDM yang cukup guna mendukung terwujudnya sidoarjo makmur.', '1. Meningkatkan kualitas pelayanan prima sektor perhubungan dengan tetap mengutamakan aspek keselamatan dan kelestarian lingkungan.\r\n2. Meningkatkan sarana dan prasarana transportasi yang berorientasi kepada kepentingan masyarakat.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekom`
--
ALTER TABLE `rekom`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
 ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `uji`
--
ALTER TABLE `uji`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rekom`
--
ALTER TABLE `rekom`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `uji`
--
ALTER TABLE `uji`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
