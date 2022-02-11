<div class="container-fluid">
    <h1 class="h1  text-gray-800 text-center mt-5">Laundryes</h1>
    <h4 class="h5 mb-4 text-gray-800 text-center ">Data Laporan Pendapatan Laundryes</h4>
    <br>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Kode Pesanan</th>
                <th>Nama</th>
                <th>Tanggal Pesan</th>
                <th>Tanggal Selesai</th>
                <th>Total pendapatan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $row) { ?>
                <tr>
                    <td><?= $row->id_pemesanan; ?></td>
                    <td><?= $row->name; ?></td>
                    <td><?= date('d-m-Y', strtotime($row->tgl_pesan)); ?></td>
                    <td><?= date('d-m-Y', strtotime($row->tgl_kembali)); ?></td>
                    <td>Rp. <?= $row->sub_total; ?></td>
                    <td><?= $row->status_pesan; ?></td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>
<script>
    window.print();
</script>