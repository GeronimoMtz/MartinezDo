<?php  
require  'db.php';
$clave=$_POST['usuario'];
$usuario=$_POST['password'];
$pass_cifrada = password_hash($clave, PASSWORD_DEFAULT, array("cost"=>10));
$sql = "INSERT INTO usuarios (usuario, password)
VALUES ('$clave', '$pass_cifrada')";
$conexion->query($sql);
mysqli_close($conexion);
header("location:index.html");
?>