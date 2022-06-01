const button1 = document.getElementById("button1");
const button2 = document.getElementById("button2");
const button3 = document.getElementById("button3");

const backButton4 = document.getElementById("backButton4");
const backButton3 = document.getElementById("backButton3");
const backButton2 = document.getElementById("backButton2");

const pagina_one = document.getElementById("pagina_one");
const pagina_two = document.getElementById("pagina_two");
const pagina_three = document.getElementById("pagina_three");
const pagina_four = document.getElementById("pagina_four");

const first = document.getElementsByClassName("first");
const second_step = document.getElementsByClassName("second_step");

const new_hexagon = document.getElementsByClassName("new_hexagon");

const img = document.getElementsByClassName("img");
const okHexagon = document.getElementsByClassName("okHexagon");
const ventana = document.getElementsByClassName("ventana");
const okButton = document.getElementById("okButton");

const bankAccount = document.getElementById("bankAccount");
const cardData = document.getElementById("cardData");
const cont = document.getElementById("cont");
const cuenta2 = document.getElementById("cuenta2");
const cardNumber = document.getElementById("cardNumber");
const cardNumber1 = document.getElementById("cardNumber1");
const target = document.getElementById("target");
const bank2 = document.getElementById("bank2");
const cont2 = document.getElementById("cont2");
const bank = document.getElementById("bank");
const cardData2 = document.getElementById("cardData2");
const target_2 = document.getElementById("target_2");
const debit = document.getElementById("debit");
const pay = document.getElementById("pay");
const codigoValidacionLabel = document.getElementById("codigoValidacionLabel");

changerSteps("2", "1", "purple");

function setScreenTwo() {
   if (monto.value != "" && docListPen == null) {
      action = "modalVentana";
      actionBtn1();
      windowMont.innerHTML = monto.value;
      calcbuy(mainLanguage, sesionID, monto.value, idmonedas, iddebit);
   }
}
button1.addEventListener("click", setScreenTwo, false);

sendFirst = () => {
   for (let i = 0; i < okHexagon.length; i++) {
      okHexagon[i].classList.add("first_background");
   }
   for (let i = 0; i < new_hexagon.length; i++) {
      new_hexagon[i].classList.add("first_background");
   }
};
function userCreditCardValues() {
   number.value = userTarjeta.number;
   setFocusElement(number, "140px", "156px", "venta");
   expDateMonth.value = userTarjeta.expDateMonth;
   setFocusElement(expDateMonth, "2px", "16px", "venta");
   expDateYear.value = userTarjeta.expDateYear;
   setFocusElement(expDateYear, "2px", "16px", "venta");
   validationCode.value = userTarjeta.validationCode;

   target_1.value = userTarjeta.target_1;
}

function actionBtn1() {
   if (
      (debit.value === "1" && pay.value === "22") ||
      (debit.value === "19" && pay.value === "22")
   ) {
      pagina_one.classList.add("dis");
      button2.classList.add("dis");
      pagina_two.classList.remove("dis");
      backButton2.classList.remove("dis");
      cont.classList.remove("dis");
      bank.classList.remove("dis");
      okButton.classList.remove("dis");
      pagina_two.classList.remove("containerformPurple02");
      pagina_two.classList.add("containerformPurple");
      sendFirst();
      activeStep("5", "purple");
   } else if (debit.value === "20" && pay.value === "4") {
      pagina_one.classList.add("dis");
      pagina_two.classList.remove("dis");
      backButton2.classList.remove("dis");
      button2.classList.remove("dis");
      cardNumber.classList.remove("dis");
      cardNumber1.classList.add("dis");
      target.classList.remove("dis");
      cuenta2.classList.remove("dis");
      number.classList.remove("dis");
      okButton.classList.remove("dis");
      pagina_two.classList.remove("containerformPurple02");
      pagina_two.classList.add("containerformPurple");
      codigoValidacionLabel.classList.add("codigoValidacionLabel03");
      codigoValidacionLabel.classList.remove("codigoValidacionLabel02");
      codigoValidacionLabel.classList.remove("codigoValidacionLabel01");
      setFocusElement(validationCode, "105px", "122px", "venta");
      validationCode.addEventListener(
         "focusin",
         actionFocus.bind(null, validationCode, "105px", "venta"),
         false
      );
      validationCode.addEventListener(
         "focusout",
         actionFocusOut.bind(null, validationCode, "122px", "venta"),
         false
      );

      userCreditCardValues();
      changerSteps("3", "2", "purple");
   } else if (debit.value === "20" && pay.value === "21") {
      pagina_one.classList.add("dis");
      pagina_two.classList.remove("dis");
      backButton2.classList.remove("dis");
      button2.classList.remove("dis");
      cardNumber.classList.remove("dis");
      target.classList.remove("dis");
      number.classList.remove("dis");

      target_2.classList.add("dis");
      okButton.classList.remove("dis");
      pagina_two.classList.remove("containerformPurple02");
      pagina_two.classList.add("containerformPurple");

      changerSteps("3", "2", "purple");
   } else if (debit.value === "20" && pay.value === "22") {
      pagina_one.classList.add("dis");
      pagina_two.classList.remove("dis");
      backButton2.classList.remove("dis");
      button2.classList.remove("dis");
      cardNumber.classList.remove("dis");
      target.classList.remove("dis");
      okButton.classList.remove("dis");
      pagina_two.classList.remove("containerformPurple02");
      pagina_two.classList.add("containerformPurple");
      codigoValidacionLabel.classList.add("codigoValidacionLabel01");
      codigoValidacionLabel.classList.remove("codigoValidacionLabel03");
      codigoValidacionLabel.classList.remove("codigoValidacionLabel02");
      setFocusElement(validationCode, "72px", "87px", "venta");
      validationCode.addEventListener(
         "focusin",
         actionFocus.bind(null, validationCode, "72px", "venta"),
         false
      );
      validationCode.addEventListener(
         "focusout",
         actionFocusOut.bind(null, validationCode, "87px", "venta"),
         false
      );
      userCreditCardValues();
      changerSteps("3", "2", "purple");
   } else if (
      (debit.value === "1" && pay.value === "4") ||
      (debit.value === "19" && pay.value === "4")
   ) {
      pagina_one.classList.add("dis");
      button2.classList.add("dis");
      pagina_two.classList.remove("dis");
      backButton2.classList.remove("dis");
      bankAccount.classList.remove("dis");
      okButton.classList.remove("dis");
      pagina_two.classList.remove("containerformPurple02");
      pagina_two.classList.add("containerformPurple");
      sendFirst();
      activeStep("5", "purple");
   } else if (
      (debit.value === "19" && pay.value === "20") ||
      (debit.value === "1" && pay.value === "20")
   ) {
      pagina_one.classList.add("dis");
      pagina_two.classList.remove("dis");
      backButton2.classList.remove("dis");
      button2.classList.remove("dis");
      cardNumber.classList.remove("dis");
      cardNumber1.classList.add("dis");
      cuenta2.classList.add("dis");
      target.classList.remove("dis");
      number.classList.remove("dis");
      okButton.classList.remove("dis");
      pagina_two.classList.remove("containerformPurple02");
      pagina_two.classList.add("containerformPurple");
      codigoValidacionLabel.classList.add("codigoValidacionLabel02");
      codigoValidacionLabel.classList.remove("codigoValidacionLabel01");
      codigoValidacionLabel.classList.remove("codigoValidacionLabel03");
      setFocusElement(validationCode, "212px", "227px", "venta");
      validationCode.addEventListener(
         "focusin",
         actionFocus.bind(null, validationCode, "212px", "venta"),
         false
      );
      validationCode.addEventListener(
         "focusout",
         actionFocusOut.bind(null, validationCode, "227px", "venta"),
         false
      );
      number.value = "";
      expDateMonth.value = "";
      expDateYear.value = "";
      validationCode.value = "";
      target_1.value = "";
      changerSteps("3", "1", "purple");
   } else if (
      (debit.value === "19" && pay.value === "21") ||
      (debit.value === "1" && pay.value === "21")
   ) {
      pagina_one.classList.add("dis");
      button2.classList.add("dis");
      okButton.classList.remove("dis");
      sendFirst();
      pagina_two.classList.remove("dis");
      backButton2.classList.remove("dis");
      cardNumber.classList.remove("dis");
      number.classList.remove("dis");
      pagina_two.classList.add("containerformPurple02");
      pagina_two.classList.remove("containerformPurple");
      activeStep("5", "purple");
   } else if (debit.value === "20" && pay.value === "20") {
      pagina_one.classList.add("dis");
      pagina_two.classList.remove("dis");
      button2.classList.remove("dis");
      backButton2.classList.remove("dis");
      cardNumber.classList.remove("dis");
      target.classList.remove("dis");
      number.classList.remove("dis");
      pagina_two.classList.remove("containerformPurple02");
      pagina_two.classList.add("containerformPurple");
      userCreditCardValues();

      changerSteps("4", "2", "purple");
   } else if (button3.classList.contains("dis") === false) {
      okButton.classList.add("dis");
      for (let i = 0; i < okHexagon.length; i++) {
         okHexagon[i].classList.add("first_background");
      }
      for (let i = 0; i < new_hexagon.length; i++) {
         new_hexagon[i].classList.add("first_background");
      }
   }
}

function setScreenThree() {
   activeStep("6", "purple");

   if (debit.value === "20" && pay.value === "4") {
      pagina_two.classList.add("dis");
      pagina_three.classList.remove("dis");
      button3.classList.add("dis");
      backButton2.classList.add("dis");
      backButton3.classList.remove("dis");
      okButton.classList.remove("dis");
      sendFirst();
   }
   if (debit.value === "20" && pay.value === "21") {
      pagina_two.classList.add("dis");
      pagina_three.classList.remove("dis");
      button3.classList.add("dis");
      backButton2.classList.add("dis");
      backButton3.classList.remove("dis");
      okButton.classList.remove("dis");
      document.getElementById("cntTarget_2").classList.add("dis");
      sendFirst();
   }
   if (debit.value === "20" && pay.value === "20") {
      pagina_two.classList.add("dis");
      pagina_three.classList.remove("dis");
      backButton2.classList.add("dis");
      cardNumber.classList.remove("dis");
      cardNumber1.classList.remove("dis");
      button3.classList.remove("dis");
      backButton3.classList.remove("dis");
      okButton.classList.remove("dis");
      document.getElementById("cntTarget_2").classList.remove("dis");
      codigoValidacionLabel.classList.add("codigoValidacionLabel01");
      codigoValidacionLabel.classList.remove("codigoValidacionLabel03");
      codigoValidacionLabel.classList.remove("codigoValidacionLabel02");
      setFocusElement(validationCode, "72px", "87px", "venta");
      validationCode.addEventListener(
         "focusin",
         actionFocus.bind(null, validationCode, "72px", "venta"),
         false
      );
      validationCode.addEventListener(
         "focusout",
         actionFocusOut.bind(null, validationCode, "87px", "venta"),
         false
      );
      activeStep("5", "purple");
   }
   if (debit.value === "20" && pay.value === "22") {
      pagina_two.classList.add("dis");
      pagina_three.classList.remove("dis");
      button3.classList.add("dis");
      backButton2.classList.add("dis");
      backButton3.classList.remove("dis");
      bank2.classList.remove("dis");
      cont2.classList.remove("dis");
      cardNumber1.classList.add("dis");
      okButton.classList.remove("dis");
      pagina_three.classList.remove("containerformPurple");
      pagina_three.classList.add("containerformPurple03");
      sendFirst();
   }
   if (
      (debit.value === "19" && pay.value === "20") ||
      (debit.value === "19" && pay.value === "21") ||
      (debit.value === "1" && pay.value === "21") ||
      (debit.value === "1" && pay.value === "20")
   ) {
      pagina_two.classList.add("dis");
      pagina_three.classList.remove("dis");
      button3.classList.add("dis");
      backButton2.classList.add("dis");
      backButton3.classList.remove("dis");
      okButton.classList.remove("dis");
      sendFirst();
   }
   // if (button3.classList.contains("dis") === false) {
   //     okButton.classList.add('dis');
   //     for (let i = 0; i < okHexagon.length; i++) {
   //         okHexagon[i].classList.add('first_background');
   //     }
   //     for (let i = 0; i < new_hexagon.length; i++) {
   //         new_hexagon[i].classList.add('first_background');
   //     }
   // }
}
button2.addEventListener("click", setScreenThree, false);

function setScreenFour() {
   sendFirst();
   pagina_three.classList.add("dis");
   pagina_four.classList.remove("dis");
   backButton3.classList.add("dis");
   backButton4.classList.remove("dis");
   okButton.classList.remove("dis");
   activeStep("7", "purple");
}
button3.addEventListener("click", setScreenFour, false);

function setBackScreenOne() {
   pagina_one.classList.remove("dis");
   pagina_two.classList.add("dis");
   backButton2.classList.add("dis");
   button2.classList.add("dis");

   bank.classList.add("dis");
   cont.classList.add("dis");
   cardNumber.classList.add("dis");
   cardNumber1.classList.add("dis");
   bankAccount.classList.add("dis");
   target.classList.add("dis");
   bank2.classList.add("dis");
   cuenta2.classList.add("dis");
   cont2.classList.add("dis");
   document.getElementById("cntTarget_2").classList.add("dis");

   for (let i = 0; i < okHexagon.length; i++) {
      okHexagon[i].classList.remove("first_background");
   }
   for (let i = 0; i < new_hexagon.length; i++) {
      new_hexagon[i].classList.remove("first_background");
   }
   okButton.classList.add("dis");
   changerSteps("2", "1", "purple");
}
backButton2.addEventListener("click", setBackScreenOne, false);

function setBackScreenTwo() {
   if (debit.value === "20" && pay.value === "20") {
      activeStep("3", "purple");
   }
   activeStep("4", "purple");
   pagina_two.classList.remove("dis");
   pagina_three.classList.add("dis");
   backButton2.classList.remove("dis");
   backButton3.classList.add("dis");
   for (let i = 0; i < okHexagon.length; i++) {
      okHexagon[i].classList.remove("first_background");
   }
   for (let i = 0; i < new_hexagon.length; i++) {
      new_hexagon[i].classList.remove("first_background");
   }
   okButton.classList.add("dis");
}
backButton3.addEventListener("click", setBackScreenTwo, false);

function setBackScreenThree() {
   pagina_three.classList.remove("dis");
   pagina_four.classList.add("dis");
   backButton4.classList.add("dis");
   backButton3.classList.remove("dis");
   activeStep("5", "purple");
   for (let i = 0; i < okHexagon.length; i++) {
      okHexagon[i].classList.remove("first_background");
   }
   for (let i = 0; i < new_hexagon.length; i++) {
      new_hexagon[i].classList.remove("first_background");
   }
   okButton.classList.add("dis");
}
backButton4.addEventListener("click", setBackScreenThree, false);

setFocusElementSel(
   document.getElementsByName("cctype[0]")[0],
   "212px",
   "212px",
   "venta",
   "select"
);
setFocusElementSel(
   document.getElementsByName("cctype[1]")[0],
   "212px",
   "212px",
   "venta",
   "select"
);
