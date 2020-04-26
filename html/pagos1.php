<?php
include_once 'conexion.php';

$numero = $_POST["numero"];
$fecha = $_POST["fecha"];
$socio = $_POST["socio"];
$efectivo = $_POST["efectivo"];
$cheque = $_POST["cheque"];
$pendiente = $_POST["pendiente"];
$tarjeta = $_POST["tarjeta"];
$vencido = $_POST["vencido"];
$total = $_POST["total"];


$insertar = "INSERT INTO pagos(numero, fecha, socio, efectivo, cheque, pendiente, tarjeta, vencido, total) 
VALUES ('$numero', '$fecha', '$socio', '$efectivo', '$cheque', '$pendiente', '$tarjeta', '$vencido', '$total')";

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

