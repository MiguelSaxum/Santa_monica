<?php 
/*	
	$mysqli = new mysqli("localhost","root","","bdrecicladora");
	$mysqli->set_charset("utf8"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
*/
$mysqli = new mysqli("localhost","marefu","hitler09","bdrecicladora"); 
	$mysqli->set_charset("utf8");//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}



?>
