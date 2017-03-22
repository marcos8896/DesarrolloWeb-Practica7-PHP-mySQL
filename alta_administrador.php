<html lang="es" >
	<?php
		include ("php/conexion_db_miprueba.php");
	?>
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- <title>EJEMPLO FORMULARIO</title>
		<script src="../../js/jquery-3.1.1.js"></script>
		<script src="../../js/js_core.js"></script>
		<script src="../../js/validar_clave.js"></script>
		<link rel="stylesheet" href="../../css/estilo_principal.css">
		<link rel="icon" type="image/png" href="../../img/logo_cmam_100x100.png" /> -->
		<!-- <link rel="stylesheet" href="css/estilo_principal.css"> -->
	</head>

	<body>

    <div id="div_contenedor_principal" class="container">

      <div id="div_cuerpo" class="form-group">
				<form method="post" action="php/post.php" name="frm_ejemplo" enctype="multipart/form-data" class="form-horizontal">

	        <!-- DATOS PRINCIPALES -->
					<br/>
	        <label class="label_frm">ALTAS DE ADMINISTRADORES</label>
	        <br /><hr />
	        <label class="control-label" >ID de administrador: </label>
					<?php
						//Consultar total de alumnos registrados en tbl_alumno:
						$query = "SELECT * FROM administrador ORDER BY id_administrador DESC LIMIT 1;";
						$result = mysqli_query($conexion, $query);
						$administrador = mysqli_fetch_object($result);
						if(isset($administrador)){
							$new_ID = $administrador->id_administrador + 1;
						}
						else{
							$new_ID = 1;
							$query = "TRUNCATE TABLE administrador";
							$result = mysqli_query($conexion, $query);

						}
					?>
	        <input id="id_administrador" class="form-control"  type="text"  maxlength="30" style="width: 400px;" name="id_administrador" required readonly value="<?php echo $new_ID?>"><br />
					<label class="control-label" >Nombre(s): </label>
	        <input id="nombre" class="form-control"  type="text"  maxlength="40" name="nombre" required style="width: 400px;" autocomplete="off"><br />
					<label class="control-label" >Clave: </label>
					<input id="clave" class="form-control"  type="password"  maxlength="30" name="clave" required style="width: 400px;" autocomplete="off"><br />
					<label class="control-label" >Email: </label>
	        <input id="email" class="form-control"  type="email"  maxlength="50" name="email" style="width: 400px;">
	        <br /><br />
	        <input class="btn_frm_aceptar" type="submit" name="btn_login" value="Enviar">
	      </form>
			</div> <!--div_frm_registrar-->
		</div> <!-- div_cuerpo-->
	</div> <!-- div_contenedorPrincipal -->

	</body>
</html>
