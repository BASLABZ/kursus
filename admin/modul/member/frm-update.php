<?php
  require_once('inc-db.php');
  $var_syllabusId=$_GET['id'];
  $sql="select * from ref_syllabus where syllabus_id='".$var_syllabusId."'";
  //echo $sql; exit;
  $result=mysql_query($sql);
  $data=mysql_fetch_array($result);

  
  ?>

  <div class="layout-content">
    <div class="layout-content-body">
      <div class="title-bar">
        <h1 class="title-bar-title">
          <span class="d-ib">Edit Silabus</span>
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
                   <form id="defaultForm" method="post" action="?page=materi.proces-update" enctype="multipart/form-data">
                    <input type="hidden" name="hidden_syllabusid" value="<?php echo $data['syllabus_id']; ?>"/>
                    <div class="form-group">
                      <label for="ruangan">Judul Silabus</label>
                      <input name="frm_syllabusdate" class="form-control" type="text" value="<?php echo $data['syllabus_title']; ?>" >
                    </div>

                     <div class="form-group">
                      <label for="ruangan">Tanggal Dibuat</label>
                      <input name="frm_syllabustitle" class="form-control" type="date" value="<?php echo $data['syllabus_dateofpost']; ?>" >
                    </div>

                    <div class="form-group">
                      <label class="control-label">Upload Silabus</label><br/>
                      <i>File Silabus sebelumnya :<?php echo $data['syllabus_file']; ?></i><br/>
                      <input type="file" class="form-control" name="syllabus_file" value="<?php  ?>"><i>File harus berekstensi (.pdf)</i>
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