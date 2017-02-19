<div class="layout-main">
      <!-- tempat sidebar -->
      <?php //$this->load->view('includes/sidebar.php'); ?>
      <!-- end of sidebar -->
      <div class="layout-content">
        <div class="layout-content-body"> 
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Daftar Materi</span>
            </h1>
          </div>

          <a href="?page=materi.frm-insert">
            <button class="btn bg-primary"><i class="icon icon-plus"></i> Tambah Materi</button>
          </a>
          <br>

          <div class="row gutter-xs">
            <div class="col-xs-12">
              <div class="card">
                <div class="card-body">
                  <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul Materi</th>
                        <th>Tanggal Dibuat</th>
                        <th>File Materi</th>
                        <th>Video Materi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_coursematerial = "SELECT * FROM tbl_coursematerial";
                    $result=mysql_query($sql_coursematerial);
                    $no=0;
                    while($data_coursematerial=mysql_fetch_array($result)){
                    $no++;
                    ?>

                    <tr>
                     <td> <?php echo $no; ?></td>
                     <td> <?php echo $data_coursematerial['coursematerial_title']; ?></td>
                     <td> <?php echo $data_coursematerial['coursematerial_dateofpost'] ?></td>

                     
                     <td class="text-center">
                        <a class="btn btn-info" data-target="#modalBounceInDown" data-toggle="modal" data-id="<?php echo 'uploads/materi_kursus/'.$data_coursematerial['coursematerial_file']; ?>" id="getSyllabus"><span class="icon icon-eye"></span></a>   
                        <a class="btn btn-danger btn-sm btn-labeled" href="<?php echo 'uploads/materi_kursus/'.$data_coursematerial['coursematerial_file']; ?>"><span class="btn-label"><span class="icon icon-download icon-lg icon-fw"></span></span>Download</a>
                     </td>

                     <td class="text-center"> 
                      <a class="btn btn-info" data-target="#modalBounceInDown" data-toggle="modal" data-id="<?php echo $row->coursematerial_video ?>" id="getCoursematerialVideo"><span class="icon icon-eye"></span></a>
                      <a class="btn btn-danger btn-sm btn-labeled" href="<?php echo 'uploads/video_materi/'.$row->coursematerial_video ?>"><span class="btn-label"><span class="icon icon-download icon-lg icon-fw"></span></span>Download</a>
                     </td>

                     <td class="text-center">
                        <a class="btn btn-primary" href="?page=materi.frm-update&id=<?php echo $data_coursematerial['coursematerial_id']; ?>"><span class="icon icon-edit"></span></a>        
                        <a class="btn btn-danger" href="?page=materi.delete&id=<?php echo $data_coursematerial['coursematerial_id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data_coursematerial['coursematerial_title'];  ?>')"><span class="icon icon-trash"></span></a>
                     </td>

                    </tr>
                    
                    <?php } // }}?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--       <div id="modalBounceInDown" tabindex="-1" role="dialog" class="modal in">
        <div class="modal-dialog modal-lg">
          <div class="modal-content animated bounceInDown">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">×</span>
                <span class="sr-only">Close</span>
              </button>
            </div>
            <div class="modal-body">

                <a id="mySyllabus" class="media" href="#"></a>

                <iframe src="http://localhost/sisantro/uploads/silabus/Silabus_Bahasa_Inggris_2017-01-27.pdf" height="420" width="860"></iframe>
                
            </div>
            <div class="modal-footer">
              <div class="m-t-lg">
                  <button class="btn btn-primary" data-dismiss="modal" type="button">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div> -->

<script type="text/javascript">
  
    $(function () {
        $(document).on('click', '#getSyllabus', function () {
            var data_id = $(this).attr("data-id");
            window.base_url = <?php echo json_encode(base_url()); ?>;
            var link = document.getElementById("mySyllabus");
            link.setAttribute('href', <?php echo 'uploads/silabus/'.$data_syllabus['syllabus_file']; ?> );
            $('.media').media({width: 860,height:420});
        });
    });

</script>