/*-----------------/ menu carta \--------------------*/

$(document).ready(function(){

//  var campos=$("#reserva_form input");

    $("#reserva_form").submit(function(e){

        e.preventDefault();

        var form = $(this);
        var datos = form.serialize();
        var url = form.attr( "action" );

        var sending = $.post( url, datos );

        sending.done(function( data ){
            if(data=="ok"){
                $("span.msg").html( "Sus datos se han guardado correctamente" );
                $("span.msg").removeClass("error");
                $("span.msg").addClass("success");
//                campos.val()="";
            }else{
                $("span.msg").html( "No se han podido guardar sus datos. Inténtelo más tarde." );
                $("span.msg").removeClass("success");
                $("span.msg").addClass("error");
            }
        });

        sending.fail(function(){
            $("span.msg").html( "Imposible conectar. Revise su conexión a internet." );
            $("span.msg").removeClass("success");
            $("span.msg").addClass("error");
        });

    });

/*-------------------/  JQ carta cursos \---------------------------------*/

    $('.carta ul').hide();

    $('.paper').on('click', function(){
        $('.carta ul').hide(900);

        var cual = $(this).find("h4 a").attr('data-destino');

        if($(cual).attr('class') == 'desplegado'){
            $(cual).removeClass('desplegado');
        }else{
            $(cual).slideDown(900).addClass('desplegado');
        }
    });


/*-------------------/  JQ especialidad:before  \---------------------------------*/

    $('.deco:before').toggle();

    $('.especialidad li').on('click', function(){

        var cual = $(this).find("li").attr('class');

        $(this).addClass('deco');
        
        if($(cual).attr('class') == 'deco'){
            $(cual).removeClass('deco');
        }else{
            $(cual).addClass('checked');
        }
    });
});

/*----------------------/ flipster-responsive-componentes-reales\-----------------------------------------*/

  function setGaleryCompReal(){
      var flipMv = '<div class="galeria">componentes reales</div> <ul class="marco" style="width:210px!important;height:150px!important;"><li><img src="images/flysim_galerys/Componentes/Foto1Reales210.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto2Reales210.jpg"></li> <li><img src="images/flysim_galerys/Componentes/Foto3Reales210.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto4Reales210.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto5Reales210.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

      var flipTablet = '<div class="galeria">componentes reales</div> <ul class="marco" style="width:420px!important;height:300px!important"><li><img src="images/flysim_galerys/Componentes/Foto1Reales420.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto2Reales420.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto3Reales420.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto4Reales420.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto5Reales420.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

      var flipDesk = '<div class="galeria">componentes reales</div> <ul class="marco" style="width:630px!important;height:450px!important"><li><img src="images/flysim_galerys/Componentes/Foto1Reales630.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto2Reales630.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto3Reales630.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto4Reales630.jpg"></li><li><img src="images/flysim_galerys/Componentes/Foto5Reales630.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

      var winWidth=$('html').width();

        if (winWidth<=564) {
            $('.flipster#compReal').html( flipMv );
          }else if (winWidth>564 && winWidth<1500) {
            $('.flipster#compReal').html( flipTablet );
          }else{
            $('.flipster#compReal').html( flipDesk );
          }
        }


/*---------/ flipster-responsive mantenimiento_ampliación \-----------------------------------------*/

  function setGaleryMantAmp(){
      var flipMv = '<div class="galeria">mantenimiento y ampliación</div> <ul class="marco" style="width:210px!important;height:150px!important"><li><img src="images/flysim_galerys/Mantenimiento/Foto1Manteni210.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto2Manteni210.jpg"></li> <li><img src="images/flysim_galerys/Mantenimiento/Foto3Manteni210.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto4Manteni210.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto5Manteni210.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

      var flipTablet = '<div class="galeria">mantenimiento y ampliación</div> <ul class="marco" style="width:420px!important;height:300px!important"><li><img src="images/flysim_galerys/Mantenimiento/Foto1Manteni420.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto2Manteni420.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto3Manteni420.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto4Manteni420.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto5Manteni420.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

      var flipDesk = '<div class="galeria">mantenimiento y ampliación</div> <ul class="marco" style="width:630px!important;height:450px!important"><li><img src="images/flysim_galerys/Mantenimiento/Foto1Manteni630.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto2Manteni630.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto3Manteni630.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto4Manteni630.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto5Manteni630.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

      var winWidth=$('html').width();

        if (winWidth<=564) {
            $('.flipster#mantAmp').html( flipMv );
          }else if (winWidth>564 && winWidth<1500) {
            $('.flipster#mantAmp').html( flipTablet );
          }else{
            $('.flipster#mantAmp').html( flipDesk );
          }
        }


/*--------/ flipster-responsive sim_personaliz \-----------------------------------------*/

  function setGalerySimPer(){
      var flipMv = '<div class="galeria">simuladores personalizados</div> <ul class="marco" style="width:210px!important;height:150px!important;-webkit-padding-start: 0px!important;"> <li><img src="images/flysim_galerys/Simuladores/Fotos1simus210.jpg"></li> <li><img src="images/flysim_galerys/Simuladores/Fotos2simus210.jpg"></li> <li><img src="images/flysim_galerys/Simuladores/Fotos3simus210.jpg"></li> <li><img src="images/flysim_galerys/Simuladores/Fotos4simus210.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos5simus210.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos6simus210.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos7simus210.jpg"></li> </ul> <div class="volver"><a href="desarrollo.php">volver</a></div>';

      var flipTablet = '<div class="galeria">simuladores personalizados</div> <ul class="marco" style="width:420px!important;height:300px!important"><li><img src="images/flysim_galerys/Simuladores/Fotos1simus420.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos2simus420.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos3simus420.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos4simus420.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos5simus420.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos6simus420.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos7simus420.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

      var flipDesk = '<div class="galeria">simuladores personalizados</div> <ul class="marco" style="width:630px!important;height:450px!important"><li><img src="images/flysim_galerys/Simuladores/Fotos1simus630.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos2simus630.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos3simus630.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos4simus630.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos5simus630.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos6simus630.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos7simus630.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

      var winWidth=$('html').width();

        if (winWidth<=564) {
            $('.flipster#simPer').html( flipMv );
          }else if (winWidth>564 && winWidth<1500) {
            $('.flipster#simPer').html( flipTablet );
          }else{
            $('.flipster#simPer').html( flipDesk );
          }
        }










/*----------------------/ flipster-responsive (english-block) componentes-reales\-----------------------------------------*/

  function setGaleryCompRealEn(){
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
        }


/*---------/ flipster-responsive (english-block) mantenimiento_ampliación \-----------------------------------------*/

  function setGaleryMantAmpEn(){
      var flipMv = '<div class="galeria">maintenance and updates</div> <ul class="marco" style="width:210px!important;height:150px!important"><li><img src="images/flysim_galerys/Mantenimiento/Foto1Manteni210.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto2Manteni210.jpg"></li> <li><img src="images/flysim_galerys/Mantenimiento/Foto3Manteni210.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto4Manteni210.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto5Manteni210.jpg"></li></ul><div class="volver"><a href="development.php">back</a></div>';

      var flipTablet = '<div class="galeria">maintenance and updates</div> <ul class="marco" style="width:420px!important;height:300px!important"><li><img src="images/flysim_galerys/Mantenimiento/Foto1Manteni420.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto2Manteni420.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto3Manteni420.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto4Manteni420.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto5Manteni420.jpg"></li></ul><div class="volver"><a href="development.php">back</a></div>';

      var flipDesk = '<div class="galeria">maintenance and updates</div> <ul class="marco" style="width:630px!important;height:450px!important"><li><img src="images/flysim_galerys/Mantenimiento/Foto1Manteni630.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto2Manteni630.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto3Manteni630.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto4Manteni630.jpg"></li><li><img src="images/flysim_galerys/Mantenimiento/Foto5Manteni630.jpg"></li></ul><div class="volver"><a href="development.php">back</a></div>';

      var winWidth=$('html').width();

        if (winWidth<=564) {
            $('.flipster#mantAmp_en').html( flipMv );
          }else if (winWidth>564 && winWidth<1500) {
            $('.flipster#mantAmp_en').html( flipTablet );
          }else{
            $('.flipster#mantAmp_en').html( flipDesk );
          }
        }


/*--------/ flipster-responsive (english-block) sim_personaliz \-----------------------------------------*/

  function setGalerySimPerEn(){
      var flipMv = '<div class="galeria">customized simulators on demand</div> <ul class="marco" style="width:210px!important;height:150px!important;-webkit-padding-start: 0px!important;"> <li><img src="images/flysim_galerys/Simuladores/Fotos1simus210.jpg"></li> <li><img src="images/flysim_galerys/Simuladores/Fotos2simus210.jpg"></li> <li><img src="images/flysim_galerys/Simuladores/Fotos3simus210.jpg"></li> <li><img src="images/flysim_galerys/Simuladores/Fotos4simus210.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos5simus210.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos6simus210.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos7simus210.jpg"></li> </ul> <div class="volver"><a href="development.php">back</a></div>';

      var flipTablet = '<div class="galeria">customized simulators on demand</div> <ul class="marco" style="width:420px!important;height:300px!important"><li><img src="images/flysim_galerys/Simuladores/Fotos1simus420.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos2simus420.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos3simus420.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos4simus420.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos5simus420.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos6simus420.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos7simus420.jpg"></li></ul><div class="volver"><a href="development.php">back</a></div>';

      var flipDesk = '<div class="galeria">customized simulators on demand</div> <ul class="marco" style="width:630px!important;height:450px!important"><li><img src="images/flysim_galerys/Simuladores/Fotos1simus630.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos2simus630.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos3simus630.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos4simus630.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos5simus630.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos6simus630.jpg"></li><li><img src="images/flysim_galerys/Simuladores/Fotos7simus630.jpg"></li></ul><div class="volver"><a href="development.php">back</a></div>';

      var winWidth=$('html').width();

        if (winWidth<=564) {
            $('.flipster#simPer_en').html( flipMv );
          }else if (winWidth>564 && winWidth<1500) {
            $('.flipster#simPer_en').html( flipTablet );
          }else{
            $('.flipster#simPer_en').html( flipDesk );
          }
        }


/*----------Q font-size "adjust" (body)  ---------------

  function setFontSize()
    {
        var winWidth=$('html').width();
                    switch (winWidth) {
                      case winWidth<600:
                      fontSize=14px;
                      break;

                      case winWidth>600 and winWidth<800:
                      fontSize=16px;
                      break;

                      default:
                      fontSize=18px;
                      break; }

        $('body').css('font-size',fontSize);
    }*/

/*----------------/ control de luz \--------------------


window.addEventListener('devicelight', function(e) {
  var lux = e.value;

  if (lux < 50) { // luz tenue
    document.body.className = 'tenue';
  }
  if (lux >= 50 && lux <= 1500) { //luz normal
    document.body.className = 'normal';
  }
  if (lux > 1500)  { // mucha luz
    document.body.className = 'luminoso';
  } 
});*/

/*----------------/ parallax Y \------------------------*/


/*var navegador = navigator.userAgent;
if (navigator.userAgent.indexOf('MSIE') !=-1) {} else if (navigator.userAgent.indexOf('Firefox') !=-1) {
   var cSc;

    
    jQuery(document).ready(function($){

    
        $(document).on('scroll', gestorScroll);
        
        function gestorScroll ()
        {
            cSc = $(document).scrollTop();
            $('.parallax').each(posicionFondo);
        }
        
        
        function posicionFondo ()
        {
            var ventana_ancho, altura_adicional;
            ventana_ancho=$(window).width();
            if(ventana_ancho>1000){
                    altura_adicional=150;
                }else{
                    altura_adicional;
                }
            var distanciaSuperior = $(this).offset().top;
            $(this).css({ backgroundPosition: 'center '+(((cSc-distanciaSuperior)*0.4)-altura_adicional)+'px' 
        });
        }

    });
   
} else if (navigator.userAgent.indexOf('Chrome') !=-1) {
    var cSc;

    
    jQuery(document).ready(function($){

    
        $(document).on('scroll', gestorScroll);
        
        function gestorScroll ()
        {
            cSc = $(document).scrollTop();
            $('.parallax').each(posicionFondo);
        }
        
        
        function posicionFondo ()
        {
            var ventana_ancho, altura_adicional;
            ventana_ancho=$(window).width();
            if(ventana_ancho>900){
                    altura_adicional=200;
                }else{
                    altura_adicional=0;
                }
            var distanciaSuperior = $(this).offset().top;
            $(this).css({ backgroundPosition: 'center '+(((cSc-distanciaSuperior)*0.5)-altura_adicional)+'px' 
        });
        }

    });
}*/