<?php

session_start();
$usuario=$_SESSION['usuario'];
echo "<h1>Bienvendio $usuario</h1>";
echo "<a href=salir.php>salir</a>";
?>