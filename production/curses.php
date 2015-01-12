<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon1.png">
    <meta charset="UTF-8">
    <title>Curses FlySim</title>
</head>

<body class="parallax-bg cursos">
<!--  <div class="cursos"></div>-->
  <div class="velo"></div>
  <div class="logo" style=" background-color: -webkit-gradient(radial, 0 0, 0 100%, from(black), to(transparent));
        background-color: -webkit-radial-gradient(black, transparent);
        background-color: -moz-radial-gradient(black, transparent);
        background-color: -o-radial-gradient(black, transparent);
        background-color: radial-gradient(black, transparent);">
    <a href="home_en.php"></a>
  </div>

<!--    <?php /*include('header.php')*/ ?>-->

    <section>
      <h2 class="tituCurso">training courses available now</h2>
      <div class="row carta">
        <?php
            include('admin/inc/config.php');
            include('admin/classes/User.php');
        ?>

        <div class="paper col4 curss">
          <h4>
            <a data-destino="#virtual_flight_beginners">virtual flight for beginners</a>
          </h4>
          <ul id="virtual_flight_beginners">

            <?php
                $user = new User();
                $virtual_flight_beginners = $user->getMenu('virtual_flight_beginners');
                foreach ($virtual_flight_beginners as $curso) {
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
            <a data-destino="#flight_planning_navigation">flight planning and navigation</a>
          </h4>
          <ul id="flight_planning_navigation">

            <?php
              $user = new User();
              $flight_planning_navigation = $user->getMenu('flight_planning_navigation');
              foreach ($flight_planning_navigation as $monografico) {
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
            <a data-destino="#instrumental_flight">instrumental flight</a>
          </h4>
          <ul id="instrumental_flight">

            <?php
                $user = new User();
                $instrumental_flight = $user->getMenu('instrumental_flight');
                foreach ($instrumental_flight as $curso) {
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
            <a data-destino="#Online_flight">communications and ON-LINE flight</a>
          </h4>
          <ul id="Online_flight">

            <?php
                $user = new User();
                $Online_flight = $user->getMenu('Online_flight');
                foreach ($Online_flight as $curso) {
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
            <a data-destino="#garmin_avionics_beginners">garmin avionics for beginners</a>
          </h4>
          <ul id="garmin_avionics_beginners">

            <?php
                $user = new User();
                $garmin_avionics_beginners = $user->getMenu('garmin_avionics_beginners');
                foreach ($garmin_avionics_beginners as $curso) {
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
            <a data-destino="#garmin_avionics_advanced">garmin Avionics advanced</a>
          </h4>
          <ul id="garmin_avionics_advanced">

            <?php
                $user = new User();
                $garmin_avionics_advanced = $user->getMenu('garmin_avionics_advanced');
                foreach ($garmin_avionics_advanced as $curso) {
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
            <a data-destino="#garmin_instrumental_flight">garmin instrumental flight</a>
          </h4>
          <ul id="garmin_instrumental_flight">

            <?php
                $user = new User();
                $garmin_instrumental_flight = $user->getMenu('garmin_instrumental_flight');
                foreach ($garmin_instrumental_flight as $curso) {
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
            <a data-destino="#B737800NG_baptism">B737-800NG air baptism</a>
          </h4>
          <ul id="B737800NG_baptism">

            <?php
                $user = new User();
                $B737800NG_baptism = $user->getMenu('B737800NG_baptism');
                foreach ($B737800NG_baptism as $curso) {
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
            <a data-destino="#overcome_fair_flying">overcome fair of flying</a>
          </h4>
          <ul id="overcome_fair_flying">

            <?php
                $user = new User();
                $overcome_fair_flying = $user->getMenu('overcome_fair_flying');
                foreach ($overcome_fair_flying as $curso) {
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
            <a data-destino="#B737800NG_basic_training">B737-800NG basic training</a>
          </h4>
          <ul id="B737800NG_basic_training">

            <?php
                $user = new User();
                $B737800NG_basic_training = $user->getMenu('B737800NG_basic_training');
                foreach ($B737800NG_basic_training as $curso) {
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

</body>
</html>