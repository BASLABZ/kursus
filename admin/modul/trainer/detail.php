<?php
    $id=$_GET['id'];
   //echo $id; exit;
   $sql_detail="SELECT * FROM anggota WHERE anggota_nis='".$id."'";
       // echo $sql_detail; exit;
    $result_detail=mysql_query($sql_detail);
    $data_anggota=mysql_fetch_array($result_detail);
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
                                                <td class="text-left">Nis</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_nis']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Nama</td>
                                                <td class="col-sm-1"> :</td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_nama']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Kelas</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_anggota['kelas']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">TTL</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_tempat'].", ".$data_anggota['anggota_tgl_lahir']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Jurusan</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_anggota['jurusan']; ?></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-left">Jenis Kelamin</td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_jns_kelamin']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Email</td>
                                                <td class="col-sm-1"> :</td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_email']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Nomor HP</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_hp']; ?></td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td class="text-left">Alamat</td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_alamat']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Masa Berlaku</td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_berlaku']; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                          
                            
                         
                            <div class="col-lg-3">
                            <a href="?page=anggota.display"><button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-circle-arrow-left"></i> Kembali</button></a>
                            </div>
                        </div>
                    </div>
                </div>