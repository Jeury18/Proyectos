<?php
include_once 'conexion.php';

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$fecha_nac = $_POST["fecha_nac"];




$insertar = "INSERT INTO cumpleanos(id, nombre, apellido, fecha_nac)
 VALUES ('$id','$nombre','$apellido','$fecha_nac')";

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
