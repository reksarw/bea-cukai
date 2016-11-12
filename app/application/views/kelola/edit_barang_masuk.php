<div class="row">
    <?php echo $this->session->flashdata('message'); ?>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Jenis Barang
            </div>
            <div class="panel-body">
                        <br>
                        <form role="form" method="POST" action="<?php echo base_url('Kelola/act_barang_masuk') ?>">
                        	<div class="text-center" style="font-weight:bold; font-size:20px;">
                        		Edit Barang Masuk
                        	</div>
                        	<div class="col-md-3">
                        		<div class="form-group">
	                                <label>Kode Masuk Barang</label>
	                                <input type="text" class="form-control" placeholder="Kode Masuk Barang" name="kode_masuk">
	                            </div>
                        	</div>
                        	<div class="clearfix"></div>

                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>A. Nomor Surat</label>
	                                <input type="text" class="form-control" placeholder="Nomor Surat" name="nomor_surat">
	                            </div>
                            </div>
                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>B. Lokasi Sita</label>
	                                <input type="text" class="form-control" placeholder="Lokasi Sita" name="lokasi">
	                            </div>
                            </div>
                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>C. Tanggal Sita</label>
	                                <input type="date" class="form-control" placeholder="Tanggal Sita" name="tgl_sita">
	                            </div>
                            </div>

                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>A. No Disposisi</label>
	                                <input type="text" class="form-control" placeholder="Nomor Disposisi" name="no_disposisi">
	                            </div>
                            </div>
                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>B. Disposisi Awal</label>
	                                <input type="text" class="form-control" placeholder="Disposisi Awal" name="disposisi_tugas">
	                            </div>
                            </div>
                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>C. Disposisi Akhir</label>
	                                <input type="text" class="form-control" placeholder="Disposisi Akhir" name="disposisi_akhir">
	                            </div>
                            </div>

							<br>
							<div class="text-center" style="font-weight:bold; font-size:20px;">
                        		Data Barang
                        	</div>

                        	<div class="col-md-3">
	                            <div class="form-group">
	                                <label>Jenis Barang</label>
	                                <select name="jenis_barang" class="form-control">
                                        <?php foreach($jenis_barang->result() as $data): ?>
	                                	<option value="<?= $data->jenis_barang ?>"><?= $data->jenis_barang ?></option>
                                        <?php endforeach; ?>
	                                </select>
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Kondisi Barang</label>
	                                <input type="text" class="form-control" placeholder="Kondisi Barang" name="kondisi_barang">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Asal Barang</label>
	                                <input type="text" class="form-control" placeholder="Asal Barang" name="asal">
	                            </div>
                            </div>

                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Tujuan Barang</label>
	                                <input type="text" class="form-control" placeholder="Tujuan Barang" name="tujuan">
	                            </div>
                            </div>

                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>No Dokumen</label>
	                                <input type="text" class="form-control" placeholder="Nomor Dokumen" name="no_dok">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Nomor Petikemas</label>
	                                <input type="text" class="form-control" placeholder="Nomor Petikemas" name="no_petikemas">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Jumlah Barang</label>
	                                <input type="text" class="form-control" placeholder="Jumlah Barang" name="jumlah">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Pengemasan</label>
	                                <input type="text" class="form-control" placeholder="Pengemasan" name="pengemasan">
	                            </div>
                            </div>

                            <br>
							<div class="text-center" style="font-weight:bold; font-size:20px;">
                        		Data Kepabeaan
                        	</div>

                        	<div class="col-md-3">
	                            <div class="form-group">
	                                <label>Invoice</label>
	                                <input type="text" class="form-control" placeholder="Invoice" name="invoice">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>No Surat keputusan</label>
	                                <input type="text" class="form-control" placeholder="Surat Keputusan" name="surat_keputusan">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Nomor Register</label>
	                                <input type="text" class="form-control" placeholder="No Register" name="no_register">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Nomor Peti</label>
	                                <input type="text" class="form-control" placeholder="No Peti" name="no_peti">
	                            </div>
                            </div>

                            <br>
							<div class="text-center" style="font-weight:bold; font-size:20px;">
                        		Data Pemilik Barang
                        	</div>

                        	<div class="col-md-3">
	                            <div class="form-group">
	                                <label>Nama Pemilik</label>
	                                <input type="text" class="form-control" placeholder="Nama Pemilik" name="nama_pemilik">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Npwp</label>
	                                <input type="text" class="form-control" placeholder="Npwp Pemilik" name="npwp">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Alamat Pemilik</label>
	                                <input type="text" class="form-control" placeholder="Alamat Pemilik" name="alamat">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>TBP Kepabeaan</label>
	                                <input type="text" class="form-control" placeholder="TBP Kepabeaan" name="tpb">
	                            </div>
                            </div>

                            <br>
							<div class="text-center" style="font-weight:bold; font-size:20px;">
                        		Data Kepabean
                        	</div>

                        	<div class="col-md-3">
	                            <div class="form-group">
	                                <label>Register Sita</label>
	                                <input type="text" class="form-control" placeholder="No Register Sita" name="reg_sita">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Lama Sita</label>
	                                <input type="text" class="form-control" placeholder="Lama Sita" name="lama">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Rak / Tempat</label>
	                                <input type="text" class="form-control" placeholder="Lokasi Simpan" name="rak">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Kadaluarsa</label>
	                                <input type="text" class="form-control" placeholder="Kadaluarsa" name="kadaluarsa">
	                            </div>
                            </div>
                            
							<div class="col-md-3">
	                            <div class="form-group">
	                                <label>Tanggal Masuk</label>
	                                <input type="date" class="form-control" placeholder="Tanggal Masuk" name="tanggal_masuk">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Nama Petugas 1</label>
	                                <input type="text" class="form-control" placeholder="Nama Petugas 1" name="nama_petugasa">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Nama Petugas 2</label>
	                                <input type="text" class="form-control" placeholder="Nama Petugas 2" name="nama_petugasb">
	                            </div>
                            </div>
                            <div class="col-md-3">
	                            <div class="form-group">
	                                <label>Juru Sita</label>
	                                <select name="juru_sita" class="form-control">
                                        <?php foreach($juru_sita->result() as $data): ?>
	                                	<option value="<?= $data->nama; ?>"><?= $data->nama; ?></option>
                                        <?php endforeach; ?>
	                                </select>
	                            </div>
                            </div>

                            <div class="col-md-12">
		                        <button type="submit" class="btn btn-default">
		                            <i class="fa fa-save"></i> Edit
		                        </button>
                            </div>
                        </form>
                    
            </div>
        </div>
    </div>
</div>