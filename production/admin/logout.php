<?php
/*
* logout.php
* cierra la sesión de usuario
*/
require_once('inc/config.php');
require_once('inc/alerts.php');
require_once('classes/User.php');

@session_start();

$user = new User($_SESSION["id"]);
if( $user->logout() ){
    @session_start();
    $_SESSION['success'] = 'bye bye';
    header('location: index.php');
}else{
    @session_start();
    $_SESSION['warning'] = 'Warning! Unable to close your session';
    echo printAlerts();
}



?>