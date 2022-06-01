const validateProfile6 = async () => {
  loaderOpen();

  const formData = new FormData();
  formData.append("cond", "documentinfov31");
  formData.append("language", mainLanguage);
  formData.append("idlead", sesionID);
  formData.append(
    "documentidtype",
    document.getElementsByName("documentidtype")[0].value
  );
  formData.append(
    "documentid",
    document.getElementsByName("documentid")[0].value
  );
  formData.append(
    "didemissiondate",
    document.getElementsByName("didemissiondate")[0].value
  );
  formData.append(
    "didexpirationdate",
    document.getElementsByName("didexpirationdate")[0].value
  );
  formData.append(
    "didemissionplace",
    document.getElementsByName("didemissionplace")[0].value
  );

  const data = await fetch("services/ajax.php", {
    method: "POST",
    body: formData,
  });
  const res = await data.json();

  if (res.code == "5000") {
    showAlertMessage(res.message, "profile6.php");
  } else if (res.code == "0000") {
    showSuccessMessage("OK", "index.php", true);
  }
};
