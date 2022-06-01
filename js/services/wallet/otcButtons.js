const buyotclist = document.getElementsByClassName("buyotclist")[0];
const sellotclist = document.getElementsByClassName("sellotclist")[0];
const buysellotc = document.getElementsByClassName("buysellotc")[0];

function openOtcBuyList() {
   window.open("./otcbuylist.php", "_self");
}
buyotclist.addEventListener("click", openOtcBuyList, false);

function openOtcSellList() {
   window.open("./otcselllist.php", "_self");
}
sellotclist.addEventListener("click", openOtcSellList, false);

function openOtcBuySell() {
   window.open("./otc.php", "_self");
}
buysellotc.addEventListener("click", openOtcBuySell, false);
