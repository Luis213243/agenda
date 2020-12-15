<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['catU'],
		$_POST['desU'],
		$_POST['fecU'],
		$_POST['idcat']
				);

	echo $obj->actualizar($datos);
	

 ?>