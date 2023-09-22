<?php
	
	if(isset($_POST['login'])){
		include 'koneksi.php';
		$username = $_POST['username'];
		$pass     = $_POST['password'];

		$cek = mysqli_query($conn, "SELECT * from data_karyawan where username = '". $username ."' AND password = '". $pass ."' ");
		$data = mysqli_fetch_array($cek);
		$nama_pelogin = $data['nama'];
		$kodeunit_pelogin = $data['kode_unitkerja'];
		$nik_pelogin = $data['nik'];
		$jk_pelogin = $data['jenis_kelamin'];
		$pend_pelogin = $data['pendidikan'];
		$ipend_pelogin = $data['institut_pendidikan'];
		$jurusan_pelogin = $data['jurusan'];
		$usia_pelogin = $data['usia'];

		if(mysqli_num_rows($cek) > 0){

			session_start();
			$_SESSION['key'] = md5(time());
			$_SESSION['keyye'] = md5(time());
 			$_SESSION['nama'] = $nama_pelogin;
			$_SESSION['kode_unitkerja'] = $kodeunit_pelogin;
			$_SESSION['nik'] = $nik_pelogin;
			$_SESSION['jk'] = $jk_pelogin;
			$_SESSION['pend'] = $pend_pelogin;
			$_SESSION['ipend'] = $ipend_pelogin;
			$_SESSION['jurusan'] = $jurusan_pelogin;
			$_SESSION['usia'] = $usia_pelogin;

				if(isset($_POST['remember'])){
				setcookie('username',$username,time()+60*60*7);
				setcookie('password',$pass,time()+60*60*7);
				header('location:halaman/index.php');
				}
				header('location:halaman/index.php');
		}else{
			header("location:index.php?pesan=gagal")or die(mysql_error());
		}

	}
?>