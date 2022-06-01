const validateProfile5 = async () => {
    loaderOpen();
    let idcountrybirth = document.getElementsByName("idcountrybirth")[0].value;
    let idcountrynationality = document.getElementsByName("idcountrynationality")[0].value;
 
    const formData = new FormData();
    formData.append("cond", "addressInfoV22");
    formData.append("language", mainLanguage);
    formData.append("idlead", sesionID);
    formData.append("idcountrynationality", idcountrynationality == "0" ? "" : idcountrynationality);
    formData.append("idcountrybirth", idcountrybirth == "0" ? "" : idcountrybirth);
 
    const data = await fetch("services/ajax.php", {
       method: "POST",
       body: formData,
    });
    const res = await data.json();
 
    if (res.code == "5000") {
       showAlertMessage(res.message, "profile5.php");
    } else if (res.code == "0000") {
        showSuccessMessage("OK", "profile6.php", true);
    }
 };