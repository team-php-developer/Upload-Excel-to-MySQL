<?php
$host_name = 'localhost';
$database = 'robotic';
$user_name = 'root';
$password = 'ingmorales';

$conexion = mysqli_connect( $host_name, $user_name, $password, $database );
//$conexion = new mysqli($host_name, $user_name, $password, $database);
if ( mysqli_errno( $conexion ) ) {
	//die('<p>No se Conecto a la Base de Datos: '.mysqli_error().'</p>');
} else {
	//echo '<p>Conectado al Servidor Correctamente.</p >';
}

$acentos = $conexion->query( "SET NAMES 'utf8'" )
?>