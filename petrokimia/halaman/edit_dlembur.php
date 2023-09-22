<?php
include 'koneksitable.php';
session_start();
if(!isset($_SESSION['key']))
{
		header('location:../index.php');

}
$kd=$_SESSION['nik'];
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
	<script type="text/javascript">
    //set timezone
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    //buat object date berdasarkan waktu di server
    var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
    //buat object date berdasarkan waktu di client
    var clientTime = new Date();
    //hitung selisih
    var Diff = serverTime.getTime() - clientTime.getTime();    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayServerTime()
	{
        //buat object date berdasarkan waktu di client
        var clientTime = new Date();
        //buat object date dengan menghitung selisih waktu client dan server
        var time = new Date(clientTime.getTime() + Diff);
        //ambil nilai jam
        var sh = time.getHours().toString();
        //ambil nilai menit
        var sm = time.getMinutes().toString();
        //ambil nilai detik
        var ss = time.getSeconds().toString();
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body  page-left-in" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="index.html">
					<img width="120" src="../assets/images/logo@2x.png" />
				</a>
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
					<li >
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
			<li class="active opened active">
				<a href="">
					<i class="entypo-window"></i>
					<span>Data Draft Pengajuan</span>
				</a>
				<ul>
					<li class="active opened active">
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
                        </div><br><br>--><ol class="breadcrumb bc-3">
						<li>
				<a href="index.php"><i class="entypo-home"></i>Home</a>
			</li>
				<li>
			
							<a >Data Draft Pengajuan</a>
					</li>
					<li>
			
							<a href="table-lembur.php">Pengajuan Lembur</a>
					</li>
					<li class="active">
			
							<a><strong>Edit</strong></a>
					</li>
					</ol><br>
<h2>Edit Pengajuan Lembur</h2><br>
</legend>
<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Edit
				</div>
				
				<div class="panel-options">
					
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			<?php
	$id=$_GET['id'];
		$hasil = $db->QUERY("SELECT * FROM pengajuan_lembur	 WHERE id='$id'");
		$rows = $hasil-> fetch_All(MYSQLI_ASSOC);
		$no =1;
		foreach ($rows as $row):
$kode=$row['nik'];
			?>
			<div class="panel-body">
						<form role="form" method="POST" class="form-horizontal form-groups-bordered" action="update_dlembur.php">
					<div class="form-group">
						<label for="field-3" class="col-sm-3 control-label""">Proyek</label>
						
						<div class="col-sm-5">	
							<textarea class="form-control" name="proyek_ky" required /><?php echo $row['proyek']?></textarea>
							<input type="hidden" class="form-control" name="id_ky" value="<?php echo $id;?>" readonly/>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Tanggal Lembur</label>
						
						<div class="col-sm-5">
							<input type="date" class="form-control" name="tanggal"  value="<?php echo $row['tanggal_lembur'];?>" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Mulai Lembur</label>
						
						<div class="col-sm-5">
							<input type="time" class="form-control" name="mulai_ky" value="<?php echo $row['mulai_lembur'];?>" required />
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Akhir Lembur</label>
						
						<div class="col-sm-5">
							<input type="time" class="form-control" name="akhir_ky" value="<?php echo $row['akhir_lembur'];?>" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Keterangan</label>
						
						<div class="col-sm-5">
							<textarea class="form-control" name="ket_ky" required /><?php echo $row['keterangan'];?></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-success">Update</button>
						</div>
					</div>
				</form>
				
			</div>
		
		</div>
			<?php
		$no++;
		endforeach;
		?>
	</div>
</div><br><br><br>
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
