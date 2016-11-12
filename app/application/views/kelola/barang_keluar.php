<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Barang Keluar
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#data" data-toggle="tab">Data Barang Keluar</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="data">
                        <br>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="list-data">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kode Keluar</th>
                                    <th>Kode Barang Masuk</th>
                                    <th>Nomor Surat</th>
                                    <th>Nama Pemilik</th>
                                    <th>Tanggal Keluar</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($view_data->result() as $data): 
                                ?>
                                <tr class="odd gradeX">
                                    <td><?= $no++; ?></td>
                                    <td><?= $data->kode_keluar ?></td>
                                    <td><?= $data->kode_masuk ?></td>
                                    <td><?= $data->nomor_surat ?></td>
                                    <td><?= $data->nama_pemilik ?></td>
                                    <td><?= $data->tgl_keluar ?></td>
                                    <td>
                                        <button class="btn btn-default edit-data-BKeluar" data-id="1">
                                            <i class="fa fa-pencil"></i> Edit
                                        </button>
                                        <a href="" class="btn btn-default">
                                            <i class="fa fa-minus"></i> Hapus
                                        </a>
                                        <a href="" class="btn btn-default">
                                            <i class="fa fa-pencil"></i> Cetak Laporan
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