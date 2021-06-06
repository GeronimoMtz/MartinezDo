<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","loginbd");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">Usuario o contraseña incorrecto</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
