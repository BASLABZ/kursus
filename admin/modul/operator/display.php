<div class="layout-main">
      <!-- tempat sidebar -->
      <?php //$this->load->view('includes/sidebar.php'); ?>
      <!-- end of sidebar -->
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Daftar Operator</span>
            </h1>
          </div>

          <a href="?page=operator.frm-insert">
            <button class="btn bg-primary"><i class="icon icon-plus"></i> Tambah Operator</button>
          </a>
          <br>

          <div class="row gutter-xs">
            <div class="col-xs-12">

              <div class="card">
                <div class="card-body">
                  <!-- <div id="demo-datatables-5" class="dataTables_filter"><label><input type="search" class="form-control input-sm" placeholder="Search…" aria-controls="demo-datatables-5"></label>
                  </div> -->
                  
                  <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTables" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_operator = "SELECT * FROM tbl_user u JOIN ref_role r ON r.role_id=u.role_id LEFT JOIN tbl_person p ON p.person_id=u.person_id where r.role_name='admin'";
                    //echo $sql_operator; exit();
                    $result=mysql_query($sql_operator);
                    $no=0;
                    while($data_operator=mysql_fetch_array($result)){
                    $no++; 
                    ?>

                    <tr>
                     <td> <?php echo $no; ?></td>
                     <td> <?php echo $data_operator['person_firstname']." ".$data_operator['person_lastname']; ?></td>
                     <td> <?php echo $data_operator['username'] ?></td>
                     <td> <?php echo $data_operator['role_name'] ?></td>


                     <td class="text-center">
                        <a class="btn btn-info" onclick="return popUp(<?php echo $row->user_id; ?>);" data-target="#modalBounceInDown" data-toggle="modal" data-id="<?php echo $row->user_id ?>" id="getBiodata"><span class="icon icon-eye"></span></a> 
                        <!-- <a class="btn btn-primary" href="?page=operator.frm-update&id=<?php //echo $data_operator['user_id'];?>"><span class="icon icon-edit"></span></a>  -->       
                        <a class="btn btn-danger" href="?page=operator.delete&id=<?php echo $data_operator['user_id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data_operator['person_firstname']." ".$data_operator['person_lastname'];  ?>')"><span class="icon icon-trash"></span></a>
                     </td>
                    </tr>
                    <?php } // }}?>
                    </tbody>
                  </table>

                  <div class="col-sm-12"><div class="dataTables_paginate paging_full_numbers" id="demo-datatables-5_paginate"><ul class="pagination"><li class="paginate_button first disabled" id="demo-datatables-5_first"><a href="#" aria-controls="demo-datatables-5" data-dt-idx="0" tabindex="0">First</a></li><li class="paginate_button previous disabled" id="demo-datatables-5_previous"><a href="#" aria-controls="demo-datatables-5" data-dt-idx="1" tabindex="0">«</a></li><li class="paginate_button active"><a href="#" aria-controls="demo-datatables-5" data-dt-idx="2" tabindex="0">1</a></li><li class="paginate_button next disabled" id="demo-datatables-5_next"><a href="#" aria-controls="demo-datatables-5" data-dt-idx="3" tabindex="0">»</a></li><li class="paginate_button last disabled" id="demo-datatables-5_last"><a href="#" aria-controls="demo-datatables-5" data-dt-idx="4" tabindex="0">Last</a></li></ul></div></div>

                </div>
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