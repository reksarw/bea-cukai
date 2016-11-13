<div class="row">
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
                                    <th>Juru</th>
                                    <th>Tanggal Sita</th>
                                    <th>No Dis</th>
                                    <th>No Dok</th>
                                    <th>Nama Pemilik</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>1</td>
                                    <td>BM0001</td>
                                    <td>a</td>
                                    <td>Ade Riza</td>
                                    <td>24-05-2015</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>
                                        <a href="<?php echo base_url('Kelola/Add_Barang_Keluar'); ?>" class="btn btn-default">
                                            <i class="fa fa-pencil"></i> Add Barang Keluar
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>