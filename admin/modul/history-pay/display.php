   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Histori Pembayaran</span>
            </h1>
          </div>

          <br>
          <div class="row gutter-xs">
            <div class="col-xs-12">
              <div class="card">
                <div class="card-body">
                  <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Invoice</th>
                        <th>Tanggal</th>
                        <th>Nama Pelatihan</th>
                        <th>Bank Asal</th>
                        <th>Bank Tujuan</th>
                        <th>No.Rek Asal</th>
                        <th>No.Rek Tujuan</th>
                        <th>Pengirim</th>
                        <th>Nominal</th>
                        <th>Berkas</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                   /* $i = 0;
                    if (isset ($payment) && count ($payment) > 0){
                      foreach ($payment as $row) {
                      $i++;*/
                      for($i=0;$i<21;$i++){
                    ?>

                    <tr>
                     <td> <?php //echo $i?></td>
                     <td> <?php //echo $row->invoice ?></td>
                     <td> <?php //echo $row->payment_date ?></td>
                     <td> <?php //echo $row->course_title ?></td>
                     <td> <?php //echo $row->bank_from ?></td>
                     <td> <?php //echo $row->bank_to ?></td>
                     <td> <?php //echo $row->no_payment_from ?></td>
                     <td> <?php //echo $row->no_payment_to ?></td>
                     <td> <?php //echo $row->person_bank ?></td>
                     <td> <?php //echo $row->payment_nominal ?></td>
         

                     <td class="text-center">
                        <a class="btn btn-primary btn-sm btn-labeled" href="<?php //echo base_url().'index.php/member/courses/payCourse/'.$row->trainee_id?>"><span class="btn-label"><span class="icon icon-search icon-lg icon-fw"></span></span>Lihat</a>
                     </td>

                    </tr>
                    
                    <?php } //}}?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>