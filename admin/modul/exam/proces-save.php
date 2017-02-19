<?php
require_once('inc-db.php');

if(isset($_POST['selesaimengerjakan'])){
            $option=$_POST["option"];
            $id_soal=$_POST["id"];
            $jumlah_soal=$_POST['frm_jumlahsoal'];
            
            $score=0;
            $benar=0;
            $salah=0;
            $kosong=0;

            for ($i=0;$i<$jumlah_soal;$i++){
                //id nomor soal
                $nomor=$id_soal[$i];
                
                //jika user tidak memilih jawaban
                if (empty($option[$nomor])){
                    $kosong++;
                }else{
                    //jawaban dari user
                    $jawaban_peserta=$option[$nomor];
                    
                    //cocokan jawaban user dengan jawaban di database
                    $query=mysql_query("select * from trx_question where question_id='".$nomor."' and question_answer='$jawaban_peserta'");
                    
                    $cek=mysql_num_rows($query);
                    
                    if($cek){
                        //jika jawaban cocok (benar)
                        $benar++;
                    }else{
                        //jika salah
                        $salah++;
                    }
                    
                } 
                /*RUMUS
                Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan 
                hasil= 100 / jumlah soal * jawaban yang benar
                */
                
                $result=mysql_query("select * from trx_question");
                $jumlah_soal=mysql_num_rows($result);
                $score = 100/$jumlah_soal*$benar;
                $hasil = number_format($score,1);

                $sqlinsertScore="INSERT";
                
            }
        }

?>
<br/><br/>
<table style="margin-left: 40%; width: 500px " class="table">
    <tr>
        <th colspan="3"><center>Hasil Ujian Anda</center></th>
    </tr>

    <tr><td>Nilai Anda</td><td>: <?php echo $hasil; ?></td></tr>
    <tr><td>Jumlah Jawaban Benar</td><td> : <?php echo $benar ?></td></tr>
    <tr><td>Jumlah Jawaban Salah</td><td> : <?php  echo $salah ?></td></tr>
    <tr><td>Jumlah Jawaban Kosong</td><td>: <?php echo $kosong ?></td></tr>
    <tr>
        <?php 
            if ($hasil >= ((0.5*$jumlah_soal)*10) ) {
            echo "<td rowspan='4'><h1>Lulus</h1></td></tr>";
         }else {
            echo "<td rowspan='4'><h1>Tidak Lulus</h1></td></tr>";
         }
        ?>
    </tr>
</table>