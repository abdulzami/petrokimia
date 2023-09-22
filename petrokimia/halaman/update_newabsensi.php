<?php
 $id	=  $_POST['id'];	
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
 	header('location:table-absensi.php');
 }
 else
 {
	 $res = $db->query("DELETE FROM pengajuan_absensi where id=$id");
	 if($res)
	 {
	 	header('location:table-absensi.php');
	 }
	 $res2 = $db->query("UPDATE periode_cuti SET saldo_cuti = $hasill1 where nik=$kd AND tahun_terbit = $d");
	 if($res2)
	 {
	 	header('location:table-absensi.php');
	 }
	 $res2 = $db->query("UPDATE periode_cuti SET saldo_cuti = $hasill2 where nik=$kd AND tahun_terbit = $d2");
	 if($res2)
	 {
	 	header('location:table-absensi.php');
	 }
 }


?>
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
$host = "localhost"; // Nama hostnya
$user = "root"; // Username
$pass = ""; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "petro"); // Koneksi ke MySQL
$nik=$_POST['nik_ky'];
$nama=$_POST['nama_ky'];
$unit=$_POST['unit_ky'];
$alasan=$_POST['alasan_ky'];
$mulai=$_POST['mulai_ky'];
$akhir=$_POST['akhir_ky'];
$ket=$_POST['ket_ky'];
$at = $_POST['atasan'];
$gila = $_POST['gila'];
$selisih = ((abs(strtotime ($mulai) - strtotime ($akhir)))/(60*60*24));
$selisihakhir = ($saldo - (abs(strtotime ($mulai) - strtotime ($akhir)))/(60*60*24));
$selisihakhir2 = ($gila - (abs(strtotime ($mulai) - strtotime ($akhir)))/(60*60*24));
$persetujuan='<div class="label label-warning">Menunggu</div>';
$sendiri = $saldo2 - $saldo2;
$ff = ((abs(strtotime ($mulai) - strtotime ($akhir)))/(60*60*24) - $saldo2);
$ff2 = $saldo - $ff;
$lebih = $saldo + $saldo2;
$nol = 0;

							if($saldo == 0){
								header('location:pengajuan-absensi.php?pesan=enol');
							}
							elseif($selisih > $lebih){
								header('location:pengajuan-absensi.php?pesan=lebih');
							}
							else{
							$query = "INSERT INTO pengajuan_absensi(nik,nama,kode_unitkerja,kode_atasan,alasan,mulai_absensi,akhir_absensi,jumlah_hari,
							tahun_sekarang,tahun_kemarin,hasil_sekarang,hasil_kemarin,keterangan,persetujuan) VALUES('".$nik."','".$nama."','".$unit."','".$at."','".$alasan."','".$mulai."','".$akhir."','".$selisih."','".$saldo."','".$saldo2."','".$ff."','".$saldo2."','".$ket."','".$persetujuan."')";
										$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
										if($sql){ // Cek jika proses simpan ke database sukses atau tidak
											// Jika Sukses, Lakukan :
											header("location: table-absensi.php"); // Redirectke halaman index.php
										}
								
							$query2 = "UPDATE periode_cuti SET saldo_cuti='$ff2' where
							nik ='$kd' and tahun_terbit ='$d'";
							$sql2 = mysqli_query($connect, $query2); 
								if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
											// Jika Sukses, Lakukan :
									header("location: table-absensi.php"); // Redirectke halaman index.php
								}
										 $query3 = "UPDATE periode_cuti SET saldo_cuti='$sendiri' where
							nik ='$kd' and tahun_terbit ='$d2'";
							$sql3 = mysqli_query($connect, $query3); 
								if($sql3){ // Cek jika proses simpan ke database sukses atau tidak
											// Jika Sukses, Lakukan :
									header("location: table-absensi.php"); // Redirectke halaman index.php
								}
							}		
?>