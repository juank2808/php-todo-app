<?php

   // esto contiene el formilario a rellenar
   session_start();
   include_once('conexion/connect.php');
   
   //creamos una funcion para verificar el logIn
   
   function check_login($user,$passwd,&$result){
       
        $sql = "SELECT * FROM usuarios WHERE user ='$user' and password ='$passwd'";
        $rec = mysql_query($sql);
        $count = 0;
        
        while($row = mysql_fetch_object($rec)){
            $count++;
            $result = $row;
        }
        if($count == 1){
            return 1;
        }
        else{
            return 0;
        }
        /*Luego haremos una serie de condicionales que identificaran el 
        momento en el boton de login es presionado y cuando este sea presionado 
        llamaremos a la función verificar_login() pasandole los parámetros ingresados:*/

        if(!isset($_SESSION['userid'])){  //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee
        
            if(isset($_POST['login'])){ //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado
             
                if(verificar_login($_POST['user'],$_POST['password'],$result) == 1){ //Si el boton fue presionado llamamos a la función verificar_login() dentro de otra condición preguntando si resulta verdadero y le pasamos los valores ingresados como parámetros.
         
                  /*Si el login fue correcto, registramos la variable de sesión y al mismo tiempo refrescamos la pagina index.php.*/
                  $_SESSION['userid'] = $result->idusuario; 
                  header("location:hola.html"); 
            } else {
                echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; 
                //Si la función verificar_login() no pasa, que se muestre un mensaje de error.
        } 
     
        }
            
        }  
   }
   
?>
<form action="hola.html" method="post" class="login">
    <div><label>Usuario: </label>
    <input type="text" name="user"/>
    <label>Contrase&ntilde;a</label>
    <input type="password" name=""/>
    <input type="submit" value="Submit"/>
    </div>
</form>
