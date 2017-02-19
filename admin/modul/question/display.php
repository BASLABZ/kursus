<?php 
  error_reporting(0);
  session_start();
  $var_Idmateri=$_GET['id'];
  ?>
<div class="layout-main">
      <!-- tempat sidebar -->
      <?php //$this->load->view('includes/sidebar.php'); ?>
      <!-- end of sidebar -->
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Mulai Buat Soal Ujian</span>
            </h1>
          </div>
          <form action="?page=question.proces-save" method="post" >
          <input type="hidden" name="fexam" value="<?php echo $var_Idmateri ?>">
          <?php
              $sqlcek="SELECT * from tbl_exam where coursematerial_id_fk='".$var_Idmateri."'";
              //or coursematerial_id_fk='".$_SESSION['idexam']."'
               // unset($_SESSION['idexam']);
              $runsql=mysql_query($sqlcek);
              $data=mysql_fetch_array($runsql);
              $jml_row=mysql_num_rows($runsql);


          ?>
          <table>
          <tr>
            <td><i>*Keterangan</i></td>
            <td><textarea name="frm_cobaexam" rows="3" cols="20"><?php echo $data['exam_name']; ?></textarea><br/></td>
          </tr>
          <tr>
            <td><i>*total pertanyaan ujian</i></td>
            <td><input type="text" name="frm_total" value="<?php echo $data['exam_totalquestion'];  ?>"><br/></td>
          </tr>
          <tr>
            <td><i>*waktu ujian</i></td>
            <td><input type="text" name="frm_waktu" value="<?php echo $data['exam_time']  ?>"><br/>
</td>
          </tr>
          <tr>
            <td><input type="submit" name="btn_publish" value="PUBLISH"></td>
          </tr>
          </table>
          </form>

          <hr>
          <?php 
              if($jml_row==0){?>
              <a href="?page=question.frm-insert">
              <button class="btn bg-primary" disabled=""><i class="icon icon-plus"></i> Tambah Soal</button>
          </a>
       <?php       
          }else{
          ?>

          <a href="?page=question.frm-insert&id=">
            <button class="btn bg-primary"><i class="icon icon-plus"></i> Tambah Soal</button>
          </a>
          <?php
            }

          ?>
          <br>

          <div class="row gutter-xs">
            <div class="col-xs-12">
              <div class="card">
                <div class="card-body">
                  <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Pertanyaan</th>
                        <th>Bobot</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_q = "SELECT * FROM trx_question q LEFT JOIN tbl_exam ex ON ex.exam_id=q.exam_id_fk LEFT JOIN tbl_coursematerial c ON c.coursematerial_id=ex.coursematerial_id_fk where coursematerial_id_fk='".$var_Idmateri."'";
                    $result=mysql_query($sql_q);
                    $no=0;
                    while($data_q=mysql_fetch_array($result)){
                    $no++;
                    ?>

                    <tr>
                     <td> <?php echo $no; ?></td>
                     <td> <?php echo $data_q['question_title']; ?></td>
                     <td> <?php echo $data_q['question_bobot'] ?></td>
                     <td class="text-center">
                        <a class="btn btn-primary" href="?page=question.frm-update&id=<?php echo $data_q['question_id'];?>"><span class="icon icon-edit"></span></a>        
                        <a class="btn btn-danger" href="?page=question.delete&id=<?php echo $data_q['question_id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data_q['question_id'];  ?>')"><span class="icon icon-trash"></span></a>
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