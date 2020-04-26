<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance pendiente</title>
    <link rel="stylesheet" href="/estilos/ImpBalPen.css">
</head>
<body>
    <h1>Balance pendiente</h1>
    <input class="boton" type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
    <div class="ImpBanPen">
        <form class="formulario" action="">
            <div class="input-contenedor">
                <br>
                <label for="socio">Socio</label>
                <input type="text" id="socio" name="socio" placeholder="Socio">
                <br>
                <br>
                <hr>
                <button id="btn_imprimir" class="button" name="btn_imprimir" type="submit">Imprimir</button> 
            </div>
            <?php

$con=mysqli_connect("localhost", "root", "", "gym");
// Check connection

$result = mysqli_query($con,"SELECT * FROM pagos");

echo "<table border='1' >
<tr>
<th>Socio</th>
<th>Pendiente</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  
echo "<tr>";
echo "<td>" . $row['socio'] . "</td>";
echo "<td>" . $row['pendiente'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

            </div>
        </form>
    </div>
</body>
</html>