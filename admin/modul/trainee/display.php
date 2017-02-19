
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Daftar Syllabus</span>
            </h1>
          </div>

          <a href="?page=silabus.frm-insert">
            <button class="btn bg-primary"><i class="icon icon-plus"></i> Tambah Syllabus</button>
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
                        <th>Judul Syllabus</th>
                        <th>Dibuat Pada</th>
                        <th>File Syllabus</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_syllabus = "SELECT * FROM ref_syllabus";
                    $result=mysql_query($sql_syllabus);
                    $no=0;
                    while($data_syllabus=mysql_fetch_array($result)){
                    $no++;
                    ?>

                    <tr>
                     <td> <?php echo $no; ?></td>
                     <td> <?php echo $data_syllabus['syllabus_title']; ?></td>
                     <td> <?php echo $data_syllabus['syllabus_dateofpost'] ?></td>

                     
                     <td class="text-center">
                        <a class="btn btn-info" data-target="#modalBounceInDown" data-toggle="modal" data-id="<?php echo 'uploads/silabus/'.$data_syllabus['syllabus_file']; ?>" id="getSyllabus"><span class="icon icon-eye"></span></a>   
                        <a class="btn btn-danger btn-sm btn-labeled" href="<?php echo 'uploads/silabus/'.$data_syllabus['syllabus_file']; ?>"><span class="btn-label"><span class="icon icon-download icon-lg icon-fw"></span></span>Download</a>
                     </td>

                     <td class="text-center">
                        <a class="btn btn-primary" href="?page=silabus.frm-update&id=<?php echo $data_syllabus['syllabus_id'];?>"><span class="icon icon-edit"></span></a>        
                        <a class="btn btn-danger" href="?page=silabus.delete&id=<?php echo $data_syllabus['syllabus_id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data_syllabus['syllabus_title'];  ?>')"><span class="icon icon-trash"></span></a>
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

     