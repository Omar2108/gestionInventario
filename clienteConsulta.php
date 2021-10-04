<<?php session_start();

require_once 'vista/html/consultaCliente.html';

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


if (isset($_POST['buscador'])) {
    $doc = $_POST['doc'];

    $sql = "SELECT * FROM clientes WHERE numeroDocClient = $doc;";

    $resultado = mysqli_query($conexion, $sql);

    mysqli_data_seek ($resultado, 0);

    $extraido = mysqli_fetch_array($resultado);

    if ($extraido) {

        echo "<table border=\"1\"><tr>";

        echo "<td>NOMBRES</br>".$extraido['nombresClient']."</td>";

        echo "<td>TIPO DOC</br>".$extraido['tipoDocClient']."<br/></td>";

        echo "<td>NUMERO DOC</br>".$extraido['numeroDocClient']."</td>";

        echo "<td>TELEFONO</br>".$extraido['telefonoClient']."</td>";

        echo "<td>DIRECCION</br>".$extraido['direccionClient']."</td>";

        echo "<td>EMAIL</br>".$extraido['emailClient']."</td>";

        echo "</table></tr>";

        mysqli_free_result($resultado);

        mysqli_close($conexion);
    } else {

        echo "<script type=\"text/javascript\"> alert ('NO SE ENCONTRO NINGUN REGISTRO');";
        echo "</script>";

        mysqli_free_result($resultado);

        mysqli_close($conexion);
    }

} else {
    echo "No se puedo ejecutar la consulta.</br>";
}

 


 ?>