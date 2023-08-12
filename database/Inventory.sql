SET foreign_key_checks = 0;
#
# TABLE STRUCTURE FOR: tb_barang
#

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `no_seri` varchar(50) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `jumlah_barang` varchar(50) NOT NULL,
  `thn_pengadaan` date NOT NULL,
  `distributor` varchar(50) NOT NULL,
  `penempatan_barang` varchar(50) NOT NULL,
  `hrg_barang` varchar(50) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_barang` (`id_barang`, `no_seri`, `nama_barang`, `jenis_barang`, `jumlah_barang`, `thn_pengadaan`, `distributor`, `penempatan_barang`, `hrg_barang`) VALUES (1, '001-BRG', 'Komputer HP Series AMD Rayzen 5400', 'Elektronik', '2', '2021-07-12', 'PT. ASUS TPWD', 'Ruang Administrasi', 'Rp. 7.000.000');
INSERT INTO `tb_barang` (`id_barang`, `no_seri`, `nama_barang`, `jenis_barang`, `jumlah_barang`, `thn_pengadaan`, `distributor`, `penempatan_barang`, `hrg_barang`) VALUES (17, '002-BRG', 'Display Proyektor Acer', 'Elektronik', '2', '2021-07-04', 'UNIMA', 'Ruang Informasi & Teknologi', 'Rp. 2.000.000');
INSERT INTO `tb_barang` (`id_barang`, `no_seri`, `nama_barang`, `jenis_barang`, `jumlah_barang`, `thn_pengadaan`, `distributor`, `penempatan_barang`, `hrg_barang`) VALUES (18, '003-BRG', 'Printer Cannon XP', 'Elektronik', '2', '2021-07-06', 'UNIMA', 'Ruang Direktur', 'Rp. 3.000.000');
INSERT INTO `tb_barang` (`id_barang`, `no_seri`, `nama_barang`, `jenis_barang`, `jumlah_barang`, `thn_pengadaan`, `distributor`, `penempatan_barang`, `hrg_barang`) VALUES (19, '004-BRG', 'Pulpen', 'ATK (Alat Tulis Kantor)', '5', '2021-07-21', 'UNIMA', 'Ruang Direktur', 'Rp.200.000');
INSERT INTO `tb_barang` (`id_barang`, `no_seri`, `nama_barang`, `jenis_barang`, `jumlah_barang`, `thn_pengadaan`, `distributor`, `penempatan_barang`, `hrg_barang`) VALUES (20, '005-BRG', 'HVS 1000 Shets', 'ATK (Alat Tulis Kantor)', '6', '2021-07-11', 'UNIMA', 'Ruang Informasi & Teknologi', 'Rp. 1.000.000');
INSERT INTO `tb_barang` (`id_barang`, `no_seri`, `nama_barang`, `jenis_barang`, `jumlah_barang`, `thn_pengadaan`, `distributor`, `penempatan_barang`, `hrg_barang`) VALUES (21, '006-BRG', 'Printer EPSON L300', 'Elektronik', '5', '2021-07-08', 'UNIMA', 'Ruang Direktur', 'Rp. 8.000.000');
INSERT INTO `tb_barang` (`id_barang`, `no_seri`, `nama_barang`, `jenis_barang`, `jumlah_barang`, `thn_pengadaan`, `distributor`, `penempatan_barang`, `hrg_barang`) VALUES (22, '007-BRG', 'Komputer Lenovo AMD 3', 'Elektronik', '8', '2021-07-15', 'PT LENOVO', 'Ruang Comand Center', 'Rp. 10.000.000');
INSERT INTO `tb_barang` (`id_barang`, `no_seri`, `nama_barang`, `jenis_barang`, `jumlah_barang`, `thn_pengadaan`, `distributor`, `penempatan_barang`, `hrg_barang`) VALUES (23, '008-BRG', 'Komputer Acer AMD 3', 'Elektronik', '5', '2021-07-01', 'PT LENOVO', 'Ruang Comand Center', 'Rp. 10.000.000');
INSERT INTO `tb_barang` (`id_barang`, `no_seri`, `nama_barang`, `jenis_barang`, `jumlah_barang`, `thn_pengadaan`, `distributor`, `penempatan_barang`, `hrg_barang`) VALUES (24, '009-BRG', 'Meja Rapat', 'Meja', '2', '2021-06-28', 'UNIMA', 'Ruang Direktur', 'Rp. 8.000.000');
INSERT INTO `tb_barang` (`id_barang`, `no_seri`, `nama_barang`, `jenis_barang`, `jumlah_barang`, `thn_pengadaan`, `distributor`, `penempatan_barang`, `hrg_barang`) VALUES (26, '011-BRG', 'Cap', 'ATK (Alat Tulis Kantor)', '5', '2021-07-10', 'UNIMA', 'Ruang Administrasi', 'Rp. 2.000.000');
INSERT INTO `tb_barang` (`id_barang`, `no_seri`, `nama_barang`, `jenis_barang`, `jumlah_barang`, `thn_pengadaan`, `distributor`, `penempatan_barang`, `hrg_barang`) VALUES (27, '012-BRG', 'Kertas HVS ', 'ATK (Alat Tulis Kantor)', '10', '2021-06-29', 'UNIMA', 'Ruang Administrasi', 'Rp. 10.000.000');
INSERT INTO `tb_barang` (`id_barang`, `no_seri`, `nama_barang`, `jenis_barang`, `jumlah_barang`, `thn_pengadaan`, `distributor`, `penempatan_barang`, `hrg_barang`) VALUES (28, '013-BRG', 'Air Conditioner', 'Elektronik', '5', '2021-09-02', 'Panasonic', 'Ruang Direktur', 'Rp. 8.000.000');


#
# TABLE STRUCTURE FOR: tb_kategori
#

CREATE TABLE `tb_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_kategori` (`id`, `nama_kategori`, `deskripsi`) VALUES (1, 'ATK (Alat Tulis Kantor)', 'Alat tulis untuk Karyawan');
INSERT INTO `tb_kategori` (`id`, `nama_kategori`, `deskripsi`) VALUES (2, 'Elektronik', 'Prasarana Teknologi Informasi');
INSERT INTO `tb_kategori` (`id`, `nama_kategori`, `deskripsi`) VALUES (9, 'Meja', 'Meja Tamu');


#
# TABLE STRUCTURE FOR: tb_pesan
#

CREATE TABLE `tb_pesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_pesan` (`id`, `email`, `pesan`) VALUES (1, 'admin@gmail.com', 'data barang masuk harus di sertakan kodenya !');


#
# TABLE STRUCTURE FOR: tb_ruangan
#

CREATE TABLE `tb_ruangan` (
  `id_ruangan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruangan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ruangan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_ruangan` (`id_ruangan`, `nama_ruangan`) VALUES (1, 'Ruang Direktur');
INSERT INTO `tb_ruangan` (`id_ruangan`, `nama_ruangan`) VALUES (2, 'Ruang Administrasi');
INSERT INTO `tb_ruangan` (`id_ruangan`, `nama_ruangan`) VALUES (3, 'Ruang Informasi & Teknologi');
INSERT INTO `tb_ruangan` (`id_ruangan`, `nama_ruangan`) VALUES (4, 'Ruang Comand Center');


#
# TABLE STRUCTURE FOR: tb_setting
#

CREATE TABLE `tb_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_identitas` varchar(50) NOT NULL,
  `kode_pos` varchar(50) NOT NULL,
  `title_app` varchar(50) NOT NULL,
  `judul_app` varchar(50) NOT NULL,
  `nama_company` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `warna_sistem` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_setting` (`id`, `no_identitas`, `kode_pos`, `title_app`, `judul_app`, `nama_company`, `email`, `no_telepon`, `alamat`, `warna_sistem`, `image`) VALUES (1, 'unima1', '95618', 'INVENTORI APP', 'SISTEM INFORMASI INVENTORY ', 'PASCA SARJANA UNIMA', 'pps_ptk@unima.ac.id', '+6281242291179', 'Jln Raya Tomohon-Manado, Kel. Matani 1', 'skin-purple', 'assets/img/logo/unima1.jpg');


#
# TABLE STRUCTURE FOR: tb_skins
#

CREATE TABLE `tb_skins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `warna_sistem` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_skins` (`id`, `warna_sistem`) VALUES (1, 'skin-blue');
INSERT INTO `tb_skins` (`id`, `warna_sistem`) VALUES (2, 'skin-red');
INSERT INTO `tb_skins` (`id`, `warna_sistem`) VALUES (3, 'skin-purple');
INSERT INTO `tb_skins` (`id`, `warna_sistem`) VALUES (4, 'skin-yellow');
INSERT INTO `tb_skins` (`id`, `warna_sistem`) VALUES (5, 'skin-green');
INSERT INTO `tb_skins` (`id`, `warna_sistem`) VALUES (6, 'skin-blue-light');
INSERT INTO `tb_skins` (`id`, `warna_sistem`) VALUES (7, 'skin-purple-light');
INSERT INTO `tb_skins` (`id`, `warna_sistem`) VALUES (8, 'skin-green-light');
INSERT INTO `tb_skins` (`id`, `warna_sistem`) VALUES (9, 'skin-red-light');
INSERT INTO `tb_skins` (`id`, `warna_sistem`) VALUES (10, 'skin-yellow-light');


#
# TABLE STRUCTURE FOR: tb_user
#

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_user` (`id`, `nip`, `nama`, `email`, `tempat_lahir`, `tgl_lahir`, `alamat`, `username`, `password`, `pass`, `level`, `image`) VALUES (20, '18208040', 'Administrator', 'glen@gmail.ac.id', 'Tomohon 1', '2021-07-04', 'Tomohon 1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'upload/img/profile/18208040.jpg');
INSERT INTO `tb_user` (`id`, `nip`, `nama`, `email`, `tempat_lahir`, `tgl_lahir`, `alamat`, `username`, `password`, `pass`, `level`, `image`) VALUES (21, '1111', 'Pegawai', 'pris@gmail.ac.id', 'Tondano', '2021-07-11', 'Tondano', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'pegawai', 'upload/img/profile/1111.jpg');
INSERT INTO `tb_user` (`id`, `nip`, `nama`, `email`, `tempat_lahir`, `tgl_lahir`, `alamat`, `username`, `password`, `pass`, `level`, `image`) VALUES (28, '1234', 'Glen ', 'glen@unima.ac.id', 'Manado', '2021-03-16', 'Manado', 'glen', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'admin', 'upload/img/profile/1234.jpg');
INSERT INTO `tb_user` (`id`, `nip`, `nama`, `email`, `tempat_lahir`, `tgl_lahir`, `alamat`, `username`, `password`, `pass`, `level`, `image`) VALUES (31, '22222', 'Ayu', '18208040@unima.ac.id', 'Tondano', '2021-10-31', 'Tomohon', 'user', '202cb962ac59075b964b07152d234b70', '123', 'pegawai', 'upload/img/profile/22222.jpg');


SET foreign_key_checks = 1;
