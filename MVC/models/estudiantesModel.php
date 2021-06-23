<?php
	
	class estudiantes_model {
		
		private $db;
		private $estudiantes;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->estudiantess = array();
		}
		
		public function get_estudiantes()
		{
			$sql = "SELECT * FROM estudiantes";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->estudiantes[] = $row;
			}
			return $this->estudiantes;
		}
		
		public function insertar($rut, $nombres, $apellidos, $sexo, $telefono, $correo, $direccion){
			
			$resultado = $this->db->query("INSERT INTO estudiantes (rut, nombres, apellidos, sexo, telefono, correo, direccion) VALUES ('$rut', '$nombres', '$apellidos', '$sexo', '$telefono', '$correo', '$direccion')");
			
		}
		
		public function modificar($rut, $nombres, $apellidos, $sexo, $telefono, $correo, $direccion){
			
			$resultado = $this->db->query("UPDATE estudiantes SET rut='$rut', nombres='$nombres', apellidos='$apellidos', sexo='$sexo', telefono='$telefono', correo='$correo', direccion='$direccion' WHERE id = '$id'");			
		}
		
		public function eliminar($rut){
			
			$resultado = $this->db->query("DELETE FROM estudiantes WHERE id = '$rut'");
			
		}
		
		public function get_vehiculo($rut)
		{
			$sql = "SELECT * FROM estudiantes WHERE id='$rut' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>