 <html>
     <head>
     
     <link rel="stylesheet" href="estilo.css">

         </head>
         <body>
         <ul>
  <li><a href="registro.php">Registro</a></li>
  <li><a href="pagbaja.php">Bajas</a></li>
  <li><a href="pagmodificar.php">modificación</a></li>
  <li><a href="mostar.php">Mostrar</a></li>
</ul>
<form action="Darbaja.php" method="post">
   <h1>Bajas Usuaurio</h1>
   <p>Usuario <input type="text" placeholder="id_usuario" name="id"></p>
   <input type="submit" value="Eliminar">


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