  <div class="layout-content">
    <div class="layout-content-body">
      <div class="title-bar">
        <h1 class="title-bar-title">
          <span class="d-ib">Tambah Soal</span>
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
                  <form id="defaultForm" method="post" action="?page=question.proces-save" enctype="multipart/form-data">
                  <input type="hidden" name="frm_qsoal_id" value="">
                  <div class="form-group">
                    <label for="bobot">Bobot Soal</label>
                    <br/>
                    <i></i>
                    <input name="frm_qbobot" class="form-control" type="text">
                  </div>
                  <div class="form-group">
                    <label for="pertanyaan">Isi Pertanyaan</label>
                    <br/>
                    <i></i>
                    <textarea name="frm_qpertanyaan" class="form-control" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <br/>
                    <i></i>
                    <input name="frm_qgambar" class="form-control" type="file">
                  </div>
                  <div class="form-group">
                    <label for="optionA">Option A</label>
                    <input name="frm_qoptionA" class="form-control" type="text">
                  </div>
                  <div class="form-group">
                    <label for="optionB">Option B</label>
                    <input name="frm_qoptionB" class="form-control" type="text">
                  </div>
                  <div class="form-group">
                    <label for="optionC">Option C</label>
                    <input name="frm_qoptionC" class="form-control" type="text">
                  </div>
                  <div class="form-group">
                    <label for="optionD">Option D</label>
                    <input name="frm_qoptionD" class="form-control" type="text">
                  </div>
                  <div class="form-group">
                    <label for="optionD">Option E</label>
                    <input name="frm_qoptionE" class="form-control" type="text">
                  </div>
                  <div class="form-group">
                    <label for="jawaban">Jawaban</label>
                    <select name="frm_qjawaban" class="form-control">
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                      <option value="E">E</option>
                    </select>
                  </div>            
                  <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Tambah Soal</button>
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