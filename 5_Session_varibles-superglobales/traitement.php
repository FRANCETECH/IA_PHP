<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement des données</title>
</head>
<body>

    <?php

        // Processus de connexion => Création de session
        $identifiant_valide = "parDawan";
        $motpasse_valide = "admin";

        // Verification
        if($_POST['identifiant'] == $identifiant_valide && $_POST['motpasse'] == $motpasse_valide) {
            session_start(); // Création d'une session ou demarrage d'une nouvelle
            
            $_SESSION['identifiant'] = $_POST['identifiant'];
            $_SESSION['motpasse'] = $_POST['motpasse'];

            echo '<br>';
            echo 'Bonjour, vous etes connectés avec l\'identifiant' .' '.$_SESSION['identifiant'];

            echo '<br>';

            echo '<a href="page_espace_membre.php"> Espace membre </a> <br>';

        }else {
            echo "Désolé, l'identifiant ou le mot de passe saisis n'est pas valide";
        }

    ?>
    
</body>
</html>