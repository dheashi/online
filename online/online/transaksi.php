<h2>Transaksi Saya</h2>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Nomer</th>
			<th>ID Transaksi</th>
			<th>Tanggal</th>
			<th>Jumlah Beli</th>
			<th>Detail</th>
		</tr>
		<?php 
			$no=0;
				$view = $dbconnect->query("SELECT * FROM barang" );
				while ($row = $view->fetch_array()) {
			$no++;
		?>
	</thead>
	<tbody>
		<tr>
			<td><?= $no;?></td>
			<td><?= $row['id_kategori'] ?></td>
		</tr>
	</tbody>
 <?php }?>
</table>