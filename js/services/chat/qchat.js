const addContact = document.getElementById("addChatContact");
const contactList = document.getElementById("contactList");

const putInChatList = async (idleadowner, newidlead) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "putInChatList");
   formData.append("idleadowner", idleadowner);
   formData.append("newidlead", newidlead);
   formData.append("idlead", sesionID);
   formData.append("language", mainLanguage);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res) {
      if (res.message == "OK") {
         window.open("./qchat.php", "_self");
      } else {
         loaderClose();
      }
   }
};

Array.from(document.getElementsByClassName("hexagon-in2")).forEach(
   (item, index) => {
      document.getElementsByClassName("hexagon-in2")[
         index
      ].style.backgroundImage = "url(" + item.getAttribute("data-img") + ")";
   }
);

const getChatListFull = async (id) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "getChatListFull");
   formData.append("id", id);
   formData.append("idlead", sesionID);
   formData.append("language", mainLanguage);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res) {
      console.log(res);
   }
};

const getToken = async (targetidlead) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "getToken");
   formData.append("targetidlead", targetidlead);
   formData.append("idlead", sesionID);
   formData.append("language", mainLanguage);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res) {
      console.log(res);
   }
};

function addContactToList() {
   putInChatList(sesionID, contactList.value);
}
addContact.addEventListener("click", addContactToList, false);

async function goChatScreen(targetId) {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "jumpMainChat");
   formData.append("targetidlead", targetId);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   if (res) {
      window.open("./qchatMsg.php", "_self");
   }
}
