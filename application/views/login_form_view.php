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
	</div>
	
	<h2 align="center">Login</h2>

	<form align="center" action="http://localhost/app/index.php/login" method="post">
	<?php echo $model->labels['username']; ?><br />
	<input type="text" name="username"/> <br /><br />
	<?php echo $model->labels['password']; ?><br />
	<input type="password" name="password"/><br /><br />
	<input type="submit" name="btnSubmit" value="Login" class="btn btn-primary"/>
	<input type="submit" name="btnRegister" value="Register" class="btn btn-success"/>
	</form>
	<?php echo $model->password;?>

	<hr />
	<p align="center">Copyright & copy, Februari 2021. Vera Wijayanti Pujadi.</p>
</div>
</body>
</html>