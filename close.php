<<?php 


$cerrar = $_SESSION['cerrarSesion'];

session_start();

session_destroy();

header('Location: index.php');
exit;







 ?>