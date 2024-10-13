<?php

$email = "jehann@dawan.fr";
$int = 1;
$float = 5.6;
$boolean = true; // false

/*
Remarque: La fonction printf: affiche la chaine formatéé, tandisque la fonction sprintf: renvoie la chaine formatée sans l'afficher.
On utilise des spécificateurs de format (%s(chaine de caractères), %d(entier), %f (nombre à virgule flottante), etc.) pour indiquer ou et comment 
inserer les valeur.
*/
$contact = sprintf("Si vous souhaitez nous contacter, envoyez nous un mail à cette adresse : %s", $email);
echo "<p>" . $contact . "</p>";

//=================================================================================================================================
echo "<br>";

$animals = [
    'chien' => "aboie",
    'chat' => "miaule",
    'vache' => "beugle",
    'renard' => "jappe",
];

// Acceder à une valeur dans un tableau
echo $animals['chien'];

//Structure itérative => itéter => parcourir: foreach($array as $key => $value)
foreach($animals as $animal => $cri) {
    printf("<p>Un(e) <b>%s</b> <i>%s</i></p>", $animal, $cri);
}

// Savoir si le chien (clé) est présent dans le tableau animal
$key = array_search('chat', array_keys($animals));
if($key !== false) {
    echo "<p>La clé chat se trouve bien dans le tableau</p>";
}else {
    echo "<p>La clé chat ne se trouve pas dans le tableau</p>";
}

if(array_key_exists('chien', $animals)) {
    echo "<p>La clé chien se trouve bien dans le tableau</p>";
}

//=================================================================================================================================
echo "<br>";
$verif = true + 1;
var_dump($verif);

echo "<br>";

if(1) {
    echo "Je suis bien un boolean";
}

echo "<br>";

var_dump(true == 1);

var_dump(true == 0);

var_dump(false == 0);

var_dump(true === 1);
var_dump(false === 0);




