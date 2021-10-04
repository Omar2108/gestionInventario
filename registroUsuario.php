<<?php session_start();

require 'admin/config.php';
require 'funcion.php';
require 'vista/html/crearUsuario.html';
require_once 'modelo/conexion.php';

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


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$cedula = $_POST['cedula'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$rol = $_POST['rol'];
	$privilegios = $_POST['privilegios'];

	$consulta = '';

	$consulta = "INSERT INTO usuarios(IDUsu, nombreUsu, apellidosUsu, cedulaUsu, emailUsu, usuario, password, rol, privilegios) VALUES (null, '$nombres', '$apellidos', '$cedula', '$email', '$usuario', '$password', '$rol', '$privilegios')";

		
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