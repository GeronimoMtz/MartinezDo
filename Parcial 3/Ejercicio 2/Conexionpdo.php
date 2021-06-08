<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
<header> 
</header>



<table>
<?php
 include('BDconect.php');
$sql = "SELECT * FROM usuarios"; 
$query = $connect -> prepare($sql); 
$query -> execute(); 
$results = $query -> fetchAll(PDO::FETCH_OBJ); 

if($query -> rowCount() > 0)   { 
  
foreach($results as $result) { 
echo "<tr>
<td>".$result -> usuario."</td>
<td>".$result -> password."</td>

</tr>";

   }
 }
?>
</table>
</body>
</html>