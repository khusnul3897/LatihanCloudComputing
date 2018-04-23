
<h4>Laporan Data Member</h4>
<br />
<div class="panel panel-body">
<table class="table table-bordered table-hover table-striped dataTable">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Member</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($member as $r) { ?>
        <tr>
            <td> <?= isset ($no) ? ++ $no : $no=1 ?></td>
            <td><?= $r['id_member'] ?></td>
            <td><?= $r['nama'] ?></td>
            <td><?= $r['alamat'] ?></td>
            <td><?= $r['telepon'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

