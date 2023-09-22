<?php
include 'koneksipendidikan.php';
$pend=mysql_real_escape_string($_GET['pend']);
$angka=mysql_query("SELECT COUNT(institut_pendidikan) AS zami FROM data_karyawan WHERE pendidikan='$pend' GROUP BY institut_pendidikan;");
$pendi=mysql_query("SELECT institut_pendidikan,COUNT(institut_pendidikan) AS zami FROM data_karyawan WHERE pendidikan='$pend' GROUP BY institut_pendidikan;");
$angkaj=mysql_query("SELECT COUNT(jurusan) as jurus FROM data_karyawan WHERE pendidikan='$pend' GROUP BY jurusan,institut_pendidikan;");
$jurusan=mysql_query("SELECT institut_pendidikan,jurusan FROM data_karyawan WHERE pendidikan='$pend' GROUP BY jurusan,institut_pendidikan;");
?>
<?php
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
	<script src=" jquery.min.js"></script>
<script src=" raphael-min.js"></script>
<script src=" morris-0.5.1.min.js"></script>
<link rel="stylesheet" href=" morris-0.5.1.css">
<script src=" jquery.min.js"></script>
<script src=" raphael-min.js"></script>
<script src=" morris-0.5.1.min.js"></script>
 <script src="chart/Chart.bundle.js"></script>
  <style type="text/css">
            .container {
                width: 50%;
                margin: 20px auto;
            }
        </style>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body  class="page-body  page-right-in" data-url="http://neon.dev">

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
					<li  class="active opened active">
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
					include 'koneksitable.php';
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

<hr/><ol class="breadcrumb bc-3">
						<li>
				<a href="index.php"><i class="entypo-home"></i>Home</a>
			</li>
				<li class="active">
			
							<a href="charts.php">Charts</a>
					</li>
					<li class="active">
			
							<strong>Detail Chart</strong>
					</li>
					</ol><br>
<legend><h2>Detail Chart</h2></legend>
     <div id="page-wrapper">

            <div class="container-fluid">	
                <!-- /.row -->
                		<br><br>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i>Jurusan</h3>
                            </div>
                            <div class="panel-body">
                                <canvas id="jurusan" height="200%"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i>Institut Pendidikan</h3>
                            </div>
                            <div class="panel-body">
                          <canvas id="institut_pendidikan" height="300%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
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
	 <script src="../chart.js/Chart.bundle.js"></script>
	  <script>
            var ctx = document.getElementById("institut_pendidikan");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php while ($b = mysql_fetch_array($pendi)) { echo '"' . $b['institut_pendidikan'] . ' ",';}?>],
                    datasets: [{
                            label: 'Institut Pendidikian <?php echo $pend;?>',
                            data: [<?php while ($p = mysql_fetch_array($angka)) { echo '"' . $p['zami'] . '",';}?>],
                             backgroundColor: [
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
	</body>
<script>
            var ctx = document.getElementById("jurusan");
            var myChart = new Chart(ctx, {
                type: 'bar',
data: {
                    labels: [<?php while ($fj = mysql_fetch_array($jurusan)) { echo '"' . $fj['institut_pendidikan'] . ' - ' . $fj['jurusan'] . '",';}?>],
                    datasets: [{
                            label: 'Jurursan <?php echo $pend;?>',
                            data: [<?php while ($fa = mysql_fetch_array($angkaj)) { echo '"' . $fa['jurus'] . '",';}?>],
                             backgroundColor: [
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
