<form role="form" method="POST" action="<?php echo base_url('master/act_edit_jenisLayanan') ?>">
    <div class="col-md-12">
        <input type="hidden" name="id" value="<?= $data_jenisKegiatan->id ?>">
        <div class="form-group">
            <label>Nama Layanan</label>
            <input type="text" class="form-control" required placeholder="Nama Layanan" name="jenis_kegiatan" value="<?= $data_jenisKegiatan->jenis_kegiatan ?>">
        </div>
        <button type="submit" class="btn btn-default">
            <i class="fa fa-save"></i> Save
        </button>
    </div>
</form>