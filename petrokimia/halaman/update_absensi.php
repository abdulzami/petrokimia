<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<?php
session_start();
require_once 'koneksitable.php';
$kd = $_SESSION['nik'];
$d = date("Y");
$d2 = date("Y") - 1;
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
$id = $_POST['id_ky'];
$kd = $_SESSION['nik'];
$d = date("Y");
$d2 = date("Y") - 1;
$hasil = $db->QUERY("SELECT * FROM pengajuan_absensi  WHERE  id =  $id;");
$rows = $hasil-> fetch_All(MYSQLI_ASSOC);
$no =1;
foreach ($rows as $row):
?>
<?php $ts =$row['tahun_sekarang'];
$tk =$row['tahun_kemarin'];
$hs =$row['hasil_sekarang'];
$hk =$row['hasil_kemarin'];?>
		<?php
		$no++;
		endforeach;
		?>
<?php
require_once 'koneksitable.php';

$proyek=$_POST['alasan_ky'];
$mulai=$_POST['mulai_ky'];
$akhir=$_POST['akhir_ky'];
$ket=$_POST['ket_ky'];
$gila = $_POST['gila'];
$selisih = ((abs(strtotime ($mulai) - strtotime ($akhir)))/(60*60*24));
$selisihakhir = ($ts - (abs(strtotime ($mulai) - strtotime ($akhir)))/(60*60*24));
$selisihakhir2 = ($gila - (abs(strtotime ($mulai) - strtotime ($akhir)))/(60*60*24));
$persetujuan='<div class="label label-warning">Menunggu</div>';
$sendiri = $tk - $tk;
$ff = ((abs(strtotime ($mulai) - strtotime ($akhir)))/(60*60*24) - $tk);
$ff2 = $ts - $ff;
$lebih = $ts + $tk;
$nol = 0;
$dua = 12;

if ($gila < $selisih) {
							if($ts == 0){
								header('location:table-absensi.php?pesan=enol?id = $id');
							}
							elseif($selisih > $lebih){
								header('location:table-absensi.php?pesan=lebih');
							}
							else{

								 $res = $db->query("UPDATE pengajuan_absensi SET alasan='$proyek',mulai_absensi='$mulai',akhir_absensi='$akhir',keterangan='$ket', jumlah_hari = $selisih, hasil_sekarang = $ff, hasil_kemarin = $tk
										WHERE id='$id'
										");
								 $onesatu = $hs - $ff;
								 $onesatu1 = $saldo + $onesatu;
								 $onedua = $hk - $tk;
								 $onedua2 = $saldo2 + $onedua;

									 if($res)
									 {
									 	header('location:table-absensi.php');
									 }
									 $res2 = $db->query("UPDATE periode_cuti SET saldo_cuti='$onesatu1' where
										nik ='$kd' and tahun_terbit ='$d'");
									 if($res2)
									 {
									 	header('location:table-absensi.php');
									 }
									 $res3 = $db->query("UPDATE periode_cuti SET saldo_cuti='$onedua2' where
							nik ='$kd' and tahun_terbit ='$d2'");
									 if($res3)
									 {
									 	header('location:table-absensi.php');
									 }
							}		
							
							
	}
	elseif($selisih == $hk){

							if($ts == 0){
								header('location:table-absensi.php?pesan=enol');
							}
							elseif($selisih > $lebih){
								header('location:table-absensi.php?pesan=lebih');
							}
							else{
							 $res = $db->query("UPDATE pengajuan_absensi SET alasan='$proyek',mulai_absensi='$mulai',akhir_absensi='$akhir',keterangan='$ket'
										WHERE id='$id'
										");
									 if($res)
									 {
									 	header('location:table-absensi.php');
									 }
							 }		
			}
elseif($gila > $selisih){

							if($ts == 0){
								header('location:table-absensi.php?pesan=enol');
							}
							elseif($selisih > $lebih){
								header('location:table-absensi.php?pesan=lebih');
							}
							else{
							 $res = $db->query("UPDATE pengajuan_absensi SET alasan='$proyek',mulai_absensi='$mulai',akhir_absensi='$akhir',keterangan='$ket', jumlah_hari = $selisih, hasil_sekarang = $nol, hasil_kemarin = $selisih
										WHERE id='$id'
										");
							 	 $twosatu = $hs - $nol;
								 $twosatu1 = $saldo + $twosatu;
								 $twodua = $hk - $selisih;
								 $twodua2 = $saldo2 + $twodua;
									 if($res)
									 {
									 	header('location:table-absensi.php');
									 }
									 $res3 = $db->query("UPDATE periode_cuti SET saldo_cuti='$twosatu1' where
									nik ='$kd' and tahun_terbit ='$d'");
									 if($res3)
									 {
									 	header('location:table-absensi.php');
									 }
									 $res2 = $db->query("UPDATE periode_cuti SET saldo_cuti='$twodua2' where
									nik ='$kd' and tahun_terbit ='$d2'");
									 if($res2)
									 {
									 	header('location:table-absensi.php');
									 }
							 }		
			}
			
			elseif($gila == 0){

							if($ts == 0){
								header('location:table-absensi.php?pesan=enol');
							}
							elseif($selisih > $lebih){
								header('location:table-absensi.php?pesan=lebih');
							}
							else{
							 $res = $db->query("UPDATE pengajuan_absensi SET alasan='$proyek',mulai_absensi='$mulai',akhir_absensi='$akhir',keterangan='$ket', jumlah_hari = $selisih, hasil_sekarang = $selisih, hasil_kemarin = $nol
										WHERE id='$id'
										");
							 		$treesatu = $hs - $selisih;
								 $treesatu1 = $saldo + $treesatu;
								 $treedua = $hk - $nol;
								 $treedua2 = $saldo2 + $treedua;
									 if($res)
									 {
									 	header('location:table-absensi.php');
									 }
							 			$res2 = $db->query("UPDATE periode_cuti SET saldo_cuti='$treesatu1' where
										nik ='$kd' and tahun_terbit ='$d'");
									 if($res2)
									 {
									 	header('location:table-absensi.php');
									 }
									 $res2 = $db->query("UPDATE periode_cuti SET saldo_cuti='$treedua2' where
										nik ='$kd' and tahun_terbit ='$d2'");
									 if($res2)
									 {
									 	header('location:table-absensi.php');
									 }

							 }		
			}
						else {

							if($ts == 0){
								header('location:table-absensi.php?pesan=enol');
							}
							elseif($selisih > $lebih){
								header('location:table-absensi.php?pesan=lebih');
							}
							else{
							 $res = $db->query("UPDATE pengajuan_absensi SET alasan='$proyek',mulai_absensi='$mulai',akhir_absensi='$akhir',keterangan='$ket', jumlah_hari = $selisih, hasil_sekarang = $selisih, hasil_kemarin = $nol
										WHERE id='$id'
										");
									 if($res)
									 {
									 	header('location:table-absensi.php');
									 }
							 $res2 = $db->query("UPDATE periode_cuti SET saldo_cuti='$selisihakhir' where
							nik ='$kd' and tahun_terbit ='$d'");
									 if($res2)
									 {
									 	header('location:table-absensi.php');
									 }
							 }		
			}

 /*$res = $db->query("UPDATE pengajuan_absensi SET alasan='$proyek',mulai_absensi='$mulai',akhir_absensi='$akhir',keterangan='$ket'
		WHERE id='$id'
		");
	 if($res)
	 {
	 	header('location:table-absensi.php');
	 }*/
?>
