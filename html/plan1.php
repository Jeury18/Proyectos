
<?php
include_once 'conexion.php';

$id = $_POST["id"];
$descripcion = $_POST["descripcion"];
$cantidad = $_POST["cantidad"];
$periodo = $_POST["periodo"];
$precio = $_POST["precio"];
$descuento = $_POST["descuento"];
$precio_inc = $_POST["precio_inc"];
$cantidad_ven = $_POST["cantidad_ven"];
$periodo_ven = $_POST["periodo_ven"];


$insertar = "INSERT INTO plan(id, descripcion, cantidad, periodo, precio, descuento, precio_inc, cantidad_ven, periodo_ven) VALUES ('$id','$descripcion','$cantidad','$periodo','$precio','$descuento','$precio_inc','$cantidad_ven','$periodo_ven')";

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

