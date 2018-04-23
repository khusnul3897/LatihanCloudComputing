
<h4>Data Member</h4>
	<a class="btn btn-primary" href="<?= site_url() ?>/member/form">
	<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>Tambah Data</a>
	<br />
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
            <th>Aksi</th>
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
            <td>
                <a href="<?= site_url('member/edit/'.$r['id_member'])?>"
                   class="btn-sm btn-warning ">
                   <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit</a>
                <a href="#" rel="<?= site_url('member/delet/'.$r['id_member'])?>"
                   class="del btn-sm btn-danger">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete</a>

            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

