<?php
require_once 'koneksitable.php';
session_start();
$kd = $_SESSION['nik'];
if(!isset($_SESSION['key']))
{
		header('location:../index.php');

}
?>
<?php $d2 = date("Y") - 1;?>
<?php $d = date("Y");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Neon | Forms</title>
	

	<link rel="stylesheet" href="../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="../assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/neon-core.css">
	<link rel="stylesheet" href="../assets/css/neon-theme.css">
	<link rel="stylesheet" href="../assets/css/neon-forms.css">
	<link rel="stylesheet" href="../assets/css/custom.css">

	<script src="../assets/js/jquery-1.11.0.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body page-left-in" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="index.html">
					<img src="../assets/images/logo@2x.png" width="120" alt="" />
				</a>
				
			</div>
			
						<!-- logo collapse icon -->
						
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
									
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
		</header>
				
		
		
				
		
				
			
			<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<!-- Search Bar -->
			<li>
				<a href="index.php">
					<i class="entypo-gauge"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li  class="active opened active">
				<a href="">
					<i class="entypo-doc-text"></i>
					<span>Entry</span>
				</a>
				<ul>
					<li>
						<a href="pengajuan-lembur.php">
							<span>Pengajuan Lembur</span>
						</a>
					</li>
					<li   class="active opened active">
						<a href="pengajuan-absensi.php">
							<span>Pengajuan Cuti</span>
						</a>
				</ul>
			</li>
			<li>
				<a href="">
					<i class="entypo-window"></i>
					<span>Data Pengajuan</span>
				</a>
				<ul>
					<li>
						<a href="table-lembur.php">
							<span>Pengajuan Lembur</span>
						</a>
					</li>
					<li>
						<a href="table-absensi.php">
							<span>Pengajuan Cuti</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="">
					<i class="entypo-window"></i>
					<span>Data Draft Pengajuan</span>
				</a>
				<ul>
					<li>
						<a href="draft_lembur.php">
							<span>Pengajuan Lembur</span>
						</a>
					</li>
					<li>
						<a href="draft_absensi.php">
							<span>Pengajuan Cuti</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="">
					<i class="entypo-doc-text"></i>
					<span>Approve</span>
				</a>
				<ul>
					<li>
						<a href="approve-lembur.php">
							<span>Pengajuan Lembur Karyawan</span>
						</a>
					</li>
					<li>
						<a href="approve-absensi.php">
							<span>Pengajuan Cuti Karyawan</span>
						</a>
				</ul>
			</li>
						<li>
						<a href="ganti_password	.php">
						<i class="entypo-lock"></i>
							<span>Ganti Password</span>
						</a>
					</li>
					<li>
						<a href="charts.php">
						<i class="entypo-chart-bar"></i>
							<span>Chart</span>
						</a>
					</li>
		</ul>
				
	</div>	
	<div class="main-content">
		
<div class="row">
	
	<!-- Profile Info and Notifications -->
	<div class="col-md-6 col-sm-8 clearfix">
		
		<ul class="user-info pull-left pull-none-xsm">
		
						<!-- Profile Info -->
			<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
				
				<a href="profil.php">
					<?php
		$hasil = $db->QUERY("SELECT * FROM data_karyawan WHERE nik ='$kd';");
		$rows = $hasil-> fetch_All(MYSQLI_ASSOC);
		$no =1;
		foreach ($rows as $row):
						?>
		
					<img src="uploads/<?php echo $row['foto'];?>" alt="" class="img-circle" width="44" /><?php
		$no++;
		endforeach;
		?>
					<?php echo $_SESSION['nama'];?>
				</a>

			</li>
		
		</ul>
	
	</div>
	
	<!-- Raw Links -->
	<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
		<ul class="list-inline links-list pull-right">
			
			<li>
				<a href="../logout.php">
					Log Out <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
		
	</div>
	
</div>

<hr />
<?php 
if(isset($_GET['pesan'])){
	$pesan=mysql_real_escape_string($_GET['pesan']);
	if($pesan=="enol"){
		echo "<div class='alert alert-danger'>Pengajuan gagal !!    Saldo Cuti anda sudah habis!!</div>";
	}else if($pesan=="lebih"){
		echo "<div class='alert alert-warning'>Pengajuan anda gagal !!     Pengajuan anda melebihi Saldo Cuti !! </div>";
	}else if($pesan=="oke"){
		echo "<div class='alert alert-success'>Password telah berhasil di ganti </div>";
	}
}
?>
			<ol class="breadcrumb bc-3">
						<li>
				<a href="index.php"><i class="entypo-home"></i>Home</a>
			</li>
					<li>
			
						Entry
					</li>
				<li class="active">
			
							<a href="pengajuan-absensi.php"><strong>Pengajuan Cuti</strong></a>
					</li>
					</ol>
			
<h2>Pengajuan Cuti</h2>					<?php

		$hasil = $db->QUERY("SELECT saldo_cuti FROM periode_cuti WHERE  nik ='$kd' AND tahun_terbit = '$d';");
		$rows = $hasil-> fetch_All(MYSQLI_ASSOC);
		$no =1;
		foreach ($rows as $row):
						?>
		
					<a title="Saldo Cuti Tahun <?php echo $d ?> "><div class="label label-secondary"><?php echo $row['saldo_cuti']; ?></div></a><?php
		$no++;
		endforeach;
		?>
		<?php $hasil = $db->QUERY("SELECT saldo_cuti FROM periode_cuti WHERE  nik ='$kd' AND tahun_terbit = '$d2';");
		$rows = $hasil-> fetch_All(MYSQLI_ASSOC);
		$no =1;
		foreach ($rows as $row):
						?>
		
					<a title="Saldo Cuti Tahun <?php echo $d2 ?> "><div class="label label-success"><?php echo $row['saldo_cuti']; ?></div></a><?php
		$no++;
		endforeach;
		?>
<br />




<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Entry
				</div>
				
				<div class="panel-options">
					
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">
				
				<form role="form" method="POST" class="form-horizontal form-groups-bordered" action="act-absensi.php">
					<div class="form-group">
						<label for="field-3" class="col-sm-3 control-label">Alasan</label>
						
						<div class="col-sm-5">
							<textarea class="form-control" name="alasan_ky" required /></textarea>
							<input type="hidden" class="form-control" id="field-1" name="nik_ky" value="<?php echo $_SESSION['nik'];?>" readonly />
							<input type="hidden" class="form-control" id="field-2" name="nama_ky" value="<?php echo $_SESSION['nama'];?>" readonly />
							<input type="hidden" class="form-control" id="field-2" name="unit_ky" value="<?php echo $_SESSION['kode_unitkerja'];?>" readonly />
							<?php $kdku = $_SESSION['kode_unitkerja'];?>
					<?php

		$hasil = $db->QUERY("SELECT kode_atasan FROM  tabel_unitkerja WHERE  kode_unit ='$kdku';");
		$rows = $hasil-> fetch_All(MYSQLI_ASSOC);
		$no =1;
		foreach ($rows as $row):
						?>
		
					<input type="hidden" class="form-control" name="atasan" value="<?php echo $row['kode_atasan'];?>" readonly /><?php
		$no++;
		endforeach;
		?>
							<?php

		$hasil = $db->QUERY("SELECT saldo_cuti FROM periode_cuti WHERE nik ='$kd' AND tahun_terbit ='$d';");
		$rows = $hasil-> fetch_All(MYSQLI_ASSOC);
		$no =1;
		foreach ($rows as $row):
						?>
		
					<input type="hidden" class="form-control" name="gila" value="<?php echo $row['saldo_cuti'];?>" readonly /><?php
		$no++;
		endforeach;
		?>

						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Mulai Tanggal</label>
						
						<div class="col-sm-5">
							<input type="date" class="form-control" name="mulai_ky" required />
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Sampai Tanggal</label>
						
						<div class="col-sm-5">
							<input type="date" class="form-control" name="akhir_ky" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Keterangan</label>
						
						<div class="col-sm-5">
							<textarea class="form-control" id="field-ta" name="ket_ky" required /></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" value="ajukan" name="ajukan" class="btn btn-green btn-icon">Ajukan<i class="entypo-forward"></i></button>
							<button type="submit" value="draft" name="draft" class="btn btn-blue btn-icon">Draft<i class="entypo-reply"></i></button>
							<button type="reset" class="btn btn-orange btn-icon">Reset<i class="entypo-arrows-ccw"></i></button>
						</div>
					</div>
				</form>
				
			</div>
		
		</div>
	
	</div>
</div>

                        <footer class="main">
	
		
	&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="https://www.facebook.com/abdul.zami" target="_blank">XI RPL 1</a>
	
</footer>







	<!-- Bottom Scripts -->
	<script src="../assets/js/gsap/main-gsap.js"></script>
	<script src="../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="../assets/js/bootstrap.js"></script>
	<script src="../assets/js/joinable.js"></script>
	<script src="../assets/js/resizeable.js"></script>
	<script src="../assets/js/neon-api.js"></script>
	<script src="../assets/js/bootstrap-switch.min.js"></script>
	<script src="../assets/js/neon-chat.js"></script>
	<script src="../assets/js/neon-custom.js"></script>
	<script src="../assets/js/neon-demo.js"></script>

</body>
</html>