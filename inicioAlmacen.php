<<?php 
include 'vista/html/almacenRegistro.html';

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


if (isset($_POST['regProducto'])) {
    $nombresProd = $_POST['nombreProd'];
    $marcaProd = $_POST['marcaProd'];
    $fechaVenc = $_POST['fechaVen'];
    $cantEntr = $_POST['cantEnt'];
    $fechaEnt = $_POST['fechaEnt'];
    $valorUnEnt = $_POST['valorUnEnt'];
    $cantVend = $_POST['cantVen'];
    $valorUCom = $_POST['valorUCom'];
    $fechaSa = $_POST['fechaSa'];
    $cantidadD = $_POST['cantidadD'];
    $utilidad = $_POST['utilidad'];


    $consulta = '';

    $consulta = "INSERT INTO almacen(IDProd, nombreProd, marcaProd, fechaVenProd, cantEntrProd, fechaEntrProd, valorUnEntrProd, cantVendProd, valorUnComProd, fechaSalProd, cantDisProd, utilidadProd) VALUES (null, '$nombresProd', '$marcaProd', '$fechaVenc', '$cantEntr', '$fechaEnt', '$valorUnEnt', '$cantVend', '$valorUCom', '$fechaSa', '$cantidadD','$utilidad')";

        
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