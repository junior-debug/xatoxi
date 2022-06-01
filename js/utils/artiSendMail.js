const subject = document.getElementById("subject");
const message = document.getElementById("message");
const modalArti = document.getElementById("modalArtiSendMail");
const modalemailheader = document.getElementById("modalemailheader");

if (!modalemailheader.classList.contains("modal-header-" + colorModal)) {
   modalemailheader.classList.add("modal-header-" + colorModal);
}

let clearModal = () => {
   subject.value = "";
   message.value = "";
};

let closeModalEmail = () => {
   modalArti.classList.add("dis");
   clearModal();
};

let formEmailSumbit = () => {
   sendemail(mainLanguage, subject.value, message.value);
};

let artiEmail = () => {
   modalArti.classList.remove("dis");
   clearModal();
};

const sendemail = async (language, subject, body) => {
   const formData = new FormData();
   formData.append("cond", "sendemail");
   formData.append("language", language);
   formData.append("subject", subject);
   formData.append("header", "Mail from: " + userEmail + " (" + sesionID + ")");
   formData.append("body", body);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.code === "0000" && res.message === "OK") {
      showSuccessMessage(res.message, pageFromArti);
   }

   return res;
};
