<?php

require_once 'koneksitable.php';
$p='<a href=index.php><input type=button value=Disetujui class="btn btn-success"</a>';
$d='<div class="label label-danger">Tidak Setuju</div>';
 $id	=  $_GET['id'];
 if(empty($id))
 {
 	header('location:approve-absensi.php');
 }
 else
 {
	 	 $res = $db->query("UPDATE pengajuan_absensi SET persetujuan='$d'
		WHERE id='$id'
		");
	 if($res)
	 {
	 	header('location:approve-absensi.php');
	 }
 }


?>