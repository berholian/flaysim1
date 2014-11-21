<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <link rel="icon" href="images/favicon1.png">
    <title>instrucción flysim</title>
  </head>

  <body class="parallax-bg instruccion">
<!--    <div class="instruccion"></div>-->

    <?php include('header.php') ?>

    <section>
      <h2>instrucción</h2>
        <div class="row carta">
            <?php
                include('admin/inc/config.php');
                include('admin/classes/User.php');
            ?>

          <div class="paper col8">
            <h4>
                <a data-destino="#descripcion">descripción</a>
            </h4>
            <ul id="descripcion">

          <div class="descripcion"></div>

                <?php
                    $user = new User();
                    $descripcion = $user->getMenu('descripcion');
                    foreach ($descripcion as $curso) {
                        $template = file_get_contents('templates/menu_item.html');
                        $template = str_replace('#name#', $curso["name"], $template);
                        $template = str_replace('#description#', $curso["description"], $template);
                        echo $template;
                    }
                ?>
                <div class="companys"></div>

              </ul>
            </div>
            <div class="paper col8">
              <h4>
                <a data-destino="#alquilerSimulador_pilotos">pilotos comerciales</a>
              </h4>
              <ul id="alquilerSimulador_pilotos">
                <?php
                  $user = new User();
                  $alquilerSimulador_pilotos = $user->getMenu('alquilerSimulador_pilotos');
                  foreach ($alquilerSimulador_pilotos as $monografico) {
                      $template = file_get_contents('templates/menu_item.html');
                      $template = str_replace('#name#', $monografico["name"], $template);
                      $template = str_replace('#description#', $monografico["description"], $template);
                      echo $template;
                  }
                ?>
              </ul>
            </div>
            <div class="paper col8">
              <h4>
                <a data-destino="#alquilerSimulador_profesionales">pilotos aeronáuticos</a>
              </h4>
              <ul id="alquilerSimulador_profesionales">
                <?php
                  $user = new User();
                  $alquilerSimulador_profesionales = $user->getMenu('alquilerSimulador_profesionales');
                  foreach ($alquilerSimulador_profesionales as $monografico) {
                      $template = file_get_contents('templates/menu_item.html');
                      $template = str_replace('#name#', $monografico["name"], $template);
                      $template = str_replace('#description#', $monografico["description"], $template);
                      echo $template;
                  }
                ?>
              </ul>
            </div>
          </div>
      </section>

    <?php include('footer.php') ?>

<!--  </div>-->
</body>
</html>