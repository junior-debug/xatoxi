const validateProfile2 = async () => {
   loaderOpen();
   let firstname = document.getElementById("name").value;
   let middlename = document.getElementsByName("middlename")[0].value;
   let lastname = document.getElementsByName("lastname")[0].value;
   let secondlastname = document.getElementsByName("secondlastname")[0].value;

   const formData = new FormData();
   formData.append("cond", "personalInfoV11");
   formData.append("language", mainLanguage);
   formData.append("idlead", sesionID);
   formData.append("firstname", firstname);
   formData.append("middlename", middlename);
   formData.append("lastname", lastname);
   formData.append("secondlastname", secondlastname);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.code == "5000") {
      showAlertMessage(res.message, "profile2.php");
   } else if (res.code == "0000") {
      window.location.href = "profile3.php";
   }
};
