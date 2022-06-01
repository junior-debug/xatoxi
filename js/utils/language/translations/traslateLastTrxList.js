function traduccionLastTrxList() {
   translationIt(mainLanguage, "txtTopTitle", "h1", "trad_busqueda_bloques");
   translationIt(mainLanguage, "lastTrans", "div", "trad_ultimas_transacciones");
   document.getElementById("lastTrans").append(" >");
   //translationIt(mainLanguage, "size", "span", "trad_tamaño", true);
   translationIt(mainLanguage, "detailsTrx", "span", "trad_detalles", true);
}
