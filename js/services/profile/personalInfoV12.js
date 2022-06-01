const validateProfile3 = async () => {
   loaderOpen();
   let birthdate = document.getElementsByName("birthdate")[0].value;
   let idgender = document.getElementsByName("idgender")[0].value;
   let idcivilstate = document.getElementsByName("idcivilstate")[0].value;
   let idoccupation = document.getElementsByName("idoccupation")[0].value;

   const formData = new FormData();
   formData.append("cond", "personalInfoV12");
   formData.append("language", mainLanguage);
   formData.append("idlead", sesionID);
   formData.append("birthdate", birthdate);

   formData.append("idcivilstate", idcivilstate == "-1" ? "" : idcivilstate);
   formData.append("idgender", idgender == "-1" ? "" : idgender);
   formData.append("idoccupation", idoccupation == "-1" ? "" : idoccupation);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.code == "5000") {
      showAlertMessage(res.message, "profile3.php");
   } else if (res.code == "0000") {
      showSuccessMessage("OK", "profile4.php", true);
   }
};
