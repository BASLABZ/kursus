<?php
require_once('inc-db.php');
$var_hidden_classid=$_POST['hidden_classid'];
$var_classname=$_POST['frm_categoryname'];



//=============================

  $sqlcheck="SELECT courseclass_id from ref_courseclass where courseclass_name='".$var_classname."' and courseclass_id!='".$var_hidden_classid."'";
  $runsqlchek=mysql_query($sqlcheck);
    $var_jml_baris=mysql_num_rows($runsqlchek);
    if ($var_jml_baris>0) {
      $error=2;
    }else{
      $error=0;
    }


   if($error != 0){
      switch ($error) {
        
         case 2:
            $error_msg = "Kategori Kelas sudah tersedia";
            break; 
        // case 2:
        //     $error_msg = "";
        //     break; 
      }
      echo "<h3>$error_msg</h3>";
      echo "<a href='?page=courseclass.frm-update&id=$var_hidden_classid'>kembali</a>";
      //exit;
   } else{
  $sql1="update ref_courseclass set 
        courseclass_name='".$var_classname."'
        where courseclass_id='".$var_hidden_classid."'";
    //echo $sql1; exit;
    $result1=mysql_query($sql1);
    
    require_once('display.php');
   // header('location: ?page=project.display');
}

?>