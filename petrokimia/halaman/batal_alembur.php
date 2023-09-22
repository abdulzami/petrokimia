<?php

require_once 'koneksitable.php';
$p='<a href=index.php><input type=button value="Menunggu" class="btn btn-warning"</a>';
$d='<div class="label label-warning">Menunggu</div>';
 $id	=  $_GET['id'];
 if(empty($id))
 {
 	header('location:table-lembur.php');
 }
 else
 {
	 	 $res = $db->query("UPDATE pengajuan_lembur SET persetujuan='$d'
		WHERE id='$id'
		");
	 if($res)
	 {
	 	header('location:approve-lembur.php');
	 }
 }


?>