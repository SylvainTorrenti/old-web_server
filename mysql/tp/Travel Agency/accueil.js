//verification du remplissage des inputs
//désactivation du bouton d'envoi si champs vides
//griser le bouton d'envoi s'il est désactivé

let inputNom = document.getElementById("name");
let inputMail = document.getElementById("mail");
let envoiBouton = document.getElementById("envoi");


envoiBouton.disabled = true;
if (envoiBouton.disabled == true) {
  envoiBouton.style.backgroundColor = "grey";
} 

function nonVide() {
    if (inputNom.value.length >= 1 && inputMail.value.length >= 1) {
        envoiBouton.disabled = false;
        envoiBouton.style.backgroundColor = "#02b8dd";
    } else {
        envoiBouton.disabled = true;
        envoiBouton.style.backgroundColor = "grey";
    }
}

inputNom.addEventListener("keyup", nonVide);
inputMail.addEventListener("keyup", nonVide);


//ajout des astérisques rouges aux deux labels

let label = document.getElementsByTagName("label");

function add_asterix(label) {
  let asterix = document.createElement("span");
  let asterix_ = document.createTextNode("*");
  asterix.appendChild(asterix_);
  asterix.style.color = "red";
  label.appendChild(asterix);
}

add_asterix(label[0]);
add_asterix(label[1]);

//vérification que l'adresse mail comporte une @
//alerte mail non-valide
//message Demande envoyée
//remplacement "contactez-nous" en "déjà contacté" sur fond rouge

function verifArob() {
  let mailSaisi = document.getElementById("mail").value;
  let arob = mailSaisi.indexOf("@");
  if (arob == -1) {
    alert("Adresse mail non-valide !");
  } 
  /*else {
    alert("Demande envoyée. Nous vous contacterons dans les plus brefs délais.");
    let contact = document.getElementById("contactez");
    let alreadyContact = document.createTextNode("Déjà contacté !");
    contact.style.background = "red";
    contact.replaceChild(alreadyContact, contact.firstChild);
  } */
}

envoiBouton.addEventListener("click", verifArob);
