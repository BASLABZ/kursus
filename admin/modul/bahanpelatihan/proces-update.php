<?php
error_reporting(0);
$var_hidden_bahanid=$_POST['hidden_matapelajaranid'];
$var_bahanpelajaran=$_POST['frm_bahanname'];
$var_silabus=$_POST['frm_syllabustitle'];
$var_description=$_POST['frm_bahandescription'];


//=============================

  $sqlcheck="SELECT matapelajaran_id from ref_matapelajaran m JOIN ref_syllabus s ON s.syllabus_id=m.syllabus_id where m.syllabus_id ='".$var_silabus."' and m.matapelajaran_name='".$var_bahanname."' and m.matapelajaran_description='".$var_description."' and m.matapelajaran_id!='".$var_hidden_bahanid."'";
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
            $error_msg = "Data matapelajaran sudah tersedia";
            break; 
        // case 2:
        //     $error_msg = "";
        //     break; 
      }
      echo "<h3>$error_msg</h3>";
      echo "<a href='?page=bahanpelatihan.frm-update&id=$var_hidden_bahanid'>kembali</a>";
  //     //exit;
    } else{
  $sql1="update ref_matapelajaran set 
        syllabus_id='".$var_silabus."',
        matapelajaran_name='".$var_bahanpelajaran."',
        matapelajaran_description='".$var_description."' 
        where matapelajaran_id='".$var_hidden_bahanid."'";
    //echo"<center>".$sql1."</center>"; exit;
    $result1=mysql_query($sql1);
    
    require_once('display.php');
   // header('location: ?page=project.display');
}

?>