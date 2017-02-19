<?php
require_once('../inc-db.php');
require('fpdf17/fpdf.php');

//Menampilkan data dari tabel di database

$result=mysql_query("SELECT *
FROM
    anggota
    INNER JOIN pinjaman 
        ON (anggota.anggota_nis = pinjaman.anggota_nis)
    INNER JOIN buku 
        ON (buku.kode_buku = pinjaman.kode_buku)") or die(mysql_error());

//Inisiasi untuk membuat header kolom

$column_idanggota = "";          //1
$column_namaanggota = "";              //2
$column_kodebuku = "";                  //3
$column_judul = "";     //4
$column_tanggalpinjam = "";      //5
$column_status = "";    //6
//$column_jumlah_akhir = "";     //7


//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
	$idanggota = $row["anggota_nis"];             //1
    $namaanggota = $row["anggota_nama"];            //2
    $kodebuku = $row["kode_buku"];                   //3
    $judul = $row["judul_buku"];      //5
    $tanggal_pinjam = $row["tanggal_pinjam"];     //6
	$status_pinjam = $row["status_pinjam"];     //7
    if($status_pinjam == 1 ){
        $show_status_pinjam="dipinjam";
    }else{
        $show_status_pinjam="kembali";
    }
	$column_idanggota = $column_idanggota.$idanggota."\n";   //1
    $column_namaanggota = $column_namaanggota.$namaanggota."\n";   //2
    $column_kodebuku = $column_kodebuku.$kodebuku."\n";  //3
    $column_judul = $column_judul.$judul."\n";  //4
    $column_tanggalpinjam = $column_tanggalpinjam.$tanggal_pinjam."\n"; //5
    $column_status = $column_status.$show_status_pinjam."\n";         //6
   // $column_jumlah_akhir = $column_jumlah_akhir.$jumlah_akhir."\n";  //7
    

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
$pdf->Cell(30,10,'LAPORAN PEMINJAMAN',0,0,'C');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(204,153,0);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',8);
$pdf->SetY($Y_Fields_Name_position);

$pdf->SetX(5);                             //1  -->5 sebelah kiri
$pdf->Cell(21,8,'ID Anggota',1,0,'C',1);  
        
$pdf->SetX(26);                             //2     40  //geser lebar
$pdf->Cell(45,8,'Nama Anggota',1,0,'C',1);          //geser judul

$pdf->SetX(69);                             //3
$pdf->Cell(35,8,'Kode  Buku',1,0,'C',1);

$pdf->SetX(104);                            //4
$pdf->Cell(46,8,'Judul',1,0,'C',1);

$pdf->SetX(150);                            //5
$pdf->Cell(30,8,'Tanggal Pinjam',1,0,'C',1);

$pdf->SetX(180);                            //6
$pdf->Cell(24,8,'Status',1,0,'C',1);

$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',8);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(21,6,$column_idanggota,1,'C');           //1

$pdf->SetY($Y_Table_Position);
$pdf->SetX(26);
$pdf->MultiCell(43,6,$column_namaanggota,1,'L');           //2      40

$pdf->SetY($Y_Table_Position);
$pdf->SetX(69);
$pdf->MultiCell(35,6,$column_kodebuku,1,'C');         //3

$pdf->SetY($Y_Table_Position);
$pdf->SetX(104);                                    //geser kanan kiri               
$pdf->MultiCell(45,6,$column_judul,1,'L');         //4 lebar

$pdf->SetY($Y_Table_Position);
$pdf->SetX(150);
$pdf->MultiCell(30,6,$column_tanggalpinjam,1,'C');          //5

$pdf->SetY($Y_Table_Position);
$pdf->SetX(180);
$pdf->MultiCell(24,6,$column_status,1,'C');              //6


$pdf->Output();
?>