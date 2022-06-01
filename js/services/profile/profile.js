const cities = document.getElementById("city");
const state = document.getElementById("state");
const issuancePlace = document.getElementById("issuancePlace");

const getstatecityl = async (language, idlead, idstate) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "getstatecityl");
   formData.append("language", language);
   formData.append("idlead", idlead);
   formData.append("idstate", idstate);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.list) {
      clearOptions("cities");
      res.list.forEach((e) => {
         var opt = document.createElement("option");
         opt.value = e.id;
         opt.innerHTML = e.name;
         cities.add(opt);
      });
   }
   loaderClose();
   return res;
};

function getStateCityList() {
   let idstate = state.options[state.selectedIndex].id;
   getstatecityl(mainLanguage, sesionID, idstate);
}
if (state) {
   state.addEventListener("change", getStateCityList, false);
}

function clearOptions(targetId) {
   var options = document.querySelectorAll("#" + targetId + " option");
   options.forEach((o) => {
      if (o.value != 0) {
         o.remove();
      }
   });
}

const profesion = document.getElementById("Profesion");
function setToggleProfesion() {
   selectDocument.classList.toggle("selectFile");
   selectDocument.classList.remove("selectFileNone");
}
if (profesion) {
   profesion.addEventListener("click", setToggleProfesion, false);
}

const nameField = document.getElementById("name");
const secondNameField = document.getElementById("segundo_nombre");
const lastNameField = document.getElementById("apellido");
const secondLastNameField = document.getElementById("segundo_apellido");
const direccionField = document.getElementById("Direccion");
const postalField = document.getElementById("postal");
const alias = document.getElementById("alias");
const phone = document.getElementById("telf");
const email = document.getElementById("email");

setFocusElement(nameField, "2px", "16px", "profile2");
setFocusElement(secondNameField, "57px", "68px", "profile2");
setFocusElement(lastNameField, "114px", "126px", "profile2");
setFocusElement(secondLastNameField, "170px", "182px", "profile2");
setFocusElement(direccionField, "2px", "12px", "profile4");
setFocusElement(postalField, "170px", "182px", "profile4");
setFocusElement(docIdentidad, "57px", "68px", "profile6");
setFocusElementSel(genero, "-14px", "2px", "profile3", "select");
setFocusElementSel(estadoCivil, "-14px", "2px", "profile3", "select");
setFocusElementSel(Profesion, "-14px", "2px", "profile3", "select");
setFocusElement(state, "56px", "72px", "profile4");
setFocusElement(city, "114px", "126px", "profile4");
setFocusElement(paisNacimiento, "12px", "2px", "profile5");
setFocusElement(nacionalidad, "60px", "73px", "profile5");
setFocusElementSel(documentType, "1px", "14px", "profile5", "select");
setFocusElement(issuancePlace, "-4px", "12px", "profile5");

const servicioDemostrado = document.getElementById("servicioDemostrado");
const labelSubir = document.getElementById("labelSubir");
if (labelSubir) {
   labelSubir.classList.add("dis");
   if (servicioDemostrado) {
      servicioDemostrado.addEventListener("change", (event) => {
         if (event.target.value != "-1") {
            servicioDemostrado.classList.add("docRequired");
            docNum.value = event.target.value;
            labelSubir.classList.remove("dis");
         } else {
            servicioDemostrado.classList.remove("docRequired");
            docNum.value = '';
            labelSubir.classList.add("dis");
         }
      });
   }
}
