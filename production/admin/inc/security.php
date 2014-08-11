<?php
/*
* seguridad.php
* comprueba si el usuario está logado y si no lo está lo manda al index.php
*/

@session_start();

if(!isset($_SESSION["login"]) OR $_SESSION["login"]!="ok"){
    header('location: index.php');
}

?>