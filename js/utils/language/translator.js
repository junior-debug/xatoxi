let jsonEn = "";
let jsonEs = "";

function translateMail() {
  translationIt(mainLanguage, "subjectLabel", "label", "trad_subject");
  translationIt(mainLanguage, "messageLabel", "label", "trad_message");
  translationIt(mainLanguage, "sendMail", "h1", "trad_sendMail");
}

async function preLoadJSON() {
  const formData = new FormData();
  formData.append("cond", "wichLanguage");

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res == "en") {
    const dataEn = await fetch("js/utils/language/translations/intl_en.json");
    jsonEn = await dataEn.json();
  } else if (res == "es") {
    const dataEs = await fetch("js/utils/language/translations/intl_es.json");
    jsonEs = await dataEs.json();
  } else {
    const dataEn = await fetch("js/utils/language/translations/intl_en.json");
    jsonEn = await dataEn.json();
  }

  if (jsonEs || jsonEn) {
    if (
      (window.location.href.indexOf("xatoxi.app") == "12" &&
        window.location.href.split("/")[3] == "") ||
      window.location.href.split("/")[3] == "index.php"
    ) {
      traduccionModalPin();
      traduccionMenu();
    }

    if (
      (window.location.href.indexOf("localhost") == "7" &&
        window.location.href.split("/")[4] == "") ||
      window.location.href.split("/")[4] == "index.php"
    ) {
      traduccionModalPin();
      traduccionMenu();
    }

    if (pageFromArti == "buy.php") {
      traduccionCompras();
      translateMail();
    } else if (pageFromArti == "profile2.php") {
      traduccionPerfil("1");
      translateMail();
    } else if (pageFromArti == "profile3.php") {
      traduccionPerfil("2");
      translateMail();
    } else if (pageFromArti == "profile4.php") {
      traduccionPerfil("3");
      translateMail();
    } else if (pageFromArti == "profile5.php") {
      traduccionPerfil("4");
      translateMail();
    } else if (pageFromArti == "profile6.php") {
      traduccionPerfil("5");
      translateMail();
    } else if (pageFromArti == "personalInfo.php") {
      traduccionPerfil("6");
      translateMail();
    } else if (
      pageFromArti == "bankInfo.php" ||
      pageFromArti == "bankInfo2.php"
    ) {
      traduccionInfoBancaria();
      translateMail();
    } else if (pageFromArti == "creditCard.php") {
      traduccionInfoTDC();
      translateMail();
    } else if (pageFromArti == "remittance.php") {
      traduccionEncomienda();
      translateMail();
    } else if (pageFromArti == "sell.php") {
      traduccionVenta();
      translateMail();
    } else if (pageFromArti == "receive.php") {
      traduccionRecepcion();
      translateMail();
    } else if (pageFromArti == "register.php") {
      traduccionRegistro();
      translateMail();
    } else if (pageFromArti == "exchange.php") {
      traduccionCambio();
      translateMail();
    } else if (pageFromArti == "transfer.php") {
      traduccionTransferencia();
      translateMail();
    } else if (pageFromArti == "ptppaymentsend.php") {
      traduccionPtppaymentsend();
      translateMail();
    } else if (pageFromArti == "ptppaymentreceive.php") {
      traduccionPtppaymentreceive();
      translateMail();
    } else if (pageFromArti == "walletsmgr.php") {
      traduccionWalletsmgr();
      translateMail();
    } else if (pageFromArti == "otc.php") {
      traduccionOTC();
      translateMail();
    } else if (pageFromArti == "otcbuylist.php") {
      traduccionBuyersList();
      translateMail();
    } else if (pageFromArti == "otcselllist.php") {
      traduccionSellersList();
      translateMail();
    } else if (pageFromArti == "blocklist.php") {
      traduccionBlockList();
      translateMail();
    } else if (pageFromArti == "lasttrxlist.php") {
      traduccionLastTrxList();
      translateMail();
    } else if (pageFromArti == "deleteAccount.php") {
      traduccionDeleteAccount();
    } else if (pageFromArti == "sign.php") {
      traduccionSign();
    } else if (pageFromArti == "qchatMsg.php") {
      traduccionQchatMsg();
    } else if (pageFromArti == "debitCard.php") {
      traduccionPrepaidCard();
      translateMail();
    }

    /* It must be used here because by execution time is the only place called for all services*/
    if (pageFromArti != "") {
      if (typeof serviceCode != "undefined") {
        getfavbyserv(mainLanguage, sesionID, serviceCode);
      }
    }
  }
}

preLoadJSON();

function translationIt(idioma, nameTag, type, tag, withClassName = false) {
  if (withClassName) {
    let elemento = document.getElementsByClassName(nameTag);
    for (let i = 0; i < elemento.length; i++) {
      if (idioma === "en") {
        elemento[i].textContent = "";
        elemento[i].textContent = jsonEn[tag];
      }
      if (idioma === "es") {
        elemento[i].textContent = "";
        elemento[i].textContent = jsonEs[tag];
      }
    }
  } else {
    let elemento = document.getElementById(nameTag);
    if (elemento) {
      if (idioma === "en") {
        if (type == "input") {
          elemento.placeholder = "";
          elemento.placeholder = jsonEn[tag];
        } else if (type == "select") {
          elemento[0].innerHTML = "";
          elemento[0].innerHTML =
            jsonEn["trad_seleccionar"] + " " + jsonEn[tag];
        } else if (type == "labelSelect") {
          elemento.innerHTML = "";
          elemento.innerHTML = jsonEn[tag];
        } else {
          elemento.textContent = "";
          elemento.textContent = jsonEn[tag];
        }
      } else if (idioma === "es") {
        if (type == "input") {
          elemento.placeholder = "";
          elemento.placeholder = jsonEs[tag];
        } else if (type == "select") {
          elemento[0].innerHTML = "";
          elemento[0].innerHTML = jsonEs[tag];
        } else if (type == "labelSelect") {
          elemento.innerHTML = "";
          elemento.innerHTML = jsonEs[tag];
        } else {
          elemento.textContent = "";
          elemento.textContent = jsonEs[tag];
        }
      }
    }
  }
}

function traduccionModalPin() {
  translationIt(mainLanguage, "cambioPin", "h3", "trad_cambio_de_pin");
  translationIt(mainLanguage, "olvidoPin", "h3", "trad_olvido_de_pin");
  translationIt(mainLanguage, "registroGenerarPin", "h3", "trad_registro");
}

function traduccionMenu() {
  translationIt(mainLanguage, "descTitleServ01", "p", "trad_cartera");
  translationIt(mainLanguage, "descTitleServ02", "p", "trad_fintech");
  translationIt(mainLanguage, "descTitleServ03", "p", "trad_play");
  translationIt(mainLanguage, "descTitleServ04", "p", "trad_q_chat");
  translationIt(mainLanguage, "descTitleServ05", "p", "trad_perfil");
  translationIt(mainLanguage, "descTitleServ06", "p", "trad_venta");
  translationIt(mainLanguage, "descTitleServ07", "p", "trad_compra");
  translationIt(mainLanguage, "descTitleServ08", "p", "trad_recepcion");
  translationIt(mainLanguage, "descTitleServ09", "p", "trad_cambio");
  translationIt(mainLanguage, "descTitleServ10", "p", "trad_transferencia");
  translationIt(mainLanguage, "descTitleServ11", "p", "trad_encomienda");
  translationIt(mainLanguage, "descTitleServ12", "p", "trad_tarjeta_de_debito");
  translationIt(
    mainLanguage,
    "descTitleServ13",
    "p",
    "trad_tarjeta_de_credito_prepagada"
  );
  translationIt(
    mainLanguage,
    "descTitleServ14",
    "p",
    "trad_reportes_de_operaciones"
  );
  translationIt(mainLanguage, "descTitleServ15", "p", "trad_cartera_envio");
  translationIt(mainLanguage, "descTitleServ16", "p", "trad_cartera_recepcion");
  translationIt(mainLanguage, "descTitleServ17", "p", "trad_otc");
  translationIt(mainLanguage, "descTitleServ18", "p", "trad_apertura_cuenta");
  translationIt(mainLanguage, "descTitleServ19", "p", "trad_cartera");
  translationIt(
    mainLanguage,
    "descTitleServ20",
    "p",
    "trad_verificacion_usuario"
  );
  translationIt(mainLanguage, "descTitleServ21", "p", "trad_infor_cuenta_banc");
  translationIt(mainLanguage, "descTitleServ22", "p", "trad_infor_tdc");
  translationIt(mainLanguage, "descTitleServ23", "p", "trad_eliminar_cuenta");
  translationIt(mainLanguage, "descTitleServ24", "p", "trad_busqueda_bloques");
}
