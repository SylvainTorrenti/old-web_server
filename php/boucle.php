<?php

$repetition = 0;

while ($repetition < 10) {

    echo '<p>Je ne dois pas copier sur mon voisin (while) </p>';
    $repetition++;
}

for ($repetition = 0; $repetition < 10; $repetition++) {
    echo '<p>Je ne dois pas copier sur mon voisin (for) </p>';
}
