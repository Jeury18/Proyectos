<?php
include_once 'conexion.php';

$numero = $_POST["numero"];
$socio = $_POST["socio"];
$cargo = $_POST["cargo"];
$concepto = $_POST["concepto"];
$valor = $_POST["valor"];
$balance = $_POST["balance"];
$vence = $_POST["vence"];
$comentarios = $_POST["comentarios"];



$insertar = "INSERT INTO cargos(numero, socio, cargo, concepto, valor, balance, vence, comentarios)
 VALUES ('$numero','$socio','$cargo','$concepto','$valor','$balance','$vence','$comentarios')";

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
