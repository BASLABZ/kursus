
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Daftar Kelas</span>
            </h1>
          </div>

          <a href="?page=courseclass.frm-insert">
            <button class="btn bg-primary"><i class="icon icon-plus"></i> Tambah Kelas</button>
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
                        <th>Kategori Kelas</th>
                       
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_class = "SELECT * FROM ref_courseclass";
                    $result=mysql_query($sql_class);
                    $no=0;
                    while($data_class=mysql_fetch_array($result)){
                    $no++;
                    ?>

                    <tr>
                     <td> <?php echo $no; ?></td>
                     <td> <?php echo $data_class['courseclass_name']; ?></td>

                     <td class="text-center">
                        <a class="btn btn-primary" href="?page=courseclass.frm-update&id=<?php echo $data_class['courseclass_id'];?>"><span class="icon icon-edit"></span></a>        
                        <a class="btn btn-danger" href="?page=courseclass.delete&id=<?php echo $data_class['courseclass_id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data_class['courseclass_name'];  ?>')"><span class="icon icon-trash"></span></a>
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

      