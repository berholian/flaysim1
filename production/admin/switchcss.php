<?php
    include('inc/css.php');
    include('classes/User.php');
    $user = new User();
    $user->switchCss();
    header('location: admin.php');
?>