const modalQchat = document.getElementById("modalQchat");
const closeModal = document.getElementById("closeModal");
const modalChat = document.getElementById("modalChat");
const modalContact = document.getElementById("modalContact");

functionQchat = () => {
   const plus = document.getElementById("plus");
   modalQchat.classList.remove("dis");
   closeModal.addEventListener("click", () => {
      modalQchat.classList.add("dis");
   });
};

openAlias = () => {
   modalChat.classList.remove("dis");
   modalQchat.classList.add("dis");
};

openContact = () => {
   modalContact.classList.remove("dis");
   modalQchat.classList.add("dis");
};

functionClose = () => {
   modalChat.classList.add("dis");
   modalContact.classList.add("dis");
   modalQchat.classList.remove("dis");
};
