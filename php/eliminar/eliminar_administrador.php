<?php
  include ("../conexion_db_miprueba.php");
$id = $_GET['id'];
$query = "DELETE FROM `administrador` WHERE `id_administrador`='".$id."'";
mysqli_query($conexion, $query);
header('Location: ../../eliminar.php');
?>
