<?php
require_once('../inc-db.php');
require('fpdf17/fpdf.php');

//Menampilkan data dari tabel di database

$result=mysql_query("SELECT *
FROM
    anggota") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_nis = "";
$column_nama = "";
$column_kelas = "";
$column_jurusan = "";
$column_angkatan = "";
$column_email = "";


//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
	$nis = $row["anggota_nis"];    //1
    $nama = $row["anggota_nama"];   //2
    $kelas = $row["kelas"];  //3
    $jurusan = $row["jurusan"];  //4
    $angkatan = $row["anggota_tempat"];  //5
	$email= $row["anggota_email"];  //6
 
    

	$column_nis = $column_nis.$nis."\n";   //1
    $column_nama = $column_nama.$nama."\n";   //2
    $column_kelas = $column_kelas.$kelas."\n";  //3
    $column_jurusan = $column_jurusan.$jurusan."\n";  //4
    $column_angkatan = $column_angkatan.$angkatan."\n"; //5
    $column_email = $column_email.$email."\n";  //6
    

//Create a new PDF file
$pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
$pdf->Image('logo.png',5,11,-275);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(80);
$pdf->Cell(30,10,'',0,0,'C');
$pdf->Ln();
$pdf->Cell(80);
$pdf->Cell(30,10,'LAPORAN DATA ANGGOTA',0,0,'C');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(204,153,0);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);

$pdf->SetX(5);                             //1  -->5 sebelah kiri
$pdf->Cell(25,8,'Nis',1,0,'C',1);  
        
$pdf->SetX(30);                            //2     40
$pdf->Cell(40,8,'Nama',1,0,'C',1);

$pdf->SetX(70);                            //3
$pdf->Cell(25,8,'Kelas',1,0,'C',1);

$pdf->SetX(95);                            //4
$pdf->Cell(45,8,'Jurusan',1,0,'C',1);

$pdf->SetX(140);                           //5
$pdf->Cell(30,8,'Tempat',1,0,'C',1);

$pdf->SetX(170);                           //6
$pdf->Cell(35,8,'Email',1,0,'C',1);

$pdf->Ln();

//Table position, under Fields Name

$Y_Table_Position = 38;



//Now show the columns
$pdf->SetFont('Arial','',8);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(25,6,$column_nis,1,'C');           //1

$pdf->SetY($Y_Table_Position);
$pdf->SetX(30);
$pdf->MultiCell(40,6,$column_nama,1,'L');           //2      40

$pdf->SetY($Y_Table_Position);
$pdf->SetX(70);
$pdf->MultiCell(25,6,$column_kelas,1,'C');         //3

$pdf->SetY($Y_Table_Position);
$pdf->SetX(95);
$pdf->MultiCell(45,6,$column_jurusan,1,'C');         //4

$pdf->SetY($Y_Table_Position);
$pdf->SetX(140);
$pdf->MultiCell(30,6,$column_angkatan,1,'C');          //5

$pdf->SetY($Y_Table_Position);
$pdf->SetX(170);
$pdf->MultiCell(35,6,$column_email,1,'C');              //6

$pdf->Output();
?>