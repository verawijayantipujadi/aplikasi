<div class="table-responsive">
<table border="1" class="table">
	<tr>
		<th>Kode Produk</th>
		<th>Nama Produk</th>
		<th>Merek Produk</th>
		<th>Kategori</th>
		<th>Harga</th>
		<th>Edit</th>
		<th>Hapus</th>
	</tr>
	<?php
	foreach ($rows as $row){ ?>
	<tr>
		<td><?php echo $row->kode_produk; ?></td>
		<td><?php echo $row->nama_produk; ?></td>
		<td><?php echo $row->merek_produk; ?></td>
		<td><?php echo $row->kategori; ?></td>
		<td><?php echo $row->harga; ?></td>
		<td align="center">
			<a href="produk/update/<?php echo $row->kode_produk; ?>">Edit</a>
		</td>
		<td align="center">
			<a href="produk/deletes/<?php echo $row->kode_produk; ?>">Hapus</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>
</div>

<form action="http://localhost/app/index.php/produk/create" method="post">
<input type="submit" name="btnInsert" value="Add New" class="btn btn-primary"/>

</form>