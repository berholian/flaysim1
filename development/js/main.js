var x = 0;
var y = 0;

$(document).ready(inicio);

function inicio(){
	animar();
}

function animar(){
	/*alert ("runinng");*/
	var canvas = document.getElementById('stela');
	var contexto = canvas.getContext("2d");

	/*contexto.clearRect('0,0,2000,24');*/
	contexto.fillStyle ="rgb(255,255,255)";
	contexto.fillRect(x,y,18,50);

	x++;

	setTimeout("animar()",50);
}