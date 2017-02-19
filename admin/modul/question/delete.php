<?php
require_once('inc-db.php');
$id=$_GET['id'];
//echo $id; exit;
$sql="delete from trx_question where question_id='".$id."'";
//echo $sql; exit;
$result=mysql_query($sql);
if($result){
    require_once('display.php');
    //header('location: http://localhost/dci/admin/admin_area.php?page=project.display');
}
?>