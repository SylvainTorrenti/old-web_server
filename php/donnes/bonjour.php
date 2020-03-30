<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lien</title>
</head>

<body>
    <p>
        <?php if (isset($_GET['nom']) and isset($_GET['prenom']) and isset($_GET['repeter'])) 
        {
            $nbRepetition = (int) $_GET['repeter'];

            if($nbRepetition < 100)
            {
                for ($repetition = 0; $repetition <= $nbRepetition; $repetition++) 
                {
                    echo '<p>bonjour' . $_GET['nom'] . ' ' . $_GET['prenom'] . '</p>';
                }
            
            }   
        } else {
            echo 'Pas de nom ou prenom defini';
        }
        ?>
    </p>
</body>

</html>