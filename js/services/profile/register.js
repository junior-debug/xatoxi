const emailInput = document.getElementById("email");
const prefijo = document.getElementById("prefijo");
const prefijoList = document.getElementById("prefijoList");
const pais = document.getElementById("pais");
const movil = document.getElementById("movil");

// let opt = document.createElement("option");
// opt.value = "-1";
// opt.innerHTML = "PREFIJO";
// prefijoList.add(opt);

const sesionReset = async () => {
   const formData = new FormData();
   formData.append("cond", "sesionReset");

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();
   return res;
};
sesionReset();

const getpartylead = async (language, email) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "getpartylead");
   formData.append("language", language);
   formData.append("email", email);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();
   if (res.code == "0000") {
      prefijo.value = res.areacode;
      actionFocus(prefijo, "190px", "register");
      pais.value = res.countrycode;
      actionFocusSel(pais, "125px", "register", "select");
      movil.value = res.phonenumber;
      actionFocus(movil, "256px", "transfer");
      loaderDesactive();
   } else {
      loaderDesactive();
   }
   return res;
};
function firstFill() {
   getpartylead(mainLanguage, emailInput.value);
}

const getcellphoneareacodel = async (language, idlead, countrycode) => {
   const formData = new FormData();
   formData.append("cond", "getcellphoneareacodel");
   formData.append("language", language);
   formData.append("idlead", idlead);
   formData.append("countrycode", countrycode);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   // if (res.list) {
   //    res.list.forEach((e) => {
   //       let opt = document.createElement("option");
   //       opt.value = e["code"];
   //       opt.innerHTML = e["code"];
   //       prefijoList.add(opt);
   //    });
   // }

   return res;
};

function changeOptionCountryCode() {
   let countryCode = pais.options[pais.selectedIndex].id;
   getcellphoneareacodel("es", "null", countryCode);
}
//pais.addEventListener("change", changeOptionCountryCode, false);

function changePrefixList() {
   prefijo.value = prefijoList.value;
}
//prefijoList.addEventListener("change", changePrefixList, false);

function clearOptions(targetId) {
   var options = document.querySelectorAll("#" + targetId + " option");
   options.forEach((o) => {
      if (o.value != 0) {
         o.remove();
      }
   });
}
