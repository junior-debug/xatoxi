const button_one = document.getElementsByClassName("button_one");
const button_two = document.getElementsByClassName("button_two");
const button_three = document.getElementsByClassName("button_three");
const button_four = document.getElementsByClassName("button_four");
const button_five = document.getElementsByClassName("button_five");
const button_six = document.getElementsByClassName("button_six");
const button_seven = document.getElementsByClassName("button_seven");
const button_eight = document.getElementsByClassName("button_eight");
const button_nine = document.getElementsByClassName("button_nine");
const button_ten = document.getElementsByClassName("button_ten");
const button_eleven = document.getElementsByClassName("button_eleven");
const button_twelve = document.getElementsByClassName("button_twelve");
const button_thirteen = document.getElementsByClassName("button_thirteen");
const button_fourteen = document.getElementsByClassName("button_fourteen");

const pagina_one = document.getElementsByClassName("pagina_one");
const pagina_two = document.getElementsByClassName("pagina_two");
const pagina_three = document.getElementsByClassName("pagina_three");
const pagina_four = document.getElementsByClassName("pagina_four");
const pagina_five = document.getElementsByClassName("pagina_five");
const pagina_six = document.getElementsByClassName("pagina_six");
const pagina_seven = document.getElementsByClassName("pagina_seven");
//-----------------------------
const pagina_two_ACH = document.getElementsByClassName("pagina_two_ACH");
const pagina_three_ACH = document.getElementsByClassName("pagina_three_ACH");
const pagina_four_ACH = document.getElementsByClassName("pagina_four_ACH");
const pagina_five_ACH = document.getElementsByClassName("pagina_five_ACH");
const pagina_six_ACH = document.getElementsByClassName("pagina_six_ACH");
const pagina_seven_ACH = document.getElementsByClassName("pagina_seven_ACH");
//-----------------------------
const pagina_one_depCta = document.getElementsByClassName("pagina_one_depCta");
const pagina_two_depCta = document.getElementsByClassName("pagina_two_depCta");
const pagina_three_depCta = document.getElementsByClassName(
   "pagina_three_depCta"
);
const pagina_four_depCta =
   document.getElementsByClassName("pagina_four_depCta");
const pagina_five_depCta =
   document.getElementsByClassName("pagina_five_depCta");
const pagina_six_depCta = document.getElementsByClassName("pagina_six_depCta");
const pagina_seven_depCta = document.getElementsByClassName(
   "pagina_seven_depCta"
);
//-----------------------------
const pagina_two_efect = document.getElementsByClassName("pagina_two_efect");
const pagina_three_efect =
   document.getElementsByClassName("pagina_three_efect");
const pagina_four_efect = document.getElementsByClassName("pagina_four_efect");
const pagina_five_efect = document.getElementsByClassName("pagina_five_efect");
const pagina_six_efect = document.getElementsByClassName("pagina_six_efect");
const pagina_seven_efect =
   document.getElementsByClassName("pagina_seven_efect");
//-----------------------------
const pagina_two_tdc = document.getElementsByClassName("pagina_two_tdc");
const pagina_three_tdc = document.getElementsByClassName("pagina_three_tdc");
const pagina_four_tdc = document.getElementsByClassName("pagina_four_tdc");
const pagina_five_tdc = document.getElementsByClassName("pagina_five_tdc");
const pagina_six_tdc = document.getElementsByClassName("pagina_six_tdc");
const pagina_seven_tdc = document.getElementsByClassName("pagina_seven_tdc");
//const pagina_eight_tdc = document.getElementsByClassName('pagina_eight_tdc');

const first_step = document.getElementsByClassName("first_step");
const second_step = document.getElementsByClassName("second_step");

const firstStep_lvlTwo = document.getElementsByClassName("firstStep_lvlTwo");
const secondStep_lvlTwo = document.getElementsByClassName("secondStep_lvlTwo");
const thirdStep_lvlTwo = document.getElementsByClassName("thirdStep_lvlTwo");
const fourthStep_lvlTwo = document.getElementsByClassName("fourthStep_lvlTwo");
const fifthStep_lvlTwo = document.getElementsByClassName("fifthStep_lvlTwo");
const sixthStep_lvlTwo = document.getElementsByClassName("sixthStep_lvlTwo");
const seventhStep_lvlTwo =
   document.getElementsByClassName("seventhStep_lvlTwo");
const new_hexagon = document.getElementsByClassName("new_hexagon");

const ok = document.getElementById("ok");
const okButton = document.getElementById("okButton");
const ventana = document.getElementsByClassName("ventana");

const idPay = document.getElementById("idPay");
const transCtaReceptora = document.getElementById("transCtaReceptora");
const transTipoTarjeta = document.getElementById("transTipoTarjeta");
const nextStep = document.getElementById("nextStep");
const nextStepTwo = document.getElementById("nextStepTwo");

const id_1 = document.getElementById("id_1");
const firstName = document.getElementById("firstName");
const id_2 = document.getElementById("id_2");
const firstNameDeposit = document.getElementById("firstNameDeposit");
const secondNameDeposit = document.getElementById("secondNameDeposit");
const id_3 = document.getElementById("id_3");
const id_4 = document.getElementById("id_4");
const selectBeneficiaryLabel01 = document.getElementById(
   "transBeneficiario_1Label"
);
const beneficiaryInACH = document.getElementById("beneficiaryInACH");
const beneficiaryOutACH = document.getElementById("beneficiaryOutACH");
const transBeneficiario_1 = document.getElementById("transBeneficiario_1");

const beneficiaryInCard = document.getElementById("beneficiaryInCard");
const beneficiaryOutCard = document.getElementById("beneficiaryOutCard");
const transBeneficiario_5Label = document.getElementById(
   "transBeneficiario_5Label"
);
const transBeneficiario_5 = document.getElementById("transBeneficiario_5");

const codigoValidacion = document.getElementById("codigoValidacion");
const codigoValidacionLabel = document.getElementById("codigoValidacionLabel");
const transBeneficiario_4 = document.getElementById("transBeneficiario_4");
const transBeneficiario_4Label = document.getElementById(
   "transBeneficiario_4Label"
);
const beneficiaryInTdc = document.getElementById("beneficiaryInTdc");
const beneficiaryOutTdc = document.getElementById("beneficiaryOutTdc");

changerSteps("2", "1", "purple");

let flagValidate = false;

function beneficiary(
   idA,
   idB,
   enableHexagonA,
   activeStepA,
   enableHexagonB,
   activeStepB,
   desactiveB,
   nameA,
   nameB = null,
   nameC = null
) {
   const nameConstA = document.getElementById(idA);
   const nameConstB = document.getElementById(idB);
   const nameInputA = document.getElementById(nameA);
   let nameInputB = null;
   if (nameB != null) nameInputB = document.getElementById(nameB);

   let nameInputC = null;
   if (nameC != null) nameInputC = document.getElementById(nameC);

   nameConstA.addEventListener("click", function () {
      nameConstA.classList.add("dis");
      nameConstB.classList.remove("dis");
      enableStepHexagons(enableHexagonA);
      activeStep(activeStepA, "purple");
      dynamicFor(new_hexagon, "remove", "white");
      okButton.classList.remove("dis");
      nextStep.classList.add("dis");
      nextStepTwo.classList.add("dis");
      nameInputA.classList.add("dis");
      if (nameB != null) nameInputB.classList.add("dis");
      if (nameC != null) nameInputC.classList.add("dis");
   });

   nameConstB.addEventListener("click", function () {
      nameConstB.classList.add("dis");
      nameConstA.classList.remove("dis");
      enableStepHexagons(enableHexagonB);
      activeStep(activeStepB, "purple");
      dynamicFor(new_hexagon, "add", "white");
      okButton.classList.add("dis");
      nextStep.classList.remove("dis");
      nextStepTwo.classList.remove("dis");
      nameInputA.classList.remove("dis");
      if (nameB != null) nameInputB.classList.remove("dis");
      if (nameC != null) nameInputC.classList.remove("dis");
   });
}

function setScreenTwoTransfer() {
   if (
      monto.value != "" &&
      country.value != 0 &&
      coin.value != 0 &&
      idPay.value != 0
   ) {
      dynamicFor(pagina_one, "add", "dis");
      //------
      dynamicFor(pagina_two_ACH, "remove", "dis");
      dynamicFor(pagina_two_depCta, "remove", "dis");
      dynamicFor(pagina_two_efect, "remove", "dis");
      dynamicFor(pagina_two_tdc, "remove", "dis");
      dynamicFor(pagina_two, "remove", "dis");

      //------
      dynamicFor(button_one, "add", "dis");
      dynamicFor(button_two, "remove", "dis");
      dynamicFor(button_seven, "add", "dis");
      dynamicFor(button_eight, "remove", "dis");
      changerSteps("7", "2", "purple");

      if (idPay.value == "6") {
         achDiv.classList.remove("dis");
         encDiv.classList.add("dis");
         tdcDiv.classList.add("dis");
         depCtaDiv.classList.add("dis");
         efectDiv.classList.add("dis");
         beneficiary(
            "beneficiaryInACH",
            "beneficiaryOutACH",
            "3",
            "6",
            "7",
            "3",
            "6",
            "id_1",
            "firstName"
         );
      } else if (idPay.value == "3" || idPay.value == "4") {
         depCtaDiv.classList.remove("dis");
         encDiv.classList.add("dis");
         tdcDiv.classList.add("dis");
         achDiv.classList.add("dis");
         efectDiv.classList.add("dis");
         beneficiary(
            "beneficiaryInBank",
            "beneficiaryOutBank",
            "3",
            "6",
            "7",
            "3",
            "6",
            "id_2",
            "firstNameDeposit",
            "secondNameDeposit"
         );
      } else if (idPay.value == "1") {
         efectDiv.classList.remove("dis");
         encDiv.classList.add("dis");
         tdcDiv.classList.add("dis");
         achDiv.classList.add("dis");
         depCtaDiv.classList.add("dis");
         beneficiary(
            "beneficiaryInCash",
            "beneficiaryOutCash",
            "2",
            "5",
            "7",
            "2",
            "5"
         );
      } else if (idPay.value == "5") {
         tdcDiv.classList.remove("dis");
         efectDiv.classList.add("dis");
         encDiv.classList.add("dis");
         achDiv.classList.add("dis");
         depCtaDiv.classList.add("dis");
         beneficiary(
            "beneficiaryInTdc",
            "beneficiaryOutTdc",
            "3",
            "6",
            "7",
            "3",
            "6",
            "id_4"
         );
      } else if (
         idPay.value == "2" ||
         idPay.value == "9" ||
         idPay.value == "7" ||
         idPay.value == "8"
      ) {
         encDiv.classList.remove("dis");
         tdcDiv.classList.add("dis");
         achDiv.classList.add("dis");
         depCtaDiv.classList.add("dis");
         efectDiv.classList.add("dis");
         beneficiary(
            "beneficiaryInCard",
            "beneficiaryOutCard",
            "2",
            "5",
            "7",
            "2",
            "5",
            "id_3"
         );
         transBeneficiario_5Label.classList.add("transBeneficiario_5Label01");
         transBeneficiario_5Label.classList.remove(
            "transBeneficiario_5Label02"
         );
         transBeneficiario_5.addEventListener(
            "focusin",
            actionFocusSel.bind(
               null,
               transBeneficiario_5,
               "140px",
               "transfer"
            ),
            false
         );
         transBeneficiario_5.addEventListener(
            "focusout",
            actionFocusOutSel.bind(
               null,
               transBeneficiario_5,
               "156px",
               "transfer"
            ),
            false
         );
         setFocusElementSel(
            transBeneficiario_5,
            "140px",
            "156px",
            "transfer",
            "select"
         );
         beneficiaryInCard.addEventListener("click", function () {
            transBeneficiario_5Label.classList.add(
               "transBeneficiario_5Label02"
            );
            transBeneficiario_5Label.classList.remove(
               "transBeneficiario_5Label01"
            );
            transBeneficiario_5.addEventListener(
               "focusin",
               actionFocusSel.bind(
                  null,
                  transBeneficiario_5,
                  "212px",
                  "transfer"
               ),
               false
            );
            transBeneficiario_5.addEventListener(
               "focusout",
               actionFocusOutSel.bind(
                  null,
                  transBeneficiario_5,
                  "227px",
                  "transfer"
               ),
               false
            );
            setFocusElementSel(
               transBeneficiario_5,
               "212px",
               "227px",
               "transfer",
               "select"
            );
         });

         beneficiaryOutCard.addEventListener("click", function () {
            transBeneficiario_5Label.classList.add(
               "transBeneficiario_5Label01"
            );
            transBeneficiario_5Label.classList.remove(
               "transBeneficiario_5Label02"
            );
            transBeneficiario_5.addEventListener(
               "focusin",
               actionFocusSel.bind(
                  null,
                  transBeneficiario_5,
                  "140px",
                  "transfer"
               ),
               false
            );
            transBeneficiario_5.addEventListener(
               "focusout",
               actionFocusOutSel.bind(
                  null,
                  transBeneficiario_5,
                  "156px",
                  "transfer"
               ),
               false
            );
            setFocusElementSel(
               transBeneficiario_5,
               "140px",
               "156px",
               "transfer",
               "select"
            );
         });
      }

      calcsendtr(
         mainLanguage,
         sesionID,
         coin.value,
         country.value,
         monto.unmaskedValue,
         idPay.value
      );
   }
}

function setScreenThreeTransfer() {
   changerSteps("7", "3", "purple");

   if (idPay.value == "6") {
      selectBeneficiaryLabel01.classList.add("transBeneficiario_1Label01");
      selectBeneficiaryLabel01.classList.remove("transBeneficiario_1Label02");
      beneficiaryInACH.addEventListener("click", function () {
         selectBeneficiaryLabel01.classList.add("transBeneficiario_1Label02");
         selectBeneficiaryLabel01.classList.remove(
            "transBeneficiario_1Label01"
         );
         transBeneficiario_1.addEventListener(
            "focusin",
            actionFocusSel.bind(null, transBeneficiario_1, "212px", "transfer"),
            false
         );
         transBeneficiario_1.addEventListener(
            "focusout",
            actionFocusOutSel.bind(
               null,
               transBeneficiario_1,
               "227px",
               "transfer"
            ),
            false
         );
         setFocusElementSel(
            transBeneficiario_1,
            "212px",
            "227px",
            "transfer",
            "select"
         );
      });
      beneficiaryOutACH.addEventListener("click", function () {
         selectBeneficiaryLabel01.classList.add("transBeneficiario_1Label01");
         selectBeneficiaryLabel01.classList.remove(
            "transBeneficiario_1Label02"
         );
         transBeneficiario_1.addEventListener(
            "focusin",
            actionFocusSel.bind(null, transBeneficiario_1, "72px", "transfer"),
            false
         );
         transBeneficiario_1.addEventListener(
            "focusout",
            actionFocusOutSel.bind(
               null,
               transBeneficiario_1,
               "87px",
               "transfer"
            ),
            false
         );
         setFocusElementSel(
            transBeneficiario_1,
            "72px",
            "87px",
            "transfer",
            "select"
         );
      });
   } else if (idPay.value == "5") {
      transBeneficiario_4Label.classList.add("transBeneficiario_4Label01");
      transBeneficiario_4Label.classList.remove("transBeneficiario_4Label02");
      codigoValidacionLabel.classList.add("codigoValidacionLabel01");
      codigoValidacionLabel.classList.remove("codigoValidacionLabel02");
      codigoValidacion.addEventListener(
         "focusin",
         actionFocus.bind(null, codigoValidacion, "68px", "transfer"),
         false
      );
      codigoValidacion.addEventListener(
         "focusout",
         actionFocusOut.bind(null, codigoValidacion, "87px", "transfer"),
         false
      );
      setFocusElement(codigoValidacion, "68px", "87px", "transfer");

      beneficiaryInTdc.addEventListener("click", function () {
         transBeneficiario_4Label.classList.add("transBeneficiario_4Label02");
         transBeneficiario_4Label.classList.remove(
            "transBeneficiario_4Label01"
         );
         codigoValidacionLabel.classList.add("codigoValidacionLabel02");
         codigoValidacionLabel.classList.remove("codigoValidacionLabel01");

         transBeneficiario_4.addEventListener(
            "focusin",
            actionFocusSel.bind(null, transBeneficiario_4, "212px", "transfer"),
            false
         );
         transBeneficiario_4.addEventListener(
            "focusout",
            actionFocusOutSel.bind(
               null,
               transBeneficiario_4,
               "227px",
               "transfer"
            ),
            false
         );
         setFocusElementSel(
            transBeneficiario_4,
            "212px",
            "227px",
            "transfer",
            "select"
         );
         codigoValidacion.addEventListener(
            "focusin",
            actionFocus.bind(null, codigoValidacion, "104px", "transfer"),
            false
         );
         codigoValidacion.addEventListener(
            "focusout",
            actionFocusOut.bind(null, codigoValidacion, "120px", "transfer"),
            false
         );
         setFocusElement(codigoValidacion, "104px", "120px", "transfer");
      });
      beneficiaryOutTdc.addEventListener("click", function () {
         transBeneficiario_4Label.classList.add("transBeneficiario_4Label01");
         transBeneficiario_4Label.classList.remove(
            "transBeneficiario_4Label02"
         );
         codigoValidacionLabel.classList.add("codigoValidacionLabel01");
         codigoValidacionLabel.classList.remove("codigoValidacionLabel02");

         transBeneficiario_4.addEventListener(
            "focusin",
            actionFocusSel.bind(null, transBeneficiario_4, "140px", "transfer"),
            false
         );
         transBeneficiario_4.addEventListener(
            "focusout",
            actionFocusOutSel.bind(
               null,
               transBeneficiario_4,
               "156px",
               "transfer"
            ),
            false
         );
         setFocusElementSel(
            transBeneficiario_4,
            "140px",
            "156px",
            "transfer",
            "select"
         );
         codigoValidacion.addEventListener(
            "focusin",
            actionFocus.bind(null, codigoValidacion, "68px", "transfer"),
            false
         );
         codigoValidacion.addEventListener(
            "focusout",
            actionFocusOut.bind(null, codigoValidacion, "87px", "transfer"),
            false
         );
         setFocusElement(codigoValidacion, "68px", "87px", "transfer");
      });
   }

   dynamicFor(pagina_two, "add", "dis");
   dynamicFor(pagina_three, "remove", "dis");

   dynamicFor(pagina_two_ACH, "add", "dis");
   dynamicFor(pagina_three_ACH, "remove", "dis");

   dynamicFor(pagina_two_depCta, "add", "dis");
   dynamicFor(pagina_three_depCta, "remove", "dis");

   dynamicFor(pagina_two_efect, "add", "dis");
   dynamicFor(pagina_three_efect, "remove", "dis");

   dynamicFor(pagina_two_tdc, "add", "dis");
   dynamicFor(pagina_three_tdc, "remove", "dis");

   dynamicFor(button_two, "add", "dis");
   dynamicFor(button_three, "remove", "dis");
   dynamicFor(button_eight, "add", "dis");
   dynamicFor(button_nine, "remove", "dis");
   dynamicFor(firstStep_lvlTwo, "add", "grayBackground");
   dynamicFor(secondStep_lvlTwo, "add", "grayBackground");
   dynamicFor(first_step, "add", "purpleBackground");
   dynamicFor(second_step, "add", "grayBackground");
   dynamicFor(second_step, "remove", "purpleBackground");
   dynamicFor(thirdStep_lvlTwo, "remove", "I");
   dynamicFor(thirdStep_lvlTwo, "add", "III");
   dynamicFor(fifthStep_lvlTwo, "remove", "II");
   dynamicFor(fifthStep_lvlTwo, "add", "V");
   dynamicFor(fourthStep_lvlTwo, "add", "grayBackground");
   dynamicFor(sixthStep_lvlTwo, "add", "grayBackground");
   dynamicFor(seventhStep_lvlTwo, "add", "grayBackground");
}
function setScreenFourTransfer() {
   dynamicFor(pagina_three, "add", "dis");
   dynamicFor(pagina_four, "remove", "dis");

   dynamicFor(pagina_three_ACH, "add", "dis");
   dynamicFor(pagina_four_ACH, "remove", "dis");

   dynamicFor(pagina_three_depCta, "add", "dis");
   dynamicFor(pagina_four_depCta, "remove", "dis");

   dynamicFor(pagina_three_efect, "add", "dis");
   dynamicFor(pagina_four_efect, "remove", "dis");

   dynamicFor(pagina_three_tdc, "add", "dis");
   dynamicFor(pagina_four_tdc, "remove", "dis");

   dynamicFor(button_three, "add", "dis");
   dynamicFor(button_four, "remove", "dis");
   dynamicFor(button_nine, "add", "dis");
   dynamicFor(button_ten, "remove", "dis");
   dynamicFor(fourthStep_lvlTwo, "add", "purpleBackground");
   dynamicFor(first_step, "remove", "purpleBackground");
   activeStep("4", "purple");
}
function setScreenFiveTransfer() {
   dynamicFor(pagina_four, "add", "dis");
   dynamicFor(pagina_five, "remove", "dis");

   dynamicFor(pagina_four_ACH, "add", "dis");
   dynamicFor(pagina_five_ACH, "remove", "dis");

   dynamicFor(pagina_four_depCta, "add", "dis");
   dynamicFor(pagina_five_depCta, "remove", "dis");

   dynamicFor(pagina_four_efect, "add", "dis");
   dynamicFor(pagina_five_efect, "remove", "dis");

   dynamicFor(pagina_four_tdc, "add", "dis");
   dynamicFor(pagina_five_tdc, "remove", "dis");

   dynamicFor(button_four, "add", "dis");
   dynamicFor(button_five, "remove", "dis");
   dynamicFor(button_ten, "add", "dis");
   dynamicFor(button_eleven, "remove", "dis");

   activeStep("5", "purple");
}
function setScreenSixTransfer() {
   dynamicFor(pagina_five, "add", "dis");
   dynamicFor(pagina_six, "remove", "dis");

   dynamicFor(pagina_five_ACH, "add", "dis");
   dynamicFor(pagina_six_ACH, "remove", "dis");

   dynamicFor(pagina_five_depCta, "add", "dis");
   dynamicFor(pagina_six_depCta, "remove", "dis");

   dynamicFor(pagina_five_efect, "add", "dis");
   dynamicFor(pagina_six_efect, "remove", "dis");

   dynamicFor(pagina_five_tdc, "add", "dis");
   dynamicFor(pagina_six_tdc, "remove", "dis");

   dynamicFor(button_five, "add", "dis");
   dynamicFor(button_six, "remove", "dis");
   dynamicFor(button_eleven, "add", "dis");
   dynamicFor(button_twelve, "remove", "dis");

   activeStep("6", "purple");
}
function setScreenSevenTransfer() {
   dynamicFor(pagina_six, "add", "dis");
   dynamicFor(pagina_seven, "remove", "dis");

   dynamicFor(pagina_six_ACH, "add", "dis");
   dynamicFor(pagina_seven_ACH, "remove", "dis");

   dynamicFor(pagina_six_depCta, "add", "dis");
   dynamicFor(pagina_seven_depCta, "remove", "dis");

   dynamicFor(pagina_six_efect, "add", "dis");
   dynamicFor(pagina_seven_efect, "remove", "dis");

   dynamicFor(pagina_six_tdc, "add", "dis");
   dynamicFor(pagina_seven_tdc, "remove", "dis");

   dynamicFor(button_six, "add", "dis");
   dynamicFor(button_thirteen, "remove", "dis");
   dynamicFor(button_twelve, "add", "dis");
   dynamicFor(button_fourteen, "remove", "dis");
   dynamicFor(new_hexagon, "remove", "white");
   okButton.classList.remove("dis");

   activeStep("7", "purple");
}
function setBackToScreenOne() {
   dynamicFor(pagina_one, "remove", "dis");
   okButton.classList.add("dis");
   dynamicFor(new_hexagon, "add", "white");
   dynamicFor(pagina_two_ACH, "add", "dis");
   dynamicFor(pagina_two_depCta, "add", "dis");
   dynamicFor(pagina_two_efect, "add", "dis");
   dynamicFor(pagina_two_tdc, "add", "dis");
   dynamicFor(pagina_two, "add", "dis");
   nextStep.classList.remove("dis");
   nextStepTwo.classList.remove("dis");
   dynamicFor(button_one, "remove", "dis");
   dynamicFor(button_two, "add", "dis");
   dynamicFor(button_seven, "remove", "dis");
   dynamicFor(button_eight, "add", "dis");
   id_1.classList.remove("dis");
   firstName.classList.remove("dis");
   secondNameDeposit.classList.remove("dis");
   firstNameDeposit.classList.remove("dis");
   id_2.classList.remove("dis");
   id_3.classList.remove("dis");
   id_4.classList.remove("dis");
   changerSteps("7", "1", "purple");
}
function setBackToScreenTwo() {
   dynamicFor(new_hexagon, "add", "white");
   dynamicFor(pagina_two, "remove", "dis");
   dynamicFor(pagina_three, "add", "dis");
   okButton.classList.add("dis");
   dynamicFor(pagina_two_ACH, "remove", "dis");
   dynamicFor(pagina_three_ACH, "add", "dis");
   nextStep.classList.remove("dis");
   nextStepTwo.classList.remove("dis");

   dynamicFor(pagina_two_depCta, "remove", "dis");
   dynamicFor(pagina_three_depCta, "add", "dis");
   dynamicFor(pagina_two_efect, "remove", "dis");
   dynamicFor(pagina_three_efect, "add", "dis");
   dynamicFor(pagina_two_tdc, "remove", "dis");
   dynamicFor(pagina_three_tdc, "add", "dis");
   dynamicFor(button_two, "remove", "dis");
   dynamicFor(button_three, "add", "dis");
   dynamicFor(button_eight, "remove", "dis");
   dynamicFor(button_nine, "add", "dis");
   dynamicFor(firstStep_lvlTwo, "remove", "grayBackground");
   dynamicFor(secondStep_lvlTwo, "remove", "grayBackground");
   dynamicFor(first_step, "remove", "purpleBackground");
   dynamicFor(second_step, "remove", "grayBackground");
   dynamicFor(second_step, "add", "purpleBackground");
   dynamicFor(thirdStep_lvlTwo, "add", "I");
   dynamicFor(thirdStep_lvlTwo, "remove", "III");
   dynamicFor(fifthStep_lvlTwo, "add", "II");
   dynamicFor(fifthStep_lvlTwo, "remove", "V");
   dynamicFor(fourthStep_lvlTwo, "remove", "grayBackground");
   dynamicFor(sixthStep_lvlTwo, "remove", "grayBackground");
   dynamicFor(seventhStep_lvlTwo, "remove", "grayBackground");
   activeStep("2", "purple");
}
function setBackToScreenThree() {
   dynamicFor(pagina_three, "remove", "dis");
   dynamicFor(pagina_four, "add", "dis");

   dynamicFor(pagina_three_ACH, "remove", "dis");
   dynamicFor(pagina_four_ACH, "add", "dis");

   dynamicFor(pagina_three_depCta, "remove", "dis");
   dynamicFor(pagina_four_depCta, "add", "dis");

   dynamicFor(pagina_three_efect, "remove", "dis");
   dynamicFor(pagina_four_efect, "add", "dis");

   dynamicFor(pagina_three_tdc, "remove", "dis");
   dynamicFor(pagina_four_tdc, "add", "dis");

   dynamicFor(button_three, "remove", "dis");
   dynamicFor(button_four, "add", "dis");
   dynamicFor(button_nine, "remove", "dis");
   dynamicFor(button_ten, "add", "dis");
   activeStep("3", "purple");
}
function setBackToScreenFour() {
   dynamicFor(pagina_four, "remove", "dis");
   dynamicFor(pagina_five, "add", "dis");

   dynamicFor(pagina_four_ACH, "remove", "dis");
   dynamicFor(pagina_five_ACH, "add", "dis");

   dynamicFor(pagina_four_depCta, "remove", "dis");
   dynamicFor(pagina_five_depCta, "add", "dis");

   dynamicFor(pagina_four_efect, "remove", "dis");
   dynamicFor(pagina_five_efect, "add", "dis");

   dynamicFor(pagina_four_tdc, "remove", "dis");
   dynamicFor(pagina_five_tdc, "add", "dis");

   dynamicFor(button_four, "remove", "dis");
   dynamicFor(button_five, "add", "dis");
   dynamicFor(button_ten, "remove", "dis");
   dynamicFor(button_eleven, "add", "dis");
   activeStep("4", "purple");
}
function setBackToScreenFive() {
   dynamicFor(pagina_five, "remove", "dis");
   dynamicFor(pagina_six, "add", "dis");

   dynamicFor(pagina_five_ACH, "remove", "dis");
   dynamicFor(pagina_six_ACH, "add", "dis");

   dynamicFor(pagina_five_depCta, "remove", "dis");
   dynamicFor(pagina_six_depCta, "add", "dis");

   dynamicFor(pagina_five_efect, "remove", "dis");
   dynamicFor(pagina_six_efect, "add", "dis");

   dynamicFor(pagina_five_tdc, "remove", "dis");
   dynamicFor(pagina_six_tdc, "add", "dis");

   dynamicFor(button_five, "remove", "dis");
   dynamicFor(button_six, "add", "dis");
   dynamicFor(button_eleven, "remove", "dis");
   dynamicFor(button_twelve, "add", "dis");
   activeStep("5", "purple");
}
function setBackToScreenSix() {
   dynamicFor(pagina_six, "remove", "dis");
   dynamicFor(pagina_seven, "add", "dis");

   dynamicFor(pagina_six_ACH, "remove", "dis");
   dynamicFor(pagina_seven_ACH, "add", "dis");

   dynamicFor(pagina_six_depCta, "remove", "dis");
   dynamicFor(pagina_seven_depCta, "add", "dis");

   dynamicFor(pagina_six_efect, "remove", "dis");
   dynamicFor(pagina_seven_efect, "add", "dis");

   dynamicFor(pagina_six_tdc, "remove", "dis");
   dynamicFor(pagina_seven_tdc, "add", "dis");

   dynamicFor(button_six, "remove", "dis");
   dynamicFor(button_thirteen, "add", "dis");
   dynamicFor(button_twelve, "remove", "dis");
   dynamicFor(button_fourteen, "add", "dis");
   dynamicFor(new_hexagon, "add", "white");
   okButton.classList.add("dis");
   activeStep("6", "purple");
}

for (let i = 0; i < 3; i++) {
   button_one[i].addEventListener("click", setScreenTwoTransfer, false);
   button_two[i].addEventListener("click", setScreenThreeTransfer, false);
   button_three[i].addEventListener("click", setScreenFourTransfer, false);
   button_four[i].addEventListener("click", setScreenFiveTransfer, false);
   button_five[i].addEventListener("click", setScreenSixTransfer, false);
   button_six[i].addEventListener("click", setScreenSevenTransfer, false);

   button_eight[i].addEventListener("click", setBackToScreenOne, false);
   button_nine[i].addEventListener("click", setBackToScreenTwo, false);
   button_ten[i].addEventListener("click", setBackToScreenThree, false);
   button_eleven[i].addEventListener("click", setBackToScreenFour, false);
   button_twelve[i].addEventListener("click", setBackToScreenFive, false);
   button_thirteen[i].addEventListener("click", setBackToScreenSix, false);
}

setFocusElement(monto, "2px", "16px", "transfer");
setFocusElementSel(transCtaReceptora, "140px", "156px", "transfer", "select");
setFocusElementSel(transTipoTarjeta, "212px", "227px", "transfer");

if (disableAction) {
   actionFocus(monto, "2px", "transfer");
   actionFocusSel(idPay, "212px", "transfer", "select");
   idPay.style.pointerEvents = "none";
} else {
   idPay.style.pointerEvents = "auto";
}
