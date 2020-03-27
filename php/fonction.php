<?php

$phrase = 'Bonjour je suis une phrase';
$nombreDeCaractere = strlen($phrase);

echo 'il y a ' . $nombreDeCaractere . ' caractere dans cette phrase';

echo str_shuffle($phrase);

date_default_timezone_set('Europe/Paris');
echo date('d');

