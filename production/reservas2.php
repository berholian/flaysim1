<?php

    include('admin/classes/User.php');

    $data = array( "nombre" => $_POST["nombre"], "consulta" => $_POST["consulta"], "email" => $_POST["email"], "tel" => $_POST["tel"] );

        $user->storeReserve($data);

    $user = new User();

    if( $user->storeReserve('database.txt', $data) == true ){

        $param = array("destinatario"=>$data["email"],"asunto"=>"reservaRest","cuerpo"=>"Su consulta se ha realizado correctamente. Le responderemos lo antes posible."."\n\r"."<a href='http://flysim-ng.com'>FLYSIM</a>");

        $user->sendEmail($param);


    }else{

        $param = array("destinatario"=>$data["email"],"asunto"=>"reservaRest","cuerpo"=>"No se ha podido realizar su consulta. Disculpe las molestias"."\n\r"."<a href='http://flysim-ng.com'>FLYSIM</a>");

        $user->sendEmail($param);

   }


?>