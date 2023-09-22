<?php
require_once 'koneksi_delete.php';
 $id	=  $_GET['id'];
  $hasil = $db->QUERY("SELECT kode_karyawan FROM tabel_karyawan where id=$id ");
  $rows = $hasil-> fetch_All(MYSQLI_ASSOC);
  foreach ($rows as $row):
  $kodeku = $row['kode_karyawan'];
  endforeach;
						
 if(empty($id))
 {
 	header('location:index.php');
 }
 else
 {
	 $res = $db->query("DELETE FROM tabel_karyawan where id=$id");
	 if($res)
	 {
	 	header('location:index.php');
	 }
	 $res2 = $db->query("DELETE FROM periode_kerja where kode_karyawan=$kodeku");
	 if($res2)
	 {
	 	header('location:index.php');
	 }
 }


?>