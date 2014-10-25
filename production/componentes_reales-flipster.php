<!doctype html>

  <head>
  <html lang="en">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon1.png">
    <meta charset="UTF-8">
    <title>desarrollo flysim</title>
  </head>

  <body class="desarrollo">

      <?php include('header.php') ?>

    <section>
      <h2>desarrollo</h2>
      <!-- flipster-->
      <div id="Main-Content">
        <div class="Container">
          <!-- Flipster List -->
          <div class="flipster">
            <div class="galeria">componentes reales</div>
            <ul class="marco">
              <li>
                <img class="components1" src="images/Sport-1.jpg">
              </li>
              <li>
                <img class="components2" src="images/Sport-2.jpg">
              </li>
              <li>
                <img class="components3" src="images/Sport-3.jpg">
              </li>
              <li>
                <img class="components4" src="images/Sport-4.jpg">
              </li>
              <li>
                <img class="components5" src="images/Sport-5.jpg">
              </li>
            </ul>
            <div class="volver">
              <a href="desarrollo.php">volver</a>
            </div>
          </div>
          <!-- End Flipster List -->
        </div>
      </div>
      <!-- End flipster-->
    </section>

          <?php include('footer.php') ?>

      <script src="js/jquery-2.0.3.min.js"></script>
      <script src="js/jquery.flipster.min.js"></script>
<!--      <script>

        $( "#componentes_reales" ).append( ".galery_3" );

      </script>-->

      <script>

        $(function(){ 
          $(".flipster").flipster({
            style: 'carousel'
          });
        });

      </script>
  </body>
</html>