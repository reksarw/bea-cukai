<?php
    $kode_keluar = generate_KB('BK');
?>
<div class="row">
    <?php echo $this->session->flashdata('message'); ?>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Barang Keluar
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#input" data-toggle="tab">Input Barang Keluar</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="input">
                        <br>
                        <form role="form" method="POST" action="<?php echo base_url('Kelola/act_barang_keluar') ?>">
                            <div class="text-center" style="font-weight:bold; font-size:20px;">
                                Register Barang Keluar
                            </div>
                            <input type="hidden" name="id_barang" value="<?= $this->input->get('id'); ?>" />
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Kode Keluar</label>
                                    <input type="text" class="form-control" placeholder="Kode Keluar" name="kode_keluar" value="<?=$kode_keluar?>" readonly>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Register Keluar</label>
                                    <input type="text" class="form-control" placeholder="Register Keluar" name="reg_keluar" value="RGKEPABEAAN0005" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Petugas Administrasi</label>
                                    <input type="text" class="form-control" placeholder="Petugas Administrasi" name="petugasa">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Petugas Gudang</label>
                                    <input type="text" class="form-control" placeholder="Petugas Gudang" name="petugasb">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tanggal Keluar</label>
                                    <input type="date" class="form-control" placeholder="Tanggal Keluar" name="tgl_keluar">
                                </div>
                            </div>

                            <br>
                            <div class="text-center" style="font-weight:bold; font-size:20px;">
                                Register Barang Masuk
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Nomor Surat</label>
                                    <input type="text" class="form-control" placeholder="Nomor Surat" name="no_surat" value="<?= $barang_masuk->nomor_surat ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Juru Sita</label>
                                    <input type="text" class="form-control" placeholder="Juru Sita" name="juru_sita" value="<?= $barang_masuk->juru_sita ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <input type="text" class="form-control" placeholder="Lokasi" name="lokasi" value="<?= $barang_masuk->lokasi ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Tanggal Sita</label>
                                    <input type="date" class="form-control" placeholder="Tanggal Sita" name="tgl_sita" value="<?= $barang_masuk->tgl_sita; ?>"disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Nomor Disposisi</label>
                                    <input type="text" class="form-control" placeholder="Nomor Surat" name="no_disposisi" value="<?= $barang_masuk->no_disposisi ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Disposisi Akhir</label>
                                    <input type="text" class="form-control" placeholder="Nomor Surat" name="disposisi_akhir" value="<?= $barang_masuk->disposisi_akhir ?>" disabled>
                                </div>
                            </div>

                            <br>
                            <div class="text-center" style="font-weight:bold; font-size:20px;">
                                Data Barang Sita Masuk
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Jenis Barang</label>
                                    <input type="text" class="form-control" placeholder="Jenis Barang" name="jenis_barang" value="<?= $barang_masuk->jenis_barang ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Asal Barang</label>
                                    <input type="text" class="form-control" placeholder="Asal Barang" name="asal" value="<?= $barang_masuk->asal ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Tujuan Barang</label>
                                    <input type="text" class="form-control" placeholder="Tujuan Barang" name="tujuan" value="<?= $barang_masuk->tujuan ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>No Dokumen</label>
                                    <input type="text" class="form-control" placeholder="Nomor Dokumen" name="no_dok" value="<?= $barang_masuk->no_dok ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Nomor Petikemas</label>
                                    <input type="text" class="form-control" placeholder="Nomor Petikemas" name="no_peti" value="<?= $barang_masuk->no_petikemas ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Jumlah Barang</label>
                                    <input type="text" class="form-control" placeholder="Jumlah Barang" name="jumlah" value="<?= $barang_masuk->jumlah ?>" disabled>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Pengemasan</label>
                                    <input type="text" class="form-control" placeholder="Pengemasan" name="pengemasan" value="<?= $barang_masuk->pengemasan ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Lama Sita</label>
                                    <input type="text" class="form-control" placeholder="Lama Sita" name="lama" value="<?= $barang_masuk->lama ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Nomor Register</label>
                                    <input type="text" class="form-control" placeholder="No Register" name="no_register" value="<?= $barang_masuk->no_register ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>No Petikemas</label>
                                    <input type="text" class="form-control" placeholder="Nomor Petikemas" name="no_peti" value="<?= $barang_masuk->no_peti ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Nama Pemilik</label>
                                    <input type="text" class="form-control" placeholder="Nama Pemilik" name="nama_pemilik" value="<?= $barang_masuk->nama_pemilik ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>NPWP</label>
                                    <input type="text" class="form-control" placeholder="NPWP Pemilik" name="npwp" value="<?= $barang_masuk->npwp ?>" disabled>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= $barang_masuk->alamat ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Ijin Tbp</label>
                                    <input type="text" class="form-control" placeholder="Ijin TBP" name="tbp" value="<?= $barang_masuk->tpb ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>No Register Sita</label>
                                    <input type="text" class="form-control" placeholder="Nomor Register Sita" name="reg_sita" value="<?= $barang_masuk->reg_sita ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>No Rak / Tempat</label>
                                    <input type="text" class="form-control" placeholder="Lokasi Simpan" name="rak" value="<?= $barang_masuk->rak ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Kadaluarsa</label>
                                    <input type="text" class="form-control" placeholder="Kadaluarsa" name="kadaluarsa" value="<?= $barang_masuk->kadaluarsa ?>" disabled>
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