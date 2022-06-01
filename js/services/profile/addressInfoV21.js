const validateProfile4 = async () => {
   loaderOpen();
   let fulladdress = document.getElementsByName("fulladdress")[0].value;
   let idstate = document.getElementsByName("idstate")[0].value;
   let idcity = document.getElementsByName("idcity")[0].value;
   let zipcode = document.getElementsByName("zipcode")[0].value;

   const formData = new FormData();
   formData.append("cond", "addressInfoV21");
   formData.append("language", mainLanguage);
   formData.append("idlead", sesionID);
   formData.append("idstate", idstate == "0" ? "" : idstate);
   formData.append("idcity", idcity == "0" ? "" : idcity);
   formData.append("fulladdress", fulladdress);
   formData.append("zipcode", zipcode);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.code == "5000") {
      showAlertMessage(res.message, "profile4.php");
   } else if (res.code == "0000") {
      window.location.href = "profile5.php";
   }
};
