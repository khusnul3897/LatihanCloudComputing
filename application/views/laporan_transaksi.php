
<h4>Laporan Data Transaksi</h4>
<br />
<div class="panel panel-body">
<table class="table table-bordered table-hover table-striped dataTable">
    <thead>
        <tr>
            <th>Kode Transaksi</th>
            <th>Kode Hijab</th>
            <th>Nama Hijab</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Tanggal beli</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($transaksi as $r) { ?>
        <tr>
            <td> <?= isset ($no) ? ++ $no : $no=1 ?></td>
            <td><?= $r['kode_trans'] ?></td>
            <td><?= $r['kode_hijab'] ?></td>
            <td><?= $r['nama_hijab'] ?></td>
            <td><?= $r['jenis'] ?></td>
            <td><?= $r['harga'] ?></td>
            <td><?= $r['jumlah'] ?></td>
            <td><?= $r['total'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

