  <!-- begin:signin -->
    <?php
    include("inc/inc-db.php");
    $sql="SELECT * FROM tbl_temp WHERE temp_verifikasi='".$_GET['kode']."'";
    $result=mysql_query($sql);
    $rows=mysql_num_rows($result);
    if($rows == 0){
      header("Location: index.php?page=daftar&action=gagal-confirm");
    }else{
   // echo $sql; exit();
    //jika code dari email ditemukan maka tampilkan lengkapi syarat menjadi peserta
    //jika tidak ditemukan maka silahkan daftar terlebihdahulu ---> link daftar
    //select
    ?>  
    <div id="signin" class="signin content-section bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <h2 class="text-big text-center marg-40-btm">Lengkapi Syarat Untuk menjadi Peserta </h2>
            <form class="contact-form" method="POST" action="proses-syarat-daftar.php" enctype="multipart/form-data" required="">
              <div class="form-group">
                <label for="username">Nama Depan</label>
                <input name="frm_nama_depan" type="text" class="form-control form-bordered" placeholder="Masukkan Nama" id="username" required=""> 
              </div>
              <div class="form-group">
                <label for="username">Nama Belakang</label>
                <input name="frm_nama_belakang" type="text" class="form-control form-bordered" placeholder="Masukkan Nama" id="username" required="">
              </div>
              <div class="form-group">
                <label for="username">Jenis Kelamin</label>
               <input name="jenis_kelamin" id="optionsRadios1" value="Wanita" required="" type="radio">&nbsp; Pria&nbsp;&nbsp;
               <input name="jenis_kelamin" id="optionsRadios1" value="Pria" required="" type="radio">&nbsp; Wanita
              </div>
              <div class="form-group">
                <label for="username">Alamat</label>
                <input name="frm_alamat" type="text" class="form-control form-bordered" placeholder="Masukkan Alamat" id="username" required="">
              </div>
              <div class="form-group">
                <label for="username">Agama</label>
               <select name="frm_agama" class="form-control form-bordered"  required="">
                          <option value="">-Agama-</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>  
                          <option value="Katholik">Katholik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                </select>
              </div>
             <div class="form-group">
                <label for="username">No. Telepon/ Handphone</label>
                <input name="frm_hp" type="text" class="form-control form-bordered" placeholder="Masukkan No. Telepon/ Handphone" id="username" required="">
              </div>
              <div class="form-group">
                <label for="username">Tempat Lahir</label>
                <input name="frm_tempat_lahir" type="text" class="form-control form-bordered" placeholder="Masukkan Tempat Lahir" id="username" required="">
              </div>
              <div class="form-group">
                <label for="username">Tanggal Lahir</label>
                <input name="frm_tgl_lahir" type="date" class="form-control form-bordered" placeholder="Masukkan Tanggal Lahir" id="username" required="">
              </div>
             <div class="form-group">
                <label for="username">Email</label>
                <input name="frm_email" type="text" class="form-control form-bordered" placeholder="Masukkan Email" id="username" required="">
              </div>
              <div class="form-group">
                <label for="username">Foto</label>
                <input name="foto" type="file" class="form-control form-bordered"  id="username" required="">
              </div>
              <div class="form-group">
                <label for="username">Institute</label>
                <input name="frm_institute" type="text" class="form-control form-bordered" placeholder="Masukkan Institute"  id="username" required=""5>
              </div>
              <div class="form-group">
                <label for="username">File syarat peserta</label>
                <input name="fupload" type="file" class="form-control form-bordered" placeholder="Masukkan username/email" id="username">
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input name="frm_username" type="text" class="form-control form-bordered" placeholder="Masukkan usernam" id="username">
              </div>
              <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input name="frm_password" type="password" class="form-control form-bordered" placeholder="Masukkan password" id="password">
              </div>
              <button type="submit" class="button btn-square">Kirim</button>
              <br><br><p class="text-center"><small>Belum punya akun ? <a href="daftar.html">Daftar Sekarang !</a></small></p>
            </form>
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- #signin -->
    <?php
    }
    ?>