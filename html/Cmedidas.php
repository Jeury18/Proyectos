<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Medidas</title>
    <link rel="stylesheet" href="/estilos/ImpSocEsp.css">
</head>
<body>
    <h1>Consulta de Medidas</h1>
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

$result = mysqli_query($con,"SELECT * FROM medidas");

echo "<table border='1' >
<tr>
<th>ID</th>
<th>Fecha</th>
<th>Peso</th>
<th>Cuello</th>
<th>Brazo</th>
<th>Antebrazo</th>
<th>Pecho</th>
<th>Cintura</th>
<th>Cadera</th>
<th>Muslo</th>
<th>Pantorilla</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['fecha'] . "</td>";
echo "<td>" . $row['peso'] . "</td>";
echo "<td>" . $row['cuello'] . "</td>";
echo "<td>" . $row['brazo'] . "</td>";
echo "<td>" . $row['antebrazo'] . "</td>";
echo "<td>" . $row['pecho'] . "</td>";
echo "<td>" . $row['cintura'] . "</td>";
echo "<td>" . $row['cadera'] . "</td>";
echo "<td>" . $row['muslo'] . "</td>";
echo "<td>" . $row['pantorilla'] . "</td>";
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