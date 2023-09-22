<?php
$host = "localhost"; // Nama hostnya
$user = "root"; // Username
$pass = ""; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "petro");
require_once 'koneksitable.php';
$d = date("Y");
$d2 = date("Y") - 1;
$hasil = $db->QUERY("SELECT SUM(saldo_cuti) as lol FROM periode_cuti WHERE nik = '1'");
$rows = $hasil-> fetch_All(MYSQLI_ASSOC);
$no =1;
foreach ($rows as $row):
?>
<?php $saldo =$row['lol'];?>
		<?php
		$no++;
		endforeach;
		?>
<?php
$zami = $saldo -5;
$query2 = "UPDATE periode_cuti SET saldo_cuti='$zami' where
							nik ='1'";
							$sql2 = mysqli_query($connect, $query2); 
								if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
											// Jika Sukses, Lakukan :
									header("location: table-absensi.php"); // Redirectke halaman index.php
								}
?>