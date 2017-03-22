<?php
  header("Content-Type: text/html;charset=utf-8");
  include ("../conexion_db_miprueba.php");

  mysqli_select_db($conexion, $base_de_datos)
		or die("Ha fallado la conexion con la base de datos");

  $id = $_GET['id'];
  $query = "SELECT idCategoria, nombre
  FROM categorias WHERE idCategoria = '$id'";
  $result = mysqli_query($conexion, $query);
  while($row = mysqli_fetch_array($result))
  {
      $id_categoria            = $row['idCategoria'];
      $nombre                  = $row['nombre'];
  }
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>
  </head>
  <body>
    <div id="div_contenedor_principal" class="container">

      <div id="div_cuerpo" class="form-group">
        <form method="post" action="modificacion_categoria.php" name="frm_ejemplo" enctype="multipart/form-data" class="form-horizontal">

          <!-- DATOS PRINCIPALES -->
          <br/>
          <h1 class="label_frm">MODIFICAR</h1>
          <br /><hr />
          <label class="control-label" >ID de Categoria: </label>
          <input id="id_categoria" class="form-control"  type="text"  maxlength="30" style="width: 400px;" name="id_categoria" required readonly value="<?php echo $id_categoria?>"><br />
          <label class="control-label" >Nombre de la categoria: </label>
          <input id="nombre" class="form-control"  type="text"  maxlength="40" name="nombre" required style="width: 400px;" value="<?php echo $nombre?>"><br />
          <br />
          <input class="btn_frm_aceptar" type="submit" name="btn_login" value="Enviar">
        </form>
      </div> <!--div_frm_registrar-->
    </div> <!-- div_cuerpo-->
  </div> <!-- div_contenedorPrincipal -->
  </body>
</html>
