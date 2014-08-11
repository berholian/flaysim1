<?php

    include('inc/security.php');
    include('inc/config.php');
    include('inc/alerts.php');
    include('classes/User.php');

    @session_start();
    echo printAlerts();

    
    $user = new User($_SESSION["id"]);

    $result = $user->deleteDish($_GET["id"]);

    if( $result === true ){
        $_SESSION["success"] = 'Dish deleted';
    }else{
        $_SESSION["danger"] = 'Unable to delete the dish';
    }
    header('location: admin.php');

?>