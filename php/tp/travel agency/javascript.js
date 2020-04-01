let inputNom = document.getElementById("nom");
let inputMail = document.getElementById("mail");
let envoiBouton = document.getElementById("submit");
envoiBouton.disabled = true;
function nonVide() {
  if (inputNom.value != "" && inputMail.value != "") {
    envoiBouton.disabled = false;
  } else {
    envoiBouton.disabled = true;
  }
}

inputNom.addEventListener("keyup", nonVide);
inputMail.addEventListener("keyup", nonVide);

document.getElementById("span1").style.color = "red";
document.getElementById("span2").style.color = "red";

function verifMail() {
  if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(inputMail.value)) {
    alert("Adresse e-mail valide !");
    document.querySelector("h3").textContent = "Déjà contacté";
    document.querySelector("h3").style.background = "red";
  } else {
    alert("Adresse e-mail invalide !");
  }
}
