<?php
$contrasena = "";
$usuario = "root";
$nombre_bd = "escuela";
//Se obtienen los datos del usuario para la conexion.
try {
	//Se da la estrcutura de la sintaxis para mandar a llamar al usuario y poder 
	//realizar a la conexion
	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>