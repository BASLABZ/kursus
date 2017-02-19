 <?php
session_start();
 //$_SESSION['person_id']=50;
 $sql="SELECT *
      FROM
          `ref_courseclass`
          INNER JOIN `tbl_courses` 
              ON (`ref_courseclass`.`courseclass_id` = `tbl_courses`.`courseclass_id`)
          WHERE tbl_courses.course_id='".$_GET['id']."'";
       // echo $sql; exit();
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
                  </h1>
                </div>
              </div>
              <br><br>
              <div class="row">
                <div class="col-sm-9">
                  <strong>Detail</strong>
                  <div class="p-a">
                  <div class="p-a">
                  <form method="post" action="?page=daftarmeteri.proces-save">
                  <input type="hidden" name="course_id" value="<?php echo $data['course_id'] ?>">
                  <table>
                   <tr>
                      <td>Kelas</td>
                      <td>:</td>
                      <td><?php echo $data['courseclass_name']; ?></td>
                    </tr>
                    <tr>
                      <td>Kursus</td>
                      <td>:</td>
                      <td><?php echo $data['course_title']; ?></td>
                    </tr>
                    <tr>
                      <td>Kuota</td>
                      <td>:</td>
                      <td><b><?php echo $data['course_quota']; ?></b> dari <b>20</b> peserta</td>
                    </tr>
                    <tr>
                      <td>Biaya Kursus</td>
                      <td>:</td>
                      <td>Rp <?php echo number_format($data['course_price']); ?></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                   <input type="submit" class="btn btn-primary" value="Ambil">
                    </td>
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