  <div class="layout-content">
    <div class="layout-content-body">
      <div class="title-bar">
        <h1 class="title-bar-title">
          <span class="d-ib">Tambah Ruangan</span>
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
                  <form id="defaultForm" method="post" action="?page=rooms.proces-save" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="ruangan">Nama Ruangan</label>
                    <br/>
                    <i></i>
                    <input name="frm_roomsname" class="form-control" type="text">
                  </div>
                  
                  <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="frm_roomsnote" class="form-control" rows="3"></textarea>
                  </div>
                  
                  <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Tambah Ruang</button>
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
            frm_roomsname: {
               // container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Nama Ruangan tidak boleh kosong'
                    }
                }
            },
            frm_roomsnote: {
                //container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Keterangan tidak boleh kosong'
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