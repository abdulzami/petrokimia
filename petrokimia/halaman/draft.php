<?php

require_once 'koneksitable.php';
$p='<a href=index.php><input type=button value=Disetujui class="btn btn-success"</a>';
$d='<div class="label label-secondary">Draft</div>';
 $id	=  $_GET['id'];
 if(empty($id))
 {
 	header('location:draft_lembur.php');
 }
 else
 {
	 	 $res = $db->query("UPDATE pengajuan_lembur SET persetujuan='$d'
		WHERE id='$id'
		");
	 if($res)
	 {
	 	header('location:draft_lembur.php');
	 }
 }


?>