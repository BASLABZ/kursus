
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Daftar Bahan Pelatihan</span>
            </h1>
          </div>

          <a href="?page=bahanpelatihan.frm-insert">
            <button class="btn bg-primary"><i class="icon icon-plus"></i> Tambah Bahan Pelatihan</button>
          </a>
          <br>
          
          <div class="row gutter-xs">
            <div class="col-xs-12">
              <div class="card">
                <div class="card-body">
                <div class="col-sm-6">
                  <div class="dataTables_filter" id="demo-datatables-5_filter">
                  <label><input aria-controls="demo-datatables-5" placeholder="Search…" class="form-control input-sm" type="search"></label>
                  </div>
              </div>

                  <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Bahan Pelatihan</th>
                        <th>Silabus</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_bahanpelatihan = "SELECT * FROM ref_matapelajaran m JOIN ref_syllabus s ON s.syllabus_id=m.syllabus_id";
                   
                    $result=mysql_query($sql_bahanpelatihan);
                    $no=0;
                    while($data_bahan=mysql_fetch_array($result)){
                    $no++;

                    ?>

                    <tr>
                     <td> <?php echo $no; ?></td>
                     <td> <?php echo $data_bahan['matapelajaran_name'] ?></td>
                     <td> <?php echo $data_bahan['syllabus_title']; ?></td>
                     
                     <td> <?php echo $data_bahan['matapelajaran_description'] ?></td>

                     <td class="text-center">
                        <a class="btn btn-primary" href="?page=bahanpelatihan.frm-update&id=<?php echo $data_bahan['matapelajaran_id'];?>"><span class="icon icon-edit"></span></a>        
                        <a class="btn btn-danger" href="?page=bahanpelatihan.delete&id=<?php echo $data_bahan['matapelajaran_id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data_bahan['matapelajaran_name'];  ?>')"><span class="icon icon-trash"></span></a>
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

    