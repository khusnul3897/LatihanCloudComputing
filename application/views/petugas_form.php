<h4>Data Petugas</h4>
<br />
<br />
<div class="panel panel-body">
<form class="form" method="post" action="<?= isset($data['kode_petugas']) ? 
        site_url('petugas/update'): 
        site_url('petugas/save') ?>" 
    <input
        type="hkodeden" name="kode_lama"
        value="<?= isset($kode_lama)?$kode_lama:'' ?>" />
    <div class="form-group">
        <label>Kode Petugas</label>
        <input type="text" name="kode_petugas" class="form-control"
               value="<?= isset($data['kode_petugas']) ? $data['kode_petugas'] : '' ?>" />
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama_petugas" class="form-control"
               value="<?= isset($data['nama_petugas']) ? $data['nama_petugas'] : '' ?>" />
    </div>
    
   <div class="form-group">
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control"
               value="<?= isset($data['jabatan']) ? $data['jabatan'] : '' ?>" />
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




