const codigo = document.getElementById("codigo");
const number = document.getElementById("number");
const monto = document.getElementById("monto");
const windowMont = document.getElementById("winMont");
const monedas = document.getElementById("monedas");
const amountInput = inputMasked("monto", 0, 1000000000, 2);
const prefijo0 = document.getElementById("prefijo");
const prefijo1 = document.getElementById("prefijo_2");
const tasa = document.getElementById("tasainput");
const amountbs = document.getElementById("amountbsinput");
const expDateMonth = document.getElementById("fechaVencMes");
const expDateYear = document.getElementById("fechaVencAño");
const validationCode = document.getElementById("codigoValidacion");
const bankAccount02 = document.getElementById("cuenta_2");
const target_1 = document.getElementById("target_1");
const callModal = document.getElementById("callModal");
codigo.value = "58";

let userTarjeta = [];
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
      idparty: res.idparty,
      number: res.ccnumber,
      target_1: res.cctype,
      expDateMonth: res.ccexpmonth,
      expDateYear: res.ccexpyear,
      validationCode: res.cccvc,
    };
  }
  return res;
};

getparty(mainLanguage, sesionID);

function getPayIntoOptions() {
  let idpay = pay.options[pay.selectedIndex].id;
  let iddebit = debit.options[debit.selectedIndex].id;

  if (idpay == 22 && iddebit != 20) {
    bank.classList.remove("dis");
    cont.classList.remove("dis");
  } else if (iddebit == 20 && idpay == 22) {
    target.classList.remove("dis");
    number.classList.remove("dis");
    bank.classList.add("dis");
  } else {
    bank.classList.add("dis");
    cont.classList.add("dis");
    target.classList.add("dis");
    number.classList.add("dis");
  }
}
pay.addEventListener("change", getPayIntoOptions, false);

let msgErr = "";
let action = "";
let otpCode = null;
let finalVenta = null;
const urlToRes = "sell.php";

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

const calcbuy = async (
  language,
  idlead,
  amount,
  idcurrency,
  idinstrumentdebit
) => {
  loaderOpen();
  const formData = new FormData();
  formData.append("cond", "calcbuy");
  formData.append("language", language);
  formData.append("idlead", idlead);
  formData.append("amount", amount);
  formData.append("idcurrency", idcurrency);
  formData.append("idinstrumentdebit", idinstrumentdebit);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res.code === "0000" && action === "modalVentana") {
    action = "";

    callModal.classList.remove("dis");
    gifLoader.classList.add("dis");
    /* Modal Ventana */
    document.getElementById("winMont").innerHTML = res.exchangeamount;
    document.getElementById("txtcurrcommission").innerHTML =
      res.txtcurrcommission;
    document.getElementById("currcommission").innerHTML = res.currcommission;
    document.getElementById("currrate").innerHTML = res.currrate;
    document.getElementById("txtvescommission").innerHTML =
      res.txtvescommission;
    document.getElementById("vescommission").innerHTML = res.vescommission;
    document.getElementById("totalves").innerHTML = res.totalves;

    tradTasaMontoModal(res.currrate, res.vescommission);
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

  amountbs.placeholder = tradMonto + " " + montoVal;
  amountbs.value = tradMonto + " " + montoVal;
  amountbs.innerHTML = tradMonto + " " + montoVal;
  amountbs.replaceChildren();
}

const execbuyok = async (
  language,
  idlead,
  idcurrency,
  acc,
  amount,
  idinstrumentdebit,
  idinstrumentcredit,
  debitcardnumter,
  ccnumber,
  ccexpyear,
  ccexpmonth,
  cccvc,
  cctype,
  mpbankcode,
  mpbankaccount
) => {
  loaderOpen();
  const formData = new FormData();
  formData.append("cond", "execbuyok");
  formData.append("language", language);
  formData.append("idlead", idlead);
  formData.append("idcurrency", idcurrency);
  formData.append("acc", acc);
  formData.append("amount", amount);
  formData.append("idinstrumentdebit", idinstrumentdebit);
  formData.append("idinstrumentcredit", idinstrumentcredit);
  formData.append("debitcardnumter", debitcardnumter);
  formData.append("ccnumber", ccnumber);
  formData.append("ccexpyear", ccexpyear);
  formData.append("ccexpmonth", ccexpmonth);
  formData.append("cccvc", cccvc);
  formData.append("cctype", cctype);
  formData.append("mpbankcode", mpbankcode);
  formData.append("mpbankaccount", mpbankaccount);

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

  if (res.message.indexOf("INSTRUMENT") != -1) {
    showAlertMessage(res.message, urlToRes);
  }
  if (res.code === "5000") {
    showAlertMessage(res.message, urlToRes);
  }
  if (res.otp != undefined) {
    otpCode = res.otp;
    let idcurrency = "",
      amount = "",
      idinstrumentdebit = "",
      idinstrumentcredit = "",
      acc = "",
      ccexpyear = "",
      ccexpmonth = "",
      cccvc = "",
      cctype = "",
      debitcardnumter = "",
      mpbankcode = "";

    idcurrency = document.getElementsByName("idcurrency")[0].value;
    acc = document.getElementsByName("acc")[0].value;
    amount = amountInput.unmaskedValue;
    idinstrumentdebit =
      document.getElementsByName("idinstrumentdebit")[0].value;
    idinstrumentcredit =
      document.getElementsByName("idinstrumentcredit")[0].value;
    debitcardnumter = setValueFromArray("debitcardnumter", 2);

    ccexpyear = setValueFromArray("ccexpyear", 2);
    ccexpmonth = setValueFromArray("ccexpmonth", 2);
    cccvc = setValueFromArray("cccvc", 2);

    cctype = setValueFromArray("cctype", 2);
    mpbankcode = setValueFromArray("mpbankcode", 2);
    if (mpbankcode == "0") {
      mpbankcode = "";
    }
    code = setValueFromArray("code", 2);

    prefijo = setValueFromArray("prefijo", 2);
    if (prefijo == "0") {
      prefijo = "";
    }

    execbuy(
      mainLanguage,
      sesionID,
      idcurrency,
      acc,
      amount,
      otpCode,
      idinstrumentdebit,
      idinstrumentcredit,
      debitcardnumter,
      ccnumber,
      ccexpyear,
      ccexpmonth,
      cccvc,
      cctype,
      mpbankcode,
      mpbankaccount
    );
  }
  return res;
};

const execbuy = async (
  language,
  idlead,
  idcurrency,
  acc,
  amount,
  otp,
  idinstrumentdebit,
  idinstrumentcredit,
  debitcardnumter,
  ccnumber,
  ccexpyear,
  ccexpmonth,
  cccvc,
  cctype,
  mpbankcode,
  mpbankaccount
) => {
  const formData = new FormData();
  formData.append("cond", "execbuy");
  formData.append("language", language);
  formData.append("idlead", idlead);
  formData.append("idcurrency", idcurrency);
  formData.append("acc", acc);
  formData.append("amount", amount);
  formData.append("otp", otp);
  formData.append("idinstrumentdebit", idinstrumentdebit);
  formData.append("idinstrumentcredit", idinstrumentcredit);
  formData.append("debitcardnumter", debitcardnumter);
  formData.append("ccnumber", ccnumber);
  formData.append("ccexpyear", ccexpyear);
  formData.append("ccexpmonth", ccexpmonth);
  formData.append("cccvc", cccvc);
  formData.append("cctype", cctype);
  formData.append("mpbankcode", mpbankcode);
  formData.append("mpbankaccount", mpbankaccount);

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

async function validateVenta() {
  idcurrency = document.getElementsByName("idcurrency")[0].value;
  acc = document.getElementsByName("acc")[0].value;
  idinstrumentdebit = document.getElementsByName("idinstrumentdebit")[0].value;
  idinstrumentcredit =
    document.getElementsByName("idinstrumentcredit")[0].value;
  debitcardnumter = setValueFromArray("debitcardnumter", 2);

  ccexpyear = setValueFromArray("ccexpyear", 2);
  ccexpmonth = setValueFromArray("ccexpmonth", 2);
  cccvc = setValueFromArray("cccvc", 2);

  cctype = setValueFromArray("cctype", 2);
  mpbankcode = setValueFromArray("mpbankcode", 2);
  if (mpbankcode == "0") {
    mpbankcode = "";
  }
  code = setValueFromArray("code", 2);

  prefijo = setValueFromArray("prefijo", 2);
  if (prefijo == "0") {
    prefijo = "";
  }

  phoneNumber = setValueFromArray("phoneNumber", 2);
  mpbankaccount = code + prefijo + phoneNumber;

  execbuyok(
    mainLanguage,
    sesionID,
    idcurrency,
    acc,
    amountInput.unmaskedValue,
    idinstrumentdebit,
    idinstrumentcredit,
    debitcardnumter,
    ccnumber,
    ccexpyear,
    ccexpmonth,
    cccvc,
    cctype,
    mpbankcode,
    mpbankaccount
  );
}

function formDataFull() {
  const formData = new FormData();

  formData.append(
    "idcurrency",
    document.getElementsByName("idcurrency")[0].value
  );
  formData.append("acc", document.getElementsByName("acc")[0].value);
  formData.append("amount", amountInput.unmaskedValue);
  formData.append(
    "idinstrumentdebit",
    document.getElementsByName("idinstrumentdebit")[0].value
  );
  formData.append(
    "idinstrumentcredit",
    document.getElementsByName("idinstrumentcredit")[0].value
  );
  formData.append(
    "debitcardnumter[0]",
    document.getElementsByName("debitcardnumter[0]")[0].value
  );
  formData.append(
    "debitcardnumter[1]",
    document.getElementsByName("debitcardnumter[1]")[0].value
  );
  formData.append("ccnumber", ccnumber);
  formData.append(
    "ccexpyear[0]",
    document.getElementsByName("ccexpyear[0]")[0].value
  );
  formData.append(
    "ccexpyear[1]",
    document.getElementsByName("ccexpyear[1]")[0].value
  );
  formData.append(
    "ccexpmonth[0]",
    document.getElementsByName("ccexpmonth[0]")[0].value
  );
  formData.append(
    "ccexpmonth[1]",
    document.getElementsByName("ccexpmonth[1]")[0].value
  );
  formData.append("cccvc[0]", document.getElementsByName("cccvc[0]")[0].value);
  formData.append("cccvc[1]", document.getElementsByName("cccvc[1]")[0].value);
  formData.append(
    "cctype[0]",
    document.getElementsByName("cctype[0]")[0].value
  );
  formData.append(
    "cctype[1]",
    document.getElementsByName("cctype[1]")[0].value
  );
  formData.append(
    "mpbankcode[0]",
    document.getElementsByName("mpbankcode[0]")[0].value
  );
  formData.append(
    "mpbankcode[1]",
    document.getElementsByName("mpbankcode[1]")[0].value
  );
  formData.append("code[0]", document.getElementsByName("code[0]")[0].value);
  formData.append("code[1]", document.getElementsByName("code[1]")[0].value);
  formData.append(
    "prefijo[0]",
    document.getElementsByName("prefijo[0]")[0].value
  );
  formData.append(
    "prefijo[1]",
    document.getElementsByName("prefijo[1]")[0].value
  );
  formData.append(
    "phoneNumber[0]",
    document.getElementsByName("phoneNumber[0]")[0].value
  );
  formData.append(
    "phoneNumber[1]",
    document.getElementsByName("phoneNumber[1]")[0].value
  );

  return formData;
}

let idmonedas = "";
let iddebit = "";

function getDebitForm() {
  idmonedas = monedas.options[monedas.selectedIndex].id;
  iddebit = debit.options[debit.selectedIndex].id;
}
debit.addEventListener("change", getDebitForm, false);

setFocusElement(codigo, "212px", "227px", "venta");
setFocusElement(bankAccount, "212px", "227px", "venta");
setFocusElement(bankAccount02, "212px", "227px", "venta");

/* If exist any required document it will be have the following options */
const docListPen = document.getElementById("docListPen");
const reqDocBox = document.getElementById("requiredDocuments");
const penAction = document.getElementById("penAction");
const docAction = document.getElementById("docAction");
const docUpload = document.getElementById("uploadDoc");

setSectionDocPend(docListPen, urlToRes);
