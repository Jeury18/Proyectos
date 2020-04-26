<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socio especifico</title>
    <link rel="stylesheet" href="/estilos/ImpSocEsp.css">
</head>
<body>
    <h1>Socio especifico</h1>
    <input class="boton" type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
    <div class="ImpSocEsp">
        <form class="formulario" action="">
            <div class="input-contenedor">
                <br>
                <label for="socio">Socio</label>
                <input type="text" id="socio" name="socio" placeholder="Socio">
                <br>
                <br>
                <hr>
                <?php

$con=mysqli_connect("localhost", "root", "", "gym");
// Check connection

$result = mysqli_query($con,"SELECT * FROM clientes");

echo "<table border='1' >
<tr>
<th>ID</th>
<th>Socio</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  
echo "<tr>";
echo "<td>" . $row['codigo_cliente'] . "</td>";
echo "<td>" . $row['nombres'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
                <button id="btn_imprimir" class="button" name="btn_imprimir" type="submit">Imprimir</button> 
            </div>

            </div>
        </form>
    </div>
</body>
</html>