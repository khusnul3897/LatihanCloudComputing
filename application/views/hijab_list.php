
<h4>Data Hijab</h4>
	<a class="btn btn-primary" href="<?= site_url() ?>/hijab/form">
	<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>Tambah Data</a>
	<br />
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
            <th>Aksi</th>
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
            <td>
                <a href="<?= site_url('hijab/edit/'.$r['kode_hijab'])?>"
                   class="btn-sm btn-warning ">
                   <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit</a>
                <a href="#" rel="<?= site_url('hijab/delet/'.$r['kode_hijab'])?>"
                   class="del btn-sm btn-danger">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete</a>

            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

