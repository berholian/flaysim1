<!doctype html>

  <head>
  <html lang="en">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon1.png">
    <meta charset="UTF-8">
    <title>real components flysim</title>
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
          <div class="flipster" id="compReal_en">

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

      <script src="js/jquery-2.0.3.min.js"></script>
      <script src="js/jquery.flipster.min.js"></script>

      <script>
      setGaleryCompRealEn();

        $(function(){ 
          $(".flipster").flipster({
            style: 'carousel'
          });
        });

      </script>
      <script src="js/galery-responsive.min.js"></script>
      <script>
/*----------------------/ flipster-responsive (english-block) componentes-reales\-----------------------------------------

        function setGaleryCompReal(){
            var flipMv = '<div class="galeria">real boeing 737 hardware </div> <ul class="marco" style="width:210px!important;height:150px!important;"><li><img src="images/flysim_galerys/Componentes/Foto1Reales210.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto2Reales210.jpg"></li> <li><img src="images/flysim_galerys/Componentes/Foto3Reales210.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto4Reales210.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto5Reales210.jpg"></li></ul><div class="volver"><a href="development.php">back</a></div>';

            var flipTablet = '<div class="galeria">real boeing 737 hardware </div> <ul class="marco" style="width:420px!important;height:300px!important"><li><img src="images/flysim_galerys/Componentes/Foto1Reales420.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto2Reales420.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto3Reales420.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto4Reales420.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto5Reales420.jpg"></li></ul><div class="volver"><a href="development.php">back</a></div>';

            var flipDesk = '<div class="galeria">real boeing 737 hardware </div> <ul class="marco" style="width:630px!important;height:450px!important"><li><img src="images/flysim_galerys/Componentes/Foto1Reales630.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto2Reales630.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto3Reales630.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto4Reales630.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto5Reales630.jpg"></li></ul><div class="volver"><a href="development.php">back</a></div>';

            var winWidth=$('html').width();

              if (winWidth<=564) {
                  $('.flipster#compReal_en').html( flipMv );
                }else if (winWidth>564 && winWidth<1500) {
                  $('.flipster#compReal_en').html( flipTablet );
                }else{
                  $('.flipster#compReal_en').html( flipDesk );
                }
              }*/
      </script>
  </body>
</html>