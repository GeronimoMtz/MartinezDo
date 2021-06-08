<?php
include('db.php');
$id=$_POST['id'];
$consulta = "DELETE FROM usuarios WHERE usuario='$id' ";		
$conexion->query($consulta);
mysqli_close($conexion);
header("location:mostar.php");
?>