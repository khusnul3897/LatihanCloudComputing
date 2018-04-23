<h4>Data Transaksi</h4>
<br />
<br />
<form class="form" method="post" 
      action="<?= isset($data['kode_trans']) ? site_url('transaksi/update'): site_url('transaksi/save') ?>"
      
    <input
        type="hidden" name="kode_lama"
        value="<?= isset($kode_lama) ? $kode_lama : '' ?>" />
    <div class="form-group">
        <label>Kode Transaksi</label>
        <input type="text" name="kode_trans" class="form-control"
               value="<?= isset($data['kode_trans']) ? $data['kode_trans'] : '' ?> " />
    </div>
    <div class="form-group">
        <label>Pilih Hijab</label>
        <select name="kode_hijab" class="form-control">
            <?php
            foreach($hijab as $b){
                ?><option value="<?= $b['kode_hijab'] ?>" 
                <?= isset($data['kode_hijab']) && $data['kode_hijab'] == $b['kode_hijab'] ? 
                    'selected' : '' ?>>
                <?= $b['nama_hijab'] ?></option>
                <?php
            }
            ?>
            
        </select>
    </div>
    <div class="form-group">
        <label>Jumlah</label>
        <input type="number" name="jumlah" class="form-control"
               value="<?= isset($data['jumlah']) ? $data['jumlah'] : '' ?> "
    </div>
        <div class="form-group">
        <label>Tanggal Beli</label>
        <input type="date" name="tgl_beli" class="form-control"
               value="<?= isset($data['tgl_beli']) ? $data['tgl_beli'] : '' ?> "
    </div>
    <br />
    <button type="submit" class="btn btn-success">Simpan</button>
    
</form>




