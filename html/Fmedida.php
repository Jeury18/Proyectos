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