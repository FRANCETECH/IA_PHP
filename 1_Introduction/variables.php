<?php

echo "<h1>Bienvenue sur notre Application PHP !</h1>";

/**
 *                              LES VARIABLES
 * Par Définition: Les variables en PHP comme dans les autres langages, est une sorte de conteneur dans lequel on peut sotcker des informations
 * de differents types(string, int, float, bool, ...
 * 
 * 
 *                                  REMARQUES
 * Une variable est toujours précédée d'un $ et se termine par ; => Exemple: $nom = "Dawan";
 * 
*/

// Les variables et type primitif:

$firsname = "Thoma"; // string
$integer = 15; // int
$float = 18.50; // float
$bool = true; // boolean (false). <=> true = 1; false = 0

// Affichons notre variable: Bonjour Thoma, c'est bientot la pause !

echo "<p>Bonjour ". $firsname .", c'est bientôt la pause</p>";

// Les opérateurs mathématiques =======================================================================================================
echo "<br>";

/**
 * Addition => +
 * Soutraction => -
 * Multiplication => *
 * Division => /
 * Division Entière (modulo) => %
 * Exposant => **
*/

// QUELQUES OPERATIONS SUR LES VARIABLES

echo "<p>2+3 =" . (2+3) . "</p>";

echo "<p>10%2 =" . (10%2) . "</p>";

echo "<p>3^2 =" . (3**2) . "</p>";

echo "Addition (+), Division (/) et concatenation (.)"; 
echo "<br>";


$note1 = 15;
$note2 = 18;
// Pour faire la moyenne
$moyenne = ($note1 + $note2) / 2;

$prenom = 'Jerôme';
$nom = 'Merking';
$note1 = 16;
$note2 = 18.5;
$moyenne = ($note1 + $note2) / 2;

//Première Methode
echo 'Bonjour ' . $prenom . ' ' . $nom . ' vous avez eu ' . (($note1 + $note2) / 2) . ' de moyenne'; 
//Deuxieme Méthode 
echo "<br>";

echo "Bonjour $prenom $nom vous avez eu $moyenne de moyenne";

// Les opérateurs logiques
echo "<br>";
echo "\n";

/**
 * non => ! 
 * égalité => ==
 * different => != (non égal)
 * superieur => >
 * inferieur => <
 * supérieur ou égal => >=
 * inférieur ou égal => <=
 * égalité => === // Compare la valeur et le type
*/

// On peut utiliser une fonction de gestion des variables, qui permet d'afficher les informations d'une variable: var

// var_dump("123" == 123); // On trouve true
var_dump("123" === 123); // On trouve false

