<?php 
$term = $_GET['term'];
// buat database dan table pejabat
$query = "SELECT * FROM tabel_karyawan WHERE kode_karyawan LIKE '%$term%' LIMIT 5";
$link = mysqli_connect('localhost', 'root', '', 'petrokimia');
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_array($result))
{
    $data[] = array('id'=>$row['id'],'label'=>$row['kode_karyawan'],'value'=>$row['kode_karyawan']);
}
echo json_encode($data);
?>