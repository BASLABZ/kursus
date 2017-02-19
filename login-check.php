        <?php
        include("inc/inc-db.php");

        $var_username=mysql_real_escape_string($_POST['frm_username']);
        $var_password=mysql_real_escape_string(md5($_POST['frm_password']));

        $sql_check="SELECT * FROM tbl_user u 
                         INNER JOIN ref_role r on u.role_id = r.role_id 
                         INNER JOIN tbl_person p on u.person_id = p.person_id
                         LEFT JOIN tbl_member m on m.person_id = p.person_id
                         LEFT JOIN tbl_trainer t on t.person_id = p.person_id
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
            $_SESSION['level']=$data['role_name'];
            header('location: admin/admin_area.php');
        }else{
            header('location: index.php?page=login&action=gagal');
        }

        
        ?>