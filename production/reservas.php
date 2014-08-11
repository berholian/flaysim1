<?php

  $nombre = $_POST["nombre"];
  $date = $_POST["date"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];

  $fichero = 'database.txt';
  $database = file_get_contents($fichero);
  $database .= $nombre."\n\r".$date."\n\r".$email."\n\r".$tel."\n\r"."\n\r";
  if( file_put_contents($fichero, $database) != true ){
    echo "error";
  }else{
    echo "ok";
  }

?>