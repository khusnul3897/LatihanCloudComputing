
<h4>Data Transaksi</h4>
<a class="btn btn-primary" href="<?= site_url() ?>/transaksi/form">
    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>Tambah Data</a>
<br />
<br />
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped dataTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Transaksi</th>
                <th>Kode Hijab</th>
                <th>Nama Hijab</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Tanggal beli</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $r) { ?>
                <tr>
                    <td> <?= isset($no) ? ++$no : $no = 1 ?></td>
                    <td><?= $r['kode_trans'] ?></td>
                    <td><?= $r['kode_hijab'] ?></td>
                 <?php
                    $query = $this->db->query('SELECT * FROM hijab WHERE kode_hijab = "' . $r['kode_hijab'] . '"');
                    $row = $query->row_array();
                    if (isset($row)) {
                        $nama_hijab = $row['nama_hijab'];
                        $jenis = $row['jenis'];
                    }
                 ?>
                    <td><?= $nama_hijab ?></td>
                    <td><?= $jenis  ?></td>
                    <td class="text-right"><?= number_format($r['harga'], 0) ?></td>
                    <td class="text-right"><?= number_format($r['jumlah'], 0) ?></td>
                    <td class="text-right"><?= number_format($r['total'], 0) ?></td>
                    <td><?= $r['tgl_beli'] ?></td>
                    <td>
                        <a href="<?= site_url('transaksi/edit/' .$r['kode_trans'])?>"
                           class="btn-sm btn-warning ">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit</a>
                        <a href="#" rel="<?= site_url('transaksi/delet/'.$r['kode_trans'])?>"
                           class="del btn-sm btn-danger">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete</a>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

