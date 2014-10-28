<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="images/favicon1.png">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="UTF-8">
    <title>flysim index</title>
  </head>

  <body class="parallax-bg" onload="init()">

      <div class="logoCarte"></div>

    <?php include('header_home.php') ?>

      <div class="carte"></div>

      <div class="parallax">
<!--        <canvas id="stela" width= '2200px' height="24px"></canvas>-->
        <div class="stela">
          <div class="dot"></div>
          <div class="ident"></div>
        </div>
        <div class="stela">
          <div class="dot sec"></div>
          <div class="identDos"></div>
        </div>
<!--        <div class="dark"></div>
        <div class="cloud4"></div>
        <div class="cloud3"></div>
        <div class="cloud2"></div>
        <div class="cloud1"></div>-->
      </div>

<!--<?php /*include('footer.php')*/ ?>-->
    <footer>

      <section class="contacto">

        <ol>
          <li>--*********--</li>
          <li>jpuset@flaysim.com</li>
          <li>+33 1 322 45 65</li>
<!--          <div class="contact">
            <a href="contacto.php">contacto</a>
          </div>-->
        </ol>

        <ul class="social">
          <li>
            <a class="iconfont twitter" href="https://twitter.com/"></a>
          </li>
          <li>
            <a class="iconfont facebook" href="https://www.facebook.com/"></a>
          </li>
          <li>
            <a class="iconfont googleplus" href="https://plus.google.com/"></a>
          </li>
          <li>
            <a class="iconfont mail" href=""></a>
          </li>
        </ul>
      </section>

      <div class="develop">

        <div class="copyrigth">©2014 FlySIM
          <span>-*-*-*-*-*-</span>
        </div>

        <div class="development">
          <a href="https://www.linkedin.com/pub/jose-a-est%C3%A9vez/84/5aa/242">development</a>
        </div>

      </div>
    </footer>

    </div>

    <script>
      init = function(){
        /*alert('init fuction work');
        var jarallax = new Jarallax();
        jarallax.addAnimation('.dark',[{progress:'0%', top:'100%'},{progress:'100%', top:'0%'}]);
        jarallax.addAnimation('.cloud1',[{progress:'0%', top:'120%'},{progress:'100%', top:'-20%'}]);
        jarallax.addAnimation('.cloud2',[{progress:'0%', top:'100%'},{progress:'100%', top:'-10%'}]);
        jarallax.addAnimation('.cloud3',[{progress:'0%', top:'80%'},{progress:'100%', top:'10%'}]);
        jarallax.addAnimation('.cloud4',[{progress:'0%', top:'70%'},{progress:'100%', top:'20%'}]);
        jarallax.addAnimation('.stela',[{progress:'0%', top:'40%'},{progress:'100%', top:'10%'}]);*/
      }
    </script>
    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/nav.min.js"></script>
    <script src="js/varios.min.js"></script>
<!--    <script src="js/lib/prefixfree.min.js"></script>
    <script src="js/lib/jquery.easing.min.js"></script>-->
<!--    <script src="js/main_scrollpath.min.js"></script>-->
<!--    <script src="js/jquery.scrollpath.min.js"></script>-->
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jarallax-0.2.min.js"></script>
    <script src="js/jarallax-0.2.3b.min.js"></script>
<!--    <script src="js/main.min.js"></script>-->
    <script>/*-------------/ animación logo-carta \--------------*/

        $(".logoCarte").hide().delay(1000).fadeIn(2200).fadeOut(800);

        $("h1").hide().delay(3000).fadeIn(2000);

    </script>
    <script>

      $('.dot').each( coloca );
      $('.dot1').each( coloca );

      function coloca (i)
      {
        var demora = 300 + (i * 50000)
        $(this).delay(demora).animate({ width: 2200}, 100000);
      }

    </script>


  </body>
</html>