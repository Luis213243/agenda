<?php 

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into t_categorias (nombre_cateoria,descripcion,fechaInsert)
									values ('$datos[0]',
									        '$datos[2]',
											'$datos[1]'
											)";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($idcat){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT
			                nombre_cateoria,
			                id_categorias,
							descripcion,
							fechaInsert
					from t_categorias 
					where id_categorias='$idcat'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_categorias' => $ver[0],
				'nombre_cateoria' => $ver[1],
				'descripcion' => $ver[2],
				'fechaInsert' => $ver[3]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE t_categorias set nombre_cateoria='$datos[0]',
										descripcion='$datos[1]',
										fechaInsert='$datos[2]'
						where id_categorias='$datos[3]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminar($idcat){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from t_categorias where id_categorias='$idcat'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>