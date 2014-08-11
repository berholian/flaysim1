<?php
   
    include('admin/classes/User.php');

    $data = array( "nombre" => $_POST["nombre"], "date" => $_POST["date"], "email" => $_POST["email"], "tel" => $_POST["tel"] );

        $user->storeReserve($data);

    $user = new User();
   
    if( $user->storeReserve('database.txt', $data) == true ){
   
        $param = array("destinatario"=>$data["email"],"asunto"=>"reservaRest","cuerpo"=>"Su reserva se ha realizado correctamente. Le esperamos."."\n\r"."<a href='http://berholiannmckleder.besaba.com/production'>Restaurante</a>");
       
        $user->sendEmail($param);

   
    }else{
   
        $param = array("destinatario"=>$data["email"],"asunto"=>"reservaRest","cuerpo"=>"No se ha podido realizar su reserva. Disculpe las molestias"."\n\r"."<a href='http://berholiannmckleder.besaba.com/production'>Restaurante L.F</a>");
       
        $user->sendEmail($param);
       
   }


?>