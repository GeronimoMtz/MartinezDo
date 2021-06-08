<?php

$conexion=mysqli_connect("localhost","root","","martinezdo");
$db='martinezdo';
if($conexion)
{
    echo "conectado";
}
else
{
    echo "no conectado";
}
?>
