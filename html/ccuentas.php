<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas de cuentas</title>
    <link rel="stylesheet" href="/estilos/ConsultaDeCuenta.css">
</head>
<body>
    <h1>Consultas de cuentas</h1>
    <input class="boton" type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
    <div class="consCuenta">
    <form class="formulario" action="">
        <div class="input-contenedor">
        <br>
        <label for="socio">Socio</label>
        <input type="number" name="socio" id="socio" placeholder="Socio">
        <label for="balance">Balance en cero</label>
        <input type="checkbox" name="balance" id="balance">
        <button class="boton" id="aceptar" name="aceptar" type="submit">Aceptar</button>
        <br>
        <br>
        <hr>
        <br>
        <?php

$con=mysqli_connect("localhost", "root", "", "gym");
// Check connection

$result = mysqli_query($con,"SELECT * FROM usuarios");

echo "<table border='1' >
<tr>
<th>ID</th>
<th>Usuario</th>
<th>Email</th>
<th>Clave</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['usuario'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['clave'] . "</td>";
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