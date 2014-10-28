/*-----------------/ menu carta \--------------------*/

$(document).ready(function(){

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

/*-------------------/  JQ carta menu \---------------------------------*/

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

  var flipMv = '<ul class="marco" style="width:210px!important;height:150px!important"><li><img src="images/Sport-5_210.jpg"></li><li><img src="images/Sport-5_210.jpg"></li> <li><img src="images/Sport-5_210.jpg"></li><li><img src="images/Sport-5_210.jpg"></li><li><img src="images/Sport-5_210.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

  var flipTablet = '<ul class="marco" style="width:420px!important;height:300px!important"><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

  var flipDesk = '<ul class="marco" style="width:630px!important;height:450px!important"><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

  var anchoPantalla = window.innerWidth;

  if( anchoPantalla<564 ){
    document.querySelector('.flipster.compReal').innerHTML = flipMv;
  }else if( anchoPantalla>1700 ){
    document.querySelector('.flipster.compReal').innerHTML = flipDesk;
  }else{
    document.querySelector('.flipster.compReal').innerHTML = flipTablet;
  }

  /*---------/ flipster-responsive mantenimiento_ampliación \-----------------------------------------*/

  var flipMv = '<ul class="marco" style="width:210px!important;height:150px!important"><li><img src="images/Sport-5_210.jpg"></li><li><img src="images/Sport-5_210.jpg"></li> <li><img src="images/Sport-5_210.jpg"></li><li><img src="images/Sport-5_210.jpg"></li><li><img src="images/Sport-5_210.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

  var flipTablet = '<ul class="marco" style="width:420px!important;height:300px!important"><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

  var flipDesk = '<ul class="marco" style="width:630px!important;height:450px!important"><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

  var anchoPantalla = window.innerWidth;

  if( anchoPantalla<564 ){
    document.querySelector('.flipster.simPers').innerHTML = flipMv;
  }else if( anchoPantalla>1700 ){
    document.querySelector('.flipster.simPers').innerHTML = flipDesk;
  }else{
    document.querySelector('.flipster.simPers').innerHTML = flipTablet;
  }

/*--------/ flipster-responsive sim_personaliz \-----------------------------------------*/

  var flipMv = '<ul class="marco" style="width:210px!important;height:150px!important"><li><img src="images/Sport-5_210.jpg"></li><li><img src="images/Sport-5_210.jpg"></li> <li><img src="images/Sport-5_210.jpg"></li><li><img src="images/Sport-5_210.jpg"></li><li><img src="images/Sport-5_210.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

  var flipTablet = '<ul class="marco" style="width:420px!important;height:300px!important"><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li><li><img src="images/Sport-5.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

  var flipDesk = '<ul class="marco" style="width:630px!important;height:450px!important"><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li><li><img src="images/Sport-5_630.jpg"></li></ul><div class="volver"><a href="desarrollo.php">volver</a></div>';

  var anchoPantalla = window.innerWidth;

  if( anchoPantalla<564 ){
    document.querySelector('.flipster.mantAmp').innerHTML = flipMv;
  }else if( anchoPantalla>1700 ){
    document.querySelector('.flipster.mantAmp').innerHTML = flipDesk;
  }else{
    document.querySelector('.flipster.mantAmp').innerHTML = flipTablet;
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