<form role="form" method="POST" action="<?php echo base_url('Master/act_edit') ?>">
    <div class="col-md-6">
        <input type="hidden" name="id" value="<?php echo $data_jenis->id; ?>">
        <div class="form-group">
            <label>Jenis Barang</label>
            <input type="text" class="form-control" required placeholder="Jenis Barang" name="jenis_barang" value="<?php echo $data_jenis->jenis_barang; ?>">
        </div>
        <button type="submit" class="btn btn-default">
            <i class="fa fa-save"></i> Save
        </button>
    </div>
</form>