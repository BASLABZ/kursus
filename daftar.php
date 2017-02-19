  <!-- begin:signin -->
    <div id="signin" class="signin content-section bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <h2 class="text-big text-center marg-40-btm">Daftar <span class="pe-7s-user"></span></h2>
            <form class="contact-form" method="post" action="proses-daftar.php">
              <div class="form-group"> 
                <label for="username">email</label><br>
                <?php
                error_reporting(0);

                if($_GET['action']=='gagal-confirm'){
                     echo"<b style='color:red'>kode konfirmasi tidak ditwmukan..</b>";
                }

                if($_GET['action']=='berhasil'){
                     echo"<b style='color:#27ae60'>terimakasih.. untuk melengkapi proses pedaftaran silahkan cek email anda..</b>";
                }

                if($_GET['action']=='gagal'){
                     echo"<b style='color:red'>mohon maaf email anda sudah terdaftar</b>";
                }
                
                ?>
                <input name="frm_email" type="email" class="form-control form-bordered" placeholder="Masukkan username/email" id="username" required>
              </div>
              <button type="submit" class="button btn-square">Masuk</button>
              <br><br><p class="text-center"><small>Sudah punya akun ? <a href="?page=login">Login Sekarang !</a></small></p>
            </form>
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- #signin -->