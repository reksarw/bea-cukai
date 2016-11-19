<!--
SITAAN KELUAR GUDANG
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Print Preview</title>
	<style>
	.wrapper {
		width:auto;
		border-style:double;
		margin:auto;
		border:1px solid double;
		text-align:center;
	}

	.header {
		border-bottom:1px solid;
		font-weight:bold;
	}

	.sub-header {
		border-bottom:1px solid;
		font-weight:bold;
	}

	.section-1 {
		text-align: left !important;
		border-bottom:1px solid;
	}

	.section-2 , .section-5 {
		margin:0 !important;
		top:0px !important;
		text-align:left !important;
		font-size:20px;
		font-weight:bold;
		padding-bottom:10px;
		border-bottom:1px solid;
	}

	.section-3 {
		text-align: left !important;
		border-bottom:1px solid;
	}

	.section-4 {
		text-align: left !important;
		border-bottom:1px solid;
	}

	.last-section > .left {
		width:59.89%;
		text-align:left;
		float:left;
	}

	.last-section > .right {
		width:40%;
		text-align: left;
		float:right;
	}
	</style>
</head>
<body onload="window.print()">
	<div class="wrapper">
		<div class="header">
			<p>FORMULIR PEMBERITAHUAN BARANG SITAAN KELUAR GUDANG<br/>PENIMBUNAN</p>
		</div>

		<div class="sub-header">
			<p>KEMENTRIAN KEUANGAN REPUBLIK INDONESIA<br/>DIREKTORAT JENDRAL BEA DAN CUKAI<br/>KANTOR WILAYAH JAWA TIMUR 1</p>
		</div>

		<div class="section-1">
			<table border="0" style="float:left;width:50%;text-align:left">
				<tr>
					<td colspan="2">Nomor Surat Sita : {no surat}</td>
				</tr>

				<tr>
					<td>A.Juru Sita</td>
					<td>: <?= $lihat_data->juru_sita ?></td>
				</tr>

				<tr>
					<td>B.Lokasi Sita</td>
					<td>: <?= $lihat_data->lokasi ?></td>
				</tr>

				<tr>
					<td>C.Tanggal sita</td>
					<td>: <?= $lihat_data->tgl_sita ?></td>
				</tr>
			</table>

			<table border="0" style="float:right;width:50%;text-align:left">
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>A.Nomor Disposisi</td>
					<td>: <?= $lihat_data->no_disposisi ?></td>
				</tr>

				<tr>
					<td>B.Disposisi Penugasan</td>
					<td>: <?= $lihat_data->disposisi_tugas ?></td>
				</tr>

				<tr>
					<td>C.Disposisi Akhir</td>
					<td>: <?= $lihat_data->disposisi_akhir ?></td>
				</tr>
			</table>

			<div style="clear:both !important;"></div>
		</div>

		<div class="section-2">
			A.Data Barang
		</div>

		<div class="section-3">
			<table border="0" style="float:left;width:50%;text-align:left">
				<tr>
					<td>A.Jenis Barang</td>
					<td>: <?= $lihat_data->jenis_barang ?></td>
				</tr>

				<tr>
					<td>B.Kondisi Barang</td>
					<td>: <?= $lihat_data->kondisi_barang ?></td>
				</tr>

				<tr>
					<td>C.Asal Barang</td>
					<td>: <?= $lihat_data->asal ?></td>
				</tr>

				<tr>
					<td>C.Tujuan</td>
					<td>: <?= $lihat_data->tujuan ?></td>
				</tr>

				<tr>
					<td>C.No Dokumen</td>
					<td>: <?= $lihat_data->no_dok ?></td>
				</tr>
			</table>

			<table style="float:right;width:50%;text-align:left">
				<tr>
					<td>F.No Petikemas</td>
					<td>: <?= $lihat_data->no_petikemas ?></td>
				</tr>

				<tr>
					<td>G.Jumlah Barang</td>
					<td>: <?= $lihat_data->jumlah ?></td>
				</tr>

				<tr>
					<td>H.Pengemasan</td>
					<td>: <?= $lihat_data->pengemasan ?></td>
				</tr>
			</table>

			<div style="clear:both !important;"></div>
		</div>

		<div class="section-4">
			<table border="0" style="float:left;width:49.89%;text-align:left">
				<tr>
					<td width="25%">Lama Sita</td>
					<td width="30%">:</td>
					<td><?= $lihat_data->lama ?></td>
				</tr>
			</table>

			<table border="0" style="float:left;width:49.89%;text-align:left">
				<tr>
					<td width="25%">No Register Keluar</td>
					<td width="30%">:</td>
					<td><?= $lihat_data->reg_keluar ?></td>
				</tr>
			</table>

			<div style="clear:both !important;"></div>
		</div>
		
		<div class="section-4">
			<table border="0" style="float:left;width:49.89%;text-align:left">
				<tr>
					<td width="25%">Nomer Petikemas</td>
					<td width="30%">:</td>
					<td><?= $lihat_data->no_peti ?></td>
				</tr>
			</table>

			<table border="0" style="float:left;width:49.89%;text-align:left">
				<tr>
					<td width="25%">Jumlah Barang</td>
					<td width="30%">:</td>
					<td><?= $lihat_data->jumlah ?></td>
				</tr>
			</table>

			<div style="clear:both !important;"></div>
		</div>

		<div class="section-5">
			B.Data Pemilik
		</div>

		<div class="section-4">
			<table border="0" style="float:left;text-align:left">
				<tr>
					<td width="10%">Nama Pemilik</td>
					<td width="40%">:</td>
					<td><?= $lihat_data->nama_pemilik ?></td>
				</tr>

				<tr>
					<td>NPWP</td>
					<td>:</td>
					<td><?= $lihat_data->npwp ?></td>
				</tr>

				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><?= $lihat_data->alamat ?></td>
				</tr>

				<tr>
					<td>Izin TPB</td>
					<td>:</td>
					<td><?= $lihat_data->tpb ?></td>
				</tr>
			</table>

			<div style="clear:both !important;"></div>
		</div>

		<div class="section-4">
			<table border="0" style="float:left;width:49.99%;text-align:left">
				<tr>
					<td width="25%">Register Sita</td>
					<td width="30%">:</td>
					<td><?= $lihat_data->reg_sita ?></td>
				</tr>
			</table>

			<table border="0" style="float:left;width:49.99%;text-align:left">
				<tr>
					<td width="25%">Lama Sita</td>
					<td width="30%">:</td>
					<td><?= $lihat_data->lama ?></td>
				</tr>
			</table>

			<div style="clear:both !important;"></div>
		</div>

		<div class="section-4">
			<table border="0" style="float:left;width:49.99%;text-align:left">
				<tr>
					<td width="25%">No Rak / Tempat</td>
					<td width="30%">:</td>
					<td><?= $lihat_data->rak ?></td>
				</tr>
			</table>

			<table border="0" style="float:left;width:49.99%;text-align:left">
				<tr>
					<td width="25%">Nomor Petikemas</td>
					<td width="30%">:</td>
					<td><?= $lihat_data->no_peti ?></td>
				</tr>
			</table>

			<div style="clear:both !important;"></div>
		</div>

		<div class="section-4">
			<table border="0" style="float:left;width:49.99%;text-align:left">
				<tr>
					<td width="25%">Tanggal Masuk</td>
					<td width="30%">:</td>
					<td><?= $lihat_data->tanggal_masuk ?></td>
				</tr>
			</table>

			<table border="0" style="float:left;width:49.99%;text-align:left">
				<tr>
					<td width="25%">Kadaluarsa</td>
					<td width="30%">:</td>
					<td><?= $lihat_data->kadaluarsa ?></td>
				</tr>
			</table>

			<div style="clear:both !important;"></div>
		</div>

		<div class="section-5">
			Tanda Tangan Pengesahan
		</div>

		<div class="last-section">
			<div class="left">
				Penyerahan barang sitaan dari juru sita kepada petugas penyimpanan sitaan
				<br><br><br><br><br>
				Nama : <?= $lihat_data->nama_petugasa ?>
			</div>

			<div class="right">
				Penerimaan barang sitaan dari petugas sita
				<br><br><br><br><br><br/>
				Nama : <?= $lihat_data->nama_petugasb ?>
			</div>

			<div style="clear:both !important"></div>
		</div>
	</div>
</body>
</html>