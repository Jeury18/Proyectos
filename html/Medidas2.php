<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medidas</title>
    <link rel="stylesheet" href="estilos/medidas.css">
</head>
<body>
    <h1>Medidas</h1>
    <input class="boton"  type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
    <div class="medidas">
    <form class="formulario" action="Medidas2.php" method="POST">
    <h3>Medidas</h3>
    <div class="input-contenedor">
        
        <br>
        <label for="id">Socio</label>
        <input type="number" name="id" id="id" placeholder="Id de Socio">
        <button name="search">Buscar</button>
         <br>
         <br>
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha">
        <label for="peso">Peso</label>
        <input type="text" name="peso" id="peso" placeholder="Peso">
        <br>
        <br>
        <label for="cuello">Cuello</label>
        <input type="text" name="cuello" id="cuello" placeholder="Cuello">
        <label for="brazo">Brazo</label>
        <input type="text" name="brazo" id="brazo" placeholder="Brasos">
        <br>
        <br>
        <label for="antebrazo">Antebrazo</label>
        <input type="text" name="antebrazo" id="antebrazo" placeholder="Antebrazo">
        <label for="pecho">Pecho</label>
        <input type="text" name="pecho" id="pecho" placeholder="Pecho">
        <br>
        <br>
        <label for="cintura">Cintura</label>
        <input type="text" name="cintura" id="cintura" placeholder="Cintura">
        <label for="cadera">Cadera</label>
        <input type="text" name="cadera" id="cadera" placeholder="Cadera">
        <br>
        <br>
        <label for="muslo">Muslo</label>
        <input type="text" name="muslo" id="muslo" placeholder="Muslo">
       <label for="pantorilla">Pantorilla</label>
        <input type="text" name="pantorilla" id="pantorilla" placeholder="Pantorilla">
        <br>
        <br>

    <hr>
    <br>
    <table id="tabla" border="1">
        <thead>
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
            <tbody>
                <tr>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    
                </tr>
            </tbody>
        </thead>
    </table>
    
    <button class="button" id="mas" type="submit">+</button>
    
    
</div>
</form>
</div>
</body>
</html>
<?php

include_once 'conexion.php';
if(isset($_POST['search']))
{
    $id = $_POST['id'];
    $sql = " SELECT nombres, apellidos, cedula from clientes where codigo_cliente= $id";
    $r = mysqli_query($conexion, $sql);
    $c = mysqli_num_rows($r);
    $o = ''; 
    if($c > 0)
    {
        $o .= '<select>';
        while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
        {
            $o.='<option>'.$row['nombres'].'</option>';
            $o.='<option>'.$row['apellidos'].'</option>';
            $o.='<option>'.$row['cedula'].'</option>';
        }
        $o.='</select>';
    }
    return $o;
}

?>