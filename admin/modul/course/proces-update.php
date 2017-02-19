<?php
require_once('inc-db.php');
$var_hidden_courseid=$_POST['hidden_courseid'];
$var_namakursus=$_POST['frm_coursename']; //htmlentities() sebuah fungsi untuk merubah semua tag HTML menjadi text biasa
$var_detailkursus=$_POST['frm_coursedetail'];
$var_hargakursus=$_POST['frm_courseprice'];
$var_kuotakursus=$_POST['frm_coursequota'];
$var_kategorikursus=$_POST['frm_coursecategory'];
$var_trainerkursus=$_POST['trainer[]'];
$var_bahankursus=$_POST['matapelajaran[]'];
$var_materikursus=$_POST['coursematerial[]'];


//==========================
// if(!empty($nama_file)){
//   if($type_file != '/pdf'){
    
//      $error=1;
//     //echo "type file <b>".$nama_file."</b> : ".$type_file."<br>Type file yang boleh di uploaud : gif,jpg dan png   <br>";
//     //echo "<a href='?page=anggota.frm-update&id=$var_hidden_nis'>kembali</a>";
//     //exit;
//     }
// }
/*jika nis baru tidak sama dengan nis lama, maka lakukan pengecekan nis baru*/
   // if($var_new_nis != $var_hidden_nis){

   //    /*check nis tidak boleh ada yang sama*/
   //    $sql_check_nis = "
   //       SELECT anggota_nis FROM anggota WHERE anggota_nis = '{$var_new_nis}'
   //    ";
   //    $result_check_nis = mysql_query($sql_check_nis);
   //    $total_check_nis = mysql_num_rows($result_check_nis);

   //    if($total_check_nis != 0){
   //       $error = 15;
   //    }
   // }

   // if($error != 0){
   //    switch ($error) {
   //       case 1:
   //          $error_msg = "type file <b>".$nama_file."</b> : ".$type_file."<br>Type file yang boleh di upload : .pdf ";
   //          break;
   //       case 15:
   //          $error_msg = "nis tidak boleh ada yang sama";
   //          break; 
   //    }
   //    echo "<h3>$error_msg</h3>";
   //    echo "<a href='?page=anggota.frm-update&id=$var_hidden_nis'>kembali</a>";
   //    exit;
   // }


 $sql1="update tbl_courses set 
        courseclass_id='".$var_kategorikursus."',
        course_title='".$var_namakursus."',
        course_detail='".$var_detailkursus."',
        course_price='".$var_hargakursus."',
        course_quota='".$var_kuotakursus."',
        matapelajaran='".$var_bahankursus."',
        coursematerial='".$var_materikursus."',
        trainer='".$var_trainerkursus."'
        where course_id='".$var_hidden_courseid."'";
   // echo $sql1; exit;
    $result1=mysql_query($sql1);
    require_once('display.php');


?>