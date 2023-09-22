  <?php
require_once 'koneksitable.php';
session_start();

?>
<?php
include 'koneksitable.php';
if(!isset($_SESSION['key']))
{
		header('location:../index.php');

}
$kd=$_SESSION['kode'];
?>

<?php
include '../koneksicharts.php';
$u2130=mysql_query("SELECT COUNT(usia) FROM tabel_karyawan WHERE usia >= 21 AND usia <= 30");
$usia2130=mysql_result($u2130, 0);//usia 21 - 30
$u3135=mysql_query("SELECT COUNT(usia) FROM tabel_karyawan WHERE usia >= 31 AND usia <= 35");
$usia3135=mysql_result($u3135, 0);//usia 31 - 35
$u3640=mysql_query("SELECT COUNT(usia) FROM tabel_karyawan WHERE usia >= 36 AND usia <= 40");
$usia3640=mysql_result($u3640, 0);//usia 36 - 40
$u4145=mysql_query("SELECT COUNT(usia) FROM tabel_karyawan WHERE usia >= 41 AND usia <= 45");
$usia4145=mysql_result($u4145, 0);//usia 41 - 45
$u4650=mysql_query("SELECT COUNT(usia) FROM tabel_karyawan WHERE usia >= 46 AND usia <= 50");
$usia4650=mysql_result($u4650, 0);//usia 46 - 50
$u50=mysql_query("SELECT COUNT(usia) FROM tabel_karyawan WHERE usia > 50");
$usia50=mysql_result($u50, 0);//usia > 50
?>
<?php
include 'koneksicharts.php';
$psmk=mysql_query("SELECT COUNT(pendidikan) FROM tabel_karyawan WHERE pendidikan ='SMK'");
$pendsmk=mysql_result($psmk, 0);//SMK
$psma=mysql_query("SELECT COUNT(pendidikan) FROM tabel_karyawan WHERE pendidikan ='SMA'");
$pendsma=mysql_result($psma, 0);//SMA
$ps1=mysql_query("SELECT COUNT(pendidikan) FROM tabel_karyawan WHERE pendidikan ='S1'");
$pends1=mysql_result($ps1, 0);//S1
$ps2=mysql_query("SELECT COUNT(pendidikan) FROM tabel_karyawan WHERE pendidikan ='S2'");
$pends2=mysql_result($ps2, 0);//S2
$ps3=mysql_query("SELECT COUNT(pendidikan) FROM tabel_karyawan WHERE pendidikan ='S3'");
$pends3=mysql_result($ps3, 0);//S3
$pd3=mysql_query("SELECT COUNT(pendidikan) FROM tabel_karyawan WHERE pendidikan ='D3'");
$pendd3=mysql_result($pd3, 0);//D3
$k='karyawan'
?>
<?php
$lk=mysql_query("SELECT COUNT(jenis_kelamin) FROM tabel_karyawan WHERE jenis_kelamin ='Laki-Laki'");
$laki=mysql_result($lk, 0);//Laki-Laki
$pr=mysql_query("SELECT COUNT(jenis_kelamin) FROM tabel_karyawan WHERE jenis_kelamin ='Perempuan'");
$perempuan=mysql_result($pr, 0);//Perempuan
?>

<?php
$label1='2017';
$label2='2018';
$label3='2019';
$label4='2020';
$label5='2021';
$label6='2022';
//PENSIUN
$d1=mysql_query("SELECT COUNT(b.tahun_pensiun) FROM tabel_karyawan a,periode_kerja b WHERE a.kode_karyawan=b.kode_karyawan AND b.status_karyawan='lama' AND tahun_pensiun='$label1'");
$data1=mysql_result($d1, 0);//data1 sesuai label 1
$d2=mysql_query("SELECT COUNT(b.tahun_pensiun) FROM tabel_karyawan a,periode_kerja b WHERE a.kode_karyawan=b.kode_karyawan AND b.status_karyawan='lama' AND tahun_pensiun='$label2'");
$data2=mysql_result($d2, 0);//data2 sesuai label 2
$d3=mysql_query("SELECT COUNT(b.tahun_pensiun) FROM tabel_karyawan a,periode_kerja b WHERE a.kode_karyawan=b.kode_karyawan AND b.status_karyawan='lama' AND tahun_pensiun='$label3'");
$data3=mysql_result($d3, 0);//data3 sesuai label 3
$d4=mysql_query("SELECT COUNT(b.tahun_pensiun) FROM tabel_karyawan a,periode_kerja b WHERE a.kode_karyawan=b.kode_karyawan AND b.status_karyawan='lama' AND tahun_pensiun='$label4'");
$data4=mysql_result($d4, 0);//data4 sesuian label 4
$d5=mysql_query("SELECT COUNT(b.tahun_pensiun) FROM tabel_karyawan a,periode_kerja b WHERE a.kode_karyawan=b.kode_karyawan AND b.status_karyawan='lama' AND tahun_pensiun='$label5'");
$data5=mysql_result($d5, 0);//data5 sesuai label 5
$d6=mysql_query("SELECT COUNT(b.tahun_pensiun) FROM tabel_karyawan a,periode_kerja b WHERE a.kode_karyawan=b.kode_karyawan AND b.status_karyawan='lama' AND tahun_pensiun='$label6'");
$data6=mysql_result($d6, 0);//data6 sesuai label 6
//MASUK
$m1=mysql_query("SELECT COUNT(b.tahun_masuk) FROM tabel_karyawan a,periode_kerja b WHERE a.kode_karyawan=b.kode_karyawan AND b.status_karyawan='baru' AND tahun_masuk='$label1';");
$mdata1=mysql_result($m1, 0);//data1 sesuai label 1
$m2=mysql_query("SELECT COUNT(b.tahun_masuk) FROM tabel_karyawan a,periode_kerja b WHERE a.kode_karyawan=b.kode_karyawan AND b.status_karyawan='baru' AND tahun_masuk='$label2';");
$mdata2=mysql_result($m2, 0);//data1 sesuai label 1
$m3=mysql_query("SELECT COUNT(b.tahun_masuk) FROM tabel_karyawan a,periode_kerja b WHERE a.kode_karyawan=b.kode_karyawan AND b.status_karyawan='baru' AND tahun_masuk='$label3';");
$mdata3=mysql_result($m3, 0);//data1 sesuai label 1
$m4=mysql_query("SELECT COUNT(b.tahun_masuk) FROM tabel_karyawan a,periode_kerja b WHERE a.kode_karyawan=b.kode_karyawan AND b.status_karyawan='baru' AND tahun_masuk='$label4';");
$mdata4=mysql_result($m4, 0);//data1 sesuai label 1
$m5=mysql_query("SELECT COUNT(b.tahun_masuk) FROM tabel_karyawan a,periode_kerja b WHERE a.kode_karyawan=b.kode_karyawan AND b.status_karyawan='baru' AND tahun_masuk='$label5';");
$mdata5=mysql_result($m5, 0);//data1 sesuai label 1
$m6=mysql_query("SELECT COUNT(b.tahun_masuk) FROM tabel_karyawan a,periode_kerja b WHERE a.kode_karyawan=b.kode_karyawan AND b.status_karyawan='baru' AND tahun_masuk='$label6';");
$mdata6=mysql_result($m6, 0);//data1 sesuai label 1
?>

<?php
$pend=1;	
$angka=mysql_query("SELECT COUNT(institusi_pendidikan) AS zami FROM tabel_karyawan WHERE institusi_pendidikan <> '-' GROUP BY institusi_pendidikan;");
$pendi=mysql_query("SELECT institusi_pendidikan,COUNT(institusi_pendidikan) AS zami FROM tabel_karyawan WHERE institusi_pendidikan <> '-' GROUP BY institusi_pendidikan;");
$angkaj=mysql_query("SELECT COUNT(jurusan) as jurus FROM tabel_karyawan WHERE institusi_pendidikan <> '-' GROUP BY jurusan;");
$jurusan=mysql_query("SELECT jurusan FROM tabel_karyawan WHERE institusi_pendidikan <> '-' GROUP BY jurusan;");

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
<body  class="page-body  page-right-in" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="index.html">
					<img width="120" src="../assets/images/logo@2x.png" />
				</a><br><br><div class="label label-success	">Admin</div>
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
			<li class="active opened active">
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

<hr/><ol class="breadcrumb bc-3">
						<li>
				<a href="index.php"><i class="entypo-home"></i>Home</a>
			</li>
				<li class="active">
			
							<a href="charts.php"><strong>Charts</strong></a>
					</li>
					</ol><br>
<legend><h2>CHARTS</h2></legend>
     <div id="page-wrapper">

            <div class="container-fluid">	
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph Example</h3>
                            </div>
                            <div class="panel-body">
                                <canvas id="pensiun"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph Example</h3>
                            </div>
                            <div class="panel-body">
                                <canvas id="jurusan"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph Example</h3>
                            </div>
                            <div class="panel-body">
                                <canvas id="pendidikan"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph Example</h3>
                            </div>
                            <div class="panel-body">
                                <canvas id="orang"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph Example</h3>
                            </div>
                            <div class="panel-body">
                                <canvas id="institusi_pendidikan"></canvas>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
<div class="row">
                                        <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph Example</h3>
                            </div>
                            <div class="panel-body">
                                <canvas id="usia"></canvas>
                            </div>
                        </div>
                    </div>
</div>
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
            var ctx = document.getElementById("usia");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["21 - 30", "31 - 35", "36 - 40", "41 - 45 ", "46 - 50", ">50"],
                    datasets: [{
                            label: 'Usia',
                            data: [<?php echo $usia2130; ?>, <?php echo $usia3135; ?> , <?php echo $usia3640; ?>, <?php echo $usia4145; ?>, <?php echo $usia4650; ?>, <?php echo $usia50; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
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
         <script>
            var ctx = document.getElementById("pendidikan");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["SMK", "SMA", "D3", "S1", "S2", "S3"],
                    datasets: [{
                            label: 'Usia',
                            data: [<?php echo $pendsmk;?> ,<?php echo $pendsma?>  , <?php echo $pendd3;?>  , <?php echo $pends1;?> , <?php echo $pends2;?> , <?php echo $pends3;?> ],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
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
        <script>
            var ctx = document.getElementById("orang");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Laki-laki","Perempuan"],
                    datasets: [{
                            label: 'Usia',
                            data: [<?php echo $laki;?> ,<?php echo $perempuan?> ],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
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
 <script>
            var ctx = document.getElementById("pensiun");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["<?php echo $label1;?>", "<?php echo $label2;?>", "<?php echo $label3;?>", "<?php echo $label4;?>", "<?php echo $label5;?>", "<?php echo $label6;?>"],
                    datasets: [{
                            label: ' Karyawan Pensiun Lama',
                            data: [<?php echo $data1;?>, <?php echo $data2;?> ,<?php echo $data3;?> , 1, <?php echo $data5;?>, <?php echo $data6;?>,],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0)',
                                'rgba(0, 0, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,10)',
                                'rgba(54, 162, 235, 2)',
                                'rgba(255, 206, 86, 2)',
                                'rgba(75, 192, 192, 2)',
                                'rgba(153, 102, 255, 2)',
                                'rgba(255, 159, 64, 2)'
                            ],
                            borderWidth: 1
                        },
								{
                            label: 'Karyawan Masuk Baru',
                            data: [<?php echo $mdata1;?>, <?php echo $mdata2;?> ,<?php echo $mdata3;?> , <?php echo $mdata4;?>, <?php echo $mdata5;?>, <?php echo $mdata6;?> ],
                            backgroundColor: [
                                'rgba(0,230,220,0)',
                                'rgba(220,220,220,.5)',
                                'rgba(220,220,220,.5)',
                                'rgba(220,220,220,.5)',
                                'rgba(220,220,220,.5)',
                                'rgba(220,220,220,.5)'
                            ],
                            borderColor: [
                                'rgba(0,250,220,100)',
                                'rgba(220,220,220,.5)',
                                'rgba(220,220,220,.5)',
                                'rgba(220,220,220,.5)',
                                'rgba(220,220,220,.5)',
                                'rgba(220,220,220,.5)'
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
        <script>
            var ctx = document.getElementById("institusi_pendidikan");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php while ($b = mysql_fetch_array($pendi)) { echo '"' . $b['institusi_pendidikan'] . ' ",';}?>],
                    datasets: [{
                            label: 'Institusi Pendidikian',
                            data: [<?php while ($p = mysql_fetch_array($angka)) { echo '"' . $p['zami'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
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
        <script>
            var ctx = document.getElementById("jurusan");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php while ($fj = mysql_fetch_array($jurusan)) { echo '"'. $fj['jurusan'] . '",';}?>],
                    datasets: [{
                            label: 'Jurursan',
                            data: [<?php while ($fa = mysql_fetch_array($angkaj)) { echo '"' . $fa['jurus'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
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

