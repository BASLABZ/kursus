<?php

$var_payment_date=$_POST['payment_date'];
$var_bank_from =$_POST['bank_from'];
$var_no_payment_from =$_POST['no_payment_from'];
$var_bank_to =$_POST['bank_to'];
$var_no_payment_to =$_POST['no_payment_to'];
$var_person_bank =$_POST['person_bank'];

$type_file  = $_FILES['payment_upload']['type'];
$lokasi_file =   $_FILES['payment_upload']['tmp_name'];
$nama_file =     $_FILES['payment_upload']['name'];
$ukuran_file =   $_FILES['payment_upload']['size'];

//echo "llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll".$nama_file; //exit();
//echo "<h1>ASU</h1>".$_POST['bank_to']; exit();
$query="INSERT INTO tbl_payment VALUES 
        ('',
        	'".$_SESSION['user_id']."',
        	'727',
            '3000000',
            '".$var_payment_date."',
            '".$var_bank_from."',
            '".$var_bank_to."',
            '".$var_no_payment_from."',
            '".$var_no_payment_to."',
            '".$var_person_bank."',
            '".$nama_file."')";
          // echo $query;
           //exit;
$result=mysql_query($query);


//if ($result){
    $derektori="uploads/payment/".$nama_file;
    move_uploaded_file($lokasi_file,"$derektori");
    include_once('tanks.php');
   //echo "berhasil";
//}
?>