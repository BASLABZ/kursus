      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Daftar Materi</span>
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
                        <th>Kursus</th>
                        <th>Kuota Kursus</th>
                        <th>Biaya Kursus</th>
                        <th>Status</th>
                        <th>Action</th>


                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    /* $sqlcourse="SELECT * FROM `tbl_courses`
                                        INNER JOIN `siantro`.`tbl_coursematerial` 
                                            ON (`tbl_courses`.`course_id` = `tbl_coursematerial`.`course_id_fk`)
                                        INNER JOIN `siantro`.`ref_syllabus` 
                                            ON (`ref_syllabus`.`syllabus_id` = `tbl_courses`.`course_id`)
                                        INNER JOIN `siantro`.`tbl_trainer` 
                                            ON (`tbl_trainer`.`trainer_id` = `tbl_coursematerial`.`trainer_id`)";*/
                    //echo $sqlcourse; exit();
/*                      $runsql=mysql_query($sqlcourse);
                      $data_course=mysql_fetch_array($runsql);*/

                    ?>

                    <tr>
                     <td> <?php //echo $i ?></td>
                     <td> <?php //echo $data_course['course_title'] ?></td>
                     <td> <?php //echo $data_course['course_quota']."<i>dari 20 kuota peserta</>" ?></td>
                     <td> <?php //echo $data_course['course_price'] ?></td>
                     <!-- <td> <?php // echo $row->coursematerial_dateofpost ?></td>     -->
        
                     <td class="text-center"> 
                      <a class="btn btn-info" data-target="#modalBounceInDown" data-toggle="modal" data-id="#" id="getCoursematerialFile"><span class="icon icon-eye"></span></a>
                      <a class="btn btn-danger btn-sm btn-labeled" href="#"><span class="btn-label"><span class="icon icon-download icon-lg icon-fw"></span></span>Download</a>
                     </td>

                     <td class="text-center"> 
                      <a class="btn btn-info" data-target="#modalBounceInDown" data-toggle="modal" data-id="#" id="getCoursematerialVideo"><span class="icon icon-eye"></span></a>
                      <a class="btn btn-danger btn-sm btn-labeled" href="#"><span class="btn-label"><span class="icon icon-download icon-lg icon-fw"></span></span>Download</a>
                     </td>
                     


                     <td class="text-center">
                        <a class="btn btn-primary" href="#"><span class="icon icon-edit"></span></a>        
                        <a class="btn btn-danger" href="#"><span class="icon icon-trash"></span></a>

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