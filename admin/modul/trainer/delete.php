<?php
require_once('inc-db.php');
$id=$_GET['id'];
//echo $id; exit;
$sql="DELETE u,p,t FROM tbl_user u INNER JOIN tbl_person p on u.person_id = p.person_id 
                                   INNER JOIN ref_role r on u.role_id = r.role_id
                                   LEFT JOIN tbl_trainer t on t.person_id = p.person_id
                                   WHERE u.user_id = '".$id."'";
//echo $sql; exit;
$result=mysql_query($sql);
if($result){
    require_once('display.php');
    //header('location: http://localhost/dci/admin/admin_area.php?page=project.display');
}
?>