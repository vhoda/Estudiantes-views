<!DOCTYPE html>
<html lang="es">
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
			
			<a href="index.php?c=estudiantes&a=nuevo" class="btn btn-primary">Agregar</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
						<th>Rut</th>
        				<th>Nombres</th>
       					<th>Apellidos</th>
       					<th>Sexo</th>
        				<th>Telefono</th>
        				<th>Correo</th>
       					<th>Direccion</th>
						<th>Editar</th>
						<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["estudiantes"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["rut"]."</td>";
							echo "<td>".$dato["nombres"]."</td>";
							echo "<td>".$dato["apellidos"]."</td>";
							echo "<td>".$dato["sexo"]."</td>";
							echo "<td>".$dato["telefono"]."</td>";
							echo "<td>".$dato["correo"]."</td>";
							echo "<td>".$dato["direccion"]."</td>";
							echo "<td><a href='index.php?c=estudiantes&a=modificar&rut=".$dato["rut"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=estudiantes&a=eliminar&rut=".$dato["rut"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>