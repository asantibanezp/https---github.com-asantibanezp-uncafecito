/**
 * Created by soporte on 13/08/2018.
 */

var canvas = document.getElementById("dibujito");
var lienzo = canvas.getContext("2d");
var lineas = 20;
var xinicial = 0;
var xfinal = 1 ;
var yinicial = 0;
var yfinal = 1;

function dibujo(xinicial, xfinal, yinicial, yfinal) {
    lienzo.beginPath();
    lienzo.strokeStyle = 'blue';
    lienzo.moveTo(xinicial,yinicial);
    lienzo.lineTo(xfinal,yfinal);
    lienzo.stroke();
    lienzo.closePath();
}

dibujo();

for (i = 1; i>= lineas; i++){
    dibujo();
    xinicial = xinicial + i*10
}