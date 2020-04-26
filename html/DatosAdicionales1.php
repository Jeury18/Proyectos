<?php
include_once 'conexion.php';

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$comentario = $_POST["comentario"];
$monto = $_POST["monto"];


$insertar = "INSERT INTO datos_adicionales(id, nombre, email, telefono, comentario, monto) VALUES ('$id', '$nombre', '$email', '$telefono', '$comentario', '$monto')";

$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
    
    echo '<script> 
    alert("Error al guardar")
    window.history.go(-1);
    </script> 
';
exit;
}else{
   
    echo '<script> 
    alert("Registrado correctamente")
    window.history.go(-1);
    </script> 
';
exit;
}


?>
