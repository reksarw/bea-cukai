<form role="form" method="POST" action="<?php echo base_url('Kelola/act_edit_barang_keluar') ?>">
    <div class="form-group">
        <label>Kode Keluar</label>
        <input type="text" class="form-control" placeholder="Kode Keluar" name="kode_keluar" value="<?php echo $data_barangKeluar->kode_keluar; ?>" readonly>
    </div>

    <div class="form-group">
        <label>Register Keluar</label>
        <input type="text" class="form-control" placeholder="Register Keluar" name="reg_keluar" value="<?php echo $data_barangKeluar->reg_keluar; ?>" readonly>
    </div>
    <div class="form-group">
        <label>Petugas Administrasi</label>
        <input type="text" class="form-control" placeholder="Petugas Administrasi" name="petugasa" value="<?php echo $data_barangKeluar->petugasa; ?>">
    </div>
    <div class="form-group">
        <label>Petugas Gudang</label>
        <input type="text" class="form-control" placeholder="Petugas Gudang" name="petugasb" value="<?php echo $data_barangKeluar->petugasb; ?>">
    </div>
    <div class="form-group">
        <label>Tanggal Keluar</label>
        <input type="date" class="form-control" placeholder="Tanggal Keluar" name="tgl_keluar" value="<?php echo $data_barangKeluar->tgl_keluar; ?>">
    </div>
    <button type="submit" class="btn btn-default">
        <i class="fa fa-save"></i> Save
    </button>
</form>