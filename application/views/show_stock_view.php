<html>
<head>
<title>Aplikasi</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="jumbotron">
		<h1 align="center">Toko Kelontong</h1>
		<p align="center">Pusat Grosir Barang Sembako</p>
	</div>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
	  <a class="navbar-brand" href="http://localhost/app/index.php/home">Toko Kelontong</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
		<ul class="navbar-nav">
		  <li class="nav-item active">
			<a class="nav-link" href="http://localhost/app/index.php/home">Home <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="http://localhost/app/index.php/produk">All Product</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="http://localhost/app/index.php/stock">Stock</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="http://localhost/app/index.php/login/logout">Logout</a>
		  </li>
		</ul>
	  </div>
	</nav>
	
	<h2>List Stock Product Toko Kelontong</h2>
	
	<div class="table-responsive">
	<table border="1" class="table">
		<tr>
			<th>Kode Stok</th>
			<th>Kode Produk</th>
			<th>Produk</th>
			<th>Jumlah Stock</th>
			<th>Edit</th>
		</tr>
		<?php
		foreach ($rows as $row){ ?>
		<tr>
			<td><?php echo $row->kode_stok; ?></td>
			<td><?php echo $row->kode_produk; ?></td>
			<td><?php echo $row->nama_produk," " , $row->merek_produk; ?></td>
			<td><?php echo $row->stok_produk; ?></td>
			<td align="center">
				<a href="stock/update/<?php echo $row->kode_stok; ?>">Edit</a>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
	</div>

	<form action="http://localhost/app/index.php/stock/create" method="post">
	<input type="submit" name="btnInsert" value="Add New" class="btn btn-primary"/>

	</form>
	
	<hr />
	<p align="center">Copyright & copy, Februari 2021. Vera Wijayanti Pujadi.</p>
</div>
</body>
</html>
