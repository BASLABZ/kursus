
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Daftar Konfirmasi Pembayaran</span>
            </h1>
          </div>

          <a href="?page=bahanpelatihan.frm-insert">
            
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
                        <th>Foto</th>
                        <th>Nama Bank</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_confirm = "SELECT *
                                    FROM
                                        `siantro`.`tbl_payment`;";
                   
                    $result=mysql_query($sql_confirm);
                    $no=0;
                    while($data_confirm=mysql_fetch_array($result)){
                    $no++;

                    ?>

                    <tr>
                     <td> <?php echo $no; ?></td>
                     <td> <img src="uploads/payment/<?php echo $data_confirm['payment_upload']; ?>" width="150" height="150"></td>
                     <td> <?php echo $data_confirm['bank_from'] ?></td>
                     <td> <?php echo $data_confirm['payment_date']; ?></td>
                     
                     

                     <td class="text-center">
                        <a class="btn btn-primary" href="?page=payconfirm.detail&id=<?php echo $data_confirm['payment_id'];?>"><span class="icon icon-edit"></span></a>        
                        <a class="btn btn-danger" href="?page=payconfirm.delete&id=<?php echo $data_confirm['payment_id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ???')"><span class="icon icon-trash"></span></a>
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

    