<?php

private static $db_server="localhost";
private static $db_user="root";
private static $db_pass="";
private static $db_name="gym";
private $conn;

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$clave1 = $_POST['clave1'];



if(isset($_POST['usuario']) && !empty($_POST['usuario']) &&
 isset($_POST['clave']) && !empty($_POST['clave']){

$con = mysql_connect("localhost", "root", "") or die("no se conecto");
mysql_select_db(gym, $con) or die ("No se puede seleccionar la BD");

$cn = mysql_query("INSERT INTO usuarios VALUES ('$usuario','$clave')")
   
    echo("Datos enviados");
}else{
    echo("Datos no enviados");



}

?>