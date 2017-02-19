<?php
  require_once('inc-db.php');
  $var_bahanId=$_GET['id'];
  //echo "id yg tertangkap : " . $var_bahanId; exit();
  $sql="SELECT * FROM ref_matapelajaran m JOIN ref_syllabus s ON s.syllabus_id=m.syllabus_id where m.matapelajaran_id='".$var_bahanId."'";
  //echo $sql; exit;
  $result=mysql_query($sql);
  $data=mysql_fetch_array($result);

  
  ?>

  <div class="layout-content">
    <div class="layout-content-body">
      <div class="title-bar">
        <h1 class="title-bar-title">
          <span class="d-ib">Edit Bahan Pelatihan</span>
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
                   <form id="defaultForm" method="post" action="?page=bahanpelatihan.proces-update" enctype="multipart/form-data">
                    <input type="hidden" name="hidden_matapelajaranid" value="<?php echo $data['matapelajaran_id']; ?>"/>

                    <div class="form-group">
                      <label for="ruangan">Nama/Tema Bahan Pelatihan</label>
                      <input name="frm_bahanname" class="form-control" type="text" value="<?php echo $data['matapelajaran_name']; ?>" >
                    </div>

                    <div class="form-group">
                    <label class="control-label">Pilih Silabus :</label>
                    <select name="frm_syllabustitle" class="form-control" required="">
                        <option value='0'>-Pilih-</option>
                        <?php
                          $sqlceksilabus="SELECT * from ref_syllabus";
                          $runsql=mysql_query($sqlceksilabus);

                          while ($datasilabus=mysql_fetch_array($runsql)) {
                                  $varId_silabus=$datasilabus['syllabus_id'];
                                  $varTitle_silabus=$datasilabus['syllabus_title'];
                        ?>
                        <option selected value='<?php echo $varId_silabus; ?>'><?php echo $varTitle_silabus; ?></option>
                        <?php 
                          } //tutup while
                        ?>

                    </select>
                  </div>

                     <div class="form-group">
                        <label for="keterangan">Deskripsi Bahan</label>
                        <textarea name="frm_bahandescription" class="form-control" rows="3"><?php echo $data['matapelajaran_description'] ?></textarea>
                      </div>
                    
                    <div class="form-group">
                      <button class="btn btn-primary btn-block" type="submit">Update Data</button>
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
