 <?php
session_start();
 //$_SESSION['person_id']=50;
 $sql="SELECT * 
      FROM tbl_payment
        WHERE payment_id='".$_GET['id']."'";
           //   echo $sql; exit();
 $result=mysql_query($sql);
 $data=mysql_fetch_array($result);
 ?>
 <div id="biodata" class="layout-content">
        <div class="layout-content-body">
          <div class="panel">
            <div class="panel-body p-a-lg">
              <div class="row">
                <div class="col-sm-12">
                  <h1 class="text-left">
                    Konfirmasi Pembayaran               
                  </h1>
                </div>
              </div>
              <br><br>
              <div class="row">
                <div class="col-sm-3">
                 <!--  <img src="http://localhost/sisantro/assets/img/not_uploaded.jpg" width="250" height="250"><br><br> -->
                 <img src="uploads/payment/<?php echo $data['payment_upload']; ?>" width="250" height="250"><br><br>
                  <a class="btn btn-primary" style="width:250px;" href="#"><span class="icon icon-edit"></span> Konfirmasi</a><br><br>
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
                  <form method="post" action="">
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
                  </table>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>