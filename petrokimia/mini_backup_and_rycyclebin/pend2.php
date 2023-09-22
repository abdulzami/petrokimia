<?php
include 'koneksipendidikan.php';
$pend=mysql_real_escape_string($_GET['pend']);
$det=mysql_query("SELECT * from data_karyawan where pendidikan='$pend'")or die(mysql_error());
$zzz=mysql_query("SELECT * from data_karyawan where pendidikan='$pend'")or die(mysql_error());
$z2=mysql_num_rows($zzz);
$z3=mysql_query("SELECT institusi_pendidikan,COUNT(institut_pendidikan) AS zami FROM data_karyawan WHERE pendidikan='$pend' GROUP BY institut_pendidikan;");
while($d=mysql_fetch_array($det)){
?>
<?php echo $d['institut_pendidikan']?>
<?php
}
?>
<?php
while($d=mysql_fetch_array($z3)){
?>
<?php echo $d['institut_pendidikan']?>
<?php echo $d['zami']?>
<?php
}
?>