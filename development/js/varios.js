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