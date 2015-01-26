<!doctype html>

<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon1.png">
    <meta charset="UTF-8">
    <title>development flysim</title>
  </head>

  <body class="parallax-bg desarrollo">
<!--    <div class="desarrollo"></div>-->

    <?php include('header_en.php') ?>

    <section>
      <h2>development</h2>
      <div class="row carta">
        <?php
            include('admin/inc/config.php');
            include('admin/classes/User.php');
        ?>

        <div class="paper col8">
          <h4>
            <a data-destino="#custom_simulators">customized simulators on demand</a>
          </h4>
          <ul id="custom_simulators">

            <?php
                $user = new User();
                $custom_simulators = $user->getMenu('custom_simulators');
                foreach ($custom_simulators as $curso) {
                    $template = file_get_contents('templates/menu_item.html');
                    $template = str_replace('#name#', $curso["name"], $template);
                    $template = str_replace('#description#', $curso["description"], $template);
                    echo $template;
                }
            ?>
            <li class="enlace_galery">
              <a href="custom_simulators-flipster.php">galery</a>
            </li>
          </ul>
        </div>

        <div class="paper col8">
          <h4>
            <a data-destino="#maintenance_updates">maintenance and updates</a>
          </h4>
          <ul id="maintenance_updates">

            <?php
                $user = new User();
                $maintenance_updates = $user->getMenu('maintenance_updates');
                foreach ($maintenance_updates as $curso) {
                    $template = file_get_contents('templates/menu_item.html');
                    $template = str_replace('#name#', $curso["name"], $template);
                    $template = str_replace('#description#', $curso["description"], $template);
                    echo $template;
                }
            ?>
            <li class="enlace_galery">
              <a href="maintenance_expansion-flipster.php">galery</a>
            </li>
          </ul>
        </div>

        <div class="paper col8">
          <h4>
            <a data-destino="#real_hardware">real Boeing 737 hardware</a>
          </h4>
          <ul id="real_hardware">

            <?php
                $user = new User();
                $real_hardware = $user->getMenu('real_hardware');
                foreach ($real_hardware as $curso) {
                    $template = file_get_contents('templates/menu_item.html');
                    $template = str_replace('#name#', $curso["name"], $template);
                    $template = str_replace('#description#', $curso["description"], $template);
                    echo $template;
                }
            ?>
            <li class="enlace_galery">
              <a href="real_components-flipster.php">galery</a>
            </li>

          </ul>
        </div>
      </div>
    </section>

          <!-- flipster-->
<!--      <div id="Main-Content" class="galery_3">
        <div class="Container">-->
          <!-- Flipster List -->
<!--          <div class="flipster">
            <div class="galeria">galería</div>
            <ul class="marco">
              <li>
                <img src="images/Sport-1.jpeg">
              </li>
              <li>
                <img src="images/Sport-2.jpg">
              </li>
              <li>
                <img src="images/Sport-2.jpg">
              </li>
              <li>
                <img src="images/Sport-3.jpg">
              </li>
              <li>
                <img src="images/Sport-4.jpg">
              </li>
              <li>
                <img src="images/Sport-5.jpg">
              </li>
            </ul>
          </div>-->
          <!-- End Flipster List -->
<!--        </div>
      </div>-->
          <!-- End flipster-->

    <?php include('footer.php') ?>

    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/jquery.flipster.min.js"></script>
<!--      <script>

      $( "#componentes_reales" ).append( ".galery_3" );

    </script>

    <script>

      $(function(){ 
        $(".flipster").flipster({
          style: 'carousel'
        });
      });

    </script>-->
  </body>
</html>