<?php

	include_once 'conexion.php';
	session_start(); // Iniciando sesion


	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];


$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";

$consulta = mysqli_query($conexion,$sql);
//$array = mysqli_fetch_array($consulta);


if ($consulta){
		$_SESSION['login_user_sys']=$usuario; // Iniciando la sesion
		header("location: Menu.html"); // Redireccionando a la pagina profile.php
	    alert("Bienvenido");
	
} else {
$error = "El usuario o la contraseña es inválida.";	
}



	//$conexion = new mysqli("localhost", "root", "", "gym");

	//$sql = "SELECT * FROM $usuario WHERE usuario = '$usuario'";
 


?>


