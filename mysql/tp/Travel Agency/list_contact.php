<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Personnes à contacter</title>
    <style>
        table, tr, td {
           border: 1px solid black; 
        }
    </style>
</head>

<body>

    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    
    if (isset($_POST['id']) and isset($_POST['mdp'])) {

        $requete_connexion = $bdd->prepare('SELECT identifiant, mdp FROM connexion');
        $requete_connexion->execute(array('identifiant', 'mdp'));

        while ($data = $requete_connexion->fetch()) {
            if ($_POST['id'] == $data['identifiant'] and $_POST['mdp'] == $data['mdp']) {
                $connected = true;
            }
        }
    } else {
        $connected = false;
       
    }

    if (isset($connected) AND $connected==true){

        echo '<h1>Voici la liste des personnes à contacter :</h1>';
        
        $reponse_contact = $bdd->query('SELECT nom, mail, date_contact, contact FROM liste_contact');
        
        echo '<table>';
        while ($donnees = $reponse_contact->fetch()) {
            echo '<tr>' . '<td>' . $donnees['nom'] . '</td>' . '<td>' . $donnees['mail'] . '</td>' . '<td>' . $donnees['date_contact'] . '</td>' . '<td>' . $donnees['contact'] . '</td>' . '</tr>';
        }
        echo '</table>';
    
        $reponse_contact->closeCursor();

    } else {
        echo '<p>Identifiant et/ou mot de passe incorrect</p>';
    }

    ?>


</body>

</html>