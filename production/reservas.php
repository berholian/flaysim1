<?php

  $nombre = $_POST["nombre"];
  $tel = $_POST["tel"];
  $email = $_POST["email"];
  $consulta = $_POST["consulta"];

  $fichero = 'database.txt';
  $database = file_get_contents($fichero);
  $database .= $nombre."\n\r".$email."\n\r".$tel."\n\r".$consulta."\n\r"."\n\r";
  if( file_put_contents($fichero, $database) != true ){
    echo "error";
  }else{
    echo "ok";
    mail('j.a.esteveza1@gmail.com','prueba','contenido_prueba');
  }

?>