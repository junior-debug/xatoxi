const buttonOne_next = document.getElementsByClassName("buttonOne_next");
const buttonTwo_next = document.getElementsByClassName("buttonTwo_next");
const buttonThree_next = document.getElementsByClassName("buttonThree_next");
const buttonFour_next = document.getElementsByClassName("buttonFour_next");
const buttonFive_next = document.getElementsByClassName("buttonFive_next");
const buttonSix_next = document.getElementsByClassName("buttonSix_next");
const buttonOne_back = document.getElementsByClassName("buttonOne_back");
const buttonTwo_back = document.getElementsByClassName("buttonTwo_back");
const buttonThree_back = document.getElementsByClassName("buttonThree_back");
const buttonFour_back = document.getElementsByClassName("buttonFour_back");
const buttonFive_back = document.getElementsByClassName("buttonFive_back");
const buttonSix_back = document.getElementsByClassName("buttonSix_back");

const pagina_one = document.getElementsByClassName("pagina_one");
const pagina_two = document.getElementsByClassName("pagina_two");
const pagina_three = document.getElementsByClassName("pagina_three");
const pagina_four = document.getElementsByClassName("pagina_four");
const pagina_five = document.getElementsByClassName("pagina_five");
const pagina_six = document.getElementsByClassName("pagina_six");

const first_step = document.getElementsByClassName("first_step");
const second_step = document.getElementsByClassName("second_step");
const third_step = document.getElementsByClassName("third_step");

const ventana = document.getElementsByClassName("ventana");

const ok = document.getElementById("buttonOk");

const selectDivisa = document.getElementById("selectDivisa");
let switchBackStepStatus = false;

changerSteps("3", "1", "purple");

function getIdEntrega() {
   return selectEntrega.options[selectEntrega.selectedIndex].id;
}

function setForwardStep(service, step, color, remittance = null) {
   switch (service) {
      case "1":
      case "2":
         changerSteps("5", step, color);
         break;
      case "6":
         if (remittance == "3") {
            changerSteps("6", step, color);
         }
         if (remittance == "null" || remittance == "2") {
            changerSteps("5", step, color);
         }
         break;
      case "3":
      case "4":
      case "5":
      case "7":
      case "8":
      case "9":
         changerSteps("6", step, color);
         break;
   }
}

function switchBackStep(service, step, color, remittance = null) {
   switchBackStepStatus = true;
   setForwardStep(service, step, color, remittance);
}

let flagValidate = true;
function setScreenTwoRemittance() {
   if (
      monto.value != "" &&
      pais.value != 0 &&
      proveedor.value != 0 &&
      selectDivisa.value != 0
   ) {
      for (let i = 0; i < 3; i++) {
         buttonOne_next[i].classList.add("dis");
         buttonTwo_next[i].classList.remove("dis");
         buttonOne_back[i].classList.add("dis");
         buttonTwo_back[i].classList.remove("dis");
      }
      pagina_one[0].classList.add("dis");
      pagina_two[0].classList.remove("dis");
      ok.classList.add("purpleColor");

      if (!switchBackStepStatus) {
         changerSteps("3", "2", "purple");
      } else {
         selectEntrega.options[selectEntrega.selectedIndex].value != "0"
            ? switchBackStep(pago.value, "2", "purple", getIdEntrega())
            : switchBackStep(pago.value, "2", "purple");
      }
      tradTasaMontoModal("0", "0");
   }
}
function setScreenFourRemittance() {
   if (document.getElementsByName("acc")[0].classList.contains("dis")) {
      valSelCtaRec(document.getElementsByName("acc")[0], "formaPago");
   }

   if (flagValidate === true) {
      for (let i = 0; i < 3; i++) {
         buttonThree_next[i].classList.add("dis");
         buttonFour_next[i].classList.remove("dis");
         buttonThree_back[i].classList.add("dis");
         buttonFour_back[i].classList.remove("dis");
      }
      pagina_three[0].classList.add("dis");
      pagina_four[0].classList.remove("dis");
   }
   setForwardStep(
      pago.options[pago.selectedIndex].id,
      "4",
      "purple",
      getIdEntrega()
   );
}
function setScreenFiveRemittance() {
   for (let i = 0; i < 3; i++) {
      buttonFour_next[i].classList.add("dis");
      buttonFive_next[i].classList.remove("dis");
      buttonFour_back[i].classList.add("dis");
      buttonFive_back[i].classList.remove("dis");
   }
   pagina_four[0].classList.add("dis");
   pagina_five[0].classList.remove("dis");
   setForwardStep(
      pago.options[pago.selectedIndex].id,
      "5",
      "purple",
      getIdEntrega()
   );
   if (
      idclearencetype == "2" ||
      idclearencetype == "1" ||
      (idclearencetype == "6" && getIdEntrega() == "null") ||
      (idclearencetype == "6" && getIdEntrega() == "2")
   ) {
      for (let i = 0; i < new_hexagon.length; i++) {
         new_hexagon[i].classList.add("background");
      }
      nextStep.classList.add("dis");
   }
}
function setScreenSixRemittance() {
   for (let i = 0; i < 3; i++) {
      buttonFive_next[i].classList.add("dis");
      buttonSix_next[i].classList.remove("dis");
      buttonFive_back[i].classList.add("dis");
      buttonSix_back[i].classList.remove("dis");
   }
   pagina_five[0].classList.add("dis");
   pagina_six[0].classList.remove("dis");

   setForwardStep(
      pago.options[pago.selectedIndex].id,
      "6",
      "purple",
      getIdEntrega()
   );

   for (let i = 0; i < new_hexagon.length; i++) {
      new_hexagon[i].classList.add("background");
   }
}
function setBackScreenOne() {
   for (let i = 0; i < 3; i++) {
      buttonOne_back[i].classList.remove("dis");
      //buttonTwo_next[i].classList.remove("dis");
      buttonOne_next[i].classList.remove("dis");
      buttonTwo_back[i].classList.add("dis");
      buttonTwo_next[i].classList.add("dis");
   }
   pagina_one[0].classList.remove("dis");
   pagina_two[0].classList.add("dis");

   ok.classList.add("purpleColor");

   selectEntrega.options[selectEntrega.selectedIndex].value != "0"
      ? switchBackStep(pago.value, "1", "purple", getIdEntrega())
      : switchBackStep(pago.value, "1", "purple");

   if (!switchBackStepStatus) {
      changerSteps("3", "1", "purple");
   }
}
function setBackScreenTwo() {
   for (let i = 0; i < 3; i++) {
      buttonTwo_back[i].classList.remove("dis");
      buttonTwo_next[i].classList.remove("dis");
      third_step[i].classList.remove("second_step_background");
      buttonThree_next[i].classList.add("dis");
      buttonThree_back[i].classList.add("dis");
   }
   pagina_two[0].classList.remove("dis");
   pagina_three[0].classList.add("dis");

   primerApellido_1.classList.add("dis");
   segundoApellido1.classList.add("dis");
   direccion.classList.add("dis");
   email.classList.add("dis");
   cntTelefono.classList.add("dis");
   cntBanco_1.classList.add("dis");
   cntBanco_2.classList.add("dis");
   cntCuenta_1.classList.add("dis");
   cntCuenta_2.classList.add("dis");
   beneficiarySecond.classList.add("dis");
   beneficiaryThirdStepSecond.classList.add("dis");

   for (let i = 0; i < new_hexagon.length; i++) {
      new_hexagon[i].classList.remove("background");
   }

   selectEntrega.options[selectEntrega.selectedIndex].value != "0"
      ? switchBackStep(pago.value, "2", "purple", getIdEntrega())
      : switchBackStep(pago.value, "2", "purple");

   if (!switchBackStepStatus) {
      changerSteps("3", "2", "purple");
   }
}
function setBackScreenThree() {
   for (let i = 0; i < 3; i++) {
      buttonThree_back[i].classList.remove("dis");
      buttonThree_next[i].classList.remove("dis");
      //new_hexagon[i].classList.add('white');
      third_step[i].classList.remove("second_step_background");
      buttonFour_next[i].classList.add("dis");
      buttonFour_back[i].classList.add("dis");
   }
   pagina_three[0].classList.remove("dis");
   pagina_four[0].classList.add("dis");
   for (let i = 0; i < new_hexagon.length; i++) {
      new_hexagon[i].classList.remove("background");
   }

   selectEntrega.options[selectEntrega.selectedIndex].value != "0"
      ? switchBackStep(pago.value, "3", "purple", getIdEntrega())
      : switchBackStep(pago.value, "3", "purple");

   if (!switchBackStepStatus) {
      changerSteps("3", "3", "purple");
   }
}
function setBackScreenFour() {
   for (let i = 0; i < 3; i++) {
      buttonFour_back[i].classList.remove("dis");
      buttonFour_next[i].classList.remove("dis");
      third_step[i].classList.remove("second_step_background");
      buttonFive_next[i].classList.add("dis");
      buttonFive_back[i].classList.add("dis");
   }
   pagina_four[0].classList.remove("dis");
   pagina_five[0].classList.add("dis");

   selectEntrega.options[selectEntrega.selectedIndex].value != "0"
      ? switchBackStep(pago.value, "4", "purple", getIdEntrega())
      : switchBackStep(pago.value, "4", "purple");

   if (
      idclearencetype == "2" ||
      (idclearencetype == "6" && getIdEntrega() == "null") ||
      (idclearencetype == "6" && getIdEntrega() == "2")
   ) {
      for (let i = 0; i < new_hexagon.length; i++) {
         new_hexagon[i].classList.remove("background");
      }
      nextStep.classList.remove("dis");
   }
}
function setBackScreenFive() {
   for (let i = 0; i < 3; i++) {
      buttonFive_back[i].classList.remove("dis");
      buttonFive_next[i].classList.remove("dis");
      third_step[i].classList.remove("second_step_background");
      buttonSix_next[i].classList.add("dis");
      buttonSix_back[i].classList.add("dis");
   }
   pagina_five[0].classList.remove("dis");
   pagina_six[0].classList.add("dis");

   selectEntrega.options[selectEntrega.selectedIndex].value != "0"
      ? switchBackStep(pago.value, "5", "purple", getIdEntrega())
      : switchBackStep(pago.value, "5", "purple");

   for (let i = 0; i < new_hexagon.length; i++) {
      new_hexagon[i].classList.remove("background");
   }
}

for (let i = 0; i < 3; i++) {
   buttonOne_next[i].addEventListener("click", setScreenTwoRemittance, false);
   buttonThree_next[i].addEventListener(
      "click",
      setScreenFourRemittance,
      false
   );
   buttonFour_next[i].addEventListener("click", setScreenFiveRemittance, false);
   buttonFive_next[i].addEventListener("click", setScreenSixRemittance, false);
   buttonTwo_back[i].addEventListener("click", setBackScreenOne, false);
   buttonThree_back[i].addEventListener("click", setBackScreenTwo, false);
   buttonFour_back[i].addEventListener("click", setBackScreenThree, false);
   buttonFive_back[i].addEventListener("click", setBackScreenFour, false);
   buttonSix_back[i].addEventListener("click", setBackScreenFive, false);
}

function changeScrTwoToThree() {
   for (let i = 0; i < 3; i++) {
      buttonTwo_next[i].classList.add("dis");
      buttonThree_back[i].classList.remove("dis");
      buttonTwo_back[i].classList.add("dis");
      buttonThree_next[i].classList.remove("dis");
   }
   pagina_two[0].classList.add("dis");
   pagina_three[0].classList.remove("dis");
}
setFocusElement(monto, "2px", "16px", "remittance");
setFocusElementSel(selectCctype, "72px", "87px", "remittance", "select");
