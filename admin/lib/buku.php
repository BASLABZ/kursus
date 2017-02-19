<?php
require_once('../inc-db.php');
require('fpdf17/fpdf.php');

//Menampilkan data dari tabel di database

$result=mysql_query("SELECT *
FROM
    penerbit
    INNER JOIN buku 
        ON (penerbit.penerbit_kode = buku.kode_penerbit)") or die(mysql_error());

//Inisiasi untuk membuat header kolom

$column_kode = "";          //1
$column_judul = "";              //2
$column_isbn = "";                  //3
$column_pengarang = "";     //4
$column_penerbit = "";      //5
$column_jumlah_awal = "";    //6
$column_jumlah_akhir = "";     //7


//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
    
    
	$kode = $row["kode_buku"];             //1
    $judul = $row["judul_buku"];            //2
    $isbn = $row["isbn"];                   //3
   // $pengarang=$row['nama_pengarang'];//."<br>";
     $sql_pengarang="SELECT *
                                FROM
                            pengarang
                                INNER JOIN dikarang 
                            ON (pengarang.kode_pengarang = dikarang.kode_pengarang) WHERE dikarang.kode_buku='".$row['kode_buku']."'";
                            //echo $sql_pengarang; exit;
                            $result1=mysql_query($sql_pengarang);
                            while($data1=mysql_fetch_array($result1)){
                            $pengarang=$data1['nama_pengarang'];
                            }
    
    
    //$pengarang = $row['penerbit_nama'];    //4
    $penerbit = $row["penerbit_nama"];      //5
    $jumlah_awal = $row["jumlah_awal"];     //6
	$jumlah_akhir = $row["jumlah_akhir"];     //7
     
	$column_kode = $column_kode.$kode."\n";   //1
    $column_judul = $column_judul.$judul."\n";   //2
    $column_isbn = $column_isbn.$isbn."\n";  //3
    $column_pengarang = $column_pengarang.$pengarang."\n";  //4
    $column_penerbit = $column_penerbit.$penerbit."\n"; //5
    $column_jumlah_awal = $column_jumlah_awal.$jumlah_awal."\n";         //6
    $column_jumlah_akhir = $column_jumlah_akhir.$jumlah_akhir."\n";  //7
    

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
$pdf->Cell(30,10,'LAPORAN DATA BUKU',0,0,'C');
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
$pdf->Cell(21,8,'KODE BUKU',1,0,'C',1);  
        
$pdf->SetX(26);                            //2     40  //geser lebar
$pdf->Cell(45,8,'JUDUL',1,0,'C',1);        //geser judul

$pdf->SetX(69);                            //3
$pdf->Cell(35,8,'ISBN',1,0,'C',1);

$pdf->SetX(104);                            //4
$pdf->Cell(26,8,'PENGARANG',1,0,'C',1);

$pdf->SetX(130);                           //5
$pdf->Cell(26,8,'PENERBIT',1,0,'C',1);

$pdf->SetX(156);                           //6
$pdf->Cell(24,8,'JUMLAH AWAL',1,0,'C',1);

$pdf->SetX(180);                           //7
$pdf->Cell(25,8,'JUMLAH AKHIR',1,0,'C',1);

$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',8);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(21,6,$column_kode,1,'C');           //1

$pdf->SetY($Y_Table_Position);
$pdf->SetX(26);
$pdf->MultiCell(43,6,$column_judul,1,'L');           //2      40

$pdf->SetY($Y_Table_Position);
$pdf->SetX(69);
$pdf->MultiCell(35,6,$column_isbn,1,'C');         //3

$pdf->SetY($Y_Table_Position);
$pdf->SetX(104);
$pdf->MultiCell(26,6,$column_pengarang,1,'C');         //4

$pdf->SetY($Y_Table_Position);
$pdf->SetX(130);
$pdf->MultiCell(26,6,$column_penerbit,1,'C');          //5

$pdf->SetY($Y_Table_Position);
$pdf->SetX(156);
$pdf->MultiCell(24,6,$column_jumlah_awal,1,'C');              //6

$pdf->SetY($Y_Table_Position);
$pdf->SetX(180);
$pdf->MultiCell(25,6,$column_jumlah_akhir,1,'C');              //7

$pdf->Output();
?>