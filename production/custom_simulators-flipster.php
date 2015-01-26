<!doctype html>

  <head>
    <html lang="en">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon1.png">
    <meta charset="UTF-8">
    <title>custom simulators flysim</title>
  </head>

  <body class="parallax-bg desarrollo">
<!--    <div class="desarrollo"></div>-->

      <?php include('header_en.php') ?>

    <section>
      <h2>development</h2>
      <!-- flipster-->
      <div id="Main-Content">
        <div class="Container">
          <!-- Flipster List -->
          <div class="flipster" id="simPer_en">

            <div class="volver">
              <a href="development.php">back</a>
            </div>
          </div>
          <!-- End Flipster List -->
        </div>
      </div>
      <!-- End flipster-->
    </section>

          <?php include('footer.php') ?>

      <script src="js/jquery.flipster.min.js"></script>
<!--      <script>

        $( "#componentes_reales" ).append( ".galery_3" );

      </script>-->

      <script>
        setGalerySimPerEn();

        $(function(){ 
          $(".flipster").flipster({
            style: 'carousel'
          });
        });

      </script>
      <script src="js/galery-responsive.min.js"></script>
  </body>
</html>