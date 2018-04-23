
<h4>Data petugas</h4>
	<a class="btn btn-primary" href="<?= site_url() ?>/petugas/form">
	<span class="glyphicon glyphicon-plus-sign" aria-hkodeden="true"></span>Tambah Data</a>
	<br />
	<br />
<div class="panel panel-body">
<table class="table table-bordered table-hover table-striped dataTable">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Petugas</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($petugas as $r) { ?>
        <tr>
            <td> <?= isset ($no) ? ++ $no : $no=1 ?></td>
            <td><?= $r['kode_petugas'] ?></td>
            <td><?= $r['nama'] ?></td>
            <td><?= $r['jabatan'] ?></td>
            <td><?= $r['alamat'] ?></td>
            <td><?= $r['telepon'] ?></td>
            <td>
                <a href="<?= site_url('petugas/edit/'.$r['kode_petugas'])?>"
                   class="btn-sm btn-warning ">
                   <span class="glyphicon glyphicon-pencil" aria-hkodeden="true"></span>Edit</a>
                <a href="#" rel="<?= site_url('petugas/delet/'.$r['kode_petugas'])?>"
                   class="del btn-sm btn-danger">
                   <span class="glyphicon glyphicon-remove" aria-hkodeden="true"></span>Delete</a>

            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

