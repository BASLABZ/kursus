<?php
$var_tanggal_awal=$_POST['frm_tanggal_awal'];
$var_tanggal_selesai=$_POST['frm_tanggal_selesai'];
//echo $var_tanggal_awal." | ".$var_tanggal_selesai;
//exit;

error_reporting(0);
if(empty($var_tanggal_awal) and empty($var_tanggal_selesai)){
    echo "Maaf data yang anda cetak kosong";
    exit;
}else{
  //  echo "oooo";

require_once('../inc-db.php');
require('fpdf17/fpdf.php');

//Menampilkan data dari tabel di database
 function konversi_tanggal($date)  
     {  
         $exp = explode('-',$date);  
     if(count($exp) == 3)  
     {  
       $date = $exp[2].'-'.$exp[1].'-'.$exp[0];  
     }  
     return $date;  
     }   
    
//exit;
$result=mysql_query("SELECT *
FROM
    pinjaman
    INNER JOIN denda 
        ON (pinjaman.pinjam_id = denda.pinjam_id)
    INNER JOIN buku 
        ON (buku.kode_buku = pinjaman.kode_buku)
    INNER JOIN anggota 
        ON (anggota.anggota_nis = pinjaman.anggota_nis) WHERE tanggal_pinjam BETWEEN '".konversi_tanggal($var_tanggal_awal)."' AND '".konversi_tanggal($var_tanggal_selesai)."'") or die(mysql_error());

//Inisiasi untuk membuat header kolom

$column_idanggota = "";          //1
$column_judul = "";         //2
$column_tanggalpinjam = "";          //3
$column_tanggalharuskembali = "";     //4
$column_tanggalkembali = "";      //5
$column_denda = "";    //6
$column_keterlambatan = "";     //7


//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
    
    
	$id_anggota = $row["anggota_nis"];             //1
    $judul = $row["judul_buku"];            //2
    $tanggal_pinjam = $row["tanggal_pinjam"];                   //3
    $tanggal_harus_kembali=$row['tanggal_harus_kembali']; //4
    $tanggal_kembali = $row['tanggal_kembali'];    //5
    $denda = $row["bayar"];      //6
    $keterlambatan = $row["bayar"];     //7
	
     
	$column_idanggota = $column_idanggota.$id_anggota."\n";   //1
    $column_judul = $column_judul.$judul."\n";   //2
    $column_tanggalpinjam = $column_tanggalpinjam.$tanggal_pinjam."\n";  //3
    $column_tanggalharuskembali = $column_tanggalharuskembali.$tanggal_harus_kembali."\n";  //4
    $column_tanggalkembali = $column_tanggalkembali.$tanggal_kembali."\n"; //5
    $column_denda = $column_denda.$denda."\n";         //6
    $column_keterlambatan = $column_keterlambatan.$keterlambatan."\n";  //7
    

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
$pdf->Cell(30,10,'LAPORAN DENDA',0,0,'C');
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
        
$pdf->SetX(26);                            //2     40  //geser lebar
$pdf->Cell(45,8,'Judul',1,0,'C',1);        //geser judul

$pdf->SetX(69);                            //3
$pdf->Cell(30,8,'Tanggal Pinjam',1,0,'C',1);

$pdf->SetX(98);                            //4
$pdf->Cell(32,8,'Tanggal harus kembali',1,0,'C',1);

$pdf->SetX(130);                           //5
$pdf->Cell(26,8,'Tanggal Kembali',1,0,'C',1);

$pdf->SetX(156);                           //6
$pdf->Cell(24,8,'Denda',1,0,'C',1);

$pdf->SetX(180);                           //7
$pdf->Cell(25,8,'Keterlambatan',1,0,'C',1);

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
$pdf->MultiCell(43,6,$column_judul,1,'L');           //2      40

$pdf->SetY($Y_Table_Position);
$pdf->SetX(69);
$pdf->MultiCell(29,6,$column_tanggalpinjam,1,'C');         //3

$pdf->SetY($Y_Table_Position);
$pdf->SetX(98);
$pdf->MultiCell(32,6,$column_tanggalharuskembali,1,'C');         //4

$pdf->SetY($Y_Table_Position);
$pdf->SetX(130);
$pdf->MultiCell(26,6,$column_tanggalkembali,1,'C');          //5

$pdf->SetY($Y_Table_Position);
$pdf->SetX(156);
$pdf->MultiCell(24,6,$column_denda,1,'C');              //6

$pdf->SetY($Y_Table_Position);
$pdf->SetX(180);
$pdf->MultiCell(25,6,$column_keterlambatan,1,'C');              //7

$pdf->Output();
}
?>