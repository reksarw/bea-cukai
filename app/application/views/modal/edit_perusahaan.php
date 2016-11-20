<form role="form" method="POST" action="<?php echo base_url('master/act_edit_perusahaan') ?>">
    <div class="col-md-12">
        <input type="hidden" name="id" value="<?= $data_perusahaan->id ?>">
        <div class="form-group">
            <label>Nama Perusahaan</label>
            <input type="text" class="form-control" required placeholder="Nama Perusahaan" name="nama_perusahaan" value="<?= $data_perusahaan->nama_perusahaan; ?>">
        </div>
        <button type="submit" class="btn btn-default">
            <i class="fa fa-save"></i> Save
        </button>
    </div>
</form>