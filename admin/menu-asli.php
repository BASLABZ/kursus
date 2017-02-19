  <div class="layout-sidebar">
  <div class="layout-sidebar-backdrop"></div>
  <div class="layout-sidebar-body">
    <div class="custom-scrollbar">
      <nav id="sidenav" class="sidenav-collapse collapse">
        <ul class="sidenav">

          <?php if ($_SESSION['level'] == 'admin') { ?>
           
          <li class="sidenav-heading">Profil</li>
          <li class="sidenav-item ">
            <a href="#">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Biodata</span>
            </a>
          </li>

          <li class="sidenav-heading">Managemen</li>
        <!-- 
          <li class="sidenav-item has-subnav active open">
            <a href="#" aria-haspopup="true" aria-expanded="true">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Pengguna</span>
            </a>

            <ul class="sidenav-subnav collapse in" aria-expanded="true">
              <li class="active"><a href="#">Member</a></li>
              <li class=""><a href="#">Operator</a></li>
              <li class=""><a href="#">Trainer</a></li>
              <li class=""><a href="#">Trainee</a></li>
            </ul>
          </li> 
        -->

           <li class="sidenav-item">
            <a href="#" aria-haspopup="true">
              <span class="sidenav-icon icon icon-graduation-cap"></span>
              <span class="sidenav-label">Daftar Member New</span>
            </a>
          </li>

          <li class="sidenav-item">
            <a href="#" aria-haspopup="true">
              <span class="sidenav-icon icon icon-graduation-cap"></span>
              <span class="sidenav-label">Kursus</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="#">
              <span class="sidenav-icon icon icon-building"></span>
              <span class="sidenav-label">Ruangan</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="3">
              <span class="sidenav-icon icon icon-pencil"></span>
              <span class="sidenav-label">Matapelajaran</span>
            </a>
          </li>
          
          <li class="sidenav-heading">Pengguna</li>
          <li class="sidenav-item ">
            <a href="?page=member.display">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">member</span>
            </a>
          </li>
          
          <li class="sidenav-item ">
            <a href="#">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Operator</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="#">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Trainer</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="#">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Trainer</span>
            </a>
          </li>


           <li class="sidenav-item">
            <a href="#" aria-haspopup="true">
              <span class="sidenav-icon icon icon-graduation-cap"></span>
              <span class="sidenav-label">Daftar Member New</span>
            </a>
          </li>

          <li class="sidenav-item">
            <a href="#" aria-haspopup="true">
              <span class="sidenav-icon icon icon-graduation-cap"></span>
              <span class="sidenav-label">Kursus</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="#">
              <span class="sidenav-icon icon icon-building"></span>
              <span class="sidenav-label">Ruangan</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="3">
              <span class="sidenav-icon icon icon-pencil"></span>
              <span class="sidenav-label">Matapelajaran</span>
            </a>
          </li>
          
          <li class="sidenav-heading">Pengguna</li>
          <li class="sidenav-item ">
            <a href="?page=member.display">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">member</span>
            </a>
          </li>
            <li class="sidenav-item ">
            <a href="?page=operator.display">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Operator</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="#">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Trainer</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="#">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Trainer</span>
            </a>
          </li>

          <li class="sidenav-heading">Laporan</li>

          <li class="sidenav-item ">
            <a href="#">
              <span class="sidenav-icon icon icon-book"></span>
              <span class="sidenav-label">Transaksi Pembayaran</span>
            </a>
          </li>
          
<!-- |||||||||||||||||||||||||||||||||||| halaman akses admin end |||||||||||||||||||||||||||||||||||||||||||||||||||| -->
      
          <?php }else if($_SESSION['level'] == 'member'){ ?>

          
          <li class="sidenav-heading">Profil</li>
          <li class="sidenav-item">
            <a href="#">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Biodata</span>
            </a>
          </li>

          <li class="sidenav-heading">Info Pelatihan</li>
          <li class="sidenav-item">
            <a href="#">
              <span class="sidenav-icon icon icon-graduation-cap"></span>
              <span class="sidenav-label">Daftar Pelatihan</span>
            </a>
          </li>

          <li class="sidenav-item">
            <a href="#">
              <span class="sidenav-icon icon icon-folder"></span>
              <span class="sidenav-label">Pelatihan Belum Lunas</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="#">
              <span class="sidenav-icon icon icon-folder"></span>
              <span class="sidenav-label">Pelatihan Yang Diikuti</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="">
              <span class="sidenav-icon icon icon-hdd-o"></span>
              <span class="sidenav-label">Bahan Pelatihan</span>
            </a>
          </li>

          <li class="sidenav-heading">Dokumentasi</li>
          <li class="sidenav-item ">
            <a href="#">
              <span class="sidenav-icon icon icon-credit-card"></span>
              <span class="sidenav-label">Histori Pembayaran</span>
            </a>
          </li>
          
          <?php }else if($_SESSION['level'] == 'trainer'){ ?>

          <li class="sidenav-heading">Profil</li>
          <li class="sidenav-item ">
            <a href="#">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Biodata</span>
            </a>
          </li>

          <li class="sidenav-heading">Managemen Kursus</li>

          <li class="sidenav-item <">
            <a href="?page=silabus.display">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Data silabus</span>
            </a>
          </li>

          <li class="sidenav-item">
            <a href="#">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Data Materi</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="#">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Buat Tugas</span>
            </a>
          </li>
          
          <?php  } ?>

        </ul>
      </nav>
    </div>
  </div>
</div>
