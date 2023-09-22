<?php
include 'koneksitable.php';
session_start();
if(!isset($_SESSION['key']))
{
		header('location:../index.php');

}
$kd=$_SESSION['kode'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Neon | Dashboard</title>
	

	<link rel="stylesheet" href="../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="../assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="../http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
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
<body class="page-body  page-fade-only" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="index.html">
					<img width="120" src="../assets/images/logo@2x.png" />
				</a><br><br><div class="label label-success">Admin</div>

			</div>
			
			
						<!-- logo collapse icon -->
						
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
		</header>

		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<!-- Search Bar -->
			<li class="active opened active">
				<a href="index.php">
					<i class="entypo-gauge"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="">
					<i class="entypo-window"></i>
					<span>Data Karyawan</span>
				</a>
				<ul>
					<li>
						<a href="karyawan_baru.php">
							<span>Karyawan Baru Masuk</span>
						</a>
					</li>
					<li>
						<a href="karyawan_lama.php">
							<span>Karyawan Lama</span>
						</a>
				</ul>
			</li>
			<li>
				<a href="data_atasan.php">
					<i class="entypo-window"></i>
					<span>Data Atasan</span>
				</a>
			</li>
			<li>
				<a href="entry_karyawan.php">
					<i class="entypo-user-add"></i>
					<span>Entry Karyawan</span>
				</a>
			</li>
			<li>
				<a href="charts.php">
					<i class="entypo-chart-bar"></i>
					<span>Chart</span>
				</a>
			</li>
			<li>
				<a href="sign_up.php">
					<i class="entypo-vcard"></i>
					<span>Sign Up</span>
				</a>
			</li>
			<li>
				<a href="penentuan_pabrik.php">
					<i class="entypo-publish	"></i>
					<span>Penentuan Pabrik</span>
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
		$hasil = $db->QUERY("SELECT * FROM tabel_karyawan WHERE  kode_karyawan ='$kd';");
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
			<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

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

<hr/><br>
<div class="row">
	<div class="col-sm-3">
	
		<div class="tile-title tile-pink">
			
			<div class="icon">
				<i class="glyphicon glyphicon-file"></i>
			</div>
			
			<div class="title">
			<a href="karyawan_baru.php">
				<h3>Data Karyawan</h3>
				<p>Karyawan Baru Masuk</p>
				</a>
			</div>
		</div>

	</div>
	
	<div class="col-sm-3">
	
		
		<div class="tile-title tile-plum">
			
			<div class="icon">
				<i class="glyphicon glyphicon-file"></i>
			</div>
			
			<div class="title">
			<a href="karyawan_lama.php">
				<h3>Data Karyawan</h3>
				<p>Karyawan Lama</p>
			</a>
			</div>
		</div>
	
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-title tile-orange">
			
			<div class="icon">
				<i class="glyphicon glyphicon-file"></i>
			</div>
			
			<div class="title">
			<a href="data_atasan.php">
				<h3>Data</h3>
				<p>Atasan</p>
			</a>
			</div>
		</div>
	
	</div>

	<div class="col-sm-3">
	
		<div class="tile-title tile-blue">
			
			<div class="icon">
				<i class="entypo-user-add"></i>
			</div>
			
			<div class="title">
			<a href="entry_karyawan.php">
				<h3>Entry</h3>
				<p>Karyawan</p>
				</a>
			</div>
		</div>
	</div>
</div><br>
<div class="row">
	<div class="col-sm-4">
	
		<div class="tile-title tile-primary">
			
			<div class="icon">
				<i class="entypo-chart-bar"></i>
			</div>
			
			<div class="title">
			<a href="charts.php">
				<h3>Chart</h3>
				<p>Petrokimia Gresik</p>
				</a>
			</div>
		</div>

	</div>
	
	<div class="col-sm-4">
	
		
		<div class="tile-title tile-gray">
			
			<div class="icon">
				<i class="entypo-vcard"></i>
			</div>
			
			<div class="title">
			<a href="sign_up.php">
				<h3>Sign Up</h3>
				<p>Daftar Pengguna Web</p>
			</a>
			</div>
		</div>
	
	</div>
	
	<div class="col-sm-4">
	
		<div class="tile-title tile-brown">
			
			<div class="icon">
				<i class="entypo-publish"></i>
			</div>
			
			<div class="title">
			<a href="penentuan_pabrik.php">
				<h3>Penentunan Pabrik</h3>
				<p>Karyawan atau Atasan</p>
			</a>
			</div>
		</div>
	
	</div>
</div>
<!--
<div>
<div class="container">
	<div class="col-sm-2">
	
		<div class="tile-title tile-pink">
			
			<div class="icon">
				<i class="entypo-doc-text"></i>
			</div>
			
			<div class="title">
			<a href="approve-lembur.php">
				<h3>Entry</h3>
				<p>Karyawan</p>
				</a>
			</div>
		</div>

	</div>
	
	<div class="col-sm-2">
	
		
		<div class="tile-title tile-blue">
			
			<div class="icon">
				<i class="glyphicon glyphicon-file"></i>
			</div>
			
			<div class="title">
			<a href="approve-absensi.php">
				<h3>Data</h3>
				<p>Karyawan Baru</p>
			</a>
			</div>
		</div>
	
	</div>
	
	<div class="col-sm-2">
	
		<div class="tile-title tile-green">
			
			<div class="icon">
				<i class="glyphicon glyphicon-file"></i>
			</div>
			
			<div class="title">
			<a href="data_karyawan.php">
				<h3>Data</h3>
				<p>Karyawan Lama</p>
			</a>
			</div>
		</div>
	
	</div>
	<div class="col-sm-2">
	
		<div class="tile-title tile-red">
			
			<div class="icon">
				<i class="glyphicon glyphicon-file"></i>
			</div>
			
			<div class="title">
			<a href="data_karyawan.php">
				<h3>Data</h3>
				<p>atasan</p>
			</a>
			</div>
		</div>
	
	</div>
	<div class="col-sm-2">
	
		<div class="tile-title tile-brown">
			
			<div class="icon">
				<i class="entypo-chart-bar"></i>
			</div>
			
			<div class="title">
			<a href="data_karyawan.php">
				<h3>Chart</h3>
				<p>Pegawai</p>
			</a>
			</div>
		</div>
	
	</div>
</div>
<div class="col-sm-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="panel-title">Admin</div>

                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>                             
                                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                                </div>
                            </div>

                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Sekolah</th>
                                        <th>Level</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Abdul Aziz Zam Zami</td>
                                        <td>XI RPL 1</td>
                                        <td><span class="inlinebar">SMK Semen Gresik</span></td>
                                        <td><div class="label label-danger">Leader</div></td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Habib Prima Fitranzah</td>
                                        <td>XI RPL 1</td>
                                        <td><span class="inlinebar-2">SMK Semen Gresik</span></td>
                                        <td><div class="label label-info">Co-Leader</div></td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Ainur Rofieq Majdie</td>
                                        <td>XI RPL 1</td>
                                        <td><span class="inlinebar-3">SMK Semen Gresik</span></td>
                                        <td><div class="label label-info">Co-Leader</div></td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Christoper Antony Dewantoro</td>
                                        <td>XI RPL 1</td>
                                        <td ><span class="inlinebar-3">SMK Semen Gresik</span></td>
                                        <td><div class="label label-info">Co-Leader</div></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div><br><br>--><br><br>			
                        <footer class="main">
	
		
	&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="https://www.facebook.com/abdul.zami" target="_blank">XI RPL 1</a>
	
</footer>

                    </div>





	<link rel="stylesheet" href="../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="../assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom Scripts -->
	<script src="../assets/js/gsap/main-gsap.js"></script>
	<script src="../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="../assets/js/bootstrap.js"></script>
	<script src="../assets/js/joinable.js"></script>
	<script src="../assets/js/resizeable.js"></script>
	<script src="../assets/js/neon-api.js"></script>
	<script src="../assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="../assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="../assets/js/jquery.sparkline.min.js"></script>
	<script src="../assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="../assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="../assets/js/raphael-min.js"></script>
	<script src="../assets/js/morris.min.js"></script>
	<script src="../assets/js/toastr.js"></script>
	<script src="../assets/js/neon-chat.js"></script>
	<script src="../assets/js/neon-custom.js"></script>
	<script src="../assets/js/neon-demo.js"></script>
	</body>