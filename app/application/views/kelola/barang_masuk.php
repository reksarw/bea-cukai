<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Jenis Barang
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#input" data-toggle="tab">Input Barang Masuk</a>
                    </li>
                    <li>
                        <a href="#data" data-toggle="tab">Data Barang Masuk</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="input">
                        <br>
                        <form role="form" method="POST" action="<?php echo base_url('Master/act_simpan') ?>">
                        	<div class="text-center" style="font-weight:bold; font-size:20px;">
                        		Register Sita
                        	</div>
                        	<div class="col-md-3">
                        		<div class="form-group">
	                                <label>Kode Masuk Barang</label>
	                                <input class="form-control" placeholder="Kode Masuk Barang" name="kode_masuk">
	                            </div>
                        	</div>
                        	<div class="clearfix"></div>

                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>A. Nomor Surat</label>
	                                <input class="form-control" placeholder="Nomor Surat" name="nomor_surat">
	                            </div>
                            </div>
                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>B. Lokasi Sita</label>
	                                <input class="form-control" placeholder="Lokasi Sita" name="lokasi">
	                            </div>
                            </div>
                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>C. Tanggal Sita</label>
	                                <input class="form-control" placeholder="Tanggal Sita" name="tgl_sita">
	                            </div>
                            </div>

                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>A. No Disposisi</label>
	                                <input class="form-control" placeholder="Nomor Disposisi" name="no_disposisi">
	                            </div>
                            </div>
                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>B. Disposisi Awal</label>
	                                <input class="form-control" placeholder="Disposisi Awal" name="disposisi_awal">
	                            </div>
                            </div>
                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>C. Disposisi Akhir</label>
	                                <input class="form-control" placeholder="Disposisi Akhir" name="disposisi_akhir">
	                            </div>
                            </div>

							<br>
							<div class="text-center" style="font-weight:bold; font-size:20px;">
                        		Data Barang
                        	</div>

                        	<div class="col-md-4">
	                            <div class="form-group">
	                                <label>A. Nomor Surat</label>
	                                <input class="form-control" placeholder="Nomor Surat" name="nomor_surat">
	                            </div>
                            </div>
                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>B. Lokasi Sita</label>
	                                <input class="form-control" placeholder="Lokasi Sita" name="lokasi">
	                            </div>
                            </div>
                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>C. Tanggal Sita</label>
	                                <input class="form-control" placeholder="Tanggal Sita" name="tgl_sita">
	                            </div>
                            </div>

                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>A. No Disposisi</label>
	                                <input class="form-control" placeholder="Nomor Disposisi" name="no_disposisi">
	                            </div>
                            </div>
                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>B. Disposisi Awal</label>
	                                <input class="form-control" placeholder="Disposisi Awal" name="disposisi_awal">
	                            </div>
                            </div>
                            <div class="col-md-4">
	                            <div class="form-group">
	                                <label>C. Disposisi Akhir</label>
	                                <input class="form-control" placeholder="Disposisi Akhir" name="disposisi_akhir">
	                            </div>
                            </div>

                            <div class="col-md-12">
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>
                                        <a href="" class="btn btn-default">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a href="" class="btn btn-default">
                                            <i class="fa fa-minus"></i> Hapus
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