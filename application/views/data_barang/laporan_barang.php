<!DOCTYPE html>
<html><head>
	<meta charset="utf-8">
	<title>Laporan PDF</title>
	<style>
		h1 {
			text-align: center;
			font-family: Arial, Helvetica, sans-serif;
			font-weight: bold;
		}

		#laporan {
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
			font-size: 13px;
		}

		#laporan td,
		#laporan th {
			border: 1px solid #ddd;
			padding: 5px;
		}

		#laporan tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#laporan th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head><body>
<hr>
<h3 align="center">Daftar Barang</h3>
<br>
<br>
	<table id="laporan">
		<tr>
			<th align="center">No</th>
			<th align="center">No Seri</th>
			<th align="center">Nama Barang</th>
			<th align="center">Jenis Barang</th>
			<th align="center">Jumlah Barang</th>
			<th align="center">Tahun Pengadaan</th>
			<th align="center">Distributor</th>
			<th align="center">Penempatan Barang</th>
			<th align="center">Harga Barang</th>
		</tr>

		<?php  
		$no=1;
		foreach ($barang as $b) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b->no_seri ?></td>
			<td><?php echo $b->nama_barang ?></td>
			<td><?php echo $b->jenis_barang ?></td>
			<td><?php echo $b->jumlah_barang ?></td>
			<td><?php echo $b->thn_pengadaan ?></td>
			<td><?php echo $b->distributor ?></td>
			<td><?php echo $b->penempatan_barang ?></td>
			<td><?php echo $b->hrg_barang ?></td>
		</tr>
	<?php endforeach ?>
	</table>

</body></html>