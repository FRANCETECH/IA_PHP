<?php

// Les tableaux permettent de sauvegarder une liste de valeurs, cette liste peut être indexée ou non.

$valeurs = [18, 20, "Dawan"]; // $valeurs = array(18, 20, "Dawan);
echo $valeurs[2];

echo "<br>";

// Appliquons les fonctions PHP sur les tabeaux

$noms = ["vincent", "Zaid", "Thoma", "Eva", "Mahe", "Stephane", "Redouane"];

//echo gettype($noms);
//var_dump($noms);
//print_r($noms);
//echo $noms[1];
array_push($noms, "Bruno");
print_r($noms);
var_dump($noms);

// Les tableaux associatifs et multidimensionnels: Tableaux indexés

$classe = [
    [
        'nom' => 'Vidoni',
        'prenom' => 'Valerie',
        'poste' => 'Responsable chargée de recrutement',
        'notes' => [16, 18, 15]
    ], [
        'nom' => 'Merking',
        'prenom' => 'Jerôme',
        'poste' => 'Directeur',
        'notes' => [16, 17, 15]
    ]
];

// Dans 'nom' => 'Vidoni': 'nom' est la clé, 'Vidoni' est la valeur

echo $classe[1]['notes'][1];
