const currencylist = document.getElementById("currencylist");
const leadslist = document.getElementById("leadslist");
const hexaStepOk = document.getElementsByClassName("hexa-step-ok")[0];
const amount = inputMasked("amount", 0, 1000000000, 2);
const comment = document.getElementById("comment");

let finalPTP = null;
let otpCode = null;
let leadin = "";
let currency = "";
const urlToRes = "ptppaymentreceive.php";

changerSteps("1", "1", "blue");

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

   if (res.code === "0000" && res.message.indexOf("OK") != -1) {
      otpCode = res.otp;
      finalPTP = true;
      execinputw(
         mainLanguage,
         sesionID,
         leadin,
         amount.unmaskedValue,
         currency,
         res.otp
      );
   }

   return res;
};

const execinputwok = async (
   language,
   idlead,
   idleadsrc,
   amount,
   idcurrency
) => {
   const formData = new FormData();
   formData.append("cond", "execinputwok");
   formData.append("language", language);
   formData.append("idlead", idlead);
   formData.append("idleadsrc", idleadsrc);
   formData.append("amount", amount);
   formData.append("idcurrency", idcurrency);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.code === "0000" && res.docpend === "" && res.message === "OK") {
      genotp(mainLanguage, sesionID);
   }
   if (res.message.indexOf("INTERNAL 0008") != -1) {
      showAlertMessage(res.message, "profile2.php");
   }
   if (res.code === "5000") {
      showAlertMessage(res.message, urlToRes);
   }
   if (res.code === "7001") {
      docPenAction(res, urlToRes);
   }

   return res;
};

const execinputw = async (
   language,
   idlead,
   idleadsrc,
   amount,
   idcurrency,
   otp
) => {
   const formData = new FormData();
   formData.append("cond", "execinputw");
   formData.append("language", language);
   formData.append("idlead", idlead);
   formData.append("idleadsrc", idleadsrc);
   formData.append("amount", amount);
   formData.append("idcurrency", idcurrency);
   formData.append("otp", otp);

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

function getLeadsList() {
   let opcId =
      leadslist.options[leadslist.selectedIndex].getAttribute("data-id");
   leadin = opcId;
   return true;
}
leadslist.addEventListener("change", getLeadsList, false);

function getCurrencyList() {
   let opcId =
      currencylist.options[currencylist.selectedIndex].getAttribute("data-id");
   currency = opcId;
}
currencylist.addEventListener("change", getCurrencyList, false);

function setStepOk() {
   loaderOpen();
   execinputwok(mainLanguage, sesionID, leadin, amount.unmaskedValue, currency);
}
hexaStepOk.addEventListener("click", setStepOk, false);

/* If exist any required document it will be have the following options */
const docListPen = document.getElementById("docListPen");
const reqDocBox = document.getElementById("requiredDocuments");
const penAction = document.getElementById("penAction");
const docAction = document.getElementById("docAction");
const docUpload = document.getElementById("uploadDoc");

setSectionDocPend(docListPen, urlToRes);
