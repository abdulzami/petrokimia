<?php
$host = "localhost"; // Nama hostnya
$user = "root"; // Username
$pass = ""; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "petrokimia"); // Koneksi ke MySQL
$kode=$_POST['kode_ky'];
$nama=$_POST['nama_ky'];
$jenis=$_POST['jenis_ky'];
$usia=$_POST['usia_ky'];
$tahun=$_POST['tahun'];
$pendidikan=$_POST['pendidikan_ky'];
$institusi=$_POST['institut_ky'];
$jurusan=$_POST['jurusan_ky'];
$usia2=50 - $usia;
$usiaakhir=$usia2 + $tahun;
$masuk=$tahun;
$query = "INSERT INTO tabel_karyawan(kode_karyawan,nama_karyawan,jenis_kelamin,usia,pendidikan,institusi_pendidikan,jurusan,foto) VALUES('".$kode."','".$nama."','".$jenis."','".$usia."','".$pendidikan."','".$institusi."','".$jurusan."','noimage.jpg')";
$query2 = "INSERT INTO periode_kerja(kode_karyawan,status_karyawan,tahun_masuk,tahun_pensiun) VALUES('".$kode."','baru','".$masuk."','".$usiaakhir."')";
			$sql = mysqli_query($connect, $query);
			$sql2 = mysqli_query($connect, $query2); // Eksekusi/ Jalankan query dari variabel $query
			
			if($sql){ // Cek jika proses simpan ke database sukses atau tidak
				// Jika Sukses, Lakukan :
				header("location: index.php"); // Redirectke halaman index.php
			}
						elseif($sql2){ // Cek jika proses simpan ke database sukses atau tidak
				// Jika Sukses, Lakukan :
				header("location: index.php"); // Redirectke halaman index.php
			}
?>