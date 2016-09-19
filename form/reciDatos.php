<?php 
$user=$_POST['user'];
$pass=$_POST['pass'];



$consulta=mysql_query("select user, password from usuarios where user =" . $user. "and password =".$pass";");

if(my_sql_num_rows($consulta)==1){
    
    
}else{
    echo"Datos incorrectos";
}
?>