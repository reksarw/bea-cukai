<form role="form" method="POST" action="<?= base_url("Transaksi/act_edit_lelang")?>">
    <div class="form-group">
        <label>Kode Lelang</label>
        <input type="text" class="form-control" placeholder="Kode Lelang" name="kode_lelang" value="<?= $data_lelang->kode_lelang ?>" readonly>
    </div>

    <div class="form-group">
        <label>Nomor Register Lelang</label>
        <input type="text" class="form-control" value="<?= $data_lelang->reg_lelang ?>" placeholder="Register Lelang" name="reg_lelang">
    </div>
    <div class="form-group">
        <label>Tujuan</label>
        <input type="text" class="form-control" value="<?= $data_lelang->tujuan ?>" placeholder="Tujuan" name="tujuan">
    </div>
    <div class="form-group">
        <label>Jumlah</label>
        <input type="text" class="form-control" value="<?= $data_lelang->jumlah ?>" placeholder="Jumlah" name="jumlah">
    </div>
    <div class="form-group">
        <label>Petugas A</label>
        <input type="text" class="form-control" value="<?= $data_lelang->petugasa ?>" placeholder="Petugas A" name="petugasa">
    </div>
    <div class="form-group">
        <label>Petugas B</label>
        <input type="text" class="form-control" value="<?= $data_lelang->petugasb ?>" placeholder="Petugas B" name="petugasb">
    </div>
    <div class="form-group">
        <label>Petugas C</label>
        <input type="text" class="form-control" value="<?= $data_lelang->petugasc ?>" placeholder="Petugas C" name="petugasc">
    </div>
    <div class="form-group">
        <label>Petugas D</label>
        <input type="text" class="form-control" value="<?= $data_lelang->petugasd ?>" placeholder="Petugas D" name="petugasd">
    </div>
    <div class="form-group">
        <label>Juru Sita 1</label>
        <input type="text" class="form-control" value="<?= $data_lelang->jurusitaa ?>" placeholder="Juru Sita 1" name="jurusitaa">
    </div>
    <div class="form-group">
        <label>Juru Sita 2</label>
        <input type="text" class="form-control" value="<?= $data_lelang->jurusitab ?>" placeholder="Juru Sita 2" name="jurusitab">
    </div>
    <div class="form-group">
        <label>Kepala Juru Sita</label>
        <input type="text" class="form-control" value="<?= $data_lelang->juru_sita ?>" placeholder="Kepala Juru Sita" name="juru_sita">
    </div>
    <div class="form-group">
        <label>Tanggal Lelang</label>
        <input type="date" class="form-control" value="<?= $data_lelang->tgl_lelang ?>" placeholder="Tanggal Lelang" name="tgl_lelang">
    </div>
    <button type="submit" class="btn btn-default">
        <i class="fa fa-save"></i> Save
    </button>
</form>