<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Mon Blog</title>
</head>

<body>
  <h1>Mon super blog !</h1>
  <?php
  $bdd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8', 'root', 'root');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_bon FROM billets ORDER BY id ');

  while ($donnees = $req->fetch()) {
  ?>

    <article class="article">
      <h3><?php echo htmlspecialchars($donnees['titre']); ?>
        <em> <?php echo htmlspecialchars($donnees['date_creation_bon']) ?> </em> </h3>
      <p>
        <?php echo htmlspecialchars($donnees['contenu']) ?><br>
        <em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
      
  <?php
  }
  ?>
</body>

</html>