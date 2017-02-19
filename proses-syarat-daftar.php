<?php
include("inc/inc-db.php");
//terimaksih telah melangkapi data diri anda
//jika anda memenuhi persyratan makan username dan password kami kirim ke email anda
//terimakasih
//tbl_person
$var_nama_depan=$_POST['frm_nama_depan'];
$var_nama_belakang=$_POST['frm_nama_belakang'];
$var_kelamin=$_POST['jenis_kelamin'];
$var_alamat=$_POST['frm_alamat'];
$var_tempat_lahir=$_POST['frm_tempat_lahir'];
$var_tanggal_lahir=$_POST['frm_tgl_lahir'];
$var_agama=$_POST['frm_agama'];
$var_hp=$_POST['frm_hp'];
$var_email=$_POST['frm_email'];
//tbl_user
$var_username =$_POST['frm_username'];
$var_password =md5($_POST['frm_password']);
//tbl_member
$var_institute = $_POST['frm_institute'];

$type_foto  = $_FILES['foto']['type'];
$lokasi_foto =   $_FILES['foto']['tmp_name'];
$nama_foto =     rand(1000,100000)."-".$_FILES['foto']['name'];
$ukuran_foto =   $_FILES['foto']['size'];

$type_file  = $_FILES['fupload']['type'];
$lokasi_file =   $_FILES['fupload']['tmp_name'];
$nama_file =     rand(1000,100000)."-".$_FILES['fupload']['name'];
$ukuran_file =   $_FILES['fupload']['size'];

$sql_person="INSERT INTO tbl_person 
					VALUES ('',
							'$var_nama_depan',
							'$var_nama_belakang',
							'$var_kelamin',
							'$var_alamat',
							'$var_tempat_lahir',
							'$var_tanggal_lahir',
							'$var_agama',
							'$var_hp',
							'$var_email',
							'$nama_foto',
							'0')";
						//echo $sql_person; exit();
$result_person=mysql_query($sql_person);
$person_id=mysql_insert_id();

$sql_member="INSERT INTO tbl_member 
					VALUES ('',
							'$person_id',
							'$var_institute',
							'$nama_file',
							'nonaktifkan')";
						//echo $sql_member; exit();
$result_member=mysql_query($sql_member);

$sql_user ="INSERT INTO tbl_user 
				   VALUES ('',
				   		   '$var_username',
				   		   '$var_password',
				   		   '4',
				   		   '$person_id')";
				   		  // echo $sql_user; exit();
$result_user =mysql_query($sql_user);


 $derektori="admin/uploads/foto/".$nama_foto;

    move_uploaded_file($lokasi_foto,"$derektori");

 $derektori_file="admin/uploads/foto/".$nama_file;
 
    move_uploaded_file($lokasi_file,"$derektori_file");

header("Location:index.php?page=daftar-berhasil");
?>