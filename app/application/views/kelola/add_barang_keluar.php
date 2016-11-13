<div class="row">
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
                        <form role="form" method="POST" action="<?php echo base_url('Master/act_simpan') ?>">
                            <div class="text-center" style="font-weight:bold; font-size:20px;">
                                Register Barang Keluar
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Kode Keluar</label>
                                    <input type="text" class="form-control" placeholder="Kode Keluar" name="kode_keluar" value="BK0001" readonly>
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
                                    <input type="text" class="form-control" placeholder="Nomor Surat" name="no_surat" value="KBCA-TSC001-0" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Juru Sita</label>
                                    <input type="text" class="form-control" placeholder="Juru Sita" name="juru_sita" value="Ade Riza" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <input type="text" class="form-control" placeholder="Lokasi" name="lokasi" value="PASURUAN" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Tanggal Sita</label>
                                    <input type="date" type="date" class="form-control" placeholder="Tanggal Sita" name="tgl_sita" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Nomor Disposisi</label>
                                    <input type="text" class="form-control" placeholder="Nomor Surat" name="no_disposisi" value="0996059" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Disposisi Akhir</label>
                                    <input type="text" class="form-control" placeholder="Nomor Surat" name="disposisi_akhir" value="GUDANG" disabled>
                                </div>
                            </div>

                            <br>
                            <div class="text-center" style="font-weight:bold; font-size:20px;">
                                Data Barang Sita Masuk
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Jenis Barang</label>
                                    <input type="text" class="form-control" placeholder="Jenis Barang" name="jenis_barang" value="ROKOK" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Asal Barang</label>
                                    <input type="text" class="form-control" placeholder="Asal Barang" name="asal" value="MADURA" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Tujuan Barang</label>
                                    <input type="text" class="form-control" placeholder="Tujuan Barang" name="tujuan" value="MALANG" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>No Dokumen</label>
                                    <input type="text" class="form-control" placeholder="Nomor Dokumen" name="no_dok" value="SNRMAS00190966" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Nomor Petikemas</label>
                                    <input type="text" class="form-control" placeholder="Nomor Petikemas" name="no_peti" value="1" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Jumlah Barang</label>
                                    <input type="text" class="form-control" placeholder="Jumlah Barang" name="jumlah" value="2" disabled>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Pengemasan</label>
                                    <input type="text" class="form-control" placeholder="Pengemasan" name="pengemasan" value="Box Karton" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Lama Sita</label>
                                    <input type="text" class="form-control" placeholder="Lama Sita" name="lama" value="3 BULAN" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Nomor Register</label>
                                    <input type="text" class="form-control" placeholder="No Register" name="no_register" value="RGKEPABEAAN00" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>No Petikemas</label>
                                    <input type="text" class="form-control" placeholder="Nomor Petikemas" name="no_peti" value="9069909607005" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Nama Pemilik</label>
                                    <input type="text" class="form-control" placeholder="Nama Pemilik" name="nama_pemilik" value="RIKWANTO" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>NPWP</label>
                                    <input type="text" class="form-control" placeholder="NPWP Pemilik" name="npwp" value="089009909907950" disabled>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="MADURA" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Ijin Tbp</label>
                                    <input type="text" class="form-control" placeholder="Ijin TBP" name="tbp" value="REG-099749587-0" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>No Register Sita</label>
                                    <input type="text" class="form-control" placeholder="Nomor Register Sita" name="reg_sita" value="909577990000016" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>No Rak / Tempat</label>
                                    <input type="text" class="form-control" placeholder="Lokasi Simpan" name="rak" value="RAK 38" disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Kadaluarsa</label>
                                    <input type="text" class="form-control" placeholder="Kadaluarsa" name="kadaluarsa" value="." disabled>
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