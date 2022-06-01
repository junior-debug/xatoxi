async function signUpUpload() {
  loaderOpen();
  const formData = new FormData();
  formData.append("cond", "uploadFile");
  formData.append("docNum", 3);
  formData.append("uploadDoc", canvas.toDataURL("image/jpg"));

  const data = await fetch("services/ajax.php", {
    method: "POST",
    credentials: "same-origin",
    body: formData,
  });
  const res = await data.json();

  if (res.code === "0000" && res.message.indexOf("OK") != -1) {
    showSuccessMessage(res.message, res.urlSrc, true);
  }
  if (res.code === "5000") {
    showAlertMessage(res.message, res.urlSrc);
  }
}
