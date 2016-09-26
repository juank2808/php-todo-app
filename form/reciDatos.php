<?php 
  require_once("conexion/connect.php");

  try {
        $sth=$mbd->prepare("SELECT * from tareas;");
        //mdb es la variable que nos permite la conexion a la base de datos esta en connect.php
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        
     
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
        
    }
?>