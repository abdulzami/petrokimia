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

SELECT institut_pendidikan,COUNT(institut_pendidikan) AS zami FROM data_karyawan WHERE pendidikan='$pend' GROUP BY institut_pendidikan";

$result = mysql_query($query,$link);
 
  while ($row1 = mysql_fetch_assoc($result)) {
                    $y[]=array('poli'=>$row1['institut_pendidikan'],'balik'=>$row1['zami']);
                   
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
  xkey: 'poli',
  ykeys: ['balik'],
  labels: ['balikkunnnnnnnn']
});
</script>
  
</body>
</html>