<section class="container-fluid py-5">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2">
					<form name="contacto_form"  action="<?php echo base_url()?>index.php/Contacto/save" method="POST">
						<div class="form-group">
							<label for="nombre_id">Nombre</label>
							<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
							<div id="error_nombre"></div>
						</div>
						<div class="form-group">
							<label for="apellido_id">Apellido</label>
							<input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" required>
						</div>
						<div class="form-group">
							<label for="email_id">Email</label>
							<input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<label for="consulta_id">Consulta</label>
							<textarea rows="5" class="form-control" name="consulta" id="consulta" placeholder="Consulta"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn-form" value="Contactarse">Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
