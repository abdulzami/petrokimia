/*
SQLyog Ultimate v12.08 (32 bit)
MySQL - 5.5.16 : Database - petro
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`petro` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `petro`;

/*Table structure for table `data_karyawan` */

DROP TABLE IF EXISTS `data_karyawan`;

CREATE TABLE `data_karyawan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nik` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `pendidikan` enum('SMA','SMK','D3','S1','S2','S3') DEFAULT NULL,
  `institut_pendidikan` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `usia` int(3) DEFAULT NULL,
  `kode_unitkerja` int(7) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `foto` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`,`nik`),
  KEY `kode_unitkerja` (`kode_unitkerja`),
  KEY `nik` (`nik`),
  KEY `nik_2` (`nik`),
  CONSTRAINT `data_karyawan_ibfk_1` FOREIGN KEY (`kode_unitkerja`) REFERENCES `tabel_unitkerja` (`kode_unit`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `data_karyawan` */

insert  into `data_karyawan`(`id`,`nik`,`nama`,`jenis_kelamin`,`pendidikan`,`institut_pendidikan`,`jurusan`,`usia`,`kode_unitkerja`,`username`,`password`,`foto`) values (8,1,'Abdul Aziz Zam Zami','Laki-laki','S3','ITB','Informatika',37,111000,'zami','zami','thumb_a_good_day_wallpaper_by_rimz1dnk.jpg'),(9,2,'Abdoel Bojez','Laki-laki','S2','ITS','Psikolog',36,111100,'bojez','bojez','noimage.jpg'),(11,4,'Habib','Laki-laki','SMK','SMK SEMEN','Mesin',25,110000,'habib','habib','thumb_color-splash-2.jpg');

/*Table structure for table `pengajuan_absensi` */

DROP TABLE IF EXISTS `pengajuan_absensi`;

CREATE TABLE `pengajuan_absensi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nik` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kode_unitkerja` int(10) DEFAULT NULL,
  `kode_atasan` int(10) DEFAULT NULL,
  `alasan` varchar(100) DEFAULT NULL,
  `mulai_absensi` varchar(30) DEFAULT NULL,
  `akhir_absensi` varchar(30) DEFAULT NULL,
  `jumlah_hari` int(2) DEFAULT NULL,
  `tahun_sekarang` int(2) DEFAULT NULL,
  `tahun_kemarin` int(2) DEFAULT NULL,
  `hasil_sekarang` int(2) DEFAULT NULL,
  `hasil_kemarin` int(2) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `persetujuan` varchar(500) DEFAULT NULL,
  `waktu_mengajukan` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`nik`),
  KEY `nik` (`nik`),
  CONSTRAINT `pengajuan_absensi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_karyawan` (`nik`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `pengajuan_absensi` */

insert  into `pengajuan_absensi`(`id`,`nik`,`nama`,`kode_unitkerja`,`kode_atasan`,`alasan`,`mulai_absensi`,`akhir_absensi`,`jumlah_hari`,`tahun_sekarang`,`tahun_kemarin`,`hasil_sekarang`,`hasil_kemarin`,`keterangan`,`persetujuan`,`waktu_mengajukan`) values (14,1,'Abdul Aziz Zam Zami',111000,110000,'keperluan keluarga','2017-04-05','2017-04-09',4,12,12,0,4,'-','<div class=\"label label-warning\">Menunggu</div>','2017-05-29 21:08:56');

/*Table structure for table `pengajuan_lembur` */

DROP TABLE IF EXISTS `pengajuan_lembur`;

CREATE TABLE `pengajuan_lembur` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nik` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kode_unitkerja` int(10) DEFAULT NULL,
  `kode_atasan` int(10) DEFAULT NULL,
  `proyek` varchar(100) DEFAULT NULL,
  `tanggal_lembur` varchar(100) DEFAULT NULL,
  `mulai_lembur` varchar(30) DEFAULT NULL,
  `akhir_lembur` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `persetujuan` varchar(500) DEFAULT NULL,
  `waktu_mengajukan` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`nik`),
  KEY `nik` (`nik`),
  CONSTRAINT `pengajuan_lembur_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_karyawan` (`nik`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `pengajuan_lembur` */

insert  into `pengajuan_lembur`(`id`,`nik`,`nama`,`kode_unitkerja`,`kode_atasan`,`proyek`,`tanggal_lembur`,`mulai_lembur`,`akhir_lembur`,`keterangan`,`persetujuan`,`waktu_mengajukan`) values (2,1,'Abdul Aziz Zam Zami',111000,110000,'membuat WEB','2017-02-09','18:00','00:00','mohon izin','<div class=\"label label-warning\">Menunggu</div>','2017-05-29 21:07:11');

/*Table structure for table `periode_cuti` */

DROP TABLE IF EXISTS `periode_cuti`;

CREATE TABLE `periode_cuti` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nik` int(10) NOT NULL,
  `tanggal_terbit` date DEFAULT NULL,
  `tanggal_expired` date DEFAULT NULL,
  `saldo_cuti` int(11) DEFAULT NULL,
  `tahun_terbit` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`,`nik`),
  KEY `nik` (`nik`),
  CONSTRAINT `periode_cuti_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_karyawan` (`nik`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `periode_cuti` */

insert  into `periode_cuti`(`id`,`nik`,`tanggal_terbit`,`tanggal_expired`,`saldo_cuti`,`tahun_terbit`) values (1,1,'2017-01-01','2019-01-01',12,2017),(2,2,'2017-01-01','2019-01-01',12,2017),(4,4,'2017-01-01','2019-01-01',12,2017),(9,1,'2016-01-01','2018-01-01',8,2016);

/*Table structure for table `periode_kerja` */

DROP TABLE IF EXISTS `periode_kerja`;

CREATE TABLE `periode_kerja` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nik` int(10) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `tahun_masuk` int(4) DEFAULT NULL,
  `tahun_pensiun` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`,`nik`),
  KEY `nik` (`nik`),
  KEY `nik_2` (`nik`),
  CONSTRAINT `periode_kerja_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_karyawan` (`nik`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `periode_kerja` */

insert  into `periode_kerja`(`id`,`nik`,`status`,`tahun_masuk`,`tahun_pensiun`) values (1,1,'lama',1991,2030),(2,2,'lama',1990,2031),(4,4,'baru',2017,2042);

/*Table structure for table `tabel_bagian` */

DROP TABLE IF EXISTS `tabel_bagian`;

CREATE TABLE `tabel_bagian` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode_bagian` int(7) NOT NULL,
  `nama_bagian` varchar(100) DEFAULT NULL,
  `kode_atasan` int(7) DEFAULT NULL,
  PRIMARY KEY (`id`,`kode_bagian`),
  KEY `kode_bagian` (`kode_bagian`),
  KEY `kode_atasa` (`kode_atasan`),
  CONSTRAINT `tabel_bagian_ibfk_1` FOREIGN KEY (`kode_atasan`) REFERENCES `tabel_departemen` (`kode_departemen`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tabel_bagian` */

insert  into `tabel_bagian`(`id`,`kode_bagian`,`nama_bagian`,`kode_atasan`) values (9,1111,'web',111);

/*Table structure for table `tabel_departemen` */

DROP TABLE IF EXISTS `tabel_departemen`;

CREATE TABLE `tabel_departemen` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode_departemen` int(7) NOT NULL,
  `nama_departemen` varchar(100) DEFAULT NULL,
  `kode_atasan` int(7) DEFAULT NULL,
  PRIMARY KEY (`id`,`kode_departemen`),
  UNIQUE KEY `kode_departemen` (`kode_departemen`),
  KEY `tabel_departemen_ibfk_1` (`kode_atasan`),
  CONSTRAINT `tabel_departemen_ibfk_1` FOREIGN KEY (`kode_atasan`) REFERENCES `tabel_kompartemen` (`kode_kompartemen`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tabel_departemen` */

insert  into `tabel_departemen`(`id`,`kode_departemen`,`nama_departemen`,`kode_atasan`) values (7,111,'ti',11);

/*Table structure for table `tabel_direktorat` */

DROP TABLE IF EXISTS `tabel_direktorat`;

CREATE TABLE `tabel_direktorat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode_direktorat` int(7) NOT NULL,
  `nama_direktorat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`,`kode_direktorat`),
  UNIQUE KEY `kode_direktorat` (`kode_direktorat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tabel_direktorat` */

insert  into `tabel_direktorat`(`id`,`kode_direktorat`,`nama_direktorat`) values (3,1,'pengembangan');

/*Table structure for table `tabel_kompartemen` */

DROP TABLE IF EXISTS `tabel_kompartemen`;

CREATE TABLE `tabel_kompartemen` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode_kompartemen` int(7) NOT NULL,
  `nama_kompartemen` varchar(100) DEFAULT NULL,
  `kode_atasan` int(7) DEFAULT NULL,
  PRIMARY KEY (`id`,`kode_kompartemen`),
  KEY `kode_atasan` (`kode_atasan`),
  KEY `kode_kompartemen` (`kode_kompartemen`),
  CONSTRAINT `tabel_kompartemen_ibfk_1` FOREIGN KEY (`kode_atasan`) REFERENCES `tabel_direktorat` (`kode_direktorat`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tabel_kompartemen` */

insert  into `tabel_kompartemen`(`id`,`kode_kompartemen`,`nama_kompartemen`,`kode_atasan`) values (10,11,'pengembangan informasi',1);

/*Table structure for table `tabel_regu` */

DROP TABLE IF EXISTS `tabel_regu`;

CREATE TABLE `tabel_regu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode_regu` int(7) NOT NULL,
  `nama_regu` varchar(100) DEFAULT NULL,
  `kode_atasan` int(7) DEFAULT NULL,
  PRIMARY KEY (`id`,`kode_regu`),
  KEY `kode_atasan` (`kode_atasan`),
  CONSTRAINT `tabel_regu_ibfk_1` FOREIGN KEY (`kode_atasan`) REFERENCES `tabel_seksi` (`kode_seksi`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tabel_regu` */

insert  into `tabel_regu`(`id`,`kode_regu`,`nama_regu`,`kode_atasan`) values (2,111111,'html',11111);

/*Table structure for table `tabel_seksi` */

DROP TABLE IF EXISTS `tabel_seksi`;

CREATE TABLE `tabel_seksi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode_seksi` int(7) NOT NULL,
  `nama_seksi` varchar(100) DEFAULT NULL,
  `kode_atasan` int(7) DEFAULT NULL,
  PRIMARY KEY (`id`,`kode_seksi`),
  KEY `kode_seksi` (`kode_seksi`),
  KEY `tabel_seksi_ibfk_2` (`kode_atasan`),
  CONSTRAINT `tabel_seksi_ibfk_2` FOREIGN KEY (`kode_atasan`) REFERENCES `tabel_bagian` (`kode_bagian`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tabel_seksi` */

insert  into `tabel_seksi`(`id`,`kode_seksi`,`nama_seksi`,`kode_atasan`) values (2,11111,'pelatihan',1111);

/*Table structure for table `tabel_unitkerja` */

DROP TABLE IF EXISTS `tabel_unitkerja`;

CREATE TABLE `tabel_unitkerja` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode_unit` int(7) NOT NULL,
  `nama_unitkerja` varchar(100) DEFAULT NULL,
  `kode_atasan` int(7) DEFAULT NULL,
  `jenis_unitkerja` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`,`kode_unit`),
  UNIQUE KEY `kode_unit` (`kode_unit`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tabel_unitkerja` */

insert  into `tabel_unitkerja`(`id`,`kode_unit`,`nama_unitkerja`,`kode_atasan`,`jenis_unitkerja`) values (3,100000,'Pengembangan',0,'Direktorat'),(4,110000,'Pengembangan Informasi',100000,'Kompartemen'),(5,111000,'TI',110000,'Departemen'),(6,111100,'Web Aplikasi',111000,'Bagian'),(7,111110,'Pelatihan',111100,'Seksi'),(8,111111,'HTML',111111,'Regu');

/*Table structure for table `usia` */

DROP TABLE IF EXISTS `usia`;

CREATE TABLE `usia` (
  `usia` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usia` */

insert  into `usia`(`usia`) values ('21-30'),('31-35'),('36-40'),('41-45'),('46-50'),('>50');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
