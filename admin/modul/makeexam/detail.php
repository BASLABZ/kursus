<?php
    $id=$_GET['id'];
   //echo $id; exit;
   // $sql_detail="SELECT coursematerial_title FROM tbl_coursematerial cm JOIN tbl_course co ON co.course_id=cm.course_id_fk WHERE cm.course_id_fk='".$id."'";
   //     // echo $sql_detail; exit;
   //  $result_detail=mysql_query($sql_detail);
   //  $data_detail=mysql_fetch_array($result_detail);
    ?>
    <div class="layout-main">
      <!-- tempat sidebar -->
      <?php //$this->load->view('includes/sidebar.php'); ?>
      <!-- end of sidebar -->
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Detail materi</span>
            </h1>
          </div>

         <!--  <a href="?page=question.frm-insert">
            <button class="btn bg-primary"><i class="icon icon-plus"></i> Tambah Soal</button>
          </a> -->
          <br>

          <div class="row gutter-xs">
            <div class="col-xs-12">
              <div class="card">
                <div class="card-body">
                  <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <!-- <th>Nama Kursus</th> -->
                        <th>Detail Materi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_q = "SELECT coursematerial_id, coursematerial_title FROM tbl_coursematerial cm JOIN tbl_courses co ON co.course_id=cm.course_id_fk WHERE cm.course_id_fk='".$id."'";
                    //echo $sql_q; exit();
                    $result=mysql_query($sql_q);
                    $no=0;
                    while($data_q=mysql_fetch_array($result)){
                    $no++;
                    ?>

                    <tr>
                     <td> <?php echo $no; ?></td>
                     <td> <?php echo $data_q['coursematerial_title']; ?></td>
                     <td> <a class="btn btn-primary" href="?page=question.display&id=<?php echo $data_q['coursematerial_id'];?>">Mulai buat Soal</a></td>

                     <td class="text-center">
                        <a class="btn btn-primary" href="?page=makeexam.frm-update&id=<?php echo $data_q['course_id'];?>"><span class="icon icon-edit"></span></a>        
                        <a class="btn btn-danger" href="?page=makeexam.delete&id=<?php echo $data_q['course_id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data_q['course_title'];  ?>')"><span class="icon icon-trash"></span></a>
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