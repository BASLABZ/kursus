<?php
require_once('inc/inc-db.php');
$kode_acak=md5(uniqid(rand()));
$var_email=$_POST['frm_email'];
$cek_email="SELECT person_email FROM tbl_person WHERE person_email='$var_email'";
//echo $cek_email; exit();
$result_email=mysql_query($cek_email);
$rows=mysql_num_rows($result_email);

if($rows == 0){

$sql_insert="INSERT INTO tbl_temp VALUES ('$kode_acak','$var_email')";
//echo $sql_insert; exit();
$result=mysql_query($sql_insert);
//if ($result){
    //------------------------------------  */
  /*  $tujuan=$var_email;
    $subject="Pendaftaran Peserta";
    $pesan="
    Klik <a href='confirm.php?kode=$kode_acak'>di sini</a> 
    untuk melengkapi persyaratan
    ";
    $dari="from : test@dita.com";
    mail($tujuan,$subject,$pesan,$dari);*/
?>
<!--  <div id="signin" class="signin content-section bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form class="contact-form" method="post" action="proses-daftar.php">
              <div class="form-group"> 
                  <label for="username">proses pendaftaran anda berhasil silahkan cek email anda untuk mengisi persyaratan pendaftaran.</label><br>
                  <label for="username">terimakasih :)</label><br>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> -->


<?php
    // echo $kode;
    //echo "<br>berhasil daftar silahkan cek email anda untuk melengkapi persyaratan";
     echo "<a href='http://localhost/dita/?page=syarat-daftar&kode=".$kode_acak."'>http://localhost/dita/confirm.php?kode=$kode_acak</a>"; 
//}
 //header("location:index.php?page=daftar&action=berhasil");
exit();

}else{


    header("Location:index.php?page=daftar&action=gagal");
    exit();

}
?>