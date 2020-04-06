<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de contact</title>
</head>

<body>

    <p>
        <?php

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        if (strstr($_POST["mail"], "@")) {

            if (isset($_POST["name"]) and isset($_POST["mail"])) {

                $req_insert_contact = $bdd->prepare('INSERT INTO liste_contact(nom, mail, date_contact, contact) VALUES(?, ?, NOW(), 1)');
                $req_insert_contact->execute(array(
                    $_POST["name"], $_POST["mail"]
                ));


                echo "Mr/Mmme " . $_POST['name'] . ", votre demande a bien été pris en compte. Vous serez contacté à l'adresse : " . $_POST['mail'];

                echo "<p>Retour à l'accueil :" . "<a href='index.php?contact=oui#contact'>Par ici</a></p>";
            }
        } else {
            echo "Veuillez saisir vos coordonnées dans le <a href='index.php?contact=non#contact'>formulaire</a> ";
        }
        ?>
    </p>
</body>

</html>