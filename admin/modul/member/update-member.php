<?php 
$varid=$_POST['id'];
$varstatus=$_POST['frm_status'];
$sql_update="UPDATE tbl_member set member_status='".$varstatus."' where member_id='".$varid."'";
//echo $sql_update; exit();
	$runsql_update=mysql_query($sql_update);
	require_once('display.php');
?>