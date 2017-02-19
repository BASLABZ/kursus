<?php
    $id=$_GET['id'];
   //echo $id; exit;
   $sql_detail="SELECT * FROM tbl_courses WHERE course_id='".$id."'";
       // echo $sql_detail; exit;
    $result_detail=mysql_query($sql_detail);
    $data_kursus=mysql_fetch_array($result_detail);
    ?>
    <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                           
                                <div class="col-lg-3">
                                 <form method="post" action="lib/cetak-kartu.php" target="_blank">
                           <input type="hidden" name="id" value="<?php echo $data_anggota['anggota_nis']; 
                           
                          //echo "Buku Id : ".$data_buku['buku_id']; exit;
                           ?>"/>
                           <button type="submit" class="btn btn-default">
                            <i class="fa fa-print fa-fw">
                            </i>Cetak Kartu Anggota</button>
                            </form>
                                <br />
                                    <a href="#"> 
                                        <img class="img-responsive img-hover thumbnail" src="../images/<?php echo $data_anggota['anggota_images']; ?>" alt="" height="160px auto" width="200px auto"> 
                                    </a>
                                </div>
<br /><br />
                           <div class="row">
                                    <div class="col-lg-6">
                                        <table>
                                            <tr>
                                                <td class="text-left">Nama Kursus</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_kursus['course_title']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Kategori</td>
                                                <td class="col-sm-1"> :</td>
                                                <td class="text-left"><?php echo $data_kursus['courseclass_id']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Detail Kursus</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_kursus['course_detail']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Biaya Kursus</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_kursus['course_price']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Kuota Kursus</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_kursus['course_quota']; ?></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-left">Bahan Pelajaran</td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_kursus['matapelajaran']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Materi Kursus</td>
                                                <td class="col-sm-1"> :</td>
                                                <td class="text-left"><?php echo $data_kursus['coursematerial']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Dosen Pengajar</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_kursus['trainer']; ?></td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
        


                            
                         
                            <div class="col-lg-3">
                            <a href="?page=course.display"><button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-circle-arrow-left"></i> Kembali</button></a>
                            </div>
                        </div>
                    </div>
                </div>