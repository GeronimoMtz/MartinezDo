<?php

include('db.php');
$usuario=$_POST['usuario'];
$contrase=$_POST['contraseña'];
$pass_cifrada=md5($contrase);


$consulta="SELECT *FROM usuarios where usuario='$usuario' and password='$pass_cifrada'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:mostar.php");
    session_start();
$_SESSION['usuario']=$usuario;


}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">Usuario  incorrecto</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
