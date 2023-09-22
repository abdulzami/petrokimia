<?php
require_once 'koneksitable.php';
$kode=$_POST['kode_ky'];
$nama=$_POST['nama_ky'];
$jenis=$_POST['jenis_ky'];
$usia=$_POST['usia_ky'];
$tahun=$_POST['tahun'];
$pendidikan=$_POST['pendidikan_ky'];
$institusi=$_POST['institut_ky'];
$jurusan=$_POST['jurusan_ky'];
$usia2=50 - $usia;
$usiaakhir=$usia2 + $tahun;
$masuk=$tahun;
 $res = $db->query("UPDATE tabel_karyawan SET kode_karyawan='$kode',nama_karyawan='$nama',jenis_kelamin='$jenis',usia='$usia',pendidikan='$pendidikan',institusi_pendidikan='$institusi',jurusan='$jurusan'
		WHERE kode_karyawan='$kode'
		");
  $res2 = $db->query("UPDATE periode_kerja SET tahun_pensiun ='$usiaakhir'
		WHERE kode_karyawan='$kode'
		");
	 if($res)
	 {
	 	header('location:index.php');
	 }
	 	 if($res2)
	 {
	 	header('location:index.php');
	 }
?>