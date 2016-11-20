<form role="form" method="POST" action="<?php echo base_url('Master/act_edit_jenisLayanan') ?>">
    <div class="col-md-12">
        <input type="hidden" name="id" value="1">
        <div class="form-group">
            <label>Nama Layanan</label>
            <input type="text" class="form-control" required placeholder="Nama Layanan" name="jenis_kegiatan" value="CUKAI ROKOK">
        </div>
        <button type="submit" class="btn btn-default">
            <i class="fa fa-save"></i> Save
        </button>
    </div>
</form>