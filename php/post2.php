<?php
	header("Content-Type: text/html;charset=utf-8");
	include ("conexion_db_miprueba.php");

  /*Variables que obtienen los datos del formulario*/
  $id_categoria 		= mb_strtoupper($_REQUEST['id_categoria'],'utf-8');
  $nombre 							= mb_strtoupper($_REQUEST['nombre'],'utf-8');

	$query =
  "INSERT INTO `categorias`
  (
    `idCategoria`,
    `nombre`
  )
  VALUES
  (
    0,
    '$nombre'
  ) ";
  /*Se ejecuta el query*/
	$resultado = mysqli_query($conexion, $query)

	//Si falla (or die), redirecciona a la pagina de fallo.
		or die ();

		header('Location: ../eliminar.php');

?>
