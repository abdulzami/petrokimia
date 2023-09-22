<?php
require_once 'koneksitable.php';
$kode=$_POST['kode_ky'];
$level=$_POST['level_ky'];
$user=$_POST['user_ky'];
$pass=$_POST['pass_ky'];	
 $res = $db->query("UPDATE tabel_karyawan SET username='$user',password='$pass',level='$level'
		WHERE kode_karyawan='$kode'
		");
	 if($res)
	 {
	 	header('location:index.php');
	 }
?>