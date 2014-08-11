<?php

    include('inc/config.php');
    include('inc/alerts.php');
    include('classes/User.php'); 

    @session_start();

    $emailErr = $passErr = false;

   if( !isset($_POST['email']) OR trim($_POST['email'])=="" ){
       
       $_SESSION['danger'] = 'email is empty';
       header('location: index.php');

   //si el pass está vacío o no existe
   }elseif( !isset($_POST['pass']) OR trim($_POST['pass'])=="" ){
       
       $_SESSION['danger'] = 'pass is empty';
       header('location: index.php');

   //hay email y pass
   }else{

       //si el email tiene estructura correcta
       if( preg_match( "/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST['email'] ) ){

           $email = $_POST['email'];
           $pass = $_POST['pass'];

           $user = new User();
           $login = $user->login($email, $pass);
           
           //login fallido
           if( $login === false OR $login === null ){
               
               $_SESSION["danger"] = 'access denied';
               header('location: index.php');

           //login ok
           }else{

               $_SESSION["success"] = 'welcome';
               header('location: admin.php');

           }

       //el email no tiene la estructura correcta
       }else{
           $_SESSION['danger'] = 'invalid email format';
           header('location: index.php');
       }
       
   }
    

?>