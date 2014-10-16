<!doctype html>

  <head>
    <html lang="en">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon1.png">
    <meta charset="UTF-8">
    <title>mantenimiento y ampliación flysim</title>
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
            <div class="galeria">mantenimiento y ampliación</div>
            <ul class="marco">
              <li>
                <img class="mantenimiento1" src="images/Sport-1_630.png">
              </li>
              <li>
                <img class="mantenimiento2" src="images/Sport-1_630.png">
              </li>
              <li>
                <img class="mantenimiento3" src="images/Sport-1_630.png">
              </li>
              <li>
                <img class="mantenimiento4" src="images/Sport-1_630.png">
              </li>
              <li>
                <img class="mantenimiento5" src="images/Sport-1_630.png">
              </li>
            </ul>
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