<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <link rel="icon" href="images/favicon1.png">
    <title>instruction flysim</title>
  </head>

  <body class="parallax-bg instruccion">
<!--    <div class="instruccion"></div>-->

    <?php include('header_en.php') ?>

    <section>
      <h2>instruction</h2>
        <div class="row carta">
            <?php
                include('admin/inc/config.php');
                include('admin/classes/User.php');
            ?>

          <div class="paper col8">
            <h4>
                <a data-destino="#overview">overview</a>
            </h4>
            <ul id="overview">

              <div class="descripcion"></div>

                <?php
                    $user = new User();
                    $overview = $user->getMenu('overview');
                    foreach ($overview as $curso) {
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
              <a data-destino="#cpl_atpl">CPL-ATPL</a>
            </h4>
            <ul id="cpl_atpl">
              <?php
                $user = new User();
                $cpl_atpl = $user->getMenu('cpl_atpl');
                foreach ($cpl_atpl as $monografico) {
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
              <a data-destino="#AEAMT">Aeronautical Engineers and Aircraft Maintenance Technicians</a>
            </h4>
            <ul id="AEAMT">
              <?php
                $user = new User();
                $AEAMT = $user->getMenu('AEAMT');
                foreach ($AEAMT as $monografico) {
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