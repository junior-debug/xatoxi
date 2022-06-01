const bankCountry = document.getElementById("bankCountry");
const interBankCountry = document.getElementById("interBankCountry");

const bank = document.getElementById("bank");
const nameInterBank = document.getElementById("nameInterBank");

const getparty = async (language, idlead) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "getparty");
   formData.append("language", language);
   formData.append("idlead", idlead);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (bank) {
      for (let i = 0; i < bankCountry.length; i++) {
         if (res.idbankcountry === bankCountry[i].value) {
            let a = document.createAttribute("selected");
            bankCountry[i].setAttributeNode(a);
         }
      }
   }
   if (nameInterBank) {
      for (let i = 0; i < interBankCountry.length; i++) {
         if (res.intermidbankcountry === interBankCountry[i].value) {
            let a = document.createAttribute("selected");
            interBankCountry[i].setAttributeNode(a);
         }
      }
   }
   loaderClose();
   return res;
};

getparty(mainLanguage, sesionID);

function cambiar() {
   var pdrs = document.getElementById("selectFile").files[0].name;
   document.getElementById("info").innerHTML = pdrs;
}
const cuenta = document.getElementById("cuenta");
const direccion = document.getElementById("direccion");
const swift = document.getElementById("swift");
const routing = document.getElementById("routing");
const intermbankaddress = document.getElementById("intermbankaddress");
const intermbankaccount = document.getElementById("intermbankaccount");
const intermbankswift = document.getElementById("intermbankswift");

setFocusElement(bank, "62px", "74px", "bankInfo");
setFocusElement(cuenta, "122px", "136px", "bankInfo");
setFocusElement(direccion, "182px", "195px", "bankInfo");
setFocusElement(swift, "244px", "257px", "bankInfo");
setFocusElement(routing, "304px", "318px", "bankInfo");
setFocusElement(nameInterBank, "56px", "69px", "bankInfo2");
setFocusElement(intermbankaddress, "112px", "126px", "bankInfo2");
setFocusElement(intermbankaccount, "169px", "182px", "bankInfo2");
setFocusElement(intermbankswift, "226px", "239px", "bankInfo2");
setFocusElement(bankCountry, "2px", "16px", "bankInfo2");
setFocusElement(interBankCountry, "2px", "16px", "bankInfo2");

function sendStep1() {
   document.getElementById("formBankOne").submit();
}

const uploadDocument = document.getElementById("uploadDocument");

uploadDocument.addEventListener("change", transitionDocument, false);

function transitionDocument() {
   uploadDocument.style.width = "90%";
   const uploadIcon = document.getElementById("uploadIcon");
   uploadIcon.classList.remove("dis");
   const labelFile = document.getElementById("labelFile");
   labelFile.classList.remove("dis");
}