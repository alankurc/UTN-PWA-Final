<section class="container-fluid py-5">
	<div class="row">
		<div class="container">
			<div class="row">
				<?php foreach($productos as $k => $v){?>
						<div class="col-12 col-md-4">
							<img src="<?php echo base_url()?>public/assets/img/productos/<?php echo $v["imagen"]?>" alt="<?php echo $v["denominacion"]?>" class="img-fluid">
						</div>
						<div class="col-12 col-md-8 pt-3 pt-md-0">
							<h1><?php echo $v["denominacion"]?></h1>
							<p><strong>Marca:</strong> <?php echo $v ["marca"]?></p>
							<?php if ($v["precio_oferta"] == ""){?>
								<p><strong>Precio: </strong> $<?php echo $v ["precio"]?></p>
							<?php }else{?>
								<p><strong>Precio: </strong> <span class="precio">$<?php echo $v ["precio"]?></span> | <span class="precio_oferta">$<?php echo $v ["precio_oferta"]?></span></p>
							<?php }?>
							<a class="btn btn-form" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								Consultar Stock
							</a>
							<div class="collapse" id="collapseExample">
								<div class="card card-body">
									<form name="contacto_form"  action="<?php echo base_url()?>index.php/Contacto/stock" method="POST">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
										</div>
										<div class="form-group">
											<select name="producto" id="producto" class="form-control">
												<option value="<?php echo $v["denominacion"]?>"><?php echo $v["denominacion"]?></option>
											</select>
										</div>
										<div class="form-group">
											<textarea type="text" rows="5" class="form-control" id="consulta" name="consulta" placeholder="Consulta" required></textarea>
										</div>
										<div class="form-group">
											<button type="submit" class="btn-form" value="Contactarse">Enviar</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					<div class="col-12 pt-5">
						<h2 class="mb-0">Descripcion</h2>
						<span class="line"></span>
						<p class="descripcion pt-4"><?php echo $v["descripcion"]?></p>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
</section>
