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
<body  data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="index.html">
					<img width="120" src="../assets/images/logo@2x.png" />
				</a><br><br><div class="label label-info">Karyawan</div>
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
			<li>
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
					<li>
						<a href="pengajuan-absensi.php">
							<span>Pengajuan Absensi</span>
						</a>
				</ul>
			</li>
			<li>
				<a href="">
					<i class="entypo-window"></i>
					<span>Data Tabel</span>
				</a>
				<ul>
					<li>
						<a href="table-lembur.php">
							<span>Pengajuan Lembur</span>
						</a>
					</li>
					<li>
						<a href="table-absensi.php">
							<span>Pengajuan Absensi</span>
						</a>
					</li>
				</ul>
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

<hr/>
<div class="row">
	<div class="col-sm-12">
<div class="profile-env">
	<ol class="breadcrumb bc-3">
						<li>
				<a href="index.php"><i class="entypo-home"></i>Home</a>
			</li>
				<li class="active">
			
							<a><strong>Profile Saya</strong></a>
					</li>
					</ol>
	<header class="row">
		
		<div class="col-sm-2">
			
			<a href="#" class="profile-picture">
				<?php
		$hasil = $db->QUERY("SELECT * FROM tabel_karyawan WHERE  kode_karyawan ='$kd';");
		$rows = $hasil-> fetch_All(MYSQLI_ASSOC);
		$no =1;
		foreach ($rows as $row):
						?>
		
					<img src="uploads/<?php echo $row['foto'];?>" alt="" class="img-circle"  /><?php
		$no++;
		endforeach;
		?>
			</a>
			
		</div>
		
		<div class="col-sm-12">
			
			<ul class="profile-info-sections">
				<li>
					<div class="profile-name">
						<strong>
							<a href="#"><?php echo $_SESSION['nama'];?></a>
							
							<!-- User statuses available classes "is-online", "is-offline", "is-idle", "is-busy" -->						</strong>
						<span><a>Karyawan at PT PETROKIMIA GRESIK</a></span>
					</div>
				</li>
			</ul>
			
		</div>
		
	</header>
	
	<section class="profile-info-tabs">
		
		<div class="row">
			
			<div class="col-sm-offset-2 col-sm-12">
				
				<ul class="user-details">
					
					<li>
						<a href="#">
							<i class="entypo-suitcase"></i>
							Works in <span>PT PETROKIMIA GRESIK</span>
						</a>
					</li>
					
					<li><i class="entypo-lock"></i>
					Kode Karyawan : <?php echo $_SESSION['kode'];?>
					</li>
										<li><i class="entypo-user"></i>
					Jenis Kelamin : <?php echo $_SESSION['jekel'];?>
					</li>
										<li><i class="entypo-user"></i>
					Usia : <?php echo $_SESSION['usia'];?> Tahun
					</li>
										<li><i class="entypo-trophy"></i>
					Pendidikan : <?php echo $_SESSION['pend'];?>
					</li>
										<li><i class="entypo-trophy"></i>
					 Institut Pendidikan : <?php echo $_SESSION['ip'];?>
					</li>
										<li><i class="entypo-trophy"></i>
					Jurusan : <?php echo $_SESSION['jr'];?>
					</li>
				</ul>
				
				
				<!-- tabs for the profile links -->
				<ul class="nav nav-tabs">

					<li> <a href="upload.php">Edit Foto Profil</a></li>
				</ul>
				
			</div>
			
		</div>
		
	</section>
</div>
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
</html>