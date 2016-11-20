<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Surat Masuk
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#data" data-toggle="tab">Data Surat Masuk</a>
                    </li>
                    <li>
                        <a href="#input" data-toggle="tab">Input Surat Masuk</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="data">
                        <br>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="list-data">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>No_Surat</th>
                                    <th>Jenis Layanan</th>
                                    <th>Perusahaan</th>
                                    <th>Alamat</th>
                                    <th>Judul Surat</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1 ;
                                foreach($surat_masuk->result() as $data): ?>
                                <tr class="odd gradeX">
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->no_surat ?></td>
                                    <td><?= $data->jenis_kegiatan ?></td>
                                    <td><?= $data->nama_perusahaan ?></td>
                                    <td><?= $data->alamat ?></td>
                                    <td><?= $data->judulsurat ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url("surat/edit-surat-masuk?id=".$data->id) ?>" class="btn btn-default">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a href="<?= base_url("surat/act_hapus?id=".$data->id) ?>" class="btn btn-default">
                                            <i class="fa fa-minus"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="input">
                        <br>
                        <form role="form" method="POST" action="<?php echo base_url('surat/act_simpan_SuratMasuk') ?>">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No Surat</label>
                                    <input type="text" class="form-control" placeholder="Nomor Surat" name="no_surat">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Surat</label>
                                    <input type="date" class="form-control" placeholder="Tanggal Surat" name="tgl_surat">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Layanan</label>
                                    <select name="jenis_kegiatan" class="form-control">
                                        <?php //foreach($jenis_kegiatan->result() as $data): ?>
                                        <!-- <option value="<?= $data->jenis_kegiatan ?>"><?= $data->jenis_kegiatan ?></option> -->
                                        <option value="Jenis Kegiatan">Jenis Kegiatan</option>
                                        <?php //endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis BKC</label>
                                    <select name="jenis_bkc" class="form-control">
                                        <option value="SKT">SKT</option>
                                        <option value="KLB">KLB</option>
                                        <option value="SKTF">SKTF</option>
                                        <option value="KLM">KLM</option>
                                        <option value="TIS">TIS</option>
                                        <option value="Hasil Tembakau">Hasil Tembakau</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Perusahaan</label>
                                    <select name="nama_perusahaan" class="form-control">
                                        <?php //foreach($jenis_kegiatan->result() as $data): ?>
                                        <!-- <option value="<?= $data->jenis_kegiatan ?>"><?= $data->jenis_kegiatan ?></option> -->
                                        <option value="GUDANG GARAM">GUDANG GARAM</option>
                                        <?php //endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Npwp</label>
                                    <input type="text" class="form-control" placeholder="NPWP" name="npwp">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Pimpinan</label>
                                    <input type="text" class="form-control" placeholder="Nama Pimpinan" name="nama_atasan">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" placeholder="Jabatan" name="jabatan">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Npwp Pimpinan</label>
                                    <input type="text" class="form-control" placeholder="Npwp Pimpinan" name="npwp_atasan">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kewarganegaraan</label>
                                    <input type="text" class="form-control" placeholder="Kewarganegaraan" name="kewarganegaraan">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Surat</label>
                                    <input type="text" class="form-control" placeholder="Nama Surat" name="judulsurat">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>File Surat</label>
                                    <input type="file" class="form-control" placeholder="File Surat" name="surat">
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
    </div>
</div>

<div id="mymodal"></div>