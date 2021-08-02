-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 06:00 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkk_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `summary` text NOT NULL,
  `picture` varchar(128) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic`
--

INSERT INTO `basic` (`id`, `title`, `content`, `summary`, `picture`, `author`, `date`) VALUES
(1, 'Pengertian Internet of Things', '<p><strong>Definisi Umum :</strong></p><p><em>Internet of Thing</em> (IoT) adalah sebuah konsep dimana suatu objek yang memiliki kemampuan untuk mentransfer data melalui jaringan tanpa memerlukan interaksi manusia ke manusia atau manusia ke komputer. IoT telah berkembang dari konvergensi teknologi nirkabel, <em>micro-electromechanical</em> systems (MEMS), dan Internet.&ldquo;<em>A Things</em>&rdquo; pada <em>Internet of Things </em>dapat didefinisikan sebagai subjek misalkan orang dengan monitor implant jantung, hewan peternakan dengan transponder biochip, sebuah mobil yang telah dilengkapi built-in sensor untuk memperingatkan pengemudi ketika tekanan ban rendah. Sejauh ini, IoT paling erat hubungannya dengan komunikasi <em>machine-to-machine </em>(M2M) di bidang manufaktur dan listrik, perminyakkan, dan gas. Produk dibangun dengan kemampuan komunikasi M2M yang sering disebut dengan sistem cerdas atau &ldquo;<em>smart</em>&rdquo;. Sebagai contoh yaitu smart kabel, smart meter, smart grid sensor.</p><p><strong>Definisi Orisinal :</strong></p><p>Penelitian pada IoT masih dalam tahap perkembangan. Oleh karena itu, tidak ada definisi dari <em>Internet of Things</em>. Berikut adalah beberapa definisi alternatif dikemukakan untuk memahami <em>Internet of Things</em> (IoT). Menurut Ashton pada tahun 2009 definisi awal IoT adalah <em>Internet of Things</em> memiliki potensi untuk mengubah dunia seperti pernah dilakukan oleh Internet, bahkan mungkin lebih baik. Pernyataan tersebut diambil dari artikel sebagai berikut:</p><p><em>&quot;Hari ini komputer dan manusia, hampir sepenuhnya tergantung pada Internet untuk segala informasi yang semua terdiri dari sekitar 50 petabyte (satu petabyte adalah 1.024 terabyte) data yang tersedia pada Internet dan pertama kali digagaskan dan diciptakan oleh manusia. Dari mulai mengetik, menekan tombol rekam, mengambil gambar digital atau memindai kode bar.</em></p><p><em>Diagram konvensional dari Internet meninggalkan router menjadi bagian terpenting dari semuanya. Masalahanya adalah orang memiliki waktu, perhatian dan akurasi terbatas. Mereka semua berarti tidak sangat baik dalam menangkap berbagai data tentang hal di dunia nyata. Dan itu adalah masalah besar.</em></p><p><em>Dari segi fisik dan begitu juga lingkungan kita. Gagasan dan informasi begitu penting, tetapi banyak lagi hal yang penting. Namun teknologi informasi saat ini sangat tergantung pada data yang berasal dari orang-orang sehingga komputer kita tahu lebih banyak tentang semua ide dari hal-hal tersebut.</em></p><p><em>Jika kita memiliki komputer yang begitu banyak tahu tentang semua hal itu. Menggunakan data yang berkumpul tanpa perlu bantuan dari kita. Kita dapat melacak dan menghitung segala sesuatu dan sangat mengurangi pemborosan, kerugian, dan biaya. Kita akan mengetahui kapan hal itu diperlukan untuk mengganti, memperbaiki atau mengingat, dan apakah mereka menjadi terbarui atau melewati yang terbaik disini sertan ya!.</em></p><p><em>Internet of Things memiliki potensi untuk mengubah dunia seperti pernah dilakukan oleh Internet, bahkan mungkin lebih baik. (Ashton,2009)</em></p><p><em>Penelitian pada Internet of Things masih dalam tahap perkembangan. Oleh karena itu, tidak ada definisi standar dari Internet of Things. Terdapat juga berbagai definisi yang dirumuskan oleh peneliti yang berbeda serta tercantum dalam survei.&quot;</em></p><p><strong><em>Definisi Alternatif :</em></strong></p><p>1. Casagras (Coordination and support action for global RFID-related activities and standardisation), Mendefinisakan Internet of Things, sebagai sebuah infrastruktur jaringan global, yang menghubungkan benda-benda fisik dan virtual melalui eksploitasi data capture dan kemampuan komunikasi. Infrastruktur terdiri dari jaringan yang telah ada dan internet berikut pengembangan jaringannya.</p><p>2. SAP (Systeme, Anwendungen und Produkte), Mendefinisikannya bahwa Dunia di mana benda-benda fisik diintegrasikan ke dalam jaringan informasi secara berkesinambungan, dan di mana benda-benda fisik tersebut berperan aktif dalam proses bisnis. Layanan yang tersedia berinteraksi dengan &lsquo;objek pintar&rsquo; melalui Internet.</p><p>3. CORDIS, Rencana aksi untuk Uni Eropa untuk memperkenalkan pemerintahan berdasarkan Internet of Things.</p><p>4. ETP EPOSS, Jaringan yang dibentuk oleh hal-hal atau benda yang memiliki identitas, pada dunia maya yang beroperasi di ruang itu dengan menggunakan kecerdasan antarmuka untuk terhubung dan berkomunikasi dengan pengguna, konteks sosial dan lingkungan.</p><p><strong><em>References:</em></strong></p><p><a href="https://id.wikipedia.org/wiki/Internet_untuk_Segala"><em>https://id.wikipedia.org/wiki/Internet_untuk_Segala</em></a></p>', '<p><strong><em>Internet of Thing</em></strong> (IoT) adalah sebuah konsep dimana suatu objek yang memiliki kemampuan untuk mentransfer data melalui jaringan tanpa memerlukan interaksi manusia ke manusia atau manusia ke komputer.</p>', 'content_1.png', 'FerdyHw', '2020-10-05'),
(2, 'Cara Kerja Internet of Things', '<p><strong>Internet of things,</strong> bekerja dengan memanfaatkan suatu argumentasi pemrograman, dimana tiap-tiap perintah argumen tersebut bisa menghasilkan suatu interaksi antar mesin yang telah terhubung secara otomatis tanpa campur tangan manusia dan tanpa terbatas jarak berapapun jauhnya.</p><p>Jadi, Internet di sini menjadi penghubung antara kedua interaksi mesin tersebut. Lalu di mana campur tangan manusia? Manusia dalam IoT tugasnya hanyalah menjadi pengatur dan pengawas dari mesin-mesin yang bekerja secara langsung tersebut.</p><p>Tantangan terbesar yang bisa menjadi hambatan dalam mengkonfigurasi IoT adalah bagaimana menyusun jaringan komunikasinya sendiri. Mengapa itu menjadi sulit dan problematik? Ini sebenarnya dikarenakan jaringannya sangatlah kompleks. Selain itu, IoT juga sesungguhnya sangat perlu suatu sistem keamanan yang cukup ketat. Disamping masalah tersebut, biaya pengembangan IoT yang mahal juga sering menjadi penyebab kegagalannya. Ujung-ujungnya, pembuatan dan pengembangannya bisa berakhir gagal produksi.</p><p><strong><em>References:</em></strong></p><p><a href="https://id.wikipedia.org/wiki/Internet_untuk_Segala"><em>https://id.wikipedia.org/wiki/Internet_untuk_Segala</em></a></p>', '<p><strong>Internet of things,</strong> bekerja dengan memanfaatkan suatu argumentasi pemrograman, dimana tiap-tiap perintah argumen tersebut bisa menghasilkan suatu interaksi antar mesin yang telah terhubung secara otomatis tanpa campur tangan manusia dan tanpa terbatas jarak berapapun jauhnya.</p>', 'content_2.png', 'FerdyHw', '2020-10-04'),
(3, 'Karakteristik Internet of Things', '<p><strong>1. Kecerdasan</strong></p><ul><li>Kecerdasan intelejensi dan kontrol automatisasi di saat ini merupakan bagian dari konsep asli Internet of Things . Namun, perlu dilakukan riset yang lebih mendalam lagi di dalam penelitian konsep Internet of Things dan kontrol automatisasi agar pada masa depan Internet of Things akan menjadi jaringan yang terbuka dan semua perintah dilakukan secara auto &ndash; terorganisir atau cerdas, objek virtual ( avatar ) dan dapat dioperasikan dengan mudah, bertindak secara independen sesuai dengan konteks, situasi atau lingkungan yang dihadapi .</li></ul><p><strong>2. Arsitektur</strong></p><ul><li>Arsitektur Internet Of Things terdiri atas beberapa jaringan dan sistem yang kompleks serta sekuriti yang sangat ketat, jika ketiga unsur tersebut dapat dicapai, maka kontrol automatisasi di dalam Internet Of Things dapat berjalan dengan baik dan dapat digunakan dalam jangka waktu yang lama sehingga mendapatkan profit yang banyak bagi suatu perusahaan, namun dalam membangun ketiga arsitektur itu banyak sekali perusahaan pengembang IOT yang gagal, karena dalam membangun arsitektur itu membutuhkan waktu yang lama serta biaya yang tidak sedikit.</li></ul><p><strong>3. Faktor Ukuran, Ruang dan Waktu</strong></p><ul><li>Di dalam membangun Internet Of Things para engineer harus memperhatikan ketiga aspek yaitu: Ukuran, ruang, dan waktu. Dalam melakukan pengembangan IOT faktor Waktu yang biasanya menjadi kendala.Biasanya dibutuhkan waktu yang lama karena menyusun sebuah jaringan kompleks di dalam IOT tidak lah mudah dan tidak dapat dilakukan oleh sembarang orang.</li></ul><p><strong><em>References:</em></strong></p><p><a href="https://id.wikipedia.org/wiki/Internet_untuk_Segala"><em>https://id.wikipedia.org/wiki/Internet_untuk_Segala</em></a></p>', '<p>Kecerdasan intelejensi dan kontrol automatisasi di saat ini merupakan bagian dari konsep asli Internet of Things . Namun, perlu dilakukan riset yang lebih mendalam lagi di dalam penelitian konsep Internet of Things</p>', 'content_3.png', 'FerdyHw', '2020-10-04'),
(4, 'Unsur - Unsur Internet of Things', '<p>Terdapat beberapa unsur pembentuk IoT yang mendasar termasuk kecerdasan buatan, konektivitas, sensor, keterlibatan aktif serta pemakaian perangkat berukuran kecil. Berikut, kami akan menjelaskan masing-masing unsur pemberntuk tersebut dengan singkat:</p><p>1. <strong>Kecerdasan Buatan (Artificial Intelligence/AI) </strong> &minus; IoT membuat hampir semua mesin yang ada menjadi &ldquo;Smart&rdquo;. Ini berarti IoT bisa meningkatkan segala aspek kehidupan kita dengan pengembangan teknologi yang didasarkan pada AI. Jadi, pengembangan teknologi yang ada dilakukan dengan pengumpulan data, algoritma kecerdasan buatan, dan jaringan yang tersedia. Sebenarnya ya contohnya bisa jadi mesin yang tergolong sederhana semacam meningkatkan/mengembangkan lemari es/kulkas Anda sehingga bisa mendeteksi jika stok susu dan sereal favorit Anda sudah hampir habis, bahkan bisa juga membuat pesanan ke supermarket secara otomatis jika stok mau habis. Penerapan kecerdasan buatan ini memang sangatlah menarik.</p><p>2. <strong>Konektivitas</strong> &minus; Dalam IoT, ada kemungkinan untuk membuat/membuka jaringan baru, dan jaringan khusus IoT. Jadi, jaringan ini tak lagi terikat hanya dengan penyedia utamanya saja. Jaringannya tidak harus berskala besar dan mahal, bisa tersedia pada skala yang jauh lebih kecil dan lebih murah. IoT bisa menciptakan jaringan kecil tersebut di antara perangkat sistem.</p><p>3. <strong>Sensor</strong> &minus; Sensor ini merupakan pembeda yang membuat IoT unik dibanding mesin canggih lainnya. Sensor ini mampu mendefinisikan instrumen, yang mengubah IoT dari jaringan standar dan cenderung pasif dalam perangkat, hingga menjadi suatu sistem aktif yang sanggup diintegrasikan ke dunia nyata sehari-hari kita.</p><p>4. <strong>Keterlibatan Aktif (Active Engagement)</strong> &minus; Engangement yang sering diterapkan teknologi umumnya yang termasuk pasif. IoT ini mengenalkan paradigma yang baru bagi konten aktif, produk, maupun keterlibatan layanan.</p><p>5. <strong>Perangkat Berukuran Kecil</strong> &minus; Perangkat, seperti yang diperkirakan para pakar teknologi, memang menjadi semakin kecil, makin murah, dan lebih kuat dari masa ke masa. IoT memanfaatkan perangkat-perangkat kecil yang dibuat khusus ini agar menghasilkan ketepatan, skalabilitas, dan fleksibilitas yang baik.</p><p><strong><em>References:</em></strong></p><p><a href="https://www.dewaweb.com/blog/internet-of-things/">https://www.dewaweb.com/blog/internet-of-things/</a></p>', '<p>Unsur pembentuk IoT yang mendasar termasuk kecerdasan buatan, konektivitas, sensor, keterlibatan aktif serta pemakaian perangkat berukuran kecil.</p>', 'content_4.png', 'FerdyHw', '2020-10-05'),
(5, 'Klasifikasi Internet of Things', '<p>Pada internet of things pembagian sektor <strong><em>M2M/IoT</em></strong>, yang dikemukakan oleh Beecham Research&#39;s dengan sektor yang sangat luas yang dibagi menjadi 9 bagian, yaitu :</p><p><strong>1. Sektor Pembangunan</strong></p><p>Sektor Pembangunan ini diatur dalam Komersial / Kelembagaan, meliputi toko-toko dan supermarket, gedung perkantoran dan departemen pemerintah, dan segmen industri, meliputi bangunan pabrik, dan perumahan. Perangkat yang kemudian dapat dihubungkan untuk memberikan pelayanan kepada pengguna termasuk HVAC, kontrol akses, manajemen pencahayaan,sensor kebakaran, sistem keamanan dan lain-lain yang berada di gedung-gedung dan fasilitas di kedua segmen. Layanan ini dibangun untuk mengotomatisasi dan bereaksi terhadap kondisi lingkungan.</p><p><strong>2. Sektor Energi</strong></p><p>Sektor Energi diatur ke dalam tiga segmen pasar:</p><ol><li>Pasokan / Permintaan, yang meliputi pembangkit listrik, transmisi / distribusi, kualitas daya dan manajemen energi. Meliputi pembangkit listrik dari sumber-sumber tradisional &ndash; bahan bakar fosil, hidro dan nuklir.</li><li>Alternatif, meliputi sumber baru termasuk sumber energi terbarukan seperti cahaya, angin, pasang serta elektrokimia.</li><li>Minyak / Gas, yang terdiri dari aplikasi dan perangkat yang digunakan untuk mengekstrak dan mengangkut komoditas ini. Meliputi rig, derek, kepala sumur, pompa dan pipa.</li></ol><p><strong>3. Sektor Rumah Tangga</strong></p><p>Sektor rumah tangga saat ini beragam dan cepat berubah, disusun dalam tiga segmen pasar:</p><ol><li>Infrastruktur, meliputi kabel, akses jaringan dan manajemen energi rumah</li><li>Kesadaran / Keamanan, meliputi keamanan dan alarm kebakaran rumah, pemantauan lansia (tidak klinis) dan anak-anak.</li><li>Kenyamanan / Hiburan, meliputi pengendalian iklim, manajemen pencahayaan, peralatan dan hiburan</li></ol><p>Oleh karena itu sektor ini sekarang mencakup eReaders, photoframes Digital, Game konsol serta Cincin / pengering dan Alarm Rumah.</p><p><strong>4. Sektor Kesehatan</strong></p><p>Sektor kesehatan meliputi telemedicine, rumah jompo, dan perawatan kesehatan di rumah termasuk pemantauan jarak jauh. Misalnya alat pacu jantung jantung ditanamkan untuk orang tua (klinis). Aplikasi ini memberdayakan pasien dan dokter sama untuk melakukan penelitian yang lebih baik dan pilihan pengobatan. Sektor ini kemudian juga melacak peralatan Lab, seperti sentrifus, inkubator, freezer dan peralatan tes darah. Ini mencakup segmen berikut:</p><ol><li>Perawatan meliputi Rumah Sakit, ER, Ponsel POC, Klinik, dll.</li><li>Penelitian yang meliputi Penemuan Obat, Diagnostik dan peralatan Lab.</li></ol><p><strong>5. Sektor Industri</strong></p><p>Sektor Industri mencakup pemantauan dan pelacakan aset, yang melibatkan pemantauan diskrit aset atau perangkat untuk memastikan kinerja uptime, kontrol versi, dan analisis lokasi untuk berbagai proses industri pabrik. Proses ini tersegmentasi sebagai berikut:</p><ol><li>cairan</li><li>Konversi / Diskrit meliputi tank, fabrikasi, perakitan / kemasan.</li><li>Distribusi meliputi infrastruktur / rantai persediaan.</li><li>Sumber Otomasi meliputi pertanian, irigasi, pertambangan, gudang, pabrik / tanaman.</li></ol><p><strong>6. Sektor Transprtasi</strong></p><p>Sektor Transportasi dibagi menjadi tiga segmen utama:</p><ol><li>Kendaraan. Ini termasuk kendaraan telematika, pelacakan dan komunikasi dengan mobil, truk dan trailer. Kendaraan telematika kemudian memungkinkan layanan seperti navigasi, diagnostik kendaraan, dan pencarian kendaraan yang dicuri. Daerah yang berhubungan dengan kendaraan lainnya termasuk off-highway (misalnya konstruksi, pertanian)</li><li>Non-Kendaraan. Transportasi non-kendaraan termasuk pesawat, kereta api, kapal / perahu dan kontainer</li><li>Sistem Transportasi. Transportasi Sistem mencakup layanan informasi untuk penumpang, skema pembayaran jalan, skema parkir, terutama di kota-kota.</li></ol><p><strong>7. Perdagangan</strong></p><p>Sektor perdagangan yang meliputi sistem jaringan dan perangkat yang memungkinkan pengecer untuk memiliki peningkatan visibilitas rantai pasokan, konsumen dan mengumpulkan informasi produk, meningkatkan kontrol persediaan, mengurangi konsumsi energi, dan penelusuran aset dan keamanan. Ini termasuk angka penjualan peralatan, Mesin penjual (makanan / minuman, rokok, produk bernilai tinggi seperti CD),alat pembayaran parkir, Peralatan (pompa bensin, pencuci / pengering, pendingin, pembersih mobil) Layanan, Hiburan (mesin game, sistem suara) dan Signage / tampilan (billboard, display) serta sistem RFID (penandaan barang), dll. Sektor ini dibagi menjadi tiga segmen utama:</p><ol><li>Toko, meliputi supermarket, pusat perbelanjaan, serta situs toko tunggal dan pusat distribusi.</li><li>Perhotelan meliputi hotel, restoran, bar, kafe dan klub.</li><li>Khusus meliputi SPBU, game, bowling, bioskop, konser, balap, dan pameran.</li></ol><p><strong>8. Sektor Keamanan</strong></p><p>Sektor Keamanan Publik sangat luas dan dibagi menjadi lima segmen:</p><ol><li>Layanan darurat, meliputi polisi, pemadam kebakaran, jasa ambulans serta kerusakan mobil dan layanan pengaturan. Ini termasuk instalasi unit gawat darurat.</li><li>Infrastruktur Publik, meliputi pemantauan lingkungan termasuk dataran banjir, instalasi pengolahan air. Hal ini berkaitan dengan iklim dan meteorologi.</li><li>Pelacakan meliputi manusia (pekerja mandiri, parolees, dll), hewan, pengiriman dan pos, kemasan dan pelacakan bagasi.</li><li>Peralatan meliputi senjata militer, kendaraan militer, kapal, pesawat dan peralatan lainnya.</li><li>Pengawasan, meliputi pengawasan tetap (CCTV, Kamera Kecepatan) serta keamanan militer dan radar / satelit.</li></ol><p><strong>9. Sektor Teknologi dan Jaringan</strong></p><p>Sektor ini dibagi menjadi dua segmen utama:</p><ol><li>Jaringan perusahaan, meliputi peralatan kantor seperti mesin fotokopi, printer, mesin cap serta pemantauan jarak jauh PBXs, IT / komponen pusat data dan komponen jaringan pribadi.</li><li>Jaringan publik termasuk infrastruktur pembawa seperti menara seluler, pusat data publik, sistem pasokan listrik dan penyejuk ruangan. Kategori ini berbeda dari manajemen fasilitas di sektor pembangunan.</li></ol><p><strong><em>References:</em></strong></p><p><a href="https://id.wikipedia.org/wiki/Internet_untuk_Segala"><em>https://id.wikipedia.org/wiki/Internet_untuk_Segala</em></a></p>', '<p>Pada internet of things pembagian sektor <strong><em>M2M/IoT</em></strong>, yang dikemukakan oleh Beecham Research&#39;s dengan sektor yang sangat luas yang dibagi menjadi 9 bagian, yaitu sektor pembangunan, energi, rumah tangga dll.</p>', 'content_5.png', 'FerdyHw', '2020-10-15'),
(6, 'Implementasi Internet of Things', '<p><strong>Internet of Things</strong> mengacu pada pengidentifikasian suatu objek yang direpresentasikan secara virtual di dunia maya atau Internet. Jadi dapat dikatakan bahwa Internet of Things adalah bagaimana suatu objek yang nyata di dunia ini digambarkan di dunia maya (Internet). Bahkan salah satu cafe kopi terkenal di Indonesia &ldquo;Starbucks&rdquo; dalam beberapa tahun ke depan, dilaporkan berencana menghubungkan kulkas dan mesin kopi milik mereka dengan teknologi Internet of Thing. Sehingga mereka dapat meningkatkan pelayanan mereka dengan mengetahui apa saja yang lebih disukai konsumen, meramalkan kebutuhan stock barang (kopi,dll), dan masih banyak lainnya dan pada akhirnya efisiensi dan keuntungan akan meningkat. Bayangkan ketika semua benda, bahkan manusia, hewan dan tumbuhan dilengkapi dengan alat pengidentifikasian, maka mereka bisa dikelola secara efisien dengan bantuan komputer. Dan pengidentifikasian tersebut dapat dilakukan dengan beberapa teknologi seperti kode batang (Barcode), Kode QR (QR Code) dan Identifikasi Frekuensi Radio (RFID).</p><p><strong>1. Kode Batang</strong></p><p>Kode batang atau lebih dikenal dengan bahasa inggrisnya <em>barcode</em> adalah suatu kumpulan data optik yang dapat dibaca oleh alat scannernya. Kode batang pada awalnya digunakan untuk otomatisasi pemeriksaan barang di swalayan dan hingga saat ini kode batang (tipe UPC (Universal Price Codes)) kebanyakan masih digunakan untuk hal tersebut.Hal ini dikarenakan banyaknya keuntungan yang dapat diambil dari penggunaan kode batang, yaitu:</p><ol><li>Proses Input Data lebih cepat, karena: Scanner Kode batang dapat membaca / merekam data lebih cepat dibandingkan dengan melakukan proses input data secara manual.</li><li>Proses Input Data lebih tepat, karena: Teknologi Kode batang mempunyai ketepatan yang tinggi dalam pencarian data.</li><li>Proses Input lebih akurat mencari data, karena: Teknologi Kode batang mempunyai akurasi dan ketelitian yang sangat tinggi.</li><li>Mengurangi Biaya, karena dapat mengindari kerugian dari kesalahan pencatatan data, dan mengurangi pekerjaan yang dilakukan secara manual secara berulang-ulang dan memiliki harga yang lebih murah daripada RFID.</li><li>Peningkatan Kinerja Manajemen, karena dengan data yang lebih cepat, tepat dan akurat maka pengambilan keputusan oleh manajemen akan jauh lebih baik dan lebih tepat, yang nantinya akan sangat berpengaruh dalam menentukan kebijakan perusahaan.</li></ol><p>Prinsip kerja kode batang sangatlah sederhana, yaitu ketika kode batang didekatkan pada scanner atau pemindainya, maka scannernya akan memancarkan cahaya dan mengidentifikasi informasi atau kode yang ada pada kode batang tersebut.</p><p><strong>2. Kode QR</strong></p><p>Kode QR atau lebih dikenal dengan sebutan QR Code (Quick Response Code) adalah suatu kode batang dua dimensi yang dikembangkan oleh Denso Wave, salah satu divisi pada Denso Corporation yang merupakan perusahaan jepang. Sesuai namanya Kode QR (Quick Response) diciptakan untuk menyampaikan informasi dengan cepat dan mendapatkan respons yang cepat pula. Berbeda dengan kode batang, yang hanya menyimpan informasi secara horizontal, kode QR mampu menyimpan informasi secara horizontal dan vertikal, oleh karena itu secara otomatis Kode QR dapat menampung informasi yang lebih banyak daripada kode batang. Pada zaman sekarang ini kode QR banyak digunakan sebagai alat penaut fisik yang dapat menyimpan alamat dan URL, nomor telepon, teks dan sms yang dapat digunakan pada majalah, surat harian, iklan, pada tanda-tanda bus, kartu nama ataupun media lainnya. Atau dengan kata lain sebagai penghubung secara cepat konten daring (dalam jaringan/online) dan konten luring (luar jaringan/offline). Kehadiran kode ini memungkinkan semua orang berinteraksi dengan media yang ditempeli oleh kode QR, melalui ponsel secara efektif dan efisien. Semua orang juga dapat menghasilkan dan mencetak sendiri kode QR, sehingga orang lain dapat dengan mudah mengakses alamat URL ataupun segala informasi yang disimpan oleh kode QR tersebut .</p><p><strong>3. Identifikasi Frekuensi Radio</strong></p><p>Identifikasi Frekuensi Radio atau RFID (Radio Frequensi Identifity) merupakan salah satu teknologi implementasi dari Internet of Things. Secara singkatnya, RFID adalah sebuah metode identifikasi secara otomatis dengan menggunakan suatu peranti yang disebut RFID tag atau transponder. Pada zaman modern sekarang ini, RFID merupakan teknologi yang sudah umum (banyak digunakan), dikarenakan kegunaan dan efisiensinya dalam mendukung segala aktivitas kehidupan manusia. Baik pada sektor produksi, distribusi maupun konsumsi. Hal ini dikarenakan label atau kartu RFID adalah sebuah benda yang bisa dipasang atau dimasukkan di dalam sebuah produk, hewan atau bahkan manusia dengan tujuan untuk identifikasi menggunakan gelombang radio. Sehingga memudahkan penggunanya untuk mendata (mengetahui jumlah maupun keberadaan atau lokasi) barang yang dimilikinya tersebut. Prinsip kerja RFID sangatlah sederhana yaitu RFIDtag (label RFID) memuat informasi dalam bentuk elektronik dan ketika bertemu dengan RFIDreadernya, informasi itu akan dikirimkan ke RFIDreader dalam bentuk gelombang radio (makanya disebut Radio Frequensi Identifity). Sehingga benda tersebut dapat teridentifikasi oleh RFIDreadernya<strong>.</strong></p><p>Pengimplementasian Internet of Things terwujud dalam produk Speedy Monitoring. Produk ini diluncurkan oleh PT Telkom guna menangkap, merekam, dan memonitor suatu ruangan atau area tertentu dengan menggunakan IP Camera yang terhubung ke jaringan Speedy. Kelebihan produk ini adalah kita dapat mengakses hasil monitoring kamera dan memanajemen sistem ini melalui web browser. Baik melalui desktop maupun mobile phone. Keistimewaan dari produk Speedy Monitoring adalah tersedianya media penyimpanan yang ditangani secara terpusat sehingga kita hanya perlu menyediakan kamera dan tak perlu repot lagi dengan urusan penyediaan tempat penyimpanan data dan penyediaan server. Dapat mengawasi dan mengontrol suatu tempat dan keadaaan saat kapanpun dan dimanapun adalah idaman. Tentunya dengan IOT mempermudah kita mengawasi dan mengontrol apapun tanpa terbatas jarak dan waktu (online monitoring), termasuk memonitor keadaan rumah (home monitoring). Jika Home Monitoring dapat dilakukan dengan mudah, setiap waktu, dan dari media akses apapun tentunya kita akan merasa aman dan nyaman meninggalkan rumah apalagi dalam jangka waktu yang lama. Maka dari itu dengan Internet of Things kita dapat mengendalikan segala sesuatu melalui sebuah perangkat dan mempermudah dalam melakukan segala aktivitas.</p><p><strong><em>References:</em></strong></p><p><a href="https://id.wikipedia.org/wiki/Internet_untuk_Segala"><em>https://id.wikipedia.org/wiki/Internet_untuk_Segala</em></a></p>', '<p><strong>Internet of Things</strong> mengacu pada pengidentifikasian suatu objek yang direpresentasikan secara virtual di dunia maya atau Internet. Jadi dapat dikatakan bahwa Internet of Things adalah bagaimana suatu objek yang nyata di dunia ini digambarkan di dunia maya (Internet).</p>', 'content_6.png', 'FerdyHw', '2020-10-15'),
(7, 'Sejarah Internet of Things', '<p>Mengingat bahwa IoT ini adalah teknologi canggih yang mampu melakukan transfer data lewat jaringan dengan interaksi yang mudah, masa depan dari pengembangannya jadi sangat menjanjikan. Kehidupan manusia sehari-harinya bisa dioptimalkan dan dipermudah dengan sensor cerdas dan peralatan pintar yang berbasis internet ini.</p><p>Awalnya, internet itu sendiri mulai terkenal di tahun 1989. Lalu pada tahun 1990, seorang peneliti bernama John Romkey membuat suatu perangkat yang kala itu tergolong canggih. Perangkatnya adalah pemanggang roti yang bisa dinyalakan atau juga dimatikan lewat internet.</p><p>Kemudian di tahun 1994, seseorang bernama Steve Mann menciptakan WearCam, dan pada tahun 1997-nya si Paul Saffo menjelaskan secara singkat mengenai penemuannya soal teknologi sensor dan masa depannya nanti. Barulah di tahun 1999 Kevin Ashton membuat konsep Internet of Things. Kevin ini adalah Direktur Auto IDCentre dari MIT.</p><p>Di tahun yang sama, yaitu 1999, ditemukan mesin yang sistemnya berbasis Radio Frequency Identification (RFID) secara global. Nah, penemuan inilah yang jadi awal kepopuleran dari konsep IoT. Orang-orang, terutama pakar teknologi jadi berlomba-lomba mengembangkan teknologinya sesuai konsep IoT.</p><p>Lalu, di tahun 2000, brand ternama LG mengumumkan rencananya untuk membuat dan merilis teknologi IoT yaitu lemari pintar. Lemari pintar ini mampu menentukan apakah ada stok makanan yang perlu diisi ulang dalam lemarinya.</p><p>Kemudian, di tahun 2003, FRID yang sebelumnya telah disebutkan, mulai ditempatkan pada posisi penting dalam masa pengembangan teknologi di Amerika, melalui Program Savi. Pada tahun yang sama pula, perusahaan ritel raksasa Walmart mulai menyebarkan RFID di semua cabang tokonya yang tersedia di berbagai belahan dunia.</p><p>IoT kembali terkenal di tahun 2005, yaitu pada saat media-media ternama semacam The Guardian dan Boston Globe mulai mengutip banyak sekali dari artikel ilmiah dan proses pengembangan IoT. Hingga tahun 2008, berbagai macam perusahaan setuju untuk meluncurkan IPSO untuk memasarkan penggunaan IP dalam jaringan bagi &ldquo;Smart Object&rdquo; yang juga bertujuan mengaktifkan IoT itu sendiri.</p><p><strong><em>References:</em></strong></p><p><a href="https://www.dewaweb.com/blog/internet-of-things/">https://www.dewaweb.com/blog/internet-of-things/</a></p>', '<p>Mengingat bahwa IoT ini adalah teknologi canggih yang mampu melakukan transfer data lewat jaringan dengan interaksi yang mudah, masa depan dari pengembangannya jadi sangat menjanjikan.</p>', 'content_7.png', 'FerdyHw', '2020-10-15'),
(8, 'Manfaat Internet of Things', '<p>Banyak manfaat yang didapatkan dari internet of things. Pekerjaan yang kita lakukan menjadi cepat, mudah, dan efisien. Kita juga bisa mendeteksi pengguna dimanapun ia berada. Sebagai contoh barcode yang tertera pada sebuah produk. Dengan barcode tersebut, bisa dilihat produk mana yang paling banyak terjual dan produk mana yang kurang diminati. Selain itu dengan barcode kita juga bisa memprediksi produk yang stoknya harus ditambah atau dikurangi. Dengan barcode kita tak perlu susah &ndash; susah menghitung produk secara manual.</p><p>Contoh lain saat kita pergi ke Singapore. Jika kita ingin bepergian menggunakan transportasi umum seperti MRT atau bis kita cukup menggunakan atau membeli EZ-link card. EZ-link card biasanya dipakai oleh para wisatawan yang mengunjungi Singapore sebagai pengganti uang untuk membayar jasa transportasi yang telah digunakan. Sedangkan warga negara Singapore sendiri menggunakan ktp ataupun kartu pelajar sebagai alat membayarnya. Cara ini lebih efisien dan cepat ketimbang kita menggunakan uang tunai. Jika kita menggunakan uang tunai, kita masih harus mengantri untuk membayar, belum lagi jika kita membayar dengan nilai nominal uang besar, kita harus menunggu untuk mendapatkan uang kembalian kita.</p><p>Aplikasi IoT dalam B2B dan pemerintahan:</p><p><strong>Iklan dan pemasaran terhubung</strong>. Cisco percaya bahwa kategori ini (Billboards terkoneksi internet) akan menjadi tiga terbesar kategori IoT, bersamaan dengan <em>smart factories</em> dan sistem pendukung <em>telecommuting.</em></p><p><strong>Sistem pengelolaan sampah</strong>. Di Cincinnati, volume sampah masyarakat turun 17% dan volume daur ulang meningkat hingga 49% melalui pemanfaatan program &ldquo;<em>pay as you throw</em>&rdquo; berbasis teknologi IoT untuk memonitor siapa yang membuang sampah melebihi batas.</p><p><strong>Jaringan listrik pintar yang menyesuaikan tarif untuk penggunaan puncak energi</strong>. Jaringan listrik ini mewakili penghematan US$200 miliar hinga US$500 miliar per tahun sampai dengan 2025 berdasarkan McKinsey Global Institute.</p><p><strong>Sistem air cerdas</strong>. Kota Doha, Sao Paulo, dan Beijing mengurangi kebocoran air 40-50% dengan meletakkan sensor pada pompa dan infrastruktur air lainnya.</p><p><strong>Penggunaan dalam industri</strong> mencakup pabrik dan gudang terhubung, internet yang dikelola jaringan rakitan, dan sebagainya.</p><p><strong><em>References:</em></strong></p><p><a href="https://id.wikipedia.org/wiki/Internet_untuk_Segala"><em>https://id.wikipedia.org/wiki/Internet_untuk_Segala</em></a></p>', '<p>Banyak manfaat yang didapatkan dari <strong>internet of things</strong>. Pekerjaan yang kita lakukan menjadi cepat, mudah, dan efisien. Kita juga bisa mendeteksi pengguna dimanapun ia berada. Sebagai contoh barcode yang tertera pada sebuah produk.</p>', 'content_8.png', 'FerdyHw', '2020-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `comment` varchar(254) NOT NULL,
  `date` date NOT NULL,
  `picture` varchar(128) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `email`, `username`, `comment`, `date`, `picture`, `status`) VALUES
(10, 'user@user.com', 'User', 'Test', '2020-10-14', 'Builder.png', 1),
(12, 'user@user.com', 'User', 'Test', '2020-10-14', 'Builder.png', 9),
(14, 'ferdyhwn@gmail.com', 'FerdyHw', 'Test', '2020-10-14', 'Explorer.png', 1),
(15, 'user@user.com', 'User', 'B J I R R', '2020-10-21', 'Builder.png', 9);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `rangkaian` varchar(128) NOT NULL,
  `program` text NOT NULL,
  `summary` text NOT NULL,
  `picture` varchar(128) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `content`, `rangkaian`, `program`, `summary`, `picture`, `author`, `date`) VALUES
(1, 'Smart Door', '<p><strong>Smart Door</strong>, adalah sebuah pintu berbasis internet of things yang cara kerjanya dapat membuka kuncinya dengan menggunakan handphone.</p>\r\n\r\n<p>Alat dan bahan yang diperlukan untuk membuat <strong>Smart Door </strong>ini adalah sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li>Arduino UNO</li>\r\n	<li>Relay Modul 1 Channel</li>\r\n	<li>Adapter 12V</li>\r\n	<li>Breadboard</li>\r\n	<li>Relay</li>\r\n</ul>', 'smart-door.png', '#include "Adafruit_Fingerprint.h"\r\n#include "SoftwareSerial.h"\r\nSoftwareSerial mySerial(2, 3);\r\nAdafruit_Fingerprint finger = Adafruit_Fingerprint(&mySerial);\r\n\r\nbyte sensorsentuh = 4;\r\nint nilaisensor;\r\nbyte irf = 5;\r\nint idFinger;\r\n\r\nvoid setup() {\r\n  Serial.begin(9600);\r\n  finger.begin(57600);\r\n\r\n  pinMode(sensorsentuh, INPUT);\r\n  pinMode(irf, OUTPUT);\r\n\r\n  if (finger.verifyPassword()) {\r\n    Serial.println("FingerPrint Sensor Ditemukan!");\r\n  } else {\r\n    Serial.println("FingerPrint Sensor Tidak Ditemukan! :(");\r\n    while (1) {\r\n      delay(1);\r\n    }\r\n  }\r\n\r\n}\r\n\r\nvoid loop() {\r\n  FINGERPRINT();\r\n  nilaisensor = digitalRead(sensorsentuh);\r\n  Serial.println(nilaisensor);\r\n\r\n  if (idFinger >= 0) {\r\n    digitalWrite(irf, HIGH);\r\n    delay(5000);\r\n    digitalWrite(irf, LOW);\r\n  }\r\n  if (nilaisensor == 1) {\r\n    digitalWrite(irf, HIGH);\r\n    delay(5000);\r\n    digitalWrite(irf, LOW);\r\n  }\r\n}\r\n\r\n//----------------------------------------------------FINGERPRINT----------------------------------------------//\r\nvoid FINGERPRINT() {\r\n  idFinger = getFingerprintIDez();\r\n  delay(50);\r\n}\r\n\r\n//----------------------------------------------------PROSES FINGERPRINT--------------------------------------//\r\n\r\nuint8_t getFingerprintID() {\r\n  uint8_t p = finger.getImage();\r\n  switch (p) {\r\n    case FINGERPRINT_OK:\r\n      Serial.println("Image taken");\r\n      break;\r\n    case FINGERPRINT_NOFINGER:\r\n      Serial.println("No finger detected");\r\n      return p;\r\n    case FINGERPRINT_PACKETRECIEVEERR:\r\n      Serial.println("Communication error");\r\n      return p;\r\n    case FINGERPRINT_IMAGEFAIL:\r\n      Serial.println("Imaging error");\r\n      return p;\r\n    default:\r\n      Serial.println("Unknown error");\r\n      return p;\r\n  }\r\n\r\n  // OK success!\r\n\r\n  p = finger.image2Tz();\r\n  switch (p) {\r\n    case FINGERPRINT_OK:\r\n      Serial.println("Image converted");\r\n      break;\r\n    case FINGERPRINT_IMAGEMESS:\r\n      Serial.println("Image too messy");\r\n      return p;\r\n    case FINGERPRINT_PACKETRECIEVEERR:\r\n      Serial.println("Communication error");\r\n      return p;\r\n    case FINGERPRINT_FEATUREFAIL:\r\n      Serial.println("Could not find fingerprint features");\r\n      return p;\r\n    case FINGERPRINT_INVALIDIMAGE:\r\n      Serial.println("Could not find fingerprint features");\r\n      return p;\r\n    default:\r\n      Serial.println("Unknown error");\r\n      return p;\r\n  }\r\n\r\n  // OK converted!\r\n  p = finger.fingerFastSearch();\r\n  if (p == FINGERPRINT_OK) {\r\n    Serial.println("Found a print match!");\r\n  } else if (p == FINGERPRINT_PACKETRECIEVEERR) {\r\n    Serial.println("Communication error");\r\n    return p;\r\n  } else if (p == FINGERPRINT_NOTFOUND) {\r\n    Serial.println("Did not find a match");\r\n    return p;\r\n  } else {\r\n    Serial.println("Unknown error");\r\n    return p;\r\n  }\r\n\r\n  // found a match!\r\n  Serial.print("Found ID #"); Serial.print(finger.fingerID);\r\n  Serial.print(" with confidence of "); Serial.println(finger.confidence);\r\n\r\n  return finger.fingerID;\r\n}\r\n\r\n// returns -1 if failed, otherwise returns ID #\r\nint getFingerprintIDez() {\r\n  uint8_t p = finger.getImage();\r\n  if (p != FINGERPRINT_OK)  return -1;\r\n\r\n  p = finger.image2Tz();\r\n  if (p != FINGERPRINT_OK)  return -1;\r\n\r\n  p = finger.fingerFastSearch();\r\n  if (p != FINGERPRINT_OK)  return -1;\r\n\r\n  // found a match!\r\n  Serial.print("Found ID #"); Serial.print(finger.fingerID);\r\n  Serial.print(" with confidence of "); Serial.println(finger.confidence);\r\n  return finger.fingerID;\r\n}\r\n\r\n//--------------------------------END FINGERPRINT----------------------------------------------//', '<p><strong>Smart Door</strong>, adalah sebuah pintu berbasis internet of things yang cara kerjanya dapat membuka kuncinya dengan menggunakan handphone.</p>', 'project_1.png', 'FerdyHw', '2020-10-25'),
(2, 'Smart Trash', '<p>SMART TRASH</p>', '', '', '<p>TEST</p>', 'project_2.png', 'FerdyHw', '2020-10-05'),
(3, 'Smart Lamp', '<p>SMART LAMP</p>', '', '', '<p>TEST</p>', 'project_3.png', 'FerdyHw', '2020-10-05'),
(4, 'Smart Window', '<p>SMART WINDOW</p>', '', '', '<p>TEST</p>', 'project_4.png', 'FerdyHw', '2020-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `soal` text NOT NULL,
  `opsi_a` longtext NOT NULL,
  `opsi_b` longtext NOT NULL,
  `opsi_c` longtext NOT NULL,
  `opsi_d` longtext NOT NULL,
  `jawaban` enum('A','B','C','D') NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `jawaban`, `aktif`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>', '<p><strong>asd</strong></p>', '<p><strong>asdf</strong></p>', '<p><strong>asdfg</strong></p>', '<p><strong>asdfgh</strong></p>', 'A', 'Y'),
(2, '<p>Soal nomer 2</p>', '<p><strong>a</strong></p>', '<p><strong>b</strong></p>', '<p><strong>c</strong></p>', '<p><strong>d</strong></p>', 'B', 'Y'),
(3, '<p>Soal nomer 3</p>', '<p><strong>a</strong></p>', '<p><strong>b</strong></p>', '<p><strong>c</strong></p>', '<p><strong>d</strong></p>', 'C', 'Y'),
(4, '<p>Soal nomer 4</p>', '<p><strong>a</strong></p>', '<p><strong>b</strong></p>', '<p><strong>c</strong></p>', '<p><strong>d</strong></p>', 'D', 'Y'),
(5, '<p>Soal nomer 5</p>', '<p><strong>a</strong></p>', '<p><strong>b</strong></p>', '<p><strong>c</strong></p>', '<p><strong>d</strong></p>', 'A', 'Y'),
(6, '<p>Soal nomer 6</p>', '<p><strong>a</strong></p>', '<p><strong>b</strong></p>', '<p><strong>c</strong></p>', '<p><strong>d</strong></p>', 'B', 'Y'),
(7, '<p>Soal nomer 7</p>', '<p><strong>a</strong></p>', '<p><strong>b</strong></p>', '<p><strong>c</strong></p>', '<p><strong>d</strong></p>', 'C', 'Y'),
(8, '<p>Soal nomer 8</p>', '<p><strong>a</strong></p>', '<p><strong>b</strong></p>', '<p><strong>c</strong></p>', '<p><strong>d</strong></p>', 'D', 'Y'),
(9, '<p>Soal nomer 9</p>', '<p><strong>a</strong></p>', '<p><strong>b</strong></p>', '<p><strong>c</strong></p>', '<p><strong>d</strong></p>', 'A', 'Y'),
(10, '<p>Soal nomer 10</p>', '<p><strong>a</strong></p>', '<p><strong>b</strong></p>', '<p><strong>c</strong></p>', '<p><strong>d</strong></p>', 'B', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role_id` int(1) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `status` int(1) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `username`, `role_id`, `gambar`, `status`, `tanggal`) VALUES
(2, 'admin@admin.com', '$2y$10$uEbPDnIAtkgT8yQBlt6Qw.89mJZuz62wrVWs6/dyxHu5fZFbhjjC.', 'Administrator', 1, 'default.jpg', 1, '2020-09-22'),
(3, 'ferdyhwn@gmail.com', '$2y$10$t7Ck6TbwqweejlRQ4X0q6uEZJq5pYMtZSab7UodcwxmJf7orsNF96', 'FerdyHw', 2, 'Explorer.png', 0, '2020-09-28'),
(4, 'user@user.com', '$2y$10$EA/VUzVthH53/NAJAABrOeU8pYPDvzFl72RflSTW.GIDEs7sYqvq2', 'User', 2, 'Builder.png', 1, '2020-10-06'),
(5, 'cyrodilics@gmail.com', '$2y$10$lcVLJVKN2xz8poBgiF.oCO5KrbnLBXI8BC3R5siozCB8syx9pr0ne', 'CyrodilicS', 2, 'default.jpg', 0, '2020-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic`
--
ALTER TABLE `basic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic`
--
ALTER TABLE `basic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
