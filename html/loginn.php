<?php

	include_once 'conexion.php';
	
	session_start();

	//$conexion = new mysqli("localhost", "root", "", "gym");

		
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];

	$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";

	$resultado = mysqli_query($conexion, $sql);

	if(mysqli_num_rows($resultado) > 0){
	   return 1;
	   header("Location: Menu.html");
	}else{
	   return 0;
	   echo "<br><a href='index.html'></a>";
	}

	
	
	mysqli_close($conexion);
	

?>


