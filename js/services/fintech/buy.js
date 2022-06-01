const list = document.getElementsByClassName("id")[0];
const suc = document.getElementsByClassName("ad")[0];
const target = document.getElementsByClassName("target")[0];
const pay_target = document.getElementsByClassName("pay_target")[0];
const type_target_0 = document.getElementsByClassName("type_target_0")[0];
const type_target_1 = document.getElementsByClassName("type_target_1")[0];
const payTargetLabel = document.getElementById("tarjetaDePagoLabel");

const button_next = document.getElementById("button_next");
const contRefe = document.getElementById("contRefe");
const contDate = document.getElementById("contDate");
const contValidation = document.getElementById("contValidation");

const monto = inputMasked("amount", 0, 1000000000, 2);
const monedas = document.getElementById("monedas");

const cntMontobs = document.getElementById("cntMontobs");
const cntReceptor = document.getElementById("cntReceptor");
const cntTda = document.getElementById("cntTda");

const referencia_0 = document.getElementsByName("reference[0]")[0];
const referencia_1 = document.getElementsByName("reference[1]")[0];

const cctype_0 = document.getElementById("tipoTarjeta_0");
const cctype_1 = document.getElementById("tipoTarjeta_1");
const cctypeInputValue = document.getElementsByClassName("cctype");

const tasa = document.getElementById("tasa");
const montobs = document.getElementById("montobs");

const creditCardNumber02 = document.getElementsByClassName("labelPayTarget02");
const expMonthDate = document.getElementById("fechaVencMes");
const expYearDate = document.getElementById("fechaVencYear");
const validationCode = document.getElementById("codigoValidacion");
const tarjetaAbonar = document.getElementById("tarjetaAbonar");
const tarjetaAbonarLabel = document.getElementById("tarjetaAbonarLabel");
const tarjetaDePago = document.getElementById("tarjetaDePago");
const receptorLabel = document.getElementById("receptorLabel");

let pay = pago.id;
let id = list.id;
let sec = suc.id;
let idpayshape = "";
let idpay = "";
let msgErr = "";
let otpCode = null;
const urlToRes = "buy.php";

const calcsell = async (
   language,
   idlead,
   amount,
   idcurrency,
   idinstrumentdebit,
   idclearencetype
) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "calcsell");
   formData.append("language", language);
   formData.append("idlead", idlead);
   formData.append("amount", amount);
   formData.append("idcurrency", idcurrency);
   formData.append("idinstrumentdebit", idinstrumentdebit);
   formData.append("idclearencetype", idclearencetype);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.code === "0000") {
      callModal.classList.remove("dis");
      buttonOne();
      changerElementsForm(idpay, idpayshape);
      ventanaToggle("remove");

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

   montobs.placeholder = tradMonto + " " + montoVal;
   montobs.value = tradMonto + " " + montoVal;
   montobs.innerHTML = tradMonto + " " + montoVal;
   montobs.replaceChildren();
}

const execsellok = async (
   language,
   idlead,
   idcurrency,
   amount,
   idinstrumentdebit,
   idclearencetype,
   acc,
   reference,
   ccnumber,
   ccexpyear,
   ccexpmonth,
   cccvc,
   cctype,
   debitcardnumter,
   creditcardnumber
) => {
   const formData = new FormData();
   formData.append("cond", "execsellok");
   formData.append("language", language);
   formData.append("idlead", idlead);
   formData.append("idcurrency", idcurrency);
   formData.append("amount", amount);
   formData.append("idinstrumentdebit", idinstrumentdebit);
   formData.append("idclearencetype", idclearencetype);
   formData.append("acc", acc);
   formData.append("reference", reference);
   formData.append("ccnumber", ccnumber);
   formData.append("ccexpyear", ccexpyear);
   formData.append("ccexpmonth", ccexpmonth);
   formData.append("cccvc", cccvc);
   formData.append("cctype", cctype);
   formData.append("debitcardnumter", debitcardnumter);
   formData.append("creditcardnumber", creditcardnumber);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.code === "0000") {
      genotp(language, sesionID);
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

   if (res.otp) {
      otpCode = res.otp;
      let idcurrency = "",
         idinstrumentdebit = "",
         idclearencetype = "",
         acc = "",
         reference = "",
         ccexpyear = "",
         ccexpmonth = "",
         cccvc = "",
         cctype = "",
         debitcardnumter = "",
         creditcardnumber = "";

      if (monedas.value != "-1") {
         idcurrency = monedas.value;
      }

      if (pago.value != "-1") {
         idinstrumentdebit = pago.value;
      }
      if (payshape) {
         idclearencetype = payshape.value;
      }
      if (receptor.value != "0") {
         acc = receptor.value;
      }
      if (referencia_0.value != "") {
         reference = referencia_0.value;
      }
      if (referencia_1.value != "") {
         reference = referencia_1.value;
      }
      ccexpyear = document.getElementsByName("ccexpyear")[0].value;
      ccexpmonth = document.getElementsByName("ccexpmonth")[0].value;
      cccvc = document.getElementsByName("cccvc")[0].value;

      if (document.getElementById("tipoTarjeta_0").value != "-1") {
         cctype = document.getElementById("tipoTarjeta_0").value;
      }
      if (document.getElementById("tipoTarjeta_1").value != "-1") {
         cctype = document.getElementById("tipoTarjeta_1").value;
      }
      creditcardnumber =
         document.getElementsByName("creditcardnumber")[0].value;
      debitcardnumter = creditcardnumber;

      execsell(
         mainLanguage,
         idcurrency,
         sesionID,
         monto.unmaskedValue,
         otpCode,
         idinstrumentdebit,
         idclearencetype,
         acc,
         reference,
         ccnumber,
         ccexpyear,
         ccexpmonth,
         cccvc,
         cctype,
         debitcardnumter,
         creditcardnumber
      );
   }

   return res;
};

const execsell = async (
   language,
   idcurrency,
   idlead,
   amount,
   otp,
   idinstrumentdebit,
   idclearencetype,
   acc,
   reference,
   ccnumber,
   ccexpyear,
   ccexpmonth,
   cccvc,
   cctype,
   debitcardnumter,
   creditcardnumber
) => {
   const formData = new FormData();
   formData.append("cond", "execsell");
   formData.append("language", String(language));
   formData.append("idcurrency", String(idcurrency));
   formData.append("idlead", String(idlead));
   formData.append("amount", String(amount));
   formData.append("otp", String(otp));
   formData.append("idinstrumentdebit", String(idinstrumentdebit));
   formData.append("idclearencetype", String(idclearencetype));
   formData.append("acc", String(acc));
   formData.append("reference", String(reference));
   formData.append("ccnumber", String(ccnumber));
   formData.append("ccexpyear", String(ccexpyear));
   formData.append("ccexpmonth", String(ccexpmonth));
   formData.append("cccvc", String(cccvc));
   formData.append("cctype", String(cctype));
   formData.append("debitcardnumter", String(debitcardnumter));
   formData.append("creditcardnumber", String(creditcardnumber));

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.code === "0000" && res.message.indexOf("OK") != -1) {
      showConfirmationMessage(res.message, urlToRes, otpCode);
   }
   if (res.code === "5000") {
      showAlertMessage(res.message, urlToRes);
   }
   return res;
};

function setPay() {
   idpay = pago.options[pago.selectedIndex].id;

   if (payshape.options[payshape.selectedIndex].value != "-1") {
      if (docListPen == null) {
         preModal(idpayshape);
      }
   }
}
button_next.addEventListener("click", setPay, false);

let modalResumeOper = false;

function getPayMethod() {
   idpayshape = payshape.options[payshape.selectedIndex].id;
}
payshape.addEventListener("change", getPayMethod, false);

async function validateCompra() {
   loaderOpen();
   if (!document.getElementsByName("acc")[0].classList.contains("dis")) {
      valSelCtaRec(document.getElementsByName("acc")[0], "payshape");
   }

   let idcurrency = monedas.value;
   let idinstrumentdebit = pago.value;
   let idclearencetype = payshape.value;
   let acc = receptor.value;
   let reference = "";
   if (referencia_0.value != "") {
      reference = referencia_0.value;
   }
   if (referencia_1.value != "") {
      reference = referencia_1.value;
   }
   let ccexpyear = document.getElementsByName("ccexpyear")[0].value;
   let ccexpmonth = document.getElementsByName("ccexpmonth")[0].value;
   let cccvc = document.getElementsByName("cccvc")[0].value;
   let cctype = "";
   if (cctype_0.value != "") {
      cctype = cctype_0.value;
   }
   if (cctype_1.value != "") {
      cctype = cctype_1.value;
   }
   let creditcardnumber = document.getElementsByName("creditcardnumber")[0];
   let debitcardnumter = creditcardnumber;
   execsellok(
      mainLanguage,
      sesionID,
      idcurrency,
      monto.unmaskedValue,
      idinstrumentdebit,
      idclearencetype,
      acc,
      reference,
      ccnumber,
      ccexpyear,
      ccexpmonth,
      cccvc,
      cctype,
      debitcardnumter,
      creditcardnumber
   );
}

function preModal(idpayshape) {
   var idmonedas = monedas.options[monedas.selectedIndex].id;
   let idpago = pago.options[pago.selectedIndex].id;
   calcsell(
      mainLanguage,
      sesionID,
      monto.unmaskedValue,
      idmonedas,
      idpago,
      idpayshape
   );
}

function formDataFull() {
   const formData = new FormData();
   if (monedas.value != "-1") {
      formData.append("idcurrency", monedas.value);
   }
   formData.append("amount", document.getElementsByName("amount")[0].value);
   if (pago.value != "-1") {
      formData.append("idinstrumentdebit", pago.value);
   }
   if (payshape) {
      formData.append("idclearencetype", payshape.value);
   }
   if (receptor.value != "0") {
      formData.append("acc", receptor.value);
   }
   formData.append("reference_0", referencia_0.value);
   formData.append("reference_1", referencia_1.value);

   if (
      document.getElementById("tipoTarjeta_0").value != "-1" ||
      document.getElementById("tipoTarjeta_1").value != "-1"
   ) {
      formData.append("ccnumber", ccnumber);
      formData.append(
         "ccexpyear",
         document.getElementsByName("ccexpyear")[0].value
      );
      formData.append(
         "ccexpmonth",
         document.getElementsByName("ccexpmonth")[0].value
      );
      formData.append("cccvc", document.getElementsByName("cccvc")[0].value);

      if (document.getElementById("tipoTarjeta_0").value != "-1") {
         formData.append(
            "cctype",
            document.getElementById("tipoTarjeta_0").value
         );
      }
      if (document.getElementById("tipoTarjeta_1").value != "-1") {
         formData.append(
            "cctype",
            document.getElementById("tipoTarjeta_1").value
         );
      }
   }
   formData.append(
      "creditcardnumber",
      document.getElementsByName("creditcardnumber")[0].value
   );
   formData.append("urlTo", urlToRes);
   return formData;
}

function changerElementsForm(pay, id) {
   if (pay == 1 && id == 3) {
      list.classList.remove("dis");
      suc.classList.remove("dis");
      cntMontobs.classList.add("movPosMontobs");
      cntReceptor.classList.add("movPosReceptor");
      receptorLabel.classList.add("receptor01");
      receptorLabel.classList.remove("receptor02");
      receptor.addEventListener(
         "focusin",
         actionFocus.bind(null, receptor, "140px", "compra"),
         false
      );
      receptor.addEventListener(
         "focusout",
         actionFocusOut.bind(null, receptor, "156px", "compra"),
         false
      );
   } else if (pay == 1 && id == 5) {
      pay_target.classList.remove("dis");
      type_target_0.classList.remove("dis");
      contDate.classList.remove("dis");
      contValidation.classList.remove("dis");
      type_target_1.classList.add("dis");
      tarjetaDePago.addEventListener(
         "focusin",
         actionFocus.bind(null, tarjetaDePago, "140px", "compra"),
         false
      );
      tarjetaDePago.addEventListener(
         "focusout",
         actionFocusOut.bind(null, tarjetaDePago, "156px", "compra"),
         false
      );
      expMonthDate.addEventListener(
         "focusin",
         actionFocus.bind(null, expMonthDate, "2px", "compra"),
         false
      );
      expMonthDate.addEventListener(
         "focusout",
         actionFocusOut.bind(null, expMonthDate, "16px", "compra"),
         false
      );
      setFocusElement(expYearDate, "2px", "16px", "compra");
      expYearDate.addEventListener(
         "focusin",
         actionFocus.bind(null, expYearDate, "2px", "compra"),
         false
      );
      expYearDate.addEventListener(
         "focusout",
         actionFocusOut.bind(null, expYearDate, "16px", "compra"),
         false
      );
      setFocusElement(tarjetaDePago, "140px", "156px", "compra");
      setFocusElementSel(
         cctypeInputValue[0],
         "212px",
         "212px",
         "compra",
         "select"
      );
      setFocusElement(expMonthDate, "2px", "16px", "compra");
   } else if (pay == 19 && id == 3) {
      list.classList.remove("dis");
      suc.classList.remove("dis");
      receptorLabel.classList.add("receptor01");
      receptorLabel.classList.remove("receptor02");
      receptor.addEventListener(
         "focusin",
         actionFocus.bind(null, receptor, "140px", "compra"),
         false
      );
      receptor.addEventListener(
         "focusout",
         actionFocusOut.bind(null, receptor, "156px", "compra"),
         false
      );
   } else if (pay == 19 && id == 5) {
      pay_target.classList.remove("dis");
      type_target_0.classList.remove("dis");
      contDate.classList.remove("dis");
      contValidation.classList.remove("dis");
      type_target_1.classList.add("dis");
      tarjetaDePago.addEventListener(
         "focusin",
         actionFocus.bind(null, tarjetaDePago, "140px", "compra"),
         false
      );
      tarjetaDePago.addEventListener(
         "focusout",
         actionFocusOut.bind(null, tarjetaDePago, "156px", "compra"),
         false
      );
      expMonthDate.addEventListener(
         "focusin",
         actionFocus.bind(null, expMonthDate, "2px", "compra"),
         false
      );
      expMonthDate.addEventListener(
         "focusout",
         actionFocusOut.bind(null, expMonthDate, "16px", "compra"),
         false
      );
      expYearDate.addEventListener(
         "focusin",
         actionFocus.bind(null, expYearDate, "2px", "compra"),
         false
      );
      expYearDate.addEventListener(
         "focusout",
         actionFocusOut.bind(null, expYearDate, "16px", "compra"),
         false
      );
      setFocusElementSel(
         cctypeInputValue[0],
         "212px",
         "227px",
         "compra",
         "select"
      );
      setFocusElement(expMonthDate, "2px", "16px", "compra");
      setFocusElement(expYearDate, "2px", "16px", "compra");
      setFocusElement(tarjetaDePago, "140px", "156px", "compra");
   } else if (pay == 20 && id == 3) {
      target.classList.remove("dis");
      receptor.classList.remove("dis");
      contRefe.classList.remove("dis");
      list.classList.remove("dis");
      contDate.classList.add("dis");
      contValidation.classList.add("dis");
      type_target_1.classList.add("dis");
      cntMontobs.classList.add("movPosMontobs");
      cntTda.classList.add("movPosReceptor");
      cntReceptor.classList.add("movPosCta");
      payTargetLabel.classList.add("labelPayTarget02");
      payTargetLabel.classList.remove("labelPayTarget01");
      tarjetaAbonarLabel.classList.remove("tarjetaAbonarTDC");
      tarjetaAbonarLabel.classList.add("tarjetaAbonarDptoCta");
      receptorLabel.classList.remove("receptor01");
      receptorLabel.classList.add("receptor02");
      tarjetaAbonar.addEventListener(
         "focusin",
         actionFocus.bind(null, tarjetaAbonar, "140px", "compra"),
         false
      );
      tarjetaAbonar.addEventListener(
         "focusout",
         actionFocusOut.bind(null, tarjetaAbonar, "156px", "compra"),
         false
      );
      receptor.addEventListener(
         "focusin",
         actionFocus.bind(null, receptor, "212px", "compra"),
         false
      );
      receptor.addEventListener(
         "focusout",
         actionFocusOut.bind(null, receptor, "227px", "compra"),
         false
      );
   } else if (pay == 20 && id == 5) {
      type_target_1.classList.remove("dis");
      pay_target.classList.remove("dis");
      target.classList.remove("dis");
      contRefe.classList.add("dis");
      contDate.classList.remove("dis");
      contValidation.classList.remove("dis");
      payTargetLabel.classList.remove("labelPayTarget02");
      payTargetLabel.classList.add("labelPayTarget01");
      tarjetaAbonarLabel.classList.add("tarjetaAbonarTDC");
      tarjetaAbonarLabel.classList.remove("tarjetaAbonarDptoCta");
      tarjetaAbonar.addEventListener(
         "focusin",
         actionFocus.bind(null, tarjetaAbonar, "140px", "compra"),
         false
      );
      tarjetaAbonar.addEventListener(
         "focusout",
         actionFocusOut.bind(null, tarjetaAbonar, "156px", "compra"),
         false
      );
      tarjetaDePago.addEventListener(
         "focusin",
         actionFocus.bind(null, tarjetaDePago, "212px", "compra"),
         false
      );
      tarjetaDePago.addEventListener(
         "focusout",
         actionFocusOut.bind(null, tarjetaDePago, "227px", "compra"),
         false
      );
      expMonthDate.addEventListener(
         "focusin",
         actionFocus.bind(null, expMonthDate, "76px", "compra"),
         false
      );
      expMonthDate.addEventListener(
         "focusout",
         actionFocusOut.bind(null, expMonthDate, "89px", "compra"),
         false
      );
      expYearDate.addEventListener(
         "focusin",
         actionFocus.bind(null, expYearDate, "76px", "compra"),
         false
      );
      expYearDate.addEventListener(
         "focusout",
         actionFocusOut.bind(null, expYearDate, "89px", "compra"),
         false
      );
      setFocusElement(tarjetaAbonar, "140px", "156px", "compra");
      setFocusElement(tarjetaDePago, "212px", "227px", "compra");
      setFocusElement(expMonthDate, "76px", "89px", "compra");
      setFocusElement(expYearDate, "76px", "89px", "compra");
   } else {
      cntMontobs.classList.remove("movPosMontobs");
      cntReceptor.classList.remove("movPosReceptor");
      cntReceptor.classList.remove("movPosCta");
      cntTda.classList.remove("movPosReceptor");
      type_target_1.classList.add("dis");
      list.classList.add("dis");
      suc.classList.add("dis");
      target.classList.add("dis");
   }
}

/* If exist any required document it will be have the following options */
const docListPen = document.getElementById("docListPen");
const reqDocBox = document.getElementById("requiredDocuments");
const penAction = document.getElementById("penAction");
const docAction = document.getElementById("docAction");
const docUpload = document.getElementById("uploadDoc");

setSectionDocPend(docListPen, urlToRes);

setFocusElement(validationCode, "152px", "165px", "compra");
setFocusElementSel(cctype_1, "2px", "16px", "compra", "select");

function ventanaToggle(action) {
   if (action == "add") {
      dynamicFor(ventana, "add", "dis");
      modalScreen.classList.add("dis");
   }
   if (action == "remove") {
      dynamicFor(ventana, "remove", "dis");
      modalScreen.classList.remove("dis");
   }
}
