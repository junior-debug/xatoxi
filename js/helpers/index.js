// import Modal from '../modules/Modal.js';

// export async function functionName() {}
// export { URI, toBase64 } Constants
// export {
//     URI,
//     toBase64
// }

async function setUrl(pagina, color) {
  loaderOpen();
  const namePage = document.getElementById("namePage");
  let urlSrc = "";

  const formData = new FormData();
  formData.append("cond", "verificationlevel");
  formData.append("language", mainLanguage);
  formData.append("idlead", sesionID);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();
  if (res.code == "0000") {
    switch (res.verificationlevel) {
      case "0":
        urlSrc = "profile2";
        break;
      case "12":
        urlSrc = "profile4";
        break;
      case "22":
        urlSrc = "profile6";
        break;
      case "31":
        urlSrc = "bankInfo";
        break;
      case "41":
        urlSrc = "bankInfo2";
        break;
      case "42":
      case "51":
        if (pagina == "profile2") {
          urlSrc = "profile6";
        }
        break;
      default:
        break;
    }
    if (firsTime == "false") {
      if (color == "blue") {
        clickBlue();
      }
      if (color == "purple") {
        clickPurple();
      }
      if (color == "yellow") {
        clickYellow();
      }
      if (color == "orange") {
        clickOrange();
      }
      if (color == "red") {
        clickRed();
      }
      namePage.value = urlSrc != "" ? urlSrc : pagina;
    } else {
      location.href =
        urlSrc != "" ? "./" + urlSrc + ".php" : "./" + pagina + ".php";
    }
  }
  loaderClose();
}

function directUrl(pagina) {
  location.href = "./" + pagina + ".php";
}

const specialServ = [
  "compra",
  "venta",
  "exchange",
  "transfer",
  "remittance",
  "register",
  "profile2",
  "profile4",
  "profile6",
  "creditCard",
  "bankInfo",
  "bankInfo2",
  "receive",
  "ptppayment",
  "personalInfo",
];

function actionEffect(labelaux, fontsize, top, special) {
  document.getElementById(labelaux).style.transition = "0.5s";
  document.getElementById(labelaux).style.fontSize = fontsize;
  if (specialServ.includes(special)) {
    document.getElementById(labelaux).style.top = top;
  } else {
    document.getElementById(labelaux).style.marginTop = top;
  }
}

function actionFocusSel(element, top, special = null, type = null) {
  let labelAux = element.id + "Label";
  element.placeholder = "";
  if (type == "select") {
    if (element.value != "0" || element.value != "-1" || element.value == "") {
      actionEffect(labelAux, "12px", top, special);
    }
  } else if (element.value.length == "") {
    actionEffect(labelAux, "12px", top, special);
  }
}

function actionFocusOutSel(element, top, special = null, type = null) {
  let labelAux = element.id + "Label";
  element.placeholder = "";
  if (type == "select") {
    if (element.value == "0" || element.value == "-1" || element.value == "") {
      actionEffect(labelAux, "16px", top, special);
    }
  } else if (element.value.length == "") {
    actionEffect(labelAux, "16px", top, special);
  }
}

function actionFocus(element, top, special = null) {
  let labelAux = element.id + "Label";
  element.placeholder = "";
  document.getElementById(labelAux).style.transition = "0.5s";
  document.getElementById(labelAux).style.fontSize = "12px";
  if (specialServ.includes(special)) {
    document.getElementById(labelAux).style.top = top;
  } else {
    document.getElementById(labelAux).style.marginTop = top;
  }
}

function actionFocusOut(element, top, special = null) {
  let labelAux = element.id + "Label";
  element.placeholder = "";
  if (element.value.length == "") {
    document.getElementById(labelAux).style.transition = "0.5s";
    document.getElementById(labelAux).style.fontSize = "16px";
    if (specialServ.includes(special)) {
      document.getElementById(labelAux).style.top = top;
    } else {
      document.getElementById(labelAux).style.marginTop = top;
    }
  }
}

function setFocusElement(element, topFocus, topFocusOut, special) {
  if (element) {
    element.value != ""
      ? actionFocus(element, topFocus, special)
      : actionFocusOut(element, topFocusOut, special);
  }
}
function setFocusElementSel(element, topFocus, topFocusOut, special, type) {
  if (element) {
    element.value != ""
      ? actionFocus(element, topFocus, special, type)
      : actionFocusOut(element, topFocusOut, special, type);
  }
}

function valSelCtaRec(element, elementPrev) {
  const checkElem = document.getElementById(elementPrev);
  if (
    (element.value == "0" && checkElem.value == "3") ||
    checkElem.value == "4"
  ) {
    element.style.border = "2px solid #e03a3e";
    flagValidate = false;
  } else {
    element.style.border = "1px solid white";
    flagValidate = true;
  }
}

function valSelCountry(element) {
  if (element.value == "0") {
    element.style.border = "2px solid #e03a3e";
    flagValidate = false;
  } else {
    element.style.border = "1px solid white";
    flagValidate = true;
  }
}

function valideKey(evt) {
  // code is the decimal ASCII representation of the pressed key.
  var code = evt.which ? evt.which : evt.keyCode;
  if (code == 8) {
    // backspace.
    return true;
  } else if ((code >= 48 && code <= 57) || code == 44 || code == 46) {
    // is a number.
    return true;
  } else {
    // other keys.
    return false;
  }
}

function switchVisible(element) {
  const textTitleLabel = document.getElementsByClassName(element)[0];
  textTitleLabel.classList.remove("dis");
}

function switchHidden(element) {
  const textTitleLabel = document.getElementsByClassName(element)[0];
  textTitleLabel.classList.add("dis");
}

function loaderOpen() {
  document.getElementById("modalScreen").classList.remove("dis");
}

function loaderClose() {
  document.getElementById("modalScreen").classList.add("dis");
}

function loaderDesactive() {
  document.getElementById("modalScreen").classList.add("dis");
}

function inputMasked(domElement, minimus, maximus, decimals) {
  let inputToMask;
  if (mainLanguage == "en") {
    inputToMask = IMask(document.getElementById(domElement), {
      mask: Number,
      scale: decimals,
      signed: false,
      thousandsSeparator: ",",
      padFractionalZeros: false,
      normalizeZeros: true,
      radix: ".",
      mapToRadix: [","],
      min: minimus,
      max: maximus,
      lazy: false, // make placeholder always visible
      placeholderChar: " ",
    });
  }
  if (mainLanguage == "es") {
    inputToMask = IMask(document.getElementById(domElement), {
      mask: Number,
      scale: decimals,
      signed: false,
      thousandsSeparator: ".",
      padFractionalZeros: false,
      normalizeZeros: true,
      radix: ",",
      mapToRadix: ["."],
      min: minimus,
      max: maximus,
      lazy: false, // make placeholder always visible
      placeholderChar: " ",
    });
  }

  return inputToMask;
}

const emptyStar = document.getElementsByClassName("emptyStar");
const star = document.getElementsByClassName("star");

function addFavorite() {
  addfavservice(sesionID, mainLanguage, serviceCode);
  for (let i = 0; i < emptyStar.length; i++) {
    emptyStar[i].classList.add("dis");
  }
  for (let i = 0; i < star.length; i++) {
    star[i].classList.remove("dis");
  }
}

addfavservice = async (idlead, language, servicecode) => {
  const formData = new FormData();
  formData.append("cond", "addfavservice");
  formData.append("language", language);
  formData.append("idlead", idlead);
  formData.append("servicecode", servicecode);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();
  return res;
};

const getfavbyserv = async (language, idlead, codeserv) => {
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
      if (codeserv === element.code) {
        emptyStar[0].classList.add("dis");
        star[0].classList.remove("dis");
      }
    });
  }
  return res;
};

function setReqAsterisk(nameElement, type) {
  if (document.getElementById(nameElement)) {
    if (type == "label" || type == "labelSelect") {
      document.getElementById(nameElement).append(" *");
    }
    if (type == "select") {
      document.getElementById(nameElement).options[0].append(" *");
    }
  }
}

async function showConfirmationMessage(
  message,
  urlSrc,
  otpCode = "",
  monto = null,
  remittance = null
) {
  const formData = new FormData();
  formData.append("cond", "processConfirmation");
  if (otpCode != "") {
    formData.append("otpCode", otpCode);
  }
  if (monto) {
    formData.append("monto", monto);
    formData.append("remittance", remittance);
  }
  formData.append("message", message);
  formData.append("urlTo", urlSrc);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();
  if (res.status == "OK") {
    window.open("./msgConfirmation.php", "_self");
  } else {
    console.log("Error al realizar la petición AJAX: " + res.message);
  }
}

async function showSuccessMessage(message, urlSrc, urlSpecial = null) {
  const formData = new FormData();
  formData.append("cond", "processSuccess");
  formData.append("message", message);
  formData.append("urlTo", urlSrc);
  if (urlSpecial) {
    formData.append("urlSpecial", urlSpecial);
  }

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res == "OK") {
    window.open("./msgSuccess.php", "_self");
  } else {
    console.log("Error al realizar la petición AJAX: " + res.message);
  }
}

async function showAlertMessage(message, urlSrc) {
  const formData = new FormData();
  formData.append("cond", "processAlert");
  formData.append("message", message);
  formData.append("urlTo", urlSrc);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res == "OK") {
    window.open("./msgAlert.php", "_self");
  } else {
    console.log("Error al realizar la petición AJAX: " + res.message);
  }
}

/* Functions to docPens */
async function docPenAction(resData, urlSrc) {
  const formData = new FormData();
  formData.append("cond", "processDocPen");
  formData.append("message", resData.message);
  formData.append("docpend", resData.docpend);
  formData.append("urlTo", urlSrc);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res == "OK") {
    window.open("./msgAlert.php", "_self");
  } else {
    console.log("Error al realizar la petición AJAX: " + res.message);
  }
}

function showHideDocType(elem) {
  let opcVal = elem.options[elem.selectedIndex].value;
  let idDoc = elem.options[elem.selectedIndex].getAttribute("data-id");
  if (opcVal != -1) {
    reqDocBox.classList.remove("requiredOff");
    reqDocBox.classList.add("requiredOn");
    document.getElementById("docNum").value = idDoc;
    if (idDoc === "3") {
      penAction.classList.remove("off");
      penAction.classList.add("on");

      docAction.classList.remove("on");
      docAction.classList.add("off");
    } else {
      penAction.classList.remove("on");
      penAction.classList.add("off");

      docAction.classList.remove("off");
      docAction.classList.add("on");
    }
  } else if (opcVal === "-1") {
    document.getElementById("docNum").value = "";
    reqDocBox.classList.remove("requiredOn");
    reqDocBox.classList.add("requiredOff");

    penAction.classList.remove("on");
    penAction.classList.add("off");

    docAction.classList.remove("on");
    docAction.classList.add("off");
  }
}

async function signWrite(urlSrc) {
  loaderOpen();
  const formData = new FormData();
  formData.append("cond", "signWrite");
  formData.append("typeUpload", document.getElementById("docNum").value);
  formData.append("urlToSrc", urlSrc);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();
  if (res == "OK") {
    window.open("./sign.php", "_self");
  } else {
    loaderClose();
    console.log("Error al realizar la petición AJAX: " + res);
  }
}

async function documentUpload(urlSrc, toHome = null) {
  loaderOpen();
  const formData = new FormData();
  formData.append("cond", "uploadFile");
  formData.append("docNum", document.getElementById("docNum").value);
  formData.append("uploadDoc", document.getElementById("uploadDoc").files[0]);
  formData.append("urlTo", urlSrc);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    credentials: "same-origin",
    body: formData,
  });
  const res = await data.json();
  let srcTo = toHome ? null : true;

  if (res.code === "0000" && res.message.indexOf("OK") != -1) {
    showSuccessMessage(res.message, urlSrc, srcTo);
  }
  if (res.code === "5000") {
    showAlertMessage(res.message, urlSrc);
  }
}

function setSectionDocPend(listDocsPen, urlToRes) {
  if (listDocsPen) {
    listDocsPen.addEventListener(
      "change",
      showHideDocType.bind(null, listDocsPen),
      false
    );
    penAction.addEventListener("click", signWrite.bind(null, urlToRes), false);
    docUpload.addEventListener(
      "change",
      documentUpload.bind(null, urlToRes),
      false
    );
  }
}

function dynamicFor(array, action, content) {
  for (let i = 0; i < array.length; i++) {
    action === "add"
      ? array[i].classList.add(content)
      : array[i].classList.remove(content);
  }
}

function ventanaToggle(action) {
  const gifLoader = document.getElementById("gifLoader");
  if (action == "add") {
    dynamicFor(ventana, "add", "dis");
    modalScreen.classList.add("dis");
    gifLoader.classList.remove("dis");
  }
  if (action == "remove") {
    dynamicFor(ventana, "remove", "dis");
    modalScreen.classList.remove("dis");
  }
}
