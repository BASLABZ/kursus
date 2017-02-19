 <?php
session_start();

 $sql="SELECT *
FROM
    `tbl_person`
    INNER JOIN `tbl_member` 
        ON (`tbl_person`.`person_id` = `tbl_member`.`person_id`) WHERE tbl_person.person_id='".$_GET['id']."'";
             // echo $sql; exit();
 $result=mysql_query($sql);
 $data=mysql_fetch_array($result);
//echo $data['member_id']; exit();

 ?>
 
 <div id="biodata" class="layout-content">
        <div class="layout-content-body">
          <div class="panel">
            <div class="panel-body p-a-lg">
              <div class="row">
                <div class="col-sm-12">
                  <h1 class="text-left">
                    <?php echo $data['person_firstname']." ".$data['person_lastname']; ?>                  
                  </h1>
                </div>
              </div>
              <br><br>

              <div class="row">
                <div class="col-sm-3">
                 <!--  <img src="http://localhost/sisantro/assets/img/not_uploaded.jpg" width="250" height="250"><br><br> -->
                    <img src="uploads/foto/<?php echo $data['person_image']; ?>" width="250" height="250"><br><br>
                    <img src="uploads/foto/<?php echo $data['member_doc']; ?>" width="250" height="250"><br><br>
                </div>


                <div class="col-sm-9">
                  <strong>Contact Information</strong>
                  <div class="p-a">

                  <table>

                    <tr>
                      <td style="width:200px;">Email</td>
                      <td style="width:20px;">:</td>
                      <td><?php echo $data['person_email']; ?></td>
                    </tr>

                    <tr>
                      <td>No. Telp</td>
                      <td>:</td>
                      <td><?php echo $data['person_phonenumber']; ?></td>
                                     
                    </tr>
                  </table>
                  </div>
                  <strong>General Information</strong>
                  <div class="p-a">
              <form id="defaultForm" method="post" action="?page=member.update-member" enctype="multipart/form-data">

               <input type="hidden" name="id" value="<?php echo $data['member_id']; ?>">
                  <table>
                    <tr>
                      <td style="width:200px;">Nama Lengkap</td>
                      <td style="width:20px;">:</td>
                      <td> 
                           <?php echo $data['person_firstname']." ".$data['person_lastname']; ?>
                      </td>
                    </tr>

                    <tr>
                      <td>Nama Depan</td>
                      <td>:</td>
                      <td><?php echo $data['person_firstname']; ?></td>
                    </tr>

                    <tr>
                      <td>Nama Belakang</td>
                      <td>:</td>
                      <td><?php echo $data['person_lastname']; ?></td>
                    </tr>

                    <tr>
                      <td>Alamat</td>
                      <td>:</td>
                      <td><?php echo $data['person_address']; ?></td>
                                
                    </tr>

                    <tr>
                      <td>Tempat Lahir</td>
                      <td>:</td>
                      <td><?php echo $data['person_placeofbirth'] ?></td>
                      </tr>

                    <tr>
                      <td>Tanggal Lahir</td>
                      <td>:</td>
                      <td><?php echo $data['person_dateofbirth']; ?></td>
                                      
                    </tr>

                    <tr>
                      <td>Agama</td>
                      <td>:</td>
                      <td><?php echo $data['person_religion']; ?></td>
                            
                    </tr>

                    <tr>
                      <td>Jenis Kelamin</td>
                      <td>:</td>
                      <td><?php echo $data['person_gender']; ?></td>
                      </tr>

                    <tr>
                      <td>Status</td>
                      <td>:</td>
                      <td><select name="frm_status" class="form-control">
                            <option value="">--pilih status--</option>
                            <option value="ditolak">ditolak</option>
                            <option value="disetujui">disetujui</option>
                      </select></td>
                    </tr>

                     <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" class="btn btn-primary btn-block" name="" value="update">
                    </tr>

                  </table>     </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 