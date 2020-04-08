<?php 
 session_start();
 $_SESSION ['identifiant'];
 $_SESSION ['mdp'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <?php
   
try {
        $bdd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    header('location: list_contact.php');
    ?>
</body>
</html>