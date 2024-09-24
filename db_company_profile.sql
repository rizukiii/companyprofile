-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Sep 2024 pada 09.56
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
-- Database: `db_company_profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_beranda`
--

CREATE TABLE `tb_beranda` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul` text NOT NULL,
  `sub_judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_beranda`
--

INSERT INTO `tb_beranda` (`id`, `nama`, `judul`, `sub_judul`) VALUES
(1, 'SMKN 1 Depok', 'Welcome to Sekolah Pusat Keunggulan.', '\"Beriman, Bertakwa, Berkarakter, Berkompeten, Berbudaya, dan Berwawasan Lingkungan”');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_beranda_carousel`
--

CREATE TABLE `tb_beranda_carousel` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_beranda_carousel`
--

INSERT INTO `tb_beranda_carousel` (`id`, `foto`) VALUES
(12, '2024-09-19-07.09.22 - smk n 1 depok 3.jpg'),
(13, '2024-09-19-07.09.32 - smk n 1 depok 2.jpg'),
(14, '2024-09-19-07.09.40 - smk n 1 depok.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `date` varchar(200) NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `judul` text NOT NULL,
  `sumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_blog`
--

INSERT INTO `tb_blog` (`id`, `foto`, `date`, `penulis`, `deskripsi`, `judul`, `sumber`) VALUES
(2, '2024 09 19 07.40.12 - blog a1.jpg', 'September 11, 2024', 'Sri Sundari', 'Tidak dapat dipungkiri bahwa SMKN 1 Depok telah menginjak usia 72 tahun. Dengan usia tersebut perjalanan SMKN 1 Depok tentu memiliki berbagai lika-liku hingga pada ahkirnya sekarang menjadi SMK Pusat Keunggulan. Pada peringatan ulang tahun yang 72 tahun ini SMKN 1 Depok menyelenggarakan serangkaian acara. Rangkaian acara yang di selenggarakan dimulai pada hari Jum’at, 6 September 2024 dengan kegiatan senam bersama. Kegiatan senam ini diharapkan dapat menjadi penyemangat dalam meningkatkan kebugaran warga SMKN 1 Depok supaya tetap sehat bersama SMKN 1 Depok. Setelah kegiatan senam selesai kegiatan dilanjutkan dengan kerja bhakti membersihkan lingkungan sekolah yang diikuti oleh seluruh warga sekolah. Kegiatan lain yang diselenggarakan yaitu bakti sosial ke Panti Asuhan Madania, kemudian ada juga kegiatan donor darah yang dibuka secara umum bagi yang berminat ingin mendonorkan darahnya. Rangkaian kegiatan berikunya pada hari Selasa, 10 September 2024 dengan diawalai dengan jalan sehat. Sebelum jalan sehat dimulai, ada pelepasan burung merpati oleh kepala sekolah dan ketua komite sekolah sebagai simbolis harapan baru untuk SMKN 1 Depok yang lebih maju dan berkembang. Pada jalan sehat kali ini rute yang dilalui yaitu dari gerbang timur menuju arah utara kemudian Pasar Stan belok kiri kemudian perempatan SMPN 3 Depok belok kiri kemudian jalan ke selatan sampai ring road belok kiri dan berakhir di SMKN 1 Depok. Setelah jalan sehat selesai kegiatan dilanjutkan dengan seremonial dengan dihadiri oleh Kabaldik Sleman Bapak Dwi Agus Muchdiharto S.H., M.A. pada acara seremonial ini ada acara pemotongan tumpeng oleh kepala sekolah Bapak Yusuf Supriyanto kepada pegawai terlama yaitu Ibu Sri Sulastri kemudian juga ada acara penyerahan bakti sosial secara simbolis ke siswa. Pada peringatan HUT kali ini juga terdapat peresmian mini bank Artha Desta Kabaldik Sleman Bapak Dwi Agus Muchdiharto S.H., M.A. oleh Rangkaian acara selanjutnya yaitu DShow yang berisi pentas seni siswa dan fashion show. Pada sorenya kegiatan dengan ditutup dengan konser yang diselenggarakan di sebelah barat aula.', 'Perayaan HUT Ke-72 SMKN 1 Depok', 'SMKN 1 DEPOK'),
(3, '2024 09 19 07.40.31 - blog a2.jpg', 'August 18, 2024', 'Suprapto', 'Setiap tahun Negara Kesatuan Republik Indonesia memperingati hari kemerdekaan yang selalu di peringati tanggal 17 Agustus. SMKN 1 Depok sebagai sekolah yang mengajarkan nilai nasionalisme turut menyelenggarakan Upacara Peringatan HUT Ke-79 Republik Indonesia. Pada upacara kali ini berbeda dengan dengan sebelumnya karena para petugas menggunakan seragam baru berwarna putih, yang sebelumnya berwarna biru. Seragam baru tersebut merupakan buatan anak-anak dari Program Keahlian Busana. Pada upacara kali ini diikuti oleh seluruh siswa dan bapak ibu guru, karyawan yang bertempat di halaman tengah atau lapangan upacara.', 'Peringatan HUT Ke-79 Republik Indonesia', 'SMKN 1 DEPOK'),
(4, '2024 09 19 07.40.41 - blog a3.jpg', 'August 16, 2024', 'Wara Listyaningrum', 'Dalam rangka memperingati Hari Ulang Tahun Ke-79 Republik Indonesia, SMKN 1 Depok menyelenggarakan berbagai lomba siswa. Kegiatan lomba ini bertujuan untuk menumbuhkan jiwa juang dan menumbuhkan kekompakan serta spotifitas. Kegiatan lomba yang di koordinir oleh OSIS ini dilaksanakan pada hari Rabu dan Kamis. Jenis lomba yang diselengarakan antara lain basket, balap karung, pecah air, estafet karet dan lomba kebersihan kelas. Kegiatan ini diikuti oleh seluruh siswa. Sebelum kegiatan dimulai, diawali dengan senam pagi. Para siswa sangat antusias dalam mengikuti lomba. Lomba dilaksanakan di lapangan tengah, aula dan lapangan basket.', 'Pitoelasan SKADESTA', 'SMKN 1 DEPOK'),
(5, '2024 09 19 07.40.52 - blog a4.jpg', 'July 23, 2024', 'Yeti Nurhaeni', 'Mengawali tahun ajaran baru semester Gasal 2024/2025 warga SMKN 1 Depok melaksanakan apel dan pembukaan MPLS kelas X di lapangan upacara. Pada apel kali ini berbeda dengan apel biasanya karena ada penyerahan siswa baru kepada sekolah setelah PPDB. Penyerahan dari orang tua diwakili oleh ketua komite SMKN 1 Depok Bapak Tri Jono Sanoto dan dihadiri oleh perwakilan orang tua kelas X kemudian diserahkan kepada sekolah dan diterima oleh Bapak Yusuf Supriyanto, S.Pd. selaku kepala SMKN 1 Depok. Setelah apel selesai para siswa kelas X mengikuti kegiatan MPLS di aula. Kegiatan MPLS dilaksanakan dari hari Senin sampai Jum’at. MPLS kali ini juga menghadirkan pemateri dari luar supaya materi yang disampaikan lebih tepat.', 'MPLS SMKN 1 Depok', 'SMKN 1 DEPOK'),
(6, '2024-09-23-06.28.49 - blog 4.png', 'June 29, 2024', 'Sri Lestari', '', 'Pengumuman dan Daftar Ulang PPDB 2024 SMKN 1 Depok', 'SMKN 1 DEPOK'),
(7, '2024-09-23-06.30.18 - blog 5.jpg', 'May 23, 2024', 'Sri Pamularsih', 'Pada hari Selasa dan Rabu, 21 dan 22 Mei 2024, SMKN 1 Depok menyelenggarakan Job and Edu Fair 2024. Kegiatan ini diikuti oleh berbagai perusahaan, perguruan tinggi, dan lembaga penyalur. Dalam kegiatan ini juga terdapat talk show oleh beberapa narasumber. Job and Edu Fair ini terbuka untuk umum, sehingga masyarakat dapat ikut serta dalam kegiatan ini.', 'Job and Edu Fair SMKN 1 Depok 2024', 'SMKN 1 DEPOK'),
(8, '2024-09-23-06.32.43 - blog 6.jpg', 'May 17, 2024', 'Syaiful Umar', 'SMKN 1 Depok Proudly PresentJob and Edu Fair 2024 SMKN 1 DepokAyo datang dan ikuti Job and Edu Fair 2024 SMKN 1 Depok, ditunggu kehadirannya ya, terbuka untuk umum#disnakertransdiy#disnakersleman#lokerjogja #smkn1depoksleman', 'SMKN 1 Depok proudly present, Job and Edu Fair 2024', 'SMKN 1 DEPOK'),
(9, '2024-09-23-06.32.56 - blog 7.jpg', 'April 27, 2024', 'Dhimas Nicko', 'Pada setiap hari Jum’at, seluruh warga sekolah melaksanakan kerja bhakti. Para siswa dibagi menjadi beberapa kelompok untuk melaksanakan kegiatan di beberapa titik yang sudah di tunjuk. Kegiatan ini sebagai salah satu dalam upaya menjaga lingkungan agar tetap bersih, nyaman dan sejuk supaya siswa dapat melaksanakan kegiatan dengan nyaman. Tidak hanya itu kegiatan ini juga merupakan sebagai wujud penerapan sekolah Adiwiyata. Kegiatan kerja bhakti dibagi menjadi beberapa titik lokasi, yaitu dalam kelas, taman, bank sampah, masjid, laboratorium, perpustakaan dan lain-lain.', 'Kerja Bhakti Ruti Hari Jum’at', 'SMKN 1 DEPOK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_blog_title`
--

CREATE TABLE `tb_blog_title` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `sub_judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_blog_title`
--

INSERT INTO `tb_blog_title` (`id`, `judul`, `sub_judul`) VALUES
(1, 'Blog', 'Berikut beberapa artikel terkait aktifitas kegiatan SMK N 1 DEPOK yang di selenggarakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `nama`, `email`, `phone`, `deskripsi`) VALUES
(1, 'dfgs', 'dfgsdfgs', 'dgsdfg', 'sdfsghdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_contact_title`
--

CREATE TABLE `tb_contact_title` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `sub_judul` text NOT NULL,
  `sub_sub_judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_contact_title`
--

INSERT INTO `tb_contact_title` (`id`, `judul`, `sub_judul`, `sub_sub_judul`) VALUES
(1, 'Contact', '\"Kami percaya bahwa kolaborasi antara sekolah dan masyarakat sangat penting untuk menciptakan lingkungan belajar yang optimal. Oleh karena itu, kami mengundang Anda untuk memberikan saran, kritik, dan masukan mengenai kegiatan, program, atau layanan yang kami tawarkan.\"', '\"Apakah Anda memiliki ide yang dapat membantu kami meningkatkan kualitas pendidikan? Atau mungkin Anda ingin menyampaikan pengalaman yang bisa menjadi bahan evaluasi bagi kami? Kami sangat menghargai setiap pendapat yang Anda berikan. Silakan gunakan formulir di bawah ini untuk menyampaikan masukan Anda, karena setiap suara Anda sangat berarti dalam usaha kami untuk terus berkembang dan memberikan yang terbaik bagi siswa dan komunitas.\"');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_footer`
--

CREATE TABLE `tb_footer` (
  `id` int(11) NOT NULL,
  `jalan` varchar(255) NOT NULL,
  `telp` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `kota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_footer`
--

INSERT INTO `tb_footer` (`id`, `jalan`, `telp`, `email`, `kota`) VALUES
(1, 'Jl. Ring Road Utara Maguwo, Sanggrahan, Maguwoharjo, Kec. Depok, Kabupaten Sleman', '(0274) 885663', 'smkn1depok@gmail.com', 'Daerah Istimewa Yogyakarta 55281');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_footer_medsos`
--

CREATE TABLE `tb_footer_medsos` (
  `id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_footer_medsos`
--

INSERT INTO `tb_footer_medsos` (`id`, `icon`, `link`) VALUES
(1, 'bi-twitter-x', 'https://x.com/?lang=en'),
(2, 'bi-facebook', 'https://id-id.facebook.com/'),
(4, 'bi-instagram', 'https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2Fsmkn1depoksleman%2F%3Fhl%3Den&is_from_rle'),
(5, 'bi-linkedin', 'https://www.linkedin.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `foto`, `nama`) VALUES
(1, '2024-09-23-16.13.56 - wara listyaningrum.jpg', 'WARA LISTYANINGRUM, S.Pd.'),
(2, '2024-09-23-16.14.19 - elin-nur rachmawati.jpg', 'ELLIN NUR RACHMAWATI, S.Pd., M.Pd'),
(3, '2024-09-23-16.14.41 - fathinatul huwaida.jpeg', 'FATHINATUL HUWAIDA,S.Pd.'),
(4, '2024-09-23-16.15.03 - shinta-krismonika lantu.jpg', 'SHINTA KRISMONIKA LANTU, S.Pd.'),
(5, '2024-09-23-16.15.31 - dwi-indaryati.jpg', 'Dra. DWI INDARYATI'),
(6, '2024-09-23-16.15.47 - slastri-buana.jpg', 'SULASTRI BUANA, S.Pd.'),
(7, '2024-09-24-09.34.00 - septi-768x1096.jpg', 'SEPTI PURWANINGSIH, S.Pd.'),
(8, '2024-09-24-09.34.13 - erni-kina-768x1096.jpg', 'ERNI KINAWATI, S.Pd.'),
(9, '2024-09-24-09.34.30 - futihatun-768x1096.jpg', 'FUTIHATUN, S.Ag., M.S.I.'),
(10, '2024-09-24-09.35.14 - murti-768x1096.jpg', 'SITI MURTININGRUM, S.Pd., M.Hum.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kepala_sekolah`
--

CREATE TABLE `tb_kepala_sekolah` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kepala_sekolah`
--

INSERT INTO `tb_kepala_sekolah` (`id`, `foto`, `deskripsi`) VALUES
(1, '2024 09 23 15.56.12 - pak yusuf kepsek.png', 'Dengan mengucapkan puji syukur atas rahmat dan karunia Tuhan Yang Maha Esa, akhirnya SMKN 1 Depok memiliki website sekolah. Semakin majunya teknologi dan informasi saat ini, tidak dapat dipungkiri bahwa keberadaan website untuk dunia pendidikan khususnya sekolah sangatlah penting. Media website dapat berguna dalam upaya mengedepankan penyampaian informasi dan perkembangan terkini sekolah. Dengan adanya website, masyarakat akan dengan mudah mengakses berbagai informasi. Website juga dapat menjadi media promosi sekolah yang cukup efektif. Berbagai kegiatan sekolah dapat disampaikan sehingga masyarakat dapat mengetahui perkembangan terbaru. Terima kasih atas kerjasama semua pihak yang terlibat dalam pengembangan website ini.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsentrasi_keahlian`
--

CREATE TABLE `tb_konsentrasi_keahlian` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `nama` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_konsentrasi_keahlian`
--

INSERT INTO `tb_konsentrasi_keahlian` (`id`, `foto`, `nama`, `deskripsi`) VALUES
(4, '2024-09-20-09.03.29 - tb.jpg', 'Desain dan Produksi Busana', 'Jurusan Desain dan Produksi Busana merupakan program studi yang fokus pada pengembangan keterampilan di bidang fashion. Siswa belajar tentang desain, teknik menjahit, pemilihan bahan, serta proses produksi busana. Selain itu, mereka juga diajarkan tentang tren mode, pemasaran, dan manajemen produksi. Melalui praktik langsung dan proyek kreatif, lulusan siap memasuki industri fashion, baik sebagai desainer, penjahit, maupun profesional di bidang terkait, dengan kemampuan untuk menciptakan produk busana yang berkualitas dan sesuai dengan kebutuhan pasar.'),
(5, '2024-09-20-09.03.45 - ph.jpg', 'Perhotelan', 'Jurusan Perhotelan adalah program studi yang mempersiapkan siswa untuk berkarir di industri layanan dan perhotelan. Dalam jurusan ini, siswa mempelajari berbagai aspek seperti manajemen hotel, pelayanan pelanggan, tata boga, dan housekeeping. Praktik langsung di laboratorium perhotelan dan magang di industri juga menjadi bagian penting dari kurikulum. Dengan pelatihan ini, lulusan diharapkan memiliki keterampilan dan pengetahuan yang diperlukan untuk bekerja di hotel, restoran, dan bisnis layanan lainnya, serta mampu memberikan pengalaman terbaik bagi tamu.'),
(6, '2024-09-20-09.03.59 - akl.jpg', 'Akuntansi', ' Jurusan Akuntansi merupakan program studi yang fokus pada pemahaman dan penerapan prinsip-prinsip akuntansi serta pengelolaan keuangan. Siswa akan mempelajari berbagai aspek akuntansi, seperti pembukuan, laporan keuangan, perpajakan, dan analisis keuangan. Selain itu, mereka juga diajarkan keterampilan penggunaan perangkat lunak akuntansi dan aplikasi bisnis. Dengan bekal pengetahuan dan keterampilan ini, lulusan jurusan Akuntansi siap memasuki dunia kerja atau melanjutkan studi ke jenjang yang lebih tinggi di bidang keuangan dan bisnis.'),
(7, '2024-09-20-09.04.19 - otkp.jpg', 'Manajemen Perkantoran', 'Jurusan Manajemen Perkantoran adalah program studi yang mempersiapkan siswa untuk berkarir di dunia administrasi dan manajemen di lingkungan perkantoran. Siswa mempelajari keterampilan organisasi, pengelolaan dokumen, komunikasi bisnis, serta penggunaan perangkat lunak perkantoran. Selain itu, mereka juga diajarkan tentang etika kerja, manajemen waktu, dan pelayanan pelanggan. Dengan pelatihan praktis dan teori yang mendalam, lulusan jurusan ini siap untuk bekerja sebagai staf administrasi, sekretaris, atau posisi lainnya di berbagai jenis organisasi dan perusahaan.'),
(8, '2024-09-20-09.04.35 - br.jpg', 'Bisnis Retail', 'Jurusan Bisnis Retail adalah program studi yang memfokuskan pada pengelolaan dan operasional bisnis di sektor ritel. Siswa mempelajari berbagai aspek seperti pemasaran, manajemen stok, pelayanan pelanggan, dan strategi penjualan. Selain itu, mereka diajarkan tentang analisis pasar dan penggunaan teknologi dalam ritel. Dengan pengalaman praktis melalui simulasi dan magang, lulusan jurusan ini siap untuk bekerja di berbagai posisi di industri ritel, mulai dari staf penjualan hingga manajer toko, serta memiliki keterampilan yang diperlukan untuk mengelola bisnis ritel secara efektif.'),
(9, '2024-09-20-09.04.48 - bd 1.jpg', 'Bisnis Digital', ' Jurusan Bisnis Digital adalah program studi yang fokus pada pengembangan keterampilan di bidang pemasaran dan manajemen bisnis melalui platform digital. Siswa mempelajari konsep e-commerce, strategi pemasaran digital, analisis data, serta penggunaan media sosial untuk bisnis. Selain itu, mereka juga diajarkan tentang pembuatan konten dan pengelolaan situs web. Dengan kombinasi teori dan praktik, lulusan jurusan ini siap menghadapi tantangan industri 4.0 dan berkarir di berbagai bidang seperti digital marketing, manajemen konten, dan pengembangan bisnis online. Profil tamatan Konsentrasi Keahlian Bisnis Digital:  Menghasilkan tamatan yang berkompeten sebagai tenaga menengah di bidang digital marketing serta mempunyai jiwa wirausaha.  Wirausaha dalam Bisnis Online Public Relations Marketing Research and Analytics Database Marketing Marketing Management Content Marketing Dan banyak lagi lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsentrasi_keahlian_title`
--

CREATE TABLE `tb_konsentrasi_keahlian_title` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `sub_judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_konsentrasi_keahlian_title`
--

INSERT INTO `tb_konsentrasi_keahlian_title` (`id`, `judul`, `sub_judul`) VALUES
(1, 'Konsentrasi Keahlian', 'SMKN 1 Depok telah menerapkan Kurikulum Merdeka dan menjadi SMK Pusat Keunggulan, saat ini SMKN 1 Depok membuka 6 Konsentrasi Keahlian, yaitu:');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_link`
--

CREATE TABLE `tb_link` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `nama` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_link`
--

INSERT INTO `tb_link` (`id`, `foto`, `nama`, `deskripsi`) VALUES
(3, '2024 09 20 13.13.10 - tut wuri.png', 'Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi', 'Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi mengapresiasi SMK N 1 Depok atas dedikasinya dalam menyediakan pendidikan berkualitas dan pengembangan keterampilan yang relevan dengan kebutuhan industri. Inovasi dalam kurikulum dan fasilitas yang mendukung telah menciptakan lingkungan belajar yang optimal, sehingga siswa siap berkontribusi secara aktif di masyarakat dan dunia kerja.'),
(4, '2024 09 20 13.17.03 - dikpora real.png', 'Dinas Pendidikan Pemuda dan Olahraga', 'Sekolah SMK N 1 Depok menunjukkan komitmen yang tinggi dalam meningkatkan kualitas pendidikan dan keterampilan siswanya. Dengan fasilitas yang memadai dan pengajaran yang inovatif, sekolah ini berhasil menciptakan lingkungan belajar yang inspiratif dan mendukung pengembangan potensi siswa. Dinas Dikpora DIY memberikan apresiasi atas prestasi dan dedikasi SMK N 1 Depok dalam mencetak lulusan yang siap menghadapi tantangan dunia kerja.'),
(5, '2024 09 20 13.17.14 - dikpora real.png', 'Balai Pendidikan Menengah KAB. SLEMAN', 'Balai Pendidikan Menengah Kab. Sleman memberikan apresiasi kepada SMK N 1 Depok atas komitmennya dalam menciptakan pendidikan yang berkualitas dan relevan. Dengan program-program unggulan dan pengembangan keterampilan yang terintegrasi, sekolah ini telah berhasil menyiapkan siswa yang siap bersaing di dunia industri. Keberhasilan SMK N 1 Depok menjadi teladan bagi institusi pendidikan lain di wilayah Sleman.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_link_title`
--

CREATE TABLE `tb_link_title` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `sub_judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_link_title`
--

INSERT INTO `tb_link_title` (`id`, `judul`, `sub_judul`) VALUES
(1, 'Link Terkait', 'SMK N 1 DEPOK membawahi lembaga berikut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ppdb`
--

CREATE TABLE `tb_ppdb` (
  `id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `title_judul` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_ppdb`
--

INSERT INTO `tb_ppdb` (`id`, `icon`, `title_judul`, `deskripsi`) VALUES
(1, 'dfgsdfg5675', 'sdfgsdf123123', 'sdfgsdf123'),
(2, 'ghdfgh', 'fgh', '131');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ppdb_title`
--

CREATE TABLE `tb_ppdb_title` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `sub_judul` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_ppdb_title`
--

INSERT INTO `tb_ppdb_title` (`id`, `judul`, `sub_judul`, `foto`) VALUES
(1, '', '', '2024 09 23 15.54.05 - pak yusuf kepsek.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `sub_judul` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id`, `judul`, `sub_judul`) VALUES
(1, 'Prestasi', 'SMK N 1 DEPOK kerap mendapati siswa siswinya menjuarai lomba\" nasional di dalam ataupun diluar sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prestasi_foto`
--

CREATE TABLE `tb_prestasi_foto` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_prestasi_foto`
--

INSERT INTO `tb_prestasi_foto` (`id`, `foto`) VALUES
(3, '2024 09 19 07.28.16 - presatsi 1.png'),
(4, '2024-09-19-07.28.25 - prestasi 2.png'),
(5, '2024-09-19-07.28.33 - prestasi 3.png'),
(6, '2024-09-23-05.11.16 - prestasi 4.png'),
(7, '2024-09-23-05.11.23 - prestasi 5.png'),
(8, '2024-09-23-05.11.29 - prestasi 6.png'),
(9, '2024-09-23-05.11.35 - prestasi 7.png'),
(10, '2024-09-23-05.11.44 - prestasi 8.png'),
(11, '2024-09-23-05.11.49 - prestasi 9.png'),
(12, '2024-09-23-05.11.54 - prestasi 10.png'),
(14, '2024-09-23-05.12.16 - prestasi 11.png'),
(15, '2024-09-23-05.12.20 - prestasi 12.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil_data_sekolah`
--

CREATE TABLE `tb_profil_data_sekolah` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_profil_data_sekolah`
--

INSERT INTO `tb_profil_data_sekolah` (`id`, `foto`) VALUES
(1, '2024-09-23-15.08.29 - profil data sekolah.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_program_unggulan`
--

CREATE TABLE `tb_program_unggulan` (
  `id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `nama` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_program_unggulan`
--

INSERT INTO `tb_program_unggulan` (`id`, `icon`, `nama`, `deskripsi`) VALUES
(5, 'fa-school', 'SMK Pusat Keunggulan', 'Sekolah Menengah Kejuruan (SMK) Pusat Keunggulan adalah lembaga pendidikan yang dirancang untuk menghasilkan lulusan yang kompeten dan siap kerja dalam bidang tertentu. Sekolah ini menawarkan program studi yang unggul, dilengkapi dengan fasilitas modern, pelatihan praktik yang intensif, serta kolaborasi dengan industri. Fokus utamanya adalah pada pengembangan keterampilan teknis dan soft skills yang relevan dengan kebutuhan pasar. Dengan dukungan tenaga pengajar yang berkualitas dan kurikulum yang terkini, SMK Pusat Keunggulan berkomitmen untuk mencetak tenaga kerja yang siap bersaing di tingkat lokal maupun global.'),
(6, ' fa-book-open-reader', 'Kurikulum Merdeka', 'Sekolah Kurikulum Merdeka adalah lembaga pendidikan yang mengimplementasikan pendekatan pembelajaran yang fleksibel dan berorientasi pada kebutuhan siswa. Dengan kurikulum yang adaptif, sekolah ini memberi kebebasan kepada siswa untuk memilih jalur belajar sesuai minat dan bakat mereka. Fokus utama adalah pengembangan kompetensi, kreativitas, dan karakter, serta pembelajaran yang berpusat pada siswa. Melalui proyek, kolaborasi, dan pengalaman praktis, Sekolah Kurikulum Merdeka bertujuan menciptakan individu yang siap menghadapi tantangan di masa depan dengan sikap mandiri dan inovatif.'),
(7, 'fa-leaf', 'Adiwiyata', 'Sekolah Adiwiyata adalah lembaga pendidikan yang mengintegrasikan pendidikan lingkungan hidup ke dalam kurikulum dan kegiatan sehari-hari. Program ini bertujuan untuk membentuk kesadaran dan kepedulian siswa terhadap lingkungan, melalui praktik ramah lingkungan seperti pengelolaan sampah, penghijauan, dan konservasi sumber daya. Sekolah Adiwiyata juga mendorong partisipasi aktif siswa, guru, dan masyarakat dalam menjaga kelestarian lingkungan. Dengan pendekatan ini, sekolah tidak hanya menciptakan lingkungan belajar yang sehat, tetapi juga melahirkan generasi yang peduli dan bertanggung jawab terhadap lingkungan.'),
(8, 'fa-earth-americas', 'Magang Luar Negeri', 'Sekolah yang memiliki program magang luar negeri adalah institusi pendidikan yang memberikan kesempatan kepada siswa untuk menjalani pengalaman kerja di perusahaan atau organisasi di luar negeri sebagai bagian dari kurikulum atau program pembelajaran mereka. Program ini biasanya ditawarkan oleh sekolah menengah kejuruan, perguruan tinggi, atau universitas dengan tujuan meningkatkan kompetensi siswa di bidang akademik maupun keterampilan praktis.'),
(9, 'fa-magnifying-glass', 'BKK', 'Program Bursa Kerja Khusus (BKK) adalah inisiatif yang diselenggarakan oleh sekolah, terutama sekolah menengah kejuruan (SMK), untuk membantu siswa dan lulusan dalam mencari pekerjaan yang sesuai dengan bidang keahlian mereka. Program ini dirancang sebagai jembatan antara dunia pendidikan dan dunia industri, sehingga lulusan SMK dapat terserap ke dalam dunia kerja dengan lebih cepat dan efektif.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_program_unggulan_title`
--

CREATE TABLE `tb_program_unggulan_title` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `sub_judul` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_program_unggulan_title`
--

INSERT INTO `tb_program_unggulan_title` (`id`, `judul`, `sub_judul`) VALUES
(1, 'Program Unggulan', 'SMKN 1 Depok memiliki program unggulan, yaitu:');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visi_misi`
--

CREATE TABLE `tb_visi_misi` (
  `id` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_visi_misi`
--

INSERT INTO `tb_visi_misi` (`id`, `visi`, `misi`) VALUES
(1, '“Terwujudnya Tamatan yang Beriman dan Bertakwa, Berkarakter, Berkompeten, Berbudaya, dan Berwawasan Lingkungan”', '1. Melaksanakan kegiatan keagamaan sesuai agama yang dianut dan kegiatan lainnya untuk membentuk manusia yang beriman dan bertakwa;\r\n\r\n2. Melaksanakan kegiatan P5 untuk membentuk manusia yang berkarakter dan berintegritas;\r\n\r\n3. Mengembangkan kurikulum SMK yang sesuai dengan kebutuhan DUDIKA dan Program Keahlian;\r\n\r\n4. Melaksanakan pembelajaran berbasis Teaching Factory sesuai kurikulum yang berorientasi pada pembelajaran abad 21 (4C);\r\n\r\n5. Melaksanakan Uji Kompetensi terhadap siswa sesuai Program Keahliannya;\r\n\r\n6. Menyiapkan peserta didik menjadi tenaga kerja tingkat menengah yang berdedikasi dan beretos kerja tinggi melalui pembelajaran berbasis proyek riil;\r\n\r\n7. Menciptakan suasana pembelajaran aktif, produktif, inovatif, kreatif, efektif dan menyenangkan;\r\n\r\n8. Mengimplementasikan Budaya Selaras, Akal Budi Luhur, Teladan, Rela Melayani, Inovatif, Yakin dan Percaya Diri, Ahli Profesional (SATRIYA);\r\n\r\n9. Mengimplementasikan Sistem Penjamin Mutu Internal (SPMI) untuk menjamin pencapaian Standar Nasional Pendidikan (SNP);\r\n\r\n10. Meningkatkan kepedulian terhadap lingkungan yang bersih, sehat, dan asri.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_beranda`
--
ALTER TABLE `tb_beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_beranda_carousel`
--
ALTER TABLE `tb_beranda_carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_blog_title`
--
ALTER TABLE `tb_blog_title`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_contact_title`
--
ALTER TABLE `tb_contact_title`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_footer`
--
ALTER TABLE `tb_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_footer_medsos`
--
ALTER TABLE `tb_footer_medsos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kepala_sekolah`
--
ALTER TABLE `tb_kepala_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_konsentrasi_keahlian`
--
ALTER TABLE `tb_konsentrasi_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_konsentrasi_keahlian_title`
--
ALTER TABLE `tb_konsentrasi_keahlian_title`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_link`
--
ALTER TABLE `tb_link`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_link_title`
--
ALTER TABLE `tb_link_title`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ppdb`
--
ALTER TABLE `tb_ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ppdb_title`
--
ALTER TABLE `tb_ppdb_title`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_prestasi_foto`
--
ALTER TABLE `tb_prestasi_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_profil_data_sekolah`
--
ALTER TABLE `tb_profil_data_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_program_unggulan`
--
ALTER TABLE `tb_program_unggulan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_program_unggulan_title`
--
ALTER TABLE `tb_program_unggulan_title`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_beranda`
--
ALTER TABLE `tb_beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_beranda_carousel`
--
ALTER TABLE `tb_beranda_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_blog_title`
--
ALTER TABLE `tb_blog_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_contact_title`
--
ALTER TABLE `tb_contact_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_footer`
--
ALTER TABLE `tb_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_footer_medsos`
--
ALTER TABLE `tb_footer_medsos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_kepala_sekolah`
--
ALTER TABLE `tb_kepala_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_konsentrasi_keahlian`
--
ALTER TABLE `tb_konsentrasi_keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_konsentrasi_keahlian_title`
--
ALTER TABLE `tb_konsentrasi_keahlian_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_link`
--
ALTER TABLE `tb_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_link_title`
--
ALTER TABLE `tb_link_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_ppdb`
--
ALTER TABLE `tb_ppdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_ppdb_title`
--
ALTER TABLE `tb_ppdb_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_prestasi_foto`
--
ALTER TABLE `tb_prestasi_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_profil_data_sekolah`
--
ALTER TABLE `tb_profil_data_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_program_unggulan`
--
ALTER TABLE `tb_program_unggulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_program_unggulan_title`
--
ALTER TABLE `tb_program_unggulan_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
