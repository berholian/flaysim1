<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon1.png">
    <meta charset="UTF-8">
    <title>Cursos FlySim</title>
</head>

<body>

  <div class="cursos">
    <?php include('header.php') ?>
    <section>
      <h2>cursos</h2>
      <div class="row carta">
        <?php
            include('admin/inc/config.php');
            include('admin/classes/User.php');
        ?>

        <div class="paper col4 curss">
          <h4>
            <a data-destino="#instruccion_basicaB737">instrucción básica b737-800NG</a>
          </h4>
          <ul id="instruccion_basicaB737">

            <?php
                $user = new User();
                $instruccion_basicaB737 = $user->getMenu('instruccion_basicaB737');
                foreach ($instruccion_basicaB737 as $curso) {
                    $template = file_get_contents('templates/menu_item.html');
                    $template = str_replace('#name#', $curso["name"], $template);
                    $template = str_replace('#description#', $curso["description"], $template);
                    echo $template;
                }
            ?>

          </ul>
        </div>

        <div class="paper col4 curss">
          <h4>
            <a data-destino="#iniciacion_vueloVirtual">iniciación al vuelo virtual</a>
          </h4>
          <ul id="iniciacion_vueloVirtual">

            <?php
                $user = new User();
                $iniciacion_vueloVirtual = $user->getMenu('iniciacion_vueloVirtual');
                foreach ($iniciacion_vueloVirtual as $curso) {
                    $template = file_get_contents('templates/menu_item.html');
                    $template = str_replace('#name#', $curso["name"], $template);
                    $template = str_replace('#description#', $curso["description"], $template);
                    echo $template;
                }
            ?>

          </ul>
        </div>

        <div class="paper col4 curss">
          <h4>
            <a data-destino="#planificacion_vueloNav">planificación vuelo y navegación</a>
          </h4>
          <ul id="planificacion_vueloNav">

            <?php
              $user = new User();
              $planificacion_vueloNav = $user->getMenu('planificacion_vueloNav');
              foreach ($planificacion_vueloNav as $monografico) {
                  $template = file_get_contents('templates/menu_item.html');
                  $template = str_replace('#name#', $monografico["name"], $template);
                  $template = str_replace('#description#', $monografico["description"], $template);
                  echo $template;
              }
            ?>

          </ul>
        </div>

        <div class="paper col4 curss">
          <h4>
            <a data-destino="#vueloInstrumental">vuelo instrumental</a>
          </h4>
          <ul id="vueloInstrumental">

            <?php
                $user = new User();
                $vueloInstrumental = $user->getMenu('vueloInstrumental');
                foreach ($vueloInstrumental as $curso) {
                    $template = file_get_contents('templates/menu_item.html');
                    $template = str_replace('#name#', $curso["name"], $template);
                    $template = str_replace('#description#', $curso["description"], $template);
                    echo $template;
                }
            ?>

          </ul>
        </div>

        <div class="paper col4 curss">
          <h4>
            <a data-destino="#vuelo_Online">comunicaciones y vuelo on-line</a>
          </h4>
          <ul id="vuelo_Online">

            <?php
                $user = new User();
                $vuelo_Online = $user->getMenu('vuelo_Online');
                foreach ($vuelo_Online as $curso) {
                    $template = file_get_contents('templates/menu_item.html');
                    $template = str_replace('#name#', $curso["name"], $template);
                    $template = str_replace('#description#', $curso["description"], $template);
                    echo $template;
                }
            ?>

          </ul>
        </div>

        <div class="paper col4 curss">
          <h4>
            <a data-destino="#adaptacion_avionica_garmin">adaptación aviónica garmin</a>
          </h4>
          <ul id="adaptacion_avionica_garmin">

            <?php
                $user = new User();
                $adaptacion_avionica_garmin = $user->getMenu('adaptacion_avionica_garmin');
                foreach ($adaptacion_avionica_garmin as $curso) {
                    $template = file_get_contents('templates/menu_item.html');
                    $template = str_replace('#name#', $curso["name"], $template);
                    $template = str_replace('#description#', $curso["description"], $template);
                    echo $template;
                }
            ?>

          </ul>
        </div>

        <div class="paper col4 curss">
          <h4>
            <a data-destino="#instruccion_avanzada_garmin">instrucción avanzada garmin</a>
          </h4>
          <ul id="instruccion_avanzada_garmin">

            <?php
                $user = new User();
                $instruccion_avanzada_garmin = $user->getMenu('instruccion_avanzada_garmin');
                foreach ($instruccion_avanzada_garmin as $curso) {
                    $template = file_get_contents('templates/menu_item.html');
                    $template = str_replace('#name#', $curso["name"], $template);
                    $template = str_replace('#description#', $curso["description"], $template);
                    echo $template;
                }
            ?>

          </ul>
        </div>

        <div class="paper col4 curss">
          <h4>
            <a data-destino="#vuelo_instrumental_garmin">vuelo instrumental garmin</a>
          </h4>
          <ul id="vuelo_instrumental_garmin">

            <?php
                $user = new User();
                $vuelo_instrumental_garmin = $user->getMenu('vuelo_instrumental_garmin');
                foreach ($vuelo_instrumental_garmin as $curso) {
                    $template = file_get_contents('templates/menu_item.html');
                    $template = str_replace('#name#', $curso["name"], $template);
                    $template = str_replace('#description#', $curso["description"], $template);
                    echo $template;
                }
            ?>

          </ul>
        </div>

        <div class="paper col4 curss">
          <h4>
            <a data-destino="#bautismoB737_800NG">bautismo en b737-800NG</a>
          </h4>
          <ul id="bautismoB737_800NG">

            <?php
                $user = new User();
                $bautismoB737_800NG = $user->getMenu('bautismoB737_800NG');
                foreach ($bautismoB737_800NG as $curso) {
                    $template = file_get_contents('templates/menu_item.html');
                    $template = str_replace('#name#', $curso["name"], $template);
                    $template = str_replace('#description#', $curso["description"], $template);
                    echo $template;
                }
            ?>

          </ul>
        </div>

        <div class="paper col4 curss">
          <h4>
            <a data-destino="#superar_miedoVolar">superar el miedo a volar</a>
          </h4>
          <ul id="superar_miedoVolar">

            <?php
                $user = new User();
                $superar_miedoVolar = $user->getMenu('superar_miedoVolar');
                foreach ($superar_miedoVolar as $curso) {
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

    <?php include('footer.php') ?>
  </div>

</body>
</html>