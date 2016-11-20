<form role="form" method="POST" action="<?php echo base_url('Master/act_edit_perusahaan') ?>">
    <div class="col-md-12">
        <input type="hidden" name="id" value="1">
        <div class="form-group">
            <label>Nama Perusahaan</label>
            <input type="text" class="form-control" required placeholder="Nama Perusahaan" name="nama_perusahaan" value="GUDANG GARAM">
        </div>
        <button type="submit" class="btn btn-default">
            <i class="fa fa-save"></i> Save
        </button>
    </div>
</form>