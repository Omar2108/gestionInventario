<<?php session_start();

require 'admin/config.php';
require 'funcion.php';
require 'vista/html/usuariosConsulta.html';


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


if (isset($_POST['submit'])) {
	$doc = $_POST['documento'];

	$sql = "SELECT * FROM usuarios WHERE cedulaUsu = $doc;";

    $resultado = mysqli_query($conexion, $sql);


    mysqli_data_seek($resultado, 0);

    $extraido = mysqli_fetch_array($resultado);

    if ($extraido) {
          echo "<table border=\"1\"><tr>";

          echo "<td>ID</br>".$extraido['IDUsu']."</td>";

          echo "<td>NOMBRES</br>".$extraido['nombreUsu']."<br/></td>";

          echo "<td>APELLIDOS</br>".$extraido['apellidosUsu']."</td>";

          echo "<td>CEDULA</br>".$extraido['cedulaUsu']."</td>";

          echo "<td>EMAIL</br>".$extraido['emailUsu']."</td>";

          echo "<td>USUARIO</br>".$extraido['usuario']."</td>";

          echo "<td>PASSWORD</br>".$extraido['password']."</td>";

          echo "<td>ROL</br>".$extraido['rol']."</td>";

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
	echo "No se puedo ejecutar la consulta en la DB.";

	exit();
	mysql_close($conexion);
}





?>