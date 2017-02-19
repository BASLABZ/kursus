<?php
require_once('../../inc-db.php');
//error_reporting(0);
$id=$_POST['id']; 
//echo "ID : ".$id;
//exit;
?><p align="center">
<a href="cetak.php" cls='btn' onClick="window.print();return false">
   <i class='icon-print'></i>Print Barcode </a></p>
<?php
include('bar128.php');
echo '<div style="border:3px double #ababab; padding:5px;margin:5px auto;width:300px;">';


//$id=70;//$_GET['id'];

    $sql_buku="SELECT * FROM buku where kode_buku='".$id."'";
        //echo $sql_buku; exit;
    $result_buku=mysql_query($sql_buku);
    while($data_buku=mysql_fetch_array($result_buku)){
        $kode=$data_buku['kode_buku'];
        for($i=0;$i<=$data_buku['jumlah_awal'];$i++){
?>

<table border="1" cellpadding="3" cellspacing="3" align="center" width="100%">
<tr>
<td colspan="3" align="center">
<b><?php echo $data_buku['judul_buku'];  ?></b>
</td>
</tr>
<tr>
<td align="center"><?php echo bar128(stripslashes($kode)); ?></td>
</tr>
<tr>
<td align="center">
Perpustakaan, SMK Ma'arif Ponjong
</td>
</tr>
</table>
<?php
}
echo '</div>';
}
?>