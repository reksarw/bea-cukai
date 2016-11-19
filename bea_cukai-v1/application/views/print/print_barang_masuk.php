<!--
BARANG MASUK
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
			<p>FORMULIR PEMBERITAHUAN BARANG MASUK UNTUK DISIMPAN<br/>PADA GUDANG PENIMBUNAN SITAAN</p>
		</div>

		<div class="sub-header">
			<p>KEMENTRIAN KEUANGAN REPUBLIK INDONESIA<br/>DIREKTORAT JENDRAL BEA DAN CUKAI<br/>KANTOR WILAYAH JAWA TIMUR 1</p>
		</div>

		<div class="section-1">
			<table border="0" style="float:left;width:50%;text-align:left">
				<tr>
					<td colspan="2">Nomor Surat Sita : <?= $barang_masuk->nomor_surat; ?></td>
				</tr>

				<tr>
					<td>A.Juru Sita</td>
					<td>: <?= $barang_masuk->juru_sita ?></td>
				</tr>

				<tr>
					<td>B.Lokasi Sita</td>
					<td>: <?= $barang_masuk->lokasi ?></td>
				</tr>

				<tr>
					<td>C.Tanggal sita</td>
					<td>: <?= $barang_masuk->tgl_sita ?></td>
				</tr>
			</table>

			<table border="0" style="float:right;width:50%;text-align:left">
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>A.Nomor Disposisi</td>
					<td>: <?= $barang_masuk->no_disposisi ?></td>
				</tr>

				<tr>
					<td>B.Disposisi Penugasan</td>
					<td>: <?= $barang_masuk->disposisi_tugas ?></td>
				</tr>

				<tr>
					<td>C.Disposisi Akhir</td>
					<td>: <?= $barang_masuk->disposisi_akhir ?></td>
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
					<td>: <?= $barang_masuk->jenis_barang ?></td>
				</tr>

				<tr>
					<td>B.Kondisi Barang</td>
					<td>: <?= $barang_masuk->kondisi_barang ?></td>
				</tr>

				<tr>
					<td>C.Asal Barang</td>
					<td>: <?= $barang_masuk->asal ?></td>
				</tr>

				<tr>
					<td>C.Tujuan</td>
					<td>: <?= $barang_masuk->tujuan ?></td>
				</tr>

				<tr>
					<td>C.No Dokumen</td>
					<td>: <?= $barang_masuk->no_dok ?></td>
				</tr>
			</table>

			<table style="float:right;width:50%;text-align:left">
				<tr>
					<td>F.No Petikemas</td>
					<td>: <?= $barang_masuk->no_petikemas ?></td>
				</tr>

				<tr>
					<td>G.Jumlah Barang</td>
					<td>: <?= $barang_masuk->jumlah ?></td>
				</tr>

				<tr>
					<td>H.Pengemasan</td>
					<td>: <?= $barang_masuk->pengemasan ?></td>
				</tr>
			</table>

			<div style="clear:both !important;"></div>
		</div>

		<div class="section-4">
			<table border="0" style="float:left;width:33.33%;padding-top:10px;text-align:left">
				<tr>
					<td>Invoice</td>
					<td>:</td>
					<td><?= $barang_masuk->invoice ?></td>
				</tr>
			</table>

			<table border="0" style="float:left;width:33.33%;padding-top:3px;text-align:left">
				<tr>
					<td>Surat<br/>Keputusan</td>
					<td>:</td>
					<td><?= $barang_masuk->surat_keputusan ?></td>
				</tr>
			</table>

			<table border="0" style="float:left;width:33.33%;padding-top:10px;text-align:left">
				<tr>
					<td>No Register</td>
					<td>:</td>
					<td><?= $barang_masuk->no_register ?></td>
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
					<td>a</td>
				</tr>

				<tr>
					<td>NPWP</td>
					<td>:</td>
					<td><?= $barang_masuk->npwp ?></td>
				</tr>

				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><?= $barang_masuk->alamat ?></td>
				</tr>

				<tr>
					<td>Izin TPB</td>
					<td>:</td>
					<td><?= $barang_masuk->tpb ?></td>
				</tr>
			</table>

			<div style="clear:both !important;"></div>
		</div>

		<div class="section-4">
			<table border="0" style="float:left;width:49.99%;text-align:left">
				<tr>
					<td width="25%">Register Sita</td>
					<td width="30%">:</td>
					<td>a</td>
				</tr>
			</table>

			<table border="0" style="float:left;width:49.99%;text-align:left">
				<tr>
					<td width="25%">Lama Sita</td>
					<td width="30%">:</td>
					<td>a</td>
				</tr>
			</table>

			<div style="clear:both !important;"></div>
		</div>

		<div class="section-4">
			<table border="0" style="float:left;width:49.99%;text-align:left">
				<tr>
					<td width="25%">No Rak / Tempat</td>
					<td width="30%">:</td>
					<td><?= $barang_masuk->rak ?></td>
				</tr>
			</table>

			<table border="0" style="float:left;width:49.99%;text-align:left">
				<tr>
					<td width="25%">Nomor Petikemas</td>
					<td width="30%">:</td>
					<td><?= $barang_masuk->no_peti ?></td>
				</tr>
			</table>

			<div style="clear:both !important;"></div>
		</div>

		<div class="section-4">
			<table border="0" style="float:left;width:49.99%;text-align:left">
				<tr>
					<td width="25%">Tanggal Masuk</td>
					<td width="30%">:</td>
					<td><?= $barang_masuk->tanggal_masuk ?></td>
				</tr>
			</table>

			<table border="0" style="float:left;width:49.99%;text-align:left">
				<tr>
					<td width="25%">Kadaluarsa</td>
					<td width="30%">:</td>
					<td><?= $barang_masuk->kadaluarsa ?></td>
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
				Nama : <?= $barang_masuk->nama_petugasa ?>
			</div>

			<div class="right">
				Penerimaan barang sitaan dari petugas sita
				<br><br><br><br><br><br/>
				Nama : <?= $barang_masuk->nama_petugasb ?>
			</div>

			<div style="clear:both !important"></div>
		</div>
	</div>
</body>
</html>