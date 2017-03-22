<?php
	header("Content-Type: text/html;charset=utf-8");
	include ("conexion_db_miprueba.php");

  /*Variables que obtienen los datos del formulario*/
  $id_administrador 		= mb_strtoupper($_REQUEST['id_administrador'],'utf-8');
  $nombre 							= mb_strtoupper($_REQUEST['nombre'],'utf-8');
  $clave           		= $_REQUEST['clave'];
  $email 	        		= mb_strtoupper($_REQUEST['email'],'utf-8');

	$query =
  "INSERT INTO `administrador`
  (
    `id_administrador`,
    `email_administrador`,
    `clave_administrador`,
    `nombre_administrador`
  )
  VALUES
  (
    0,
    '$email',
    '$clave',
    '$nombre'
  ) ";
  /*Se ejecuta el query*/
	$resultado = mysqli_query($conexion, $query)

	//Si falla (or die), redirecciona a la pagina de fallo.
		or die ();
		header('Location: ../eliminar.php');
?>
