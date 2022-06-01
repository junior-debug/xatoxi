const show = document.getElementsByClassName("show");
const container_txt = document.getElementsByClassName("container_txt");

const buttonPinFinTech = document.getElementById("buttonpinfintech");
const buttonPinWallet = document.getElementById("buttonpinwallet");
const buttonPinProfile = document.getElementById("buttonpinprofile");
const buttonPinChat = document.getElementById("buttonpinchat");
const buttonPinPlay = document.getElementById("buttonpinplay");

const venta = document.getElementsByClassName("venta");
const ventaIcon = document.getElementsByClassName("ventaIcon");
const compra = document.getElementsByClassName("compra");
const compraIcon = document.getElementsByClassName("compraIcon");
const recepcion = document.getElementsByClassName("recepcion");
const recepcionIcon = document.getElementsByClassName("recepcionIcon");
const cambio = document.getElementsByClassName("cambio");
const cambioIcon = document.getElementsByClassName("cambioIcon");
const transferencia = document.getElementsByClassName("transferencia");
const transferenciaIcon = document.getElementsByClassName("transferenciaIcon");
const encomienda = document.getElementsByClassName("encomienda");
const encomiendaIcon = document.getElementsByClassName("encomiendaIcon");
const debito = document.getElementsByClassName("debito");
const debitoIcon = document.getElementsByClassName("debitoIcon");
const credito = document.getElementsByClassName("credito");
const creditoIcon = document.getElementsByClassName("creditoIcon");
const reporte = document.getElementsByClassName("reporte");
const reporteIcon = document.getElementsByClassName("reporteIcon");

const send = document.getElementsByClassName("send");
const sendIcon = document.getElementsByClassName("sendIcon");
const receive = document.getElementsByClassName("receive");
const receiveIcon = document.getElementsByClassName("receiveIcon");
const block = document.getElementsByClassName("block");
const blockIcon = document.getElementsByClassName("blockIcon");
const otc = document.getElementsByClassName("otc");
const otcIcon = document.getElementsByClassName("otcIcon");
const bank = document.getElementsByClassName("bank");
const bankIcon = document.getElementsByClassName("bankIcon");
const wallet = document.getElementsByClassName("wallet");
const walletIcon = document.getElementsByClassName("walletIcon");

const verificacion = document.getElementsByClassName("verificacion");
const verificacionIcon = document.getElementsByClassName("verificacionIcon");
const informacion = document.getElementsByClassName("informacion");
const informacionIcon = document.getElementsByClassName("informacionIcon");
const tarjeta = document.getElementsByClassName("tarjeta");
const tarjetaIcon = document.getElementsByClassName("tarjetaIcon");

const eliminarCuenta = document.getElementsByClassName("eliminarCuenta");
const eliminarCuentaIcon =
  document.getElementsByClassName("eliminarCuentaIcon");

const exit = document.getElementsByClassName("exit");
const exitPurple = document.getElementsByClassName("exitPurple");
const exitYellow = document.getElementsByClassName("exitYellow");

const walletButton = document.getElementsByClassName("walletButton");
const fintechhButton = document.getElementsByClassName("fintechhButton");
const perfilButton = document.getElementsByClassName("perfilButton");

const yellowButton = document.getElementsByClassName("yellowButton");
const purpleButton = document.getElementsByClassName("purpleButton");
const grayButton = document.getElementsByClassName("grayButton");
const blueButton = document.getElementsByClassName("blueButton");

const inactiveBlue = document.getElementsByClassName("inactiveBlue");
const inactivePurple = document.getElementsByClassName("inactivePurple");
const inactiveYellow = document.getElementsByClassName("inactiveYellow");

const flagSpain = document.getElementById("flagSpain");
const flagEngland = document.getElementById("flagEngland");

exit[0].addEventListener("click", closeListWalletServices, false);
function closeListWalletServices() {
  for (let i = 0; i < blueButton.length; i++) {
    blueButton[i].classList.toggle("blue");
  }
  for (let i = 0; i < inactiveBlue.length; i++) {
    inactiveBlue[i].classList.toggle("active1");
  }
  for (let i = 0; i < purpleButton.length; i++) {
    purpleButton[i].classList.remove("purple");
  }
  for (let i = 0; i < yellowButton.length; i++) {
    yellowButton[i].classList.remove("yellow");
  }
  for (let i = 0; i < inactiveBlue.length; i++) {
    inactiveBlue[i].classList.remove("active");
  }
  for (let i = 0; i < inactivePurple.length; i++) {
    inactivePurple[i].classList.remove("active");
  }
  for (let i = 0; i < inactiveYellow.length; i++) {
    inactiveYellow[i].classList.remove("active2");
  }
}

exitPurple[0].addEventListener("click", closeListFinTechServices, false);
function closeListFinTechServices() {
  for (let i = 0; i < purpleButton.length; i++) {
    purpleButton[i].classList.toggle("purple");
  }
  for (let i = 0; i < inactivePurple.length; i++) {
    inactivePurple[i].classList.toggle("active");
  }
  for (let i = 0; i < blueButton.length; i++) {
    blueButton[i].classList.remove("blue");
  }
  for (let i = 0; i < yellowButton.length; i++) {
    yellowButton[i].classList.remove("yellow");
  }
  for (let i = 0; i < inactiveBlue.length; i++) {
    inactiveBlue[i].classList.remove("active1");
  }
  for (let i = 0; i < inactiveYellow.length; i++) {
    inactiveYellow[i].classList.remove("active2");
  }
}

exitYellow[0].addEventListener("click", closeListProfileServices, false);
function closeListProfileServices() {
  for (let i = 0; i < yellowButton.length; i++) {
    yellowButton[i].classList.toggle("yellow");
  }
  for (let i = 0; i < inactiveYellow.length; i++) {
    inactiveYellow[i].classList.toggle("active2");
  }
  for (let i = 0; i < blueButton.length; i++) {
    blueButton[i].classList.remove("blue");
  }
  for (let i = 0; i < purpleButton.length; i++) {
    purpleButton[i].classList.remove("purple");
  }
  for (let i = 0; i < inactiveBlue.length; i++) {
    inactiveBlue[i].classList.remove("active1");
  }
  for (let i = 0; i < inactivePurple.length; i++) {
    inactivePurple[i].classList.remove("active");
  }
}

if (level === "1") {
  buttonPinWallet.addEventListener("click", showWalletServices, false);
  buttonPinFinTech.addEventListener("click", showFinTechServices, false);
  buttonPinProfile.addEventListener("click", showProfileServices, false);
  buttonPinChat.addEventListener("click", showChatServices, false);
  //buttonPinPlay.addEventListener("click", showPlayServices, false);
}

function showWalletServices() {
  for (let i = 0; i < blueButton.length; i++) {
    blueButton[i].classList.toggle("blue");
  }
  for (let i = 0; i < inactiveBlue.length; i++) {
    inactiveBlue[i].classList.toggle("active1");
  }
  for (let i = 0; i < purpleButton.length; i++) {
    if (i == 9 || i == 10 || i == 11) {
      purpleButton[i].classList.remove("gray");
    } else {
      purpleButton[i].classList.remove("purple");
    }
  }
  for (let i = 0; i < grayButton.length; i++) {
    grayButton[i].classList.remove("gray");
  }
  for (let i = 0; i < yellowButton.length; i++) {
    yellowButton[i].classList.remove("yellow");
  }
  for (let i = 0; i < inactiveBlue.length; i++) {
    inactiveBlue[i].classList.remove("active");
  }
  for (let i = 0; i < inactivePurple.length; i++) {
    inactivePurple[i].classList.remove("active");
  }
  for (let i = 0; i < inactiveYellow.length; i++) {
    inactiveYellow[i].classList.remove("active2");
  }
}
function showFinTechServices() {
  for (let i = 0; i < purpleButton.length; i++) {
    if (i == 9 || i == 10 || i == 11) {
      purpleButton[i].classList.toggle("gray");
    } else {
      purpleButton[i].classList.toggle("purple");
    }
  }
  for (let i = 0; i < inactivePurple.length; i++) {
    inactivePurple[i].classList.toggle("active");
  }
  for (let i = 0; i < grayButton.length; i++) {
    grayButton[i].classList.toggle("gray");
  }
  for (let i = 0; i < blueButton.length; i++) {
    blueButton[i].classList.remove("blue");
  }
  for (let i = 0; i < yellowButton.length; i++) {
    yellowButton[i].classList.remove("yellow");
  }
  for (let i = 0; i < inactiveBlue.length; i++) {
    inactiveBlue[i].classList.remove("active1");
  }
  for (let i = 0; i < inactiveYellow.length; i++) {
    inactiveYellow[i].classList.remove("active2");
  }
}
function showProfileServices() {
  for (let i = 0; i < yellowButton.length; i++) {
    yellowButton[i].classList.toggle("yellow");
  }
  for (let i = 0; i < inactiveYellow.length; i++) {
    inactiveYellow[i].classList.toggle("active2");
  }
  for (let i = 0; i < blueButton.length; i++) {
    blueButton[i].classList.remove("blue");
  }
  for (let i = 0; i < grayButton.length; i++) {
    grayButton[i].classList.remove("gray");
  }
  for (let i = 0; i < purpleButton.length; i++) {
    if (i == 9 || i == 10 || i == 11) {
      purpleButton[i].classList.remove("gray");
    } else {
      purpleButton[i].classList.remove("purple");
    }
  }
  for (let i = 0; i < inactiveBlue.length; i++) {
    inactiveBlue[i].classList.remove("active1");
  }
  for (let i = 0; i < inactivePurple.length; i++) {
    inactivePurple[i].classList.remove("active");
  }
}
function showChatServices() {}

flagEngland.addEventListener("click", changeLangToEs, false);
flagSpain.addEventListener("click", changeLangToEn, false);

async function changeLangToEn() {
  let auxLang = "";

  flagEngland.classList.remove("dis");
  flagSpain.classList.add("dis");
  auxLang = "en";

  const formData = new FormData();
  formData.append("cond", "changeLanguage");
  formData.append("language", auxLang);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  window.open("./index.php", "_self");
}

async function changeLangToEs() {
  let auxLang = "";

  flagSpain.classList.remove("dis");
  flagEngland.classList.add("dis");
  auxLang = "es";

  const formData = new FormData();
  formData.append("cond", "changeLanguage");
  formData.append("language", auxLang);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  window.open("./index.php", "_self");
}

async function wichLanguage() {
  const formData = new FormData();
  formData.append("cond", "wichLanguage");

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res == "es") {
    flagEngland.classList.add("dis");
  } else {
    flagSpain.classList.add("dis");
  }
}
wichLanguage();

traduccionMenu();

let stars = [];
let icons = [];

const getfavlist = async (language, idlead) => {
  const formData = new FormData();
  formData.append("cond", "getfavservicesl");
  formData.append("language", language);
  formData.append("idlead", idlead);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();
  if (res.code == "0000" && res.list[0].group != null) {
    res.list.forEach((element, index) => {
      backgroundFav(index, element.code.slice(0, 1), element.code.slice(0, 2));
      iconFav(index, element.code.slice(0, 2));
    });
  }

  return res;
};

if (sesionID != "") {
  getfavlist(mainLanguage, sesionID);
}

const firstStarClass = document.getElementsByClassName("firstStar");
const secondStarClass = document.getElementsByClassName("secondStar");
const thirdStarClass = document.getElementsByClassName("thirdStar");
const fourthStarClass = document.getElementsByClassName("fourthStar");
const fifthStarClass = document.getElementsByClassName("fifthStar");

const firstStar = document.getElementById("firstStar");
const secondStar = document.getElementById("secondStar");
const thirdStar = document.getElementById("thirdStar");
const fourthStar = document.getElementById("fourthStar");
const fifthStar = document.getElementById("fifthStar");

const colorBlue = "#009ddc";
const colorPurple = "#963d97";
const colorRed = "#e03a3e";
const colorOrange = "#f5821f";
const colorYellow = "#fdb827";
const colorGreen = "#61bb46";

function setStarColor(elemStar, color) {
  for (let i = 0; i < elemStar.length; i++) {
    elemStar[i].style.backgroundColor = color;
  }
}

function backgroundFav(pos, star, special) {
  let elemStar = null;
  switch (pos) {
    case 0:
      elemStar = firstStarClass;
      break;
    case 1:
      elemStar = secondStarClass;
      break;
    case 2:
      elemStar = thirdStarClass;
      break;
    case 3:
      elemStar = fourthStarClass;
      break;
    case 4:
      elemStar = fifthStarClass;
      break;
  }

  switch (star) {
    case "1":
      setStarColor(elemStar, colorBlue);
      break;
    case "2":
      setStarColor(elemStar, colorPurple);
      break;
    case "3":
      setStarColor(elemStar, colorRed);
      break;
    case "4":
      setStarColor(elemStar, colorOrange);
      break;
    case "5":
      setStarColor(elemStar, colorYellow);
      break;
    case "6":
      setStarColor(elemStar, colorGreen);
      break;
  }

  switch (special) {
    case "53":
      setStarColor(elemStar, colorBlue);
      break;
  }
}

function setClickToIcon(elem, urlIcon, pageSrc, colorSrc) {
  elem.src = urlIcon;
  elem.classList.add("handCursor");
  elem.addEventListener("click", setUrl.bind(null, pageSrc, colorSrc), false);
}

function iconFav(star, iconStar) {
  let elemStar = null;
  switch (star) {
    case 0:
      elemStar = firstStar;
      break;
    case 1:
      elemStar = secondStar;
      break;
    case 2:
      elemStar = thirdStar;
      break;
    case 3:
      elemStar = fourthStar;
      break;
    case 4:
      elemStar = fifthStar;
      break;
  }

  switch (iconStar) {
    case "11":
      setClickToIcon(elemStar, "./img/icons/otcIcon.png", "otcbuylist", "blue");
      translationIt(mainLanguage, "descTitleServ01", "p", "trad_otc");
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "otcIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "otcIcon"),
        false
      );
      break;
    case "12":
      setClickToIcon(
        elemStar,
        "./img/icons/otcIcon.png",
        "otcselllist",
        "blue"
      );
      translationIt(mainLanguage, "descTitleServ01", "p", "trad_otc");
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "otcIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "otcIcon"),
        false
      );
      break;
    case "13":
      setClickToIcon(
        elemStar,
        "./img/icons/ptpPaymentSendIcon.png",
        "ptppaymentsend",
        "blue"
      );
      translationIt(mainLanguage, "descTitleServ15", "p", "trad_cartera_envio");
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "sendIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "sendIcon"),
        false
      );
      break;
    case "14":
      setClickToIcon(
        elemStar,
        "./img/icons/ptpPaymentReceiveIcon.png",
        "ptppaymentreceive",
        "blue"
      );
      translationIt(
        mainLanguage,
        "descTitleServ16",
        "p",
        "trad_cartera_recepcion"
      );
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "receiveIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "receiveIcon"),
        false
      );
      break;
    case "15":
      setClickToIcon(elemStar, "./img/icons/loupe.png", "lasttrxlist", "blue");
      translationIt(
        mainLanguage,
        "descTitleServ24",
        "p",
        "trad_busqueda_bloques"
      );
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "blockIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "blockIcon"),
        false
      );
      break;
    case "21":
      setClickToIcon(elemStar, "./img/icons/buy.png", "buy", "purple");
      translationIt(mainLanguage, "descTitleServ07", "p", "trad_compra");
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "compraIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "compraIcon"),
        false
      );
      break;
    case "22":
      setClickToIcon(elemStar, "./img/icons/sellIcon.png", "sell", "purple");
      translationIt(mainLanguage, "descTitleServ06", "p", "trad_venta");
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "ventaIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "ventaIcon"),
        false
      );
      break;
    case "23":
      setClickToIcon(
        elemStar,
        "./img/icons/remittanceIcon.png",
        "remittance",
        "purple"
      );
      translationIt(mainLanguage, "descTitleServ11", "p", "trad_encomienda");
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "encomiendaIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "encomiendaIcon"),
        false
      );
      break;
    case "24":
      setClickToIcon(
        elemStar,
        "./img/icons/transferIcon.png",
        "transfer",
        "purple"
      );
      translationIt(mainLanguage, "descTitleServ10", "p", "trad_transferencia");
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "transferenciaIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "transferenciaIcon"),
        false
      );
      break;
    case "25":
      setClickToIcon(
        elemStar,
        "./img/icons/exchangeIcon.png",
        "exchange",
        "purple"
      );
      translationIt(mainLanguage, "descTitleServ09", "p", "trad_cambio");
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "cambioIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "cambioIcon"),
        false
      );
      break;
    case "26":
      setClickToIcon(
        elemStar,
        "./img/icons/receiveIcon.png",
        "receive",
        "purple"
      );
      translationIt(mainLanguage, "descTitleServ08", "p", "trad_recepcion");
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "recepcionIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "recepcionIcon"),
        false
      );
      break;
    case "28":
      setClickToIcon(elemStar, "./img/icons/creditCardIcon.png", "", "purple");
      break;
    case "29":
      setClickToIcon(
        elemStar,
        "./img/icons/transactionReportIcon.png",
        "transactionReport",
        "purple"
      );
      translationIt(
        mainLanguage,
        "descTitleServ14",
        "p",
        "trad_reportes_de_operaciones"
      );
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "reporteIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "reporteIcon"),
        false
      );
      break;
    case "41":
      setClickToIcon(elemStar, "./img/icons/chat.png", "qchat", "orange");
      translationIt(mainLanguage, "descTitleServ04", "p", "trad_q_chat");
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "chatIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "chatIcon"),
        false
      );
      break;
    case "51":
      setClickToIcon(
        elemStar,
        "./img/icons/userVerification.png",
        "profile2",
        "yellow"
      );
      translationIt(mainLanguage, "descTitleServ05", "p", "trad_perfil");
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "verificacionIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "verificacionIcon"),
        false
      );
      break;
    case "52":
      setClickToIcon(
        elemStar,
        "./img/icons/bankInfo.png",
        "bankInfo",
        "yellow"
      );
      translationIt(
        mainLanguage,
        "descTitleServ21",
        "p",
        "trad_infor_cuenta_banc"
      );
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "informacionIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "informacionIcon"),
        false
      );
      break;
    case "53":
      setClickToIcon(elemStar, "./img/icons/wallet1.png", "walletsmgr", "blue");
      translationIt(mainLanguage, "descTitleServ01", "p", "trad_cartera");
      elemStar.addEventListener(
        "mouseover",
        switchVisible.bind(null, "walletIcon"),
        false
      );
      elemStar.addEventListener(
        "mouseout",
        switchHidden.bind(null, "walletIcon"),
        false
      );
      break;
    case "61":
      setClickToIcon(elemStar, "./img/icons/mascotIcon.png", "", "purple");
      break;
  }
}

async function resetSessionAfterRefresh() {
  if (
    window.location.href.indexOf("xatoxi.app") == "12" ||
    window.location.href.indexOf("localhost") == "7"
  ) {
    if (typeof level !== "undefined" && level == "2") {
      const formData = new FormData();
      formData.append("cond", "sesionReset");

      const data = await fetch("services/ajax.php", {
        method: "POST",
        body: formData,
      });
      const res = await data.json();
      window.open("./index.php", "_self");
    }
  }
}

//-----------------End point prepaid card-----------------//

const requestcreditcard = async (language, idlead, otp) => {
  const formData = new FormData();
  formData.append("cond", "requestcreditcard");
  formData.append("language", language);
  formData.append("idlead", idlead);
  formData.append("otp", otp);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res.code == "0000") {
    showConfirmationMessage(res.message, "msgSuccess", otp);
  } else if (res.code == "5000") {
    showAlertMessage(res.message, urlToRes);
  }
  loaderClose();
  return res;
};

const genotp = async (language, idlead) => {
  const formData = new FormData();
  formData.append("cond", "genotp");
  formData.append("language", language);
  formData.append("idlead", idlead);
  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res.otp) {
    requestcreditcard(mainLanguage, sesionID, res.otp);
  }
  return res;
};

const requestcreditcardok = async (language, idlead) => {
  loaderOpen();
  const formData = new FormData();
  formData.append("cond", "requestcreditcardok");
  formData.append("language", language);
  formData.append("idlead", idlead);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res.code == "7001") {
    docPenAction(res, "debitCard.php");
  }
  if (res.code == "0000") {
    genotp(mainLanguage, sesionID);
  }
  return res;
};

//------------------------------------------------------------//

//------------End point para habilitar servicio---------------//

const getservicesl = async (language, idlead) => {
  loaderOpen();
  const formData = new FormData();
  formData.append("cond", "getservicesl");
  formData.append("idlead", idlead);
  formData.append("language", language);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();
  return res;
};

//------------------------------------------------------------//

getservicesl(mainLanguage, sesionID);
resetSessionAfterRefresh();
