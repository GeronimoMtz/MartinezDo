<!DOCTYPE html>
<html lang="es">
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #40AACB;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
</head>
<body>
<ul>
<li><a href="registro.php">Registro</a></li>
  <li><a href="pagbaja.php">Bajas</a></li>
  <li><a href="pagmodificar.php">modificación</a></li>
  <li><a href="mostrar.php">Mostrar</a></li>
</ul>
   <form  name="for"action="registrar.php" method="post">
   <h1>Registrar Usuarios</h1>
   <p>Usuario <input type="text" placeholder="ingrese Nombre" name="usuario"></p>
   <p>Contraseña <input type="password" placeholder="ingrese contraseña" name="password"></p>
   <input type="submit" value="Registro">


   </form> 
   <footer>
        <div class='pie'>
        <?php
session_start();
$usuario=$_SESSION['usuario'];
echo "<h1> $usuario</h1>";
echo "<a href=salir.php>salir</a>";
?>
        
        </div>
        </footer>


</body>
</html>