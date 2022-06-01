const button_one = document.getElementsByClassName("button_one");
const button_two = document.getElementsByClassName("button_two");
const button_three = document.getElementsByClassName("button_three");
const button_four = document.getElementsByClassName("button_four");

const pagina_one = document.getElementsByClassName("pagina_one");
const pagina_two = document.getElementsByClassName("pagina_two");
const pagina_three = document.getElementsByClassName("pagina_three");
const pagina_four = document.getElementsByClassName("pagina_four");
const pagina_five = document.getElementsByClassName("pagina_five");
const pagina_six = document.getElementsByClassName("pagina_six");
const pagina_seven = document.getElementsByClassName("pagina_seven");
const pagina_eight = document.getElementsByClassName("pagina_eight");
const pagina_nine = document.getElementsByClassName("pagina_nine");
const pagina_ten = document.getElementsByClassName("pagina_ten");
const pagina_eleven = document.getElementsByClassName("pagina_eleven");
const pagina_twelve = document.getElementsByClassName("pagina_twelve");
const pagina_thirteen = document.getElementsByClassName("pagina_thirteen");
const pagina_fourteen = document.getElementsByClassName("pagina_fourteen");

const first_step = document.getElementsByClassName("first_step");
const second_step = document.getElementsByClassName("second_step");

const new_hexagon = document.getElementsByClassName("new_hexagon");

changerSteps("2", "1", "purple");

function setBackScreenOne() {
   dynamicFor(pagina_one, "remove", "izquierda");
   dynamicFor(pagina_one, "remove", "dis");
   //------
   dynamicFor(pagina_two, "add", "dis");
   dynamicFor(pagina_three, "add", "dis");
   dynamicFor(pagina_four, "add", "dis");
   dynamicFor(pagina_five, "add", "dis");
   dynamicFor(pagina_six, "add", "dis");
   dynamicFor(pagina_seven, "add", "dis");
   dynamicFor(pagina_eight, "add", "dis");
   dynamicFor(pagina_nine, "add", "dis");
   dynamicFor(pagina_ten, "add", "dis");
   dynamicFor(pagina_eleven, "add", "dis");
   dynamicFor(pagina_twelve, "add", "dis");
   dynamicFor(pagina_thirteen, "add", "dis");
   dynamicFor(pagina_fourteen, "add", "dis");
   //------
   dynamicFor(button_one, "remove", "dis");
   dynamicFor(button_two, "add", "dis");
   dynamicFor(first_step, "remove", "first_step_background");
   dynamicFor(second_step, "remove", "second_step_background");
   dynamicFor(button_three, "remove", "dis");
   dynamicFor(button_four, "add", "dis");
   dynamicFor(new_hexagon, "add", "white");
   dynamicFor(new_hexagon, "remove", "purpleButton");
   activeStep("3", "purple");
}

for (let i = 0; i < button_four.length; i++) {
   button_four[i].addEventListener("click", setBackScreenOne, false);
}
