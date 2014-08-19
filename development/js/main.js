var x = 0;
var y = 0;

$(document).ready(inicio);

function inicio(){
	animar();
}

function animar(){
	/*alert ("runinng");*/
	var canvas = document.getElementById('stela');
	var context = canvas.getContext("2d");

	/*context.clearRect('0,0,2000,24');*/
	context.fillStyle ="rgba(255,255,255,.1)";
	context.fillRect(x,y,18,50);

	x++;

	setTimeout("animar()",50);
}