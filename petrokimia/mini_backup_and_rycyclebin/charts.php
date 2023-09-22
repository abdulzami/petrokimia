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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Neon | Charts</title>
	

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.0.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body" data-url="http://neon.dev">

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
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
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
			<li class="active opened active">
				<a href="index.php">
					<i class="entypo-gauge"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="">
					<i class="entypo-doc-text"></i>
					<span>Data Karyawan</span>
				</a>
				<ul>
					<li>
						<a href="approve-lembur.php">
							<span>Karyawan Baru Masuk</span>
						</a>
					</li>
					<li>
						<a href="approve-absensi.php">
							<span>Karyawan Lama</span>
						</a>
				</ul>
			</li>
			<li>
				<a href="index.php">
					<i class="entypo-gauge"></i>
					<span>Entry Karyawan</span>
				</a>
			</li>
			<li>
				<a href="data_karyawan.php">
					<i class="entypo-window"></i>
					<span>Data Atasan</span>
				</a>
			</li>
			<li>
				<a href="index.php">
					<i class="entypo-gauge"></i>
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
					<img src="uploads/<?php echo $row['foto'];?>" alt="" class="img-circle" width="44" />
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
			<ol class="breadcrumb bc-3">
						<li>
				<a href="index.html"><i class="entypo-home"></i>Home</a>
			</li>
					<li class="active">
			
							<strong>Charts</strong>
					</li>
					</ol>
			<h2>Charts</h2>

<br />



<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary">
			
			<div class="panel-heading">
				<div class="panel-title">Morris Charts</div>
		
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
						<table class="table table-bordered">
				<tbody>
					<tr>
						<td>
							<strong>Line Chart</strong>
							<br />
							<canvas id="usia"></canvas>
						</td>
					</tr>
				</tbody>
			</table>
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td width="50%">
							<strong>Area Chart</strong>
							<br />
							<div id="chart10" style="height: 300px"></div>
						</td>
						<td>
							<strong>Line Chart</strong>
							<br />
							 <canvas id="orang"></canvas>
						</td>
					</tr>
				</tbody>
			</table>
			
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td width="50%">
							<strong>Bar Charts</strong>
							<br />
							
							  <canvas id="usi	"></canvas>
						</td>
						<td>
							<strong>Bars Stacked</strong>
							<br />
							<canvas id="pendidikan"></canvas>
						</td>
					</tr>
				</tbody>
			</table>
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td>
							<strong>Line Chart</strong>
							<br />
							<canvas id="pensiun"></canvas>
						</td>
					</tr>
				</tbody>
			</table>
		
		</div>
	
	</div>
</div>



<div class="row">
</div>


<script type="text/javascript">
jQuery(document).ready(function($) 
{
	$('.inlinebar').sparkline('html', {type: 'bar', barColor: '#ff6264'} );
	$('.inlinebar-2').sparkline('html', {type: 'bar', barColor: '#445982'} );
	$('.inlinebar-3').sparkline('html', {type: 'bar', barColor: '#00b19d'} );
	$('.bar-2').sparkline([ [1,4], [2, 3], [3, 2], [4, 1] ], { type: 'bar' });
	$('.pie-2').sparkline('html', {type: 'pie',borderWidth: 0, sliceColors: ['#3d4554', '#ee4749','#00b19d']});
	$('.linechart').sparkline();


	$(".pie-large").sparkline([3,2,5], {
		type: 'pie',
		width: '150px ',
		height: '150px',
		sliceColors: ['#ee4749', '#c13638','#fe9193']
		
	});

	$(".line-large").sparkline([5,6,7,9,10,5,3,4,5,4,6,7, ], {
		type: 'line',
		width: '320px ',
		height: '150px',
		lineColor: '#ff4e50',
		highlightLineColor: '#ff8889',
		highlightSpotColor: '#b22425',
		minSpotColor: '#ff4e50',
		maxSpotColor: '#ff4e50',
		fillColor: '#f79696',
		lineWidth: 2,
		spotRadius: 4.5,
		normalRangeColor: '#ed4949'
	});


	$(".bar-large").sparkline([5,6,7,2,1,0,4,3,5,7,2,4], {
		type: 'bar',
		barColor: '#ff6264',
		height: '150px',
		barWidth: 10,
		barSpacing: 2
	});			
});
</script>


	<link rel="stylesheet" href="../assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom Scripts -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="assets/js/raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>
	<script src="assets/js/jquery.peity.min.js"></script>
	<script src="assets/js/neon-charts.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>
	<script src="assets/js/neon-custom.js"></script>
	<script src="assets/js/neon-demo.js"></script>
	  <script src="chart.js/Chart.bundle.js"></script>
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
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)',
                                'rgba(15, 100, 175, 1)'
                            ]
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
                                'rgba(15, 200, 175, 1)',
                                'rgba(30, 500, 520, 4)',
                                'rgba(15, 5, 6, 1)',
                                'rgba(9, 6, 100, 1)',
                                'rgba(100, 200, 175, 1)',
                                'rgba(15, 100, 175, 1)'
                            ]
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
                                'rgba(15, 200, 175, 1)',
                                'rgba(30, 500, 520, 4)',
                                'rgba(15, 5, 6, 1)',
                                'rgba(9, 6, 100, 1)',
                                'rgba(100, 200, 175, 1)',
                                'rgba(15, 100, 175, 1)'
                            ]
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

	<script type="text/javascript">
    Morris.Donut({
        element: 'chart_pendidikan',
        colors: [' #9ACD32 ', ' #FFFF00','  #CD853F ',' #FF6347',' #87CEEB ',' #00FF7F'],
        data: [{
                label: "SMK",
                value: <?php echo $pendsmk;?> 
            }, {
                label: "SMA",
                value: <?php echo $pendsma?> 
            }, {
                label: "S1",
                value: <?php echo $pends1;?> 
            },{
                label: "S2",
                value: <?php echo $pends2;?> 
            },{
                label: "S3",
                value: <?php echo $pends3;?> 
            },{
                label: "D3",
                value: <?php echo $pendd3;?> 
            }],
        resize: true,
    /*}).on('click', function (row) {
        if (row == 1) {
            window.location.href = 'pend.php?pend=SMA';
       } else if (row == 2) {
            window.location.href = 'pend.php?pend=S1';
        } else if (row == 3) {
            window.location.href = 'pend.php?pend=S2';
        } else if (row == 4) {
            window.location.href = 'pend.php?pend=S3';
         } else if (row == 5) {
            window.location.href = 'pend.php?pend=D3'; 
        } else {
            //kalau pakai modal bootstrap
            window.location.href = 'pend.php?pend=SMK';
        }*/
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
                            data: [<?php echo $data1;?>, <?php echo $data2;?> ,<?php echo $data3;?> , 1, <?php echo $data5;?>, <?php echo $data6;?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(0, 0, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,2)',
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
                                'rgba(0,230,220,.3)',
                                'rgba(220,220,220,.5)',
                                'rgba(220,220,220,.5)',
                                'rgba(220,220,220,.5)',
                                'rgba(220,220,220,.5)',
                                'rgba(220,220,220,.5)'
                            ],
                            borderColor: [
                                'rgba(0,250,220,.7)',
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
</body>
</html>