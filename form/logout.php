<?php
//esto es crreado para el cierre de sesion

session_start();
//esto me llevara de nuevo al formulario del logIn
session_destroy('location: formulario.php');

?>