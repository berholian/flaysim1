<?php
/*
* alerts.php
* mi documento de funciones
*/


function printAlerts(){

    $alerts = '';

    @session_start();

    if(isset($_SESSION["danger"])){//rojo
        $alerts .= '<div class="alert alert-danger"><strong>Danger! </strong>'.$_SESSION["danger"].'<button type="button" class="close" data-dismiss="alert">&times;</button></div>';
        unset($_SESSION["danger"]);
    }
    
    if(isset($_SESSION["info"])){//azul
        $alerts .= '<div class="alert alert-info"><strong>info! </strong>'.$_SESSION["info"].'<button type="button" class="close" data-dismiss="alert">&times;</button></div>';
        unset($_SESSION["info"]);
    }

    if(isset($_SESSION["success"])){//verde
        $alerts .= '<div class="alert alert-success"><strong>Success! </strong>'.$_SESSION["success"].'<button type="button" class="close" data-dismiss="alert">&times;</button></div>';
        unset($_SESSION["success"]);
    }

    if(isset($_SESSION["warning"])){//naranja
        $alerts .= '<div class="alert alert-warning"><strong>Warning! </strong>'.$_SESSION["warning"].'<button type="button" class="close" data-dismiss="alert">&times;</button></div>';
        unset($_SESSION["warning"]);
    }

    return $alerts;
}

?>