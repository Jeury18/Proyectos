<?php
include_once 'conexion.php';

$usuario = $_POST["usuario"];
$email = $_POST["email"];
$clave = $_POST["clave"];


$insertar = "INSERT INTO usuarios(usuario, email, clave) VALUES ('$usuario', '$email', '$clave')";

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

mysqli_close($conexion);

?>


