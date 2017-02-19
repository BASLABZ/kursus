<?php
//require_once('inc-db.php');
error_reporting(0);
$var_kode=$_GET['kode'];
echo $var_kode; exit();

//echo $var_kode;  SELECT * FROM tbl_temp WHERE temp_verifikasi='fcaba45a1475d610629f66f30503a9ee'
//exit;
$sql_check="SELECT * FROM tbl_temp WHERE temp_verifikasi='".$var_kode."'";
echo $sql_check; exit();
$result=mysql_query($sql_check);
$rows=mysql_num_rows($result);
//Apa bila kode verifikasi ditemukan di dalam database
if($rows > 0 ){
	

}else {
    echo "kode tidak ditemukan";
}


?>