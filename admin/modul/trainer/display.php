
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Daftar Dosen Pengajar</span>
            </h1>
          </div>

          <a href="?page=trainer.frm-insert">
            <button class="btn bg-primary"><i class="icon icon-plus"></i> Tambah Pengajar</button>
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
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_trainer = "SELECT * FROM tbl_user u JOIN ref_role r ON r.role_id=u.role_id LEFT JOIN tbl_person p ON p.person_id=u.person_id LEFT JOIN tbl_trainer t ON t.person_id=p.person_id where r.role_name='trainer'";
                    $result=mysql_query($sql_trainer);
                    $no=0;
                    while($data_trainer=mysql_fetch_array($result)){
                    $no++;
                    ?>

                    <tr>
                     <td> <?php echo $no; ?></td>
                     <td> <?php echo $data_trainer['person_firstname']." ".$data_trainer['person_lastname']; ?></td>
                     <td> <?php echo $data_trainer['username'] ?></td>
                     <td> <?php echo $data_trainer['role_name'] ?></td>

                     
                     <td class="text-center">
                        <a class="btn btn-info" data-target="#modalBounceInDown" data-toggle="modal" data-id="<?php //echo 'uploads/silabus/'.$data_syllabus['syllabus_file']; ?>" id="getSyllabus"><span class="icon icon-eye"></span></a>   
                        <a class="btn btn-primary" href="?page=trainer.frm-update&id=<?php echo $data_trainer['person_id'];?>"><span class="icon icon-edit"></span></a>        
                        <a class="btn btn-danger" href="?page=trainer.delete&id=<?php echo $data_trainer['user_id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data_trainer['person_firstname']." ".$data_trainer['person_lastname'];  ?>')"><span class="icon icon-trash"></span></a>
                     </td>

                     <!-- td class="text-center">
                        
                     </td> -->

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

     