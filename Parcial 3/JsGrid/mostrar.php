<?php  
include('db.php'); 

    $query = "select * from usuarios";     // Esta linea hace la consulta
    $result = mysql_query($query); 

    while ($registro = mysql_fetch_array($result)){ 
echo " 
    <tr> 
      <td width='150'>".$registro['usuarios']."</td> 
      <td width='150'>".$registro['password']."</td> 
      

    </tr> 
"; 
?>