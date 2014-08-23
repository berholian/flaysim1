<!doctype html>
<html lang="en">
  <head>
  <!--[if lt IE 9]><script src="//ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>![endif]-->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/icon.jpg">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="UTF-8">
    <title>flysim index</title>

    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jarallax-0.2.min.js"></script>
<!--    <script src="js/jarallax-0.2.3.min.js"></script>-->
    <script src="js/main.min.js"></script>

      <script>
        init = function(){
          /*alert('init fuction work');*/
          var jarallax = new Jarallax();
          jarallax.addAnimation('.dark',[{progress:'0%', top:'100%'},{progress:'100%', top:'0%'}]);
          jarallax.addAnimation('.cloud1',[{progress:'0%', top:'120%'},{progress:'100%', top:'-20%'}]);
          jarallax.addAnimation('.cloud2',[{progress:'0%', top:'100%'},{progress:'100%', top:'-10%'}]);
          jarallax.addAnimation('.cloud3',[{progress:'0%', top:'80%'},{progress:'100%', top:'10%'}]);
          jarallax.addAnimation('.cloud4',[{progress:'0%', top:'70%'},{progress:'100%', top:'20%'}]);
          jarallax.addAnimation('.stela',[{progress:'0%', top:'40%'},{progress:'100%', top:'10%'}]);
        }
      </script>
  </head>

  <body class="parallax-bg" onload="init()">

    <?php include('header_home.php') ?>

      <div class="parallax">
<!--        <canvas id="stela" width= '2200px' height="24px"></canvas>-->
        <div class="stela"><div class="dot"></div><div class="ident"></div></div>
<!--        <div class="stela"><div class="dot"></div><div class="ident"></div></div>-->
        <div class="carte"></div>
        <div class="dark"></div>
        <div class="cloud4"></div>
        <div class="cloud3"></div>
        <div class="cloud2"></div>
        <div class="cloud1"></div>
      </div>

      <!--<?php /*include('footer.php')*/ ?> incluir con JQ desde el boton-->

    </div>

    <script src="js/nav.min.js"></script>
    <script src="js/varios.min.js"></script>
    <script src="js/main_scrollpath.min.js"></script>
    <script src="js/lib/prefixfree.min.js"></script>
    <script src="js/lib/jquery.easing.min.js"></script>
    <script src="js/jquery.scrollpath.min.js"></script>
    <script>

      $('.dot').each( coloca )

      function coloca (i)
      {
        var demora = 5000 + (i * 70000)
        $(this).delay(demora).animate({ width: 2000 }, 180000);
      }

    </script>
  </body>
</html>