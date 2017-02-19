<?php
  require_once('inc-db.php');
  $var_operatorId=$_GET['id'];
  $sql="SELECT * FROM tbl_user u JOIN ref_role r ON r.role_id=u.role_id LEFT JOIN tbl_person p ON p.person_id=u.person_id where u.user_id='".$var_operatorId."'";
  //echo $sql; exit;
  $result=mysql_query($sql);
  $data=mysql_fetch_array($result);

  
  ?>
 
    <div class="layout-content">
    <div class="layout-content-body">
      <div class="title-bar">
        <h1 class="title-bar-title">
          <span class="d-ib">Edit Operator</span>
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
                  <form id="defaultForm" method="post" action="?page=operator.proces-save" enctype="multipart/form-data">
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
            person_firstname: {
               // container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'nama depan belum diisi'
                    }
                }
            },
            username: {
                //container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Username operator tidak boleh kosong'
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