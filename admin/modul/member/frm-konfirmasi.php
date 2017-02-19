     <?php
     //echo $_GET['id']; exit();
     ?>
  <div class="layout-content">
    <div class="layout-content-body">
      <div class="title-bar">
        <h1 class="title-bar-title">
          <span class="d-ib">Konfirmasi Pembayaran</span>
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
                  <form id="defaultForm" method="POST" action="?page=member.proces-konfirmasi-save" enctype="multipart/form-data">
                  
                    <div class="form-group">

                          <label class="control-label">Tanggal Transfer</label>
                                    <input class="form-control" name="payment_date" type="date">
                                    
                                  </div>

                                   <div class="form-group">
                                      <label>Upload Bukti</label>
                                      <input type="file" class="form-control" name="payment_upload" >
                                     
                                    </div>

                                  <div class="form-group">
                                    <label class="control-label">Dari Bank :</label>
                                    <select name="bank_from" class="form-control" required="">
                                        <option value=''>-bank-</option>
                                        <option>BRI</option>
                                        <option>Mandiri</option>  
                                        <option>BCA</option>
                                        <option>BNI</option>
                                        <option>Lain</option>
                                    </select>
                                 
                                  </div>

                                  <div class="form-group">
                                    <label>Nomor Rekening Anda</label>
                                    <input name="no_payment_from" class="form-control" type="text">
                                  </div>

                                  <div class="form-group">
                                    <label class="control-label">Bank Tujuan :</label>
                                    <select name="bank_to" class="form-control" required="">
                                        <option value=''>-bank-</option>
                                        <option>BRI</option>
                                        <option>Mandiri</option>  
                                        <option>BCA</option>
                                        <option>BNI</option>
                                        <option>Lain</option>
                                    </select>
                                    
                                  </div>

                                  <div class="form-group">
                                    <label>Nomor Rekening Kami</label>
                                    <input name="no_payment_to" class="form-control" type="text">
                                  </div>

                                  <div class="form-group">
                                    <label>Nama Sesuai Tabungan</label>
                                    <input name="person_bank" class="form-control" type="text">
                               </div>   
                  
                  <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Konfrimasi</button>
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
            payment_date: {
               // container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'tanggal tidak boleh kosong'
                    }
                }
            },
            payment_upload: {
                //container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Unggah bukti transfer anda'
                    }
                }
            },
            bank_from: {
               // container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Masukkan Bank Anda'
                    }
                }
            },
            no_payment_from: {
               // container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Masukkan Nomor Rekening Bank Anda'
                    }
                }
            },
            bank_to: {
               // container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Masukkan Nomor Rekening Bank Tujuan Anda'
                    }
                }
            },
            no_payment_to: {
               // container: '#Pfupload',  Masukkan nama lengkap anda sesuai buku tabungan anda
                validators: {
                    notEmpty: {
                        message: 'Masukkan Nomor Rekening Bank Tujuan Anda'
                    }
                }
            },
             person_bank: {
               // container: '#Pfupload',  
                validators: {
                    notEmpty: {
                        message: 'Masukkan nama lengkap anda sesuai buku tabungan anda'
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