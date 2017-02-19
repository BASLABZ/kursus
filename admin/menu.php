<?php session_start(); ?>
<div class="layout-sidebar">
  <div class="layout-sidebar-backdrop"></div>
  <div class="layout-sidebar-body">
    <div class="custom-scrollbar">
      <nav id="sidenav" class="sidenav-collapse collapse">
        <ul class="sidenav">

          <?php if ($_SESSION['level'] == 'admin') { ?>
           
          <li class="sidenav-heading">Profil</li>
          <li class="sidenav-item ">
            <a href="?page=biodata.display">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Biodata</span>
            </a>
          </li>

          <li class="sidenav-heading">Managemen</li>
          <li class="sidenav-item has-subnav active open">
            <a href="#" aria-haspopup="true" aria-expanded="true">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Pengguna</span>
            </a>

            <ul class="sidenav-subnav collapse in" aria-expanded="true">
              <li class="active"><a href="?page=member.display">Member</a></li>
              <li class=""><a href="?page=operator.display">Operator</a></li>
              <li class=""><a href="?page=trainer.display">Trainer</a></li>
              <li class=""><a href="?page=trainee.display">Trainee</a></li>
            </ul>
          </li>

          <li class="sidenav-item">
            <a href="?page=course.display" aria-haspopup="true">
              <span class="sidenav-icon icon icon-graduation-cap"></span>
              <span class="sidenav-label">Kursus</span>
            </a>
          </li>

          <li class="sidenav-item">
            <a href="?page=courseclass.display" aria-haspopup="true">
              <span class="sidenav-icon icon icon-graduation-cap"></span>
              <span class="sidenav-label">Kelas</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="?page=schedule.display">
              <span class="sidenav-icon icon icon-building"></span>
              <span class="sidenav-label">Jadwal</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="?page=rooms.display">
              <span class="sidenav-icon icon icon-building"></span>
              <span class="sidenav-label">Ruangan</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="?page=bahanpelatihan.display">
              <span class="sidenav-icon icon icon-pencil"></span>
              <span class="sidenav-label">Bahan Pelatihan</span>
            </a>
          </li>
          
           <li class="sidenav-item ">
            <a href="?page=payconfirm.display">
              <span class="sidenav-icon icon icon-ticket"></span>
              <span class="sidenav-label">Konfirmasi Pembayaran</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="logout.php">
              <span class="sidenav-icon icon icon-sign-out"></span>
              <span class="sidenav-label">Sign Out</span>
            </a>
          </li>
        <!--   
        <li class="sidenav-heading">Dokumentasi</li>
          <li class="sidenav-item ">
            <a href="#">
              <span class="sidenav-icon icon icon-book"></span>
              <span class="sidenav-label">Presensi Trainee</span>
            </a>
        </li> -->
          
<!-- |||||||||||||||||||||||||||||||||||| halaman akses admin end |||||||||||||||||||||||||||||||||||||||||||||||||||| -->
          <?php }else if($_SESSION['level'] == 'member'){ ?>

          
          <li class="sidenav-heading">Profil</li>
          <li class="sidenav-item">
            <a href="?page=biodata.display">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Biodata</span>
            </a>
          </li>

          <li class="sidenav-heading">Info Pelatihan</li>
          <li class="sidenav-item">
            <a href="?page=daftarmeteri.display">
              <span class="sidenav-icon icon icon-list"></span>
              <span class="sidenav-label">Daftar Pelatihan</span>
            </a>
          </li>

          <!--   
          <li class="sidenav-item">
            <a href="?page=member.listCourseTaken">
              <span class="sidenav-icon icon icon-folder"></span>
              <span class="sidenav-label">Pelatihan Belum Lunas</span>
            </a>
          </li> 
          -->

        <!--    <li class="sidenav-item">
            <a href="?page=member.frm-konfirmasi">
              <span class="sidenav-icon icon icon-folder"></span>
              <span class="sidenav-label">Konfirmasi Pembayaran</span>
            </a>
          </li> -->

          <li class="sidenav-item ">
            <a href="?page=listCourseTaken.display">
              <span class="sidenav-icon icon icon-folder"></span>
              <span class="sidenav-label">Pelatihan Yang Diikuti</span>
            </a>
          </li>

          <!-- <li class="sidenav-item ">
            <a href="">
              <span class="sidenav-icon icon icon-hdd-o"></span>
              <span class="sidenav-label">Bahan Pelatihan</span>
            </a>
          </li> -->

          <li class="sidenav-item ">
            <a href="?page=exam.display"> 
              <span class="sidenav-icon icon icon-hdd-o"></span>
              <span class="sidenav-label">Ujian</span>
            </a>
          </li>

         <li class="sidenav-item ">
            <a href="logout.php">
              <span class="sidenav-icon icon icon-sign-out"></span>
              <span class="sidenav-label">Sign Out</span>
            </a>
          </li>
          <!-- 
          <li class="sidenav-heading">Dokumentasi</li>
          <li class="sidenav-item ">
            <a href="?page=history-pay.display">
              <span class="sidenav-icon icon icon-credit-card"></span>
              <span class="sidenav-label">Histori Pembayaran</span>
            </a>
          </li> 
          -->
          
          <?php }else if($_SESSION['level'] == 'trainer'){ ?>

          <li class="sidenav-heading">Profil</li>
          
          <li class="sidenav-item ">
            <a href="?page=biodata.display">
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
            <a href="?page=materi.display">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Data Materi</span>
            </a>
          </li>

          <li class="sidenav-item ">
            <a href="?page=makeexam.display">
              <span class="sidenav-icon icon icon-user"></span>
              <span class="sidenav-label">Buat Soal Ujian</span>
            </a>
          </li>
          
           <li class="sidenav-item ">
            <a href="logout.php">
              <span class="sidenav-icon icon icon-sign-out"></span>
              <span class="sidenav-label">Sign Out</span>
            </a>
          </li>
          
          <?php  } ?>

        </ul>
      </nav>
    </div>
  </div>
</div>