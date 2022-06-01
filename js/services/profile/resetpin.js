const btnReset = document.getElementById("btnReset");
const btnCancel = document.getElementById("btnCancel");
const inputCorreo = document.getElementById("correo");

const resetpine = async () => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "resetpine");
   formData.append("language", mainLanguage);
   formData.append("correo", inputCorreo.value);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.code == "") {
      loaderClose();
      window.open("./msgAlert.php", "_self");
   } else if (res.code == "0000") {
      loaderClose();
      window.open("./msgSuccess.php", "_self");
   }
};
btnReset.addEventListener("click", resetpine, false);

function backMain() {
   window.open("./watchman.php", "_self");
}
btnCancel.addEventListener("click", backMain, false);
