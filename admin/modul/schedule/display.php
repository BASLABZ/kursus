      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Daftar Jadwal</span>
            </h1>
          </div>

          <a href="?page=schedule.frm-insert">
            <button class="btn bg-primary"><i class="icon icon-plus"></i>Buat Jadwal</button>
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
                        <th>Nama Kursus</th>
                        <th>Periode Kursus</th>
                        <th>Status Kursus</th>
                        <th>Kategori Kelas</th>
                        <!-- <th>Ruangan</th> -->
                        <th>Materi Kursus</th>
                        <!-- <th>Dosen Pengajar</th> -->
                        <th>Keterangan </th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_schedule = "SELECT course_title,schedule_dateopen,schedule_dateclose,schedule_coursestatus,courseclass_name,coursematerial_title,schedule_note FROM trx_schedule sc JOIN tbl_courses co ON co.course_id=sc.course_id_fk JOIN ref_courseclass cl ON cl.courseclass_id=sc.courseclass_id_fk JOIN tbl_coursematerial cm ON cm.coursematerial_id=sc.coursematerial_id_fk ";
                    // echo $sql_schedule; exit();
                    //$sql_schedule="select * from trx_schedule";
                    $result=mysql_query($sql_schedule);
                    $no=0;
                    while($data_schedule=mysql_fetch_array($result)){
                    $no++;
                    ?>

                    <tr>
                     <td> <?php //echo $no; ?></td>
                     <td> <?php //echo $data_schedule['course_title']; ?></td>
                     <td> <?php //echo $data_schedule['schedule_dateopen']." s/d ".$data_schedule['schedule_dateclose'] ?></td>
                     <td> <?php //echo $data_schedule['schedule_coursestatus']; ?></td>
                     <td> <?php //echo $data_schedule['courseclass_name']; ?></td>
                     <td> <?php //echo $data_schedule['coursematerial_title']; ?></td>
                     <td> <?php echo $data_schedule['schedule_note']; ?></td>


                     <td class="text-center">
                        <a class="btn btn-primary" href="?page=schedule.frm-update&id=<?php echo $data_schedule['schedule_id'];?>"><span class="icon icon-edit"></span></a>        
                        <a class="btn btn-danger" href="?page=schedule.delete&id=<?php echo $data_schedule['schedule_id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data_schedule['course_title'];  ?>')"><span class="icon icon-trash"></span></a>
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