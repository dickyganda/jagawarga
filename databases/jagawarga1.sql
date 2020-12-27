-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 02:44 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jagawarga1`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bantuan`
--

CREATE TABLE `tb_bantuan` (
  `id_bantuan` int(100) NOT NULL,
  `jenis_bantuan` varchar(255) NOT NULL,
  `stok` int(255) NOT NULL,
  `satuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bantuan`
--

INSERT INTO `tb_bantuan` (`id_bantuan`, `jenis_bantuan`, `stok`, `satuan`) VALUES
(1, 'makanan', 0, 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karantina`
--

CREATE TABLE `tb_karantina` (
  `id_karantina` int(100) NOT NULL,
  `nik` bigint(100) NOT NULL,
  `id_lokasi` int(100) NOT NULL,
  `id_penyakit` int(100) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karantina`
--

INSERT INTO `tb_karantina` (`id_karantina`, `nik`, `id_lokasi`, `id_penyakit`, `tgl_input`) VALUES
(3, 1402022007100003, 2, 4, '2020-12-01'),
(4, 3305041812130006, 2, 7, '2020-12-01'),
(5, 3321110902070002, 3, 2, '2020-01-12'),
(6, 3321060902150009, 3, 3, '2020-01-01'),
(7, 3305040901072053, 4, 4, '2020-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(100) NOT NULL,
  `no_kk` bigint(100) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `no_kk`, `latitude`, `longitude`) VALUES
(2, 1402025108850002, '-7.098982', '112.283653'),
(3, 3321116502910000, '-7.098139', '112.283865'),
(4, 3203070504890020, '-7.098036', '112.283845'),
(5, 3305042302490002, '-7.098351', '112.283437'),
(6, 3321050312850000, '-7.098470', '112.283585'),
(7, 3321112107550000, '-7.098023', '112.283764'),
(8, 3321112302640000, '-7.097940', '112.283784'),
(9, 1402024104450001, '-7.098236', '112.283824'),
(10, 1402022702930001, '-7.098445', '112.284185');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` int(100) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `waktu_karantina` int(255) NOT NULL,
  `penanganan_pertama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `nama_penyakit`, `gejala`, `waktu_karantina`, `penanganan_pertama`) VALUES
(2, 'TB PARU', '1.	Batuk berdahak lebih dari 2 minggu\r\n2.	Demam terus-menerus\r\n3.	Lemas\r\n4.	Nafsu makan menurun\r\n5.	Berkeringat dingin saat malam hari tampa aktivitas\r\n6.	Batuk darah', 180, 'Hasil pemeriksaan positif dilakukan Pengobatan TB selama 6 bulan menggunakan obat OAT (Obat anti TB)'),
(3, 'HIV', '1.	Sakit kepala\r\n2.	Demam\r\n3.	Lesu\r\n4.	Pembekakakan kelenjar getah bening\r\n5.	Sakit tenggorokan\r\n6.	Sariawan terus menerus\r\n7.	Munculnya ruam\r\n8.	Nyeri otot dan sendi', 100, 'Pengobatan HIV dilakukan seumur hidup menggunakan ARV (antiretroviral)'),
(4, 'DIARE', '1.	Perut mulas2.	Tinja encer (BAB cair) atau bahkan berdarah3.	Mual dan muntah4.	Pusing5.	Lemas 6.	Nafsu makan turun7.	Kulit kering8.	Merasa haus terus menerus', 14, 'Mengkonsusmsi banyak cairan untuk menggantikan kehilangan cairan, baik melalui oral (bias menggunakan oralit) ataupun intravena (cairan infus)Pemberian obat untuk melawan bakteri'),
(5, 'ISPA', '1.	Hidung tersumbat atau berair2.	Bersin-bersin3.	Sesak pada bagian dada4.	Kerap merasa kelelahan5.	Demam6.	Batuk-batuk7.	Sakit tenggorokan8.	Nyeri otot', 10, 'Penanganan ispa sesuai dengan keluhan biasanya di berikan obat untuk mengurangi batuk, vitamin C dan juga pereda nyeri'),
(6, 'KUSTA', '1.	Bercak-bercak berwarna terang atau kemerahan di kulit disertai dengan kurangnya kemampuan merasa, mati rasa, (suhu,tekanan dan sentuhan) \r\n2.	Muncul luka tapi tidak terasa sakit\r\n3.	Otot melemah terutama otot kaki dan tangan\r\n4.	Prmbrsaran saraf teruta', 545, 'Hasil pemeriksaan positif kusta dilakukan pengobatan MDT(Multi Drug Therapy) selama 1 tahun 6 bulan, setelah itu melakukan pengobatan sesuai keluhan pasien'),
(7, 'DBD', '1.	Demam mendadak tinggi2.	Nafsu makan menurun3.	Mual dan muntah4.	Badan terasa lelah,lesuh dan letih terus menerus5.	Nyeri di persendian,otot,tulang6.	Tenggorokan sakit7.	Kepala pusing8.	Muncul bintik-bintik merah9.	Perdarahan dari hidung', 10, 'Pengobatan DBD sesuai dengan keluhan1.	Banyak minum air putih,susu putih,air kelapa,jus jambu2.	Istirahat cukup3.	Konsusmsi obat penurun panas dari dokter dan di kompres4.	Pemberian vitamin5.	Dan melakukan PSN 3M plus'),
(8, 'Covid 19', '1. Demam tinggi disertai menggigil\r\n2. Batuk kering\r\n3. Pilek\r\n4. Hidung berair dan bersin-bersin\r\n5. Nyeri tenggorokan\r\n6. Sesak napas', 14, 'Penderita yang terinfeksi virus corona akan menerima terapi yang bersifat suportif untuk mengurangi gejala. Misalnya anti-piretik untuk menurunkan suhu tubuh dan cairan untuk mencegah dehidrasi, serta terapi oksigen pada pasien yang mengalami sesak napas\r');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyaluran_bantuan`
--

CREATE TABLE `tb_penyaluran_bantuan` (
  `id_penyaluran_bantuan` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `id_bantuan` varchar(255) NOT NULL,
  `jumlah` varchar(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'belum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyaluran_bantuan`
--

INSERT INTO `tb_penyaluran_bantuan` (`id_penyaluran_bantuan`, `nik`, `id_bantuan`, `jumlah`, `status`) VALUES
(1, 1402010607088479, '1', '2', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat`
--

CREATE TABLE `tb_riwayat` (
  `id_riwayat` int(100) NOT NULL,
  `nik` bigint(100) NOT NULL,
  `id_lokasi` int(100) NOT NULL,
  `id_penyakit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_riwayat`
--

INSERT INTO `tb_riwayat` (`id_riwayat`, `nik`, `id_lokasi`, `id_penyakit`) VALUES
(1, 12345, 1, 1),
(2, 3305041812130006, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(100) NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_warga`
--

CREATE TABLE `tb_warga` (
  `nik` bigint(100) NOT NULL,
  `no_kk` bigint(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `ttl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_warga`
--

INSERT INTO `tb_warga` (`nik`, `no_kk`, `nama`, `jk`, `ttl`) VALUES
(1402010607088479, 1402022508650001, 'LIPA', 'Perempuan', '1930-01-01'),
(1402020201120004, 3321117004060000, 'ELINDA EKA NURCAHYA', 'Perempuan', '1996-05-02'),
(1402020202110001, 3321117004060000, 'ANJANI', 'Perempuan', '1980-08-08'),
(1402020308100006, 1402025708740001, 'BUDI SUPRAYITNO', 'Laki-laki', '1992-10-18'),
(1402020311100005, 3321111010790000, 'KAFSIN UMAR', 'Laki-laki', '1973-05-04'),
(1402020405100011, 1402021112900001, 'TRIASIH', 'Perempuan', '1980-03-03'),
(1402020501110008, 3321060511740000, 'WINDARI KURNIA SANDI', 'Perempuan', '1996-07-15'),
(1402020507110002, 3305040204930002, 'NURUL TAUFIQ HIDAYATI', 'Perempuan', '1985-10-18'),
(1402020607083095, 3321067008910000, 'JUMIATI TRI WULANDARI', 'Perempuan', '2000-03-07'),
(1402020607083152, 1402024111050004, 'RUKOIYAH', 'Perempuan', '1967-05-17'),
(1402020607083176, 1402025708740001, 'DHANIL', 'Laki-laki', '1961-05-17'),
(1402020607083196, 3321062803100000, 'SUWARNI', 'Perempuan', '1959-01-01'),
(1402020607083303, 3321067008910000, 'SUMADI BUDI PRAYOGO', 'Laki-laki', '1963-10-28'),
(1402020607083392, 3305042302490002, 'FARIDA', 'Perempuan', '1968-12-22'),
(1402020607083438, 3305043001930004, 'NURFA\'I', 'Laki-laki', '1984-11-09'),
(1402020607083454, 3305046012820003, 'JUARI', 'Perempuan', '1959-03-29'),
(1402020607083462, 1402025708740001, 'MUDAIYAH', 'Perempuan', '1968-01-01'),
(1402020607083476, 3321093009140000, 'MUAWANAH', 'Perempuan', '1968-06-18'),
(1402020607083494, 7312067110490000, 'SUJIYEN', 'Perempuan', '1964-05-20'),
(1402020607083556, 1402021108820001, 'SENO', 'Laki-laki', '1969-01-01'),
(1402020607083625, 3321114107480030, 'ANJAR YUNIARTI', 'Perempuan', '1987-06-26'),
(1402020607083642, 3305043001930004, 'DEDY WAHYUDI', 'Laki-laki', '1990-10-16'),
(1402020607083731, 3305040204930002, 'RAHMAT HIDAYAT', 'Laki-laki', '1985-04-15'),
(1402020607083745, 3321114107480030, 'MUDA\'IYAH', 'Perempuan', '1962-06-15'),
(1402020607083766, 1402025708740001, 'WHAHID SULAIMAN', 'Laki-laki', '1988-06-06'),
(1402020607083857, 1402027112590008, 'WULAN ROMADHONIATI', 'Perempuan', '1998-01-15'),
(1402020607083922, 1402024104450001, 'BAERAN', 'Laki-laki', '1945-01-01'),
(1402020607083982, 1402025911060001, 'DWI AGUSTINA ISWANTINI', 'Perempuan', '1998-08-14'),
(1402020607084000, 3321065010820010, 'KASUDI', 'Laki-laki', '1968-07-04'),
(1402020607084083, 1402024104450001, 'MARIYANTO', 'Laki-laki', '1984-02-10'),
(1402020607084096, 3321111603700000, 'NUR CAHYO WAHYU HIDAYAT', 'Laki-laki', '1981-05-23'),
(1402020607084131, 3305043003780001, 'RIZKY KSATRIA SURYA CAKTI RAMADHANI', 'Laki-laki', '2000-01-04'),
(1402020607084256, 3321064101560000, 'SUKEMI', 'Perempuan', '1951-01-01'),
(1402020607084312, 3321112107550000, 'SISWANTI ARDIYANTI', 'Perempuan', '1988-03-07'),
(1402020607084468, 3305040204930002, 'RADIUS PRAWIRO MURDANI', 'Laki-laki', '1985-01-30'),
(1402020607084474, 3321116107480000, 'MASE', 'Perempuan', '1959-01-01'),
(1402020607084494, 3321112302640000, 'KARSIMAH', 'Perempuan', '1971-08-25'),
(1402020607670003, 1402024701820016, 'JUARSEN', 'Perempuan', '1966-01-01'),
(1402020710110009, 1402022508650001, 'KAMAT', 'Laki-laki', '1925-01-01'),
(1402020804100006, 3321111603700000, 'MUSFIQIN RIDWAN LUBIS', 'Laki-laki', '1988-11-14'),
(1402021006100002, 3321111010790000, 'ACHMAD ALI IMRON', 'Laki-laki', '1970-05-10'),
(1402021111100006, 3321116208920000, 'YUNI ARIFATUL BAITURRAHMAH', 'Perempuan', '1993-06-04'),
(1402021502790001, 3321111603700000, 'HJ. TARPI', 'Perempuan', '1952-01-01'),
(1402021801110007, 3321064101560000, 'ADI WIRATMOKO', 'Laki-laki', '1997-09-16'),
(1402022001120002, 3321110505160010, 'ICHSAN', 'Laki-laki', '1944-05-12'),
(1402022006100001, 1402025111820003, 'WARI', 'Perempuan', '1954-11-16'),
(1402022007100003, 1402025108850002, 'ASHARI', 'Laki-laki', '1969-10-12'),
(1402022211100002, 1402022702930001, 'DWI ARINDA', 'Perempuan', '1991-01-25'),
(1402022302100015, 3321117011940000, 'MUSTAHAL', 'Laki-laki', '1935-01-01'),
(1402022306100018, 3321066703800000, 'SUDARSONO', 'Laki-laki', '1974-04-07'),
(1402022408110011, 3321065605590000, 'BAGUS FAISAL ABADI', 'Laki-laki', '2001-04-16'),
(1402022604110007, 1402025911060001, 'SALSABILA TRI PUJA KUSUMA DEWI', 'Perempuan', '2000-04-02'),
(1402022701120001, 3321062803100000, 'ZAINUL ARIFIN', 'Laki-laki', '1984-09-09'),
(1402022709100001, 1402024111050004, 'AMAT', 'Laki-laki', '1963-05-05'),
(1402022805100001, 3305042302490002, 'MUSINEM', 'Perempuan', '1950-01-01'),
(1402022807100001, 1402021108820001, 'MELLYA RACHMAWATI', 'Perempuan', '1994-03-17'),
(1402023008100008, 3321114107700000, 'TASAM', 'Laki-laki', '1949-01-01'),
(1402024106860003, 1402025602040001, 'SUHARTI', 'Perempuan', '1964-01-01'),
(3305040104100009, 3305043001930004, 'NIPAH', 'Perempuan', '1957-05-17'),
(3305040411790001, 3321064101560000, 'JONI WIBOWO', 'Laki-laki', '1990-03-01'),
(3305040701072528, 3321050312850000, 'MUHAMMAD ANIF RIZKY', 'Laki-laki', '2000-04-05'),
(3305040701072548, 3321060511740000, 'ZAENAB YULIANA', 'Perempuan', '1978-10-12'),
(3305040901072053, 3203070504890020, 'EVA VERAYANTI', 'Perempuan', '1983-04-15'),
(3305040901072849, 1402022508650001, 'MURJONO', 'Laki-laki', '1984-01-04'),
(3305040901073748, 3321112107550000, 'MASHUR', 'Laki-laki', '1961-01-01'),
(3305040901073756, 3305043001930004, 'KARNADI', 'Laki-laki', '1952-04-07'),
(3305040901074623, 1402025111820003, 'JA\'FAR', 'Laki-laki', '1948-10-18'),
(3305040901074679, 1402024111050004, 'MERRY SALUS UNIFA', 'Perempuan', '1994-11-30'),
(3305040908110003, 1402025911060001, 'ISWATI', 'Perempuan', '1974-05-12'),
(3305041810100003, 3321060511740000, 'ARI SANDI', 'Laki-laki', '1974-10-30'),
(3305041812130006, 1402025108850002, 'DICKY GANDA PRAYOGI', 'Laki-laki', '1998-08-03'),
(3305042705130131, 3321064101560000, 'DIDIK WIRANTO', 'Laki-laki', '1985-07-08'),
(3321060104060064, 1402021108820001, 'NYOMAN SRI LESTARI', 'Perempuan', '1974-10-08'),
(3321060107360010, 1402024701820016, 'EKA MUDLOFAH', 'Perempuan', '1970-01-12'),
(3321060204070733, 1402020701840017, 'KARPUK. A', 'Perempuan', '1956-01-22'),
(3321060303050004, 1402021404770006, 'KUSWANTO', 'Laki-laki', '1971-08-20'),
(3321060501040003, 3321117004060000, 'IKA HARIYATI', 'Perempuan', '1974-10-18'),
(3321060605040001, 1402025911060001, 'TASWAN', 'Laki-laki', '1968-03-15'),
(3321060607120002, 1402045010830003, 'INDAH WATI', 'Perempuan', '1964-06-04'),
(3321060802060008, 1402023007940002, 'WIWIK LIDYAWATI', 'Perempuan', '1973-10-13'),
(3321060902150009, 3321116502910000, 'SUBEYO', 'Laki-laki', '1966-07-20'),
(3321060906160002, 1402024111050004, 'FELA ISTA GINANTI', 'Perempuan', '1999-06-07'),
(3321061001110001, 1402021112900001, 'ARI PRADANA PUTRA CAHYADI', 'Laki-laki', '2000-01-12'),
(3321061009040007, 7312067110490000, 'KAMDANI', 'Laki-laki', '1932-01-01'),
(3321061406110005, 3321117004060000, 'RISNA DWI HAYU ANGGRAINI', 'Perempuan', '2001-05-01'),
(3321061603070338, 3321117011940000, 'SEMAH', 'Perempuan', '1940-01-01'),
(3321061606160001, 1402024111050004, 'MAHELUERMA WATI', 'Perempuan', '1990-03-15'),
(3321061802040003, 3305043001930004, 'RINDANG NUR ANGGRAENI', 'Perempuan', '1997-03-17'),
(3321062001150015, 7312061211070000, 'TONAH', 'Perempuan', '1953-11-02'),
(3321062006060006, 3305046012820003, 'BAMBANG SRIYONO', 'Laki-laki', '1974-06-12'),
(3321062105040003, 3321115503800000, 'MUHAMMAD FAIS BINUSRILLAH', 'Laki-laki', '1996-05-18'),
(3321062203070007, 3321067008910000, 'DEMES', 'Perempuan', '1968-01-01'),
(3321062206090001, 3321114107700000, 'JUWARI', 'Perempuan', '1963-03-20'),
(3321062311110003, 3203070504890020, 'MUJITABAH', 'Laki-laki', '1977-03-28'),
(3321062401080002, 3305040204930002, 'S. MANSUR YUDI SAPUTRO', 'Laki-laki', '1981-02-02'),
(3321062509080005, 1402027001930001, 'SUKIMAH', 'Perempuan', '1965-07-03'),
(3321062704040002, 3321114107480030, 'TSALITS DIAN WAHUSAH', 'Laki-laki', '1988-01-02'),
(3321062806130002, 3305040204930002, 'SURYADI', 'Laki-laki', '1979-07-04'),
(3321062912040001, 3321112302640000, 'YASNAN', 'Laki-laki', '1962-01-01'),
(3321067112450010, 3321064101560000, 'AZZALIYAH ILLENE MARTANIA', 'Perempuan', '2000-03-31'),
(3321074604900000, 3321064101560000, 'MUTINING', 'Perempuan', '1965-10-10'),
(3321110102060023, 3321116208920000, 'ALI ROSYAD', 'Laki-laki', '1966-10-12'),
(3321110106110007, 3321060511740000, 'NURHASAN UDIN CAHYANTO', 'Laki-laki', '1979-12-22'),
(3321110107140010, 1402020701840017, 'NURALIM', 'Laki-laki', '1949-01-01'),
(3321110310060029, 3305042302490002, 'ADY RIFQI', 'Laki-laki', '1989-03-09'),
(3321110411100007, 3305043003780001, 'RIZKY IMTIHAN RAMADHANI', 'Laki-laki', '1990-04-24'),
(3321110509120010, 1402023007940002, 'SAPTA ANDRE SETIAWAN', 'Laki-laki', '2001-09-12'),
(3321110709150002, 1402024111050004, 'AFITA FANTI TRILINA', 'Perempuan', '1997-05-22'),
(3321110712050029, 1402025108850002, 'DIMAS GANDA PRAYOGA', 'Laki-laki', '1998-08-03'),
(3321110902070002, 3321116502910000, 'SITI JULAIKAH', 'Perempuan', '1972-06-20'),
(3321110903080717, 3321115503800000, 'SITI MUSTIANAH', 'Perempuan', '1975-10-10'),
(3321110903080739, 7312061603680000, 'KASIYONO', 'Laki-laki', '1970-10-16'),
(3321110903080754, 3321065605590000, 'SUMARMI', 'Perempuan', '1966-10-30'),
(3321110903080819, 3321112107550000, 'AKTIYA DANI SANJAYA', 'Laki-laki', '1987-09-01'),
(3321110903080859, 3321060511740000, 'BITTATIN', 'Perempuan', '1974-06-12'),
(3321110903080865, 7312061603680000, 'KARTINI', 'Perempuan', '1984-11-07'),
(3321110903080972, 1402023007940002, 'WILDAN HABIBI', 'Laki-laki', '1998-04-06'),
(3321110903080999, 1402027112590008, 'SITI ROKANI', 'Perempuan', '1992-01-12'),
(3321110903081076, 1402022702930001, 'RUSMIN NURYADIN', 'Laki-laki', '1984-04-24'),
(3321110903081084, 1402023007940002, 'NENI SEFTI KUSNIAWATI', 'Perempuan', '1995-09-06'),
(3321111105070028, 3321111010790000, 'NIATUN SHOLIHAH', 'Perempuan', '1982-01-05'),
(3321111210830000, 1402025602040001, 'ABU AMIN', 'Laki-laki', '1951-05-12'),
(3321111301050005, 3321110306550000, 'KASRI', 'Perempuan', '1950-10-10'),
(3321111407100003, 3321111010790000, 'TUMIYAH', 'Perempuan', '1950-01-01'),
(3321111411050020, 1402024104450001, 'SUPARNI', 'Perempuan', '1995-01-01'),
(3321111508050023, 3321050312850000, 'JULIYAH', 'Perempuan', '1974-05-20'),
(3321111512080005, 3321116208920000, 'MARITA ALIF ROHMAWANTI', 'Perempuan', '1992-03-02'),
(3321111609130008, 1402022508650001, 'TUMINA', 'Perempuan', '1969-06-15'),
(3321111707060023, 3321065010820010, 'KUSWATUN KHASANAH', 'Perempuan', '1971-07-05'),
(3321111809130010, 3321066703800000, 'SULASE', 'Perempuan', '1979-10-10'),
(3321111906070043, 1402027001930001, 'SUMADI', 'Laki-laki', '1961-05-15'),
(3321112111030023, 3321115503800000, 'LADI SUFRIANTO', 'Laki-laki', '1970-12-25'),
(3321112206070014, 7312067110490000, 'SRINEM', 'Perempuan', '1945-12-11'),
(3321112402150008, 1402025708740001, 'SISWO HANDOYO', 'Laki-laki', '1999-01-22'),
(3321112408050031, 1402045010830003, 'WAHYU KARTIKA CANDRA KUSUMA D', 'Perempuan', '1993-06-09'),
(3321112502040028, 1402045010830003, 'AM SIHABUDDIN, Drs. M.Ag', 'Laki-laki', '1954-09-15'),
(3321112502040032, 1402021112900001, 'TONI CAHYADI', 'Laki-laki', '1976-08-10'),
(3321112510070018, 3321050312850000, 'SUYONO', 'Laki-laki', '1973-06-10'),
(3321112511040025, 3321116107480000, 'FATKHUR ROZI', 'Laki-laki', '1993-12-27'),
(3321112601170006, 1402027001930001, 'DIYA AYU WIDYAWATI', 'Perempuan', '1994-12-22'),
(3321112703080005, 3321065405980000, 'TARMUJI', 'Laki-laki', '1974-04-13'),
(3321112707120010, 3321110306550000, 'PASIJAH', 'Perempuan', '1950-01-01'),
(3321112809060027, 1402023007940002, 'KUSMADI', 'Laki-laki', '1970-08-18'),
(3321113011050018, 3203070504890020, 'NEMU', 'Perempuan', '1970-06-15'),
(3321113108050033, 3305043003780001, 'BUSONO, SH', 'Laki-laki', '1964-04-01'),
(3321113112580020, 1402024701820016, 'AHMAD SUPRIYADI', 'Laki-laki', '1988-04-12'),
(3321114605000000, 1402024701820016, 'JAENAL EFENDI', 'Laki-laki', '1990-09-01'),
(3326160704390001, 3321112107550000, 'SUPIAH', 'Perempuan', '1965-01-01'),
(3326160710640041, 1402027112590008, 'MUIN', 'Laki-laki', '1962-02-06'),
(3326160806850002, 1402021404770006, 'ETIK SULISTYA NINGSIH', 'Perempuan', '1985-01-09'),
(3326162905850001, 1402027112590008, 'SUKARTAJI', 'Laki-laki', '1981-08-02'),
(3326165206760002, 3321110505160010, 'SANI KIRANAWATI', 'Perempuan', '1984-12-01'),
(7312060403110046, 1402027112590008, 'KARMANI', 'Perempuan', '1961-01-01'),
(7312060609120004, 3321116208920000, 'LANI BUDIARTI', 'Perempuan', '1967-05-05'),
(7312060708103942, 3321112302640000, 'PRASTIYO ADI PRAYOGO', 'Laki-laki', '2002-02-28'),
(7312060708106163, 3321114107480030, 'MUNARI', 'Laki-laki', '1948-01-01'),
(7312060708106346, 3321115503800000, 'NANDA ELFRIDA ISLAMIATI', 'Perempuan', '1999-06-17'),
(7312060708106532, 3305043003780001, 'WAKHIDATUL QOMARIYAH', 'Perempuan', '1966-05-04'),
(7312060708106621, 3321093009140000, 'SUBURYANTO', 'Laki-laki', '1964-05-05'),
(7312060708106638, 3321065405980000, 'MINARSIH', 'Perempuan', '1988-11-07'),
(7312060803110003, 3321093009140000, 'VIOLISIA BERLIAN FAJARIKA', 'Perempuan', '1992-05-19'),
(7312061003110005, 3321111603700000, 'ULIN NUHAYANTI', 'Perempuan', '1974-08-24'),
(7312061612100001, 3305043112490028, 'BASRI', 'Perempuan', '1950-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'operator',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@jagawarga.com', NULL, '$2y$10$a/i0BUm7pGVHqhwyC8um.eiuTvHhotqwkkyi/JaMy5L7pkJl2cZH.', NULL, 'admin', '2020-12-01 18:20:41', '2020-12-01 18:20:41'),
(2, 'Operator', 'operator@jagawarga.com', NULL, '$2y$10$deuqtHZJ/.Mb4exNN/Im/ulJz2IbmhSnpsAAj4XxBl7J1ZQjANmny', NULL, 'operator', '2020-12-11 23:06:23', '2020-12-11 23:06:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tb_bantuan`
--
ALTER TABLE `tb_bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indexes for table `tb_karantina`
--
ALTER TABLE `tb_karantina`
  ADD PRIMARY KEY (`id_karantina`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tb_penyaluran_bantuan`
--
ALTER TABLE `tb_penyaluran_bantuan`
  ADD PRIMARY KEY (`id_penyaluran_bantuan`);

--
-- Indexes for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_warga`
--
ALTER TABLE `tb_warga`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_bantuan`
--
ALTER TABLE `tb_bantuan`
  MODIFY `id_bantuan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_karantina`
--
ALTER TABLE `tb_karantina`
  MODIFY `id_karantina` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id_penyakit` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_penyaluran_bantuan`
--
ALTER TABLE `tb_penyaluran_bantuan`
  MODIFY `id_penyaluran_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  MODIFY `id_riwayat` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
