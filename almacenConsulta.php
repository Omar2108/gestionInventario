<<?php session_start();

include 'vista/html/almacenConsulta.html'; 

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
    $doc = $_POST['doc'];

    $sql = "SELECT * FROM almacen WHERE IDProd = $doc;";

    $resultado = mysqli_query($conexion, $sql);

    mysqli_data_seek ($resultado, 0);

    $extraido = mysqli_fetch_array($resultado);

    if ($extraido) {
         echo "<table border=\"1\"><tr>";

     echo "<td>CODIGO</br>".$extraido['IDProd']."</td>";

     echo "<td>NOMBRE</br>".$extraido['nombreProd']."<br/></td>";

     echo "<td>MARCA</br>".$extraido['marcaProd']."</td>";

     echo "<td>FECHA VENC</br>".$extraido['fechaVenProd']."</td>";

     echo "<td>CANTIDAD ENTR</br>".$extraido['cantEntrProd']."</td>";

     echo "<td>FECHA ENTR</br>".$extraido['fechaEntrProd']."</td>";

     echo "<td>V. UNITARIO</br>".$extraido['valorUnEntrProd']."</td>";

     echo "<td>CANT VENDIDA</br>".$extraido['cantVendProd']."</td>";

     echo "<td>V. COMERCIAL</br>".$extraido['valorUnComProd']."</td>";

     echo "<td>F. SALIDA</br>".$extraido['fechaSalProd']."</td>";

     echo "<td>CANT DISPONIBLE</br>".$extraido['cantDisProd']."</td>";

     echo "<td>UTILIDAD</br>".$extraido['utilidadProd']."</td>";

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
    echo "No se puedo ejecutar la consulta en la Tabla no se encontro.";
}

 ?>