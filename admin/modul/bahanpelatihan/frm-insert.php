  <div class="layout-content">
    <div class="layout-content-body">
      <div class="title-bar">
        <h1 class="title-bar-title">
          <span class="d-ib">Tambah Bahan Pelatihan</span>
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
                  <form id="defaultForm" method="post" action="?page=bahanpelatihan.proces-save" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="ruangan">Nama/Tema Bahan Pelatihan</label>
                    <br/>
                    <i></i>
                    <input type="text" name="frm_namabahan" class="form-control" >
                  </div>

                  <div class="form-group">
                    <label class="control-label">Pilih Silabus :</label>
                    <select name="frm_syllabustitle" class="form-control" required="">
                        <option value=''>-Pilih-</option>
                        <?php
                          $sqlceksilabus="SELECT * from ref_syllabus";
                          $runsql=mysql_query($sqlceksilabus);

                          while ($datasilabus=mysql_fetch_array($runsql)) {
                                  $varId_silabus=$datasilabus['syllabus_id'];
                                  $varTitle_silabus=$datasilabus['syllabus_title'];
                        ?>
                        <option value='<?php echo $varId_silabus; ?>'><?php echo $varTitle_silabus; ?></option>
                        <?php 
                          } //tutup while
                        ?>

                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="keterangan">Deskrpsi</label>
                    <textarea name="frm_bahannote" class="form-control" rows="3"></textarea>
                  </div>
                  
                  <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Tambah Bahan</button>
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
            frm_namabahan: { 
               // container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Nama/Tema Bahan Pelatihan tidak boleh kosong'
                    }
                }
            },
            frm_namabahan: { 
               // container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Pilih Silabus tidak boleh kosong'
                    }
                }
            },
            frm_bahannote: {
                //container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Deskrpsi tidak boleh kosong'
                    }
                }
            },
      
        }
    });
    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script> 