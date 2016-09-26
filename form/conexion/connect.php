<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.

  
    $usuario ='juankcol';

  try {
        $mbd = new PDO('mysql:host=localhost;dbname=c9', $usuario, $contraseña);
    
    
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }

?>