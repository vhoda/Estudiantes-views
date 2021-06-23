<?php
	
	class estudiantesController {
		
		public function __construct(){
			require_once "models/estudiantesModel.php";
		}
		
		public function index(){
			
			
			$estudiantes = new estudiantes_model();
			$data["titulo"] = "estudiantes";
			$data["estudiantes"] = $estudiantes->get_estudiantes();
			
			require_once "views/estudiantes/estudiantes.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "estudiantes";
			require_once "views/estudiantes/estudiantes_nuevo.php";
		}
		
		public function guarda(){
			
			$rut = $_POST['rut'];
			$nombres = $_POST['nombres'];
			$apellidos = $_POST['apellidos'];
			$sexo = $_POST['sexo'];
			$telefono = $_POST['telefono'];
			$correo = $_POST['correo'];
			$direccion = $_POST['direccion'];
			
			$estudiantes = new estudiantes_model();
			$estudiantes->insertar($rut, $nombres, $apellidos, $sexo, $telefono, $correo, $direccion);
			$data["titulo"] = "estudiantes";
			$this->index();
		}
		
		public function modificar($rut){
			
			$estudiantes = new estudiantes_model();
			
			$data["rut"] = $rut;
			$data["estudiantes"] = $estudiantes->get_estudiantes($rut);
			$data["titulo"] = "estudiantes";
			require_once "views/estudiantes/estudiantes_modifica.php";
		}
		
		public function actualizar(){

			$rut = $_POST['rut'];
			$nombres = $_POST['nombres'];
			$apellidos = $_POST['apellidos'];
			$sexo = $_POST['sexo'];
			$telefono = $_POST['telefono'];
			$correo = $_POST['correo'];
			$direccion = $_POST['direccion'];

			$estudiantes = new estudiantes_model();
			$estudiantes->modificar($rut, $nombres, $apellidos, $sexo, $telefono, $correo, $direccion);
			$data["titulo"] = "estudiantes";
			$this->index();
		}
		
		public function eliminar($rut){
			
			$estudiantes = new estudiantes_model();
			$estudiantes->eliminar($rut);
			$data["titulo"] = "estudiantes";
			$this->index();
		}	
	}
?>