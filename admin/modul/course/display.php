<div class="layout-main">
      <!-- tempat sidebar -->
      <?php //$this->load->view('includes/sidebar.php'); ?>
      <!-- end of sidebar -->
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Daftar Kursus</span>
            </h1>
          </div>

          <a href="?page=course.frm-insert">
            <button class="btn bg-primary"><i class="icon icon-plus"></i> Tambah Data Kursus</button>
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
                        <th>Nama Kursus/Pelatihan</th>
                        <th>Deskripsi</th>
                        <th>Biaya</th>
                        <th>Kuota</th> 
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_courses = "SELECT * FROM tbl_courses co JOIN ref_courseclass cs ON cs.courseclass_id=co.courseclass_id";
                   // echo $sql_courses; exit();
                    // JOIN ref_matapelajaran m ON m.matapelajaran_id=co.matapelajaran JOIN tbl_coursematerial cm ON cm.coursematerial_id=co.coursematerial JOIN tbl_trainer t on t.trainer_id=co.trainer

                    $result=mysql_query($sql_courses);
                    $no=0;
                    while($data_courses=mysql_fetch_array($result)){
                    $no++;
                    ?>

                    <tr>
                     <td> <?php echo $no; ?></td>
                     <td> <?php echo $data_courses['course_title']; ?></td>
                     <td> <?php echo $data_courses['course_detail'] ?></td>
                      <td> <?php echo $data_courses['course_price'] ?></td>
                      <td> <?php echo $data_courses['course_quota'] ?></td>
                     

                     <td class="text-center">
                        <a class="btn btn-success" href="?page=course.detail&id=<?php echo $data_courses['course_id'];?>"><span class="icon icon-eye"></span></a>   
                        <a class="btn btn-primary" href="?page=course.frm-update&id=<?php echo $data_courses['course_id'];?>"><span class="icon icon-edit"></span></a>        
                        <a class="btn btn-danger" href="?page=course.delete&id=<?php echo $data_courses['course_id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data_courses['course_title'];  ?>')"><span class="icon icon-trash"></span></a>
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

      <div id="modalBounceInDown" tabindex="-1" role="dialog" class="modal in">
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
      </div>

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