<?php
require_once 'koneksitable.php';
session_start();
$kd = $_SESSION['nik'];
$pb = $_SESSION['kode_unitkerja'];
 $id	=  $_GET['id'];
if(!isset($_SESSION['key']))
{
		header('location:../index.php');

}
?>
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
<body class="page-body page-right-in" data-url="http://neon.dev">

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
					<li     class="active opened active">
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
			<li     class="active opened active">
				 <a href="">
					<i class="entypo-doc-text"></i>
					<span>Approve</span>
				</a>
				<ul>
					<li     class="active opened active">
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
		$hasil = $db->QUERY("SELECT * FROM data_karyawan WHERE  nik ='$kd';");
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

<hr /><div class="profile-env">
	<ol class="breadcrumb bc-3">
						<li>
				<a href="index.php"><i class="entypo-home"></i>Home</a>
			</li>
			<li>
						<a>
							Approve 
						</a>
					</li>
					<li>
						<a href="approve-lembur.php">
							Approve Lembur
						</a>
					</li>
				<li class="active">
			
							<a><strong>Detail</strong></a>
					</li>
					</ol>
	<header class="row">
		
		<div class="col-sm-2">

			<?php
	$id=$_GET['id'];
		$hasil = $db->QUERY("SELECT * FROM pengajuan_lembur WHERE id='$id'");
		$rows = $hasil-> fetch_All(MYSQLI_ASSOC);
		$no =1;
		foreach ($rows as $row):
		$kode=$row['nik'];
			?>
			<?php
			$hasilku = $db->QUERY("SELECT foto FROM data_karyawan WHERE nik ='$kode'");
			$rows = $hasilku-> fetch_All(MYSQLI_ASSOC);
			foreach ($rows as $rower):
			$foto=$rower['foto'];
			?>
			<a href="#" class="profile-picture">
				<img src="../karyawan/uploads/<?php echo $rower['foto'];?>" class="img-responsive img-circle" />
			</a>
								<?php
		$no++;
		endforeach;
		?>		
			
		</div>
		
		<div class="col-sm-7">
			
			<ul class="profile-info-sections">
				<li>
					<div class="profile-name">
						<strong>
							<a href="#"><?php echo $row['nama'];?></a>
							<!-- User statuses available  classes "is-online", "is-offline", "is-idle", "is-busy" -->						</strong>
					</div>
				</li>
			</ul>
			
		</div>		
	</header>
	
	<section class="profile-info-tabs">
		
		<div class="row">
			
			<div class="col-sm-offset-2 col-sm-10">
				
				<ul class="user-details">	
					<li>
					<i class="entypo-lock"></i>
					Proyek : <?php echo $row['proyek']?>
					</li>
										<li>
										<i class="entypo-clock"></i>
					Mulai Lembur : <?php echo $row['mulai_lembur']?>
					</li>
										<li>
										<i class="entypo-clock"></i>
					Akhir Lembur : <?php echo $row['akhir_lembur']?>
					</li>
										<li>
										<i class="entypo-comment"></i>
					Keterangan :<?php echo $row['keterangan']?>
					</li>
										<li>
										<i class="entypo-check"></i><i class="entypo-cancel"></i>
					Persetujuan : <?php echo $row['persetujuan']?>
					</li>
										<li>
										<i class="entypo-clock"></i>
					Waktu Pengajuan : <?php echo $row['waktu_mengajukan'];?>
					</li>
				</ul>
				<a href="setuju-lembur.php?id=<?php echo $row['id'];?>" class="btn btn-success btn-sm btn-icon icon-right">
					<i class="entypo-check"></i>
					Setuju
				</a>
										<a href="taksetuju-lembur.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm btn-icon icon-right">
					<i class="entypo-cancel"></i>
					Tidak Setuju
				</a>
				<a href="batal_alembur.php?id=<?php echo $row['id'];?>" class="btn btn-warning btn-sm btn-icon icon-right">
					<i class="entypo-cancel"></i>
					Batalkan
				</a>	
			</div>
			
		</div>
		
	</section>
</div>	
					<?php
		$no++;
		endforeach;
		?>	
<br><br><br><br><br><br>	
                        <footer class="main">
	
		
	&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="https://www.facebook.com/abdul.zami" target="_blank">XI RPL 1</a>
	
</footer>
</div>




	<link rel="stylesheet" href="../assets/js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="../assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="../assets/js/select2/select2.css">

	<!-- Bottom Scripts -->
	<script src="../assets/js/gsap/main-gsap.js"></script>
	<script src="../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="../assets/js/bootstrap.js"></script>
	<script src="../assets/js/joinable.js"></script>
	<script src="../assets/js/resizeable.js"></script>
	<script src="../assets/js/neon-api.js"></script>
	<script src="../assets/js/jquery.dataTables.min.js"></script>
	<script src="../assets/js/datatables/TableTools.min.js"></script>
	<script src="../assets/js/dataTables.bootstrap.js"></script>
	<script src="../assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="../assets/js/datatables/lodash.min.js"></script>
	<script src="../assets/js/datatables/responsive/js/datatables.responsive.js"></script>
	<script src="../assets/js/select2/select2.min.js"></script>
	<script src="../assets/js/neon-chat.js"></script>
	<script src="../assets/js/neon-custom.js"></script>
	<script src="../assets/js/neon-demo.js"></script>

</body>