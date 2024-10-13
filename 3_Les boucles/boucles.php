<?php

/**
 * Incrementation
 * $i++ => $i = $i + 1
 * $i += 1 => $i = $i + 1
 * $i += 2 => $i = $i +2
*/



// La boucle while (tant que)

$nb = 1;
while($nb <= 98) {
    echo $nb;
    echo "<br>";
    $nb++;
}

// La boucle do...while (faire ... tant que)

$x = 1;

do{
    echo "Le nombre est: $x <br>";
    $x++;
}while($x <= 5);

//La boucle for (pour)
// Touver le produit de tous les nombres de 1 à 20 en utilisant la boucle for

$produit = 1;

for($i = 1; $i <= 5; $i++) {
    $produit = $produit*$i;
}

echo "Le produit de tous les nombres de 1 à 5 est: $produit"; // Le produit de tous les nombres de 1 à 5 est: 120 => 1*2*3*4*5 = 120

// La boucle foreach

echo "<br>";

$fruits = [
    "Pomme" => 2.5,
    "Banane" => 2.0,
    "Orange" => 3.2,
    "Kiwi" => 4.0,
    "Ananas" => 3.5
];

foreach($fruits as $fruit => $prix) {
    echo "Le prix de : ".$fruit. " est de ".$prix." euros. <br>";
}


