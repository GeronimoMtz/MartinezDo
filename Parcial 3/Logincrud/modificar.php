<?php
include('db.php');
$id=$_POST['id'];
$clave=$_POST['clave'];
$usuario=$_POST['usuario'];
$pass_cifrada=md5($clave);

$consulta = "UPDATE usuarios SET usuario='$usuario', password='$pass_cifrada' WHERE  usuario='$id' ";		
$conexion->query($consulta);
mysqli_close($conexion);
header("location:mostar.php");
?>