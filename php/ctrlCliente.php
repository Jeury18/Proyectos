<?php 


require_once('../core/data.php');


$conn=new Data;


$op=$_POST['op'];


// op = 1 Mostrar cliente
// op = 2 Registrar cliente
// op = 3 Buscar cliente by id
// op = 4 Modificar cliente
// op = 5 desactivar cliente
// op = 6 Eliminar cliente
// op = 7 Buscar cliente por nombre


if($op == 1){
	session_start();

	$sql="SELECT * from clientes WHERE estado < '3' ORDER BY codigo_cliente DESC";
 	echo $conn->buscar($sql,"JSON");
	
}else if($op == 2){
// session_start();

$codigo_cliente=$_POST['codigo_cliente'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$sexo=$_POST['sexo'];
$cedula=$_POST['cedula'];
$plan=$_POST['plan'];

$ciudad=$_POST['ciudad'];
$sector=$_POST['sector'];
$calle=$_POST['calle'];
$numero=$_POST['numero'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$cel=$_POST['cel'];
$nota=$_POST['nota'];

$fecVal = strtotime($_POST['fecVal']);
$fechaNac = strtotime($_POST['fechaNac']);

$fecVal = date('Y-m-d', $fecVal);
$fechaNac = date('Y-m-d', $fechaNac);

$fechaCreado = date('Y-m-d');

$sql="INSERT INTO clientes (codigo_cliente,nombres,apellidos,sexo,cedula,fecha_nac,estado,fecha_creado,ciudad,sector,calle,numero,tel,cel,fax,email,nota,foto,codigo_planf,valido_hasta) VALUES('$codigo_cliente','$nombres','$apellidos','$sexo','$cedula','$fechaNac',1,'$fechaCreado','$ciudad','$sector','$calle','$numero','$tel','$cel', '$fax','$email', '$nota', null ,'$plan','$fecVal')";



$resultado=$conn->guardar($sql);

	if($resultado){
		echo $resultado;
	}

} else if($op == 3){
	// session_start();
	$id=$_POST['id'];
	$sql="SELECT * from clientes WHERE estado < '3'  AND codigo_cliente='$id'";
 	echo $conn->buscar($sql,"JSON");
}else if ($op == 4) {
session_start();

$codigo_cliente=$_POST['codigo_cliente'];

	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$sexo=$_POST['sexo'];
	$cedula=$_POST['cedula'];
	$plan=$_POST['plan'];

	$ciudad=$_POST['ciudad'];
	$sector=$_POST['sector'];
	$calle=$_POST['calle'];
	$numero=$_POST['numero'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$cel=$_POST['cel'];
	$nota=$_POST['nota'];

	$fecVal = strtotime($_POST['fecVal']);
	$fechaNac = strtotime($_POST['fechaNac']);

	$fecVal = date('Y-m-d', $fecVal);
	$fechaNac = date('Y-m-d', $fechaNac);

	$fechaCreado = date('Y-m-d');


	$sql="UPDATE clientes SET nombres='$nombres',apellidos='$apellidos',sexo='$sexo',cedula='$cedula',fecha_nac='$fechaNac',ciudad='$ciudad',sector='$sector',calle='$calle',numero='$numero',tel='$tel',cel='$cel',fax='$fax',email='$email',nota='$nota',codigo_planf='$plan',valido_hasta='$fecVal' WHERE codigo_cliente='$codigo_cliente'";
	$resultado=$conn->modificar($sql);
	if($resultado){
		echo 1;
	}else{
		echo 2;
	}

}else if($op == 5){
	// session_start();

	$id=$_POST['id'];
	$estado=$_POST['estado'];

	$sql = "";
	if($estado == 1) {
		$sql="UPDATE clientes SET estado = 2  WHERE codigo_cliente='$id'";
	} else {
		$sql="UPDATE clientes SET estado = 1  WHERE codigo_cliente='$id'";
	}

	$resultado=$conn->modificar($sql);
	if($resultado){
		echo 1;
	}

	
}else if($op == 6){
	session_start();


	$id=$_POST['id'];

	$sql="UPDATE clientes SET estado=3 WHERE codigo_cliente ='$id'";
	$resultado=$conn->modificar($sql);
	if($resultado){
		echo 1;
	}else{
		echo 2;
	}


}else if($op == 7){
	session_start();
	
		$texto=$_POST['texto'];
	
		$sql="SELECT * FROM usuarios WHERE nombre_usu LIKE '$texto%' AND estado_usu=1 ORDER BY cod_usu DESC";
		echo $conn->buscar($sql,"JSON");
	
	} 
	







