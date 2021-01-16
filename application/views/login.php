<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
?>

<section class="container-fluid py-5">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 offset-md-3 shadow p-4">
					<form action="<?php echo base_url()?>index.php/login/save" method="POST" id="formulario" class="form-row">
						<div class="form-group col-12">
							<label for="email" class="font-weight-bold">Email</label>
							<input type="text" name="email" id="email" placeholder="Email" class="form-control">
						</div>
						<div class="form-group col-12">
							<label for="clave" class="font-weight-bold">Contraseña</label>
							<input type="password" name="password" id="password" placeholder="Contraseña" class="form-control">
						</div>
						<div class="form-group col-12 mb-0">
							<input type="submit" value="Ingresar" class="btn btn-form">
							<p class="error pt-2 mb-0"><?php echo $error?></p>
						</div>
					</form>
				</div>
			</div>
			<div class="row my-5">
				<div class="col-12 mb-4">
					<h2 class="font24">Usuarios registrados</h2>
				</div>
				<div class="col-4">
					<p><b>Email:</b> usuario_1@test.com</p>
					<p><b>Password:</b> usuario1</p>
				</div>
			</div>
		</div>
	</div>
</section>
