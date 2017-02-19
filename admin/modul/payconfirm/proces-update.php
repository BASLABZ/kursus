<?php
error_reporting(0);
//require_once('inc-db.php');

  $sql="update tbl_payment set payment_status='1' where payment_id='".$id."'";
  $result=mysql_query($sql);

  //$sql_
  
  if($result){
  require_once('display.php');
   // header('location: ?page=project.display');
  }


?>