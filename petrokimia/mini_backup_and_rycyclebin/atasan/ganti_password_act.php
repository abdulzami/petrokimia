<?php 
include 'config.php';
$user=$_POST['user'];
$lama=$_POST['lama'];
$baru=$_POST['baru'];
$ulang=$_POST['ulang'];
$kode=$_POST['kode_ky'];
	
$cek=mysql_query("select * from tabel_karyawan where password='$lama' and kode_karyawan='$kode'");
if(mysql_num_rows($cek)==1){
	if($baru==$ulang){
		$b = $baru;
		mysql_query("update tabel_karyawan set password='$b' where kode_karyawan='$kode'");
		header("location:ganti_password.php?pesan=oke");
	}else{
		header("location:ganti_password.php?pesan=tdksama");
	}
}else{
	header("location:ganti_password.php?pesan=gagal");
}

 ?>	