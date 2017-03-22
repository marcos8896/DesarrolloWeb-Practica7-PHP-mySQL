<?php
  include ("../conexion_db_miprueba.php");
$id = $_GET['id'];
$query = "DELETE FROM `categorias` WHERE `idCategoria`='".$id."'";
mysqli_query($conexion, $query);
header('Location: ../../eliminar.php');
?>
