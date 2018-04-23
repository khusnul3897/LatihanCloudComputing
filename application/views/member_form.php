<h4>Data Member</h4>
<br />
<br />
<div class="panel panel-body">
    
<form class="form" method="post" action="<?= isset($data['id_member']) ? 
        site_url('member/update'): 
        site_url('member/save') ?>"
      
    <input
        type="hidden" name="id_lama"
        value="<?= isset($id_lama)?$id_lama:'' ?>" />
    <div class="form-group">
        <label>ID Member</label>
        <input type="text" name="id_member" class="form-control"
               value="<?= isset($data['id_member']) ? $data['id_member'] : '' ?>" />
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control"
               value="<?= isset($data['nama']) ? $data['nama'] : '' ?>" />
    </div>
    
        <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control"
               value="<?= isset($data['alamat']) ? $data['alamat'] : '' ?>" />
    </div>
   <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon" class="form-control"
               value="<?= isset($data['telepon']) ? $data['telepon'] : '' ?>" />
    </div>
    <br />
    <button type="submit" class="btn btn-success">Simpan</button>
    
</form>
</div>




