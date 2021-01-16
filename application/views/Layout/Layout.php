<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $titulo?> | Kurc | Final</title>
	<link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>public/assets/css/style.css">
</head>
<body>
<header class="container-fluid bg-light">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item"><a class="nav-link text-dark" href="<?php echo base_url();?>index.php/home">Home</a></li>
								<li class="nav-item"><a class="nav-link text-dark" href="<?php echo base_url();?>index.php/contacto">Contacto</a></li>
								<li class="nav-item"><a class="nav-link text-dark" href="<?php echo base_url();?>index.php/productoscarga">| Cargar Prodcutos</a></li>
							</ul>
							<ul class="navbar-nav my-2 my-lg-0">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-2x fa-user-circle text-dark"></i>
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<!--<a class="dropdown-item" href="<?php echo base_url();?>index.php/login">Login</a>-->
										<a class="dropdown-item" href="<?php echo base_url();?>index.php/registro">Registro</a>
									</div>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
<section class="container-fluid bg-banner py-5">
	<div class="row">
		<div class="col-12 text-center">
			<h1 class="text-white"><?php echo $titulo?></h1>
		</div>
	</div>
</section>

<?php echo $contenido?>

<footer class="container-fluid bg-gris">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center py-3">
					<p class="mb-0 small">UTN | Programacion Web Avanzado - 2020 - Alan Kurc</p>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="<?php echo base_url();?>public/assets/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo base_url();?>public/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>public/assets/js/script.js"></script>
</body>
</html>
