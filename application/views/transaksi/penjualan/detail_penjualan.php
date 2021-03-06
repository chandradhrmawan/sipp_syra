<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Riwayat Penjualan</h3>
        </div>  
       <!-- /.box-header -->
       <div class="box-body">
        <div class="row">

        </div>
        <div class="row">
           <div class="table-responsive">
          <table class="table table-bordered" style="width:30%">
          <tr>
            <th>Id Transaksi</th>
            <th><?php echo $data_transaksi['id_transaksi'] ?></th>
          </tr>
          <tr>
            <th>Tanggal Transaksi</th>
            <th><?php echo date('d-m-Y',strtotime($data_transaksi['tgl_transaksi'])) ?></th>
          </tr>
          <tr>
            <th>Nama Petugas</th>
            <th><?php echo $data_transaksi['nama_lengkap'] ?></th>
          </tr>
          <tr>
            <th>Nama Pelanggan</th>
            <th><?php echo $data_transaksi['nama_pelanggan'] ?></th>
          </tr>
          <tr>
            <th>Alamat Pelanggan</th>
            <th><?php echo $data_transaksi['alamat_pelanggan'] ?></th>
          </tr>
          </table>
        </div>
        </div>
        <br>
        <div class="table-responsive">
          <table class="table table-hover table-bordered" style="width: 100% important!;">
            <thead>
              <tr>
                <th class="text-center" width="2%">No.</th>
                <th class="text-center" >No Invoice</th>
                <th class="text-center" >Nama Barang</th>
                <th class="text-center" >Jumlah Beli</th>
                <th class="text-center" >Total Bayar</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no=1;
              $total = 0;
              foreach ($data_penjualan as $key => $value) { ?>
              <tr>
              <td> <?php echo $no; ?> </td>
              <td> <?php echo $value->id_transaksi; ?> </td>
              <td> <?php echo $value->nama_barang; ?> </td>
              <td> <?php echo $value->jumlah_beli; ?> Pcs</td>
              <td> Rp. <?php echo number_format($value->sub_total); ?> </td>
                </tr>
                <?php
                 $total = $total + $value->sub_total;
                 $no++; 
               } ?>
              <tr>
                  <td colspan="4" style="text-align: right;">Total</td>
                  <td>Rp. <?php echo number_format($total); ?></td>
              </tr>
              </tbody>
            </table>
            <a href="<?php echo base_url()?>Penjualan/riwayat_penjualan"><button type="button" class="btn btn-flat btn-warning btn-sm"> <i class="fa fa-arrow-left"> Kembali </i> </button></a>
             <a target="__blank" href="<?php echo base_url()?>Penjualan/print_invoice/<?php echo $data_transaksi['id_transaksi'] ?>"><button type="button" class="btn btn-flat btn-info btn-sm"> <i class="fa fa-print"> Print </i> </button></a>
          </div>
</div>
<!-- /.box-body -->
</div> 
<!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>



<!-- MODAL TAMBAH -->
