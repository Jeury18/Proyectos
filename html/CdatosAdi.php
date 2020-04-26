<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas Adicionales </title>
    <link rel="stylesheet" href="/estilos/ConsultaDeCuenta.css">
</head>
<body>
    <h1>Consultas Adicionales</h1>
    <input class="boton" type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
    <div class="consCuenta">
    <form class="formulario" action="">
        <div class="input-contenedor">
        <br>
              <?php

$con=mysqli_connect("localhost", "root", "", "gym");
// Check connection

$result = mysqli_query($con,"SELECT * FROM datos_adicionales");

echo "<table border='1' >
<tr>
<th>Socio</th>
<th>Nombre</th>
<th>Direccion</th>
<th>Telefono</th>
<th>Comentario</th>
<th>Monto</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['nombre'] . "</td>";
echo "<td>" . $row['telefono'] . "</td>";
echo "<td>" . $row['comentario'] . "</td>";
echo "<td>" . $row['monto'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
        <br>
        <hr>
        <button class="button" id="btn_eliminar" name="btn_eliminar type" type="submit">Eliminar</button> 
        <button class="button" id="btn_actualizar" name="btn_actualizar" type="submit">Actualizar</button> 
    </div>
    </form>
</div>
</body>
</html>