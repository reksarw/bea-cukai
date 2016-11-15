<div class="row">
    <?php echo $this->session->flashdata('message'); ?> 
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Pilih Barang Keluar
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#data" data-toggle="tab">Pilih Barang Keluar</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="data">
                        <br>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="list-data">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kode Masuk</th>
                                    <th>Nomor Surat</th>
                                    <th>Juru Sita</th>
                                    <th>Tanggal Sita</th>
                                    <th>No Dis</th>
                                    <th>No Dok</th>
                                    <th>Nama Pemilik</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($barang->result() as $data): ?>
                                <tr class="odd gradeX">
                                    <td><?= $no++; ?></td>
                                    <td><?= $data->kode_masuk ?></td>
                                    <td><?= $data->nomor_surat ?></td>
                                    <td><?= $data->juru_sita ?></td>
                                    <td><?= $data->tgl_sita ?></td>
                                    <td><?= $data->no_disposisi ?></td>
                                    <td><?= $data->no_dok ?></td>
                                    <td><?= $data->nama_pemilik ?></td>
                                    <td>
                                        <a href="<?php echo base_url("Transaksi/Add_Lelang?kode_masuk=".$data->kode_masuk.""); ?>" class="btn btn-default">
                                            <i class="fa fa-pencil"></i> Add Lelang
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