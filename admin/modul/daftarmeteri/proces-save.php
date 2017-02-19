
<!-- <script language="javascript">
alert("gagal simpan");
</script> -->
<?php
	include("display.php");
exit();
$var_person_id=$_SESSION['person_id'];
$var_course_id=$_POST['course_id'];

$sql="INSERT INTO tbl_transaksi VALUES ('','$var_person_id','$var_course_id','0')";
//echo $sql; exit();

$result=mysql_query($sql);
if($result){
	//
	include("display.php");
	//header("Location: ?page=listCourseTaken.display");
}


?>