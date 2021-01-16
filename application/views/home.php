<section class="container-fluid py-5">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="mb-0">Destacados</h2>
					<span class="line"></span>
				</div>
				<div class="col-12">

				</div>
			</div>
			<div class="row pt-3">
				<?php foreach($productos as $k => $v){?>
					<?php if ($v["destacado"] == 1){?>
						<?php if ($v["activa"] == 0){?>

						<?php }else{?>
							<div class="col-12 col-md-6 col-lg-4 col-xl-3 pt-2">
								<div class="productos h-100 d-flex flex-column">
									<img src="<?php echo base_url()?>public/assets/img/productos/<?php echo $v["imagen"]?>" alt="<?php echo $v["denominacion"]?>" class="img-fluid">
									<p class="mb-0"><?php echo $v["denominacion"]?></p>
									<p class="descripcion"><?php echo $v["marca"]?></p>
									<?php if ($v["precio_oferta"] == ""){?>
										<p class="descripcion"><span class="precio_oferta">$<?php echo $v ["precio"]?></span></p>
									<?php }else{?>
										<p class="descripcion">
											<span class="precio">$<?php echo $v ["precio"]?></span> | <span class="precio_oferta">$<?php echo $v ["precio_oferta"]?></span>
										</p>
									<?php }?>
									<a href="<?php echo base_url()?>index.php/productos/detalle/<?php echo $v["id"]?>" class="mt-auto d-block text-center">Ver Más</a>
								</div>
							</div>
						<?php }?>

					<?php }else{?>

					<?php }?>
				<?php }?>
			</div>
		</div>
	</div>
</section>
<section class="container-fluid py-5">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="mb-0">Productos</h2>
					<span class="line"></span>
				</div>
			</div>
			<div class="row pt-3">
				<?php foreach($productos as $k => $v){?>
					<?php if ($v["stock"] == 0){?>

					<?php }if ($v["activa"] == 0){?>

					<?php }else{?>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 pt-2">
							<div class="productos h-100 d-flex flex-column">
								<img src="<?php echo base_url()?>public/assets/img/productos/<?php echo $v["imagen"]?>" alt="<?php echo $v["denominacion"]?>" class="img-fluid">
								<p class="mb-0"><?php echo $v["denominacion"]?></p>
								<p class="descripcion"><?php echo $v["marca"]?></p>
								<?php if ($v["precio_oferta"] == ""){?>
									<p class="descripcion"><span class="precio_oferta">$<?php echo $v ["precio"]?></span></p>
								<?php }else{?>
									<p class="descripcion">
										<span class="precio">$<?php echo $v ["precio"]?></span> | <span class="precio_oferta">$<?php echo $v ["precio_oferta"]?></span>
									</p>
								<?php }?>
								<a href="<?php echo base_url()?>index.php/productos/detalle/<?php echo $v["id"]?>" class="mt-auto d-block text-center">Ver Más</a>
							</div>
						</div>
					<?php }?>
				<?php }?>
			</div>
		</div>
	</div>
</section>

