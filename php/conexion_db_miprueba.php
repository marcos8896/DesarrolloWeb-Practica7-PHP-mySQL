<?php

	date_default_timezone_set("America/Mexico_City");

	//Parametros de inicio de sesion en la base de datos:
	header("Content-Type: text/html;charset=utf-8");
	$servidor = "127.0.0.1";
	$usuario = 'admin';
	$contraseña = "qwerty1234";
	$base_de_datos = "db_miprueba";

	//Conexion a la base de datos.
	$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos);
	mysqli_set_charset($conexion, "utf8");


	//Verificacion de la conexion:
	if(!$conexion){
		//conexion fallida
		echo "Conexion a la base de datos fallida.";
	}



?>
