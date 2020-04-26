<?php 


require_once('../core/data.php');


$conn=new Data;


$op=$_POST['op'];


// op = 1 Mostrar usuarios
// op = 2 Registrar usuarios
// op = 3 Buscar usuario by id
// op = 4 Modificar usuarios
// op = 5 Eliminar usuario
// op = 6 Buscar usuario por nombre


if($op == 1){
	session_start();

	$sql="SELECT * from usuarios WHERE estado=1 ORDER BY nombre DESC";
 	echo $conn->buscar($sql,"JSON");
	
}else if($op == 2){
session_start();

$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$clave=$_POST['clave'];


$sql="INSERT INTO usuarios (usuario,nombre,clave,cargos,estado) VALUES('$usuario','$nombre','$clave',1,1)";

$resultado=$conn->guardar($sql);

	if($resultado){
		echo $resultado;
	}

}





