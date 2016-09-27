<?php
    require_once('reciDatos.php');
    foreach($result as $row){
        print $row["ID"]."-".$row["nombre"]."-".$row["descripcion"]."<br/>";
    }
  
  
?>