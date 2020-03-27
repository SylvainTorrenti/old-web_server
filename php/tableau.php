<?php
$noms = array('mathieu', 'marie', 'robert');
$personne = array('nom' => 'nebra', 'prenom' => 'mathieu', 'age' => 99);
print_r($personne);

foreach ($noms as $nom){
    echo '<p>' . $nom . '<p>';
}
