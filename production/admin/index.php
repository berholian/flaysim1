<?php
    include('inc/config.php');
    include('inc/alerts.php');

    @session_start();
    if( isset($_SESSION["login"]) AND $_SESSION["login"]=="ok" ){
        header('location: admin.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>admin</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <section>
                <h1>admin</h1>
                <?php echo printAlerts(); ?>
                <form class="login" action="login.php" method="post">
                    <label>user: </label>
                    <input type="text" name="email" value="">
                    <label>password: </label>
                    <input type="text" name="pass" value="">
                    <input type="submit" value="login">
                    <span>la ille de fragance</span>
                </form>
            </section>
        </div>
    </header>
    <footer>
        <script src="../js/jquery-2.0.3.min.js"></script>
        <script>

            $(document).ready(function(){                     
            
                
                $('button').on('click', function(){
                    
                    var cual = $(this).find("").attr('data-dismiss');

                    if($(cual).attr('class') == 'alert'){
                        $(cual).fideOut(900).hide;                  
                                        
                });

            });

        </script>
    </footer>
</body>
</html>