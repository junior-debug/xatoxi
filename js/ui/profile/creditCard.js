function cambiar() {
  var pdrs = document.getElementById("selectFile").files[0].name;
  document.getElementById("info").innerHTML = pdrs;
}

const tipoTarjetaCredito = document.getElementById("tipoTarjetaCredito");
const numeroTarjetaCredito = document.getElementById("numeroTarjetaCredito");
const fechaVencimientoMes = document.getElementById("fechaVencimientoMes");
const fechaVencimientoYear = document.getElementById("fechaVencimientoYear");
const codigoValidacion = document.getElementById("codigoValidacion");

setFocusElementSel(tipoTarjetaCredito, "72px", "84px", "creditCard", "select");
setFocusElement(numeroTarjetaCredito, "2px", "16px", "creditCard");
setFocusElement(fechaVencimientoMes, "137px", "152px", "creditCard");
setFocusElement(fechaVencimientoYear, "137px", "152px", "creditCard");
setFocusElement(codigoValidacion, "205px", "219px", "creditCard");
