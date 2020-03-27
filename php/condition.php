<?php

$age = 16;

if ($age < 12) {
    echo 'Salut gamin!';
} else {
    echo 'Bonjour cher adulte';
}

$adulte = true;

if ($adulte) {
?>
    <p>Tu es adulte</p>
<?php
}

switch ($age) {
    case 4:
        echo 'Tu as 4 ans';
        break;
    case 16:
        echo 'Tu es un peu plus agé, tu as 16 ans.';
        break;
    case 18:
        echo 'Tu es majeur';
        break;
}



?>