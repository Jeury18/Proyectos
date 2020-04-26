<?php
$host = "localhost";
$root = "root";
$acceso = "";
$bd = "gym";

$conexion = mysqli_connect($host,$root,$acceso,$bd);

if(!$conexion){
echo("Error al conectar la Base de datos");

}else{

  //  echo("Conectado la Base de datos");  
}
?>