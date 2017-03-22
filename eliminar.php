<html lang="es" >
	<?php
		include ("php/conexion_db_miprueba.php");
	?>
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Querys</title>
	</head>

	<body>
		<br/>
		<label class="label_frm">TABLA DE ADMINISTRADORES</label>
    <table class="table">
    <?php
    	header("Content-Type: text/html;charset=utf-8");

    	/*Seleciona la base de datos a utilizar*/
    	mysqli_select_db($conexion, $base_de_datos)
    		or die("Ha fallado la conexion con la base de datos");

    	$query = "SELECT id_administrador, email_administrador, clave_administrador, nombre_administrador FROM administrador ORDER BY id_administrador ASC";
    	$result = mysqli_query($conexion, $query);

      /*Almacena los datos en variables*/
    	// while($row = mysqli_fetch_array($result))
			// {
    	//     $id_administrador        = $row['id_administrador'];
    	//     $nombre                   = $row['email_administrador'];
    	//     $clave                   = $row['clave_administrador'];
     	//     $email                  = $row['nombre_administrador'];
    	// }

			//se despliega el resultado
			echo "<tr>";
			echo "<th>ID:</th>";
			echo "<th>Nombre:</th>";
			echo "<th>Clave</th>";
			echo "<th>Email</th>";
			echo "</tr>";

			while($row = mysqli_fetch_array($result))
			{
    	    $id_administrador        = $row['id_administrador'];
    	    $nombre                  = $row['nombre_administrador'];
    	    $clave                   = $row['clave_administrador'];
    	    $email                   = $row['email_administrador'];
			    echo "<tr>";
			    echo "<td>$id_administrador</td>";
			    echo "<td>$nombre</td>";
					echo "<td>$clave</td>";
					echo "<td>$email</td>";
					echo "<td><a href=\"php/eliminar/eliminar_administrador.php?id=".$row['id_administrador']."\">Eliminar</a></td>";
					echo "<td><a href=\"php/modificar/modificar_administrador.php?id=".$row['id_administrador']."\">Modificar</a></td>";
					echo "</tr>";
			}


    ?>

		</table>
		<center>
			<a class="btn btn-primary" href="alta_administrador.php">Agregar nuevo administrador</a>
		</center>
		</br>

		<label class="label_frm">TABLA DE CATEGORIAS</label>
		<table class="table">
    <?php
    	header("Content-Type: text/html;charset=utf-8");

    	/*Seleciona la base de datos a utilizar*/
    	mysqli_select_db($conexion, $base_de_datos)
    		or die("Ha fallado la conexion con la base de datos");

    	$query = "SELECT * FROM categorias ORDER BY idCategoria ASC";
    	$result = mysqli_query($conexion, $query);

      /*Almacena los datos en variables*/
    	// while($row = mysqli_fetch_array($result))
			// {
    	//     $id_administrador        = $row['id_administrador'];
    	//     $nombre                   = $row['email_administrador'];
    	//     $clave                   = $row['clave_administrador'];
    	//     $email                  = $row['nombre_administrador'];
    	// }

			//se despliega el resultado
			echo "<tr>";
			echo "<th>ID-CATEGORIA:</th>";
			echo "<th>NOMBRE:</th>";
			echo "</tr>";
			while($row = mysqli_fetch_array($result))
			{
    	    $id_categoria      		   = $row['idCategoria'];
    	    $nombre                  = $row['nombre'];
			    echo "<tr>";
			    echo "<td>$id_categoria</td>";
			    echo "<td>$nombre</td>";
					echo "<td><a href=\"php/eliminar/eliminar_categoria.php?id=".$row['idCategoria']."\">Eliminar</a></td>";
					echo "<td><a href=\"php/modificar/modificar_categoria.php?id=".$row['idCategoria']."\">Modificar</a></td>";
					echo "</tr>";
			}


    ?>
	</table>

		<center>
			<a class="btn btn-primary" href="alta_categorias.php">Agregar nueva categoria</a>
		</center>

	</body>
</html>
