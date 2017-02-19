<?php
require_once('inc-db.php');
error_reporting(0);
$var_qid = $_POST['frm_hidden_questionid'];
$var_qpertanyaan=htmlentities($_POST['frm_qpertanyaan']); //htmlentities() sebuah fungsi untuk merubah semua tag HTML menjadi text biasa

$var_date=date("Y-m-d, H:i");
//-----------------------ambil gambar
$type_file  = $_FILES['frm_qgambar']['type'];
$lokasi_file =   $_FILES['frm_qgambar']['tmp_name'];
$nama_file =     $_FILES['frm_qgambar']['name'];
$ukuran_file =   $_FILES['frm_qgambar']['size'];
//==========================

if(!empty($nama_file)){
  $sql1="UPDATE trx_question set 
        question_bobot='".$_POST['frm_qbobot']."',
        question_picture='".$nama_file."',
        question_title='".$var_qpertanyaan."',
        option_a='".$_POST['frm_qoptionA']."',
        option_b='".$_POST['frm_qoptionB']."',
        option_c='".$_POST['frm_qoptionC']."',
        option_d='".$_POST['frm_qoptionD']."',
        option_e='".$_POST['frm_qoptionE']."',
        question_answer='".$_POST['frm_qjawaban']."',
        question_date='".$var_date."'

        WHERE question_id = '".$var_qid."'

        ";
    
    $result1=mysql_query($sql1);
    $derektori="uploads/soal/".$nama_file;
    move_uploaded_file($lokasi_file,"$derektori");
    require_once('display.php');

}else{
 $sql1="UPDATE trx_question set 
        question_bobot='".$_POST['frm_qbobot']."',
        question_title='".$var_qpertanyaan."',
        option_a='".$_POST['frm_qoptionA']."',
        option_b='".$_POST['frm_qoptionB']."',
        option_c='".$_POST['frm_qoptionC']."',
        option_d='".$_POST['frm_qoptionD']."',
        option_e='".$_POST['frm_qoptionE']."',
        question_answer='".$_POST['frm_qjawaban']."',
        question_date='".$var_date."'

        WHERE question_id = '".$var_qid."'

        ";
   
    $result1=mysql_query($sql1);
    require_once('display.php');
}

?>