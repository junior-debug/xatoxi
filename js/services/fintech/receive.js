let action = "";
let userTarjeta = [];
let idlocationOpc = "";
let otpCode = null;
let finalRecepcion = "";
const urlToRes = "receive.php";

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

  if (res.code === "5000") {
    showAlertMessage(res.message, urlToRes);
  }
  if (res.otp) {
    otpCode = res.otp;
    let accInput = "",
      keyInput = "",
      idclearencetypeInput = "",
      idlocationInput = "",
      prefijoInput = "",
      mpbankcodeInput = "",
      mpbankaccountInput = "",
      prepaidcardnumberInput = "",
      remittancecardnumberInput = "",
      prepaidcardaccountInput = "",
      remittancecardaccountInput = "";

    accInput = acc.value;
    keyInput = claveRemesa.value;

    if (recepcion.value != "0") {
      idclearencetypeInput = recepcion.value;
    }
    idlocationInput = idlocationOpc;
    if (mpbankcode.value != "0") {
      mpbankcodeInput = mpbankcode.value;
    }
    if (prefijo.value != "0") {
      prefijoInput = prefijo.value;
    }

    if (recepcion.value == "3") {
      mpbankaccountInput = userTarjeta.tlf;
    } else if (recepcion.value == "4") {
      mpbankaccountInput = codigo.value + prefijoInput + telefono.value;
    }

    prepaidcardnumberInput = prepaidCardNumber.value;
    remittancecardnumberInput = remittanceCardNumber.value;
    prepaidcardaccountInput = prepaidCardAccount.value;
    remittancecardaccountInput = remittanceCardAccount.value;

    recv(
      language,
      sesionID,
      accInput,
      keyInput,
      userTarjeta.addr,
      userTarjeta.bdate,
      userTarjeta.idparty,
      idlocationInput,
      idclearencetypeInput,
      mpbankcodeInput,
      mpbankaccountInput,
      prepaidcardnumberInput,
      prepaidcardaccountInput,
      remittancecardnumberInput,
      remittancecardaccountInput,
      otpCode
    );
  }
  return res;
};

const recv = async (
  language,
  idlead,
  acc,
  key,
  addr,
  bdate,
  idparty,
  idlocation,
  idclearencetype,
  mpbankcode,
  mpbankaccount,
  prepaidcardnumber,
  prepaidcardaccount,
  remittancecardnumber,
  remittancecardaccount,
  otp
) => {
  const formData = new FormData();
  formData.append("cond", "recv");
  formData.append("language", language);
  formData.append("idlead", idlead);
  formData.append("acc", acc);
  formData.append("key", key);
  formData.append("addr", addr);
  formData.append("bdate", bdate);
  formData.append("idparty", idparty);
  formData.append("idlocation", idlocation);
  formData.append("idclearencetype", idclearencetype);
  formData.append("mpbankcode", mpbankcode);
  formData.append("mpbankaccount", mpbankaccount);
  formData.append("prepaidcardnumber", prepaidcardnumber);
  formData.append("prepaidcardaccount", prepaidcardaccount);
  formData.append("remittancecardnumber", remittancecardnumber);
  formData.append("remittancecardaccount", remittancecardaccount);
  formData.append("otp", otp);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res.code === "0000" && res.message.indexOf("OK") != -1) {
    showConfirmationMessage(res.message, urlToRes, otpCode);
  }
  if (res.code === "0000" && res.message.indexOf("OK") == -1) {
    showAlertMessage(res.message, urlToRes);
  }
  if (res.code === "5000") {
    showAlertMessage(res.message, urlToRes);
  }

  return res;
};

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
      tlf: res.phoneareacode + res.phonenumber,
      cuentaNro: res.bankaccount,
      idCountry: res.idcountry,
    };
  }
  return res;
};

getparty(mainLanguage, sesionID);

/*function setValueFromArray(tag, tagNumber = null) {
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
}*/

let bankCodeList = [];

async function accountValidate(language, idlead) {
  const formData = new FormData();
  formData.append("cond", "getbankl");
  formData.append("language", language);
  formData.append("idlead", idlead);
  formData.append("idcountry", userTarjeta.idCountry);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res.list[0].code == "NA") {
    showAlertMessage(
      "This process only can be complete with an Venezuelan account number with the following format 01XXXXXXXXXXXXXXXXXX !",
      urlToRes
    );
  } else {
    res.list.forEach((e) => {
      bankCodeList.push(e.code);
    });
    if (acc.value.length == 20) {
      let fourDigits = acc.value.substring(0, 4);
      return bankCodeList.includes(fourDigits);
    } else {
      showAlertMessage(
        "The account number must have the following format 01XXXXXXXXXXXXXXXXXX !",
        urlToRes
      );
    }
  }
}

async function validateRecepcion() {
  loaderOpen();
  const formData = new FormData();
  formData.append("cond", "recvok");
  formData.append("language", mainLanguage);
  formData.append("idlead", sesionID);
  formData.append("acc", acc.value);
  formData.append("key", claveRemesa.value);
  formData.append("addr", userTarjeta.addr);
  formData.append("bdate", userTarjeta.bdate);
  formData.append("idparty", userTarjeta.idparty);
  formData.append(
    "idclearencetype",
    recepcion.value != "0" ? recepcion.value : ""
  );
  formData.append("idlocation", idlocationOpc);
  formData.append(
    "mpbankcode",
    mpbankcode.value != "0" ? mpbankcode.value : ""
  );
  formData.append("prepaidcardnumber", prepaidCardNumber.value);
  formData.append("remittancecardnumber", remittanceCardNumber.value);
  formData.append("prepaidcardaccount", prepaidCardAccount.value);
  formData.append("remittancecardaccount", remittanceCardAccount.value);
  let mpbankaccount = "";
  if (recepcion.value == "3") {
    mpbankaccount = userTarjeta.tlf;
  } else if (recepcion.value == "4") {
    mpbankaccount = codigo.value + prefijo.value + telefono.value;
  }
  formData.append("mpbankaccount", mpbankaccount);

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res.code === "0000") {
    //if (recepcion.value == "3") {
    // if (accountValidate(mainLanguage, sesionID)) {
    genotp(mainLanguage, sesionID);
    //}
    //} else {
    //genotp(mainLanguage, sesionID);
    //}
  } else if (res.code === "5000") {
    showAlertMessage(res.message, urlToRes);
  } else if (res.code === "7001") {
    docPenAction(res, urlToRes);
  }
}

function formDataFull() {
  const formData = new FormData();

  formData.append("acc", acc.value);
  formData.append("key", claveRemesa.value);

  if (recepcion.value != "0") {
    formData.append("idclearencetype", recepcion.value);
  }
  formData.append("idlocation", idlocationOpc);
  if (mpbankcode.value != "0") {
    formData.append("mpbankcode", mpbankcode.value);
  }
  formData.append("codigo", codigo.value);
  formData.append("prefijo", prefijo.value);
  formData.append("telefono", telefono.value);
  formData.append("prepaidcardnumber", prepaidCardNumber.value);
  formData.append("remittancecardnumber", remittanceCardNumber.value);
  formData.append("prepaidcardaccount", prepaidCardAccount.value);
  formData.append("remittancecardaccount", remittanceCardAccount.value);

  formData.append("urlTo", urlToRes);
  return formData;
}
function getLocationList() {
  idlocationOpc = idlocation.options[idlocation.selectedIndex].id;
}
idlocation.addEventListener("change", getLocationList, false);

function getSubLocationList() {
  idlocationOpc = subLocationSel.options[subLocationSel.selectedIndex].id;
}
subLocationSel.addEventListener("change", getSubLocationList, false);

/* If exist any required document it will be have the following options */
const docListPen = document.getElementById("docListPen");
const reqDocBox = document.getElementById("requiredDocuments");
const penAction = document.getElementById("penAction");
const docAction = document.getElementById("docAction");
const docUpload = document.getElementById("uploadDoc");

setSectionDocPend(docListPen, urlToRes);
