<<?php session_start();
require 'admin/config.php';
require 'vista/html/index.html';

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



if (isset($_POST['login'])) {
    
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    $_SESSION['usuario'] = $usuario;
    $_SESSION['password'] = $password;
    $_SESSION['rol'] = $rol;

    $usuario = '';
    $password = '';
    $rol = '';

    $sql = "SELECT usuario, password, rol FROM 'usuarios' WHERE usuario = '$usuario' AND password = '$password' AND rol = '$rol'; ";

    $resultado = mysqli_query($conexion, $sql);

    mysqli_data_seek($resultado, 0);

    $extraido = mysqli_fetch_array($resultado);


    if ($extraido > 0) {
        $rol = $extraido['rol'];
        $_SESSION['rol'] = $rol;

        $admin = $_POST['admin'];
        $almacen = $_POST['almacen'];
        $vendedor = $_POST['vendedor'];

        $_SESSION['rol'] = $admin;
        $_SESSION['rol'] = $almacen;
        $_SESSION['rol'] = $vendedor;


        switch ($_SESSION['rol']) {

            case '1':
                $_SESSION['rol'] = 'administrador';
                header('Location: inicioAdmin.php');
                break;

            case '2':
                $_SESSION['almacen'] = 'almacen';
                header('Location: inicioAlmacen.php');
                break;

            case '3':
                $_SESSION['vendedor'] = 'vendendor';
                header('Location: inicioVendedor.php');
                break;
            
            default:
                echo "Usuario o contraseña incorrectos.</br>";
                break;
        }
              
            

    }
}