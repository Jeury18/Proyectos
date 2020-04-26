<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de socios</title>
    <link rel="stylesheet" href="/estilos/ListaSocios.css">
</head>
<body>
    <h1>Lista de socios</h1>
    <input class="boton" type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
    <div class="listaS">
    <form class="formulario" action="listaSocios.php" method="POST">
        <div class="input-contenedor">
        <br>
        <label for="codigo">Codigo</label>
        <input type="number" name="codigo" id="codigo" placeholder="Codigo">
        <br>
        <br>
        <br>
        <label>Lista</label>
        <?php

$con=mysqli_connect("localhost", "root", "", "gym");
// Check connection

$result = mysqli_query($con,"SELECT * FROM clientes");

echo "<table border='1' >
<tr>
<th>Nombre</th>
<th>Apellido</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  
echo "<tr>";
echo "<td>" . $row['nombres'] . "</td>";
echo "<td>" . $row['apellidos'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
        <button id="buscar" name="buscar" class="button">Buscar</button>
    </div>
    </form>
</div>
</body>
</html>