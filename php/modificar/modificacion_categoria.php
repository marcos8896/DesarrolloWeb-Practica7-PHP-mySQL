<?php
header("Content-Type: text/html;charset=utf-8");
include ("../conexion_db_miprueba.php");

mysqli_select_db($conexion, $base_de_datos)
		or die("Ha fallado la conexion con la base de datos");


/*Variables que obtienen los datos del formulario*/
$id_categoria 		= mb_strtoupper($_REQUEST['id_categoria'],'utf-8');
$nombre 							= mb_strtoupper($_REQUEST['nombre'],'utf-8');

/*Sentencia SQL*/
	$query =
	"UPDATE categorias SET
		nombre = '$nombre'
    WHERE idCategoria = '$id_categoria'";
	//Se ejecuta el query:
	$resultado = mysqli_query($conexion, $query)

	//Si falla (or die), redirecciona a la pagina de fallo.
	or die ();
  //
	// //Si no falla, redirecciona a la pagina de registro correcto.
	header('Location: ../../eliminar.php');


?>
