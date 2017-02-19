<div class="layout-main">
      <!-- tempat sidebar -->
      <?php //$this->load->view('includes/sidebar.php'); ?>
      <!-- end of sidebar -->
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Soal Ujian</span>
            </h1>
          </div>

          <br>

          <div class="row gutter-xs">
            <div class="col-xs-12">
              <div class="card">
                <div class="card-body">
                <form action="?page=exam.proces-save" method="post">
                  <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th rowspan="6">No</th>
                        <th colspan="2">Soal</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_q = "SELECT * FROM trx_question";
                    $result=mysql_query($sql_q);
                    $no=0;
                    while($data_q=mysql_fetch_array($result)){
                      $id = $data_q['question_id'];
                    $no++;
                    ?>
                    <!-- <input type="hidden" name="id[]" value="<?php echo $id ?>"> -->
                    <input type="hidden" name="id[]" value=<?php echo $id; ?>>
                    <tr>
                     <td> <?php echo $no; ?></td>
                     <td colspan="3"> <?php echo $data_q['question_title']; ?></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>A. &nbsp; <input type="radio" value="A" name="option[<?php echo $id; ?>]"> &nbsp; 
                            <?php echo $data_q['option_a']; ?> <br/>                      
                          B. &nbsp; <input type="radio" value="B" name="option[<?php echo $id; ?>]"> &nbsp; 
                            <?php echo $data_q['option_b']; ?> <br/>                      
                          C. &nbsp; <input type="radio" value="C" name="option[<?php echo $id; ?>]"> &nbsp; 
                            <?php echo $data_q['option_c']; ?> <br/>                      
                          D. &nbsp; <input type="radio" value="D" name="option[<?php echo $id; ?>]"> &nbsp; 
                            <?php echo $data_q['option_d']; ?> <br/>                      
                          E. &nbsp; <input type="radio" value="E" name="option[<?php echo $id; ?>]"> &nbsp; 
                            <?php echo $data_q['option_e']; ?> <br/>                      
                      </td>
                      <?php 
                        if ($data_q['question_picture']!='') { ?>
                          <td><img src="uploads/soal/<?php echo $data_q['question_picture']; ?>" width="300px"></td> <?php
                        } else { ?>
                          <td></td><?php
                        }
                      ?>
                      
                    </tr>
                    
                    
                    <?php } // }}?>
                    <input type="hidden" name="frm_jumlahsoal" value="<?php echo $no; ?>">

                    </tbody>
                  </table><br/>
                    <center>
                    <button class="btn btn-primary" type="submit" name="selesaimengerjakan" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">Submit</button>
                    </center>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!--   <div id="modalBounceInDown" tabindex="-1" role="dialog" class="modal in">
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
 -->
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