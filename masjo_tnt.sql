-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 05:16 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjo_tnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updationdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(120) NOT NULL,
  `foto` varchar(120) DEFAULT NULL,
  `foto2` varchar(120) DEFAULT NULL,
  `isi_berita` longtext NOT NULL,
  `isi_berita2` longtext DEFAULT NULL,
  `tgl_posting` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `foto`, `foto2`, `isi_berita`, `isi_berita2`, `tgl_posting`) VALUES
(9, 'Pule Payung, Wisata Alam Alternatif Kali Biru', 'pulepayung1.jpg', 'pulepayung.jpg', '<p align=\"justify\">Pule Payung merupakan salah satu destinasi wisata yang terdapat di Jogja. Dari pusat kota Jogjakarta, perjalanan bisa ditempuh kurang lebih satu jam perjalanan. lokasi obyek wisata baru ini tidak terlalu jauh dari Kali Biru. Diberi nama Pule Payung, karena objek wisata ini terletak di Bukit Pule Payung, Dusun Soropati, Desa Hargotirto, Kecamatan Kokap. Objek wisata ini dibuka di atas lahan milik beberapa warga dengan luas mencapai dua hektar. Di pule Payung Anda akan berada di ketinggian sekitar 700 MDPL, dengan begitu Anda akan bisa menikmati pemandangan alam dan bukit yang sangat indah.</p>\r\n<p align=\"justify\">Objek wisata Pule Payung bisa menjadi alternatif karena Kali Biru saat ini sudah terlalu banyak pengunjung. Bahkan anda harus antri untuk masuk dan menikmati berbagai fasilitas yang ada. Karena itu tak ada salahnya mencoba berkunjung ke pule Payung dan menikmati fasilitasnya yang tak kalah serunya dibandingkan dengan yang ada di Kali Biru. Apalagi keduanya berada di atas ketinggian Bukit Menoreh sehingga memiliki banyak kesamaan fasilitas. Tak hanya menawarkan keindahan alam dan kesejukan udara, obyek wisata Pule juga spot foto dengan latar belakang Waduk Sermo. Obyek wisata Pule Payung tak kalah cantiknya dengan wisata lain yang juga menggunakan Waduk Sermo sebagai daya tarik. Dari cerita masyarakat setempat, di lokasi tersebut pernah ditumbuhi sebuah pohon pule berbentuk menyerupai payung dengan ukuran besar. Meski telah tumbang, warga setempat sudah menamai bukit di sana dengan nama Bukit Pule Payung.</p>\r\n<p align=\"justify\">Apa saja sih yang menarik di Pule Payung? Ada banyak spot menarik yang bisa anda pilih di lokasi ini. Yang paling popular adalah jembatan surga dan papan gardu pandang di atas ketinggian. Papan gardu pandang ini berbentuk heksagonal sehingga seperti papan yang diletakkan di awan. Dari tempat ini anda bisa menikmati cakrawala kehijauan maupun pesona Waduk Sermo dari kejauhan, seperti yang selama ini bisa anda dapatkan di Kali Biru. Keunikan lain dari Pule Payung yang juga cukup popular adalah bersepeda di atas awan. Ha..kok bisa? Begitu mungkin respon anda. Ya bisalah karena fasilitas ini berupa sting kawat yang dibentangkan antar pohon dimana anda bisa naik sepeda sambil bergelantungan di kawat. Berfoto dengan sepeda di awan akan membuat anda terlihat eksotis bukan?!</p>\r\n', '<p align=\"justify\">Selain itu anda juga bisa menikmati beragam fasilitas seru lainya, seperti lolipop, wolu, ataupun melayang dengan flying fox. Jangan lupa menyiapkan kamera untuk mengabadikan berbagai momen dan aksi seru di obyek wisata Pule Payung yang sangat instagramable. Meskipun relative baru, namun destinasi wisata ini juga cukup lengkap dengan sarana lainnya, seperti mushola, gazeboo, serta warung makan. Didukung keindahan alam dan sejuknya udara di Pule Payung membuat liburan anda akan terasa sangat mengesankan.</p>\r\n<p align=\"justify\">Dinamakan Pule Payung karena di tempat ini terdapat pohon yang namanya Pule. Pohon Pule ini merupakan jenis pohon perdu yang bisa digunakan untuk berteduh. Jadi, Pule Payung adalah nama pohon yang bisa digunakan untuk berteduh. Pemandangan yang disuguhkan sangat mempesona, jauh dari keramaian dan polusi. Dari pintu masuk, Anda akan disuguhi pemandangan yang menarik berupa jajaran-jajaran pegunungan menoreh yang masih hijau subur mengelilingi Pule Payung. Setelah membeli tiket masuk, Anda akan diminta melewati jembatan untuk menuju lokasi spot-spot foto. Anda akan disuguhi beberapa spot untuk berfoto. Ada “Jembatan Surga”, nama gardu pandang yang berbentuk jembatan dengan background pemandangan Waduk Sermo, ada spot Lolipop, spot Wolu, spot Angkasa dan jika Anda ingin menguji adrenalin bisa mencoba spot sepeda gantung dan flying fox. Spot-spot foto ini berlatar belakang Waduk Sermo dan jajaran perbukitan Menoreh.</p>\r\n<p align=\"justify\">Biaya tiket masuk, jasa foto dan spot masih terbilang terjangkau yaitu mulai 5.000 rupiah per orang. Anda akan puas meskipun jalan menuju Pule Payung lumayan ekstrim dengan jalan yang berliku naik-turun. Akan tetapi, Anda akan mendapatkan suguhan pemandangan yang fantastik. Jangan salah lho, lokasi wisata ini sudah banyak dikunjungi wisatawan-wisatawan asing.</p>', '2020-01-07'),
(12, 'Pantai Nguluran, Jembatan Kaca di Tebing Pantai', 'teraskaca.jpg', 'teraskaca2.jpg', '<p align=\"justify\">Beberapa waktu lalu, keberadaan teras kaca di Pantai Nguluran, Girikarto, Panggang, Gunungkidul, Yogyakarta sempat viral di media sosial. Teras kaca tersebut dibangun di bibir jurang pantai. Walau sedikit mengerikan, tapi pemandangan yang ditawarkan saat berdiri di jembatan kaca ini begitu menggoda.\r\nHanya dari atas jembatan kaca, traveler dapat memandangi keindahan pantai Nguluran menakjubkan. Teras kaca memiliki ketebalan 13 milimeter dan luas 25 meter persegi. Ketebalan kaca yang terpasang diteras kaca sudah menjadi standar keamanan kaca pijak. Jadi pengunjung tidak perlu kawatir dengan kondisi kekuatan bangunan teras. Toh juga dibatasi, setiap sesi foto maksimal hanya 3 – 5 orang dan ada yang menjaga di depan pintu teras. Walaupun begitu, bagi setiap pengunjung harus tetap berhati hati.</p>\r\n<p align=\"justify\">Hingga sampai sekarang spot jembatan kaca menjadi perbincangan menarik netizen terhadap keindahan wisata Gunung Kidul, sebab bila dilihat dari foto-foto beredar di internet terlihat sangat keren. Keberadaan spot jembatan kaca merupakan daya tarik utama bagi pengunjung yang hendak berwisata ke pantai Nguluran Gunung Kidul. Wisata pantai Nguluran memiliki pesona keindahan alam yang tak kalah bagus dengan deretan wisata pantai dimiliki Gunung Kidul seperti pantai Baron dan pantai Krakal. Ketika anda memijak kan kaki di pantai Nguluran, seketika anda disajikan keindahan alam laut eksotis dan suasana udara sejuk khas pantai Gunung Kidul.</p>\r\n', '<p align=\"justify\">Bagi wisatawan yang ingin menguji keberanian serta pengin berfoto di spot foto keren, maka rekomendasi berfoto dan berselfie ria di jembatan kaca Nguluran. Dari namanya sudah bisa membayangkan, jembatan yang terletak di pantai Nguluran memang terbuat dari kaca bening, sehingga siapa pun yang melihat kebawah tebing akan terlihat jelas. Pengunjung bisa berfoto diatas jembatan dengan background pantai lautan lepas dan tebing tinggi.</p>\r\n<p align=\"justify\">Harga tiket wisata tidak begitu mahal kok, anda cukup membayar retribusi pantai Nguluran sebesar Rp. 5.000 per orang. Dan tiap spot dikenakan biaya sendiri berkisar 10 – 20 rb tergantung spotnya. Dilokasi ini juga ada terdapat juga Pantai Gesing yang terdekat dengan pantai Teras Kaca atau Pantai Nguluran yang bisa di gunakan bagi anda yang ingin bermain air dan menikmati makanan ikan langsung dari hasil tangkapan nelayan di Pantai Gesing.  Selain Pantai Nguluran juga ada Pantai Buges yang berada bersebelahan. di Pantai Buges juga menawarkan spot yang sama dengan Pantai Nguluran. di Pantai buges juga terdapat mini teras kaca, jembatan tebing dan banyak spot lain yang menarik untuk berfoto dengan view pantai laut selatan.</p>\r\n<p align=\"justify\">Pengen explore lokasi ini? Masjo siap menemani. :)</p>', '2020-01-07'),
(13, 'Desa Wisata Gamplong, Desa Para Penenun', 'desagamplong2.jpg', 'desagamplong1.jpg', '<p align=\"justify\">Desa Wisata Gamplong adalah desa wisata kerajinan tenun yang berada di Padukuhan Gamplong Desa Sumber Rahayu Kecamatan Moyudan. Desa wisata yang terletak di sebelah barat Kota Yogyakarta ini cukup menarik untuk disinggahi wisatawan terlebih karena masih adanya industri kerajinan tenun tradisional dengan menggunakan Alat Tenun Bukan Mesin (ATBM). Dengan ATBM, masyarakat perajin Gamplong mampu menghasilkan kain tenun sebagai bahan stagen (kain panjang untuk melilit bagian perut wanita). Selain kerajinan tenun, perajin juga mampu memproduksi kerajinan anyaman untuk suvenir. Sejak sekitar tahun 1950, Gamplong dikenal sebagai desa penghasil kerajinan tenun. Terdapat tak kurang dari 24 pengrajin yang menggeluti usaha tenun yang umumnya didapatkan secara turun temurun dari leluhur mereka. Tak hanya terkenal dengan ATBM-nya, Desa Wisata yang teletak di Jl. Raya Wates Yogya Km 14 ini juga terkenal dengan kreativitas warganya yang mampu memanfaatkan eceng gondok, lidi kelapa, mendong, dan akar wangi yang hingga menjadi sejumlah produk istimewa yang mempunyai jual bahkan ekspor. Produk yang dapa mereka hasilkan berupa tas, dompet, aksesori wanita, gorden, dll.</p>\r\n', '<p align=\"justify\">Saat ini bertempat di Desa Wisata Gamplong, sebuah destinasi wisata baru dikembangkan bernama Gamplong Studio Alam Sleman. Sekitar 16 kilometer dari Titik Nol Yogyakarta, Gamplong Studio Alam ini jadi sorotan banyak orang lantaran dijuluki ‘Mini Hollywood’. Julukan Mini Hollywood ini bukan tanpa alasan. Gamplong Studio sendiri merupakan lokasi yang dijadikan syuting film terbaru besutan Hanung Bramantyo, Sultan Agung The Untold Love Story. Mengambil setting abad ke-16 dan 17, lahan yang semula tanah kas milik desa disulap jadi kawasan Indonesia abad ke-16. Lahan seluas 2 hektare itu disulap jadi kawasan Indonesia zaman dulu. Beberapa bangunan semi permanen didirikan seperti Gerbang Keraton Karta Kerajaan Mataram, Pendopo Alit Keraton Karta, Pendopo Ageng Keraton Karta, Benteng Holandia atau Batavia, Kawasan Kampung Mataram, dan Kampung Pecinan masa lampau.</p>\r\n<p align=\"justify\">Beberapa bangunan yang ada di Gamplong Studio Alam ini banyak menarik perhatian wisatawan baik dari masyarakat sekitar hingga luar daerah. Pihak Mooryati Soedibyo selaku pemilik studio ini mengungkapkan, usai selesainya proyek film Sultan Agung, pihaknya menghibahkan studio alam kepada pemerintah daerah untuk dikembangkan menjadi destinasi wisata baru di Sleman. Film Bumi Manusia pun yang kini sedang tayang oleh Sutradara Hanung juga mengambil lokasi ini dalam proses syutingnya. Gamplong Studio Alam ini dibangun mulai Oktober 2017 lalu. Meski baru, tapi antusias masyarakat terhadap keberadaan Gamplong Studio Alam ini dirasa bagus. Tak sedikit orang yang merasa penasaran dengan lokasi syuting film Sultan Agung. Desa wisata gamplong ini pun makin ramai dikunjungi orang. Di sana mereka bisa berfoto selfie dengan latar bangunan abad ke-16. Tak ketinggalan, di sisi lain dari Studio Alam Gamplong terdapat rumah jawa kuno yang dindingnya terbuat dari anyaman bambu dan dilengkapi dengan kandang sapi dan gerobak kayu.  Terdapat pula Kampung Belanda lengkap dengan benteng VOC, Kampung Pecinan, dan aliran Sungai Ciliwung yang diatasnya terdapat sebuah jembatan besi. Penampilan tersebut membawa pengunjung terlempar pada abad ke-16. Hal inilah yang membuat Studio Alam Gamplong dijuluki sebagai “Mini Hollywood”.</p>', '2020-01-07'),
(14, 'Candi Prambanan, Sebuah Peninggalan bersejarah', 'prambanan.jpg', 'tour-prambanan.jpg', '<p align=\"justify\">Candi Prambanan merupakan candi hindu yang dibangun pada abad ke – 9. Candi yang dikelilingi taman indah ini pernah hilang tertutup material vulkanik Gunung Merapi sebelum akhirnya ditemukan kembali dan dipugar menjadi seperti sekarang.</p>\r\n<p align=\"justify\">Dua candi di Indonesia yang namanya sudah mendunia dan masuk dalam daftar UNESCO sebagai warisan budaya dunia adalah Candi Borobudur dan Candi Prambanan. Jika Candi Borobudur adalah Candi Budha, maka Candi Prambanan adalah Candi Hindu. Menjulang setinggi 47 meter, Candi Prambanan laksana menara kokoh yang memikat mata dunia.</p>\r\n', '<p align=\"justify\">Kompleks Candi Prambanan memiliki 3 candi utama yang menghadap ke timur, yakni Candi Wisnu, Candi Brahma, dan Candi Siwa. Setiap candi utama memiliki candi pendamping yang menghadap ke arah barat. Selain candi utama dan candi pendamping, di halaman utama juga terdapat 2 candi apit, 4 candi kelir, dan 4 candi sudut. Sementara itu di halaman kedua terdapat 224 candi. Di candi tersebut terdapat banyak relief, salah satunya adalah relief Ramayana yang kisahnya sama dengan cerita yang diturunkan secara lisan.</p>\r\n<p align=\"justify\">Selain sebagai tempat wisata, Candi Prambanan juga dijadikan tempat peribadatan umat Hindu pada saat perayaan Tawur Agung Kesanga (perayaan jelang Nyepi). Pada saat itu puluhan ribu umat Hindu akan memadati Candi Prambanan. Biasanya pada saat itu akan ada pertunjukan ogoh-ogoh dan aneka tarian.</p>', '2020-01-07'),
(15, 'The Lost World Castle, Spot Instagramable ala Benteng Jepang', 'tlwc1.jpg', 'tlwc.jpg', '<p align=\"justify\">Tempat wisata yang menawarkan spot foto unik kini makin banyak bermunculan. Mengikuti perkembangan zaman di mana berfoto menjadi sebuah keharusan tiap kali mengunjungi tempat baru. Dari yang memanfaatkan keindahan alam asli, sampai yang menggabungkannya dengan latar buatan agar lebih menarik.</p>\r\n<p align=\"justify\">Jogja dan sekitarnya menjadi salah satu kawasan yang tidak pernah berhenti berinovasi. Tempat-tempat wisata semacam itu terus bermunculan dan semuanya memiliki keunikan sendiri-sendiri. Kini di kawasan lereng Merapi, bahkan masuk dalam Kawasan Rawan Bencana (KRB) atau Zona Merah, berdiri sebuah tempat wisata baru bernama The Lost World Castle (TLWC).</p>\r\n<p align=\"justify\">Menawarkan keindahan berupa bangunan mirip Benteng Takeshi, wahana-wahana di sini memanfaatkan batu sisa erupsi Merapi sebagai bahan bakunya. Saat kabut turun, suasana jadi makin menarik untuk latar foto.</p>\r\n', '<p align=\"justify\">The Lost World Castle terletak di Desa Kepuharjo, Kecamatan Cangkringan, Kabupaten Sleman. Kalau masih ingat letusan dahsyat Merapi tahun 2006 silam, Desa Kepuharjo sering disebut dalam acara-acara berita sebagai wilayah yang paling parah terkena dampak erupsi. Hal itu memang benar terjadi, karena erupsi Merapi 2006 menyapu bersih sebagian kawasan Kepuharjo.</p>\r\n<p align=\"justify\">Melihat kedahsyatan letusan Merapi kala itu, pihak pengelola menamai spot wisata ini dengan The Lost World Castle. Artinya, kastil di kawasan yang bisa ‘hilang’ disapu bersih oleh amukan Gunung Merapi.</p>\r\n<p align=\"justify\">Untuk menuju ke The Lost World Castle, kamu bisa ambil rute menuju wisata Kaliadem, Kaliurang dari arah Jogja. Lurus saja sampai menemui papan penujuk menuju The Lost World Castle. Nanti kamu akan menemukan sebuah gapura bertuliskan The Lost World. Masuk saja melalui gapura tersebut, dan jalan terus sampai tiba di The Lost World Castle.</p>\r\n<p align=\"justify\">Harga tiket masuk yang perlu kamu bayar untuk menikmati keindahan TLWC adalah Rp 30.000 per orangnya, belum termasuk ongkos parkir. Di sekitar sana juga terdapat penginapan murah, hanya Rp 50.000 per malamnya.</p>\r\n<p align=\"justify\">Menurut pengelola, tempat ini masih dalam tahap pembangunan. Rencananya akan dibangun juga museum edukasi tentang erupsi Merapi, dan sebuah waterboom mengingat tempatnya yang cukup luas. Perlu diketahui, area tempat berdirinya TLWC ini kurang lebih seluas 1,3 hektar.</p>', '2020-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cek_pemesanan`
--

CREATE TABLE `tb_cek_pemesanan` (
  `kode_pemesanan` varchar(8) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tgl_pesan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cek_pemesanan`
--

INSERT INTO `tb_cek_pemesanan` (`kode_pemesanan`, `id_mobil`, `tgl_pesan`, `status`) VALUES
('TRX00001', 6, '2020-01-18', 'Sudah Dibayar'),
('TRX00001', 6, '2020-01-19', 'Sudah Dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_harga_driver`
--

CREATE TABLE `tb_harga_driver` (
  `id_driver` int(11) NOT NULL,
  `harga_driver` int(15) NOT NULL,
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_harga_driver`
--

INSERT INTO `tb_harga_driver` (`id_driver`, `harga_driver`, `updationdate`) VALUES
(1, 150000, '2020-01-06 16:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak_info`
--

CREATE TABLE `tb_kontak_info` (
  `id_info` int(11) NOT NULL,
  `alamat_kami` tinytext DEFAULT NULL,
  `email_kami` varchar(200) DEFAULT NULL,
  `telp_kami` char(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak_kami`
--

CREATE TABLE `tb_kontak_kami` (
  `id_cust` int(11) NOT NULL,
  `nama_visit` varchar(100) DEFAULT NULL,
  `email_visit` varchar(120) DEFAULT NULL,
  `telp_visit` char(16) DEFAULT NULL,
  `pesan` longtext DEFAULT NULL,
  `tgl_posting` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_merk`
--

CREATE TABLE `tb_merk` (
  `id_merk` int(11) NOT NULL,
  `nama_merk` varchar(120) NOT NULL,
  `tgl_posting` timestamp NULL DEFAULT current_timestamp(),
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_merk`
--

INSERT INTO `tb_merk` (`id_merk`, `nama_merk`, `tgl_posting`, `updationdate`) VALUES
(1, 'Toyota', '2020-01-04 14:23:13', NULL),
(2, 'Honda', '2020-01-04 14:23:22', '2020-01-13 16:34:33'),
(4, 'Daihatsu', '2020-01-04 14:56:54', NULL),
(9, 'Hyundai', '2020-01-04 15:43:05', '2020-01-04 15:48:42'),
(11, 'Suzuki', '2020-01-13 13:36:01', NULL),
(12, 'Wuling', '2020-01-13 13:41:37', NULL),
(13, 'Nissan', '2020-01-13 13:41:56', '2020-01-13 16:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(150) DEFAULT NULL,
  `nama_merk` varchar(120) DEFAULT NULL,
  `nopol` varchar(20) NOT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `harga` int(15) DEFAULT NULL,
  `bbm` varchar(50) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `seating` int(11) DEFAULT NULL,
  `image1` varchar(120) DEFAULT NULL,
  `image2` varchar(120) DEFAULT NULL,
  `image3` varchar(120) DEFAULT NULL,
  `airconditioner` int(11) DEFAULT NULL,
  `powerdoorlocks` int(11) DEFAULT NULL,
  `antilockbrakingsystem` int(11) DEFAULT NULL,
  `brakeassist` int(11) DEFAULT NULL,
  `powersteering` int(11) DEFAULT NULL,
  `driverairbag` int(11) DEFAULT NULL,
  `passengerairbag` int(11) DEFAULT NULL,
  `powerwindows` int(11) DEFAULT NULL,
  `cdplayer` int(11) DEFAULT NULL,
  `centrallocking` int(11) DEFAULT NULL,
  `crashsensor` int(11) DEFAULT NULL,
  `leatherseats` int(11) DEFAULT NULL,
  `tgl_masuk` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `nama_mobil`, `nama_merk`, `nopol`, `deskripsi`, `harga`, `bbm`, `tahun`, `seating`, `image1`, `image2`, `image3`, `airconditioner`, `powerdoorlocks`, `antilockbrakingsystem`, `brakeassist`, `powersteering`, `driverairbag`, `passengerairbag`, `powerwindows`, `cdplayer`, `centrallocking`, `crashsensor`, `leatherseats`, `tgl_masuk`, `updationdate`) VALUES
(2, 'All New Brio A/T', 'Honda', 'AB 1675 OX', 'Honda All New Brio Automatic Transmision, Warna Merah produksi tahun 2019', 275000, 'Pertalite', 2019, 5, 'yaris.jpg', 'grand_livina1.jpg', 'avanza1.jpg', 1, 1, NULL, NULL, 1, 1, 1, 1, 1, 1, NULL, 1, '2020-01-04 16:57:16', '2020-01-06 15:11:10'),
(6, 'All New Avanza M/T', 'Toyota', 'AB 1783 UO', 'Toyota All New Avanza Manual Transmision 5 speed', 250000, 'Pertalite', 2015, 7, 'avanza.jpg', 'grand_livina.jpg', 'new_xenia.jpg', 1, 1, NULL, NULL, 1, 1, 1, 1, 1, 1, NULL, 1, '2020-01-06 11:59:22', NULL),
(8, 'Grand Avega A/T', 'Hyundai', 'AB 1912 BM', 'Hyundai Grand Avega Automatic Transmision, mobil gaya anak muda', 275000, 'Pertamax', 2016, 5, 'grand_livina3.jpg', 'avanza3.jpg', 'new_xenia1.jpg', 1, 1, 1, NULL, 1, 1, NULL, 1, 1, 1, NULL, 1, '2020-01-13 17:39:06', NULL),
(9, 'Grand Livina 1.5 XV A/T', 'Nissan', 'AB 1711 HN', 'Nissan Grand Livina Automatic Transmision 1.500cc, mobil keluarga bergaya muda', 300000, 'Pertalite', 2014, 7, 'grand_livina4.jpg', 'new_xenia2.jpg', 'yaris2.jpg', 1, 1, NULL, NULL, 1, 1, 1, 1, 1, 1, NULL, 1, '2020-01-13 17:41:03', NULL),
(10, 'Xenia M/T', 'Daihatsu', 'AB 1667 CO', 'Daihatsu Xenia Manual Transmision 5 speed, mobil keluarga paling top', 250000, 'Pertalite', 2012, 7, 'new_xenia3.jpg', 'avanza4.jpg', 'grand_livina5.jpg', 1, 1, NULL, NULL, 1, 1, 1, 1, 1, 1, NULL, 1, '2020-01-13 17:42:55', NULL),
(11, 'Innova Reborn Diesel M/T', 'Toyota', 'AB 1564 PN', 'Toyota Kijang Innova Reborn Manual Transmision, mobil keluarga legendaris', 450000, 'Diesel', 2019, 8, 'avanza5.jpg', 'new_xenia4.jpg', 'grand_livina6.jpg', 1, 1, 1, NULL, 1, 1, 1, 1, 1, 1, NULL, 1, '2020-01-13 17:45:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `kode_pemesanan` varchar(8) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `driver` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pickup` varchar(100) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `bukti_bayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(120) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `telp` char(16) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `ktp` varchar(120) NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  `tgl_daftar` timestamp NULL DEFAULT current_timestamp(),
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email`, `password`, `telp`, `alamat`, `ktp`, `role_id`, `tgl_daftar`, `updationdate`) VALUES
(6, 'Nurudin Aziz', 'nurudin.aziz@students.amikom.ac.id', '$2y$10$QMGv4loy6a/NmffKtc4lBeFZP.h9Mh4hvJH38eGco0Vd6ud/B3zNO', '0816618106', 'Karangasem No.149A RT 04 RW 12 Condong Catur, Depok, DI Yogya', '', 1, '2020-01-20 14:34:43', '2020-01-20 14:35:44'),
(7, 'Fitriyana Putri', 'fiyana@gmail.com', '$2y$10$cmT6H6p9UO52pnDVV7S.EOt/RZ2hD/vbL5bI5BlqrBRGdBp93jywy', '085767348234', 'Jl. Imogiri KM 8 Banguntapan, Bantul, DI Yogyakarta', 'cardigan-pjg.jpg', 2, '2020-01-20 14:38:50', '2020-01-20 16:08:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_harga_driver`
--
ALTER TABLE `tb_harga_driver`
  ADD PRIMARY KEY (`id_driver`),
  ADD KEY `harga_driver` (`harga_driver`);

--
-- Indexes for table `tb_kontak_info`
--
ALTER TABLE `tb_kontak_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tb_kontak_kami`
--
ALTER TABLE `tb_kontak_kami`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `tb_merk`
--
ALTER TABLE `tb_merk`
  ADD PRIMARY KEY (`id_merk`),
  ADD KEY `nama_merk` (`nama_merk`);

--
-- Indexes for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `id_mobil` (`id_mobil`,`nama_merk`),
  ADD KEY `nama_merk` (`nama_merk`) USING BTREE;

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`kode_pemesanan`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `driver` (`driver`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_harga_driver`
--
ALTER TABLE `tb_harga_driver`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kontak_info`
--
ALTER TABLE `tb_kontak_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kontak_kami`
--
ALTER TABLE `tb_kontak_kami`
  MODIFY `id_cust` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_merk`
--
ALTER TABLE `tb_merk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD CONSTRAINT `tb_mobil_ibfk_1` FOREIGN KEY (`nama_merk`) REFERENCES `tb_merk` (`nama_merk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `tb_mobil` (`id_mobil`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
