 <!--  -->
 <div class="row">
     <div class="col-sm-12 col-md-12">
         <div class="page-title">
             <h2 class="lead">NOTA ORDER LAUNDRYES</h2>
         </div>
     </div>
 </div>
 <div class="col-md-12">
     <div class="alert alert-info">
         <?php foreach ($data1 as $a) { ?>
             Name : <?php echo $a->name; ?><br>
             Alamat : <?php echo $a->alamat; ?>
         <?php } ?>
         <br>
         <?php foreach ($pemesanan as $p) { ?>
             Tanggal Booking : <?php echo date('d-m-Y', strtotime($p->tgl_pesan)); ?><br>
             Kode Booking : <?php echo $p->id_pemesanan; ?><br>
             Status Booking : <?php echo $p->status_pesan; ?>
         <?php } ?>
     </div>
     <table class="table table-hover table-responsive table-striped">
         <thead>
             <tr>
                 <th>No</th>
                 <th>Nama Pakaian</th>
                 <th>Jumlah</th>
                 <th>Harga</th>
                 <th>Total</th>
             </tr>
         </thead>
         <tbody>
             <?php foreach ($list_pakaian as $lo) { ?>
                 <tr>
                     <td><?php echo $lo->id_detail_pemesanan; ?></td>
                     <td><?php echo $lo->jenis_pakaian; ?></td>
                     <td><?php echo $lo->jumlah_pakaian; ?></td>
                     <td>Rp.<?php echo $lo->harga_pakaian; ?></td>
                     <td>Rp.<?php echo $lo->harga_total; ?></td>
                 </tr>
             <?php } ?>
         </tbody>
     </table>
 </div>
 <script>
     window.print();
 </script>