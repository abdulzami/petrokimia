<?php
require_once 'koneksi_delete.php';
 $id	=  $_GET['id'];						
 if(empty($id))
 {
 	header('location:table-lembur.php');
 }
 else
 {
	 $res = $db->query("DELETE FROM pengajuan_lembur where id=$id");
	 if($res)
	 {
	 	header('location:table-lembur.php');
	 }
 }


?>