<?php
header("Content-Type: text/html;charset=utf-8");
include ("../conexion_db_miprueba.php");

mysqli_select_db($conexion, $base_de_datos)
		or die("Ha fallado la conexion con la base de datos");


/*Variables que obtienen los datos del formulario*/
$id_administrador 		= mb_strtoupper($_REQUEST['id_administrador'],'utf-8');
$nombre 							= mb_strtoupper($_REQUEST['nombre'],'utf-8');
$clave           		= $_REQUEST['clave'];
$email 	        		= mb_strtoupper($_REQUEST['email'],'utf-8');

/*Sentencia SQL*/
	$query =
	"UPDATE administrador SET
		nombre_administrador = '$nombre',
		email_administrador = '$email',
		clave_administrador = '$clave'
    WHERE id_administrador = '$id_administrador'";
	//Se ejecuta el query:
	$resultado = mysqli_query($conexion, $query)

	//Si falla (or die), redirecciona a la pagina de fallo.
	or die ();
  //
	// //Si no falla, redirecciona a la pagina de registro correcto.
	header('Location: ../../eliminar.php');


?>
