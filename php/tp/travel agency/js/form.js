function checkInputName(valName) {
    var email = document.getElementById("email").value;
    var nom = valName;

    checkValidForm(nom, email);
}

function checkInputEmail(valName) {
    var email = valName;
    var nom = document.getElementById("name").value;

    checkValidForm(nom, email);
}

function validForm() {
    var email = document.getElementById("email").value;
    if (email.indexOf('@') != -1) {
        alert("Votre demande a bien été prise en compte, vous serez contacté très prochainement");
        document.getElementById("contact-us").innerHTML = "Déjà contacté";
        document.getElementById("contact-us").className = "form-done";
        document.getElementById("name").disabled = true;
        document.getElementById("email").disabled = true;
        document.getElementById("button-ok").disabled = true;
    } else {
        alert("Le format de l'adresse mail n'est pas correcte");
    }
    resetForm();
}

function resetForm() {
    document.getElementById("email").value = "";
    document.getElementById("name").value = "";
}

function checkValidForm(nom, email) {
    if (nom != "" && email != "") {
        document.getElementById("button-ok").disabled = false;
    } else {
        document.getElementById("button-ok").disabled = true;
    }
}