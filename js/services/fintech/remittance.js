const monto = inputMasked("monto", 0, 1000000000, 2);
const proveedor = document.getElementById("Proveedor");
const pais = document.getElementById("pais");
const coin = document.getElementsByName("idremitancetype")[0];
const selectEntrega = document.getElementById("selectEntrega");

const tasa = document.getElementById("tasa");
const winMont = document.getElementById("winMont");
const pago = document.getElementById("formaPago");
const montoBs = document.getElementById("montoBs");

const montoid = document.getElementById("monto");
const ctaReceptora = document.getElementById("ctaReceptora");

const cntReferencia = document.getElementById("cntReferencia");

const beneficiario = document.getElementById("beneficiario");
const beneficiario_1 = document.getElementById("beneficiario_1");

const cntDocId01 = document.getElementById("cntDocId01");
const cntDocId02 = document.getElementById("cntDocId02");

const banco = document.getElementById("banco");
const cntBanco = document.getElementById("cntBanco");

const cntBanco_1 = document.getElementById("cntBanco_1");
const cntBanco_2 = document.getElementById("cntBanco_2");

const cuenta = document.getElementById("cuenta");

const cntCuenta_1 = document.getElementById("cntCuenta_1");
const cntCuenta_2 = document.getElementById("cntCuenta_2");

const cntRouting = document.getElementById("cntRouting");

const nombre = document.getElementById("nombre");
const nombre_1 = document.getElementById("nombre_1");

const segundoNombre = document.getElementById("segundoNombre");
const segundoNombre_1 = document.getElementById("segundoNombre_1");

const primerApellido = document.getElementById("primerApellido");
const primerApellido_1 = document.getElementById("primerApellido_1");

const segundoApellido = document.getElementById("segundoApellido");
const segundoApellido1 = document.getElementById("segundoApellido1");

const direccion = document.getElementById("direccion");
const direccion_1 = document.getElementById("direccion_1");

const email = document.getElementById("email");
const email_1 = document.getElementById("email_1");

const cntTelefono = document.getElementById("cntTelefono");
const cntTelefono_1 = document.getElementById("cntTelefono_1");

const tarjeta = document.getElementById("tarjeta");

const tipoTarjeta = document.getElementById("tipoTarjeta");

const fecha = document.getElementById("fecha");

const validacion = document.getElementById("validacion");

const new_hexagon = document.getElementsByClassName("new_hexagon");
const clickTwoStep = document.getElementsByClassName("clickTwoStep")[0];

const nextStep = document.getElementById("nextStep");

const beneficiary = document.getElementById("beneficiary");
const beneficiarySecond = document.getElementById("beneficiarySecond");
const nextStepThree = document.getElementById("nextStepThree");
/*--------------------------3----------------------------*/
const referencia = document.getElementById("referencia");
const referenceLabel = document.getElementById("referenciaLabel");
const bank = document.getElementById("banco");
const bankLabel = document.getElementById("bancoLabel");
const accNumber = document.getElementById("numCuenta");
const accNumberLabel = document.getElementById("numCuentaLabel");
const routing = document.getElementById("routing");
const routingLabel = document.getElementById("routingLabel");
const docIdentidad_1 = document.getElementById("docIdentidad_1");
const docId01Label = document.getElementById("docIdentidad_1Label");
const firstName01 = document.getElementById("primerNombre_1");
const firstName01Label = document.getElementById("primerNombre_1Label");
const middleName01 = document.getElementById("segundoNombre_2");
const middleName01Label = document.getElementById("segundoNombre_2Label");
const numTarjeta = document.getElementById("numTarjeta");
const numTarjetaLabel = document.getElementById("numTarjetaLabel");
const fecvenm = document.getElementById("fecvenm");
const fecvenmLabel = document.getElementById("fecvenmLabel");
const fecvena = document.getElementById("fecvena");
const fecvenaLabel = document.getElementById("fecvenaLabel");
const codValidacion = document.getElementById("codValidacion");
const codValidacionLabel = document.getElementById("codValidacionLabel");
const selectBeneficiario = document.getElementById("selectBeneficiario");
const selectBeneficiarioLabel = document.getElementById(
  "selectBeneficiarioLabel"
);
const selectCctype = document.getElementById("selectCctype");
const beneficiaryThirdStep = document.getElementById("beneficiaryThirdStep");
const beneficiaryThirdStepSecond = document.getElementById(
  "beneficiaryThirdStepSecond"
);
/*--------------------------4------------------------------*/
const docIdentidad_2 = document.getElementById("docIdentidad_2");
const docId02Label = document.getElementById("docIdentidad_2Label");
const firstName02 = document.getElementById("primerNombre_2");
const firstName02Label = document.getElementById("primerNombre_2Label");
const middleName02 = document.getElementById("segundoNombre_3");
const middleName02Label = document.getElementById("segundoNombre_3Label");
const lastName01 = document.getElementById("primerApellido_0");
const lastName01Label = document.getElementById("primerApellido_0Label");
const segundoApellido_1 = document.getElementById("segundoApellido_1");
const segundoApellido_1Label = document.getElementById(
  "segundoApellido_1Label"
);
const address01 = document.getElementById("direccion_3");
const address01Label = document.getElementById("direccion_3Label");
const email01 = document.getElementById("email_5");
const email01Label = document.getElementById("email_5Label");
const nextStepFour = document.getElementById("nextStepFour");
//----------------------5-----------------------------
const lastName02 = document.getElementById("primerApellido_2");
const lastName02Label = document.getElementById("primerApellido_2Label");
const secondLastName02 = document.getElementById("segundoApellido_2");
const secondLastName02Label = document.getElementById("segundoApellido_2Label");
const address02 = document.getElementById("direccion_2");
const address02Label = document.getElementById("direccion_2Label");
const email02 = document.getElementById("email_2");
const email02Label = document.getElementById("email_2Label");
const telefono = document.getElementById("telefono");
const phone01Label = document.getElementById("telefonoLabel");
const banco_1 = document.getElementById("banco_1");
const bank01Label = document.getElementById("banco_1Label");
const cuenta_1 = document.getElementById("cuenta_1");
const cuenta_1Label = document.getElementById("cuenta_1Label");
//------------------------6------------------------------
const cuenta_2 = document.getElementById("cuenta_2");
const cuenta_2Label = document.getElementById("cuenta_2Label");
const telefono_1 = document.getElementById("telefono_1");
const phone02Label = document.getElementById("telefono_1Label");
const bank02 = document.getElementById("banco_2");
const bank02Label = document.getElementById("banco_2Label");

/*---------------------------------------------------------------*/

let action = "";
let userTarjeta = [];
let otpCode = null;
let finalEncomienda = null;
let idprovider = "";
let idcountry = "";
let idclearencetype = "";
const urlToRes = "remittance.php";

function clearOptions(targetId) {
  var options = document.querySelectorAll("#" + targetId + " option");
  options.forEach((o) => {
    if (o.value != 0) {
      o.remove();
    }
  });
}

function validateEncomienda() {
  let idcountry = "",
    idprovider = "",
    idremitancetype = "",
    idcurrency = "",
    idclearencetype = "",
    acc = "",
    reference = "",
    bdocumentid = "",
    bfirstname = "",
    bmiddlename = "",
    blastname = "",
    bsecondlastaname = "",
    bbank = "",
    bacc = "",
    bank = "",
    routing = "";

  acc = document.getElementsByName("acc")[0].value;
  idcountry = document.getElementsByName("idcountry")[0].value;
  idprovider = document.getElementsByName("idprovider")[0].value;

  idremitancetype = document.getElementsByName("idremitancetype")[0].value;
  idcurrency = document.getElementsByName("idcurrency")[0].value;
  idclearencetype = document.getElementsByName("idclearencetype")[0].value;

  reference = document.getElementsByName("reference")[0].value;

  bdocumentid = setValueFromArray("bdocumentid", 2);
  bfirstname = setValueFromArray("bfirstname", 2);
  bmiddlename = setValueFromArray("bmiddlename", 2);
  blastname = setValueFromArray("blastname", 2);
  bsecondlastaname = setValueFromArray("bsecondlastaname", 2);
  bacc = setValueFromArray("bacc", 3);
  bbank = setValueFromArray("bbank", 2);

  //bbank = document.getElementsByName("bbank")[0].value;
  bank = document.getElementsByName("bank")[0].value;
  routing = document.getElementsByName("routing")[0].value;

  execsendok(
    mainLanguage,
    sesionID,
    idcountry,
    idprovider,
    monto.unmaskedValue,
    idremitancetype,
    idcurrency,
    idclearencetype,
    acc,
    reference,
    bdocumentid,
    bfirstname,
    bmiddlename,
    blastname,
    bsecondlastaname,
    bbank,
    bacc,
    userTarjeta.numTarjeta,
    userTarjeta.fechaVenAnio,
    userTarjeta.fechaVenMes,
    userTarjeta.codVal,
    userTarjeta.tipoTarjeta,
    bank,
    routing
  );
}

function setValueFromArray(tag, tagNumber = null) {
  let auxVal = "";
  for (let i = 0; i < tagNumber; i++) {
    const element = document.getElementsByName(`${tag}[${i}]`)[0];
    if (element.type === "text") {
      if (element.value != "") {
        auxVal = element.value;
      }
    }
    if (element.type === "select-one") {
      if (element.value != "0") {
        auxVal = element.value;
      }
    }
  }
  return auxVal;
}

function setValueSelectZero(id, formData = null) {
  if (document.getElementsByName(id)[0].value != "0") {
    if (formData instanceof FormData) {
      formData.append(id, document.getElementsByName(id)[0].value);
    } else {
      return document.getElementsByName(id)[0].value;
    }
  }
}

const getparty = async (language, idlead) => {
  const formData = new FormData();
  formData.append("cond", "getparty");
  formData.append("language", language);
  formData.append("idlead", idlead);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res.code === "0000") {
    userTarjeta = {
      addr: res.address,
      bdate: res.birthdate,
      idparty: res.idparty,
      numTarjeta: res.ccnumber,
      tipoTarjeta: res.cctype,
      fechaVenMes: res.ccexpmonth,
      fechaVenAnio: res.ccexpyear,
      codVal: res.cccvc,
    };
  }

  return res;
};

const getproviderl = async (language, idcountry, idlead) => {
  loaderOpen();
  const formData = new FormData();
  formData.append("cond", "getproviderl");
  formData.append("language", language);
  formData.append("idcountry", idcountry);
  formData.append("idlead", idlead);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res.list) {
    clearOptions("Proveedor");
    res.list.forEach((e) => {
      let opt = document.createElement("option");
      opt.value = e["name"];
      opt.innerHTML = e["name"];
      opt.id = e["id"];
      proveedor.add(opt);
    });
  }
  loaderClose();
  return res;
};

const execsendok = async (
  language,
  idlead,
  idcountry,
  idprovider,
  amount,
  idremitancetype,
  idcurrency,
  idclearencetype,
  acc,
  reference,
  bdocumentid,
  bfirstname,
  bmiddlename,
  blastname,
  bsecondlastaname,
  bbank,
  bacc,
  ccnumber,
  ccexpyear,
  ccexpmonth,
  cccvc,
  cctype,
  bank,
  routing
) => {
  loaderOpen();
  const formData = new FormData();
  formData.append("cond", "execsendok");
  formData.append("language", language);
  formData.append("idlead", idlead);
  formData.append("idcountry", idcountry);
  formData.append("idprovider", idprovider);
  formData.append("amount", amount);
  formData.append("idremitancetype", idremitancetype);
  formData.append("idcurrency", idcurrency);
  formData.append("idclearencetype", idclearencetype);
  formData.append("acc", acc);
  formData.append("reference", reference);
  formData.append("bdocumentid", bdocumentid);
  formData.append("bfirstname", bfirstname);
  formData.append("bmiddlename", bmiddlename);
  formData.append("blastname", blastname);
  formData.append("bsecondlastaname", bsecondlastaname);
  formData.append("bbank", bbank);
  formData.append("bacc", bacc);
  formData.append("ccnumber", ccnumber);
  formData.append("ccexpyear", ccexpyear);
  formData.append("ccexpmonth", ccexpmonth);
  formData.append("cccvc", cccvc);
  formData.append("cctype", cctype);
  formData.append("bank", bank);
  formData.append("routing", routing);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res.code === "0000") {
    genotp(mainLanguage, sesionID);
  } else if (res.code === "5000") {
    showAlertMessage(res.message, urlToRes);
  } else if (res.code === "7001") {
    docPenAction(res, urlToRes);
  }

  return res;
};

const getremitancetypel = async (language, idprovider, idlead) => {
  loaderOpen();
  const formData = new FormData();
  formData.append("cond", "getremitancetypel");
  formData.append("language", language);
  formData.append("idprovider", idprovider);
  formData.append("idlead", idlead);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res.list) {
    clearOptions("selectEntrega");
    res.list.forEach((e) => {
      let opt = document.createElement("option");
      opt.value = e["name"];
      opt.innerHTML = e["name"];
      opt.id = e["id"];
      coin.add(opt);
    });
  }
  loaderClose();
  return res;
};

const calcsend = async (
  language,
  idprovider,
  idcountry,
  amount,
  idlead,
  idclearencetype
) => {
  loaderOpen();
  const formData = new FormData();
  formData.append("cond", "calcsend");
  formData.append("language", language);
  formData.append("idprovider", idprovider);
  formData.append("idcountry", idcountry);
  formData.append("amount", amount);
  formData.append("idlead", idlead);
  formData.append("idclearencetype", idclearencetype);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res.code === "0000") {
    callModal.classList.remove("dis");
    gifLoader.classList.add("dis");
    /* Modal Ventana */
    document.getElementById("txtcurrcommission").innerHTML =
      res.txtusdcommission;
    document.getElementById("currcommission").innerHTML = res.usdcommission;
    document.getElementById("totalves").innerHTML = res.totalves;
    document.getElementById("usdrate").innerHTML = res.usdrate;
    document.getElementById("txtvescommission").innerHTML =
      res.txtvescommission;
    document.getElementById("vescommission").innerHTML = res.vescommission;
    document.getElementById("totalves").innerHTML = res.totalves;

    tradTasaMontoModal(res.usdrate, res.vescommission);
  }

  return res;
};
function tradTasaMontoModal(tasaVal, montoVal) {
  let tradTasa = "",
    tradMonto = "";

  if (mainLanguage === "es") {
    tradTasa = jsonEs["trad_tasa_de_cambio"];
    tradMonto = jsonEs["trad_monto"];
  }
  if (mainLanguage === "en") {
    tradTasa = jsonEn["trad_tasa_de_cambio"];
    tradMonto = jsonEn["trad_monto"];
  }

  tasa.placeholder = tradTasa + " " + tasaVal;
  tasa.value = tradTasa + " " + tasaVal;
  tasa.innerHTML = tradTasa + " " + tasaVal;
  tasa.replaceChildren();

  montoBs.placeholder = tradMonto + " " + montoVal;
  montoBs.value = tradMonto + " " + montoVal;
  montoBs.innerHTML = tradMonto + " " + montoVal;
  montoBs.replaceChildren();
}

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
    otpCode = res.otp;
    let amount = monto.unmaskedValue;
    let idcountry = "",
      idprovider = "",
      idremitancetype = "",
      idcurrency = "",
      idclearencetype = "",
      acc = "",
      reference = "",
      bdocumentid = "",
      bfirstname = "",
      bmiddlename = "",
      blastname = "",
      bsecondlastaname = "",
      bbank = "",
      bacc = "",
      bank = "",
      routing = "";

    acc = document.getElementsByName("acc")[0].value;
    idcountry = document.getElementsByName("idcountry")[0].value;
    idprovider = document.getElementsByName("idprovider")[0].value;

    idremitancetype = document.getElementsByName("idremitancetype")[0].value;
    idcurrency = document.getElementsByName("idcurrency")[0].value;
    idclearencetype = document.getElementsByName("idclearencetype")[0].value;

    reference = document.getElementsByName("reference")[0].value;

    bdocumentid = setValueFromArray("bdocumentid", 2);
    bfirstname = setValueFromArray("bfirstname", 2);
    bmiddlename = setValueFromArray("bmiddlename", 2);
    blastname = setValueFromArray("blastname", 2);
    bsecondlastaname = setValueFromArray("bsecondlastaname", 2);
    bbank = setValueFromArray("bbank", 2);
    bacc = setValueFromArray("bacc", 3);

    bank = document.getElementsByName("bank")[0].value;
    routing = document.getElementsByName("routing")[0].value;

    execsend(
      mainLanguage,
      sesionID,
      idcountry,
      idprovider,
      amount,
      idremitancetype,
      idcurrency,
      idclearencetype,
      acc,
      reference,
      bdocumentid,
      bfirstname,
      bmiddlename,
      blastname,
      bsecondlastaname,
      bbank,
      bacc,
      userTarjeta.numTarjeta,
      userTarjeta.fechaVenAnio,
      userTarjeta.fechaVenMes,
      userTarjeta.codVal,
      userTarjeta.tipoTarjeta,
      otpCode,
      bank,
      routing
    );
  }

  return res;
};

const execsend = async (
  language,
  idlead,
  idcountry,
  idprovider,
  amount,
  idremitancetype,
  idcurrency,
  idclearencetype,
  acc,
  reference,
  bdocumentid,
  bfirstname,
  bmiddlename,
  blastname,
  bsecondlastaname,
  bbank,
  bacc,
  ccnumber,
  ccexpyear,
  ccexpmonth,
  cccvc,
  cctype,
  otp,
  bank,
  routing
) => {
  const formData = new FormData();
  formData.append("cond", "execsend");
  formData.append("language", language);
  formData.append("idlead", idlead);
  formData.append("idcountry", idcountry);
  formData.append("idprovider", idprovider);
  formData.append("amount", amount);
  formData.append("idremitancetype", idremitancetype);
  formData.append("idcurrency", idcurrency);
  formData.append("idclearencetype", idclearencetype);
  formData.append("acc", acc);
  formData.append("reference", reference);
  formData.append("bdocumentid", bdocumentid);
  formData.append("bfirstname", bfirstname);
  formData.append("bmiddlename", bmiddlename);
  formData.append("blastname", blastname);
  formData.append("bsecondlastaname", bsecondlastaname);
  formData.append("bbank", bbank);
  formData.append("bacc", bacc);
  formData.append("ccnumber", ccnumber);
  formData.append("ccexpyear", ccexpyear);
  formData.append("ccexpmonth", ccexpmonth);
  formData.append("cccvc", cccvc);
  formData.append("cctype", cctype);
  formData.append("otp", otp);
  formData.append("bank", bank);
  formData.append("routing", routing);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (
    res.otp === undefined &&
    res.code === "0000" &&
    res.message.indexOf("OK") != -1
  ) {
    showConfirmationMessage(res.message, urlToRes, otpCode);
  }
  if (res.otp === undefined && res.code === "5000") {
    showAlertMessage(res.message, urlToRes);
  }

  return res;
};

function getCountryList() {
  idcountry = pais.options[pais.selectedIndex].id;
  getproviderl(mainLanguage, idcountry, sesionID);
}
pais.addEventListener("change", getCountryList, false);
function setScreenTwo() {
  getremitancetypel(mainLanguage, idprovider, sesionID);
}
for (let i = 0; i < buttonOne_next.length; i++) {
  buttonOne_next[i].addEventListener("click", setScreenTwo, false);
}

function getPayMethod() {
  idclearencetype = pago.options[pago.selectedIndex].id;
}
pago.addEventListener("change", getPayMethod, false);

clickTwoStep.addEventListener("click", function () {
  if (pago.value != 0) {
    if (selectEntrega.options[selectEntrega.selectedIndex].value != "0") {
      changeScrTwoToThree();
      clickButtonTwoNext();
      selectEntrega.options[selectEntrega.selectedIndex].value != "0"
        ? switchBackStep(pago.value, "3", "purple", getIdEntrega())
        : switchBackStep(pago.value, "3", "purple");
    }
  }
});

function getProviderList() {
  idprovider = proveedor.options[proveedor.selectedIndex].id;
}
proveedor.addEventListener("change", getProviderList, false);

function setScreenFive() {
  for (let i = 0; i < new_hexagon.length; i++) {
    new_hexagon[i].classList.add("background");
  }
}
function setBackScreenFour() {
  for (let i = 0; i < new_hexagon.length; i++) {
    new_hexagon[i].classList.remove("background");
  }
}
function setScreenSix() {
  for (let i = 0; i < new_hexagon.length; i++) {
    new_hexagon[i].classList.add("background");
  }
}
function setBackScreenFive() {
  for (let i = 0; i < new_hexagon.length; i++) {
    new_hexagon[i].classList.remove("background");
  }
}

function labelStyle(
  element,
  classAdd,
  classRemove01,
  classRemove02,
  classRemove03
) {
  element.classList.add(classAdd);
  element.classList.remove(classRemove01);
  element.classList.remove(classRemove02);
  element.classList.remove(classRemove03);
}

function clickButtonTwoNext() {
  callModalOwn();
  beneficiary.classList.remove("dis");
  beneficiaryThirdStep.classList.remove("dis");
  //getIdEntrega();
  nextStepThree.classList.remove("dis");
  nextStepFour.classList.remove("dis");
  let refTop1 = 0;
  let refTop2 = 0;
  switch (idclearencetype) {
    case "6":
      if (getIdEntrega() == "null" || getIdEntrega() == "2") {
        changerSteps("5", "3", "purple");
        beneficiarySecond.addEventListener("click", function () {
          setBackScreenFive();
          beneficiarySecond.classList.add("dis");
          beneficiary.classList.remove("dis");
          nextStepThree.classList.remove("dis");

          cntDocId01.classList.add("dis");
          nombre_1.classList.add("dis");
          segundoNombre_1.classList.add("dis");

          changerSteps("5", "3", "purple");
          labelStyle(
            selectBeneficiarioLabel,
            "selectBeneficiarioLabel04",
            "selectBeneficiarioLabel03",
            "selectBeneficiarioLabel02",
            "selectBeneficiarioLabel01"
          );
        });
      } else if (getIdEntrega() == "3") {
        changerSteps("6", "3", "purple");
        beneficiarySecond.addEventListener("click", function () {
          setBackScreenFive();
          beneficiarySecond.classList.add("dis");
          beneficiary.classList.remove("dis");
          nextStepThree.classList.remove("dis");
          cntDocId01.classList.add("dis");
          nombre_1.classList.add("dis");
          segundoNombre_1.classList.add("dis");
          changerSteps("6", "3", "purple");
          labelStyle(
            selectBeneficiarioLabel,
            "selectBeneficiarioLabel04",
            "selectBeneficiarioLabel03",
            "selectBeneficiarioLabel02",
            "selectBeneficiarioLabel01"
          );
        });
      }

      beneficiary.addEventListener("click", function () {
        setScreenFive();
        beneficiarySecond.classList.remove("dis");
        beneficiary.classList.add("dis");
        nextStepThree.classList.add("dis");
        changerSteps("3", "3", "purple");
        labelStyle(
          selectBeneficiarioLabel,
          "selectBeneficiarioLabel04",
          "selectBeneficiarioLabel03",
          "selectBeneficiarioLabel02",
          "selectBeneficiarioLabel01"
        );
      });
      /*--------------3-----------------*/
      ctaReceptora.classList.add("dis");
      cntReferencia.classList.add("dis");
      cntDocId01.classList.add("dis");
      nombre_1.classList.add("dis");
      segundoNombre_1.classList.add("dis");
      cntBanco.classList.remove("dis");
      cuenta.classList.remove("dis");
      beneficiario.classList.remove("dis");
      cntRouting.classList.remove("dis");
      tarjeta.classList.add("dis");
      tipoTarjeta.classList.add("dis");
      fecha.classList.add("dis");
      validacion.classList.add("dis");
      bankLabel.classList.add("bankLabel01");
      routingLabel.classList.add("routingLabel03");
      //accNumberLabel.classList.add("accNumber01Label02");
      labelStyle(
        selectBeneficiarioLabel,
        "selectBeneficiarioLabel04",
        "selectBeneficiarioLabel03",
        "selectBeneficiarioLabel02",
        "selectBeneficiarioLabel01"
      );
      banco.addEventListener(
        "focusin",
        actionFocus.bind(null, banco, "2px", "remittance"),
        false
      );
      banco.addEventListener(
        "focusout",
        actionFocusOut.bind(null, banco, "16px", "remittance"),
        false
      );
      accNumber.addEventListener(
        "focusin",
        actionFocus.bind(null, accNumber, "72px", "remittance"),
        false
      );
      accNumber.addEventListener(
        "focusout",
        actionFocusOut.bind(null, accNumber, "87px", "remittance"),
        false
      );
      routing.addEventListener(
        "focusin",
        actionFocus.bind(null, routing, "140px", "remittance"),
        false
      );
      routing.addEventListener(
        "focusout",
        actionFocusOut.bind(null, routing, "156px", "remittance"),
        false
      );
      selectBeneficiario.addEventListener(
        "focusin",
        actionFocusSel.bind(null, selectBeneficiario, "212px", "remittance"),
        false
      );
      selectBeneficiario.addEventListener(
        "focusout",
        actionFocusOutSel.bind(null, selectBeneficiario, "227px", "remittance"),
        false
      );

      /*--------------4-----------------*/
      beneficiario_1.classList.add("dis");
      cntDocId02.classList.remove("dis");
      nombre.classList.remove("dis");
      segundoNombre.classList.remove("dis");
      primerApellido.classList.remove("dis");
      segundoApellido.classList.add("dis");
      direccion_1.classList.add("dis");
      email_1.classList.add("dis");
      labelStyle(
        docId02Label,
        "docId02Label01",
        "docId02Label02",
        "docId02Label03",
        "docId02Label04"
      );
      labelStyle(
        firstName02Label,
        "firstName02Label02",
        "firstName02Label03",
        "firstName02Label04",
        "firstName02Label01"
      );
      labelStyle(
        middleName02Label,
        "middleName02Label03",
        "middleName02Label01",
        "middleName02Label04",
        "middleName02Label02"
      );
      labelStyle(
        lastName01Label,
        "lastName01Label04",
        "lastName01Label01",
        "lastName01Label02",
        "lastName01Label03"
      );
      docIdentidad_2.addEventListener(
        "focusin",
        actionFocus.bind(null, docIdentidad_2, "2px", "remittance"),
        false
      );
      docIdentidad_2.addEventListener(
        "focusout",
        actionFocusOut.bind(null, docIdentidad_2, "16px", "remittance"),
        false
      );
      firstName02.addEventListener(
        "focusin",
        actionFocus.bind(null, firstName02, "72px", "remittance"),
        false
      );
      firstName02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, firstName02, "87px", "remittance"),
        false
      );
      middleName02.addEventListener(
        "focusin",
        actionFocus.bind(null, middleName02, "140px", "remittance"),
        false
      );
      middleName02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, middleName02, "156px", "remittance"),
        false
      );
      lastName01.addEventListener(
        "focusin",
        actionFocus.bind(null, lastName01, "212px", "remittance"),
        false
      );
      lastName01.addEventListener(
        "focusout",
        actionFocusOut.bind(null, lastName01, "227px", "remittance"),
        false
      );
      /*--------------5-----------------*/
      direccion.classList.remove("dis");
      email.classList.remove("dis");
      cntTelefono.classList.remove("dis");
      segundoApellido1.classList.remove("dis");
      labelStyle(
        secondLastName02Label,
        "secondLastName02Label01",
        "secondLastName02Label02",
        "secondLastName02Label03",
        "secondLastName02Label04"
      );
      labelStyle(
        address02Label,
        "address02Label02",
        "address02Label03",
        "address02Label04",
        "address02Label01"
      );
      labelStyle(
        email02Label,
        "email02Label03",
        "email02Label01",
        "email02Label04",
        "email02Label02"
      );
      labelStyle(
        phone01Label,
        "phone01Label04",
        "phone01Label01",
        "phone01Label02",
        "phone01Label03"
      );
      secondLastName02.addEventListener(
        "focusin",
        actionFocus.bind(null, secondLastName02, "2px", "remittance"),
        false
      );
      secondLastName02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, secondLastName02, "16px", "remittance"),
        false
      );
      address02.addEventListener(
        "focusin",
        actionFocus.bind(null, address02, "72px", "remittance"),
        false
      );
      address02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, address02, "87px", "remittance"),
        false
      );
      email02.addEventListener(
        "focusin",
        actionFocus.bind(null, email02, "140px", "remittance"),
        false
      );
      email02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, email02, "156px", "remittance"),
        false
      );
      setScreenSix;
      telefono.addEventListener(
        "focusin",
        actionFocus.bind(null, telefono, "212px", "remittance"),
        false
      );
      telefono.addEventListener(
        "focusout",
        actionFocusOut.bind(null, telefono, "227px", "remittance"),
        false
      );
      /*--------------------6---------------*/
      cntTelefono_1.classList.add("dis");
      cntBanco_2.classList.remove("dis");
      cntCuenta_2.classList.remove("dis");

      labelStyle(
        cuenta_2Label,
        "accNumber03Label04",
        "accNumber03Label02",
        "accNumber03Label03",
        "accNumber03Label01"
      );
      labelStyle(
        bank02Label,
        "bbank02Label01",
        "bbank02Label04",
        "bbank02Label02",
        "bbank02Label03"
      );
      bank02Label.classList.remove("bbank02Label05");
      cuenta_2.addEventListener(
        "focusin",
        actionFocus.bind(null, cuenta_2, "212px", "remittance"),
        false
      );
      cuenta_2.addEventListener(
        "focusout",
        actionFocusOut.bind(null, cuenta_2, "227px", "remittance"),
        false
      );
      bank02.addEventListener(
        "focusin",
        actionFocus.bind(null, bank02, "2px", "remittance"),
        false
      );
      bank02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, bank02, "16px", "remittance"),
        false
      );
      break;
    case "3":
    case "4":
      if (
        getIdEntrega() == "null" ||
        getIdEntrega() == "3" ||
        getIdEntrega() == "2"
      ) {
        changerSteps("6", "3", "purple");
      }
      cntDocId01.classList.remove("dis");
      /*--------------3-----------------*/
      cntBanco.classList.add("dis");
      cuenta.classList.add("dis");
      cntRouting.classList.add("dis");
      nombre_1.classList.add("dis");
      segundoNombre_1.classList.add("dis");
      ctaReceptora.classList.remove("dis");
      cntReferencia.classList.remove("dis");
      beneficiario.classList.remove("dis");
      cntDocId01.classList.remove("dis");
      tarjeta.classList.add("dis");
      tipoTarjeta.classList.add("dis");
      fecha.classList.add("dis");
      validacion.classList.add("dis");
      labelStyle(
        docId01Label,
        "docId01Label04",
        "docId01Label03",
        "docId01Label02",
        "docId01Label01"
      );
      labelStyle(
        referenceLabel,
        "referenceLabel02",
        "referenceLabel03",
        "referenceLabel04",
        "referenceLabel01"
      );
      referenceLabel.classList.remove("referenceLabel05");
      setFocusElement(referencia, "72px", "87px", "remittance");
      labelStyle(
        selectBeneficiarioLabel,
        "selectBeneficiarioLabel03",
        "selectBeneficiarioLabel04",
        "selectBeneficiarioLabel02",
        "selectBeneficiarioLabel01"
      );
      docIdentidad_1.addEventListener(
        "focusin",
        actionFocus.bind(null, docIdentidad_1, "212px", "remittance"),
        false
      );
      docIdentidad_1.addEventListener(
        "focusout",
        actionFocusOut.bind(null, docIdentidad_1, "227px", "remittance"),
        false
      );
      referencia.addEventListener(
        "focusin",
        actionFocus.bind(null, referencia, "72px", "remittance"),
        false
      );
      referencia.addEventListener(
        "focusout",
        actionFocusOut.bind(null, referencia, "87px", "remittance"),
        false
      );
      selectBeneficiario.addEventListener(
        "focusin",
        actionFocusSel.bind(null, selectBeneficiario, "140px", "remittance"),
        false
      );
      selectBeneficiario.addEventListener(
        "focusout",
        actionFocusOutSel.bind(null, selectBeneficiario, "156px", "remittance"),
        false
      );
      /*--------------4-----------------*/
      beneficiario_1.classList.add("dis");
      cntDocId02.classList.add("dis");
      direccion_1.classList.add("dis");
      email_1.classList.add("dis");
      nombre.classList.remove("dis");
      segundoNombre.classList.remove("dis");
      primerApellido.classList.remove("dis");
      segundoApellido.classList.remove("dis");
      labelStyle(
        firstName02Label,
        "firstName02Label01",
        "firstName02Label02",
        "firstName02Label03",
        "firstName02Label04"
      );
      labelStyle(
        middleName02Label,
        "middleName02Label02",
        "middleName02Label03",
        "middleName02Label04",
        "middleName02Label01"
      );
      labelStyle(
        lastName01Label,
        "lastName01Label03",
        "lastName01Label01",
        "lastName01Label04",
        "lastName01Label02"
      );
      labelStyle(
        segundoApellido_1Label,
        "secondLastName01Label04",
        "secondLastName01Label01",
        "secondLastName01Label02",
        "secondLastName01Label03"
      );
      firstName02.addEventListener(
        "focusin",
        actionFocus.bind(null, firstName02, "2px", "remittance"),
        false
      );
      firstName02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, firstName02, "16px", "remittance"),
        false
      );
      middleName02.addEventListener(
        "focusin",
        actionFocus.bind(null, middleName02, "72px", "remittance"),
        false
      );
      middleName02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, middleName02, "87px", "remittance"),
        false
      );
      lastName01.addEventListener(
        "focusin",
        actionFocus.bind(null, lastName01, "140px", "remittance"),
        false
      );
      lastName01.addEventListener(
        "focusout",
        actionFocusOut.bind(null, lastName01, "156px", "remittance"),
        false
      );
      segundoApellido_1.addEventListener(
        "focusin",
        actionFocus.bind(null, segundoApellido_1, "212px", "remittance"),
        false
      );
      segundoApellido_1.addEventListener(
        "focusout",
        actionFocusOut.bind(null, segundoApellido_1, "227px", "remittance"),
        false
      );
      /*--------------5-----------------*/
      direccion.classList.remove("dis");
      email.classList.remove("dis");
      cntTelefono.classList.remove("dis");
      cntBanco_1.classList.remove("dis");
      labelStyle(
        address02Label,
        "address02Label01",
        "address02Label02",
        "address02Label03",
        "address02Label04"
      );
      labelStyle(
        email02Label,
        "email02Label02",
        "email02Label03",
        "email02Label04",
        "email02Label01"
      );
      labelStyle(
        phone01Label,
        "phone01Label03",
        "phone01Label01",
        "phone01Label04",
        "phone01Label02"
      );
      labelStyle(
        bank01Label,
        "bbank01Label04",
        "bbank01Label01",
        "bbank01Label02",
        "bbank01Label03"
      );
      bank01Label.classList.remove("bbank01Label05");
      address02.addEventListener(
        "focusin",
        actionFocus.bind(null, address02, "2px", "remittance"),
        false
      );
      address02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, address02, "16px", "remittance"),
        false
      );
      email02.addEventListener(
        "focusin",
        actionFocus.bind(null, email02, "72px", "remittance"),
        false
      );
      email02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, email02, "87px", "remittance"),
        false
      );
      telefono.addEventListener(
        "focusin",
        actionFocus.bind(null, telefono, "140px", "remittance"),
        false
      );
      telefono.addEventListener(
        "focusout",
        actionFocusOut.bind(null, telefono, "156px", "remittance"),
        false
      );
      banco_1.addEventListener(
        "focusin",
        actionFocus.bind(null, banco_1, "212px", "remittance"),
        false
      );
      banco_1.addEventListener(
        "focusout",
        actionFocusOut.bind(null, banco_1, "227px", "remittance"),
        false
      );
      /*--------------6-----------------*/
      cntTelefono_1.classList.add("dis");
      cntBanco_2.classList.add("dis");
      cntCuenta_2.classList.remove("dis");
      labelStyle(
        cuenta_2Label,
        "accNumber03Label01",
        "accNumber03Label02",
        "accNumber03Label03",
        "accNumber03Label04"
      );
      cuenta_2.addEventListener(
        "focusin",
        actionFocus.bind(null, cuenta_2, "2px", "remittance"),
        false
      );
      cuenta_2.addEventListener(
        "focusout",
        actionFocusOut.bind(null, cuenta_2, "16px", "remittance"),
        false
      );

      if (idclearencetype == "3") {
        for (let i = 0; i < buttonFive_next.length; i++) {
          buttonFive_next[i].addEventListener("click", setScreenSix, false);
          buttonSix_back[i].addEventListener("click", setBackScreenFive, false);
        }
      }
      beneficiarySecond.addEventListener("click", function () {
        setBackScreenFive();
        beneficiarySecond.classList.add("dis");
        beneficiary.classList.remove("dis");
        nextStepThree.classList.remove("dis");
        cntDocId01.classList.remove("dis");
        nombre_1.classList.add("dis");
        segundoNombre_1.classList.add("dis");
        changerSteps("6", "3", "purple");
        labelStyle(
          referenceLabel,
          "referenceLabel02",
          "referenceLabel03",
          "referenceLabel04",
          "referenceLabel01"
        );
        referenceLabel.classList.remove("referenceLabel05");
        referencia.addEventListener(
          "focusin",
          actionFocus.bind(null, referencia, "72px", "remittance"),
          false
        );
        referencia.addEventListener(
          "focusout",
          actionFocusOut.bind(null, referencia, "87px", "remittance"),
          false
        );
        setFocusElement(referencia, "72px", "87px", "remittance");
        labelStyle(
          selectBeneficiarioLabel,
          "selectBeneficiarioLabel03",
          "selectBeneficiarioLabel04",
          "selectBeneficiarioLabel02",
          "selectBeneficiarioLabel01"
        );
      });
      beneficiary.addEventListener("click", function () {
        setScreenFive();
        beneficiarySecond.classList.remove("dis");
        beneficiary.classList.add("dis");
        nextStepThree.classList.add("dis");
        cntDocId01.classList.add("dis");
        changerSteps("3", "3", "purple");
        labelStyle(
          referenceLabel,
          "referenceLabel05",
          "referenceLabel03",
          "referenceLabel04",
          "referenceLabel01"
        );
        referenceLabel.classList.remove("referenceLabel02");
        referencia.addEventListener(
          "focusin",
          actionFocus.bind(null, referencia, "107px", "remittance"),
          false
        );
        referencia.addEventListener(
          "focusout",
          actionFocusOut.bind(null, referencia, "120px", "remittance"),
          false
        );
        setFocusElement(referencia, "107px", "120px", "remittance");
        labelStyle(
          selectBeneficiarioLabel,
          "selectBeneficiarioLabel04",
          "selectBeneficiarioLabel03",
          "selectBeneficiarioLabel02",
          "selectBeneficiarioLabel01"
        );
      });
      break;
    case "1":
      if (getIdEntrega() == "null" || getIdEntrega() == "2") {
        changerSteps("5", "3", "purple");
        cntDocId01.classList.remove("dis");
        nombre_1.classList.remove("dis");
        email.classList.remove("dis");
        cntTelefono.classList.remove("dis");
        labelStyle(
          email02Label,
          "email02Label01",
          "email02Label02",
          "email02Label03",
          "email02Label04"
        );
        labelStyle(
          phone01Label,
          "phone01Label04",
          "phone01Label01",
          "phone01Label02",
          "phone01Label03"
        );
        phone01Label.classList.remove("phone01Label02");
        email02.addEventListener(
          "focusin",
          actionFocus.bind(null, email02, "2px", "remittance"),
          false
        );
        email02.addEventListener(
          "focusout",
          actionFocusOut.bind(null, email02, "16px", "remittance"),
          false
        );
        telefono.addEventListener(
          "focusin",
          actionFocus.bind(null, telefono, "212px", "remittance"),
          false
        );
        telefono.addEventListener(
          "focusout",
          actionFocusOut.bind(null, telefono, "227px", "remittance"),
          false
        );
      } else if (getIdEntrega() == "3") {
        changerSteps("5", "3", "purple");
        segundoApellido1.classList.add("dis");
        direccion.classList.add("dis");
        primerApellido_1.classList.add("dis");
        email.classList.remove("dis");
        cntTelefono.classList.remove("dis");
        cntBanco_1.classList.remove("dis");
        cntCuenta_1.classList.remove("dis");
        labelStyle(
          email02Label,
          "email02Label01",
          "email02Label02",
          "email02Label03",
          "email02Label04"
        );
        labelStyle(
          phone01Label,
          "phone01Label02",
          "phone01Label01",
          "phone01Label03",
          "phone01Label04"
        );
        phone01Label.classList.remove("phone01Label04");
        labelStyle(
          bank01Label,
          "bbank01Label03",
          "bbank01Label02",
          "bbank01Label05",
          "bbank01Label04"
        );
        bank01Label.classList.remove("bbank01Label01");
        labelStyle(
          cuenta_1Label,
          "accNumber02Label04",
          "accNumber02Label01",
          "accNumber02Label03",
          "accNumber02Label02"
        );
        email02.addEventListener(
          "focusin",
          actionFocus.bind(null, email02, "2px", "remittance"),
          false
        );
        email02.addEventListener(
          "focusout",
          actionFocusOut.bind(null, email02, "16px", "remittance"),
          false
        );
        telefono.addEventListener(
          "focusin",
          actionFocus.bind(null, telefono, "72px", "remittance"),
          false
        );
        telefono.addEventListener(
          "focusout",
          actionFocusOut.bind(null, telefono, "87px", "remittance"),
          false
        );
        banco_1.addEventListener(
          "focusin",
          actionFocus.bind(null, banco_1, "143px", "remittance"),
          false
        );
        banco_1.addEventListener(
          "focusout",
          actionFocusOut.bind(null, banco_1, "156px", "remittance"),
          false
        );
        cuenta_1.addEventListener(
          "focusin",
          actionFocus.bind(null, cuenta_1, "212px", "remittance"),
          false
        );
        cuenta_1.addEventListener(
          "focusout",
          actionFocusOut.bind(null, cuenta_1, "227px", "remittance"),
          false
        );
      }
      /*--------------3-----------------*/
      ctaReceptora.classList.add("dis");
      cntBanco.classList.add("dis");
      cuenta.classList.add("dis");
      cntRouting.classList.add("dis");
      segundoNombre_1.classList.add("dis");
      tarjeta.classList.add("dis");
      tipoTarjeta.classList.add("dis");
      fecha.classList.add("dis");
      validacion.classList.add("dis");
      cntReferencia.classList.remove("dis");
      beneficiario.classList.remove("dis");
      cntDocId01.classList.remove("dis");
      nombre_1.classList.remove("dis");
      labelStyle(
        referenceLabel,
        "referenceLabel01",
        "referenceLabel02",
        "referenceLabel03",
        "referenceLabel04"
      );
      referenceLabel.classList.remove("referenceLabel05");
      setFocusElement(referencia, "2px", "16px", "remittance");
      labelStyle(
        docId01Label,
        "docId01Label03",
        "docId01Label02",
        "docId01Label04",
        "docId01Label01"
      );
      labelStyle(
        firstName01Label,
        "firstName01Label04",
        "firstName01Label01",
        "firstName01Label02",
        "firstName01Label03"
      );
      labelStyle(
        selectBeneficiarioLabel,
        "selectBeneficiarioLabel02",
        "selectBeneficiarioLabel03",
        "selectBeneficiarioLabel04",
        "selectBeneficiarioLabel01"
      );
      referencia.addEventListener(
        "focusin",
        actionFocus.bind(null, referencia, "2px", "remittance"),
        false
      );
      referencia.addEventListener(
        "focusout",
        actionFocusOut.bind(null, referencia, "16px", "remittance"),
        false
      );
      docIdentidad_1.addEventListener(
        "focusin",
        actionFocus.bind(null, docIdentidad_1, "140px", "remittance"),
        false
      );
      docIdentidad_1.addEventListener(
        "focusout",
        actionFocusOut.bind(null, docIdentidad_1, "156px", "remittance"),
        false
      );
      firstName01.addEventListener(
        "focusin",
        actionFocus.bind(null, firstName01, "212px", "remittance"),
        false
      );
      firstName01.addEventListener(
        "focusout",
        actionFocusOut.bind(null, firstName01, "227px", "remittance"),
        false
      );
      selectBeneficiario.addEventListener(
        "focusin",
        actionFocusSel.bind(null, selectBeneficiario, "72px", "remittance"),
        false
      );
      selectBeneficiario.addEventListener(
        "focusout",
        actionFocusOutSel.bind(null, selectBeneficiario, "87px", "remittance"),
        false
      );
      /*--------------4-----------------*/
      beneficiario_1.classList.add("dis");
      cntDocId02.classList.add("dis");
      nombre.classList.add("dis");
      email_1.classList.add("dis");
      segundoNombre.classList.remove("dis");
      primerApellido.classList.remove("dis");
      segundoApellido.classList.remove("dis");
      direccion_1.classList.remove("dis");
      labelStyle(
        middleName02Label,
        "middleName02Label01",
        "middleName02Label02",
        "middleName02Label03",
        "middleName02Label04"
      );
      labelStyle(
        lastName01Label,
        "lastName01Label02",
        "lastName01Label03",
        "lastName01Label04",
        "lastName01Label01"
      );
      labelStyle(
        segundoApellido_1Label,
        "secondLastName01Label03",
        "secondLastName01Label01",
        "secondLastName01Label04",
        "secondLastName01Label02"
      );
      labelStyle(
        address01Label,
        "address01Label04",
        "address01Label01",
        "address01Label02",
        "address01Label03"
      );
      middleName02.addEventListener(
        "focusin",
        actionFocus.bind(null, middleName02, "2px", "remittance"),
        false
      );
      middleName02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, middleName02, "16px", "remittance"),
        false
      );
      lastName01.addEventListener(
        "focusin",
        actionFocus.bind(null, lastName01, "72px", "remittance"),
        false
      );
      lastName01.addEventListener(
        "focusout",
        actionFocusOut.bind(null, lastName01, "87px", "remittance"),
        false
      );
      segundoApellido_1.addEventListener(
        "focusin",
        actionFocus.bind(null, segundoApellido_1, "140px", "remittance"),
        false
      );
      segundoApellido_1.addEventListener(
        "focusout",
        actionFocusOut.bind(null, segundoApellido_1, "156px", "remittance"),
        false
      );
      address01.addEventListener(
        "focusin",
        actionFocus.bind(null, address01, "212px", "remittance"),
        false
      );
      address01.addEventListener(
        "focusout",
        actionFocusOut.bind(null, address01, "227px", "remittance"),
        false
      );
      /*--------------5-----------------*/

      beneficiarySecond.addEventListener("click", function () {
        setBackScreenFive();
        beneficiarySecond.classList.add("dis");
        beneficiary.classList.remove("dis");
        nextStepThree.classList.remove("dis");
        cntDocId01.classList.remove("dis");
        nombre_1.classList.remove("dis");
        segundoNombre_1.classList.add("dis");
        changerSteps("5", "3", "purple");
        labelStyle(
          selectBeneficiarioLabel,
          "selectBeneficiarioLabel02",
          "selectBeneficiarioLabel03",
          "selectBeneficiarioLabel04",
          "selectBeneficiarioLabel01"
        );
        labelStyle(
          referenceLabel,
          "referenceLabel01",
          "referenceLabel02",
          "referenceLabel03",
          "referenceLabel04"
        );
        referenceLabel.classList.remove("referenceLabel05");
        setFocusElement(referencia, "2px", "16px", "remittance");
      });
      beneficiary.addEventListener("click", function () {
        setScreenFive();
        beneficiarySecond.classList.remove("dis");
        beneficiary.classList.add("dis");
        nextStepThree.classList.add("dis");
        cntDocId01.classList.add("dis");
        nombre_1.classList.add("dis");
        changerSteps("3", "3", "purple");
        labelStyle(
          selectBeneficiarioLabel,
          "selectBeneficiarioLabel04",
          "selectBeneficiarioLabel03",
          "selectBeneficiarioLabel01",
          "selectBeneficiarioLabel02"
        );
        labelStyle(
          referenceLabel,
          "referenceLabel01",
          "referenceLabel02",
          "referenceLabel03",
          "referenceLabel04"
        );
        referenceLabel.classList.remove("referenceLabel05");
        setFocusElement(referencia, "2px", "16px", "remittance");
      });
      break;
    case "2":
      if (getIdEntrega() == "null" || getIdEntrega() == "2") {
        changerSteps("5", "3", "purple");
        cntTelefono.classList.remove("dis");
        labelStyle(
          phone01Label,
          "phone01Label01",
          "phone01Label02",
          "phone01Label03",
          "phone01Label04"
        );

        telefono.addEventListener(
          "focusin",
          actionFocus.bind(null, telefono, "2px", "remittance"),
          false
        );
        telefono.addEventListener(
          "focusout",
          actionFocusOut.bind(null, telefono, "16px", "remittance"),
          false
        );
      } else if (getIdEntrega() == "3") {
        changerSteps("5", "3", "purple");
        segundoApellido1.classList.add("dis");
        direccion.classList.add("dis");
        email.classList.add("dis");
        primerApellido_1.classList.add("dis");
        cntTelefono.classList.remove("dis");
        cntBanco_1.classList.remove("dis");
        cntCuenta_1.classList.remove("dis");
        labelStyle(
          phone01Label,
          "phone01Label01",
          "phone01Label02",
          "phone01Label03",
          "phone01Label04"
        );
        labelStyle(
          bank01Label,
          "bbank01Label05",
          "bbank01Label02",
          "bbank01Label03",
          "bbank01Label04"
        );
        bank01Label.classList.remove("bbank01Label01");
        labelStyle(
          cuenta_1Label,
          "accNumber02Label04",
          "accNumber02Label01",
          "accNumber02Label03",
          "accNumber02Label02"
        );
        telefono.addEventListener(
          "focusin",
          actionFocus.bind(null, telefono, "2px", "remittance"),
          false
        );
        telefono.addEventListener(
          "focusout",
          actionFocusOut.bind(null, telefono, "16px", "remittance"),
          false
        );
        banco_1.addEventListener(
          "focusin",
          actionFocus.bind(null, banco_1, "105px", "remittance"),
          false
        );
        banco_1.addEventListener(
          "focusout",
          actionFocusOut.bind(null, banco_1, "122px", "remittance"),
          false
        );
        cuenta_1.addEventListener(
          "focusin",
          actionFocus.bind(null, cuenta_1, "212px", "remittance"),
          false
        );
        cuenta_1.addEventListener(
          "focusout",
          actionFocusOut.bind(null, cuenta_1, "227px", "remittance"),
          false
        );
      }
      /*--------------3-----------------*/
      ctaReceptora.classList.add("dis");
      cntBanco.classList.add("dis");
      cuenta.classList.add("dis");
      cntRouting.classList.add("dis");
      cntReferencia.classList.add("dis");
      tarjeta.classList.add("dis");
      tipoTarjeta.classList.add("dis");
      fecha.classList.add("dis");
      validacion.classList.add("dis");
      beneficiario.classList.remove("dis");
      cntDocId01.classList.remove("dis");
      nombre_1.classList.remove("dis");
      segundoNombre_1.classList.remove("dis");
      labelStyle(
        docId01Label,
        "docId01Label02",
        "docId01Label01",
        "docId01Label03",
        "docId01Label04"
      );
      labelStyle(
        firstName01Label,
        "firstName01Label03",
        "firstName01Label02",
        "firstName01Label04",
        "firstName01Label01"
      );
      labelStyle(
        middleName01Label,
        "middleName01Label04",
        "middleName01Label01",
        "middleName01Label03",
        "middleName01Label02"
      );
      labelStyle(
        selectBeneficiarioLabel,
        "selectBeneficiarioLabel01",
        "selectBeneficiarioLabel03",
        "selectBeneficiarioLabel02",
        "selectBeneficiarioLabel04"
      );
      docIdentidad_1.addEventListener(
        "focusin",
        actionFocus.bind(null, docIdentidad_1, "72px", "remittance"),
        false
      );
      docIdentidad_1.addEventListener(
        "focusout",
        actionFocusOut.bind(null, docIdentidad_1, "87px", "remittance"),
        false
      );
      firstName01.addEventListener(
        "focusin",
        actionFocus.bind(null, firstName01, "140px", "remittance"),
        false
      );
      firstName01.addEventListener(
        "focusout",
        actionFocusOut.bind(null, firstName01, "156px", "remittance"),
        false
      );
      middleName01.addEventListener(
        "focusin",
        actionFocus.bind(null, middleName01, "212px", "remittance"),
        false
      );
      middleName01.addEventListener(
        "focusout",
        actionFocusOut.bind(null, middleName01, "227px", "remittance"),
        false
      );
      selectBeneficiario.addEventListener(
        "focusin",
        actionFocusSel.bind(null, selectBeneficiario, "2px", "remittance"),
        false
      );
      selectBeneficiario.addEventListener(
        "focusout",
        actionFocusOutSel.bind(null, selectBeneficiario, "16px", "remittance"),
        false
      );
      /*--------------4-----------------*/
      beneficiario_1.classList.add("dis");
      cntDocId02.classList.add("dis");
      nombre.classList.add("dis");
      segundoNombre.classList.add("dis");
      primerApellido.classList.remove("dis");
      segundoApellido.classList.remove("dis");
      direccion_1.classList.remove("dis");
      email_1.classList.remove("dis");
      labelStyle(
        lastName01Label,
        "lastName01Label01",
        "lastName01Label02",
        "lastName01Label03",
        "lastName01Label04"
      );
      labelStyle(
        segundoApellido_1Label,
        "secondLastName01Label02",
        "secondLastName01Label03",
        "secondLastName01Label04",
        "secondLastName01Label01"
      );
      labelStyle(
        address01Label,
        "address01Label03",
        "address01Label01",
        "address01Label04",
        "address01Label02"
      );
      labelStyle(
        email01Label,
        "email01Label04",
        "email01Label01",
        "email01Label02",
        "email01Label03"
      );
      lastName01.addEventListener(
        "focusin",
        actionFocus.bind(null, lastName01, "2px", "remittance"),
        false
      );
      lastName01.addEventListener(
        "focusout",
        actionFocusOut.bind(null, lastName01, "16px", "remittance"),
        false
      );
      segundoApellido_1.addEventListener(
        "focusin",
        actionFocus.bind(null, segundoApellido_1, "72px", "remittance"),
        false
      );
      segundoApellido_1.addEventListener(
        "focusout",
        actionFocusOut.bind(null, segundoApellido_1, "87px", "remittance"),
        false
      );
      address01.addEventListener(
        "focusin",
        actionFocus.bind(null, address01, "140px", "remittance"),
        false
      );
      address01.addEventListener(
        "focusout",
        actionFocusOut.bind(null, address01, "156px", "remittance"),
        false
      );
      email01.addEventListener(
        "focusin",
        actionFocus.bind(null, email01, "212px", "remittance"),
        false
      );
      email01.addEventListener(
        "focusout",
        actionFocusOut.bind(null, email01, "227px", "remittance"),
        false
      );
      /*--------------5-----------------*/

      beneficiarySecond.addEventListener("click", function () {
        setBackScreenFive();
        beneficiarySecond.classList.add("dis");
        beneficiary.classList.remove("dis");
        nextStepThree.classList.remove("dis");
        cntDocId01.classList.remove("dis");
        nombre_1.classList.remove("dis");
        segundoNombre_1.classList.remove("dis");
        changerSteps("5", "3", "purple");
        labelStyle(
          selectBeneficiarioLabel,
          "selectBeneficiarioLabel01",
          "selectBeneficiarioLabel03",
          "selectBeneficiarioLabel02",
          "selectBeneficiarioLabel04"
        );
      });
      beneficiary.addEventListener("click", function () {
        setScreenFive();
        beneficiarySecond.classList.remove("dis");
        beneficiary.classList.add("dis");
        nextStepThree.classList.add("dis");
        cntDocId01.classList.add("dis");
        nombre_1.classList.add("dis");
        segundoNombre_1.classList.add("dis");
        changerSteps("3", "3", "purple");
        labelStyle(
          selectBeneficiarioLabel,
          "selectBeneficiarioLabel01",
          "selectBeneficiarioLabel03",
          "selectBeneficiarioLabel04",
          "selectBeneficiarioLabel02"
        );
      });
      break;
    case "5":
      changerSteps("6", "3", "purple");
      numTarjeta.value = userTarjeta.numTarjeta;
      selectCctype.value = userTarjeta.tipoTarjeta;
      fecvenm.value = userTarjeta.fechaVenMes;
      fecvena.value = userTarjeta.fechaVenAnio;
      codValidacion.value = userTarjeta.codVal;
      /*--------------3-----------------*/
      tipoTarjeta.classList.remove("dis");
      ctaReceptora.classList.add("dis");
      cntBanco.classList.add("dis");
      cuenta.classList.add("dis");
      cntRouting.classList.add("dis");
      cntReferencia.classList.add("dis");
      beneficiario.classList.add("dis");
      cntDocId01.classList.add("dis");
      nombre_1.classList.add("dis");
      segundoNombre_1.classList.add("dis");
      tarjeta.classList.remove("dis");
      fecha.classList.remove("dis");
      validacion.classList.remove("dis");
      numTarjetaLabel.classList.add("cardNumber01");
      fecvenmLabel.classList.add("expDateMonthLabel01");
      fecvenaLabel.classList.add("expDateYearLabel01");
      codValidacionLabel.classList.add("validationCodeLabel01");

      numTarjeta.addEventListener(
        "focusin",
        actionFocus.bind(null, numTarjeta, "2px", "remittance"),
        false
      );
      numTarjeta.addEventListener(
        "focusout",
        actionFocusOut.bind(null, numTarjeta, "16px", "remittance"),
        false
      );
      fecvenm.addEventListener(
        "focusin",
        actionFocus.bind(null, fecvenm, "140px", "remittance"),
        false
      );
      fecvenm.addEventListener(
        "focusout",
        actionFocusOut.bind(null, fecvenm, "156px", "remittance"),
        false
      );
      fecvena.addEventListener(
        "focusin",
        actionFocus.bind(null, fecvena, "140px", "remittance"),
        false
      );
      fecvena.addEventListener(
        "focusout",
        actionFocusOut.bind(null, fecvena, "156px", "remittance"),
        false
      );
      codValidacion.addEventListener(
        "focusin",
        actionFocus.bind(null, codValidacion, "212px", "remittance"),
        false
      );
      codValidacion.addEventListener(
        "focusout",
        actionFocusOut.bind(null, codValidacion, "227px", "remittance"),
        false
      );
      setFocusElement(fecvena, "140px", "156px", "remittance");
      setFocusElement(codValidacion, "212px", "227px", "remittance");
      setFocusElement(fecvenm, "140px", "156px", "remittance");
      setFocusElement(numTarjeta, "2px", "16px", "remittance");
      /*--------------4-----------------*/
      beneficiario_1.classList.remove("dis");
      cntDocId02.classList.remove("dis");
      nombre.classList.remove("dis");
      segundoNombre.classList.remove("dis");
      primerApellido.classList.add("dis");
      segundoApellido.classList.add("dis");
      direccion_1.classList.add("dis");
      email_1.classList.add("dis");
      labelStyle(
        docId02Label,
        "docId02Label02",
        "docId02Label03",
        "docId02Label04",
        "docId02Label01"
      );
      labelStyle(
        firstName02Label,
        "firstName02Label03",
        "firstName02Label01",
        "firstName02Label04",
        "firstName02Label02"
      );
      labelStyle(
        middleName02Label,
        "middleName02Label04",
        "middleName02Label01",
        "middleName02Label02",
        "middleName02Label03"
      );
      docIdentidad_2.addEventListener(
        "focusin",
        actionFocus.bind(null, docIdentidad_2, "72px", "remittance"),
        false
      );
      docIdentidad_2.addEventListener(
        "focusout",
        actionFocusOut.bind(null, docIdentidad_2, "87px", "remittance"),
        false
      );
      firstName02.addEventListener(
        "focusin",
        actionFocus.bind(null, firstName02, "140px", "remittance"),
        false
      );
      firstName02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, firstName02, "156px", "remittance"),
        false
      );
      middleName02.addEventListener(
        "focusin",
        actionFocus.bind(null, middleName02, "212px", "remittance"),
        false
      );
      middleName02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, middleName02, "227px", "remittance"),
        false
      );
      /*--------------5-----------------*/
      primerApellido_1.classList.remove("dis");
      segundoApellido1.classList.remove("dis");
      direccion.classList.remove("dis");
      email.classList.remove("dis");

      labelStyle(
        lastName02Label,
        "lastName02Label01",
        "lastName02Label02",
        "lastName02Label03",
        "lastName02Label04"
      );
      labelStyle(
        secondLastName02Label,
        "secondLastName02Label02",
        "secondLastName02Label03",
        "secondLastName02Label04",
        "secondLastName02Label01"
      );
      labelStyle(
        address02Label,
        "address02Label03",
        "address02Label01",
        "address02Label04",
        "address02Label02"
      );
      labelStyle(
        email02Label,
        "email02Label04",
        "email02Label01",
        "email02Label02",
        "email02Label03"
      );

      lastName02.addEventListener(
        "focusin",
        actionFocus.bind(null, lastName02, "2px", "remittance"),
        false
      );
      lastName02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, lastName02, "16px", "remittance"),
        false
      );
      secondLastName02.addEventListener(
        "focusin",
        actionFocus.bind(null, secondLastName02, "72px", "remittance"),
        false
      );
      secondLastName02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, secondLastName02, "87px", "remittance"),
        false
      );
      address02.addEventListener(
        "focusin",
        actionFocus.bind(null, address02, "140px", "remittance"),
        false
      );
      address02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, address02, "156px", "remittance"),
        false
      );
      email02.addEventListener(
        "focusin",
        actionFocus.bind(null, email02, "212px", "remittance"),
        false
      );
      email02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, email02, "227px", "remittance"),
        false
      );

      //-----------6-----------------/
      if (getIdEntrega() == "null" || getIdEntrega() == "2") {
        cntTelefono_1.classList.remove("dis");
        cntBanco_2.classList.add("dis");
        cntCuenta_2.classList.add("dis");
        labelStyle(
          phone02Label,
          "phone02Label01",
          "phone02Label02",
          "phone02Label03",
          "phone02Label04"
        );
        telefono_1.addEventListener(
          "focusin",
          actionFocus.bind(null, telefono_1, "2px", "remittance"),
          false
        );
        telefono_1.addEventListener(
          "focusout",
          actionFocusOut.bind(null, telefono_1, "16px", "remittance"),
          false
        );
      } else if (getIdEntrega() == "3") {
        cntTelefono_1.classList.remove("dis");
        cntBanco_2.classList.remove("dis");
        cntCuenta_2.classList.remove("dis");
        labelStyle(
          phone02Label,
          "phone02Label01",
          "phone02Label02",
          "phone02Label03",
          "phone02Label04"
        );
        labelStyle(
          cuenta_2Label,
          "accNumber03Label04",
          "accNumber03Label02",
          "accNumber03Label01",
          "accNumber03Label03"
        );
        labelStyle(
          bank02Label,
          "bbank02Label05",
          "bbank02Label01",
          "bbank02Label02",
          "bbank02Label04"
        );
        bank02Label.classList.remove("bbank02Label03");
        telefono_1.addEventListener(
          "focusin",
          actionFocus.bind(null, telefono_1, "2px", "remittance"),
          false
        );
        telefono_1.addEventListener(
          "focusout",
          actionFocusOut.bind(null, telefono_1, "16px", "remittance"),
          false
        );
        cuenta_2.addEventListener(
          "focusin",
          actionFocus.bind(null, cuenta_2, "212px", "remittance"),
          false
        );
        cuenta_2.addEventListener(
          "focusout",
          actionFocusOut.bind(null, cuenta_2, "227px", "remittance"),
          false
        );
        bank02.addEventListener(
          "focusin",
          actionFocus.bind(null, bank02, "104px", "remittance"),
          false
        );
        bank02.addEventListener(
          "focusout",
          actionFocusOut.bind(null, bank02, "120px", "remittance"),
          false
        );
      }
      beneficiaryThirdStepSecond.addEventListener("click", function () {
        setBackScreenFive();
        beneficiaryThirdStepSecond.classList.add("dis");
        beneficiaryThirdStep.classList.remove("dis");
        nextStepFour.classList.remove("dis");
        cntDocId02.classList.remove("dis");
        nombre.classList.remove("dis");
        segundoNombre.classList.remove("dis");
        changerSteps("6", "3", "purple");
      });
      beneficiaryThirdStep.addEventListener("click", function () {
        setScreenFive();
        beneficiaryThirdStep.classList.add("dis");
        beneficiaryThirdStepSecond.classList.remove("dis");
        nextStepFour.classList.add("dis");
        cntDocId02.classList.add("dis");
        nombre.classList.add("dis");
        segundoNombre.classList.add("dis");
        changerSteps("4", "4", "purple");
      });
      break;
    case "7":
    case "8":
    case "9":
      changerSteps("6", "3", "purple");

      numTarjeta.value = "";
      selectCctype.value = "";
      fecvenm.value = "";
      fecvena.value = "";
      codValidacion.value = "";
      /*--------------3-----------------*/
      ctaReceptora.classList.add("dis");
      cntBanco.classList.add("dis");
      cuenta.classList.add("dis");
      cntRouting.classList.add("dis");
      cntReferencia.classList.add("dis");
      beneficiario.classList.add("dis");
      cntDocId01.classList.add("dis");
      nombre_1.classList.add("dis");
      segundoNombre_1.classList.add("dis");
      tarjeta.classList.remove("dis");
      tipoTarjeta.classList.remove("dis");
      fecha.classList.remove("dis");
      validacion.classList.remove("dis");
      numTarjetaLabel.classList.add("cardNumber01");
      fecvenmLabel.classList.add("expDateMonthLabel01");
      fecvenaLabel.classList.add("expDateYearLabel01");
      codValidacionLabel.classList.add("validationCodeLabel01");
      numTarjeta.addEventListener(
        "focusin",
        actionFocus.bind(null, numTarjeta, "2px", "remittance"),
        false
      );
      numTarjeta.addEventListener(
        "focusout",
        actionFocusOut.bind(null, numTarjeta, "16px", "remittance"),
        false
      );
      fecvenm.addEventListener(
        "focusin",
        actionFocus.bind(null, fecvenm, "140px", "remittance"),
        false
      );
      fecvenm.addEventListener(
        "focusout",
        actionFocusOut.bind(null, fecvenm, "156px", "remittance"),
        false
      );
      fecvena.addEventListener(
        "focusin",
        actionFocus.bind(null, fecvena, "140px", "remittance"),
        false
      );
      fecvena.addEventListener(
        "focusout",
        actionFocusOut.bind(null, fecvena, "156px", "remittance"),
        false
      );
      codValidacion.addEventListener(
        "focusin",
        actionFocus.bind(null, codValidacion, "212px", "remittance"),
        false
      );
      codValidacion.addEventListener(
        "focusout",
        actionFocusOut.bind(null, codValidacion, "227px", "remittance"),
        false
      );
      setFocusElement(fecvena, "140px", "156px", "remittance");
      setFocusElement(codValidacion, "212px", "227px", "remittance");
      setFocusElement(fecvenm, "140px", "156px", "remittance");
      setFocusElement(numTarjeta, "2px", "16px", "remittance");
      /*--------------4-----------------*/
      beneficiario_1.classList.remove("dis");
      cntDocId02.classList.remove("dis");
      nombre.classList.remove("dis");
      segundoNombre.classList.remove("dis");
      primerApellido.classList.add("dis");
      segundoApellido.classList.add("dis");
      direccion_1.classList.add("dis");
      email_1.classList.add("dis");
      labelStyle(
        docId02Label,
        "docId02Label02",
        "docId02Label03",
        "docId02Label04",
        "docId02Label01"
      );
      labelStyle(
        firstName02Label,
        "firstName02Label03",
        "firstName02Label01",
        "firstName02Label04",
        "firstName02Label02"
      );
      labelStyle(
        middleName02Label,
        "middleName02Label04",
        "middleName02Label01",
        "middleName02Label02",
        "middleName02Label03"
      );

      docIdentidad_2.addEventListener(
        "focusin",
        actionFocus.bind(null, docIdentidad_2, "72px", "remittance"),
        false
      );
      docIdentidad_2.addEventListener(
        "focusout",
        actionFocusOut.bind(null, docIdentidad_2, "87px", "remittance"),
        false
      );
      firstName02.addEventListener(
        "focusin",
        actionFocus.bind(null, firstName02, "140px", "remittance"),
        false
      );
      firstName02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, firstName02, "156px", "remittance"),
        false
      );
      middleName02.addEventListener(
        "focusin",
        actionFocus.bind(null, middleName02, "212px", "remittance"),
        false
      );
      middleName02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, middleName02, "227px", "remittance"),
        false
      );
      /*--------------5-----------------*/
      primerApellido_1.classList.remove("dis");
      segundoApellido1.classList.remove("dis");
      direccion.classList.remove("dis");
      email.classList.remove("dis");

      labelStyle(
        lastName02Label,
        "lastName02Label01",
        "lastName02Label02",
        "lastName02Label03",
        "lastName02Label04"
      );
      labelStyle(
        secondLastName02Label,
        "secondLastName02Label02",
        "secondLastName02Label03",
        "secondLastName02Label04",
        "secondLastName02Label01"
      );
      labelStyle(
        address02Label,
        "address02Label03",
        "address02Label01",
        "address02Label04",
        "address02Label02"
      );
      labelStyle(
        email02Label,
        "email02Label04",
        "email02Label01",
        "email02Label02",
        "email02Label03"
      );

      lastName02.addEventListener(
        "focusin",
        actionFocus.bind(null, lastName02, "2px", "remittance"),
        false
      );
      lastName02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, lastName02, "16px", "remittance"),
        false
      );
      secondLastName02.addEventListener(
        "focusin",
        actionFocus.bind(null, secondLastName02, "72px", "remittance"),
        false
      );
      secondLastName02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, secondLastName02, "87px", "remittance"),
        false
      );
      address02.addEventListener(
        "focusin",
        actionFocus.bind(null, address02, "140px", "remittance"),
        false
      );
      address02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, address02, "156px", "remittance"),
        false
      );
      email02.addEventListener(
        "focusin",
        actionFocus.bind(null, email02, "212px", "remittance"),
        false
      );
      email02.addEventListener(
        "focusout",
        actionFocusOut.bind(null, email02, "227px", "remittance"),
        false
      );

      //-----------6-----------------/
      if (getIdEntrega() == "null" || getIdEntrega() == "2") {
        cntTelefono_1.classList.remove("dis");
        labelStyle(
          phone02Label,
          "phone02Label01",
          "phone02Label02",
          "phone02Label03",
          "phone02Label04"
        );
        telefono_1.addEventListener(
          "focusin",
          actionFocus.bind(null, telefono_1, "2px", "remittance"),
          false
        );
        telefono_1.addEventListener(
          "focusout",
          actionFocusOut.bind(null, telefono_1, "16px", "remittance"),
          false
        );
      } else if (getIdEntrega() == "3") {
        cntTelefono_1.classList.remove("dis");
        cntBanco_2.classList.remove("dis");
        cntCuenta_2.classList.remove("dis");
        labelStyle(
          phone02Label,
          "phone02Label01",
          "phone02Label02",
          "phone02Label03",
          "phone02Label04"
        );
        labelStyle(
          cuenta_2Label,
          "accNumber03Label04",
          "accNumber03Label02",
          "accNumber03Label01",
          "accNumber03Label03"
        );
        labelStyle(
          bank02Label,
          "bbank02Label05",
          "bbank02Label01",
          "bbank02Label02",
          "bbank02Label04"
        );
        bank02Label.classList.remove("bbank02Label03");
        telefono_1.addEventListener(
          "focusin",
          actionFocus.bind(null, telefono_1, "2px", "remittance"),
          false
        );
        telefono_1.addEventListener(
          "focusout",
          actionFocusOut.bind(null, telefono_1, "16px", "remittance"),
          false
        );
        cuenta_2.addEventListener(
          "focusin",
          actionFocus.bind(null, cuenta_2, "212px", "remittance"),
          false
        );
        cuenta_2.addEventListener(
          "focusout",
          actionFocusOut.bind(null, cuenta_2, "227px", "remittance"),
          false
        );
        bank02.addEventListener(
          "focusin",
          actionFocus.bind(null, bank02, "104px", "remittance"),
          false
        );
        bank02.addEventListener(
          "focusout",
          actionFocusOut.bind(null, bank02, "120px", "remittance"),
          false
        );
      }
      beneficiaryThirdStepSecond.addEventListener("click", function () {
        setBackScreenFive();
        beneficiaryThirdStepSecond.classList.add("dis");
        beneficiaryThirdStep.classList.remove("dis");
        nextStepFour.classList.remove("dis");
        cntDocId02.classList.remove("dis");
        nombre.classList.remove("dis");
        segundoNombre.classList.remove("dis");
        changerSteps("6", "4", "purple");
      });
      beneficiaryThirdStep.addEventListener("click", function () {
        setScreenFive();
        beneficiaryThirdStep.classList.add("dis");
        beneficiaryThirdStepSecond.classList.remove("dis");
        nextStepFour.classList.add("dis");
        cntDocId02.classList.add("dis");
        nombre.classList.add("dis");
        segundoNombre.classList.add("dis");
        changerSteps("4", "4", "purple");
      });
      break;
  }
}
function callModalOwn() {
  let amount = monto.unmaskedValue;
  if (amount != "" && docListPen == null) {
    winMont.innerHTML = amount;
    calcsend(
      mainLanguage,
      idprovider,
      idcountry,
      amount,
      sesionID,
      idclearencetype
    );
  }
}
getparty(mainLanguage, sesionID);

/* If exist any required document it will be have the following options */
const docListPen = document.getElementById("docListPen");
const reqDocBox = document.getElementById("requiredDocuments");
const penAction = document.getElementById("penAction");
const docAction = document.getElementById("docAction");
const docUpload = document.getElementById("uploadDoc");

setSectionDocPend(docListPen, urlToRes);
