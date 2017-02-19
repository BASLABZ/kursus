  <!-- begin:signin -->
    <div id="signin" class="signin content-section bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <h2 class="text-big text-center marg-40-btm">Login <span class="pe-7s-user"></span></h2>
            <form class="contact-form" method="POST" action="login-check.php">
            <?php
                error_reporting(0);
                if($_GET['action']=='gagal'){
                     echo"<b style='color:red'>maaf username atau password anda salah</b>";
                }
                
                ?>
              <div class="form-group">
               
                <label for="username">Username</label>
                <input name="frm_username" type="text" class="form-control form-bordered" placeholder="Masukkan username/email" id="username" required>
              </div>
              <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input name="frm_password" type="password" class="form-control form-bordered" placeholder="Masukkan password" id="password" required="">
              </div>
              <button type="submit" class="button btn-square" >Masuk</button>
              <br><br><p class="text-center"><small>Belum punya akun ? <a href="?page=daftar">Daftar Sekarang !</a></small></p>
            </form>
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- #signin -->