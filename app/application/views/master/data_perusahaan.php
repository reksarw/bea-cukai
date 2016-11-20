<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Perusahaan
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#data" data-toggle="tab">Data Perusahaan</a>
                    </li>
                    <li>
                        <a href="#input" data-toggle="tab">Input Perusahaan</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="data">
                        <br>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="list-data">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Perusahaan</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                // $no = 1 ;
                                // foreach($jenis_barang as $data): ?>
                                <tr class="odd gradeX">
                                    <!-- <td><?= $no++ ?></td> -->
                                    <td>1</td>
                                    <td>GUDANG GARAM</td>
                                    <td class="text-center">
                                        <button class="btn btn-default edit-perusahaan" data-id="1">
                                            <i class="fa fa-pencil"></i> Edit
                                        </button>
                                        <a href="<?= base_url() ?>" class="btn btn-default">
                                            <i class="fa fa-minus"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                                <?php //endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="input">
                        <br>
                        <form role="form" method="POST" action="<?php echo base_url('Master/act_simpan_perusahaan') ?>">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Perusahaan</label>
                                    <input type="text" class="form-control" placeholder="Nama Perusahaan" name="nama_perusahaan">
                                </div>
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