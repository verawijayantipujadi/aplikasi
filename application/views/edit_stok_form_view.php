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
	
	<h2>Edit Stok Produk</h2>

	<form action="http://localhost/app/index.php/stock/update/<?php echo $model->kode_stok; ?>" method="post">
	<?php echo $model->labels['kode_stok']; ?><br />
	<input type="text" name="kode_stok"
	readonly value="<?php echo $model->kode_stok;?>" /> <br /><br />
	<?php echo $model->labels['kode_produk']; ?><br />
	<select name="kode_produk" size="1">
	<option value="<?php echo $model->kode_produk ?>"><?php echo $model->kode_produk ?></option>
	</select><br /><br />
	<?php echo $model->labels['stok']; ?><br />
	<input type="text" name="stok" value="<?php echo $model->stok;?>"/> <br /><br />
	<input type="submit" name="btnSubmit" value="Submit" class="btn btn-primary"/>
	<input type="button" value="Cancel" onclick="javascript:history.go(-1);" class="btn btn-warning"/>
	<input type="submit" name="btnShow" value="See All Product" class="btn btn-success"/>
	</form>

	<hr />
	<p align="center">Copyright & copy, Februari 2021. Vera Wijayanti Pujadi.</p>
</div>
</body>
</html>