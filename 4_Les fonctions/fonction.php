<?php

// On déclare une fonction avec le mot clé function()

function bonjour($nom) {
    echo 'Bonjour ' . $nom;   // Avec echo: on affiche
}
bonjour('Damien');

//============================================================================================================================================
echo "<br>";

//Le cas ou on stocke le résultat dans une variable
// Utilisation du return: il tourne le resultat lorsqu'une fonction est exécutée

function salutation ($nom)
{
    return 'salutation la ' . $nom . "<br>" ; // Avec return: on retourne un resultat
}
$Bonjour = salutation('FRANCE');
echo $Bonjour;

//======================================================================================================
echo "<br>";
// Attribution de valeur au parametre en amont

function hello($nom = 'Dawan') {
    return 'Bonjour ' . $nom . "<br>" ;
}
//echo hello();
$test = hello();
echo $test;

//======================================================================================================
echo "<br>";
//L'utilisation des conditions dans les fonctions

function saluer($nom = null)
{
    if($nom === null){
        return "Bonjour<br>";
    }
    return 'Bonjour ' . $nom . "<br>";
}

$demo = saluer();
//var_dump($demo);
echo $demo;
echo saluer('Jehann');

//======================================================================================================
echo "<br>";

// Le contexte exterieur dans les fonction

$nom = "France";

function merci($prenom = null, $nom = null) {
    if($prenom === null) {
        return "Bonjour<br>";
    }
    return 'Bonjour ' . $prenom . " " . $nom . "<br>";
}

echo merci('Dawan');
echo merci('Jehann', $nom);






