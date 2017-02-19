  <?php
  require_once('inc-db.php');
  $var_coursematId=$_GET['id'];
  $sql="select * from coursematerial where coursematerial_id='".$var_coursematId."'";
  //echo $sql; exit;
  $result=mysql_query($sql);
  $data=mysql_fetch_array($result);

  
  ?>
  <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            UPDATE MATERI
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="defaultForm" method="post" action="?page=materi.proces-update" enctype="multipart/form-data">
                                       <input type="hidden" name="hidden_coursematerialid" value="<?php echo $data['coursematerial_id']; ?>"/>
                                       <div class="form-group">
                                            <label>Judul Materi</label>
                                            <input type="text" name="frm_coursemattitle" class="form-control" value="<?php echo $data['coursematerial_title']; ?>"/>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>File Materi</label>
                                            <input type="file" name="fupload" />
                                            <span class="help-block" id="Pfupload">
                                            <img src="uploads/materi_kursus/<?php echo $data['coursematerial_file']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input type="text" name="frm_kelas" class="form-control" value="<?php echo $data['kelas']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <input type="text" name="frm_jurusan" class="form-control" value="<?php echo $data['jurusan']; ?>"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label >Tempat</label>
                                            <input type="text" name="frm_tempat" class="form-control" value="<?php echo $data['anggota_tempat']; ?>"/>
                                        </div>
                                        
                                        <div class="form-group">
                                       <label>Tanggal Lahir</label> 
                                        </div>
                                        
                                        <div class="form-group">
            
                                        <div class="col-xs-4">
                                            <select class="form-control" name="tgl_lahir">
                                                  <?php
                                         $tanggal_lahir=substr($data['anggota_tgl_lahir'],0,2);
                                         ?>
                                         
                                            <option value="<?php echo $tanggal_lahir; ?>"><?php echo $tanggal_lahir; ?></option>
                                                    <?php
                                                    for($tanggal=1;$tanggal<=31;$tanggal++){
                                                    ?>
                                                    <option value="<?php echo $tanggal; ?>"><?php echo $tanggal; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    <div class="col-xs-4">
                                    <select class="form-control" name="bln_lahir">
                                     <?php
                                         $bulan_lahir=substr($data['anggota_tgl_lahir'],3,-5);
                                         ?>
                                                <option value="<?php echo $bulan_lahir; ?>"><?php echo $bulan_lahir; ?></option>
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="November">November</option>
                                                <option value="Desember">Desember</option>
                                    </select>
                                     </div>
                                    <div class="col-xs-4">
                                     <select class="form-control" name="thn_lahir">
                                     <?php
                                         $tahun_lahir=substr($data['anggota_tgl_lahir'],-4);
                                         ?>
                                            <option value="<?php echo $tahun_lahir; ?>"><?php echo $tahun_lahir; ?></option>
                                     <?php
                                            $tahun_now=date('Y');
                                            for($tahun=1995;$tahun<=$tahun_now;$tahun++){
                                            ?>
                                            <option value="<?php echo $tahun; ?>"><?php echo $tahun; ?></option>
                                            <?php
                                            }
                                            ?>
                                    </select>
                                    </div>
                                    </div>
                                        
                                         <div class="form-group">
                                         <label><!-- p --></label><br />
                                         </div>
                                        <br />
                                        
                                        
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <br />
                                            <?php
                                            if($data['anggota_jns_kelamin']=='Laki-laki'){
                                            ?>
                                            <input type="radio" name="frm_jns_kel" value="Laki-laki" id="laki-laki" checked=""/><label for="laki-laki">Laki-Laki</label>
                                            <input type="radio" name="frm_jns_kel" value="Perempuan" id="perempuan" /><label for="perempuan">Perempuan</label> 
                                            <?php
                                            }else{
                                            ?>
                                            <input type="radio" name="frm_jns_kel" value="Laki-laki" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
                                            <input type="radio" name="frm_jns_kel" value="Perempuan" id="perempuan" checked=""/><label for="perempuan">Perempuan</label>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="frm_email" class="form-control" value="<?php echo $data['anggota_email']; ?>"/>
                                        </div>
                                        
                                             <div class="form-group">
                                       <label>Berlaku Sampai</label> 
                                        </div>
                                        
                                        <div class="form-group">
            
                                         <div class="col-xs-4">
                                         <select class="form-control" name="tgl_berlaku">
                                         <?php
                                         $tanggal_berlaku=substr($data['anggota_berlaku'],0,2);
                                         ?>
                                         
                                            <option value="<?php echo $tanggal_berlaku; ?>"><?php echo $tanggal_berlaku; ?></option>
                                             <?php
                                             for($tanggal=1;$tanggal<=31;$tanggal++){
                                             ?>
                                             <option value="<?php echo $tanggal; ?>"><?php echo $tanggal; ?></option>
                                            <?php
                                             }
                                             ?>
                                        </select>
                                        </div>
                                        
                                         <div class="col-xs-4">
                                         <select class="form-control" name="bln_berlaku">
                                         <?php
                                         $bulan_berlaku=substr($data['anggota_berlaku'],3,-5);
                                         ?>
                                                <option value="<?php echo $bulan_berlaku; ?>"><?php echo $bulan_berlaku; ?></option>
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="November">November</option>
                                                <option value="Desember">Desember</option>
                                         </select>
                                        </div>
                                    <div class="col-xs-4">
                                        <select class="form-control" name="thn_berlaku">
                                         <?php
                                         $tahun_berlaku=substr($data['anggota_berlaku'],-4);
                                         ?>
                                            <option value="<?php $tahun_berlaku ?>"><?php echo $tahun_berlaku ?></option>
                                            <?php
                                            $tahun_now=date('Y')+3;
                                            for($tahun=1995;$tahun<=$tahun_now;$tahun++){
                                            ?>
                                            <option value="<?php echo $tahun; ?>"><?php echo $tahun; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    </div>
                                        
                                         <div class="form-group">
                                         <label><!--jana--></label><br />
                                         </div>
                                        <br />
                                        
                                        
                                        <div class="form-group">
                                            <label>Nomor handphone</label>
                                            <input type="text" name="frm_hp" class="form-control" value="<?php echo $data['anggota_hp'] ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="frm_alamat" class="form-control" rows="3"><?php echo $data['anggota_alamat']; ?></textarea>
                                              <span class="help-block" id="alamat">
                                            </div>
                                      <br />
                                        <button type="submit" class="btn btn-default">UPDATE</button>
                                        
                                    </form>
                                
                                <!-- /.col-lg-6 (nested) -->
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
<script type="text/javascript"> 
$(document).ready(function() { 
    $('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            frm_nis: {
               // container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'nis tidak boleh kosong'
                    },
                    digits:{
                        message: 'nis tidak boleh mengandung huruf'
                    }
                }
            },
            frm_nama: {
                //container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'nama tidak boleh kosong'
                    }
                }
            },
         
            frm_kelas: {
               // container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'kelas tidak boleh kosong'
                    }
                }
            },
            frm_jurusan: {
               
                validators: {
                    notEmpty: {
                        message: 'jurusan tidak boleh kosong'
                    }
                }
            },
            frm_angkatan: {
               
                validators: {
                    notEmpty: {
                        message: 'angkatan tidak boleh kosong'
                    }
                }
            },
            frm_jns_kel: {
               
                validators: {
                    notEmpty: {
                        message: 'jenis kelamin tidak boleh kosong'
                    }
                }
            },
            frm_email: {
               
                validators: {
                    notEmpty: {
                        message: 'email tidak boleh kosong'
                    },
                    emailAddress: {
                        message: 'email harus valid . contoh : email@yahoo.com'
                    }
                }
            },
            frm_hp: {
              
                validators: {
                    notEmpty: {
                        message: 'nomor hp tidak boleh kosong'
                    },
                    digits:{
                        message: 'nomor hp tidak boleh mengandung huruf'
                    }
                }
            },
            frm_alamat: {
                container: '#alamat',
                validators: {
                    notEmpty: {
                        message: 'alamat tidak boleh kosong'
                    }
                }
            }
        }
    });
    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script> 