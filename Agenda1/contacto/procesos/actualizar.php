<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['idcon'],
		$_POST['leo2'],
		$_POST['nomU'],
		$_POST['apPU'],
		$_POST['apMU'],
		$_POST['telU'],
		$_POST['emaU'],
		$_POST['fecU']);

	echo $obj->actualizar($datos);
	

 ?>