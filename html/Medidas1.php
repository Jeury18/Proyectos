<?php
include_once 'conexion.php';

$id = $_POST["id"];
$fecha = $_POST["fecha"];
$peso = $_POST["peso"];
$cuello = $_POST["cuello"];
$brazo = $_POST["brazo"];
$antebrazo = $_POST["antebrazo"];
$pecho = $_POST["pecho"];
$cintura = $_POST["cintura"];
$cadera = $_POST["cadera"];
$muslo = $_POST["muslo"];
$pantorilla = $_POST["pantorilla"];


$insertar = "INSERT INTO medidas(id, fecha, peso, cuello, brazo, antebrazo, pecho, cintura, cadera, muslo, pantorilla) VALUES ('$id','$fecha','$peso','$cuello','$brazo','$antebrazo',$pecho,'$cintura','$cadera','$muslo','$pantorilla')";
 

$resultado = mysqli_query($conexion,$insertar);


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






