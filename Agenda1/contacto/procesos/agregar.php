<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['leo'],
		$_POST['nom'],
		$_POST['apP'],
		$_POST['apM'],
		$_POST['tel'],
		$_POST['ema'],
		$_POST['fec']);
	echo $obj->agregar($datos);
	

 ?>