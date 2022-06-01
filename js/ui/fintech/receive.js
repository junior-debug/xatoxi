const pageOne = document.getElementById("pageOne");
const pageTwo = document.getElementById("pageTwo");

const cntPrepaidCardNumber = document.getElementById("cntPrepaidCardNumber");
const cntRemittanceCardNumber = document.getElementById(
   "cntRemittanceCardNumber"
);
const cntPagoMovil = document.getElementById("cntPagoMovil");
const cntPrepaidCardAccount = document.getElementById("cntPrepaidCardAccount");
const cntRemittanceCardAccount = document.getElementById(
   "cntRemittanceCardAccount"
);
const cardType = document.getElementById("cardType");
const containerDate = document.getElementById("containerDate");
const validationCode = document.getElementById("validationCode");
const acountNumber = document.getElementById("acountNumber");
const branch = document.getElementById("branch");
const bankSelect = document.getElementById("bankSelect");
const cntLocation = document.getElementById("cntLocation");

const acc = document.getElementById("acc");
const mpbankcode = document.getElementById("mpbankcode");
const recepcion = document.getElementById("recepcion"); /* idclearencetype */
const recepcionLabel = document.getElementById("recepcionLabel");
const claveRemesa = document.getElementById("claveRemesa"); /* key */
const idlocation = document.getElementById("location"); /* idlocation[0] */
const idlocationLabel = document.getElementById("locationLabel");
const subLocationSel =
   document.getElementById("sub-location"); /* idlocation[1] */
const prepaidCardNumber = document.getElementById("prepaidCardNumber");
const remittanceCardNumber = document.getElementById("remittanceCardNumber");
const prepaidCardAccount = document.getElementById("prepaidCardAccount");
const remittanceCardAccount = document.getElementById("remittanceCardAccount");
const selectTypeCard = document.getElementById("selectTypeCard");

const codigo = document.getElementById("codigo");
const prefijo = document.getElementById("prefijo");
const telefono = document.getElementById("telefono");

const mesVenc = document.getElementById("mesVenc");
const anioVenc = document.getElementById("anioVenc");
const codval = document.getElementById("codval");

const button_one = document.getElementsByClassName("button_one");
const button_two = document.getElementsByClassName("button_two");
const button_three = document.getElementsByClassName("button_three");
const button_four = document.getElementsByClassName("button_four");

const hexagonNext = document.getElementsByClassName("hexagonNext");
const buttonNext = document.getElementById("buttonNext");
const back = document.getElementsByClassName("back");

const ok = document.getElementById("buttonOk");
const hexagonOk = document.getElementsByClassName("hexagonOk");

let selPago = "";
codigo.value = "58";

changerSteps("1", "1", "purple");

function changePayMethod() {
   let idrecepcion = recepcion.options[recepcion.selectedIndex].id;
   cambioFormaPago(idrecepcion);
   if (recepcion.value == "0") {
      recepcionLabel.classList.remove("posLabelY4");
      recepcionLabel.classList.remove("posLabelY5");
      recepcionLabel.classList.add("posLabelY2");
      recepcionLabel.classList.remove("posLabelY3");
      recepcionLabel.classList.remove("posLabelY1");
      setFocusElementSel(recepcion, "23px", "23px", "recepcion", "select");
      setFocusElementSel(idlocation, "58px", "58px", "recepcion", "select");
      for (let y = 0; y < 3; y++) {
         hexagonNext[y].classList.add("dis");
      }
   }
}
recepcion.addEventListener("change", changePayMethod, false);

function fillOutUserData() {
   prepaidCardAccount.value = userTarjeta.numTarjeta;
   selectTypeCard.value = userTarjeta.tipoTarjeta;
   mesVenc.value = userTarjeta.fechaVenMes;
   anioVenc.value = userTarjeta.fechaVenAnio;
   codval.value = userTarjeta.codVal;
}

function emptyUserData() {
   //acc.value = "";
   prepaidCardNumber.value = "";
   mpbankcode.value = 0;
   remittanceCardNumber.value = "";
   prepaidCardAccount.value = "";
   idlocation.value = 0;
   subLocationSel.value = 0;
   remittanceCardAccount.value = "";
   selectTypeCard.value = 0;
   mesVenc.value = "";
   anioVenc.value = "";
   codval.value = "";
}

function hideFields() {
   acountNumber.classList.add("dis");
   bankSelect.classList.add("dis");
   branch.classList.add("dis");
   cntPrepaidCardNumber.classList.add("dis");
   cntRemittanceCardNumber.classList.add("dis");

   pageTwo.classList.add("dis");

   cntPagoMovil.classList.add("dis");
   cntPrepaidCardAccount.classList.add("dis");
   cntRemittanceCardAccount.classList.add("dis");
   cardType.classList.add("dis");
   containerDate.classList.add("dis");
   validationCode.classList.add("dis");
}

function setScreenTwoCreditCard() {
   nextActionToggle();
   cardType.classList.remove("dis");
   containerDate.classList.remove("dis");
   validationCode.classList.remove("dis");
}

function setScreenTwoRemittanceCard() {
   activeStep("5", "purple");
   nextActionToggle();
   cntRemittanceCardNumber.classList.remove("dis");
   for (let y = 0; y < 3; y++) {
      hexagonNext[y].classList.add("dis");
   }
   cntPagoMovil.classList.add("dis");
   cntPrepaidCardNumber.classList.add("dis");
}

function setScreenTwoPrepaidCard() {
   activeStep("5", "purple");
   nextActionToggle();
   cntPrepaidCardNumber.classList.remove("dis");
   for (let y = 0; y < 3; y++) {
      hexagonNext[y].classList.add("dis");
   }
   cntPagoMovil.classList.add("dis");
   cntRemittanceCardNumber.classList.add("dis");
}

function setScreenTwoMobilePayment() {
   activeStep("5", "purple");
   nextActionToggle();
   cntPagoMovil.classList.remove("dis");
   for (let y = 0; y < 3; y++) {
      hexagonNext[y].classList.add("dis");
   }
   cntRemittanceCardNumber.classList.add("dis");
   cntPrepaidCardNumber.classList.add("dis");
}

function setBackScreenOne() {
   changerSteps("1", "1", "purple");
   for (let y = 0; y < 3; y++) {
      button_two[y].classList.add("new_color");
      button_four[y].classList.add("new_color");
      button_three[y].classList.remove("dis");
      back[y].classList.add("dis");
      button_one[y].classList.add("dis");
      hexagonOk[y].classList.remove("purpleColor");
      hexagonNext[y].classList.remove("dis");
   }
   buttonNext.classList.remove("dis");
   ok.classList.add("dis");
   pageOne.classList.remove("dis");
   pageTwo.classList.add("dis");
   cntPagoMovil.classList.add("dis");
   cntRemittanceCardNumber.classList.add("dis");
   cntPrepaidCardNumber.classList.add("dis");
   cardType.classList.add("dis");
   containerDate.classList.add("dis");
   validationCode.classList.add("dis");
}

function setSpecialsLabels() {
   recepcionLabel.classList.add("posLabelY2");
   recepcionLabel.classList.remove("posLabelY5");
   recepcionLabel.classList.remove("posLabelY4");
   recepcionLabel.classList.remove("posLabelY3");
   recepcionLabel.classList.remove("posLabelY1");
   idlocationLabel.classList.add("locationLabelY2");
   idlocationLabel.classList.remove("locationLabelY1");
   setFocusElementSel(recepcion, "-15px", "85px", "recepcion", "select");
   setFocusElementSel(idlocation, "-13px", "85px", "recepcion", "select");
}

function cambioFormaPago(idFormaPago) {
   switch (idFormaPago) {
      case "1":
         emptyUserData();
         hideFields();
         backActionToggle();
         cntLocation.classList.remove("dis");
         branch.classList.remove("dis");
         setSpecialsLabels();
         for (let y = 0; y < 3; y++) {
            hexagonNext[y].classList.add("dis");
         }
         break;
      /*
      case "2":
         emptyUserData();
         hideFields();
         cntLocation.classList.remove("dis");
         setSpecialsLabels()
         break;
         this case was removed at endpoind
      */
      case "3":
         emptyUserData();
         hideFields();
         backActionToggle();
         cntLocation.classList.remove("dis");
         acountNumber.classList.remove("dis");
         setSpecialsLabels();
         acc.value = userTarjeta.cuentaNro;
         for (let y = 0; y < 3; y++) {
            hexagonNext[y].classList.add("dis");
         }
         break;
      case "4":
         emptyUserData();
         hideFields();
         cntLocation.classList.remove("dis");
         bankSelect.classList.remove("dis");
         changerSteps("2", "1", "purple");
         setSpecialsLabels();

         for (let i = 0; i < 3; i++) {
            hexagonOk[i].classList.remove("purpleColor");
            button_one[i].classList.add("dis");
            button_two[i].classList.add("new_color");
            button_four[i].classList.add("new_color");
            hexagonNext[i].classList.remove("dis");
         }
         buttonNext.classList.remove("dis");
         buttonNext.addEventListener("click", setScreenTwoMobilePayment, false);
         buttonNext.removeEventListener(
            "click",
            setScreenTwoPrepaidCard,
            false
         );
         buttonNext.removeEventListener(
            "click",
            setScreenTwoRemittanceCard,
            false
         );
         break;
      /*
      case "5":
         emptyUserData();
         fillOutUserData();
         hideFields();
         cntLocation.classList.remove("dis");
         cntPrepaidCardNumber.classList.remove("dis");
         changerSteps("2", "1", "purple");
         setSpecialsLabels()

         for (let i = 0; i < 3; i++) {
            hexagonOk[i].classList.remove("purpleColor");
            button_one[i].classList.add("dis");
            button_two[i].classList.add("new_color");
            button_four[i].classList.add("new_color");
         }
         buttonNext.classList.remove("dis");
         buttonNext.addEventListener(
            "click",
            activeStep("5", "purple"),
            setScreenTwoCreditCard,
            false
         );
         break;
         this case was removed at endpoind
      */
      /*
      case "6":
         emptyUserData();
         hideFields();
         cntLocation.classList.remove("dis");
         setSpecialsLabels();
         break;
         this case was removed at endpoind
      */
      case "7":
         emptyUserData();
         hideFields();
         cntLocation.classList.remove("dis");
         cntPrepaidCardAccount.classList.remove("dis");
         changerSteps("2", "1", "purple");
         setSpecialsLabels();

         for (let i = 0; i < 3; i++) {
            hexagonOk[i].classList.remove("purpleColor");
            button_one[i].classList.add("dis");
            button_two[i].classList.add("new_color");
            button_four[i].classList.add("new_color");
            hexagonNext[i].classList.remove("dis");
         }

         buttonNext.classList.remove("dis");
         buttonNext.addEventListener("click", setScreenTwoPrepaidCard, false);
         buttonNext.removeEventListener(
            "click",
            setScreenTwoRemittanceCard,
            false
         );
         buttonNext.removeEventListener(
            "click",
            setScreenTwoMobilePayment,
            false
         );
         break;

      case "8":
         emptyUserData();
         hideFields();
         cntLocation.classList.remove("dis");
         cntRemittanceCardAccount.classList.remove("dis");
         changerSteps("2", "1", "purple");
         setSpecialsLabels();

         for (let i = 0; i < 3; i++) {
            hexagonOk[i].classList.remove("purpleColor");
            button_one[i].classList.add("dis");
            button_two[i].classList.add("new_color");
            button_four[i].classList.add("new_color");
         }
         for (let y = 0; y < 3; y++) {
            hexagonNext[y].classList.remove("dis");
         }
         buttonNext.classList.remove("dis");
         buttonNext.addEventListener(
            "click",
            setScreenTwoRemittanceCard,
            false
         );
         buttonNext.removeEventListener(
            "click",
            setScreenTwoPrepaidCard,
            false
         );
         buttonNext.removeEventListener(
            "click",
            setScreenTwoMobilePayment,
            false
         );
         break;

      /*
      case "9":
         emptyUserData();
         hideFields();
         cntLocation.classList.remove("dis");
         setSpecialsLabels()

         for (let i = 0; i < 3; i++) {
            //hexagonOk[i].classList.remove('purpleColor');
            //button_one[i].classList.add('dis');
            //button_two[i].classList.add('new_color');
            //button_four[i].classList.add('purpleColor');
            // buttonNext[i].classList.remove('dis');
            // buttonNext[i].addEventListener('click', function(){
            //     nextActionToggle();
            // });
         }
         break;
         this case was deleted in the endpoint
      */
      default:
         emptyUserData();
         hideFields();
         ok.classList.remove("dis");
         setSpecialsLabels();
         for (let i = 0; i < 3; i++) {
            hexagonOk[i].classList.add("purpleColor");
            button_one[i].classList.remove("dis");
            button_two[i].classList.remove("new_color");
            button_four[i].classList.remove("new_color");
         }
         buttonNext.classList.add("dis");
         break;
   }
}

function nextActionToggle() {
   for (let i = 0; i < 3; i++) {
      button_two[i].classList.remove("new_color");
      button_four[i].classList.remove("new_color");
      button_three[i].classList.add("dis");
      back[i].classList.remove("dis");
      button_one[i].classList.remove("dis");
      hexagonOk[i].classList.add("purpleColor");
   }
   buttonNext.classList.add("dis");
   pageOne.classList.add("dis");
   pageTwo.classList.remove("dis");
   ok.classList.remove("dis");
}

function backActionToggle() {
   for (let i = 0; i < 3; i++) {
      button_two[i].classList.remove("new_color");
      button_four[i].classList.remove("new_color");
      button_three[i].classList.remove("dis");
      back[i].classList.add("dis");
      button_one[i].classList.remove("dis");
      hexagonOk[i].classList.add("purpleColor");
   }
   ok.classList.remove("dis");
   buttonNext.classList.add("dis");
}

for (let i = 0; i < 3; i++) {
   back[i].addEventListener("click", setBackScreenOne, false);
}

setFocusElement(acc, "212px", "227px", "receive");
setFocusElement(codigo, "2px", "16px", "receive");
setFocusElement(telefono, "2px", "10px", "receive");
