
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Daftar Member</span>
            </h1>
          </div>

          <!-- <a href="?page=member.frm-insert">
            <button class="btn bg-primary"><i class="icon icon-plus"></i> Tambah Member</button>
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
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                $sql_member = "SELECT *
                      FROM
                              `tbl_person`
                      INNER JOIN `tbl_member` 
                          ON (`tbl_person`.`person_id` = `tbl_member`.`person_id`)
                      INNER JOIN `tbl_user` 
                        ON (`tbl_person`.`person_id` = `tbl_user`.`person_id`) WHERE tbl_user.role_id='4' ORDER BY tbl_person.person_id DESC ";
                         
                    $result=mysql_query($sql_member);
                    $no=0;
                    while($data_member=mysql_fetch_array($result)){
                    $no++;
                    ?>
                    <tr>
                    <td> <?php echo $no; ?></td>
                    <td> <img src="uploads/foto/<?php echo $data_member['person_image']; ?>" width="150" height="150"></td>
                    <td> <?php echo $data_member['person_firstname']." ".$data_member['person_lastname']; ?></td>
                    <td> <?php echo $data_member['person_email']; ?></td>
                    <td> <?php echo $data_member['person_phonenumber']; ?></td>
                     <td class="trainee-status">

                      <center>
                         <?php if($data_member['member_status']=='ditolak'){ ?>
                      <span class="btn btn-danger">ditolak</span>
                        <?php }elseif($data_member['member_status']=='disetujui'){ ?>
                      <span class="btn btn-warning">diterima</span>
                        <?php }else{ ?>
                          <span class="btn btn-info">menunggu kofirmasi</span>
                        <?php  } ?>
                      </center>
                     </td>
                    
                     <td class="text-center">
                          <a class="btn btn-primary" href="?page=member.detail&id=<?php echo $data_member['person_id']; ?>"><span class="icon icon-eye"></span></a> 
                      <a class="btn btn-danger" href="?page=member.delete&id=<?php echo $data_member['person_id']; ?>"><span class="icon icon-trash"></span></a>        
                     </td>

                    </tr>
                    <?php }?>
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

