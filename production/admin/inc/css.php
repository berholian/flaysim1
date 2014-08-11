<?php
    $default_css = 'default.css';
    $alt_css = 'alt.css';

    if(!isset($_COOKIE['css'])){
        setcookie("css", $default_css, time()+3600000);
    }
?>
