<<?php session_start();
include 'vista/html/proveedoresCrear.html';

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


if (isset($_POST['regProveedor'])) {
    $NombresProv = $_POST['NombresProv'];
    $tipoDocProv = $_POST['tipoDocProv'];
    $numDocProv = $_POST['numDocProv'];
    $telefonoProv = $_POST['telefonoProv'];
    $direccionProv = $_POST['direccionProv'];
    $emailProv = $_POST['emailProv'];


    $consulta = '';

    $consulta = "INSERT INTO proveedores(nombresProv, tipoDocProv, numeroDocProv, telefonoProv, direccionProv, emailProv) VALUES ('$NombresProv', '$tipoDocProv', '$numDocProv', '$telefonoProv', '$direccionProv', '$emailProv')";

        
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