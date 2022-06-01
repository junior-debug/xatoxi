const country = document.getElementById("country");
const coin = document.getElementById("coin");
const monto = inputMasked("monto", 0, 1000000000, 2);

const achDiv = document.getElementById("ACH");
const depCtaDiv = document.getElementById("depositoCta");
const efectDiv = document.getElementById("transEfectivo");
const tdcDiv = document.getElementById("transTDC");
const encDiv = document.getElementById("enc_pm_tdd_tp_tr");

const tasa = document.getElementsByName("tasaCambio");
const amountbs = document.getElementsByName("monto");

const transAmount = document.getElementById("transAmount");
const callModal = document.getElementById("callModal");
const idNeed = document.getElementsByClassName("idNeed");

let msgErr = "";
let action = "";
let otpCode = null;
let finalTransferencia = null;
let userTarjeta = [];
const urlToRes = "transfer.php";

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

const calcsendtr = async (
  language,
  idlead,
  idcurrency,
  idcountry,
  amount,
  idclearencetype
) => {
  loaderOpen();
  const formData = new FormData();
  formData.append("cond", "calcsendtr");
  formData.append("language", language);
  formData.append("idlead", idlead);
  formData.append("idcurrency", idcurrency);
  formData.append("idcountry", idcountry);
  formData.append("amount", amount);
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
    document.getElementById("winMont").innerHTML = res.usdsend;
    document.getElementById("txtcurrcommission").innerHTML =
      res.txtusdcommission;
    document.getElementById("currcommission").innerHTML = res.usdcommission;
    document.getElementById("currrate").innerHTML = res.usdrate;
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
  for (let i = 0; i < 5; i++) {
    tasa[i].placeholder = tradTasa + " " + tasaVal;
    tasa[i].value = tradTasa + " " + tasaVal;
    tasa[i].innerHTML = tradTasa + " " + tasaVal;
    tasa[i].replaceChildren();

    amountbs[i].placeholder = tradMonto + " " + montoVal;
    amountbs[i].value = tradMonto + " " + montoVal;
    amountbs[i].innerHTML = tradMonto + " " + montoVal;
    amountbs[i].replaceChildren();
  }
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
    let idcountry = "",
      idcurrency = "",
      idclearencetype = "",
      acc = "",
      reference = "",
      bdocumentid = "",
      baddress = "",
      bfirstname = "",
      bmiddlename = "",
      blastname = "",
      bsecondlastname = "",
      bbank = "",
      bacc = "",
      bbankcountry = "",
      bbankcity = "",
      bbankaddress = "",
      bbankabaswiftiban = "",
      ibacc = "",
      ibbank = "",
      ibbankcountry = "",
      ibbankcity = "",
      ibbankaddress = "",
      ibbankabaswifiban = "",
      bank = "",
      routing = "";

    idcountry = document.getElementsByName("idcountry")[0].value;
    idcurrency = document.getElementsByName("idcurrency")[0].value;
    idclearencetype = document.getElementsByName("idclearencetype")[0].value;
    acc = document.getElementsByName("acc")[0].value;
    reference = setValueFromArray("reference", 2);
    bdocumentid = setValueFromArray("bdocumentid", 5);
    baddress = setValueFromArray("baddress", 5);
    bfirstname = setValueFromArray("bfirstname", 5);
    bmiddlename = setValueFromArray("bmiddlename", 5);
    blastname = setValueFromArray("blastname", 5);
    bsecondlastname = setValueFromArray("bsecondlastname", 5);
    bbank = setValueFromArray("bbank", 5);
    bacc = setValueFromArray("bacc", 5);
    bbankcountry = setValueFromArray("bbankcountry", 5);
    bbankcity = setValueFromArray("bbankcity", 5);
    bbankaddress = setValueFromArray("bbankaddress", 5);
    bbankabaswiftiban = setValueFromArray("bbankabaswiftiban", 5);
    ibacc = setValueFromArray("ibacc", 4);
    ibbank = setValueFromArray("ibbank", 4);
    ibbankcountry = setValueFromArray("ibbankcountry", 5);
    ibbankcity = setValueFromArray("ibbankcity", 5);
    ibbankaddress = setValueFromArray("ibbankaddress", 5);
    ibbankabaswifiban = setValueFromArray("ibbankabaswifiban", 5);
    bank = document.getElementsByName("bank")[0].value;
    routing = document.getElementsByName("routing")[0].value;

    execsendtr(
      mainLanguage,
      sesionID,
      idcountry,
      monto.unmaskedValue,
      idcurrency,
      idclearencetype,
      acc,
      reference,
      bdocumentid,
      baddress,
      bfirstname,
      bmiddlename,
      blastname,
      bsecondlastname,
      bbank,
      bacc,
      bbankcountry,
      bbankcity,
      bbankaddress,
      bbankabaswiftiban,
      ibacc,
      ibbank,
      ibbankcountry,
      ibbankcity,
      ibbankaddress,
      ibbankabaswifiban,
      userTarjeta.numTarjeta,
      userTarjeta.fechaVenAnio,
      userTarjeta.fechaVenMes,
      userTarjeta.codVal,
      userTarjeta.tipoTarjeta,
      bank,
      routing,
      otpCode
    );
  }

  return res;
};

const execsendtrok = async (
  language,
  idlead,
  idcountry,
  amount,
  idcurrency,
  idclearencetype,
  acc,
  reference,
  bdocumentid,
  baddress,
  bfirstname,
  bmiddlename,
  blastname,
  bsecondlastname,
  bbank,
  bacc,
  bbankcountry,
  bbankcity,
  bbankaddress,
  bbankabaswiftiban,
  ibacc,
  ibbank,
  ibbankcountry,
  ibbankcity,
  ibbankaddress,
  ibbankabaswifiban,
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
  formData.append("cond", "execsendtrok");
  formData.append("language", language);
  formData.append("idlead", idlead);
  formData.append("idcountry", idcountry);
  formData.append("amount", amount);
  formData.append("idcurrency", idcurrency);
  formData.append("idclearencetype", idclearencetype);
  formData.append("acc", acc);
  formData.append("reference", reference);
  formData.append("bdocumentid", bdocumentid);
  formData.append("baddress", baddress);
  formData.append("bfirstname", bfirstname);
  formData.append("bmiddlename", bmiddlename);
  formData.append("blastname", blastname);
  formData.append("bsecondlastname", bsecondlastname);
  formData.append("bbank", bbank);
  formData.append("bacc", bacc);
  formData.append("bbankcountry", bbankcountry);
  formData.append("bbankcity", bbankcity);
  formData.append("bbankaddress", bbankaddress);
  formData.append("bbankabaswiftiban", bbankabaswiftiban);
  formData.append("ibacc", ibacc);
  formData.append("ibbank", ibbank);
  formData.append("ibbankcountry", ibbankcountry);
  formData.append("ibbankcity", ibbankcity);
  formData.append("ibbankaddress", ibbankaddress);
  formData.append("ibbankabaswifiban", ibbankabaswifiban);
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

const execsendtr = async (
  language,
  idlead,
  idcountry,
  amount,
  idcurrency,
  idclearencetype,
  acc,
  reference,
  bdocumentid,
  baddress,
  bfirstname,
  bmiddlename,
  blastname,
  bsecondlastname,
  bbank,
  bacc,
  bbankcountry,
  bbankcity,
  bbankaddress,
  bbankabaswiftiban,
  ibacc,
  ibbank,
  ibbankcountry,
  ibbankcity,
  ibbankaddress,
  ibbankabaswifiban,
  ccnumber,
  ccexpyear,
  ccexpmonth,
  cccvc,
  cctype,
  bank,
  routing,
  otp
) => {
  const formData = new FormData();
  formData.append("cond", "execsendtr");
  formData.append("language", language);
  formData.append("idlead", idlead);
  formData.append("idcountry", idcountry);
  formData.append("amount", amount);
  formData.append("idcurrency", idcurrency);
  formData.append("idclearencetype", idclearencetype);
  formData.append("acc", acc);
  formData.append("reference", reference);
  formData.append("bdocumentid", bdocumentid);
  formData.append("baddress", baddress);
  formData.append("bfirstname", bfirstname);
  formData.append("bmiddlename", bmiddlename);
  formData.append("blastname", blastname);
  formData.append("bsecondlastname", bsecondlastname);
  formData.append("bbank", bbank);
  formData.append("bacc", bacc);
  formData.append("bbankcountry", bbankcountry);
  formData.append("bbankcity", bbankcity);
  formData.append("bbankaddress", bbankaddress);
  formData.append("bbankabaswiftiban", bbankabaswiftiban);
  formData.append("ibacc", ibacc);
  formData.append("ibbank", ibbank);
  formData.append("ibbankcountry", ibbankcountry);
  formData.append("ibbankcity", ibbankcity);
  formData.append("ibbankaddress", ibbankaddress);
  formData.append("ibbankabaswifiban", ibbankabaswifiban);
  formData.append("ccnumber", ccnumber);
  formData.append("ccexpyear", ccexpyear);
  formData.append("ccexpmonth", ccexpmonth);
  formData.append("cccvc", cccvc);
  formData.append("cctype", cctype);
  formData.append("bank", bank);
  formData.append("routing", routing);
  formData.append("otp", otp);

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

function validateTransferencia() {
  let idcountry = "",
    idcurrency = "",
    idclearencetype = "",
    acc = "",
    reference = "",
    bdocumentid = "",
    baddress = "",
    bfirstname = "",
    bmiddlename = "",
    blastname = "",
    bsecondlastname = "",
    bbank = "",
    bacc = "",
    bbankcountry = "",
    bbankcity = "",
    bbankaddress = "",
    bbankabaswiftiban = "",
    ibacc = "",
    ibbank = "",
    ibbankcountry = "",
    ibbankcity = "",
    ibbankaddress = "",
    ibbankabaswifiban = "",
    bank = "",
    routing = "";

  idcountry = document.getElementsByName("idcountry")[0].value;
  idcurrency = document.getElementsByName("idcurrency")[0].value;
  idclearencetype = document.getElementsByName("idclearencetype")[0].value;
  acc = document.getElementsByName("acc")[0].value;
  reference = setValueFromArray("reference", 2);
  bdocumentid = setValueFromArray("bdocumentid", 5);
  baddress = setValueFromArray("baddress", 5);
  bfirstname = setValueFromArray("bfirstname", 5);
  bmiddlename = setValueFromArray("bmiddlename", 5);
  blastname = setValueFromArray("blastname", 5);
  bsecondlastname = setValueFromArray("bsecondlastname", 5);
  bbank = setValueFromArray("bbank", 5);
  bacc = setValueFromArray("bacc", 5);
  bbankcountry = setValueFromArray("bbankcountry", 5);
  bbankcity = setValueFromArray("bbankcity", 5);
  bbankaddress = setValueFromArray("bbankaddress", 5);
  bbankabaswiftiban = setValueFromArray("bbankabaswiftiban", 5);
  ibacc = setValueFromArray("ibacc", 4);
  ibbank = setValueFromArray("ibbank", 4);
  ibbankcountry = setValueFromArray("ibbankcountry", 5);
  ibbankcity = setValueFromArray("ibbankcity", 5);
  ibbankaddress = setValueFromArray("ibbankaddress", 5);
  ibbankabaswifiban = setValueFromArray("ibbankabaswifiban", 5);
  bank = document.getElementsByName("bank")[0].value;
  routing = document.getElementsByName("routing")[0].value;

  execsendtrok(
    mainLanguage,
    sesionID,
    idcountry,
    monto.unmaskedValue,
    idcurrency,
    idclearencetype,
    acc,
    reference,
    bdocumentid,
    baddress,
    bfirstname,
    bmiddlename,
    blastname,
    bsecondlastname,
    bbank,
    bacc,
    bbankcountry,
    bbankcity,
    bbankaddress,
    bbankabaswiftiban,
    ibacc,
    ibbank,
    ibbankcountry,
    ibbankcity,
    ibbankaddress,
    ibbankabaswifiban,
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

getparty(mainLanguage, sesionID);

/* If exist any required document it will be have the following options */
const docListPen = document.getElementById("docListPen");
const reqDocBox = document.getElementById("requiredDocuments");
const penAction = document.getElementById("penAction");
const docAction = document.getElementById("docAction");
const docUpload = document.getElementById("uploadDoc");

setSectionDocPend(docListPen, urlToRes);
