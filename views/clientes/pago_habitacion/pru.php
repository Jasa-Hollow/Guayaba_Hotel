<?php 
	$id_cliente = $_POST['id_cliente'];
	$id_fecha = $_POST['id_fecha'];
	$id_habitacion = $_POST['id_habitacion'];
	$fechaEntrada = $_POST['fechaEntrada'];
	$fechaSalida = $_POST['fechaSalida'];
	$id_pago = $_POST['id_pago'];
	$Ncuenta = password_hash($_POST['Ncuenta'],PASSWORD_DEFAULT);


	echo $id_cliente.'<br>';
	echo $id_fecha.'<br>';
	echo $id_habitacion.'<br>';
	echo $fechaEntrada.'<br>';
	echo $fechaSalida.'<br>';
	echo $id_pago.'<br>';
	echo $Ncuenta.'<br>';
?>