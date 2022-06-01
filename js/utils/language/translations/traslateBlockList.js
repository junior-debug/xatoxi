function traduccionBlockList() {
   translationIt(mainLanguage, "txtTopTitle", "h1", "trad_busqueda_bloques");
   translationIt(mainLanguage, "titleList", "div", "trad_block", true);
   document.getElementById("blockList").prepend("< ");
   //translationIt(mainLanguage, "size", "span", "trad_tamaño");
}
