const modal = document.getElementById("modal");
const closeModal = document.getElementById("closeModal");
const modalheader = document.getElementsByClassName("modal-header");

const changeButton = document.getElementById("changeButton");
const formpin = document.getElementById("formpin");
const formChangePin = document.getElementById("formChangePin");

const inputEmailPin = document.getElementById("inputEmailPin");
const inputEmailPin1 = document.getElementById("inputEmailPin1");

const btnOK = document.getElementsByClassName("btnOK");
const btnModalPin = document.getElementsByClassName("btnModalPin");

const okPinActual = document.getElementById("okPinActual");
const okPinNew = document.getElementById("okPinNew");

const deletePin = document.getElementById("deletePin");

const secretPin = document.getElementById("secretPin");
const secretPin1 = document.getElementById("secretPin1");
const newPin = document.getElementById("newPin");

const deletePurpleImg = "./img/icons/deletePurple.png";
const deleteYellowImg = "./img/icons/deleteYellow.png";
const deleteBlueImg = "./img/icons/deleteBlue.png";
const deleteOrangeImg = "./img/icons/deleteOrange.png";
const deleteRedImg = "./img/icons/deleteRed.png";

function removeColors(elem, colorMinus) {
  let colors = ["blue", "yellow", "purple", "orange", "red"];
  for (let i = 0; i < elem.length; i++) {
    colors.forEach((item, index) => {
      elem[i].classList.remove(item);
    });
    elem[i].classList.add(colorMinus);
  }
}

function clickBlue() {
  clearFields();
  modal.classList.remove("dis");
  modal.classList.add("modalLockScren");
  secretPin.classList.remove("dis");
  deletePin.src = deleteBlueImg;
  removeColors(modalheader, "blue");
  removeColors(btnOK, "blue");
  removeColors(btnModalPin, "blue");
}

function clickPurple() {
  clearFields();
  modal.classList.remove("dis");
  modal.classList.add("modalLockScren");
  secretPin.classList.remove("dis");
  deletePin.src = deletePurpleImg;
  removeColors(modalheader, "purple");
  removeColors(btnOK, "purple");
  removeColors(btnModalPin, "purple");
}

function clickYellow() {
  clearFields();
  modal.classList.remove("dis");
  modal.classList.add("modalLockScren");
  secretPin.classList.remove("dis");
  deletePin.src = deleteYellowImg;
  removeColors(modalheader, "yellow");
  removeColors(btnOK, "yellow");
  removeColors(btnModalPin, "yellow");
}

function clickRed() {
  clearFields();
  modal.classList.remove("dis");
  modal.classList.add("modalLockScren");
  secretPin.classList.remove("dis");
  deletePin.src = deleteRedImg;
  removeColors(modalheader, "red");
  removeColors(btnOK, "red");
  removeColors(btnModalPin, "red");
}

function clickOrange() {
  clearFields();
  modal.classList.remove("dis");
  modal.classList.add("modalLockScren");
  secretPin.classList.remove("dis");
  deletePin.src = deleteOrangeImg;
  removeColors(modalheader, "orange");
  removeColors(btnOK, "orange");
  removeColors(btnModalPin, "orange");
}

if (level == "0") {
  document
    .getElementById("buttonpinfintech")
    .addEventListener("click", clickPurple, false);
  document
    .getElementById("buttonpinwallet")
    .addEventListener("click", clickBlue, false);
  document
    .getElementById("buttonpinprofile")
    .addEventListener("click", clickYellow, false);
  document
    .getElementById("buttonpinplay")
    .addEventListener("click", clickRed, false);
  document
    .getElementById("buttonpinchat")
    .addEventListener("click", clickOrange, false);
}

function changeSet() {
  formpin.classList.add("dis");
  formChangePin.classList.remove("dis");
  secretPin.classList.add("dis");
  secretPin1.classList.remove("dis");
}

let focusInput;

function setFocusInput() {
  let inputField;
  if (!secretPin.classList.contains("dis")) {
    inputField = secretPin;
  }
  if (!secretPin1.classList.contains("dis")) {
    inputField = secretPin1;
  }
  if (!newPin.classList.contains("dis")) {
    inputField = newPin;
  }
  return inputField;
}
function phoneBtn(number) {
  focusInput = setFocusInput();
  if (focusInput.value.length < 4) {
    focusInput.value = focusInput.value + number;
  }
}
function setNewPin() {
  secretPin1.classList.add("dis");
  newPin.classList.remove("dis");

  okPinActual.classList.add("dis");
  okPinNew.classList.add("dis");

  document.getElementById("formSetNewPin").submit();
}
function closeModalPin() {
  modal.classList.remove("pinactive");
  formpin.classList.remove("dis");
  formChangePin.classList.add("dis");

  newPin.classList.add("dis");

  clearFields();
  location.href = "./index.php";
}
function clearNumber() {
  focusInput = setFocusInput();
  focusInput.value = "";
}
function clearFields() {
  if (!emailUserPin) {
    inputEmailPin.value = "";
    inputEmailPin1.value = "";
  } else {
    inputEmailPin.value = emailUserPin;
    inputEmailPin1.value = emailUserPin;
  }
  secretPin.value = "";
  secretPin1.value = "";
  newPin.value = "";
}
function setPinActual() {
  secretPin1.classList.add("dis");
  newPin.classList.remove("dis");

  okPinActual.classList.add("dis");
  okPinNew.classList.remove("dis");
}

let inputFocus = false;
function inputFocusPin(status) {
  inputFocus = status;
}

document.onkeydown = function (evt) {
  evt = evt || window.event;
  if (inputFocus === false) {
    if (!modal.classList.contains("dis")) {
      switch (evt.key) {
        case "1":
          phoneBtn(evt.key);
          break;
        case "2":
          phoneBtn(evt.key);
          break;
        case "3":
          phoneBtn(evt.key);
          break;
        case "4":
          phoneBtn(evt.key);
          break;
        case "5":
          phoneBtn(evt.key);
          break;
        case "6":
          phoneBtn(evt.key);
          break;
        case "7":
          phoneBtn(evt.key);
          break;
        case "8":
          phoneBtn(evt.key);
          break;
        case "9":
          phoneBtn(evt.key);
          break;
        case "0":
          phoneBtn(evt.key);
          break;
        case "Backspace":
          clearNumber();
          break;
        case "Enter":
          formpin.submit();
          break;
      }
    }
  }
};
