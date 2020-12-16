<?php 
	include '../../../models/conexion.php';
	include '../../../models/login.php';
	include '../../../models/consultas.php';
	include '../../../controllers/controller_procesos.php';
 
	date_default_timezone_set('America/El_Salvador');
	
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $email = $_POST['email'];
	$movil = $_POST['movil'];
	$direccion = $_POST['direccion'];
	
	
	$tabla1 = "clientes";
	$tabla2 = "usuarios";
	
	$campos1 = "id_personal, nombres, apellidos, direccion, telefono, email, id_cargo, id_carrera, id_usuario";
	$campos2 = "id_usuario,usuario, passw, tipo, estado";
	
	$valores1 = "'NULL','$nombres','$apellidos','$direccion','$movil','$email','$id_cargo','$id_carrera','$id_docente'";
	$valores2 = "'$id_docente','$usuario','$clave',2,1";
	
	$InsertDocente = SaveUsuarios($tabla1, $campos1, $valores1);
	$InsertUsuario = SaveUsuarios($tabla2, $campos2, $valores2);
 
	if ($InsertDocente AND $InsertUsuario) 
	{
		echo '<div class="alert alert-success">Datos Docente registrados....</div>';
	}
	else 
	{
		echo '<div class="alert alert-danger">Error al resgitrar Docente....</div>';
	}
 ?>
?>