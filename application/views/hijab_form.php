<h4>Data Hijab</h4>
<br />
<br />
<div class="panel panel-body">
    <form class="form" method="post" action="<?= site_url() ?>/hijab/save" >
   
    <div class="form-group">
        <label>Kode Hijab</label>
        <input type="text" name="kode_hijab" class="form-control"
               value="<?= isset($data['kode_hijab']) ? $data['kode_hijab'] : '' ?>" />
    </div>
    <div class="form-group">
        <label>Nama Hijab</label>
        <input type="text" name="nama_hijab" class="form-control"
               value="<?= isset($data['nama_hijab']) ? $data['nama_hijab'] : '' ?>" />
    </div>
        <div class="form-group">
        <label>Jenis</label>
        <select class="form-control" name="jenis">
            
            <option disabled value="" >--Pilih Hijab--</option>
            <option value="pasmina">Pasmina</option>
            <option value="segitiga">Segitiga</option>
            <option value="tsunami">Tsunami</option>
        </select>
       
    </div>
    <div class="form-group">
            <label>Jumlah</label>
            <input type="text" name="jumlah" class="form-control"
                   value="<?= isset($data['jumlah']) ? $data['jumlah'] : '' ?>" />
    </div>
   <div class="form-group">
        <label>Harga</label>
        <input type="text" name="harga" class="form-control"
               value="<?= isset($data['harga']) ? $data['harga'] : '' ?>" />
    </div>
    <br />
    <button type="submit" class="btn btn-success">Simpan</button>
    
</form>
</div>



