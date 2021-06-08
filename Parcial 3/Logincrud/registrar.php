<?php  
require  'db.php';
$clave=$_POST['password'];
$usuario=$_POST['usuario'];
$pass_cifrada =md5($clave);
$sql = "INSERT INTO usuarios (usuario, password)
VALUES ('$usuario', '$pass_cifrada')";
$conexion->query($sql);
mysqli_close($conexion);
header("location:mostar.php");
?>