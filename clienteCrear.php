<<?php session_start();
include 'vista/html/clientesCrear.html';

$server = "localhost";
$user = "root";
$password = "";
$dbname = "tiendabendicion";

$conexion = new mysqli("localhost","root","","tiendabendicion");

if ($conexion) {
    echo "Conectado a la  DB.</br>";
} else {
    echo "No se Puedo establecer conexion a la DB.</br>";
}

$selectDB = mysqli_select_db($conexion,'tiendabendicion');

if ($selectDB) {
    echo "Se selecciono correctamente la base de datos.</br>";
} else {
    echo "No se encontro la base de datos.</br>";
}


if (isset($_POST['regCliente'])) {
    $nombresCli = $_POST['nombresCli'];
    $tipoDocCli = $_POST['tipoDocCli'];
    $NumDocCli = $_POST['NumDocCli'];
    $telefonoCli = $_POST['telefonoCli'];
    $direccionCli = $_POST['direccionCli'];
    $emailCli = $_POST['emailCli'];


    $consulta = '';

    $consulta = "INSERT INTO clientes(nombresClient, tipoDocClient, numeroDocClient, telefonoClient, direccionClient, emailClient) VALUES ('$nombresCli', '$tipoDocCli', '$NumDocCli', '$telefonoCli', '$direccionCli', '$emailCli')";

        
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "el perfil de almacenamiento se ejecuto correctamente.</br>";

            
    } else {
        echo "error en la ejecución de la consulta. <br />";
    }

    if (mysqli_close($conexion)) {
        echo "desconexion realizada. <br />";
    } else {
        echo "error en la desconexión.</br>";
    }

    
        

} else {
    echo "No se pudo realizar el registro en la tabla.</br>";
}



 ?>