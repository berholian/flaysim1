<?php

    include('inc/security.php');
    include('inc/config.php');
    include('inc/alerts.php');
    include('classes/User.php');

    @session_start();
    echo printAlerts();

    $parameters = array(
        "type" => $_POST["type"],
        "name" => $_POST["name"],
        "description" => $_POST["description"]
    );

    $user = new User($_SESSION["id"]);

    $result = $user->updateDish($parameters, true);

    if( $result === true ){
        $_SESSION["success"] = 'Course saved';
    }else{
        $_SESSION["danger"] = 'Unable to save the changes';
    }
    header('location: admin.php');

?>