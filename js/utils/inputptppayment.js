function actionFocus(element, top) {
   let labelAux = element.id + "Label";
   document.getElementById(labelAux).style.transition = "0.5s";
   document.getElementById(labelAux).style.fontSize = "12px";
   document.getElementById(labelAux).style.marginTop = top;
}

function actionFocusOut(element, top) {
   let labelAux = element.id + "Label";
   if (element.value.length == "") {
      document.getElementById(labelAux).style.transition = "0.5s";
      document.getElementById(labelAux).style.fontSize = "16px";
      document.getElementById(labelAux).style.marginTop = top;
   }
}
