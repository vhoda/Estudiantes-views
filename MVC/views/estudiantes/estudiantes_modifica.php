<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=estudiantes&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="rut" name="rut" value="<?php echo $data["rut"]; ?>" />
				
				<div class="form-group">
					<label for="nombres">Nombres</label>
					<input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $data["estudiantes"]["nombres"]?>" />
				</div>
				
				<div class="form-group">
					<label for="apellidos">Apellidos</label>
					<input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $data["estudiantes"]["apellidos"]?>" />
				</div>
				
				<div class="form-group">
					<label for="sexo">Sexo</label>
					<input type="text" class="form-control" id="sexo" name="sexo" value="<?php echo $data["estudiantes"]["sexo"]?>" />
				</div>
				
				<div class="form-group">
					<label for="telefono">Teléfono</label>
					<input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $data["estudiantes"]["telefono"]?>" />
				</div>
				
				<div class="form-group">
					<label for="correo">Correo</label>
					<input type="text" class="form-control" id="correo" name="correo" value="<?php echo $data["estudiantes"]["correo"]?>" />
				</div>
				
				<div class="form-group">
					<label for="direccion">Direccion</label>
					<input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $data["estudiantes"]["direccion"]?>" />
				</div>
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</body>
	</html>		