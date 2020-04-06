<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrateur</title>
</head>

<body>
    <p>Espace administrateur</p>

    <form action="list_contact.php" method="POST">
        <p>
            <label for="id">Identifiant :</label>
            <br>
            <input type="text" name="id">
        </p>
        <p>
            <label for="mdp">Mot de passe :</label>
            <br>
            <input type="password" name="mdp">
        </p>

        <p>
            <input type="submit" value="Valider" />
        </p>



    </form>
</body>

</html>