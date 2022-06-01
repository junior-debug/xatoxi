var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");

let m = {};

var x = 0,
  y = 0,
  dibujando = false,
  color = "black",
  grosor = "1",
  caux = "black",
  gaux = "1";

function borrar() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
}

canvas.addEventListener("mousedown", function (e) {
  m = oMousePos(canvas, e);
  x = m.x;
  y = m.y;
  dibujando = true;
});

canvas.addEventListener("mousemove", function (e) {
  if (dibujando === true) {
    m = oMousePos(canvas, e);
    dibujar(x, y, m.x, m.y);
    x = m.x;
    y = m.y;
  }
});

const imgFirma = document.getElementById("imgFirma");
canvas.addEventListener("mouseup", function (e) {
  if (dibujando === true) {
    m = oMousePos(canvas, e);
    dibujar(x, y, m.x, m.y);
    x = 0;
    y = 0;
    dibujando = false;
  }
});

function dibujar(x1, y1, x2, y2) {
  ctx.beginPath();
  ctx.strokeStyle = color;
  ctx.lineWidth = grosor;
  ctx.moveTo(x1, y1);
  ctx.lineTo(x2, y2);
  ctx.stroke();
  ctx.closePath();
}

function oMousePos(canvas, evt) {
  var ClientRect = canvas.getBoundingClientRect();
  return {
    //objeto
    x: Math.round(evt.clientX - ClientRect.left),
    y: Math.round(evt.clientY - ClientRect.top),
  };
}
