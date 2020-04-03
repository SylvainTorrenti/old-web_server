<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commentaire</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Mon super blog</h1>
    <p><a href="index.php">Retour à la liste des billets</a></p>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_bon FROM billets WHERE id = ?');
    $req->execute(array($_GET['billet']));
    $donnees = $req->fetch();
    ?>
    <article class="article">
        <h3><?php echo htmlspecialchars($donnees['titre']); ?>
            <em> <?php echo htmlspecialchars($donnees['date_creation_bon']) ?> </em> </h3>
        <p>
            <?php echo htmlspecialchars($donnees['contenu']) ?><br>
            <em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
            <?php

            $req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_bon FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');
            $req->execute(array($_GET['billet']));

            while ($donnees = $req->fetch()) {
            ?>
                <p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> le <?php echo $donnees['date_commentaire_fr']; ?></p>
                <p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
            <?php
            }
            ?>

</body>

</html>