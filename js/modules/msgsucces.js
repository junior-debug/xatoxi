//---------------------msgSuccess functions---------------------//
const successCont = document.getElementById("successCont");
const successMsg = document.getElementById("successMsg");

if (successMsg.textContent.length > 40) {
  successCont.classList.remove("div_cont");
  successCont.classList.add("divContScroll");
}
//---------------------msgSuccess functions---------------------//
