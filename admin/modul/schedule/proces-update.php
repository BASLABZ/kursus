<?php
require_once('inc-db.php');
$var_hidden_roomsid=$_POST['hidden_roomsid'];
$var_roomsname=$_POST['frm_roomsname'];
$var_roomsnote=$_POST['frm_roomsnote'];


//=============================

  $sqlcheck="SELECT room_id from ref_rooms where room_name='".$var_roomsname."' and room_notes='".$var_roomsnote."' and room_id!='".$var_hidden_roomsid."'";
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
            $error_msg = "Data ruangan sudah tersedia";
            break; 
        // case 2:
        //     $error_msg = "";
        //     break; 
      }
      echo "<h3>$error_msg</h3>";
      echo "<a href='?page=rooms.frm-update&id=$var_hidden_roomsid'>kembali</a>";
      //exit;
   } else{
  $sql1="update ref_rooms set 
        room_name='".$var_roomsname."',
        room_notes='".$var_roomsnote."' 
        where room_id='".$var_hidden_roomsid."'";
    //echo $sql1; exit;
    $result1=mysql_query($sql1);
    
    require_once('display.php');
   // header('location: ?page=project.display');
}

?>