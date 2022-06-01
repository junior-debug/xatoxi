/* If exist any required document it will be have the following options */
const docListPen = document.getElementById("docListPen");
const reqDocBox = document.getElementById("requiredDocuments");
const penAction = document.getElementById("penAction");
const docAction = document.getElementById("docAction");
const docUpload = document.getElementById("uploadDoc");

const urlToRes = "debitCard.php";

//setSectionDocPend(docListPen, urlToRes);
if (docListPen) {
   docListPen.addEventListener(
      "change",
      showHideDocType.bind(null, docListPen),
      false
   );
   penAction.addEventListener("click", signWrite.bind(null, urlToRes), false);
   docUpload.addEventListener(
      "change",
      documentUpload.bind(null, urlToRes, null),
      false
   );
}
