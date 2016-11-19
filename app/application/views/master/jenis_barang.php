<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Jenis Barang
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#input" data-toggle="tab">Input Jenis Barang</a>
                    </li>
                    <li>
                        <a href="#data" data-toggle="tab">Data Jenis Barang</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="input">
                        <br>
                        <form role="form" method="POST" action="<?php echo base_url('Master/act_simpan') ?>">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Barang</label>
                                    <input type="text" class="form-control" placeholder="Jenis Barang" name="jenis_barang">
                                </div>
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-save"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="data">
                        <br>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="list-data">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Jenis Barang</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1 ;
                                foreach($jenis_barang as $data): ?>
                                <tr class="odd gradeX">
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->jenis_barang; ?></td>
                                    <td>
                                        <button class="btn btn-default edit-data" data-id="<?= $data->id; ?>">
                                            <i class="fa fa-pencil"></i> Edit
                                        </button>
                                        <a href="<?= base_url().'Master/act_delete?id='.$data->id; ?>" class="btn btn-default">
                                            <i class="fa fa-minus"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="mymodal"></div>