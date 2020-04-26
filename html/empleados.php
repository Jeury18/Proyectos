<?php
include_once 'conexion.php';

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$sexo = $_POST["sexo"];
$email = $_POST["email"];
$estado = $_POST["estado"];


$insertar = "INSERT INTO empleados(id, nombre, apellido, sexo, email, estado) VALUES ('$id', '$nombre', '$apellido', '$sexo', '$email', '$estado')";

$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
echo("error al registrarse");
}else{
    echo("Registrado correctamente");
}

mysqli_close($conexion);

?>
