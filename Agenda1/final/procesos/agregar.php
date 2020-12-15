<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['cat'],
		$_POST['des'],
		$_POST['fec']
				);

	echo $obj->agregar($datos);
	

 ?>