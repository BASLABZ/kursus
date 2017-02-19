<?php
$sql_delete="DELETE FROM tbl_transaksi WHERE tran_id='".$_GET['id']."'";
$result_delete=mysql_query($sql_delete);
if($result_delete){
	include("display.php");
}


?>