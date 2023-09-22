<html>
<head>
<title> Tutorial Morris Bag.1 </title>
<link rel="stylesheet" href=" morris-0.5.1.css">
<script src=" jquery.min.js"></script>
<script src=" raphael-min.js"></script>
<script src=" morris-0.5.1.min.js"></script>
</head>
<body>
    <?php
    $link= mysql_connect( 'localhost', 'root', '' );
    mysql_select_db("petro", $link);
$pend = 'S1';
$query = "

SELECT COUNT(usia) as angka FROM data_karyawan WHERE usia >= 21 AND usia <= 30
UNION ALL
SELECT COUNT(usia) FROM data_karyawan WHERE usia >= 31 AND usia <= 35
UNION ALL
SELECT COUNT(usia) FROM data_karyawan WHERE usia >= 36 AND usia <= 40
UNION ALL
SELECT COUNT(usia) FROM data_karyawan WHERE usia >= 41 AND usia <= 45
UNION ALL
SELECT COUNT(usia) FROM data_karyawan WHERE usia >= 46 AND usia <= 50
UNION ALL
SELECT COUNT(usia) FROM data_karyawan WHERE usia > 50";

$result = mysql_query($query,$link);
$query2 = "

SELECT usia FROM usia";

$result2 = mysql_query($query2,$link);
 
  while ($row1 = mysql_fetch_assoc($result) and $row2 = mysql_fetch_assoc($result2) ) {
                    $y[]=array('nama'=>$row2['usia'],'angkaku'=>$row1['angka']);
                   
                }
              // print_r(json_encode($y));




?>
    <div id="grafik"></div>
     <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>Area Chart</strong>
                                            <br />
                                            
                                        </td>
                                       </tr>
                                </tbody>
                            </table>

<script>
Morris.Bar({
  element: 'grafik',
  data: <?php echo json_encode($y); ?>,
  xkey: 'nama',
  ykeys: ['angkaku'],
  labels: ['Usia']
});
</script>
  
</body>
</html>