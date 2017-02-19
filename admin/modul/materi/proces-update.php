<?php
require_once('inc-db.php');
$var_hidden_nis=$_POST['hidden_nis'];
$var_new_nis=$_POST['frm_nis'];
$var_nama=$_POST['frm_nama'];
$var_kelas=$_POST['frm_kelas'];
$var_jurusan=$_POST['frm_jurusan'];
$var_tempat=$_POST['frm_tempat'];

$var_tgl_lahir=$_POST['tgl_lahir'].' '.$_POST['bln_lahir'].' '.$_POST['thn_lahir'];
$var_masa_berlaku=$_POST['tgl_berlaku'].' '.$_POST['bln_berlaku'].' '.$_POST['thn_berlaku'];

//echo $var_masa_berlaku; exit;
//echo $var_tgl_lahir; exit;
$var_jns_kelamin=$_POST['frm_jns_kel'];
$var_email=$_POST['frm_email'];
$var_hp=$_POST['frm_hp'];
$var_alamat=$_POST['frm_alamat'];
$var_tanggal=date("Y-m-d, H:i");
//-----------------------ambil gambar
$type_file= $_FILES['fupload']['type'];
$lokasi_file =   $_FILES['fupload']['tmp_name'];
$nama_file =     $_FILES['fupload']['name'];
$ukuran_file =   $_FILES['fupload']['size'];
/*nis tidak boleh kosong */
if(empty($var_new_nis)){
    $error=1;
}
/*nama tidak boleh kosong */
if(empty($var_nama)){
    $error=2;
}
/*kelas tidak boleh kosong */
if(empty($var_kelas)){
    $error=3;
}
/*jurusan tidak boleh kosong */
if(empty($var_jurusan)){
    $error=4;
}
/*angkatan tidak boleh kosong */
if(empty($var_tempat)){
    $error=5;
}
/*jenis kelamin tidak boleh kosong */
if(empty($var_jns_kelamin)){
    $error=6;
}
/* email tidak boleh kosong */
if(empty($var_email)){
    $error=7;
}
/* nomor hp tidak boleh kosong */
if(empty($var_hp)){
    $error=8;
}
/* alamat tidak boleh kosong */
if(empty($var_alamat)){
    $error=9;
}
if (!preg_match("/^[0-9]*$/",$var_nis)) {    /* hanya angka yang dizinkan */
    $error=10;  
} 
if(preg_match("/^[a-zA-Z ]+$/",$var_nama)==false){
    $error=11;  
}
if (!preg_match("/^[0-9]*$/",$var_hp)) {    /* hanya angka yang dizinkan */
    $error=12;  
}  
if(preg_match("/[a-z0-9\._]+?@[a-z-\.]+\.[a-z]{2,6}$/",$var_email)==false){
    $error=13;   
}
if(!empty($nama_file)){
  if($type_file != 'image/jpeg' AND $type_file != 'image/gif' AND $type_file != 'image/pjpeg' AND $type_file !='image/png'){
    
     $error=14;
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
            $error_msg = "nis tidak boleh kosong ";
            break;
         case 2:
            $error_msg = "nama tidak boleh kosong";
            break;
         case 3:
            $error_msg = "kelas tidak boleh kosong";
            break;
         case 4:
            $error_msg = "jurusan tidak boleh kosong";
            break;
         case 5:
            $error_msg = "angkatan tidak boleh kosong ";
            break;
         case 6:
            $error_msg = "jenis kelamin tidak boleh kosong";
            break;
         case 7:
            $error_msg = "email tidak boleh kosong";
            break;
         case 8:
            $error_msg = "nomor hp tidak boleh kosong";
            break;
         case 9:
            $error_msg = "alamat tidak boleh kosong";
            break;
         case 10:
            $error_msg = "nis tidak boleh mengandung karakter";
            break;
         case 11:
            $error_msg= "nama tidak boleh mangandung angka";
            break;
         case 12:
            $error_msg = "nis tidak boleh ada yang sama";
            break;
         case 13:
            $error_msg = "email tidak valid, contoh email yang valid: email@yahoo.com";
            break;
         case 14:
            $error_msg = "type file <b>".$nama_file."</b> : ".$type_file."<br>Type file yang boleh di uploaud : gif,jpg dan png";
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