const sendText = document.getElementById("sendText");
const inputText = document.getElementById("inputText");
const msg = document.getElementById("msg");
const backMainList = document.getElementById("backMainList");
const fullNameTarget = document.getElementById("txtTopTitle");
const historyChat = document.getElementById("historyChat");

const reloadHistory = document.getElementById("reloadHistory");

let listaMsg = null;
let firstLoad = true;
let theTimeOfRefresh = 0;

const sendMessage = async (pcontent, id, targetidlead) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "sendMessage");
   formData.append("pcontent", pcontent);
   formData.append("id", id);
   formData.append("targetidlead", targetidlead);
   formData.append("idlead", sesionID);
   formData.append("language", mainLanguage);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res) {
      loaderClose();
      firstLoad = false;
      //theTimeOfRefresh = setTimeout(refresMsgList, 5000);
   }
};

const decryptMessage = async (targetidlead, timestamp) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "decryptMessage");
   formData.append("targetidlead", targetidlead);
   formData.append("timestamp", timestamp);
   formData.append("idlead", sesionID);
   formData.append("language", mainLanguage);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   //if (res != "") {
   loaderClose();
   document.getElementById("txtMsgSelected").innerText = res;
   modalQchat.classList.remove("dis");
   return true;
   //firstLoad = false;
   //theTimeOfRefresh = setTimeout(refresMsgList, 5000);
   //}
};

const getContactPhoto = async (language, idlead) => {
   const formData = new FormData();
   formData.append("cond", "getphoto");
   formData.append("language", language);
   formData.append("idlead", idlead);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res) {
      document.getElementById("contactPhoto").style.backgroundImage =
         "url(" + res.url + ")";
   }
};
let lalista = "";
const getMessagesPartially = async (id, targetidlead) => {
   loaderOpen();

   const formData = new FormData();
   formData.append("cond", "getMessagesPartially");
   formData.append("id", id);
   formData.append("targetidlead", targetidlead);
   formData.append("idlead", sesionID);
   formData.append("language", mainLanguage);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   //if (res) {
   loaderClose();
   historyChat.innerHTML = "";
   addMsgFromList(res);
   //}
};

const getparty = async (language, idlead) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "getparty");
   formData.append("language", language);
   formData.append("idlead", idlead);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res.code === "0000") {
      loaderClose();
      getContactPhoto(language, idlead);
      fullNameTarget.innerText = res.firstname + " " + res.lastname;
      getMessagesPartially(sesionID, targetID);
   }
};

getparty(mainLanguage, targetID);

sendMsg = () => {
   const d = new Date();
   let year = d.getFullYear();
   let month = d.getMonth() < 10 ? "0" + d.getMonth() : d.getMonth();
   let day = d.getDay() < 10 ? "0" + d.getDay() : d.getDay();
   let hour = d.getHours() < 10 ? "0" + d.getHours() : d.getHours();
   let minutes = d.getMinutes() < 10 ? "0" + d.getMinutes() : d.getMinutes();
   let seconds = d.getSeconds();

   let timeStampMsg =
      year +
      "-" +
      month +
      "-" +
      day +
      " " +
      hour +
      ":" +
      minutes +
      ":" +
      seconds;
   //if (theTimeOfRefresh != 0) clearTimeout(theTimeOfRefresh);
   sendMessage(inputText.value, sesionID, targetID);
   addRow(
      inputText.value,
      timeStampMsg,
      "containerMsgSentRight",
      "msgSentRight"
   );
   inputText.value = "";
   refresMsgList();
};

function refresMsgList() {
   getMessagesPartially(sesionID, targetID);
}

function backContactList() {
   //clearTimeout(theTimeOfRefresh);
   window.open("./qchat.php", "_self");
}
backMainList.addEventListener("click", backContactList, false);

reloadHistory.addEventListener("click", refresMsgList, false);

let idAcum = 0;
function addRow(msgText, timeMsg, msgCSSScreen, bgcolorMsg) {
   let longMsg = "";
   if (msgText.length > 30) {
      longMsg = "txtFitMsg";
   }
   historyChat.insertAdjacentHTML(
      "beforeend",
      `<div id="message_${idAcum}" class="containerMsg">
            <div class="${msgCSSScreen}">
               <div class="msgSent ${bgcolorMsg}">
                  <p class="txtMsg ${longMsg}">${msgText}</p>
                  <p class="dateMsg">${timeMsg}</p>
               </div>
            </div>
         </div>`
   );
   idAcum++;
}

const deleteModal = document.getElementById("closeModal");
const modalQchat = document.getElementById("modalQchat");
const okImg = document.getElementById("okImg");

const msgSent = document.getElementsByClassName("msgSent");

function setMsgEvents() {
   Array.from(document.getElementsByClassName("msgSentLeft")).forEach(
      (item, index) => {
         let theTimestap = item.children[0].innerText;
         item.addEventListener(
            "click",
            decryptMessage.bind(null, targetID, theTimestap),
            false
         );
      }
   );
}

function closeModal() {
   modalQchat.classList.add("dis");
}
deleteModal.addEventListener("click", closeModal, false);
okImg.addEventListener("click", closeModal, false);

function addMsgFromList(list) {
   list.forEach((item, index) => {
      if (item[3] === sesionID) {
         addRow(item[2], item[0], "containerMsgSentRight", "msgSentRight");
      } else {
         addRow(item[2], item[0], "containerMsgSentLeft", "msgSentLeft");
      }
   });
   historyChat.scrollTo(0, historyChat.offsetHeight);
   setMsgEvents();
   //theTimeOfRefresh = setTimeout(refresMsgList, 5000);
}
