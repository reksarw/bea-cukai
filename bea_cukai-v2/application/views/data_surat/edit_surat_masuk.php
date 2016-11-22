<div class="row">
    <?php echo $this->session->flashdata('message'); ?>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Jenis Barang
            </div>
            <div class="panel-body">
                <br>
                <form role="form" method="POST" action="<?php echo base_url('surat/act_edit_SuratMasuk') ?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $surat->id ?>">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>No Surat</label>
                            <input type="text" class="form-control" value="<?= $surat->no_surat;?>" placeholder="Nomor Surat" name="no_surat">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Surat</label>
                            <input type="date" class="form-control" placeholder="Tanggal Surat" name="tgl_surat" value="<?= $surat->tgl_surat;?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jenis Layanan</label>
                            <select name="jenis_kegiatan" class="form-control">
                                <?php foreach($jenis_kegiatan->result() as $data): ?>
                                    <?php
                                    if ($surat->jenis_kegiatan == $data->jenis_kegiatan) {
                                        $selected = 'selected';
                                    } else {
                                        $selected = '';
                                    }
                                    ?>
                                <option value="<?= $data->jenis_kegiatan ?>" <?=$selected?>><?= $data->jenis_kegiatan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jenis BKC</label>
                            <select name="jenis_bkc" class="form-control">
                                <option value="SKT" <?php if ($surat->jenis_bkc == 'SKT') {echo "selected";} ?>>SKT</option>
                                <option value="KLB" <?php if ($surat->jenis_bkc == 'KLB') {echo "selected";} ?>>KLB</option>
                                <option value="SKTF" <?php if ($surat->jenis_bkc == 'SKTF') {echo "selected";} ?>>SKTF</option>
                                <option value="KLM" <?php if ($surat->jenis_bkc == 'KLM') {echo "selected";} ?>>KLM</option>
                                <option value="TIS" <?php if ($surat->jenis_bkc == 'TIS') {echo "selected";} ?>>TIS</option>
                                <option value="Hasil Tembakau" <?php if ($surat->jenis_bkc == 'Hasil Tembakau') {echo "selected";} ?>>Hasil Tembakau</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Perusahaan</label>
                            <select name="nama_perusahaan" class="form-control">
                                <?php foreach($nama_perusahaan->result() as $data): ?>
                                    <?php
                                    if ($surat->nama_perusahaan == $data->nama_perusahaan) {
                                        $selected = 'selected';
                                    } else {
                                        $selected = '';
                                    }
                                    ?>
                                <option value="<?= $data->nama_perusahaan ?>" <?=$selected?>><?= $data->nama_perusahaan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Npwp</label>
                            <input type="text" value="<?= $surat->npwp ?>" class="form-control" placeholder="NPWP" name="npwp">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" value="<?= $surat->alamat ?>" class="form-control" placeholder="Alamat" name="alamat">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Pimpinan</label>
                            <input type="text" value="<?= $surat->nama_atasan ?>" class="form-control" placeholder="Nama Pimpinan" name="nama_atasan">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" value="<?= $surat->jabatan ?>" class="form-control" placeholder="Jabatan" name="jabatan">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Npwp Pimpinan</label>
                            <input type="text" value="<?= $surat->npwp_atasan ?>" class="form-control" placeholder="Npwp Pimpinan" name="npwp_atasan">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <input type="text" value="<?= $surat->kewarganegaraan ?>" class="form-control" placeholder="Kewarganegaraan" name="kewarganegaraan">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Surat</label>
                            <input type="text" value="<?= $surat->judulsurat ?>" class="form-control" placeholder="Nama Surat" name="judulsurat">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>File Surat</label>
                            <input type="text" class="form-control" placeholder="File Surat" value="<?= $surat->surat?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>&nbsp;</label>
                            <input type="file" class="form-control" name="surat">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-save"></i> Save
                        </button>
                    </div>
                </form>
                    
            </div>
        </div>
    </div>
</div>