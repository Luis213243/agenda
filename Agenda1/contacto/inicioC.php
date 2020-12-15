<!DOCTYPE html>
<html>
<head>
	<title>Agenda</title>
	<?php require_once "../dependencias.php"; ?>
</head>
<body background="imagenes/imagen6.jpg">

	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #03105A;">
		<a class="navbar-brand" href="../index.php">
			<i class="fas fa-id-card-alt fa-4x"></i>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" style="font-family: Times New Roman" href="../index.php"><i class="fas fa-address-card fa-2x"></i> INICIO </a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" style="font-family: Times New Roman" href="../contacto/inicioC.php"><i class="fas fa-address-book fa-2x"></i> CONTACTOS</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" style="font-family: Times New Roman" href="../final/iniciocat.php"><i class="fas fa-clipboard-list fa-2x"></i> CATEGORIAS</a>
				</li>
			</ul>
		</div>
	</nav>
	<br>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php";  ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
					CONTACTO
					</div>
					<div class="card-body">
						<span class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
							Agregar nuevo <span class="fa fa-plus-circle"></span>
						</span>
						<hr>
						<div id="tablaDatatable"></div>
					</div>
					<div class="card-footer text-muted">
						por leo
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agregar nuevo Contacto</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevo">
						<label>nombre </label>
						<input type="text" class="form-control input-sm" id="nom" name="nom">
						<label>apellido paterno</label>
						<input type="text" class="form-control input-sm" id="apP" name="apP">
						<label>apellido materno</label>
						<input type="text" class="form-control input-sm" id="apM" name="apM">
						<label>telefono</label>
						<input type="text" class="form-control input-sm" id="tel" name="tel">
						<label>email</label>
						<input type="text" class="form-control input-sm" id="ema" name="ema">
						<label>fecha</label>
						<input type="text" class="form-control input-sm" id="fec" name="fec">
		<?php 
    require_once "clases/conexion.php";
   $obj = new conectar();
    $conexion =$obj->conexion();

    $sql="SELECT * from t_categorias";

    $result=mysqli_query($conexion,$sql);
 ?>

                       
   
    <p>categoria:
    	<br>
      <select name ="leo" id="leo">
        <option value="0">Seleccione:</option>
        <?php
          
          while ($valores = mysqli_fetch_array($result)) {
	
            echo '<option value="'.$valores[id_categorias].'">'.$valores[nombre_cateoria].'</option>';
   
          }
        ?>
      </select>
    </p>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" id="btnAgregarnuevo" class="btn btn-primary">Agregar nueva categoria</button>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar Contacto</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoU">
						<input type="text" hidden="" id="idcon" name="idcon">
						<label>nombre </label>
						<input type="text" class="form-control input-sm" id="nomU" name="nomU">
						<label>apellido paterno</label>
						<input type="text" class="form-control input-sm" id="apPU" name="apPU">
						<label>apellido materno</label>
						<input type="text" class="form-control input-sm" id="apMU" name="apMU">
						<label>telefono</label>
						<input type="text" class="form-control input-sm" id="telU" name="telU">
						<label>email</label>
						<input type="text" class="form-control input-sm" id="emaU" name="emaU">
						<label>fecha</label>
						<input type="text" class="form-control input-sm" id="fecU" name="fecU">
						<?php 
    require_once "clases/conexion.php";
   $obj = new conectar();
    $conexion =$obj->conexion();

    $sql="SELECT * from t_categorias";

    $result=mysqli_query($conexion,$sql);
 ?>

                       
   
    <p>CATEGORIAS:
      <select name ="leo2" id="leo2">
        <option value="0">Seleccione:</option>
        <?php
          
          while ($valores = mysqli_fetch_array($result)) {
	
            echo '<option value="'.$valores[id_categorias].'">'.$valores[nombre_cateoria].'</option>';
          }
        ?>
      </select>
    </p>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
				</div>
			</div>
		</div>
	</div>


</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$('#btnAgregarnuevo').click(function(){
			datos=$('#frmnuevo').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/agregar.php",
				success:function(r){
					if(r==1){
						$('#frmnuevo')[0].reset();
						$('#tablaDatatable').load('tabla.php');
						alertify.success("agregado con exito :D");
					}else{
						alertify.error("Fallo al agregar :(");
					}
				}
			});
		});

		$('#btnActualizar').click(function(){
			datos=$('#frmnuevoU').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/actualizar.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Actualizado con exito :D");
					}else{
						alertify.error("Fallo al actualizar :(");
					}
				}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('tabla.php');
	});
</script>

<script type="text/javascript">
	function agregaFrmActualizar(idcon){
		$.ajax({
			type:"POST",
			data:"idcon=" + idcon,
			url:"procesos/obtenDatos.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idcon').val(datos['id_contactos']);
				$('#nomU').val(datos['nombre']);
				$('#apPU').val(datos['paterno']);
				$('#apMU').val(datos['materno']);
				$('#telU').val(datos['telefono']);
				$('#emaU').val(datos['email']);
                $('#fecU').val(datos['fechaInsert']);
               	}
		});
	}

	function eliminarDatos(idcon){
		alertify.confirm('Eliminar un contacto ', 'Seguro de eliminar este contacto ', function(){ 

			$.ajax({
				type:"POST",
				data:"idcon=" + idcon,
				url:"procesos/eliminar.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Eliminado con exito !");
					}else{
						alertify.error("No se pudo eliminar...");
					}
				}
			});

		}
		, function(){

		});
	}
</script>