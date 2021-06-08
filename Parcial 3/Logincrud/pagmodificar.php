<!DOCTYPE html>
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
<form action="modificar.php" method="post">
   <h1>Modificar usuario</h1>
   <p>Usuario a modificar <input type="text" placeholder="usuario a modificar" name="id"></p>
   <p>Usuario <input type="text" placeholder="usuario" name="usuario"></p>
   <p>contraseña <input type="text" placeholder="contraseña" name="clave"></p>

   <input type="submit" value="modificar">


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