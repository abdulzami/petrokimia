<?php
require_once 'karyawan/koneksitable.php';
?>
<?
$hasil = $db->QUERY("SELECT  sum(saldo_cuti) as zami FROM periode_cuti  WHERE  nik ='1'");
$rows = $hasil-> fetch_All(MYSQLI_ASSOC);
$no =1;
foreach ($rows as $row):
?>
<?php $saldo =$row['zami'];
$selisihakhir = $saldo - 1;
?>
		<?php
		$no++;
		endforeach;
		?>
		<?
		$host = "localhost"; // Nama hostnya
$user = "root"; // Username
$pass = ""; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "petro");
		$query2 = "UPDATE periode_cuti SET saldo_cuti='$selisihakhir' where
		nik ='1'";
		$sql2 = mysqli_query($connect, $query2); 
		 	