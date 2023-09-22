<?php
 $id	=  $_GET['id'];	
session_start();
require_once 'koneksitable.php';
$kd = $_SESSION['nik'];
$d = date("Y");
$d2 = date("Y") - 1;
$hasil = $db->QUERY("SELECT * FROM pengajuan_absensi  WHERE  id = $id");
$rows = $hasil-> fetch_All(MYSQLI_ASSOC);
$no =1;
foreach ($rows as $row):
?>
<?php $saldos =$row['hasil_sekarang'];
$saldos2 =$row['hasil_kemarin'];?>
		<?php
		$no++;
		endforeach;
		?>
<?php
$hasil = $db->QUERY("SELECT * FROM periode_cuti  WHERE  nik ='$kd' and tahun_terbit ='$d' ;");
$rows = $hasil-> fetch_All(MYSQLI_ASSOC);
$no =1;
foreach ($rows as $row):
?>
<?php $saldo =$row['saldo_cuti'];?>
		<?php
		$no++;
		endforeach;
		?>
	<?php
$hasil = $db->QUERY("SELECT * FROM periode_cuti  WHERE  nik ='$kd' and tahun_terbit ='$d2' ;");
$rows = $hasil-> fetch_All(MYSQLI_ASSOC);
$no =1;
foreach ($rows as $row):
?>
<?php $saldo2 =$row['saldo_cuti'];?>
		<?php
		$no++;
		endforeach;
		?>
		<?php
			$hasill1 = $saldos + $saldo;
			$hasill2 = $saldos2 + $saldo2;
		?>
<?php
require_once 'koneksi_delete.php';
					
 if(empty($id))
 {
 	header('location:draft_absensi.php');
 }
 else
 {
	 $res = $db->query("DELETE FROM pengajuan_absensi where id=$id");
	 if($res)
	 {
	 	header('location:draft_absensi.php');
	 }
	 $res2 = $db->query("UPDATE periode_cuti SET saldo_cuti = $hasill1 where nik=$kd AND tahun_terbit = $d");
	 if($res2)
	 {
	 	header('location:draft_absensi.php');
	 }
	 $res2 = $db->query("UPDATE periode_cuti SET saldo_cuti = $hasill2 where nik=$kd AND tahun_terbit = $d2");
	 if($res2)
	 {
	 	header('location:draft_absensi.php');
	 }
 }


?>