
<h4>Laporan Data Hijab</h4>
<br />
<div class="panel panel-body">
<table class="table table-bordered table-hover table-striped dataTable">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Hijab</th>
            <th>Nama Hijab</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($hijab as $r) { ?>
        <tr>
            <td> <?= isset ($no) ? ++ $no : $no=1 ?></td>
            <td><?= $r['kode_hijab'] ?></td>
            <td><?= $r['nama_hijab'] ?></td>
            <td><?= $r['jenis'] ?></td>
            <td><?= $r['jumlah'] ?></td>
            <td><?= $r['harga'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

