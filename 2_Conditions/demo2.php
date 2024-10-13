<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les conditions en PHP</title>
</head>
<body>
    
    <?php
        /*

        // L'utilisation de l'instruction switch/case
        $jour = 17; // Initialisation de la variable
        switch ($jour) {
            case '1':
                echo "C'est lundi";
                break;
            case '2':
                echo "C'est Mardi";
                break; 
            case '3':
                echo "C'est Mercredi";
                break; 
            case '4':
                echo "C'est Jeudi";
                break;
            case '5':
                echo "C'est Vendredi";
                break;
            case '6':
                echo "C'est Samedi";
                break;
            case '7':
                echo "C'est Dimanche";
                break;
            default:
            echo "Désolé ce nombre ne correspond pas aux 7 jours de la semaine";
            break;                         
        }

       */ 

       // Depuis PHP 8 on n'a introduit l'expression match, plus concise et plus puissante que le switch/case
       $result = match('21') {
        '1' => "C'est lundi",
        '2' => "C'est Mardi",
        '3' => "C'est Mercredi",
        '4' => "C'est Jeudi",
        '5' => "C'est Vendredi",
        '6' => "C'est Samedi",
        '7' => "C'est Dimanche",
        default => "Désolé ce nombre ne correspond pas aux 7 jours de la semaine",
       };
       echo "<p> $result </p>";

    ?>


</body>
</html>