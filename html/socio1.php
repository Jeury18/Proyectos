<?php
include_once 'conexion.php';

$codigo_cliente = $_POST["codigo_cliente"];
$fecha = $_POST["fecha"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$sexo = $_POST["sexo"];
$cedula = $_POST["cedula"];
$planF = $_POST["planF"];
$fec_nac = $_POST["fec_nac"];
$estado = $_POST["estado"];
//$fecha_creado = $_POST["fecha_creado"];
$ciudad = $_POST["ciudad"];
$sector = $_POST["sector"];
$calle = $_POST["calle"];
$numero = $_POST["numero"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$valido_hasta = $_POST["valido_hasta"];



$insertar = "INSERT INTO clientes(codigo_cliente, fecha, nombres, apellidos, sexo, cedula, planF, fec_nac, ciudad, sector, calle, numero, tel, email, valido_hasta) VALUES ('$codigo_cliente', '$fecha', '$nombres', '$apellidos', '$sexo', '$cedula', '$planF', '$fec_nac', '$ciudad', '$sector', '$calle', '$numero', '$tel', '$email', '$valido_hasta')";
 
//$insertar2 = "INSERT INTO clientes(codigo_cliente, fecha, nombres, apellidos, sexo, cedula, planF, fec_nac, estado, ciudad, sector, calle, numero, tel, email, valido_hasta) VALUES ('$codigo_cliente','$fecha','$nombres','$apellidos','$sexo','$cedula','$planF','$fecha_nac','1','$ciudad','$sector','$calle','$numero','$tel','$email',$valido_hasta')";



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





