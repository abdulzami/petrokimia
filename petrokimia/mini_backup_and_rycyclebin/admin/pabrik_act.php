<?php
require_once 'koneksitable.php';
$kode=$_POST['kode_ky'];
$pabrik=$_POST['pabrik_ky'];	
 $res = $db->query("UPDATE tabel_karyawan SET pabrik ='$pabrik'
		WHERE kode_karyawan='$kode'
		");
	 if($res)
	 {
	 	header('location:index.php');
	 }
?>