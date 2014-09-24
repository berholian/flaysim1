<!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!--[if lt IE 9]><script src="//ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>![endif]-->
<head>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="icon" href="images/favicon1.png">
  <meta charset="UTF-8">
  <title>desarrollo flysim</title>
</head>

  <body class="desarrollo">

      <?php include('header.php') ?>

      <section>
        <h2>desarrollo</h2>
        <div class="row carta">
          <?php
              include('admin/inc/config.php');
              include('admin/classes/User.php');
          ?>

          <div class="paper col8">
            <h4>
              <a data-destino="#sim_personaliz">simuladores personalizados</a>
            </h4>
            <ul id="sim_personaliz">

              <?php
                  $user = new User();
                  $sim_personaliz = $user->getMenu('sim_personaliz');
                  foreach ($sim_personaliz as $curso) {
                      $template = file_get_contents('templates/menu_item.html');
                      $template = str_replace('#name#', $curso["name"], $template);
                      $template = str_replace('#description#', $curso["description"], $template);
                      echo $template;
                  }
              ?>

            </ul>
          </div>

          <div class="paper col8">
            <h4>
              <a data-destino="#mantenimiento_ampliacion">mantenimiento y ampliación</a>
            </h4>
            <ul id="mantenimiento_ampliacion">

              <?php
                  $user = new User();
                  $mantenimiento_ampliacion = $user->getMenu('mantenimiento_ampliacion');
                  foreach ($mantenimiento_ampliacion as $curso) {
                      $template = file_get_contents('templates/menu_item.html');
                      $template = str_replace('#name#', $curso["name"], $template);
                      $template = str_replace('#description#', $curso["description"], $template);
                      echo $template;
                  }
              ?>

            </ul>
          </div>

          <div class="paper col8">
            <h4>
              <a data-destino="#componentes_reales">componentes reales</a>
            </h4>
            <ul id="componentes_reales">

              <?php
                  $user = new User();
                  $componentes_reales = $user->getMenu('componentes_reales');
                  foreach ($componentes_reales as $curso) {
                      $template = file_get_contents('templates/menu_item.html');
                      $template = str_replace('#name#', $curso["name"], $template);
                      $template = str_replace('#description#', $curso["description"], $template);
                      echo $template;
                  }
              ?>

            </ul>
          </div>
        </div>
      </section>

          <!-- flipster-->
      <div id="Main-Content">
        <div class="Container">
          <!-- Flipster List -->
          <div class="flipster">
            <div class="galeria">galería</div>
            <ul class="marco">
              <li>
                <img src="images/Sport-1.jpeg">
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
          </div>
          <!-- End Flipster List -->
        </div>
      </div>
          <!-- End flipster-->

      <?php include('footer.php') ?>

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="js/jquery.flipster.min.js"></script>
      <script>

        $(function(){ 
          $(".flipster").flipster({
            style: 'carousel'
          });
        });

      </script>
  </body>
</html>