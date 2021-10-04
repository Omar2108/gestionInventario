<<?php 
include 'vista/html/empleadosCrear.html';

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


if (isset($_POST['regEmpleado'])) {
    $nombresEmp = $_POST['nombresEmp'];
    $apellidosEmp = $_POST['apellidosEmp'];
    $cedulaEmp = $_POST['cedulaEmp'];
    $generoEmp = $_POST['generoEmp'];
    $telefonoEmp = $_POST['telefonoEmp'];
    $direccionEmp = $_POST['direccionEmp'];
    $emailEmp = $_POST['emailEmp'];
    $cargoEmp = $_POST['cargoEmp'];
    $sueldoEmp = $_POST['sueldoEmp'];
    $espEmp = $_POST['espEmp'];
    $fondoPEmp = $_POST['fondoPEmp'];
    $arlEmp  = $_POST['arlEmp'];


    $sql = '';

    $sql = "INSERT INTO empleados(nombresEmpl, apellidosEmpl, cedulaEmpl, generoEmpl, telefonoEmpl, direccionEmpl, emailEmpl, cargoEmpl, sueldoEmpl, espEmpl, fondPenEmpl, arlEmpl) VALUES ('$nombresEmp', '$apellidosEmp', '$cedulaEmp', '$generoEmp', '$telefonoEmp', '$direccionEmp', '$emailEmp', '$cargoEmp', '$sueldoEmp', '$espEmp','$fondoPEmp', '$arlEmp');";

        
    $resultado = mysqli_query($conexion, $sql);

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