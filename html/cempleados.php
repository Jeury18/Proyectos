<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de empleados</title>
</head>
<body>
    <h1>Empleados</h1>
    <br>
    <input class="boton" type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
    <br>
    <br>
    <form action="">
        <label for="codigo">Codigo</label>
        <input type="number" name="codigo" id="codigo">
        <br>
        <hr>
        <?php

$con=mysqli_connect("localhost", "root", "", "gym");
// Check connection

$result = mysqli_query($con,"SELECT * FROM empleados");

echo "<table border='1' >
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Sexp</th>
<th>Email</th>
<th>Estado</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['nombre'] . "</td>";
echo "<td>" . $row['apellido'] . "</td>";
echo "<td>" . $row['sexo'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['estado'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?> 
        <br>
        <hr>
        <button id="btn_eliminar" name="btn_eliminar type="submit">Eliminar</button> 
        <button id="btn_actualizar" name="btn_actualizar" type="submit">Actualizar</button>   
    </form>
</body>
</html>