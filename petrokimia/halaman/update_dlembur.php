<?php
require_once 'koneksitable.php';
$proyek=$_POST['proyek_ky'];
$mulai=$_POST['mulai_ky'];
$akhir=$_POST['akhir_ky'];
$ket=$_POST['ket_ky'];
$tgl=$_POST['tanggal'];
$id = $_POST['id_ky'];
  $res = $db->query("UPDATE pengajuan_lembur SET proyek='$proyek',tanggal_lembur='$tgl',mulai_lembur='$mulai',akhir_lembur='$akhir',keterangan='$ket'
		WHERE id='$id'
		");
	 if($res)
	 {
	 	header('location:draft_lembur.php');
	 }
?>