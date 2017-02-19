  <div class="layout-content">
    <div class="layout-content-body">
      <div class="title-bar">
        <h1 class="title-bar-title">
          <span class="d-ib">Tambah Materi</span>
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
                  <form id="defaultForm" method="post" action="?page=anggota.proces-update" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="materi">Judul Materi</label>
                    <input name="frm_coursematerialtitle" class="form-control" type="text" required="">
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label">Upload Materi</label><br/>
                    <i>*upload file materi kursus</i>
                    <input type="file" class="form-control" name="frm_filemateri" required="">
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label">Upload Video Materi</label><br/>
                    <i>*Upload file video materi kursus</i>
                    <input type="file" class="form-control" name="frm_filevideomateri" required="">
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