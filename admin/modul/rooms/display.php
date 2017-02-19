
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Daftar Ruangan</span>
            </h1>
          </div>

          <a href="?page=rooms.frm-insert">
            <button class="btn bg-primary"><i class="icon icon-plus"></i> Tambah Ruangan</button>
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
                        <th>Nama Ruangan</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_rooms = "SELECT * FROM ref_rooms";
                    $result=mysql_query($sql_rooms);
                    $no=0;
                    while($data_rooms=mysql_fetch_array($result)){
                    $no++;
                    ?>

                    <tr>
                     <td> <?php echo $no; ?></td>
                     <td> <?php echo $data_rooms['room_name']; ?></td>
                     <td> <?php echo $data_rooms['room_notes'] ?></td>

                     <td class="text-center">
                        <a class="btn btn-primary" href="?page=rooms.frm-update&id=<?php echo $data_rooms['room_id'];?>"><span class="icon icon-edit"></span></a>        
                        <a class="btn btn-danger" href="?page=rooms.delete&id=<?php echo $data_rooms['room_id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data_rooms['room_name'];  ?>')"><span class="icon icon-trash"></span></a>
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

      