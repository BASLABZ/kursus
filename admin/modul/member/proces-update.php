<?php
require_once('inc-db.php');
$var_hidden_syllabusid=$_POST['hidden_syllabusid'];
$var_title=$_POST['frm_syllabustitle'];
$var_date=$_POST['frm_syllabusdate'];

// =======================================
$var_tanggal=date("Y-m-d, H:i");

//-----------------------ambil gambar
$type_file= $_FILES['syllabus_file']['type'];
$lokasi_file =   $_FILES['syllabus_file']['tmp_name'];
$nama_file =     $_FILES['syllabus_file']['name'];
$ukuran_file =   $_FILES['syllabus_file']['size'];

//==========================
if(!empty($nama_file)){
  if($type_file != '/pdf'){
    
     $error=1;
    //echo "type file <b>".$nama_file."</b> : ".$type_file."<br>Type file yang boleh di uploaud : gif,jpg dan png   <br>";
    //echo "<a href='?page=anggota.frm-update&id=$var_hidden_nis'>kembali</a>";
    //exit;
    }
}
/*jika nis baru tidak sama dengan nis lama, maka lakukan pengecekan nis baru*/
   if($var_new_nis != $var_hidden_nis){

      /*check nis tidak boleh ada yang sama*/
      $sql_check_nis = "
         SELECT anggota_nis FROM anggota WHERE anggota_nis = '{$var_new_nis}'
      ";
      $result_check_nis = mysql_query($sql_check_nis);
      $total_check_nis = mysql_num_rows($result_check_nis);

      if($total_check_nis != 0){
         $error = 15;
      }
   }

   if($error != 0){
      switch ($error) {
         case 1:
            $error_msg = "type file <b>".$nama_file."</b> : ".$type_file."<br>Type file yang boleh di upload : .pdf ";
            break;
         case 15:
            $error_msg = "nis tidak boleh ada yang sama";
            break; 
      }
      echo "<h3>$error_msg</h3>";
      echo "<a href='?page=anggota.frm-update&id=$var_hidden_nis'>kembali</a>";
      exit;
   }

if(!empty($nama_file)){
  $sql1="update anggota set 
        anggota_nis='".$var_new_nis."',
        anggota_nama='".$var_nama."',
        anggota_images='".$nama_file."',
        kelas_id='".$var_kelas."',
        jurusan_kode='".$var_jurusan."',
        anggota_tempat='".$var_tempat."',
        anggota_tgl_lahir='".$var_tgl_lahir."',
        anggota_berlaku='".$var_masa_berlaku."',
        anggota_jns_kelamin='".$var_jns_kelamin."',
        anggota_email='".$var_email."',
        anggota_hp='".$var_hp."',
        anggota_alamat='".$var_alamat."',
        anggota_tanggal='".$var_tanggal."' 
        where anggota_nis='".$var_hidden_nis."'";
    //echo $sql1; exit;
    $result1=mysql_query($sql1);
    $derektori="../images/".$nama_file;
    move_uploaded_file($lokasi_file,"$derektori");
    require_once('display.php');
   // header('location: ?page=project.display');
}else{
 $sql1="update anggota set 
        anggota_nis='".$var_new_nis."',
        anggota_nama='".$var_nama."',
        kelas_id='".$var_kelas."',
        jurusan_kode='".$var_jurusan."',
        anggota_tempat='".$var_tempat."',
        anggota_tgl_lahir='".$var_tgl_lahir."',
        anggota_berlaku='".$var_masa_berlaku."',
        anggota_jns_kelamin='".$var_jns_kelamin."',
        anggota_email='".$var_email."',
        anggota_hp='".$var_hp."',
        anggota_alamat='".$var_alamat."',
        anggota_tanggal='".$var_tanggal."' 
        where anggota_nis='".$var_hidden_nis."'";
   // echo $sql1; exit;
    $result1=mysql_query($sql1);
    require_once('display.php');
}

?>