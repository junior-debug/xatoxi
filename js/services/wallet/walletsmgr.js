const icoWalDet = document.getElementsByClassName("icoWalDet")[0];
const balWalDet = document.getElementsByClassName("balWalDet")[0];
const modalAddWallet = document.getElementById("modalAddWallet");
const coinsList = document.getElementById("coinsList");
const addressWallet = document.getElementById("addressWallet");
const walletCoinName = document.getElementById("walletCoinName");
const textWalletCoinName = document.getElementById("textWalletCoinName");

let idWallet = false;
let finalWallet = null;
let cryptoWallet = true;
let walletList = [];
let cryptoList = [];

const getcryptol = async (language, idlead) => {
   const formData = new FormData();
   formData.append("cond", "getcryptol");
   formData.append("language", language);
   formData.append("idlead", idlead);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();

   cryptoList = res.list;
   cryptoWallet = false;

   return res;
};

const getcryptoidleadl = async (language, idlead) => {
   loaderOpen();
   const formData = new FormData();
   formData.append("cond", "getcryptoidleadl");
   formData.append("language", language);
   formData.append("idlead", idlead);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();
   if (idWallet !== false) {
      walletList = res.list;
      setWalletDetail(walletList[idWallet]);
   }
   loaderClose();
   return res;
};

const addwallet = async (language, idlead, idcrypto, address) => {
   const formData = new FormData();
   formData.append("cond", "addwallet");
   formData.append("language", language);
   formData.append("idlead", idlead);
   formData.append("idcrypto", idcrypto);
   formData.append("address", address);

   const data = await fetch("services/ajax.php", {
      method: "POST",
      body: formData,
   });
   const res = await data.json();
   if (res.message.indexOf("INTERNAL 0008") != -1) {
      showAlertMessage(res.message, "profile2.php");
   }
   if (res.code === "5000") {
      showAlertMessage(res.message, "walletsmgr.php");
   }
   if (res.code === "0000" && res.message === "OK") {
      showSuccessMessage(res.message, "walletsmgr.php");
   }
   loaderClose();
   return res;
};

getcryptol(mainLanguage, sesionID);

icoWalDet.innerHTML =
   '<img src="./img/icons/bitcoin.png" class="rotate imgToWhite">';

function walletDetail(wallet) {
   idWallet = wallet;
   getcryptoidleadl(mainLanguage, sesionID);
}

function setWalletDetail(wallet) {
   icoWalDet.innerHTML = "";
   balWalDet.innerHTML = "";

   let icoUrl = "";
   cryptoList.forEach((item) => {
      if (item.id == wallet.id) {
         icoUrl = item.url;
      }
   });

   icoWalDet.innerHTML = '<img src="' + icoUrl + '" class="rotate imgToWhite">';

   balWalDet.innerHTML = wallet.balance + " " + wallet.iso;
   idWallet = false;
   cryptoWallet = false;
}

function addWallet() {
   modalAddWallet.classList.toggle("modalactive");
}

function closeModalPin() {
   modalAddWallet.classList.remove("modalactive");
}

function addWalletSumbit() {
   loaderOpen();
   let idCrypto =
      coinsList.options[coinsList.selectedIndex].getAttribute("data-id");
   finalWallet = true;
   addwallet(mainLanguage, sesionID, idCrypto, addressWallet.value);
}

function inFlagBarWalletCoin() {
   walletCoinName.style.transition = "0.5s";
   walletCoinName.style.top = "-55px";
   textWalletCoinName.innerHTML = "";
   walletCoinName.className = "";
}

function outFlagBarWalletCoin(name, color) {
   textWalletCoinName.innerHTML = "";
   walletCoinName.className = "";
   walletCoinName.classList.add(color);
   walletCoinName.style.transition = "0.5s";
   walletCoinName.style.top = "35px";
   textWalletCoinName.innerHTML = name;

   setTimeout(() => {
      inFlagBarWalletCoin();
   }, 3500);
}
