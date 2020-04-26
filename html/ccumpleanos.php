
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de cumpleaños</title>
    <link rel="stylesheet" href="/estilos/ConsultaDeCumple.css">
</head>
<body>
    <h1>Consulta de cumpleaños</h1>
    <input class="boton" type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
    <div class="concumple">
    <form class="formulario" action="">
        <div class="input-contenedor">
        <br>
        <label for="codigo">Codigo</label>
        <input type="number" name="codigo" id="codigo">
        <br>
        <br>
        <hr>
        <br>
     
                <?php

$con=mysqli_connect("localhost", "root", "", "gym");
// Check connection

$result = mysqli_query($con,"SELECT * FROM cumpleanos");

echo "<table border='1' >
<tr>
<th>ID</th>
<th>nombre</th>
<th>apellido</th>
<th>Fecha de Nacimiento</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['nombre'] . "</td>";
echo "<td>" . $row['apellido'] . "</td>";
echo "<td>" . $row['fecha_nac'] . "</td>";
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