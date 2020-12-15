<?php 

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into  t_contactos (id_categorias,nombre,paterno,materno,telefono,email,fechaInsert)
									values ('$datos[0]',
									        '$datos[1]',
											'$datos[2]',
											'$datos[3]',
											'$datos[4]',
											'$datos[5]',
											'$datos[6]')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($idcon){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT 
			             id_categorias,
			             nombre,
			             paterno,
			             materno,
			             telefono,
			             email,
			             fechaInsert
					from t_contactos 
					where id_contactos='$idcon'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_categorias' => $ver[0],
				'nombre' => $ver[1],
				'paterno' => $ver[2],
				'materno' => $ver[3],
				'telefono' => $ver[4],
				'email' => $ver[5],
				'fechaInsert' => $ver[6]);
			return $datos;
		}


		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE t_contactos set id_categorias='$datos[1]',
										 nombre='$datos[2]',
									     paterno='$datos[3]',
										 materno='$datos[4]',
										 telefono='$datos[5]',
										 email='$datos[6]',
										 fechaInsert='$datos[7]'
						where id_contactos='$datos[0]'";
			return mysqli_query($conexion,$sql);
		}

		public function eliminar($idcon){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from t_contactos where id_contactos='$idcon'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>