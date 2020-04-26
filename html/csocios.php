<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de socios</title>
    <link rel="stylesheet" href="/estilos/ConsultaDeSocios.css">
</head>
<body>
    <h1>Consulta de socios</h1>
    <input class="boton" type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
    <div class="csocios">
    <form class="formulario" action="">
        
        <div class="input-contenedor">
        <br>
        <label for="socio">Socio</label>
        <input type="number" name="socio" id="socio" placeholder="Socio">
        <br>
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <br>
        <br>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" placeholder="apellido">
        <br>
        <br>
        <hr>
        <br>
        <?php

$con=mysqli_connect("localhost", "root", "", "gym");
// Check connection

$result = mysqli_query($con,"SELECT * FROM clientes");

echo "<table border='1' >
<tr>
<th>Socio</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Sexo</th>
<th>Cedula</th>
<th>Creado</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  
echo "<tr>";
echo "<td>" . $row['codigo_cliente'] . "</td>";
echo "<td>" . $row['nombres'] . "</td>";
echo "<td>" . $row['apellidos'] . "</td>";
echo "<td>" . $row['sexo'] . "</td>";
echo "<td>" . $row['cedula'] . "</td>";
echo "<td>" . $row['fecha'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

        
       <br>
       <hr>
       <button class="button" id="btn_eliminar" name="btn_eliminar type="submit">Eliminar</button> 
       <button class="button" id="btn_actualizar" name="btn_actualizar" type="submit">Actualizar</button> 
    </div>
    </form>
</div>
</body>
</html>