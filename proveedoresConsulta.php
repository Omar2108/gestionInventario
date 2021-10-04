<<?php session_start();
include 'vista/html/proveedoresConsulta.html';

$conexion = new mysqli("localhost","root","","tiendabendicion");

if ($conexion) {
    echo "Conectado a la  DB.</br>";
} else{
    echo "No se Puedo establecer conexion a la DB.</br>";
}

$selectDB = mysqli_select_db($conexion,'tiendabendicion');

if ($selectDB) {
    echo "Se selecciono correctamente la base de datos.</br>";
} else {
    echo "No se encontro la base de datos.</br>";
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $doc = $_POST['doc'];

    $sql = "SELECT * FROM 'proveedores' WHERE 'numeroDocClient = $doc';";

    $resultado = mysqli_query($conexion, $sql);

    while ($consulta = mysqli_fetch_row($resultado)) {
        echo "<table border='1'><tr><td>Nombres</td>Tipo Doc<td></td><td>Numero Doc</td><td>Telefono</td><td>Direccion</td><td>Email</td>";
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td>
              <td>".$row[2]."</td><td>".$row[3]."</td>
              <td>".$row[4]."</td><td>".$row[5]."</td>
              <td>".$row[6]."</td>";
        echo "</tr></table>";
    }

    


} else {
    echo "No se puedo ejecutar la consulta.</br>";
}


 ?>