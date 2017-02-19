 <?php
 require_once('../inc-db.php');
 $id=$_POST['id'];
   // echo $id; exit;
   $sql_detail="SELECT *
FROM
    anggota WHERE anggota_nis='".$id."'";
      //  echo $sql_buku; exit;
    $result_detail=mysql_query($sql_detail);
    $data_anggota=mysql_fetch_array($result_detail);
    ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

	<title>Cetak Kartu Anggota</title>
<style>
#atas {
width: 430px;
margin-top: 10px;
margin-bottom:10px;
padding:1px;
border:1px solid #000;
}
#bawah {
width: 430px;
margin-top: 10px;
margin-bottom:10px;
padding:1px;
border:1px solid #000;
}
</style>
</head>

<body>
<a href="cetak.htm" onClick="window.print();return false">CETAK</a>
<div id="atas">
<table border='0'>
<tr><td rowspan="4"><img src="download.jpg" width="70" height="100"/></td></tr>
<tr><td colspan="4" align="center"><b>PERPUSTAKAAN SEKOLAH</b></td>
<tr><td colspan="4" align="center"><b>SMK MA'ARIF PONJONG GUNUNG KIDUL</b></td></tr>
<tr><td colspan="4" align="center">Koripan Sumbergiri Ponjong Gunung Kidul</td></tr>
<tr><td colspan="4" align="center">KARTU ANGGOTA</td></tr>
<tr><td rowspan="7"><img src="../../images/<?php echo $data_anggota['anggota_images']; ?>" width="100" height="140"/></td></tr>
<tr><td>ID Anggota</td><td>:</td><td><?php echo $data_anggota['anggota_nis']; ?></td></tr>
<tr><td>Nama</td><td>:</td><td><?php echo $data_anggota['anggota_nama']; ?></td></tr>
<tr><td>TTL</td><td>:</td><td>Yogyakarta, 14 Mei 2002</td></tr>
<tr><td>Kelas</td><td>:</td><td>X D</td></tr>
<tr><td>Jurusan</td><td>:</td><td>Rekayasa Perangkat Lunak</td></tr>
<tr><td>Masa Berlaku</td><td>:</td><td>26 Agustus 2016</td></tr>
</table>
</div>

<div id="bawah">
<p align='center'><b>ATURAN PEMINJAMAN</b></p>
<ol type='1'>
<li>Kartu ini harus dibawa waktu berkunjung ke Perpustakaan SMK MA'ARIF PONJONG</li>
<li>Kartu ini tidak boleh dipergunakan orang lain.</li>
<li>Peminjaman dilayani setiap jam kerja.</li>
<li>Hanya diijinkan meminjam mx. 2 buku.</li>
<li>Lama peminjaman mx. 3 hari</li>
<li>Pengembalian hendaklah tepat pada waktunya. keterlambatan pengenbalian dikenakan denda</li>
<li>Pengembalian buku masih dalam keadaan bersih serta utuh</li>
<li>Kerusakan yang diakibatkan peminjam menjadi tanggung jawab peminjam</li>
</ol>
</div>

</body>
</html>