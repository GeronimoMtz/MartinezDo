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
  <li><a href="#mostar.php">Mostrar</a></li>
</ul>
<form action="darbaja.php" method="post">
   <h1>bajas usuario</h1>
   <p>Nombre Usuario <input type="text" placeholder="usuario baja" name="id"></p>


   <input type="submit" value="Dar baja">


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