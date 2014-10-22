/*----------------------/ nav $medium \-----------------------------------------*/

	var navTablet = '<ul><li class="tablet inf"><a href="instruccion.php">instrucción</a></li><li class="tablet first"><a href="cursos.php">cursos</a></li><li class="tablet"><a href="desarrollo.php">desarrollo</a></li><li class="tablet inf"><a href="contacto.php">contacto</a></li><li class="tablet fin"><a href="somos.php">somos...</a></li></ul>';
	
	var anchoPantalla = window.innerWidth;
	var botonNav = document.querySelector('nav ul');

	if( anchoPantalla>360 )
	{
		document.querySelector('nav').innerHTML = navTablet;
	}

/*-------------------/   nav action+mini  \------------------------------------*/
/*alert("running");*/
var desplegable = document.querySelector('#desple');
var minimenu = document.querySelector('.iconfont.mini');

minimenu.addEventListener('click', despliegaMenu);

function despliegaMenu (e)
{
	if(desplegable.style.display == "block"){
		
		desplegable.style.display = "none";
		minimenu.style.height = "3em";

	}else{
		desplegable.style.display = "block";
		minimenu.style.height = "22em";
	}
}

/*------------------/   especial Temporada   \----------------------------------*/

	var platosMenuespecial = '<li><a href="#">Carpaccio de oronjas, vinagreta de trufa y brotes de micro mezclum.</a></li><li><a href="#">Huevo de caserío a baja temperatura, jugo meloso, tocineta y trompetas de la muerte.</a></li><li><a href="#">Mil hojas de patata y trufa con caldo de escudella trufado.</a></li><li><a href="#">Lomo de lubina sobre ragoût de setas y jugo de asado.</a></li><li><a href="#">Pieza melosa de ternera sobre Parmentier de patata y llanegas.</a></li><li><a href="#">Mousse de carbón, yogur helado y toques de fresa con citronella.</a></li>';
	
	var anchoPantalla = window.innerWidth;
	var menu = document.querySelector('.especialidad ol');

	if( anchoPantalla>780 )
	{
		menu.innerHTML = platosMenuespecial;
	}


/*-------------------/ especial temporada \---------------------------*/

var especial = document.querySelector('.especialidad ol');
var cabecera = document.querySelector('.especialidad a');
var tituloTemporada = document.querySelector('.especialidad h3');

cabecera.addEventListener('click', muestraEspecial);

function muestraEspecial (e)
{
	if(especial.style.display == "block"){
		
		especial.style.display = "none";
		tituloTemporada.style.display = "none";
		
	}else{
		
		especial.style.display = "block";
		tituloTemporada.style.display = "block";
	}

}