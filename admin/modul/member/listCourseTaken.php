      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Daftar Pembayaran</span>
            </h1>
          </div>

          <br>
          <div class="row gutter-xs">
            <div class="col-xs-12">
              <div class="card">
                <div class="card-body">
                <div class="col-sm-6">
                  <div class="dataTables_filter" id="demo-datatables-5_filter"><label><input aria-controls="demo-datatables-5" placeholder="Search…" class="form-control input-sm" type="search"></label>
                  </div>
                </div>
                  <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                   
                      <tr>
                        <th>No</th>
                        <th>Nama Kursus</th>
                        <th>Status Pembayaran</th>
                        <th>Status Trainee</th>
                        <th>Upload Bukti</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sqllist="SELECT * from tbl_trainee t join tbl_courses c ON c.course_id = t.course_id left join tbl_member m ON m.member_id = t.member_id where member_id='".$_GET['id']."'";
                      echo $sqllist; exit();

                      $runsql=mysql_query($sqllist);
                     
                      while($datalist=mysql_fetch_array($runsql)){
                        $i++;

                    ?>
                    <tr>
                     <td> <?php echo $i ?></td>
                     <td> <?php echo $datalist['course_title']; ?></td>
                     <td> <?php echo $datalist ['trainee_paymentstatus']; ?></td>
                     <td> <?php echo $datalist ['trainee_status']; ?></td>

                     <td class="text-center">
                        <a class="btn btn-primary btn-sm btn-labeled" href="?page=member.frm-konfirmasi&id=<?php //echo base_url().'index.php/member/courses/payCourse/'.$row->trainee_id?>"><span class="btn-label"><span class="icon icon-upload icon-lg icon-fw"></span></span>Konfirmasi</a>
                        <a class="btn btn-danger" href="<?php //echo base_url().'index.php/member/courses/deleteCourseTaken/'.$row->trainee_id?>"><span class="icon icon-trash"></span></a>

                     </td>

                    </tr>
                    
                    <?php //}}?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>