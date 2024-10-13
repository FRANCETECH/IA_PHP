<?php

$age = 22;
if($age < 18) {
    echo "Accès non autorisé <br />";
}else {
    echo "Vous pouvez entrer <br />";
}

// Utilisation du ternaire: (condition) ? si vrai : si faux;

$age = 22;
echo ($age < 18) ? "Accès non autorisé" : "Vous pouvez entrer";