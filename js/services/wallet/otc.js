const price = inputMasked("price", 0, 1000000000, 4);
const qty = inputMasked("qty", 0, 1000000000, 4);
const total = inputMasked("total", 0, 1000000000, 4);
const usdAmount = document.getElementById("usdAmount");
const eurAmount = document.getElementById("eurAmount");
const makeOtc = document.getElementsByClassName("makeOtc")[0];
const coinsList = document.getElementById("coinsList");
const transaction = document.getElementById("transaction");
const buyotclist = document.getElementsByClassName("buyotclist")[0];
const sellotclist = document.getElementsByClassName("sellotclist")[0];
const buysellotc = document.getElementsByClassName("buysellotc")[0];

let finalOtc = null;
let otpCode = null;
const urlToRes = "otc.php";

const getcryptoprice = async (language, idlead, isocrypto, isocurrency) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "getcryptoprice");
   formData.append("language", language);
   formData.append("idlead", idlead);
   formData.append("isocrypto", isocrypto);
   formData.append("isocurrency", isocurrency);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (isocurrency === "USD") {
      if (language == "es") {
         aux = new Intl.NumberFormat("es-ES").format(res.list[opcTrx]);
      }
      if (language == "en") {
         aux = new Intl.NumberFormat("en-US").format(res.list[opcTrx]);
      }

      usdAmount.value = "\u0024 " + aux;
   }
   if (isocurrency === "EUR") {
      if (language == "es") {
         aux = new Intl.NumberFormat("es-ES").format(res.list[opcTrx]);
      }
      if (language == "en") {
         aux = new Intl.NumberFormat("en-US").format(res.list[opcTrx]);
      }
      eurAmount.value = "\u20AC " + aux;
   }
   loaderClose();
   return res;
};

const execotcok = async (
   language,
   idlead,
   idcrypto,
   idoperationtype,
   amount,
   price
) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "execotcok");
   formData.append("language", language);
   formData.append("idlead", idlead);
   formData.append("idcrypto", idcrypto);
   formData.append("idoperationtype", idoperationtype);
   formData.append("amount", amount);
   formData.append("price", price);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.message.indexOf("INTERNAL 0008") != -1) {
      showAlertMessage(res.message, "profile2.php");
   }
   if (res.code === "7001") {
      docPenAction(res, urlToRes);
   }
   if (res.code === "0000" && res.docpend === "" && res.message === "OK") {
      genotp(mainLanguage, sesionID);
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
      execotc(
         mainLanguage,
         sesionID,
         opcIdCoin,
         opcIdTrx,
         res.otp,
         qty.unmaskedValue,
         price.unmaskedValue
      );
   }
   return res;
};

const execotc = async (
   language,
   idlead,
   idcrypto,
   idoperationtype,
   otp,
   amount,
   price
) => {
   const formData = new FormData();
   formData.append("cond", "execotc");
   formData.append("language", language);
   formData.append("idlead", idlead);
   formData.append("idcrypto", idcrypto);
   formData.append("idoperationtype", idoperationtype);
   formData.append("otp", otp);
   formData.append("amount", amount);
   formData.append("price", price);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.code === "0000" && res.message.indexOf("OK") != -1) {
      showConfirmationMessage(res.message, urlToRes, otpCode);
   }
   loaderClose();
   return res;
};

let opcTrx = transaction[0].value;
let opcIdTrx = transaction[0].getAttribute("data-id");

function getColorTransactions(elem) {
   opcTrx = elem.value;
   opcText = elem.options[elem.selectedIndex].value;
   opcIdTrx = elem.options[elem.selectedIndex].getAttribute("data-id");

   /* Cambia el texto del boton de accion */
   const btnMakeOtc = document.getElementsByClassName("makeOtc")[0];
   btnMakeOtc.innerHTML = opcText;

   /* Cambia el color del boton de accion y seleccion */
   const hexaMakeOtc1 = document.getElementsByClassName("one-sp")[0];
   const hexaMakeOtc2 = document.getElementsByClassName("two-sp")[0];
   const hexaMakeOtc3 = document.getElementsByClassName("three-sp")[0];
   if (opcIdTrx == 1) {
      elem.classList.remove("green");
      elem.classList.add("yellow");

      hexaMakeOtc1.classList.remove("green");
      hexaMakeOtc1.classList.add("yellow");
      hexaMakeOtc2.classList.remove("green");
      hexaMakeOtc2.classList.add("yellow");
      hexaMakeOtc3.classList.remove("green");
      hexaMakeOtc3.classList.add("yellow");
   } else if (opcIdTrx == 2) {
      elem.classList.remove("yellow");
      elem.classList.add("green");

      hexaMakeOtc1.classList.remove("yellow");
      hexaMakeOtc1.classList.add("green");
      hexaMakeOtc2.classList.remove("yellow");
      hexaMakeOtc2.classList.add("green");
      hexaMakeOtc3.classList.remove("yellow");
      hexaMakeOtc3.classList.add("green");
   }

   /* Consulta y muestra valores de cotizacion en: */
   getcryptoprice(mainLanguage, sesionID, opcCoin, "USD");
   getcryptoprice(mainLanguage, sesionID, opcCoin, "EUR");
}

transaction.addEventListener(
   "change",
   getColorTransactions.bind(null, transaction),
   false
);

let opcCoin = coinsList[0].value;
let opcIdCoin = coinsList[0].getAttribute("data-id");
if (opcCoin !== undefined) {
   getcryptoprice(mainLanguage, sesionID, opcCoin, "USD");
   getcryptoprice(mainLanguage, sesionID, opcCoin, "EUR");
}

function getCoinList() {
   opcCoin = this.value;
   opcIdCoin = this.options[this.selectedIndex].getAttribute("data-id");
   getcryptoprice(mainLanguage, sesionID, opcCoin, "USD");
   getcryptoprice(mainLanguage, sesionID, opcCoin, "EUR");
}
coinsList.addEventListener("change", getCoinList, false);

function calcPriceToTotal() {
   if (!isNaN(qty.unmaskedValue) && qty.unmaskedValue > 0) {
      let aux = parseFloat(price.unmaskedValue) * parseFloat(qty.unmaskedValue);
      if (isNaN(aux)) {
         total.typedValue = 0;
      } else {
         total.typedValue = aux;
      }
   }
}

let firstResetPrice = true;
function resetPrice() {
   if (firstResetPrice) {
      firstResetPrice = false;
      price.typedValue = "";
   }
}
function calcQtyToTotal() {
   if (!isNaN(price.unmaskedValue) && price.unmaskedValue > 0) {
      let aux = parseFloat(qty.unmaskedValue) * parseFloat(price.unmaskedValue);
      if (isNaN(aux)) {
         total.typedValue = 0;
      } else {
         total.typedValue = aux;
      }
   }
}

let firstResetQty = true;
function resetQty() {
   if (firstResetQty) {
      firstResetQty = false;
      qty.typedValue = "";
   }
}

function parseLocaleNumber(stringNumber, locale) {
   var thousandSeparator = Intl.NumberFormat(locale)
      .format(11111)
      .replace(/\p{Number}/gu, "");
   var decimalSeparator = Intl.NumberFormat(locale)
      .format(1.1)
      .replace(/\p{Number}/gu, "");

   return parseFloat(
      stringNumber
         .replace(new RegExp("\\" + thousandSeparator, "g"), "")
         .replace(new RegExp("\\" + decimalSeparator), ".")
   );
}

function getTransactionOtc() {
   let usdAux = usdAmount.value.split(" ");
   let eurAux = eurAmount.value.split(" ");
   if (
      qty.unmaskedValue > 0 &&
      price.unmaskedValue > 0 &&
      total.unmaskedValue > 0
   ) {
      execotcok(
         mainLanguage,
         sesionID,
         opcIdCoin,
         opcIdTrx,
         qty.unmaskedValue,
         price.unmaskedValue
      );
   }
}
makeOtc.addEventListener("click", getTransactionOtc, false);

function openOtcBuyList() {
   window.open("./otcbuylist.php", "_self");
}
buyotclist.addEventListener("click", openOtcBuyList, false);

function openOtcSellList() {
   window.open("./otcselllist.php", "_self");
}
sellotclist.addEventListener("click", openOtcSellList, false);

function openOtcBuySell() {
   window.open("./otc.php", "_self");
}
buysellotc.addEventListener("click", openOtcBuySell, false);

/* If exist any required document it will be have the following options */
const docListPen = document.getElementById("docListPen");
const reqDocBox = document.getElementById("requiredDocuments");
const penAction = document.getElementById("penAction");
const docAction = document.getElementById("docAction");
const docUpload = document.getElementById("uploadDoc");

setSectionDocPend(docListPen, urlToRes);
