function traduccionOTC() {
  translationIt(mainLanguage, "txtTopTitle", "h1", "trad_otc");

  //translationIt(mainLanguage, "buy_1", "p", "trad_compra_otc_es");
  //translationIt(mainLanguage, "sell_1", "p", "trad_venta_otc_es");
  translationIt(mainLanguage, "labelPrice", "label", "trad_otc_precio");
  setReqAsterisk("labelPrice", "label");
  translationIt(mainLanguage, "labelQTY", "label", "trad_otc_cantidad");
  setReqAsterisk("labelQTY", "label");
  translationIt(mainLanguage, "labelTotal", "label", "trad_otc_total");
  //translationIt(mainLanguage, "buy_2", "p", "trad_compra_otc_es");
  translationIt(
    mainLanguage,
    "docListPenLabel",
    "labelSelect",
    "trad_documentos_requeridos"
  );
  setReqAsterisk("docListPenLabel", "labelSelect");
  if (mainLanguage == "en") {
    document.getElementById("transaction").options[0].textContent =
      jsonEn["trad_lista_compra_otc"];
    document.getElementById("transaction").options[1].textContent =
      jsonEn["trad_lista_venta_otc"];
  } else {
    document.getElementById("transaction").options[0].textContent =
      jsonEs["trad_lista_compra_otc"];
    document.getElementById("transaction").options[1].textContent =
      jsonEs["trad_lista_venta_otc"];
  }
}
