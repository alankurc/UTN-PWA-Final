<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
?>

<section class="container-fluid py-5">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 shadow p-4">
					<form action="<?php echo base_url()?>index.php/ProductosCarga/save" method="POST" id="formulario" class="form-row">
						<div class="form-group col-12">
							<label for="denominacion" class="font-weight-bold">Nombre del producto</label>
							<input type="text" id="denominacion" name="denominacion" class="form-control" placeholder="Nombre del producto" required>
						</div>
						<div class="form-group col-12">
							<label for="descripcion" class="font-weight-bold">Descripción</label>
							<textarea id="descripcion" name="descripcion" class="form-control" placeholder="Descripción" required></textarea>
						</div>
						<div class="form-group col-12 col-md-6">
							<label for="precio" class="font-weight-bold">Precio</label>
							<input type="number" id="precio" name="precio" class="form-control" placeholder="Precio" required>
						</div>
						<div class="form-group col-12 col-md-6">
							<label for="precio_oferta" class="font-weight-bold">Precio Oferta</label>
							<input type="number" id="precio_oferta" name="precio_oferta" class="form-control" placeholder="Precio Oferta">
						</div>
						<div class="form-group col-12 col-md-6">
							<label for="fecha_finalizacion_oferta" class="font-weight-bold">Fecha fin de la Oferta</label>
							<input type="date" id="fecha_finalizacion_oferta" name="fecha_finalizacion_oferta" class="form-control" placeholder="Fin Oferta">
						</div>
						<div class="form-group col-12 col-md-4">
							<label for="stock" class="font-weight-bold">Marca</label>
							<input type="tel" id="marca" name="marca" class="form-control" placeholder="Marca" required>
						</div>
						<div class="form-group col-12 col-md-2">
							<label for="stock" class="font-weight-bold">Stock</label>
							<input type="number" id="stock" name="stock" class="form-control" placeholder="Stock" required>
						</div>
						<div class="form-group col-12 col-md-4">
							<label for="id_categoria" class="font-weight-bold">Categoria</label>
							<select name="id_categoria" id="id_categoria" class="form-control" required>
								<option disabled selected>Marca</option>
								<option value="2">PROCESADORES</option>
								<option value="3">MOTHERBOARDS</option>
								<option value="1">MEMORIAS RAM</option>
								<option value="4">DISCOS HDD</option>
								<option value="5">DISCOS SSD</option>
								<option value="7">GABINETES</option>
								<option value="10">PLACAS DE VIDEO</option>
								<option value="6">FUENTES</option>
								<option value="9">REFRIGERACIÓN</option>
								<option value="8">PERIFERICOS</option>
							</select>
						</div>
						<div class="form-group col-12 col-md-4">
							<label for="destacado" class="font-weight-bold">Prioridad</label>
							<select name="destacado" id="destacado" class="form-control" required>
								<option disabled selected>Prioridad</option>
								<option value="1">Destacado</option>
								<option value="0">Comun</option>
							</select>
						</div>
						<div class="form-group col-12 col-md-4">
							<label for="activa" class="font-weight-bold">Publicar</label>
							<select name="activa" id="activa" class="form-control" required>
								<option disabled selected>Publicar</option>
								<option value="1">Si</option>
								<option value="0">No</option>
							</select>
						</div>
						<div class="form-group col-12">
							<label for="imagen" class="font-weight-bold">Imagen de producto</label>
							<input type="file" id="imagen" name="imagen" class="form-control-file" placeholder="Stock" required>
						</div>
						<div class="form-group col-12 pt-4">
							<input type="submit" value="Cargar" class="btn btn-form">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
