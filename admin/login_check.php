<?php
require_once('inc-db.php');
$var_username=mysql_real_escape_string($_POST['frm_username']);
$var_password=mysql_real_escape_string(md5($_POST['frm_password']));

$sql_check="SELECT *
FROM
    `ref_role`
    INNER JOIN `tbl_user` 
        ON (`ref_role`.`role_id` = `tbl_user`.`role_id`)
	             WHERE username = '$var_username' AND password = '$var_password'";
//echo $sql_check; exit;
$result=mysql_query($sql_check);
$rows=mysql_num_rows($result);
//echo $rows; exit;
if($rows > 0 ){
    session_start();
    $data=mysql_fetch_array($result);
    $_SESSION['user_id']=$data['user_id'];
    $_SESSION['username']=$data['username'];
    $_SESSION['level']=$data['role_name']; //exit();

    $_SESSION['person_id']=$data['person_id'];
    header('location: admin_area.php');
}else{
    header('location: index.php?action=gagal');
}
?>