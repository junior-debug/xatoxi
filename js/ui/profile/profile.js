const imgProfile = document.getElementsByClassName("imageCamera");
const modal = document.getElementById("modal");

const genero = document.getElementById("genero");
const estadoCivil = document.getElementById("estadoCivil");
const Profesion = document.getElementById("Profesion");
const paisNacimiento = document.getElementById("paisNacimiento");
const nacionalidad = document.getElementById("nacionalidad");
const documentType = document.getElementById("documentType");
const birthDate = document.getElementById("birthDate");
const dateDocument = document.getElementById("dateDocument");
const emissionDate = document.getElementById("emissionDate");
const city = document.getElementById("city");
const docIdentidad = document.getElementById("docIdentidad");

const firstStep = document.getElementsByClassName("firstStep");
const secondStep = document.getElementsByClassName("secondStep");
const third_Step = document.getElementsByClassName("third_Step");

const selectFile = document.getElementById("uploadDoc");
const docNum = document.getElementById("docNum");
const selectPhoto = document.getElementById("selectPhoto");

function cambiar(elem) {
   document.getElementById("info").innerHTML = elem.files[0].name;
}

function steps(step) {
   for (let i = 0; i < step.length; i++) {
      step[i].style.backgroundColor = "#61bb46";
   }
   return step;
}

const getparty = async (language, idlead) => {
   const formData = new FormData();
   formData.append("cond", "getparty");
   formData.append("language", language);
   formData.append("idlead", idlead);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.code == "0000") {
      if (genero) {
         birthDate.value = res.birthdate.slice(0, 10);
         for (let i = 0; i < genero.length; i++) {
            if (res.idgender === genero[i].value) {
               let a = document.createAttribute("selected");
               genero[i].setAttributeNode(a);
            }
         }
         for (let i = 0; i < estadoCivil.length; i++) {
            if (res.idcivilstate === estadoCivil[i].value) {
               let a = document.createAttribute("selected");
               estadoCivil[i].setAttributeNode(a);
            }
         }
         for (let i = 0; i < Profesion.length; i++) {
            if (res.idoccupation === Profesion[i].value) {
               let a = document.createAttribute("selected");
               Profesion[i].setAttributeNode(a);
            }
         }
      }
      if (state) {
         for (let i = 0; i < state.length; i++) {
            if (res.idstate === state[i].value) {
               let a = document.createAttribute("selected");
               state[i].setAttributeNode(a);
            }
         }
         for (let i = 0; i < city.length; i++) {
            if (res.idcity === city[i].value) {
               let a = document.createAttribute("selected");
               city[i].setAttributeNode(a);
            }
         }
      }
      if (paisNacimiento) {
         for (let i = 0; i < paisNacimiento.length; i++) {
            if (res.idcountrybirth === paisNacimiento[i].value) {
               let a = document.createAttribute("selected");
               paisNacimiento[i].setAttributeNode(a);
            }
         }
         for (let i = 0; i < nacionalidad.length; i++) {
            if (res.idcountrynationality === nacionalidad[i].value) {
               let a = document.createAttribute("selected");
               nacionalidad[i].setAttributeNode(a);
            }
         }
      }
      if (documentType) {
         for (let i = 0; i < documentType.length; i++) {
            if (res.diddocumenttype === documentType[i].value) {
               let a = document.createAttribute("selected");
               documentType[i].setAttributeNode(a);
            }
         }
      }
      if (dateDocument) {
         dateDocument.value = res.didexpirationdate.slice(0, 10);
      }
      if (emissionDate) {
         emissionDate.value = res.didemissiondate.slice(0, 10);
      }
      let firstLevel = false;
      let secondLevel = false;
      if (
         res.firstname != "" &&
         res.lastname != "" &&
         res.birthdate != "" &&
         res.idgender != "" &&
         res.idcivilstate != "" &&
         res.idoccupation != ""
      ) {
         firstLevel = true;
         steps(firstStep);
      }
      if (
         firstLevel == true &&
         res.address != "" &&
         res.idstate != "" &&
         res.idcity != "" &&
         res.zipcode != "" &&
         res.idcountrybirth != "" &&
         res.idcountrynationality != ""
      ) {
         secondLevel = true;
         steps(secondStep);
      }
      if (
         secondLevel == true &&
         res.diddocumenttype != "" &&
         res.diddocumentid != "" &&
         res.didemissiondate != "" &&
         res.didexpirationdate != "" &&
         res.didemissionplace != ""
      ) {
         steps(third_Step);
      }
   }

   return res;
};
getparty(mainLanguage, sesionID);

function showImgIfURLError(elem) {
   elem.src = "./img/icons/camera.png";
}
const validateUserLevel = async (srcTo) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "verificationlevel");
   formData.append("language", mainLanguage);
   formData.append("idlead", sesionID);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.code == "0000") {
      if(srcTo == "profile4"){
         if(res.verificationlevel >= 12){
            window.open("./profile4.php", "_self");
         }         
      }
      if(srcTo == "profile6"){
         if(res.verificationlevel >= 22){
            window.open("./profile6.php", "_self");
         }     
      }
   }
};
const toHexaTwo = document.getElementById("toHexaTwo");
toHexaTwo.addEventListener('click', validateUserLevel.bind(null, 'profile4'), false);

const toHexaThree = document.getElementById("toHexaThree");
toHexaThree.addEventListener('click', validateUserLevel.bind(null, 'profile6'), false);

async function photoUpload(urlSrc) {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "uploadFile");
   formData.append("docNum", "8");
   formData.append("uploadDoc", selectPhoto.files[0]);
   formData.append("urlTo", urlSrc);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      credentials: "same-origin",
      body: formData,
   });
   const res = await data.json();

   if (res.code === "0000" && res.message.indexOf("OK") != -1) {
      showSuccessMessage(res.message, urlSrc, true);
   }
   if (res.code === "5000") {
      showAlertMessage(res.message, urlSrc);
   }
}
if(selectPhoto){
   selectPhoto.addEventListener("change", function() {
      let urlSrc = '';
      let auxSrc = window.location.pathname.split("/");
      if(auxSrc[1] == 'xatoxi_web' || auxSrc[1] == 'app_web' ){
         urlSrc = auxSrc[2];
      }else{
         urlSrc = auxSrc[1];
      }
      photoUpload(urlSrc);
   });
}

if(selectFile){
   selectFile.addEventListener("change", function() {
      let urlSrc = '';
      let auxSrc = window.location.pathname.split("/");
      if(auxSrc[1] == 'xatoxi_web' || auxSrc[1] == 'app_web' ){
         urlSrc = auxSrc[2];
      }else{
         urlSrc = auxSrc[1];
      }
      documentUpload(urlSrc);
   });
}

//-------------Perfil Modal for Image Perfil-------------//
function showModal() {
   modal.classList.remove('dis');
}
function closeModal() {
   modal.classList.add('dis');
}
//-------------Perfil Modal for Image Perfil-------------//
