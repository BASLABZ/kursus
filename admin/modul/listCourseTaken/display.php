      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Pelatihan yang diikuti</span>
            </h1>
          </div>
          <a href="#">
            <!-- <button class="btn bg-primary"><i class="icon icon-plus"></i> Tambah Materi</button> -->
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
                        <th>Status Pembayaran</th>
                        <th>Status Trainee</th>
                        <th>Upload Bukti</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sqlcourse="SELECT *
                                FROM
                                    `siantro`.`tbl_courses`
                                    INNER JOIN `siantro`.`tbl_transaksi` 
                                        ON (`tbl_courses`.`course_id` = `tbl_transaksi`.`course_id`)
                                    INNER JOIN `siantro`.`tbl_person` 
                                        ON (`tbl_person`.`person_id` = `tbl_transaksi`.`person_id`) WHERE tbl_person.person_id='".$_SESSION['person_id']."'";                     
                    $no=0;
                    $runsql=mysql_query($sqlcourse);
                    $rows=mysql_num_rows($runsql);
                    if($rows == 0){
                      echo "<tr><td colspan='5' align='center'><b style='color:red;'>Data pelatian yang diikuti masih kosong</b></td></tr>";
                    }else{
                    while($data_course=mysql_fetch_array($runsql)){
                    $no++;
                    ?>

                    <tr>
                     <td> <?php echo $no ?></td>
                     <td> <?php echo $data_course['course_title'] ?></td>
                     <td> 12-10-2017</td>

                     <!-- <td> <?php // echo $row->coursematerial_dateofpost ?></td>     -->
                     <td class="text-center"> 
                      dibuka
                     </td>
                     <td class="text-center">
                      <?php
                      if($data_course['tran_status']==1){
                          ?>
                      <a class="btn btn-primary btn-sm btn-labeled" href="#" style="
        background-color: #161e7b;"><span class="btn-label"><span class="icon icon-ticket icon-lg icon-fw"></span></span>Lunas</a>
                          <?php
                      }else{
                          ?>
                          <a class="btn btn-primary btn-sm btn-labeled" href="?page=member.frm-konfirmasi&id=13<?php ?>"><span class="btn-label"><span class="icon icon-upload icon-lg icon-fw"></span></span>Konfirmasi</a>
                          <a class="btn btn-danger" href="?page=listCourseTaken.delete&id=<?php echo $data_course['tran_id']; ?>"onclick="return confirm('Apakah anda yakin akan menghapus data')"><span class="icon icon-trash"></span></a>       
                              <?php
                            }
                              ?>
                     </td>
                    </tr>
                    
                    <?php
                     }
                   }
                     ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>