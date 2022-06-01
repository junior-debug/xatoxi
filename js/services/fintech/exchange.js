const monto = inputMasked("monto", 0, 1000000000, 2);
const divisa = document.getElementById("divisa");
const entrega = document.getElementById("entrega");
const recibe = document.getElementById("recibe");
const recibeDivisa = document.getElementsByClassName("divisaList");

let finalCambio = false;
let action = "";
let otpCode = null;
const urlToRes = "exchange.php";

function clearOptions(targetId) {
   let options = document.querySelectorAll("#" + targetId + " option");
   options.forEach((o) => {
      if (o.value != 0) {
         o.remove();
      }
   });
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

   if (res.message.indexOf("INSTRUMENT") != -1) {
      showAlertMessage(res.message, urlToRes);
   }
   if (res.code === "5000") {
      showAlertMessage(res.message, urlToRes);
   }
   if (res.otp) {
      otpCode = res.otp;

      let idinstrumentsrc = "",
         idcurrencysrc = "",
         idinstrumentdst = "",
         idcurrencydst = "",
         amount = "",
         bank = "",
         numref = "",
         routing = "";

      if (document.getElementsByName("idinstrumentsrc")[0].value != "0") {
         idinstrumentsrc =
            document.getElementsByName("idinstrumentsrc")[0].value;
      }
      if (document.getElementsByName("idcurrencysrc")[0].value != "0") {
         idcurrencysrc = document.getElementsByName("idcurrencysrc")[0].value;
      }
      if (document.getElementsByName("idinstrumentdst")[0].value != "0") {
         idinstrumentdst =
            document.getElementsByName("idinstrumentdst")[0].value;
      }
      for (let i = 0; i < 4; i++) {
         if (document.getElementsByName("idcurrencydst_" + i)[0].value != "0") {
            idcurrencydst = document.getElementsByName("idcurrencydst_" + i)[0]
               .value;
         }
      }
      amount = monto.unmaskedValue;
      for (let i = 0; i < 3; i++) {
         if (document.getElementsByName("bank_" + i)[0].value != "") {
            bank = document.getElementsByName("bank_" + i)[0].value;
         }
         if (document.getElementsByName("numref_" + i)[0].value != "") {
            numref = document.getElementsByName("numref_" + i)[0].value;
         }
      }
      for (let i = 0; i < 2; i++) {
         if (document.getElementsByName("routing_" + i)[0].value != "") {
            routing = document.getElementsByName("routing_" + i)[0].value;
         }
      }

      execexchange(
         mainLanguage,
         sesionID,
         idinstrumentsrc,
         idcurrencysrc,
         idinstrumentdst,
         idcurrencydst,
         amount,
         bank,
         numref,
         routing,
         otpCode
      );
   }
   return res;
};

const getcurrencysrcl = async (language, idinstrumentsrc, idlead) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "getcurrencysrcl");
   formData.append("language", language);
   formData.append("idinstrumentsrc", idinstrumentsrc);
   formData.append("idlead", idlead);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.list) {
      clearOptions("divisa");
      res.list.forEach((e) => {
         let opt = document.createElement("option");
         opt.value = e["id"];
         opt.innerHTML = e["iso"];
         opt.id = e["id"];
         divisa.add(opt);
      });
      loaderClose();
   } else {
      loaderClose();
   }

   return res;
};

const getinstrumentdstl = async (
   language,
   idinstrumentsrc,
   idlead,
   idcurrencysrc
) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "getinstrumentdstl");
   formData.append("language", language);
   formData.append("idinstrumentsrc", idinstrumentsrc);
   formData.append("idlead", idlead);
   formData.append("idcurrencysrc", idcurrencysrc);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.list) {
      clearOptions("recibe");
      res.list.forEach((e) => {
         let opt = document.createElement("option");
         opt.value = e["id"];
         opt.innerHTML = e["name"];
         opt.id = e["id"];
         recibe.add(opt);
      });
      loaderClose();
   } else {
      loaderClose();
   }

   return res;
};

const getcurrencydstl = async (
   language,
   idinstrumentsrc,
   idlead,
   idcurrencysrc,
   idinstrumentdst
) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "getcurrencydstl");
   formData.append("language", language);
   formData.append("idinstrumentsrc", idinstrumentsrc);
   formData.append("idlead", idlead);
   formData.append("idcurrencysrc", idcurrencysrc);
   formData.append("idinstrumentdst", idinstrumentdst);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.list) {
      let optionsLists = Array.from(
         document.getElementsByClassName("divisaList")
      );
      optionsLists.forEach((item, index) => {
         clearOptions(item.id);
         itemID = document.getElementById(item.id);
         res.list.forEach((e) => {
            let opt = document.createElement("option");
            opt.value = e["id"];
            opt.innerHTML = e["iso"];
            opt.id = e["id"];
            itemID.add(opt);
         });
      });
      loaderClose();
   } else {
      loaderClose();
   }
   return res;
};

const execexchangeok = async (
   language,
   idlead,
   idinstrumentsrc,
   idcurrencysrc,
   idinstrumentdst,
   idcurrencydst,
   amount,
   bank,
   numref,
   routing
) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "execexchangeok");
   formData.append("language", language);
   formData.append("idlead", idlead);
   formData.append("idinstrumentsrc", idinstrumentsrc);
   formData.append("idcurrencysrc", idcurrencysrc);
   formData.append("idinstrumentdst", idinstrumentdst);
   formData.append("idcurrencydst", idcurrencydst);
   formData.append("amount", amount);
   formData.append("bank", bank);
   formData.append("numref", numref);
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

const execexchange = async (
   language,
   idlead,
   idinstrumentsrc,
   idcurrencysrc,
   idinstrumentdst,
   idcurrencydst,
   amount,
   bank,
   numref,
   routing,
   otp
) => {
   const formData = new FormData();
   formData.append("cond", "execexchange");
   formData.append("language", language);
   formData.append("idlead", idlead);
   formData.append("idinstrumentsrc", idinstrumentsrc);
   formData.append("idcurrencysrc", idcurrencysrc);
   formData.append("idinstrumentdst", idinstrumentdst);
   formData.append("idcurrencydst", idcurrencydst);
   formData.append("amount", amount);
   formData.append("bank", bank);
   formData.append("numref", numref);
   formData.append("routing", routing);
   formData.append("otp", otp);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.code === "0000" && res.message.indexOf("OK") != -1) {
      if (entrega.value == 1 && recibe.value == 2) {
         showConfirmationMessage(
            res.message,
            "remittance.php",
            otpCode,
            monto.value,
            entrega.value
         );
      } else if (entrega.value == 1 && recibe.value == 4) {
         showConfirmationMessage(
            res.message,
            "transfer.php",
            otpCode,
            monto.value,
            entrega.value
         );
      } else {
         showConfirmationMessage(res.message, urlToRes, otpCode);
      }
   }
   return res;
};

async function formCambio() {
   let idinstrumentsrc = "",
      idcurrencysrc = "",
      idinstrumentdst = "",
      idcurrencydst = "",
      amount = "",
      bank = "",
      numref = "",
      routing = "";

   if (document.getElementsByName("idinstrumentsrc")[0].value != "0") {
      idinstrumentsrc = document.getElementsByName("idinstrumentsrc")[0].value;
   }
   if (document.getElementsByName("idcurrencysrc")[0].value != "0") {
      idcurrencysrc = document.getElementsByName("idcurrencysrc")[0].value;
   }
   if (document.getElementsByName("idinstrumentdst")[0].value != "0") {
      idinstrumentdst = document.getElementsByName("idinstrumentdst")[0].value;
   }
   for (let i = 0; i < 4; i++) {
      if (document.getElementsByName("idcurrencydst_" + i)[0].value != "0") {
         idcurrencydst = document.getElementsByName("idcurrencydst_" + i)[0]
            .value;
      }
   }
   amount = monto.unmaskedValue;
   for (let i = 0; i < 3; i++) {
      if (document.getElementsByName("bank_" + i)[0].value != "") {
         bank = document.getElementsByName("bank_" + i)[0].value;
      }
      if (document.getElementsByName("numref_" + i)[0].value != "") {
         numref = document.getElementsByName("numref_" + i)[0].value;
      }
   }
   for (let i = 0; i < 2; i++) {
      if (document.getElementsByName("routing_" + i)[0].value != "") {
         routing = document.getElementsByName("routing_" + i)[0].value;
      }
   }

   execexchangeok(
      mainLanguage,
      sesionID,
      idinstrumentsrc,
      idcurrencysrc,
      idinstrumentdst,
      idcurrencydst,
      amount,
      bank,
      numref,
      routing
   );
}

function formDataFull() {
   const formData = new FormData();

   if (document.getElementsByName("idinstrumentsrc")[0].value != "0") {
      formData.append(
         "idinstrumentsrc",
         document.getElementsByName("idinstrumentsrc")[0].value
      );
   }
   if (document.getElementsByName("idcurrencysrc")[0].value != "0") {
      formData.append(
         "idcurrencysrc",
         document.getElementsByName("idcurrencysrc")[0].value
      );
   }
   if (document.getElementsByName("idinstrumentdst")[0].value != "0") {
      formData.append(
         "idinstrumentdst",
         document.getElementsByName("idinstrumentdst")[0].value
      );
   }
   for (let i = 0; i < 4; i++) {
      if (document.getElementsByName("idcurrencydst_" + i)[0].value != "0") {
         formData.append(
            "idcurrencydst",
            document.getElementsByName("idcurrencydst_" + i)[0].value
         );
      }
   }
   formData.append("amount", monto.unmaskedValue);
   for (let i = 0; i < 3; i++) {
      if (document.getElementsByName("bank_" + i)[0].value != "") {
         formData.append(
            "bank",
            document.getElementsByName("bank_" + i)[0].value
         );
      }
      if (document.getElementsByName("numref_" + i)[0].value != "") {
         formData.append(
            "numref",
            document.getElementsByName("numref_" + i)[0].value
         );
      }
   }
   for (let i = 0; i < 2; i++) {
      if (document.getElementsByName("routing_" + i)[0].value != "") {
         formData.append(
            "routing",
            document.getElementsByName("routing_" + i)[0].value
         );
      }
   }

   return formData;
}

function getDeliveryList() {
   let idinstrumentsrc = entrega.options[entrega.selectedIndex].id;
   getcurrencysrcl(mainLanguage, idinstrumentsrc, sesionID);
}
entrega.addEventListener("change", getDeliveryList, false);

function getCurrencyDeliveriList() {
   let idinstrumentsrc = entrega.options[entrega.selectedIndex].id;
   let idcurrencysrc = divisa.options[divisa.selectedIndex].id;
   getinstrumentdstl(mainLanguage, idinstrumentsrc, sesionID, idcurrencysrc);
}
divisa.addEventListener("change", getCurrencyDeliveriList, false);

function getReceiveList() {
   let idinstrumentsrc = entrega.options[entrega.selectedIndex].id;
   let idcurrencysrc = divisa.options[divisa.selectedIndex].id;
   let idinstrumentdstl = recibe.options[recibe.selectedIndex].id;
   getcurrencydstl(
      mainLanguage,
      idinstrumentsrc,
      sesionID,
      idcurrencysrc,
      idinstrumentdstl
   );
}
recibe.addEventListener("change", getReceiveList, false);

function buttonOne() {
   let idinstrumentsrc = entrega.options[entrega.selectedIndex].id;
   let idcurrencysrc = divisa.options[divisa.selectedIndex].id;
   let idinstrumentdstl = recibe.options[recibe.selectedIndex].id;
   if (monto.value != "" && entrega.value != 0) {
      if (
         idinstrumentsrc == "5" &&
         idcurrencysrc == "386" &&
         idinstrumentdstl == "1"
      ) {
         dynamicFor(pagina_two, "remove", "dis");
      }
      if (
         idinstrumentsrc == "5" &&
         idcurrencysrc == "486" &&
         idinstrumentdstl == "1"
      ) {
         dynamicFor(pagina_three, "remove", "dis");
      }
      if (
         idinstrumentsrc == "1" &&
         idcurrencysrc == "386" &&
         idinstrumentdstl == "2"
      ) {
         dynamicFor(pagina_four, "remove", "dis");
      }
      if (
         idinstrumentsrc == "1" &&
         idcurrencysrc == "486" &&
         idinstrumentdstl == "2"
      ) {
         dynamicFor(pagina_five, "remove", "dis");
      }
      if (
         idinstrumentsrc == "1" &&
         idcurrencysrc == "386" &&
         idinstrumentdstl == "4"
      ) {
         dynamicFor(pagina_six, "remove", "dis");
      }
      if (
         idinstrumentsrc == "1" &&
         idcurrencysrc == "486" &&
         idinstrumentdstl == "4"
      ) {
         dynamicFor(pagina_seven, "remove", "dis");
      }
      if (
         idinstrumentsrc == "2" &&
         idcurrencysrc == "486" &&
         idinstrumentdstl == "1"
      ) {
         dynamicFor(pagina_eight, "remove", "dis");
      }
      if (
         idinstrumentsrc == "20" &&
         idcurrencysrc == "386" &&
         idinstrumentdstl == "1"
      ) {
         dynamicFor(pagina_nine, "remove", "dis");
      }
      if (
         idinstrumentsrc == "20" &&
         idcurrencysrc == "486" &&
         idinstrumentdstl == "1"
      ) {
         dynamicFor(pagina_ten, "remove", "dis");
      }
      if (
         idinstrumentsrc == "21" &&
         idcurrencysrc == "386" &&
         idinstrumentdstl == "1"
      ) {
         dynamicFor(pagina_eleven, "remove", "dis");
      }
      if (
         idinstrumentsrc == "21" &&
         idcurrencysrc == "486" &&
         idinstrumentdstl == "1"
      ) {
         dynamicFor(pagina_twelve, "remove", "dis");
      }
      if (
         idinstrumentsrc == "4" &&
         idcurrencysrc == "386" &&
         idinstrumentdstl == "1"
      ) {
         dynamicFor(pagina_thirteen, "remove", "dis");
      }
      if (
         idinstrumentsrc == "4" &&
         idcurrencysrc == "486" &&
         idinstrumentdstl == "1"
      ) {
         dynamicFor(pagina_fourteen, "remove", "dis");
      }

      for (let i = 0; i < button_one.length; i++) {
         function setScreenTwoExchange() {
            dynamicFor(pagina_one, "add", "izquierda");
            dynamicFor(pagina_one, "add", "dis");
            dynamicFor(button_one, "add", "dis");
            dynamicFor(button_two, "remove", "dis");
            dynamicFor(button_three, "add", "dis");
            dynamicFor(button_four, "remove", "dis");
            dynamicFor(button_four, "add", "purpleButton");
            dynamicFor(new_hexagon, "remove", "white");
            dynamicFor(new_hexagon, "add", "purpleButton");
            activeStep("5", "purple");
         }
         button_one[i].addEventListener("click", setScreenTwoExchange, false);
      }
   }
}

/* If exist any required document it will be have the following options */
const docListPen = document.getElementById("docListPen");
const reqDocBox = document.getElementById("requiredDocuments");
const penAction = document.getElementById("penAction");
const docAction = document.getElementById("docAction");
const docUpload = document.getElementById("uploadDoc");

setSectionDocPend(docListPen, urlToRes);
