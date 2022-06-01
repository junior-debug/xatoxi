const buttonYes_first = document.getElementById("buttonYes_first");
const buttonYes_second = document.getElementById("buttonYes_second");
const form = document.getElementById("form");

function setFirstConfirtation() {
   const text = document.getElementById("text");
   const confirmation = document.getElementById("confirmation");
   text.classList.add("dis");
   confirmation.classList.remove("dis");
   buttonYes_first.classList.add("dis");
   buttonYes_second.classList.remove("dis");
}
buttonYes_first.addEventListener("click", setFirstConfirtation, false);

function setSecondConfirmation() {
   form.submit();
}
buttonYes_second.addEventListener("click", setSecondConfirmation, false);
