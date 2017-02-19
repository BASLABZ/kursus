  <div class="layout-content">
    <div class="layout-content-body">
      <div class="title-bar">
        <h1 class="title-bar-title">
          <span class="d-ib">Tambah Pengajar</span>
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
                  <form id="defaultForm" method="post" action="?page=trainer.proces-save" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="operator">Nama Depan</label>
                        <input name="frm_firstname" class="form-control" type="text">
                      </div>

                      <div class="form-group">
                        <label for="operator">Nama Belakang</label>
                        <input name="frm_lastname" class="form-control" type="text">
                      </div>

                      <div class="form-group">
                        <label for="operator">Username</label><br/>
                        <input name="frm_username" class="form-control" type="text">
                      </div>

                      <div class="form-group">
                        <label for="operator">Password</label>
                        <input name="frm_password" class="form-control" type="password">
                      </div>
                      
                      <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit" name="btn_tambah">Tambah</button>
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
            frm_firstname: {
               // container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'judul tidak boleh kosong'
                    }
                }
            },
            frm_lastname: {
                //container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Upload silabus tidak boleh kosong'
                    }
                }
            },
             frm_username: {
                //container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Upload silabus tidak boleh kosong'
                    }
                }
            },
              frm_password: {
                //container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Upload silabus tidak boleh kosong'
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