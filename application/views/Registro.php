<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
?>

<section class="container-fluid py-5">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 offset-md-3 shadow p-4">
					<form action="<?php echo base_url()?>index.php/registro/save" method="POST" id="formulario" class="form-row">
						<div class="form-group col-12">
							<label for="nombre" class="font-weight-bold">Nombre</label>
							<input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control">
							<p class="error"><?php echo form_error('nombre')?></p>
						</div>
						<div class="form-group col-12">
							<label for="apellido" class="font-weight-bold">Apellido</label>
							<input type="text" name="apellido" id="apellido" placeholder="Apellido" class="form-control">
							<p class="error"><?php echo form_error('apellido')?></p>
						</div>
						<div class="form-group col-12">
							<label for="email" class="font-weight-bold">Email</label>
							<input type="text" name="email" id="email" placeholder="Email" class="form-control">
							<p class="error"><?php echo form_error('email')?></p>
						</div>
						<div class="form-group col-12">
							<label for="clave" class="font-weight-bold">Contraseña</label>
							<input type="password" name="clave" id="clave" placeholder="Contraseña" class="form-control">
							<p class="error"><?php echo form_error('password')?></p>
						</div>
						<div class="form-group col-12">
							<input type="submit" value="Registrarse" class="btn btn-form">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
