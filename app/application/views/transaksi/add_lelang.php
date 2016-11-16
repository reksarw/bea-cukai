<?php
    $kode_lelang = generate_KB('KPBEANSU-MSU-');
?>
<div class="row">
    <?php echo $this->session->flashdata('message'); ?>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Pelelangan Barang
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#input" data-toggle="tab">Input Barang Lelang</a>
                    </li>
                    <li>
                        <a href="#data" data-toggle="tab">Data Barang Lelang</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="input">
                    <?php
                    if ( ! $this->input->get('kode_lelang'))
                    {
                    ?>
                    <h4>Pilih barang keluar terlebih dahulu <a href="<?= base_url('Transaksi/Transaksi_Barang'); ?>">klik disini</a></h4>
                    <?php
                    }
                    else
                    {
                    ?>
                        <br>
                        <form role="form" method="POST" action="<?php echo base_url('Transaksi/act_add_lelang') ?>">
                            <br>
                            <div class="text-center" style="font-weight:bold; font-size:20px;">
                                Register Lelang
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Kode Lelang</label>
                                    <input type="text" class="form-control" placeholder="Kode Lelang" name="kode_lelang" value="<?=$kode_lelang; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tujuan Lelang</label>
                                    <input type="text" class="form-control" placeholder="Tujuan Lelang" name="tujuan">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tanggal Lelang</label>
                                    <input type="date" class="form-control" placeholder="Tanggal Lelang" name="tgl_lelang" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nomor Register Sita</label>
                                    <input type="text" class="form-control" placeholder="Nomor Register Sita" name="reg_sita" value="<?= $query->no_register ?>" disabled>
                                </div>
                            </div>
                            <input type="hidden" name="kode_lelang" value="<?= $query->kode_lelang; ?>"/>
                            <input type="hidden" name="jumlah" value="<?= $query->jumlah; ?>"/>
                            <input type="hidden" name="id_barang" value="<?= $query->id_barang; ?>"/>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Lama Sita</label>
                                    <input type="text" class="form-control" placeholder="Lama Sita" name="lama" value="3 BULAN" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Jumlah Barang</label>
                                    <input type="text" class="form-control" placeholder="Jumlah Barang" name="jumlah" value="<?= $query->jumlah; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Nama Pemilik</label>
                                    <input type="text" class="form-control" placeholder="Nama Pemilik" name="nama_pemilik" value="<?= $query->nama_pemilik; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= $query->alamat?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Ijin Tbp</label>
                                    <input type="text" class="form-control" placeholder="Ijin TBP" name="tbp" value="<?= $query->tpb; ?>" disabled>
                                </div>
                            </div>

                            <br>
                            <div class="text-center" style="font-weight:bold; font-size:20px;">
                                Data Barang Sita Masuk
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Jenis Barang</label>
                                    <input type="text" class="form-control" placeholder="Jenis Barang" name="jenis_barang" value="<?= $query->jenis_barang ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Kondisi Barang</label>
                                    <input type="text" class="form-control" placeholder="Kondisi Barang" name="kondisi_barang" value="<?= $query->kondisi_barang ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Asal Barang</label>
                                    <input type="text" class="form-control" placeholder="Asal Barang" name="asal" value="<?= $query->asal ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Tujuan Barang</label>
                                    <input type="text" class="form-control" placeholder="Tujuan Barang" name="tujuan" value="<?= $query->tujuan ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>No Dokumen</label>
                                    <input type="text" class="form-control" placeholder="Nomor Dokumen" name="no_dok" value="<?= $query->no_dok ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>No Petikemas</label>
                                    <input type="text" class="form-control" placeholder="Nomor Petikemas" name="no_peti" value="<?= $query->no_peti ?>" disabled>
                                </div>
                            </div>

                            <br>
                            <div class="text-center" style="font-weight:bold; font-size:20px;">
                                Data Petugas
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Petugas A</label>
                                    <input type="text" class="form-control" placeholder="Petugas A" name="petugasa">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Petugas B</label>
                                    <input type="text" class="form-control" placeholder="Petugas B" name="petugasb">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group"
>                                    <label>Petugas C</label>
                                    <input type="text" class="form-control" placeholder="Petugas C" name="petugasc">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Petugas D</label>
                                    <input type="text" class="form-control" placeholder="Petugas D" name="petugasd">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Juru Sita 1</label>
                                    <input type="text" class="form-control" placeholder="Juru Sita 1" name="jurusitaa">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Juru Sita 2</label>
                                    <input type="text" class="form-control" placeholder="Juru Sita 2" name="jurusitab">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Kepala Juru Sita</label>
                                    <input type="text" class="form-control" placeholder="Kepala Juru Sita" name="juru_sita">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nomor Register Lelang</label>
                                    <input type="text" class="form-control" placeholder="Nomor Register Lelang" name="reg_lelang">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-save"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                    <?php } ?>

                    <div class="tab-pane fade" id="data">
                        <br>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="list-data">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nomor Surat</th>
                                    <th>Kode Lelang</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Tanggal Lelang</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($barang_lelang as $data): 
                                ?>
                                <tr class="odd gradeX">
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->nomor_surat ?></td>
                                    <td><?= $data->kode_lelang ?></td>
                                    <td><?= $data->kode_masuk ?></td>
                                    <td>opo iki ?</td>
                                    <td><?= $data->tgl_lelang ?></td>
                                    <td>
                                        <button class="btn btn-default edit-data-BLelang" data-id="<?= $data->id; ?>">
                                            <i class="fa fa-pencil"></i> Edit
                                        </button>
                                        <a href="<?= base_url("Transaksi/act_hapus?kode_lelang=".$data->kode_lelang."&id=".$data->id.""); ?>" class="btn btn-default">
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