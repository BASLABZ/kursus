<?php
$id=$_GET['id'];
$sql="delete from ref_courseclass where courseclass_id='".$id."'";
//echo $sql; exit;
$result=mysql_query($sql);
if($result){
    require_once('display.php');
    //header('location: http://localhost/dci/admin/admin_area.php?page=project.display');
}
?>