<?php
if ($_POST['ajukan']) 
{
	$host = "localhost"; // Nama hostnya
$user = "root"; // Username
$pass = ""; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "petro"); // Koneksi ke MySQL
$nik=$_POST['nik_ky'];
$nama=$_POST['nama_ky'];
$unit=$_POST['unit_ky'];
$proyek=$_POST['proyek_ky'];
$mulai=$_POST['mulai_ky'];
$akhir=$_POST['akhir_ky'];
$ket=$_POST['ket_ky'];
$at=$_POST['atasan'];
$tgl=$_POST['tanggal'];
$persetujuan='<div class="label label-warning">Menunggu</div>';
$query = "INSERT INTO pengajuan_lembur(nik,nama,kode_unitkerja,kode_atasan,proyek,tanggal_lembur,mulai_lembur,akhir_lembur,keterangan,persetujuan) VALUES('".$nik."','".$nama."','".$unit."','".$at."','".$proyek."','".$tgl."','".$mulai."','".$akhir."','".$ket."','".$persetujuan."')";
			$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
			
			if($sql){ // Cek jika proses simpan ke database sukses atau tidak
				// Jika Sukses, Lakukan :
				header("location: table-lembur.php"); // Redirectke halaman index.php
			}
}
else if ($_POST['draft']) 
{
$host = "localhost"; // Nama hostnya
$user = "root"; // Username
$pass = ""; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "petro"); // Koneksi ke MySQL
$nik=$_POST['nik_ky'];
$nama=$_POST['nama_ky'];
$unit=$_POST['unit_ky'];
$proyek=$_POST['proyek_ky'];
$mulai=$_POST['mulai_ky'];
$akhir=$_POST['akhir_ky'];
$ket=$_POST['ket_ky'];
$at=$_POST['atasan'];
$tgl=$_POST['tanggal'];
$persetujuan='<div class="label label-secondary">Draft</div>';
$query = "INSERT INTO pengajuan_lembur(nik,nama,kode_unitkerja,kode_atasan,proyek,tanggal_lembur,mulai_lembur,akhir_lembur,keterangan,persetujuan) VALUES('".$nik."','".$nama."','".$unit."','".$at."','".$proyek."','".$tgl."','".$mulai."','".$akhir."','".$ket."','".$persetujuan."')";
			$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
			
			if($sql){ // Cek jika proses simpan ke database sukses atau tidak
				// Jika Sukses, Lakukan :
				header("location: draft_lembur.php"); // Redirectke halaman index.php
			}

}
?>