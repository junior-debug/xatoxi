// Helpers
//import { fileUploading } from './helpers/index.js';

document.addEventListener('DOMContentLoaded', () => {

    const pepin = document.getElementById("pepin");
    if (pepin) {
        pepin.addEventListener("click", function () {
            window.open("pepinChat.html", "Emergente", "resizable=no, menubar=no, width=400, height=650, scrollbars=no, toolbar=no, tittlebar=no, status=yes")
        });
    }

});