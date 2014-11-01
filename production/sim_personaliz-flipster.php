<!doctype html>

  <head>
    <html lang="en">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon1.png">
    <meta charset="UTF-8">
    <title>desarrollo flysim</title>
  </head>

  <body>
    <div class="desarrollo"></div>

      <?php include('header.php') ?>

    <section>
      <h2>desarrollo</h2>
      <!-- flipster-->
      <div id="Main-Content">
        <div class="Container">
          <!-- Flipster List -->
          <div class="flipster" id="simPer">
            <div class="galeria">simuladores personalizados</div>

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

      <script src="js/jquery.flipster.min.js"></script>
<!--      <script>

        $( "#componentes_reales" ).append( ".galery_3" );

      </script>-->

      <script>
        setGalerySimPer();

        $(function(){ 
          $(".flipster").flipster({
            style: 'carousel'
          });
        });

      </script>
<!--      <script>
        $(document).ready(function(){
          var flip_mv = '<ul class="marco" style="width:210px!important;height:150px!important"><li><img src="images/Sport-5_210.jpg"></li><li><img src="images/Sport-5_210.jpg"></li> <li><img src="images/Sport-5_210.jpg"></li><li><img src="images/Sport-5_210.jpg"></li><li><img src="images/Sport-5_210.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

          var flip_tablet = '<ul class="marco" style="width:420px!important;height:300px!important"><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

          var flip_desk = '<ul class="marco" style="width:630px!important;height:450px!important"><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

          var anchoPantalla = window.innerWidth;

          if( anchoPantalla<564 ){
            document.querySelector('.flipster.simPers').innerHTML = flip_mv;
          }else if( anchoPantalla>1700 ){
            document.querySelector('.flipster.simPers').innerHTML = flip_desk;
          }else{
            document.querySelector('.flipster.simPers').innerHTML = flip_tablet;
          }
        });
      </script>-->
  </body>
</html>