<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body><?php
        if ($_POST['mot_de_passe']=='kangourou') {
            echo '<p>Voici les secret!</p>';
        } else {
            echo 'mauvais mot de passe';
        }
        ?>
</body>

</html>