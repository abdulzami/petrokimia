<?php
include 'koneksipendidikan.php';
$pend=mysql_real_escape_string($_GET['pend']);
$angka=mysql_query("SELECT COUNT(institut_pendidikan) AS zami FROM data_karyawan WHERE pendidikan='$pend' GROUP BY institut_pendidikan;");
$pendi=mysql_query("SELECT institut_pendidikan,COUNT(institut_pendidikan) AS zami FROM data_karyawan WHERE pendidikan='$pend' GROUP BY institut_pendidikan;");
$angkaj=mysql_query("SELECT COUNT(jurusan) as jurus FROM data_karyawan WHERE pendidikan='$pend' GROUP BY jurusan,institut_pendidikan;");
$jurusan=mysql_query("SELECT institut_pendidikan,jurusan FROM data_karyawan WHERE pendidikan='$pend' GROUP BY jurusan,institut_pendidikan;");
?>
<html>
    <head>
        <title>Institut Pendidikan <?php echo $pend;?></title>
        <script src="chart/Chart.bundle.js"></script>

        <style type="text/css">
            .container {
                width: 50%;
                margin: 20px auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <canvas id="institut_pendidikan" height="200%"></canvas>
        </div>
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
        <div class="container">
            <canvas id="jurusan" height="200%"></canvas>
        </div>
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
    </body>
</html>