const btnStep2Next = document.getElementsByClassName("btnStep2Next");
const btnStep3Next = document.getElementsByClassName("btnStep3Next");
const btnStep1Prev = document.getElementsByClassName("btnStep1Prev");
const btnStep2Prev = document.getElementsByClassName("btnStep2Prev");
const hexagonTwo = document.getElementsByClassName("hexagonTwo");
const hexagonThree = document.getElementsByClassName("hexagonThree");
const hexagonSix = document.getElementsByClassName("hexagonSix");
const buttonSubmit = document.getElementById("buttonSubmit");
const callModal = document.getElementById("callModal");

const pageOne = document.getElementsByClassName("pageOne");
const pageTwo = document.getElementsByClassName("pageTwo");
const pageThree = document.getElementById("pageThree");

const new_hexagon = document.getElementsByClassName("new_hexagon");

const ventana = document.getElementsByClassName("ventana");
const img = document.getElementsByClassName("img");

const receptor = document.getElementById("receptor");
const payshape = document.getElementById("payshape");
const pago = document.getElementById("pago");
const reference = document.getElementsByClassName("reference");
const paymentCard = document.getElementsByClassName("paymentCard");
const typeCard = document.getElementsByClassName("typeCard");
const receivingAccount = document.getElementsByClassName("receivingAccount");
const date = document.getElementsByClassName("date");

changerSteps("2", "1", "purple");

function buttonOne() {
   let idpayshape = payshape.options[payshape.selectedIndex].id;

   buttonSubmit.classList.remove("dis");

   if (
      idpayshape == 5 ||
      (idpayshape == 3 && pago.options[pago.selectedIndex].id == 20)
   ) {
      dynamicFor(btnStep2Next, "add", "dis");
      dynamicFor(pageOne, "add", "izquierda");
      dynamicFor(pageOne, "add", "dis");
      dynamicFor(pageTwo, "remove", "dis");
      dynamicFor(hexagonTwo, "add", "dis");
      dynamicFor(hexagonThree, "add", "dis");
      dynamicFor(btnStep1Prev, "remove", "dis");
      dynamicFor(btnStep3Next, "remove", "dis");
      changerSteps("3", "2", "purple");
   } else {
      dynamicFor(pageOne, "add", "izquierda");
      dynamicFor(pageOne, "add", "dis");
      dynamicFor(pageTwo, "remove", "dis");
      dynamicFor(btnStep2Next, "add", "dis");
      dynamicFor(hexagonTwo, "remove", "dis");
      dynamicFor(hexagonThree, "add", "dis");
      dynamicFor(btnStep1Prev, "remove", "dis");
      dynamicFor(new_hexagon, "remove", "white");
      dynamicFor(window, "remove", "dis");
      changerSteps("2", "2", "purple");
   }
}

function setBackScreenThree() {
   dynamicFor(pageTwo, "remove", "izquierda");
   dynamicFor(pageTwo, "remove", "dis");
   dynamicFor(btnStep3Next, "remove", "dis");
   dynamicFor(hexagonSix, "add", "dis");
   dynamicFor(btnStep2Prev, "add", "dis");
   dynamicFor(btnStep1Prev, "remove", "dis");
   dynamicFor(new_hexagon, "add", "white");
   pageThree.classList.add("dis");
   activeStep("4", "purple");
}

function setScreenCreditCardInfo() {
   dynamicFor(pageTwo, "add", "izquierda");
   dynamicFor(pageTwo, "add", "dis");
   dynamicFor(hexagonSix, "remove", "dis");
   dynamicFor(btnStep3Next, "add", "dis");
   dynamicFor(btnStep1Prev, "add", "dis");
   dynamicFor(btnStep2Prev, "remove", "dis");
   dynamicFor(new_hexagon, "remove", "white");
   pageThree.classList.remove("dis");
   activeStep("6", "purple");
}

function setBackScreenOne() {
   dynamicFor(pageOne, "remove", "izquierda");
   dynamicFor(pageOne, "remove", "dis");
   dynamicFor(pageTwo, "add", "dis");
   dynamicFor(btnStep2Next, "remove", "dis");
   dynamicFor(hexagonTwo, "add", "dis");
   dynamicFor(hexagonThree, "remove", "dis");
   dynamicFor(btnStep1Prev, "add", "dis");
   dynamicFor(new_hexagon, "add", "white");
   dynamicFor(new_hexagon, "remove", "purpleButton");
   dynamicFor(btnStep3Next, "add", "dis");
   dynamicFor(reference, "add", "dis");
   dynamicFor(paymentCard, "add", "dis");
   dynamicFor(typeCard, "add", "dis");
   dynamicFor(receivingAccount, "add", "dis");
   contRefe.classList.add("dis");
   cntTda.classList.add("dis");
   cntReceptor.classList.add("dis");
   //contDate.classList.add("dis");
   //contValidation.classList.add("dis");
   changerSteps("2", "1", "purple");
}

for (let i = 0; i < btnStep1Prev.length; i++) {
   btnStep1Prev[i].addEventListener("click", setBackScreenOne, false);
}

for (let i = 0; i < btnStep3Next.length; i++) {
   btnStep3Next[i].addEventListener("click", setScreenCreditCardInfo, false);
}

for (let i = 0; i < btnStep2Prev.length; i++) {
   btnStep2Prev[i].addEventListener("click", setBackScreenThree, false);
}
