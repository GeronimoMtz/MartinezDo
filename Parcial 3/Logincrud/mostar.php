<html>
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
</style>
         </head>
         <body>
         <ul>
  <li><a href="registro.php">Registro</a></li>
  <li><a href="pagbaja.php">Bajas</a></li>
  <li><a href="pagmodificar.php">modificación</a></li>
  <li><a href="mostar.php">Mostrar</a></li>
</ul>

<?php
$conexion = new mysqli('localhost', 'root', '', 'martinezdo');
$consulta = "SELECT * FROM usuarios";
$resultado = $conexion->query($consulta);
echo "<table width='200' border='1'><tr><th>usuario</th><th>password</th></tr>";
while ($array_registro = $resultado->fetch_assoc()) {
        echo "<tr><td>".$array_registro['usuario']."</td><td>".$array_registro['password']."</td></tr>";
    }
    echo "</table>";
    
    $resultado->free(); 
    $conexion->close();
?>


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