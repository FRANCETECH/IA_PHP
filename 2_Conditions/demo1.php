<?php

// Exemple 1

$nombre = 0;

if($nombre > 0) {  // Si
    echo "Le nombre est positif";
}elseif($nombre < 0) { // Si non Si
    echo "Le nombre est négatif";
}else {  // Si non
    echo "Le nombre est null";
}

// Exemple 2
 echo "<br>";

 $temperature = 20;

if($temperature >= 20) {
    echo "<p>Il fait chaud</p>";
}

$value = -5;

if ($value >=0 ) {
    echo "<p>La valeur est positive ou nulle</p>";
} else {
    echo "<p>La valeur est négative</p>";
}

if($value > 0) {
    echo "<p>La valeur est positive</p>";
}elseif($value < 0) {
    echo "<p>La valeur est négative</p>";
}else{
    echo "<p>La valeur est nulle</p>";
}

if($temperature <= 0) {
    echo "<p>Il fait très froid</p>";
}elseif ($temperature > 0 && $temperature <= 15) { // ]0; 15]
    echo "<p>Il fait froit</p>";
}elseif($temperature > 15 && $temperature <= 25) { // ]15; 25]
    echo "<p>Il fait chaud</p>";
} else {  // > 25
    echo "<p>Il fait très chaud</p>";
}


