  <div class="layout-content">
    <div class="layout-content-body">
      <div class="title-bar">
        <h1 class="title-bar-title">
          <span class="d-ib">Tambah Kursus</span>
        </h1>

      </div>
      
      <div class="row gutter-xs">
        <div class="col-xs-12">
          <div class="card">
            <div class="card-body">

              <CENTER style="">
             
              </CENTER>

              <div class="col-sm-6 col-sm-offset-3">
                <div class="demo-form-wrapper">
                  <br>
                  <form id="defaultForm" method="post" action="?page=course.proces-save" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="ruangan">Nama Kursus Pelatihan</label>
                    <input name="frm_coursename" class="form-control" type="text">
                  </div>

                  <div class="form-group">
                    <label>Detail Pelatihan</label>
                    <input name="frm_coursedetail" class="form-control" type="text">
                  </div>

                  <div class="form-group">
                    <label>Biaya Pelatihan</label>
                    <i>*Masukkan nominal tanpa menggunakan tanda(.)</i>
                    <input name="frm_courseprice" class="form-control" type="text">
                  </div>

                  <div class="form-group">
                    <label>Kuota Pelatihan</label>
                    <i>*Maksimum kuota adalah 20</i>
                    <input name="frm_coursequota" class="form-control" type="text">
                  </div>

                   <div class="form-group">
                    <label class="control-label">Pilih Kategori/kelas Kursus :</label>
                    <select name="frm_coursecategory" class="form-control" required="">
                        <option value='0'>-Pilih-</option>
                        <?php
                          $sqlcek="SELECT * from ref_courseclass";
                          $runsql=mysql_query($sqlcek);
                          while ($dataclass=mysql_fetch_array($runsql)) {
                                  $varId_class=$dataclass['courseclass_id'];
                                  $varNama_class=$dataclass['courseclass_name'];
                        ?>
                        <option value='<?php echo $varId_class ; ?>'><?php echo $varNama_class; ?></option> 
                        <?php 
                          }//tutup while
                        ?>

                    </select>
                  </div>

                  <div class="form-group">
                    <label>Trainer Pelatihan</label><br>
                      <?php
                        $sqlcektrainer="SELECT * from tbl_trainer t JOIN tbl_person p ON p.person_id=t.person_id";
                        $runsql=mysql_query($sqlcektrainer);
                        while ($datatrainer=mysql_fetch_array($runsql)) {
                                  $varId_trainer=$datatrainer['trainer_id'];
                                  $varId_person=$datatrainer['person_id'];
                                  $var_firstname=$datatrainer['person_firstname'];
                                  $var_lastname=$datatrainer['person_lastname'];
                      ?>

                      <label class="custom-control custom-control-primary custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="trainer[]" value="<?php echo $varId_trainer; ?>">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label"><?php echo $var_firstname." ".$var_lastname;  ?></span>
                      </label>

                      
                      <?php } ?>
                  </div>
                  
                  <div class="form-group">
                    <label>Bahan Pelajaran&Pelatihan</label><br>
                      <?php
                      $sqlcekbahan="SELECT * from ref_matapelajaran m JOIN ref_syllabus s ON s.syllabus_id=m.syllabus_id";
                        $runsql=mysql_query($sqlcekbahan);
                        while ($databahan=mysql_fetch_array($runsql)) {
                                  $varId_bahan=$databahan['matapelajaran_id'];
                                  $varNama_bahan=$databahan['matapelajaran_name'];
                      ?>

                      <label class="custom-control custom-control-primary custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="matapelajaran[]" value="<?php echo $varId_bahan; ?>">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label"><?php echo $varNama_bahan;  ?></span>
                      </label>

                      
                      <?php 
                        }//tutup while bahan
                      ?>
                  </div>

                  <div class="form-group">
                    <label>Materi Pelatihan</label><br>
                      <?php
                      $sqlcekmateri="SELECT * from tbl_coursematerial";
                      //echo $sqlcekmateri; exit();
                        $runsql=mysql_query($sqlcekmateri);
                        while ($datamateri=mysql_fetch_array($runsql)) {
                                  $varId_materi=$datamateri['coursematerial_id'];
                                  $varJudul_materi=$datamateri['coursematerial_title'];
                      ?>

                      <label class="custom-control custom-control-primary custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="coursematerial[]" value="<?php echo $varId_materi; ?>">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label"><?php echo $varJudul_materi;  ?></span>
                      </label>

                      <?php } ?>
                  </div>
                  
                  <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Tambah</button>
                  </div>
                  </form>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
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
            syllabus_title: {
               // container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'judul tidak boleh kosong'
                    }
                }
            },
            syllabus_file: {
                //container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Upload silabus tidak boleh kosong'
                    }
                }
            },
            fupload: {
                container: '#syllabus_file',
                validators: {
                    notEmpty: {
                        message: 'foto tidak boleh kosong'
                    },
                    file: {
                            extension: 'jpg,jpeg,png,gif',
                            type: 'image/jpeg,image/jpg,image/gif,image/png',
                            message: 'extension file harus jpg, jpeg, png, gif'
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